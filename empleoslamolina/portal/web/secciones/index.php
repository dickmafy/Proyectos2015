<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BERTHA EXPERTA EN CASA Seguridad y confianza a su servicio</title>
<style type="text/css">
@import url("estilos.css");
</style>
<?php include("librerias.php"); ?>
<link rel="stylesheet" href="../../../utilitarios/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="estilo_slide.css" type="text/css" media="screen" />
<script type="text/javascript" src="../../../utilitarios/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
	effect:'slideInRight,boxRain,fade,boxRainGrowReverse',
	animSpeed:300, 
	pauseTime:3000
	});
});
</script>
</head>

<body>
<?php
$menu = "minicio";
include("cabecera.php");
?>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="355" align="center" valign="top">
    <div id="banner">
    <div id="wrapper">
    <div id="slider-wrapper">
     <div id="slider" class="nivoSlider">
     <img src="../imagenes/banners/1.jpg" alt="" title=""/>
     <img src="../imagenes/banners/2.jpg" alt="" title=""/>
     <img src="../imagenes/banners/3.jpg" alt="" title=""/>
     <img src="../imagenes/banners/4.jpg" alt="" title=""/>
     <img src="../imagenes/banners/5.jpg" alt="" title=""/>
     </div> 
    </div>
    </div>
    </div>
    </td>
  </tr>
  <tr>
    <td height="728" align="center" valign="top">
    <table width="978" height="331" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="421" height="331" align="center" valign="top">
        <img src="../imagenes/imgempleador.jpg" width="385" height="365" />        
        </td>
        <td width="557" align="center" valign="middle">
        <table width="502" height="278" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="400" align="left" valign="top">
            <a href="servicios.php" class="linkcelesteenorme">Servicios</a><br />
            <span class="textoplomogrande">
            Personal de limpieza, cocineras, choferes, niñeras, auxiliares de enfermería y personal todo servicio.
            </span>
            </td>
            <td width="102" align="right" valign="top">
            <a href="servicios.php">
            <img src="../imagenes/icoemp1.png" width="78" height="78" border="0" />
            </a>            
            </td>
          </tr>
          <tr>
            <td align="left" valign="top">
            <a href="destacados.php" class="linkcelesteenorme">Destacados</a><br />
            <span class="textoplomogrande">
            Algunos de los trabajadores sobresalientes dentro de nuestros asociados.
            </span>
            </td>
            <td align="right" valign="top">
            <a href="destacados.php">
            <img src="../imagenes/icoemp2.png" width="78" height="78" border="0" />
            </a>            
            </td>            
          </tr>
          <tr>
            <td align="left" valign="top">
            <a href="requerimientos.php" class="linkcelesteenorme">Haz tu requerimiento</a><br />
            <span class="textoplomogrande">
            ¿Necesitas personal especializado? Completa un breve formulario y te atenderemos a la brevedad.
            </span>
            </td>
            <td align="right" valign="top">
            <a href="requerimientos.php">
            <img src="../imagenes/icoemp3.png" width="78" height="78" border="0" />
            </a>            
            </td>            
          </tr>
        </table>
        </td>
      </tr>
    </table>
    <br />
    <table width="978" height="331" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="421" height="331" align="center" valign="top">
        <img src="../imagenes/imgtrabajador.jpg" width="385" height="308" />        
        </td>
        <td width="557" align="center" valign="middle">
        <table width="502" height="278" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="400" align="left" valign="top">
            <a href="requisitos.php" class="linkverdeenorme">Requisitos</a><br />
            <span class="textoplomogrande">
            Deseas trabajar con nosotros? Aquí te contamos que documentos necesitas tener a la mano.
            </span>
            </td>
            <td width="102" align="right" valign="top">
            <a href="requisitos.php">
            <img src="../imagenes/icotra1.png" width="78" height="78" border="0" />
            </a>            
            </td>            
          </tr>
          <tr>
            <td align="left" valign="top">
            <a href="liquidacion.php" class="linkverdeenorme">Liquidación</a><br />
            <span class="textoplomogrande">
            Entérate de cómo calcular tu liquidación. Además puedes informarte sobre tus derechos <a href="legal.php" class="linkverdechico">aquí</a>.            </span>            </td>
            <td align="right" valign="top">
            <a href="liquidacion.php">
            <img src="../imagenes/icotra2.png" width="78" height="78" border="0" />
            </a>            
            </td>
          </tr>
          <tr>
            <td align="left" valign="top">
            <a href="postula.php" class="linkverdeenorme">Postula</a><br />
            <span class="textoplomogrande">
            En sencillos pasos. Completa un breve formulario y ya estarás dentro de nuestra base de datos de trabajadores.
            </span>
            </td>
            <td align="right" valign="top">
            <a href="postula.php">
            <img src="../imagenes/icotra3.png" width="78" height="78" border="0" />
            </a>            
            </td>
          </tr>
        </table>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<?php include("pie.php");?>
</body>
</html>