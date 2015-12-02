<?php

/**
 * This is the model class for table "sales_payment_transaction".
 *
 * The followings are the available columns in table 'sales_payment_transaction':
 * @property string $transaction_id
 * @property string $parent_id
 * @property string $order_id
 * @property string $payment_id
 * @property string $txn_id
 * @property string $parent_txn_id
 * @property string $txn_type
 * @property integer $is_closed
 * @property string $additional_information
 * @property string $created_at
 */
class Mage1SalesPaymentTransactionPeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{sales_payment_transaction}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('is_closed', 'numerical', 'integerOnly'=>true),
			array('parent_id, order_id, payment_id', 'length', 'max'=>10),
			array('txn_id, parent_txn_id', 'length', 'max'=>100),
			array('txn_type', 'length', 'max'=>15),
			array('additional_information, created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1SalesPaymentTransactionPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
