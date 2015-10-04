<?php
require_once("../../../BL/BLcontrato.php");
require_once("../../../BL/BLcomprobante.php");
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
        <td width="509" align="right" valign="middle" class="negrita14">Comprobante Generado</td>
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
    <td height="35" colspan="2" align="left" valign="middle" class="texto">
    <strong>CONTRATO NRO: 
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
    <?php
	$arr_comprobantes = dame_comprobantes_contrato($idcontrato);
	$monto = $arr_comprobantes[1][4];
	$serie = $arr_comprobantes[1][5];
	$correlativo = $arr_comprobantes[1][6]; 
	?>
    <tr>
      <td width="227" height="77" align="right" valign="top" class="textorojo">
      <br />
      COMPROBANTE      
      </td>
      <td width="335" align="left" valign="top" class="texto">
      <br />
      &nbsp;&nbsp; NRO. 
      <?php 
	  $digitos = strlen($serie); 
	  $faltantes = 3-$digitos; 
	  $cadenaceros = "";
	  for($i=1; $i<=$faltantes; $i++)
	  {$cadenaceros .= $cadenaceros+"0";}
	  echo($cadenaceros.$serie);
	  echo(" - ");
	  $digitos = strlen($correlativo); 
	  $faltantes = 7-$digitos; 
	  $cadenaceros = "";
	  for($i=1; $i<=$faltantes; $i++)
	  {$cadenaceros .= $cadenaceros+"0";}
	  echo($cadenaceros.$correlativo);
	  ?>    
      <br />
      &nbsp;&nbsp; TOTAL: S/.
      <?php echo($monto);?>      
      </td>
    </tr>
    <tr>
      <td height="18" colspan="2" align="center" valign="top" class="textorojo">
      <a href="../comprobante/administrar.php" class="vinculo" target="_parent">VER COMPROBANTES</a>
      </td>
      </tr>
    </table>
    </form>    
   </td>
  </tr>
</table>
</body>
</html>