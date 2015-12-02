<?php

/**
 * This is the model class for table "catalog_product_entity_media_gallery".
 *
 * The followings are the available columns in table 'catalog_product_entity_media_gallery':
 * @property string $value_id
 * @property integer $attribute_id
 * @property string $value
 * @property string $media_type
 * @property string $disabled
 */
class Mage2CatalogProductEntityMediaGalleryPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_entity_media_gallery}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id', 'numerical', 'integerOnly'=>true),
			array('value', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductEntityMediaGalleryPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
