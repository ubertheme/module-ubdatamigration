<?php

/**
 * This is the model class for table "sales_flat_order_item".
 *
 * The followings are the available columns in table 'sales_flat_order_item':
 * @property string $item_id
 * @property string $order_id
 * @property string $parent_item_id
 * @property string $quote_item_id
 * @property integer $store_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $product_id
 * @property string $product_type
 * @property string $product_options
 * @property string $weight
 * @property integer $is_virtual
 * @property string $sku
 * @property string $name
 * @property string $description
 * @property string $applied_rule_ids
 * @property string $additional_data
 * @property integer $free_shipping
 * @property integer $is_qty_decimal
 * @property integer $no_discount
 * @property string $qty_backordered
 * @property string $qty_canceled
 * @property string $qty_invoiced
 * @property string $qty_ordered
 * @property string $qty_refunded
 * @property string $qty_shipped
 * @property string $base_cost
 * @property string $price
 * @property string $base_price
 * @property string $original_price
 * @property string $base_original_price
 * @property string $tax_percent
 * @property string $tax_amount
 * @property string $base_tax_amount
 * @property string $tax_invoiced
 * @property string $base_tax_invoiced
 * @property string $discount_percent
 * @property string $discount_amount
 * @property string $base_discount_amount
 * @property string $discount_invoiced
 * @property string $base_discount_invoiced
 * @property string $amount_refunded
 * @property string $base_amount_refunded
 * @property string $row_total
 * @property string $base_row_total
 * @property string $row_invoiced
 * @property string $base_row_invoiced
 * @property string $row_weight
 * @property string $base_tax_before_discount
 * @property string $tax_before_discount
 * @property string $ext_order_item_id
 * @property integer $locked_do_invoice
 * @property integer $locked_do_ship
 * @property string $price_incl_tax
 * @property string $base_price_incl_tax
 * @property string $row_total_incl_tax
 * @property string $base_row_total_incl_tax
 * @property string $hidden_tax_amount
 * @property string $base_hidden_tax_amount
 * @property string $hidden_tax_invoiced
 * @property string $base_hidden_tax_invoiced
 * @property string $hidden_tax_refunded
 * @property string $base_hidden_tax_refunded
 * @property integer $is_nominal
 * @property string $tax_canceled
 * @property string $hidden_tax_canceled
 * @property string $tax_refunded
 * @property string $base_tax_refunded
 * @property string $discount_refunded
 * @property string $base_discount_refunded
 * @property integer $gift_message_id
 * @property integer $gift_message_available
 * @property string $base_weee_tax_applied_amount
 * @property string $base_weee_tax_applied_row_amnt
 * @property string $weee_tax_applied_amount
 * @property string $weee_tax_applied_row_amount
 * @property string $weee_tax_applied
 * @property string $weee_tax_disposition
 * @property string $weee_tax_row_disposition
 * @property string $base_weee_tax_disposition
 * @property string $base_weee_tax_row_disposition
 * @property integer $event_id
 * @property integer $giftregistry_item_id
 * @property integer $gw_id
 * @property string $gw_base_price
 * @property string $gw_price
 * @property string $gw_base_tax_amount
 * @property string $gw_tax_amount
 * @property string $gw_base_price_invoiced
 * @property string $gw_price_invoiced
 * @property string $gw_base_tax_amount_invoiced
 * @property string $gw_tax_amount_invoiced
 * @property string $gw_base_price_refunded
 * @property string $gw_price_refunded
 * @property string $gw_base_tax_amount_refunded
 * @property string $gw_tax_amount_refunded
 * @property string $qty_returned
 */
class Mage1SalesOrderItemPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_order_item}}';
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
			array('store_id, is_virtual, free_shipping, is_qty_decimal, no_discount, locked_do_invoice, locked_do_ship, is_nominal, gift_message_id, gift_message_available, event_id, giftregistry_item_id, gw_id', 'numerical', 'integerOnly'=>true),
			array('order_id, parent_item_id, quote_item_id, product_id', 'length', 'max'=>10),
			array('product_type, sku, name, ext_order_item_id', 'length', 'max'=>255),
			array('weight, qty_backordered, qty_canceled, qty_invoiced, qty_ordered, qty_refunded, qty_shipped, base_cost, price, base_price, original_price, base_original_price, tax_percent, tax_amount, base_tax_amount, tax_invoiced, base_tax_invoiced, discount_percent, discount_amount, base_discount_amount, discount_invoiced, base_discount_invoiced, amount_refunded, base_amount_refunded, row_total, base_row_total, row_invoiced, base_row_invoiced, row_weight, base_tax_before_discount, tax_before_discount, price_incl_tax, base_price_incl_tax, row_total_incl_tax, base_row_total_incl_tax, hidden_tax_amount, base_hidden_tax_amount, hidden_tax_invoiced, base_hidden_tax_invoiced, hidden_tax_refunded, base_hidden_tax_refunded, tax_canceled, hidden_tax_canceled, tax_refunded, base_tax_refunded, discount_refunded, base_discount_refunded, base_weee_tax_applied_amount, base_weee_tax_applied_row_amnt, weee_tax_applied_amount, weee_tax_applied_row_amount, weee_tax_disposition, weee_tax_row_disposition, base_weee_tax_disposition, base_weee_tax_row_disposition, gw_base_price, gw_price, gw_base_tax_amount, gw_tax_amount, gw_base_price_invoiced, gw_price_invoiced, gw_base_tax_amount_invoiced, gw_tax_amount_invoiced, gw_base_price_refunded, gw_price_refunded, gw_base_tax_amount_refunded, gw_tax_amount_refunded, qty_returned', 'length', 'max'=>12),
			array('updated_at, product_options, description, applied_rule_ids, additional_data, weee_tax_applied', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesOrderItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
