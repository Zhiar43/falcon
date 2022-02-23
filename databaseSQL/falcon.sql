-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 23, 2022 at 08:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `falcon`
--
-- -----------------------------------------------------
-- Schema falcon
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `falcon` ;

-- -----------------------------------------------------
-- Schema falcon
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `falcon` DEFAULT CHARACTER SET utf8 ;
USE `falcon` ;

-- --------------------------------------------------------

--
-- Table structure for table `addresses_types`
--

CREATE TABLE `addresses_types` (
  `id` int(11) NOT NULL,
  `addressName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `minimumIssuesCreatedPerHour` int(11) DEFAULT NULL,
  `alert_container` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients_companies`
--

CREATE TABLE `clients_companies` (
  `id` int(11) NOT NULL,
  `companyName` varchar(45) DEFAULT NULL,
  `webAddress` varchar(45) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `streetNumber` varchar(45) DEFAULT NULL,
  `streetName` varchar(45) DEFAULT NULL,
  `streetType` varchar(45) DEFAULT NULL,
  `street_types_id` int(11) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `buildingNumber` varchar(45) DEFAULT NULL,
  `mainPhone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients_companies_has_customers`
--

CREATE TABLE `clients_companies_has_customers` (
  `clients_companies_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients_companies_has_employees`
--

CREATE TABLE `clients_companies_has_employees` (
  `clients_companies_id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `emailAddress` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `securityRoles_id` int(11) NOT NULL,
  `maintananceEmail` varchar(45) DEFAULT NULL,
  `timeCardID` varchar(45) DEFAULT NULL,
  `cellNumber` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `allowSecurityAssignments` tinyint(4) DEFAULT NULL,
  `allowParkingAssignments` tinyint(4) DEFAULT NULL,
  `allowMaintenanceAssignments` tinyint(4) DEFAULT NULL,
  `allowUserToviewGPSData` tinyint(4) DEFAULT NULL,
  `allowEmails` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `lastLoginDate` datetime DEFAULT NULL,
  `managmentCompany` int(11) DEFAULT NULL,
  `users_notification_id` int(11) DEFAULT NULL,
  `customer_roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_roles`
--

CREATE TABLE `customer_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `webAccess` tinyint(4) DEFAULT NULL,
  `mobileLogin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `registered` varchar(45) DEFAULT NULL,
  `last Login` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `deviceID` varchar(255) DEFAULT NULL,
  `carrierName` varchar(45) DEFAULT NULL,
  `activationHistory` varchar(45) DEFAULT NULL,
  `friendlyName` varchar(45) DEFAULT NULL,
  `userZebraPrinter` tinyint(4) DEFAULT NULL,
  `requireGPS` tinyint(4) DEFAULT NULL,
  `userAutoFocus` tinyint(4) DEFAULT NULL,
  `barcodeScanner` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` varchar(45) NOT NULL,
  `fromEmailAddressNewOrder` varchar(45) DEFAULT NULL,
  `fromEmailAddressNewIssue` varchar(45) DEFAULT NULL,
  `fromEmailAddressAppeals` varchar(45) DEFAULT NULL,
  `SystemEmailNotification` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `emailAddress` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `securityRoles_id` int(11) NOT NULL,
  `maintananceEmail` varchar(45) DEFAULT NULL,
  `timeCardID` varchar(45) DEFAULT NULL,
  `cellNumber` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `allowSecurityAssignments` tinyint(4) DEFAULT NULL,
  `allowParkingAssignments` tinyint(4) DEFAULT NULL,
  `allowMaintenanceAssignments` tinyint(4) DEFAULT NULL,
  `allowUserToviewGPSData` tinyint(4) DEFAULT NULL,
  `allowEmails` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `lastLoginDate` datetime DEFAULT NULL,
  `managmentCompany` int(11) DEFAULT NULL,
  `employee_roles_id` int(11) DEFAULT NULL,
  `users_notification_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee_roles`
--

CREATE TABLE `employee_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `webAccess` tinyint(4) DEFAULT NULL,
  `mobileLogin` tinyint(4) DEFAULT NULL,
  `lockProperty` tinyint(4) DEFAULT NULL,
  `addUsers` tinyint(4) DEFAULT NULL,
  `submitIssue` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `localUrl` varchar(45) DEFAULT NULL,
  `hideHomePageMenuBar` tinyint(4) DEFAULT NULL,
  `homePageMenuLinkName` varchar(45) DEFAULT NULL,
  `returnURLonLogout` varchar(45) DEFAULT NULL,
  `dispachPhoneNumber` varchar(45) DEFAULT NULL,
  `dispachPhoenNumberGuards` varchar(45) DEFAULT NULL,
  `timeZone` varchar(45) DEFAULT NULL,
  `contactCompanyName` varchar(45) DEFAULT NULL,
  `contactAddress` int(11) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `contactEmail` varchar(45) DEFAULT NULL,
  `contactPhoneNumber` varchar(45) DEFAULT NULL,
  `handheldPhotoTimestampText` varchar(45) DEFAULT NULL,
  `renderHomePageAsHTMLMarkup` tinyint(4) DEFAULT NULL,
  `IncludeArrivals/DeparturesInDAR` tinyint(4) DEFAULT NULL,
  `HomePageMessage` text DEFAULT NULL,
  `MobileDeviceLoginMessage` varchar(45) DEFAULT NULL,
  `hideDropDownCitySelector` tinyint(4) DEFAULT NULL,
  `propertyFindExampleText` text DEFAULT NULL,
  `externalUrlLinks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_has_properties`
--

CREATE TABLE `group_has_properties` (
  `property_id` int(11) NOT NULL,
  `property_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `properties_id` int(11) NOT NULL,
  `issue_types_id` int(11) NOT NULL,
  `reportedDetail` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `reportedAddress` varchar(45) DEFAULT NULL,
  `approxOccurrenceTime` varchar(45) DEFAULT NULL,
  `property_addresses_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `assigned` timestamp NULL DEFAULT NULL,
  `ack` timestamp NULL DEFAULT NULL,
  `arrived` timestamp NULL DEFAULT NULL,
  `closed` tinyint(4) DEFAULT NULL,
  `createdBy` int(11) NOT NULL,
  `assignedTo` int(11) NOT NULL,
  `gpsLongitude` varchar(45) DEFAULT NULL,
  `gpsLatitude` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issues_photos`
--

CREATE TABLE `issues_photos` (
  `id` int(11) NOT NULL,
  `issues_id` int(11) NOT NULL,
  `photoURL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issues_sound`
--

CREATE TABLE `issues_sound` (
  `id` int(11) NOT NULL,
  `issues_id` int(11) NOT NULL,
  `soundURL` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issues_types`
--

CREATE TABLE `issues_types` (
  `id` int(11) NOT NULL,
  `issueTypeName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issue_types`
--

CREATE TABLE `issue_types` (
  `id` int(11) NOT NULL,
  `issueTypeName` varchar(45) DEFAULT NULL,
  `issueDescription` text DEFAULT NULL,
  `issueFee` double DEFAULT NULL,
  `issueLevel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issue_types_has_issues_types`
--

CREATE TABLE `issue_types_has_issues_types` (
  `issue_types_id` int(11) NOT NULL,
  `issues_types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `issue_types_options`
--

CREATE TABLE `issue_types_options` (
  `id` int(11) NOT NULL,
  `issue_types_id` int(11) NOT NULL,
  `isActiveIssue` tinyint(4) DEFAULT NULL,
  `displayForDispach` tinyint(4) DEFAULT NULL,
  `displayOnHandheld` tinyint(4) DEFAULT NULL,
  `displayForWebUsers` tinyint(4) DEFAULT NULL,
  `autoCloseIssue` tinyint(4) DEFAULT NULL,
  `restrictToCheckpointOnly` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `locationName` varchar(45) DEFAULT NULL,
  `locationDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `loginTimestamp` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `mainPageLogo` varchar(45) DEFAULT NULL,
  `reportHeaderLogo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `sendMeDailyMissedCheckpointReport` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parking_setup`
--

CREATE TABLE `parking_setup` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `maximumPermitsPerUnit` int(11) DEFAULT NULL,
  `permitSellCost` int(11) DEFAULT NULL,
  `cash/checkPremitCode` varchar(45) DEFAULT NULL,
  `freePremitCode` varchar(45) DEFAULT NULL,
  `maxLengthInDaysTempPermit` varchar(45) DEFAULT NULL,
  `maxTempPermitsPerUnitPerMonth` int(11) DEFAULT NULL,
  `parking_setupcol` int(11) DEFAULT NULL,
  `sellParkingPermits` tinyint(4) DEFAULT NULL,
  `userVirtualPermit` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parking_zones`
--

CREATE TABLE `parking_zones` (
  `id` int(11) NOT NULL,
  `parking_setup_id` int(11) NOT NULL,
  `parkingZoneName` varchar(45) DEFAULT NULL,
  `parkingZoneDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phone_numbers`
--

CREATE TABLE `phone_numbers` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `phoneNumberType` varchar(45) DEFAULT NULL,
  `displayInHandheld` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `propertyName` varchar(45) DEFAULT NULL,
  `propertyCode` varchar(45) DEFAULT NULL,
  `webAddress` varchar(45) DEFAULT NULL,
  `primaryAddress` varchar(45) DEFAULT NULL,
  `billingAddress` varchar(45) DEFAULT NULL,
  `propertyNotes/PostOrders` text DEFAULT NULL,
  `inCustomGroups` text DEFAULT NULL,
  `securityProgram` tinyint(4) DEFAULT NULL,
  `maintananceProgram` tinyint(4) DEFAULT NULL,
  `parkingProgram` tinyint(4) DEFAULT NULL,
  `clients_companies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_addresses`
--

CREATE TABLE `property_addresses` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `streetNumber` varchar(45) DEFAULT NULL,
  `streetName` varchar(45) DEFAULT NULL,
  `streetType` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `property_addressescol` varchar(45) DEFAULT NULL,
  `states_id` int(11) NOT NULL,
  `zip` int(11) DEFAULT NULL,
  `county` varchar(45) DEFAULT NULL,
  `buildingNumber` varchar(45) DEFAULT NULL,
  `addressType` varchar(45) DEFAULT NULL,
  `property_addressescol1` varchar(45) DEFAULT NULL,
  `addresses_types_id` int(11) NOT NULL,
  `GPSLongitude` varchar(45) DEFAULT NULL,
  `GPSLatitude` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_checkpoints`
--

CREATE TABLE `property_checkpoints` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `checkPointName` varchar(45) DEFAULT NULL,
  `checkPointLocation` varchar(45) DEFAULT NULL,
  `QR/NFCCodeValue` varchar(255) DEFAULT NULL,
  `property_addresses_id` int(11) NOT NULL,
  `chckpointUnit` varchar(45) DEFAULT NULL,
  `checkpintIssueType` varchar(45) DEFAULT NULL,
  `autoCreateIssueType` tinyint(4) DEFAULT NULL,
  `checkpointLastHint` varchar(45) DEFAULT NULL,
  `reportNote` varchar(45) DEFAULT NULL,
  `officerInstructions` varchar(45) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `allowKeepOpen` tinyint(4) DEFAULT NULL,
  `requirePhoto` tinyint(4) DEFAULT NULL,
  `propertyCheckpointscol` tinyint(4) DEFAULT NULL,
  `reportIfMissed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_documents`
--

CREATE TABLE `property_documents` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `documentName` varchar(45) DEFAULT NULL,
  `fileName` varchar(45) DEFAULT NULL,
  `path` varchar(45) DEFAULT NULL,
  `documentDescription` varchar(45) DEFAULT NULL,
  `allowCustomersToView` varchar(45) DEFAULT NULL,
  `displayOnNewAction` varchar(45) DEFAULT NULL,
  `propertyDocumentscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_geofance`
--

CREATE TABLE `property_geofance` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `geofanceName` varchar(45) DEFAULT NULL,
  `longitude` varchar(45) DEFAULT NULL,
  `geofanceRadius` varchar(45) DEFAULT NULL,
  `property_geofancecol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_group`
--

CREATE TABLE `property_group` (
  `id` int(11) NOT NULL,
  `groupName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_group_has_employees`
--

CREATE TABLE `property_group_has_employees` (
  `property_group_id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_has_issue_types`
--

CREATE TABLE `property_has_issue_types` (
  `property_id` int(11) NOT NULL,
  `issue_types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_has_locations`
--

CREATE TABLE `property_has_locations` (
  `property_id` int(11) NOT NULL,
  `locations_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_tours`
--

CREATE TABLE `property_tours` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `tourName` varchar(45) DEFAULT NULL,
  `tourDescription` text DEFAULT NULL,
  `tourStartTime` varchar(45) DEFAULT NULL,
  `tourEndTime` varchar(45) DEFAULT NULL,
  `allowManualSubmission` tinyint(4) DEFAULT NULL,
  `isActiveTour` tinyint(4) DEFAULT NULL,
  `tourDaysOfWeek_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `property_tours_has_property_checkpoints`
--

CREATE TABLE `property_tours_has_property_checkpoints` (
  `property_tours_id` int(11) NOT NULL,
  `property_checkpoints_id` int(11) NOT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `securityroles`
--

CREATE TABLE `securityroles` (
  `id` int(11) NOT NULL,
  `roleName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sent_email_history`
--

CREATE TABLE `sent_email_history` (
  `id` int(11) NOT NULL,
  `from` varchar(45) DEFAULT NULL,
  `destination` varchar(45) DEFAULT NULL,
  `body` varchar(45) DEFAULT NULL,
  `emailSent` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `shortName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `street_types`
--

CREATE TABLE `street_types` (
  `id` int(11) NOT NULL,
  `streetType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems`
--

CREATE TABLE `systems` (
  `id` int(11) NOT NULL,
  `general_id` int(11) NOT NULL,
  `devices_id` int(11) NOT NULL,
  `logos_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `email_id` varchar(45) NOT NULL,
  `domainName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems_has_customers`
--

CREATE TABLE `systems_has_customers` (
  `systems_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems_has_employees`
--

CREATE TABLE `systems_has_employees` (
  `systems_id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems_has_properties`
--

CREATE TABLE `systems_has_properties` (
  `systems_id` int(11) NOT NULL,
  `properties_id` int(11) NOT NULL,
  `properties_clients_companies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `systems_has_property_group`
--

CREATE TABLE `systems_has_property_group` (
  `systems_id` int(11) NOT NULL,
  `property_group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taskdaysofweek`
--

CREATE TABLE `taskdaysofweek` (
  `id` int(11) NOT NULL,
  `sunday` tinyint(4) DEFAULT NULL,
  `monday` tinyint(4) DEFAULT NULL,
  `tuesday` tinyint(4) DEFAULT NULL,
  `wednesday` tinyint(4) DEFAULT NULL,
  `thursday` tinyint(4) DEFAULT NULL,
  `friday` tinyint(4) DEFAULT NULL,
  `saturday` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `taskName` varchar(45) DEFAULT NULL,
  `issue_types_id` int(11) NOT NULL,
  `taskDescription` text DEFAULT NULL,
  `property_addresses_id` int(11) NOT NULL,
  `unites_id` int(11) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `taskTime` varchar(45) DEFAULT NULL,
  `taskDaysOfWeek_id` int(11) NOT NULL,
  `alertIfLeftOpen` int(11) DEFAULT NULL,
  `disableTaskAfterDate` date DEFAULT NULL,
  `lastIssuedDate` date DEFAULT NULL,
  `taskCurrentStatus` varchar(45) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tourdaysofweek`
--

CREATE TABLE `tourdaysofweek` (
  `id` int(11) NOT NULL,
  `sunday` tinyint(4) DEFAULT NULL,
  `monday` tinyint(4) DEFAULT NULL,
  `tuesday` tinyint(4) DEFAULT NULL,
  `wednesday` tinyint(4) DEFAULT NULL,
  `thursday` tinyint(4) DEFAULT NULL,
  `friday` tinyint(4) DEFAULT NULL,
  `saturday` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unites`
--

CREATE TABLE `unites` (
  `id` int(11) NOT NULL,
  `property_addresses_id` int(11) NOT NULL,
  `unitNumberPrefix` varchar(45) DEFAULT NULL,
  `startingUnitNumber` int(11) DEFAULT NULL,
  `unitNumberIncrement` int(11) DEFAULT NULL,
  `endingUnitNumber` int(11) DEFAULT NULL,
  `unitNumberSuffix` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_notification`
--

CREATE TABLE `users_notification` (
  `id` int(11) NOT NULL,
  `send meADailyMissedCheckpointReport` tinyint(4) DEFAULT NULL,
  `propertyIssuesPerHourFallBelowThreshold` tinyint(4) DEFAULT NULL,
  `overdueTasks` tinyint(4) DEFAULT NULL,
  `alertWhenUnableToSendTourStartMessages` tinyint(4) DEFAULT NULL,
  `alertWhenATourExpiresOrIsFinishedWithoutAllCheckpointsBeingHit` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses_types`
--
ALTER TABLE `addresses_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_alert_property1_idx` (`property_id`);

--
-- Indexes for table `clients_companies`
--
ALTER TABLE `clients_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_clients_companies_street_types1_idx` (`street_types_id`),
  ADD KEY `fk_clients_companies_states1_idx` (`states_id`);

--
-- Indexes for table `clients_companies_has_customers`
--
ALTER TABLE `clients_companies_has_customers`
  ADD PRIMARY KEY (`clients_companies_id`,`customers_id`),
  ADD KEY `fk_clients_companies_has_customers_customers1_idx` (`customers_id`),
  ADD KEY `fk_clients_companies_has_customers_clients_companies1_idx` (`clients_companies_id`);

--
-- Indexes for table `clients_companies_has_employees`
--
ALTER TABLE `clients_companies_has_employees`
  ADD PRIMARY KEY (`clients_companies_id`,`employees_id`),
  ADD KEY `fk_clients_companies_has_employees_employees1_idx` (`employees_id`),
  ADD KEY `fk_clients_companies_has_employees_clients_companies1_idx` (`clients_companies_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_securityRoles1_idx` (`securityRoles_id`),
  ADD KEY `fk_users_states1_idx` (`states_id`),
  ADD KEY `fk_employees_clients_companies1_idx` (`managmentCompany`),
  ADD KEY `fk_employees_users_notification1_idx` (`users_notification_id`),
  ADD KEY `fk_customers_customer_roles1_idx` (`customer_roles_id`);

--
-- Indexes for table `customer_roles`
--
ALTER TABLE `customer_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_securityRoles1_idx` (`securityRoles_id`),
  ADD KEY `fk_users_states1_idx` (`states_id`),
  ADD KEY `fk_employees_clients_companies1_idx` (`managmentCompany`),
  ADD KEY `fk_employees_employee_roles1_idx` (`employee_roles_id`),
  ADD KEY `fk_employees_users_notification1_idx` (`users_notification_id`);

--
-- Indexes for table `employee_roles`
--
ALTER TABLE `employee_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_has_properties`
--
ALTER TABLE `group_has_properties`
  ADD PRIMARY KEY (`property_id`,`property_group_id`),
  ADD KEY `fk_property_group_has_property_property1_idx` (`property_id`),
  ADD KEY `fk_property_group_has_property_property_group1_idx` (`property_group_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_issues_properties1_idx` (`properties_id`),
  ADD KEY `fk_issues_issue_types1_idx` (`issue_types_id`),
  ADD KEY `fk_issues_property_addresses1_idx` (`property_addresses_id`),
  ADD KEY `fk_issues_users1_idx` (`createdBy`),
  ADD KEY `fk_issues_users2_idx` (`assignedTo`);

--
-- Indexes for table `issues_photos`
--
ALTER TABLE `issues_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_issues_photos_issues1_idx` (`issues_id`);

--
-- Indexes for table `issues_sound`
--
ALTER TABLE `issues_sound`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_issues_sound_issues1_idx` (`issues_id`);

--
-- Indexes for table `issues_types`
--
ALTER TABLE `issues_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_types`
--
ALTER TABLE `issue_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_types_has_issues_types`
--
ALTER TABLE `issue_types_has_issues_types`
  ADD PRIMARY KEY (`issue_types_id`,`issues_types_id`),
  ADD KEY `fk_issue_types_has_issues_types_issues_types1_idx` (`issues_types_id`),
  ADD KEY `fk_issue_types_has_issues_types_issue_types1_idx` (`issue_types_id`);

--
-- Indexes for table `issue_types_options`
--
ALTER TABLE `issue_types_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_issue_types_options_issue_types1_idx` (`issue_types_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_notification_users1_idx` (`users_id`);

--
-- Indexes for table `parking_setup`
--
ALTER TABLE `parking_setup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parking_setup_property1_idx` (`property_id`);

--
-- Indexes for table `parking_zones`
--
ALTER TABLE `parking_zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parking_zones_parking_setup1_idx` (`parking_setup_id`);

--
-- Indexes for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phone_numbers_property1_idx` (`property_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`,`clients_companies_id`),
  ADD KEY `fk_property_clients_companies1_idx` (`clients_companies_id`);

--
-- Indexes for table `property_addresses`
--
ALTER TABLE `property_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_property_addresses_property1_idx` (`property_id`),
  ADD KEY `fk_property_addresses_states1_idx` (`states_id`),
  ADD KEY `fk_property_addresses_addresses_types1_idx` (`addresses_types_id`);

--
-- Indexes for table `property_checkpoints`
--
ALTER TABLE `property_checkpoints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_propertyCheckpoints_property1_idx` (`property_id`),
  ADD KEY `fk_propertyCheckpoints_property_addresses1_idx` (`property_addresses_id`);

--
-- Indexes for table `property_documents`
--
ALTER TABLE `property_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_propertyDocuments_property1_idx` (`property_id`);

--
-- Indexes for table `property_geofance`
--
ALTER TABLE `property_geofance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_property_geofance_property1_idx` (`property_id`);

--
-- Indexes for table `property_group`
--
ALTER TABLE `property_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_group_has_employees`
--
ALTER TABLE `property_group_has_employees`
  ADD PRIMARY KEY (`property_group_id`,`employees_id`),
  ADD KEY `fk_property_group_has_employees_employees1_idx` (`employees_id`),
  ADD KEY `fk_property_group_has_employees_property_group1_idx` (`property_group_id`);

--
-- Indexes for table `property_has_issue_types`
--
ALTER TABLE `property_has_issue_types`
  ADD PRIMARY KEY (`property_id`,`issue_types_id`),
  ADD KEY `fk_property_has_issue_types_issue_types1_idx` (`issue_types_id`),
  ADD KEY `fk_property_has_issue_types_property1_idx` (`property_id`);

--
-- Indexes for table `property_has_locations`
--
ALTER TABLE `property_has_locations`
  ADD PRIMARY KEY (`property_id`,`locations_id`),
  ADD KEY `fk_property_has_locations_locations1_idx` (`locations_id`),
  ADD KEY `fk_property_has_locations_property1_idx` (`property_id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_propertyPhoto_property1_idx` (`property_id`);

--
-- Indexes for table `property_tours`
--
ALTER TABLE `property_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_property_tours_property1_idx` (`property_id`),
  ADD KEY `fk_property_tours_tourDaysOfWeek1_idx` (`tourDaysOfWeek_id`);

--
-- Indexes for table `property_tours_has_property_checkpoints`
--
ALTER TABLE `property_tours_has_property_checkpoints`
  ADD PRIMARY KEY (`property_tours_id`,`property_checkpoints_id`),
  ADD KEY `fk_property_tours_has_property_checkpoints_property_checkpo_idx` (`property_checkpoints_id`),
  ADD KEY `fk_property_tours_has_property_checkpoints_property_tours1_idx` (`property_tours_id`);

--
-- Indexes for table `securityroles`
--
ALTER TABLE `securityroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sent_email_history`
--
ALTER TABLE `sent_email_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `street_types`
--
ALTER TABLE `street_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_systems_general1_idx` (`general_id`),
  ADD KEY `fk_systems_devices1_idx` (`devices_id`),
  ADD KEY `fk_systems_logos1_idx` (`logos_id`),
  ADD KEY `fk_systems_notification1_idx` (`notification_id`),
  ADD KEY `fk_systems_email1_idx` (`email_id`);

--
-- Indexes for table `systems_has_customers`
--
ALTER TABLE `systems_has_customers`
  ADD PRIMARY KEY (`systems_id`,`customers_id`),
  ADD KEY `fk_systems_has_customers_customers1_idx` (`customers_id`),
  ADD KEY `fk_systems_has_customers_systems1_idx` (`systems_id`);

--
-- Indexes for table `systems_has_employees`
--
ALTER TABLE `systems_has_employees`
  ADD PRIMARY KEY (`systems_id`,`employees_id`),
  ADD KEY `fk_systems_has_employees_employees1_idx` (`employees_id`),
  ADD KEY `fk_systems_has_employees_systems1_idx` (`systems_id`);

--
-- Indexes for table `systems_has_properties`
--
ALTER TABLE `systems_has_properties`
  ADD PRIMARY KEY (`systems_id`,`properties_id`,`properties_clients_companies_id`),
  ADD KEY `fk_systems_has_properties_properties1_idx` (`properties_id`,`properties_clients_companies_id`),
  ADD KEY `fk_systems_has_properties_systems1_idx` (`systems_id`);

--
-- Indexes for table `systems_has_property_group`
--
ALTER TABLE `systems_has_property_group`
  ADD PRIMARY KEY (`systems_id`,`property_group_id`),
  ADD KEY `fk_systems_has_property_group_property_group1_idx` (`property_group_id`),
  ADD KEY `fk_systems_has_property_group_systems1_idx` (`systems_id`);

--
-- Indexes for table `taskdaysofweek`
--
ALTER TABLE `taskdaysofweek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tasks_issue_types1_idx` (`issue_types_id`),
  ADD KEY `fk_tasks_property_addresses1_idx` (`property_addresses_id`),
  ADD KEY `fk_tasks_taskDaysOfWeek1_idx` (`taskDaysOfWeek_id`),
  ADD KEY `fk_tasks_unites1_idx` (`unites_id`);

--
-- Indexes for table `tourdaysofweek`
--
ALTER TABLE `tourdaysofweek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_unites_property_addresses1_idx` (`property_addresses_id`);

--
-- Indexes for table `users_notification`
--
ALTER TABLE `users_notification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses_types`
--
ALTER TABLE `addresses_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients_companies`
--
ALTER TABLE `clients_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_roles`
--
ALTER TABLE `customer_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues_photos`
--
ALTER TABLE `issues_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues_sound`
--
ALTER TABLE `issues_sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues_types`
--
ALTER TABLE `issues_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_types`
--
ALTER TABLE `issue_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_types_options`
--
ALTER TABLE `issue_types_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_setup`
--
ALTER TABLE `parking_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_zones`
--
ALTER TABLE `parking_zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_addresses`
--
ALTER TABLE `property_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_checkpoints`
--
ALTER TABLE `property_checkpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_documents`
--
ALTER TABLE `property_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_geofance`
--
ALTER TABLE `property_geofance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_group`
--
ALTER TABLE `property_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_has_issue_types`
--
ALTER TABLE `property_has_issue_types`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_has_locations`
--
ALTER TABLE `property_has_locations`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_tours`
--
ALTER TABLE `property_tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `securityroles`
--
ALTER TABLE `securityroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sent_email_history`
--
ALTER TABLE `sent_email_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `street_types`
--
ALTER TABLE `street_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `systems`
--
ALTER TABLE `systems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taskdaysofweek`
--
ALTER TABLE `taskdaysofweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourdaysofweek`
--
ALTER TABLE `tourdaysofweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unites`
--
ALTER TABLE `unites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_notification`
--
ALTER TABLE `users_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `fk_alert_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `clients_companies`
--
ALTER TABLE `clients_companies`
  ADD CONSTRAINT `fk_clients_companies_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `fk_clients_companies_street_types1` FOREIGN KEY (`street_types_id`) REFERENCES `street_types` (`id`);

--
-- Constraints for table `clients_companies_has_customers`
--
ALTER TABLE `clients_companies_has_customers`
  ADD CONSTRAINT `fk_clients_companies_has_customers_clients_companies1` FOREIGN KEY (`clients_companies_id`) REFERENCES `clients_companies` (`id`),
  ADD CONSTRAINT `fk_clients_companies_has_customers_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `clients_companies_has_employees`
--
ALTER TABLE `clients_companies_has_employees`
  ADD CONSTRAINT `fk_clients_companies_has_employees_clients_companies1` FOREIGN KEY (`clients_companies_id`) REFERENCES `clients_companies` (`id`),
  ADD CONSTRAINT `fk_clients_companies_has_employees_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `fk_customers_customer_roles1` FOREIGN KEY (`customer_roles_id`) REFERENCES `customer_roles` (`id`),
  ADD CONSTRAINT `fk_employees_clients_companies10` FOREIGN KEY (`managmentCompany`) REFERENCES `clients_companies` (`id`),
  ADD CONSTRAINT `fk_employees_users_notification10` FOREIGN KEY (`users_notification_id`) REFERENCES `users_notification` (`id`),
  ADD CONSTRAINT `fk_users_securityRoles10` FOREIGN KEY (`securityRoles_id`) REFERENCES `securityroles` (`id`),
  ADD CONSTRAINT `fk_users_states10` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_employees_clients_companies1` FOREIGN KEY (`managmentCompany`) REFERENCES `clients_companies` (`id`),
  ADD CONSTRAINT `fk_employees_employee_roles1` FOREIGN KEY (`employee_roles_id`) REFERENCES `employee_roles` (`id`),
  ADD CONSTRAINT `fk_employees_users_notification1` FOREIGN KEY (`users_notification_id`) REFERENCES `users_notification` (`id`),
  ADD CONSTRAINT `fk_users_securityRoles1` FOREIGN KEY (`securityRoles_id`) REFERENCES `securityroles` (`id`),
  ADD CONSTRAINT `fk_users_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `group_has_properties`
--
ALTER TABLE `group_has_properties`
  ADD CONSTRAINT `fk_property_group_has_property_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `fk_property_group_has_property_property_group1` FOREIGN KEY (`property_group_id`) REFERENCES `property_group` (`id`);

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `fk_issues_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  ADD CONSTRAINT `fk_issues_properties1` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `fk_issues_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`),
  ADD CONSTRAINT `fk_issues_users1` FOREIGN KEY (`createdBy`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `fk_issues_users2` FOREIGN KEY (`assignedTo`) REFERENCES `employees` (`id`);

--
-- Constraints for table `issues_photos`
--
ALTER TABLE `issues_photos`
  ADD CONSTRAINT `fk_issues_photos_issues1` FOREIGN KEY (`issues_id`) REFERENCES `issues` (`id`);

--
-- Constraints for table `issues_sound`
--
ALTER TABLE `issues_sound`
  ADD CONSTRAINT `fk_issues_sound_issues1` FOREIGN KEY (`issues_id`) REFERENCES `issues` (`id`);

--
-- Constraints for table `issue_types_has_issues_types`
--
ALTER TABLE `issue_types_has_issues_types`
  ADD CONSTRAINT `fk_issue_types_has_issues_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  ADD CONSTRAINT `fk_issue_types_has_issues_types_issues_types1` FOREIGN KEY (`issues_types_id`) REFERENCES `issues_types` (`id`);

--
-- Constraints for table `issue_types_options`
--
ALTER TABLE `issue_types_options`
  ADD CONSTRAINT `fk_issue_types_options_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_notification_users1` FOREIGN KEY (`users_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `parking_setup`
--
ALTER TABLE `parking_setup`
  ADD CONSTRAINT `fk_parking_setup_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `parking_zones`
--
ALTER TABLE `parking_zones`
  ADD CONSTRAINT `fk_parking_zones_parking_setup1` FOREIGN KEY (`parking_setup_id`) REFERENCES `parking_setup` (`id`);

--
-- Constraints for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD CONSTRAINT `fk_phone_numbers_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `fk_property_clients_companies1` FOREIGN KEY (`clients_companies_id`) REFERENCES `clients_companies` (`id`);

--
-- Constraints for table `property_addresses`
--
ALTER TABLE `property_addresses`
  ADD CONSTRAINT `fk_property_addresses_addresses_types1` FOREIGN KEY (`addresses_types_id`) REFERENCES `addresses_types` (`id`),
  ADD CONSTRAINT `fk_property_addresses_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `fk_property_addresses_states1` FOREIGN KEY (`states_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `property_checkpoints`
--
ALTER TABLE `property_checkpoints`
  ADD CONSTRAINT `fk_propertyCheckpoints_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `fk_propertyCheckpoints_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`);

--
-- Constraints for table `property_documents`
--
ALTER TABLE `property_documents`
  ADD CONSTRAINT `fk_propertyDocuments_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `property_geofance`
--
ALTER TABLE `property_geofance`
  ADD CONSTRAINT `fk_property_geofance_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `property_group_has_employees`
--
ALTER TABLE `property_group_has_employees`
  ADD CONSTRAINT `fk_property_group_has_employees_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `fk_property_group_has_employees_property_group1` FOREIGN KEY (`property_group_id`) REFERENCES `property_group` (`id`);

--
-- Constraints for table `property_has_issue_types`
--
ALTER TABLE `property_has_issue_types`
  ADD CONSTRAINT `fk_property_has_issue_types_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  ADD CONSTRAINT `fk_property_has_issue_types_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `property_has_locations`
--
ALTER TABLE `property_has_locations`
  ADD CONSTRAINT `fk_property_has_locations_locations1` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `fk_property_has_locations_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD CONSTRAINT `fk_propertyPhoto_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `property_tours`
--
ALTER TABLE `property_tours`
  ADD CONSTRAINT `fk_property_tours_property1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`),
  ADD CONSTRAINT `fk_property_tours_tourDaysOfWeek1` FOREIGN KEY (`tourDaysOfWeek_id`) REFERENCES `tourdaysofweek` (`id`);

--
-- Constraints for table `property_tours_has_property_checkpoints`
--
ALTER TABLE `property_tours_has_property_checkpoints`
  ADD CONSTRAINT `fk_property_tours_has_property_checkpoints_property_checkpoin1` FOREIGN KEY (`property_checkpoints_id`) REFERENCES `property_checkpoints` (`id`),
  ADD CONSTRAINT `fk_property_tours_has_property_checkpoints_property_tours1` FOREIGN KEY (`property_tours_id`) REFERENCES `property_tours` (`id`);

--
-- Constraints for table `systems`
--
ALTER TABLE `systems`
  ADD CONSTRAINT `fk_systems_devices1` FOREIGN KEY (`devices_id`) REFERENCES `devices` (`id`),
  ADD CONSTRAINT `fk_systems_email1` FOREIGN KEY (`email_id`) REFERENCES `email` (`id`),
  ADD CONSTRAINT `fk_systems_general1` FOREIGN KEY (`general_id`) REFERENCES `general` (`id`),
  ADD CONSTRAINT `fk_systems_logos1` FOREIGN KEY (`logos_id`) REFERENCES `logos` (`id`),
  ADD CONSTRAINT `fk_systems_notification1` FOREIGN KEY (`notification_id`) REFERENCES `notification` (`id`);

--
-- Constraints for table `systems_has_customers`
--
ALTER TABLE `systems_has_customers`
  ADD CONSTRAINT `fk_systems_has_customers_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `fk_systems_has_customers_systems1` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`);

--
-- Constraints for table `systems_has_employees`
--
ALTER TABLE `systems_has_employees`
  ADD CONSTRAINT `fk_systems_has_employees_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `fk_systems_has_employees_systems1` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`);

--
-- Constraints for table `systems_has_properties`
--
ALTER TABLE `systems_has_properties`
  ADD CONSTRAINT `fk_systems_has_properties_properties1` FOREIGN KEY (`properties_id`,`properties_clients_companies_id`) REFERENCES `properties` (`id`, `clients_companies_id`),
  ADD CONSTRAINT `fk_systems_has_properties_systems1` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`);

--
-- Constraints for table `systems_has_property_group`
--
ALTER TABLE `systems_has_property_group`
  ADD CONSTRAINT `fk_systems_has_property_group_property_group1` FOREIGN KEY (`property_group_id`) REFERENCES `property_group` (`id`),
  ADD CONSTRAINT `fk_systems_has_property_group_systems1` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `fk_tasks_issue_types1` FOREIGN KEY (`issue_types_id`) REFERENCES `issue_types` (`id`),
  ADD CONSTRAINT `fk_tasks_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`),
  ADD CONSTRAINT `fk_tasks_taskDaysOfWeek1` FOREIGN KEY (`taskDaysOfWeek_id`) REFERENCES `taskdaysofweek` (`id`),
  ADD CONSTRAINT `fk_tasks_unites1` FOREIGN KEY (`unites_id`) REFERENCES `unites` (`id`);

--
-- Constraints for table `unites`
--
ALTER TABLE `unites`
  ADD CONSTRAINT `fk_unites_property_addresses1` FOREIGN KEY (`property_addresses_id`) REFERENCES `property_addresses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
