<?php

/**
 * This is the model class for table "store".
 *
 * The followings are the available columns in table 'store':
 * @property integer $store_id
 * @property string $code
 * @property integer $website_id
 * @property integer $group_id
 * @property string $name
 * @property integer $sort_order
 * @property integer $is_active
 */
class Mage2StorePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{store}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('website_id, group_id, sort_order, is_active', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>32),
			array('name', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2Store the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
