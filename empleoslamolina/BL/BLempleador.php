<?php
require_once("../../../BE/BEempleador.php");
require_once("../../../utilitarios/funciones.php");

function registrar_empleador($ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
 							  $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, $tipo_, $nombre_, $dpto_, 
							  $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, 
							  $iddistrito_, $telefono_, $tipo_cel_, $celular_, $adultos_, $desc_adultos_, $ninos_, 
							  $desc_ninos_, $mascotas_, $desc_mascotas_, $email_, $se_entero_)
{
  $empleador = new Empleador;
  $empleador->registra_empleador($ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
 							  	 $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, $tipo_, $nombre_, $dpto_, 
							  	 $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, 
							  	 $iddistrito_, $telefono_, $tipo_cel_, $celular_, $adultos_, $desc_adultos_, $ninos_, 
							  	 $desc_ninos_, $mascotas_, $desc_mascotas_, $email_, $se_entero_);
  fnRedirect("administrar.php");
}	

function actualizar_empleador($accion_, $idempleador)
{
  $empleador = new Empleador;
  $empleador->actualiza_empleador($accion_, $idempleador);
}	

function actualizar_datos_empleador($idempleador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
									$estado_civil_, $sexo_, $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, 
									$tipo_, $nombre_, $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, 
									$iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, 
									$adultos_, $desc_adultos_, $ninos_, $desc_ninos_, $mascotas_, $desc_mascotas_, 
									$email_, $se_entero_)
{
  $empleador = new Empleador;
  $empleador->actualiza_datos_empleador($idempleador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
										$estado_civil_, $sexo_, $fecha_nac_, $hijos_, $nro_hijos_, $mascota_, $idpais_, 
										$tipo_, $nombre_, $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, 
										$iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, 
										$adultos_, $desc_adultos_, $ninos_, $desc_ninos_, $mascotas_, $desc_mascotas_, 
										$email_, $se_entero_);
  fnRedirect("administrar.php");								
}	

function dame_datos_empleador($idempleador)
{
  $empleador = new Empleador;
  $arr_datos = $empleador->devuelve_datos_empleador($idempleador);
  return $arr_datos;
}	

function dame_empleadores($desp_, $tamanopagina_)
{
  $empleador = new Empleador;
  $arr_empleadores = $empleador->devuelve_empleadores($desp_, $tamanopagina_);
  return $arr_empleadores;
}

?>