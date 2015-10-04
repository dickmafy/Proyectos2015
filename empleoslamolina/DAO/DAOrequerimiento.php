<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_requerimiento()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDREQUERIMIENTO total
			   FROM REQUERIMIENTO
			   ORDER BY CAST( IDREQUERIMIENTO AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_requerimiento($id_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, 
							   $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $idempleador_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO REQUERIMIENTO 
  			   VALUES ('".$id_."','".$cama_afuera_."', 
					   '".$cama_adentro_."', '".$horas_."', '".$cocina_."', '".$limpieza_."', '".$ninera_."', 
					   '".$enfermeria_."', '".$mayordomo_."', '".$chofer_."', '".$todo_servicio_."', '".$sueldo_."', 
					   '".$descanso_."', '".$otros_."', '".$idempleador_."', '".date("d/m/Y")."', '1')"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_requerimiento($accion_, $idrequerimiento_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE REQUERIMIENTO SET IDESTADO = '".$accion_."'
			   WHERE IDREQUERIMIENTO = '".$idrequerimiento_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_requerimiento($idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
									$ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, 
									$otros_, $idempleador_)
{
  $conexion = conectar_cms();
  
  $consulta = "UPDATE REQUERIMIENTO SET CAMA_AFUERA = '".$cama_afuera_."',CAMA_ADENTRO = '".$cama_adentro_."', 
									 HORAS = '".$horas_."', COCINA = '".$cocina_."', LIMPIEZA = '".$limpieza_."', 
									 NINERA = '".$ninera_."', ENFERMERIA = '".$enfermeria_."', 
									 MAYORDOMO = '".$mayordomo_."', CHOFER = '".$chofer_."', 
									 TODO_SERVICIO = '".$todo_servicio_."', SUELDO = '".$sueldo_."', 
									 DESCANSO = '".$descanso_."', OTROS = '".$otros_."', 
									 IDEMPLEADOR = '".$idempleador_."' 
			   WHERE IDREQUERIMIENTO = ".$idrequerimiento_.""; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_datos_requerimiento($idrequerimiento_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, OTROS otros, IDEMPLEADOR idempleador 
  			   FROM REQUERIMIENTO 
			   WHERE IDREQUERIMIENTO = '".$idrequerimiento_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($requerimientos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $requerimientos["idrequerimiento"]; 
	$arr_datos[1] = $requerimientos["cama_afuera"];						
	$arr_datos[2] = $requerimientos["cama_adentro"]; 
	$arr_datos[3] = $requerimientos["horas"]; 
	$arr_datos[4] = $requerimientos["cocina"]; 
	$arr_datos[5] = $requerimientos["limpieza"]; 
	$arr_datos[6] = $requerimientos["ninera"]; 
	$arr_datos[7] = $requerimientos["enfermeria"]; 
	$arr_datos[8] = $requerimientos["mayordomo"]; 
	$arr_datos[9] = $requerimientos["chofer"]; 
	$arr_datos[10] = $requerimientos["todo_servicio"]; 
	$arr_datos[11] = $requerimientos["sueldo"]; 
	$arr_datos[12] = $requerimientos["descanso"]; 
	$arr_datos[13] = $requerimientos["otros"]; 
	$arr_datos[14] = $requerimientos["idempleador"]; 
  }

  return $arr_datos;
}

function devolver_requerimientos($desp_, $tamanopagina_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, OTROS otros, IDEMPLEADOR idempleador    
  			   FROM REQUERIMIENTO  
			   WHERE IDESTADO = '1'    
			   ORDER BY CAST(IDREQUERIMIENTO as unsigned) DESC LIMIT ".$desp_.",".$tamanopagina_; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($requerimientos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  { 
	$arr_requerimientos[$i][0] = $requerimientos["idrequerimiento"]; 
	$arr_requerimientos[$i][1] = $requerimientos["cama_afuera"];						
	$arr_requerimientos[$i][2] = $requerimientos["cama_adentro"]; 
	$arr_requerimientos[$i][3] = $requerimientos["horas"]; 
	$arr_requerimientos[$i][4] = $requerimientos["cocina"]; 
	$arr_requerimientos[$i][5] = $requerimientos["limpieza"]; 
	$arr_requerimientos[$i][6] = $requerimientos["ninera"]; 
	$arr_requerimientos[$i][7] = $requerimientos["enfermeria"]; 
	$arr_requerimientos[$i][8] = $requerimientos["mayordomo"]; 
	$arr_requerimientos[$i][9] = $requerimientos["chofer"]; 
	$arr_requerimientos[$i][10] = $requerimientos["todo_servicio"]; 
	$arr_requerimientos[$i][11] = $requerimientos["sueldo"]; 
	$arr_requerimientos[$i][12] = $requerimientos["descanso"]; 
	$arr_requerimientos[$i][13] = $requerimientos["otros"]; 
	$arr_requerimientos[$i][14] = $requerimientos["idempleador"];
	$i++;
  }

  return $arr_requerimientos;
}

?>