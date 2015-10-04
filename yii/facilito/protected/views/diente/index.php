<?php
/* @var $this DienteController */

$this->breadcrumbs=array(
	'Diente',
);
?>



<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>


Listado
<?php
echo CHtml::link("crear",array("create"));

echo "<br>";
foreach ($dientes as $item) {
?>
donde va ir y parametros
<h3><?php echo $data->nombre?>
<a href="<?php echo $this->createUrl("enable",array("id"=>$data->id)); ?>"></a>
<span class="label label-<?php echo $data->estado==1?"info":"warning";?>">
	<?php echo $data->estado==1?"enable":"disable";?>
</span>
</a>
</h3>
<?php


	echo "<br>";
	echo $item->nombre;
	echo "-_-";
	echo $item->estado;
	echo CHtml::link("actualizar",array("update","id"=>$item->id));

	echo CHtml::link("borrar",array("delete","id"=>$item->id),array("confirm"=>"esta seguro?"));

	echo CHtml::link("ver detalle",array("view","id"=>$item->id));

}

?>
