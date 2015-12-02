<?php

/**
 * This is the model class for table "core_website".
 *
 * The followings are the available columns in table 'core_website':
 * @property integer $website_id
 * @property string $code
 * @property string $name
 * @property integer $sort_order
 * @property integer $default_group_id
 * @property integer $is_default
 * @property integer $is_staging
 * @property string $master_login
 * @property string $master_password
 * @property string $visibility
 */
class Mage1WebsitePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{core_website}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sort_order, default_group_id, is_default, is_staging', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>32),
			array('name', 'length', 'max'=>64),
			array('master_login, visibility', 'length', 'max'=>40),
			array('master_password', 'length', 'max'=>100)
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1Website the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
