<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_trabajador()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDTRABAJADOR total
			   FROM TRABAJADOR
			   ORDER BY CAST( IDTRABAJADOR AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_trabajador($id_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
							$estado_civil_, $sexo_, $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, 
							$dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_,
							$idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, $cama_afuera_, 
							$cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
							$chofer_, $todo_servicio_, $sueldo_, $descanso_, $tipo_estudio_, $descripcion_, 
							$empresa_, $cargo_, $ama_casa_, $se_entero_, $capacitacion1_, $capacitacion2_, $capacitacion3_, 
							$capacitacion4_, $documento1_, $documento2_, $documento3_, $tipo_doc4_, 
							$documento4_, $documento5_, $documento6_, $documento7_, $nombre_ref1_, 
							$tipo_doc_ref1_, $num_doc_ref1_, $direccion_ref1_, $tipo_ref1_, $act_ref1_, 
							$fechaini_ref1_, $fechafin_ref1_, $retiro_ref1_, $telefono_ref1_, $nombre_ref2_, 
							$tipo_doc_ref2_, $num_doc_ref2_, $direccion_ref2_, $tipo_ref2_, $act_ref2_, 
							$fechaini_ref2_, $fechafin_ref2_, $retiro_ref2_, $telefono_ref2_, 
							$nprovincia_, $email_, $destacado_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO TRABAJADOR 
  			   VALUES ('".$id_."','".$ape_paterno_."','".$ape_materno_."','".$nombres_."', '".$tipo_doc_."', 
			   		   '".$nro_doc_."', '".$estado_civil_."', '".$sexo_."', '".$instruccion_."', '".$fecha_nac_."', 
					   '".$idpais_."', '".$tipo_."', '".$nombre_."', '".$dpto_."', '".$manzana_."', '".$lote_."', 
					   '".$urbanizacion_."', '".$referencia_."', '".$iddepartamento_."', '".$idprovincia_."', 
					   '".$iddistrito_."', '".$telefono_."', '".$tipo_cel_."', '".$celular_."', '".$cama_afuera_."', 
					   '".$cama_adentro_."', '".$horas_."', '".$cocina_."', '".$limpieza_."', '".$ninera_."', 
					   '".$enfermeria_."', '".$mayordomo_."', '".$chofer_."', '".$todo_servicio_."', '".$sueldo_."', 
					   '".$descanso_."', '".$tipo_estudio_."', '".$descripcion_."', '".$empresa_."', '".$cargo_."', 
					   '".$ama_casa_."', '".$se_entero_."', '".$capacitacion1_."', '".$capacitacion2_."', 
					   '".$capacitacion3_."', '".$capacitacion4_."','".$documento1_."', '".$documento2_."', 
					   '".$documento3_."', '".$tipo_doc4_."', '".$documento4_."', '".$documento5_."', '".$documento6_."', 
					   '".$documento7."', '".$nombre_ref1_."', 
					   '".$tipo_doc_ref1_."', '".$num_doc_ref1_."', '".$direccion_ref1_."', '".$tipo_ref1_."', 
					   '".$act_ref1_."', '".$fechaini_ref1_."', '".$fechafin_ref1_."', '".$retiro_ref1_."', 
					   '".$telefono_ref1_."', '".$nombre_ref2_."', '".$tipo_doc_ref2_."', '".$num_doc_ref2_."', 
					   '".$direccion_ref2_."', '".$tipo_ref2_."', '".$act_ref2_."', '".$fechaini_ref2_."', 
					   '".$fechafin_ref2_."', '".$retiro_ref2_."', '".$telefono_ref2_."', '".date("d/m/Y")."', 
					   '".$nprovincia_."', '".$email_."', '".$destacado_."', '1')";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_trabajador($accion_, $idtrabajador_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE TRABAJADOR SET IDESTADO = '".$accion_."'
			   WHERE IDTRABAJADOR = '".$idtrabajador_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_trabajador($idtrabajador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
									$estado_civil_, $sexo_, $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, 
									$dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_,
									$idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, $cama_afuera_, 
									$cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
									$chofer_, $todo_servicio_, $sueldo_, $descanso_, $tipo_estudio_, $descripcion_, 
									$empresa_, $cargo_, $ama_casa_, $se_entero_, $capacitacion1_, $capacitacion2_, 
									$capacitacion3_, $capacitacion4_, $documento1_, $documento2_, $documento3_, 
									$tipo_doc4_, $documento4_, $documento5_, $documento6_, $documento7_, $nombre_ref1_, 
									$tipo_doc_ref1_, $num_doc_ref1_, $direccion_ref1_, $tipo_ref1_, $act_ref1_, 
									$fechaini_ref1_, $fechafin_ref1_, $retiro_ref1_, $telefono_ref1_, $nombre_ref2_, 
									$tipo_doc_ref2_, $num_doc_ref2_, $direccion_ref2_, $tipo_ref2_, $act_ref2_, 
									$fechaini_ref2_, $fechafin_ref2_, $retiro_ref2_, $telefono_ref2_, 
									$nprovincia_, $email_, $destacado_)
{
  $conexion = conectar_cms();
  
  $consulta = "UPDATE TRABAJADOR SET APE_PATERNO = '".$ape_paterno_."', APE_MATERNO = '".$ape_materno_."', 
  									 NOMBRES = '".$nombres_."', TIPO_DOC = '".$tipo_doc_."', NRO_DOC = '".$nro_doc_."', 
									 ESTADO_CIVIL = '".$estado_civil_."', SEXO = '".$sexo_."', 
									 INSTRUCCION = '".$instruccion_."', FECHA_NAC = '".$fecha_nac_."', 
									 IDPAIS = '".$idpais_."', TIPO = '".$tipo_."', NOMBRE = '".$nombre_."', 
									 DPTO = '".$dpto_."', MANZANA = '".$manzana_."', LOTE = '".$lote_."', 
									 URBANIZACION = '".$urbanizacion_."', REFERENCIA = '".$referencia_."', 
									 IDDEPARTAMENTO = '".$iddepartamento_."', IDPROVINCIA = '".$idprovincia_."', 
									 IDDISTRITO = '".$iddistrito_."', TELEFONO = '".$telefono_."', 
									 TIPO_CEL = '".$tipo_cel_."', CELULAR = '".$celular_."', 
									 CAMA_AFUERA = '".$cama_afuera_."', CAMA_ADENTRO = '".$cama_adentro_."', 
									 HORAS = '".$horas_."', COCINA = '".$cocina_."', LIMPIEZA = '".$limpieza_."', 
									 NINERA = '".$ninera_."', ENFERMERIA = '".$enfermeria_."', 
									 MAYORDOMO = '".$mayordomo_."', CHOFER = '".$chofer_."', 
									 TODO_SERVICIO = '".$todo_servicio_."', SUELDO = '".$sueldo_."', 
									 DESCANSO = '".$descanso_."', TIPO_ESTUDIO = '".$tipo_estudio_."', 
									 DESCRIPCION = '".$descripcion_."', EMPRESA = '".$empresa_."', 
									 CARGO = '".$cargo_."', AMA_CASA = '".$ama_casa_."', SE_ENTERO = '".$se_entero_."', 
									 CAPACITACION1 = '".$capacitacion1_."', CAPACITACION2 = '".$capacitacion2_."', 
									 CAPACITACION3 = '".$capacitacion3_."', CAPACITACION4 = '".$capacitacion4_."', 
									 DOCUMENTO1 = '".$documento1_."', DOCUMENTO2 = '".$documento2_."', 
									 DOCUMENTO3 = '".$documento3_."', TIPO_DOC4 = '".$tipo_doc4_."', 
									 DOCUMENTO4 = '".$documento4_."', DOCUMENTO5 = '".$documento5_."', 
									 DOCUMENTO6 = '".$documento6_."', DOCUMENTO7 = '".$documento7_."', 
									 NOMBRE_REF1 = '".$nombre_ref1_."', 
									 TIPO_DOC_REF1 = '".$tipo_doc_ref1_."', NUM_DOC_REF1 = '".$num_doc_ref1_."', 
									 DIRECCION_REF1 = '".$direccion_ref1_."', TIPO_REF1 = '".$tipo_ref1_."', 
									 ACT_REF1 = '".$act_ref1_."', FECHAINI_REF1 = '".$fechaini_ref1_."', 
									 FECHAFIN_REF1 = '".$fechafin_ref1_."', RETIRO_REF1 = '".$retiro_ref1_."', 
									 TELEFONO_REF1 = '".$telefono_ref1_."', NOMBRE_REF2 = '".$nombre_ref2_."', 
									 TIPO_DOC_REF2 = '".$tipo_doc_ref2_."', NUM_DOC_REF2 = '".$num_doc_ref2_."', 
									 DIRECCION_REF2 = '".$direccion_ref2_."', TIPO_REF2 = '".$tipo_ref2_."', 
									 ACT_REF2 = '".$act_ref2_."', FECHAINI_REF2 = '".$fechaini_ref2_."', 
									 FECHAFIN_REF2 = '".$fechafin_ref2_."', RETIRO_REF2 = '".$retiro_ref2_."', 
									 TELEFONO_REF2 = '".$telefono_ref2_."', PROVINCIA = '".$nprovincia_."', 
									 EMAIL = '".$email_."', DESTACADO = '".$destacado_."'    
			   WHERE IDTRABAJADOR = ".$idtrabajador_.""; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_datos_trabajador($idtrabajador_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDTRABAJADOR idtrabajador, APE_PATERNO ape_paterno, APE_MATERNO ape_materno, 
					  NOMBRES nombres, TIPO_DOC tipo_doc, NRO_DOC nro_doc, ESTADO_CIVIL estado_civil, SEXO sexo,  
					  INSTRUCCION instruccion, FECHA_NAC fecha_nac, IDPAIS idpais, TIPO tipo, NOMBRE nombre, 
					  DPTO dpto, MANZANA manzana, LOTE lote, URBANIZACION urbanizacion, REFERENCIA referencia, 
					  IDDEPARTAMENTO iddepartamento, IDPROVINCIA idprovincia, IDDISTRITO iddistrito, TELEFONO telefono, 
					  TIPO_CEL tipo_cel, CELULAR celular, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, TIPO_ESTUDIO tipo_estudio, DESCRIPCION descripcion, EMPRESA empresa, 
					  CARGO cargo, AMA_CASA ama_casa, SE_ENTERO se_entero, CAPACITACION1 capacitacion1, 
					  CAPACITACION2 capacitacion2, CAPACITACION3 capacitacion3, CAPACITACION4 capacitacion4, 
					  DOCUMENTO1 documento1, DOCUMENTO2 documento2, DOCUMENTO3 documento3, TIPO_DOC4 tipo_doc4, 
					  DOCUMENTO4 documento4, DOCUMENTO5 documento5, DOCUMENTO6 documento6, DOCUMENTO7 documento7, 
					  NOMBRE_REF1 nombre_ref1, TIPO_DOC_REF1 tipo_doc_ref1, 
					  NUM_DOC_REF1 num_doc_ref1, DIRECCION_REF1 direccion_ref1, TIPO_REF1 tipo_ref1, ACT_REF1 act_ref1, 
					  FECHAINI_REF1 fechaini_ref1, FECHAFIN_REF1 fechafin_ref1, RETIRO_REF1 retiro_ref1, 
					  TELEFONO_REF1 telefono_ref1, NOMBRE_REF2 nombre_ref2, TIPO_DOC_REF2 tipo_doc_ref2, 
					  NUM_DOC_REF2 num_doc_ref2, DIRECCION_REF2 direccion_ref2, TIPO_REF2 tipo_ref2, 
					  ACT_REF2 act_ref2, FECHAINI_REF2 fechaini_ref2, FECHAFIN_REF2 fechafin_ref2, 
					  RETIRO_REF2 retiro_ref2, TELEFONO_REF2 telefono_ref2, PROVINCIA provincia, EMAIL email, 
					  DESTACADO destacado  
  			   FROM TRABAJADOR 
			   WHERE IDTRABAJADOR = '".$idtrabajador_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $trabajadores["idtrabajador"]; 
	$arr_datos[1] = $trabajadores["ape_paterno"]; 
	$arr_datos[2] = $trabajadores["ape_materno"]; 
	$arr_datos[3] = $trabajadores["nombres"]; 
	$arr_datos[4] = $trabajadores["tipo_doc"]; 
	$arr_datos[5] = $trabajadores["nro_doc"]; 						
	$arr_datos[6] = $trabajadores["estado_civil"]; 
	$arr_datos[7] = $trabajadores["sexo"]; 
	$arr_datos[8] = $trabajadores["instruccion"]; 
	$arr_datos[9] = $trabajadores["fecha_nac"]; 
	$arr_datos[10] = $trabajadores["idpais"]; 
	$arr_datos[11] = $trabajadores["tipo"]; 
	$arr_datos[12] = $trabajadores["nombre"]; 						
	$arr_datos[13] = $trabajadores["dpto"]; 
	$arr_datos[14] = $trabajadores["manzana"]; 
	$arr_datos[15] = $trabajadores["lote"]; 
	$arr_datos[16] = $trabajadores["urbanizacion"]; 
	$arr_datos[17] = $trabajadores["referencia"]; 
	$arr_datos[18] = $trabajadores["iddepartamento"];					
	$arr_datos[19] = $trabajadores["idprovincia"]; 
	$arr_datos[20] = $trabajadores["iddistrito"]; 
	$arr_datos[21] = $trabajadores["telefono"]; 
	$arr_datos[22] = $trabajadores["tipo_cel"]; 
	$arr_datos[23] = $trabajadores["celular"]; 
	$arr_datos[24] = $trabajadores["cama_afuera"];						
	$arr_datos[25] = $trabajadores["cama_adentro"]; 
	$arr_datos[26] = $trabajadores["horas"]; 
	$arr_datos[27] = $trabajadores["cocina"]; 
	$arr_datos[28] = $trabajadores["limpieza"]; 
	$arr_datos[29] = $trabajadores["ninera"]; 
	$arr_datos[30] = $trabajadores["enfermeria"]; 
	$arr_datos[31] = $trabajadores["mayordomo"]; 
	$arr_datos[32] = $trabajadores["chofer"]; 
	$arr_datos[33] = $trabajadores["todo_servicio"]; 
	$arr_datos[34] = $trabajadores["sueldo"]; 
	$arr_datos[35] = $trabajadores["descanso"]; 
	$arr_datos[36] = $trabajadores["tipo_estudio"]; 
	$arr_datos[37] = $trabajadores["descripcion"]; 
	$arr_datos[38] = $trabajadores["empresa"]; 
	$arr_datos[39] = $trabajadores["cargo"]; 
	$arr_datos[40] = $trabajadores["ama_casa"]; 
	$arr_datos[41] = $trabajadores["se_entero"]; 
	$arr_datos[42] = $trabajadores["capacitacion1"];
	$arr_datos[43] = $trabajadores["capacitacion2"];
	$arr_datos[44] = $trabajadores["capacitacion3"];
	$arr_datos[45] = $trabajadores["capacitacion4"]; 
	$arr_datos[46] = $trabajadores["documento1"]; 
	$arr_datos[47] = $trabajadores["documento2"]; 
	$arr_datos[48] = $trabajadores["documento3"]; 
	$arr_datos[49] = $trabajadores["tipo_doc4"]; 
	$arr_datos[50] = $trabajadores["documento4"]; 
	$arr_datos[51] = $trabajadores["documento5"];
	$arr_datos[52] = $trabajadores["documento6"];
	$arr_datos[53] = $trabajadores["documento7"]; 
	$arr_datos[54] = $trabajadores["nombre_ref1"];	
	$arr_datos[55] = $trabajadores["tipo_doc_ref1"]; 
	$arr_datos[56] = $trabajadores["num_doc_ref1"]; 
	$arr_datos[57] = $trabajadores["direccion_ref1"]; 
	$arr_datos[58] = $trabajadores["tipo_ref1"]; 
	$arr_datos[59] = $trabajadores["act_ref1"];
	$arr_datos[60] = $trabajadores["fechaini_ref1"]; 
	$arr_datos[61] = $trabajadores["fechafin_ref1"]; 
	$arr_datos[62] = $trabajadores["retiro_ref1"]; 
	$arr_datos[63] = $trabajadores["telefono_ref1"]; 
	$arr_datos[64] = $trabajadores["nombre_ref2"]; 
	$arr_datos[65] = $trabajadores["tipo_doc_ref2"]; 
	$arr_datos[66] = $trabajadores["num_doc_ref2"]; 
	$arr_datos[67] = $trabajadores["direccion_ref2"]; 
	$arr_datos[68] = $trabajadores["tipo_ref2"]; 
	$arr_datos[69] = $trabajadores["act_ref2"]; 
	$arr_datos[70] = $trabajadores["fechaini_ref2"]; 
	$arr_datos[71] = $trabajadores["fechafin_ref2"]; 
	$arr_datos[72] = $trabajadores["retiro_ref2"]; 
	$arr_datos[73] = $trabajadores["telefono_ref2"]; 
	$arr_datos[74] = $trabajadores["provincia"];
	$arr_datos[75] = $trabajadores["email"];
	$arr_datos[76] = $trabajadores["destacado"];
  }

  return $arr_datos;
}

function devolver_trabajadores($desp_, $tamanopagina_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDTRABAJADOR idtrabajador, APE_PATERNO ape_paterno, APE_MATERNO ape_materno, 
					  NOMBRES nombres, TIPO_DOC tipo_doc, NRO_DOC nro_doc, ESTADO_CIVIL estado_civil, SEXO sexo,  
					  INSTRUCCION instruccion, FECHA_NAC fecha_nac, IDPAIS idpais, TIPO tipo, NOMBRE nombre, 
					  DPTO dpto, MANZANA manzana, LOTE lote, URBANIZACION urbanizacion, REFERENCIA referencia, 
					  IDDEPARTAMENTO iddepartamento, IDPROVINCIA idprovincia, IDDISTRITO iddistrito, TELEFONO telefono, 
					  TIPO_CEL tipo_cel, CELULAR celular, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
					  HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
					  MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
					  DESCANSO descanso, TIPO_ESTUDIO tipo_estudio, DESCRIPCION descripcion, EMPRESA empresa, 
					  CARGO cargo, AMA_CASA ama_casa, SE_ENTERO se_entero, CAPACITACION1 capacitacion1, 
					  CAPACITACION2 capacitacion2, CAPACITACION3 capacitacion3, CAPACITACION4 capacitacion4, 
					  DOCUMENTO1 documento1, DOCUMENTO2 documento2, DOCUMENTO3 documento3, TIPO_DOC4 tipo_doc4, 
					  DOCUMENTO4 documento4, DOCUMENTO5 documento5, DOCUMENTO6 documento6, DOCUMENTO7 documento7, 
					  NOMBRE_REF1 nombre_ref1, TIPO_DOC_REF1 tipo_doc_ref1, 
					  NUM_DOC_REF1 num_doc_ref1, DIRECCION_REF1 direccion_ref1, TIPO_REF1 tipo_ref1, ACT_REF1 act_ref1, 
					  FECHAINI_REF1 fechaini_ref1, FECHAFIN_REF1 fechafin_ref1, RETIRO_REF1 retiro_ref1, 
					  TELEFONO_REF1 telefono_ref1, NOMBRE_REF2 nombre_ref2, TIPO_DOC_REF2 tipo_doc_ref2, 
					  NUM_DOC_REF2 num_doc_ref2, DIRECCION_REF2 direccion_ref2, TIPO_REF2 tipo_ref2, 
					  ACT_REF2 act_ref2, FECHAINI_REF2 fechaini_ref2, FECHAFIN_REF2 fechafin_ref2, 
					  RETIRO_REF2 retiro_ref2, TELEFONO_REF2 telefono_ref2 
  			   FROM TRABAJADOR  
			   WHERE IDESTADO = '1'    
			   ORDER BY CAST(IDTRABAJADOR as unsigned) DESC LIMIT ".$desp_.",".$tamanopagina_; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_trabajadores[$i][0] = $trabajadores["idtrabajador"]; 
	$arr_trabajadores[$i][1] = $trabajadores["ape_paterno"]; 
	$arr_trabajadores[$i][2] = $trabajadores["ape_materno"]; 
	$arr_trabajadores[$i][3] = $trabajadores["nombres"]; 
	$arr_trabajadores[$i][4] = $trabajadores["tipo_doc"]; 
	$arr_trabajadores[$i][5] = $trabajadores["nro_doc"]; 						
	$arr_trabajadores[$i][6] = $trabajadores["estado_civil"]; 
	$arr_trabajadores[$i][7] = $trabajadores["sexo"]; 
	$arr_trabajadores[$i][8] = $trabajadores["instruccion"]; 
	$arr_trabajadores[$i][9] = $trabajadores["fecha_nac"]; 
	$arr_trabajadores[$i][10] = $trabajadores["idpais"]; 
	$arr_trabajadores[$i][11] = $trabajadores["tipo"]; 
	$arr_trabajadores[$i][12] = $trabajadores["nombre"]; 						
	$arr_trabajadores[$i][13] = $trabajadores["dpto"]; 
	$arr_trabajadores[$i][14] = $trabajadores["manzana"]; 
	$arr_trabajadores[$i][15] = $trabajadores["lote"]; 
	$arr_trabajadores[$i][16] = $trabajadores["urbanizacion"]; 
	$arr_trabajadores[$i][17] = $trabajadores["referencia"]; 
	$arr_trabajadores[$i][18] = $trabajadores["iddepartamento"];					
	$arr_trabajadores[$i][19] = $trabajadores["idprovincia"]; 
	$arr_trabajadores[$i][20] = $trabajadores["iddistrito"]; 
	$arr_trabajadores[$i][21] = $trabajadores["telefono"]; 
	$arr_trabajadores[$i][22] = $trabajadores["tipo_cel"]; 
	$arr_trabajadores[$i][23] = $trabajadores["celular"]; 
	$arr_trabajadores[$i][24] = $trabajadores["cama_afuera"];						
	$arr_trabajadores[$i][25] = $trabajadores["cama_adentro"]; 
	$arr_trabajadores[$i][26] = $trabajadores["horas"]; 
	$arr_trabajadores[$i][27] = $trabajadores["cocina"]; 
	$arr_trabajadores[$i][28] = $trabajadores["limpieza"]; 
	$arr_trabajadores[$i][29] = $trabajadores["ninera"]; 
	$arr_trabajadores[$i][30] = $trabajadores["enfermeria"]; 
	$arr_trabajadores[$i][31] = $trabajadores["mayordomo"]; 
	$arr_trabajadores[$i][32] = $trabajadores["chofer"]; 
	$arr_trabajadores[$i][33] = $trabajadores["todo_servicio"]; 
	$arr_trabajadores[$i][34] = $trabajadores["sueldo"]; 
	$arr_trabajadores[$i][35] = $trabajadores["descanso"]; 
	$arr_trabajadores[$i][36] = $trabajadores["tipo_estudio"]; 
	$arr_trabajadores[$i][37] = $trabajadores["descripcion"]; 
	$arr_trabajadores[$i][38] = $trabajadores["empresa"]; 
	$arr_trabajadores[$i][39] = $trabajadores["cargo"]; 
	$arr_trabajadores[$i][40] = $trabajadores["ama_casa"]; 
	$arr_trabajadores[$i][41] = $trabajadores["se_entero"]; 
	$arr_trabajadores[$i][42] = $trabajadores["capacitacion1"];
	$arr_trabajadores[$i][43] = $trabajadores["capacitacion2"];
	$arr_trabajadores[$i][44] = $trabajadores["capacitacion3"];
	$arr_trabajadores[$i][45] = $trabajadores["capacitacion4"]; 
	$arr_trabajadores[$i][46] = $trabajadores["documento1"]; 
	$arr_trabajadores[$i][47] = $trabajadores["documento2"]; 
	$arr_trabajadores[$i][48] = $trabajadores["documento3"]; 
	$arr_trabajadores[$i][49] = $trabajadores["tipo_doc4"]; 
	$arr_trabajadores[$i][50] = $trabajadores["documento4"]; 
	$arr_trabajadores[$i][51] = $trabajadores["documento5"];
	$arr_trabajadores[$i][52] = $trabajadores["documento6"];
	$arr_trabajadores[$i][53] = $trabajadores["documento7"]; 
	$arr_trabajadores[$i][54] = $trabajadores["nombre_ref1"];	
	$arr_trabajadores[$i][55] = $trabajadores["tipo_doc_ref1"]; 
	$arr_trabajadores[$i][56] = $trabajadores["num_doc_ref1"]; 
	$arr_trabajadores[$i][57] = $trabajadores["direccion_ref1"]; 
	$arr_trabajadores[$i][58] = $trabajadores["tipo_ref1"]; 
	$arr_trabajadores[$i][59] = $trabajadores["act_ref1"];
	$arr_trabajadores[$i][60] = $trabajadores["fechaini_ref1"]; 
	$arr_trabajadores[$i][61] = $trabajadores["fechafin_ref1"]; 
	$arr_trabajadores[$i][62] = $trabajadores["retiro_ref1"]; 
	$arr_trabajadores[$i][63] = $trabajadores["telefono_ref1"]; 
	$arr_trabajadores[$i][64] = $trabajadores["nombre_ref2"]; 
	$arr_trabajadores[$i][65] = $trabajadores["tipo_doc_ref2"]; 
	$arr_trabajadores[$i][66] = $trabajadores["num_doc_ref2"]; 
	$arr_trabajadores[$i][67] = $trabajadores["direccion_ref2"]; 
	$arr_trabajadores[$i][68] = $trabajadores["tipo_ref2"]; 
	$arr_trabajadores[$i][69] = $trabajadores["act_ref2"]; 
	$arr_trabajadores[$i][70] = $trabajadores["fechaini_ref2"]; 
	$arr_trabajadores[$i][71] = $trabajadores["fechafin_ref2"]; 
	$arr_trabajadores[$i][72] = $trabajadores["retiro_ref2"]; 
	$arr_trabajadores[$i][73] = $trabajadores["telefono_ref2"];
	$i++;
  }

  return $arr_trabajadores;
}

?>