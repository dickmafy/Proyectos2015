<?php
require_once("../../../BL/BLtrabajador.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$idtrabajador = $_GET["idtrabajador"]; 
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agencia de Empleos | Plataforma de Servicios</title>
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

function compara_fechas(fecha, fecha2)  
{  
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

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td height="50" align="center" valign="middle" bgcolor="#CCCCCC">
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" height="34" align="left" valign="middle"><span class="negrita16">MÓDULO USUARIO</span></td>
    <td width="50%" align="right" valign="middle">
    <a href="../../index.php" class="vinculo" onclick="return(confirm('Desea cerrar la sesion?'))">Cerrar Sesión</a>
    </td>
  </tr>
</table>
</td>
</tr>
</table>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Trabajadores</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Actualizar Trabajador</td>
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
        <span class="texto">En esta sección podrás actualizar los datos de un trabajador registrado en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Trabajadores</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="proc_actualizar_trabajador.php" enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Datos Personales</a></li>
        <li><a href="#tab2">Ubigeo</a></li>  
        <li><a href="#tab3">Contacto</a></li>
        <li><a href="#tab4">Perfil</a></li>
        <li><a href="#tab5">Remuneracion</a></li>
        <li><a href="#tab6">Otros</a></li>
        <li><a href="#tab7">Documentos</a></li>
        <li><a href="#tab8">Referencias</a></li>
      </ul>      
      <?php
   	  $arr_datos = dame_datos_trabajador($idtrabajador);
	  
	  if($_POST["idtrabajador"]!=""){$idtrabajador = $_POST["idtrabajador"];}else{$idtrabajador = $arr_datos[0];} 
	  if($_POST["ape_paterno"]!=""){$ape_paterno = $_POST["ape_paterno"];}else{$ape_paterno = $arr_datos[1];}   
	  if($_POST["ape_materno"]!=""){$ape_materno = $_POST["ape_materno"];}else{$ape_materno = $arr_datos[2];}  
	  if($_POST["nombres"]!=""){$nombres = $_POST["nombres"];}else{$nombres = $arr_datos[3];}
	  if($_POST["tipo_doc"]!=""){$tipo_doc = $_POST["tipo_doc"];}else{$tipo_doc = $arr_datos[4];}   
	  if($_POST["nro_doc"]!=""){$nro_doc = $_POST["nro_doc"];}else{$nro_doc = $arr_datos[5];} 						
	  if($_POST["estado_civil"]!=""){$estado_civil = $_POST["estado_civil"];}else{$estado_civil = $arr_datos[6];} 
	  if($_POST["sexo"]!=""){$sexo = $_POST["sexo"];}else{$sexo = $arr_datos[7];} 
	  if($_POST["instruccion"]!=""){$instruccion = $_POST["instruccion"];}else{$instruccion = $arr_datos[8];}  
	  if($_POST["fecha_nac"]!=""){$fecha_nac = $_POST["fecha_nac"];}else{$fecha_nac = $arr_datos[9];}
	  if($_POST["pais"]!=""){$idpais = $_POST["pais"];}else{$idpais = $arr_datos[10];}
	  if($_POST["tipo"]!=""){$tipo = $_POST["tipo"];}else{$tipo = $arr_datos[11];} 
	  if($_POST["nombre"]!=""){$nombre = $_POST["nombre"];}else{$nombre = $arr_datos[12];}			
	  if($_POST["dpto"]!=""){$dpto = $_POST["dpto"];}else{$dpto = $arr_datos[13];} 
	  if($_POST["manzana"]!=""){$manzana = $_POST["manzana"];}else{$manzana = $arr_datos[14];} 
	  if($_POST["lote"]!=""){$lote = $_POST["lote"];}else{$lote = $arr_datos[15];}
	  if($_POST["urbanizacion"]!=""){$urbanizacion = $_POST["urbanizacion"];}else{$urbanizacion = $arr_datos[16];} 
	  if($_POST["referencia"]!=""){$referencia = $_POST["referencia"];}else{$referencia = $arr_datos[17];} 
	  if($_POST["departamento"]!=""){$iddepartamento = $_POST["departamento"];}else{$iddepartamento = $arr_datos[18];}					
	  if($_POST["provincia"]!=""){$idprovincia = $_POST["provincia"];}else{$idprovincia = $arr_datos[19];} 
	  if($_POST["distrito"]!=""){$iddistrito = $_POST["distrito"];}else{$iddistrito = $arr_datos[20];}  
	  if($_POST["telefono"]!=""){$telefono = $_POST["telefono"];}else{$telefono =  $arr_datos[21];}
	  if($_POST["tipo_cel"]!=""){$tipo_cel = $_POST["tipo_cel"];}else{$tipo_cel =  $arr_datos[22];}
	  if($_POST["celular"]!=""){$celular = $_POST["celular"];}else{$celular = $arr_datos[23];} 
	  if($_POST["cama_afuera"]!=""){$cama_afuera = $_POST["cama_afuera"];}else{$cama_afuera = $arr_datos[24];}						
	  if($_POST["cama_adentro"]!=""){$cama_adentro = $_POST["cama_adentro"];}else{$cama_adentro = $arr_datos[25];} 
	  if($_POST["horas"]!=""){$horas = $_POST["horas"];}else{$horas = $arr_datos[26];}
	  if($_POST["cocina"]!=""){$cocina = $_POST["cocina"];}else{$cocina = $arr_datos[27];} 
	  if($_POST["limpieza"]!=""){$limpieza = $_POST["limpieza"];}else{$limpieza = $arr_datos[28];} 
	  if($_POST["ninera"]!=""){$ninera = $_POST["ninera"];}else{$ninera = $arr_datos[29];} 
	  if($_POST["enfermeria"]!=""){$enfermeria = $_POST["enfermeria"];}else{$enfermeria = $arr_datos[30];} 
	  if($_POST["mayordomo"]!=""){$mayordomo = $_POST["mayordomo"];}else{$mayordomo = $arr_datos[31];} 
	  if($_POST["chofer"]!=""){$chofer = $_POST["chofer"];}else{$chofer = $arr_datos[32];} 
	  if($_POST["todo_servicio"]!=""){$todo_servicio = $_POST["todo_servicio"];}else{$todo_servicio = $arr_datos[33];} 
	  if($_POST["sueldo"]!=""){$sueldo = $_POST["sueldo"];}else{$sueldo = $arr_datos[34];} 
	  if($_POST["descanso"]!=""){$descanso = $_POST["descanso"];}else{$descanso = $arr_datos[35];} 
	  if($_POST["tipo_estudio"]!=""){$tipo_estudio = $_POST["tipo_estudio"];}else{$tipo_estudio = $arr_datos[36];} 
	  if($_POST["descripcion"]!=""){$descripcion = $_POST["descripcion"];}else{$descripcion = $arr_datos[37];} 
	  if($_POST["empresa"]!=""){$empresa = $_POST["empresa"];}else{$empresa = $arr_datos[38];}
	  if($_POST["cargo"]!=""){$cargo = $_POST["cargo"];}else{$cargo = $arr_datos[39];}  
	  if($_POST["ama_casa"]!=""){$ama_casa = $_POST["ama_casa"];}else{$ama_casa = $arr_datos[40];} 
	  if($_POST["se_entero"]!=""){$se_entero = $_POST["se_entero"];}else{$se_entero = $arr_datos[41];} 
	  if($_POST["capacitacion1"]!=""){$capacitacion1 = $_POST["capacitacion1"];}else{$capacitacion1 = $arr_datos[42];}
	  if($_POST["capacitacion2"]!=""){$capacitacion2 = $_POST["capacitacion2"];}else{$capacitacion2 = $arr_datos[43];}
	  if($_POST["capacitacion3"]!=""){$capacitacion3 = $_POST["capacitacion3"];}else{$capacitacion3 = $arr_datos[44];}
	  if($_POST["capacitacion4"]!=""){$capacitacion4 = $_POST["capacitacion4"];}else{$capacitacion4 = $arr_datos[45];} 
	  if($_POST["documento1"]!=""){$documento1 = $_POST["documento1"];}else{$documento1 = $arr_datos[46];} 
	  if($_POST["documento2"]!=""){$documento2 = $_POST["documento2"];}else{$documento2 = $arr_datos[47];} 
	  if($_POST["documento3"]!=""){$documento3 = $_POST["documento3"];}else{$documento3 = $arr_datos[48];} 
	  if($_POST["tipo_doc4"]!=""){$tipo_doc4 = $_POST["tipo_doc4"];}else{$tipo_doc4 = $arr_datos[49];} 
	  if($_POST["documento4"]!=""){$documento4 = $_POST["documento4"];}else{$documento4 = $arr_datos[50];}
	  if($_POST["documento5"]!=""){$documento5 = $_POST["documento5"];}else{$documento5 = $arr_datos[51];}  
	  if($_POST["documento6"]!=""){$documento6 = $_POST["documento6"];}else{$documento6 = $arr_datos[52];} 
	  if($_POST["documento7"]!=""){$documento7 = $_POST["documento7"];}else{$documento7 = $arr_datos[53];} 
	  if($_POST["nombre_ref1"]!=""){$nombre_ref1 = $_POST["nombre_ref1"];}else{$nombre_ref1 = $arr_datos[54];}	
	  if($_POST["tipo_doc_ref1"]!=""){$tipo_doc_ref1 = $_POST["tipo_doc_ref1"];}else{$tipo_doc_ref1 = $arr_datos[55];}  
	  if($_POST["num_doc_ref1"]!=""){$num_doc_ref1 = $_POST["num_doc_ref1"];}else{$num_doc_ref1 = $arr_datos[56];} 
	  if($_POST["direccion_ref1"]!=""){$direccion_ref1 = $_POST["direccion_ref1"];}else{$direccion_ref1 = $arr_datos[57];} 
	  if($_POST["tipo_ref1"]!=""){$tipo_ref1 = $_POST["tipo_ref1"];}else{$tipo_ref1 = $arr_datos[58];}  
	  if($_POST["act_ref1"]!=""){$act_ref1 = $_POST["act_ref1"];}else{$act_ref1 = $arr_datos[59];}
	  if($_POST["fechaini_ref1"]!=""){$fechaini_ref1 = $_POST["fechaini_ref1"];}else{$fechaini_ref1 = $arr_datos[60];} 
	  if($_POST["fechafin_ref1"]!=""){$fechafin_ref1 = $_POST["fechafin_ref1"];}else{$fechafin_ref1 = $arr_datos[61];} 
	  if($_POST["retiro_ref1"]!=""){$retiro_ref1 = $_POST["retiro_ref1"];}else{$retiro_ref1 = $arr_datos[62];} 
	  if($_POST["telefono_ref1"]!=""){$telefono_ref1 = $_POST["telefono_ref1"];}else{$telefono_ref1 = $arr_datos[63];}  
	  if($_POST["nombre_ref2"]!=""){$nombre_ref2 = $_POST["nombre_ref2"];}else{$nombre_ref2 = $arr_datos[64];} 
	  if($_POST["tipo_doc_ref2"]!=""){$tipo_doc_ref2 = $_POST["tipo_doc_ref2"];}else{$tipo_doc_ref2 = $arr_datos[65];} 
	  if($_POST["num_doc_ref2"]!=""){$num_doc_ref2 = $_POST["num_doc_ref2"];}else{$num_doc_ref2 = $arr_datos[66];} 
	  if($_POST["direccion_ref2"]!=""){$direccion_ref2 = $_POST["direccion_ref2"];}else{$direccion_ref2 = $arr_datos[67];} 
	  if($_POST["tipo_ref2"]!=""){$tipo_ref2 = $_POST["tipo_ref2"];}else{$tipo_ref2 = $arr_datos[68];} 
	  if($_POST["act_ref2"]!=""){$act_ref2 = $_POST["act_ref2"];}else{$act_ref2 = $arr_datos[69];} 
	  if($_POST["fechaini_ref2"]!=""){$fechaini_ref2 = $_POST["fechaini_ref2"];}else{$fechaini_ref2 = $arr_datos[70];} 
	  if($_POST["fechafin_ref2"]!=""){$fechafin_ref2 = $_POST["fechafin_ref2"];}else{$fechafin_ref2 = $arr_datos[71];} 
	  if($_POST["retiro_ref2"]!=""){$retiro_ref2 = $_POST["retiro_ref2"];}else{$retiro_ref2 = $arr_datos[72];}  
	  if($_POST["telefono_ref2"]!=""){$telefono_ref2 = $_POST["telefono_ref2"];}else{$telefono_ref2 = $arr_datos[73];} 
	  ?>
      <div class="tab_container">
      <div id="tab1" class="tab_content">
      <input name="idtrabajador" type="hidden" id="idtrabajador" value="<?php echo($idtrabajador);?>" />
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
          <input name="nro_doc" type="text" class="cajatexto" id="nro_doc" tabindex="5" size="60" 
          maxlength="8" value="<?php echo($nro_doc);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Estado Civil  (*)</strong> 
          </td>
          <td width="210" align="left" valign="middle" class="cajatextooscuro">
          <strong>Sexo  (*)</strong> 
          </td>
          <td width="225" align="left" valign="middle" class="cajatextooscuro">
          <strong>Grado de Instrucción (*)</strong> 
          </td>
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
          <td align="left" valign="middle">
            <select name="instruccion" class="listagris" id="instruccion" tabindex="8">
              <option value="">------- Seleccione grado -----</option>
              <option value="0" <?php if($instruccion=="0"){echo("selected='selected'");}?>>Ninguno</option>
              <option value="1" <?php if($instruccion=="1"){echo("selected='selected'");}?>>Primaria</option>
              <option value="2" <?php if($instruccion=="2"){echo("selected='selected'");}?>>Secundaria</option>
              <option value="3" <?php if($instruccion=="3"){echo("selected='selected'");}?>>Superior Tecnico</option>
              <option value="4" <?php if($instruccion=="4"){echo("selected='selected'");}?>>Superior Universitario</option>
            </select>
          </td>
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
              <?php if($idpais==$idpais_){echo("selected='selected'");}?>><?php echo($nompais);?></option>
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
          maxlength="50" value="<?php if($referencia){echo($referencia);}else{echo("Referencia");}?>"
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
            <iframe src="ubigeo.php?depa=<?php echo($iddepartamento);?>&provin=<?php echo($idprovincia);?>&distri=<?php 
			echo($iddistrito);?>" width="700" height="180" frameborder="0" id="frameubigeo"></iframe>
            </div>
            <div class="highslide-footer">
             <div></div>
            </div>
           </div>
           <input type="hidden" name="departamento_" id="departamento_" /> 
           <input type="hidden" name="provincia_" id="provincia_" />
           <input type="hidden" name="distrito_" id="distrito_" />
          </td>
          <td width="213" align="left" valign="middle" class="cajatextooscuro">&nbsp;</td>
          <td width="230" align="left" valign="middle" class="cajatextooscuro">&nbsp;</td>
        </tr>
      </table>
      </div>
      <div id="tab3" class="tab_content">
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
          <td align="left" valign="middle">       
          </td>
        </tr>
      </table>
      </div>
      <div id="tab4" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="2" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">PERFIL DEL PUESTO</strong>
          </td>
        </tr>
        <tr>
          <td width="75" height="31" align="left" valign="middle" class="cajatextooscuro">
          <strong>Tipo</strong>
          </td>
          <td width="610" align="left" valign="middle" class="cajatextooscuro">
          <input name="cama_afuera" type="checkbox" id="cama_afuera" tabindex="22" value="1" 
          <?php if($cama_afuera){echo("checked = 'checked'");}?>/>
          Cama afuera
          <input type="checkbox" name="cama_adentro" id="cama_adentro" tabindex="23" value="1" 
          <?php if($cama_adentro){echo("checked = 'checked'");}?>/>
          Cama adentro
          <input type="checkbox" name="horas" id="horas" tabindex="24" value="1" 
          <?php if($horas){echo("checked = 'checked'");}?>/>
          Por Horas
          </td>
        </tr>
        <tr>
          <td height="31" align="left" valign="middle" class="cajatextooscuro">
          <strong>Actividad</strong>
          </td>
          <td height="31" align="left" valign="middle" class="cajatextooscuro">
          <input type="checkbox" name="cocina" id="cocina" tabindex="25" value="1" 
          <?php if($cocina){echo("checked = 'checked'");}?>/>
		  Cocina
  	      <input type="checkbox" name="limpieza" id="limpieza" tabindex="26" value="1"
          <?php if($limpieza){echo("checked = 'checked'");}?>/>
		  Limpieza
		  <input type="checkbox" name="ninera" id="ninera" tabindex="27" value="1" 
          <?php if($ninera){echo("checked = 'checked'");}?>/>
		  Niñera
		  <input type="checkbox" name="enfermeria" id="enfermeria" tabindex="28" value="1" 
          <?php if($enfermeria){echo("checked = 'checked'");}?>/>
          Aux. Enfermería
          <input type="checkbox" name="mayordomo" id="mayordomo" tabindex="29" value="1" 
          <?php if($mayordomo){echo("checked = 'checked'");}?>/>
          Mayordomo
          <input type="checkbox" name="chofer" id="chofer" tabindex="30" value="1" 
          <?php if($chofer){echo("checked = 'checked'");}?>/>
          Chofer
          <br />
          <input type="checkbox" name="todo_servicio" id="todo_servicio" tabindex="31" value="1" 
          <?php if($todo_servicio){echo("checked = 'checked'");}?>/> 
		  Todo servicio
		  </td>
        </tr>
        <tr>
          <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="middle">          
          </td>
        </tr>
      </table>
      </div>
      <div id="tab5" class="tab_content">
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
            <strong class="textoverde">REMUNERACIÓN</strong>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro">
            <strong>Sueldo (S/.) (*)</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
            <input name="sueldo" type="text" class="cajatexto" id="sueldo" tabindex="32" size="100" maxlength="10" 
             value="<?php echo($sueldo);?>" onkeypress="return validarnumero(event)" 
             onblur="this.value=parseFloat(this.value)+'.00'"/>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro">
            <strong>Día de Descanso (*)</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
              <select name="descanso" class="listagris" id="descanso" tabindex="33">
                <option value="">---- Seleccione día de descanso ----</option>
                <option value="0" <?php if($descanso=="0"){echo("selected='selected'");}?>>Lunes</option>
                <option value="1" <?php if($descanso=="1"){echo("selected='selected'");}?>>Martes</option>
                <option value="2" <?php if($descanso=="2"){echo("selected='selected'");}?>>Miercoles</option>
                <option value="3" <?php if($descanso=="3"){echo("selected='selected'");}?>>Jueves</option>
                <option value="4" <?php if($descanso=="4"){echo("selected='selected'");}?>>Viernes</option>
                <option value="5" <?php if($descanso=="5"){echo("selected='selected'");}?>>Sabado</option>
                <option value="6" <?php if($descanso=="6"){echo("selected='selected'");}?>>Domingo</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle"></td>
          </tr>
        </table>
      </div>
      <div id="tab6" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">OTRAS ACTIVIDADES</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Estudios</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
            <select name="tipo_estudio" class="listagris" id="tipo_estudio" tabindex="34">
              <option value="0" <?php if($tipo_estudio=="0"){echo("selected='selected'");}?>>Primaria</option>
              <option value="1" <?php if($tipo_estudio=="1"){echo("selected='selected'");}?>>Secundaria</option>
              <option value="2" <?php if($tipo_estudio=="2"){echo("selected='selected'");}?>>Tecnico</option>
              <option value="3" <?php if($tipo_estudio=="3"){echo("selected='selected'");}?>>Universitario</option>
            </select>
            <input name="descripcion" type="text" class="cajatexto" id="descripcion" tabindex="35" size="82" maxlength="50" 
             value="<?php echo($descripcion);?>"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Trabajo</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <input name="empresa" type="text" class="cajatexto" id="empresa" tabindex="36" 
          size="50" maxlength="50" value="<?php if($empresa){echo($empresa);}else{echo("Nombre de la empresa");}?>"  
          onfocus="if(this.value=='Nombre de la empresa')this.value=''" 
          onblur="if(this.value=='')this.value='Nombre de la empresa';"/>
          <input name="cargo" type="text" class="cajatexto" id="cargo" tabindex="37" size="43" 
          maxlength="50" value="<?php if($cargo){echo($cargo);}else{echo("Cargo");}?>" 
          onfocus="if(this.value=='Cargo')this.value=''" onblur="if(this.value=='')this.value='Cargo';"/>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Ama de Casa</strong>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
            <select name="ama_casa" class="listagris" id="ama_casa" tabindex="38">
              <option value="0" <?php if($ama_casa=="0"){echo("selected='selected'");}?>>No</option>
              <option value="1" <?php if($ama_casa=="1"){echo("selected='selected'");}?>>Si</option>
            </select>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <br />
          Cómo se entero 
          <select name="se_entero" class="listagris" id="se_entero" tabindex="39">
            <option value="">---- Seleccione cómo se entero ----</option>
            <option value="0" <?php if($se_entero=="0"){echo("selected='selected'");}?>>PÁGINAS AMARILLAS IMPRESO</option>
            <option value="1" <?php if($se_entero=="1"){echo("selected='selected'");}?>>PÁGINAS AMARILLAS WEB</option>
            <option value="2" <?php if($se_entero=="2"){echo("selected='selected'");}?>>RECOMENDACIÓN DE UN AMIGO</option>
            <option value="3" <?php if($se_entero=="3"){echo("selected='selected'");}?>>PÁGINA WEB</option>
            <option value="4" <?php if($se_entero=="4"){echo("selected='selected'");}?>>PERIÓDICO</option>
            <option value="5" <?php if($se_entero=="5"){echo("selected='selected'");}?>>PASEO POR CENTRO COMERCIAL</option>
          </select>        
          <br /><br />
          <strong>CAPACITACIÓN</strong>
          <br /><br />
          <input type="checkbox" name="capacitacion1" id="capacitacion1" tabindex="40" value="1" 
          <?php if($capacitacion1){echo("checked = 'checked'");}?>/> 
          Entrevista Laboral
          &nbsp;&nbsp;
          <input type="checkbox" name="capacitacion2" id="capacitacion2" tabindex="40" value="1" 
          <?php if($capacitacion2){echo("checked = 'checked'");}?>/> 
          Medidas de Seguridad
          &nbsp;&nbsp;
          <input type="checkbox" name="capacitacion3" id="capacitacion3" tabindex="40" value="1" 
          <?php if($capacitacion3){echo("checked = 'checked'");}?>/> 
          Manejo de Artefactos
          &nbsp;&nbsp;
          <input type="checkbox" name="capacitacion4" id="capacitacion4" tabindex="40" value="1" 
          <?php if($capacitacion4){echo("checked = 'checked'");}?>/> 
          Derechos Laborales           
          </td>
        </tr>
        <tr>
          <td align="left" valign="middle"></td>
        </tr>
      </table>
      </div>
      <div id="tab7" class="tab_content">
        <table width="688" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textonegro">DOCUMENTOS ADJUNTOS</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Certificado de Antecedentes Policiales (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento1" type="file" class="cajatexto" id="documento1" tabindex="41" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento1==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento1);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc1" id="doc1" value="<?php echo($documento1);?>" />
          </td>
          </tr>
          <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Certificado Domiciliario (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento2" type="file" class="cajatexto" id="documento2" tabindex="42" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento2==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento2);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc2" id="doc2" value="<?php echo($documento2);?>" />
          </td>
        </tr>
          <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Certificado de Salud (*)</strong>
          </td>
          </tr>
         <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento3" type="file" class="cajatexto" id="documento3" tabindex="43" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento3==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento3);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc3" id="doc3" value="<?php echo($documento3);?>" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Tipo Documento / Nro (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <select name="tipo_doc4" class="listagris" id="tipo_doc4" tabindex="44">
            <option value="0" <?php if($tipo_doc4=="0"){echo("selected='selected'");}?>>DNI</option>
            <option value="1" <?php if($tipo_doc4=="1"){echo("selected='selected'");}?>>Carnet de Extranjeria</option>
            <option value="2" <?php if($tipo_doc4=="2"){echo("selected='selected'");}?>>Pasaporte</option>
          </select>
          <input name="documento4" type="file" class="cajatexto" id="documento4" tabindex="45" size="54"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento4==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento4);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc4" id="doc4" value="<?php echo($documento4);?>" />
          </td>
          </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Pago de Servicios (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento5" type="file" class="cajatexto" id="documento5" tabindex="46" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento5==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento5);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc5" id="doc5" value="<?php echo($documento5);?>" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Otros (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento6" type="file" class="cajatexto" id="documento6" tabindex="46" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento6==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento6);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc6" id="doc6" value="<?php echo($documento6);?>" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Otros (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="documento7" type="file" class="cajatexto" id="documento7" tabindex="46" size="80"/>
          <br />(.doc, .pdf, .jpg)
          <?php
          if($documento7==""){
          echo "<span class='textorojo'>Documento no disponible</span>";
          }else{
          ?>
          <img src="../../ver.gif">
          <a href="../../../trabajadores/<?php echo($documento7);?>" target="_blank" class="vinculo"
          onclick="return hs.expand(this)" title="">Ver documento</a>
          <?php
          }
          ?>     
          <input type="hidden" name="doc7" id="doc7" value="<?php echo($documento7);?>" />
          </td>
        </tr>
        <tr>
        </tr>
        <tr>
        <td align="left" valign="top" class="cajatextooscuro">&nbsp;</td>
       </tr>
      </table>
       </div>
       <div id="tab8" class="tab_content">
        <table width="688" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="2" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textonegro">REFERENCIAS PERSONALES</strong>
          </td>
        </tr>
        <tr>
          <td width="349" align="left" valign="top" class="cajatextooscuro">
          <strong>Nombre Empleador (*)</strong>
          </td>
          <td width="339" align="left" valign="top" class="cajatextooscuro">
          <strong>Nombre Empleador (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="nombre_ref1" type="text" class="cajatexto" id="nombre_ref1" tabindex="47" size="48" maxlength="100" 
           value="<?php echo($nombre_ref1);?>"/>
          <br />
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="nombre_ref2" type="text" class="cajatexto" id="nombre_ref2" tabindex="57" size="48" maxlength="100" 
           value="<?php echo($nombre_ref2);?>"/>
          <br />
          </td>
        </tr>
          <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Tipo Documento / Nro</strong>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Tipo Documento / Nro</strong>
          </td>
          </tr>
          <tr>
            <td align="left" valign="top" class="cajatextooscuro">
              <select name="tipo_doc_ref1" class="listagris" id="tipo_doc_ref1" tabindex="48">
                <option value="0" <?php if($tipo_doc_ref1=="0"){echo("selected='selected'");}?>>DNI</option>
                <option value="1" <?php if($tipo_doc_ref1=="1"){echo("selected='selected'");}?>>Carnet de Extranjeria</option>
                <option value="2" <?php if($tipo_doc_ref1=="2"){echo("selected='selected'");}?>>Pasaporte</option>
              </select>
              <input name="num_doc_ref1" type="text" class="cajatexto" id="num_doc_ref1" tabindex="49" size="20" 
              maxlength="8" value="<?php echo($num_doc_ref1);?>" onkeypress="return validarnumero(event)"/>
            <br />
            </td>
            <td align="left" valign="top" class="cajatextooscuro">
              <select name="tipo_doc_ref2" class="listagris" id="tipo_doc_ref2" tabindex="58">
                <option value="0" <?php if($tipo_doc_ref2=="0"){echo("selected='selected'");}?>>DNI</option>
                <option value="1" <?php if($tipo_doc_ref2=="1"){echo("selected='selected'");}?>>Carnet de Extranjeria</option>
                <option value="2" <?php if($tipo_doc_ref2=="2"){echo("selected='selected'");}?>>Pasaporte</option>
              </select>
              <input name="num_doc_ref2" type="text" class="cajatexto" id="num_doc_ref2" tabindex="59" size="20" 
              maxlength="8"  value="<?php echo($num_doc_ref2);?>" onkeypress="return validarnumero(event)"/>
            <br />
            </td>
          </tr>
          <tr>
          <td align="left" valign="top" class="cajatextooscuro"><strong>Dirección</strong></td>
          <td align="left" valign="top" class="cajatextooscuro"><strong>Dirección</strong></td>
          </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="direccion_ref1" type="text" class="cajatexto" id="direccion_ref1" tabindex="50" size="48" 
          maxlength="100" value="<?php echo($direccion_ref1);?>"/>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="direccion_ref2" type="text" class="cajatexto" id="direccion_ref2" tabindex="60" size="48" 
          maxlength="100" value="<?php echo($direccion_ref2);?>"/>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Labor Realizada (*)</strong>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Labor Realizada (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
            <select name="tipo_ref1" class="listagris" id="tipo_ref1" tabindex="51">
              <option value="0" <?php if($tipo_ref1=="0"){echo("selected='selected'");}?>>Cama afuera</option>
              <option value="1" <?php if($tipo_ref1=="1"){echo("selected='selected'");}?>>Cama adentro</option>
              <option value="2" <?php if($tipo_ref1=="2"){echo("selected='selected'");}?>>Por horas</option>
            </select>
            <select name="act_ref1" class="listagris" id="act_ref1" tabindex="52">
              <option value="0" <?php if($act_ref1=="0"){echo("selected='selected'");}?>>Cocina</option>
              <option value="1" <?php if($act_ref1=="1"){echo("selected='selected'");}?>>Limpieza</option>
              <option value="2" <?php if($act_ref1=="2"){echo("selected='selected'");}?>>Niñera</option>
              <option value="3" <?php if($act_ref1=="3"){echo("selected='selected'");}?>>Aux. Enfermeria</option>
              <option value="4" <?php if($act_ref1=="4"){echo("selected='selected'");}?>>Mayordomo</option>
              <option value="5" <?php if($act_ref1=="5"){echo("selected='selected'");}?>>Chofer</option>
              <option value="6" <?php if($act_ref1=="6"){echo("selected='selected'");}?>>Todo servicio</option>
            </select>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
            <select name="tipo_ref2" class="listagris" id="tipo_ref2" tabindex="61">
              <option value="0" <?php if($tipo_ref2=="0"){echo("selected='selected'");}?>>Cama afuera</option>
              <option value="1" <?php if($tipo_ref2=="1"){echo("selected='selected'");}?>>Cama adentro</option>
              <option value="2" <?php if($tipo_ref2=="2"){echo("selected='selected'");}?>>Por horas</option>
            </select>
            <select name="act_ref2" class="listagris" id="act_ref2" tabindex="62">
              <option value="0" <?php if($act_ref2=="0"){echo("selected='selected'");}?>>Cocina</option>
              <option value="1" <?php if($act_ref2=="1"){echo("selected='selected'");}?>>Limpieza</option>
              <option value="2" <?php if($act_ref2=="2"){echo("selected='selected'");}?>>Niñera</option>
              <option value="3" <?php if($act_ref2=="3"){echo("selected='selected'");}?>>Aux. Enfermeria</option>
              <option value="4" <?php if($act_ref2=="4"){echo("selected='selected'");}?>>Mayordomo</option>
              <option value="5" <?php if($act_ref2=="5"){echo("selected='selected'");}?>>Chofer</option>
              <option value="6" <?php if($act_ref2=="6"){echo("selected='selected'");}?>>Todo servicio</option>
            </select>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Tiempo de Trabajo (*)</strong>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Tiempo de Trabajo (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <span class="texto">Desde</span>	
          <input name="fechaini_ref1" type="text" class="cajatexto" id="fechaini_ref1" tabindex="53" size="10" maxlength="10" 
          onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#F5F5F5'" 
          value="<?php echo($fechaini_ref1);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');"/>
          <img src="../../calendario.gif" name="lanzador1" width="15" height="15" border="0" id="lanzador1" title="Fecha">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechaini_ref1", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador1" // el id del botón que lanzará el calendario 
          }); 
          </script>
          <span class="texto">Hasta</span>	
          <input name="fechafin_ref1" type="text" class="cajatexto" id="fechafin_ref1" tabindex="54" size="10" maxlength="10" 
          onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#F5F5F5'; " 
          value="<?php echo($fechafin_ref1);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');"/>
          <img src="../../calendario.gif" name="lanzador2" width="15" height="15" border="0" id="lanzador2" title="Fecha">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechafin_ref1", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador2" // el id del botón que lanzará el calendario 
          }); 
          </script>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <span class="texto">Desde</span>	
          <input name="fechaini_ref2" type="text" class="cajatexto" id="fechaini_ref2" tabindex="63" size="10" maxlength="10" 
          onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#F5F5F5'" 
          value="<?php echo($fechaini_ref2);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');"/>
          <img src="../../calendario.gif" name="lanzador3" width="15" height="15" border="0" id="lanzador3" title="Fecha">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechaini_ref2", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador3" // el id del botón que lanzará el calendario 
          }); 
          </script>
          <span class="texto">Hasta</span>	
          <input name="fechafin_ref2" type="text" class="cajatexto" id="fechafin_ref2" tabindex="64" size="10" maxlength="10" 
          onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#F5F5F5'" 
          value="<?php echo($fechafin_ref2);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');"/>
          <img src="../../calendario.gif" name="lanzador4" width="15" height="15" border="0" id="lanzador4" title="Fecha">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechafin_ref2", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador4" // el id del botón que lanzará el calendario 
          }); 
          </script>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro"><strong>Motivo de Retiro</strong></td>
          <td align="left" valign="top" class="cajatextooscuro"><strong>Motivo de Retiro</strong></td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="retiro_ref1" type="text" class="cajatexto" id="retiro_ref1" tabindex="55" size="48" maxlength="100" 
          value="<?php echo($retiro_ref1);?>"/>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="retiro_ref2" type="text" class="cajatexto" id="retiro_ref2" tabindex="65" size="48" maxlength="100" 
          value="<?php echo($retiro_ref2);?>"/>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Telefono / Celular (*)</strong>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <strong>Telefono / Celular (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="telefono_ref1" type="text" class="cajatexto" id="telefono_ref1" tabindex="56" size="48" 
          maxlength="100" value="<?php echo($telefono_ref1);?>" onkeypress="return validarnumero(event)"/>
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <input name="telefono_ref2" type="text" class="cajatexto" id="telefono_ref2" tabindex="66" size="48" 
          maxlength="100" value="<?php echo($telefono_ref2);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr><tr>
        <td colspan="2" align="left" valign="top" class="cajatextooscuro">&nbsp;</td>
       </tr>
      </table>
       </div>
       </div>
      </div>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="37" align="center" valign="bottom">
          <input name="button" type="submit" class="cajabotones" id="button" value="Actualizar" 
          onclick="return validar();" tabindex="67"/></td>
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
    || form.nro_doc.value=="" || form.estado_civil.value=="" || form.sexo.value=="" || form.instruccion.value=="" 
	|| form.fecha_nac.value=="" || form.pais.value=="" || form.celular.value=="" || form.sueldo.value=="" 
	|| form.descanso.value=="")  
 {
   alert("Complete todos los campos");
   if(form.ape_paterno.value==""){form.ape_paterno.style.backgroundColor = '#f8a5ad';} 
   if(form.ape_materno.value==""){form.ape_materno.style.backgroundColor = '#f8a5ad';}
   if(form.nombres.value==""){form.nombres.style.backgroundColor = '#f8a5ad';}
   if(form.tipo_doc.value==""){form.tipo_doc.style.backgroundColor = '#f8a5ad';}
   if(form.nro_doc.value==""){form.nro_doc.style.backgroundColor = '#f8a5ad';}
   if(form.estado_civil.value==""){form.estado_civil.style.backgroundColor = '#f8a5ad';}
   if(form.sexo.value==""){form.sexo.style.backgroundColor = '#f8a5ad';}
   if(form.instruccion.value==""){form.instruccion.style.backgroundColor = '#f8a5ad';}
   if(form.fecha_nac.value==""){form.fecha_nac.style.backgroundColor = '#f8a5ad';}
   if(form.pais.value==""){form.pais.style.backgroundColor = '#f8a5ad';}
   if(form.nombre.value==""){form.nombre.style.backgroundColor = '#f8a5ad';} 
   if(form.celular.value==""){form.celular.style.backgroundColor = '#f8a5ad';}
   if(form.sueldo.value==""){form.sueldo.style.backgroundColor = '#f8a5ad';}
   if(form.descanso.value==""){form.descanso.style.backgroundColor = '#f8a5ad';} 
   return false;
 }
 else
 {
   return true;
 }	
}
</script>