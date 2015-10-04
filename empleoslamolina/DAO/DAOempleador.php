<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_empleador()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDEMPLEADOR total
			   FROM EMPLEADOR
			   ORDER BY CAST( IDEMPLEADOR AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_empleador($id_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
						   $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, $tipo_, $nombre_, $dpto_, 
						   $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, 
						   $iddistrito_, $telefono_, $tipo_cel_, $celular_, $adultos_, $desc_adultos_, $ninos_, 
						   $desc_ninos_, $mascotas_, $desc_mascotas_, $email_, $se_entero_)
{
  $conexion = conectar_cms();
  $consulta = "INSERT INTO EMPLEADOR 
  			   VALUES ('".$id_."','".$ape_paterno_."','".$ape_materno_."','".$nombres_."', '".$tipo_doc_."', 
			   		   '".$nro_doc_."', '".$estado_civil_."', '".$sexo_."', '".$fecha_nac_."', '".$hijos_."',
					   '".$nro_hijos_."','".$mascota_."', '".$idpais_."', '".$tipo_."', '".$nombre_."', '".$dpto_."', 
					   '".$manzana_."', '".$lote_."', '".$urbanizacion_."', '".$referencia_."', '".$iddepartamento_."', 
					   '".$idprovincia_."', '".$iddistrito_."', '".$telefono_."', '".$tipo_cel_."', '".$celular_."', 
					   '".$adultos_."', '".$desc_adultos_."', '".$ninos_."', '".$desc_ninos_."', '".$mascotas_."', 
					   '".$desc_mascotas_."', '".$email_."', '".$se_entero_."', '1')"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_empleador($accion_, $idempleador_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE EMPLEADOR SET IDESTADO = '".$accion_."'
			   WHERE IDEMPLEADOR = '".$idempleador_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_empleador($idempleador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
								   $estado_civil_, $sexo_, $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, 
								   $tipo_, $nombre_, $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, 
								   $iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, 
								   $adultos_, $desc_adultos_, $ninos_, $desc_ninos_, $mascotas_, $desc_mascotas_, 
								   $email_, $se_entero_)
{
  $conexion = conectar_cms();
  
  $consulta = "UPDATE EMPLEADOR SET APE_PATERNO = '".$ape_paterno_."', APE_MATERNO = '".$ape_materno_."', 
  									 NOMBRES = '".$nombres_."', TIPO_DOC = '".$tipo_doc_."', NRO_DOC = '".$nro_doc_."', 
									 ESTADO_CIVIL = '".$estado_civil_."', SEXO = '".$sexo_."', 
									 FECHA_NAC = '".$fecha_nac_."', HIJOS = '".$hijos_."', NRO_HIJOS = '".$nro_hijos_."', 
									 MASCOTA = '".$mascota_."', IDPAIS = '".$idpais_."', TIPO = '".$tipo_."', 
									 NOMBRE = '".$nombre_."', DPTO = '".$dpto_."', MANZANA = '".$manzana_."', 
									 LOTE = '".$lote_."', URBANIZACION = '".$urbanizacion_."', 
									 REFERENCIA = '".$referencia_."', IDDEPARTAMENTO = '".$iddepartamento_."', 
									 IDPROVINCIA = '".$idprovincia_."', IDDISTRITO = '".$iddistrito_."', 
									 TELEFONO = '".$telefono_."', TIPO_CEL = '".$tipo_cel_."', CELULAR = '".$celular_."', 
									 ADULTOS = '".$cama_afuera_."', DESC_ADULTOS = '".$desc_adultos_."', 
									 NINOS = '".$adultos_."', DESC_NINOS = '".$desc_ninos_."', MASCOTAS = '".$mascotas_."', 
									 DESC_MASCOTAS = '".$desc_mascotas_."', EMAIL = '".$email_."', 
									 SE_ENTERO = '".$se_entero_."' 
			   WHERE IDEMPLEADOR = ".$idempleador_.""; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_datos_empleador($idempleador_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDEMPLEADOR idempleador, APE_PATERNO ape_paterno, APE_MATERNO ape_materno, 
					  NOMBRES nombres, TIPO_DOC tipo_doc, NRO_DOC nro_doc, ESTADO_CIVIL estado_civil, SEXO sexo,  
					  FECHA_NAC fecha_nac, HIJOS hijos, NRO_HIJOS nro_hijos, MASCOTA mascota, IDPAIS idpais, TIPO tipo, 
					  NOMBRE nombre, DPTO dpto, MANZANA manzana, LOTE lote, URBANIZACION urbanizacion, REFERENCIA referencia, 
					  IDDEPARTAMENTO iddepartamento, IDPROVINCIA idprovincia, IDDISTRITO iddistrito, TELEFONO telefono, 
					  TIPO_CEL tipo_cel, CELULAR celular, ADULTOS adultos, DESC_ADULTOS desc_adultos, NINOS ninos, 
					  DESC_NINOS desc_ninos, MASCOTAS mascotas, DESC_MASCOTAS desc_mascotas, EMAIL email, 
					  SE_ENTERO se_entero 
  			   FROM EMPLEADOR 
			   WHERE IDEMPLEADOR = '".$idempleador_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $empleadores["idempleador"]; 
	$arr_datos[1] = $empleadores["ape_paterno"]; 
	$arr_datos[2] = $empleadores["ape_materno"]; 
	$arr_datos[3] = $empleadores["nombres"]; 
	$arr_datos[4] = $empleadores["tipo_doc"]; 
	$arr_datos[5] = $empleadores["nro_doc"]; 						
	$arr_datos[6] = $empleadores["estado_civil"]; 
	$arr_datos[7] = $empleadores["sexo"]; 
	$arr_datos[8] = $empleadores["fecha_nac"];
	$arr_datos[9] = $empleadores["hijos"];
	$arr_datos[10] = $empleadores["nro_hijos"];
	$arr_datos[11] = $empleadores["mascota"]; 
	$arr_datos[12] = $empleadores["idpais"]; 
	$arr_datos[13] = $empleadores["tipo"]; 
	$arr_datos[14] = $empleadores["nombre"]; 						
	$arr_datos[15] = $empleadores["dpto"]; 
	$arr_datos[16] = $empleadores["manzana"]; 
	$arr_datos[17] = $empleadores["lote"]; 
	$arr_datos[18] = $empleadores["urbanizacion"]; 
	$arr_datos[19] = $empleadores["referencia"]; 
	$arr_datos[20] = $empleadores["iddepartamento"];					
	$arr_datos[21] = $empleadores["idprovincia"]; 
	$arr_datos[22] = $empleadores["iddistrito"]; 
	$arr_datos[23] = $empleadores["telefono"]; 
	$arr_datos[24] = $empleadores["tipo_cel"]; 
	$arr_datos[25] = $empleadores["celular"]; 
	$arr_datos[26] = $empleadores["adultos"];						
	$arr_datos[27] = $empleadores["desc_adultos"]; 
	$arr_datos[28] = $empleadores["ninos"]; 
	$arr_datos[29] = $empleadores["desc_ninos"]; 
	$arr_datos[30] = $empleadores["mascotas"]; 
	$arr_datos[31] = $empleadores["desc_mascotas"]; 
	$arr_datos[32] = $empleadores["email"]; 
	$arr_datos[33] = $empleadores["se_entero"];  
  }

  return $arr_datos;
}

function devolver_empleadores($desp_, $tamanopagina_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDEMPLEADOR idempleador, APE_PATERNO ape_paterno, APE_MATERNO ape_materno, 
					  NOMBRES nombres, TIPO_DOC tipo_doc, NRO_DOC nro_doc, ESTADO_CIVIL estado_civil, SEXO sexo,  
					  FECHA_NAC fecha_nac, HIJOS hijos, NRO_HIJOS nro_hijos, MASCOTA mascota, IDPAIS idpais, TIPO tipo, 
					  NOMBRE nombre, DPTO dpto, MANZANA manzana, LOTE lote, URBANIZACION urbanizacion, REFERENCIA referencia, 
					  IDDEPARTAMENTO iddepartamento, IDPROVINCIA idprovincia, IDDISTRITO iddistrito, TELEFONO telefono, 
					  TIPO_CEL tipo_cel, CELULAR celular, ADULTOS adultos, DESC_ADULTOS desc_adultos, NINOS ninos, 
					  DESC_NINOS desc_ninos, MASCOTAS mascotas, DESC_MASCOTAS desc_mascotas, EMAIL email, 
					  SE_ENTERO se_entero     
  			   FROM EMPLEADOR  
			   WHERE IDESTADO = '1'    
			   ORDER BY CAST(IDEMPLEADOR as unsigned) DESC LIMIT ".$desp_.",".$tamanopagina_; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($empleadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_empleadores[$i][0] = $empleadores["idempleador"]; 
	$arr_empleadores[$i][1] = $empleadores["ape_paterno"]; 
	$arr_empleadores[$i][2] = $empleadores["ape_materno"]; 
	$arr_empleadores[$i][3] = $empleadores["nombres"]; 
	$arr_empleadores[$i][4] = $empleadores["tipo_doc"]; 
	$arr_empleadores[$i][5] = $empleadores["nro_doc"]; 						
	$arr_empleadores[$i][6] = $empleadores["estado_civil"]; 
	$arr_empleadores[$i][7] = $empleadores["sexo"]; 
	$arr_empleadores[$i][6] = $empleadores["fecha_nac"];
	$arr_empleadores[$i][9] = $empleadores["hijos"];
	$arr_empleadores[$i][10] = $empleadores["nro_hijos"]; 
	$arr_empleadores[$i][11] = $empleadores["mascota"]; 
	$arr_empleadores[$i][12] = $empleadores["idpais"]; 
	$arr_empleadores[$i][13] = $empleadores["tipo"]; 
	$arr_empleadores[$i][14] = $empleadores["nombre"]; 						
	$arr_empleadores[$i][15] = $empleadores["dpto"]; 
	$arr_empleadores[$i][16] = $empleadores["manzana"]; 
	$arr_empleadores[$i][17] = $empleadores["lote"]; 
	$arr_empleadores[$i][18] = $empleadores["urbanizacion"]; 
	$arr_empleadores[$i][19] = $empleadores["referencia"]; 
	$arr_empleadores[$i][20] = $empleadores["iddepartamento"];					
	$arr_empleadores[$i][21] = $empleadores["idprovincia"]; 
	$arr_empleadores[$i][22] = $empleadores["iddistrito"]; 
	$arr_empleadores[$i][23] = $empleadores["telefono"]; 
	$arr_empleadores[$i][24] = $empleadores["tipo_cel"]; 
	$arr_empleadores[$i][25] = $empleadores["celular"]; 
	$arr_empleadores[$i][26] = $empleadores["adultos"];						
	$arr_empleadores[$i][27] = $empleadores["desc_adultos"]; 
	$arr_empleadores[$i][28] = $empleadores["ninos"]; 
	$arr_empleadores[$i][29] = $empleadores["desc_ninos"]; 
	$arr_empleadores[$i][30] = $empleadores["mascotas"]; 
	$arr_empleadores[$i][31] = $empleadores["desc_mascotas"]; 
	$arr_empleadores[$i][32] = $empleadores["email"]; 
	$arr_empleadores[$i][33] = $empleadores["se_entero"]; 
	$i++;
  }

  return $arr_empleadores;
}

?>