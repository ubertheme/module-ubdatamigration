<?php

/**
 * This is the model class for table "sales_flat_invoice".
 *
 * The followings are the available columns in table 'sales_flat_invoice':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $base_grand_total
 * @property string $shipping_tax_amount
 * @property string $tax_amount
 * @property string $base_tax_amount
 * @property string $store_to_order_rate
 * @property string $base_shipping_tax_amount
 * @property string $base_discount_amount
 * @property string $base_to_order_rate
 * @property string $grand_total
 * @property string $shipping_amount
 * @property string $subtotal_incl_tax
 * @property string $base_subtotal_incl_tax
 * @property string $store_to_base_rate
 * @property string $base_shipping_amount
 * @property string $total_qty
 * @property string $base_to_global_rate
 * @property string $subtotal
 * @property string $base_subtotal
 * @property string $discount_amount
 * @property integer $billing_address_id
 * @property integer $is_used_for_refund
 * @property string $order_id
 * @property integer $email_sent
 * @property integer $can_void_flag
 * @property integer $state
 * @property integer $shipping_address_id
 * @property string $store_currency_code
 * @property string $transaction_id
 * @property string $order_currency_code
 * @property string $base_currency_code
 * @property string $global_currency_code
 * @property string $increment_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $hidden_tax_amount
 * @property string $base_hidden_tax_amount
 * @property string $shipping_hidden_tax_amount
 * @property string $base_shipping_hidden_tax_amnt
 * @property string $shipping_incl_tax
 * @property string $base_shipping_incl_tax
 * @property string $base_total_refunded
 * @property string $base_customer_balance_amount
 * @property string $customer_balance_amount
 * @property string $base_gift_cards_amount
 * @property string $gift_cards_amount
 * @property string $gw_base_price
 * @property string $gw_price
 * @property string $gw_items_base_price
 * @property string $gw_items_price
 * @property string $gw_card_base_price
 * @property string $gw_card_price
 * @property string $gw_base_tax_amount
 * @property string $gw_tax_amount
 * @property string $gw_items_base_tax_amount
 * @property string $gw_items_tax_amount
 * @property string $gw_card_base_tax_amount
 * @property string $gw_card_tax_amount
 * @property string $base_reward_currency_amount
 * @property string $reward_currency_amount
 * @property integer $reward_points_balance
 * @property string $discount_description
 * @property string $cybersource_token
 */
class Mage1SalesInvoicePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_invoice}}';
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
			array('store_id, billing_address_id, is_used_for_refund, email_sent, can_void_flag, state, shipping_address_id, reward_points_balance', 'numerical', 'integerOnly'=>true),
			array('base_grand_total, shipping_tax_amount, tax_amount, base_tax_amount, store_to_order_rate, base_shipping_tax_amount, base_discount_amount, base_to_order_rate, grand_total, shipping_amount, subtotal_incl_tax, base_subtotal_incl_tax, store_to_base_rate, base_shipping_amount, total_qty, base_to_global_rate, subtotal, base_subtotal, discount_amount, hidden_tax_amount, base_hidden_tax_amount, shipping_hidden_tax_amount, base_shipping_hidden_tax_amnt, shipping_incl_tax, base_shipping_incl_tax, base_total_refunded, base_customer_balance_amount, customer_balance_amount, base_gift_cards_amount, gift_cards_amount, gw_base_price, gw_price, gw_items_base_price, gw_items_price, gw_card_base_price, gw_card_price, gw_base_tax_amount, gw_tax_amount, gw_items_base_tax_amount, gw_items_tax_amount, gw_card_base_tax_amount, gw_card_tax_amount, base_reward_currency_amount, reward_currency_amount', 'length', 'max'=>12),
			array('order_id', 'length', 'max'=>10),
			array('store_currency_code, order_currency_code, base_currency_code, global_currency_code', 'length', 'max'=>3),
			array('transaction_id, discount_description, cybersource_token', 'length', 'max'=>255),
			array('increment_id', 'length', 'max'=>50),
			array('created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesInvoicePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
