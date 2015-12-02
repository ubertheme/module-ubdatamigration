<?php

/**
 * This is the model class for table "sales_shipment_comment".
 *
 * The followings are the available columns in table 'sales_shipment_comment':
 * @property string $entity_id
 * @property string $parent_id
 * @property integer $is_customer_notified
 * @property integer $is_visible_on_front
 * @property string $comment
 * @property string $created_at
 */
class Mage2SalesShipmentCommentPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_shipment_comment}}';
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
			array('is_customer_notified, is_visible_on_front', 'numerical', 'integerOnly'=>true),
			array('parent_id', 'length', 'max'=>10),
			array('comment, created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2SalesShipmentCommentPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
