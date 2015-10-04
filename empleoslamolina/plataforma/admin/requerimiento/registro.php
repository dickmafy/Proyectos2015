<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
error_reporting(0);
$idempleador = $_GET["idempleador"]; 
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
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Requerimientos</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Registrar Requerimiento</td>
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
        <span class="texto">En esta sección podrás registrar un nuevo requerimiento en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Requerimientos</a></td>
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
        <td height="10" align="left" valign="middle">
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
    <form id="form" name="form" method="post" action="proc_registrar_requerimiento.php" 
    enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Perfil</a></li>
        <li><a href="#tab2">Remuneracion</a></li>
        <li><a href="#tab3">Otros</a></li>
      </ul>       
      <div class="tab_container">
      <div id="tab1" class="tab_content">
      <input type="hidden" name="idempleador" id="idempleador" value="<?php echo($idempleador);?>"/>
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
          <td height="31" align="left" valign="middle" class="cajatextooscuro">
          <strong>Actividad</strong>
          </td>
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
            <input name="sueldo" type="text" class="cajatexto" id="sueldo" tabindex="11" size="100" maxlength="10" 
            value="<?php echo($sueldo);?>" onkeypress="return validarnumero(event)" 
            onblur="if(this.value==''){this.value='0'}; this.value=parseFloat(this.value)+'.00'"/>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro">
            <strong>Día de Descanso (*)</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
              <select name="descanso" class="listagris" id="descanso" tabindex="12">
                <option value="6" <?php if($descanso=="6"){echo("selected='selected'");}?>>Domingo</option>
                <option value="1" <?php if($descanso=="1"){echo("selected='selected'");}?>>Martes</option>
                <option value="2" <?php if($descanso=="2"){echo("selected='selected'");}?>>Miercoles</option>
                <option value="3" <?php if($descanso=="3"){echo("selected='selected'");}?>>Jueves</option>
                <option value="4" <?php if($descanso=="4"){echo("selected='selected'");}?>>Viernes</option>
                <option value="5" <?php if($descanso=="5"){echo("selected='selected'");}?>>Sabado</option>
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
          <input name="otros" type="text" class="cajatexto" id="otros" tabindex="13" size="100" 
          maxlength="100" value="<?php echo($descripcion);?>"/>          
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
          onclick="return validar();" tabindex="14"/>
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
	var foundCount = 0
	for(i=0;i<document.getElementsByTagName("input").length;i++)
	{
		if(document.getElementsByTagName("input")[i].type == "checkbox")
		{
		//alert(document.getElementsByTagName("input")[i].checked)
			if(document.getElementsByTagName("input")[i].checked == true)
			{
			foundCount++
			}
		}
	}	
	if (foundCount >0 )
	{
	 if(form.sueldo.value=="" || form.sueldo.value=="0.00" ||form.descanso.value=="")  
     {
	  if(form.sueldo.value==""){form.sueldo.style.backgroundColor = '#f8a5ad';}
	  if(form.sueldo.value=="0.00"){form.sueldo.style.backgroundColor = '#f8a5ad';}
      if(form.descanso.value==""){form.descanso.style.backgroundColor = '#f8a5ad';} 
      alert('Complete todos los campos');
	  return false;
	 }
	 else
	 { 
	  document.form.action= 'proc_registrar_requerimiento.php'; 
 	  document.form.submit();
	 } 
	}
	else
	{
	 alert('Debe seleccionar al menos un tipo y actividad.');
	 return false;
	}
}
</script>