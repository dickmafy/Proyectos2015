<?php
require_once("../../../BE/BEcomprobante.php");
require_once("../../../utilitarios/funciones.php");

function registrar_comprobante($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $monto_, $sunat_)
{
  $comprobante = new Comprobante;
  $comprobante->registra_comprobante($idcontrato_, $idempleador_, $idtrabajador_, $idrequerimiento_, $monto_, $sunat_);
  if($sunat_==0){fnRedirect("administrar.php");}
  if($sunat_==1){fnRedirect("comprobante_generado.php?idcontrato=".$idcontrato_);}
}	

function actualizar_comprobante($accion, $idcomprobante)
{
  $comprobante = new Comprobante;
  $comprobante->actualiza_comprobante($accion, $idcomprobante);
  fnRedirect("administrar.php");
}	

function dame_comprobantes_contrato($idcontrato)
{
  $comprobante = new Comprobante;
  $arr_comprobantes = $comprobante->devuelve_comprobantes_contrato($idcontrato);
  return $arr_comprobantes;
}

function dame_datos_comprobante($idcomprobante)
{
  $comprobante = new Comprobante;
  $arr_datos = $comprobante->devuelve_datos_comprobante($idcomprobante);
  return $arr_datos;
}

function dame_datos_mantenimiento()
{
  $comprobante = new Comprobante;
  $arr_datos = $comprobante->devuelve_datos_mantenimiento();
  return $arr_datos;
}

function actualizar_datos_mantenimiento($serie, $correlativo, $autorizacion, $glosa, $serie_interno, $correlativo_interno)
{
  $comprobante = new Comprobante;
  $comprobante->actualiza_datos_mantenimiento($serie, $correlativo, $autorizacion, $glosa, $serie_interno, 
  											  $correlativo_interno);
  fnRedirect("mantenimiento.php");								
}	

?>