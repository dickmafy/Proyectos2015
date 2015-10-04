<?php
require_once("../../../BL/BLusuario.php");
error_reporting(0); 

$idusuario = $_POST["idusuario"];
$nomusuario = $_POST["usuario"];
$idperfil = $_POST["perfil"];
$password = $_POST["password"];
$perfil = $_POST["perfil"];
$nombre = $_POST["nombre"];
$ape_paterno = $_POST["ape_paterno"];
$ape_materno = $_POST["ape_materno"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];

actualizar_datos_usuario($idusuario, $nomusuario, $password, $idperfil, $nombre, $ape_paterno, $ape_materno, $telefono, 
						 $email, $direccion);
?>