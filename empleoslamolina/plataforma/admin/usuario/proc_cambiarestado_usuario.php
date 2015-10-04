<?php
require_once("../../../BL/BLusuario.php");
require_once("../../../utilitarios/funciones.php");
error_reporting(0); 

$accion = $_POST["accion"]; 
$nrousuarios = $_POST["nrousuarios"];

for($i=1; $i<=$nrousuarios; $i++)
{
  $seleccionado = $_POST["usuario".$i]; 
  if(isset($seleccionado))
  {
	$idusuario = $_POST["idusuario".$i];
	actualizar_usuario($accion, $idusuario);
  }	
}

fnRedirect("administrar.php");
				 
?>