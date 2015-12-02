<?php

/**
 * This is the model class for table "customer_entity".
 *
 * The followings are the available columns in table 'customer_entity':
 * @property string $entity_id
 * @property integer $entity_type_id
 * @property integer $attribute_set_id
 * @property integer $website_id
 * @property string $email
 * @property integer $group_id
 * @property string $increment_id
 * @property integer $store_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_active
 * @property integer $disable_auto_group_change
 */
class Mage1CustomerEntityPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at', 'required'),
			array('entity_type_id, attribute_set_id, website_id, group_id, store_id, is_active, disable_auto_group_change', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>255),
			array('increment_id', 'length', 'max'=>50),
			array('updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CustomerEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
