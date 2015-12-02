<?php

/**
 * This is the model class for table "customer_eav_attribute_website".
 *
 * The followings are the available columns in table 'customer_eav_attribute_website':
 * @property integer $attribute_id
 * @property integer $website_id
 * @property integer $is_visible
 * @property integer $is_required
 * @property string $default_value
 * @property integer $multiline_count
 */
class Mage1CustomerEavAttributeWebsitePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_eav_attribute_website}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id, website_id', 'required'),
			array('attribute_id, website_id, is_visible, is_required, multiline_count', 'numerical', 'integerOnly'=>true),
			array('default_value', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CustomerEavAttributeWebsitePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
