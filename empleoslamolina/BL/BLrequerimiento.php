<?php
require_once("../../../BE/BErequerimiento.php");
require_once("../../../utilitarios/funciones.php");

function registrar_requerimiento($cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, 
							  	 $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $idempleador_)
{
  $requerimiento = new Requerimiento;
  $requerimiento->registra_requerimiento($cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, 
  										 $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, 
										 $otros_, $idempleador_);
  fnRedirect("administrar.php");
}	

function actualizar_requerimiento($accion_, $idrequerimiento, $idempleador)
{
  $requerimiento = new Requerimiento;
  $requerimiento->actualiza_requerimiento($accion_, $idrequerimiento);
  fnRedirect("historial.php?estadorequerimiento=1&idempleador=".$idempleador);
}	

function actualizar_datos_requerimiento($idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
									 	$ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, 
									 	$descanso_, $otros_, $idempleador_)
{
  $requerimiento = new Requerimiento;
  $requerimiento->actualiza_datos_requerimiento($idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, 
  												$limpieza_, $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, 
												$sueldo_, $descanso_, $otros_, $idempleador_);
  fnRedirect("administrar.php");								
}	

function dame_datos_requerimiento($idrequerimiento)
{
  $requerimiento = new Requerimiento;
  $arr_datos = $requerimiento->devuelve_datos_requerimiento($idrequerimiento);
  return $arr_datos;
}	

function dame_requerimientos($desp_, $tamanopagina_)
{
  $requerimiento = new Requerimiento;
  $arr_requerimientos = $requerimiento->devuelve_requerimientos($desp_, $tamanopagina_);
  return $arr_requerimientos;
}

?>