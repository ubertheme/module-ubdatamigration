<?php

/**
 * This is the model class for table "sales_flat_quote_shipping_rate".
 *
 * The followings are the available columns in table 'sales_flat_quote_shipping_rate':
 * @property string $rate_id
 * @property string $address_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $carrier
 * @property string $carrier_title
 * @property string $code
 * @property string $method
 * @property string $method_description
 * @property string $price
 * @property string $error_message
 * @property string $method_title
 */
class Mage1SalesQuoteShippingRatePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_quote_shipping_rate}}';
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
			array('address_id', 'length', 'max'=>10),
			array('carrier, carrier_title, code, method', 'length', 'max'=>255),
			array('price', 'length', 'max'=>12),
			array('updated_at, method_description, error_message, method_title', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesQuoteShippingRatePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
