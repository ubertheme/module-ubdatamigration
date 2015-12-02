<?php

/**
 * This is the model class for table "sales_creditmemo".
 *
 * The followings are the available columns in table 'sales_creditmemo':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $adjustment_positive
 * @property string $base_shipping_tax_amount
 * @property string $store_to_order_rate
 * @property string $base_discount_amount
 * @property string $base_to_order_rate
 * @property string $grand_total
 * @property string $base_adjustment_negative
 * @property string $base_subtotal_incl_tax
 * @property string $shipping_amount
 * @property string $subtotal_incl_tax
 * @property string $adjustment_negative
 * @property string $base_shipping_amount
 * @property string $store_to_base_rate
 * @property string $base_to_global_rate
 * @property string $base_adjustment
 * @property string $base_subtotal
 * @property string $discount_amount
 * @property string $subtotal
 * @property string $adjustment
 * @property string $base_grand_total
 * @property string $base_adjustment_positive
 * @property string $base_tax_amount
 * @property string $shipping_tax_amount
 * @property string $tax_amount
 * @property string $order_id
 * @property integer $email_sent
 * @property integer $send_email
 * @property integer $creditmemo_status
 * @property integer $state
 * @property integer $shipping_address_id
 * @property integer $billing_address_id
 * @property integer $invoice_id
 * @property string $store_currency_code
 * @property string $order_currency_code
 * @property string $base_currency_code
 * @property string $global_currency_code
 * @property string $transaction_id
 * @property string $increment_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $customer_note
 * @property integer $customer_note_notify
 * @property string $discount_tax_compensation_amount
 * @property string $base_discount_tax_compensation_amount
 * @property string $shipping_discount_tax_compensation_amount
 * @property string $base_shipping_discount_tax_compensation_amnt
 * @property string $shipping_incl_tax
 * @property string $base_shipping_incl_tax
 * @property string $discount_description
 */
class Mage2SalesCreditmemoPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_creditmemo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order_id', 'required'),
			array('store_id, email_sent, send_email, creditmemo_status, state, shipping_address_id, billing_address_id, invoice_id, customer_note_notify', 'numerical', 'integerOnly'=>true),
			array('adjustment_positive, base_shipping_tax_amount, store_to_order_rate, base_discount_amount, base_to_order_rate, grand_total, base_adjustment_negative, base_subtotal_incl_tax, shipping_amount, subtotal_incl_tax, adjustment_negative, base_shipping_amount, store_to_base_rate, base_to_global_rate, base_adjustment, base_subtotal, discount_amount, subtotal, adjustment, base_grand_total, base_adjustment_positive, base_tax_amount, shipping_tax_amount, tax_amount, discount_tax_compensation_amount, base_discount_tax_compensation_amount, shipping_discount_tax_compensation_amount, base_shipping_discount_tax_compensation_amnt, shipping_incl_tax, base_shipping_incl_tax', 'length', 'max'=>12),
			array('order_id', 'length', 'max'=>10),
			array('store_currency_code, order_currency_code, base_currency_code, global_currency_code', 'length', 'max'=>3),
			array('transaction_id, discount_description', 'length', 'max'=>255),
			array('increment_id', 'length', 'max'=>50),
			array('created_at, updated_at, customer_note', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesCreditmemoPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
