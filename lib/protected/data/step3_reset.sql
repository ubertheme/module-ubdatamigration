
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `#__eav_attribute`;
CREATE TABLE `#__eav_attribute` (
  `attribute_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Attribute Id',
  `entity_type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Entity Type Id',
  `attribute_code` varchar(255) DEFAULT NULL COMMENT 'Attribute Code',
  `attribute_model` varchar(255) DEFAULT NULL COMMENT 'Attribute Model',
  `backend_model` varchar(255) DEFAULT NULL COMMENT 'Backend Model',
  `backend_type` varchar(8) NOT NULL DEFAULT 'static' COMMENT 'Backend Type',
  `backend_table` varchar(255) DEFAULT NULL COMMENT 'Backend Table',
  `frontend_model` varchar(255) DEFAULT NULL COMMENT 'Frontend Model',
  `frontend_input` varchar(50) DEFAULT NULL COMMENT 'Frontend Input',
  `frontend_label` varchar(255) DEFAULT NULL COMMENT 'Frontend Label',
  `frontend_class` varchar(255) DEFAULT NULL COMMENT 'Frontend Class',
  `source_model` varchar(255) DEFAULT NULL COMMENT 'Source Model',
  `is_required` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Defines Is Required',
  `is_user_defined` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Defines Is User Defined',
  `default_value` text COMMENT 'Default Value',
  `is_unique` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Defines Is Unique',
  `note` varchar(255) DEFAULT NULL COMMENT 'Note',
  PRIMARY KEY (`attribute_id`),
  UNIQUE KEY `EAV_ATTRIBUTE_ENTITY_TYPE_ID_ATTRIBUTE_CODE` (`entity_type_id`,`attribute_code`),
  CONSTRAINT `EAV_ATTRIBUTE_ENTITY_TYPE_ID_EAV_ENTITY_TYPE_ENTITY_TYPE_ID` FOREIGN KEY (`entity_type_id`) REFERENCES `#__eav_entity_type` (`entity_type_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 COMMENT='Eav Attribute';

INSERT INTO `#__eav_attribute` VALUES ('1', '1', 'website_id', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Backend\\Website', 'static', null, null, 'select', 'Associate to Website', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\Website', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('2', '1', 'store_id', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Backend\\Store', 'static', null, null, 'select', 'Create In', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\Store', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('3', '1', 'created_in', null, null, 'static', null, null, 'text', 'Created From', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('4', '1', 'prefix', null, null, 'static', null, null, 'text', 'Prefix', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('5', '1', 'firstname', null, null, 'static', null, null, 'text', 'First Name', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('6', '1', 'middlename', null, null, 'static', null, null, 'text', 'Middle Name/Initial', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('7', '1', 'lastname', null, null, 'static', null, null, 'text', 'Last Name', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('8', '1', 'suffix', null, null, 'static', null, null, 'text', 'Suffix', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('9', '1', 'email', null, null, 'static', null, null, 'text', 'Email', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('10', '1', 'group_id', null, null, 'static', null, null, 'select', 'Group', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\Group', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('11', '1', 'dob', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\Datetime', 'static', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Frontend\\Datetime', 'date', 'Date Of Birth', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('12', '1', 'password_hash', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Backend\\Password', 'static', null, null, 'hidden', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('13', '1', 'rp_token', null, null, 'static', null, null, 'hidden', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('14', '1', 'rp_token_created_at', null, null, 'static', null, null, 'date', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('15', '1', 'default_billing', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Backend\\Billing', 'static', null, null, 'text', 'Default Billing Address', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('16', '1', 'default_shipping', null, 'Magento\\Customer\\Model\\Customer\\Attribute\\Backend\\Shipping', 'static', null, null, 'text', 'Default Shipping Address', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('17', '1', 'taxvat', null, null, 'static', null, null, 'text', 'Tax/VAT Number', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('18', '1', 'confirmation', null, null, 'static', null, null, 'text', 'Is Confirmed', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('19', '1', 'created_at', null, null, 'static', null, null, 'date', 'Created At', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('20', '1', 'gender', null, null, 'static', null, null, 'select', 'Gender', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Table', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('21', '1', 'disable_auto_group_change', null, 'Magento\\Customer\\Model\\Attribute\\Backend\\Data\\Boolean', 'static', null, null, 'boolean', 'Disable Automatic Group Change Based on VAT ID', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('22', '2', 'prefix', null, null, 'static', null, null, 'text', 'Prefix', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('23', '2', 'firstname', null, null, 'static', null, null, 'text', 'First Name', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('24', '2', 'middlename', null, null, 'static', null, null, 'text', 'Middle Name/Initial', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('25', '2', 'lastname', null, null, 'static', null, null, 'text', 'Last Name', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('26', '2', 'suffix', null, null, 'static', null, null, 'text', 'Suffix', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('27', '2', 'company', null, null, 'static', null, null, 'text', 'Company', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('28', '2', 'street', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\DefaultBackend', 'static', null, null, 'multiline', 'Street Address', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('29', '2', 'city', null, null, 'static', null, null, 'text', 'City', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('30', '2', 'country_id', null, null, 'static', null, null, 'select', 'Country', null, 'Magento\\Customer\\Model\\ResourceModel\\Address\\Attribute\\Source\\Country', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('31', '2', 'region', null, 'Magento\\Customer\\Model\\ResourceModel\\Address\\Attribute\\Backend\\Region', 'static', null, null, 'text', 'State/Province', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('32', '2', 'region_id', null, null, 'static', null, null, 'hidden', 'State/Province', null, 'Magento\\Customer\\Model\\ResourceModel\\Address\\Attribute\\Source\\Region', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('33', '2', 'postcode', null, null, 'static', null, null, 'text', 'Zip/Postal Code', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('34', '2', 'telephone', null, null, 'static', null, null, 'text', 'Phone Number', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('35', '2', 'fax', null, null, 'static', null, null, 'text', 'Fax', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('36', '2', 'vat_id', null, null, 'static', null, null, 'text', 'VAT number', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('37', '2', 'vat_is_valid', null, null, 'static', null, null, 'text', 'VAT number validity', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('38', '2', 'vat_request_id', null, null, 'static', null, null, 'text', 'VAT number validation request ID', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('39', '2', 'vat_request_date', null, null, 'static', null, null, 'text', 'VAT number validation request date', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('40', '2', 'vat_request_success', null, null, 'static', null, null, 'text', 'VAT number validation request success', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('41', '1', 'updated_at', null, null, 'static', null, null, 'date', 'Updated At', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('42', '3', 'name', null, null, 'varchar', null, null, 'text', 'Name', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('43', '3', 'is_active', null, null, 'int', null, null, 'select', 'Is Active', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('44', '3', 'description', null, null, 'text', null, null, 'textarea', 'Description', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('45', '3', 'image', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Backend\\Image', 'varchar', null, null, 'image', 'Image', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('46', '3', 'meta_title', null, null, 'varchar', null, null, 'text', 'Page Title', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('47', '3', 'meta_keywords', null, null, 'text', null, null, 'textarea', 'Meta Keywords', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('48', '3', 'meta_description', null, null, 'text', null, null, 'textarea', 'Meta Description', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('49', '3', 'display_mode', null, null, 'varchar', null, null, 'select', 'Display Mode', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Source\\Mode', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('50', '3', 'landing_page', null, null, 'int', null, null, 'select', 'CMS Block', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Source\\Page', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('51', '3', 'is_anchor', null, null, 'int', null, null, 'select', 'Is Anchor', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '0', '0', '1', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('52', '3', 'path', null, null, 'static', null, null, 'text', 'Path', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('53', '3', 'position', null, null, 'static', null, null, 'text', 'Position', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('54', '3', 'all_children', null, null, 'text', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('55', '3', 'path_in_store', null, null, 'text', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('56', '3', 'children', null, null, 'text', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('57', '3', 'custom_design', null, null, 'varchar', null, null, 'select', 'Custom Design', null, 'Magento\\Theme\\Model\\Theme\\Source\\Theme', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('58', '3', 'custom_design_from', 'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute', 'Magento\\Catalog\\Model\\Attribute\\Backend\\Startdate', 'datetime', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Frontend\\Datetime', 'date', 'Active From', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('59', '3', 'custom_design_to', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\Datetime', 'datetime', null, null, 'date', 'Active To', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('60', '3', 'page_layout', null, null, 'varchar', null, null, 'select', 'Page Layout', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Source\\Layout', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('61', '3', 'custom_layout_update', null, 'Magento\\Catalog\\Model\\Attribute\\Backend\\Customlayoutupdate', 'text', null, null, 'textarea', 'Custom Layout Update', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('62', '3', 'level', null, null, 'static', null, null, 'text', 'Level', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('63', '3', 'children_count', null, null, 'static', null, null, 'text', 'Children Count', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('64', '3', 'available_sort_by', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Backend\\Sortby', 'text', null, null, 'multiselect', 'Available Product Listing Sort By', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Source\\Sortby', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('65', '3', 'default_sort_by', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Backend\\Sortby', 'varchar', null, null, 'select', 'Default Product Listing Sort By', null, 'Magento\\Catalog\\Model\\Category\\Attribute\\Source\\Sortby', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('66', '3', 'include_in_menu', null, null, 'int', null, null, 'select', 'Include in Navigation Menu', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '1', '0', '1', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('67', '3', 'custom_use_parent_settings', null, null, 'int', null, null, 'select', 'Use Parent Category Settings', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('68', '3', 'custom_apply_to_products', null, null, 'int', null, null, 'select', 'Apply To Products', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('69', '3', 'filter_price_range', null, null, 'decimal', null, null, 'text', 'Layered Navigation Price Step', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('70', '4', 'name', null, null, 'varchar', null, null, 'text', 'Name', 'validate-length maximum-length-255', null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('71', '4', 'sku', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Sku', 'static', null, null, 'text', 'SKU', 'validate-length maximum-length-64', null, '1', '0', null, '1', null);
INSERT INTO `#__eav_attribute` VALUES ('72', '4', 'description', null, null, 'text', null, null, 'textarea', 'Description', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('73', '4', 'short_description', null, null, 'text', null, null, 'textarea', 'Short Description', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('74', '4', 'price', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price', 'decimal', null, null, 'price', 'Price', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('75', '4', 'special_price', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price', 'decimal', null, null, 'price', 'Special Price', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('76', '4', 'special_from_date', null, 'Magento\\Catalog\\Model\\Attribute\\Backend\\Startdate', 'datetime', null, null, 'date', 'Special Price From Date', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('77', '4', 'special_to_date', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\Datetime', 'datetime', null, null, 'date', 'Special Price To Date', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('78', '4', 'cost', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price', 'decimal', null, null, 'price', 'Cost', null, null, '0', '1', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('79', '4', 'weight', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Weight', 'decimal', null, null, 'weight', 'Weight', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('80', '4', 'manufacturer', null, null, 'int', null, null, 'select', 'Manufacturer', null, null, '0', '1', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('81', '4', 'meta_title', null, null, 'varchar', null, null, 'text', 'Meta Title', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('82', '4', 'meta_keyword', null, null, 'text', null, null, 'textarea', 'Meta Keywords', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('83', '4', 'meta_description', null, null, 'varchar', null, null, 'textarea', 'Meta Description', null, null, '0', '0', null, '0', 'Maximum 255 chars');
INSERT INTO `#__eav_attribute` VALUES ('84', '4', 'image', null, null, 'varchar', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Image', 'media_image', 'Base Image', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('85', '4', 'small_image', null, null, 'varchar', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Image', 'media_image', 'Small Image', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('86', '4', 'thumbnail', null, null, 'varchar', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Image', 'media_image', 'Thumbnail', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('87', '4', 'media_gallery', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Media', 'varchar', null, null, 'gallery', 'Media Gallery', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('88', '4', 'old_id', null, null, 'int', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('89', '4', 'tier_price', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Tierprice', 'decimal', null, null, 'text', 'Tier Price', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('90', '4', 'color', null, null, 'int', null, null, 'select', 'Color', null, null, '0', '1', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('91', '4', 'news_from_date', null, 'Magento\\Catalog\\Model\\Attribute\\Backend\\Startdate', 'datetime', null, null, 'date', 'Set Product as New from Date', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('92', '4', 'news_to_date', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\Datetime', 'datetime', null, null, 'date', 'Set Product as New to Date', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('93', '4', 'gallery', null, null, 'varchar', null, null, 'gallery', 'Image Gallery', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('94', '4', 'status', null, null, 'int', null, null, 'select', 'Status', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Source\\Status', '0', '0', '1', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('95', '4', 'minimal_price', null, null, 'decimal', null, null, 'price', 'Minimal Price', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('96', '4', 'visibility', null, null, 'int', null, null, 'select', 'Visibility', null, 'Magento\\Catalog\\Model\\Product\\Visibility', '0', '0', '4', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('97', '4', 'custom_design', null, null, 'varchar', null, null, 'select', 'Custom Design', null, 'Magento\\Theme\\Model\\Theme\\Source\\Theme', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('98', '4', 'custom_design_from', null, 'Magento\\Catalog\\Model\\Attribute\\Backend\\Startdate', 'datetime', null, null, 'date', 'Active From', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('99', '4', 'custom_design_to', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\Datetime', 'datetime', null, null, 'date', 'Active To', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('100', '4', 'custom_layout_update', null, 'Magento\\Catalog\\Model\\Attribute\\Backend\\Customlayoutupdate', 'text', null, null, 'textarea', 'Custom Layout Update', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('101', '4', 'page_layout', null, null, 'varchar', null, null, 'select', 'Page Layout', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Source\\Layout', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('102', '4', 'category_ids', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Category', 'static', null, null, 'text', 'Categories', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('103', '4', 'options_container', null, null, 'varchar', null, null, 'select', 'Display Product Options In', null, 'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Design\\Options\\Container', '0', '0', 'container2', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('104', '4', 'required_options', null, null, 'static', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('105', '4', 'has_options', null, null, 'static', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('106', '4', 'image_label', null, null, 'varchar', null, null, 'text', 'Image Label', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('107', '4', 'small_image_label', null, null, 'varchar', null, null, 'text', 'Small Image Label', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('108', '4', 'thumbnail_label', null, null, 'varchar', null, null, 'text', 'Thumbnail Label', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('109', '4', 'created_at', null, null, 'static', null, null, 'date', null, null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('110', '4', 'updated_at', null, null, 'static', null, null, 'date', null, null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('111', '4', 'country_of_manufacture', null, null, 'varchar', null, null, 'select', 'Country of Manufacture', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Source\\Countryofmanufacture', '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('112', '4', 'quantity_and_stock_status', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Stock', 'int', null, null, 'select', 'Quantity', null, 'Magento\\CatalogInventory\\Model\\Source\\Stock', '0', '0', '1', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('113', '3', 'url_key', null, null, 'varchar', null, null, 'text', 'URL Key', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('114', '3', 'url_path', null, null, 'varchar', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('115', '4', 'url_key', null, null, 'varchar', null, null, 'text', 'URL Key', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('116', '4', 'url_path', null, null, 'varchar', null, null, 'text', null, null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('117', '4', 'msrp', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price', 'decimal', null, null, 'price', 'Manufacturer\'s Suggested Retail Price', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('118', '4', 'msrp_display_actual_price_type', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Boolean', 'varchar', null, null, 'select', 'Display Actual Price', null, 'Magento\\Msrp\\Model\\Product\\Attribute\\Source\\Type\\Price', '0', '0', '0', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('119', '4', 'price_type', null, null, 'int', null, null, null, null, null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('120', '4', 'sku_type', null, null, 'int', null, null, null, null, null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('121', '4', 'weight_type', null, null, 'int', null, null, null, null, null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('122', '4', 'price_view', null, null, 'int', null, null, 'select', 'Price View', null, 'Magento\\Bundle\\Model\\Product\\Attribute\\Source\\Price\\View', '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('123', '4', 'shipment_type', null, null, 'int', null, null, null, 'Shipment', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('124', '4', 'links_purchased_separately', null, null, 'int', null, null, null, 'Links can be purchased separately', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('125', '4', 'samples_title', null, null, 'varchar', null, null, null, 'Samples title', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('126', '4', 'links_title', null, null, 'varchar', null, null, null, 'Links title', null, null, '1', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('127', '4', 'links_exist', null, null, 'int', null, null, null, null, null, null, '0', '0', '0', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('128', '4', 'swatch_image', null, null, 'varchar', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Image', 'media_image', 'Swatch Image', null, null, '0', '0', null, '0', null);
INSERT INTO `#__eav_attribute` VALUES ('129', '4', 'tax_class_id', null, null, 'int', null, null, 'select', 'Tax Class', null, 'Magento\\Tax\\Model\\TaxClass\\Source\\Product', '0', '0', '2', '0', null);
INSERT INTO `#__eav_attribute` VALUES ('130', '4', 'gift_message_available', null, 'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Boolean', 'varchar', null, null, 'select', 'Allow Gift Message', null, 'Magento\\Eav\\Model\\Entity\\Attribute\\Source\\Boolean', '0', '0', null, '0', null);

DROP TABLE IF EXISTS `#__eav_attribute_group`;
CREATE TABLE `#__eav_attribute_group` (
  `attribute_group_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Attribute Group Id',
  `attribute_set_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Set Id',
  `attribute_group_name` varchar(255) DEFAULT NULL COMMENT 'Attribute Group Name',
  `sort_order` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Sort Order',
  `default_id` smallint(5) unsigned DEFAULT '0' COMMENT 'Default Id',
  `attribute_group_code` varchar(255) NOT NULL COMMENT 'Attribute Group Code',
  `tab_group_code` varchar(255) DEFAULT NULL COMMENT 'Tab Group Code',
  PRIMARY KEY (`attribute_group_id`),
  UNIQUE KEY `EAV_ATTRIBUTE_GROUP_ATTRIBUTE_SET_ID_ATTRIBUTE_GROUP_NAME` (`attribute_set_id`,`attribute_group_name`),
  KEY `EAV_ATTRIBUTE_GROUP_ATTRIBUTE_SET_ID_SORT_ORDER` (`attribute_set_id`,`sort_order`),
  CONSTRAINT `EAV_ATTR_GROUP_ATTR_SET_ID_EAV_ATTR_SET_ATTR_SET_ID` FOREIGN KEY (`attribute_set_id`) REFERENCES `#__eav_attribute_set` (`attribute_set_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='Eav Attribute Group';

INSERT INTO `#__eav_attribute_group` VALUES ('1', '1', 'General', '1', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('2', '2', 'General', '1', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('3', '3', 'General', '10', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('4', '3', 'General Information', '2', '0', 'general-information', null);
INSERT INTO `#__eav_attribute_group` VALUES ('5', '3', 'Display Settings', '20', '0', 'display-settings', null);
INSERT INTO `#__eav_attribute_group` VALUES ('6', '3', 'Custom Design', '30', '0', 'custom-design', null);
INSERT INTO `#__eav_attribute_group` VALUES ('7', '4', 'Product Details', '10', '1', 'product-details', 'basic');
INSERT INTO `#__eav_attribute_group` VALUES ('8', '4', 'Advanced Pricing', '40', '0', 'advanced-pricing', 'advanced');
INSERT INTO `#__eav_attribute_group` VALUES ('9', '4', 'Search Engine Optimization', '30', '0', 'search-engine-optimization', 'basic');
INSERT INTO `#__eav_attribute_group` VALUES ('10', '4', 'Images and Videos', '20', '0', 'image-management', 'basic');
INSERT INTO `#__eav_attribute_group` VALUES ('11', '4', 'Design', '50', '0', 'design', 'advanced');
INSERT INTO `#__eav_attribute_group` VALUES ('12', '4', 'Autosettings', '60', '0', 'autosettings', 'advanced');
INSERT INTO `#__eav_attribute_group` VALUES ('13', '5', 'General', '1', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('14', '6', 'General', '1', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('15', '7', 'General', '1', '1', 'general', null);
INSERT INTO `#__eav_attribute_group` VALUES ('16', '8', 'General', '1', '1', 'general', null);

DROP TABLE IF EXISTS `#__eav_attribute_label`;
CREATE TABLE `#__eav_attribute_label` (
  `attribute_label_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Attribute Label Id',
  `attribute_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Id',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store Id',
  `value` varchar(255) DEFAULT NULL COMMENT 'Value',
  PRIMARY KEY (`attribute_label_id`),
  KEY `EAV_ATTRIBUTE_LABEL_STORE_ID` (`store_id`),
  KEY `EAV_ATTRIBUTE_LABEL_ATTRIBUTE_ID_STORE_ID` (`attribute_id`,`store_id`),
  CONSTRAINT `EAV_ATTRIBUTE_LABEL_ATTRIBUTE_ID_EAV_ATTRIBUTE_ATTRIBUTE_ID` FOREIGN KEY (`attribute_id`) REFERENCES `#__eav_attribute` (`attribute_id`) ON DELETE CASCADE,
  CONSTRAINT `EAV_ATTRIBUTE_LABEL_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Eav Attribute Label';

DROP TABLE IF EXISTS `#__eav_attribute_option`;
CREATE TABLE `#__eav_attribute_option` (
  `option_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Option Id',
  `attribute_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Id',
  `sort_order` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Sort Order',
  PRIMARY KEY (`option_id`),
  KEY `EAV_ATTRIBUTE_OPTION_ATTRIBUTE_ID` (`attribute_id`),
  CONSTRAINT `EAV_ATTRIBUTE_OPTION_ATTRIBUTE_ID_EAV_ATTRIBUTE_ATTRIBUTE_ID` FOREIGN KEY (`attribute_id`) REFERENCES `#__eav_attribute` (`attribute_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Eav Attribute Option';

INSERT INTO `#__eav_attribute_option` VALUES ('1', '20', '0');
INSERT INTO `#__eav_attribute_option` VALUES ('2', '20', '1');
INSERT INTO `#__eav_attribute_option` VALUES ('3', '20', '3');

DROP TABLE IF EXISTS `#__eav_attribute_option_value`;
CREATE TABLE `#__eav_attribute_option_value` (
  `value_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Value Id',
  `option_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Option Id',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store Id',
  `value` varchar(255) DEFAULT NULL COMMENT 'Value',
  PRIMARY KEY (`value_id`),
  KEY `EAV_ATTRIBUTE_OPTION_VALUE_OPTION_ID` (`option_id`),
  KEY `EAV_ATTRIBUTE_OPTION_VALUE_STORE_ID` (`store_id`),
  CONSTRAINT `EAV_ATTRIBUTE_OPTION_VALUE_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE,
  CONSTRAINT `EAV_ATTR_OPT_VAL_OPT_ID_EAV_ATTR_OPT_OPT_ID` FOREIGN KEY (`option_id`) REFERENCES `#__eav_attribute_option` (`option_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Eav Attribute Option Value';

-- ----------------------------
-- Records of eav_attribute_option_value
-- ----------------------------
INSERT INTO `#__eav_attribute_option_value` VALUES ('1', '1', '0', 'Male');
INSERT INTO `#__eav_attribute_option_value` VALUES ('2', '2', '0', 'Female');
INSERT INTO `#__eav_attribute_option_value` VALUES ('3', '3', '0', 'Not Specified');

DROP TABLE IF EXISTS `#__eav_attribute_set`;
CREATE TABLE `#__eav_attribute_set` (
  `attribute_set_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Attribute Set Id',
  `entity_type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Entity Type Id',
  `attribute_set_name` varchar(255) DEFAULT NULL COMMENT 'Attribute Set Name',
  `sort_order` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Sort Order',
  PRIMARY KEY (`attribute_set_id`),
  UNIQUE KEY `EAV_ATTRIBUTE_SET_ENTITY_TYPE_ID_ATTRIBUTE_SET_NAME` (`entity_type_id`,`attribute_set_name`),
  KEY `EAV_ATTRIBUTE_SET_ENTITY_TYPE_ID_SORT_ORDER` (`entity_type_id`,`sort_order`),
  CONSTRAINT `EAV_ATTRIBUTE_SET_ENTITY_TYPE_ID_EAV_ENTITY_TYPE_ENTITY_TYPE_ID` FOREIGN KEY (`entity_type_id`) REFERENCES `#__eav_entity_type` (`entity_type_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Eav Attribute Set';

INSERT INTO #__eav_attribute_set VALUES ('1', '1', 'Default', '2');
INSERT INTO #__eav_attribute_set VALUES ('2', '2', 'Default', '2');
INSERT INTO #__eav_attribute_set VALUES ('3', '3', 'Default', '1');
INSERT INTO #__eav_attribute_set VALUES ('4', '4', 'Default', '1');
INSERT INTO #__eav_attribute_set VALUES ('5', '5', 'Default', '1');
INSERT INTO #__eav_attribute_set VALUES ('6', '6', 'Default', '1');
INSERT INTO #__eav_attribute_set VALUES ('7', '7', 'Default', '1');
INSERT INTO #__eav_attribute_set VALUES ('8', '8', 'Default', '1');

DROP TABLE IF EXISTS `#__eav_entity`;
CREATE TABLE `#__eav_entity` (
  `entity_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Entity Id',
  `entity_type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Entity Type Id',
  `attribute_set_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Set Id',
  `increment_id` varchar(50) DEFAULT NULL COMMENT 'Increment Id',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Parent Id',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store Id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Created At',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Updated At',
  `is_active` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT 'Defines Is Entity Active',
  PRIMARY KEY (`entity_id`),
  KEY `EAV_ENTITY_ENTITY_TYPE_ID` (`entity_type_id`),
  KEY `EAV_ENTITY_STORE_ID` (`store_id`),
  CONSTRAINT `EAV_ENTITY_ENTITY_TYPE_ID_EAV_ENTITY_TYPE_ENTITY_TYPE_ID` FOREIGN KEY (`entity_type_id`) REFERENCES `#__eav_entity_type` (`entity_type_id`) ON DELETE CASCADE,
  CONSTRAINT `EAV_ENTITY_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Eav Entity';

DROP TABLE IF EXISTS `#__eav_entity_attribute`;
CREATE TABLE `#__eav_entity_attribute` (
  `entity_attribute_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Entity Attribute Id',
  `entity_type_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Entity Type Id',
  `attribute_set_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Set Id',
  `attribute_group_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Group Id',
  `attribute_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Attribute Id',
  `sort_order` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Sort Order',
  PRIMARY KEY (`entity_attribute_id`),
  UNIQUE KEY `EAV_ENTITY_ATTRIBUTE_ATTRIBUTE_SET_ID_ATTRIBUTE_ID` (`attribute_set_id`,`attribute_id`),
  UNIQUE KEY `EAV_ENTITY_ATTRIBUTE_ATTRIBUTE_GROUP_ID_ATTRIBUTE_ID` (`attribute_group_id`,`attribute_id`),
  KEY `EAV_ENTITY_ATTRIBUTE_ATTRIBUTE_SET_ID_SORT_ORDER` (`attribute_set_id`,`sort_order`),
  KEY `EAV_ENTITY_ATTRIBUTE_ATTRIBUTE_ID` (`attribute_id`),
  CONSTRAINT `EAV_ENTITY_ATTRIBUTE_ATTRIBUTE_ID_EAV_ATTRIBUTE_ATTRIBUTE_ID` FOREIGN KEY (`attribute_id`) REFERENCES `#__eav_attribute` (`attribute_id`) ON DELETE CASCADE,
  CONSTRAINT `EAV_ENTT_ATTR_ATTR_GROUP_ID_EAV_ATTR_GROUP_ATTR_GROUP_ID` FOREIGN KEY (`attribute_group_id`) REFERENCES `eav_attribute_group` (`attribute_group_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8 COMMENT='Eav Entity Attributes';

INSERT INTO `#__eav_entity_attribute` VALUES ('1', '1', '1', '1', '1', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('2', '1', '1', '1', '2', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('3', '1', '1', '1', '3', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('4', '1', '1', '1', '4', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('5', '1', '1', '1', '5', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('6', '1', '1', '1', '6', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('7', '1', '1', '1', '7', '60');
INSERT INTO `#__eav_entity_attribute` VALUES ('8', '1', '1', '1', '8', '70');
INSERT INTO `#__eav_entity_attribute` VALUES ('9', '1', '1', '1', '9', '80');
INSERT INTO `#__eav_entity_attribute` VALUES ('10', '1', '1', '1', '10', '25');
INSERT INTO `#__eav_entity_attribute` VALUES ('11', '1', '1', '1', '11', '90');
INSERT INTO `#__eav_entity_attribute` VALUES ('12', '1', '1', '1', '12', '81');
INSERT INTO `#__eav_entity_attribute` VALUES ('13', '1', '1', '1', '13', '115');
INSERT INTO `#__eav_entity_attribute` VALUES ('14', '1', '1', '1', '14', '120');
INSERT INTO `#__eav_entity_attribute` VALUES ('15', '1', '1', '1', '15', '82');
INSERT INTO `#__eav_entity_attribute` VALUES ('16', '1', '1', '1', '16', '83');
INSERT INTO `#__eav_entity_attribute` VALUES ('17', '1', '1', '1', '17', '100');
INSERT INTO `#__eav_entity_attribute` VALUES ('18', '1', '1', '1', '18', '85');
INSERT INTO `#__eav_entity_attribute` VALUES ('19', '1', '1', '1', '19', '86');
INSERT INTO `#__eav_entity_attribute` VALUES ('20', '1', '1', '1', '20', '110');
INSERT INTO `#__eav_entity_attribute` VALUES ('21', '1', '1', '1', '21', '121');
INSERT INTO `#__eav_entity_attribute` VALUES ('22', '2', '2', '2', '22', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('23', '2', '2', '2', '23', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('24', '2', '2', '2', '24', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('25', '2', '2', '2', '25', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('26', '2', '2', '2', '26', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('27', '2', '2', '2', '27', '60');
INSERT INTO `#__eav_entity_attribute` VALUES ('28', '2', '2', '2', '28', '70');
INSERT INTO `#__eav_entity_attribute` VALUES ('29', '2', '2', '2', '29', '80');
INSERT INTO `#__eav_entity_attribute` VALUES ('30', '2', '2', '2', '30', '90');
INSERT INTO `#__eav_entity_attribute` VALUES ('31', '2', '2', '2', '31', '100');
INSERT INTO `#__eav_entity_attribute` VALUES ('32', '2', '2', '2', '32', '100');
INSERT INTO `#__eav_entity_attribute` VALUES ('33', '2', '2', '2', '33', '110');
INSERT INTO `#__eav_entity_attribute` VALUES ('34', '2', '2', '2', '34', '120');
INSERT INTO `#__eav_entity_attribute` VALUES ('35', '2', '2', '2', '35', '130');
INSERT INTO `#__eav_entity_attribute` VALUES ('36', '2', '2', '2', '36', '131');
INSERT INTO `#__eav_entity_attribute` VALUES ('37', '2', '2', '2', '37', '132');
INSERT INTO `#__eav_entity_attribute` VALUES ('38', '2', '2', '2', '38', '133');
INSERT INTO `#__eav_entity_attribute` VALUES ('39', '2', '2', '2', '39', '134');
INSERT INTO `#__eav_entity_attribute` VALUES ('40', '2', '2', '2', '40', '135');
INSERT INTO `#__eav_entity_attribute` VALUES ('41', '1', '1', '1', '41', '87');
INSERT INTO `#__eav_entity_attribute` VALUES ('42', '3', '3', '4', '42', '1');
INSERT INTO `#__eav_entity_attribute` VALUES ('43', '3', '3', '4', '43', '2');
INSERT INTO `#__eav_entity_attribute` VALUES ('44', '3', '3', '4', '44', '4');
INSERT INTO `#__eav_entity_attribute` VALUES ('45', '3', '3', '4', '45', '5');
INSERT INTO `#__eav_entity_attribute` VALUES ('46', '3', '3', '4', '46', '6');
INSERT INTO `#__eav_entity_attribute` VALUES ('47', '3', '3', '4', '47', '7');
INSERT INTO `#__eav_entity_attribute` VALUES ('48', '3', '3', '4', '48', '8');
INSERT INTO `#__eav_entity_attribute` VALUES ('49', '3', '3', '5', '49', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('50', '3', '3', '5', '50', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('51', '3', '3', '5', '51', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('52', '3', '3', '4', '52', '12');
INSERT INTO `#__eav_entity_attribute` VALUES ('53', '3', '3', '4', '53', '13');
INSERT INTO `#__eav_entity_attribute` VALUES ('54', '3', '3', '4', '54', '14');
INSERT INTO `#__eav_entity_attribute` VALUES ('55', '3', '3', '4', '55', '15');
INSERT INTO `#__eav_entity_attribute` VALUES ('56', '3', '3', '4', '56', '16');
INSERT INTO `#__eav_entity_attribute` VALUES ('57', '3', '3', '6', '57', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('58', '3', '3', '6', '58', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('59', '3', '3', '6', '59', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('60', '3', '3', '6', '60', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('61', '3', '3', '6', '61', '60');
INSERT INTO `#__eav_entity_attribute` VALUES ('62', '3', '3', '4', '62', '24');
INSERT INTO `#__eav_entity_attribute` VALUES ('63', '3', '3', '4', '63', '25');
INSERT INTO `#__eav_entity_attribute` VALUES ('64', '3', '3', '5', '64', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('65', '3', '3', '5', '65', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('66', '3', '3', '4', '66', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('67', '3', '3', '6', '67', '5');
INSERT INTO `#__eav_entity_attribute` VALUES ('68', '3', '3', '6', '68', '6');
INSERT INTO `#__eav_entity_attribute` VALUES ('69', '3', '3', '5', '69', '51');
INSERT INTO `#__eav_entity_attribute` VALUES ('70', '4', '4', '7', '70', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('71', '4', '4', '7', '71', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('72', '4', '4', '7', '72', '90');
INSERT INTO `#__eav_entity_attribute` VALUES ('73', '4', '4', '12', '73', '0');
INSERT INTO `#__eav_entity_attribute` VALUES ('74', '4', '4', '7', '74', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('75', '4', '4', '8', '75', '3');
INSERT INTO `#__eav_entity_attribute` VALUES ('76', '4', '4', '8', '76', '4');
INSERT INTO `#__eav_entity_attribute` VALUES ('77', '4', '4', '8', '77', '5');
INSERT INTO `#__eav_entity_attribute` VALUES ('78', '4', '4', '8', '78', '6');
INSERT INTO `#__eav_entity_attribute` VALUES ('79', '4', '4', '7', '79', '70');
INSERT INTO `#__eav_entity_attribute` VALUES ('80', '4', '4', '9', '81', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('81', '4', '4', '9', '82', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('82', '4', '4', '9', '83', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('83', '4', '4', '7', '84', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('84', '4', '4', '10', '85', '2');
INSERT INTO `#__eav_entity_attribute` VALUES ('85', '4', '4', '10', '86', '3');
INSERT INTO `#__eav_entity_attribute` VALUES ('86', '4', '4', '10', '87', '4');
INSERT INTO `#__eav_entity_attribute` VALUES ('87', '4', '4', '7', '88', '6');
INSERT INTO `#__eav_entity_attribute` VALUES ('88', '4', '4', '8', '89', '7');
INSERT INTO `#__eav_entity_attribute` VALUES ('89', '4', '4', '12', '91', '30');
INSERT INTO `#__eav_entity_attribute` VALUES ('90', '4', '4', '12', '92', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('91', '4', '4', '10', '93', '5');
INSERT INTO `#__eav_entity_attribute` VALUES ('92', '4', '4', '7', '94', '100');
INSERT INTO `#__eav_entity_attribute` VALUES ('93', '4', '4', '8', '95', '8');
INSERT INTO `#__eav_entity_attribute` VALUES ('94', '4', '4', '12', '96', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('95', '4', '4', '11', '97', '1');
INSERT INTO `#__eav_entity_attribute` VALUES ('96', '4', '4', '11', '98', '2');
INSERT INTO `#__eav_entity_attribute` VALUES ('97', '4', '4', '11', '99', '3');
INSERT INTO `#__eav_entity_attribute` VALUES ('98', '4', '4', '11', '100', '4');
INSERT INTO `#__eav_entity_attribute` VALUES ('99', '4', '4', '11', '101', '5');
INSERT INTO `#__eav_entity_attribute` VALUES ('100', '4', '4', '7', '102', '80');
INSERT INTO `#__eav_entity_attribute` VALUES ('101', '4', '4', '11', '103', '6');
INSERT INTO `#__eav_entity_attribute` VALUES ('102', '4', '4', '7', '104', '14');
INSERT INTO `#__eav_entity_attribute` VALUES ('103', '4', '4', '7', '105', '15');
INSERT INTO `#__eav_entity_attribute` VALUES ('104', '4', '4', '7', '106', '16');
INSERT INTO `#__eav_entity_attribute` VALUES ('105', '4', '4', '7', '107', '17');
INSERT INTO `#__eav_entity_attribute` VALUES ('106', '4', '4', '7', '108', '18');
INSERT INTO `#__eav_entity_attribute` VALUES ('107', '4', '4', '7', '109', '19');
INSERT INTO `#__eav_entity_attribute` VALUES ('108', '4', '4', '7', '110', '20');
INSERT INTO `#__eav_entity_attribute` VALUES ('109', '4', '4', '12', '111', '50');
INSERT INTO `#__eav_entity_attribute` VALUES ('110', '4', '4', '7', '112', '60');
INSERT INTO `#__eav_entity_attribute` VALUES ('111', '3', '3', '4', '113', '3');
INSERT INTO `#__eav_entity_attribute` VALUES ('112', '3', '3', '4', '114', '17');
INSERT INTO `#__eav_entity_attribute` VALUES ('113', '4', '4', '9', '115', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('114', '4', '4', '7', '116', '11');
INSERT INTO `#__eav_entity_attribute` VALUES ('115', '4', '4', '8', '117', '9');
INSERT INTO `#__eav_entity_attribute` VALUES ('116', '4', '4', '8', '118', '10');
INSERT INTO `#__eav_entity_attribute` VALUES ('117', '4', '4', '7', '119', '101');
INSERT INTO `#__eav_entity_attribute` VALUES ('118', '4', '4', '7', '120', '102');
INSERT INTO `#__eav_entity_attribute` VALUES ('119', '4', '4', '7', '121', '103');
INSERT INTO `#__eav_entity_attribute` VALUES ('120', '4', '4', '8', '122', '11');
INSERT INTO `#__eav_entity_attribute` VALUES ('121', '4', '4', '7', '123', '104');
INSERT INTO `#__eav_entity_attribute` VALUES ('122', '4', '4', '7', '124', '105');
INSERT INTO `#__eav_entity_attribute` VALUES ('123', '4', '4', '7', '125', '106');
INSERT INTO `#__eav_entity_attribute` VALUES ('124', '4', '4', '7', '126', '107');
INSERT INTO `#__eav_entity_attribute` VALUES ('125', '4', '4', '7', '127', '108');
INSERT INTO `#__eav_entity_attribute` VALUES ('126', '4', '4', '7', '128', '3');
INSERT INTO `#__eav_entity_attribute` VALUES ('127', '4', '4', '7', '129', '40');
INSERT INTO `#__eav_entity_attribute` VALUES ('128', '4', '4', '12', '130', '60');

DROP TABLE IF EXISTS `#__catalog_eav_attribute`;
CREATE TABLE `#__catalog_eav_attribute` (
  `attribute_id` smallint(5) unsigned NOT NULL COMMENT 'Attribute ID',
  `frontend_input_renderer` varchar(255) DEFAULT NULL COMMENT 'Frontend Input Renderer',
  `is_global` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT 'Is Global',
  `is_visible` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT 'Is Visible',
  `is_searchable` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Searchable',
  `is_filterable` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Filterable',
  `is_comparable` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Comparable',
  `is_visible_on_front` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Visible On Front',
  `is_html_allowed_on_front` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is HTML Allowed On Front',
  `is_used_for_price_rules` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Used For Price Rules',
  `is_filterable_in_search` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Filterable In Search',
  `used_in_product_listing` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Used In Product Listing',
  `used_for_sort_by` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Used For Sorting',
  `apply_to` varchar(255) DEFAULT NULL COMMENT 'Apply To',
  `is_visible_in_advanced_search` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Visible In Advanced Search',
  `position` int(11) NOT NULL DEFAULT '0' COMMENT 'Position',
  `is_wysiwyg_enabled` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is WYSIWYG Enabled',
  `is_used_for_promo_rules` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Used For Promo Rules',
  `is_required_in_admin_store` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Required In Admin Store',
  `is_used_in_grid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Used in Grid',
  `is_visible_in_grid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Visible in Grid',
  `is_filterable_in_grid` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Is Filterable in Grid',
  `search_weight` float NOT NULL DEFAULT '1' COMMENT 'Search Weight',
  `additional_data` text COMMENT 'Additional swatch attributes data',
  PRIMARY KEY (`attribute_id`),
  KEY `CATALOG_EAV_ATTRIBUTE_USED_FOR_SORT_BY` (`used_for_sort_by`),
  KEY `CATALOG_EAV_ATTRIBUTE_USED_IN_PRODUCT_LISTING` (`used_in_product_listing`),
  CONSTRAINT `CATALOG_EAV_ATTRIBUTE_ATTRIBUTE_ID_EAV_ATTRIBUTE_ATTRIBUTE_ID` FOREIGN KEY (`attribute_id`) REFERENCES `#__eav_attribute` (`attribute_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Catalog EAV Attribute Table';

INSERT INTO `#__catalog_eav_attribute` VALUES ('42', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('43', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('44', null, '0', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', null, '0', '0', '1', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('45', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('46', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('47', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('48', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('49', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('50', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('51', null, '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('52', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('53', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('54', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('55', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('56', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('57', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('58', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('59', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('60', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('61', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('62', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('63', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('64', 'Magento\\Catalog\\Block\\Adminhtml\\Category\\Helper\\Sortby\\Available', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('65', 'Magento\\Catalog\\Block\\Adminhtml\\Category\\Helper\\Sortby\\DefaultSortby', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('66', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('67', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('68', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('69', 'Magento\\Catalog\\Block\\Adminhtml\\Category\\Helper\\Pricestep', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('70', null, '0', '1', '1', '0', '0', '0', '0', '0', '0', '1', '1', null, '1', '0', '0', '0', '0', '0', '0', '0', '5', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('71', null, '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', null, '1', '0', '0', '0', '0', '0', '0', '0', '6', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('72', null, '0', '1', '1', '0', '1', '0', '1', '0', '0', '0', '0', null, '1', '0', '1', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('73', null, '0', '1', '1', '0', '1', '0', '1', '0', '0', '1', '0', null, '1', '0', '1', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('74', null, '2', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', 'simple,virtual,bundle,downloadable,configurable', '1', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('75', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('76', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('77', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('78', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'simple,virtual,downloadable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('79', 'Magento\\Catalog\\Block\\Adminhtml\\Product\\Helper\\Form\\Weight', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('80', null, '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', 'simple', '1', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('81', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('82', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('83', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('84', 'Magento\\Catalog\\Block\\Adminhtml\\Product\\Helper\\Form\\BaseImage', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('85', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('86', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('87', null, '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('88', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('89', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('90', null, '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', 'simple,virtual,configurable', '1', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('91', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('92', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('93', null, '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('94', 'Magento\\Framework\\Data\\Form\\Element\\Hidden', '2', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '1', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('95', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('96', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '1', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('97', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('98', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('99', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('100', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('101', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('102', 'Magento\\Catalog\\Block\\Adminhtml\\Product\\Helper\\Form\\Category', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('103', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('104', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('105', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('106', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('107', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('108', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('109', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('110', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('111', null, '2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'simple,bundle,grouped,configurable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('112', 'Magento\\CatalogInventory\\Block\\Adminhtml\\Form\\Field\\Stock', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('113', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('114', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('115', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('116', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('117', 'Magento\\Msrp\\Block\\Adminhtml\\Product\\Helper\\Form\\Type', '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,downloadable,bundle,configurable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('118', 'Magento\\Msrp\\Block\\Adminhtml\\Product\\Helper\\Form\\Type\\Price', '2', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,downloadable,bundle,configurable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('119', null, '1', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'bundle', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('120', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'bundle', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('121', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'bundle', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('122', null, '1', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'bundle', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('123', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'bundle', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('124', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'downloadable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('125', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'downloadable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('126', null, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'downloadable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('127', null, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', 'downloadable', '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('128', null, '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', null, '0', '0', '0', '0', '0', '0', '0', '0', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('129', null, '2', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', 'simple,virtual,bundle,downloadable,configurable', '0', '0', '0', '0', '0', '1', '0', '1', '1', null);
INSERT INTO `#__catalog_eav_attribute` VALUES ('130', 'Magento\\GiftMessage\\Block\\Adminhtml\\Product\\Helper\\Form\\Config', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0', '0', '0', '0', '0', '1', '0', '0', '1', null);

SET FOREIGN_KEY_CHECKS=1;