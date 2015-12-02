<?php

/**
 * This is the model class for table "tax_calculation_rule".
 *
 * The followings are the available columns in table 'tax_calculation_rule':
 * @property integer $tax_calculation_rule_id
 * @property string $code
 * @property integer $priority
 * @property integer $position
 * @property integer $calculate_subtotal
 */
class Mage2TaxCalculationRulePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_calculation_rule}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, priority, position, calculate_subtotal', 'required'),
			array('priority, position, calculate_subtotal', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2TaxCalculationRulePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
