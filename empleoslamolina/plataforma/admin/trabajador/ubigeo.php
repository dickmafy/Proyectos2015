<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
fnSessionStart();
$conexion = conectar_cms();
error_reporting(0);

$iddepartamento = $_GET["depa"];					
$idprovincia = $_GET["provin"];
$iddistrito = $_GET["distri"];

if($_POST["departamento"]!=""){$iddepartamento = $_POST["departamento"];}					
if($_POST["provincia"]!=""){$idprovincia = $_POST["provincia"];}
if($_POST["distrito"]!=""){$iddistrito = $_POST["distrito"];}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
</style>

<script language="javascript" type="text/javascript" src="../../jquery.js"></script>

</head>

<body>
<table height="169" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="699" height="31" align="left" valign="middle" bgcolor="#f7d418" class="textotitulo">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" align="center">&nbsp;</td>
        <td width="92" align="left" valign="middle"><span class="negrita14">Ubigeo</span></td>
        <td align="right" valign="middle" class="negrita14">&nbsp;</td>
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
        <span>Seleccione los datos de ubigeo</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td height="108" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
    <table width="685" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="39" colspan="3" align="left" valign="middle" class="cajatextooscuro">
          <strong class="textoverde">UBIGEO</strong>
          </td>
        </tr>
        <tr>
          <td width="242" height="20" align="left" valign="middle" class="cajatextooscuro">
          <strong>Departamento (*)</strong>
          </td>
          <td width="213" align="left" valign="middle" class="cajatextooscuro">
          <strong>Provincia (*)</strong>
          </td>
          <td width="230" align="left" valign="middle" class="cajatextooscuro">
          <strong>Distrito (*)</strong>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="texto">
          <select name="departamento" class="listagris" id="departamento" tabindex="18" 
          onchange="document.form.action='ubigeo.php?ref=1'; document.form.submit();"> 
            <option value="">---- Seleccione departamento ----</option>
            <?php
			$arr_departamentos = devolver_departamentos();
			$totaldepartamentos = sizeof($arr_departamentos);
			for($i=0; $i<$totaldepartamentos; $i++)
			{
			 $iddepartamento_ = $arr_departamentos[$i][0];
			 $nomdepartamento = $arr_departamentos[$i][1];
			?>
            <option value="<?php echo($iddepartamento_);?>" 
            <?php if($iddepartamento==$iddepartamento_){echo("selected='selected'");}?>>
			<?php echo($nomdepartamento);?></option>
            <?php
			}
			?>
          </select>          
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <select name="provincia" class="listagris" id="provincia" tabindex="18" 
          onchange="document.form.action='ubigeo.php?ref=1'; document.form.submit();"> 
            <option value="">---- Seleccione provincia ----</option>
            <?php
			$arr_provincias = devolver_provincias($iddepartamento);
			$totalprovincias = sizeof($arr_provincias);
			for($i=0; $i<$totalprovincias; $i++)
			{
			 $idprovincia_ = $arr_provincias[$i][0];
			 $nomprovincia = $arr_provincias[$i][1];
			?>
            <option value="<?php echo($idprovincia_);?>" 
            <?php if($idprovincia==$idprovincia_){echo("selected='selected'");}?>><?php echo($nomprovincia);?></option>
            <?php
			}
			?>
          </select>          
          </td>
          <td align="left" valign="top" class="cajatextooscuro">
          <select name="distrito" class="listagris" id="distrito" tabindex="18"
          onchange="document.form.action='ubigeo.php?ref=1'; document.form.submit();"> 
            <option value="">---- Seleccione distrito ----</option>
            <?php
			$arr_distritos = devolver_distritos($idprovincia, $iddepartamento);
			$totaldistritos = sizeof($arr_distritos);
			for($i=0; $i<$totaldistritos; $i++)
			{
			 $iddistrito_ = $arr_distritos[$i][0];
			 $nomdistrito = $arr_distritos[$i][1];
			?>
            <option value="<?php echo($iddistrito_);?>" 
            <?php if($iddistrito==$iddistrito_){echo("selected='selected'");}?>><?php echo($nomdistrito);?></option>
            <?php
			}
			?>
          </select>
          </td>
        </tr>
      </table>
    </form>
    </td>
 </tr>
</table>
</body>
</html>
