<?php
require_once("../../../BL/BLcomprobante.php");
error_reporting(0); 

$serie = $_POST["serie"];
$correlativo = $_POST["correlativo"];
$autorizacion = $_POST["autorizacion"];
$glosa = $_POST["glosa"];
$serie_interno = $_POST["serie_interno"];
$correlativo_interno = $_POST["correlativo_interno"];

actualizar_datos_mantenimiento($serie, $correlativo, $autorizacion, $glosa, $serie_interno, $correlativo_interno);
?>