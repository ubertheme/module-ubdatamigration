<?php

/**
 * This is the model class for table "catalog_product_relation".
 *
 * The followings are the available columns in table 'catalog_product_relation':
 * @property string $parent_id
 * @property string $child_id
 */
class Mage2CatalogProductRelationPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_product_relation}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parent_id, child_id', 'required'),
			array('parent_id, child_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogProductRelationPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
