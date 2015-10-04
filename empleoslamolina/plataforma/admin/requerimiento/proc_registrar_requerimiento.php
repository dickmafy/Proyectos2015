<?php
require_once("../../../BL/BLrequerimiento.php");
error_reporting(0); 

$cama_afuera = $_POST["cama_afuera"]; 
$cama_adentro = $_POST["cama_adentro"]; 
$horas = $_POST["horas"]; 
$cocina = $_POST["cocina"]; 
$limpieza = $_POST["limpieza"]; 
$ninera = $_POST["ninera"]; 
$enfermeria = $_POST["enfermeria"]; 
$mayordomo = $_POST["mayordomo"]; 
$chofer = $_POST["chofer"]; 
$todo_servicio = $_POST["todo_servicio"]; 
$sueldo = $_POST["sueldo"]; 
$descanso = $_POST["descanso"]; 
$otros = $_POST["otros"]; 
$idempleador = $_POST["idempleador"]; 

registrar_requerimiento($cama_afuera, $cama_adentro, $horas, $cocina, $limpieza, $ninera, $enfermeria, $mayordomo, 
						$chofer, $todo_servicio, $sueldo, $descanso, $otros, $idempleador);

?>