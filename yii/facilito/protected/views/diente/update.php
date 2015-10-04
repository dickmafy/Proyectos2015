<?php
/* @var $this DienteController */

$this->breadcrumbs=array(
	'Diente',
);
?>

<h1>Actualizar Diente <?php echo $model->id ?></h1>

<?php
$form =$this->beginWidget("CActiveForm");
?>

Nombrec :
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
echo CHtml::submitButton("Actualizar",array('btn btn-primary btn-large')); ?>

<?php $this->endWidget(); ?>
