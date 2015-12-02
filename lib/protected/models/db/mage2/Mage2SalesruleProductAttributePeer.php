<?php

/**
 * This is the model class for table "salesrule_product_attribute".
 *
 * The followings are the available columns in table 'salesrule_product_attribute':
 * @property string $rule_id
 * @property integer $website_id
 * @property integer $customer_group_id
 * @property integer $attribute_id
 */
class Mage2SalesruleProductAttributePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule_product_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rule_id, website_id, customer_group_id, attribute_id', 'required'),
			array('website_id, customer_group_id, attribute_id', 'numerical', 'integerOnly'=>true),
			array('rule_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesruleProductAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
