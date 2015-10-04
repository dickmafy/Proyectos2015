<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_trabajador"];
$estadotrabajador = $_GET["estadotrabajador"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
</style>

<script type="text/javascript" src="../../highslide/highslide-full.js"></script> 
<link rel="stylesheet" type="text/css" href="../../highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '../../highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.dimmingOpacity = .15;
</script>
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Trabajadores</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Administrar Trabajadores</td>
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
        <span class="texto">En esta sección encontraras el listado de los trabajadores registrados en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="registro.php" class="vinculo">Registrar Trabajador</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="41" colspan="2" align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="27%" align="left" valign="middle" bgcolor="#EAEAEA">
        <table width="279" height="38" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="63" align="center" valign="middle" bgcolor="#eaeaea">Mostrar</td>
            <td width="216" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="mostrar" class="lista" id="mostrar" 
               onchange="document.form.action='administrar.php?estadotrabajador='+this.value;
			             document.form.submit();">
                <option value="1" <?php if($estadotrabajador=="1"){echo("selected='selected'");}?>>Activos</option>
                <option value="0" <?php if($estadotrabajador=="0"){echo("selected='selected'");}?>>Cesados</option>
              </select>
            &nbsp;&nbsp;&nbsp;<a href="administrar.php" class="vinculo">ACTUALIZAR</a>
            </td>
          </tr>
        </table>
        </td>
        <td width="73%" align="right" valign="top" bgcolor="#EAEAEA">
        <form name="form2" action="administrar.php" method="get" id="form2" 
        onsubmit="return validar_busqueda(this);">
          <table width="516" height="38" border="0" 
            cellpadding="0" cellspacing="0">
            <tr>
              <td width="78" align="center" valign="middle" bgcolor="#eaeaea" class="texto">Buscar por:</td>
              <td width="108" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="filtro_busqueda" class="lista" id="filtro_busqueda">
                <option value="1">Nombre &nbsp;&nbsp;</option>
                <option value="2">Num. Doc. &nbsp;&nbsp;</option>
                <option value="3">Provincia &nbsp;&nbsp;</option>
              </select>
              </td>
              <td width="244" align="left" valign="middle" bgcolor="#eaeaea">
              <input name="txtbus_trabajador" type="text" class="cajatextoblanca" id="txtbus_trabajador" size="33" />
              </td>
              <td width="86" align="left" valign="middle" bgcolor="#eaeaea">
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
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="4%" height="40" align="center" valign="middle" bgcolor="#007234">&nbsp;</td>
              <td width="27%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">NOMBRE</strong></td>
              <td width="8%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">EDAD</strong></td>
              <td width="12%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">PROVINCIA</strong></td>
              <td width="24%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">TELÉFONOS</strong></td>
              <td width="9%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">SUELDO</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">FICHA</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $tamanopagina=16;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM TRABAJADOR";
			  if($estadotrabajador==""){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadotrabajador=="1"){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadotrabajador=="0"){$consulta.= " WHERE IDESTADO = '0'";}
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT T.IDTRABAJADOR idtrabajador, CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) nombre, 
						   T.FECHA_NAC fecha_nac, T.TELEFONO telefono, T.TIPO_CEL tipo_cel, T.CELULAR celular, 
						   T.IDPAIS pais, T.IDDEPARTAMENTO departamento, T.IDPROVINCIA provincia, T.IDDISTRITO distrito, 
						   T.SUELDO sueldo, EC.DESCRIPCION estado 
						   FROM TRABAJADOR T, ESTADO EC 
						   WHERE T.IDESTADO = EC.IDESTADO 
						   AND EC.IDESTADO <>2";
			 if($estadotrabajador==""){$consulta.= " AND T.IDESTADO = '1'";}
			 if($estadotrabajador=="1"){$consulta.= " AND T.IDESTADO = '1'";}
			 if($estadotrabajador=="0"){$consulta.= " AND T.IDESTADO = '0'";}
			 if($clasefiltro==1 && isset($txtfiltro)){$consulta.= " AND (T.APE_PATERNO LIKE '%$txtfiltro%' 
			 														OR T.APE_MATERNO LIKE '%$txtfiltro%' 
																	OR T.NOMBRES LIKE '%$txtfiltro%') ";} 
			 if($clasefiltro==2 && isset($txtfiltro)){$consulta.= " AND T.NRO_DOC LIKE '%$txtfiltro%' ";}
			 if($clasefiltro==3 && isset($txtfiltro)){$consulta.= " AND (T.PROVINCIA LIKE '%$txtfiltro%' 
			 														OR T.PROVINCIA LIKE '%$txtfiltro%') ";}
			 $consulta .= " ORDER BY T.APE_PATERNO ASC LIMIT ".$desp.",".$tamanopagina;	
			 $utf8 = mysql_query("SET NAMES utf8");
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idtrabajador = $trabajadores["idtrabajador"]; 
			   $nombre = $trabajadores["nombre"];
			   $fecha_nac = $trabajadores["fecha_nac"];
			   $edad = substr(date("d/m/Y"),6,4)-substr($fecha_nac,6,4);
			   $telefono = $trabajadores["telefono"];
			   $tipo_cel = $trabajadores["tipo_cel"];
			   $celular = $trabajadores["celular"];
			   $pais = $empleadores["pais"];
			   $departamento = $trabajadores["departamento"];
			   $provincia = $trabajadores["provincia"];
			   $distrito = $trabajadores["distrito"];
			   $sueldo = $trabajadores["sueldo"];
			   $estado = $trabajadores["estado"];
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
              <input type="checkbox" name="trabajador<?php echo($i);?>" 
              id="trabajador<?php echo($i);?>" value="<?php echo($idtrabajador);?>" />              
              </td>
              <td align="left" valign="middle">
              &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>
              <input type="hidden" name="idtrabajador<?php echo($i);?>" id="idtrabajador<?php echo($i);?>" 
              value="<?php echo($idtrabajador);?>" />              
              </td>
              <td align="center" valign="middle"><?php echo($edad);?> AÑOS</td>
              <td align="center" valign="middle">
			  <?php 
			  $nomprovincia = devolver_nombre_provincia($provincia, $departamento);
			  echo(strtoupper($nomprovincia));
			  ?>              
              </td>
              <td align="center" valign="middle">
              <?php
			  echo($telefono." - "); 
			  switch($tipo_cel)
			  {
			   case(0): echo("CLARO "); break;
			   case(1): echo("CLARO RPC "); break;
			   case(2): echo("MOVISTAR "); break;
			   case(3): echo("MOVISTAR RPC "); break;
			   case(4): echo("NEXTEL "); break;
			  }
			  echo($celular);
			  ?>              
              </td>
              <td align="center" valign="middle">S/.<?php echo($sueldo);?></td>
              <td align="center" valign="middle">
              <a href="javascript:void(0);" class="vinculo" 
              onclick="return hs.htmlExpand(this, { contentId: 'highslide-html<?php echo($i);?>' } )" >Ver</a>
              <div class="highslide-html-content" id="highslide-html<?php echo($i);?>" style="width:720px; height:460px;">
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
                <iframe src="ficha.php?idtrabajador=<?php echo($idtrabajador);?>" width="720" height="420" 
                frameborder="0"></iframe>
                </div>
                <div class="highslide-footer">
                <div>
                 <span class="highslide-resize" title="Resize"><span></span></span>                 
                 </div>
                </div>
               </div>
              </div>              
              </td>
              <td align="center" valign="middle">
              <a href="edicion.php?idtrabajador=<?php echo($idtrabajador);?>" class="vinculo">Editar</a>              
              </td>
            </tr>
            <?php
			 $i++;
			 }
			 $j=$i-1;
			?>
          </table>
          <input type="hidden" name="nrotrabajadores" id="nrotrabajadores" value="<?php echo($j);?>" />
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
          <td width="67%" align="right" valign="middle"><?php paginacion_trabajador($total, $tamanopagina); ?></td>
          <td width="2%" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="46" colspan="3" align="right" valign="top">
          <table width="311" height="35" border="0" cellpadding="0" 
              cellspacing="0">
            <tr>
              <td width="122" height="35" align="center" valign="middle" bgcolor="#eaeaea">Acciones Masivas:</td>
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
	  document.form.action= 'proc_cambiarestado_trabajador.php'; 
 	  document.form.submit();
	 } 
	 else
	 {
	  return false;
	 }
	}
	else
	{
	 alert('Debe seleccionar al menos un trabajador.');
	 return false;
	}
}

function validar_busqueda(form2){

if(form2.txtbus_trabajador.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>