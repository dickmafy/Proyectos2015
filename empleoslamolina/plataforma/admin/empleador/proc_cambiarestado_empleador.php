<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../utilitarios/funciones.php");
error_reporting(0); 

$accion = $_POST["accion"]; 
$nroempleadores = $_POST["nroempleadores"];

for($i=1; $i<=$nroempleadores; $i++)
{
  $seleccionado = $_POST["empleador".$i];
  if(isset($seleccionado))
  {
	$idempleador = $_POST["idempleador".$i];
	actualizar_empleador($accion, $idempleador);
  }	
}

fnRedirect("administrar.php");
				 
?>