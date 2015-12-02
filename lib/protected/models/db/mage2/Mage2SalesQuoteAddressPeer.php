<?php

/**
 * This is the model class for table "quote_address".
 *
 * The followings are the available columns in table 'quote_address':
 * @property string $address_id
 * @property string $quote_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $customer_id
 * @property integer $save_in_address_book
 * @property string $customer_address_id
 * @property string $address_type
 * @property string $email
 * @property string $prefix
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $suffix
 * @property string $company
 * @property string $street
 * @property string $city
 * @property string $region
 * @property string $region_id
 * @property string $postcode
 * @property string $country_id
 * @property string $telephone
 * @property string $fax
 * @property integer $same_as_billing
 * @property integer $collect_shipping_rates
 * @property string $shipping_method
 * @property string $shipping_description
 * @property string $weight
 * @property string $subtotal
 * @property string $base_subtotal
 * @property string $subtotal_with_discount
 * @property string $base_subtotal_with_discount
 * @property string $tax_amount
 * @property string $base_tax_amount
 * @property string $shipping_amount
 * @property string $base_shipping_amount
 * @property string $shipping_tax_amount
 * @property string $base_shipping_tax_amount
 * @property string $discount_amount
 * @property string $base_discount_amount
 * @property string $grand_total
 * @property string $base_grand_total
 * @property string $customer_notes
 * @property string $applied_taxes
 * @property string $discount_description
 * @property string $shipping_discount_amount
 * @property string $base_shipping_discount_amount
 * @property string $subtotal_incl_tax
 * @property string $base_subtotal_total_incl_tax
 * @property string $discount_tax_compensation_amount
 * @property string $base_discount_tax_compensation_amount
 * @property string $shipping_discount_tax_compensation_amount
 * @property string $base_shipping_discount_tax_compensation_amnt
 * @property string $shipping_incl_tax
 * @property string $base_shipping_incl_tax
 * @property integer $free_shipping
 * @property string $vat_id
 * @property integer $vat_is_valid
 * @property string $vat_request_id
 * @property string $vat_request_date
 * @property integer $vat_request_success
 * @property integer $gift_message_id
 */
class Mage2SalesQuoteAddressPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{quote_address}}';
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
			array('save_in_address_book, same_as_billing, collect_shipping_rates, free_shipping, vat_is_valid, vat_request_success, gift_message_id', 'numerical', 'integerOnly'=>true),
			array('quote_id, customer_id, customer_address_id, address_type, region_id', 'length', 'max'=>10),
			array('email, company, shipping_description, discount_description', 'length', 'max'=>255),
			array('prefix, suffix, street, city, region, shipping_method', 'length', 'max'=>40),
			array('firstname, middlename, lastname, postcode, telephone, fax', 'length', 'max'=>20),
			array('country_id', 'length', 'max'=>30),
			array('weight, subtotal, base_subtotal, subtotal_with_discount, base_subtotal_with_discount, tax_amount, base_tax_amount, shipping_amount, base_shipping_amount, shipping_tax_amount, base_shipping_tax_amount, discount_amount, base_discount_amount, grand_total, base_grand_total, shipping_discount_amount, base_shipping_discount_amount, subtotal_incl_tax, base_subtotal_total_incl_tax, discount_tax_compensation_amount, base_discount_tax_compensation_amount, shipping_discount_tax_compensation_amount, base_shipping_discount_tax_compensation_amnt, shipping_incl_tax, base_shipping_incl_tax', 'length', 'max'=>12),
			array('updated_at, customer_notes, applied_taxes, vat_id, vat_request_id, vat_request_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('address_id, quote_id, created_at, updated_at, customer_id, save_in_address_book, customer_address_id, address_type, email, prefix, firstname, middlename, lastname, suffix, company, street, city, region, region_id, postcode, country_id, telephone, fax, same_as_billing, collect_shipping_rates, shipping_method, shipping_description, weight, subtotal, base_subtotal, subtotal_with_discount, base_subtotal_with_discount, tax_amount, base_tax_amount, shipping_amount, base_shipping_amount, shipping_tax_amount, base_shipping_tax_amount, discount_amount, base_discount_amount, grand_total, base_grand_total, customer_notes, applied_taxes, discount_description, shipping_discount_amount, base_shipping_discount_amount, subtotal_incl_tax, base_subtotal_total_incl_tax, discount_tax_compensation_amount, base_discount_tax_compensation_amount, shipping_discount_tax_compensation_amount, base_shipping_discount_tax_compensation_amnt, shipping_incl_tax, base_shipping_incl_tax, free_shipping, vat_id, vat_is_valid, vat_request_id, vat_request_date, vat_request_success, gift_message_id', 'safe', 'on'=>'search'),
		);
	}

    /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesQuoteAddressPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
