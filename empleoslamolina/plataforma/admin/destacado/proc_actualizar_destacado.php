<?php
require_once("../../../BL/BLdestacado.php");
error_reporting(0); 

$iddestacado = $_POST["iddestacado"];
$referencia = $_POST["referencia"];
$categoria = $_POST["categoria"];
$experiencia = $_POST["experiencia"];
$capacitacion = $_POST["capacitacion"];
$trabajos = $_POST["trabajos"];
$modalidad = $_POST["modalidad"];
$sueldo = $_POST["sueldo"];

if($_FILES['img_chica']['name']=="")
{
 $img_chica = $_POST["imgc"];
}
else
{
 $img_chica = $_FILES['img_chica']['name'];
 $img_chica = "d_".rand(100,999)."_".$img_chica;
 $destino = "../../../portal/web/imagenes/destacados/mini/".$img_chica."";
 move_uploaded_file($_FILES['img_chica']['tmp_name'],$destino);
 $archivo_borrar = $_POST["imgc"];
 unlink("../../../portal/web/imagenes/destacados/mini/".$archivo_borrar);
}

if($_FILES['img_grande']['name']=="")
{
 $img_grande = $_POST["imgg"];
}
else
{
 $img_grande = $_FILES['img_grande']['name'];
 $img_grande = "d_".rand(100,999)."_".$img_grande;
 $destino = "../../../portal/web/imagenes/destacados/grande/".$img_grande."";
 move_uploaded_file($_FILES['img_grande']['tmp_name'],$destino);
 $archivo_borrar = $_POST["imgg"];
 unlink("../../../portal/web/imagenes/destacados/grande/".$archivo_borrar);
}

actualizar_datos_destacado($iddestacado, $referencia, $categoria, $experiencia, $capacitacion, $trabajos, $modalidad, 
						   $sueldo, $img_chica, $img_grande);

?>