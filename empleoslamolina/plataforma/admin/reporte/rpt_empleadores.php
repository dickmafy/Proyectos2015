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
    <td height="54" align="center" valign="middle" class="titulo">LISTADO DE EMPLEADORES</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="texto">
    <form id="form" name="form" method="post" action="rpt_empleadores.php">
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
    <a href="rpt_empleadores.php" class="vinculo">ACTUALIZAR</a>
    </form>
    </td>
  </tr>
</table>
<table width="100%" height="83" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
<tr>
  <td width="3%" height="40" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">NRO</strong></td>
  <td width="19%" height="40" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">NOMBRE</strong></td>
  <td width="24%" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">UBIGEO</strong></td>
  <td width="8%" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">TIPO DOC</strong></td>
  <td width="8%" align="center" valign="middle" bgcolor="#0193DE"><strong class="cabeceratabla">NRO DOC</strong></td>
  <td width="15%" align="center" valign="middle" bgcolor="#0193DE"><strong class="cabeceratabla">REQUERIMIENTO</strong></td>
  <td width="7%" align="center" valign="middle" bgcolor="#0193DE"><strong class="cabeceratabla">SUELDO</strong></td>
  <td width="8%" align="center" valign="middle" bgcolor="#0193DE"><strong class="cabeceratabla">CÓMO SE ENTERO</strong></td>
  <td width="8%" height="40" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">FECHA</strong></td>
  </tr>
<?php
  $i=1;	
  $consulta = "SELECT E.IDEMPLEADOR idempleador, CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) nombre_completo, 
               E.TELEFONO telefono, E.TIPO_CEL tipo_cel, E.CELULAR celular, E.IDPAIS pais, 
               E.TIPO_DOC tipo_doc, E.NRO_DOC nro_doc, E.TIPO tipo, E.NOMBRE nombre, E.DPTO dpto, E.MANZANA manzana, 
			   E.LOTE lote, E.URBANIZACION urbanizacion, E.REFERENCIA referencia, E.IDDEPARTAMENTO iddepartamento, 
			   E.IDPROVINCIA idprovincia, E.IDDISTRITO iddistrito, R.CAMA_AFUERA cama_afuera, R.CAMA_ADENTRO cama_adentro, 
			   R.HORAS horas, R.COCINA cocina, R.LIMPIEZA limpieza, R.NINERA ninera, R.ENFERMERIA enfermeria, 
			   R.MAYORDOMO mayordomo, R.CHOFER chofer, R.TODO_SERVICIO todo_servicio, R.SUELDO sueldo,  
               R.FECHA_REGISTRO fecha, E.SE_ENTERO se_entero, EC.DESCRIPCION estado 
               FROM EMPLEADOR E, REQUERIMIENTO R, ESTADO EC 
               WHERE E.IDEMPLEADOR = R.IDEMPLEADOR AND E.IDESTADO = EC.IDESTADO 
			   AND E.IDESTADO = '1' "; 
 if($fecha_ini!="" && $fecha_fin!=""){ 
 $consulta .= "AND STR_TO_DATE(R.FECHA_REGISTRO,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$fecha_ini."','%d/%m/%Y') 
  			   AND STR_TO_DATE('".$fecha_fin."','%d/%m/%Y') ";}
 $consulta .= "ORDER BY E.APE_PATERNO ASC "; 
 $utf8 = mysql_query("SET NAMES utf8");
 $ejecuta = mysql_query($consulta, $conexion);		  
 while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
 {
   $idempleador = $empleadores["idempleador"]; 
   $nombre_completo = $empleadores["nombre_completo"];
   $pais = $empleadores["pais"];
   $tipo_doc = $empleadores["tipo_doc"];
   $nro_doc = $empleadores["nro_doc"];
   $tipo = $empleadores["tipo"];
   $nombre = $empleadores["nombre"];
   $dpto = $empleadores["dpto"];
   $manzana = $empleadores["manzana"];
   $lote = $empleadores["lote"];
   $urbanizacion = $empleadores["urbanizacion"];
   $referencia = $empleadores["referencia"];
   $iddepartamento = $empleadores["iddepartamento"];
   $idprovincia = $empleadores["idprovincia"];
   $iddistrito = $empleadores["iddistrito"];
   $cama_afuera = $empleadores["cama_afuera"];
   $cama_adentro = $empleadores["cama_adentro"];
   $horas = $empleadores["horas"];
   $cocina = $empleadores["cocina"];
   $limpieza = $empleadores["limpieza"];
   $ninera = $empleadores["ninera"];
   $enfermeria = $empleadores["enfermeria"];
   $mayordomo = $empleadores["mayordomo"];
   $chofer = $empleadores["chofer"];
   $todo_servicio = $empleadores["todo_servicio"];
   $sueldo = $empleadores["sueldo"];
   $fecha = $empleadores["fecha"];
   $se_entero = $empleadores["se_entero"];
   $estado = $empleadores["estado"];
   $nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
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
  <?php echo($i);?>  </td>
  <td align="left" valign="middle">
  &nbsp;&nbsp;<?php echo(strtoupper($nombre_completo));?>
  <input type="hidden" name="idempleador<?php echo($i);?>" id="idempleador<?php echo($i);?>" 
  value="<?php echo($idempleador);?>" />  </td>
  <td align="center" valign="middle">
  <?php 
  $nompais = devolver_nombre_pais($pais);
  echo(strtoupper($nompais." / "));
  switch($tipo)
  {
   case(0): echo("CA.");break;
   case(1): echo("JR.");break;
   case(2): echo("PS.");break;
   case(3): echo("AV.");break;
  } 
  ?>
  <?php 
  $direccion = $nombre;
  if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
  if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
  if($lote!="Lo"){$direccion .= " LT. ".$lote;}
  echo(strtoupper($direccion));?>
  <br />
  <?php echo(strtoupper($nomdistrito));?>  
  </td>
  <td align="center" valign="middle">
  <?php if($tipo_doc=="0"){echo(strtoupper("DNI"));}?>
  <?php if($tipo_doc=="1"){echo(strtoupper("Carnet de Extranjeria"));}?>
  <?php if($tipo_doc=="2"){echo(strtoupper("Pasaporte"));}?>  
  </td>
  <td align="center" valign="middle">
  <?php echo(strtoupper($nro_doc));?>  
  </td>
  <td align="center" valign="middle">
  <?php
  if($cama_afuera){echo("Cama afuera <br>");}
  if($cama_adentro){echo("Cama adentro <br>");}
  if($horas){echo("Por horas - ");}
  if($cocina){echo("Cocina - ");}
  if($limpieza){echo("Limpieza - ");}
  if($ninera){echo("Niñera - ");}
  if($enfermeria){echo("Enfermeria - ");}
  if($chofer){echo("Chofer - ");}
  if($mayordomo){echo("Mayordomo - ");}
  if($todo_servicio){echo("Todo servicio - ");}
  ?>  
  </td>
  <td align="center" valign="middle">
  S/. <?php echo($sueldo);?>  
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