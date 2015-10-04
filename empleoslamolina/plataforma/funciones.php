<?php
error_reporting(0);
function fnSessionStart(){
session_start();
$url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$dominio = split("//",$url);
$pagina = split("/",$dominio[0]);
$indicador = $pagina[2];

if($_SESSION["usuario"]=="" || !isset($_SESSION["usuario"]))
{ $_SESSION["usuario"] = ""; }
}

function fnSessionEnd(){
session_unset();
session_destroy();
}

function generaCodUsuario(){
$codusuario = rand(0, 100);  
return $codusuario;
}

function validaPerfil($modulo){
 if(isset($_SESSION["usuario"])){
  $conexion = conectar_cms();
  $usuario = $_SESSION["usuario"];
  $consulta = "SELECT IDPERFIL perfil FROM USUARIO WHERE USUARIO = '".$usuario."'";
  $ejecuta = mysql_query($consulta, $conexion);
  $idperfil = mysql_result($ejecuta, "perfil");
  
  $consulta = "SELECT ".$modulo." permiso FROM PERFIL WHERE IDPERFIL = '".$idperfil."'";
  $ejecuta = mysql_query($consulta, $conexion);
  $permiso = mysql_result($ejecuta, "permiso");
  
  if(!$permiso)
  { fnRedirect("index.php");}
 }
}

function dameNombre($usuario){
 $conexion = conectar_cms();
 $consulta = "SELECT CONCAT(P.NOMBRES, ' ', P.APELLIDO_PATERNO, ' ', P.APELLIDO_MATERNO) AS nombre_completo 
			 FROM USUARIO U, PERSONAL P 
			 WHERE U.IDUSUARIO = P.IDUSUARIO AND U.USUARIO = '".$usuario."'";
 $ejecuta = mysql_query($consulta, $conexion);			 
 $nombre_completo = mysql_result($ejecuta, "0", "nombre_completo");	 
 return $nombre_completo;
}

function fnRedirect($pagina){
    $cad = "Location: http://" . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . "/$pagina";
    header($cad);
}

function fecha(){
	$mes = date("n");
	$mesArray = array(
		1 => "Enero", 
		2 => "Febrero", 
		3 => "Marzo", 
		4 => "Abril", 
		5 => "Mayo", 
		6 => "Junio", 
		7 => "Julio", 
		8 => "Agosto", 
		9 => "Septiembre", 
		10 => "Octubre", 
		11 => "Noviembre", 
		12 => "Diciembre"
	);

	$semana = date("D");
	$semanaArray = array(
		"Mon" => "Lunes", 
		"Tue" => "Martes", 
		"Wed" => "Miercoles", 
		"Thu" => "Jueves", 
		"Fri" => "Viernes", 
		"Sat" => "Sabado", 
		"Sun" => "Domingo", 
	);
	
	$mesReturn = $mesArray[$mes];
	$semanaReturn = $semanaArray[$semana];
	$dia = date("d");
	$año = date ("Y");
	
echo $semanaReturn.", ".$dia." de ".$mesReturn." de ".$año;
}

function convertir_fecha($fecha)
{
 $arr_fecha = split("/", $fecha);
 $dia = $arr_fecha[0];
 $mes = $arr_fecha[1];
 switch($mes){
 case 1: $mesletras = "ENERO"; break;
 case 2: $mesletras = "FEBRERO"; break;
 case 3: $mesletras = "MARZO"; break;
 case 4: $mesletras = "ABRIL"; break;
 case 5: $mesletras = "MAYO"; break;
 case 6: $mesletras = "JUNIO"; break;
 case 7: $mesletras = "JULIO"; break;
 case 8: $mesletras = "AGOSTO"; break;
 case 9: $mesletras = "SETIEMBRE"; break;
 case 10: $mesletras = "OCTUBRE"; break;
 case 11: $mesletras = "NOVIEMBRE"; break;
 case 12: $mesletras = "DICIEMBRE"; break;
 } 

 $fecha_letras = $dia." DE ".$mesletras;

 echo($fecha_letras);
}

function fecha_en_texto($fecha)
{
$dia = substr($fecha,0,2);

$mes = substr($fecha,3,2); 

$mes = str_replace("01","Enero",$mes); 
$mes = str_replace("02","Febrero",$mes); 
$mes = str_replace("03","Marzo",$mes); 
$mes = str_replace("04","Abril",$mes); 
$mes = str_replace("05","Mayo",$mes); 
$mes = str_replace("06","Junio",$mes); 
$mes = str_replace("07","Julio",$mes); 
$mes = str_replace("08","Agosto",$mes); 
$mes = str_replace("09","Septiembre",$mes); 
$mes = str_replace("10","Octubre",$mes); 
$mes = str_replace("11","Noviembre",$mes); 
$mes = str_replace("12","Diciembre",$mes); 

$anio = substr($fecha,6,4); 

$fecha = $dia." de ".$mes." del ".$anio;

return  $fecha;

}

function paginacion_usuario($total, $tamanopagina)
{
  $totalpag = ceil($total/$tamanopagina);
  $pagina = 1;
  $nropag = $_GET["nropag"];
  for($i=1; $i<=$totalpag; $i++)
  {
	if($nropag==$i){
	echo("<a href='gri_usuario_administrar.php?nropag=".$pagina."' class='linkrojo'>".$pagina."</a>&nbsp&nbsp");
	}else{
	echo("<a href='gri_usuario_administrar.php?nropag=".$pagina."' class='linkazul'>".$pagina."</a>&nbsp&nbsp");
	}
	$pagina++;
  }	
}

function paginacion_producto($total, $tamanopagina)
{
  $totalpag = ceil($total/$tamanopagina);
  $pagina = 1;
  $nropag = $_GET["nropag"];
  for($i=1; $i<=$totalpag; $i++)
  {
	if($nropag==$i){
	echo("<a href='gri_producto_administrar.php?nropag=".$pagina."' class='linkrojo'>".$pagina."</a>&nbsp&nbsp");
	}else{
	echo("<a href='gri_producto_administrar.php?nropag=".$pagina."' class='linkazul'>".$pagina."</a>&nbsp&nbsp");
	}
	$pagina++;
  }	
}

?>