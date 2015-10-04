<?php
require_once("../../../BL/BLrequerimiento.php");
error_reporting(0); 

$accion = $_GET["accion"];
$idrequerimiento = $_GET["idrequerimiento"];  
$idempleador = $_GET["idempleador"]; 

actualizar_requerimiento($accion, $idrequerimiento, $idempleador);

?>