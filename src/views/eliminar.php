<?php 
$Correo="rodri.com";
require_once "../controllers/controler.php";
$CopiaController = new Controlador;
$CopiaController -> ControllerEliminar($Correo);
?>