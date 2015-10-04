<?php
require_once("../../../DAO/DAOcontrato.php");

class Contrato
{	
	function Contrato()
	{}
	
	function registra_contrato($idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, 
							   $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, 
							   $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
	{
	  $id_ = consulta_id_contrato();  
	  inserta_contrato($id_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, 
					   $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, 
					   $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_);
	  return $id_;					 
	}
		
	function actualiza_contrato($accion_, $idcontrato_)
	{	  
	  actualiza_contrato($accion_, $idcontrato_);
	}
	
	function actualiza_datos_contrato($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 		
									  $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
									  $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_)
	{	  
	  actualiza_datos_contrato($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $cama_afuera_, 		
							   $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
							   $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $fechaini_, $fechafin_);
	}
	
	function devuelve_datos_contrato($idcontrato_)
	{	  
	  $arr_datos = devolver_datos_contrato($idcontrato_);
	  return $arr_datos;
	}
	
	function devuelve_contratos($desp_, $tamanopagina_)
	{	  
	  $arr_contratos = devolver_contratos($desp_, $tamanopagina_);
	  return $arr_contratos;
	}
}

?>