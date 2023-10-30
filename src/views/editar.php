<?php 
$Nombre = "Jaime";
$Email = "marco.con";
$Direccion = "San Fransisco";
$Telefono = "111 111 111";

require_once "../controllers/controler.php";
$CopiaController = new Controlador();
$CopiaController -> ControllerEditar($Nombre, $Email, $Direccion, $Telefono);
?>