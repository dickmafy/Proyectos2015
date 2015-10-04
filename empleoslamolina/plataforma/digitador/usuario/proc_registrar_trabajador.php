<?php
require_once("../../../BL/BLtrabajador.php");
error_reporting(0); 

$ape_paterno = $_POST["ape_paterno"];
$ape_materno = $_POST["ape_materno"];
$nombres = $_POST["nombres"];
$tipo_doc = $_POST["tipo_doc"];
$nro_doc = $_POST["nro_doc"];
$estado_civil = $_POST["estado_civil"];
$sexo = $_POST["sexo"];
$instruccion = $_POST["instruccion"];
$fecha_nac = $_POST["fecha_nac"]; 
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
$tipo_estudio = $_POST["tipo_estudio"]; 
$descripcion = $_POST["descripcion"]; 
$empresa = $_POST["empresa"]; 
$cargo = $_POST["cargo"]; 
$ama_casa = $_POST["ama_casa"]; 
$se_entero = $_POST["se_entero"]; 
$capacitacion1 = $_POST["capacitacion1"]; 
$capacitacion2 = $_POST["capacitacion2"];
$capacitacion3 = $_POST["capacitacion3"];
$capacitacion4 = $_POST["capacitacion4"];
$documento1 = $_FILES['documento1']['name'];
$documento2 = $_FILES['documento2']['name']; 
$documento3 = $_FILES['documento3']['name'];
$tipo_doc4 = $_POST["tipo_doc4"]; 
$documento4 = $_FILES['documento4']['name']; 
$documento5 = $_FILES['documento6']['name'];
$documento6 = $_FILES['documento7']['name'];
$documento7 = $_FILES['documento5']['name'];
$nombre_ref1 = $_POST["nombre_ref1"]; 
$tipo_doc_ref1 = $_POST["tipo_doc_ref1"]; 
$num_doc_ref1 = $_POST["num_doc_ref1"];
$direccion_ref1 = $_POST["direccion_ref1"]; 
$tipo_ref1 = $_POST["tipo_ref1"]; 
$act_ref1 = $_POST["act_ref1"];
$fechaini_ref1 = $_POST["fechaini_ref1"]; 
$fechafin_ref1 = $_POST["fechafin_ref1"]; 
$retiro_ref1 = $_POST["retiro_ref1"];
$telefono_ref1 = $_POST["telefono_ref1"];
$nombre_ref2 = $_POST["nombre_ref2"]; 
$tipo_doc_ref2 = $_POST["tipo_doc_ref2"]; 
$num_doc_ref2 = $_POST["num_doc_ref2"];
$direccion_ref2 = $_POST["direccion_ref2"]; 
$tipo_ref2 = $_POST["tipo_ref2"]; 
$act_ref2 = $_POST["act_ref2"];
$fechaini_ref2 = $_POST["fechaini_ref2"]; 
$fechafin_ref2 = $_POST["fechafin_ref2"]; 
$retiro_ref2 = $_POST["retiro_ref2"];
$telefono_ref2 = $_POST["telefono_ref2"];  

if($_FILES['documento1']['name']=='')
{
  $documento1 = ""; 
}
else
{
 $documento1 = $_FILES['documento1']['name']; 
 $documento1 = "d_".rand(100,999)."_".$documento1;
 $destino = "../../../trabajadores/".$documento1."";
 move_uploaded_file($_FILES['documento1']['tmp_name'],$destino);
}

if($_FILES['documento2']['name']=='')
{
  $documento2 = ""; 
}
else
{
 $documento2 = $_FILES['documento2']['name']; 
 $documento2 = "d_".rand(100,999)."_".$documento2;
 $destino = "../../../trabajadores/".$documento2."";
 move_uploaded_file($_FILES['documento2']['tmp_name'],$destino);
}

if($_FILES['documento3']['name']=='')
{
  $documento3 = ""; 
}
else
{
 $documento3 = $_FILES['documento3']['name']; 
 $documento3 = "d_".rand(100,999)."_".$documento3;
 $destino = "../../../trabajadores/".$documento3."";
 move_uploaded_file($_FILES['documento3']['tmp_name'],$destino);
}

if($_FILES['documento4']['name']=='')
{
  $documento4 = ""; 
}
else
{
 $documento4 = $_FILES['documento4']['name']; 
 $documento4 = "d_".rand(100,999)."_".$documento4;
 $destino = "../../../trabajadores/".$documento4."";
 move_uploaded_file($_FILES['documento4']['tmp_name'],$destino);
}

if($_FILES['documento5']['name']=='')
{
  $documento5 = ""; 
}
else
{
 $documento5 = $_FILES['documento5']['name']; 
 $documento5 = "d_".rand(100,999)."_".$documento5;
 $destino = "../../../trabajadores/".$documento5."";
 move_uploaded_file($_FILES['documento5']['tmp_name'],$destino);
}

if($_FILES['documento6']['name']=='')
{
  $documento6 = ""; 
}
else
{
 $documento6 = $_FILES['documento6']['name']; 
 $documento6 = "d_".rand(100,999)."_".$documento6;
 $destino = "../../../trabajadores/".$documento6."";
 move_uploaded_file($_FILES['documento6']['tmp_name'],$destino);
}

if($_FILES['documento7']['name']=='')
{
  $documento7 = ""; 
}
else
{
 $documento7 = $_FILES['documento7']['name']; 
 $documento7 = "d_".rand(100,999)."_".$documento7;
 $destino = "../../../trabajadores/".$documento7."";
 move_uploaded_file($_FILES['documento7']['tmp_name'],$destino);
}

registrar_trabajador($ape_paterno, $ape_materno, $nombres, $tipo_doc, $nro_doc, $estado_civil, $sexo, $instruccion, 
					 $fecha_nac, $idpais, $tipo, $nombre, $dpto, $manzana, $lote, $urbanizacion, $referencia, 
					 $iddepartamento, $idprovincia, $iddistrito, $telefono, $tipo_cel, $celular, $cama_afuera, 
					 $cama_adentro, $horas, $cocina, $limpieza, $ninera, $enfermeria, $mayordomo, $chofer, 
					 $todo_servicio, $sueldo, $descanso, $tipo_estudio, $descripcion, $empresa, $cargo, $ama_casa, 
					 $se_entero, $capacitacion1, $capacitacion2, $capacitacion3, $capacitacion4, $documento1, $documento2, 
					 $documento3, $tipo_doc4, $documento4, $documento5, $documento6, $documento7, 
					 $nombre_ref1, $tipo_doc_ref1, $num_doc_ref1, $direccion_ref1, $tipo_ref1, 
					 $act_ref1, $fechaini_ref1, $fechafin_ref1, $retiro_ref1, $telefono_ref1, $nombre_ref2, 
					 $tipo_doc_ref2, $num_doc_ref2, $direccion_ref2, $tipo_ref2, $act_ref2, $fechaini_ref2, 
					 $fechafin_ref2, $retiro_ref2, $telefono_ref2);

?>