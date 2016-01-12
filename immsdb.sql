CREATE DATABASE  IF NOT EXISTS `_immsdb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `_immsdb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: _immsdb
-- ------------------------------------------------------
-- Server version	5.5.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `child_health`
--

DROP TABLE IF EXISTS `child_health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child_health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `ufc_no` int(11) DEFAULT NULL,
  `birth_order` varchar(255) DEFAULT NULL,
  `place_of_delivery` enum('Hospital-Government','Hospital-Private','Home','Private Clinic','Lying In','HC') DEFAULT NULL,
  `mothers_name` varchar(255) NOT NULL,
  `mothers_age` int(11) DEFAULT NULL,
  `mothers_occupation` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `fathers_age` int(11) DEFAULT NULL,
  `fathers_occupation` varchar(255) DEFAULT NULL,
  `feeding_type` varchar(255) DEFAULT NULL,
  `date_referred_for_newborn_screening` date DEFAULT NULL,
  `child_protected_at_birth` varchar(255) DEFAULT NULL,
  `date_assessed` date DEFAULT NULL,
  `tt_status_of_mother` varchar(255) DEFAULT NULL,
  `anemic_children_mos_seen` varchar(255) DEFAULT NULL,
  `anemic_children_mos_given_iron` varchar(255) DEFAULT NULL,
  `birth_weight` double DEFAULT NULL,
  `low_birth_weight_seen` varchar(255) DEFAULT NULL,
  `low_birth_weight_given_iron` varchar(255) DEFAULT NULL,
  `date_iron_started` date DEFAULT NULL,
  `vit_a_given` varchar(255) DEFAULT NULL,
  `date_iron_completed` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chr_patient_id_idx` (`patient_id`),
  CONSTRAINT `chr_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child_health`
--

LOCK TABLES `child_health` WRITE;
/*!40000 ALTER TABLE `child_health` DISABLE KEYS */;
/*!40000 ALTER TABLE `child_health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `child_health_details`
--

DROP TABLE IF EXISTS `child_health_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `child_health_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_health_record_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `age` int(11) DEFAULT NULL,
  `recorded_weight` double DEFAULT NULL,
  `temperature` double DEFAULT NULL,
  `recorded_height` double DEFAULT NULL,
  `findings` text NOT NULL,
  `notes` text,
  PRIMARY KEY (`id`),
  KEY `chrd_id_idx` (`child_health_record_id`),
  CONSTRAINT `chrd_id` FOREIGN KEY (`child_health_record_id`) REFERENCES `child_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `child_health_details`
--

LOCK TABLES `child_health_details` WRITE;
/*!40000 ALTER TABLE `child_health_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `child_health_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drug_intake`
--

DROP TABLE IF EXISTS `drug_intake`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drug_intake` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ntp_treatment_card_id` int(11) NOT NULL,
  `drug_intake_month` varchar(255) NOT NULL,
  `dosers_given` varchar(255) DEFAULT NULL,
  `cumulative_doses_given` varchar(255) DEFAULT NULL,
  `d1` varchar(255) DEFAULT NULL,
  `d2` varchar(255) DEFAULT NULL,
  `d3` varchar(255) DEFAULT NULL,
  `d4` varchar(255) DEFAULT NULL,
  `d5` varchar(255) DEFAULT NULL,
  `d6` varchar(255) DEFAULT NULL,
  `d7` varchar(255) DEFAULT NULL,
  `d8` varchar(255) DEFAULT NULL,
  `d9` varchar(255) DEFAULT NULL,
  `d10` varchar(255) DEFAULT NULL,
  `d11` varchar(255) DEFAULT NULL,
  `d12` varchar(255) DEFAULT NULL,
  `d13` varchar(255) DEFAULT NULL,
  `d14` varchar(255) DEFAULT NULL,
  `d15` varchar(255) DEFAULT NULL,
  `d16` varchar(255) DEFAULT NULL,
  `d17` varchar(255) DEFAULT NULL,
  `d18` varchar(255) DEFAULT NULL,
  `d19` varchar(255) DEFAULT NULL,
  `d20` varchar(255) DEFAULT NULL,
  `d21` varchar(255) DEFAULT NULL,
  `d22` varchar(255) DEFAULT NULL,
  `d23` varchar(255) DEFAULT NULL,
  `d24` varchar(255) DEFAULT NULL,
  `d25` varchar(255) DEFAULT NULL,
  `d26` varchar(255) DEFAULT NULL,
  `d27` varchar(255) DEFAULT NULL,
  `d28` varchar(255) DEFAULT NULL,
  `d29` varchar(255) DEFAULT NULL,
  `d30` varchar(255) DEFAULT NULL,
  `d31` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `di_id_idx` (`ntp_treatment_card_id`),
  CONSTRAINT `di_id` FOREIGN KEY (`ntp_treatment_card_id`) REFERENCES `ntp_treatment_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drug_intake`
--

LOCK TABLES `drug_intake` WRITE;
/*!40000 ALTER TABLE `drug_intake` DISABLE KEYS */;
/*!40000 ALTER TABLE `drug_intake` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exclusive_bf_check`
--

DROP TABLE IF EXISTS `exclusive_bf_check`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exclusive_bf_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_health_record_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `check_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ebc_id_idx` (`child_health_record_id`),
  CONSTRAINT `ebc_id` FOREIGN KEY (`child_health_record_id`) REFERENCES `child_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exclusive_bf_check`
--

LOCK TABLES `exclusive_bf_check` WRITE;
/*!40000 ALTER TABLE `exclusive_bf_check` DISABLE KEYS */;
/*!40000 ALTER TABLE `exclusive_bf_check` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `family_planning_service`
--

DROP TABLE IF EXISTS `family_planning_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `family_planning_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `plan_more_children` enum('Yes','No') NOT NULL,
  `reason_for_practicing_fp` text,
  `type_of_acceptor` enum('New to the program','Continuing User') NOT NULL,
  `previous_method_used` text,
  `spouse_name` varchar(255) DEFAULT NULL,
  `spouse_date_of_birth` date DEFAULT NULL,
  `spouse_highest_education` varchar(255) DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `average_monthly_income` varchar(255) DEFAULT NULL,
  `method_accepted` text,
  `other_method_accepted` text,
  `chosen_method` text,
  `fps_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fpsr_patient_id_idx` (`patient_id`),
  CONSTRAINT `fps_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `family_planning_service`
--

LOCK TABLES `family_planning_service` WRITE;
/*!40000 ALTER TABLE `family_planning_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `family_planning_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `family_planning_service_details`
--

DROP TABLE IF EXISTS `family_planning_service_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `family_planning_service_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_service_id` int(11) NOT NULL,
  `date_service_given` date NOT NULL,
  `method_to_be_used` varchar(255) DEFAULT NULL,
  `remarks` text,
  `name_of_provider` varchar(255) NOT NULL,
  `next_service_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fpsrd_id_idx` (`family_planning_service_id`),
  CONSTRAINT `fpsd_id` FOREIGN KEY (`family_planning_service_id`) REFERENCES `family_planning_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `family_planning_service_details`
--

LOCK TABLES `family_planning_service_details` WRITE;
/*!40000 ALTER TABLE `family_planning_service_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `family_planning_service_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `immunization_type`
--

DROP TABLE IF EXISTS `immunization_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `immunization_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `child_health_record_id` int(11) NOT NULL,
  `bcg` varchar(255) DEFAULT NULL,
  `hep_bv` varchar(255) DEFAULT NULL,
  `dpt` varchar(255) DEFAULT NULL,
  `opv` varchar(255) DEFAULT NULL,
  `amv` varchar(255) DEFAULT NULL,
  `mmr` varchar(255) DEFAULT NULL,
  `pentavalent` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `it_id_idx` (`child_health_record_id`),
  CONSTRAINT `it_id` FOREIGN KEY (`child_health_record_id`) REFERENCES `child_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `immunization_type`
--

LOCK TABLES `immunization_type` WRITE;
/*!40000 ALTER TABLE `immunization_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `immunization_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `laboratory_test`
--

DROP TABLE IF EXISTS `laboratory_test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laboratory_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ntp_laboratory_request_id` int(11) NOT NULL,
  `visual_appearance` varchar(255) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `laboratory_diagnosis` varchar(255) NOT NULL,
  `collection_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lt_ntpid_idx` (`ntp_laboratory_request_id`),
  CONSTRAINT `lt_ntpid` FOREIGN KEY (`ntp_laboratory_request_id`) REFERENCES `ntp_laboratory_request` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laboratory_test`
--

LOCK TABLES `laboratory_test` WRITE;
/*!40000 ALTER TABLE `laboratory_test` DISABLE KEYS */;
/*!40000 ALTER TABLE `laboratory_test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maternal_health`
--

DROP TABLE IF EXISTS `maternal_health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maternal_health` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `husband_name` varchar(255) NOT NULL,
  `husband_occupation` varchar(255) DEFAULT NULL,
  `no_of_children_born_alive` int(11) DEFAULT NULL,
  `no_of_living_children` int(11) DEFAULT NULL,
  `no_of_abortion` int(11) DEFAULT NULL,
  `no_of_stillbirths_fetal_deaths` int(11) DEFAULT NULL,
  `last_delivery_type` varchar(255) DEFAULT NULL,
  `large_babies_history` varchar(255) DEFAULT NULL,
  `diabetes_history` varchar(255) DEFAULT NULL,
  `previous_illness` varchar(255) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  `previous_hospitalization` varchar(255) DEFAULT NULL,
  `urinalysis` varchar(255) DEFAULT NULL,
  `cbc` varchar(255) DEFAULT NULL,
  `hbs_antigen` varchar(255) DEFAULT NULL,
  `prevoius_pregnancy_complication` varchar(255) DEFAULT NULL,
  `gravida` varchar(255) DEFAULT NULL,
  `para` varchar(255) DEFAULT NULL,
  `a` varchar(255) DEFAULT NULL,
  `stillbirth` varchar(255) DEFAULT NULL,
  `cmp` varchar(255) DEFAULT NULL,
  `edc` varchar(255) DEFAULT NULL,
  `where_to_deliver` varchar(255) DEFAULT NULL,
  `to_be_attended_by` varchar(255) DEFAULT NULL,
  `plan_to_submit` varchar(255) DEFAULT NULL,
  `risk_codes` varchar(255) DEFAULT NULL,
  `pregnancy_terminated_date` date DEFAULT NULL,
  `outcome` varchar(255) DEFAULT NULL,
  `birthwt` double DEFAULT NULL,
  `place_of_delivery` varchar(255) DEFAULT NULL,
  `attended_by` varchar(255) DEFAULT NULL,
  `checklist` text,
  `vit_a_date_given` date DEFAULT NULL,
  `vit_a_prescribed` varchar(255) DEFAULT NULL,
  `iron_folic_date_given` date DEFAULT NULL,
  `iron_folic_prescribed` varchar(255) DEFAULT NULL,
  `iron_folic_month` varchar(255) DEFAULT NULL,
  `mebendazole_date_given` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mhr_patient_id_idx` (`patient_id`),
  CONSTRAINT `mhr_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maternal_health`
--

LOCK TABLES `maternal_health` WRITE;
/*!40000 ALTER TABLE `maternal_health` DISABLE KEYS */;
/*!40000 ALTER TABLE `maternal_health` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maternal_health_details`
--

DROP TABLE IF EXISTS `maternal_health_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maternal_health_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maternal_health_record_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `aog` varchar(255) DEFAULT NULL,
  `maternal_weight` varchar(255) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `fh` varchar(255) NOT NULL,
  `fhb` varchar(255) NOT NULL,
  `presenting_part_of_fetus` varchar(255) NOT NULL,
  `findings` text NOT NULL,
  `nurses_notes` text,
  PRIMARY KEY (`id`),
  KEY `mhrd_id_idx` (`maternal_health_record_id`),
  CONSTRAINT `mhrd_id` FOREIGN KEY (`maternal_health_record_id`) REFERENCES `maternal_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maternal_health_details`
--

LOCK TABLES `maternal_health_details` WRITE;
/*!40000 ALTER TABLE `maternal_health_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `maternal_health_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medical_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_service_id` int(11) NOT NULL,
  `heent` text,
  `chest_heart` text,
  `abdomen` text,
  `genital` text,
  `extremities` text,
  `skin` text,
  `other_history` text,
  PRIMARY KEY (`id`),
  KEY `mh_id_idx` (`family_planning_service_id`),
  CONSTRAINT `mh_id` FOREIGN KEY (`family_planning_service_id`) REFERENCES `family_planning_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_history`
--

LOCK TABLES `medical_history` WRITE;
/*!40000 ALTER TABLE `medical_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `medical_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntp_laboratory_request`
--

DROP TABLE IF EXISTS `ntp_laboratory_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntp_laboratory_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `collection_unit_name` varchar(255) NOT NULL COMMENT 'Name of Collection Unit',
  `submission_date` date NOT NULL,
  `disease_classification` enum('Pulmonary','Extra-pulmonary') DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `reason_for_examination` enum('Diagnosis','Follow-up') NOT NULL,
  `tb_case_no` int(11) DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `lab_serial_no` int(11) DEFAULT NULL,
  `examination_date` date DEFAULT NULL,
  `examined_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ntplr_patient_id_idx` (`patient_id`),
  KEY `ntplr_examined_by_idx` (`examined_by`),
  CONSTRAINT `ntplr_examined_by` FOREIGN KEY (`examined_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ntplr_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntp_laboratory_request`
--

LOCK TABLES `ntp_laboratory_request` WRITE;
/*!40000 ALTER TABLE `ntp_laboratory_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntp_laboratory_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntp_treatment_card`
--

DROP TABLE IF EXISTS `ntp_treatment_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntp_treatment_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `tb_case_no` int(11) NOT NULL,
  `date_opened` date NOT NULL,
  `dots_facility_name` varchar(255) NOT NULL,
  `bcg_scar` enum('Yes','No','Doubtful') NOT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_person_no` varchar(255) DEFAULT NULL,
  `source_of_patient` enum('Public','Private') DEFAULT NULL,
  `name_of_reffering_physician` varchar(255) DEFAULT NULL,
  `history_of_anti_tb_drug_intake` enum('Yes','No') NOT NULL,
  `duration` enum('<1 mo','>1 mo') DEFAULT NULL,
  `specify_drugs` varchar(255) DEFAULT NULL,
  `when` varchar(255) DEFAULT NULL,
  `where` varchar(255) DEFAULT NULL,
  `smear_status` varchar(255) DEFAULT NULL,
  `no_of_household_contacts` int(11) DEFAULT NULL,
  `classification_of_tb` enum('Pulmonary','Extra-pulmonary') NOT NULL,
  `tb_site` varchar(255) DEFAULT NULL,
  `type_of_patient` text NOT NULL,
  `category_1` text,
  `category_2` text,
  `category_3` text,
  `treatment_started` date NOT NULL,
  `tbdc_findings_and_recommendations` text,
  `chest_xray` text,
  `name_of_treatment_partner` varchar(255) DEFAULT NULL,
  `designation_of_treatment_partner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ntptc_id_idx` (`patient_id`),
  CONSTRAINT `ntptc_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntp_treatment_card`
--

LOCK TABLES `ntp_treatment_card` WRITE;
/*!40000 ALTER TABLE `ntp_treatment_card` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntp_treatment_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obstetrical_history`
--

DROP TABLE IF EXISTS `obstetrical_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obstetrical_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_service_id` int(11) NOT NULL,
  `no_of_pregnancies` int(11) DEFAULT NULL,
  `no_of_full_term` int(11) DEFAULT NULL,
  `no_of_premature` int(11) DEFAULT NULL,
  `no_of_abortions` int(11) DEFAULT NULL,
  `no_of_living_children` int(11) DEFAULT NULL,
  `last_delivery_date` date DEFAULT NULL,
  `last_delivery_type` varchar(255) DEFAULT NULL,
  `past_menstrual_period` varchar(255) DEFAULT NULL,
  `last_menstrual_period` varchar(255) DEFAULT NULL,
  `duration_character_of_menstrual_bleeding` varchar(255) DEFAULT NULL,
  `other_history` text,
  PRIMARY KEY (`id`),
  KEY `oh_id_idx` (`family_planning_service_id`),
  CONSTRAINT `oh_id` FOREIGN KEY (`family_planning_service_id`) REFERENCES `family_planning_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obstetrical_history`
--

LOCK TABLES `obstetrical_history` WRITE;
/*!40000 ALTER TABLE `obstetrical_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `obstetrical_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `patient_family_name` varchar(255) NOT NULL,
  `patient_first_name` varchar(255) NOT NULL,
  `patient_middle_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `family_no` int(11) NOT NULL,
  `marital_status` varchar(31) NOT NULL,
  `patient_birthdate` date NOT NULL,
  `date_registered` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `p_user_id_idx` (`user_id`),
  CONSTRAINT `p_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelvic_examination`
--

DROP TABLE IF EXISTS `pelvic_examination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelvic_examination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_service_id` int(11) NOT NULL,
  `perenium` varchar(255) DEFAULT NULL,
  `vagina` varchar(255) DEFAULT NULL,
  `cervix` varchar(255) DEFAULT NULL,
  `cervix_color` varchar(255) DEFAULT NULL,
  `cervix_consistency` varchar(255) DEFAULT NULL,
  `uterus_position` varchar(255) DEFAULT NULL,
  `uterus_size` varchar(255) DEFAULT NULL,
  `uterus_mass` enum('Yes','No') DEFAULT NULL,
  `uterine_depth` varchar(255) DEFAULT NULL,
  `uterus_adnexa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pele_id_idx` (`family_planning_service_id`),
  CONSTRAINT `pele_id` FOREIGN KEY (`family_planning_service_id`) REFERENCES `family_planning_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelvic_examination`
--

LOCK TABLES `pelvic_examination` WRITE;
/*!40000 ALTER TABLE `pelvic_examination` DISABLE KEYS */;
/*!40000 ALTER TABLE `pelvic_examination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `physical_examination`
--

DROP TABLE IF EXISTS `physical_examination`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `physical_examination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_planning_service_id` int(11) NOT NULL,
  `blood_pressure` varchar(255) DEFAULT NULL,
  `physical_examination_weight` varchar(255) DEFAULT NULL,
  `pulse_rate` varchar(255) DEFAULT NULL,
  `conjunctiva` varchar(255) DEFAULT NULL,
  `neck` varchar(255) DEFAULT NULL,
  `breast` varchar(255) DEFAULT NULL,
  `thorax` varchar(255) DEFAULT NULL,
  `abdomen` varchar(255) DEFAULT NULL,
  `extremities` varchar(255) DEFAULT NULL,
  `others` text,
  PRIMARY KEY (`id`),
  KEY `pe_id_idx` (`family_planning_service_id`),
  CONSTRAINT `pe_id` FOREIGN KEY (`family_planning_service_id`) REFERENCES `family_planning_service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `physical_examination`
--

LOCK TABLES `physical_examination` WRITE;
/*!40000 ALTER TABLE `physical_examination` DISABLE KEYS */;
/*!40000 ALTER TABLE `physical_examination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sputum_examination_results`
--

DROP TABLE IF EXISTS `sputum_examination_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sputum_examination_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ntp_treatment_card_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `date_examined` date NOT NULL,
  `result` text NOT NULL,
  `sputum_weight` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ser_id_idx` (`ntp_treatment_card_id`),
  CONSTRAINT `ser_id` FOREIGN KEY (`ntp_treatment_card_id`) REFERENCES `ntp_treatment_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sputum_examination_results`
--

LOCK TABLES `sputum_examination_results` WRITE;
/*!40000 ALTER TABLE `sputum_examination_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `sputum_examination_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tetanus_toxoid_status`
--

DROP TABLE IF EXISTS `tetanus_toxoid_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tetanus_toxoid_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `maternal_health_record_id` int(11) NOT NULL,
  `tt` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tts_maternal_id_idx` (`maternal_health_record_id`),
  CONSTRAINT `tts_maternal_id` FOREIGN KEY (`maternal_health_record_id`) REFERENCES `maternal_health` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tetanus_toxoid_status`
--

LOCK TABLES `tetanus_toxoid_status` WRITE;
/*!40000 ALTER TABLE `tetanus_toxoid_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `tetanus_toxoid_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment_outcome`
--

DROP TABLE IF EXISTS `treatment_outcome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treatment_outcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ntp_treatment_card_id` int(11) NOT NULL,
  `treatment_outcome_type` varchar(255) NOT NULL,
  `treatment_outcome_date` date NOT NULL,
  `specify` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `treatment_outcome_ntp_idx` (`ntp_treatment_card_id`),
  CONSTRAINT `treatment_outcome_ntp` FOREIGN KEY (`ntp_treatment_card_id`) REFERENCES `ntp_treatment_card` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment_outcome`
--

LOCK TABLES `treatment_outcome` WRITE;
/*!40000 ALTER TABLE `treatment_outcome` DISABLE KEYS */;
/*!40000 ALTER TABLE `treatment_outcome` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `position` enum('Resident Doctor','Dentist','Nurse','Nurse Aid','Medical Technician','Midwife','Barangay Health Worker') NOT NULL,
  `birthdate` date NOT NULL,
  `account_type` enum('Admin','Limited') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin123','31e2356f591f8ca34b19ae8c0e33dd71','Vasnani','Hiten','Naresh','Nurse','2014-01-21','Admin'),(2,'roy6192','8df060a9fc8a7589232f1a933592f35e','Laput','Royce','Moreño','Resident Doctor','2014-01-21','Limited'),(3,'admin1234','31e2356f591f8ca34b19ae8c0e33dd71','Sasam','Wilson','Jan','Resident Doctor','1994-01-05','Limited');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-05 22:38:40
