<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
$clasefiltro = $_GET["filtro_busqueda"];
$txtfiltro = $_GET["txtbus_empleador"];
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
</head>

<body>
<table width="60%" height="268" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="650" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" align="center">&nbsp;</td>
        <td width="92" align="left" valign="middle"><span class="negrita14">Empleadores</span></td>
        <td align="right" valign="middle" class="negrita14">Buscar Empleadores</td>
        </tr>
    </table>    
    </td>
  </tr>
  <tr>
    <td height="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
  <tr>
    <td height="28" align="left" valign="middle">
    <table width="634" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="622" align="left" valign="middle">
        <span>Listado de empleadores registrados en el sistema</span></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="44" align="left" valign="middle">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="middle" bgcolor="#EAEAEA">
        <form name="form2" action="empleadores.php" method="get" id="form2" 
        onsubmit="return validar_busqueda(this);">
        <table width="632" height="38" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="89" align="center" valign="middle" bgcolor="#eaeaea" class="texto">Buscar por:</td>
          <td width="106" align="left" valign="middle" bgcolor="#eaeaea">
          <select name="filtro_busqueda" class="lista" id="filtro_busqueda">
            <option value="1">Num. Doc. &nbsp;&nbsp;</option>
            <option value="2">Nombre &nbsp;&nbsp;</option>
          </select>
          </td>
          <td width="238" align="left" valign="middle" bgcolor="#eaeaea">
          <input name="txtbus_empleador" type="text" class="cajatextoblanca" id="txtbus_empleador" size="35" />
          </td>
          <td width="199" align="left" valign="middle" bgcolor="#eaeaea">
          &nbsp;
          <input name="enviar_buscar" type="submit" class="cajabotones" id="enviar_buscar" value="Buscar"/>
          &nbsp;&nbsp;&nbsp;<a href="empleadores.php" class="vinculo">ACTUALIZAR</a>
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
    <td height="142" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
      <table width="100%" height="86" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" height="86" align="left" valign="top">
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="47%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">NOMBRE</strong></td>
              <td width="16%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">NRO. DOC.</strong></td>
              <td width="23%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">DISTRITO</strong></td>
              <td width="14%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $consulta = "SELECT COUNT(*) total
						   FROM EMPLEADOR";
			  if($estadoempleador==""){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadoempleador=="1"){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadoempleador=="0"){$consulta.= " WHERE IDESTADO = '0'";}
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT E.IDEMPLEADOR idempleador, CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) nombre, 
						   E.NRO_DOC nro_doc, E.TELEFONO telefono, E.IDDEPARTAMENTO departamento, E.IDPROVINCIA provincia, 
						   E.IDDISTRITO distrito, EC.DESCRIPCION estado 
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
			 $consulta .= " AND E.IDEMPLEADOR IN (SELECT IDEMPLEADOR 
			 									  FROM REQUERIMIENTO 
												  WHERE IDESTADO = '1') ";
			 $consulta .= " ORDER BY E.APE_PATERNO ASC ";	
			 $utf8 = mysql_query("SET NAMES utf8");
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idempleador = $empleadores["idempleador"]; 
			   $nombre = $empleadores["nombre"];
			   $nro_doc = $empleadores["nro_doc"];
			   $telefono = $empleadores["telefono"];
			   $departamento = $empleadores["departamento"];
			   $provincia = $empleadores["provincia"];
			   $distrito = $empleadores["distrito"];
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
              <td height="35" align="left" valign="middle">
              &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>
              <input type="hidden" name="idempleador<?php echo($i);?>" id="idempleador<?php echo($i);?>" 
              value="<?php echo($idempleador);?>" />
              </td>
              <td align="center" valign="middle"><?php echo($nro_doc);?></td>
              <td align="center" valign="middle">
			  <?php
			  $nomdistrito = devolver_nombre_distrito($distrito, $provincia, $departamento); 
			  echo(strtoupper($nomdistrito));
			  ?>
              </td>
              <td align="center" valign="middle">
              <a href="registro.php?idempleador=<?php echo($idempleador);?>" class="vinculo" target="_parent";>Escoger</a>
              </td>
            </tr>
            <?php
			 }
			?>
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
<script>
function validar_busqueda(form2){

if(form2.txtbus_empleador.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>
