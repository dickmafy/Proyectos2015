<?php
    error_reporting(0); 
    require_once("../../../utilitarios/funciones.php");
    require("class.phpmailer.php");
	
    $mail = new PHPMailer();
    $mail->Host = "localhost";
    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["ape_paterno"]." ".$_POST["ape_materno"]." ".$_POST["nombres"];
    $mail->Subject = "Bertha Experta en casaa - Usted tiene un nuevo requerimiento";
    $mail->AddAddress("dotacion@berthaexpertaencasa.com");
	$mail->AddAddress("administracion@berthaexpertaencasa.com");
    $body = "<strong>Bertha Experta en casaa - Usted tiene un nuevo requerimiento</strong><br>";
	$body.= "<strong>Nombres y Apellidos: </strong>".$_POST["ape_paterno"]." ".$_POST["ape_materno"]." ".
	$_POST["nombres"]."<br>";
	$body.= "<strong>Dirección: </strong>".$_POST["direccion"]."<br>";
	$body.= "<strong>Teléfono: </strong>".$_POST["telefono"]."<br>";
	switch($_POST["tipo_cel"])
	{
	 case(0): $tipocel = "CLARO"; break;
	 case(1): $tipocel = "CLARO RPC"; break;
	 case(2): $tipocel = "MOVISTAR"; break;
	 case(3): $tipocel = "MOVISTAR RPC"; break;
	 case(4): $tipocel = "NEXTEL"; break;
	}
	$body.= "<strong>Celular: </strong>".$tipocel." ".$_POST["celular"]."<br>";
	$body.= "<strong>Email: </strong>".$_POST["email"]."<br>";
	$body.= "<strong>Mensaje: </strong><br>";
	$body.= $_POST["mensaje"]."<br>";
    $mail->Body = $body;
    $mail->IsHTML(true);
    $mail->Send();
	fnRedirect("requerimientos.php"); 
?>