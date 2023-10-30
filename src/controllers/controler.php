<?php 
require_once "../models/modelo.php";
class Controlador{
    public function ControllerLeer(){

    }
    public function ControllerEditar($Nombre, $Email, $Direccion, $Telefono){
       $CopiaModelo = new ModeloTabla();
        if ($CopiaModelo->EditarTabla($Nombre,$Email,$Direccion,$Telefono)) {
            echo("La actualizacion fue exsitosa");
        }else{
            echo("Hubo un error revisar tu informacion");
        }
    }
    public function ControllerEliminar($Correo){
        $CopiaModelo = new ModeloTabla();
        if ($CopiaModelo->EliminarFila($Correo)) {
            echo("Eliminado de forma exitosa");
        }else{
            echo("Error al tratar de eliminar informacion");
        }
    }
}
?>