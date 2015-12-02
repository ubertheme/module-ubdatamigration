SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ub_migrate_steps`
-- ----------------------------
DROP TABLE IF EXISTS `ub_migrate_steps`;
CREATE TABLE `ub_migrate_steps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `migrated_data` text COLLATE utf8_unicode_ci,
  `descriptions` text COLLATE utf8_unicode_ci,
  `sorder` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ub_migrate_steps
-- ----------------------------
INSERT INTO ub_migrate_steps VALUES ('1', 'Database Settings', 'step1', '0', null, '- Specify databases information', '1');
INSERT INTO ub_migrate_steps VALUES ('2', 'Migrate Websites, Stores', 'step2', '0', null, '- We have to migrate data from tables: core_website, core_store_group, core_store, \r\n<br/>- Let\'s select websites, store groups & store views to migration.', '2');
INSERT INTO ub_migrate_steps VALUES ('3', 'Migrate Attributes', 'step3', '0', null, 'We have to migrate data from tables: eav_attribute_set, eav_attribute_group, eav_attribute, eav_attribute_label, eav_attribute_option, eav_attribute_option_value, eav_entity_attribute, catalog_eav_attribute', '3');
INSERT INTO ub_migrate_steps VALUES ('4', 'Migrate Categories', 'step4', '0', null, '- We have to migrate data from tables: \r\ncatalog_category_entity, catalog_category_entity_datetime, catalog_category_entity_decimal, catalog_category_entity_int, catalog_category_entity_text, catalog_category_entity_text, catalog_category_entity_varchar\r\n<br/><br/>- Let\'s select categories to migration. If you don\'t specify categories, the Tool will migrate all categories.', '4');
INSERT INTO ub_migrate_steps VALUES ('5', 'Migrate Products', 'step5', '0', null, '- Select product types to migrate', '5');
INSERT INTO ub_migrate_steps VALUES ('6', 'Migrate Customers', 'step6', '0', null, '- Select customer groups you want to migrate <br/>- System will auto migrate the related data for each selected customer group.', '6');
INSERT INTO ub_migrate_steps VALUES ('7', 'Migrate Sales Data', 'step7', '0', null, '- Sales Data migration <br/>- System will auto migrate the related data for each sales object', '7');
INSERT INTO ub_migrate_steps VALUES ('8', 'Migrate Reviews & Ratings Data', 'step8', '0', null, 'Reviews and ratings data migration', '8');
INSERT INTO ub_migrate_steps VALUES ('9', 'Migrate Other Data', 'step9', '0', null, 'Other data group migration', '9');
