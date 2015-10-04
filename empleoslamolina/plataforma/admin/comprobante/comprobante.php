<?php
require_once("../../../BL/BLcomprobante.php");
require_once("../../../BL/BLempleador.php");
require_once("../../../DAO/DAOauxiliar.php");
fnSessionStart();
$conexion = conectar_cms();
error_reporting(0);
$idcomprobante = $_GET["idcomprobante"]; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
</style>
</head>

<body>
<table width="60%" height="420" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="650" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" align="center">&nbsp;</td>
        <td width="109" align="left" valign="middle"><span class="negrita14">Comprobantes</span></td>
        <td width="541" align="right" valign="middle" class="negrita14">Detalle de Comprobante</td>
        </tr>
    </table>    
    </td>
  </tr>
  <tr>
    <td height="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
  <tr>
    <td height="28" align="left" valign="middle">
    <table width="634" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="622" align="left" valign="middle">
        <span>Vista previa de comprobante registrado en el sistema</span>        
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="359" align="center" valign="top">
    <?php
	$arr_datos = dame_datos_comprobante($idcomprobante);
	$idempleador = $arr_datos[1];
	$monto = $arr_datos[4];
	$serie = $arr_datos[5];
	$correlativo = $arr_datos[6];
	$fecha = $arr_datos[7];
	$idcontrato = $arr_datos[8];
    ?>
    <table width="600" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="60" colspan="2" align="left" valign="middle">
        <strong>EMPLEOS RESIDENCIAL LA MOLINA EIRL<br />
        RUC 20507645675</strong>        
        </td>
        <td width="194" align="right" valign="middle">
        <strong>COMPROBANTE NRO.</strong><br />
        <?php 
	    $digitos = strlen($serie); 
	    $faltantes = 3-$digitos; 
	    $cadenaceros = "";
	    for($j=1; $j<=$faltantes; $j++)
	    {$cadenaceros .= $cadenaceros+"0";}
	    echo($cadenaceros.$serie);
	    echo(" - ");
	    $digitos = strlen($correlativo); 
	    $faltantes = 7-$digitos; 
	    $cadenaceros = "";
	    for($j=1; $j<=$faltantes; $j++)
	    {$cadenaceros .= $cadenaceros+"0";}
	    echo($cadenaceros.$correlativo);
	    ?>        </td>
      </tr>
      <tr>
        <td height="30" colspan="3" align="left" valign="middle">
        <strong>FECHA: </strong><?php echo($fecha);?> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>CONTRATO:</strong> 
        <?php 
		$digitos = strlen($idcontrato); 
		$faltantes = 7-$digitos; 
		$cadenaceros = "";
		for($j=1; $j<=$faltantes; $j++)
		{$cadenaceros .= $cadenaceros+"0";}
		echo($cadenaceros.$idcontrato);
		?>        </td>
      </tr>
      <tr>
        <td width="190" height="35" align="left" valign="middle" class="cajatextooscuro"><strong>EMPLEADOR</strong> </td>
        <td width="216" align="left" valign="middle" class="cajatextooscuro"><strong>CONTACTO</strong></td>
        <td align="left" valign="middle" class="cajatextooscuro"><strong>DIRECCIÓN</strong></td>
      </tr>
      <tr>
        <td height="10" align="left" valign="middle"><span class="texto">
        <?php
	    $arr_datos = dame_datos_empleador($idempleador);
	    $ape_paterno = $arr_datos[1];
	    $ape_materno = $arr_datos[2];
	    $nombres = $arr_datos[3];
	    $estado_civil = $arr_datos[6];
	    $tipo = $arr_datos[13];
	    $nombre = $arr_datos[14];
	    $dpto = $arr_datos[15];
	    $manzana = $arr_datos[16];
	    $lote = $arr_datos[17];
	    $urbanizacion = $arr_datos[18];
	    $referencia = $arr_datos[19];
	    $iddepartamento = $arr_datos[20];
	    $idprovincia = $arr_datos[21];
	    $iddistrito = $arr_datos[22];
	    $telefono = $arr_datos[23];
	    $celular = $arr_datos[25];
	    $email = $arr_datos[32];
	    $nomdistrito = devolver_nombre_distrito($iddistrito, $idprovincia, $iddepartamento);
	    $nombre_completo = strtoupper($ape_paterno." ".$ape_materno." ".$nombres);
	    ?>
		<?php echo($nombre_completo);?></span> <br />
        <?php 
		switch($estado_civil)
		{
		 case(0): echo("SOLTERO(A)");break;
		 case(1): echo("CASADO(A)");break;
		 case(2): echo("DIVORCIADO(A)");break;
		 case(3): echo("VIUDO(A)");break;
		} 
		?>
        / 
		<?php echo(substr(date("d/m/Y"),6,4)-substr($arr_datos[8],6,4)); ?> AÑOS </td>
        <td align="left" valign="middle"><span class="texto"><?php echo($telefono." / ".$celular);?><br />
        <?php echo(strtoupper($email));?></span> </td>
        <td height="10" align="left" valign="middle"><span class="texto">
        <?php 
		switch($tipo)
		{
		 case(0): echo("CA.");break;
		 case(1): echo("JR.");break;
		 case(2): echo("PS.");break;
		 case(3): echo("AV.");break;
		} 
		?>
        <?php 
		$direccion = $nombre;
		if($dpto!="Dpto"){$direccion .= " DPTO. ".$dpto;}
		if($manzana!="Ma"){$direccion .= " MZ. ".$manzana;}
		if($lote!="Lo"){$direccion .= " LT. ".$lote;}
		echo(strtoupper($direccion)." - ");?>
        <?php echo(strtoupper($nomdistrito));?> </span>        </td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle" height="27"><hr /></td>
      </tr>
      <tr>
        <td height="122" colspan="2" align="left" valign="middle">
        <?php
        $arr_datos = devolver_datos_mantenimiento();
		$glosa = $arr_datos[4];
		echo(strtoupper($glosa));
        ?>        </td>
        <td height="122" align="right" valign="bottom">
        <strong>TOTAL:</strong> S/. <?php echo($monto);?>        </td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle" height="27"><hr /></td>
      </tr>
      <tr>
        <td height="31" colspan="3" align="center" valign="bottom">
        <strong>CANCELADO: <?php echo($fecha);?></strong>        </td>
      </tr>
    </table>
    <table width="592" border="0" cellspacing="0" cellpadding="0">
     <tr>
      <td width="592" height="44" align="right" valign="middle">
      <img src="../../pdf.jpg" width="40" height="40" align="absmiddle" />          
      <a href="comprobante_impresion.php?idcomprobante=<?php echo($idcomprobante);?>" class="vinculo" 
      target="_blank">Imprimir Comprobante</a>      
      </td>
     </tr>
     </table>
    </td>
  </tr>
</table>
</body>
</html>
