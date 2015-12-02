<?php

/**
 * This is the model class for table "sales_invoice_item".
 *
 * The followings are the available columns in table 'sales_invoice_item':
 * @property string $entity_id
 * @property string $parent_id
 * @property string $base_price
 * @property string $tax_amount
 * @property string $base_row_total
 * @property string $discount_amount
 * @property string $row_total
 * @property string $base_discount_amount
 * @property string $price_incl_tax
 * @property string $base_tax_amount
 * @property string $base_price_incl_tax
 * @property string $qty
 * @property string $base_cost
 * @property string $price
 * @property string $base_row_total_incl_tax
 * @property string $row_total_incl_tax
 * @property integer $product_id
 * @property integer $order_item_id
 * @property string $additional_data
 * @property string $description
 * @property string $sku
 * @property string $name
 * @property string $discount_tax_compensation_amount
 * @property string $base_discount_tax_compensation_amount
 * @property string $tax_ratio
 * @property string $weee_tax_applied
 * @property string $weee_tax_applied_amount
 * @property string $weee_tax_applied_row_amount
 * @property string $weee_tax_disposition
 * @property string $weee_tax_row_disposition
 * @property string $base_weee_tax_applied_amount
 * @property string $base_weee_tax_applied_row_amnt
 * @property string $base_weee_tax_disposition
 * @property string $base_weee_tax_row_disposition
 */
class Mage2SalesInvoiceItemPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_invoice_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id', 'required'),
			array('product_id, order_item_id', 'numerical', 'integerOnly'=>true),
			array('parent_id', 'length', 'max'=>10),
			array('base_price, tax_amount, base_row_total, discount_amount, row_total, base_discount_amount, price_incl_tax, base_tax_amount, base_price_incl_tax, qty, base_cost, price, base_row_total_incl_tax, row_total_incl_tax, discount_tax_compensation_amount, base_discount_tax_compensation_amount, weee_tax_applied_amount, weee_tax_applied_row_amount, weee_tax_disposition, weee_tax_row_disposition, base_weee_tax_applied_amount, base_weee_tax_applied_row_amnt, base_weee_tax_disposition, base_weee_tax_row_disposition', 'length', 'max'=>12),
			array('sku, name', 'length', 'max'=>255),
			array('additional_data, description, tax_ratio, weee_tax_applied', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesInvoiceItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
