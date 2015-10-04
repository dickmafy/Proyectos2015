<?php
    error_reporting(0); 
    require_once("../../../utilitarios/funciones.php");
    require("class.phpmailer.php");
	
    $mail = new PHPMailer();
    $mail->Host = "localhost";
    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["ape_paterno"]." ".$_POST["ape_materno"]." ".$_POST["nombres"];
    $mail->Subject = "Bertha Experta en casaa - Usted tiene un nuevo postulante";
    $mail->AddAddress("reclutamiento@berthaexpertaencasa.com");
	$mail->AddAddress("administracion@berthaexpertaencasa.com");
    $body = "<strong>Bertha Experta en casaa - Usted tiene un nuevo postulante</strong><br>";
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
	$body.= "<strong>Tipo: </strong>";
	$body.= "(";if($cama_afuera){$body.= "X";}$body.= ")";$body.= "Cama afuera&nbsp;&nbsp;";
	$body.= "(";if($cama_adentro){$body.= "X";}$body.= ")";$body.= "Cama adentro&nbsp;&nbsp;";
	$body.= "(";if($horas){$body.= "X";}$body.= ")";$body.= "Por horas&nbsp;&nbsp;";
	$body.= "<br>";
	$body.= "<strong>Actividad: </strong>";
	$body.= "(";if($cocina){$body.= "X";}$body.= ")";$body.= "Cocina&nbsp;&nbsp;";
	$body.= "(";if($limpieza){$body.= "X";}$body.= ")";$body.= "Limpieza&nbsp;&nbsp;";
	$body.= "(";if($ninera){$body.= "X";}$body.= ")";$body.= "NIñera&nbsp;&nbsp;";
	$body.= "(";if($enfermeria){$body.= "X";}$body.= ")";$body.= "Aux. Enfermeria&nbsp;&nbsp;";
	$body.= "(";if($mayordomo){$body.= "X";}$body.= ")";$body.= "Mayordomo&nbsp;&nbsp;";
	$body.= "(";if($chofer){$body.= "X";}$body.= ")";$body.= "Chofer&nbsp;&nbsp;";
	$body.= "(";if($todo_servicio){$body.= "X";}$body.= ")";$body.= "Todo servicio&nbsp;&nbsp;";
	$body.= "<br>";
	$body.= "<strong>Mensaje: </strong><br>";
	$body.= $_POST["mensaje"]."<br>";
    $mail->Body = $body;
    $mail->IsHTML(true);
    $mail->Send();
	fnRedirect("postula.php"); 
?>