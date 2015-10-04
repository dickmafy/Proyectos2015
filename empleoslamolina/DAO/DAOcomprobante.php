<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_comprobante()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDCOMPROBANTE total
			   FROM COMPROBANTE 
			   ORDER BY CAST( IDCOMPROBANTE AS unsigned ) DESC 
			   LIMIT 1 ";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_comprobante($id_, $idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $monto_, $sunat_)
{
  $conexion = conectar_cms();
  if($sunat_==0){$idmant = "2";}
  if($sunat_==1){$idmant = "1";}
  $consulta = "SELECT SERIE serie, CORRELATIVO correlativo  
			   FROM COMPROBANTE_MANT 
			   WHERE IDMANTENIMIENTO = '".$idmant."'";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $serie = mysql_result($ejecuta, "0", "serie"); 
  $correlativo = mysql_result($ejecuta, "0", "correlativo");
  $correlativo = $correlativo + 1;
  
  $consulta = "INSERT INTO COMPROBANTE 
  			   VALUES ('".$id_."','".$idcontrato_."','".$idempleador_."','".$idtrabajador_."', '".$idrequerimiento_."', 
			   '".$monto_."','".$serie."','".$correlativo."','".$sunat_."','".date("d/m/Y")."', '8')"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  
  $consulta = "UPDATE COMPROBANTE_MANT SET CORRELATIVO = '".$correlativo."' 
  			   WHERE IDMANTENIMIENTO = '".$idmant."' "; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_comprobante($accion_, $idcomprobante_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE COMPROBANTE SET IDESTADO = '".$accion_."'
			   WHERE IDCOMPROBANTE = '".$idcomprobante_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_comprobantes_contrato($idcontrato_)
{
  $i=1;
  $conexion = conectar_cms();
  $consulta = "SELECT IDCOMPROBANTE idcomprobante, IDEMPLEADOR idempleador, IDTRABAJADOR idtrabajador, 
  			   IDREQUERIMIENTO idrequerimiento, MONTO monto, SERIE serie, CORRELATIVO correlativo, 
			   FECHA_REGISTRO fecha_registro 
			   FROM COMPROBANTE 
			   WHERE IDCONTRATO = '".$idcontrato_."'";	   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($comprobantes = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_comprobantes[$i][0] = $comprobantes["idcomprobante"];
	$arr_comprobantes[$i][1] = $comprobantes["idempleador"];
	$arr_comprobantes[$i][2] = $comprobantes["idtrabajador"];
	$arr_comprobantes[$i][3] = $comprobantes["idrequerimiento"];
	$arr_comprobantes[$i][4] = $comprobantes["monto"];
	$arr_comprobantes[$i][5] = $comprobantes["serie"];
	$arr_comprobantes[$i][6] = $comprobantes["correlativo"];
	$arr_comprobantes[$i][7] = $comprobantes["fecha_registro"];
	$i++;
  }	
  return $arr_comprobantes;
}

function devolver_datos_comprobante($idcomprobante_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDCOMPROBANTE idcomprobante, IDCONTRATO idcontrato, IDEMPLEADOR idempleador, 
  			   IDTRABAJADOR idtrabajador, IDREQUERIMIENTO idrequerimiento, MONTO monto, SERIE serie, 
			   CORRELATIVO correlativo, FECHA_REGISTRO fecha_registro 
			   FROM COMPROBANTE 
			   WHERE IDCOMPROBANTE = '".$idcomprobante_."'";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($comprobantes = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $comprobantes["idcomprobante"];
	$arr_datos[1] = $comprobantes["idempleador"];
	$arr_datos[2] = $comprobantes["idtrabajador"];
	$arr_datos[3] = $comprobantes["idrequerimiento"];
	$arr_datos[4] = $comprobantes["monto"];
	$arr_datos[5] = $comprobantes["serie"];
	$arr_datos[6] = $comprobantes["correlativo"];
	$arr_datos[7] = $comprobantes["fecha_registro"];
	$arr_datos[8] = $comprobantes["idcontrato"];
  }	
  return $arr_datos;
}

function devolver_datos_mantenimiento()
{
  $conexion = conectar_cms();
  $consulta = "SELECT SERIE serie, CORRELATIVO correlativo, AUTORIZACION autorizacion, GLOSA glosa 
			   FROM COMPROBANTE_MANT
			   WHERE IDMANTENIMIENTO = '1'";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($mantenimientos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[1] = $mantenimientos["serie"];
	$arr_datos[2] = $mantenimientos["correlativo"];
	$arr_datos[3] = $mantenimientos["autorizacion"];
	$arr_datos[4] = $mantenimientos["glosa"];
  }
  
  $consulta = "SELECT SERIE serie, CORRELATIVO correlativo 
			   FROM COMPROBANTE_MANT
			   WHERE IDMANTENIMIENTO = '2'";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($mantenimientos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[5] = $mantenimientos["serie"];
	$arr_datos[6] = $mantenimientos["correlativo"];
  }	
  return $arr_datos;
}

function actualiza_datos_mantenimiento($serie_, $correlativo_, $autorizacion_, $glosa_, $serie_interno_, $correlativo_interno_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE COMPROBANTE_MANT SET SERIE = '".$serie_."', CORRELATIVO = '".$correlativo_."', 
  			   AUTORIZACION = '".$autorizacion_."', GLOSA = '".$glosa_."' 
			   WHERE IDMANTENIMIENTO = '1' "; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  
  $consulta = "UPDATE COMPROBANTE_MANT SET SERIE = '".$serie_interno_."', CORRELATIVO = '".$correlativo_interno_."' 
			   WHERE IDMANTENIMIENTO = '2' "; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

?>