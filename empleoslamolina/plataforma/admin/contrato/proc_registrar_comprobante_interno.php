<?php
require_once("../../../BL/BLcomprobante.php");
error_reporting(0); 

$idcontrato = $_POST["idcontrato"];
$idempleador = $_POST["idempleador"];
$idtrabajador = $_POST["idtrabajador"];
$idrequerimiento = $_POST["idrequerimiento"]; 
$monto = $_POST["sueldo"]*0.6;
$monto = $monto.".00";

registrar_comprobante($idcontrato, $idempleador, $idtrabajador, $idrequerimiento, $monto, 0);

?>