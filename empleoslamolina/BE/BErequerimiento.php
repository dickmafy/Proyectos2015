<?php
require_once("../../../DAO/DAOrequerimiento.php");

class Requerimiento
{	
	function Requerimiento()
	{}
	
	function registra_requerimiento($cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, 
							  	 	$mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $idempleador_)
	{
	  $id_ = consulta_id_requerimiento();  
	  inserta_requerimiento($id_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, 
						 	$mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, $otros_, $idempleador_);
	}
		
	function actualiza_requerimiento($accion_, $idrequerimiento_)
	{	  
	  actualiza_requerimiento($accion_, $idrequerimiento_);
	}
	
	function actualiza_datos_requerimiento($idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
										   $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, 
										   $descanso_, $otros_, $idempleador_)
	{	  
	  actualiza_datos_requerimiento($idrequerimiento_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
	  								$ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, 
									$otros_, $idempleador_);
	}
	
	function devuelve_datos_requerimiento($idrequerimiento_)
	{	  
	  $arr_datos = devolver_datos_requerimiento($idrequerimiento_);
	  return $arr_datos;
	}
	
	function devuelve_requerimientos($desp_, $tamanopagina_)
	{	  
	  $arr_requerimientos = devolver_requerimientos($desp_, $tamanopagina_);
	  return $arr_requerimientos;
	}
}

?>