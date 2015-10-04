<?php
require_once("../../../DAO/conexion.php");
error_reporting(0);

function consulta_id_destacado()
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDDESTACADO total
			   FROM DESTACADO
			   ORDER BY CAST( IDDESTACADO AS unsigned ) DESC 
			   LIMIT 1";			   			   
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);			   
  $total = mysql_result($ejecuta, "0", "total"); 
  $id = $total + 1;
  return $id;
}

function inserta_destacado($id_, $referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, $modalidad_, 
						   $sueldo_, $img_chica_, $img_grande_)
{
  $conexion = conectar_cms(); 
  $consulta = "INSERT INTO DESTACADO 
  			   VALUES ('".$id_."','".$referencia_."','".$categoria_."','".$experiencia_."', '".$capacitacion_."', 
			   		   '".$trabajos_."', '".$modalidad_."', '".$sueldo_."', '".$img_chica_."', '".$img_grande_."','1')";
  $utf8 = mysql_query("SET NAMES utf8"); 
  $ejecuta = mysql_query($consulta, $conexion); 
}

function actualiza_destacado($accion_, $iddestacado_)
{
  $conexion = conectar_cms();
  $consulta = "UPDATE DESTACADO SET IDESTADO = '".$accion_."'
			   WHERE IDDESTACADO = '".$iddestacado_."'"; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function actualiza_datos_destacado($iddestacado_, $referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, 
 								   $modalidad_, $sueldo_, $img_chica_, $img_grande_)
{
  $conexion = conectar_cms();
  
  $consulta = "UPDATE DESTACADO SET REFERENCIA = '".$referencia_."', CATEGORIA = '".$categoria_."', 
			   EXPERIENCIA = '".$experiencia_."', CAPACITACION = '".$capacitacion_."', TRABAJOS = '".$trabajos_."', 
			   MODALIDAD = '".$modalidad_."', SUELDO = '".$sueldo_."', IMG_CHICA = '".$img_chica_."', 
			   IMG_GRANDE = '".$img_grande_."' 
			   WHERE IDDESTACADO = ".$iddestacado_.""; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
}

function devolver_datos_destacado($iddestacado_)
{
  $conexion = conectar_cms();
  $consulta = "SELECT IDDESTACADO iddestacado, REFERENCIA referencia, CATEGORIA categoria, 
			   EXPERIENCIA experiencia, CAPACITACION capacitacion, TRABAJOS trabajos, MODALIDAD modalidad, SUELDO sueldo,  
			   IMG_CHICA img_chica, IMG_GRANDE img_grande  
  			   FROM DESTACADO 
			   WHERE IDDESTACADO = '".$iddestacado_."'";
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion); 
  while($destacados = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_datos[0] = $destacados["iddestacado"]; 
	$arr_datos[1] = $destacados["referencia"]; 
	$arr_datos[2] = $destacados["categoria"]; 
	$arr_datos[3] = $destacados["experiencia"]; 
	$arr_datos[4] = $destacados["capacitacion"]; 
	$arr_datos[5] = $destacados["trabajos"]; 						
	$arr_datos[6] = $destacados["modalidad"]; 
	$arr_datos[7] = $destacados["sueldo"]; 
	$arr_datos[8] = $destacados["img_chica"]; 
	$arr_datos[9] = $destacados["img_grande"]; 
  }

  return $arr_datos;
}

function devolver_destacados($desp_, $tamanopagina_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDDESTACADO iddestacado, REFERENCIA referencia, CATEGORIA categoria, 
			   EXPERIENCIA experiencia, CAPACITACION capacitacion, TRABAJOS trabajos, MODALIDAD modalidad, SUELDO sueldo,  
			   IMG_CHICA img_chica, IMG_GRANDE img_grande 
  			   FROM DESTACADO  
			   WHERE IDESTADO = '1'    
			   ORDER BY CAST(IDDESTACADO as unsigned) DESC LIMIT ".$desp_.",".$tamanopagina_; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($destacados = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_destacados[$i][0] = $destacados["iddestacado"]; 
	$arr_destacados[$i][1] = $destacados["referencia"]; 
	$arr_destacados[$i][2] = $destacados["categoria"]; 
	$arr_destacados[$i][3] = $destacados["experiencia"]; 
	$arr_destacados[$i][4] = $destacados["capacitacion"]; 
	$arr_destacados[$i][5] = $destacados["trabajos"]; 						
	$arr_destacados[$i][6] = $destacados["modalidad"]; 
	$arr_destacados[$i][7] = $destacados["sueldo"]; 
	$arr_destacados[$i][8] = $destacados["img_chica"]; 
	$arr_destacados[$i][9] = $destacados["img_grande"]; 
	$i++;
  }

  return $arr_destacados;
}

function devolver_destacados_categoria($categoria_)
{
  $i=0;
  $conexion = conectar_cms();
  $consulta = "SELECT IDDESTACADO iddestacado, REFERENCIA referencia, CATEGORIA categoria, 
			   EXPERIENCIA experiencia, CAPACITACION capacitacion, TRABAJOS trabajos, MODALIDAD modalidad, SUELDO sueldo,  
			   IMG_CHICA img_chica, IMG_GRANDE img_grande 
  			   FROM DESTACADO  
			   WHERE IDESTADO = '1' 
			   AND CATEGORIA = '".$categoria_."'     
			   ORDER BY CAST(IDDESTACADO as unsigned) DESC "; 
  $utf8 = mysql_query("SET NAMES utf8");
  $ejecuta = mysql_query($consulta, $conexion);
  while($destacados = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
  {
	$arr_destacados[$i][0] = $destacados["iddestacado"]; 
	$arr_destacados[$i][1] = $destacados["referencia"]; 
	$arr_destacados[$i][2] = $destacados["categoria"]; 
	$arr_destacados[$i][3] = $destacados["experiencia"]; 
	$arr_destacados[$i][4] = $destacados["capacitacion"]; 
	$arr_destacados[$i][5] = $destacados["trabajos"]; 						
	$arr_destacados[$i][6] = $destacados["modalidad"]; 
	$arr_destacados[$i][7] = $destacados["sueldo"]; 
	$arr_destacados[$i][8] = $destacados["img_chica"]; 
	$arr_destacados[$i][9] = $destacados["img_grande"]; 
	$i++;
  }

  return $arr_destacados;
}

?>