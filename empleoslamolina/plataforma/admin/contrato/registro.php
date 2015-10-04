<?php
require_once("../../../DAO/DAOauxiliar.php");
require_once("../../../utilitarios/funciones.php");
$conexion = conectar_cms();
fnSessionStart();
$usuario = $_SESSION["usuario"];
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AGENCIA DE EMPLEOS LA MOLINA | Plataforma de Servicios</title>
<style type="text/css">
@import url("../../estilos.css");
</style>

<script type="text/javascript" src="../../highslide/highslide-full.js"></script> 
<link rel="stylesheet" type="text/css" href="../../highslide/highslide.css" />
<script type="text/javascript">
    hs.graphicsDir = '../../highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.dimmingOpacity = .15;
</script>
</head>

<body>
<table width="100%" height="91" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="2" align="left" valign="middle" bgcolor="#f7d418" class="textoplomotitulo">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="19" align="center">&nbsp;</td>
        <td width="86" align="left" valign="middle"><strong class="negrita14">Contratos</strong></td>
        <td width="1195" align="right" valign="middle" class="negrita14">Registrar Contrato</td>
        <td width="20" align="right" valign="middle">&nbsp;</td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td height="2" colspan="2" align="left" valign="top" bgcolor="1d2702"></td>
  </tr>
  <tr>
    <td height="28" colspan="2" align="left" valign="middle">
    <table width="554" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="12" align="center">&nbsp;</td>
        <td width="542" align="left" valign="middle">
        <span class="texto">En esta sección podrás registrar un nuevo contrato en el 
        sistema</span>
        </td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td width="1301" height="23" align="right" valign="middle" bgcolor="#CCCCCC" class="linkblanco">
    <a href="administrar.php" class="vinculo">Administrar Contratos</a></td>
    <td width="19" align="left" valign="middle" bgcolor="#CCCCCC" class="cabeceratabla">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="2" align="left" valign="top"></td>
  </tr>
</table>
  <table width="100%" height="460" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="41" colspan="2" align="left" valign="top">
    <table width="499" height="38" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="116" align="center" valign="middle">&nbsp;&nbsp;&nbsp;<strong>EMPLEADOR:</strong>&nbsp;</td>
        <td width="261" align="left" valign="middle">
        <?php
		 $idempleador = $_GET["idempleador"]; 
		 if($idempleador){
		 $consulta = "SELECT CONCAT(APE_PATERNO,' ',APE_MATERNO,' ',NOMBRES) nombre 
					  FROM EMPLEADOR 
					  WHERE IDEMPLEADOR = '".$idempleador."'";
		 $ejecuta = mysql_query($consulta, $conexion);			
		 $nombreempleador = mysql_result($ejecuta, "0", "nombre");
		 }
		?>
        <input name="empleador" type="text" class="cajatexto" id="empleador" size="80" 
        readonly="readonly" <?php if($nombreempleador){?> value="<?php echo($nombreempleador);?>" <?php }?>/>
        </td>
        <td width="122" align="left" valign="middle">
        &nbsp;<input name="buscar_empleador" type="button" class="cajabotones" id="buscar_empleador" value="Buscar" 
        onclick="return hs.htmlExpand(this, { contentId: 'highslide-html' } )"/> 
          <div class="highslide-html-content" id="highslide-html" style="width:658px; height:500px;">
            <div class="highslide-header">
              <ul>
                <li class="highslide-move">
                 <a href="#" onclick="return false">Mover</a>                         
                 </li>
                <li class="highslide-close">
                <a href="#" onclick="return hs.close(this)">Cerrar</a>                         
                </li>
              </ul>
            </div>
            <div class="highslide-body">
            <iframe src="empleadores.php" width="655" height="460" frameborder="0"></iframe>
            </div>
            <div class="highslide-footer">
            <div>
             <span class="highslide-resize" title="Resize"><span></span></span>                     
             </div>
            </div>
            </div>
            </div>        
        </td>
      </tr>
    </table>
    <?php
	if($idempleador!="")
	{
	?>
    <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
    <tr>
      <td width="12%" height="40" align="center" valign="middle" bgcolor="#0193DE">
      <strong class="cabeceratabla">NRO</strong></td>
      <td width="16%" align="center" valign="middle" bgcolor="#0193DE"><strong class="cabeceratabla">TIPO</strong></td>
      <td width="32%" align="center" valign="middle" bgcolor="#0193DE">
      <strong class="cabeceratabla">ACTIVIDAD</strong></td>
      <td width="13%" align="center" valign="middle" bgcolor="#0193DE">
      <strong class="cabeceratabla">SUELDO</strong></td>
      <td width="14%" height="40" align="center" valign="middle" bgcolor="#0193DE">
      <strong class="cabeceratabla">DESCANSO</strong></td>
      <td width="13%" height="40" align="center" valign="middle" bgcolor="#0193DE">
      <strong class="cabeceratabla">FECHA REGISTRO</strong></td>
      </tr>
      <?php
      $i=1;
      $consulta = "SELECT IDREQUERIMIENTO idrequerimiento, CAMA_AFUERA cama_afuera, CAMA_ADENTRO cama_adentro, 
                   HORAS horas, COCINA cocina, LIMPIEZA limpieza, NINERA ninera, ENFERMERIA enfermeria, 
                   MAYORDOMO mayordomo, CHOFER chofer, TODO_SERVICIO todo_servicio, SUELDO sueldo, 
                   DESCANSO descanso, OTROS otros, FECHA_REGISTRO fecha_registro     
                   FROM REQUERIMIENTO 
                   WHERE IDEMPLEADOR = '".$idempleador."' 
				   AND IDESTADO = '1'  
				   ORDER BY CAST(IDREQUERIMIENTO as unsigned) DESC LIMIT 1";
      $utf8 = mysql_query("SET NAMES utf8");
      $ejecuta = mysql_query($consulta, $conexion);		  
      while($requerimientos = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
      {
       $idrequerimiento = $requerimientos["idrequerimiento"]; 
       $cama_afuera = $requerimientos["cama_afuera"];
       $cama_adentro = $requerimientos["cama_adentro"];
       $horas = $requerimientos["horas"];
       $cocina = $requerimientos["cocina"];
       $limpieza = $requerimientos["limpieza"];
       $ninera = $requerimientos["ninera"];
       $enfermeria = $requerimientos["enfermeria"];
       $mayordomo = $requerimientos["mayordomo"];
       $chofer = $requerimientos["chofer"];
       $todo_servicio = $requerimientos["todo_servicio"];
       $sueldo = $requerimientos["sueldo"];
       $descanso = $requerimientos["descanso"];
       $fecha_registro = $requerimientos["fecha_registro"];
       if($i%2) 
       {
        $color="#e3e3e3";
       }
       else
       {
        $color="#FFFFFF";
       }
      ?>
      <tr bgcolor="<?php echo($color);?>">
      <td height="35" align="center" valign="middle">
      <?php 
	  $digitos = strlen($idrequerimiento); 
	  $faltantes = 7-$digitos; 
	  $cadenaceros = "";
	  for($j=1; $j<=$faltantes; $j++)
	  {$cadenaceros .= $cadenaceros+"0";}
	  echo($cadenaceros.$idrequerimiento);
	  ?>      
      </td>
      <td height="35" align="center" valign="middle"><?php
      if($cama_afuera){echo("Cama afuera <br>");}
      if($cama_adentro){echo("Cama adentro <br>");}
      if($horas){echo("Por horas <br>");}
      ?></td>
      <td align="center" valign="middle">
      <?php
      if($cocina){echo("Cocina - ");}
      if($limpieza){echo("Limpieza - ");}
      if($ninera){echo("Niñera - ");}
      if($enfermeria){echo("Enfermeria - ");}
      if($chofer){echo("Chofer - ");}
      if($mayordomo){echo("Mayordomo - ");}
      if($todo_servicio){echo("Todo servicio");}
      ?>      </td>
      <td align="center" valign="middle">S/. <?php echo($sueldo);?></td>
      <td align="center" valign="middle">
      <?php 
      switch($descanso)
      {
       case(0): echo("Lunes");break;
       case(1): echo("Martes");break;
       case(2): echo("Miercoles");break;
       case(3): echo("Jueves");break;
       case(4): echo("Viernes");break;
       case(5): echo("Sabado");break;
       case(6): echo("Domingo");break;
      } 
      ?>      
      </td>
      <td align="center" valign="middle"><?php echo($fecha_registro);?></td>
     </tr>
    <?php
     $i++;
     }
    ?>
    </table>
    <?php
    }
	?>
    </td>
  </tr>
  <tr>
    <td height="368" colspan="2" align="center" valign="top">
    <form id="form" name="form" method="post" action="">
      <table width="100%" height="145" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="101" colspan="3" align="left" valign="top">
          <table width="100%" height="83" border="0" cellpadding="0" cellspacing="2" bordercolor="#FFFFFF">
            <tr>
              <td width="3%" height="40" align="center" valign="middle" bgcolor="#007234">&nbsp;</td>
              <td width="26%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">TRABAJADOR</strong></td>
              <td width="8%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">EDAD</strong></td>
              <td width="15%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">PROVINCIA</strong></td>
              <td width="18%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">TELÉFONOS</strong></td>
              <td width="11%" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">SUELDO</strong></td>
              <td width="8%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">FICHA</strong></td>
              <td width="11%" height="40" align="center" valign="middle" bgcolor="#007234">
              <strong class="cabeceratabla">ACCIONES</strong></td>
            </tr>
            <?php
			  $tamanopagina=8;
			  $nropag=1;
			  if(isset($_GET["nropag"])) { $nropag=$_GET["nropag"]; }
			  $desp = ($nropag-1)*$tamanopagina;
			  $consulta = "SELECT COUNT(*) total
						   FROM TRABAJADOR";
			  if($estadotrabajador==""){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadotrabajador=="1"){$consulta.= " WHERE IDESTADO = '1'";}
			  if($estadotrabajador=="0"){$consulta.= " WHERE IDESTADO = '0'";}
			  $consulta.= " AND IDTRABAJADOR NOT IN (SELECT IDTRABAJADOR FROM CONTRATO)";
			  if($cocina){$consulta.= " AND COCINA = '1' ";}
			  if($limpieza){$consulta.= " AND LIMPIEZA = '1' ";}
			  if($ninera){$consulta.= " AND NINERA = '1' ";}
			  if($enfermeria){$consulta.= " AND ENFERMERIA = '1' ";}
			  if($chofer){$consulta.= " AND CHOFER = '1' ";}
			  if($mayordomo){$consulta.= " AND MAYORDOMO = '1' ";}
			  if($todo_servicio){$consulta.= " AND TODO_SERVICIO = '1' ";}
			  $ejecuta = mysql_query($consulta, $conexion);			
			  $total = mysql_result($ejecuta, "0", "total");
			  
			  $i=1;	
			  $consulta = "SELECT T.IDTRABAJADOR idtrabajador, CONCAT(T.APE_PATERNO,' ',T.APE_MATERNO,' ',T.NOMBRES) nombre, 
						   T.FECHA_NAC fecha_nac, T.TIPO_CEL tipo_cel, T.CELULAR celular, T.IDPAIS pais, 
						   T.IDDEPARTAMENTO departamento, T.IDPROVINCIA provincia, T.IDDISTRITO distrito, 
						   T.SUELDO sueldo, EC.DESCRIPCION estado 
						   FROM TRABAJADOR T, ESTADO EC 
						   WHERE T.IDESTADO = EC.IDESTADO 
						   AND T.IDTRABAJADOR NOT IN (SELECT IDTRABAJADOR 
						   							  FROM CONTRATO) 
						   AND EC.IDESTADO <>2";
			  if($estadotrabajador==""){$consulta.= " AND T.IDESTADO = '1'";}
			  if($estadotrabajador=="1"){$consulta.= " AND T.IDESTADO = '1'";}
			  if($estadotrabajador=="0"){$consulta.= " AND T.IDESTADO = '0'";}
			  if($cama_afuera){$consulta.= " AND T.CAMA_AFUERA = '1' ";}
			  if($cama_adentro){$consulta.= " AND T.CAMA_ADENTRO = '1' ";}
			  if($horas){$consulta.= " AND T.HORAS = '1' ";}
			  if($cocina){$consulta.= " AND T.COCINA = '1' ";}
			  if($limpieza){$consulta.= " AND T.LIMPIEZA = '1' ";}
			  if($ninera){$consulta.= " AND T.NINERA = '1' ";}
			  if($enfermeria){$consulta.= " AND T.ENFERMERIA = '1' ";}
			  if($chofer){$consulta.= " AND T.CHOFER = '1' ";}
			  if($mayordomo){$consulta.= " AND T.MAYORDOMO = '1' ";}
			  if($todo_servicio){$consulta.= " AND T.TODO_SERVICIO = '1' ";}
			  $consulta .= " ORDER BY T.APE_PATERNO ASC LIMIT ".$desp.",".$tamanopagina;	
			  $utf8 = mysql_query("SET NAMES utf8");
			  $ejecuta = mysql_query($consulta, $conexion);		  
			  while($trabajadores = mysql_fetch_array($ejecuta, MYSQL_ASSOC))
			  {
			   $idtrabajador = $trabajadores["idtrabajador"]; 
			   $nombre = $trabajadores["nombre"];
			   $fecha_nac = $trabajadores["fecha_nac"];
			   $edad = substr(date("d/m/Y"),6,4)-substr($fecha_nac,6,4);
			   $tipo_cel = $trabajadores["tipo_cel"];
			   $celular = $trabajadores["celular"];
			   $provincia = $trabajadores["provincia"];
			   $departamento = $trabajadores["departamento"];
			   $sueldo = $trabajadores["sueldo"];
			   if($i%2) 
			   {
				$color="#e3e3e3";
			   }
			   else
			   {
				$color="#FFFFFF";
			   }
			?>
            <tr bgcolor="<?php echo($color);?>">
              <td height="35" align="center" valign="middle" ><?php echo($i+(8*($nropag-1)));?></td>
              <td height="35" align="left" valign="middle">
              &nbsp;&nbsp;<?php echo(strtoupper($nombre));?>
              <input type="hidden" name="idtrabajador<?php echo($i);?>" id="idtrabajador<?php echo($i);?>" 
              value="<?php echo($idtrabajador);?>" />              
              </td>
              <td align="center" valign="middle"><?php echo($edad);?> AÑOS</td>
              <td align="center" valign="middle">
			  <?php 
			  $nomprovincia = devolver_nombre_provincia($provincia, $departamento);
			  echo(strtoupper($nomprovincia));
			  ?>
              </td>
              <td align="center" valign="middle">
              <?php 
			  switch($tipo_cel)
			  {
			   case(0): echo("CLARO "); break;
			   case(1): echo("CLARO RPC "); break;
			   case(2): echo("MOVISTAR "); break;
			   case(3): echo("MOVISTAR RPC "); break;
			   case(4): echo("NEXTEL "); break;
			  }
			  echo($celular);
			  ?>
              </td>
              <td align="center" valign="middle">S/.<?php echo($sueldo);?></td>
              <td align="center" valign="middle">
              <a href="javascript:void(0);" class="vinculo" 
              onclick="return hs.htmlExpand(this, { contentId: 'highslide-html<?php echo($i);?>' } )" >Ver</a>
              <div class="highslide-html-content" id="highslide-html<?php echo($i);?>" style="width:720px; height:460px;">
                <div class="highslide-header">
                  <ul>
                    <li class="highslide-move">
                     <a href="#" onclick="return false">Mover</a>                     
                     </li>
                    <li class="highslide-close">
                     <a href="#" onclick="return hs.close(this)">Cerrar</a>                     
                    </li>
                  </ul>
                </div>
                <div class="highslide-body">
                <iframe src="ficha.php?idtrabajador=<?php echo($idtrabajador);?>" width="720" height="420" 
                frameborder="0"></iframe>
                </div>
                <div class="highslide-footer">
                <div>
                 <span class="highslide-resize" title="Resize"><span></span></span>                 
                 </div>
                </div>
               </div>
              </div>              
              </td>
              <td align="center" valign="middle">
              <?php if($idempleador!=""){?>
              <a href="generar.php?idtrabajador=<?php echo($idtrabajador);?>&idempleador=<?php echo($idempleador);?>&idrequerimiento=<?php echo($idrequerimiento);?>" 
              class="vinculo">Generar Contrato</a>
              <?php }else{?>
              Generar Contrato
              <?php }?>              
              </td>
            </tr>
            <?php
			 $i++;
			 }
			 $j=$i-1;
			?>
          </table>
          <input type="hidden" name="nrotrabajadores" id="nrotrabajadores" value="<?php echo($j);?>" />          
          </td>
        </tr>
        <tr>
          <td width="31%" height="17" align="left" valign="middle">
          <table width="318" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <th width="14" height="29" align="left" valign="middle" scope="row">&nbsp;</th>
              <th width="19" align="left" valign="middle" scope="row">
              </th>
              <td width="134" align="left" valign="middle">&nbsp;</td>
              <td width="17" align="left" valign="middle">              
              </td>
              <td width="134" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table>
          </td>
          <td width="67%" align="right" valign="middle">
		  <?php paginacion_precontrato($total, $tamanopagina, $idempleador); ?>
          </td>
          <td width="2%" align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table>
</body>
</html>
<script language="javascript">


function actualizar()
{
function validar_busqueda(form2){

if(form2.txtbus_solicitud.value.length < 3){

   alert('La búsqueda debe contener 3 caracteres mínimo');
   form2.txtdesc.focus();
   return false;	
}
	return true;
}
</script>