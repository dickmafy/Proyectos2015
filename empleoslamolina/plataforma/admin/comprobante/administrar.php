<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_comprobante"];
$estadocomprobante = $_GET["estadocomprobante"];
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
        <td width="86" align="left" valign="middle"><strong class="negrita14">Comprobantes</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Administrar Comprobantes</td>
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
        <span class="texto">En esta sección encontraras el listado de los comprobantes registrados en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="registro.php" class="vinculo">Registrar Comprobante</a></td>
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
             onchange="document.form.action='administrar.php?estadocomprobante='+this.value;
			           document.form.submit();">
              <option value="8" <?php if($estadocomprobante=="8"){echo("selected='selected'");}?>>Emitidos</option>
              <option value="4" <?php if($estadocomprobante=="4"){echo("selected='selected'");}?>>Anulados</option>
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
          <input name="txtbus_comprobante" type="text" class="cajatextoblanca" id="txtbus_comprobante" size="33" />
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
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">NRO</strong>              </td>
              <td width="24%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">EMPLEADOR</strong></td>
              <td width="24%" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">TRABAJADOR</strong></td>
              <td width="9%" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">CONTRATO</strong></td>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">MONTO</strong></td>
              <td width="7%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">DETALLE</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">SUNAT</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#FF8080">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $tamanopagina=16;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM COMPROBANTE   
						   WHERE IDESTADO <> '2'";
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT C.IDCOMPROBANTE idcomprobante, C.IDCONTRATO idcontrato,  
			  			   CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) empleador, 
						   CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) trabajador,
			  			   C.MONTO monto, C.SERIE serie, C.CORRELATIVO correlativo, C.SUNAT sunat, EC.DESCRIPCION estado 
						   FROM COMPROBANTE C, EMPLEADOR E, TRABAJADOR T,  ESTADO EC 
						   WHERE C.IDEMPLEADOR = E.IDEMPLEADOR AND C.IDTRABAJADOR = T.IDTRABAJADOR 
						   AND E.IDESTADO = EC.IDESTADO 
						   AND EC.IDESTADO <>2";
			 if($estadocomprobante==""){$consulta.= " AND C.IDESTADO = '8'";}
			 if($estadocomprobante=="4"){$consulta.= " AND C.IDESTADO = '4'";}
			 if($estadocomprobante=="8"){$consulta.= " AND C.IDESTADO = '8'";}
			 if($clasefiltro==1 && isset($txtfiltro)){$consulta.= " AND C.IDCONTRATO LIKE '%$txtfiltro%' ";}
			 if($clasefiltro==2 && isset($txtfiltro)){$consulta.= " AND (E.APE_PATERNO LIKE '%$txtfiltro%' 
			 														OR E.APE_MATERNO LIKE '%$txtfiltro%' 
																	OR E.NOMBRES LIKE '%$txtfiltro%') ";} 
			 if($clasefiltro==3 && isset($txtfiltro)){$consulta.= " AND E.NRO_DOC LIKE '%$txtfiltro%' ";}
			 $consulta .= " ORDER BY CAST(C.IDCOMPROBANTE as unsigned) DESC LIMIT ".$desp.",".$tamanopagina;
			 $utf8 = mysql_query("SET NAMES utf8"); 
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($comprobantes = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idcomprobante = $comprobantes["idcomprobante"]; 
			   $empleador = $comprobantes["empleador"];
			   $trabajador = $comprobantes["trabajador"];
			   $idcontrato = $comprobantes["idcontrato"];
			   $monto = $comprobantes["monto"];
			   $serie = $comprobantes["serie"];
			   $correlativo = $comprobantes["correlativo"];
			   $sunat = $comprobantes["sunat"];
			   $estado = $comprobantes["estado"];
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
			  $digitos = strlen($serie); 
			  $faltantes = 3-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$serie);
			  echo(" - ");
			  $digitos = strlen($correlativo); 
			  $faltantes = 7-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$correlativo);
			  ?>
              <input type="hidden" name="idcomprobante<?php echo($i);?>" id="idcomprobante<?php echo($i);?>" 
              value="<?php echo($idcomprobante);?>" />
              </td>
              <td align="center" valign="middle"><?php echo(strtoupper($empleador));?></td>
              <td align="center" valign="middle"><?php echo(strtoupper($trabajador));?></td>
              <td align="center" valign="middle">
			  <?php 
			  $digitos = strlen($idcontrato); 
			  $faltantes = 7-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$idcontrato);
			  ?>
              </td>
              <td align="center" valign="middle">S/. <?php echo($monto);?></td>
              <td align="center" valign="middle">
              <a href="javascript:void(0);" class="vinculo" 
              onclick="return hs.htmlExpand(this, { contentId: 'highslide-html<?php echo($i);?>' } )" >Ver</a>
              <div class="highslide-html-content" id="highslide-html<?php echo($i);?>" style="width:635px; height:530px;">
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
                <iframe src="comprobante.php?idcomprobante=<?php echo($idcomprobante);?>" width="635" height="490" 
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
              <span class="texto">
              <?php if($sunat==0){echo("NO");}if($sunat==1){echo("SI");}?>
              </span>              
              </td>
              <td align="center" valign="middle">
              <?php if($estadocomprobante==8 or $estadocomprobante==""){?>
              <a href="proc_actualiza_comprobante.php?accion=4&idcomprobante=<?php echo($idcomprobante);?>" 
              onclick="return(confirm('Desea ANULAR este comprobante?'))" class="vinculo">Anular</a>
              <?php }?>
              <?php if($estadocomprobante==4){?>
              <a href="proc_actualiza_comprobante.php?accion=8&idcomprobante=<?php echo($idcomprobante);?>" 
              onclick="return(confirm('Desea REACTIVAR este comprobante?'))" class="vinculo">Reactivar</a>
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
              <td width="134" align="left" valign="middle">
              <a href="javascript:void(0)" class="vinculo" onclick="seleccionar_todo();">Seleccionar todos</a></td>
              <td width="17" align="left" valign="middle">              
              </td>
              <td width="134" align="left" valign="middle">
              <a href="javascript:void(0)" class="vinculo" onclick="deseleccionar_todo();">Deseleccionar todos</a></td>
            </tr>
          </table>
          </td>
          <td width="67%" align="right" valign="middle"><?php paginacion_comprobante($total, $tamanopagina); ?></td>
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
	  document.form.action= 'administrar.php'; 
 	  document.form.submit();
	 } 
	 else
	 {
	  return false;
	 }
	}
	else
	{
	 alert('Debe seleccionar al menos un comprobante.');
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