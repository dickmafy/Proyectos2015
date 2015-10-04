<?php
/* @var $this DienteController */

$this->breadcrumbs=array(
	'Diente',
);
?>

<h1>Ver Diente</h1>

<table>
<tr>
	<td>id</td>
	<td><?php echo $model->id?></td>
</tr>
<tr>
	<td>nombre</td>
	<td><?php echo $model->nombre ?></td>
</tr>

<tr>
	<td>estado</td>
	<td>
	<span class="label">
	<?php echo $model->estado==1?"info":"warning";?>
	</span>
	</td>
</tr>


</table>

