<?php

/**
 * This is the model class for table "{{migrate_steps}}".
 *
 * The followings are the available columns in table '{{migrate_steps}}':
 * @property string $id
 * @property string $title
 * @property string $code
 * @property integer $status
 * @property string $migrated_data
 * @property string $descriptions
 * @property integer $sorder
 */
class MigrateSteps extends MigrateStepsPeer
{
    const STATUS_DONE = 1;
    const STATUS_NOT_DONE = 0;
    const SQL_COMMAND_DELIMETER = ';';

    //entity type const
    const CUSTOMER_TYPE_CODE = 'customer';
    const CUSTOMER_ADDRESS_TYPE_CODE = 'customer_address';
    const CATEGORY_TYPE_CODE = 'catalog_category';
    const PRODUCT_TYPE_CODE = 'catalog_product';
    const ORDER_TYPE_CODE = 'order';
    const INVOICE_TYPE_CODE = 'invoice';
    const CREDIT_MEMO_TYPE_CODE = 'creditmemo';
    const SHIPMENT_TYPE_CODE = 'shipment';


    public static function getNextSteps(){
        $step = null;
        $criteria = new CDbCriteria();
        $criteria->select = "t.sorder";
        $criteria->order = "t.sorder ASC";
        $criteria->condition = "status = ". self::STATUS_NOT_DONE;
        $nextStep = MigrateSteps::model()->find($criteria);
        if ($nextStep){
            $step = "step{$nextStep->sorder}";
        } else {
            $step = "step1";
        }

        return $step;
    }

    public static function checkStep($currentStepIndex = null){
        $result = array(
            'allowed' => true
        );
        $criteria = new CDbCriteria();
        $criteria->select = "t.sorder";
        $criteria->order = "t.sorder ASC";
        $criteria->condition = "t.sorder < {$currentStepIndex} AND status = ". self::STATUS_NOT_DONE;
        $step = MigrateSteps::model()->find($criteria);
        if ($step){
            $result['allowed'] = false;
            $result['back_step'] = "step{$step->sorder}";
        }

        return $result;
    }

    public static function getMage2StoreId($mage1StoreId){
        $id = NULL;
        if (isset($mage1StoreId)){
            if (is_null($mage1StoreId)){
                $id = 'NULL';
            } else {
                $cacheId = "store_id2_{$mage1StoreId}";
                $val = Yii::app()->cache->get($cacheId);
                if (!$val) {
                    $store1 = Mage1Store::model()->find("store_id = {$mage1StoreId}");
                    if ($store1){
                        $store2 = Mage2Store::model()->find("code = '{$store1->code}'");
                        if ($store2) {
                            $id = $store2->store_id;
                        }
                    } else{
                        $id = $mage1StoreId;
                    }
                    
                    //save to cache for later
                    Yii::app()->cache->set($cacheId, $id, 86400); // one day
                } else {
                    $id = $val;
                }
            }

        }

        return $id;
    }

    public static function getMage2AttributeSetId($mage1AttrSetId, $entity_type_code = null){
        $id = null;
        if (isset($mage1AttrSetId)){
            $cacheId = "attribute_set_id2_{$mage1AttrSetId}_{$entity_type_code}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val) {
                $model1 = Mage1AttributeSet::model()->findByPk($mage1AttrSetId);
                if ($model1){
                    if (!$entity_type_code){
                        $entity_type_code = self::PRODUCT_TYPE_CODE;
                    }
                    $entity_type_id2 = MigrateSteps::getMage2EntityTypeId($entity_type_code);
                    $model2 = Mage2AttributeSet::model()->find("entity_type_id = {$entity_type_id2} AND attribute_set_name = '{$model1->attribute_set_name}'");
                    if ($model2) {
                        $id = $model2->attribute_set_id;
                    }
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            } else {
                $id = $val;
            }
        }

        return $id;
    }

    public static function getMage2AttributeGroupId($mage1AttrGroupId){
        $id = null;
        if (isset($mage1AttrGroupId)){
            $cacheId = "attribute_group_id2_{$mage1AttrGroupId}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val){
                $model1 = Mage1AttributeGroup::model()->findByPk($mage1AttrGroupId);
                if ($model1){
                    $attr_set_id2 = self::getMage2AttributeSetId($model1->attribute_set_id, self::PRODUCT_TYPE_CODE);
                    $model2 = Mage2AttributeGroup::model()->find("attribute_set_id = {$attr_set_id2} AND attribute_group_name = '{$model1->attribute_group_name}'");
                    if ($model2) {
                        $id = $model2->attribute_group_id;
                    }
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            }else {
                $id = $val;
            }
        }

        return $id;
    }

    public static function getMage2AttributeId($mage1AttrId, $entityTypeId = 3){
        $id = null;
        if (isset($mage1AttrId)){
            $cacheId = "attrubute_id2_{$entityTypeId}_{$mage1AttrId}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val) { 
                $attr1 = Mage1Attribute::model()->findByPk($mage1AttrId);
                if ($attr1){
                    //msrp_enabled was changed to msrp in magento2
                    if ($attr1->attribute_code == 'msrp_enabled')
                        $attribute_code2 = 'msrp';
                    else
                        $attribute_code2 = $attr1->attribute_code;
                    $attr2 = Mage2Attribute::model()->find("entity_type_id = {$entityTypeId} AND attribute_code = '{$attribute_code2}'");
                    if ($attr2) {
                        $id = $attr2->attribute_id;
                    }
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            } else {
                $id = $val;
            }
        }

        return $id;
    }

    public static function getMage1AttributeCode($mage1AttrId){
        $code = null;
        if (isset($mage1AttrId)){
            $cacheId = "attribute_code1_{$mage1AttrId}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val) {
                $attr1 = Mage1Attribute::model()->findByPk($mage1AttrId);
                if ($attr1){
                    $code = $attr1->attribute_code;
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $code, 86400); // one day
            } else {
                $code = $val;
            }
        }
        
        return $code;
    }

    public static function getMage1AttributeId($mage1AttrCode, $entityTypeId){
        $id = null;
        if ($mage1AttrCode && $entityTypeId){
            $cacheId = "attribute_id1_{$mage1AttrCode}_{$entityTypeId}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val) {
                $attr1 = Mage1Attribute::model()->find("entity_type_id = {$entityTypeId} AND attribute_code = '{$mage1AttrCode}'");
                if ($attr1){
                    $id = $attr1->attribute_id;
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            } else {
                $id = $val;
            }
        }

        return $id;
    }

    public static function executeFile($filePath) {

        if (!isset($filePath)) return false;

        try {
            $tablePrefix = Yii::app()->mage2->tablePrefix;
            $tempLine = '';
            $lines = file($filePath);
            // Loop through each line
            foreach ($lines as $line)
            {
                // Skip it if it's a comment
                if (substr($line, 0, 2) == '--' || $line == '')
                    continue;
                // Add this line to the current segment
                $tempLine .= $line;
                // If it has a semicolon at the end, it's the end of the query
                if (substr(trim($line), -1, 1) == self::SQL_COMMAND_DELIMETER)
                {
                    //replace prefix
                    $tempLine = str_replace ('#__', $tablePrefix, $tempLine);

                    // Perform the query
                    Yii::app()->mage2->createCommand($tempLine)->execute();

                    // Reset temp variable to empty
                    $tempLine = '';
                }
            }
        } catch (Exception $e) {
            throw $e;
        }

        return true;
    }

    /**
     * Build tree categories function
     * @param int $parent_id
     * @return array
     */
    public static function getMage1CategoryTree($parent_id = 1) {
        $categories = array();
        $models = Mage1CatalogCategoryEntity::model()->findAll("parent_id = {$parent_id}");
        if ($models){
            foreach ($models as $model) {
                $category = array();
                $category['entity_id'] = $model->entity_id;
                $category['name'] = self::getMage1CategoryName($model->entity_id);
                $category['parent_id'] = $model->parent_id;
                $category['children'] = self::getMage1CategoryTree($category['entity_id']);
                $categories[$model->entity_id] = (object)$category;
            }
        }

        return $categories;
    }

    /**
     * get Category Name in Magento1
     * @param $category_id
     * @return null|string
     */
    public static function getMage1CategoryName($category_id){
        $name = null;
        if ($category_id){
            $cacheId = "category_name1_{$category_id}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val) {
                $entity_type_id = MigrateSteps::getMage1EntityTypeId(self::CATEGORY_TYPE_CODE);
                $attribute_id = MigrateSteps::getMage1AttributeId('name', $entity_type_id);
                $model = Mage1CatalogCategoryEntityVarchar::model()->find("entity_id = {$category_id} AND attribute_id = {$attribute_id}");
                if ($model){
                    $name = $model->value;
                }
                //save to cache for later
                Yii::app()->cache->set($cacheId, $name, 86400); // one day
            } else {
                $name = $val;
            }
        }

        return $name;
    }

    public static function getMage1EntityTypeId($entity_type_code){
        $id = null;
        if ($entity_type_code){
            $cacheId = "entity_type_id1_by_code_{$entity_type_code}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val):
                $db = Yii::app()->mage1;
                $tablePrefix = $db->tablePrefix;
                $query = "SELECT entity_type_id FROM {$tablePrefix}eav_entity_type WHERE entity_type_code = '{$entity_type_code}'";
                $id = $db->createCommand($query)->queryScalar();
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            else:
                $id = $val;
            endif;
        }

        return $id;
    }

    public static function getMage2EntityTypeId($entity_type_code){
        $id = null;
        if ($entity_type_code){
            $cacheId = "entity_type_id2_by_code_{$entity_type_code}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val):
                $db = Yii::app()->mage2;
                $tablePrefix = $db->tablePrefix;
                $query = "SELECT entity_type_id FROM {$tablePrefix}eav_entity_type WHERE entity_type_code = '{$entity_type_code}'";
                $id = $db->createCommand($query)->queryScalar();
                //save to cache for later
                Yii::app()->cache->set($cacheId, $id, 86400); // one day
            else:
                $id = $val;
            endif;
        }

        return $id;
    }

    public static function _getMage2EntityTypeId($entity_type_id1){
        $id = null;
        if ($entity_type_id1){
            $cacheId = "entity_type_id2_by_id1_{$entity_type_id1}";
            $val = Yii::app()->cache->get($cacheId);
            if (!$val):
                $db = Yii::app()->mage1;
                $tablePrefix = $db->tablePrefix;
                $query = "SELECT entity_type_code FROM {$tablePrefix}eav_entity_type WHERE entity_type_id = {$entity_type_id1}";
                $entity_type_code = $db->createCommand($query)->queryScalar();
                //save to cache for later
                Yii::app()->cache->set($cacheId, $entity_type_code, 86400); // one day
            else:
                $entity_type_code = $val;
            endif;

            if ($entity_type_code){
                $id = self::getMage2EntityTypeId($entity_type_code);
            }
        }

        return $id;
    }

    /**
     * Get Product Link Attribute Id in Magento2 database
     * @param $linkAttrId1 The Link Attribute Id in Magento1 database
     */
    public static function getMage2ProductLinkAttrId($linkAttrId1){
        $linkAttrId2 = null;
        $model1 = Mage1CatalogProductLinkAttribute::model()->findByPk($linkAttrId1);
        if ($model1){
            $condition = "link_type_id = {$model1->link_type_id} AND product_link_attribute_code = '{$model1->product_link_attribute_code}'";
            $model2 = Mage2CatalogProductLinkAttribute::model()->find($condition);
            if ($model2){
                $linkAttrId2 = $model2->product_link_attribute_id;
            }
        }

        return $linkAttrId2;
    }

    public static function getTotalProductsByType($type_id = 'simple'){
        $total = 0;
        if ($type_id){
            $migrated_store_ids = isset(Yii::app()->session['migrated_store_ids']) ? Yii::app()->session['migrated_store_ids'] : array();
            $str_store_ids = implode(',', $migrated_store_ids);
            $db = Yii::app()->mage1;
            $tablePrefix = $db->tablePrefix;

            $sql = "SELECT COUNT(DISTINCT  e.entity_id) AS total FROM {$tablePrefix}catalog_product_entity e";
            $sql .= " LEFT JOIN {$tablePrefix}catalog_product_entity_int ei ON e.entity_id = ei.entity_id";
            $sql .= " WHERE e.type_id = '{$type_id}' AND ei.store_id IN ({$str_store_ids})";
            $total = $db->createCommand($sql)->queryScalar();
        }

        return $total;
    }

    public static function getTotalCustomersByGroup($groupId = null){
        $total = 0;
        if ($groupId){
            $migrated_website_ids = isset(Yii::app()->session['migrated_website_ids']) ? Yii::app()->session['migrated_website_ids'] : array();
            $str_website_ids = implode(',', $migrated_website_ids);
            $migrated_store_ids = isset(Yii::app()->session['migrated_store_ids']) ? Yii::app()->session['migrated_store_ids'] : array();
            $str_store_ids = implode(',', $migrated_store_ids);
            $db = Yii::app()->mage1;
            $tablePrefix = $db->tablePrefix;

            $sql = "SELECT COUNT(DISTINCT  e.entity_id) AS total FROM {$tablePrefix}customer_entity e";
            $sql .= " WHERE e.group_id = {$groupId} AND e.website_id IN ({$str_website_ids}) AND e.store_id IN ({$str_store_ids})";
            $total = $db->createCommand($sql)->queryScalar();
        }

        return $total;
    }

    public static function getTotalVisibleProductsAttr(){
        $tablePrefix = Yii::app()->mage1->tablePrefix;
        $entity_type_id = MigrateSteps::getMage1EntityTypeId(self::PRODUCT_TYPE_CODE);
        $sql = "SELECT COUNT(*) FROM `{$tablePrefix}eav_attribute` e INNER JOIN `{$tablePrefix}catalog_eav_attribute` ce ON e.attribute_id = ce.attribute_id WHERE e.entity_type_id = {$entity_type_id} AND ce.is_visible = 1";
        $total = Yii::app()->mage1->createCommand($sql)->queryScalar();

        return $total;
    }

    public static function getTotalSalesChildObject($objectId){
        $total = 0;
        $migrated_store_ids = isset(Yii::app()->session['migrated_store_ids']) ? Yii::app()->session['migrated_store_ids'] : array();
        $str_store_ids = implode(',', $migrated_store_ids);
        $migrated_customer_ids = isset(Yii::app()->session['migrated_customer_ids']) ? Yii::app()->session['migrated_customer_ids'] : array();
        $str_customer_ids = implode(',', $migrated_customer_ids);
        $tablePrefix = Yii::app()->mage1->tablePrefix;

        switch ($objectId){
            case 'order':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_order` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL)";
                if ($str_customer_ids){
                    $sql .= " AND (e.customer_id IN ({$str_customer_ids}) OR e.customer_id IS NULL)";
                }
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'quote':
                //$sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_quote` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL) AND (e.customer_id IN ({$str_customer_ids}) OR e.customer_id IS NULL)";
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_quote` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL)";
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'payment':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_order_payment`";
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'invoice':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_invoice` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL)";
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'shipment':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_shipment` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL)";
                if ($str_customer_ids){
                    $sql .= " AND (e.customer_id IN ({$str_customer_ids}) OR e.customer_id IS NULL)";
                }
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'credit':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}sales_flat_creditmemo` e WHERE (e.store_id IN ({$str_store_ids}) OR e.store_id IS NULL)";
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                break;
            case 'rule_coupon':
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}salesrule`";
                $total = Yii::app()->mage1->createCommand($sql)->queryScalar();
                $sql = "SELECT COUNT(*) FROM `{$tablePrefix}salesrule_coupon`";
                $total2 = Yii::app()->mage1->createCommand($sql)->queryScalar();
                $total = $total . " rules, " . $total2 . " coupons";
                break;
        }

        return $total;
    }

    public static function getMG1VersionOptions(){
        $options = array(
            'mage19x' => Yii::t('frontend', 'Magento 1.9.x'),
            'mage18x' => Yii::t('frontend', 'Magento 1.8.x'),
            'mage17x' => Yii::t('frontend', 'Magento 1.7.x'),
            'mage16x' => Yii::t('frontend', 'Magento 1.6.x')
        );
        return $options;
    }

    public static function getMG1Version(){
        $ver = NULL;
        $step = MigrateSteps::model()->findByPk(1);
        if ($step){
            $settings = (object)json_decode($step->migrated_data);
            $ver = $settings->mg1_version;
        }

        return $ver;
    }

    public static function replaceCatalogRuleModels($data){
        $finds = array(
            's:34:"catalogrule/rule_condition_combine"',
            's:34:"catalogrule/rule_condition_product"',
            's:34:"catalogrule/rule_action_collection"'
        );
        $replaces = array(
            's:48:"Magento\CatalogRule\Model\Rule\Condition\Combine"',
            's:48:"Magento\CatalogRule\Model\Rule\Condition\Product"',
            's:48:"Magento\CatalogRule\Model\Rule\Action\Collection"'
        );
        $data = str_replace($finds, $replaces, $data);

        return $data;
    }

    public static function replaceSalesRuleModels($data){
        $finds = array(
            's:38:"salesrule/rule_condition_product_found"',
            's:42:"salesrule/rule_condition_product_subselect"',
            's:40:"salesrule/rule_condition_product_combine"',
            's:32:"salesrule/rule_condition_product"',
            's:32:"salesrule/rule_condition_combine"',
            's:32:"salesrule/rule_condition_address"',
        );
        $replaces = array(
            's:52:"Magento\SalesRule\Model\Rule\Condition\Product\Found"',
            's:56:"Magento\SalesRule\Model\Rule\Condition\Product\Subselect"',
            's:54:"Magento\SalesRule\Model\Rule\Condition\Product\Combine"',
            's:46:"Magento\SalesRule\Model\Rule\Condition\Product"',
            's:46:"Magento\SalesRule\Model\Rule\Condition\Combine"',
            's:46:"Magento\SalesRule\Model\Rule\Condition\Address"'
        );
        $data = str_replace($finds, $replaces, $data);

        return $data;
    }
    
    public static function getStringErrors($errors = array()){
        $strs = array();
        if ($errors) {
            foreach ($errors as $error){
                foreach ($error as $strError){
                    $strs[] = $strError;
                }
            }
        }
        
        return implode('<br/>- ', $strs);
    }
}
