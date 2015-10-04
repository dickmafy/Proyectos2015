<?php
require_once("../../../BE/BEperfil.php");
require_once("../../../utilitarios/funciones.php");

function registrar_perfil($descripcion_)
{
  $perfil = new Perfil;
  $perfil->registra_perfil($descripcion_);
  fnRedirect("inf_perfil_registrado.php"); 
	//echo "Ok";
}	

function actualizar_perfil($accion, $idperfil)
{
  $perfil = new Perfil;
  $perfil->actualiza_perfil($accion, $idperfil);
}	

function actualizar_datos_perfil($idperfil, $descripcion)
{
  $perfil = new Perfil;
  $perfil->actualiza_datos_perfil($idperfil, $descripcion);
  fnRedirect("gri_perfil_administrar.php");
}	

function dame_datos_perfil($idperfil)
{
  $perfil = new Perfil;
  $arr_datos = $perfil->devuelve_datos_perfil($idperfil);
  return $arr_datos;
}

function dame_perfiles()
{
  $perfil = new Perfil;
  $arr_perfiles = $perfil->devuelve_perfiles();
  return $arr_perfiles;
}	

?>