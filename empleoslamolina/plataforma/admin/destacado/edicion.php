<?php
require_once("../../../BL/BLdestacado.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$iddestacado = $_GET["iddestacado"]; 
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

<script language="javascript" type="text/javascript">
function textodeiframe()
{
var frame = document.getElementById('frameubigeo');
var dep = frame.contentWindow.document.getElementById('departamento').value;
var prov = frame.contentWindow.document.getElementById('provincia').value;
var dis = frame.contentWindow.document.getElementById('distrito').value;
document.getElementById('departamento_').value = dep;
document.getElementById('provincia_').value = prov;
document.getElementById('distrito_').value = dis;
}
</script>

<script>
function validarnumero(e) {    
var tecla= document.all ? tecla = e.keyCode : tecla = e.which;    
return ((tecla > 47 && tecla < 58) || tecla == 46);
}

function compara_fechas(fecha1, fecha2)  
{ 
var fecha = fecha1.value; 
var resultado;
var xMonth=fecha.substring(3, 5);  
var xDay=fecha.substring(0, 2);  
var xYear=fecha.substring(6,10);  
var yMonth=fecha2.substring(3, 5);  
var yDay=fecha2.substring(0, 2);  
var yYear=fecha2.substring(6,10);
if (xYear> yYear)  
{  
	resultado = true;  
}  
else  
{  
  if (xYear == yYear)  
  {   
	if (xMonth> yMonth)  
	{  
		resultado = true;  
	}  
	else  
	{   
	 if (xMonth == yMonth)  
	  {  
		if (xDay> yDay)  
		  resultado = true;  
		else  
		  resultado = false;  
	  }  
	  else  
		resultado = false;  
	}  
  }  
  else  
	resultado = false;  
}
if (resultado){  
alert("Fecha invalida. Mayor que fecha actual.");
fecha1.value="";  
}  
} 

</script>

<?php
$ref = $_GET["ref"];
if($ref){
?>
<script>
$(document).ready(function() {
	//PESTAÑAS
	$(".tab_content").hide(); //Hide all content
	$("#tab2").show(); //Show first tab content

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
<?php
}
else
{
?>
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
<?php
}
?>

<link href="../../calendario/calendario.css" type="text/css" rel="stylesheet">
<script src="../../calendario/calendar.js" type="text/javascript"></script>
<script src="../../calendario/calendar-es.js" type="text/javascript"></script>
<script src="../../calendario/calendar-setup.js" type="text/javascript"></script>

</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Destacados</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Actualizar Destacado</td>
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
        <span class="texto">En esta sección podrás actualizar los datos de un destacado registrado en el 
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
    <form id="form" name="form" method="post" action="proc_actualizar_destacado.php" enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Datos Personales</a></li>
        <li><a href="#tab2">Imagenes</a></li> 
      </ul>      
      <?php
   	  $arr_datos = dame_datos_destacado($iddestacado);
	  
	  $iddestacado = $arr_datos[0];
	  $referencia = $arr_datos[1];   
	  $categoria = $arr_datos[2];  
	  $experiencia = $arr_datos[3];
	  $capacitacion = $arr_datos[4];  
	  $trabajos = $arr_datos[5];					
	  $modalidad = $arr_datos[6];
	  $sueldo = $arr_datos[7];
	  $img_chica = $arr_datos[8];
	  $img_grande = $arr_datos[9];
	  ?>
      <div class="tab_container">
      <div id="tab1" class="tab_content">
      <input name="iddestacado" type="hidden" id="iddestacado" value="<?php echo($iddestacado);?>" />
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
          maxlength="20" value="<?php echo($referencia);?>"/>          
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
              <option value="0" <?php if($categoria=="0"){echo("selected = 'selected'");}?>>Personal de Limpieza</option>
              <option value="1" <?php if($categoria=="1"){echo("selected = 'selected'");}?>>Cocinera</option>
              <option value="2" <?php if($categoria=="2"){echo("selected = 'selected'");}?>>Chofer Profesional</option>
              <option value="3" <?php if($categoria=="3"){echo("selected = 'selected'");}?>>Niñera</option>
              <option value="4" <?php if($categoria=="4"){echo("selected = 'selected'");}?>>Aux. Enfermería</option>
              <option value="5" <?php if($categoria=="5"){echo("selected = 'selected'");}?>>Todo Servicio</option>
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
          maxlength="200" value="<?php echo($experiencia);?>"/>          
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
          maxlength="200" value="<?php echo($capacitacion);?>"/>          
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
          maxlength="200" value="<?php echo($trabajos);?>"/>          
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
          maxlength="200" value="<?php echo($modalidad);?>"/>          
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
          maxlength="10" value="<?php echo($sueldo);?>"/>          
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
          <strong>Imagen chica (*)</strong>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
          <input name="img_chica" type="file" class="cajatextoweb" id="img_chica" tabindex="8" size="80"/>
          <br />(250 x 152)
          <?php
          if($img_chica==""){
          echo "<span class='textorojo'>Imagen no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../portal/web/imagenes/destacados/mini/<?php echo($img_chica);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver imagen</a>
          <?php
          }
          ?>     
          <input type="hidden" name="imgc" id="imgc" value="<?php echo($img_chica);?>" />
          </td>
          </tr>
          <tr>
          <td align="left" valign="top">
          <strong>Imagen grande (*)</strong>          
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
          <input name="img_grande" type="file" class="cajatextoweb" id="img_grande" tabindex="9" size="80"/>
          <br />(600 x 550)
          <?php
          if($img_grande==""){
          echo "<span class='textorojo'>Imagen no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../portal/web/imagenes/destacados/grande/<?php echo($img_grande);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver imagen</a>
          <?php
          }
          ?>     
          <input type="hidden" name="imgg" id="imgg" value="<?php echo($img_grande);?>" />
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
          <input name="button" type="submit" class="cajabotones" id="button" value="Actualizar" 
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