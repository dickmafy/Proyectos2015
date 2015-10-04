<?php
require_once("../../../BL/BLempleador.php");
require_once("../../../BL/BLrequerimiento.php");
fnSessionStart();
$conexion = conectar_cms();
error_reporting(0);
$idempleador = $_GET["idempleador"];
$estadorequerimiento = $_GET["estadorequerimiento"]; 
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
        <td width="92" align="left" valign="middle"><span class="negrita14">Empleadores</span></td>
        <td align="right" valign="middle" class="negrita14">Historial de Requerimientos</td>
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
        <span>Historial de requerimientos registrados en el sistema para este empleador</span>    
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="142" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
      <table width="98%" height="86" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="100%" height="86" align="left" valign="top">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="73%" height="42">&nbsp;&nbsp;&nbsp;<span class="texto">
              <?php
			  $arr_datos = dame_datos_empleador($idempleador);
			  $ape_paterno = $arr_datos[1];
			  $ape_materno = $arr_datos[2];
			  $nombres = $arr_datos[3];
			  $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
			  ?>
              <strong>EMPLEADOR:</strong> <?php echo($nombre_completo);?></span>              
              </td>
              <td width="27%" align="right">
              <table width="162" height="38" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="63" align="center" valign="middle">Mostrar</td>
                <td width="99" align="left" valign="middle">
                <select name="mostrar" class="lista" id="mostrar" style="border:solid 1px #CCCCCC;" 
                 onchange="document.form.action='historial.php?idempleador=<?php 
				 echo($idempleador);?>&estadorequerimiento='+this.value; document.form.submit();">
                 <option value="1" <?php if($estadorequerimiento=="1"){echo("selected='selected'");}?>>Activos</option>
                 <option value="3" <?php if($estadorequerimiento=="3"){echo("selected='selected'");}?>>Atendidos</option>
                 <option value="4" <?php if($estadorequerimiento=="4"){echo("selected='selected'");}?>>Anulados</option>
                </select>
                </td>
              </tr>
            </table>
              </td>
            </tr>
          </table>
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="10%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">NRO</strong></td>
              <td width="17%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">TIPO</strong></td>
              <td width="18%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">ACTIVIDAD</strong></td>
              <td width="15%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">SUELDO</strong></td>
              <td width="15%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">DESCANSO</strong></td>
              <td width="13%" height="40" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">FECHA REGISTRO</strong></td>
              <td width="12%" align="center" valign="middle" bgcolor="#0193DE">
              <strong class="cabeceratabla">ACCIÓN </strong></td>
            </tr>
              <?php
			  $i=1;
			  $consulta = "SELECT IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  	   HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  	   MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  	   DESCANSO descanso, OTROS otros, FECHA_REGISTRO fecha_registro     
  			   			   FROM REQUERIMIENTO 
						   WHERE IDEMPLEADOR = '".$idempleador."'";
			 if($estadorequerimiento==""){$consulta.= " AND IDESTADO = '1'";}
			 if($estadorequerimiento=="1"){$consulta.= " AND IDESTADO = '1'";}
			 if($estadorequerimiento=="3"){$consulta.= " AND IDESTADO = '3'";}
			 if($estadorequerimiento=="4"){$consulta.= " AND IDESTADO = '4'";}
			 $consulta.= " ORDER BY CAST(IDREQUERIMIENTO as unsigned) DESC ";
			 $utf8 = mysql_query("SET NAMES utf8");
			 $ejecuta = mysql_query($consulta, $conexion);		  
			 while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			 {
			   $idrequerimiento = $empleadores["idrequerimiento"]; 
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
			   $descanso = $empleadores["descanso"];
			   $fecha_registro = $empleadores["fecha_registro"];
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
              <?php 
			  $digitos = strlen($idrequerimiento); 
			  $faltantes = 7-$digitos; 
			  $cadenaceros = "";
			  for($j=1; $j<=$faltantes; $j++)
			  {$cadenaceros .= $cadenaceros+"0";}
			  echo($cadenaceros.$idrequerimiento);
			  ?>              
              </td>
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
              <td align="center" valign="middle">
              <?php if($estadorequerimiento==1 or $estadorequerimiento==""){?>
              <a href="proc_actualiza_requerimiento.php?accion=4&idempleador=<?php echo($idempleador);?>&idrequerimiento=<?php 
			  echo($idrequerimiento);?>" class="vinculo" 
              onclick="return(confirm('Desea anular este requerimiento?'))">Anular</a>
              <?php }?>
              <?php if($estadorequerimiento==3){?>
              <a href="proc_actualiza_requerimiento.php?accion=1&idempleador=<?php echo($idempleador);?>&idrequerimiento=<?php 
			  echo($idrequerimiento);?>" class="vinculo" 
              onclick="return(confirm('Desea anular este requerimiento?'))">Activar</a>
              <?php }?>
              <?php if($estadorequerimiento==4){?>
              <a href="proc_actualiza_requerimiento.php?accion=1&idempleador=<?php echo($idempleador);?>&idrequerimiento=<?php 
			  echo($idrequerimiento);?>" class="vinculo" 
              onclick="return(confirm('Desea activar este requerimiento?'))">Activar</a>
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
      </table>
    </form>    
    </td>
  </tr>
</table>
</body>
</html>
