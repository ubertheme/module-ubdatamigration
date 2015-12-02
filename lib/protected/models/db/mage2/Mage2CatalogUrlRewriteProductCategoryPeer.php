<?php

/**
 * This is the model class for table "catalog_url_rewrite_product_category".
 *
 * The followings are the available columns in table 'catalog_url_rewrite_product_category':
 * @property string $url_rewrite_id
 * @property string $category_id
 * @property string $product_id
 */
class Mage2CatalogUrlRewriteProductCategoryPeer extends Mage2ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_url_rewrite_product_category}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url_rewrite_id, category_id, product_id', 'required'),
			array('url_rewrite_id, category_id, product_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage2CatalogUrlRewriteProductCategoryPeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
