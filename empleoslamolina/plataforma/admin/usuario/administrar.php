<?php
require_once("../../../DAO/conexion.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_usuario"];
$estadousuario = $_GET["estadousuario"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style>
@import url("../../estilos.css");
</style>
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Usuarios</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Administrar Usuarios</td>
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
        <span class="texto">En esta sección encontraras el listado de los usuarios registrados en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="registro.php" class="vinculo">Registrar Usuario</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="465" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="41" colspan="2" align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="26%" align="left" valign="middle" bgcolor="#EAEAEA">
        <table width="279" height="38" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="63" align="center" valign="middle" bgcolor="#eaeaea">Mostrar</td>
            <td width="216" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="mostrar" class="lista" id="mostrar" 
               onchange="document.form.action='administrar.php?estadousuario='+this.value;
			             document.form.submit();">
                <option value="1" <?php if($estadousuario=="1"){echo("selected='selected'");}?>>Activos</option>
                <option value="0" <?php if($estadousuario=="0"){echo("selected='selected'");}?>>Cesados</option>
              </select>
            &nbsp;&nbsp;&nbsp;<a href="administrar.php" class="vinculo">ACTUALIZAR</a>
            </td>
          </tr>
        </table>
        </td>
        <td width="74%" align="right" valign="top" bgcolor="#EAEAEA">
        <form name="form2" action="administrar.php" method="get" id="form2" 
        onsubmit="return validar_busqueda(this);">
          <table width="579" height="38" border="0" 
            cellpadding="0" cellspacing="0">
            <tr>
              <td width="78" align="center" valign="middle" bgcolor="#eaeaea" class="texto">Buscar por:</td>
              <td width="162" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="filtro_busqueda" class="lista" id="filtro_busqueda">
               <option value="1">Usuario</option>
               <option value="2">Nombres y Apellidos</option>
              </select>
              </td>
              <td width="252" align="left" valign="middle" bgcolor="#eaeaea">
              <input name="txtbus_usuario" type="text" class="cajatextoblanca" id="txtbus_usuario" size="35" />
              </td>
              <td width="87" align="left" valign="middle" bgcolor="#eaeaea">
              &nbsp;<input name="enviar_buscar" type="submit" class="cajabotones" id="enviar_buscar" value="Buscar"/>
              </td>
            </tr>
          </table>
        </form>
        </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
      <table width="100%" height="161" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="86" colspan="3" align="left" valign="top">
          <table width="100%" height="73" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="4%" height="40" align="center" valign="middle" bgcolor="#007234">&nbsp;</td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#007234">
              <span class="cabeceratabla">USUARIO</span></td>
              <td width="24%" height="40" align="center" valign="middle" bgcolor="#007234" class="textoazulprecio">
              <strong class="cabeceratabla">NOMBRES Y APELLIDOS</strong></td>
              <td width="20%" height="40" align="center" valign="middle" bgcolor="#007234" class="texto">
              <strong class="cabeceratabla">EMAIL</strong></td>
              <td width="12%" height="40" align="center" valign="middle" bgcolor="#007234" class="texto">
              <strong class="cabeceratabla">PERFIL</strong></td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#007234" class="texto">
              <strong class="cabeceratabla">FECHA REGISTRO</strong></td>
              <td width="12%" height="40" align="center" valign="middle" bgcolor="#007234" class="texto">
              <strong class="cabeceratabla">ESTADO</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#007234" class="texto">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $tamanopagina=16;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM USUARIO";
			  if($estadousuario==""){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadousuario=="1"){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadousuario=="0"){$consulta.= " WHERE IDESTADO = '0'";}
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT U.IDUSUARIO idusuario, U.USUARIO nomusuario,  
						   CONCAT(P.NOMBRES,' ',P.APELLIDO_PATERNO,' ',P.APELLIDO_MATERNO) nombre_completo, 
						   P.EMAIL email, 
						   U.FECHAREGISTRO fecharegistro,PE.DESCRIPCION perfil, EC.DESCRIPCION estado 
						   FROM USUARIO U, PERSONAL P, PERFIL PE, ESTADO EC 
						   WHERE U.IDUSUARIO = P.IDUSUARIO AND U.IDPERFIL = PE.IDPERFIL AND U.IDESTADO = EC.IDESTADO 
						   AND EC.IDESTADO <>2";
			 if($estadousuario==""){$consulta.= " AND U.IDESTADO = '1'";}
			 if($estadousuario=="1"){$consulta.= " AND U.IDESTADO = '1'";}
			 if($estadousuario=="0"){$consulta.= " AND U.IDESTADO = '0'";}
			 if($clasefiltro==1 && isset($txtfiltro)){$consulta.= " AND U.USUARIO LIKE '%$txtfiltro%' ";}
			 if($clasefiltro==2 && isset($txtfiltro)){$consulta.= " AND P.APELLIDO_PATERNO LIKE '%$txtfiltro%' ";}
			 $consulta .= " ORDER BY U.USUARIO ASC LIMIT ".$desp.",".$tamanopagina;	
			 $utf8 = mysql_query("SET NAMES utf8");
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($usuarios = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idusuario = $usuarios["idusuario"];
			   $nomusuario = $usuarios["nomusuario"];
			   $nombre_completo = $usuarios["nombre_completo"];
			   $email = $usuarios["email"];
			   $fecharegistro = $usuarios["fecharegistro"];
			   $nomperfil = $usuarios["perfil"];
			   $estado = $usuarios["estado"];
			   if($i%2) 
			   {
				$color="#e3e3e3";
			   }
			   else
			   {
				$color="#FFFFFF";
			   }
			 ?>
            <tr bgcolor="<?php echo($color);?>">
              <td height="35" align="center" valign="middle">
              <input type="checkbox" name="usuario<?php echo($i);?>" 
              id="usuario<?php echo($i);?>" value="<?php echo($idusuario);?>" /></td>
              <td align="center" valign="middle" class="texto">
			  <?php echo(ucfirst($nomusuario));?>
              <input type="hidden" name="idusuario<?php echo($i);?>" id="idusuario<?php echo($i);?>" 
              value="<?php echo($idusuario);?>" />
              </td>
              <td align="center" valign="middle" class="texto">
			  <?php if(strlen($nombre_completo)>63){echo(ucfirst(substr($nombre_completo,'0','50')."..."));}
					else{echo(ucfirst($nombre_completo));}?></td>
              <td align="center" valign="middle" class="texto"><?php echo($email);?></td>
              <td align="center" valign="middle" class="texto"><?php echo($nomperfil);?></td>
              <td align="center" valign="middle" class="texto"><?php echo($fecharegistro);?></td>
              <td align="center" valign="middle" class="texto"><?php echo($estado);?></td>
              <td align="center" valign="middle">
              <a href="edicion.php?idusuario=<?php echo($idusuario);?>" class="vinculo">Editar</a>
              </td>
            </tr>
            <?php
			 $i++;
			 }
			 $j=$i-1;
			?>
          </table>
          <input type="hidden" name="nrousuarios" id="nrousuarios" value="<?php echo($j);?>" />
          </td>
        </tr>
        <tr>
          <td width="31%" height="17" align="left" valign="middle">
          <table width="318" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="14" height="29" align="left" valign="middle" scope="row">&nbsp;</th>
              <th width="19" align="left" valign="middle" scope="row">
              </th>
              <td width="134" align="left" valign="middle">
              <a href="javascript:void(0)" class="vinculo" onclick="seleccionar_todo();">Seleccionar todos</a></td>
              <td width="17" align="left" valign="middle">              
              </td>
              <td width="134" align="left" valign="middle">
              <a href="javascript:void(0)" class="vinculo" onclick="deseleccionar_todo();">Deseleccionar todos</a></td>
            </tr>
          </table>
          </td>
          <td width="67%" align="right" valign="middle"><?php paginacion_usuario($total, $tamanopagina); ?></td>
          <td width="2%" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="46" colspan="3" align="right" valign="top">
          <table width="311" height="35" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="122" height="35" align="center" valign="middle" bgcolor="#eaeaea" 
              class="texto">Acciones Masivas:</td>
              <td width="104" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="accion" class="lista" id="accion">
                <option value="0" selected="selected">Dar de baja</option>
                <option value="1">Activar</option>
              </select>
              </td>
              <td width="85" align="left" valign="middle" bgcolor="#eaeaea">
              &nbsp;<input name="enviar2" type="submit" class="cajabotones" id="enviar2" 
              value="Aplicar" onclick="return actualizar();"/>
              </td>
            </tr>
          </table>
          </td>
        </tr>
      </table>
    </form>
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
	  document.form.action= 'proc_cambiarestado_usuario.php'; 
 	  document.form.submit();
	 } 
	 else
	 {
	  return false;
	 }
	}
	else
	{
	 alert('Debe seleccionar al menos un usuario.');
	 return false;
	}
}

function validar_busqueda(form2){

if(form2.txtbus_usuario.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>
