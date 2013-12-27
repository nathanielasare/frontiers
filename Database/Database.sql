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



  /****** Script for SelectTopNRows command from SSMS  ******/
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