<?php
require_once("../../../BL/BLdestacado.php");
require_once("../../../utilitarios/funciones.php");
error_reporting(0); 

$accion = $_POST["accion"]; 
$nrodestacados = $_POST["nrodestacados"];

for($i=1; $i<=$nrodestacados; $i++)
{
  $seleccionado = $_POST["destacado".$i];
  if(isset($seleccionado))
  {
	$iddestacado = $_POST["iddestacado".$i];
	actualizar_destacado($accion, $iddestacado);
  }	
}

fnRedirect("administrar.php");
				 
?>