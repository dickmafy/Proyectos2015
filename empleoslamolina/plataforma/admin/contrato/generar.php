<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../BL/BLtrabajador.php");
require_once("../../../BL/BLrequerimiento.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$idempleador = $_GET["idempleador"];
$idtrabajador = $_GET["idtrabajador"]; 
$idrequerimiento = $_GET["idrequerimiento"];
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

<script>
function validarnumero(e) {    
var tecla= document.all ? tecla = e.keyCode : tecla = e.which;    
return ((tecla > 47 && tecla < 58) || tecla == 46);
}
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
        <td width="86" align="left" valign="middle"><strong class="negrita14">Contratos</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Registrar Contrato</td>
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
        <span class="texto">En esta sección podrás registrar un nuevo contrato en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Contratos</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <table width="843" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-bottom:20px;">
      <tr>
        <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
        <strong class="textoverde">DATOS DEL EMPLEADOR</strong>
        </td>
      </tr>
      <tr>
        <td width="282" height="20" align="left" valign="middle" class="cajatextooscuro">
        <strong>Nombres y Apellidos</strong> </td>
        <td width="245" align="left" valign="middle" class="cajatextooscuro"><strong>Contacto</strong></td>
        <td width="316" align="left" valign="middle" class="cajatextooscuro"><strong>Dirección</strong></td>
      </tr>
      <?php
	  $arr_datos = dame_datos_empleador($idempleador);
	  $ape_paterno = $arr_datos[1];
	  $ape_materno = $arr_datos[2];
	  $nombres = $arr_datos[3];
	  $estado_civil = $arr_datos[6];
	  $tipo = $arr_datos[13];
	  $nombre = $arr_datos[14];
	  $dpto = $arr_datos[15];
	  $manzana = $arr_datos[16];
	  $lote = $arr_datos[17];
	  $urbanizacion = $arr_datos[18];
	  $referencia = $arr_datos[19];
	  $iddepartamento = $arr_datos[20];
	  $idprovincia = $arr_datos[21];
	  $iddistrito = $arr_datos[22];
	  $telefono = $arr_datos[23];
	  $celular = $arr_datos[25];
	  $email = $arr_datos[32];
	  $nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
	  $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
	  ?>
      <tr>
        <td height="10" align="left" valign="top">
        <span class="texto"><?php echo($nombre_completo);?></span> <br />
        <?php 
		switch($estado_civil)
		{
		 case(0): echo("SOLTERO(A)");break;
		 case(1): echo("CASADO(A)");break;
		 case(2): echo("DIVORCIADO(A)");break;
		 case(3): echo("VIUDO(A)");break;
		} 
		?> 
        / 
        <?php echo(substr(date("d/m/Y"),6,4)-substr($arr_datos[8],6,4)); ?> AÑOS
        </td>
        <td align="left" valign="middle">
        <span class="texto"><?php echo($telefono." / ".$celular);?><br />
        <?php echo(strtoupper($email));?></span>
        </td>
        <td height="10" align="left" valign="middle">
        <span class="texto">
        <?php 
		switch($tipo)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
		?>
        <?php 
		$direccion = $nombre;
		if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
		if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
		if($lote!="Lo"){$direccion .= " LT. ".$lote;}
		echo(strtoupper($direccion));?>
        <br />
        <?php echo(strtoupper($nomdistrito));?>
        </span>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"></td>
      </tr>
    </table>
    <br /><br /><br /><br /><br /><br />
    <table width="843" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-bottom:20px;">
      <tr>
        <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
        <strong class="textoverde">DATOS DEL TRABAJADOR</strong>
        </td>
      </tr>
      <tr>
        <td width="282" height="20" align="left" valign="middle" class="cajatextooscuro">
        <strong>Nombres y Apellidos</strong> </td>
        <td width="245" align="left" valign="middle" class="cajatextooscuro"><strong>Contacto</strong></td>
        <td width="316" align="left" valign="middle" class="cajatextooscuro"><strong>Dirección</strong></td>
      </tr>
      <?php
	  $arr_datos = dame_datos_trabajador($idtrabajador);
	  $ape_paterno = $arr_datos[1];
	  $ape_materno = $arr_datos[2];
	  $nombres = $arr_datos[3];
	  $estado_civil = $arr_datos[6];
	  $tipo = $arr_datos[13];
	  $nombre = $arr_datos[12];
	  $dpto = $arr_datos[13];
	  $manzana = $arr_datos[14];
	  $lote = $arr_datos[15];
	  $urbanizacion = $arr_datos[16];
	  $referencia = $arr_datos[17];
	  $iddepartamento = $arr_datos[18];
	  $idprovincia = $arr_datos[19];
	  $iddistrito = $arr_datos[20];
	  $telefono = $arr_datos[21];
	  $celular = $arr_datos[23];
	  $nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
	  $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
	  ?>
      <tr>
        <td height="10" align="left" valign="top">
        <span class="texto"><?php echo($nombre_completo);?></span> <br />
        <?php 
		switch($estado_civil)
		{
		 case(0): echo("SOLTERO(A)");break;
		 case(1): echo("CASADO(A)");break;
		 case(2): echo("DIVORCIADO(A)");break;
		 case(3): echo("VIUDO(A)");break;
		} 
		?> 
        / 
        <?php echo(substr(date("d/m/Y"),6,4)-substr($arr_datos[9],6,4)); ?> AÑOS
        </td>
        <td align="left" valign="middle">
        <span class="texto"><?php echo($telefono." / ".$celular);?><br /><br />
        </td>
        <td height="10" align="left" valign="middle">
        <span class="texto">
        <?php 
		switch($tipo)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
		?>
        <?php 
		$direccion = $nombre;
		if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
		if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
		if($lote!="Lo"){$direccion .= " LT. ".$lote;}
		echo(strtoupper($direccion));?>
        <br />
        <?php echo(strtoupper($nomdistrito));?>
        </span>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"></td>
      </tr>
    </table>
    <form id="form" name="form" method="post" action="proc_generar_contrato.php" enctype="multipart/form-data">
      <input type="hidden" name="idempleador" id="idempleador" value="<?php echo($idempleador);?>"/>
      <input type="hidden" name="idtrabajador" id="idtrabajador" value="<?php echo($idtrabajador);?>"/>
      <input type="hidden" name="idrequerimiento" id="idrequerimiento" value="<?php echo($idrequerimiento);?>"/>
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Perfil</a></li>
        <li><a href="#tab2">Remuneracion</a></li>
        <li><a href="#tab3">Otros</a></li>
        <li><a href="#tab4">Vigencia</a></li>
      </ul>       
      <div class="tab_container">
        <div id="tab1" class="tab_content">
        <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="2" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">PERFIL DEL PUESTO</strong></td>
        </tr>
        <?php
		$arr_datos = dame_datos_requerimiento($idrequerimiento);
		$cama_afuera = $arr_datos[1];						
		$cama_adentro = $arr_datos[2]; 
		$horas = $arr_datos[3]; 
		$cocina = $arr_datos[4]; 
		$limpieza = $arr_datos[5]; 
		$ninera = $arr_datos[6]; 
		$enfermeria = $arr_datos[7]; 
		$mayordomo = $arr_datos[8]; 
		$chofer = $arr_datos[9]; 
		$todo_servicio = $arr_datos[10]; 
		$sueldo = $arr_datos[11]; 
		$descanso = $arr_datos[12]; 
		$otros = $arr_datos[13];
		?>
        <tr>
          <td width="75" height="31" align="left" valign="middle" class="cajatextooscuro">
          <strong>Tipo</strong></td>
          <td width="610" align="left" valign="middle" class="cajatextooscuro">
          <input name="cama_afuera" type="checkbox" id="cama_afuera" tabindex="1" value="1" 
          <?php if($cama_afuera){echo("checked = 'checked'");}?>/>
          Cama afuera
          <input type="checkbox" name="cama_adentro" id="cama_adentro" tabindex="2" value="1" 
          <?php if($cama_adentro){echo("checked = 'checked'");}?>/>
          Cama adentro
          <input type="checkbox" name="horas" id="horas" tabindex="3" value="1" 
          <?php if($horas){echo("checked = 'checked'");}?>/>
          Por Horas
          </td>
        </tr>
        <tr>
          <td height="31" align="left" valign="middle" class="cajatextooscuro"><strong>Actividad</strong></td>
          <td height="31" align="left" valign="middle" class="cajatextooscuro">
          <input type="checkbox" name="cocina" id="cocina" tabindex="4" value="1" 
          <?php if($cocina){echo("checked = 'checked'");}?>/>
		  Cocina
  	      <input type="checkbox" name="limpieza" id="limpieza" tabindex="5" value="1"
          <?php if($limpieza){echo("checked = 'checked'");}?>/>
		  Limpieza
		  <input type="checkbox" name="ninera" id="ninera" tabindex="6" value="1" 
          <?php if($ninera){echo("checked = 'checked'");}?>/>
		  Niñera
		  <input type="checkbox" name="enfermeria" id="enfermeria" tabindex="7" value="1" 
          <?php if($enfermeria){echo("checked = 'checked'");}?>/>
          Aux. Enfermería
          <input type="checkbox" name="mayordomo" id="mayordomo" tabindex="8" value="1" 
          <?php if($mayordomo){echo("checked = 'checked'");}?>/>
          Mayordomo
          <input type="checkbox" name="chofer" id="chofer" tabindex="9" value="1" 
          <?php if($chofer){echo("checked = 'checked'");}?>/>
          Chofer
          <br />
          <input type="checkbox" name="todo_servicio" id="todo_servicio" tabindex="10" value="1" 
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
      <div id="tab2" class="tab_content">
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
            <strong class="textoverde">REMUNERACIÓN</strong></td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro"><strong>Sueldo (S/.) (*)</strong> </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
            <input name="sueldo" type="text" class="cajatexto" id="sueldo" tabindex="11" size="100" maxlength="10" 
            value="<?php echo($sueldo);?>" onkeypress="return validarnumero(event)" 
            onblur="if(this.value==''){this.value='0'}; this.value=parseFloat(this.value)+'.00'"/> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro"><strong>Día de Descanso (*)</strong> </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
             <select name="descanso" class="listagris" id="descanso" tabindex="12">
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
      <div id="tab3" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">OTRAS ACTIVIDADES</strong></td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Descripción</strong></td>
          </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <input name="otros" size="100" class="cajatexto" id="otros" value="<?php echo($otros);?>" tabindex="13" />
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
          <td width="685" height="39" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">VIGENCIA DEL CONTRATO</strong></td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Fecha de Inicio</strong></td>
          </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <input name="fechaini" type="text" class="cajatexto" id="fechaini" tabindex="14" size="100" maxlength="10" 
          value="<?php echo(date("d/m/Y"));?>"/>
          <img src="../../calendario.gif" name="lanzador1" width="15" height="15" border="0" id="lanzador1" 
          title="Fecha de Inicio">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechaini", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador1" // el id del botón que lanzará el calendario 
          }); 
          </script>
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Fecha de Fin</strong></td>
          </tr>
        <tr>
          <td height="20" align="left" valign="middle">
          <input name="fechafin" type="text" class="cajatexto" id="fechafin" tabindex="15" size="100" maxlength="10" 
          value="<?php echo date("d/m/Y", strtotime(date("m/d/Y")." + 8 month"));?>"/>
          <img src="../../calendario.gif" name="lanzador2" width="15" height="15" border="0" id="lanzador2" 
          title="Fecha de Fin">
          <script type="text/javascript"> 
          Calendar.setup({ 
          inputField : "fechafin", // id del campo de texto 
          ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
          button : "lanzador2" // el id del botón que lanzará el calendario 
          }); 
          </script>
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
          <input name="button" type="submit" class="cajabotones" id="button" value="Generar Contrato" 
          onclick="if(confirm('Desea generar el contrato?')){return validar();}else{return false;}" tabindex="10"/></td>
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
 if(form.sueldo.value=="" || form.sueldo.value=="0.00" || form.descanso.value=="")  
 {
   alert("Complete todos los campos");
   if(form.sueldo.value==""){form.sueldo.style.backgroundColor = '#f8a5ad';}
   if(form.sueldo.value=="0.00"){form.sueldo.style.backgroundColor = '#f8a5ad';}
   if(form.descanso.value==""){form.descanso.style.backgroundColor = '#f8a5ad';} 
   return false;
 }
 else
 {
   return true;
 }	
}
</script>