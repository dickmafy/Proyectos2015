<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("estilos.css");
</style>
</head>

<body>
<div align="center"><br />
 <br /><br />
 <span class="titulointro">PLATAFORMA DE GESTIÓN DE SERVICIOS</span><br />
 AGENCIA DE EMPLEOS - RESIDENCIAL LA MOLINA
 <br /><br />
 <img src="logo.jpg" width="450" height="101" />
 <br /><br />
</div>
<form action="validarusuario.php" method="post" name="form_login" id="form_login"> 
<table width="407" height="256" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#EAEAEA">
<tr>
  <td width="407" height="49" align="left" valign="middle">
  <table width="246" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="27" height="24" align="left" valign="top">&nbsp;</td>
    <td width="15" align="left" valign="middle" bgcolor="#007234" class="textoblanco">&nbsp;</td>
    <td width="204" align="left" valign="middle" bgcolor="#007234" class="textoblanco">
    <strong class="blanco12">Inicio de Sesión</strong></td>
  </tr>
  </table>
  </td>
</tr>
<tr>
  <td height="180" align="center" valign="top">
  <table width="356" height="226" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td height="184" align="center" valign="top">
     <table width="302" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="302" height="26" align="left" valign="top" class="Estilo1">
          <strong class="textogrisoscuro">INICIAR SESIÓN</strong></td>
        </tr>
        <tr>
          <td height="20" align="left" valign="top" class="textogrisoscuro">Usuario</td>
        </tr>
        <tr>
          <td height="32" align="left" valign="top">
          <input name="usuario" type="text"  id="usuario"  size="47" maxlength="20"  value="Usuario" 
          onfocus="if(this.value=='Usuario')this.value='';this.style.backgroundColor = '#FAFAD2';" 
          onblur="if(this.value=='')this.value='Usuario';this.style.backgroundColor = '#FFFFFF';" 
          style="height:25px; font-size:14px;" class="cajatextoblanca"/>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top" class="textogrisoscuro">Contraseña</td>
        </tr>
        <tr>
          <td height="43" align="left" valign="top">
          <input name="contrasena" type="password" id="contrasena" 
          onfocus="if(this.value=='*******')this.value='';this.style.backgroundColor = '#FAFAD2';" 
          onblur="if(this.value=='')this.value='*******';this.style.backgroundColor = '#FFFFFF';" 
          value="*******" size="47" maxlength="20" style="height:25px; font-size:14px;" class="cajatextoblanca"/>
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">
          <input name="enviar" type="submit" class="cajabotones" id="enviar" value="Ingresar" 
          onclick="return validar();"/>
          </td>
        </tr>
    </table>
    </td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top" class="textogrisoscuro">
      <table width="291" border="0" cellspacing="0" cellpadding="0">
        <tr>
         <td width="291" align="center" valign="middle"><?php
            $error = $_GET["error"];
            if($error=="1")
            {
              echo("<span class='textorojo'>Usuario o contraseña incorrectos.</span>");
            }
            if($error=="2")
            {
              echo("<span class='textorojo'>Esta cuenta aún no ha sido activada.</span>");
            }
			if($error=="3")
            {
              echo("<span class='textorojo'>El perfil no corresponde al usuario.</span>");
            }
         ?>
         </td>
        </tr>
      </table>
     </td>
    </tr>
    <tr>
      <td height="24" align="center" valign="top" class="textogrisoscuro"> 
      Para  consultas escribir a soporte@agenciaempleos.com 
      </td>
    </tr>
  </table>
  </td>
</tr>
<tr>
  <td height="27" align="center" valign="middle" bgcolor="#007236" class="blanco12">
  2013 ® AGENCIA DE EMPLEOS - Todos los derechos reservados
  </td>
</tr>
</table>
</form>
</body>
</html>
<script>
function validar()
{
 if(form_login.usuario.value=='Usuario' || form_login.contrasena.value=='*******')
 {
   alert("Por favor ingrese su usuario y contraseña");
   return false;
 }
 else
 {
   return true;
 }
}
</script>