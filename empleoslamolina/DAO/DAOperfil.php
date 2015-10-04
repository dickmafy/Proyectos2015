<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_perfil()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDPERFIL total
			   FROM PERFIL
			   ORDER BY CAST( IDPERFIL AS unsigned ) DESC 
			   LIMIT 1";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_perfil($id_, $perfil_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO PERFIL 
  			   VALUES ('".$id_."', '".$perfil_."', '".date("d/m/Y")."', '1')";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_perfil($accion_, $idperfil_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE PERFIL SET IDESTADO = '".$accion_."'
			   WHERE IDPERFIL = '".$idperfil_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_perfil($idperfil_, $descripcion_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE PERFIL SET DESCRIPCION = '".$descripcion_."'
			   WHERE IDPERFIL = '".$idperfil_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_perfiles()
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT IDPERFIL idperfil, DESCRIPCION descripcion
			   FROM PERFIL
			   ORDER BY CAST( IDPERFIL AS unsigned ) ASC";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  while($perfiles = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
  	$arr_perfiles[$i][0] = $perfiles["idperfil"]; 
	$arr_perfiles[$i][1] = $perfiles["descripcion"];
	$i++; 
  }

  return $arr_perfiles;
}

?>