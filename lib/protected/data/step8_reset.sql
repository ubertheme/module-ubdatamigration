
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `#__review_entity_summary`;
CREATE TABLE `#__review_entity_summary` (
  `primary_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Summary review entity id',
  `entity_pk_value` bigint(20) NOT NULL DEFAULT '0' COMMENT 'Product id',
  `entity_type` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Entity type id',
  `reviews_count` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Qty of reviews',
  `rating_summary` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Summarized rating',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store id',
  PRIMARY KEY (`primary_id`),
  KEY `REVIEW_ENTITY_SUMMARY_STORE_ID` (`store_id`),
  CONSTRAINT `REVIEW_ENTITY_SUMMARY_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Review aggregates';

DROP TABLE IF EXISTS `#__review`;
CREATE TABLE `#__review` (
  `review_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Review id',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Review create date',
  `entity_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Entity id',
  `entity_pk_value` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Product id',
  `status_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Status code',
  PRIMARY KEY (`review_id`),
  KEY `IDX_REVIEW_ENTITY_ID` (`entity_id`),
  KEY `IDX_REVIEW_STATUS_ID` (`status_id`),
  KEY `IDX_REVIEW_ENTITY_PK_VALUE` (`entity_pk_value`),
  CONSTRAINT `FK_REVIEW_ENTITY_ID_REVIEW_ENTITY_ENTITY_ID` FOREIGN KEY (`entity_id`) REFERENCES `#__review_entity` (`entity_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_REVIEW_STATUS_ID_REVIEW_STATUS_STATUS_ID` FOREIGN KEY (`status_id`) REFERENCES `#__review_status` (`status_id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Review base information';

DROP TABLE IF EXISTS `#__review_detail`;
CREATE TABLE `#__review_detail` (
  `detail_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Review detail id',
  `review_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT 'Review id',
  `store_id` smallint(5) unsigned DEFAULT '0' COMMENT 'Store id',
  `title` varchar(255) NOT NULL COMMENT 'Title',
  `detail` text NOT NULL COMMENT 'Detail description',
  `nickname` varchar(128) NOT NULL COMMENT 'User nickname',
  `customer_id` int(10) unsigned DEFAULT NULL COMMENT 'Customer Id',
  PRIMARY KEY (`detail_id`),
  KEY `REVIEW_DETAIL_REVIEW_ID` (`review_id`),
  KEY `REVIEW_DETAIL_STORE_ID` (`store_id`),
  KEY `REVIEW_DETAIL_CUSTOMER_ID` (`customer_id`),
  CONSTRAINT `REVIEW_DETAIL_CUSTOMER_ID_CUSTOMER_ENTITY_ENTITY_ID` FOREIGN KEY (`customer_id`) REFERENCES `#__customer_entity` (`entity_id`) ON DELETE SET NULL,
  CONSTRAINT `REVIEW_DETAIL_REVIEW_ID_REVIEW_REVIEW_ID` FOREIGN KEY (`review_id`) REFERENCES `#__review` (`review_id`) ON DELETE CASCADE,
  CONSTRAINT `REVIEW_DETAIL_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Review detail information';

DROP TABLE IF EXISTS `#__review_store`;
CREATE TABLE `#__review_store` (
  `review_id` bigint(20) unsigned NOT NULL COMMENT 'Review Id',
  `store_id` smallint(5) unsigned NOT NULL COMMENT 'Store Id',
  PRIMARY KEY (`review_id`,`store_id`),
  KEY `REVIEW_STORE_STORE_ID` (`store_id`),
  CONSTRAINT `REVIEW_STORE_REVIEW_ID_REVIEW_REVIEW_ID` FOREIGN KEY (`review_id`) REFERENCES `#__review` (`review_id`) ON DELETE CASCADE,
  CONSTRAINT `REVIEW_STORE_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Review Store';

DROP TABLE IF EXISTS `#__rating_option_vote`;
CREATE TABLE `#__rating_option_vote` (
  `vote_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Vote id',
  `option_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Vote option id',
  `remote_ip` varchar(16) NOT NULL COMMENT 'Customer IP',
  `remote_ip_long` bigint(20) NOT NULL DEFAULT '0' COMMENT 'Customer IP converted to long integer format',
  `customer_id` int(10) unsigned DEFAULT '0' COMMENT 'Customer Id',
  `entity_pk_value` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT 'Product id',
  `rating_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Rating id',
  `review_id` bigint(20) unsigned DEFAULT NULL COMMENT 'Review id',
  `percent` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Percent amount',
  `value` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Vote option value',
  PRIMARY KEY (`vote_id`),
  KEY `RATING_OPTION_VOTE_OPTION_ID` (`option_id`),
  KEY `RATING_OPTION_VOTE_REVIEW_ID_REVIEW_REVIEW_ID` (`review_id`),
  CONSTRAINT `RATING_OPTION_VOTE_OPTION_ID_RATING_OPTION_OPTION_ID` FOREIGN KEY (`option_id`) REFERENCES `#__rating_option` (`option_id`) ON DELETE CASCADE,
  CONSTRAINT `RATING_OPTION_VOTE_REVIEW_ID_REVIEW_REVIEW_ID` FOREIGN KEY (`review_id`) REFERENCES `#__review` (`review_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rating option values';

DROP TABLE IF EXISTS `#__rating_option_vote_aggregated`;
CREATE TABLE `#__rating_option_vote_aggregated` (
  `primary_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Vote aggregation id',
  `rating_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Rating id',
  `entity_pk_value` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT 'Product id',
  `vote_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Vote dty',
  `vote_value_sum` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'General vote sum',
  `percent` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Vote percent',
  `percent_approved` smallint(6) DEFAULT '0' COMMENT 'Vote percent approved by admin',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store Id',
  PRIMARY KEY (`primary_id`),
  KEY `RATING_OPTION_VOTE_AGGREGATED_RATING_ID` (`rating_id`),
  KEY `RATING_OPTION_VOTE_AGGREGATED_STORE_ID` (`store_id`),
  CONSTRAINT `RATING_OPTION_VOTE_AGGREGATED_RATING_ID_RATING_RATING_ID` FOREIGN KEY (`rating_id`) REFERENCES `#__rating` (`rating_id`) ON DELETE CASCADE,
  CONSTRAINT `RATING_OPTION_VOTE_AGGREGATED_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rating vote aggregated';

DROP TABLE IF EXISTS `#__rating_store`;
CREATE TABLE `#__rating_store` (
  `rating_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Rating id',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store id',
  PRIMARY KEY (`rating_id`,`store_id`),
  KEY `RATING_STORE_STORE_ID` (`store_id`),
  CONSTRAINT `RATING_STORE_RATING_ID_RATING_RATING_ID` FOREIGN KEY (`rating_id`) REFERENCES `#__rating` (`rating_id`) ON DELETE CASCADE,
  CONSTRAINT `RATING_STORE_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rating Store';

DROP TABLE IF EXISTS `#__rating_title`;
CREATE TABLE `#__rating_title` (
  `rating_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Rating Id',
  `store_id` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT 'Store Id',
  `value` varchar(255) NOT NULL COMMENT 'Rating Label',
  PRIMARY KEY (`rating_id`,`store_id`),
  KEY `RATING_TITLE_STORE_ID` (`store_id`),
  CONSTRAINT `RATING_TITLE_RATING_ID_RATING_RATING_ID` FOREIGN KEY (`rating_id`) REFERENCES `#__rating` (`rating_id`) ON DELETE CASCADE,
  CONSTRAINT `RATING_TITLE_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `#__store` (`store_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Rating Title';

SET FOREIGN_KEY_CHECKS=1;