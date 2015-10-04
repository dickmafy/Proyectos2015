<?php
require_once("../../../BL/BLusuario.php");
error_reporting(0); 

$nomusuario = $_POST["usuario"];
$password = $_POST["password"];
$perfil = $_POST["perfil"];
$nombre = $_POST["nombre"];
$ape_paterno = $_POST["ape_paterno"];
$ape_materno = $_POST["ape_materno"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$direccion = $_POST["direccion"]; 

registrar_usuario($nomusuario, $password, $perfil, $nombre, $ape_paterno, $ape_materno, $telefono, $email, $direccion);
?>