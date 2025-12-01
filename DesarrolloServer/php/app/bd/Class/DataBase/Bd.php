<?php
namespace Class\baseDatos;
use mysqli;
use mysqli_sql_exception;

class Bd
{
    private static ?Bd $instance=null;
    private mysqli $conn;

    private function __construct()
    {
        $this->conn = new mysqli($_ENV['HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DATABASE']);
    }
    public static function getInstance(): bd {
        if (self::$instance == null) {
            self::$instance = new bd();
        }
        return self::$instance;
    }
    function cerrarConexion(){
        mysqli_close($this->abrirConexion());
    }
    function getColumns(string $table){
        $sentencia = "SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name = '$table' LIMIT 0, 25;";
        $resultado = $this->conn->query($sentencia);
        $fila = $resultado->fetch_row();
        while($fila){
            $nombres[] = $fila;
            $fila = $resultado->fetch_row();
        }
        return $nombres;
    }
    function getAllTables():array
    {
        $sentencia = "SHOW TABLES";
        $resultado = $this->conn->query($sentencia);
        $fila = $resultado->fetch_array();
        $tablas = [];
        while($fila){
            $tablas[] = $fila;
            $fila = $resultado->fetch_row();
        }
        return $tablas;

    }
    function getTableContent(string $table):array{
        $sentencia = "SELECT * FROM $table";
        $resultado = $this->conn->query($sentencia);
        $fila = $resultado->fetch_row();
        while($fila){
            $tablas[] = $fila;
            $fila = $resultado->fetch_row();
        }
        return $tablas;
    }

    public function registrarse(string $username,string $password):bool{
        $sentencia = "INSERT INTO usuarios (nombre, password) values ('$username','$password')";
        try {
            $resultado = $this->conn->query($sentencia);
            if ($resultado) {
                return true;
            }
            return false;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }
    public function logearse(string $username, string $password):bool{
//        session_start();
        $sentencia = "SELECT * FROM usuarios WHERE nombre = '$username' AND password = '$password'";
        try {
            //query de tipo select devuelve el resultado de la consulta
            $resultado = $this->conn->query($sentencia);
            if ($resultado->num_rows > 0) {
//                $_SESSION['usuario'] = $username;
                return true;
            }
            return false;
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }


}