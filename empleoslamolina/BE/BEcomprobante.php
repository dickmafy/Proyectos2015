<?php
require_once("../../../DAO/DAOcomprobante.php");

class Comprobante
{	
	function Comprobante()
	{}
	
	function registra_comprobante($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $monto_, $sunat_)
	{
	  $id_ = consulta_id_comprobante();
	  inserta_comprobante($id_, $idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $monto_, $sunat_);
	}
		
	function actualiza_comprobante($accion_, $idcomprobante_)
	{	  
	  actualiza_comprobante($accion_, $idcomprobante_);
	}
	
	function devuelve_comprobantes_contrato($idcontrato_)
	{	  
	  $arr_comprobantes = devolver_comprobantes_contrato($idcontrato_); 
	  return $arr_comprobantes;
	}
	
	function devuelve_datos_comprobante($idcomprobante_)
	{	  
	  $arr_datos = devolver_datos_comprobante($idcomprobante_); 
	  return $arr_datos;
	}
	
	function devuelve_datos_mantenimiento()
	{	  
	  $arr_datos = devolver_datos_mantenimiento(); 
	  return $arr_datos;
	}
	
	function actualiza_datos_mantenimiento($serie_, $correlativo_, $autorizacion_, $glosa_, $serie_interno_, 
	 								       $correlativo_interno_)
	{	  
	  actualiza_datos_mantenimiento($serie_, $correlativo_, $autorizacion_, $glosa_, $serie_interno_, $correlativo_interno_);
	}
	
}

?>