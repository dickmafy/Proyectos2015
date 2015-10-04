<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../BL/BLtrabajador.php");
require_once("../../../BL/BLrequerimiento.php");
require_once("../../../BL/BLcontrato.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$idcontrato = $_GET["idcontrato"];
error_reporting(0);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
td {
padding-left: 1.25em;
}
</style>
</head>

<body>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="350" align="left" valign="top" style="padding-left:0em;">
    <img src="../../logo_.jpg" width="350" height="78" />    
    </td>
    <td width="500" align="right" valign="top" class="texto"> CENTRO COMERCIAL &quot;LA ROTONDA 1&quot;<br />
    Av. La Molina 1167 - Of. 124 - La Molina<br />
    Telf. Ofic.: 349-6427 / 346-6571<br />
    Cel: 945933548    
    </td>
  </tr>
</table>
<?php
$arr_datos = dame_datos_contrato($idcontrato);
$idempleador = $arr_datos[1]; 
$idtrabajador = $arr_datos[2]; 
$idrequerimiento = $arr_datos[3]; 
$cama_afuera = $arr_datos[4];						
$cama_adentro = $arr_datos[5]; 
$horas = $arr_datos[6]; 
$cocina = $arr_datos[7]; 
$limpieza = $arr_datos[8]; 
$ninera = $arr_datos[9]; 
$enfermeria = $arr_datos[10]; 
$mayordomo = $arr_datos[11]; 
$chofer = $arr_datos[12]; 
$todo_servicio = $arr_datos[13]; 
$sueldo = $arr_datos[14]; 
$descanso = $arr_datos[15]; 
$otros = $arr_datos[16]; 
$fecha_inicio = $arr_datos[17]; 
$fecha_fin = $arr_datos[18];
$fecha_registro = $arr_datos[19];
?>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" style="padding-left:0em;"><hr /></td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="titulo" style="padding-left:0em;">CONTRATO DE EMPLEO</td>
  </tr>
</table>
<?php
$arr_datos = dame_datos_empleador($idempleador);
$ape_paterno = $arr_datos[1];
$ape_materno = $arr_datos[2];
$nombres = $arr_datos[3];
$tipo_doc = $arr_datos[4];
$nro_doc = $arr_datos[5];
$estado_civil = $arr_datos[6];
$sexo = $arr_datos[7];
$fecha_nac = $arr_datos[8];
$tipo = $arr_datos[13];
$nombre = $arr_datos[14];
$dpto = $arr_datos[15];
$manzana = $arr_datos[16];
$lote = $arr_datos[17];
$urbanizacion = $arr_datos[18];
$referencia = $arr_datos[19];
$iddepartamento = $arr_datos[20];
$idprovincia = $arr_datos[21];
$iddistrito = $arr_datos[22];
$telefono = $arr_datos[23];
$tipo_cel = $arr_datos[24];
$celular = $arr_datos[25];
$email = $arr_datos[32];
$nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
$nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
?>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;INFORMACIÓN DEL EMPLEADOR</strong>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto"><strong>Nombres y Apellidos: </strong><?php echo($nombre_completo);?></td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto"><strong>Doc. Identidad: </strong>
	<?php 
	if($tipo_doc=="0"){echo(strtoupper("DNI "));}
    if($tipo_doc=="1"){echo(strtoupper("Carnet de Extranjeria "));}
    if($tipo_doc=="2"){echo(strtoupper("Pasaporte "));}
	echo($nro_doc);
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Estado Civil: </strong>
    <?php 
	if($estado_civil=="0"){echo(strtoupper("Soltero(a)"));}
    if($estado_civil=="1"){echo(strtoupper("Casado(a)"));}
    if($estado_civil=="2"){echo(strtoupper("Divorciado(a)"));}
    if($estado_civil=="3"){echo(strtoupper("Viudo(a)"));}
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Sexo: </strong>
    <?php
    if($sexo=="0"){echo(strtoupper("Masculino"));}
    if($sexo=="1"){echo(strtoupper("Femenino"));}
	?>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto"><strong>Fecha. Nac.: </strong>
    <?php echo($fecha_nac); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Teléfono: </strong>
    <?php echo($telefono); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Celular: </strong>
    <?php
    if($tipo_cel=="0"){echo(strtoupper("Claro "));}
    if($tipo_cel=="1"){echo(strtoupper("Claro RPC "));}
	if($tipo_cel=="2"){echo(strtoupper("Movistar "));}
    if($tipo_cel=="3"){echo(strtoupper("Movistar RPC "));}
	if($tipo_cel=="4"){echo(strtoupper("Nextel "));}
	echo($celular);
	?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>E-mail: </strong>
    <?php echo(strtoupper($email));?>    
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Dirección: </strong>
	<?php
	switch($tipo)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
	$direccion = $nombre;
	if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
	if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
	if($lote!="Lo"){$direccion .= " LT. ".$lote;}
	echo(strtoupper($direccion)." - ".strtoupper($nomdistrito));
	?>
    </td>
  </tr>
</table>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;REQUERIMIENTO DE TRABAJADOR</strong>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td width="92" height="31" align="left" valign="middle" class="cajatextooscuro">
  <strong>Tipo</strong></td>
  <td width="758" align="left" valign="middle" class="cajatextooscuro">
  (<?php if($cama_afuera){echo("X");}else{echo(" ");}?>)
  Cama afuera&nbsp;&nbsp;
  (<?php if($cama_adentro){echo("X");}else{echo(" ");}?>) 
  Cama adentro&nbsp;&nbsp;
  (<?php if($horas){echo("X");}else{echo(" ");}?>) 
  Por Horas  
  </td>
</tr>
<tr>
  <td height="31" align="left" valign="middle" class="cajatextooscuro"><strong>Actividad</strong></td>
  <td height="31" align="left" valign="middle" class="cajatextooscuro">
  (<?php if($cocina){echo("X");}else{echo(" ");}?>)
  Cocina&nbsp;&nbsp;
  (<?php if($limpieza){echo("X");}else{echo(" ");}?>)
  Limpieza&nbsp;&nbsp;
  (<?php if($ninera){echo("X");}else{echo(" ");}?>)
  Niñera&nbsp;&nbsp;
  (<?php if($enfermeria){echo("X");}else{echo(" ");}?>)
  Aux. Enfermería&nbsp;&nbsp;
  (<?php if($mayordomo){echo("X");}else{echo(" ");}?>) 
  Mayordomo&nbsp;&nbsp;
  (<?php if($chofer){echo("X");}else{echo(" ");}?>)
  Chofer
  (<?php if($todo_servicio){echo("X");}else{echo(" ");}?>) 
  Todo servicio
  </td>
</tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" align="left" valign="middle" class="cajatextooscuro">
    <strong>Sueldo: </strong> 
    <?php echo("S/. ".$sueldo);?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Día de Descanso: </strong> 
    <?php if($descanso=="0"){echo(strtoupper("Lunes"));}?>
    <?php if($descanso=="1"){echo(strtoupper("Martes"));}?>
    <?php if($descanso=="2"){echo(strtoupper("Miercoles"));}?>
    <?php if($descanso=="3"){echo(strtoupper("Jueves"));}?>
    <?php if($descanso=="4"){echo(strtoupper("Viernes"));}?>
    <?php if($descanso=="5"){echo(strtoupper("Sabado"));}?>
    <?php if($descanso=="6"){echo(strtoupper("Domingo"));}?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Otros: </strong>
    <?php echo(strtoupper($otros));?>
    </td>
  </tr>
</table>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;ACEPTACIÓN Y FIRMA DEL CLIENTE</strong>    
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Fecha de Inicio: </strong>
	<?php echo($fecha_inicio);?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Fecha de Fin: </strong>
	<?php echo($fecha_fin);?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Monto por selección de personal: </strong>
    ......................................................
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Forma de Pago: </strong>
    ( ) Contado&nbsp;&nbsp;( ) Transferencia&nbsp;&nbsp;( ) Tarjeta
    </td>
  </tr>
</table>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="282" height="14" align="center" valign="top" class="texto">		
    ......................................................................
    </td>
    <td width="281" rowspan="2" align="center" valign="top" class="texto">&nbsp;</td>
    <td width="287" align="center" valign="top" class="texto">
    .......................................................................
    </td>
  </tr>
  <tr>
    <td height="28" align="center" valign="top" class="texto">
    FIRMA DEL CLIENTE
    </td>
    <td align="center" valign="top" class="texto">
    EMPLEOS RESIDENCIAL LA MOLINA<br />
    R.U.C. 20507645675
    </td>
  </tr>
</table>
<br /><br /><br /><br /><br />
</body>
</html>
