<?php
/* @var $this DienteController */

$this->breadcrumbs=array(
	'Diente',
);
?>

<h1>Crear Diente</h1>

<?php
$form =$this->beginWidget("CActiveForm");
?>

Nombre :
<?php
echo  $form->textField($model,"nombre");
echo  $form->error($model,"nombre");
?>

Estado :
<?php
echo  $form->textField($model,"estado");
echo  $form->error($model,"estado");
?>

<?php
echo CHtml::submitButton("Crear",array('btn btn-primary btn-large')); ?>

<?php $this->endWidget(); ?>
