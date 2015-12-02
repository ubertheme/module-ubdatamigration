<?php

/**
 * This is the model class for table "salesrule_customer".
 *
 * The followings are the available columns in table 'salesrule_customer':
 * @property string $rule_customer_id
 * @property string $rule_id
 * @property string $customer_id
 * @property integer $times_used
 */
class Mage1SalesruleCustomerPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{salesrule_customer}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('times_used', 'numerical', 'integerOnly'=>true),
			array('rule_id, customer_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesruleCustomerPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
