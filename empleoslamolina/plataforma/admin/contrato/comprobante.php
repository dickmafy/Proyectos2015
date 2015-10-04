<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../BL/BLtrabajador.php");
require_once("../../../BL/BLrequerimiento.php");
require_once("../../../BL/BLcontrato.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$idcontrato = $_GET["idcontrato"];
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
</head>

<body>
<table width="54%" height="259" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="590" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" align="center">&nbsp;</td>
        <td width="74" align="left" valign="middle"><span class="negrita14">Contratos</span></td>
        <td width="509" align="right" valign="middle" class="negrita14">Generar Comprobante</td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
  <tr>
    <td height="28" align="left" valign="middle">
    <table width="583" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="571" align="left" valign="middle">
        <span class="cajatextooscuro">En esta sección podrás ingresar las comisiones para el comprobante</span></td>
      </tr>
    </table>    
    </td>
  </tr>
  <tr>
    <td height="5" align="left" valign="top"></td>
  </tr>
  <tr>
    <td height="193" align="center" valign="top">
    <?php
	$arr_datos = dame_datos_contrato($idcontrato);
	$idempleador = $arr_datos[1]; 
	$idtrabajador = $arr_datos[2]; 
	$idrequerimiento = $arr_datos[3];
	$sueldo = $arr_datos[14]; 
	?>
    <form id="form" name="form" method="post" action="proc_registrar_comprobante.php" enctype="multipart/form-data">
    <input type="hidden" name="idcontrato" id="idcontrato" value="<?php echo($idcontrato);?>"/>
    <input type="hidden" name="idempleador" id="idempleador" value="<?php echo($idempleador);?>"/>
    <input type="hidden" name="idtrabajador" id="idtrabajador" value="<?php echo($idtrabajador);?>"/>
    <input type="hidden" name="idrequerimiento" id="idrequerimiento" value="<?php echo($idrequerimiento);?>"/>
    <table width="562" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-left:20px;">
    <tr>
    <td height="35" colspan="2" align="left" valign="middle" class="textorojo">
    <strong>CONTRATO GENERADO NRO: 
	<?php 
	$digitos = strlen($idcontrato); 
	$faltantes = 7-$digitos; 
	$cadenaceros = "";
	for($i=1; $i<=$faltantes; $i++)
	{$cadenaceros .= $cadenaceros+"0";}
	echo($cadenaceros.$idcontrato);
	?>
    </strong>    
    </td>
    </tr>
    <tr>
      <td width="227" height="35" align="right" valign="middle" class="texto">COMISIÓN EMPLEADOR</td>
      <td width="335" align="left" valign="middle" class="textorojo"> &nbsp;&nbsp;
      <script language="javascript">
	  function sumar()
	  {
		var total = document.getElementById('total');
		form.total.value = parseFloat(form.com_empleador.value) + 
					  parseFloat(form.com_trabajador.value) + '.00';
	  }
	  </script>
      <input name="com_empleador" type="text" class="cajatexto" id="com_empleador" tabindex="1" size="40" 
      maxlength="50" value="<?php echo($sueldo*(0.30).".00");?>" 
      onblur="if(this.value==''){this.value='0'}; this.value=parseFloat(this.value)+'.00'; sumar();" 
      onkeypress="return validarnumero(event)"/>
      </td>
    </tr>
    <tr>
      <td height="35" align="right" valign="middle" class="textorojo"><span class="texto">TRABAJADOR</span></td>
      <td height="35" align="left" valign="middle" class="textorojo"> &nbsp;&nbsp;
      <input name="com_trabajador" type="text" class="cajatexto" id="com_trabajador" tabindex="2" size="40" 
      maxlength="50" value="<?php echo($sueldo*(0.30).".00");?>" 
      onblur="if(this.value==''){this.value='0'}; this.value=parseFloat(this.value)+'.00'; sumar();" 
      onkeypress="return validarnumero(event)"/>
      </td>
    </tr>
    <tr>
      <td height="35" align="right" valign="middle" class="textorojo">TOTAL</td>
      <td height="35" align="left" valign="middle" class="textorojo"> &nbsp;&nbsp;
      <input name="total" type="text" class="cajatexto" id="total" tabindex="3" size="40" 
      maxlength="50" value="<?php echo($sueldo*(0.60).".00");?>" readonly="readonly"/>
      </td>
    </tr>
    </table>
    <table width="496" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="496" height="37" align="center" valign="bottom">
      <input name="button" type="submit" class="cajabotones" id="button" value="Aceptar" tabindex="4"/>
      </td>
     </tr>
    </table>
    </form>    
   </td>
  </tr>
</table>
</body>
</html>