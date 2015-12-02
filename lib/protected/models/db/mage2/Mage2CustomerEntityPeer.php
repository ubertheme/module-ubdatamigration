<?php

/**
 * This is the model class for table "customer_entity".
 *
 * The followings are the available columns in table 'customer_entity':
 * @property string $entity_id
 * @property integer $website_id
 * @property string $email
 * @property integer $group_id
 * @property string $increment_id
 * @property integer $store_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_active
 * @property integer $disable_auto_group_change
 * @property string $created_in
 * @property string $prefix
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $suffix
 * @property string $dob
 * @property string $password_hash
 * @property string $rp_token
 * @property string $rp_token_created_at
 * @property string $default_billing
 * @property string $default_shipping
 * @property string $taxvat
 * @property string $confirmation
 * @property integer $gender
 */
class Mage2CustomerEntityPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at', 'required'),
			array('website_id, group_id, store_id, is_active, disable_auto_group_change, gender', 'numerical', 'integerOnly'=>true),
			array('email, created_in, firstname, middlename, lastname', 'length', 'max'=>255),
			array('increment_id, taxvat', 'length', 'max'=>50),
			array('prefix, suffix', 'length', 'max'=>40),
			array('password_hash, rp_token', 'length', 'max'=>128),
			array('default_billing, default_shipping', 'length', 'max'=>10),
			array('confirmation', 'length', 'max'=>64),
			array('dob, rp_token_created_at', 'safe'),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CustomerEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
