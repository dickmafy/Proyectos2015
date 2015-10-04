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
        <td width="1195" align="right" valign="middle" class="negrita14">Actualizar Requerimiento</td>
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
        <span class="texto">En esta sección podrás actualizar los datos de un requerimiento registrado en el 
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
    <table width="679" border="0" align="left" cellpadding="0" cellspacing="0" style="margin-left:20px; margin-bottom:20px;">
      <tr>
        <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
        <strong class="textoverde">DATOS DEL EMPLEADOR</strong>
        </td>
      </tr>
      <tr>
        <td width="253" height="20" align="left" valign="middle" class="cajatextooscuro">
        <strong>Nombres y Apellidos</strong> </td>
        <td width="206" align="left" valign="middle" class="cajatextooscuro"><strong>Dirección</strong></td>
        <td width="220" align="left" valign="middle" class="cajatextooscuro"><strong>Contacto</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle">
        <span class="texto">Miguel Angel Revoredo Velez</span> <br />
        Casado / 46 años
        </td>
        <td align="left" valign="middle">
        <span class="texto">Av. Grau 1200 <br />
        La Molina / Lima / Lima</span>
        </td>
        <td height="10" align="left" valign="middle">
        <span class="texto">2436788 / 97738421<br />
        mrevoredo@gmail.com</span>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"></td>
      </tr>
    </table>
    <form id="form" name="form" method="post" action="../../../prototipo/admin/requerimiento/index.php" enctype="multipart/form-data">
      <div class="container">
      <ul class="tabs">
        <li><a href="#tab1">Perfil</a></li>
        <li><a href="#tab2">Remuneracion</a></li>
        <li><a href="#tab3">Otros</a></li>
      </ul>       
      <div class="tab_container">
        <div id="tab1" class="tab_content">
      <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="2" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">PERFIL DEL PUESTO</strong></td>
        </tr>
        <tr>
          <td width="75" height="31" align="left" valign="middle" class="cajatextooscuro">
          <strong>Tipo</strong></td>
          <td width="610" align="left" valign="middle" class="cajatextooscuro">
          <input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
          Cama afuera
          <input type="checkbox" name="checkbox2" id="checkbox2" />
          Cama adentro
          <input type="checkbox" name="checkbox3" id="checkbox3" />
          Por Horas
          </td>
        </tr>
        <tr>
          <td height="31" align="left" valign="middle" class="cajatextooscuro"><strong>Actividad</strong></td>
          <td height="31" align="left" valign="middle" class="cajatextooscuro">
          <input type="checkbox" name="checkbox4" id="checkbox4" />
		  Cocina
  	      <input type="checkbox" name="checkbox4" id="checkbox5" />
		  Limpieza
		  <input type="checkbox" name="checkbox4" id="checkbox6" />
		  Niñera
		  <input name="checkbox5" type="checkbox" id="checkbox7" checked="checked" /> 
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
            <span class="texto">
            <input name="precio" type="text" class="cajatexto" id="precio" tabindex="6" value="1200.00" size="100" 
            maxlength="100"/>
            </span> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="cajatextooscuro"><strong>Día de Descanso (*)</strong> </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
              <select name="departamento2" class="listagris" id="departamento2">
                <option value="-1">---- Seleccione día de descanso ----</option>
                <option value="0">Lunes</option>
                <option value="1">Martes</option>
                <option value="2">Miercoles</option>
                <option value="3">Jueves</option>
                <option value="4">Viernes</option>
                <option value="5">Sabado</option>
                <option value="6" selected="selected">Domingo</option>
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
          <span class="texto">
            <textarea name="requerimientos" cols="100" class="cajatexto" id="requerimientos" 
            tabindex="6">Buen trato con niños</textarea>
          </span>          
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
          <input name="button" type="submit" class="cajabotones" id="button" value="Actualizar" 
          onclick="return validar();" tabindex="10"/></td>
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
 if(form.nombres_apellidos.value=="-1" || form.dni.value=="")  
 {
   alert("Complete todos los campos");
   return false;
 }
 else
 {
   return true;
 }
}
</script>