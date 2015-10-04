<?php
require_once("../../../BL/BLcomprobante.php");
fnSessionStart();
$conexion = conectar_cms();
$usuario = $_SESSION["usuario"]; 
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style>
@import url("../../estilos.css");
</style>
<script>
function validarnumero(e) {    
var tecla= document.all ? tecla = e.keyCode : tecla = e.which;    
return ((tecla > 47 && tecla < 58) || tecla == 46);
}
</script>
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Comprobantes</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Mantenimiento</td>
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
        <span class="texto">En esta sección podrás actualizar las variables de mantenimiento en el sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Comprobantes</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="370" colspan="2" align="center" valign="top">
    <?php
	$arr_datos = dame_datos_mantenimiento();
	$serie = $arr_datos[1];
	$correlativo = $arr_datos[2];
	$autorizacion = $arr_datos[3];
	$glosa = $arr_datos[4];
	$serie_interno = $arr_datos[5];
	$correlativo_interno = $arr_datos[6];
	?>
    <form id="form" name="form" method="post" action="proc_actualizar_mantenimiento.php">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">MANTENIMIENTO</strong></td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nro. Serie (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="serie" type="text" class="cajatexto" id="serie" tabindex="1" size="100" 
          maxlength="3" value="<?php echo($serie);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nro. Correlativo (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="correlativo" type="text" class="cajatexto" id="correlativo" tabindex="2" size="100" 
          maxlength="7" value="<?php echo($correlativo);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nro. de Autorización (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="autorizacion" type="text" class="cajatexto" id="autorizacion" tabindex="3" size="100" 
          maxlength="30" value="<?php echo($autorizacion);?>"/>          
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Glosa (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="glosa" type="text" class="cajatexto" id="glosa" tabindex="4" size="100" 
          maxlength="100" value="<?php echo($glosa);?>"/>          
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nro. Serie Interno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="serie_interno" type="text" class="cajatexto" id="serie_interno" tabindex="5" size="100" 
          maxlength="7" value="<?php echo($serie_interno);?>" onkeypress="return validarnumero(event)" 
          readonly="readonly"/>
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong>Nro. Correlativo Interno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="correlativo_interno" type="text" class="cajatexto" id="correlativo_interno" tabindex="6" size="100" 
          maxlength="7" value="<?php echo($correlativo_interno);?>" onkeypress="return validarnumero(event)"/>
          </td>
        </tr>
      </table>
      <br />
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="685" height="37" align="center" valign="bottom">
          <input name="button" type="submit" class="cajabotones" id="button" value="Actualizar" 
          onclick="return validar();" tabindex="5"/>
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
 if(form.serie.value=="" || form.correlativo.value=="" || form.autorizacion.value=="" || form.glosa.value=="")  
 {
   alert("Complete todos los campos");
   if(form.serie.value==""){form.serie.style.backgroundColor = '#f8a5ad';} 
   if(form.correlativo.value==""){form.correlativo.style.backgroundColor = '#f8a5ad';}
   if(form.autorizacion.value==""){form.autorizacion.style.backgroundColor = '#f8a5ad';}
   if(form.glosa.value==""){form.glosa.style.backgroundColor = '#f8a5ad';}
   return false;
 }
 else
 {
   return true;
 }	
}
</script>