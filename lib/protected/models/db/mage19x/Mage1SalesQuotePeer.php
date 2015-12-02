<?php

/**
 * This is the model class for table "sales_flat_quote".
 *
 * The followings are the available columns in table 'sales_flat_quote':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $converted_at
 * @property integer $is_active
 * @property integer $is_virtual
 * @property integer $is_multi_shipping
 * @property string $items_count
 * @property string $items_qty
 * @property string $orig_order_id
 * @property string $store_to_base_rate
 * @property string $store_to_quote_rate
 * @property string $base_currency_code
 * @property string $store_currency_code
 * @property string $quote_currency_code
 * @property string $grand_total
 * @property string $base_grand_total
 * @property string $checkout_method
 * @property string $customer_id
 * @property string $customer_tax_class_id
 * @property string $customer_group_id
 * @property string $customer_email
 * @property string $customer_prefix
 * @property string $customer_firstname
 * @property string $customer_middlename
 * @property string $customer_lastname
 * @property string $customer_suffix
 * @property string $customer_dob
 * @property string $customer_note
 * @property integer $customer_note_notify
 * @property integer $customer_is_guest
 * @property string $remote_ip
 * @property string $applied_rule_ids
 * @property string $reserved_order_id
 * @property string $password_hash
 * @property string $coupon_code
 * @property string $global_currency_code
 * @property string $base_to_global_rate
 * @property string $base_to_quote_rate
 * @property string $customer_taxvat
 * @property string $customer_gender
 * @property string $subtotal
 * @property string $base_subtotal
 * @property string $subtotal_with_discount
 * @property string $base_subtotal_with_discount
 * @property string $is_changed
 * @property integer $trigger_recollect
 * @property string $ext_shipping_info
 * @property integer $gift_message_id
 * @property integer $is_persistent
 * @property string $customer_balance_amount_used
 * @property string $base_customer_bal_amount_used
 * @property integer $use_customer_balance
 * @property string $gift_cards
 * @property string $gift_cards_amount
 * @property string $base_gift_cards_amount
 * @property string $gift_cards_amount_used
 * @property string $base_gift_cards_amount_used
 * @property integer $gw_id
 * @property integer $gw_allow_gift_receipt
 * @property integer $gw_add_card
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
 * @property integer $use_reward_points
 * @property integer $reward_points_balance
 * @property string $base_reward_currency_amount
 * @property string $reward_currency_amount
 */
class Mage1SalesQuotePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_quote}}';
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
			array('store_id, is_active, is_virtual, is_multi_shipping, customer_note_notify, customer_is_guest, trigger_recollect, gift_message_id, is_persistent, use_customer_balance, gw_id, gw_allow_gift_receipt, gw_add_card, use_reward_points, reward_points_balance', 'numerical', 'integerOnly'=>true),
			array('items_count, orig_order_id, customer_id, customer_tax_class_id, customer_group_id, is_changed', 'length', 'max'=>10),
			array('items_qty, store_to_base_rate, store_to_quote_rate, grand_total, base_grand_total, base_to_global_rate, base_to_quote_rate, subtotal, base_subtotal, subtotal_with_discount, base_subtotal_with_discount, customer_balance_amount_used, base_customer_bal_amount_used, gift_cards_amount, base_gift_cards_amount, gift_cards_amount_used, base_gift_cards_amount_used, gw_base_price, gw_price, gw_items_base_price, gw_items_price, gw_card_base_price, gw_card_price, gw_base_tax_amount, gw_tax_amount, gw_items_base_tax_amount, gw_items_tax_amount, gw_card_base_tax_amount, gw_card_tax_amount, base_reward_currency_amount, reward_currency_amount', 'length', 'max'=>12),
			array('base_currency_code, store_currency_code, quote_currency_code, checkout_method, customer_email, customer_firstname, customer_lastname, customer_note, applied_rule_ids, password_hash, coupon_code, global_currency_code, customer_taxvat, customer_gender', 'length', 'max'=>255),
			array('customer_prefix, customer_middlename, customer_suffix', 'length', 'max'=>40),
			array('remote_ip', 'length', 'max'=>32),
			array('reserved_order_id', 'length', 'max'=>64),
			array('updated_at, converted_at, customer_dob, ext_shipping_info, gift_cards', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesQuotePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
