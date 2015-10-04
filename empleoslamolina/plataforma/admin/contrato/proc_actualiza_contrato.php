<?php
require_once("../../../BL/BLcontrato.php");
error_reporting(0); 

$accion = $_GET["accion"];
$idcontrato = $_GET["idcontrato"];  

actualizar_contrato($accion, $idcontrato);

?>