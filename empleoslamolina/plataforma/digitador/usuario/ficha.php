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
</style>

<script language="javascript" type="text/javascript" src="../../jquery.js"></script>

</head>

<body>
<table height="203" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="699" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" align="center">&nbsp;</td>
        <td width="92" align="left" valign="middle"><span class="negrita14">Trabajadores</span></td>
        <td align="right" valign="middle" class="negrita14">Ver Ficha</td>
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
        <span>Datos del trabajador registrados en el sistema</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td height="142" align="center" valign="top">
    <?php
   	  $arr_datos = dame_datos_trabajador($idtrabajador);
	  
	  if($_POST["idtrabajador"]!=""){$idtrabajador = $_POST["idtrabajador"];}else{$idtrabajador = $arr_datos[0];} 
	  if($_POST["ape_paterno"]!=""){$ape_paterno = $_POST["ape_paterno"];}else{$ape_paterno = $arr_datos[1];}   
	  if($_POST["ape_materno"]!=""){$ape_materno = $_POST["ape_materno"];}else{$ape_materno = $arr_datos[2];}  
	  if($_POST["nombres"]!=""){$nombres = $_POST["nombres"];}else{$nombres = $arr_datos[3];}
	  if($_POST["tipo_doc"]!=""){$tipo_doc = $_POST["tipo_doc"];}else{$tipo_doc = $arr_datos[4];}   
	  if($_POST["nro_doc"]!=""){$nro_doc = $_POST["nro_doc"];}else{$nro_doc = $arr_datos[5];} 						
	  if($_POST["estado_civil"]!=""){$estado_civil = $_POST["estado_civil"];}else{$estado_civil = $arr_datos[6];} 
	  if($_POST["sexo"]!=""){$sexo = $_POST["sexo"];}else{$sexo = $arr_datos[7];} 
	  if($_POST["instruccion"]!=""){$instruccion = $_POST["instruccion"];}else{$instruccion = $arr_datos[8];}  
	  if($_POST["fecha_nac"]!=""){$fecha_nac = $_POST["fecha_nac"];}else{$fecha_nac = $arr_datos[9];}
	  if($_POST["pais"]!=""){$idpais = $_POST["pais"];}else{$idpais = $arr_datos[10];}
	  if($_POST["tipo"]!=""){$tipo = $_POST["tipo"];}else{$tipo = $arr_datos[11];} 
	  if($_POST["nombre"]!=""){$nombre = $_POST["nombre"];}else{$nombre = $arr_datos[12];}			
	  if($_POST["dpto"]!=""){$dpto = $_POST["dpto"];}else{$dpto = $arr_datos[13];} 
	  if($_POST["manzana"]!=""){$manzana = $_POST["manzana"];}else{$manzana = $arr_datos[14];} 
	  if($_POST["lote"]!=""){$lote = $_POST["lote"];}else{$lote = $arr_datos[15];}
	  if($_POST["urbanizacion"]!=""){$urbanizacion = $_POST["urbanizacion"];}else{$urbanizacion = $arr_datos[16];} 
	  if($_POST["referencia"]!=""){$referencia = $_POST["referencia"];}else{$referencia = $arr_datos[17];} 
	  if($_POST["departamento"]!=""){$iddepartamento = $_POST["departamento"];}else{$iddepartamento = $arr_datos[18];}					
	  if($_POST["provincia"]!=""){$idprovincia = $_POST["provincia"];}else{$idprovincia = $arr_datos[19];} 
	  if($_POST["distrito"]!=""){$iddistrito = $_POST["distrito"];}else{$iddistrito = $arr_datos[20];}  
	  if($_POST["telefono"]!=""){$telefono = $_POST["telefono"];}else{$telefono =  $arr_datos[21];}
	  if($_POST["tipo_cel"]!=""){$tipo_cel = $_POST["tipo_cel"];}else{$tipo_cel =  $arr_datos[22];}
	  if($_POST["celular"]!=""){$celular = $_POST["celular"];}else{$celular = $arr_datos[23];} 
	  if($_POST["cama_afuera"]!=""){$cama_afuera = $_POST["cama_afuera"];}else{$cama_afuera = $arr_datos[24];}						
	  if($_POST["cama_adentro"]!=""){$cama_adentro = $_POST["cama_adentro"];}else{$cama_adentro = $arr_datos[25];} 
	  if($_POST["horas"]!=""){$horas = $_POST["horas"];}else{$horas = $arr_datos[26];}
	  if($_POST["cocina"]!=""){$cocina = $_POST["cocina"];}else{$cocina = $arr_datos[27];} 
	  if($_POST["limpieza"]!=""){$limpieza = $_POST["limpieza"];}else{$limpieza = $arr_datos[28];} 
	  if($_POST["ninera"]!=""){$ninera = $_POST["ninera"];}else{$ninera = $arr_datos[29];} 
	  if($_POST["enfermeria"]!=""){$enfermeria = $_POST["enfermeria"];}else{$enfermeria = $arr_datos[30];} 
	  if($_POST["mayordomo"]!=""){$mayordomo = $_POST["mayordomo"];}else{$mayordomo = $arr_datos[31];} 
	  if($_POST["chofer"]!=""){$chofer = $_POST["chofer"];}else{$chofer = $arr_datos[32];} 
	  if($_POST["todo_servicio"]!=""){$todo_servicio = $_POST["todo_servicio"];}else{$todo_servicio = $arr_datos[33];} 
	  if($_POST["sueldo"]!=""){$sueldo = $_POST["sueldo"];}else{$sueldo = $arr_datos[34];} 
	  if($_POST["descanso"]!=""){$descanso = $_POST["descanso"];}else{$descanso = $arr_datos[35];} 
	  if($_POST["tipo_estudio"]!=""){$tipo_estudio = $_POST["tipo_estudio"];}else{$tipo_estudio = $arr_datos[36];} 
	  if($_POST["descripcion"]!=""){$descripcion = $_POST["descripcion"];}else{$descripcion = $arr_datos[37];} 
	  if($_POST["empresa"]!=""){$empresa = $_POST["empresa"];}else{$empresa = $arr_datos[38];}
	  if($_POST["cargo"]!=""){$cargo = $_POST["cargo"];}else{$cargo = $arr_datos[39];}  
	  if($_POST["ama_casa"]!=""){$ama_casa = $_POST["ama_casa"];}else{$ama_casa = $arr_datos[40];} 
	  if($_POST["se_entero"]!=""){$se_entero = $_POST["se_entero"];}else{$se_entero = $arr_datos[41];} 
	  if($_POST["capacitacion1"]!=""){$capacitacion1 = $_POST["capacitacion1"];}else{$capacitacion1 = $arr_datos[42];}
	  if($_POST["capacitacion2"]!=""){$capacitacion2 = $_POST["capacitacion2"];}else{$capacitacion2 = $arr_datos[43];}
	  if($_POST["capacitacion3"]!=""){$capacitacion3 = $_POST["capacitacion3"];}else{$capacitacion3 = $arr_datos[44];}
	  if($_POST["capacitacion4"]!=""){$capacitacion4 = $_POST["capacitacion4"];}else{$capacitacion4 = $arr_datos[45];} 
	  if($_POST["documento1"]!=""){$documento1 = $_POST["documento1"];}else{$documento1 = $arr_datos[46];} 
	  if($_POST["documento2"]!=""){$documento2 = $_POST["documento2"];}else{$documento2 = $arr_datos[47];} 
	  if($_POST["documento3"]!=""){$documento3 = $_POST["documento3"];}else{$documento3 = $arr_datos[48];} 
	  if($_POST["tipo_doc4"]!=""){$tipo_doc4 = $_POST["tipo_doc4"];}else{$tipo_doc4 = $arr_datos[49];} 
	  if($_POST["documento4"]!=""){$documento4 = $_POST["documento4"];}else{$documento4 = $arr_datos[50];}
	  if($_POST["documento5"]!=""){$documento5 = $_POST["documento5"];}else{$documento5 = $arr_datos[51];}  
	  if($_POST["documento6"]!=""){$documento6 = $_POST["documento6"];}else{$documento6 = $arr_datos[52];} 
	  if($_POST["documento7"]!=""){$documento7 = $_POST["documento7"];}else{$documento7 = $arr_datos[53];} 
	  if($_POST["nombre_ref1"]!=""){$nombre_ref1 = $_POST["nombre_ref1"];}else{$nombre_ref1 = $arr_datos[54];}	
	  if($_POST["tipo_doc_ref1"]!=""){$tipo_doc_ref1 = $_POST["tipo_doc_ref1"];}else{$tipo_doc_ref1 = $arr_datos[55];}  
	  if($_POST["num_doc_ref1"]!=""){$num_doc_ref1 = $_POST["num_doc_ref1"];}else{$num_doc_ref1 = $arr_datos[56];} 
	  if($_POST["direccion_ref1"]!=""){$direccion_ref1 = $_POST["direccion_ref1"];}else{$direccion_ref1 = $arr_datos[57];} 
	  if($_POST["tipo_ref1"]!=""){$tipo_ref1 = $_POST["tipo_ref1"];}else{$tipo_ref1 = $arr_datos[58];}  
	  if($_POST["act_ref1"]!=""){$act_ref1 = $_POST["act_ref1"];}else{$act_ref1 = $arr_datos[59];}
	  if($_POST["fechaini_ref1"]!=""){$fechaini_ref1 = $_POST["fechaini_ref1"];}else{$fechaini_ref1 = $arr_datos[60];} 
	  if($_POST["fechafin_ref1"]!=""){$fechafin_ref1 = $_POST["fechafin_ref1"];}else{$fechafin_ref1 = $arr_datos[61];} 
	  if($_POST["retiro_ref1"]!=""){$retiro_ref1 = $_POST["retiro_ref1"];}else{$retiro_ref1 = $arr_datos[62];} 
	  if($_POST["telefono_ref1"]!=""){$telefono_ref1 = $_POST["telefono_ref1"];}else{$telefono_ref1 = $arr_datos[63];}  
	  if($_POST["nombre_ref2"]!=""){$nombre_ref2 = $_POST["nombre_ref2"];}else{$nombre_ref2 = $arr_datos[64];} 
	  if($_POST["tipo_doc_ref2"]!=""){$tipo_doc_ref2 = $_POST["tipo_doc_ref2"];}else{$tipo_doc_ref2 = $arr_datos[65];} 
	  if($_POST["num_doc_ref2"]!=""){$num_doc_ref2 = $_POST["num_doc_ref2"];}else{$num_doc_ref2 = $arr_datos[66];} 
	  if($_POST["direccion_ref2"]!=""){$direccion_ref2 = $_POST["direccion_ref2"];}else{$direccion_ref2 = $arr_datos[67];} 
	  if($_POST["tipo_ref2"]!=""){$tipo_ref2 = $_POST["tipo_ref2"];}else{$tipo_ref2 = $arr_datos[68];} 
	  if($_POST["act_ref2"]!=""){$act_ref2 = $_POST["act_ref2"];}else{$act_ref2 = $arr_datos[69];} 
	  if($_POST["fechaini_ref2"]!=""){$fechaini_ref2 = $_POST["fechaini_ref2"];}else{$fechaini_ref2 = $arr_datos[70];} 
	  if($_POST["fechafin_ref2"]!=""){$fechafin_ref2 = $_POST["fechafin_ref2"];}else{$fechafin_ref2 = $arr_datos[71];} 
	  if($_POST["retiro_ref2"]!=""){$retiro_ref2 = $_POST["retiro_ref2"];}else{$retiro_ref2 = $arr_datos[72];}  
	  if($_POST["telefono_ref2"]!=""){$telefono_ref2 = $_POST["telefono_ref2"];}else{$telefono_ref2 = $arr_datos[73];} 
	  ?>
     <table width="90%" height="86" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td width="694" height="86" align="left" valign="top">
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="685" height="39" align="left" valign="middle" class="texto">
            <strong class="textoverde">DATOS PERSONALES</strong>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Nombres y Apellidos(*)</strong> 
            </td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle">
            <?php echo(strtoupper($ape_paterno." ".$ape_materno." ".$nombres));?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Doc. Identidad</strong>            
            </td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle">
            <?php echo($nro_doc);?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Estado Civil </strong> 
            </td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle">
            <?php 
			if($estado_civil=="0"){echo(strtoupper("Soltero(a)"));}
			if($estado_civil=="1"){echo(strtoupper("Casado(a)"));}
			if($estado_civil=="2"){echo(strtoupper("Divorciado(a)"));}
			if($estado_civil=="3"){echo(strtoupper("Viudo(a)"));}
			?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Fecha de Nacimiento (dd-mm-yyyy)</strong> 
            </td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle">
            <?php echo($fecha_nac);?>
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle"></td>
          </tr>
        </table>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="39" colspan="3" align="left" valign="middle" class="texto">
            <strong class="textoverde">UBIGEO</strong>
            </td>
          </tr>
          <tr>
            <td width="242" height="20" align="left" valign="middle" class="texto">
            <strong>Departamento</strong>
            </td>
            <td width="213" align="left" valign="middle" class="texto">
            <strong>Provincia</strong>
            </td>
            <td width="230" align="left" valign="middle" class="texto">
            <strong>Distrito</strong>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top" class="textoplomonegrita">
            <?php 
		    $nomdepartamento = devolver_nombre_departamento($iddepartamento);
			echo(strtoupper($nomdepartamento));
			?>
            </td>
            <td align="left" valign="top" class="texto">
            <?php 
		    $nomprovincia = devolver_nombre_provincia($idprovincia, $iddepartamento);
			echo(strtoupper($nomprovincia));
			?>
            </td>
            <td align="left" valign="top" class="texto">
            <?php 
		    $nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
			echo(strtoupper($nomdistrito));
			?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto" colspan="3">
            <strong>Dirección</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" colspan="3">
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
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="685" height="39" align="left" valign="middle" class="texto">
            <strong class="textoverde">DATOS DE CONTACTO</strong>
             </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Teléfono</strong> 
            </td>
          </tr>
          <tr>
            <td height="10" align="left" valign="middle">
            <?php echo($telefono); ?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto"><strong>Celular</strong> </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
            <?php
			if($tipo_cel=="0"){echo(strtoupper("Claro "));}
			if($tipo_cel=="1"){echo(strtoupper("Claro RPC "));}
			if($tipo_cel=="2"){echo(strtoupper("Movistar "));}
			if($tipo_cel=="3"){echo(strtoupper("Movistar RPC "));}
			if($tipo_cel=="4"){echo(strtoupper("Nextel "));}
			echo($celular);
			?>
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle"></td>
          </tr>
        </table>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="39" colspan="2" align="left" valign="middle" class="texto">
            <strong class="textoverde">PERFIL DEL PUESTO</strong>
            </td>
          </tr>
          <tr>
            <td width="75" height="31" align="left" valign="middle" class="texto">
            <strong>Tipo</strong>
            </td>
            <td width="610" align="left" valign="middle" class="texto">
            (<?php if($cama_afuera){echo("X");}else{echo(" ");}?>)
            CAMA AFUERA&nbsp;&nbsp;
            (<?php if($cama_adentro){echo("X");}else{echo(" ");}?>) 
            CAMA ADENTRO&nbsp;&nbsp;
            (<?php if($horas){echo("X");}else{echo(" ");}?>) 
            POR HORAS 
            </td>
          </tr>
          <tr>
            <td height="31" align="left" valign="middle" class="texto">
            <strong>Actividad</strong>
            </td>
            <td height="31" align="left" valign="middle" class="texto">
            (<?php if($cocina){echo("X");}else{echo(" ");}?>)
            COCINA&nbsp;&nbsp;
            (<?php if($limpieza){echo("X");}else{echo(" ");}?>)
            LIMPIEZA&nbsp;&nbsp;
            (<?php if($ninera){echo("X");}else{echo(" ");}?>)
            NIÑERA&nbsp;&nbsp;
            (<?php if($enfermeria){echo("X");}else{echo(" ");}?>)
            AUX. ENFERMERÍA&nbsp;&nbsp;
            (<?php if($mayordomo){echo("X");}else{echo(" ");}?>) 
            MAYORDOMO&nbsp;&nbsp;
            <br />
            (<?php if($chofer){echo("X");}else{echo(" ");}?>)
            CHOFER&nbsp;&nbsp; (<?php if($todo_servicio){echo("X");}else{echo(" ");}?>) 
            TODO SERVICIO           
            </td>
          </tr>
          <tr>
            <td height="20" colspan="2" align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="middle"></td>
          </tr>
        </table>
        <table width="685" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="685" height="39" align="left" valign="middle" class="texto">
            <strong class="textoverde">REMUNERACIÓN</strong>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Sueldo</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
            <?php echo("S/. ".$sueldo);?>
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle" class="texto">
            <strong>Día de Descanso</strong> 
            </td>
          </tr>
          <tr>
            <td height="20" align="left" valign="middle">
            <?php if($descanso=="0"){echo(strtoupper("Lunes"));}?>
			<?php if($descanso=="1"){echo(strtoupper("Martes"));}?>
            <?php if($descanso=="2"){echo(strtoupper("Miercoles"));}?>
            <?php if($descanso=="3"){echo(strtoupper("Jueves"));}?>
            <?php if($descanso=="4"){echo(strtoupper("Viernes"));}?>
            <?php if($descanso=="5"){echo(strtoupper("Sabado"));}?>
            <?php if($descanso=="6"){echo(strtoupper("Domingo"));}?>
            </td>
          </tr>
          <tr>
            <td align="left" valign="middle"></td>
          </tr>
        </table>
        <table width="688" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="39" align="left" valign="middle" class="texto">
            <strong class="textonegro">DOCUMENTOS ADJUNTOS</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Certificado de Antecedentes Policiales</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento1==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento1);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Certificado Domiciliario</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento2==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento2);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Certificado de Salud</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento3==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento3);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Documento de Identidad</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento4==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento4);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Pago de Servicios</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento5==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento5);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Otros</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento6==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento6);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Otros</strong> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php
            if($documento7==""){
            echo "<span class='textorojo'>Documento no disponible</span>";
            }else{
            ?>
            <img src="../../ver.gif">
            <a href="../../../trabajadores/<?php echo($documento7);?>" target="_blank" class="vinculo"
            onclick="return hs.expand(this)" title="">Ver documento</a>
            <?php
            }
            ?>
            </td>
          </tr>
          <tr>
            <td align="left" valign="top" class="texto">&nbsp;</td>
          </tr>
        </table>
        <table width="688" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="39" colspan="2" align="left" valign="middle" class="texto">
            <strong class="textonegro">REFERENCIAS PERSONALES</strong>
            </td>
          </tr>
          <tr>
            <td width="349" height="25" align="left" valign="top" class="texto">
            <strong>Nombre Empleador</strong>
            </td>
            <td width="339" height="25" align="left" valign="top" class="texto">
            <strong>Nombre Empleador</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo(strtoupper($nombre_ref1));?>
            </td>
            <td height="25" align="left" valign="top" class="texto"> 
            <?php echo(strtoupper($nombre_ref2));?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>DNI</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>DNI</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo(strtoupper($num_doc_ref1));?>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo(strtoupper($num_doc_ref2));?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Dirección</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Dirección</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo(strtoupper($direccion_ref1));?>
            </td>
            <td height="25" align="left" valign="top" class="texto"> 
            <?php echo(strtoupper($direccion_ref2));?> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Labor Realizada</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Labor Realizada</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php if($act_ref1=="0"){echo(strtoupper("Cocina"));}?>
            <?php if($act_ref1=="1"){echo(strtoupper("Limpieza"));}?>
            <?php if($act_ref1=="2"){echo(strtoupper("Niñera"));}?>
            <?php if($act_ref1=="3"){echo(strtoupper("Aux. Enfermeria"));}?>
            <?php if($act_ref1=="4"){echo(strtoupper("Todo servicio"));}?>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <?php if($act_ref2=="0"){echo(strtoupper("Cocina"));}?>
            <?php if($act_ref2=="1"){echo(strtoupper("Limpieza"));}?>
            <?php if($act_ref2=="2"){echo(strtoupper("Niñera"));}?>
            <?php if($act_ref2=="3"){echo(strtoupper("Aux. Enfermeria"));}?>
            <?php if($act_ref2=="4"){echo(strtoupper("Todo servicio"));}?> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Tiempo de Trabajo</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Tiempo de Trabajo</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo($fechaini_ref1." - ".$fechafin_ref1);?>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo($fechaini_ref2." - ".$fechafin_ref2);?>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Motivo de Retiro</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Motivo de Retiro</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo(strtoupper($retiro_ref1));?>
            </td>
            <td height="25" align="left" valign="top" class="texto"> 
            <?php echo(strtoupper($retiro_ref2));?> 
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Telefono / Celular</strong>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <strong>Telefono / Celular</strong>
            </td>
          </tr>
          <tr>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo($telefono_ref1);?>
            </td>
            <td height="25" align="left" valign="top" class="texto">
            <?php echo($telefono_ref2);?>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="texto">&nbsp;</td>
          </tr>
        </table>
      </td>
  </tr>
 </table>
 <table width="683" border="0" cellspacing="0" cellpadding="0">
 <tr>
  <td width="683" height="44" align="right" valign="middle">
  <img src="../../pdf.jpg" width="40" height="40" align="absmiddle" />          
  <a href="solicitud.php?idtrabajador=<?php echo($idtrabajador);?>" class="vinculo" 
  target="_blank">Imprimir Solicitud</a>          
  </td>
 </tr>
 </table> 
 </td>
 </tr>
</table>
</body>
</html>
