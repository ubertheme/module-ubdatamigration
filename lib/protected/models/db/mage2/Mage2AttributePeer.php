<?php

/**
 * This is the model class for table "eav_attribute".
 *
 * The followings are the available columns in table 'eav_attribute':
 * @property integer $attribute_id
 * @property integer $entity_type_id
 * @property string $attribute_code
 * @property string $attribute_model
 * @property string $backend_model
 * @property string $backend_type
 * @property string $backend_table
 * @property string $frontend_model
 * @property string $frontend_input
 * @property string $frontend_label
 * @property string $frontend_class
 * @property string $source_model
 * @property integer $is_required
 * @property integer $is_user_defined
 * @property string $default_value
 * @property integer $is_unique
 * @property string $note
 */
class Mage2AttributePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{eav_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_type_id, is_required, is_user_defined, is_unique', 'numerical', 'integerOnly'=>true),
			array('attribute_code, attribute_model, backend_model, backend_table, frontend_model, frontend_label, frontend_class, source_model, note', 'length', 'max'=>255),
			array('backend_type', 'length', 'max'=>8),
			array('frontend_input', 'length', 'max'=>50),
			array('default_value', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2AttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
