<?php
include("../utilitarios/funciones.php");
include("../DAO/conexion.php");
fnSessionStart();
$conexion = conectar_cms();
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
//verifica datos
$consulta = "SELECT USUARIO usuario, IDESTADO idestado FROM USUARIO
			 WHERE USUARIO = '".$usuario."' AND CONTRASENA = '".$contrasena."'";
$ejecuta = mysql_query($consulta, $conexion);
if(mysql_num_rows($ejecuta)){			 
$existe = mysql_result($ejecuta, "0", "usuario"); 
$estado = mysql_result($ejecuta, "0", "idestado");}
if($existe!="")
{
  if($estado=="1")
  {
	$consulta2 = "SELECT IDPERFIL idperfil FROM USUARIO
				 WHERE USUARIO = '".$usuario."' AND CONTRASENA = '".$contrasena."'";
	$ejecuta2 = mysql_query($consulta2, $conexion);			 
	$perfil = mysql_result($ejecuta2, "0", "idperfil");		 
	
	if($perfil=="0" || $perfil=="1")
	{
	  $_SESSION["usuario"] = $usuario;
	  $_SESSION["perfil"] =  $perfil;
	
	  fnRedirect("admin/index.php?idperf=".$perfil);
	}
	else
	{
	  fnRedirect("index.php?error=3");
	}  
  }
  else
  {
    fnRedirect("index.php?error=2");
  }	
}
else
{
  fnRedirect("index.php?error=1");
}
?>

