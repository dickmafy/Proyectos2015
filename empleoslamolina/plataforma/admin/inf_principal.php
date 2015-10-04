<?php
$perfil_ = $_GET["idperf"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style>
@import url("../estilos.css");
</style>
</head>

<body>
<table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="texto">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="15" align="center">&nbsp;</td>
        <td width="103" align="left" valign="middle"><strong class="negrita14">Bienvenidos</strong></td>
        <td width="909" align="right" valign="middle">&nbsp;</td>
        <td width="17" align="right" valign="middle">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="2" colspan="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
</table>
  <table width="100%" height="522" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="28" colspan="2" align="left" valign="middle">
    <table width="674" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="662" align="left" valign="middle"><span class="texto">
        Bienvenidos a la Plataforma de Servicios de AGENCIA DE EMPLEOS - RESIDENCIAL LA MOLINA</span></td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="24" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">&nbsp;</td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="textoblanco">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
  <tr>
    <td height="432" colspan="2" align="center" valign="middle">
    <span class="titulo">REPORTES DEL SISTEMA</span>
    <br /><br /><br />
    <?php if($perfil_=="0"){?>
      <table width="771" height="210" border="0" cellpadding="0" cellspacing="6">
      <tr>
        <td width="197" height="55" align="left" valign="middle" bgcolor="#007234" class="textomenu">
        LISTADO DE TRABAJADORES        
        </td>
        <td width="194" align="left" valign="middle" bgcolor="#0193DE" class="textomenu">
        LISTADO DE EMPLEADORES
        </td>
        <td width="197" align="left" valign="middle" bgcolor="#CC6633" class="textomenu">
        LISTADO DE COLOCACIONES        
        </td>
        <td width="183" align="left" valign="middle" bgcolor="#FF8080" class="textomenu">
        BALANCE DE<br />
        INGRESOS        
        </td>
      </tr>
      <tr>
        <td height="149" align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_trabajadores.php" target="_blank">
        <img src="../rpt_empleados.jpg" width="158" height="140" border="0" />
        </a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_trabajadores.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />
        </td>
        <td align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_empleadores.php" target="_blank">
        <img src="../rpt_trabajadores.jpg" width="158" height="140" border="0" /></a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_empleadores.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />
        </td>
        <td align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_colocaciones.php" target="_blank">
        <img src="../rpt_colocaciones.jpg" width="158" height="140" border="0" />
        </a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_colocaciones.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />
        </td>
        <td align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_balance.php" target="_blank">
        <img src="../rpt_balance.jpg" width="158" height="140" border="0" />
        </a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_balance.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />
        </td>
      </tr>
    </table>
    <?php }else{?>
    <table width="612" height="210" border="0" cellpadding="0" cellspacing="6">
      <tr>
        <td width="197" height="55" align="left" valign="middle" bgcolor="#007234" class="textomenu">
        LISTADO DE TRABAJADORES        
        </td>
        <td width="194" align="left" valign="middle" bgcolor="#0193DE" class="textomenu">
        LISTADO DE EMPLEADORES        
        </td>
        <td width="197" align="left" valign="middle" bgcolor="#CC6633" class="textomenu">
        LISTADO DE COLOCACIONES        
        </td>
        </tr>
      <tr>
        <td height="149" align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_trabajadores.php" target="_blank">
        <img src="../rpt_empleados.jpg" width="158" height="140" border="0" />        
        </a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_trabajadores.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />        
        </td>
        <td align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_empleadores.php" target="_blank">
        <img src="../rpt_trabajadores.jpg" width="158" height="140" border="0" /></a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_empleadores.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />        
        </td>
        <td align="center" valign="middle" bgcolor="#f1f1f1">
        <a href="reporte/rpt_colocaciones.php" target="_blank">
        <img src="../rpt_colocaciones.jpg" width="158" height="140" border="0" />        
        </a>
        <br /><br />
        <img src="../ver_.jpg" width="19" height="16" align="absmiddle" />        
        <a href="reporte/rpt_colocaciones.php" target="_blank" class="vinculo">Ver</a>
        <br /><br />        
        </td>
        </tr>
    </table>
    <?php }?>
    </td>
  </tr>
</table>
</body>
</html>