<?php

/**
 * This is the model class for table "core_url_rewrite".
 *
 * The followings are the available columns in table 'core_url_rewrite':
 * @property string $url_rewrite_id
 * @property integer $store_id
 * @property string $id_path
 * @property string $request_path
 * @property string $target_path
 * @property integer $is_system
 * @property string $options
 * @property string $description
 * @property string $category_id
 * @property string $product_id
 */
class Mage1UrlRewritePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{core_url_rewrite}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id, is_system', 'numerical', 'integerOnly'=>true),
			array('id_path, request_path, target_path, options, description', 'length', 'max'=>255),
			array('category_id, product_id', 'length', 'max'=>10),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1UrlRewritePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
