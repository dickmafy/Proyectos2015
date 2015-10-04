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
</style>
</head>

<body>
<table width="60%" height="203" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="650" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" align="center">&nbsp;</td>
        <td width="92" align="left" valign="middle"><span class="negrita14">Contratos</span></td>
        <td align="right" valign="middle" class="negrita14">Detalle del Contrato</td>
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
        <span>Detalle del contrato registrado en el sistema</span>     
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="142" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
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
      <table width="98%" height="86" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" height="86" align="left" valign="top">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="53">
              &nbsp;&nbsp;&nbsp;
              <span class="texto">
              <?php
			  $arr_datos = dame_datos_empleador($idempleador);
			  $ape_paterno = $arr_datos[1];
			  $ape_materno = $arr_datos[2];
			  $nombres = $arr_datos[3];
			  $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
			  ?>
              <strong>EMPLEADOR:&nbsp;</strong><?php echo($nombre_completo);?></span><br />
              &nbsp;&nbsp;&nbsp;
              <span class="texto">
              <?php
			  $arr_datos = dame_datos_trabajador($idtrabajador);
			  $ape_paterno = $arr_datos[1];
			  $ape_materno = $arr_datos[2];
			  $nombres = $arr_datos[3];
			  $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
			  ?>
              <strong>TRABAJADOR:&nbsp;</strong><?php echo($nombre_completo);?></span><br />
              &nbsp;&nbsp;&nbsp;
              <span class="texto">
              <strong>REQUERIMIENTO:</strong>
			  <?php 
			  $digitos = strlen($idrequerimiento); 
			  $faltantes = 7-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$idrequerimiento);
			  ?>
              </span>
              </td>
            </tr>
          </table>
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="20%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">TIPO</strong></td>
              <td width="21%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">ACTIVIDAD</strong></td>
              <td width="19%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">SUELDO</strong></td>
              <td width="21%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">DESCANSO</strong></td>
              <td width="19%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">FECHA REGISTRO</strong></td>
            </tr>
            <tr>
              <td height="35" align="center" valign="middle">
              <?php
			  if($cama_afuera){echo("Cama afuera <br>");}
			  if($cama_adentro){echo("Cama adentro <br>");}
			  if($horas){echo("Por horas <br>");}
			  ?>
              </td>
              <td align="center" valign="middle">
              <?php
			  if($cocina){echo("Cocina <br>");}
			  if($limpieza){echo("Limpieza <br>");}
			  if($ninera){echo("Niñera <br>");}
			  if($enfermeria){echo("Enfermeria <br>");}
			  if($chofer){echo("Chofer <br>");}
			  if($mayordomo){echo("Mayordomo <br>");}
			  if($todo_servicio){echo("Todo servicio <br>");}
			  ?>
              </td>
              <td align="center" valign="middle">S/. <?php echo($sueldo);?></td>
              <td align="center" valign="middle">
              <?php 
			  switch($descanso)
			  {
			   case(0): echo("Lunes");break;
			   case(1): echo("Martes");break;
			   case(2): echo("Miercoles");break;
			   case(3): echo("Jueves");break;
			   case(4): echo("Viernes");break;
			   case(5): echo("Sabado");break;
			   case(6): echo("Domingo");break;
			  } 
			  ?>
              </td>
              <td align="center" valign="middle"><?php echo($fecha_registro);?></td>
            </tr>
          </table>          
          </td>
        </tr>
      </table>
      <br />
      <table width="628" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="628" height="44" align="right" valign="middle">
          <img src="../../pdf.jpg" width="40" height="40" align="absmiddle" />          
          <a href="contrato.php?idcontrato=<?php echo($idcontrato);?>" class="vinculo" 
          target="_blank">Imprimir Contrato</a>           
          </td>
        </tr>
      </table>
    </form>    
    </td>
  </tr>
</table>
</body>
</html>
