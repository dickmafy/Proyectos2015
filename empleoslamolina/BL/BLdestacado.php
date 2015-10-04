<?php
require_once("../../../BE/BEdestacado.php");
require_once("../../../utilitarios/funciones.php");

function registrar_destacado($referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, $modalidad_, $sueldo_, 
 							 $img_chica_, $img_grande_)
{
  $destacado = new Destacado;
  $destacado->registra_destacado($referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, $modalidad_, 
  								 $sueldo_, $img_chica_, $img_grande_);
  fnRedirect("administrar.php");
}	

function actualizar_destacado($accion_, $iddestacado)
{
  $destacado = new Destacado;
  $destacado->actualiza_destacado($accion_, $iddestacado);
}	

function actualizar_datos_destacado($iddestacado_, $referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, 
 									$modalidad_, $sueldo_, $img_chica_, $img_grande_)
{
  $destacado = new Destacado;
  $destacado->actualiza_datos_destacado($iddestacado_, $referencia_, $categoria_, $experiencia_, $capacitacion_, 
  										$trabajos_, $modalidad_, $sueldo_, $img_chica_, $img_grande_);
  fnRedirect("administrar.php");								
}	

function dame_datos_destacado($iddestacado)
{
  $destacado = new Destacado;
  $arr_datos = $destacado->devuelve_datos_destacado($iddestacado);
  return $arr_datos;
}	

function dame_destacados($desp_, $tamanopagina_)
{
  $destacado = new Destacado;
  $arr_destacados = $destacado->devuelve_destacados($desp_, $tamanopagina_);
  return $arr_destacados;
}

function dame_destacados_categoria($categoria_)
{
  $destacado = new Destacado;
  $arr_destacados = $destacado->devuelve_destacados_categoria($categoria_);
  return $arr_destacados;
}

?>