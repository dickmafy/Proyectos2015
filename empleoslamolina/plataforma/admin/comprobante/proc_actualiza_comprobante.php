<?php
require_once("../../../BL/BLcomprobante.php");
error_reporting(0); 

$accion = $_GET["accion"];
$idcomprobante = $_GET["idcomprobante"];  

actualizar_comprobante($accion, $idcomprobante);

?>