<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
fnSessionStart();
$conexion = conectar_cms();
$fecha_ini = $_POST["fechaini"];
$fecha_fin = $_POST["fechafin"];
error_reporting(0);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
</style>

<script language="javascript" type="text/javascript" src="../../jquery.js"></script>
<link href="../../calendario/calendario.css" type="text/css" rel="stylesheet">
<script src="../../calendario/calendar.js" type="text/javascript"></script>
<script src="../../calendario/calendar-es.js" type="text/javascript"></script>
<script src="../../calendario/calendar-setup.js" type="text/javascript"></script>

<script>
function validarnumero(e) {    
var tecla= document.all ? tecla = e.keyCode : tecla = e.which;    
return ((tecla > 47 && tecla < 58) || tecla == 46);
}

function compara_fechas(fecha1, fecha2)  
{ 
var fecha = fecha1.value; 
var resultado;
var xMonth=fecha.substring(3, 5);  
var xDay=fecha.substring(0, 2);  
var xYear=fecha.substring(6,10);  
var yMonth=fecha2.substring(3, 5);  
var yDay=fecha2.substring(0, 2);  
var yYear=fecha2.substring(6,10);
if (xYear> yYear)  
{  
	resultado = true;  
}  
else  
{  
  if (xYear == yYear)  
  {   
	if (xMonth> yMonth)  
	{  
		resultado = true;  
	}  
	else  
	{   
	 if (xMonth == yMonth)  
	  {  
		if (xDay> yDay)  
		  resultado = true;  
		else  
		  resultado = false;  
	  }  
	  else  
		resultado = false;  
	}  
  }  
  else  
	resultado = false;  
}
if (resultado){  
alert("Fecha invalida. Mayor que fecha actual.");
fecha1.value="";  
}  
} 
</script>
</head>

<body>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350" align="left" valign="top">
    <img src="../../logo_.jpg" width="350" height="78" />    
    </td>
    <td width="500" align="right" valign="top" class="texto"> CENTRO COMERCIAL &quot;LA ROTONDA 1&quot;<br />
    Av. La Molina 1167 - Of. 124 - La Molina<br />
    Telf. Ofic.: 349-6427 / 346-6571<br />
    Cel: 945933548    
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top"><hr /></td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="titulo">LISTADO DE TRABAJADORES</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="texto">
    <form id="form" name="form" method="post" action="rpt_trabajadores.php">
     Fecha Inicio:
     <input name="fechaini" type="text" class="cajatexto" id="fechaini" tabindex="53" size="10" maxlength="10" 
      onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#CCCCCC'" 
      value="<?php echo($fecha_ini);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');" 
      onkeypress="return validarnumero(event)"/>
      <img src="../../calendario.gif" name="lanzador1" width="15" height="15" border="0" id="lanzador1" title="Fecha">
      <script type="text/javascript"> 
      Calendar.setup({ 
      inputField : "fechaini", // id del campo de texto 
      ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
      button : "lanzador1" // el id del botón que lanzará el calendario 
      }); 
      </script> 
     &nbsp;&nbsp;&nbsp;
     Fecha Fin:
     <input name="fechafin" type="text" class="cajatexto" id="fechafin" tabindex="54" size="10" maxlength="10" 
      onfocus="this.style.backgroundColor = '#fafad2';" onBlur="this.style.backgroundColor = '#CCCCCC'; " 
      value="<?php echo($fecha_fin);?>" onchange="compara_fechas(this, '<?php echo(date("d/m/Y"));?>');" 
      onkeypress="return validarnumero(event)"/>
      <img src="../../calendario.gif" name="lanzador2" width="15" height="15" border="0" id="lanzador2" title="Fecha">
      <script type="text/javascript"> 
      Calendar.setup({ 
      inputField : "fechafin", // id del campo de texto 
      ifFormat : "%d/%m/%Y", // formato de la fecha que se escriba en el campo de texto 
      button : "lanzador2" // el id del botón que lanzará el calendario 
      }); 
      </script>  
    &nbsp;
    <input name="filtrar" type="submit" class="cajabotones" id="filtrar" value="  Filtrar  " 
    onclick="return validar();"/>
    &nbsp;
    <a href="rpt_trabajadores.php" class="vinculo">ACTUALIZAR</a>
    </form>
    </td>
  </tr>
</table>
<table width="100%" height="83" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
<tr>
  <td width="3%" height="40" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NRO</strong></td>
  <td width="9%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">TIPO DOC</strong></td>
  <td width="10%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NRO DOC</strong></td>
  <td width="22%" height="40" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NOMBRE</strong></td>
  <td width="7%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">EDAD</strong></td>
  <td width="9%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">ESTADO CIVIL</strong></td>
  <td width="10%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">PAIS</strong></td>
  <td width="11%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">UBIGEO</strong></td>
  <td width="11%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">CÓMO SE ENTERO</strong></td>
  <td width="8%" height="40" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">FECHA</strong></td>
  </tr>
<?php
  $i=1;	
  $consulta = "SELECT T.IDTRABAJADOR idtrabajador, CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) nombre, 
               T.TIPO_DOC tipo_doc, T.NRO_DOC nro_doc, T.FECHA_NAC fecha_nac, T.ESTADO_CIVIL estado_civil, T.IDPAIS pais, 
               T.IDDEPARTAMENTO departamento, T.IDPROVINCIA provincia, T.IDDISTRITO distrito, 
               T.SUELDO sueldo, T.SE_ENTERO se_entero, T.FECHA_REGISTRO fecha, EC.DESCRIPCION estado 
               FROM TRABAJADOR T, ESTADO EC 
               WHERE T.IDESTADO = EC.IDESTADO 
			   AND T.IDESTADO = '1' ";	
 if($fecha_ini!="" && $fecha_fin!=""){ 
 $consulta .= "AND STR_TO_DATE(T.FECHA_REGISTRO,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$fecha_ini."','%d/%m/%Y') 
  			   AND STR_TO_DATE('".$fecha_fin."','%d/%m/%Y') ";}
 $consulta .= "ORDER BY T.APE_PATERNO ASC ";
 $utf8 = mysql_query("SET NAMES utf8"); 
 $ejecuta = mysql_query($consulta, $conexion);		  
 while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
 {
   $idtrabajador = $trabajadores["idtrabajador"]; 
   $nombre = $trabajadores["nombre"];
   $fecha_nac = $trabajadores["fecha_nac"];
   $edad = substr(date("d/m/Y"),6,4)-substr($fecha_nac,6,4);
   $tipo_doc = $trabajadores["tipo_doc"];
   $nro_doc = $trabajadores["nro_doc"];
   $estado_civil = $trabajadores["estado_civil"];
   $pais = $trabajadores["pais"];
   $departamento = $trabajadores["departamento"];
   $provincia = $trabajadores["provincia"];
   $distrito = $trabajadores["distrito"];
   $se_entero = $trabajadores["se_entero"];
   $fecha = $trabajadores["fecha"];
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
  <?php echo($i);?>  
  </td>
  <td height="35" align="center" valign="middle">
  <?php if($tipo_doc=="0"){echo(strtoupper("DNI"));}?>
  <?php if($tipo_doc=="1"){echo(strtoupper("Carnet de Extranjeria"));}?>
  <?php if($tipo_doc=="2"){echo(strtoupper("Pasaporte"));}?>  </td>
  <td height="35" align="center" valign="middle">
  <?php echo($nro_doc);?>  
  </td>
  <td align="left" valign="middle">
  &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>
  <input type="hidden" name="idtrabajador<?php echo($i);?>" id="idtrabajador<?php echo($i);?>" 
  value="<?php echo($idtrabajador);?>" />  </td>
  <td align="center" valign="middle"><?php echo($edad);?> AÑOS</td>
  <td align="center" valign="middle">
  <?php 
  if($estado_civil=="0"){echo(strtoupper("Soltero(a)"));}
  if($estado_civil=="1"){echo(strtoupper("Casado(a)"));}
  if($estado_civil=="2"){echo(strtoupper("Divorciado(a)"));}
  if($estado_civil=="3"){echo(strtoupper("Viudo(a)"));}
  ?>  </td>
  <td align="center" valign="middle">
  <?php 
  $nompais = devolver_nombre_pais($pais);
  echo(strtoupper($nompais));
  ?>  
  </td>
  <td align="center" valign="middle">
  <?php 
  $nomdepartamento = devolver_nombre_departamento($departamento);
  $nomprovincia = devolver_nombre_provincia($provincia, $departamento);
  $nomdistrito = devolver_nombre_distrito($distrito, $provincia, $departamento);
  echo(strtoupper($nomdepartamento." - ".$nomprovincia." - ".$nomdistrito));
  ?>  
  </td>
  <td align="center" valign="middle">
  <?php if($se_entero=="0"){echo("PÁGINAS AMARILLAS IMPRESO");}?>
  <?php if($se_entero=="1"){echo("PÁGINAS AMARILLAS WEB");}?>
  <?php if($se_entero=="2"){echo("RECOMENDACIÓN DE UN AMIGO");}?>
  <?php if($se_entero=="3"){echo("PÁGINA WEB");}?>
  <?php if($se_entero=="4"){echo("PERIÓDICO");}?>
  <?php if($se_entero=="5"){echo("PASEO POR CENTRO COMERCIAL");}?>
  </td>
  <td align="center" valign="middle">
  <?php echo($fecha);?>  
  </td>
  </tr>
<?php
 $i++;
 }
 $j=$i-1;
?>
</table>
<br />
</body>
</html>
<script>
function validar()
{
 if(form.fechaini.value=="" || form.fechafin.value=="")  
 {
   alert("Ingrese ambas fechas");
   if(form.fechaini.value==""){form.fechaini.style.backgroundColor = '#f8a5ad';} 
   if(form.fechafin.value==""){form.fechafin.style.backgroundColor = '#f8a5ad';}
   return false;
 }
 else
 {
   return true;
 }	
}
</script>