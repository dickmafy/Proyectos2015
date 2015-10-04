<?php
require_once("../../../BE/BEcontrato.php");
require_once("../../../utilitarios/funciones.php");

function registrar_contrato($idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, 
							$cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, 
							$sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
{
  $contrato = new Contrato;
  $idcontrato = $contrato->registra_contrato($idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 
  											 $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, 
											 $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, 
											 $fechaini_, $fechafin_);
  fnRedirect("generado.php?idcontrato=".$idcontrato);
}	

function actualizar_contrato($accion_, $idcontrato)
{
  $contrato = new Contrato;
  $contrato->actualiza_contrato($accion_, $idcontrato);
  fnRedirect("administrar.php");
}	

function actualizar_datos_contrato($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 
								   $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
								   $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
{
  $contrato = new Contrato;
  $contrato->actualiza_datos_contrato($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 
								      $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
								      $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_);
  fnRedirect("administrar.php");								
}	

function dame_datos_contrato($idcontrato)
{
  $contrato = new Contrato;
  $arr_datos = $contrato->devuelve_datos_contrato($idcontrato);
  return $arr_datos;
}	

function dame_contratos($desp_, $tamanopagina_)
{
  $contrato = new Contrato;
  $arr_contratos = $contrato->devuelve_contratos($desp_, $tamanopagina_);
  return $arr_contratos;
}

?>