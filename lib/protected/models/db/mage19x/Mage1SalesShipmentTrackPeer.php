<?php

/**
 * This is the model class for table "sales_flat_shipment_track".
 *
 * The followings are the available columns in table 'sales_flat_shipment_track':
 * @property string $entity_id
 * @property string $parent_id
 * @property string $weight
 * @property string $qty
 * @property string $order_id
 * @property string $track_number
 * @property string $description
 * @property string $title
 * @property string $carrier_code
 * @property string $created_at
 * @property string $updated_at
 */
class Mage1SalesShipmentTrackPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_flat_shipment_track}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, order_id', 'required'),
			array('parent_id, order_id', 'length', 'max'=>10),
			array('weight, qty', 'length', 'max'=>12),
			array('title', 'length', 'max'=>255),
			array('carrier_code', 'length', 'max'=>32),
			array('track_number, description, created_at, updated_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesFlatShipmentTrackPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
