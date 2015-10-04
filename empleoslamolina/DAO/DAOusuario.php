<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_usuario()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDUSUARIO total
			   FROM USUARIO
			   ORDER BY CAST( IDUSUARIO AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function consulta_id_personal()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDPERSONAL total
			   FROM PERSONAL
			   ORDER BY CAST( IDPERSONAL AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_usuario($id_, $idp_, $usuario_, $password_, $perfil_, $nombre_, $ape_paterno_, $ape_materno_, $telefono_, 
						 $email_, $direccion_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO USUARIO 
  			   VALUES ('".$id_."','".$usuario_."','".$password_."','".$perfil_."', '".date("d/m/Y")."', '1')";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  
  $consulta = "INSERT INTO PERSONAL
  			   VALUES ('".$idp_."','".$nombre_."','".$ape_paterno_."','".$ape_materno_."', '".$telefono_."', '".$email_."', 
			   '".$direccion."','".$id_."', '1')";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);	
}

function actualiza_usuario($accion_, $idusuario_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE USUARIO SET IDESTADO = '".$accion_."'
			   WHERE IDUSUARIO = '".$idusuario_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_usuario($idusuario_, $nomusuario_, $password_, $idperfil_, $nombre_, $ape_paterno_, $ape_materno_, 
 								 $telefono_, $email_, $direccion_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE PERSONAL SET NOMBRES = '".$nombre_."', APELLIDO_PATERNO = '".$ape_paterno_."', 
  			   APELLIDO_MATERNO = '".$ape_materno_."',
  			   TELEFONO = '".$telefono_."', EMAIL = '".$email_."', DIRECCION = '".$direccion_."' 
			   WHERE IDUSUARIO = ".$idusuario_."";	
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  
  $consulta = "UPDATE USUARIO SET USUARIO = '".$nomusuario_."', CONTRASENA = '".$password_."', IDPERFIL = '".$idperfil_."'   
			   WHERE IDUSUARIO = ".$idusuario_."";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function validar_usuario($usuario_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT COUNT(*) total FROM usuario WHERE usuario = '".$usuario_."'";	 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  $total = mysql_result($ejecuta, "0", "total");
  if($total>0){return 0;}else{return 1;}
}

?>