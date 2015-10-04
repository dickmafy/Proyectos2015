<?php
$perfil_ = $_GET["idperf"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../estilos.css");
</style>
<script src="../jquery.js"></script>
<script>
$(document).ready(function(){
$("dd:not(:first)").hide();
$("dt a").click(function(){
	$("dd:visible").slideUp("slow");
	$(this).parent().next().slideDown("slow");
	return false;
});
});
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="#0193de">
    <table width="98%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" height="34" align="left" valign="middle"><span class="negrita16">MÓDULO ADMINISTRADOR</span></td>
        <td width="50%" align="right" valign="middle">
        <a href="../index.php" class="vinculo" onclick="return(confirm('Desea cerrar la sesion?'))">Cerrar Sesión</a>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<table width="100%" height="551" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%" height="551" align="left" valign="top" bgcolor="#083349">
    <table width="222" border="0" align="center" 
    cellpadding="0" cellspacing="0">
      <tr>
      <td height="41" bgcolor="#083349"></td>
      </tr>
      <tr bgcolor="#FFFFFF">
      <td width="222" height="404" align="left" valign="top" bgcolor="#083349">
	  <?php include("menu.php");?>
      </td>
      </tr>
    </table>
    </td>
    <td width="85%" height="740" align="left" valign="top">
    <iframe id="frameinterior" name="frameinterior" src="inf_principal.php?idperf=<?php echo($perfil_);?>" 
    width="100%" marginwidth="0" height="100%" marginheight="0" align="left" scrolling="auto" frameborder="0"></iframe> 
    </td>
  </tr>
</table>
</body>
</html>
<script language="javascript">
function seleccionar_todo(){ 
   for (i=0;i<document.form.elements.length;i++) 
      if(document.form.elements[i].type == "checkbox") 
         document.form.elements[i].checked=1 
} 

function deseleccionar_todo(){ 
   for (i=0;i<document.form.elements.length;i++) 
      if(document.form.elements[i].type == "checkbox") 
         document.form.elements[i].checked=0 
} 

function actualizar()
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
	 
	 if(confirm('¿Desear confirmar los cambios?'))
	 {
	  document.form.action= 'proc_cambiarestado_solicitud.php'; 
 	  document.form.submit();
	 } 
	 else
	 {
	  return false;
	 }
	}
	else
	{
	 alert('Debe seleccionar al menos un proyecto.');
	 return false;
	}
}

function validar_busqueda(form2){

if(form2.txtbus_solicitud.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>