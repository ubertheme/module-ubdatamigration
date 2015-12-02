<?php

/**
 * This is the model class for table "sales_flat_order_address".
 *
 * The followings are the available columns in table 'sales_flat_order_address':
 * @property string $entity_id
 * @property string $parent_id
 * @property integer $customer_address_id
 * @property integer $quote_address_id
 * @property integer $region_id
 * @property integer $customer_id
 * @property string $fax
 * @property string $region
 * @property string $postcode
 * @property string $lastname
 * @property string $street
 * @property string $city
 * @property string $email
 * @property string $telephone
 * @property string $country_id
 * @property string $firstname
 * @property string $address_type
 * @property string $prefix
 * @property string $middlename
 * @property string $suffix
 * @property string $company
 * @property string $vat_id
 * @property integer $vat_is_valid
 * @property string $vat_request_id
 * @property string $vat_request_date
 * @property integer $vat_request_success
 * @property integer $giftregistry_item_id
 */
class Mage1SalesOrderAddressPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_order_address}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_address_id, quote_address_id, region_id, customer_id, vat_is_valid, vat_request_success, giftregistry_item_id', 'numerical', 'integerOnly'=>true),
			array('parent_id', 'length', 'max'=>10),
			array('fax, region, postcode, lastname, street, city, email, telephone, firstname, address_type, prefix, middlename, suffix, company', 'length', 'max'=>255),
			array('country_id', 'length', 'max'=>2),
			array('vat_id, vat_request_id, vat_request_date', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesOrderAddressPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
