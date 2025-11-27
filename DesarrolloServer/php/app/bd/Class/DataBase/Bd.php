<?php
namespace Class\baseDatos;
use mysqli;
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
    function getAllTables():array
    {
        $sentencia = "SHOW TABLES";
        $resultado = $this->conn->query($sentencia);
        $fila = $resultado->fetch_array();
        $tablas = [];
        while($fila){
            $tablas[] = $fila[0];
            $fila = $resultado->fetch_row();
        }
        return $tablas;

    }
    function getTableContent(string $table):array{
        $sentencia = "SELECT * FROM $table";
        $resultado = $this->conn->query($sentencia);
        $fila = $resultado->fetch_row();
        while($fila){
            $tablas[] = $fila[0];
            $fila = $resultado->fetch_row();
        }
        return $tablas;
    }



}