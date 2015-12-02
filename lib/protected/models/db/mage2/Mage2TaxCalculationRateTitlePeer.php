<?php

/**
 * This is the model class for table "tax_calculation_rate_title".
 *
 * The followings are the available columns in table 'tax_calculation_rate_title':
 * @property integer $tax_calculation_rate_title_id
 * @property integer $tax_calculation_rate_id
 * @property integer $store_id
 * @property string $value
 */
class Mage2TaxCalculationRateTitlePeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_calculation_rate_title}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax_calculation_rate_id, store_id, value', 'required'),
			array('tax_calculation_rate_id, store_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2TaxCalculationRateTitlePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
