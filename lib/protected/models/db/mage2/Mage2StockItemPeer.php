<?php

/**
 * This is the model class for table "cataloginventory_stock_item".
 *
 * The followings are the available columns in table 'cataloginventory_stock_item':
 * @property string $item_id
 * @property string $product_id
 * @property integer $stock_id
 * @property string $qty
 * @property string $min_qty
 * @property integer $use_config_min_qty
 * @property integer $is_qty_decimal
 * @property integer $backorders
 * @property integer $use_config_backorders
 * @property string $min_sale_qty
 * @property integer $use_config_min_sale_qty
 * @property string $max_sale_qty
 * @property integer $use_config_max_sale_qty
 * @property integer $is_in_stock
 * @property string $low_stock_date
 * @property string $notify_stock_qty
 * @property integer $use_config_notify_stock_qty
 * @property integer $manage_stock
 * @property integer $use_config_manage_stock
 * @property integer $stock_status_changed_auto
 * @property integer $use_config_qty_increments
 * @property string $qty_increments
 * @property integer $use_config_enable_qty_inc
 * @property integer $enable_qty_increments
 * @property integer $is_decimal_divided
 * @property integer $website_id
 */
class Mage2StockItemPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{cataloginventory_stock_item}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('stock_id, use_config_min_qty, is_qty_decimal, backorders, use_config_backorders, use_config_min_sale_qty, use_config_max_sale_qty, is_in_stock, use_config_notify_stock_qty, manage_stock, use_config_manage_stock, stock_status_changed_auto, use_config_qty_increments, use_config_enable_qty_inc, enable_qty_increments, is_decimal_divided, website_id', 'numerical', 'integerOnly'=>true),
			array('product_id', 'length', 'max'=>10),
			array('qty, min_qty, min_sale_qty, max_sale_qty, notify_stock_qty, qty_increments', 'length', 'max'=>12),
			array('low_stock_date', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2StockItemPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
