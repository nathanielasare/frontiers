create database `frontiers`;

use `frontiers`;


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

