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
    <td height="54" align="center" valign="middle" class="titulo">LISTADO DE COLOCACIONES</td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="texto">
    <form id="form" name="form" method="post" action="rpt_colocaciones.php">
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
    <a href="rpt_colocaciones.php" class="vinculo">ACTUALIZAR</a>
    </form>
    </td>
  </tr>
</table>
<table width="2500" height="134" border="0" align="center" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
<tr>
  <td height="36" colspan="15" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">TRABAJADOR</strong></td>
  <td colspan="4" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">EMPLEADOR</strong></td>
  <td colspan="3" align="center" valign="middle" bgcolor="#CC6633">
  <strong class="cabeceratabla">COLOCACIÓN</strong></td>
  </tr>
<tr>
  <td width="1%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NRO</strong></td>
  <td width="3%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">TIPO DOC</strong></td>
  <td width="3%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NRO DOC</strong></td>
  <td width="11%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">NOMBRE</strong></td>
  <td width="3%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">FECHA NAC</strong></td>
  <td width="5%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">E-MAIL</strong></td>
  <td width="5%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">TELÉFONO</strong></td>
  <td width="5%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">CELULAR</strong></td>
  <td width="4%" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">PAIS NAC</strong></td>
  <td width="3%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">UBIGEO</strong></td>
  <td height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">DIRECCIÓN</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">FECHA INSCR</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">ACTIVIDAD</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">GRADO INSTRUCCIÓN</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#007234">
  <strong class="cabeceratabla">ESTADO CIVIL</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">TIPO DOC</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">NRO DOC</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">NOMBRE</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#0193DE">
  <strong class="cabeceratabla">DIRECCIÓN</strong></td>
  <td width="4%" height="19" align="center" valign="middle" bgcolor="#CC6633">
  <strong class="cabeceratabla">FECHA CONTRATO</strong></td>
  <td width="9%" height="19" align="center" valign="middle" bgcolor="#CC6633">
  <strong class="cabeceratabla">VIGENCIA</strong></td>
  <td width="5%" height="19" align="center" valign="middle" bgcolor="#CC6633">
  <strong class="cabeceratabla">REMUNERACIÓN</strong></td>
</tr>
<?php
  $i=1;	
  $consulta = "SELECT T.IDTRABAJADOR idtrabajador, CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) nombre, 
               T.TIPO_DOC tipo_doc, T.NRO_DOC nro_doc, T.FECHA_NAC fecha_nac, T.ESTADO_CIVIL estado_civil, T.IDPAIS pais, 
               T.IDDEPARTAMENTO departamento, T.IDPROVINCIA provincia, T.IDDISTRITO distrito, T.TIPO tipo, 
			   T.NOMBRE nombrecalle,  T.DPTO dpto, T.MANZANA manzana, T.LOTE lote, T.URBANIZACION urbanizacion, 
			   T.REFERENCIA referencia, T.TELEFONO telefono,  
               T.TIPO_CEL tipo_cel, T.CELULAR celular, T.SUELDO sueldo, T.SE_ENTERO se_entero, T.FECHA_REGISTRO fecha, 
			   T.COCINA cocina, T.LIMPIEZA limpieza, T.NINERA ninera, T.ENFERMERIA enfermeria, T.MAYORDOMO mayordomo, 
			   T.CHOFER chofer, T.TODO_SERVICIO todo_servicio, T.INSTRUCCION instruccion, 
			   CONCAT(E.APE_PATERNO,' ',E.APE_MATERNO,' ',E.NOMBRES) nombre_emp, E.TIPO_DOC tipo_doc_emp, 
			   E.NRO_DOC nro_doc_emp, E.TIPO tipo_emp, E.NOMBRE nombrecalle_emp,  E.DPTO dpto_emp, E.MANZANA manzana_emp, 
			   E.LOTE lote_emp, E.URBANIZACION urbanizacion_emp, E.REFERENCIA referencia_emp, 
			   E.IDDEPARTAMENTO departamento_emp, E.IDPROVINCIA provincia_emp, E.IDDISTRITO distrito_emp, 
			   C.FECHA_INICIO fechaini_contrato, C.FECHA_FIN fechafin_contrato, C.SUELDO monto_contrato, 
			   EC.DESCRIPCION estado 
               FROM TRABAJADOR T, EMPLEADOR E, CONTRATO C, ESTADO EC 
               WHERE T.IDTRABAJADOR IN (SELECT IDTRABAJADOR FROM CONTRATO)
			   AND T.IDTRABAJADOR = C.IDTRABAJADOR 
			   AND E.IDEMPLEADOR = C.IDEMPLEADOR  
			   AND T.IDESTADO = EC.IDESTADO 
			   AND T.IDESTADO = '1' ";	
 if($fecha_ini!="" && $fecha_fin!=""){ 
 $consulta .= "AND STR_TO_DATE(C.FECHA_INICIO,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$fecha_ini."','%d/%m/%Y') 
  			   AND STR_TO_DATE('".$fecha_fin."','%d/%m/%Y') ";}
 $consulta .= "ORDER BY T.APE_PATERNO ASC ";
 $utf8 = mysql_query("SET NAMES utf8"); 
 $ejecuta = mysql_query($consulta, $conexion);		  
 while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
 {
   $idtrabajador = $trabajadores["idtrabajador"]; 
   $nombre = $trabajadores["nombre"];
   $fecha_nac = $trabajadores["fecha_nac"];
   $tipo_doc = $trabajadores["tipo_doc"];
   $nro_doc = $trabajadores["nro_doc"];
   $estado_civil = $trabajadores["estado_civil"];
   $telefono = $trabajadores["telefono"];
   $tipo_cel = $trabajadores["tipo_cel"];
   $celular = $trabajadores["celular"];
   $pais = $trabajadores["pais"];
   $departamento = $trabajadores["departamento"];
   $provincia = $trabajadores["provincia"];
   $distrito = $trabajadores["distrito"];
   $tipo = $trabajadores["tipo"];
   $nombrecalle = $trabajadores["nombrecalle"];
   $dpto = $trabajadores["dpto"];
   $manzana = $trabajadores["manzana"];
   $lote = $trabajadores["lote"];
   $urbanizacion = $trabajadores["urbanizacion"];
   $referencia = $trabajadores["referencia"];
   $cocina = $trabajadores["cocina"];
   $limpieza = $trabajadores["limpieza"];
   $ninera = $trabajadores["ninera"];
   $enfermeria = $trabajadores["enfermeria"];
   $mayordomo = $trabajadores["mayordomo"];
   $chofer = $trabajadores["chofer"];
   $todo_servicio = $trabajadores["todo_servicio"];
   $instruccion = $trabajadores["instruccion"];
   $fecha = $trabajadores["fecha"];
   $nombre_emp = $trabajadores["nombre_emp"];
   $tipo_doc_emp = $trabajadores["tipo_doc_emp"];
   $nro_doc_emp = $trabajadores["nro_doc_emp"];
   $tipo_emp = $trabajadores["tipo_emp"];
   $nombrecalle_emp = $trabajadores["nombrecalle_emp"];
   $dpto_emp = $trabajadores["dpto_emp"];
   $manzana_emp = $trabajadores["manzana_emp"];
   $lote_emp = $trabajadores["lote_emp"];
   $urbanizacion_emp = $trabajadores["urbanizacion_emp"];
   $referencia_emp = $trabajadores["referencia_emp"];
   $departamento_emp = $trabajadores["departamento_emp"];
   $provincia_emp = $trabajadores["provincia_emp"];
   $distrito_emp = $trabajadores["distrito_emp"];
   $fechaini_contrato = $trabajadores["fechaini_contrato"];
   $fechafin_contrato = $trabajadores["fechafin_contrato"];
   $monto_contrato = $trabajadores["monto_contrato"];
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
  <?php if($tipo_doc=="2"){echo(strtoupper("Pasaporte"));}?>  
  </td>
  <td height="35" align="center" valign="middle">
  <?php echo($nro_doc);?>  
  </td>
  <td align="left" valign="middle">
  &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>  
  </td>
  <td align="center" valign="middle"><?php echo($fecha_nac);?></td>
  <td align="center" valign="middle">
  <?php echo(strtoupper($email));?>  
  </td>
  <td align="center" valign="middle">
  <?php echo($telefono);?>  
  </td>
  <td align="center" valign="middle">
  <?php
  if($tipo_cel=="0"){echo(strtoupper("Claro "));}
  if($tipo_cel=="1"){echo(strtoupper("Claro RPC "));}
  if($tipo_cel=="2"){echo(strtoupper("Movistar "));}
  if($tipo_cel=="3"){echo(strtoupper("Movistar RPC "));}
  if($tipo_cel=="4"){echo(strtoupper("Nextel "));}
  echo($celular);
  ?>  
  </td>
  <td align="center" valign="middle">
  <?php $nompais = devolver_nombre_pais($pais);
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
  <?php
	switch($tipo)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
	$direccion = $nombrecalle;
	if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
	if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
	if($lote!="Lo"){$direccion .= " LT. ".$lote;}
	echo(strtoupper($direccion)." - ".strtoupper($nomdistrito));
  ?>
  </td>
  <td align="center" valign="middle">
  <?php echo($fecha);?> 
  </td>
  <td align="center" valign="middle">
  <?php if($cocina){echo("COCINA<br />");}?>
  <?php if($limpieza){echo("LIMPIEZA<br />");}?>
  <?php if($ninera){echo("NIÑERA<br />");}?>
  <?php if($enfermeria){echo("AUX. ENFERMERÍA<br />");}?>
  <?php if($mayordomo){echo("MAYORDOMO<br />");}?>
  <?php if($chofer){echo("CHOFER<br />");}?> 
  <?php if($todo_servicio){echo("TODO SERVICIO");}?>
  </td>
  <td align="center" valign="middle">
  <?php if($instruccion=="0"){echo("NINGUNO");}?>
  <?php if($instruccion=="1"){echo("PRIMARIA");}?>
  <?php if($instruccion=="2"){echo("SECUNDARIA");}?>
  <?php if($instruccion=="3"){echo("SUPERIOR TECNICO");}?>
  <?php if($instruccion=="4"){echo("SUPERIOR UNIVERSITARIO");}?>
  </td>
  <td align="center" valign="middle">
  <?php 
  if($estado_civil=="0"){echo(strtoupper("Soltero(a)"));}
  if($estado_civil=="1"){echo(strtoupper("Casado(a)"));}
  if($estado_civil=="2"){echo(strtoupper("Divorciado(a)"));}
  if($estado_civil=="3"){echo(strtoupper("Viudo(a)"));}
  ?>
  </td>
  <td align="center" valign="middle">
  <?php if($tipo_doc_emp=="0"){echo(strtoupper("DNI"));}?>
  <?php if($tipo_doc_emp=="1"){echo(strtoupper("Carnet de Extranjeria"));}?>
  <?php if($tipo_doc_emp=="2"){echo(strtoupper("Pasaporte"));}?> 
  </td>
  <td align="center" valign="middle">
  <?php echo($nro_doc_emp);?>
  </td>
  <td align="center" valign="middle">
  &nbsp;&nbsp;<?php echo(strtoupper($nombre_emp));?>
  </td>
  <td align="center" valign="middle">
  <?php
	switch($tipo_emp)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
	$direccion = $nombrecalle_emp;
	if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto_emp;}
	if($manzana!="Ma"){$direccion .= " MZ. ".$manzana_emp;}
	if($lote!="Lo"){$direccion .= " LT. ".$lote_emp;}
	$nomdistrito_emp = devolver_nombre_distrito($distrito_emp, $provincia_emp, $departamento_emp);
	echo(strtoupper($direccion)." - ".strtoupper($nomdistrito_emp));
  ?>
  </td>
  <td align="center" valign="middle">
  <?php echo($fechaini_contrato);?>
  </td>
  <td align="center" valign="middle">
  <?php echo($fechaini_contrato." - ".$fechafin_contrato);?>
  </td>
  <td align="center" valign="middle">
  <?php echo($monto_contrato);?>
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