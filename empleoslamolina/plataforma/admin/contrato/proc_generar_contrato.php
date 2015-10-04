<?php
require_once("../../../BL/BLcontrato.php");
error_reporting(0); 

$idempleador = $_POST["idempleador"];
$idtrabajador = $_POST["idtrabajador"];
$idrequerimiento = $_POST["idrequerimiento"];
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
$fechaini = $_POST["fechaini"];
$fechafin = $_POST["fechafin"];  

registrar_contrato($idempleador, $idtrabajador, $idrequerimiento, $cama_afuera, $cama_adentro, $horas, $cocina, $limpieza, 
 				  $ninera, $enfermeria, $mayordomo, $chofer, $todo_servicio, $sueldo, $descanso, $otros, $fechaini, 
				  $fechafin);	  
?>