<dl>
	<dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Inicio</a></dt>
    <dd  class="fondosubmenu">
	<ul>
		<li><a href="inf_principal.php?idperf=<?php echo($perfil_);?>" class="textosubmenu" 
        target="frameinterior">+ Principal</a></li>
		<li></li>
	</ul>
	</dd>
    <?php if($perfil_!="1"){?>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Usuarios </a></dt>
	<dd  class="fondosubmenu">
	<ul>
		<li><a href="usuario/registro.php" class="textosubmenu" 
        target="frameinterior">+ Registrar Usuario</a></li>
		<li><a href="usuario/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Usuarios</a></li>
		<li></li>
	</ul>
	</dd>
    <?php }?>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Trabajadores </a></dt>
	<dd  class="fondosubmenu">
	<ul>
        <li><a href="trabajador/registro.php" class="textosubmenu" 
        target="frameinterior">+ Registrar Trabajador</a></li>
		<li><a href="trabajador/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Trabajadores</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Destacados </a></dt>
	<dd  class="fondosubmenu">
	<ul>
        <li><a href="destacado/registro.php" class="textosubmenu" 
        target="frameinterior">+ Registrar Destacado</a></li>
		<li><a href="destacado/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Destacados</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Empleadores </a></dt>
	<dd  class="fondosubmenu">
	<ul>
        <li><a href="empleador/registro.php" class="textosubmenu" 
        target="frameinterior">+ Registrar Empleador</a></li>
		<li><a href="empleador/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Empleadores</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Requerimientos </a></dt>
	<dd  class="fondosubmenu">
	<ul>
		<li><a href="requerimiento/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Requerimientos</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Contratos </a></dt>
	<dd  class="fondosubmenu">
	<ul>
        <li><a href="contrato/registro.php" class="textosubmenu" 
        target="frameinterior">+ Registrar Contrato</a></li>
		<li><a href="contrato/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Contratos</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Comprobantes </a></dt>
	<dd  class="fondosubmenu">
	<ul>
        <li><a href="comprobante/mantenimiento.php" class="textosubmenu" 
        target="frameinterior">+ Mantenimiento</a></li>
        <li><a href="comprobante/administrar.php" class="textosubmenu" 
        target="frameinterior">+ Administrar Comprobantes</a></li>
		<li></li>
	</ul>
	</dd>
    <dt class="textomenu"><a href="javascript:void(0);" class="textomenu">Cerrar Sesion</a></dt>
	<dd  class="fondosubmenu">
	<ul>
		<li><a href="../index.php" class="textosubmenu" 
        onclick="return(confirm('Desea cerrar la sesion?'))">+ Cerrar Sesion</a></li>
		<li></li>
	</ul>
	</dd>
</dl>
