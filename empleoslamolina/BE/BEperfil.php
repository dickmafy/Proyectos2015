<?php
require_once("../../../DAO/DAOperfil.php");

class Perfil
{	
	function Perfil()
	{}
	
	function registra_perfil($perfil_)
	{
	  $id_ = consulta_id_perfil();
	  inserta_perfil($id_, $perfil_);
	}
		
	function actualiza_perfil($accion_, $idperfil_)
	{	  
	  actualiza_perfil($accion_, $idperfil_);
	}
	
	function actualiza_datos_perfil($idperfil_, $descripcion_)
	{	  
	  actualiza_datos_perfil($idperfil_, $descripcion_);
	}
	
	function devuelve_perfiles()
	{	  
	  $arr_perfiles = devolver_perfiles(); 
	  return $arr_perfiles;
	}
	
}

?>