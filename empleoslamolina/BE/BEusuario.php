<?php
require_once("../../../DAO/DAOusuario.php");

class Usuario
{	
	function Usuario()
	{}
	
	function registra_usuario($usuario_, $password_, $idperfil_, $nombre_, $ape_paterno_, $ape_materno_, $telefono_, $email_,
  							  $direccion_)
	{
	  $id_ = consulta_id_usuario();
	  $idp_ = consulta_id_personal();	  
	  inserta_usuario($id_, $idp_, $usuario_, $password_, $idperfil_, $nombre_, $ape_paterno_, $ape_materno_, $telefono_, 
	  				  $email_, $direccion_);
	}
		
	function actualiza_usuario($accion_, $idusuario_)
	{	  
	  actualiza_usuario($accion_, $idusuario_);
	}
	
	function actualiza_datos_usuario($idusuario_, $nomusuario_, $password_, $perfil_, $nombre_, $ape_paterno_, 
									 $ape_materno_, $telefono_, $email_, $direccion_)
	{	  
	  actualiza_datos_usuario($idusuario_, $nomusuario_, $password_, $perfil_, $nombre_, $ape_paterno_, $ape_materno_, 
	   						  $telefono_, $email_, $direccion_);
	}
		
	function valida_usuario($usuario_)
	{	  
	  $existe = validar_usuario($usuario_); 
	  return $existe;
	}
	
}

?>