<?php

/**
 * This is the model class for table "tax_calculation".
 *
 * The followings are the available columns in table 'tax_calculation':
 * @property integer $tax_calculation_id
 * @property integer $tax_calculation_rate_id
 * @property integer $tax_calculation_rule_id
 * @property integer $customer_tax_class_id
 * @property integer $product_tax_class_id
 */
class Mage2TaxCalculationPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_calculation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax_calculation_rate_id, tax_calculation_rule_id, customer_tax_class_id, product_tax_class_id', 'required'),
			array('tax_calculation_rate_id, tax_calculation_rule_id, customer_tax_class_id, product_tax_class_id', 'numerical', 'integerOnly'=>true),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2TaxCalculationPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
