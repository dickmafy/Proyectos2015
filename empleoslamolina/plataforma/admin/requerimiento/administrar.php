<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_requerimiento"];
$estadoempleador = $_GET["estadoempleador"];
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
        <td width="86" align="left" valign="middle"><strong class="negrita14">Requerimientos</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Administrar Requerimientos</td>
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
        <span class="texto">En esta sección encontraras el listado de los requerimientos registrados en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="../empleador/registro.php" class="vinculo">Registrar Empleador</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  
  <tr>
    <td height="41" colspan="2" align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="13%" align="left" valign="middle" bgcolor="#EAEAEA">
        &nbsp;&nbsp;&nbsp;<a href="administrar.php" class="vinculo">ACTUALIZAR</a>
        </td>
        <td width="87%" align="right" valign="top" bgcolor="#EAEAEA">
        <form name="form2" action="administrar.php" method="get" id="form2" 
        onsubmit="return validar_busqueda(this);">
          <table width="516" height="38" border="0" 
            cellpadding="0" cellspacing="0">
            <tr>
              <td width="78" align="center" valign="middle" bgcolor="#eaeaea" class="texto">Buscar por:</td>
              <td width="108" align="left" valign="middle" bgcolor="#eaeaea">
              <select name="filtro_busqueda" class="lista" id="filtro_busqueda">
                <option value="1">Num. Doc. &nbsp;&nbsp;</option>
                <option value="2">Nombre &nbsp;&nbsp;</option>
              </select>
              </td>
              <td width="244" align="left" valign="middle" bgcolor="#eaeaea">
              <input name="txtbus_requerimiento" type="text" class="cajatextoblanca" id="txtbus_requerimiento" size="33" />
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
      <table width="100%" height="127" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="86" colspan="4" align="left" valign="top">
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="4%" height="40" align="center" valign="middle" bgcolor="#0193DE">&nbsp;</td>
              <td width="25%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">EMPLEADOR</strong></td>
              <td width="13%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">PAIS</strong></td>
              <td width="18%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">DISTRITO</strong></td>
              <td width="24%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">TELÉFONO / CELULAR</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">HISTORIAL</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $tamanopagina=16;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM EMPLEADOR";
			  if($estadoempleador==""){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadoempleador=="1"){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadoempleador=="0"){$consulta.= " WHERE IDESTADO = '0'";}
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT E.IDEMPLEADOR idempleador, CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) nombre, 
						   E.TELEFONO telefono, E.TIPO_CEL tipo_cel, E.CELULAR celular, E.IDPAIS pais, 
						   E.IDDEPARTAMENTO departamento, E.IDPROVINCIA provincia, E.IDDISTRITO distrito,  
						   EC.DESCRIPCION estado 
						   FROM EMPLEADOR E, ESTADO EC 
						   WHERE E.IDESTADO = EC.IDESTADO 
						   AND EC.IDESTADO <>2";
			 if($estadoempleador==""){$consulta.= " AND E.IDESTADO = '1'";}
			 if($estadoempleador=="1"){$consulta.= " AND E.IDESTADO = '1'";}
			 if($estadoempleador=="0"){$consulta.= " AND E.IDESTADO = '0'";}
			 if($clasefiltro==1 && isset($txtfiltro)){$consulta.= " AND E.NRO_DOC LIKE '%$txtfiltro%' ";}
			 if($clasefiltro==2 && isset($txtfiltro)){$consulta.= " AND (E.APE_PATERNO LIKE '%$txtfiltro%' 
			 														OR E.APE_MATERNO LIKE '%$txtfiltro%' 
																	OR E.NOMBRES LIKE '%$txtfiltro%') ";} 
			 $consulta .= " ORDER BY E.APE_PATERNO ASC LIMIT ".$desp.",".$tamanopagina; 
			 $utf8 = mysql_query("SET NAMES utf8");
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idempleador = $empleadores["idempleador"]; 
			   $nombre = $empleadores["nombre"];
			   $pais = $empleadores["pais"];
			   $departamento = $empleadores["departamento"];
			   $provincia = $empleadores["provincia"];
			   $distrito = $empleadores["distrito"];
			   $telefono = $empleadores["telefono"];
			   $tipo_cel = $empleadores["tipo_cel"];
			   $celular = $empleadores["celular"];
			   $estado = $empleadores["estado"];
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
              <td height="35" align="center" valign="middle" ><?php echo($i+(8*($nropag-1)));?></td>
              <td align="left" valign="middle">
              &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>
              <input type="hidden" name="idempleador<?php echo($i);?>" id="idempleador<?php echo($i);?>" 
              value="<?php echo($idempleador);?>" />              
              </td>
              <td align="center" valign="middle">
			  <?php 
			  $nompais = devolver_nombre_pais($pais);
			  echo(strtoupper($nompais));
			  ?>              
              </td>
              <td align="center" valign="middle">
			  <?php
			  $nomdistrito = devolver_nombre_distrito($distrito, $provincia, $departamento); 
			  echo(strtoupper($nomdistrito));
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
              <td align="center" valign="middle">
              <a href="javascript:void(0);" class="vinculo" 
              onclick="return hs.htmlExpand(this, { contentId: 'highslide-html<?php echo($i);?>' } )" >Ver</a>
              <div class="highslide-html-content" id="highslide-html<?php echo($i);?>" style="width:650px; height:500px;">
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
                <iframe src="historial.php?idempleador=<?php echo($idempleador);?>" width="645" height="460" 
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
              <a href="registro.php?idempleador=<?php echo($idempleador);?>" class="vinculo">Nuevo</a>              
              </td>
            </tr>
            <?php
			 $i++;
			 }
			 $j=$i-1;
			?>
          </table>
          <input type="hidden" name="nroempleadores" id="nroempleadores" value="<?php echo($j);?>" />          
          </td>
        </tr>
        <tr>
          <td width="31%" height="17" align="left" valign="middle">
          <table width="318" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="14" height="29" align="left" valign="middle" scope="row">&nbsp;</th>
              <th width="19" align="left" valign="middle" scope="row">
              </th>
              <td width="134" align="left" valign="middle">&nbsp;</td>
              <td width="17" align="left" valign="middle">              
              </td>
              <td width="134" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table>
          </td>
          <td width="67%" align="right" valign="top"><?php paginacion_empleador($total, $tamanopagina); ?></td>
          <td width="2%" align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="javascript">
function validar_busqueda(form2){

if(form2.txtbus_requerimiento.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>