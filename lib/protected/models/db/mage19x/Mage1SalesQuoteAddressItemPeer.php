<?php

/**
 * This is the model class for table "sales_flat_quote_address_item".
 *
 * The followings are the available columns in table 'sales_flat_quote_address_item':
 * @property string $address_item_id
 * @property string $parent_item_id
 * @property string $quote_address_id
 * @property string $quote_item_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $applied_rule_ids
 * @property string $additional_data
 * @property string $weight
 * @property string $qty
 * @property string $discount_amount
 * @property string $tax_amount
 * @property string $row_total
 * @property string $base_row_total
 * @property string $row_total_with_discount
 * @property string $base_discount_amount
 * @property string $base_tax_amount
 * @property string $row_weight
 * @property string $product_id
 * @property string $super_product_id
 * @property string $parent_product_id
 * @property string $sku
 * @property string $image
 * @property string $name
 * @property string $description
 * @property string $free_shipping
 * @property string $is_qty_decimal
 * @property string $price
 * @property string $discount_percent
 * @property string $no_discount
 * @property string $tax_percent
 * @property string $base_price
 * @property string $base_cost
 * @property string $price_incl_tax
 * @property string $base_price_incl_tax
 * @property string $row_total_incl_tax
 * @property string $base_row_total_incl_tax
 * @property string $hidden_tax_amount
 * @property string $base_hidden_tax_amount
 * @property integer $gift_message_id
 * @property integer $gw_id
 * @property string $gw_base_price
 * @property string $gw_price
 * @property string $gw_base_tax_amount
 * @property string $gw_tax_amount
 */
class Mage1SalesQuoteAddressItemPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_quote_address_item}}';
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
			array('gift_message_id, gw_id', 'numerical', 'integerOnly'=>true),
			array('parent_item_id, quote_address_id, quote_item_id, product_id, super_product_id, parent_product_id, free_shipping, is_qty_decimal, no_discount', 'length', 'max'=>10),
			array('weight, qty, discount_amount, tax_amount, row_total, base_row_total, row_total_with_discount, base_discount_amount, base_tax_amount, row_weight, price, discount_percent, tax_percent, base_price, base_cost, price_incl_tax, base_price_incl_tax, row_total_incl_tax, base_row_total_incl_tax, hidden_tax_amount, base_hidden_tax_amount, gw_base_price, gw_price, gw_base_tax_amount, gw_tax_amount', 'length', 'max'=>12),
			array('sku, image, name', 'length', 'max'=>255),
			array('updated_at, applied_rule_ids, additional_data, description', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesQuoteAddressItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
