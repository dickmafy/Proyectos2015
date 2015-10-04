<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
fnSessionStart();
$conexion = conectar_cms();
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
@import url("../../css_tabs.css"); 
</style>

<script language="javascript" type="text/javascript" src="../../jquery.js"></script>

<script type="text/javascript" src="../../highslide/highslide-full.js"></script> 
<link rel="stylesheet" type="text/css" href="../../highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '../../highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.dimmingOpacity = .15;
</script>

<script>
$(document).ready(function() {
	//PESTAÑAS
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		//$(activeTab).fadeIn(); //Fade in the active content
		$(activeTab).show();
		return false;
	});	
});
</script>
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Destacados</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Registrar Destacado</td>
        <td width="20" align="right" valign="middle">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td height="2" colspan="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
  <tr>
    <td height="28" colspan="2" align="left" valign="middle">
    <table width="554" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="542" align="left" valign="middle">
        <span class="texto">En esta sección podrás registrar un nuevo destacado en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Destacados</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="proc_registrar_destacado.php" enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Datos Personales</a></li>
        <li><a href="#tab2">Imagenes</a></li>  
      </ul> 
      <div class="tab_container">
      <div id="tab1" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="left" valign="middle">
          <strong class="textoverde">DATOS PERSONALES</strong></td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Nro. Referencia (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="referencia" type="text" class="cajatextoweb" id="referencia" tabindex="1" size="100" 
          maxlength="20"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Especialidad (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
            <select name="categoria" class="listagris" id="categoria" tabindex="2">
              <option value="">------------ Seleccione especialidad ----------</option>
              <option value="0">Personal de Limpieza</option>
              <option value="1">Cocinera</option>
              <option value="2">Chofer Profesional</option>
              <option value="3">Niñera</option>
              <option value="4">Aux. Enfermería</option>
              <option value="5">Todo Servicio</option>
            </select>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Experiencia (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="experiencia" type="text" class="cajatextoweb" id="experiencia" tabindex="3" size="100" 
          maxlength="200"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Capacitación (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="capacitacion" type="text" class="cajatextoweb" id="capacitacion" tabindex="4" size="100" 
          maxlength="200"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Trabajos deseados (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="trabajos" type="text" class="cajatextoweb" id="trabajos" tabindex="5" size="100" 
          maxlength="200"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Modalidad deseada (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="modalidad" type="text" class="cajatextoweb" id="modalidad" tabindex="6" size="100" 
          maxlength="200"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <strong>Sueldo (S/.) (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="sueldo" type="text" class="cajatextoweb" id="sueldo" tabindex="7" size="100" 
          maxlength="10"/>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle"></td>
        </tr>
      </table>
      </div>
      <div id="tab2" class="tab_content">
        <table width="688" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="left" valign="middle">
          <strong class="textonegro">IMÁGENES</strong>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
          <strong>Imagen chica </strong>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
          <input name="img_chica" type="file" class="cajatextoweb" id="img_chica" tabindex="8" size="80"/>
          <br />(250 x 152)          
          </td>
          </tr>
          <tr>
          <td align="left" valign="top" >
          <strong>Imagen grande </strong>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
          <input name="img_grande" type="file" class="cajatextoweb" id="img_grande" tabindex="9" size="80"/>
          <br />(600 x 550)          
          </td>
        </tr>
        <tr>
        <td align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
       </div>
       </div>
      </div>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="37" align="center" valign="bottom">
          <input name="button" type="submit" class="cajabotones" id="button" value="Registrar" 
          onclick="return validar();" tabindex="67"/>          
          </td>
        </tr>
      </table>
    </form>    
    </td>
  </tr>
</table>
</body>
</html>
<script>
function validar()
{
 if(form.referencia.value=="" || form.sueldo.value=="")  
 {
   alert("Complete todos los campos");
   if(form.referencia.value==""){form.referencia.style.backgroundColor = '#f8a5ad';} 
   if(form.sueldo.value==""){form.sueldo.style.backgroundColor = '#f8a5ad';}
   return false;
 }
 else
 {
   return true;
 }	
}
</script>