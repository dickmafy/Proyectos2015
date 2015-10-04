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

</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Empleadores</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Registrar Empleador</td>
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
        <span class="texto">En esta sección podrás registrar un nuevo empleador en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Empleadores</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="proc_registrar_empleador.php" enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Datos Personales</a></li>
        <li><a href="#tab2">Habitantes</a></li>
        <li><a href="#tab3">Ubigeo</a></li>  
        <li><a href="#tab4">Contacto</a></li>
      </ul>
      <?php
	  if($_POST["ape_paterno"]!=""){$ape_paterno = $_POST["ape_paterno"];}   
	  if($_POST["ape_materno"]!=""){$ape_materno = $_POST["ape_materno"];}  
	  if($_POST["nombres"]!=""){$nombres = $_POST["nombres"];}
	  if($_POST["tipo_doc"]!=""){$tipo_doc = $_POST["tipo_doc"];}   
	  if($_POST["nro_doc"]!=""){$nro_doc = $_POST["nro_doc"];} 						
	  if($_POST["estado_civil"]!=""){$estado_civil = $_POST["estado_civil"];} 
	  if($_POST["sexo"]!=""){$sexo = $_POST["sexo"];} 
	  if($_POST["fecha_nac"]!=""){$fecha_nac = $_POST["fecha_nac"];}
	  if($_POST["hijos"]!=""){$hijos = $_POST["hijos"];}
	  if($_POST["nro_hijos"]!=""){$nro_hijos = $_POST["nro_hijos"];}
	  if($_POST["mascota"]!=""){$mascota = $_POST["mascota"];}
	  if($_POST["pais"]!=""){$idpais = $_POST["pais"];}
	  if($_POST["tipo"]!=""){$tipo = $_POST["tipo"];}
	  if($_POST["nombre"]!=""){$nombre = $_POST["nombre"];}			
	  if($_POST["dpto"]!=""){$dpto = $_POST["dpto"];}
	  if($_POST["manzana"]!=""){$manzana = $_POST["manzana"];}
	  if($_POST["lote"]!=""){$lote = $_POST["lote"];}
	  if($_POST["urbanizacion"]!=""){$urbanizacion = $_POST["urbanizacion"];} 
	  if($_POST["referencia"]!=""){$referencia = $_POST["referencia"];}
	  if($_POST["departamento"]!=""){$iddepartamento = $_POST["departamento"];}					
	  if($_POST["provincia"]!=""){$idprovincia = $_POST["provincia"];}
	  if($_POST["distrito"]!=""){$iddistrito = $_POST["distrito"];} 
	  if($_POST["telefono"]!=""){$telefono = $_POST["telefono"];}
	  if($_POST["tipo_cel"]!=""){$tipo_cel = $_POST["tipo_cel"];}
	  if($_POST["celular"]!=""){$celular = $_POST["celular"];}
	  if($_POST["adultos"]!=""){$adultos = $_POST["adultos"];}						
	  if($_POST["desc_adultos"]!=""){$desc_adultos = $_POST["desc_adultos"];}
	  if($_POST["ninos"]!=""){$ninos = $_POST["ninos"];}
	  if($_POST["desc_ninos"]!=""){$desc_ninos = $_POST["desc_ninos"];}
	  if($_POST["mascotas"]!=""){$mascotas = $_POST["mascotas"];} 
	  if($_POST["desc_mascotas"]!=""){$desc_mascotas = $_POST["desc_mascotas"];} 
	  if($_POST["email"]!=""){$email = $_POST["email"];} 
	  if($_POST["se_entero"]!=""){$se_entero = $_POST["se_entero"];} 
	  ?>       
      <div class="tab_container">
      <div id="tab1" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">DATOS PERSONALES</strong></td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Apellido Paterno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="ape_paterno" type="text" class="cajatexto" id="ape_paterno" tabindex="1" size="100" 
          maxlength="50" value="<?php echo($ape_paterno);?>"/>
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Apellido Materno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="ape_materno" type="text" class="cajatexto" id="ape_materno" tabindex="2" size="100" 
          maxlength="50" value="<?php echo($ape_materno);?>"/>
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nombres (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="nombres" type="text" class="cajatexto" id="nombres" tabindex="3" size="100" 
          maxlength="50" value="<?php echo($nombres);?>"/>          
          </td>
        </tr>
        <tr>
          <td width="250" height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Tipo de Documento (*)</strong>
          </td>
          <td colspan="2" align="left" valign="middle" class="cajatextooscuro">
          <strong>Número (*)</strong>
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
            <select name="tipo_doc" class="listagris" id="tipo_doc" tabindex="4">
              <option value="">------------ Seleccione tipo ----------</option>
              <option value="0" <?php if($tipo_doc=="0"){echo("selected='selected'");}?>>DNI</option>
              <option value="1" <?php if($tipo_doc=="1"){echo("selected='selected'");}?>>Carnet de Extranjeria</option>
              <option value="2" <?php if($tipo_doc=="2"){echo("selected='selected'");}?>>Pasaporte</option>
            </select>
          </td>
          <td height="10" colspan="2" align="left" valign="middle">
          <?php 
		  $nro_doc = $_POST["nro_doc"];
		  if($nro_doc!="")
		  { 
		   $valido = validar_nrodoc_empleador($nro_doc);
		   if($valido==0){$textovalido = "Ya se registro ese Nro. Doc.";}
		  } 		   
		  ?>
          <input name="nro_doc" type="text" class="cajatexto" id="nro_doc" tabindex="5" size="60" 
          maxlength="8" onkeypress="return validarnumero(event)" 
          onblur="if(this.value!=''){document.form.action='registro.php'; document.form.submit();}"
          <?php if(isset($valido)){
		  if($valido){
          echo("value='".$nro_doc."'");}else {echo("value=''");}?>
          <?php }else {
          echo("value='".$nro_doc."'");
          }?>
          />
          <span class="textorojo"><br /><?php echo($textovalido);?></span>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Estado Civil (*)</strong> 
          </td>
          <td width="210" align="left" valign="middle" class="cajatextooscuro">
          <strong>Sexo (*)</strong> 
          </td>
          <td width="225" align="left" valign="middle" class="cajatextooscuro"></td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
            <select name="estado_civil" class="listagris" id="estado_civil" tabindex="6">
              <option value="">------- Seleccione estado civil -----</option>
              <option value="0" <?php if($estado_civil=="0"){echo("selected='selected'");}?>>Soltero(a)</option>
              <option value="1" <?php if($estado_civil=="1"){echo("selected='selected'");}?>>Casado(a)</option>
              <option value="2" <?php if($estado_civil=="2"){echo("selected='selected'");}?>>Divorciado(a)</option>
              <option value="3" <?php if($estado_civil=="3"){echo("selected='selected'");}?>>Viudo(a)</option>
            </select>
          </td>
          <td align="left" valign="middle">
            <select name="sexo" class="listagris" id="sexo" tabindex="7">
              <option value="">------- Seleccione sexo -----</option>
              <option value="0" <?php if($sexo=="0"){echo("selected='selected'");}?>>Masculino</option>
              <option value="1" <?php if($sexo=="1"){echo("selected='selected'");}?>>Femenino</option>
            </select>
          </td>
          <td align="left" valign="middle"></td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Fecha de Nacimiento (dd/mm/yyyy) (*)</strong> 
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="fecha_nac" type="text" class="cajatexto" id="fecha_nac" tabindex="9" size="100" 
          maxlength="10" value="<?php echo($fecha_nac);?>"/>       
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle"></td>
        </tr>
      </table>
      </div>
      <div id="tab2" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">DATOS DE HABITANTES</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Adultos </strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <select name="adultos" class="listagris" id="adultos" tabindex="22">
            <option value="">Cantidad</option>
            <option value="1" <?php if($adultos=="1"){echo("selected='selected'");}?>>1</option>
            <option value="2" <?php if($adultos=="2"){echo("selected='selected'");}?>>2</option>
            <option value="3" <?php if($adultos=="3"){echo("selected='selected'");}?>>3</option>
            <option value="4" <?php if($adultos=="4"){echo("selected='selected'");}?>>4</option>
            <option value="5" <?php if($adultos=="5"){echo("selected='selected'");}?>>5</option>
            <option value="6" <?php if($adultos=="6"){echo("selected='selected'");}?>>6</option>
            <option value="7" <?php if($adultos=="7"){echo("selected='selected'");}?>>7</option>
            <option value="8" <?php if($adultos=="8"){echo("selected='selected'");}?>>8</option>
            <option value="9" <?php if($adultos=="9"){echo("selected='selected'");}?>>9</option>
            <option value="10" <?php if($adultos=="10"){echo("selected='selected'");}?>>10</option>
          </select>
          <input name="desc_adultos" type="text" class="cajatexto" id="desc_adultos" tabindex="23" size="84" 
          maxlength="250" value="<?php if($desc_adultos){echo($desc_adultos);}else{echo("Descripcion de los adultos");}?>" 
          onfocus="if(this.value=='Descripcion de los adultos')this.value=''" 
          onblur="if(this.value=='')this.value='Descripcion de los adultos';"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Niños </strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <select name="ninos" class="listagris" id="ninos" tabindex="24">
            <option value="">Cantidad</option>
            <option value="1" <?php if($cantidad=="1"){echo("selected='selected'");}?>>1</option>
            <option value="2" <?php if($cantidad=="2"){echo("selected='selected'");}?>>2</option>
            <option value="3" <?php if($cantidad=="3"){echo("selected='selected'");}?>>3</option>
            <option value="4" <?php if($cantidad=="4"){echo("selected='selected'");}?>>4</option>
            <option value="5" <?php if($cantidad=="5"){echo("selected='selected'");}?>>5</option>
          </select>
          <input name="desc_ninos" type="text" class="cajatexto" id="desc_ninos" tabindex="25" size="84" 
          maxlength="250" value="<?php if($desc_ninos){echo($desc_ninos);}
		  else{echo("Descripcion y edades de los niños");}?>" 
          onfocus="if(this.value=='Descripcion y edades de los niños')this.value=''" 
          onblur="if(this.value=='')this.value='Descripcion y edades de los niños';"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Mascotas </strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <select name="mascotas" class="listagris" id="mascotas" tabindex="26">
            <option value="0" <?php if($mascotas=="0"){echo("selected='selected'");}?>>No</option>
            <option value="1" <?php if($mascotas=="1"){echo("selected='selected'");}?>>Si</option>
          </select>
          <input name="desc_mascotas" type="text" class="cajatexto" id="desc_mascotas" tabindex="27" size="90" 
          maxlength="250" value="<?php if($desc_mascotas){echo($desc_mascotas);}
		  else{echo("Descripcion y edades de las mascotas");}?>" 
          onfocus="if(this.value=='Descripcion y edades de las mascotas')this.value=''" 
          onblur="if(this.value=='')this.value='Descripcion y edades de las mascotas';"/>
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle">       
          </td>
        </tr>
      </table>
      </div>
      <div id="tab3" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">UBIGEO</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro" colspan="3">
          <strong>País de Nacimiento (*)</strong> 
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle" colspan="3">
            <select name="pais" class="listagris" id="pais" tabindex="11">
              <option value="">---- Seleccione pais ----</option>
              <?php
			  $arr_paises = devolver_paises();
			  $totalpaises = sizeof($arr_paises);
			  for($i=0; $i<$totalpaises; $i++)
			  {
			   $idpais_ = $arr_paises[$i][0];
			   $nompais = $arr_paises[$i][1];
			  ?>
              <option value="<?php echo($idpais_);?>" 
              <?php 
			  if(!isset($idpais)){if($idpais_=="173"){echo("selected='selected'");}}else{
			  if($idpais==$idpais_){echo("selected='selected'");}}?>><?php echo($nompais);?></option>
              <?php 
			  }
			  ?>
            </select>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro" colspan="3">
          <strong>Dirección (*)</strong> 
          </td>
        </tr>
        <tr>
          <td height="35" align="left" valign="top" colspan="3">
           <select name="tipo" class="listagris" id="tipo" tabindex="12">
             <option value="" <?php if($tipo==""){echo("selected='selected'");}?>>-</option>
             <option value="0" <?php if($tipo=="0"){echo("selected='selected'");}?>>Calle</option>
             <option value="1" <?php if($tipo=="1"){echo("selected='selected'");}?>>Jiron</option>
             <option value="2" <?php if($tipo=="2"){echo("selected='selected'");}?>>Pasaje</option>
             <option value="3" <?php if($tipo=="3"){echo("selected='selected'");}?>>Avenida</option>
           </select>
          <input name="nombre" type="text" class="cajatexto" id="nombre" tabindex="13" size="41" 
          maxlength="100" value="<?php if($nombre){echo($nombre);}else{echo("Nombre");}?>" 
          onfocus="if(this.value=='Nombre')this.value=''" onblur="if(this.value=='')this.value='Nombre';"/>
          <input name="dpto" type="text" class="cajatexto" id="dpto" tabindex="14" size="5" 
          maxlength="5" value="<?php if($dpto){echo($dpto);}else{echo("Dpto");}?>"
          onfocus="if(this.value=='Dpto')this.value=''" onblur="if(this.value=='')this.value='Dpto';"/>
          <input name="manzana" type="text" class="cajatexto" id="manzana" tabindex="15" size="10" 
          maxlength="2" value="<?php if($manzana){echo($manzana);}else{echo("Manzana");}?>"
          onfocus="if(this.value=='Manzana')this.value=''" onblur="if(this.value=='')this.value='Manzana';"/>
          <input name="lote" type="text" class="cajatexto" id="lote" tabindex="16" size="5" 
          maxlength="2" value="<?php if($lote){echo($lote);}else{echo("Lote");}?>"
          onfocus="if(this.value=='Lote')this.value=''" onblur="if(this.value=='')this.value='Lote';"/>
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle" colspan="3">
          <input name="urbanizacion" type="text" class="cajatexto" id="urbanizacion" tabindex="17"  
          size="40" maxlength="50" value="<?php if($urbanizacion){echo($urbanizacion);}else{echo("Urbanizacion");}?>" 
          onfocus="if(this.value=='Urbanizacion')this.value=''" onblur="if(this.value=='')this.value='Urbanizacion';"/>
          <input name="referencia" type="text" class="cajatexto" id="referencia" tabindex="18" size="51" 
          maxlength="100" value="<?php if($referencia){echo($referencia);}else{echo("Referencia");}?>"
          onfocus="if(this.value=='Referencia')this.value=''" onblur="if(this.value=='')this.value='Referencia';"/>
          </td>
        </tr>
        <tr>
          <td width="242" height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Ubigeo (*)</strong>
          <a href="javascript:void(0);" class="vinculo" 
          onclick="return hs.htmlExpand(this, { contentId: 'highslide-html' } )" >
          <img src="../../ver.gif" width="19" height="16" border="0"/></a>
          <div class="highslide-html-content" id="highslide-html" style="width:700px; height:220px;">
            <div class="highslide-header">
              <ul>
                <li class="highslide-move">
                <a href="#" onclick="return false">Mover</a>                    
                </li>
                <li class="highslide-close">
                <a href="#" onclick="return hs.close(this)">Cerrar</a>                    
                </li>
              </ul>
            </div>
            <div class="highslide-body">
            <iframe src="ubigeo.php" width="700" height="180" frameborder="0" id="frameubigeo"></iframe>
            </div>
            <div class="highslide-footer">
             <div></div>
            </div>
           </div>
           <input type="hidden" name="departamento_" id="departamento_" /> 
           <input type="hidden" name="provincia_" id="provincia_" />
           <input type="hidden" name="distrito_" id="distrito_" />
          </td>
          <td width="213" align="left" valign="middle" class="cajatextooscuro"></td>
          <td width="230" align="left" valign="middle" class="cajatextooscuro"></td>
        </tr>
      </table>
      </div>
      <div id="tab4" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">DATOS DE CONTACTO</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Teléfono (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="telefono" type="text" class="cajatexto" id="telefono" tabindex="19" size="100" maxlength="30" 
           value="<?php echo($telefono);?>" onkeypress="return validarnumero(event)"/>        
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Celular (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
            <select name="tipo_cel" class="listagris" id="tipo_cel" tabindex="20">
              <option value="0" <?php if($tipo_cel=="0"){echo("selected='selected'");}?>>Claro</option>
              <option value="1" <?php if($tipo_cel=="1"){echo("selected='selected'");}?>>Claro RPC</option>
              <option value="2" <?php if($tipo_cel=="2"){echo("selected='selected'");}?>>Movistar</option>
              <option value="3" <?php if($tipo_cel=="3"){echo("selected='selected'");}?>>Movistar RPM</option>
              <option value="4" <?php if($tipo_cel=="4"){echo("selected='selected'");}?>>Nextel</option>
            </select>
            <input name="celular" type="text" class="cajatexto" id="celular" tabindex="21" size="79" maxlength="30" 
             value="<?php echo($celular);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>E-mail (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <input name="email" type="text" class="cajatexto" id="email" tabindex="28" size="100" 
          maxlength="250" 
          value="<?php if($email){echo($email);}else{echo("@");}?>" 
          onfocus="if(this.value=='@')this.value=''" onblur="if(this.value=='')this.value='@';"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>¿Cómo se entero? (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <select name="se_entero" class="listagris" id="se_entero" tabindex="29">
            <option value="">---- Seleccione cómo se entero ----</option>
            <option value="0" <?php if($se_entero=="0"){echo("selected='selected'");}?>>PÁGINAS AMARILLAS IMPRESO</option>
            <option value="1" <?php if($se_entero=="1"){echo("selected='selected'");}?>>PÁGINAS AMARILLAS WEB</option>
            <option value="2" <?php if($se_entero=="2"){echo("selected='selected'");}?>>RECOMENDACIÓN DE UN AMIGO</option>
            <option value="3" <?php if($se_entero=="3"){echo("selected='selected'");}?>>PÁGINA WEB</option>
            <option value="4" <?php if($se_entero=="4"){echo("selected='selected'");}?>>AVISO IMPRESO</option>
            <option value="5" <?php if($se_entero=="5"){echo("selected='selected'");}?>>PASEO POR CENTRO COMERCIAL</option>
          </select>
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle">       
          </td>
        </tr>
      </table>
      </div>
      </div>
      </div>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="37" align="center" valign="bottom">
          <input name="button" type="submit" class="cajabotones" id="button" value="Registrar" 
          onclick="return validar();" tabindex="30"/>
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
 textodeiframe();
 if(form.ape_paterno.value=="" || form.ape_materno.value=="" || form.nombres.value=="" || form.tipo_doc.value=="" 
    || form.nro_doc.value=="" || form.estado_civil.value=="" || form.sexo.value=="" || form.fecha_nac.value=="" 
	|| form.pais.value=="" || form.telefono.value=="" || form.celular.value=="" || form.email.value==""  
	|| form.se_entero.value=="")  
 {
   alert("Complete todos los campos");
   if(form.ape_paterno.value==""){form.ape_paterno.style.backgroundColor = '#f8a5ad';} 
   if(form.ape_materno.value==""){form.ape_materno.style.backgroundColor = '#f8a5ad';}
   if(form.nombres.value==""){form.nombres.style.backgroundColor = '#f8a5ad';}
   if(form.tipo_doc.value==""){form.tipo_doc.style.backgroundColor = '#f8a5ad';}
   if(form.nro_doc.value==""){form.nro_doc.style.backgroundColor = '#f8a5ad';}
   if(form.estado_civil.value==""){form.estado_civil.style.backgroundColor = '#f8a5ad';}
   if(form.sexo.value==""){form.sexo.style.backgroundColor = '#f8a5ad';}
   if(form.fecha_nac.value==""){form.fecha_nac.style.backgroundColor = '#f8a5ad';}
   if(form.pais.value==""){form.pais.style.backgroundColor = '#f8a5ad';}
   if(form.nombre.value==""){form.nombre.style.backgroundColor = '#f8a5ad';}
   if(form.telefono.value==""){form.telefono.style.backgroundColor = '#f8a5ad';}
   if(form.celular.value==""){form.celular.style.backgroundColor = '#f8a5ad';}
   if(form.email.value==""){form.email.style.backgroundColor = '#f8a5ad';} 
   if(form.se_entero.value==""){form.se_entero.style.backgroundColor = '#f8a5ad';} 
   return false;
 }
 else
 {
   return true;
 }	
}
</script>