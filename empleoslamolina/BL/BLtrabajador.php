<?php
require_once("../../../BE/BEtrabajador.php");
require_once("../../../utilitarios/funciones.php");

function registrar_trabajador($ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
 							  $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, $dpto_, $manzana_, $lote_, 
							  $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, 
							  $tipo_cel_, $celular_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
							  $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, 
							  $tipo_estudio_, $descripcion_, $empresa_, $cargo_, $ama_casa_, $se_entero_, $capacitacion1_,  
							  $capacitacion2_, $capacitacion3_, $capacitacion4_, $documento1_, $documento2_, $documento3_, 
							  $tipo_doc4_, $documento4_, $documento5_, $documento6_, $documento7_, 
							  $nombre_ref1_, $tipo_doc_ref1_, $num_doc_ref1_, $direccion_ref1_, $tipo_ref1_, 
							  $act_ref1_, $fechaini_ref1_, $fechafin_ref1_, $retiro_ref1_, $telefono_ref1_, 
							  $nombre_ref2_, $tipo_doc_ref2_, $num_doc_ref2_, $direccion_ref2_, $tipo_ref2_, 
							  $act_ref2_, $fechaini_ref2_, $fechafin_ref2_, $retiro_ref2_, $telefono_ref2_, 
							  $nprovincia_, $email_, $destacado_)
{
  $trabajador = new Trabajador;
  $trabajador->registra_trabajador($ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, $estado_civil_, $sexo_, 
								   $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, $dpto_, $manzana_, $lote_, 
								   $urbanizacion_, $referencia_, $iddepartamento_, $idprovincia_, $iddistrito_, $telefono_, 
								   $tipo_cel_, $celular_, $cama_afuera_, $cama_adentro_, $horas_, $cocina_, $limpieza_, 
								   $ninera_, $enfermeria_, $mayordomo_, $chofer_, $todo_servicio_, $sueldo_, $descanso_, 
								   $tipo_estudio_, $descripcion_, $empresa_, $cargo_, $ama_casa_, $se_entero_, 
								   $capacitacion1_, $capacitacion2_, $capacitacion3_, $capacitacion4_,
								   $documento1_, $documento2_, $documento3_, $tipo_doc4_, $documento4_, $documento5_, 
								   $documento6_, $documento7_, $nombre_ref1_, $tipo_doc_ref1_, $num_doc_ref1_, 
								   $direccion_ref1_, $tipo_ref1_, $act_ref1_, $fechaini_ref1_, $fechafin_ref1_, 
								   $retiro_ref1_, $telefono_ref1_, $nombre_ref2_, $tipo_doc_ref2_, $num_doc_ref2_, 
								   $direccion_ref2_, $tipo_ref2_, $act_ref2_, $fechaini_ref2_, $fechafin_ref2_, 
								   $retiro_ref2_, $telefono_ref2_, $nprovincia_, $email_, $destacado_);
  fnRedirect("administrar.php");
}	

function actualizar_trabajador($accion_, $idtrabajador)
{
  $trabajador = new Trabajador;
  $trabajador->actualiza_trabajador($accion_, $idtrabajador);
}	

function actualizar_datos_trabajador($idtrabajador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
									 $estado_civil_, $sexo_, $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, 
									 $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_,
									 $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, $cama_afuera_, 
									 $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
									 $chofer_, $todo_servicio_, $sueldo_, $descanso_, $tipo_estudio_, $descripcion_, 
									 $empresa_, $cargo_, $ama_casa_, $se_entero_, $capacitacion1_, $capacitacion2_, 
									 $capacitacion3_, $capacitacion4_, $documento1_, $documento2_, $documento3_, $tipo_doc4_, 
									 $documento4_, $documento5_, $documento6_, $documento7_, $nombre_ref1_, 
									 $tipo_doc_ref1_, $num_doc_ref1_, $direccion_ref1_, $tipo_ref1_, $act_ref1_, 
									 $fechaini_ref1_, $fechafin_ref1_, $retiro_ref1_, $telefono_ref1_, $nombre_ref2_, 
									 $tipo_doc_ref2_, $num_doc_ref2_, $direccion_ref2_, $tipo_ref2_, $act_ref2_, 
									 $fechaini_ref2_, $fechafin_ref2_, $retiro_ref2_, $telefono_ref2_, 
									 $nprovincia_, $email_, $destacado_)
{
  $trabajador = new Trabajador;
  $trabajador->actualiza_datos_trabajador($idtrabajador_, $ape_paterno_, $ape_materno_, $nombres_, $tipo_doc_, $nro_doc_, 
										  $estado_civil_, $sexo_, $instruccion_, $fecha_nac_, $idpais_, $tipo_, $nombre_, 
										  $dpto_, $manzana_, $lote_, $urbanizacion_, $referencia_, $iddepartamento_,
										  $idprovincia_, $iddistrito_, $telefono_, $tipo_cel_, $celular_, $cama_afuera_, 
										  $cama_adentro_, $horas_, $cocina_, $limpieza_, $ninera_, $enfermeria_, $mayordomo_, 
										  $chofer_, $todo_servicio_, $sueldo_, $descanso_, $tipo_estudio_, $descripcion_, 
										  $empresa_, $cargo_, $ama_casa_, $se_entero_, $capacitacion1_, $capacitacion2_, 
									 	  $capacitacion3_, $capacitacion4_, $documento1_, $documento2_, $documento3_, 
										  $tipo_doc4_, $documento4_, $documento5_, $documento6_, $documento7_, $nombre_ref1_, 
										  $tipo_doc_ref1_, $num_doc_ref1_, $direccion_ref1_, $tipo_ref1_, $act_ref1_, 
										  $fechaini_ref1_, $fechafin_ref1_, $retiro_ref1_, $telefono_ref1_, $nombre_ref2_, 
										  $tipo_doc_ref2_, $num_doc_ref2_, $direccion_ref2_, $tipo_ref2_, $act_ref2_, 
										  $fechaini_ref2_, $fechafin_ref2_, $retiro_ref2_, $telefono_ref2_, 
										  $nprovincia_, $email_, $destacado_);
  fnRedirect("administrar.php");								
}	

function dame_datos_trabajador($idtrabajador)
{
  $trabajador = new Trabajador;
  $arr_datos = $trabajador->devuelve_datos_trabajador($idtrabajador);
  return $arr_datos;
}	

function dame_trabajadores($desp_, $tamanopagina_)
{
  $trabajador = new Trabajador;
  $arr_trabajadores = $trabajador->devuelve_trabajadores($desp_, $tamanopagina_);
  return $arr_trabajadores;
}

?>