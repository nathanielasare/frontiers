create database `frontiers`;

use `frontiers`;

create table if not exists `sites`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`remarks` text,
`Creation_date`  datetime,
`active` tinyint,
PRIMARY KEY (`id`)
);

create table if not exists `office_locations`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`address` text,
`phone` text,
`website` varchar(50),
`email` varchar(50),
`logo` varchar(50),
`Creation_date`  datetime,
`active` tinyint,
`remarks` text,
`site_id` int(11) unsigned NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `fk_offloc_site_id` FOREIGN KEY (`user_type_id`) REFERENCES `sites` (`id`)
);

/* Users Access Creating Rules */
-- User account must be generic or must belong to a certain office_location or site

create table if not exists `office_validation_rules`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
`office_location_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`hs_delimeter` varchar(10),
`hs_degits` varchar(12),
`hs_length` number(2),
`hs_sample` varchar(15),
`remarks` text,
`office_location_id` int(11) unsigned NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `fk_ofvalrul_usr_id` FOREIGN KEY (`office_location_id`) REFERENCES `office_locations` (`id`)
);


create table if not exists `office_settings`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`fcvr_signature_url` varchar(50),
`header_info` text,
`footer_info` text,
`signature_info` varchar(30),
`signature_info_2` varchar(30),
`remarks` text,
`office_location_id` int(11) unsigned NOT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `fk_usrtyp_usr_id` FOREIGN KEY (`office_location_id`) REFERENCES `office_locations` (`id`)
);


CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `users`(
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `active`  tinyint(1) DEFAULT NULL,
  `user_type_id` int(11) unsigned NOT NULL,
  `user_photo_url` varchar(50) DEFAULT NULL,
  `dob` datetime,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usrtyp_usr_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`)
);


CREATE TABLE IF NOT EXISTS `user_credentials` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usrcrd_usr_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);


CREATE TABLE IF NOT EXISTS `contact_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


CREATE TABLE IF NOT EXISTS `user_contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `contact_type_id` int(11) unsigned NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usrcnt_usr_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`),
  CONSTRAINT `fk_usrcnt_usr_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);

/* Incomplete base on Controller and the methods*/
CREATE TABLE IF NOT EXISTS `user_access_levels` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usrcnt_usr_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`),
  CONSTRAINT `fk_usrcnt_usr_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
);


/* Countries */
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(5)
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Reception
/* Creating Importers Profile */
CREATE TABLE IF NOT EXISTS `importers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `tin_number` varchar(50),
  `country_id` int(11) unsigned NOT NULL,
  `office_location_id` int(11) unsigned NOT NULL,
  `logo` varchar(20) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_imp_cntry_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  CONSTRAINT `fk_imp_offloc_id` FOREIGN KEY (`office_location_id`) REFERENCES `office_locations` (`id`)
);

/* CRMS Rules */

CREATE TABLE IF NOT EXISTS `importer_contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `website` varchar(20) DEFAULT NULL,
  `importer_id` int(11) unsigned NOT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_impcnts_imp_id` FOREIGN KEY (`importer_id`) REFERENCES `importers` (`id`)
);


CREATE TABLE IF NOT EXISTS `importer_addresses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `importer_id` int(11) unsigned NOT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_impaddr_imp_id` FOREIGN KEY (`importer_id`) REFERENCES `importers` (`id`)
);

-- Sample table to create other tables;
CREATE TABLE IF NOT EXISTS `table_name` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `contact_type_id` int(11) unsigned NOT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_table_name_id` FOREIGN KEY (`utable_name_id`) REFERENCES `table_name` (`id`)
);


/* Submission */
/*
Importer Name
Invoice Number
received Date

*/

CREATE TABLE IF NOT EXISTS `table_name` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `contact_type_id` int(11) unsigned NOT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_usrcnt_usr_id` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`id`)
);



/* Collection */
/*
idfNumber
Document Types
No Of Patials
submit Location ID

Copy Collected by
Copy Contact Address
Copy Contact Number
Copy Collected Date


Original Collected by
Original Copy Contact Address
Original Copy Contact Number
Original Collected Date

Paymentsid
*/