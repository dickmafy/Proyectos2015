<?php
require_once("../../../BE/BEusuario.php");
require_once("../../../utilitarios/funciones.php");

function registrar_usuario($usuario_, $password_, $perfil_, $nombre_, $ape_paterno_, $ape_materno_, $telefono_, $email_, 
						   $direccion_)
{
  $usuario = new Usuario;
  $usuario_valido = $usuario->valida_usuario($usuario_);
  $usuario->registra_usuario($usuario_, $password_, $perfil_, $nombre_, $ape_paterno_, $ape_materno_, $telefono_, $email_,
  							 $direccion_);
  fnRedirect("administrar.php");
}	

function actualizar_usuario($accion, $idusuario)
{
  $usuario = new Usuario;
  $usuario->actualiza_usuario($accion, $idusuario);
}	

function actualizar_datos_usuario($idusuario, $nomusuario, $password, $idperfil, $nombre, $ape_paterno, $ape_materno, 
								  $telefono, $email, $direccion)
{
  $usuario = new Usuario;
  $usuario->actualiza_datos_usuario($idusuario, $nomusuario, $password, $idperfil, $nombre, $ape_paterno, $ape_materno, 
   								    $telefono, $email, $direccion);
  fnRedirect("administrar.php");								
}	

function dame_datos_usuario($idusuario)
{
  $usuario = new Usuario;
  $arr_datos = $usuario->devuelve_datos_usuario($idusuario);
  return $arr_datos;
}	

?>