<?php

/**
 * This is the model class for table "tax_calculation_rate".
 *
 * The followings are the available columns in table 'tax_calculation_rate':
 * @property integer $tax_calculation_rate_id
 * @property string $tax_country_id
 * @property integer $tax_region_id
 * @property string $tax_postcode
 * @property string $code
 * @property string $rate
 * @property integer $zip_is_range
 * @property string $zip_from
 * @property string $zip_to
 */
class Mage1TaxCalculationRatePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{tax_calculation_rate}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tax_country_id, tax_region_id, code, rate', 'required'),
			array('tax_region_id, zip_is_range', 'numerical', 'integerOnly'=>true),
			array('tax_country_id', 'length', 'max'=>2),
			array('tax_postcode', 'length', 'max'=>21),
			array('code', 'length', 'max'=>255),
			array('rate', 'length', 'max'=>12),
			array('zip_from, zip_to', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1TaxCalculationRatePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
