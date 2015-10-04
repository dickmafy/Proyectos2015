<?php
require_once("../../../BL/BLtrabajador.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
$idtrabajador = $_GET["idtrabajador"];
error_reporting(0);  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Agencia de Empleos | Plataforma de Servicios</title>
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
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top" style="padding-left:0em;"><hr /></td>
  </tr>
  <tr>
    <td height="54" align="center" valign="middle" class="titulo" style="padding-left:0em;">SOLICITUD DEL EMPLEADO</td>
  </tr>
</table>
<?php
$arr_datos = dame_datos_trabajador($idtrabajador);
$ape_paterno = $arr_datos[1];
$ape_materno = $arr_datos[2];
$nombres = $arr_datos[3];
$tipo_doc = $arr_datos[4];
$nro_doc = $arr_datos[5];
$estado_civil = $arr_datos[6];
$sexo = $arr_datos[7];
$instruccion = $arr_datos[8];
$fecha_nac = $arr_datos[9];
$tipo = $arr_datos[11];
$nombre = $arr_datos[12];
$dpto = $arr_datos[13];
$manzana = $arr_datos[14];
$lote = $arr_datos[15];
$urbanizacion = $arr_datos[16];
$referencia = $arr_datos[17];
$iddepartamento = $arr_datos[18];
$idprovincia = $arr_datos[19];
$iddistrito = $arr_datos[20];
$telefono = $arr_datos[21];
$tipo_cel = $arr_datos[22];
$celular = $arr_datos[23];
$cama_afuera = $arr_datos[24];
$cama_adentro = $arr_datos[25];
$horas = $arr_datos[26];
$cocina = $arr_datos[27];
$limpieza = $arr_datos[28];
$ninera = $arr_datos[29];
$enfermeria = $arr_datos[30];
$mayordomo = $arr_datos[31];
$chofer = $arr_datos[32];
$todo_servicio = $arr_datos[33];
$sueldo = $arr_datos[34];
$descanso = $arr_datos[35];
$capacitacion1 = $arr_datos[42];
$capacitacion2 = $arr_datos[43];
$capacitacion3 = $arr_datos[44];
$capacitacion4 = $arr_datos[45];
$documento1 = $arr_datos[46];
$documento2 = $arr_datos[47];
$documento3 = $arr_datos[48];
$tipo_doc4 = $arr_datos[49];
$documento4 = $arr_datos[50];
$documento5 = $arr_datos[51];
$documento6 = $arr_datos[52];
$documento7 = $arr_datos[53];
$nombre_ref1 = $arr_datos[54];
$tipo_doc_ref1 = $arr_datos[55];
$num_doc_ref1 = $arr_datos[56];
$direccion_ref1 = $arr_datos[57]; 
$tipo_ref1 = $arr_datos[58];  
$act_ref1 = $arr_datos[59];
$fechaini_ref1 = $arr_datos[60]; 
$fechafin_ref1 = $arr_datos[61];
$retiro_ref1 = $arr_datos[62];
$telefono_ref1 = $arr_datos[63];  
$nombre_ref2 = $arr_datos[64];
$tipo_doc_ref2 = $arr_datos[65]; 
$num_doc_ref2 = $arr_datos[66]; 
$direccion_ref2 = $arr_datos[67]; 
$tipo_ref2 = $arr_datos[68];
$act_ref2 = $arr_datos[69]; 
$fechaini_ref2 = $arr_datos[70];
$fechafin_ref2 = $arr_datos[71];
$retiro_ref2 = $arr_datos[72]; 
$telefono_ref2 = $arr_datos[73];
$nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
$nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);

?>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;INFORMACIÓN DEL TRABAJADOR</strong>
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
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Edad: </strong>
    <?php echo(substr(date("d/m/Y"),6,4)-substr($fecha_nac,6,4)); ?> AÑOS
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
    <strong>Instrucción: </strong>
    <?php 
	if($instruccion=="1"){echo(strtoupper("Primaria"));}
    if($instruccion=="2"){echo(strtoupper("Secundaria"));}
    if($instruccion=="3"){echo(strtoupper("Superior Tecnico"));}
    if($instruccion=="4"){echo(strtoupper("Superior Universitario"));}
	?>  
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
    <strong> &nbsp;&nbsp;PERFIL DEL PUESTO</strong>    
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
    <td height="56" align="left" valign="bottom" class="cajatextooscuro">
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
    <br />
    <br />
    <strong>Entrevista Laboral: </strong>
    <?php if($capacitacion1){echo("SI");}else{echo("NO");}?>&nbsp;&nbsp;
    <strong>Medidas de Seguridad: </strong>
    <?php if($capacitacion2){echo("SI");}else{echo("NO");}?>&nbsp;&nbsp;
    <strong>Manejo de Artefactos: </strong>
    <?php if($capacitacion3){echo("SI");}else{echo("NO");}?>&nbsp;&nbsp;
    <strong>Derechos Laborales: </strong>
    <?php if($capacitacion4){echo("SI");}else{echo("NO");}?>&nbsp;&nbsp;
    </td>
  </tr>
</table>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;DOCUMENTOS DE REFERENCIA</strong>    
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    (<?php if($documento1!=""){echo("X");}else{echo(" ");}?>)
    ANTECEDENTES POLICIALES&nbsp;&nbsp;
    (<?php if($documento2!=""){echo("X");}else{echo(" ");}?>)
    CERTIFICADO DOMICILIARIO&nbsp;&nbsp;
    (<?php if($documento3!=""){echo("X");}else{echo(" ");}?>)
    CERTIFICADO DE SALUD&nbsp;&nbsp;
    (<?php if($documento4!=""){echo("X");}else{echo(" ");}?>)
    DOC. DE IDENTIDAD&nbsp;&nbsp;
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    (<?php if($documento5!=""){echo("X");}else{echo(" ");}?>)
    PAGO DE SERVICIOS&nbsp;&nbsp;
    (<?php if($documento6!=""){echo("X");}else{echo(" ");}?>)
    OTROS&nbsp;&nbsp;
    (<?php if($documento7!=""){echo("X");}else{echo(" ");}?>)
    OTROS&nbsp;&nbsp;
    </td>
  </tr>
</table>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" bgcolor="#0194D7" class="textoblanco">
    <strong> &nbsp;&nbsp;REFERENCIAS PERSONALES</strong>    
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Nombres y Apellidos: </strong>
	<?php echo(strtoupper($nombre_ref1));?>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto"><strong>Doc. Identidad: </strong>
	<?php 
	if($tipo_doc_ref1=="0"){echo(strtoupper("DNI "));}
    if($tipo_doc_ref1=="1"){echo(strtoupper("Carnet de Extranjeria "));}
    if($tipo_doc_ref1=="2"){echo(strtoupper("Pasaporte "));}
	echo($num_doc_ref1);
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Dirección: </strong>
    <?php 
	echo(strtoupper($direccion_ref1));
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Labor Realizada: </strong>
    <?php
    if($tipo_ref1=="0"){echo(strtoupper("Cama afuera"));}
    if($tipo_ref1=="1"){echo(strtoupper("Cama adentro"));}
    if($tipo_ref1=="2"){echo(strtoupper("Por horas"));}
	?>
    &nbsp;&nbsp;
    <?php
    if($act_ref1=="0"){echo(strtoupper("Cocina"));}
    if($act_ref1=="1"){echo(strtoupper("Limpieza"));}
    if($act_ref1=="2"){echo(strtoupper("Niñera"));}
    if($act_ref1=="3"){echo(strtoupper("Aux. Enfermeria"));}
    if($act_ref1=="4"){echo(strtoupper("Todo servicio"));}
    ?>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Tiempo de Trabajo.: </strong>
    <?php echo($fechaini_ref1." - ".$fechafin_ref1); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Motivo de Retiro: </strong>
    <?php echo(strtoupper($retiro_ref1)); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Telefono / Celular: </strong>
    <?php
	echo($telefono_ref1);
	?>
    </td>
  </tr>
</table>
<br />
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Nombres y Apellidos: </strong>
	<?php echo(strtoupper($nombre_ref2));?>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto"><strong>Doc. Identidad: </strong>
	<?php 
	if($tipo_doc_ref2=="0"){echo(strtoupper("DNI "));}
    if($tipo_doc_ref2=="1"){echo(strtoupper("Carnet de Extranjeria "));}
    if($tipo_doc_ref2=="2"){echo(strtoupper("Pasaporte "));}
	echo($num_doc_ref2);
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Dirección: </strong>
    <?php 
	echo(strtoupper($direccion_ref2));
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Labor Realizada: </strong>
    <?php
    if($tipo_ref2=="0"){echo(strtoupper("Cama afuera"));}
    if($tipo_ref2=="1"){echo(strtoupper("Cama adentro"));}
    if($tipo_ref2=="2"){echo(strtoupper("Por horas"));}
	?>
    &nbsp;&nbsp;
    <?php
    if($act_ref2=="0"){echo(strtoupper("Cocina"));}
    if($act_ref2=="1"){echo(strtoupper("Limpieza"));}
    if($act_ref2=="2"){echo(strtoupper("Niñera"));}
    if($act_ref2=="3"){echo(strtoupper("Aux. Enfermeria"));}
    if($act_ref2=="4"){echo(strtoupper("Todo servicio"));}
    ?>
    </td>
  </tr>
</table>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="29" class="texto">
    <strong>Tiempo de Trabajo.: </strong>
    <?php echo($fechaini_ref2." - ".$fechafin_ref2); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Motivo de Retiro: </strong>
    <?php echo(strtoupper($retiro_ref2)); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Telefono / Celular: </strong>
    <?php
	echo($telefono_ref2);
	?>
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
    FIRMA DEL TRABAJADOR
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
