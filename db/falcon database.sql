CREATE DATABASE  IF NOT EXISTS `falcon` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `falcon`;
-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: falcon
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses_types`
--

DROP TABLE IF EXISTS `addresses_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `addressName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses_types`
--

LOCK TABLES `addresses_types` WRITE;
/*!40000 ALTER TABLE `addresses_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `domainName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (2,'user1','user1','user1@mail.com','user','user2','demo.falcon.com');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins_has_issue_types`
--

DROP TABLE IF EXISTS `admins_has_issue_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins_has_issue_types` (
  `admins_id` int NOT NULL,
  `issue_types_id` int NOT NULL,
  PRIMARY KEY (`admins_id`,`issue_types_id`),
  KEY `fk_admins_has_issue_types_issue_types1_idx` (`issue_types_id`),
  KEY `fk_admins_has_issue_types_admins1_idx` (`admins_id`),
  CONSTRAINT `fk_admins_has_issue_types_admins1` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`id`),
  CONSTRAINT `fk_admins_has_issue_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins_has_issue_types`
--

LOCK TABLES `admins_has_issue_types` WRITE;
/*!40000 ALTER TABLE `admins_has_issue_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins_has_issue_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alert`
--

DROP TABLE IF EXISTS `alert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alert` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `minimumIssuesCreatedPerHour` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alert_property1_idx` (`property_id`),
  CONSTRAINT `fk_alert_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alert`
--

LOCK TABLES `alert` WRITE;
/*!40000 ALTER TABLE `alert` DISABLE KEYS */;
/*!40000 ALTER TABLE `alert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients_companies`
--

DROP TABLE IF EXISTS `clients_companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients_companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companyName` varchar(45) DEFAULT NULL,
  `webAddress` varchar(45) DEFAULT NULL,
  `notes` text,
  `streetNumber` varchar(45) DEFAULT NULL,
  `streetName` varchar(45) DEFAULT NULL,
  `streetType` varchar(45) DEFAULT NULL,
  `street_types_id` int NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `buildingNumber` varchar(45) DEFAULT NULL,
  `mainPhone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clients_companies_street_types1_idx` (`street_types_id`),
  KEY `fk_clients_companies_states1_idx` (`states_id`),
  CONSTRAINT `fk_clients_companies_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`),
  CONSTRAINT `fk_clients_companies_street_types1` FOREIGN KEY (`street_types_id`) REFERENCES `street_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients_companies`
--

LOCK TABLES `clients_companies` WRITE;
/*!40000 ALTER TABLE `clients_companies` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients_companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `devices` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companies_id` int NOT NULL,
  `status` tinyint DEFAULT NULL,
  `registered` varchar(45) DEFAULT NULL,
  `last Login` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `deviceID` varchar(255) DEFAULT NULL,
  `carrierName` varchar(45) DEFAULT NULL,
  `activationHistory` varchar(45) DEFAULT NULL,
  `friendlyName` varchar(45) DEFAULT NULL,
  `userZebraPrinter` tinyint DEFAULT NULL,
  `requireGPS` tinyint DEFAULT NULL,
  `userAutoFocus` tinyint DEFAULT NULL,
  `barcodeScanner` tinyint DEFAULT NULL,
  `active` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_devices_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_devices_companies1` FOREIGN KEY (`companies_id`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email` (
  `companies_id` int NOT NULL AUTO_INCREMENT,
  `fromEmailAddressNewOrder` varchar(45) DEFAULT NULL,
  `fromEmailAddressNewIssue` varchar(45) DEFAULT NULL,
  `fromEmailAddressAppeals` varchar(45) DEFAULT NULL,
  `SystemEmailNotification` varchar(45) DEFAULT NULL,
  KEY `fk_table1_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_table1_companies1` FOREIGN KEY (`companies_id`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `general`
--

DROP TABLE IF EXISTS `general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `general` (
  `id` int NOT NULL AUTO_INCREMENT,
  `system_id` int NOT NULL,
  `localUrl` varchar(45) DEFAULT NULL,
  `hideHomePageMenuBar` tinyint DEFAULT NULL,
  `homePageMenuLinkName` varchar(45) DEFAULT NULL,
  `returnURLonLogout` varchar(45) DEFAULT NULL,
  `dispachPhoneNumber` varchar(45) DEFAULT NULL,
  `dispachPhoenNumberGuards` varchar(45) DEFAULT NULL,
  `timeZone` varchar(45) DEFAULT NULL,
  `contactCompanyName` varchar(45) DEFAULT NULL,
  `contactAddress` int DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int NOT NULL,
  `contactEmail` varchar(45) DEFAULT NULL,
  `contactPhoneNumber` varchar(45) DEFAULT NULL,
  `handheldPhotoTimestampText` varchar(45) DEFAULT NULL,
  `renderHomePageAsHTMLMarkup` tinyint DEFAULT NULL,
  `IncludeArrivals/DeparturesInDAR` tinyint DEFAULT NULL,
  `HomePageMessage` text,
  `MobileDeviceLoginMessage` varchar(45) DEFAULT NULL,
  `hideDropDownCitySelector` tinyint DEFAULT NULL,
  `propertyFindExampleText` text,
  `externalUrlLinks` text,
  PRIMARY KEY (`id`),
  KEY `fk_general_system1_idx` (`system_id`),
  CONSTRAINT `fk_general_system1` FOREIGN KEY (`system_id`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `general`
--

LOCK TABLES `general` WRITE;
/*!40000 ALTER TABLE `general` DISABLE KEYS */;
/*!40000 ALTER TABLE `general` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_types`
--

DROP TABLE IF EXISTS `issue_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issue_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `issueTypeName` varchar(45) DEFAULT NULL,
  `issueDescription` text,
  `issueFee` double DEFAULT NULL,
  `issueLevel` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_types`
--

LOCK TABLES `issue_types` WRITE;
/*!40000 ALTER TABLE `issue_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_types_has_issues_types`
--

DROP TABLE IF EXISTS `issue_types_has_issues_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issue_types_has_issues_types` (
  `issue_types_id` int NOT NULL,
  `issues_types_id` int NOT NULL,
  PRIMARY KEY (`issue_types_id`,`issues_types_id`),
  KEY `fk_issue_types_has_issues_types_issues_types1_idx` (`issues_types_id`),
  KEY `fk_issue_types_has_issues_types_issue_types1_idx` (`issue_types_id`),
  CONSTRAINT `fk_issue_types_has_issues_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  CONSTRAINT `fk_issue_types_has_issues_types_issues_types1` FOREIGN KEY (`issues_types_id`) REFERENCES `issues_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_types_has_issues_types`
--

LOCK TABLES `issue_types_has_issues_types` WRITE;
/*!40000 ALTER TABLE `issue_types_has_issues_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_types_has_issues_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issue_types_options`
--

DROP TABLE IF EXISTS `issue_types_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issue_types_options` (
  `id` int NOT NULL AUTO_INCREMENT,
  `issue_types_id` int NOT NULL,
  `isActiveIssue` tinyint DEFAULT NULL,
  `displayForDispach` tinyint DEFAULT NULL,
  `displayOnHandheld` tinyint DEFAULT NULL,
  `displayForWebUsers` tinyint DEFAULT NULL,
  `autoCloseIssue` tinyint DEFAULT NULL,
  `restrictToCheckpointOnly` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_issue_types_options_issue_types1_idx` (`issue_types_id`),
  CONSTRAINT `fk_issue_types_options_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue_types_options`
--

LOCK TABLES `issue_types_options` WRITE;
/*!40000 ALTER TABLE `issue_types_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `issue_types_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `issues_types`
--

DROP TABLE IF EXISTS `issues_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `issues_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `issueTypeName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues_types`
--

LOCK TABLES `issues_types` WRITE;
/*!40000 ALTER TABLE `issues_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `issues_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `locationName` varchar(45) DEFAULT NULL,
  `locationDescription` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companies_id` int NOT NULL,
  `mainPageLogo` varchar(45) DEFAULT NULL,
  `reportHeaderLogo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logos_companies1_idx` (`companies_id`),
  CONSTRAINT `fk_logos_companies1` FOREIGN KEY (`companies_id`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logos`
--

LOCK TABLES `logos` WRITE;
/*!40000 ALTER TABLE `logos` DISABLE KEYS */;
/*!40000 ALTER TABLE `logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notification` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `sendMeDailyMissedCheckpointReport` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notification_users1_idx` (`users_id`),
  CONSTRAINT `fk_notification_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parking_setup`
--

DROP TABLE IF EXISTS `parking_setup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parking_setup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `maximumPermitsPerUnit` int DEFAULT NULL,
  `permitSellCost` int DEFAULT NULL,
  `cash/checkPremitCode` varchar(45) DEFAULT NULL,
  `freePremitCode` varchar(45) DEFAULT NULL,
  `maxLengthInDaysTempPermit` varchar(45) DEFAULT NULL,
  `maxTempPermitsPerUnitPerMonth` int DEFAULT NULL,
  `parking_setupcol` int DEFAULT NULL,
  `sellParkingPermits` tinyint DEFAULT NULL,
  `userVirtualPermit` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_parking_setup_property1_idx` (`property_id`),
  CONSTRAINT `fk_parking_setup_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking_setup`
--

LOCK TABLES `parking_setup` WRITE;
/*!40000 ALTER TABLE `parking_setup` DISABLE KEYS */;
/*!40000 ALTER TABLE `parking_setup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parking_zones`
--

DROP TABLE IF EXISTS `parking_zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parking_zones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parking_setup_id` int NOT NULL,
  `parkingZoneName` varchar(45) DEFAULT NULL,
  `parkingZoneDescription` text,
  PRIMARY KEY (`id`),
  KEY `fk_parking_zones_parking_setup1_idx` (`parking_setup_id`),
  CONSTRAINT `fk_parking_zones_parking_setup1` FOREIGN KEY (`parking_setup_id`) REFERENCES `parking_setup` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parking_zones`
--

LOCK TABLES `parking_zones` WRITE;
/*!40000 ALTER TABLE `parking_zones` DISABLE KEYS */;
/*!40000 ALTER TABLE `parking_zones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone_numbers`
--

DROP TABLE IF EXISTS `phone_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phone_numbers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `phoneNumberType` varchar(45) DEFAULT NULL,
  `displayInHandheld` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_phone_numbers_property1_idx` (`property_id`),
  CONSTRAINT `fk_phone_numbers_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_numbers`
--

LOCK TABLES `phone_numbers` WRITE;
/*!40000 ALTER TABLE `phone_numbers` DISABLE KEYS */;
/*!40000 ALTER TABLE `phone_numbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property` (
  `id` int NOT NULL AUTO_INCREMENT,
  `propertyName` varchar(45) DEFAULT NULL,
  `propertyCode` varchar(45) DEFAULT NULL,
  `webAddress` varchar(45) DEFAULT NULL,
  `management Company` int NOT NULL,
  `primaryAddress` varchar(45) DEFAULT NULL,
  `billingAddress` varchar(45) DEFAULT NULL,
  `propertyNotes/PostOrders` text,
  `inCustomGroups` text,
  `securityProgram` tinyint DEFAULT NULL,
  `maintananceProgram` tinyint DEFAULT NULL,
  `parkingProgram` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_companies1_idx` (`management Company`),
  CONSTRAINT `fk_property_companies1` FOREIGN KEY (`management Company`) REFERENCES `admins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_addresses`
--

DROP TABLE IF EXISTS `property_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_addresses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `streetNumber` varchar(45) DEFAULT NULL,
  `streetName` varchar(45) DEFAULT NULL,
  `streetType` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `property_addressescol` varchar(45) DEFAULT NULL,
  `states_id` int NOT NULL,
  `zip` int DEFAULT NULL,
  `county` varchar(45) DEFAULT NULL,
  `buildingNumber` varchar(45) DEFAULT NULL,
  `addressType` varchar(45) DEFAULT NULL,
  `property_addressescol1` varchar(45) DEFAULT NULL,
  `addresses_types_id` int NOT NULL,
  `GPSLongitude` varchar(45) DEFAULT NULL,
  `GPSLatitude` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_addresses_property1_idx` (`property_id`),
  KEY `fk_property_addresses_states1_idx` (`states_id`),
  KEY `fk_property_addresses_addresses_types1_idx` (`addresses_types_id`),
  CONSTRAINT `fk_property_addresses_addresses_types1` FOREIGN KEY (`addresses_types_id`) REFERENCES `addresses_types` (`id`),
  CONSTRAINT `fk_property_addresses_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  CONSTRAINT `fk_property_addresses_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_addresses`
--

LOCK TABLES `property_addresses` WRITE;
/*!40000 ALTER TABLE `property_addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_checkpoints`
--

DROP TABLE IF EXISTS `property_checkpoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_checkpoints` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `checkPointName` varchar(45) DEFAULT NULL,
  `checkPointLocation` varchar(45) DEFAULT NULL,
  `QR/NFCCodeValue` varchar(255) DEFAULT NULL,
  `property_addresses_id` int NOT NULL,
  `chckpointUnit` varchar(45) DEFAULT NULL,
  `checkpintIssueType` varchar(45) DEFAULT NULL,
  `autoCreateIssueType` tinyint DEFAULT NULL,
  `checkpointLastHint` varchar(45) DEFAULT NULL,
  `reportNote` varchar(45) DEFAULT NULL,
  `officerInstructions` varchar(45) DEFAULT NULL,
  `isActive` tinyint DEFAULT NULL,
  `allowKeepOpen` tinyint DEFAULT NULL,
  `requirePhoto` tinyint DEFAULT NULL,
  `propertyCheckpointscol` tinyint DEFAULT NULL,
  `reportIfMissed` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propertyCheckpoints_property1_idx` (`property_id`),
  KEY `fk_propertyCheckpoints_property_addresses1_idx` (`property_addresses_id`),
  CONSTRAINT `fk_propertyCheckpoints_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  CONSTRAINT `fk_propertyCheckpoints_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_checkpoints`
--

LOCK TABLES `property_checkpoints` WRITE;
/*!40000 ALTER TABLE `property_checkpoints` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_checkpoints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_documents`
--

DROP TABLE IF EXISTS `property_documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `documentName` varchar(45) DEFAULT NULL,
  `fileName` varchar(45) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  `documentDescription` varchar(45) DEFAULT NULL,
  `allowCustomersToView` varchar(45) DEFAULT NULL,
  `displayOnNewAction` varchar(45) DEFAULT NULL,
  `propertyDocumentscol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propertyDocuments_property1_idx` (`property_id`),
  CONSTRAINT `fk_propertyDocuments_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_documents`
--

LOCK TABLES `property_documents` WRITE;
/*!40000 ALTER TABLE `property_documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_geofance`
--

DROP TABLE IF EXISTS `property_geofance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_geofance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `geofanceName` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `geofanceRadius` varchar(45) DEFAULT NULL,
  `property_geofancecol` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_geofance_property1_idx` (`property_id`),
  CONSTRAINT `fk_property_geofance_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_geofance`
--

LOCK TABLES `property_geofance` WRITE;
/*!40000 ALTER TABLE `property_geofance` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_geofance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_group`
--

DROP TABLE IF EXISTS `property_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `groupName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_group`
--

LOCK TABLES `property_group` WRITE;
/*!40000 ALTER TABLE `property_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_group_has_property`
--

DROP TABLE IF EXISTS `property_group_has_property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_group_has_property` (
  `property_group_id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  PRIMARY KEY (`property_group_id`,`property_id`),
  KEY `fk_property_group_has_property_property1_idx` (`property_id`),
  KEY `fk_property_group_has_property_property_group1_idx` (`property_group_id`),
  CONSTRAINT `fk_property_group_has_property_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`),
  CONSTRAINT `fk_property_group_has_property_property_group1` FOREIGN KEY (`property_group_id`) REFERENCES `property_group` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_group_has_property`
--

LOCK TABLES `property_group_has_property` WRITE;
/*!40000 ALTER TABLE `property_group_has_property` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_group_has_property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_has_issue_types`
--

DROP TABLE IF EXISTS `property_has_issue_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_has_issue_types` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `issue_types_id` int NOT NULL,
  PRIMARY KEY (`property_id`,`issue_types_id`),
  KEY `fk_property_has_issue_types_issue_types1_idx` (`issue_types_id`),
  KEY `fk_property_has_issue_types_property1_idx` (`property_id`),
  CONSTRAINT `fk_property_has_issue_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  CONSTRAINT `fk_property_has_issue_types_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_has_issue_types`
--

LOCK TABLES `property_has_issue_types` WRITE;
/*!40000 ALTER TABLE `property_has_issue_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_has_issue_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_has_locations`
--

DROP TABLE IF EXISTS `property_has_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_has_locations` (
  `property_id` int NOT NULL AUTO_INCREMENT,
  `locations_id` int NOT NULL,
  PRIMARY KEY (`property_id`,`locations_id`),
  KEY `fk_property_has_locations_locations1_idx` (`locations_id`),
  KEY `fk_property_has_locations_property1_idx` (`property_id`),
  CONSTRAINT `fk_property_has_locations_locations1` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`),
  CONSTRAINT `fk_property_has_locations_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_has_locations`
--

LOCK TABLES `property_has_locations` WRITE;
/*!40000 ALTER TABLE `property_has_locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_has_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_photo`
--

DROP TABLE IF EXISTS `property_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_photo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `path` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_propertyPhoto_property1_idx` (`property_id`),
  CONSTRAINT `fk_propertyPhoto_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_photo`
--

LOCK TABLES `property_photo` WRITE;
/*!40000 ALTER TABLE `property_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_tours`
--

DROP TABLE IF EXISTS `property_tours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_tours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_id` int NOT NULL,
  `tourName` varchar(45) DEFAULT NULL,
  `tourDescription` text,
  `tourStartTime` varchar(45) DEFAULT NULL,
  `tourEndTime` varchar(45) DEFAULT NULL,
  `allowManualSubmission` tinyint DEFAULT NULL,
  `isActiveTour` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_property_tours_property1_idx` (`property_id`),
  CONSTRAINT `fk_property_tours_property1` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_tours`
--

LOCK TABLES `property_tours` WRITE;
/*!40000 ALTER TABLE `property_tours` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_tours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property_tours_has_property_checkpoints`
--

DROP TABLE IF EXISTS `property_tours_has_property_checkpoints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `property_tours_has_property_checkpoints` (
  `property_tours_id` int NOT NULL,
  `property_checkpoints_id` int NOT NULL,
  `order` int DEFAULT NULL,
  PRIMARY KEY (`property_tours_id`,`property_checkpoints_id`),
  KEY `fk_property_tours_has_property_checkpoints_property_checkpo_idx` (`property_checkpoints_id`),
  KEY `fk_property_tours_has_property_checkpoints_property_tours1_idx` (`property_tours_id`),
  CONSTRAINT `fk_property_tours_has_property_checkpoints_property_checkpoin1` FOREIGN KEY (`property_checkpoints_id`) REFERENCES `property_checkpoints` (`id`),
  CONSTRAINT `fk_property_tours_has_property_checkpoints_property_tours1` FOREIGN KEY (`property_tours_id`) REFERENCES `property_tours` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property_tours_has_property_checkpoints`
--

LOCK TABLES `property_tours_has_property_checkpoints` WRITE;
/*!40000 ALTER TABLE `property_tours_has_property_checkpoints` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_tours_has_property_checkpoints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `securityroles`
--

DROP TABLE IF EXISTS `securityroles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `securityroles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `roleName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `securityroles`
--

LOCK TABLES `securityroles` WRITE;
/*!40000 ALTER TABLE `securityroles` DISABLE KEYS */;
/*!40000 ALTER TABLE `securityroles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `states` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `shortName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `street_types`
--

DROP TABLE IF EXISTS `street_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `street_types` (
  `id` int NOT NULL AUTO_INCREMENT,
  `streetType` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `street_types`
--

LOCK TABLES `street_types` WRITE;
/*!40000 ALTER TABLE `street_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `street_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taskdaysofweek`
--

DROP TABLE IF EXISTS `taskdaysofweek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `taskdaysofweek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sunday` tinyint DEFAULT NULL,
  `monday` tinyint DEFAULT NULL,
  `tuesday` tinyint DEFAULT NULL,
  `wednesday` tinyint DEFAULT NULL,
  `thursday` tinyint DEFAULT NULL,
  `friday` tinyint DEFAULT NULL,
  `saturday` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taskdaysofweek`
--

LOCK TABLES `taskdaysofweek` WRITE;
/*!40000 ALTER TABLE `taskdaysofweek` DISABLE KEYS */;
/*!40000 ALTER TABLE `taskdaysofweek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `taskName` varchar(45) DEFAULT NULL,
  `issue_types_id` int NOT NULL,
  `taskDescription` text,
  `property_addresses_id` int NOT NULL,
  `unitNumber` int DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `taskTime` varchar(45) DEFAULT NULL,
  `taskDaysOfWeek_id` int NOT NULL,
  `alertIfLeftOpen` int DEFAULT NULL,
  `disableTaskAfterDate` varchar(45) DEFAULT NULL,
  `lastIssuedDate` varchar(45) DEFAULT NULL,
  `taskCurrentStatus` varchar(45) DEFAULT NULL,
  `isActive` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tasks_issue_types1_idx` (`issue_types_id`),
  KEY `fk_tasks_property_addresses1_idx` (`property_addresses_id`),
  KEY `fk_tasks_taskDaysOfWeek1_idx` (`taskDaysOfWeek_id`),
  CONSTRAINT `fk_tasks_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  CONSTRAINT `fk_tasks_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`),
  CONSTRAINT `fk_tasks_taskDaysOfWeek1` FOREIGN KEY (`taskDaysOfWeek_id`) REFERENCES `taskdaysofweek` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tourdaysofweek`
--

DROP TABLE IF EXISTS `tourdaysofweek`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tourdaysofweek` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_tours_id` int NOT NULL,
  `sunday` tinyint DEFAULT NULL,
  `monday` tinyint DEFAULT NULL,
  `tuesday` tinyint DEFAULT NULL,
  `wednesday` tinyint DEFAULT NULL,
  `thursday` tinyint DEFAULT NULL,
  `friday` tinyint DEFAULT NULL,
  `saturday` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tourDaysOfWeek_property_tours1_idx` (`property_tours_id`),
  CONSTRAINT `fk_tourDaysOfWeek_property_tours1` FOREIGN KEY (`property_tours_id`) REFERENCES `property_tours` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tourdaysofweek`
--

LOCK TABLES `tourdaysofweek` WRITE;
/*!40000 ALTER TABLE `tourdaysofweek` DISABLE KEYS */;
/*!40000 ALTER TABLE `tourdaysofweek` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companies_id` int NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `emailAddress` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `userscol` varchar(45) DEFAULT NULL,
  `securityRoles_id` int NOT NULL,
  `maintananceEmail` varchar(45) DEFAULT NULL,
  `timeCardID` varchar(45) DEFAULT NULL,
  `cellNumber` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `activeUser` tinyint DEFAULT NULL,
  `allowSecurityAssignments` tinyint DEFAULT NULL,
  `allowParkingAssignments` tinyint DEFAULT NULL,
  `allowMaintenanceAssignments` tinyint DEFAULT NULL,
  `allowUserToviewGPSData` tinyint DEFAULT NULL,
  `allowEmails` tinyint DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_companies1_idx` (`companies_id`),
  KEY `fk_users_securityRoles1_idx` (`securityRoles_id`),
  KEY `fk_users_states1_idx` (`states_id`),
  CONSTRAINT `fk_users_companies1` FOREIGN KEY (`companies_id`) REFERENCES `admins` (`id`),
  CONSTRAINT `fk_users_securityRoles1` FOREIGN KEY (`securityRoles_id`) REFERENCES `securityroles` (`id`),
  CONSTRAINT `fk_users_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_notification`
--

DROP TABLE IF EXISTS `users_notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_notification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NOT NULL,
  `send meADailyMissedCheckpointReport` tinyint DEFAULT NULL,
  `propertyIssuesPerHourFallBelowThreshold` tinyint DEFAULT NULL,
  `overdueTasks` tinyint DEFAULT NULL,
  `alertWhenUnableToSendTourStartMessages` tinyint DEFAULT NULL,
  `alertWhenATourExpiresOrIsFinishedWithoutAllCheckpointsBeingHit` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_notification_users1_idx` (`users_id`),
  CONSTRAINT `fk_users_notification_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_notification`
--

LOCK TABLES `users_notification` WRITE;
/*!40000 ALTER TABLE `users_notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_notification_has_issue_types`
--

DROP TABLE IF EXISTS `users_notification_has_issue_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_notification_has_issue_types` (
  `users_notification_id` int NOT NULL,
  `issue_types_id` int NOT NULL,
  `never` tinyint DEFAULT NULL,
  `onlyUrgent` tinyint DEFAULT NULL,
  `anytim` tinyint DEFAULT NULL,
  PRIMARY KEY (`users_notification_id`,`issue_types_id`),
  KEY `fk_users_notification_has_issue_types_issue_types1_idx` (`issue_types_id`),
  KEY `fk_users_notification_has_issue_types_users_notification1_idx` (`users_notification_id`),
  CONSTRAINT `fk_users_notification_has_issue_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  CONSTRAINT `fk_users_notification_has_issue_types_users_notification1` FOREIGN KEY (`users_notification_id`) REFERENCES `users_notification` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_notification_has_issue_types`
--

LOCK TABLES `users_notification_has_issue_types` WRITE;
/*!40000 ALTER TABLE `users_notification_has_issue_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_notification_has_issue_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'falcon'
--

--
-- Dumping routines for database 'falcon'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-13 19:20:21
