<?php 
class ModeloTabla{

    public $conexion;

    public function __construct() {
        $this->conexion = new PDO("mysql:host=localhost;dbname=nivel3","root","");
    }
    
    public function LeerTabla(){
        $query = $this->conexion->prepare("SELECT * FROM practica10");
        $query->execute();
        $Tabla = $query->fetchAll();
        return $Tabla;
    }

    public function EditarTabla($Nombre, $Email, $Address, $Phone){
        $query = $this->conexion->prepare("UPDATE practica10
        SET Nombre=?, Email=?, Address=?, Phone=? where Email=?");
        $query->execute(array($Nombre, $Email, $Address, $Phone, $Email));
        return $query->rowCount()>0;
    }

    public function EliminarFila($Correo){
        $query = $this->conexion->prepare("DELETE FROM practica10
        where Email=:Correo");
        $query->bindParam(":Correo", $Correo);
        $query->execute();
        return $query->rowCount()>0;
    }
};
?>