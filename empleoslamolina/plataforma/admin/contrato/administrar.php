<?php
require_once("../../../DAO/conexion.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_contrato"];
$estadocontrato = $_GET["estadocontrato"];
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
        <td width="86" align="left" valign="middle"><strong class="negrita14">Contratos</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Administrar Contratos</td>
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
        <span class="texto">En esta sección encontraras el listado de los contratos registrados en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="registro.php" class="vinculo">Registrar Contrato</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="441" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" colspan="2" align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="27%" align="left" valign="middle" bgcolor="#EAEAEA">
        <table width="279" height="38" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="63" align="center" valign="middle" bgcolor="#eaeaea">Mostrar</td>
            <td width="216" align="left" valign="middle" bgcolor="#eaeaea">
            <select name="mostrar" class="lista" id="mostrar" 
             onchange="document.form.action='administrar.php?estadocontrato='+this.value;
			           document.form.submit();">
              <option value="1" <?php if($estadocontrato=="1"){echo("selected='selected'");}?>>Activos</option>
              <option value="5" <?php if($estadocontrato=="5"){echo("selected='selected'");}?>>Vencidos</option>
              <option value="6" <?php if($estadocontrato=="6"){echo("selected='selected'");}?>>Anu Parcial</option>
              <option value="7" <?php if($estadocontrato=="7"){echo("selected='selected'");}?>>Anu Total</option>  
            </select>
            &nbsp;&nbsp;&nbsp;<a href="administrar.php" class="vinculo">ACTUALIZAR</a></td>
          </tr>
        </table>
        </td>
        <td width="73%" align="right" valign="top" bgcolor="#EAEAEA">
        <form name="form2" action="administrar.php" method="get" id="form2" onsubmit="return validar_busqueda(this);">
        <table width="516" height="38" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="78" align="center" valign="middle" bgcolor="#eaeaea" class="texto">Buscar por:</td>
          <td width="108" align="left" valign="middle" bgcolor="#eaeaea">
          <select name="filtro_busqueda" class="lista" id="filtro_busqueda">
            <option value="1">Contrato &nbsp;&nbsp;</option>
            <option value="2">Nombre &nbsp;&nbsp;</option>
            <option value="3">Num. Doc. &nbsp;&nbsp;</option>
          </select>
          </td>
          <td width="244" align="left" valign="middle" bgcolor="#eaeaea">
          <input name="txtbus_contrato" type="text" class="cajatextoblanca" id="txtbus_contrato" size="33" />
          </td>
          <td width="86" align="left" valign="middle" bgcolor="#eaeaea">
          &nbsp;<input name="enviar_buscar" type="submit" class="cajabotones" id="enviar_buscar" value="Buscar"/>
          </td>
        </tr>
        </table>
        </form>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
      <table width="100%" height="161" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="86" colspan="3" align="left" valign="top">
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="7%" height="40" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">NRO</strong>              </td>
              <td width="21%" height="40" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">EMPLEADOR</strong></td>
              <td width="22%" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">TRABAJADOR</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">VIGENCIA</strong></td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">SUELDO</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#CC6633">
              <strong class="cabeceratabla">DETALLE</strong></td>
              <td width="15%" height="40" align="center" valign="middle" bgcolor="#CC6633">
                <strong class="cabeceratabla">ANULAR</strong></td>
              </tr>
            <?php
			  $tamanopagina=16;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM CONTRATO   
						   WHERE IDESTADO <> '2'";
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT C.IDCONTRATO idcontrato, 
			  			   CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) empleador, 
						   CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) trabajador,
			  			   C.SUELDO sueldo, C.FECHA_INICIO fecha_inicio, C.FECHA_FIN fecha_fin,  
						   EC.DESCRIPCION estado 
						   FROM CONTRATO C, EMPLEADOR E, TRABAJADOR T,  ESTADO EC 
						   WHERE C.IDEMPLEADOR = E.IDEMPLEADOR AND C.IDTRABAJADOR = T.IDTRABAJADOR 
						   AND E.IDESTADO = EC.IDESTADO 
						   AND EC.IDESTADO <>2";
			 if($estadocontrato==""){$consulta.= " AND C.IDESTADO = '1'";}
			 if($estadocontrato=="1"){$consulta.= " AND C.IDESTADO = '1'";}
			 if($estadocontrato=="5"){$consulta.= " AND C.IDESTADO = '5'";}
			 if($estadocontrato=="6"){$consulta.= " AND C.IDESTADO = '6'";}
			 if($estadocontrato=="7"){$consulta.= " AND C.IDESTADO = '7'";}
			 if($clasefiltro==1 && isset($txtfiltro)){$consulta.= " AND C.IDCONTRATO LIKE '%$txtfiltro%' ";}
			 if($clasefiltro==2 && isset($txtfiltro)){$consulta.= " AND (E.APE_PATERNO LIKE '%$txtfiltro%' 
			 														OR E.APE_MATERNO LIKE '%$txtfiltro%' 
																	OR E.NOMBRES LIKE '%$txtfiltro%') ";} 
			 if($clasefiltro==3 && isset($txtfiltro)){$consulta.= " AND E.NRO_DOC LIKE '%$txtfiltro%' ";}
			 $consulta .= " ORDER BY CAST(C.IDCONTRATO as unsigned) DESC LIMIT ".$desp.",".$tamanopagina;
			 $utf8 = mysql_query("SET NAMES utf8"); 
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($contratos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idcontrato = $contratos["idcontrato"]; 
			   $empleador = $contratos["empleador"];
			   $trabajador = $contratos["trabajador"];
			   $sueldo = $contratos["sueldo"];
			   $fecha_inicio = $contratos["fecha_inicio"];
			   $fecha_fin = $contratos["fecha_fin"];
			   $estado = $contratos["estado"];
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
              <td height="35" align="center" valign="middle" >
			  <?php 
			  $digitos = strlen($idcontrato); 
			  $faltantes = 7-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$idcontrato);
			  ?>
              <input type="hidden" name="idcontrato<?php echo($i);?>" id="idcontrato<?php echo($i);?>" 
              value="<?php echo($idcontrato);?>" />              </td>
              <td align="center" valign="middle"><?php echo(strtoupper($empleador));?></td>
              <td align="center" valign="middle"><?php echo(strtoupper($trabajador));?></td>
              <td align="center" valign="middle"><?php echo($fecha_inicio);?> - <?php echo($fecha_fin);?></td>
              <td align="center" valign="middle">S/. <?php echo($sueldo);?></td>
              <td align="center" valign="middle">
              <a href="javascript:void(0);" class="vinculo" 
              onclick="return hs.htmlExpand(this, { contentId: 'highslide-html<?php echo($i);?>' } )" >Ver</a>
              <div class="highslide-html-content" id="highslide-html<?php echo($i);?>" style="width:638px; height:350px;">
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
                <iframe src="servicio.php?idcontrato=<?php echo($idcontrato);?>" width="638" height="300" 
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
              <?php if($estadocontrato==1 or $estadocontrato==""){?>
              <a href="proc_actualiza_contrato.php?accion=6&idcontrato=<?php echo($idcontrato);?>" 
              class="vinculo" 
              onclick="return(confirm('Desea anular PARCIALMENTE este contrato?\n- Se anulara el contrato\n- Se reactivara el requerimiento asociado'))">Parcial</a>
              &nbsp;|&nbsp;
              <a href="proc_actualiza_contrato.php?accion=7&idcontrato=<?php echo($idcontrato);?>" 
              class="vinculo" 
              onclick="return(confirm('Desea anular TOTALMENTE este contrato?\n- Se anulara el contrato\n- Se anularan los comprobantes asociados\n- Se reactivara el requerimiento asociado'))">Total</a>
              <?php }?> 
              <?php if($estadocontrato==6 or $estadocontrato==7){?>
              <a href="proc_actualiza_contrato.php?accion=1&idcontrato=<?php echo($idcontrato);?>" 
              class="vinculo" onclick="return(confirm('Desea REACTIVAR este contrato?'))">Reactivar contrato</a>
              <?php }?>             
              </td>
            </tr>
            <?php
			 $i++;
			 }
			?>
          </table>
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
          <td width="67%" align="right" valign="middle"><?php paginacion_contrato($total, $tamanopagina); ?></td>
          <td width="2%" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td height="46" colspan="3" align="right" valign="top">&nbsp;</td>
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

if(form2.txtbus_contrato.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>