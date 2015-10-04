<?php
require_once("../../../BL/BLempleador.php");
error_reporting(0); 

$idempleador = $_POST["idempleador"];
$ape_paterno = $_POST["ape_paterno"];
$ape_materno = $_POST["ape_materno"];
$nombres = $_POST["nombres"];
$tipo_doc = $_POST["tipo_doc"];
$nro_doc = $_POST["nro_doc"];
$estado_civil = $_POST["estado_civil"];
$sexo = $_POST["sexo"];
$fecha_nac = $_POST["fecha_nac"];
$hijos = $_POST["hijos"];
$nro_hijos = $_POST["nro_hijos"];
$mascota = $_POST["mascota"]; 
$idpais = $_POST["pais"]; 
$tipo = $_POST["tipo"]; 
$nombre = $_POST["nombre"]; 
$dpto = $_POST["dpto"]; 
$manzana = $_POST["manzana"]; 
$lote = $_POST["lote"]; 
$urbanizacion = $_POST["urbanizacion"]; 
$referencia = $_POST["referencia"]; 
$iddepartamento = $_POST["departamento_"]; 
$idprovincia = $_POST["provincia_"]; 
$iddistrito = $_POST["distrito_"]; 
$telefono = $_POST["telefono"]; 
$tipo_cel = $_POST["tipo_cel"]; 
$celular = $_POST["celular"]; 
$adultos = $_POST["adultos"]; 
$desc_adultos = $_POST["desc_adultos"]; 
$ninos = $_POST["ninos"]; 
$desc_ninos = $_POST["desc_ninos"]; 
$mascotas = $_POST["mascotas"]; 
$desc_mascotas = $_POST["desc_mascotas"]; 
$email = $_POST["email"]; 
$se_entero = $_POST["se_entero"]; 

actualizar_datos_empleador($idempleador, $ape_paterno, $ape_materno, $nombres, $tipo_doc, $nro_doc, 
						   $estado_civil, $sexo, $fecha_nac, $hijos, $nro_hijos, $mascota, $idpais, 
						   $tipo, $nombre, $dpto, $manzana, $lote, $urbanizacion, $referencia, 
						   $iddepartamento, $idprovincia, $iddistrito, $telefono, $tipo_cel, $celular, 
						   $adultos, $desc_adultos, $ninos, $desc_ninos, $mascotas, $desc_mascotas, 
						   $email, $se_entero);

?>