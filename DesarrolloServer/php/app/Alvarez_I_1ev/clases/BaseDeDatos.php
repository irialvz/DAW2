<?php
namespace clases;

use mysqli;
use mysqli_sql_exception;

class BaseDeDatos {
    private static ?BaseDeDatos $instance = null;
    private ?mysqli $connection;
    private string $hostname;
    private string $username;
    private string $password;
    private string $database;

    private function __construct(
    ) {
        $this->hostname = $_ENV["DB_HOST"];
        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->database = $_ENV["DB_NAME"];

        try {
            $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        } catch(mysqli_sql_exception $e) {
            $this->connection = null;
            die ("Error: ".$e->getMessage()."</br>");
        }
    }

    public static function getInstance(): BaseDeDatos {
        if(self::$instance ==null){
            self::$instance = new BaseDeDatos();
        }

        return self::$instance;
    }

    public function getConnection(): ?mysqli {
        return $this->connection;
    }

    private function verificarUsuarioDuplicado($nombre): bool {
        $sentencia = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
        $resultado = $this->connection->query($sentencia);
        $numero = $resultado->num_rows;
        return $numero > 1;
    }
    private function cifrarPassword($password){
        $firma = password_hash($password, PASSWORD_DEFAULT); //devuelve un churro de numeros
        return $firma;
    }
    public function registrarUsuario($nombre, $password) {
        $password = $this->cifrarPassword($password);
        $sentencia = "INSERT INTO usuarios (nombre, password) VALUES ('$nombre', '$password')";
        try {
            if ($this->verificarUsuarioDuplicado($nombre)) {
                return "El nombre de usuario $nombre ya existe";
            }else {
                $response = $this->connection->query($sentencia);
            }

            if($response){
                return true;
            } else {
                return "No se ha podido registrar al usuario";
            }
        } catch (mysqli_sql_exception $e) {
            $mensajeError = match ($e->getCode()) {
                1062 => "El usuario introducido ya existe",
                default => "Error insertando al usuario: $nombre, Error: ".$e->getMessage()
            };

            return $mensajeError;
        }
    }

    private function comprobarFirmaPassword($pass):bool{
        return password_verify($pass, $this->cifrarPassword($pass));
    }
    public function comprobarUsuario($nombre, $password) {
        $sentencia = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
        try {
            if ($this->comprobarFirmaPassword($password)){
                $response = $this->connection->query($sentencia);
            } else {
                return "No se ha podido comprobar al usuario, password incorrecta.";
            }
            if($response){
                return $response->fetch_assoc();
            } else {
                return "No se ha podido comprobar el usuario";
            }
        } catch (mysqli_sql_exception $e) {
            return "Error comprobando el usuario: $nombre, Error: ".$e->getMessage();
        }
    }
}
?>