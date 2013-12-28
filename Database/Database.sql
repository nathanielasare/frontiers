create database `frontiers`;

use `frontiers`;

/* Documents Types Tales: Proforma */
create table if not exists `document_types`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
PRIMARY KEY (`id`)
);

/* Documents Types Tales: Proforma */
create table if not exists `submit_Locations`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
PRIMARY KEY (`id`)
);

create table if not exists `users`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
PRIMARY KEY (`id`)
);

create table if not exists `sites`(
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`name` VARCHAR(50),
`Creation_date`  datetime,
`active` tinyint,
PRIMARY KEY (`id`)
);

create table if not exists `idf_submissions`(
`id`  int(11) unsigned NOT NULL AUTO_INCREMENT,
`Creation_date`  datetime,
`idf_Received_date` VARCHAR(50) DEFAULT NULL,
`idf_number` VARCHAR(50) DEFAULT NULL,
`document_type_id` int(11) unsigned NOT NULL,
`submit_Location_id` int(11) unsigned NOT NULL,
`no_of_partials` VARCHAR(50) DEFAULT NULL,
`importer` VARCHAR(30) DEFAULT NULL,
`InvoiceNo` VARCHAR(50) DEFAULT NULL,
`user_id`   int(11) unsigned NOT NULL ,
`site_id` int(11) unsigned NOT NULL ,
`remarks` VARCHAR(50) DEFAULT NULL,
PRIMARY KEY (`id`),
CONSTRAINT `fk_idfs_docT_id` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`),
CONSTRAINT `fk_idfs_subloc_id` FOREIGN KEY (`submit_Location_id`) REFERENCES `submit_Locations` (`id`),
CONSTRAINT `fk_idfs_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
CONSTRAINT `fk_idfs_site_id` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`)
);

/*

   Script for SelectTopNRows command from SSMS
SELECT TOP 1000 [SubmissionID]
      ,[CreationDate]
      ,[IDFDateRecvd]
      ,[IDFNumber]
      ,[IDFDocTypeID]
      ,[NoOfPartials]
      ,[SubmitLocationID]
      ,[UserID]
      ,[Importer]
      ,[InvoiceNo]
  FROM [AfriLinkDB].[dbo].[IDFSubmission]

  /*
      ,[PartitionDate]
      ,[LastUpdateUserID]
      ,[FC_ID]
      ,[BaseDoc]
      ,[DeliveryNo]
      ,[ParentDocID]
      ,[Pulled]
      ,[VO_ID]
  */

  /*IDF Collection*/
  /*
  SELECT TOP 1000 [CollectionID]
      ,[CreationDate]
      ,[ImportID]
      ,[VersionNo]
      ,[UserID]
      ,[DispatchUserID]
      ,[DispatchDate]
      ,[CollectedBy]
      ,[CopyDispatchUserID]
      ,[CopyCollectDate]
      ,[CopyCollectedBy]
  FROM [AfriLinkDB].[dbo].[FCVRCollection]

  DefintionTable
  */

  /* Generated From Source */


-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE IF NOT EXISTS `document_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `name`, `Creation_date`, `active`) VALUES
(1, 'Proforma', '2013-12-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `idf_submissions`
--

CREATE TABLE IF NOT EXISTS `idf_submissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Creation_date` datetime DEFAULT NULL,
  `idf_Received_date` varchar(50) DEFAULT NULL,
  `idf_number` varchar(50) DEFAULT NULL,
  `document_type_id` int(11) unsigned NOT NULL,
  `submit_Location_id` int(11) unsigned NOT NULL,
  `no_of_partials` varchar(50) DEFAULT NULL,
  `importer` varchar(30) DEFAULT NULL,
  `InvoiceNo` varchar(50) DEFAULT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `site_id` int(11) unsigned NOT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idfs_docT_id` (`document_type_id`),
  KEY `fk_idfs_subloc_id` (`submit_Location_id`),
  KEY `fk_idfs_user_id` (`user_id`),
  KEY `fk_idfs_site_id` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `Creation_date`, `active`) VALUES
(1, 'Guinea Bissau', '2013-12-28 00:09:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `submit_locations`
--

CREATE TABLE IF NOT EXISTS `submit_locations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `submit_locations`
--

INSERT INTO `submit_locations` (`id`, `name`, `Creation_date`, `active`) VALUES
(1, 'Gabu', '2013-12-28 00:09:00', 1),
(2, 'Bissua', '2013-12-28 00:10:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `Creation_date` datetime DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `idf_submissions`
--
ALTER TABLE `idf_submissions`
  ADD CONSTRAINT `fk_idfs_docT_id` FOREIGN KEY (`document_type_id`) REFERENCES `document_types` (`id`),
  ADD CONSTRAINT `fk_idfs_site_id` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`),
  ADD CONSTRAINT `fk_idfs_subloc_id` FOREIGN KEY (`submit_Location_id`) REFERENCES `submit_locations` (`id`),
  ADD CONSTRAINT `fk_idfs_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
