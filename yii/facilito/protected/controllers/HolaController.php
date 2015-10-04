<?php

class HolaController extends Controller
{

	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'

		//ir a
		//localhost/yii/facilito/hola/index

		$model=CActiveRecord::model("Users")->findAll();
		$twitter = "@dmatos";
		$this->render
		('index',
		array("model"=>$model,'twitter' =>$twitter )
		);
	}


}
