<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BERTHA EXPERTA EN CASA Seguridad y confianza a su servicio</title>
<style type="text/css">
@import url("estilos.css");
</style>
<?php include("librerias.php"); ?>

<script>
function validarnumero(e) {    
var tecla= document.all ? tecla = e.keyCode : tecla = e.which;    
return ((tecla > 47 && tecla < 58) || tecla == 46);
}
</script>
</head>

<body>
<?php
$menu = "mpostular";
include("cabecera.php");
?>
<div id="cabecera">
<img src="../imagenes/cabpostula.jpg" width="957" height="210" />
</div>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td height="210" align="center" valign="top">&nbsp;</td>
</tr>
<tr>
<td height="700" align="center" valign="top">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="950" height="74" align="left" valign="middle" class="textoverdeenorme">Postula</td>
  </tr>
  <tr>
    <td height="470" align="center" valign="top">
    <table width="940" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="485" align="left" valign="top">
        <div align="justify" class="textoplomogrande">
        En sencillos pasos. Completa un breve formulario y ya estarás dentro de nuestra base de datos de trabajadores.
        </div>
        <br /><br />
        <form id="form" name="form" method="post" action="enviar_postula.php">
        <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="46" colspan="3" align="left" valign="top" class="textoverdegrande">
          FORMULARIO DEL POSTULANTE</td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="textoplomogrande">
          <strong>Apellido Paterno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="ape_paterno" type="text" class="cajatexto" id="ape_paterno" tabindex="1" size="100" 
          maxlength="50"/>          
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="textoplomogrande">
          <strong>Apellido Materno (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="ape_materno" type="text" class="cajatexto" id="ape_materno" tabindex="2" size="100" 
          maxlength="50"/>          
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="textoplomogrande">
          <strong>Nombres (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="nombres" type="text" class="cajatexto" id="nombres" tabindex="3" size="100" 
          maxlength="50"/>          
          </td>
        </tr>
        <tr>
          <td height="20" colspan="3" align="left" valign="middle" class="textoplomogrande">
          <strong>Dirección (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="10" colspan="3" align="left" valign="middle">
          <input name="direccion" type="text" class="cajatexto" id="direccion" tabindex="4" size="100" 
          maxlength="100"/>          
          </td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="middle"></td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="textoplomogrande">
          <strong>Teléfono </strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="telefono" type="text" class="cajatexto" id="telefono" tabindex="5" size="100" maxlength="30" 
          onkeypress="return validarnumero(event)"/>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="textoplomogrande">
          <strong>Celular (*)</strong>          
          </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle">
            <select name="tipo_cel" class="lista" id="tipo_cel" tabindex="6">
              <option value="0">Claro</option>
              <option value="1">Claro RPC</option>
              <option value="2">Movistar</option>
              <option value="3">Movistar RPM</option>
              <option value="4">Nextel</option>
            </select>
            <input name="celular" type="text" class="cajatexto" id="celular" tabindex="7" size="82" maxlength="30" 
            onkeypress="return validarnumero(event)"/>          
            </td>
        </tr>
        <tr>
          <td height="20" align="left" valign="middle" class="textoplomogrande">
          <strong>E-mail </strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="left" valign="middle">
          <input name="email" type="text" class="cajatexto" id="email" tabindex="8" size="100" maxlength="30" 
          value="@"/>          
          </td>
        </tr>
      </table>
      <table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="93" height="42" align="left" valign="middle" class="textoplomogrande">
          <strong>Tipo</strong>          
          </td>
          <td width="657" align="left" valign="middle" class="textoplomogrande">
          <input name="cama_afuera" type="checkbox" id="cama_afuera" tabindex="9" value="1" 
          <?php if($cama_afuera){echo("checked = 'checked'");}?>/>
          Cama afuera
          <input type="checkbox" name="cama_adentro" id="cama_adentro" tabindex="10" value="1" 
          <?php if($cama_adentro){echo("checked = 'checked'");}?>/>
          Cama adentro
          <input type="checkbox" name="horas" id="horas" tabindex="11" value="1" 
          <?php if($horas){echo("checked = 'checked'");}?>/>
          Por Horas          
          </td>
        </tr>
        <tr>
          <td height="44" align="left" valign="middle" class="textoplomogrande">
          <strong>Actividad</strong>          
          </td>
          <td height="44" align="left" valign="middle" class="textoplomogrande">
          <input type="checkbox" name="cocina" id="cocina" tabindex="12" value="1" 
          <?php if($cocina){echo("checked = 'checked'");}?>/>
		  Cocina
  	      <input type="checkbox" name="limpieza" id="limpieza" tabindex="13" value="1"
          <?php if($limpieza){echo("checked = 'checked'");}?>/>
		  Limpieza
		  <input type="checkbox" name="ninera" id="ninera" tabindex="14" value="1" 
          <?php if($ninera){echo("checked = 'checked'");}?>/>
		  Niñera
		  <input type="checkbox" name="enfermeria" id="enfermeria" tabindex="15" value="1" 
          <?php if($enfermeria){echo("checked = 'checked'");}?>/>
          Aux. Enfermería
          <input type="checkbox" name="mayordomo" id="mayordomo" tabindex="16" value="1" 
          <?php if($mayordomo){echo("checked = 'checked'");}?>/>
          Mayordomo
          <input type="checkbox" name="chofer" id="chofer" tabindex="17" value="1" 
          <?php if($chofer){echo("checked = 'checked'");}?>/>
          Chofer
          <input type="checkbox" name="todo_servicio" id="todo_servicio" tabindex="18" value="1" 
          <?php if($todo_servicio){echo("checked = 'checked'");}?>/> 
		  Todo servicio		  
          </td>
        </tr>
      </table>
      <br />
      <table width="685" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="20" align="left" valign="middle" class="textoplomogrande">
          <strong>Mensaje </strong>          
          </td>
        </tr>
        <tr>
          <td height="10" align="right" valign="middle">
          <textarea name="mensaje" cols="99" rows="5" class="areatexto" id="mensaje" tabindex="19"></textarea>
          <br /><br />
          <input name="button" type="submit" class="botonenviar" id="button" value=" Enviar " 
      	  onclick="return validar();" tabindex="67"/>
          </td>
        </tr>
      </table>
      </form>
      <br /><br />
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
<script>
function validar()
{
 if(form.ape_paterno.value=="" || form.ape_materno.value=="" || form.nombres.value=="" || form.direccion.value==""  
	|| form.telefono.value=="" || form.celular.value=="" || form.email.value=="@")  
 {
   alert("Complete todos los campos");
   if(form.ape_paterno.value==""){form.ape_paterno.style.backgroundColor = '#f8a5ad';} 
   if(form.ape_materno.value==""){form.ape_materno.style.backgroundColor = '#f8a5ad';}
   if(form.nombres.value==""){form.nombres.style.backgroundColor = '#f8a5ad';}
   if(form.direccion.value==""){form.direccion.style.backgroundColor = '#f8a5ad';}
   if(form.telefono.value==""){form.telefono.style.backgroundColor = '#f8a5ad';}
   if(form.celular.value==""){form.celular.style.backgroundColor = '#f8a5ad';}
   if(form.email.value=="@"){form.email.style.backgroundColor = '#f8a5ad';}
   return false;
 }
 else
 {
   alert("Su solicitud de postulante fue enviada con exito.");
   return true;
 }	
}
</script>