<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
fnSessionStart();
$conexion = conectar_cms();
$fecha_ini = $_POST["fechaini"];
$fecha_fin = $_POST["fechafin"];
$vsunat = $_POST["sunat"];
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
    <td height="54" align="center" valign="middle" class="titulo">BALANCE DE INGRESOS</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="texto">
    <form id="form" name="form" method="post" action="rpt_balance.php">
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
    &nbsp;&nbsp;&nbsp;
    Declaración:
    <select name="sunat" class="listagris" id="sunat">
     <option value="1" <?php if($vsunat==1){echo("selected='selected'");}?>>Sunat</option>
     <option value="0" <?php if($vsunat==0){echo("selected='selected'");}?>>Internos</option>
     <option value="2" <?php if($vsunat==2){echo("selected='selected'");}?>>Todos</option>
    </select>
    &nbsp;
    <input name="filtrar" type="submit" class="cajabotones" id="filtrar" value="  Filtrar  " 
    onclick="return validar();"/>
    &nbsp;
    <a href="rpt_balance.php" class="vinculo">ACTUALIZAR</a>
    </form>    
    </td>
  </tr>
</table>
<table width="100%" height="83" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
<tr>
  <td width="3%" height="40" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">NRO</strong></td>
  <td width="13%" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">NRO DOC</strong></td>
  <td width="27%" height="40" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">EMPLEADOR</strong></td>
  <td width="27%" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">TRABAJADOR</strong></td>
  <td width="10%" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">CONTRATO</strong></td>
  <td width="10%" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">FECHA</strong></td>
  <td width="10%" height="40" align="center" valign="middle" bgcolor="#FF8080">
  <strong class="cabeceratabla">MONTO</strong></td>
  </tr>
<?php
  $i=1;	
  $consulta = "SELECT C.IDCOMPROBANTE idcomprobante, C.IDCONTRATO idcontrato,  
					   CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) empleador, 
					   CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) trabajador,
					   C.MONTO monto, C.SERIE serie, C.CORRELATIVO correlativo, C.SUNAT sunat, 
					   C.FECHA_REGISTRO fecha, EC.DESCRIPCION estado 
					   FROM COMPROBANTE C, EMPLEADOR E, TRABAJADOR T,  ESTADO EC 
					   WHERE C.IDEMPLEADOR = E.IDEMPLEADOR AND C.IDTRABAJADOR = T.IDTRABAJADOR 
					   AND E.IDESTADO = EC.IDESTADO 
					   AND EC.IDESTADO <>2 ";	
 if($fecha_ini!="" && $fecha_fin!=""){ 
 $consulta .= "AND STR_TO_DATE(C.FECHA_REGISTRO,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$fecha_ini."','%d/%m/%Y') 
  			   AND STR_TO_DATE('".$fecha_fin."','%d/%m/%Y') ";}
 if(isset($vsunat) && $vsunat==0){$consulta .= "AND C.SUNAT = '0' ";}
 if(isset($vsunat) && $vsunat==1){$consulta .= "AND C.SUNAT = '1' ";}
 $consulta .= "ORDER BY CAST(C.IDCOMPROBANTE as unsigned) DESC  "; 
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
   $fecha = $comprobantes["fecha"];
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
  <td height="35" align="center" valign="middle">
  <?php echo($i);?>  
  </td>
  <td height="35" align="center" valign="middle">
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
  </td>
  <td align="center" valign="middle">
  <?php echo(strtoupper($empleador));?>
  </td>
  <td align="center" valign="middle">
  <?php echo(strtoupper($trabajador));?>
  </td>
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
  <td align="center" valign="middle">
  <?php echo($fecha);?>
  </td>
  <td align="center" valign="middle">
  S/. <?php echo($monto);?>
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