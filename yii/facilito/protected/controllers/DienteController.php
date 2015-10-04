<?php

class DienteController extends Controller
{
	public function actionIndex()
	{

/*
	$model=new Diente();
	$model->estado=2;
	$model->nombre='molar2';
	$model->save();
*/

	$dientes=Diente::model()->findAll();
		$this->render('index',
			array('dientes' =>$dientes)
			);
	}

	public function actionCreate()
	{

	/*terminar la aplicacion del YII
	var_dump($_POST);
	yii::app()->end();
	*/

	$model = new Diente();
	if(isset($_POST["Diente"]))
	{
		$model->attributes=$_POST["Diente"];
		if($model->save())
		{
			$this->redirect(array("index"));
		}


	}
	$this->render("create",array('model' =>$model ));


	}


	public function actionUpdate($id)
	{
	$model=Diente::model()->findByPk($id);
	if(isset($_POST["Diente"]))
		{
			$model->attributes=$_POST["Diente"];
			if($model->save())
			{
				$this->redirect(array("index"));
			}
		}
	$this->render("update",array('model' =>$model ));
	}


	public function actionDelete($id)
	{
	$model=Diente::model()->deleteByPk($id);
	$this->redirect(array("index"));
	}

	public function actionView($id)
	{
	$model=Diente::model()->findByPk($id);
	$this->render("view",array("model"=>$model));
	}

	public function actionEnabled($id)
	{
	$model=Diente::model()->findByPk($id);
	if($model->estado==1){
		$model->estado=0;
		else
		$model->estado=1;
	}
	$model->save();
	$this->redirect(array("index"));
	}


}
