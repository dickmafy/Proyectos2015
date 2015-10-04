<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 */
class Diente extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Diente the static model class
	 */
	public static function model($ClassName=__CLASS__)
	{
		return parent::model($ClassName);
	}


	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estado', 'required'),
					);
	}




}
