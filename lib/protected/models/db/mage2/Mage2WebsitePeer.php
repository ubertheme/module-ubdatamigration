<?php

/**
 * This is the model class for table "store_website".
 *
 * The followings are the available columns in table 'store_website':
 * @property integer $website_id
 * @property string $code
 * @property string $name
 * @property integer $sort_order
 * @property integer $default_group_id
 * @property integer $is_default
 */
class Mage2WebsitePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{store_website}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort_order, default_group_id, is_default', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>32),
			array('name', 'length', 'max'=>64),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2StoreWebsite the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
