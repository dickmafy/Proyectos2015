<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 
<?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
 
<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<!-- Beginning header -->
    <div>
        <a href='<?php echo site_url('ticket/ticket')?>'>Registro de  Ticket</a> |
        <a href='<?php echo site_url('producto/producto')?>'>Gestión Producto</a> | 
        <a href='<?php echo site_url('producto/customers_management')?>'>Gestión Empresa</a> |
        <a href='<?php echo site_url('producto/orders_management')?>'>Gestión Transportista </a> |
        <a href='<?php echo site_url('producto/products_management')?>'>Gestión Usuario</a> | 
        <a href='<?php echo site_url('producto/film_management')?>'>Gestión Conductor</a>
 
    </div>
<!-- End of header-->
    <div style='height:20px;'></div>  
    <div>
        <?php echo $output; ?>
 
    </div>
<!-- Beginning footer -->
<div>Footer</div>
<!-- End of Footer -->
</body>
</html>

