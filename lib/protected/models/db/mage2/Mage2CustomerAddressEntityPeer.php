<?php

/**
 * This is the model class for table "customer_address_entity".
 *
 * The followings are the available columns in table 'customer_address_entity':
 * @property string $entity_id
 * @property string $increment_id
 * @property string $parent_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $is_active
 * @property string $city
 * @property string $company
 * @property string $country_id
 * @property string $fax
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $postcode
 * @property string $prefix
 * @property string $region
 * @property string $region_id
 * @property string $street
 * @property string $suffix
 * @property string $telephone
 * @property string $vat_id
 * @property string $vat_is_valid
 * @property string $vat_request_date
 * @property string $vat_request_id
 * @property string $vat_request_success
 */
class Mage2CustomerAddressEntityPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{customer_address_entity}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, city, country_id, firstname, lastname, street, telephone', 'required'),
			array('is_active', 'numerical', 'integerOnly'=>true),
			array('increment_id', 'length', 'max'=>50),
			array('parent_id, region_id, vat_is_valid, vat_request_success', 'length', 'max'=>10),
			array('city, company, country_id, fax, firstname, lastname, middlename, postcode, region, telephone, vat_id, vat_request_date, vat_request_id', 'length', 'max'=>255),
			array('prefix, suffix', 'length', 'max'=>40),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CustomerAddressEntityPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
