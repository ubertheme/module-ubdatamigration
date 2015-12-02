<?php

/**
 * This is the model class for table "review_detail".
 *
 * The followings are the available columns in table 'review_detail':
 * @property string $detail_id
 * @property string $review_id
 * @property integer $store_id
 * @property string $title
 * @property string $detail
 * @property string $nickname
 * @property string $customer_id
 */
class Mage2ReviewDetailPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review_detail}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, detail, nickname', 'required'),
			array('store_id', 'numerical', 'integerOnly'=>true),
			array('review_id', 'length', 'max'=>20),
			array('title', 'length', 'max'=>255),
			array('nickname', 'length', 'max'=>128),
			array('customer_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2ReviewDetailPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
