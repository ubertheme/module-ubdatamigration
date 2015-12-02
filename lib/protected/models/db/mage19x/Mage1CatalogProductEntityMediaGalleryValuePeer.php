<?php

/**
 * This is the model class for table "catalog_product_entity_media_gallery_value".
 *
 * The followings are the available columns in table 'catalog_product_entity_media_gallery_value':
 * @property string $value_id
 * @property integer $store_id
 * @property string $label
 * @property string $position
 * @property integer $disabled
 */
class Mage1CatalogProductEntityMediaGalleryValuePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_entity_media_gallery_value}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id, disabled', 'numerical', 'integerOnly'=>true),
			array('value_id, position', 'length', 'max'=>10),
			array('label', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogProductEntityMediaGalleryValuePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
