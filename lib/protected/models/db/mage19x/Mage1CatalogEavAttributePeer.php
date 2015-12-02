<?php

/**
 * This is the model class for table "catalog_eav_attribute".
 *
 * The followings are the available columns in table 'catalog_eav_attribute':
 * @property integer $attribute_id
 * @property string $frontend_input_renderer
 * @property integer $is_global
 * @property integer $is_visible
 * @property integer $is_searchable
 * @property integer $is_filterable
 * @property integer $is_comparable
 * @property integer $is_visible_on_front
 * @property integer $is_html_allowed_on_front
 * @property integer $is_used_for_price_rules
 * @property integer $is_filterable_in_search
 * @property integer $used_in_product_listing
 * @property integer $used_for_sort_by
 * @property integer $is_configurable
 * @property string $apply_to
 * @property integer $is_visible_in_advanced_search
 * @property integer $position
 * @property integer $is_wysiwyg_enabled
 * @property integer $is_used_for_promo_rules
 * @property integer $search_weight
 */
class Mage1CatalogEavAttributePeer extends Mage1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_eav_attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('attribute_id', 'required'),
			array('attribute_id, is_global, is_visible, is_searchable, is_filterable, is_comparable, is_visible_on_front, is_html_allowed_on_front, is_used_for_price_rules, is_filterable_in_search, used_in_product_listing, used_for_sort_by, is_configurable, is_visible_in_advanced_search, position, is_wysiwyg_enabled, is_used_for_promo_rules, search_weight', 'numerical', 'integerOnly'=>true),
			array('frontend_input_renderer, apply_to', 'length', 'max'=>255),
		);
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mage1CatalogEavAttributePeer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
