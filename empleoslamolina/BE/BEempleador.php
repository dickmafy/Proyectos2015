<?php
require_once("../../../DAO/DAOempleador.php");

class Empleador
{	
	function Empleador()
	{}
	
	function registra_empleador($ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
 							  	$fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, $tipo_, $nombre_, $dpto_, 
							  	$manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, 
							  	$iddistrito_, $telefono_, $tipo_cel_, $celular_, $adultos_, $desc_adultos_, $ninos_, 
							  	$desc_ninos_, $mascotas_, $desc_mascotas_, $email_, $se_entero_)
	{
	  $id_ = consulta_id_empleador();  
	  inserta_empleador($id_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
					  	$fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, $tipo_, $nombre_, $dpto_, 
					  	$manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, 
					  	$iddistrito_, $telefono_, $tipo_cel_, $celular_, $adultos_, $desc_adultos_, $ninos_, 
					  	$desc_ninos_, $mascotas_, $desc_mascotas_, $email_, $se_entero_);
	}
		
	function actualiza_empleador($accion_, $idempleador_)
	{	  
	  actualiza_empleador($accion_, $idempleador_);
	}
	
	function actualiza_datos_empleador($idempleador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
									   $estado_civil_, $sexo_, $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, 
								       $tipo_, $nombre_, $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, 
									   $iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, 
									   $adultos_, $desc_adultos_, $ninos_, $desc_ninos_, $mascotas_, $desc_mascotas_, 
									   $email_, $se_entero_)
	{	  
	  actualiza_datos_empleador($idempleador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
								$estado_civil_, $sexo_, $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, 
								$tipo_, $nombre_, $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, 
								$iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, 
								$adultos_, $desc_adultos_, $ninos_, $desc_ninos_, $mascotas_, $desc_mascotas_, 
								$email_, $se_entero_);
	}
	
	function devuelve_datos_empleador($idempleador_)
	{	  
	  $arr_datos = devolver_datos_empleador($idempleador_);
	  return $arr_datos;
	}
	
	function devuelve_empleadores($desp_, $tamanopagina_)
	{	  
	  $arr_empleadores = devolver_empleadores($desp_, $tamanopagina_);
	  return $arr_empleadores;
	}
}

?>