<?php
require_once("../../../BL/BLdestacado.php");
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BERTHA EXPERTA EN CASA Seguridad y confianza a su servicio</title>
<style type="text/css">
@import url("estilos.css");
</style>
<?php include("librerias.php"); ?>
<script type="text/javascript" src="../highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="../highslide/highslide.css" />
<script type="text/javascript">
hs.registerOverlay({
	html: '<div class="closebutton" onclick="return hs.close(this)" title="Cerrar"></div>',
	position: 'top right',
	fade: 2
});
hs.graphicsDir = '../highslide/graphics/';
hs.wrapperClassName = 'borderless';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.fadeInOut = true;
hs.dimmingOpacity = .75;
</script>
</head>

<body>
<?php
$menu = "mdestacados";
include("cabecera.php");
?>
<div id="cabecera">
<img src="../imagenes/cabdestacados.jpg" width="957" height="210" />
</div>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td height="210" align="center" valign="top">&nbsp;</td>
</tr>
<tr>
<td height="1160" align="center" valign="top">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="950" height="74" align="left" valign="middle" class="textocelesteenorme">Destacados</td>
  </tr>
</table>
<table width="940" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="43" align="left" valign="top">
    <div align="justify" class="textoplomogrande"> 
    Personal de confianza que cuenta con una experiencia mínima de 7 años en el trabajo del hogar de reconocidas 
    familias.<br />
    </div>
    </td>
  </tr>
</table>
<?php
$categorias = array("Personal de Limpieza", "Cocineras", "Choferes Profesionales", "Niñeras", "Auxiliares de Enfermería",
					"Personal todo Servicio");
$totalcategorias = sizeof($categorias);
for($i=0; $i<$totalcategorias; $i++)
{
?>
<table width="940" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="940" height="46" align="left" valign="top" class="textocelestegrande">
    <strong><?php echo($categorias[$i]);?></strong>
    </td>
  </tr>
</table>
<table width="939" height="423" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <?php
	$arr_destacados = dame_destacados_categoria($i);
	for($j=0; $j<3; $j++)
	{
	 $iddestacado = $arr_destacados[$j][0];
	 $referencia = $arr_destacados[$j][1];
	 $categoria = $arr_destacados[$j][2];
	 $experiencia = $arr_destacados[$j][3];
	 $capacitacion = $arr_destacados[$j][4];
	 $trabajos = $arr_destacados[$j][5];
	 $modalidad = $arr_destacados[$j][6];
	 $sueldo = $arr_destacados[$j][7];
	 $img_chica = $arr_destacados[$j][8];
	 $img_grande = $arr_destacados[$j][9];
	?>
    <td width="313" height="423" align="center" valign="top">
    <?php if($iddestacado!=""){?>
    <table width="269" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="169" colspan="3" align="center" valign="middle" bgcolor="#FFFFFF">
        <a href="../imagenes/destacados/grande/<?php echo($img_grande);?>" onclick="return hs.expand(this)">
        <img src="../imagenes/destacados/mini/<?php echo($img_chica);?>" width="250" height="152" border="0" />
        </a>
        </td>
      </tr>
      <tr>
        <td height="200" colspan="3" align="left" valign="top" class="textoplomo">
        <div align="justify"><br />
        <strong>Referencia: </strong><?php echo($referencia);?><br />
        <strong>Experiencia: </strong><?php echo($experiencia);?><br />
        <strong>Trabajos deseados: </strong><?php echo($trabajos);?><br />
        <strong>Modalidad deseada: </strong><?php echo($modalidad);?><br />
        <strong>Sueldo deseado: </strong> S/. <?php echo($sueldo);?>.00
        <br />
        <br />
        </div>
        </td>
      </tr>
      <tr>
        <td width="16" height="50" align="left" valign="top">&nbsp;</td>
        <td width="229" align="center" valign="middle">
        <a href="requerimientos.php" class="botonenviar">Haz tu requerimiento</a></td>
        <td width="24" align="left" valign="top">&nbsp;</td>
      </tr>
    </table>
    <?php }?>
    </td>
    <?php
	}
	?>
  </tr>
</table>
<br /><br />
<?php
}
?>
</td>
</tr>
</table>
<?php include("pie.php");?>
</body>
</html>