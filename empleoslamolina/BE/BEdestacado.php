<?php
require_once("../../../DAO/DAOdestacado.php");

class Destacado
{	
	function Destacado()
	{}
	
	function registra_destacado($referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, $modalidad_, 
								$sueldo_, $img_chica_, $img_grande_)
	{
	  $id_ = consulta_id_destacado();  
	  inserta_destacado($id_, $referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, $modalidad_, $sueldo_, 
 						$img_chica_, $img_grande_);
	}
		
	function actualiza_destacado($accion_, $iddestacado_)
	{	  
	  actualiza_destacado($accion_, $iddestacado_);
	}
	
	function actualiza_datos_destacado($iddestacado_, $referencia_, $categoria_, $experiencia_, $capacitacion_, 
									   $trabajos_, $modalidad_, $sueldo_, $img_chica_, $img_grande_)
	{	  
	  actualiza_datos_destacado($iddestacado_, $referencia_, $categoria_, $experiencia_, $capacitacion_, $trabajos_, 
	  							$modalidad_, $sueldo_, $img_chica_, $img_grande_);
	}
	
	function devuelve_datos_destacado($iddestacado_)
	{	  
	  $arr_datos = devolver_datos_destacado($iddestacado_);
	  return $arr_datos;
	}
	
	function devuelve_destacados($desp_, $tamanopagina_)
	{	  
	  $arr_destacados = devolver_destacados($desp_, $tamanopagina_);
	  return $arr_destacados;
	}
	
	function devuelve_destacados_categoria($categoria_)
	{	  
	  $arr_destacados = devolver_destacados_categoria($categoria_);
	  return $arr_destacados;
	}
}

?>