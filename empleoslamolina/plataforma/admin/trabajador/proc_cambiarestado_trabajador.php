<?php
require_once("../../../BL/BLtrabajador.php");
require_once("../../../utilitarios/funciones.php");
error_reporting(0); 

$accion = $_POST["accion"]; 
$nrotrabajadores = $_POST["nrotrabajadores"];

for($i=1; $i<=$nrotrabajadores; $i++)
{
  $seleccionado = $_POST["trabajador".$i];
  if(isset($seleccionado))
  {
	$idtrabajador = $_POST["idtrabajador".$i];
	actualizar_trabajador($accion, $idtrabajador);
  }	
}

fnRedirect("administrar.php");
				 
?>