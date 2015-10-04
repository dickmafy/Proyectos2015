<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_contrato()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDCONTRATO total
			   FROM CONTRATO 
			   ORDER BY CAST( IDCONTRATO AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_contrato($id_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, 
						  $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, 
						  $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO CONTRATO  
  			   VALUES ('".$id_."','".$idempleador_."','".$idtrabajador_."','".$idrequerimiento_."', '".$cama_afuera_."', 
					   '".$cama_adentro_."', '".$horas_."', '".$cocina_."', '".$limpieza_."', '".$ninera_."', 
					   '".$enfermeria_."', '".$mayordomo_."', '".$chofer_."', '".$todo_servicio_."', '".$sueldo_."', 
					   '".$descanso_."', '".$otros_."', '".$fechaini_."', '".$fechafin_."', '', '', '".date("d/m/Y")."', 
					   '1')";
  $utf8 = mysql_query("SET NAMES utf8"); 
  $ejecuta = mysql_query($consulta, $conexion);
  
  $consulta = "UPDATE REQUERIMIENTO SET IDESTADO = '3'
			   WHERE IDREQUERIMIENTO = '".$idrequerimiento_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_contrato($accion_, $idcontrato_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE CONTRATO SET IDESTADO = '".$accion_."'
			   WHERE IDCONTRATO = '".$idcontrato_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  
  if($accion_==1)
  {
    $consulta = "SELECT IDEMPLEADOR idempleador
			     FROM CONTRATO 
			     WHERE IDCONTRATO = '".$idcontrato_."'";			   			   
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);			   
    $idempleador = mysql_result($ejecuta, "0", "idempleador");
	
	$consulta = "UPDATE REQUERIMIENTO SET IDESTADO = '1'
			     WHERE IDEMPLEADOR = '".$idempleador."'";
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);
	
    $consulta = "UPDATE COMPROBANTE SET IDESTADO = '1'
			     WHERE IDCONTRATO = '".$idcontrato_."'";
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);
  }
  
  if($accion_==6)
  {
    $consulta = "SELECT IDEMPLEADOR idempleador
			     FROM CONTRATO 
			     WHERE IDCONTRATO = '".$idcontrato_."'";			   			   
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);			   
    $idempleador = mysql_result($ejecuta, "0", "idempleador");
	
	$consulta = "UPDATE REQUERIMIENTO SET IDESTADO = '1'
			     WHERE IDEMPLEADOR = '".$idempleador."'";
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);
  }
  
  if($accion_==7)
  {
    $consulta = "SELECT IDEMPLEADOR idempleador
			     FROM CONTRATO 
			     WHERE IDCONTRATO = '".$idcontrato_."'";			   			   
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);			   
    $idempleador = mysql_result($ejecuta, "0", "idempleador");
	
	$consulta = "UPDATE REQUERIMIENTO SET IDESTADO = '1'
			     WHERE IDEMPLEADOR = '".$idempleador."'";
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);
	
    $consulta = "UPDATE COMPROBANTE SET IDESTADO = '4'
			     WHERE IDCONTRATO = '".$idcontrato_."'";
    $utf8 = mysql_query("SET NAMES utf8");
    $ejecuta = mysql_query($consulta, $conexion);
  }
}

function actualiza_datos_contrato($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 
								  $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
								  $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
{
  $conexion = conectar_cms();
  
  $consulta = "UPDATE CONTRATO SET IDEMPLEADOR = '".$idempleador_."', IDTRABAJADOR = '".$idtrabajador_."', 
  									IDREQUERIMIENTO = '".$idrequerimiento_."', 
									CAMA_AFUERA = '".$cama_afuera_."', CAMA_ADENTRO = '".$cama_adentro_."', 
									HORAS = '".$horas_."', COCINA = '".$cocina_."', LIMPIEZA = '".$limpieza_."', 
									NINERA = '".$ninera_."', ENFERMERIA = '".$enfermeria_."', 
									MAYORDOMO = '".$mayordomo_."', CHOFER = '".$chofer_."', 
									TODO_SERVICIO = '".$todo_servicio_."', SUELDO = '".$sueldo_."', 
									DESCANSO = '".$descanso_."', OTROS = '".$otros_."', 
									FECHA_INICIO = '".$fechaini_."', FECHA_FIN = '".$fechafin_."' 
			   WHERE IDCONTRATO = ".$idcontrato_.""; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_datos_contrato($idcontrato_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDCONTRATO idcontrato, IDEMPLEADOR idempleador, IDTRABAJADOR idtrabajador, 
					  IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, OTROS otros, FECHA_INICIO fecha_inicio, FECHA_FIN fecha_fin, 
					  FECHAREGISTRO fecha_registro  
  			   FROM CONTRATO 
			   WHERE IDCONTRATO = '".$idcontrato_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($contratos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $contratos["idcontrato"]; 
	$arr_datos[1] = $contratos["idempleador"]; 
	$arr_datos[2] = $contratos["idtrabajador"]; 
	$arr_datos[3] = $contratos["idrequerimiento"]; 
	$arr_datos[4] = $contratos["cama_afuera"];						
	$arr_datos[5] = $contratos["cama_adentro"]; 
	$arr_datos[6] = $contratos["horas"]; 
	$arr_datos[7] = $contratos["cocina"]; 
	$arr_datos[8] = $contratos["limpieza"]; 
	$arr_datos[9] = $contratos["ninera"]; 
	$arr_datos[10] = $contratos["enfermeria"]; 
	$arr_datos[11] = $contratos["mayordomo"]; 
	$arr_datos[12] = $contratos["chofer"]; 
	$arr_datos[13] = $contratos["todo_servicio"]; 
	$arr_datos[14] = $contratos["sueldo"]; 
	$arr_datos[15] = $contratos["descanso"]; 
	$arr_datos[16] = $contratos["otros"]; 
	$arr_datos[17] = $contratos["fecha_inicio"]; 
	$arr_datos[18] = $contratos["fecha_fin"]; 
	$arr_datos[19] = $contratos["fecha_registro"];
  }

  return $arr_datos;
}

function devolver_contratos($desp_, $tamanopagina_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDCONTRATO idcontrato, IDEMPLEADOR idempleador, IDTRABAJADOR idtrabajador, 
					  IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, OTROS otros, FECHA_INICIO fecha_inicio, FECHA_FIN fecha_fin 
  			   FROM CONTRATO 
			   WHERE IDESTADO = '1'    
			   ORDER BY CAST(IDCONTRATO as unsigned) DESC LIMIT ".$desp_.",".$tamanopagina_; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($contratos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_contratos[$i][0] = $contratos["idcontrato"]; 
	$arr_contratos[$i][1] = $contratos["idempleador"]; 
	$arr_contratos[$i][2] = $contratos["idtrabajador"]; 
	$arr_contratos[$i][3] = $contratos["idrequerimiento"]; 
	$arr_contratos[$i][4] = $contratos["cama_afuera"];						
	$arr_contratos[$i][5] = $contratos["cama_adentro"]; 
	$arr_contratos[$i][6] = $contratos["horas"]; 
	$arr_contratos[$i][7] = $contratos["cocina"]; 
	$arr_contratos[$i][8] = $contratos["limpieza"]; 
	$arr_contratos[$i][9] = $contratos["ninera"]; 
	$arr_contratos[$i][10] = $contratos["enfermeria"]; 
	$arr_contratos[$i][11] = $contratos["mayordomo"]; 
	$arr_contratos[$i][12] = $contratos["chofer"]; 
	$arr_contratos[$i][13] = $contratos["todo_servicio"]; 
	$arr_contratos[$i][14] = $contratos["sueldo"]; 
	$arr_contratos[$i][15] = $contratos["descanso"]; 
	$arr_contratos[$i][16] = $contratos["otros"]; 
	$arr_contratos[$i][17] = $contratos["fecha_inicio"]; 
	$arr_contratos[$i][18] = $contratos["fecha_fin"]; 
	$i++;
  }

  return $arr_contratos;
}

?>