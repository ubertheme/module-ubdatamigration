<?php

/**
 * This is the model class for table "sales_flat_shipment_grid".
 *
 * The followings are the available columns in table 'sales_flat_shipment_grid':
 * @property string $entity_id
 * @property integer $store_id
 * @property string $total_qty
 * @property string $order_id
 * @property integer $shipment_status
 * @property string $increment_id
 * @property string $order_increment_id
 * @property string $created_at
 * @property string $order_created_at
 * @property string $shipping_name
 */
class Mage1SalesShipmentGridPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_shipment_grid}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('entity_id, order_id', 'required'),
			array('store_id, shipment_status', 'numerical', 'integerOnly'=>true),
			array('entity_id, order_id', 'length', 'max'=>10),
			array('total_qty', 'length', 'max'=>12),
			array('increment_id, order_increment_id', 'length', 'max'=>50),
			array('shipping_name', 'length', 'max'=>255),
			array('created_at, order_created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesFlatShipmentGridPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
