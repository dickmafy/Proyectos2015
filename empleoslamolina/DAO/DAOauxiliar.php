<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function devolver_paises()
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT IDPAIS idpais, NOMBRE nombre
			   FROM PAIS
			   ORDER BY NOMBRE ASC";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  while($paises = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
  	$arr_paises[$i][0] = $paises["idpais"]; echo($arr_paises[$i][0]); 
	$arr_paises[$i][1] = $paises["nombre"]; echo($arr_paises[$i][1]); 
	$i++; 
  }

  return $arr_paises;
}

function devolver_departamentos()
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT IDDEPARTAMENTO iddepartamento, NOMBRE nombre
			   FROM DEPARTAMENTO
			   ORDER BY NOMBRE ASC";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  while($departamentos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
  	$arr_departamentos[$i][0] = $departamentos["iddepartamento"]; 
	$arr_departamentos[$i][1] = $departamentos["nombre"];
	$i++; 
  }

  return $arr_departamentos;
}

function devolver_provincias($iddepartamento_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT IDPROVINCIA idprovincia, NOMBRE nombre
			   FROM PROVINCIA 
			   WHERE IDDEPARTAMENTO = '".$iddepartamento_."'  
			   ORDER BY NOMBRE ASC";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  while($provincias = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
  	$arr_provincias[$i][0] = $provincias["idprovincia"]; 
	$arr_provincias[$i][1] = $provincias["nombre"];
	$i++; 
  }

  return $arr_provincias;
}

function devolver_distritos($idprovincia_, $iddepartamento_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT IDDISTRITO iddistrito, NOMBRE nombre
			   FROM DISTRITO 
			   WHERE IDPROVINCIA = '".$idprovincia_."' 
			   AND IDDEPARTAMENTO = '".$iddepartamento_."'  
			   ORDER BY NOMBRE ASC";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  while($distritos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
  	$arr_distritos[$i][0] = $distritos["iddistrito"]; 
	$arr_distritos[$i][1] = $distritos["nombre"];
	$i++; 
  }

  return $arr_distritos;
}

function devolver_nombre_pais($idpais_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT NOMBRE nombre
			   FROM PAIS 
			   WHERE IDPAIS = '".$idpais_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $nompais = mysql_result($ejecuta, "0", "nombre");

  return $nompais;
}

function devolver_nombre_departamento($iddepartamento_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT NOMBRE nombre
			   FROM DEPARTAMENTO 
			   WHERE IDDEPARTAMENTO = '".$iddepartamento_."'";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $nomdepartamento = mysql_result($ejecuta, "0", "nombre");

  return $nomdepartamento;
}

function devolver_nombre_provincia($idprovincia_, $iddepartamento_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT NOMBRE nombre
			   FROM PROVINCIA 
			   WHERE IDPROVINCIA = '".$idprovincia_."' 
			   AND IDDEPARTAMENTO = '".$iddepartamento_."'";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $nomprovincia = mysql_result($ejecuta, "0", "nombre");

  return $nomprovincia;
}

function devolver_nombre_distrito($iddistrito_, $idprovincia_, $iddepartamento_)
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT NOMBRE nombre
			   FROM DISTRITO 
			   WHERE IDDISTRITO = '".$iddistrito_."' 
			   AND IDPROVINCIA = '".$idprovincia_."' 
			   AND IDDEPARTAMENTO = '".$iddepartamento_."'";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $nomdistrito = mysql_result($ejecuta, "0", "nombre");

  return $nomdistrito;
}

function validar_nrodoc_trabajador($nrodoc_)
{
  $total=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT COUNT(*) total
			   FROM TRABAJADOR  
			   WHERE NRO_DOC = '".$nrodoc_."' "; 	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total");
  if($total>0){return 0;}
  else{return 1;}
}

function validar_nrodoc_empleador($nrodoc_)
{
  $total=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT COUNT(*) total
			   FROM EMPLEADOR   
			   WHERE NRO_DOC = '".$nrodoc_."' "; 	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total");
  if($total>0){return 0;}
  else{return 1;}
}

function devolver_nro_autorizacion()
{
  $i=0;
  
  $conexion = conectar_cms();
  $consulta = "SELECT AUTORIZACION autorizacion
			   FROM COMPROBANTE_MANT ";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $autorizacion = mysql_result($ejecuta, "0", "autorizacion");

  return $autorizacion;
}

?>