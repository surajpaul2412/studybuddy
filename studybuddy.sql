-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: studybuddy
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

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
-- Table structure for table `backpack_items`
--

DROP TABLE IF EXISTS `backpack_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backpack_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `backpack_id` int(11) NOT NULL,
  `file_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backpack_items`
--

LOCK TABLES `backpack_items` WRITE;
/*!40000 ALTER TABLE `backpack_items` DISABLE KEYS */;
INSERT INTO `backpack_items` VALUES (3,2,'studymaterial/Student6/sdZyUq4dFSHsVq7nRImZu9ismrtgdyrZuY94wk3z.jpg','2021-08-24 12:31:53','2021-08-24 12:31:53'),(4,2,'studymaterial/Student6/NCjK3KYr2kTgstdun6ckaxe3iLM6Zd5fb4a9jcOZ.jpg','2021-08-24 12:31:53','2021-08-24 12:31:53'),(11,2,'studymaterial/Student6/Q8XZ9265TFOKaZw4tkhXjrtd8ESt1sBfQondBExs.jpg','2021-08-26 04:47:59','2021-08-26 04:47:59'),(12,3,'studymaterial/Student6/WI8dk9tomiujKYIhPvphCvvLn3tjoCVl8wXF3I42.pdf','2021-08-26 04:51:54','2021-08-26 04:51:54'),(14,3,'studymaterial/Student6/6wAo3mVv5QYgXDUdbPxjMEnVXrhOneP15WUJDTwc.pdf','2021-08-26 04:51:54','2021-08-26 04:51:54'),(18,3,'studymaterial/Student6/IGesvSf6vNHQCRlcQmag9jEd1sAZpMNBkbhbKZo2.jpg','2021-08-26 05:01:12','2021-08-26 05:01:12'),(19,3,'studymaterial/Student6/YTO2aN4WR80hOuWRQieHLBE0v2ACq0S0BTjqBSK0.jpg','2021-08-26 05:01:12','2021-08-26 05:01:12'),(20,4,'studymaterial/Suraj30/0LwHjmD0WooKcRKtbuFTvwwSajGN1GztUwl620yb.jpg','2021-09-17 13:22:37','2021-09-17 13:22:37'),(21,5,'studymaterial/Sasta23/evEduQJFxt4BErvmSLtjYqPbGCpdhoRjnBumBck9.pdf','2021-09-28 04:17:30','2021-09-28 04:17:30'),(28,9,'studymaterial/Test35/S8b4VIpLWPYb1n32pj6mAwe3mCT21gXSY07rb4GL.jpg','2021-10-25 07:08:36','2021-10-25 07:08:36'),(29,12,'studymaterial/Chris65/7wW3jvyjrlgXYnbFn7FCkinIcmGNzKfLPWtlEvJy.pdf','2021-11-02 09:28:57','2021-11-02 09:28:57');
/*!40000 ALTER TABLE `backpack_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `backpacks`
--

DROP TABLE IF EXISTS `backpacks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backpacks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backpacks`
--

LOCK TABLES `backpacks` WRITE;
/*!40000 ALTER TABLE `backpacks` DISABLE KEYS */;
INSERT INTO `backpacks` VALUES (2,6,'Biotechnology','2021-08-24 12:31:53','2021-08-26 04:47:59'),(3,6,'Test pdfs','2021-08-26 04:51:54','2021-10-28 07:24:36'),(4,30,'Dcf','2021-09-17 13:22:37','2021-09-17 13:22:37'),(5,23,'Session_by23','2021-09-28 04:17:30','2021-09-28 04:17:30'),(9,35,'Test','2021-10-25 07:08:36','2021-10-25 07:08:36'),(11,37,'BP1','2021-10-25 12:55:06','2021-10-25 12:55:06'),(12,65,'Session_by65','2021-11-02 09:28:57','2021-11-02 09:28:57');
/*!40000 ALTER TABLE `backpacks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cards`
--

DROP TABLE IF EXISTS `cards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cards` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `card_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_four` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `holder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cards`
--

LOCK TABLES `cards` WRITE;
/*!40000 ALTER TABLE `cards` DISABLE KEYS */;
INSERT INTO `cards` VALUES (7,6,'card_1JjeqXBDUACsglELlTrYZlhz','4242','Visa',1,'2021-10-12 06:52:24','2021-10-12 06:52:24','Ravi Boy'),(9,16,'card_1Jn0suBDUACsglELuljOZK8s','0077','Visa',1,'2021-10-21 13:00:48','2021-10-21 13:00:48','Student'),(10,35,'card_1JoNKPBDUACsglELeulaE0W6','4242','Visa',1,'2021-10-25 07:10:44','2021-10-25 07:10:44','Test'),(11,37,'card_1JoSHnBDUACsglELYTM7v0b8','4242','Visa',1,'2021-10-25 12:28:22','2021-10-25 12:28:22','Test'),(12,46,'card_1JpCLeBDUACsglELFcKo0aFQ','4242','Visa',1,'2021-10-27 13:39:25','2021-10-27 13:39:25','Test'),(13,65,'card_1JpuLcBDUACsglELvtE8GCfu','4242','Visa',1,'2021-10-29 12:38:19','2021-10-29 12:38:19','Chris Hems'),(14,68,'card_1JtS3eBDUACsglELMxoe4cDN','4242','Visa',1,'2021-11-08 07:14:26','2021-11-08 07:14:26','Gillyweed'),(15,69,'card_1JtUVBBDUACsglELMZZlWJBJ','4242','Visa',1,'2021-11-08 09:50:59','2021-11-08 09:51:00','ButterBeer');
/*!40000 ALTER TABLE `cards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sender_id` bigint(20) unsigned NOT NULL,
  `receiver_id` bigint(20) unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `message_type` enum('text','document','image') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `read` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chats_sender_id_foreign` (`sender_id`),
  KEY `chats_receiver_id_foreign` (`receiver_id`),
  CONSTRAINT `chats_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `chats_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chats`
--

LOCK TABLES `chats` WRITE;
/*!40000 ALTER TABLE `chats` DISABLE KEYS */;
INSERT INTO `chats` VALUES (26,19,23,'hi john','text','2021-10-28 05:16:42',NULL,'2021-10-21 07:37:49','2021-10-28 05:16:42'),(27,5,23,'hello','text','2021-10-28 05:16:31',NULL,'2021-10-21 07:43:47','2021-10-28 05:16:31'),(28,5,23,'how are you','text','2021-10-28 05:16:31',NULL,'2021-10-21 07:47:50','2021-10-28 05:16:31'),(29,5,16,'hello','text','2021-10-25 10:27:09',NULL,'2021-10-21 07:48:49','2021-10-25 10:27:09'),(30,23,19,'hello zalton','text','2021-10-25 06:34:09',NULL,'2021-10-21 07:55:42','2021-10-25 06:34:09'),(32,23,5,'hello some body','text',NULL,NULL,'2021-10-21 07:56:15','2021-10-21 07:56:15'),(33,23,19,'http://studybuddy.alcax.com/storage/chat_storage/b71laMbDqgBwnqhuZjvLxoduLhs5O0NdKFGGpUwE.png','image','2021-10-25 06:34:09',NULL,'2021-10-21 07:59:58','2021-10-25 06:34:09'),(38,23,19,'http://studybuddy.alcax.com/storage/chat_storage/qoa0ip9t9J5mX1fR2Vf8XPVOQt765k4TlBLFBsLv.pdf','document','2021-10-25 06:34:09',NULL,'2021-10-21 12:10:52','2021-10-25 06:34:09'),(45,35,16,'Hi','text','2021-10-25 10:33:38',NULL,'2021-10-25 07:53:39','2021-10-25 10:33:38'),(46,16,35,'How are you ?','text','2021-10-25 10:33:55',NULL,'2021-10-25 07:59:16','2021-10-25 10:33:55'),(47,35,16,'fine, wbu ?','text','2021-10-25 10:33:38',NULL,'2021-10-25 07:59:43','2021-10-25 10:33:38'),(48,16,35,'Awesome','text','2021-10-25 10:33:55',NULL,'2021-10-25 09:22:42','2021-10-25 10:33:55'),(50,35,16,'http://studybuddy.alcax.com/storage/chat_storage/Vdcv9GYjr1zeN76kiO3LQPN4XXtI7lBZWBZllVEl.png','image','2021-10-25 10:33:38',NULL,'2021-10-25 09:54:42','2021-10-25 10:33:38'),(52,16,6,'Hi','text','2021-11-01 12:07:23',NULL,'2021-10-25 10:19:21','2021-11-01 12:07:23'),(54,16,5,'hi','text',NULL,NULL,'2021-10-25 10:22:43','2021-10-25 10:22:43'),(55,16,6,'http://studybuddy.alcax.com/storage/chat_storage/4CZGBwI88tOECZOcsInGiBt82y1BuqYeOsvvFvjK.png','image','2021-11-01 12:07:23',NULL,'2021-10-25 10:23:11','2021-11-01 12:07:23'),(56,16,6,'http://studybuddy.alcax.com/storage/chat_storage/Ka8vh0kqeEf37VMT8TOm386hypf9JAjOHWvSsWIb.pdf','document','2021-11-01 12:07:23',NULL,'2021-10-25 10:23:39','2021-11-01 12:07:23'),(57,35,16,'checking...','text','2021-10-25 10:34:01',NULL,'2021-10-25 10:34:01','2021-10-25 10:34:01'),(61,37,35,'Hi','text',NULL,NULL,'2021-10-25 11:19:11','2021-10-25 11:19:11'),(63,23,6,'hi ravi','text','2021-11-01 12:07:48',NULL,'2021-10-25 12:17:09','2021-11-01 12:07:48'),(66,23,6,'okay thanks for your support and all the best for your way to get the moment','text','2021-11-01 12:07:48',NULL,'2021-10-25 12:18:39','2021-11-01 12:07:48'),(67,23,19,'zalton','text',NULL,NULL,'2021-10-26 05:32:31','2021-10-26 05:32:31'),(83,6,16,'got the files, thanks','text',NULL,NULL,'2021-11-01 12:07:42','2021-11-01 12:07:42'),(84,23,69,'Hi','text','2021-11-08 10:28:51',NULL,'2021-11-08 10:12:09','2021-11-08 10:28:51'),(85,69,23,'hey there','text',NULL,NULL,'2021-11-08 10:29:00','2021-11-08 10:29:00');
/*!40000 ALTER TABLE `chats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colleges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
INSERT INTO `colleges` VALUES (1,'Harvard University, Massachusetts, Cambridge',2,NULL,'2021-08-03 07:46:34','2021-08-03 07:46:34');
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `follows`
--

DROP TABLE IF EXISTS `follows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `follows` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `following_id` int(11) NOT NULL,
  `is_friend` int(11) DEFAULT NULL,
  `is_blocked` int(11) DEFAULT NULL,
  `is_favourite` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `follows`
--

LOCK TABLES `follows` WRITE;
/*!40000 ALTER TABLE `follows` DISABLE KEYS */;
INSERT INTO `follows` VALUES (1,6,22,1,0,NULL,'2021-08-24 05:47:26','2021-08-24 05:51:31'),(2,5,22,1,0,NULL,'2021-08-24 05:47:30','2021-08-26 12:15:25'),(3,16,22,1,0,NULL,'2021-08-24 05:47:37','2021-08-24 05:50:33'),(6,5,16,1,0,NULL,'2021-08-26 12:14:39','2021-08-26 12:15:27'),(7,7,16,0,0,NULL,'2021-08-26 12:14:39','2021-08-26 12:14:39'),(8,15,16,1,0,NULL,'2021-08-26 12:14:40','2021-08-27 11:35:25'),(9,17,16,1,0,NULL,'2021-08-26 12:14:41','2021-08-26 12:16:57'),(10,18,16,0,0,NULL,'2021-08-26 12:14:46','2021-08-26 12:14:46'),(11,19,16,1,0,NULL,'2021-08-26 12:14:48','2021-08-27 11:29:17'),(12,20,16,0,0,NULL,'2021-08-26 12:14:48','2021-08-26 12:14:48'),(13,21,16,0,0,NULL,'2021-08-26 12:14:51','2021-08-26 12:14:51'),(14,6,5,1,0,NULL,'2021-08-26 12:15:44','2021-08-27 12:44:57'),(15,7,5,0,0,NULL,'2021-08-26 12:15:45','2021-08-26 12:15:45'),(19,18,5,0,0,NULL,'2021-08-26 12:15:50','2021-08-26 12:15:50'),(20,19,5,1,0,NULL,'2021-08-26 12:15:51','2021-08-27 11:29:19'),(21,20,5,0,0,NULL,'2021-08-26 12:15:51','2021-08-26 12:15:51'),(23,22,5,1,0,NULL,'2021-08-26 12:15:55','2021-08-26 12:21:12'),(24,5,17,1,0,NULL,'2021-08-26 12:17:27','2021-08-27 11:51:35'),(26,7,17,0,0,NULL,'2021-08-26 12:17:29','2021-08-26 12:17:29'),(27,15,17,0,1,0,'2021-08-26 12:17:30','2021-09-09 07:02:34'),(28,16,17,1,0,NULL,'2021-08-26 12:17:32','2021-08-27 11:49:58'),(29,18,17,0,0,NULL,'2021-08-26 12:17:33','2021-08-26 12:17:33'),(30,19,17,1,0,NULL,'2021-08-26 12:17:34','2021-08-27 11:29:14'),(31,20,17,0,0,NULL,'2021-08-26 12:17:35','2021-08-26 12:17:35'),(32,21,17,0,0,NULL,'2021-08-26 12:17:37','2021-08-26 12:17:37'),(33,22,17,1,0,NULL,'2021-08-26 12:17:38','2021-08-26 12:21:10'),(34,5,6,1,0,0,'2021-08-27 11:10:49','2021-08-31 06:19:53'),(37,16,6,1,0,0,'2021-08-27 11:10:52','2021-10-25 10:27:01'),(39,18,6,0,0,NULL,'2021-08-27 11:10:55','2021-08-27 11:10:55'),(40,19,6,0,1,0,'2021-08-27 11:10:56','2021-09-09 07:13:20'),(41,21,6,0,0,NULL,'2021-08-27 11:10:59','2021-08-27 11:10:59'),(42,5,19,1,0,NULL,'2021-08-27 11:29:53','2021-08-27 11:51:33'),(43,6,19,0,1,0,'2021-08-27 11:29:54','2021-09-09 07:13:20'),(44,7,19,0,0,NULL,'2021-08-27 11:29:54','2021-08-27 11:29:54'),(45,15,19,0,1,0,'2021-08-27 11:29:55','2021-09-09 07:07:18'),(46,22,19,0,0,NULL,'2021-08-27 11:33:49','2021-08-27 11:33:49'),(47,21,19,0,0,NULL,'2021-08-27 11:33:50','2021-08-27 11:33:50'),(48,20,19,0,0,NULL,'2021-08-27 11:33:51','2021-08-27 11:33:51'),(49,18,19,0,0,NULL,'2021-08-27 11:33:52','2021-08-27 11:33:52'),(50,17,19,1,0,NULL,'2021-08-27 11:33:52','2021-08-27 13:16:32'),(51,16,19,1,0,NULL,'2021-08-27 11:33:55','2021-08-27 11:49:56'),(52,7,15,0,0,NULL,'2021-08-27 11:35:49','2021-08-27 11:35:49'),(53,18,15,0,0,NULL,'2021-08-27 11:35:50','2021-08-27 11:35:50'),(54,20,15,0,0,NULL,'2021-08-27 11:35:50','2021-08-27 11:35:50'),(55,21,15,0,0,NULL,'2021-08-27 11:35:51','2021-08-27 11:35:51'),(56,22,15,0,0,NULL,'2021-08-27 11:36:00','2021-08-27 11:36:00'),(57,21,5,0,0,NULL,'2021-08-27 12:14:48','2021-08-27 12:14:48'),(61,15,5,1,0,NULL,'2021-08-27 12:32:00','2021-08-27 13:17:39'),(62,7,6,0,0,NULL,'2021-08-27 12:46:27','2021-08-27 12:46:27'),(65,22,6,0,0,NULL,'2021-09-02 05:48:20','2021-09-02 05:48:20'),(66,6,28,1,0,NULL,'2021-09-09 05:36:04','2021-09-21 05:51:46'),(67,5,28,0,0,NULL,'2021-09-09 05:36:07','2021-09-09 05:36:07'),(68,15,6,0,1,0,'2021-09-09 07:01:03','2021-09-09 07:11:05'),(69,17,6,0,1,NULL,'2021-09-09 07:15:04','2021-09-09 07:15:04'),(71,23,6,0,0,NULL,'2021-09-15 05:17:30','2021-09-15 05:17:30'),(75,20,30,0,1,0,'2021-09-17 10:15:38','2021-09-17 10:15:42'),(76,23,32,0,0,NULL,'2021-10-24 05:14:53','2021-10-24 05:14:53'),(77,23,35,0,0,NULL,'2021-10-25 07:07:12','2021-10-25 07:07:12'),(78,5,35,0,0,NULL,'2021-10-25 07:07:27','2021-10-25 07:07:27'),(79,19,35,0,0,NULL,'2021-10-25 07:46:47','2021-10-25 07:46:47'),(80,16,35,1,0,NULL,'2021-10-25 07:47:15','2021-10-25 07:48:51'),(81,35,16,1,0,NULL,'2021-10-25 07:49:09','2021-10-25 07:50:08'),(82,23,37,0,0,NULL,'2021-10-25 11:15:37','2021-10-25 11:15:37'),(83,5,37,0,0,NULL,'2021-10-25 11:15:53','2021-10-25 11:15:53'),(84,46,69,0,0,NULL,'2021-11-08 09:21:51','2021-11-08 09:21:51'),(85,23,69,0,0,NULL,'2021-11-08 10:01:18','2021-11-08 10:01:18');
/*!40000 ALTER TABLE `follows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `language_levels`
--

DROP TABLE IF EXISTS `language_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language_levels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language_levels`
--

LOCK TABLES `language_levels` WRITE;
/*!40000 ALTER TABLE `language_levels` DISABLE KEYS */;
INSERT INTO `language_levels` VALUES (1,'A1','2021-08-03 07:46:34','2021-08-03 07:46:34'),(2,'A2','2021-08-03 07:46:34','2021-08-03 07:46:34'),(3,'B1','2021-08-03 07:46:34','2021-08-03 07:46:34'),(4,'B2','2021-08-03 07:46:34','2021-08-03 07:46:34'),(5,'C1','2021-08-03 07:46:34','2021-08-03 07:46:34'),(6,'C2','2021-08-03 07:46:34','2021-08-03 07:46:34');
/*!40000 ALTER TABLE `language_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'en','English','2021-08-03 07:46:34','2021-08-03 07:46:34'),(2,'de','German','2021-08-03 07:46:34','2021-08-03 07:46:34'),(3,'es','Spanish; Castilian','2021-08-03 07:46:34','2021-08-03 07:46:34'),(4,'ru','Russian','2021-08-03 07:46:34','2021-08-03 07:46:34');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2013_07_01_044534_create_roles_table',1),(2,'2014_10_12_000000_create_users_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2016_06_01_000001_create_oauth_auth_codes_table',1),(5,'2016_06_01_000002_create_oauth_access_tokens_table',1),(6,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(7,'2016_06_01_000004_create_oauth_clients_table',1),(8,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(9,'2019_08_19_000000_create_failed_jobs_table',1),(10,'2021_07_02_061057_create_university_details_table',1),(11,'2021_07_06_042734_create_subjects_table',1),(12,'2021_07_07_062606_create_colleges_table',1),(13,'2021_07_07_062607_create_student_details_table',1),(14,'2021_07_08_112652_create_tutor_details_table',1),(15,'2021_07_08_131458_create_user_subjects_table',1),(16,'2021_07_09_052429_create_posts_table',1),(17,'2021_07_09_052439_create_post_comments_table',1),(18,'2021_07_09_052447_create_post_likes_table',1),(19,'2021_07_09_053308_create_post_locations_table',1),(20,'2021_07_09_053319_create_post_media_table',1),(21,'2021_07_09_053330_create_post_mentions_table',1),(22,'2021_07_21_073850_create_languages_table',1),(23,'2021_07_21_074229_create_language_levels_table',1),(24,'2021_07_21_115426_create_pages_table',1),(25,'2021_07_28_105403_create_backpacks_table',1),(26,'2021_07_28_105754_create_backpack_items_table',1),(27,'2021_08_04_060030_create_user_universities_table',2),(31,'2021_08_05_055253_create_follows_table',3),(32,'2021_08_06_043548_create_sessions_table',3),(33,'2021_08_10_072748_create_post_joins_table',3),(34,'2021_08_23_075437_create_session_attendances_table',4),(35,'2021_08_26_113046_add_is_favourite_columns_to_follows_table',5),(36,'2021_08_30_060031_create_post_favourites_table',6),(37,'2021_08_31_074228_create_notifications_table',7),(38,'2021_08_31_074703_create_reviews_table',7),(39,'2021_09_06_104754_create_post_comment_replies_table',7),(40,'2021_09_08_072247_create_wallet_transactions_table',8),(41,'2021_09_08_102338_add_stripe_details_to_users_table',8),(42,'2021_09_08_113646_create_cards_table',8),(44,'2021_09_09_043225_add_student_creator_fields_to_sessions_table',9),(45,'2021_09_09_123136_add_status_changed_fields_to_sessions_table',10),(46,'2021_09_10_053939_add_avg_rating_fields_to_users_table',11),(48,'2021_09_13_060910_add_stripe_connect_details_to_users_table',13),(49,'2021_09_13_063837_add_holder_name_to_cards_table',13),(50,'2021_09_13_070751_add_backpack_id_columns_to_sessions_table',14),(51,'2021_09_16_075055_add_column_device_token_to_users_table',14),(52,'2021_09_17_061036_create_user_notification_preferences_table',15),(54,'2021_09_28_054358_create_chats_table',16),(55,'2021_09_30_074047_update_otp_verified_columns_to_sessions_table',16),(56,'2021_10_04_095921_add_session_extend_columns_to_sessions_table',17),(57,'2021_10_08_111531_add_extention_count_columns_to_sessions_table',18),(58,'2021_10_11_072551_add_session_id__columns_to_wallet_transactions_table',18),(59,'2021_10_20_115650_create_webhook_calls_table',19),(60,'2021_09_13_042048_create_withdraws_table',20),(61,'2021_10_21_073157_add_type_and_rediraction_key_in_notifications_table',21),(62,'2021_10_21_074840_add_device_type_key_in_users_table',21),(63,'2021_10_25_052141_add_account_onboarding_complete_field_in_users_table',22),(64,'2021_10_25_063711_stripe_state_token',22);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) DEFAULT NULL COMMENT '1=active',
  `session_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (2,30,'Your session has been booked successfullty with Sasta Tutor.',1,7,NULL,'2021-09-17 12:36:38','2021-09-17 12:36:38'),(3,6,'Student Boy recently commented on your post.\"Great!\"',1,NULL,30,'2021-09-22 07:43:40','2021-09-22 07:43:40'),(4,6,'Ramos  recently replied on your post related comment.\"Having same friedns like you!\"',1,NULL,30,'2021-09-22 07:45:56','2021-09-22 07:45:56'),(5,23,'A new session has been booked from Student Boy.',1,8,NULL,'2021-09-24 13:02:48','2021-09-24 13:02:48'),(6,6,'Your session has been booked successfullty with Sasta Tutor.',1,8,NULL,'2021-09-24 13:02:49','2021-09-24 13:02:49'),(7,23,'A new session has been booked from Student Boy.',1,9,NULL,'2021-09-24 13:03:24','2021-09-24 13:03:24'),(8,6,'Your session has been booked successfullty with Sasta Tutor.',1,9,NULL,'2021-09-24 13:03:24','2021-09-24 13:03:24'),(9,23,'A new session has been booked from Student Boy.',1,10,NULL,'2021-09-24 13:03:53','2021-09-24 13:03:53'),(10,6,'Your session has been booked successfullty with Sasta Tutor.',1,10,NULL,'2021-09-24 13:03:53','2021-09-24 13:03:53'),(11,23,'A new session has been booked from Student Boy.',1,11,NULL,'2021-09-29 05:57:12','2021-09-29 05:57:12'),(12,6,'Your session has been booked successfullty with Sasta Tutor.',1,11,NULL,'2021-09-29 05:57:13','2021-09-29 05:57:13'),(13,23,'A new session has been booked from Student Boy.',1,12,NULL,'2021-10-05 15:30:09','2021-10-05 15:30:09'),(14,6,'Your session has been booked successfullty with John Smith.',1,12,NULL,'2021-10-05 15:30:09','2021-10-05 15:30:09'),(15,23,'A new session has been booked from Student Boy.',1,13,NULL,'2021-10-06 09:55:10','2021-10-06 09:55:10'),(16,6,'Your session has been booked successfullty with John Smith.',1,13,NULL,'2021-10-06 09:55:10','2021-10-06 09:55:10'),(19,4,'Adnan Masic recently like your post.',1,NULL,1,'2021-10-10 19:05:21','2021-10-10 19:05:21'),(20,4,'Adnan Masic recently commented on your post.\"Congrats ?\"',1,NULL,1,'2021-10-10 19:05:44','2021-10-10 19:05:44'),(21,6,'Student Boy recently like your post.',1,NULL,35,'2021-10-11 04:15:17','2021-10-11 04:15:17'),(22,6,'Student Boy recently like your post.',1,NULL,35,'2021-10-11 04:16:00','2021-10-11 04:16:00'),(23,23,'A new session has been booked from Student Boy.',1,15,NULL,'2021-10-12 12:31:10','2021-10-12 12:31:10'),(24,6,'Your session has been booked successfullty with John Smith.',1,15,NULL,'2021-10-12 12:31:10','2021-10-12 12:31:10'),(25,6,'Adnan Masic recently like your post.',1,NULL,42,'2021-10-12 10:09:43','2021-10-12 10:09:43'),(26,6,'Student Boy recently like your post.',1,NULL,49,'2021-10-12 12:42:01','2021-10-12 12:42:01'),(27,6,'Adnan Masic recently like your post.',1,NULL,49,'2021-10-13 07:22:20','2021-10-13 07:22:20'),(28,6,'Student Boy recently like your post.',1,NULL,49,'2021-10-15 09:41:43','2021-10-15 09:41:43'),(29,6,'Student Boy recently like your post.',1,NULL,49,'2021-10-15 09:45:09','2021-10-15 09:45:09'),(30,6,'Student Boy recently like your post.',1,NULL,49,'2021-10-15 09:45:14','2021-10-15 09:45:14'),(31,23,'A new session has been booked from Student Boy.',1,16,NULL,'2021-10-15 16:24:17','2021-10-15 16:24:17'),(32,6,'Your session has been booked successfullty with John smith.',1,16,NULL,'2021-10-15 16:24:17','2021-10-15 16:24:17'),(33,6,'Student Boy recently like your post.',1,NULL,48,'2021-10-19 04:47:01','2021-10-19 04:47:01'),(34,6,'Student Boy recently commented on your post.\"Hey guys please reply for the same\"',1,NULL,42,'2021-10-19 05:08:25','2021-10-19 05:08:25'),(35,23,'A new session has been booked from Ramos .',1,17,NULL,'2021-10-21 18:31:59','2021-10-21 18:31:59'),(36,16,'Your session has been booked successfullty with John smith.',1,17,NULL,'2021-10-21 18:31:59','2021-10-21 18:31:59'),(37,6,'Student Boy recently like your post.',1,NULL,50,'2021-10-21 13:26:01','2021-10-21 13:26:01'),(38,16,'Student Boy recently like your post.',1,NULL,47,'2021-10-21 13:26:36','2021-10-21 13:26:36'),(39,16,'Student Boy recently like your post.',1,NULL,45,'2021-10-21 13:27:12','2021-10-21 13:27:12'),(40,6,'Student Boy recently like your post.',1,NULL,43,'2021-10-21 13:43:31','2021-10-21 13:43:31'),(41,23,'Some Boy recently like your post.',1,NULL,52,'2021-10-21 13:44:49','2021-10-21 13:44:49'),(42,23,'Some Boy recently like your post.',1,NULL,52,'2021-10-22 04:12:41','2021-10-22 04:12:41'),(43,23,'Some Boy recently like your post.',1,NULL,52,'2021-10-22 04:17:35','2021-10-22 04:17:35'),(44,23,'Some Boy recently like your post.',1,NULL,52,'2021-10-22 04:27:31','2021-10-22 04:27:31'),(45,23,'Some Boy recently like your post.',1,NULL,52,'2021-10-22 04:28:24','2021-10-22 04:28:24'),(46,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 10:43:40','2021-10-22 10:43:40'),(47,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 10:59:53','2021-10-22 10:59:53'),(48,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 11:00:08','2021-10-22 11:00:08'),(49,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 11:07:03','2021-10-22 11:07:03'),(50,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 11:08:21','2021-10-22 11:08:21'),(51,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-22 11:08:28','2021-10-22 11:08:28'),(52,6,'Some Boy recently like your post.',1,NULL,35,'2021-10-22 12:44:29','2021-10-22 12:44:29'),(53,19,'Adnan Masic recently like your post.',1,NULL,51,'2021-10-24 05:06:20','2021-10-24 05:06:20'),(54,23,'Adnan Masic recently like your post.',1,NULL,52,'2021-10-24 05:06:21','2021-10-24 05:06:21'),(55,23,'Adnan Masic recently commented on your post.\"Checks out\"',1,NULL,52,'2021-10-24 05:06:34','2021-10-24 05:06:34'),(56,23,'Ramos  recently like your post.',1,NULL,52,'2021-10-25 04:56:50','2021-10-25 04:56:50'),(57,23,'Ramos  recently like your post.',1,NULL,52,'2021-10-25 04:58:21','2021-10-25 04:58:21'),(58,23,'Ramos  recently like your post.',1,NULL,52,'2021-10-25 05:04:31','2021-10-25 05:04:31'),(59,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-25 05:30:36','2021-10-25 05:30:36'),(60,19,'Ramos  recently commented on your post.\"Test Notif comment\"',1,NULL,51,'2021-10-25 05:31:37','2021-10-25 05:31:37'),(61,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-25 06:20:47','2021-10-25 06:20:47'),(62,19,'Ramos  recently commented on your post.\"Test Notif comment 2\"',1,NULL,51,'2021-10-25 06:25:10','2021-10-25 06:25:10'),(63,19,'Ramos  recently like your post.',1,NULL,51,'2021-10-25 06:30:48','2021-10-25 06:30:48'),(64,19,'Some Boy recently like your post.',1,NULL,53,'2021-10-25 06:37:20','2021-10-25 06:37:20'),(65,19,'Some Boy recently commented on your post.\"Test comment ?\"',1,NULL,53,'2021-10-25 06:37:40','2021-10-25 06:37:40'),(66,19,'Ramos  recently like your post.',1,NULL,53,'2021-10-25 06:40:29','2021-10-25 06:40:29'),(67,19,'Ramos  recently commented on your post.\"Test Notification comment 1\"',1,NULL,51,'2021-10-25 06:42:45','2021-10-25 06:42:45'),(68,19,'Ramos  recently commented on your post.\"Test Notification comment 1\"',1,NULL,53,'2021-10-25 06:43:35','2021-10-25 06:43:35'),(69,35,'Ramos  recently like your post.',1,NULL,54,'2021-10-25 07:14:08','2021-10-25 07:14:08'),(70,6,'Ramos  recently like your post.',1,NULL,50,'2021-10-25 10:08:41','2021-10-25 10:08:41'),(71,32,'Tes User recently like your post.',1,NULL,34,'2021-10-25 10:52:04','2021-10-25 10:52:04'),(72,32,'Tes User recently commented on your post.\"Test comment\"',1,NULL,34,'2021-10-25 10:52:20','2021-10-25 10:52:20'),(73,32,'Tes User recently replied on your post related comment.\"Reply 1\"',1,NULL,34,'2021-10-25 10:52:31','2021-10-25 10:52:31'),(74,19,'CR  recently like your post.',1,NULL,53,'2021-10-25 11:09:37','2021-10-25 11:09:37'),(75,19,'CR  recently commented on your post.\"Blah\"',1,NULL,53,'2021-10-25 11:09:48','2021-10-25 11:09:48'),(76,37,'CR  recently like your post.',1,NULL,58,'2021-10-25 11:11:58','2021-10-25 11:11:58'),(77,37,'CR  recently commented on your post.\"First cmnt\"',1,NULL,58,'2021-10-25 11:12:08','2021-10-25 11:12:08'),(78,37,'CR  recently replied on your post related comment.\"First reply\"',1,NULL,58,'2021-10-25 11:12:18','2021-10-25 11:12:18'),(79,23,'A new session has been booked from CR .',1,18,NULL,'2021-10-25 12:52:07','2021-10-25 12:52:07'),(80,37,'Your session has been booked successfullty with John smith.',1,18,NULL,'2021-10-25 12:52:07','2021-10-25 12:52:07'),(81,6,'Student Boy recently like your post.',1,NULL,36,'2021-10-26 10:53:09','2021-10-26 10:53:09'),(82,6,'Adnan Masic recently like your post.',1,NULL,50,'2021-10-28 21:39:51','2021-10-28 21:39:51'),(83,6,'Adnan Masic recently like your post.',1,NULL,50,'2021-10-28 21:39:52','2021-10-28 21:39:52'),(84,45,'A new session has been booked from Student Boy.',1,20,NULL,'2021-11-01 17:39:30','2021-11-01 17:39:30'),(85,6,'Your session has been booked successfullty with Chris James.',1,20,NULL,'2021-11-01 17:39:30','2021-11-01 17:39:30'),(86,45,'A new session has been booked from Student Boy.',1,21,NULL,'2021-11-01 17:41:26','2021-11-01 17:41:26'),(87,6,'Your session has been booked successfullty with Chris James.',1,21,NULL,'2021-11-01 17:41:26','2021-11-01 17:41:26'),(88,23,'A new session has been booked from Draco Malfoy.',1,22,NULL,'2021-11-08 10:01:57','2021-11-08 10:01:57'),(89,69,'Your session has been booked successfullty with John smith.',1,22,NULL,'2021-11-08 10:01:57','2021-11-08 10:01:57');
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_access_tokens`
--

LOCK TABLES `oauth_access_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_access_tokens` DISABLE KEYS */;
INSERT INTO `oauth_access_tokens` VALUES ('00be59f047ff1aec82f2960c9aed4fe5f92cef729773c33ad6e6c3b6e4914951514189a715ea4e94',24,1,'teacher@gmail.com-2021-09-21 06:34:58','[]',0,'2021-09-21 06:34:58','2021-09-21 06:34:58','2022-09-21 06:34:58'),('01dc76cd9ff0a5c1ab9a4aa89f1ed6d1a8aab0d511124607080e834386c6bf07d56cd03bb4650ce2',23,1,'sastatutor@gmail.com-2021-09-29 12:56:58','[]',0,'2021-09-29 12:56:58','2021-09-29 12:56:58','2022-09-29 12:56:58'),('03b2a471deb41ec9c64fb47e51934a825dc02e5c3bc382669dd251ace2bdd3531f9a9e00507ff4e5',23,1,'suraj.paul@xicom.biz-2021-10-07 07:34:45','[]',0,'2021-10-07 07:34:45','2021-10-07 07:34:45','2022-10-07 07:34:45'),('04f1d76b8852b1b488eac87f0d82835d4cbf710a038bdfd26d35522abf55acf68b8ef3c0099ed249',24,1,'teacher@gmail.com-2021-09-22 07:55:13','[]',0,'2021-09-22 07:55:13','2021-09-22 07:55:13','2022-09-22 07:55:13'),('0632f136071a41176a5320985ab3773cc205158901be8d26c8375899374e94deb7de1f9592558d6d',5,1,'somebody@gmail.com-2021-08-05 07:54:41','[]',0,'2021-08-05 07:54:41','2021-08-05 07:54:41','2022-08-05 07:54:41'),('073c3e5e294f70e82ab33d75f741073b11e25b15242248c4063d53b5cd2024d87937780caf7e94c5',15,1,'cornor@gmail.com-2021-08-27 11:34:43','[]',0,'2021-08-27 11:34:43','2021-08-27 11:34:43','2022-08-27 11:34:43'),('087542412d6621c45fbd78aa96254f00b7b5df3a50ed0ad6e2870bca3e9828dfbdbcb98f912e5022',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:16:26','[]',0,'2021-10-11 12:16:26','2021-10-11 12:16:26','2022-10-11 12:16:26'),('087bd2bbc0e7cc3b2c01a68bd98a4ebea80afe842ec7eea3c6e2f9e7df0920f8a33f9a5d8ee80294',6,1,'ravi.kumar@xicom.biz-2021-10-12 12:44:16','[]',0,'2021-10-12 12:44:17','2021-10-12 12:44:17','2022-10-12 12:44:17'),('090efb0ffc2f681f6b11d9795d1f6f8a33ef5f89c99e1fc1d37c6a27b54cf6e5fed04fd13572ae6c',6,1,'student@gmail.com-2021-09-22 07:49:08','[]',0,'2021-09-22 07:49:08','2021-09-22 07:49:08','2022-09-22 07:49:08'),('09a5fbb82272335d90e608b134736001679fb5da5a6ef1aa90fc281e5628d5109e0ab24ca31cfe96',46,3,'testTutor007@yopmail.com-2021-10-27 12:58:40','[]',0,'2021-10-27 12:58:40','2021-10-27 12:58:40','2022-10-27 12:58:40'),('09a78da41e8577cc77f42e0cbcd4426d786bdbff212a415c600ca3d03c3cd5f5fa94b67c458c004d',35,3,'dipankur00@gmail.com-2021-10-25 09:20:15','[]',0,'2021-10-25 09:20:15','2021-10-25 09:20:15','2022-10-25 09:20:15'),('09c3210cfa2dbee4c2b31b49a9b736c3d88b18efd177cdaff0fffed3ecdb317b1682e2f06e76d03a',17,1,'talented@gmail.com-2021-09-14 06:40:53','[]',0,'2021-09-14 06:40:53','2021-09-14 06:40:53','2022-09-14 06:40:53'),('09ee6438a768e31b3cd7e1b8d5b96c457b8638dab645528e5ae182a14e1165606ae0fe424ff5de48',68,3,'finalTutor@yopmail.com-2021-11-08 10:59:10','[]',0,'2021-11-08 10:59:10','2021-11-08 10:59:10','2022-11-08 10:59:10'),('0a66f778fe212b03f11e842d029cf9e031555c143fbfe57debf790c2e3507e88c76a79be6a787fbe',6,3,'ravi.kumar@xicom.biz-2021-10-28 07:00:21','[]',0,'2021-10-28 07:00:21','2021-10-28 07:00:21','2022-10-28 07:00:21'),('0b834b496cf04f11eb6abb09971901770d4bf5e42ef71a9c130a5039de2e18e0a6199d0d4f3118fa',23,1,'suraj.paul@xicom.biz-2021-10-20 12:39:51','[]',0,'2021-10-20 12:39:51','2021-10-20 12:39:51','2022-10-20 12:39:51'),('0c1e2bd21aa66e084b826453019b33c68d9c3eeaaa42b9f70b1ac7680ad5c3a05c991b9d34f5ebbe',16,3,'ramos@gmail.com-2021-10-21 12:56:02','[]',0,'2021-10-21 12:56:02','2021-10-21 12:56:02','2022-10-21 12:56:02'),('0ce4108a120bee06e875703390cb712977078e2ff618a69687c387817380d0920fd8f2631343e6f9',24,1,'teacher@gmail.com-2021-09-07 06:47:19','[]',0,'2021-09-07 06:47:20','2021-09-07 06:47:20','2022-09-07 06:47:20'),('0d05d54ba08db688ea543ed78ed69c01c43a2aebc1fae1e4cda0d5a7ed8d17548b2a1c2a5032eb16',5,1,'somebody@gmail.com-2021-08-27 13:16:52','[]',0,'2021-08-27 13:16:52','2021-08-27 13:16:52','2022-08-27 13:16:52'),('0fd8165bc3c7a92ae4f0fc11f98b4b936bc957dc83179273ccee0e873f8ddffe30d91804b27124df',38,3,'testTutor@yopmail.om-2021-10-25 13:20:20','[]',0,'2021-10-25 13:20:20','2021-10-25 13:20:20','2022-10-25 13:20:20'),('0ff96eb05e51e0d60b9ba4e1af82f7de7eff90694fa30cdc7ce41a92b90f23060a6bd7138c155164',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:21:41','[]',0,'2021-10-08 10:21:41','2021-10-08 10:21:41','2022-10-08 10:21:41'),('1087a75542f6ab082c258b649784bd5e03116699961c2139cda490681e6eb6f27609039ab8183565',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:48:43','[]',0,'2021-10-11 12:48:43','2021-10-11 12:48:43','2022-10-11 12:48:43'),('117b6573a6895cf2eae15ef54f8cfa9a2fb1048721c50051754b4ddef9f9aa8fc7f27207f8bbbde0',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:34:55','[]',0,'2021-10-08 10:34:55','2021-10-08 10:34:55','2022-10-08 10:34:55'),('138b6a73c9a239db4d089aadf9eccd25894947a401f0ce5ae1b31ac0fe67a5606b44b3d23a664093',24,1,'teacher@gmail.com-2021-09-01 04:32:00','[]',0,'2021-09-01 04:32:00','2021-09-01 04:32:00','2022-09-01 04:32:00'),('14311160def9216b46bf8eeb7c1850f7ddecf3974ea1d4448bb8a65c321addb31753b5a4bc6626c5',37,3,'cr007@yopmail.com-2021-10-25 10:58:14','[]',0,'2021-10-25 10:58:14','2021-10-25 10:58:14','2022-10-25 10:58:14'),('14317d0fd03eac070344986b3e0d387882558c412a2b364862423961c8dca3687f7c3a68243696d0',23,3,'suraj.paul1@xicom.biz-2021-10-29 12:02:24','[]',0,'2021-10-29 12:02:24','2021-10-29 12:02:24','2022-10-29 12:02:24'),('143de9ab8701109b0202aca0a39d24d2957bd89c2272b60e2d18c57b295d3788b9cf303f6d4fea5a',16,1,'ramos@gmail.com-2021-08-18 06:33:02','[]',0,'2021-08-18 06:33:02','2021-08-18 06:33:02','2022-08-18 06:33:02'),('15159b312fe1c607135b90ec4f9ffb9f0a218268897baab51e8235c6ee84df373e6343055d8a20b7',6,3,'ravi.kumar@xicom.biz-2021-10-25 06:18:02','[]',0,'2021-10-25 06:18:02','2021-10-25 06:18:02','2022-10-25 06:18:02'),('15871e7a48feb154344bf9a0a7a4cb62900b71b19e718bde521023a0ba3ef6e2a1139a931c4c1e94',6,3,'ravi.kumar@xicom.biz-2021-10-22 04:30:57','[]',0,'2021-10-22 04:30:57','2021-10-22 04:30:57','2022-10-22 04:30:57'),('16c04047224eff4e9eeff766577df9266229f0bc99d5090eee87bf34f21b0c2fb95c648ad60e88da',6,1,'student@gmail.com-2021-10-05 07:58:17','[]',0,'2021-10-05 07:58:17','2021-10-05 07:58:17','2022-10-05 07:58:17'),('1937b07cf2e5c769b7a31fa84e3661cb202da7e5e65c02f829eeb7d93611203fb05191cdd9113a17',17,1,'talented@gmail.com-2021-09-14 05:59:00','[]',0,'2021-09-14 05:59:00','2021-09-14 05:59:00','2022-09-14 05:59:00'),('1a32f08727034b739e22975e934bdf0440c9fafc48abdf3321ca06e533dafe031851893e875a632b',15,1,'cornor@gmail.com-2021-09-13 09:05:54','[]',0,'2021-09-13 09:05:54','2021-09-13 09:05:54','2022-09-13 09:05:54'),('1b8f889841d8141b9cd33f738c5f5b4b62f11bf4db1bd93b9f1a2821f06ca76a754d90d96c1c9136',23,1,'suraj.paul@xicom.biz-2021-10-19 11:14:45','[]',0,'2021-10-19 11:14:45','2021-10-19 11:14:45','2022-10-19 11:14:45'),('1ba9ef6006e26754830fc3a961d775d4c808a00fbed724be73540f069f71c886a202bd57f0ea8e8a',19,3,'zalton@gmail.com-2021-10-25 07:39:46','[]',0,'2021-10-25 07:39:46','2021-10-25 07:39:46','2022-10-25 07:39:46'),('1c66e99e0b17eacc0af99c747f64d98d764c5a627db8dd7dd178aa568347847ab30ec7b2b530c3fa',66,3,'test@taco.com-2021-10-30 14:00:25','[]',0,'2021-10-30 14:00:26','2021-10-30 14:00:26','2022-10-30 14:00:26'),('1d5a1f3a74ea7a8f277c1812d634dd47c3e7b37a63fcf7c6bb1776d08c3c3653f434dc5c28c7947e',23,1,'suraj.paul@xicom.biz-2021-10-15 06:54:48','[]',0,'2021-10-15 06:54:49','2021-10-15 06:54:49','2022-10-15 06:54:49'),('1d6c471de9c00760204c7da171f0c369c4f2fd332656822d7bff2d231589a54827d7b22ad282b04d',6,3,'ravi.kumar@xicom.biz-2021-10-25 06:05:51','[]',0,'2021-10-25 06:05:51','2021-10-25 06:05:51','2022-10-25 06:05:51'),('1e3b3bc296d69e8c9fa23388a53b3f703e564976290fa46372074b68a4f9fac4ce5a67979ae087f6',21,1,'johncolon@studybuddyllc.com-2021-08-20 15:54:05','[]',0,'2021-08-20 15:54:05','2021-08-20 15:54:05','2022-08-20 15:54:05'),('1e6a95d1bca34f48b4f4dd28f565bcbf66fa2c37612c23d57a94648560c2b252ea5f196d15b99f80',6,1,'ravi.kumar@xicom.biz-2021-10-08 04:19:38','[]',0,'2021-10-08 04:19:38','2021-10-08 04:19:38','2022-10-08 04:19:38'),('205c6100c43206bb2180ea1b94d99e5d50626d8c4f76c60a3797cea1f75c1b226d5fcab25efc17e9',23,1,'sastatutor@gmail.com-2021-09-28 04:15:12','[]',0,'2021-09-28 04:15:13','2021-09-28 04:15:13','2022-09-28 04:15:13'),('210c5de7a183e6a1ce5c273224440bd5548e3ad8e18b2b7dd49503129ea31e900c88e9fc2725867d',3,1,'student@gmail.com-2021-08-05 04:11:10','[]',0,'2021-08-05 04:11:10','2021-08-05 04:11:10','2022-08-05 04:11:10'),('21c82d9764975e9e7766a964585b01ef0d2479e1a883d73f1d16f0b6d56317f17d406ea458cc0034',3,1,'student@gmail.com-2021-08-03 07:49:52','[]',0,'2021-08-03 07:49:52','2021-08-03 07:49:52','2022-08-03 07:49:52'),('2504077cb9f182d7491e5ce979e97eee9f5092f945ed7dbc454d3720357d884e4bf1be1c748fbee3',23,3,'suraj.paul@xicom.biz-2021-10-25 11:52:13','[]',0,'2021-10-25 11:52:13','2021-10-25 11:52:13','2022-10-25 11:52:13'),('2587dc0abd9f8af15dc6ee1a3de823b0120a20d670a93f05c7cc95d6b44323119b5aeaaf97cc1182',6,1,'student@gmail.com-2021-09-21 05:41:21','[]',0,'2021-09-21 05:41:21','2021-09-21 05:41:21','2022-09-21 05:41:21'),('287a727e57448b336cac6ac4a1228542012b0db641487bdf8da5083076d19500657c462e3c6feb90',5,1,'somebody@gmail.com-2021-09-21 05:19:45','[]',0,'2021-09-21 05:19:45','2021-09-21 05:19:45','2022-09-21 05:19:45'),('2a58249cc11cb2ec91151cdb0a8727bfd01fa6c8b60380ac845938879a38ed569e78132e87f64c6a',22,1,'flymate@gmail.com-2021-08-26 12:20:36','[]',0,'2021-08-26 12:20:36','2021-08-26 12:20:36','2022-08-26 12:20:36'),('2b9c86e1d139fe2f020730b865c04126588c947551790c7a57076ec768ce057a13a2767ffa33f56f',15,1,'cornor@gmail.com-2021-08-27 13:17:27','[]',0,'2021-08-27 13:17:27','2021-08-27 13:17:27','2022-08-27 13:17:27'),('2e9a45638e73507ce9ef1d77148aa0fe7aa487a7b679d48024775d6721d49499490d3287b3679cb4',16,1,'ramos@gmail.com-2021-08-24 13:06:34','[]',0,'2021-08-24 13:06:34','2021-08-24 13:06:34','2022-08-24 13:06:34'),('2f22cc2d01aa31f8b229e8fdf621c1e7dc49267852dd27d6bb40bb56853cc58ea242ced7d5ffaa6f',23,3,'suraj.paul1@xicom.biz-2021-10-27 11:46:45','[]',0,'2021-10-27 11:46:45','2021-10-27 11:46:45','2022-10-27 11:46:45'),('2fa30cc7ce268ef6e0dd928c92d0f94fd2d1a38045626bafeebfb743dc82c804c920156cde820459',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:09:03','[]',0,'2021-10-08 10:09:03','2021-10-08 10:09:03','2022-10-08 10:09:03'),('30833528a318792c681bcfd5fa64138d9abe0da4898055cc24254193429a58b0d2034924bfed4db4',26,1,'sweetu@gmail.com-2021-09-14 06:29:06','[]',0,'2021-09-14 06:29:06','2021-09-14 06:29:06','2022-09-14 06:29:06'),('309c650673c99bd089735add7286cf6682459dc86a886e7c225e12a2ace8556375be978ddabf7daf',24,1,'teacher@gmail.com-2021-09-14 04:03:53','[]',0,'2021-09-14 04:03:53','2021-09-14 04:03:53','2022-09-14 04:03:53'),('335690e5b3659bcef19247cd3cfcdcb438e7777b835baea6bdc80b68a6422f47cd65488c84002d42',23,3,'suraj.paul1@xicom.biz-2021-10-28 05:15:39','[]',0,'2021-10-28 05:15:39','2021-10-28 05:15:39','2022-10-28 05:15:39'),('33ed89a4a787c4c3c50fe817732ebb473d80a55e13d62e710131a96ead5b69052adf218d60dcaf0e',63,3,'tommyjames@yopmail.com-2021-10-29 11:11:20','[]',0,'2021-10-29 11:11:20','2021-10-29 11:11:20','2022-10-29 11:11:20'),('3418a91b166d52c166e7af3fd60cce359d3518db3d5b340568a103f9251db7ac7e7bdcbdb59a2ff1',23,1,'sastatutor@gmail.com-2021-09-24 11:48:51','[]',0,'2021-09-24 11:48:51','2021-09-24 11:48:51','2022-09-24 11:48:51'),('3478e074e424a0def127491a71f53580406561b4e69c7ab8594e6abcfe62c5322522a9fb41db0878',28,1,'chotabacha@gmail.com-2021-09-07 07:02:11','[]',0,'2021-09-07 07:02:11','2021-09-07 07:02:11','2022-09-07 07:02:11'),('349cd124b1d387f601cd696303824cfdb55ed6d8d8f5020b43ecabbbf183c1cf14aebd5a414141d7',23,1,'suraj.paul@xicom.biz-2021-10-14 06:16:04','[]',0,'2021-10-14 06:16:04','2021-10-14 06:16:04','2022-10-14 06:16:04'),('35903dd90e0c7d14558ef8b5b22534ff5ad99d730bd02f76967c72776a5659d39b715287cd742a09',6,1,'ravi.kumar@xicom.biz-2021-10-12 09:32:28','[]',0,'2021-10-12 09:32:28','2021-10-12 09:32:28','2022-10-12 09:32:28'),('361da7b11185cf275adc2bbbef14a54176f50f80d55214542f0f793611bfbf92742c959137d4843e',6,3,'ravi.kumar@xicom.biz-2021-10-25 06:24:54','[]',0,'2021-10-25 06:24:54','2021-10-25 06:24:54','2022-10-25 06:24:54'),('36a48ed2bf1662e53c4c20a89ce9c8542fd9e8049479cbb8c919104b15fd044ac64f97434ecd89cf',26,1,'sweetu@gmail.com-2021-09-21 06:34:44','[]',0,'2021-09-21 06:34:44','2021-09-21 06:34:44','2022-09-21 06:34:44'),('375f82bf73d9269ee0a7e1be8910d6c0da7db06c1203cf55fb01e3d038ac27b9f873a87076a9bfd6',69,3,'finalstudent@yopmail.com-2021-11-08 09:45:30','[]',0,'2021-11-08 09:45:30','2021-11-08 09:45:30','2022-11-08 09:45:30'),('3815febb9a29097ba170fba6f2b5da6dd4ca1971c4f3b65a54ed7abf67690a0db3251086cb5f1762',23,1,'suraj.paul@xicom.biz-2021-10-18 05:08:02','[]',0,'2021-10-18 05:08:02','2021-10-18 05:08:02','2022-10-18 05:08:02'),('389ee14088e016b2c7f68c2bdc8e8dcf88cfd15f384dda4db0436f5d4a8291ba7ef99965c152a3ea',23,1,'suraj.paul@xicom.biz-2021-10-21 09:32:56','[]',0,'2021-10-21 09:32:56','2021-10-21 09:32:56','2022-10-21 09:32:56'),('39141d86f09e010623c9954f88061da27647088805c4f2d2d3a9f2bd3032369828498eff0b71d6b2',23,1,'suraj.paul@xicom.biz-2021-10-07 07:49:47','[]',0,'2021-10-07 07:49:47','2021-10-07 07:49:47','2022-10-07 07:49:47'),('39a4f1810d23170419e6f401b321098ec448731eaba6892a5bd3fa6660312ddf299b989d74ab20a8',27,1,'ravi.kumar@xicom.biz-2021-09-14 06:27:47','[]',0,'2021-09-14 06:27:47','2021-09-14 06:27:47','2022-09-14 06:27:47'),('3b383056ec6ea3e354868515372b3f4eee26835098eb9248655ca4ce799b2df7ed399e1c97a99bd2',6,1,'ravi.kumar@xicom.biz-2021-10-21 07:16:27','[]',0,'2021-10-21 07:16:27','2021-10-21 07:16:27','2022-10-21 07:16:27'),('3c166a6c936b3a2e6a93ad5a343a3d19971f15024221cccae4778f64a7e38b9f67b90757b118dc3a',6,1,'student@gmail.com-2021-09-30 11:19:59','[]',0,'2021-09-30 11:19:59','2021-09-30 11:19:59','2022-09-30 11:19:59'),('3e0fb3cfbb9ebb9d68bddb0bcc735a927ed95957184dd755f96f412442f605ffc1b54caec1d956c7',5,1,'somebody@gmail.com-2021-10-21 05:50:36','[]',0,'2021-10-21 05:50:36','2021-10-21 05:50:36','2022-10-21 05:50:36'),('3e38396b46f86a14e3a8a063bc35eb664341dafd5a61875e90cdf52d08c576935cafd8499ff12e0b',18,1,'adomatic@studybuddyllc.com-2021-08-18 07:47:48','[]',0,'2021-08-18 07:47:48','2021-08-18 07:47:48','2022-08-18 07:47:48'),('3ea9c2be77ba2bc1c285cb51ad08e0554701851999c66e552b827ab5d42b24aa58048fd5546181fd',17,1,'talented@gmail.com-2021-09-14 06:50:19','[]',0,'2021-09-14 06:50:19','2021-09-14 06:50:19','2022-09-14 06:50:19'),('3f88fcb27f759d69b9d7b254295c4822dac7f8977ba23a08da5ca2eeb2e1c0f716161195a6e2f44a',6,1,'ravi.kumar@xicom.biz-2021-10-20 06:46:41','[]',0,'2021-10-20 06:46:41','2021-10-20 06:46:41','2022-10-20 06:46:41'),('3fda47ab3138bcd9eb1a76f52e1130d4a8f183ee50cf6c078634a5e1e6f9b95bb934911ce6340fdb',33,1,'adnanmasic12@yahoo.com-2021-10-17 18:06:26','[]',0,'2021-10-17 18:06:27','2021-10-17 18:06:27','2022-10-17 18:06:27'),('41dcc6e8c3504ab2f343d311b02d70890677aa257bf48f2f7d34ac91f2ae67de777925210ed83fcc',6,3,'ravi.kumar@xicom.biz-2021-10-22 04:32:25','[]',0,'2021-10-22 04:32:25','2021-10-22 04:32:25','2022-10-22 04:32:25'),('42b06b055c7167c37aca135245d68f6062e97e2425bcc897b9ca6e1cdb9632aa0fcd643ef0ce34c5',26,1,'sweetu@gmail.com-2021-09-21 06:07:38','[]',0,'2021-09-21 06:07:38','2021-09-21 06:07:38','2022-09-21 06:07:38'),('44b343f83fcd770953b7c2254cd14990d8e9bc3f7cc6e79bda11272bf4a7bffb5f0e2605963f0a80',43,3,'chrisjames@yopmail.com-2021-10-27 09:54:33','[]',0,'2021-10-27 09:54:33','2021-10-27 09:54:33','2022-10-27 09:54:33'),('44c026d80a7fd2d34f9a9030db28020d33f3bf606a525679acab638c68eec8a075ab16c9def1e80c',23,1,'suraj.paul@xicom.biz-2021-10-07 07:54:44','[]',0,'2021-10-07 07:54:44','2021-10-07 07:54:44','2022-10-07 07:54:44'),('461c9c4bb71f1b22d844d931109dabd8d4f764657b553d11987188c3587aa996a1d0aa58806056a2',6,1,'student@gmail.com-2021-09-17 06:16:41','[]',0,'2021-09-17 06:16:42','2021-09-17 06:16:42','2022-09-17 06:16:42'),('4633a9c69adf93b64ae97a013b42eed10671dc91e6538546d13b3544c722fd9a665724d8238017b2',37,3,'cr007@yopmail.com-2021-10-25 11:00:18','[]',0,'2021-10-25 11:00:18','2021-10-25 11:00:18','2022-10-25 11:00:18'),('464309a3751294f13280dabaa6fcb742f23be9964ac4dbda437d325a074c63b2a57e7b2bdf40dc73',23,3,'suraj.paul1@xicom.biz-2021-10-27 13:21:09','[]',0,'2021-10-27 13:21:09','2021-10-27 13:21:09','2022-10-27 13:21:09'),('468489cb4f25f4e94e8c281ff783dbdb181ef65d6030d54ad0a9afdf79ae9b5700bb1fe36d8deb89',23,1,'suraj.paul@xicom.biz-2021-10-21 12:05:34','[]',0,'2021-10-21 12:05:34','2021-10-21 12:05:34','2022-10-21 12:05:34'),('46bdadb662b884015cf16d1d131d9878399126e78118e9a48c569f828df8fc99c80a5d52823fd7f3',6,1,'ravi.kumar@xicom.biz-2021-10-21 05:51:57','[]',0,'2021-10-21 05:51:57','2021-10-21 05:51:57','2022-10-21 05:51:57'),('4838f4a988a6f8672a323b2915d175cedc2070bdef4ef312a9d751fcb304df422f525a11c15480ea',61,3,'testertutor@yopmail.com-2021-10-28 12:44:45','[]',0,'2021-10-28 12:44:45','2021-10-28 12:44:45','2022-10-28 12:44:45'),('48408d4f88324973c62aee6edd7cb503e3e668a2f3397498defdfc42e9bc6da940afa0a016b44d8c',23,1,'suraj.paul@xicom.biz-2021-10-21 11:37:19','[]',0,'2021-10-21 11:37:19','2021-10-21 11:37:19','2022-10-21 11:37:19'),('486e7eadbcac54a063ef4c5d5ed9b1eea744073baf78cac2ca6d5054e12ba78447e898e67a4a3090',5,1,'somebody@gmail.com-2021-08-17 07:02:01','[]',0,'2021-08-17 07:02:01','2021-08-17 07:02:01','2022-08-17 07:02:01'),('4a2fac241d9b759ce9ca70ccb6ba02f5167c36ddb506d785df3307b46e11ca689f23c9f05a3a5261',24,1,'teacher@gmail.com-2021-09-02 06:27:02','[]',0,'2021-09-02 06:27:02','2021-09-02 06:27:02','2022-09-02 06:27:02'),('4b39d8500f2d26886a9460ef0bf941b001e9692145b31bbff6bdf17004958d102a55e490826a4562',6,1,'ravi.kumar@xicom.biz-2021-10-08 05:15:54','[]',0,'2021-10-08 05:15:54','2021-10-08 05:15:54','2022-10-08 05:15:54'),('4b653b6d4476814c898e38957c573a8963a9d68c3a2e1388bf104456ffce9080a20973dee5800e2e',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:12:22','[]',0,'2021-10-08 10:12:22','2021-10-08 10:12:22','2022-10-08 10:12:22'),('4bf302cf8defb4ea9f91226aa6ec48e614e95229b787663ba733414d4c660895e2aa6454443fcc0b',16,3,'ramos@gmail.com-2021-10-25 07:58:34','[]',0,'2021-10-25 07:58:34','2021-10-25 07:58:34','2022-10-25 07:58:34'),('4ea8f0ccf03805489ee972c8e7b4d0eb90cb7e58d55b4f4706ed6f0cb29a4e972366743032d37e10',17,1,'talented@gmail.com-2021-08-27 11:11:21','[]',0,'2021-08-27 11:11:21','2021-08-27 11:11:21','2022-08-27 11:11:21'),('4fa9734b3b5bad87ee3671c8ee023cca1423cc03b309bb0045e0550375d5c04090c7ec1fcf694a47',23,1,'suraj.paul@xicom.biz-2021-10-04 04:42:00','[]',0,'2021-10-04 04:42:01','2021-10-04 04:42:01','2022-10-04 04:42:01'),('4fe93b34441530989801c9b961b62d4dda48b350299ee2c31b95dd3ff97bc31dafe84547656e4974',23,1,'suraj.paul@xicom.biz-2021-10-07 07:02:57','[]',0,'2021-10-07 07:02:58','2021-10-07 07:02:58','2022-10-07 07:02:58'),('514afb84198aa8660da28efb7d964fedce5b7d5a890552a3579b51aad8559e6e75e8fe43b7b8d1ad',19,3,'zalton@gmail.com-2021-10-25 06:19:18','[]',0,'2021-10-25 06:19:18','2021-10-25 06:19:18','2022-10-25 06:19:18'),('51a216c618b388f74a1a3815cd16db044311b49ccb20b3f6e9e3102be4c9fadba3548bd9ecf1ed3d',6,1,'ravi.kumar@xicom.biz-2021-10-15 09:34:04','[]',0,'2021-10-15 09:34:04','2021-10-15 09:34:04','2022-10-15 09:34:04'),('54d982a6205ef6b21d9972088955c1668535a03d80770aebeed079ad37b4cbc883fab52b4fb75ff4',40,3,'neymar@gmail.com-2021-10-26 11:34:50','[]',0,'2021-10-26 11:34:50','2021-10-26 11:34:50','2022-10-26 11:34:50'),('552092b29f3f7d0ed33def5cebdad56adf366ac9d0c6402aeb0e580e7ca3d794bd69c29a7e496885',6,3,'ravi.kumar@xicom.biz-2021-10-25 10:24:42','[]',0,'2021-10-25 10:24:42','2021-10-25 10:24:42','2022-10-25 10:24:42'),('55700654c48b50af98b1b022c58df70a3bf27180b05daf8eafee0da9f930159e2c451e9ba71f416e',23,1,'suraj.paul@xicom.biz-2021-10-07 07:36:38','[]',0,'2021-10-07 07:36:38','2021-10-07 07:36:38','2022-10-07 07:36:38'),('55b9084a1d8db4e26b1ada0cbf51c067152ea7f71648415a86101734d540d8633015ebb16f5c6c55',6,1,'ravi.kumar@xicom.biz-2021-10-20 06:47:08','[]',0,'2021-10-20 06:47:08','2021-10-20 06:47:08','2022-10-20 06:47:08'),('5602b6d2d949924213da176e9006b75bb74f3005543c9887d0252e84c009e21dddcc37f918bfae4f',24,1,'teacher@gmail.com-2021-09-02 06:52:46','[]',0,'2021-09-02 06:52:47','2021-09-02 06:52:47','2022-09-02 06:52:47'),('56037844e71d3a6a019ff640ee7263faca8a2a489fd8680c2d0386938d5008b33a3f7ca9fd2b6c1a',3,1,'student@gmail.com-2021-08-05 04:19:17','[]',0,'2021-08-05 04:19:17','2021-08-05 04:19:17','2022-08-05 04:19:17'),('5612260c0857c0ee4447ae82c18e40076c3c7909d1b1fa2713debe97178ccf326a1b816c746d7685',17,1,'talented@gmail.com-2021-08-26 12:26:37','[]',0,'2021-08-26 12:26:37','2021-08-26 12:26:37','2022-08-26 12:26:37'),('5730d53d2511dbec2c101b644546c5d60abd2a4204d266860ade0a6ba03059b0d5fd173a4f422ea9',6,1,'ravi.kumar@xicom.biz-2021-10-07 07:34:31','[]',0,'2021-10-07 07:34:31','2021-10-07 07:34:31','2022-10-07 07:34:31'),('573aad9e370c05b98ea45ce354bf437ca4a171e0684d8336b79828bc8f75301d2e6c9cfed444dc25',30,1,'suraj.paul@xicom.biz-2021-09-17 09:58:05','[]',0,'2021-09-17 09:58:05','2021-09-17 09:58:05','2022-09-17 09:58:05'),('580e5ba57fe256a14da291779a6cdb00cddf6875c5e36374c6f81583dc26ba1332c0e24f44be61b3',23,1,'suraj.paul@xicom.biz-2021-10-11 05:11:10','[]',0,'2021-10-11 05:11:10','2021-10-11 05:11:10','2022-10-11 05:11:10'),('5894616a0e5f4548929c551153a54710c2312378e7b5fdc78568f9e9cccc7e1d806cb4431f15290b',19,1,'zalton@gmail.com-2021-10-21 07:37:12','[]',0,'2021-10-21 07:37:12','2021-10-21 07:37:12','2022-10-21 07:37:12'),('593fa4fc909624af15981831f8b7e3578471ba226c5895e370c59a874f2627c682e81a5ed175fb66',19,1,'zalton@gmail.com-2021-09-21 05:22:02','[]',0,'2021-09-21 05:22:02','2021-09-21 05:22:02','2022-09-21 05:22:02'),('5a33a691dd855010beb74e8fa36e86575f22021127079f88bffa6adc8c697fe6f87f545d2ead6006',60,3,'someuser@yopmail.com-2021-10-28 12:39:10','[]',0,'2021-10-28 12:39:10','2021-10-28 12:39:10','2022-10-28 12:39:10'),('5ad7d88f5bb4a53ba42d4106fc1ef81bfaa862844fefc4ae02a9c172d474b7d8bf97cb365087bb93',23,1,'suraj.paul@xicom.biz-2021-10-21 11:05:12','[]',0,'2021-10-21 11:05:12','2021-10-21 11:05:12','2022-10-21 11:05:12'),('5b8c2fa840821576abc2fda6ff3cf8dda868a9dec4cabb2abc58a0adde5a14db09e260dc2ac264df',13,1,'test4@gmail.com-2021-08-16 06:32:41','[]',0,'2021-08-16 06:32:41','2021-08-16 06:32:41','2022-08-16 06:32:41'),('5c6b7bb45b283ddf541342f453576e258cadd6b963514c3b73bf1dd2538efdb92f227ca74fac779a',15,1,'cornor@gmail.com-2021-09-09 07:01:29','[]',0,'2021-09-09 07:01:30','2021-09-09 07:01:30','2022-09-09 07:01:30'),('5e76d515f3d64eca2bbd6edafc479b86718c232fd438ee4362c88bd76ad2b25391a896bb19484896',23,1,'suraj.paul@xicom.biz-2021-10-18 05:06:17','[]',0,'2021-10-18 05:06:17','2021-10-18 05:06:17','2022-10-18 05:06:17'),('5ef14ac604af944e1e949b3dfc8b01d46534a8c939379a25f3833ddb2bb1c01168f7ea11f6e090dd',26,1,'sweetu@gmail.com-2021-09-21 06:07:29','[]',0,'2021-09-21 06:07:29','2021-09-21 06:07:29','2022-09-21 06:07:29'),('5f3a4c75f9dd9a4223e83f298d17db335191bef1cee6e0166d5d08d43f80c70ece5ee4fae4a2ac4f',6,1,'ravi.kumar@xicom.biz-2021-10-21 05:47:44','[]',0,'2021-10-21 05:47:44','2021-10-21 05:47:44','2022-10-21 05:47:44'),('60457571b6c18a7d5c10a3c307b313985255a0b3646b3e95dc7eae19593656439d34aef93789a82d',6,1,'ravi.kumar@xicom.biz-2021-10-21 12:25:31','[]',0,'2021-10-21 12:25:31','2021-10-21 12:25:31','2022-10-21 12:25:31'),('605060e65dbe18a7d4a213510b9a728c1f78cc911c03ba29c6fb0453bd959b5b5ae9662a530b22f5',6,1,'ravi.kumar@xicom.biz-2021-10-19 05:19:01','[]',0,'2021-10-19 05:19:02','2021-10-19 05:19:02','2022-10-19 05:19:02'),('6083746d26c9243b2c4b08068ed806fa3a12e59b57f0d9d9b4cf7f14671be7375edc0be80ce9dafe',6,1,'student@gmail.com-2021-09-29 03:56:17','[]',0,'2021-09-29 03:56:17','2021-09-29 03:56:17','2022-09-29 03:56:17'),('61480742ad168d25ff9359cc3326a08a55af914d3bf9027a3c569ecdfee9ec8e84b0250885d3fa56',23,1,'sastatutor@gmail.com-2021-09-14 07:02:35','[]',0,'2021-09-14 07:02:35','2021-09-14 07:02:35','2022-09-14 07:02:35'),('64d74ecea6d1757427357892f5716d39a32ae668d0462a8922e1c771311908c55106b6120d003a3b',23,3,'suraj.paul@xicom.biz-2021-10-25 12:13:08','[]',0,'2021-10-25 12:13:08','2021-10-25 12:13:08','2022-10-25 12:13:08'),('6578aeeea55f553ea9cfd435f03f7144582b6ee8476859bf1a51658f34e43d54b6ba441e965474c1',9,1,'conorboy@gmail.com-2021-08-16 06:13:52','[]',0,'2021-08-16 06:13:52','2021-08-16 06:13:52','2022-08-16 06:13:52'),('66b2fd17b5534eb1c8ef5c139417a37a1e42127900b5f3b62ddf8e47906e29352aa08a8ef31f359b',68,3,'finalTutor@yopmail.com-2021-11-08 06:51:24','[]',0,'2021-11-08 06:51:25','2021-11-08 06:51:25','2022-11-08 06:51:25'),('68f11405a79a4221b9058fd86d248cad7bcc8a588b126b1fdea3ba15185a403ad5373629b75e02e5',5,1,'somebody@gmail.com-2021-08-26 12:15:16','[]',0,'2021-08-26 12:15:16','2021-08-26 12:15:16','2022-08-26 12:15:16'),('695d2c5de036e86773ed7541997af02fe440295169f5610d5f76042c9631d3af725062a51bec7b08',23,3,'suraj.paul1@xicom.biz-2021-11-08 10:10:22','[]',0,'2021-11-08 10:10:22','2021-11-08 10:10:22','2022-11-08 10:10:22'),('699a95a0d52b2d23d3be65c51263dd191a2e0b494880166c8d70048ba94465903b6382a4df421f7d',26,1,'sweetu@gmail.com-2021-09-21 07:58:19','[]',0,'2021-09-21 07:58:19','2021-09-21 07:58:19','2022-09-21 07:58:19'),('6b0c5ea9add33de091a7c9f86172e105cb7743f6dd07aaab8a0bc43826364cbefd264ca3d998495d',6,3,'ravi.kumar@xicom.biz-2021-10-25 07:45:42','[]',0,'2021-10-25 07:45:42','2021-10-25 07:45:42','2022-10-25 07:45:42'),('6b1b0c668678277ce7a99fe831e2bc9a13db5add225430f00de929226ede6e08d129a5c677b1fd87',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:33:49','[]',0,'2021-10-08 10:33:49','2021-10-08 10:33:49','2022-10-08 10:33:49'),('6b6043502e45adda4dc6447abc083a6b5ce565df42637a80d69b30d40116b294d1e36ad3473da3e7',6,1,'student@gmail.com-2021-09-18 10:11:08','[]',0,'2021-09-18 10:11:08','2021-09-18 10:11:08','2022-09-18 10:11:08'),('6c98ae74d85fc17514ecf2f8144b905bc150772779807c7731c403c9b3b4f50923e572a5159227a3',23,3,'suraj.paul@xicom.biz-2021-10-22 10:40:26','[]',0,'2021-10-22 10:40:26','2021-10-22 10:40:26','2022-10-22 10:40:26'),('6d9c2e3962f65d64c0583595157c8541a4e3ba049bb51dc96cbba762e10ae8c839d56e9e5a433d37',19,3,'zalton@gmail.com-2021-10-22 10:40:41','[]',0,'2021-10-22 10:40:41','2021-10-22 10:40:41','2022-10-22 10:40:41'),('6dd7b919381e4a60aecda6c966ab59a94bcc9248df9bcb3f490170a3095a5244955099933903a823',24,1,'teacher@gmail.com-2021-09-02 06:28:48','[]',0,'2021-09-02 06:28:48','2021-09-02 06:28:48','2022-09-02 06:28:48'),('6ead33701e1f70688dfc024b753bc392a421b800934da724af9b70b02119bdceea48364532cda988',16,1,'ramos@gmail.com-2021-09-22 07:45:21','[]',0,'2021-09-22 07:45:22','2021-09-22 07:45:22','2022-09-22 07:45:22'),('70f1fbb48f26360bce571d706435e06d4f027e0f08c99a64ce0a4eef017234101f72fda5d9330c1a',19,3,'zalton@gmail.com-2021-10-21 13:35:01','[]',0,'2021-10-21 13:35:01','2021-10-21 13:35:01','2022-10-21 13:35:01'),('712171d6001941e8271cb8206e9d2074c20194338284658e8afec183cd6d5105f4299fd39d5045c7',6,1,'ravi.kumar@xicom.biz-2021-10-11 11:55:06','[]',0,'2021-10-11 11:55:06','2021-10-11 11:55:06','2022-10-11 11:55:06'),('72df213cee19222d97ebbffe0ea3cfdc4882d25ad5b9b4e6d2b7c06ec139ffb7e77326d229276eee',29,1,'mehngatutor@gmail.com-2021-09-14 06:18:44','[]',0,'2021-09-14 06:18:44','2021-09-14 06:18:44','2022-09-14 06:18:44'),('739bc400daf1fdd5d76689059d59fdb2cc5d437f139267395a05b5ad512b85dcd33e8b1423d44821',32,1,'test@yahoo.com-2021-10-06 13:07:00','[]',0,'2021-10-06 13:07:00','2021-10-06 13:07:00','2022-10-06 13:07:00'),('74870fd35ed7cdf4cd91763a4763697870115dcafeafe0ab0ca93c37d25f1069d80de7b4bcf0b024',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:02:18','[]',0,'2021-10-08 10:02:18','2021-10-08 10:02:18','2022-10-08 10:02:18'),('7564bf8c0a4442ee2484a129c4c7b1aafa390504d1af5475e6fb1333f4a482984478c24a8cefa196',23,3,'suraj.paul1@xicom.biz-2021-10-29 11:59:03','[]',0,'2021-10-29 11:59:03','2021-10-29 11:59:03','2022-10-29 11:59:03'),('75885e08fd6373a9cbb10a005fb7836814c519b09e939537fb382d7d24805372832a248aaeaddd42',5,1,'somebody@gmail.com-2021-10-21 07:43:12','[]',0,'2021-10-21 07:43:12','2021-10-21 07:43:12','2022-10-21 07:43:12'),('762700eb8868fbcfbe60001c1f47984a1447b7f51b879894bb1d04ca32770cb22b1edc66a8cd74b1',6,3,'ravi.kumar@xicom.biz-2021-10-25 09:59:17','[]',0,'2021-10-25 09:59:17','2021-10-25 09:59:17','2022-10-25 09:59:17'),('76b2679a34d4e08b9b0af2c9859a45eae6939d1f5ee3a287c8b543e593cef913613ac1b3e5c946e1',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:08:24','[]',0,'2021-10-11 12:08:24','2021-10-11 12:08:24','2022-10-11 12:08:24'),('76da9e2c9e9a719fbd44652ac6d0b15999967239324fe8c03199241ea28b7a2fdb38a015a69538ab',23,3,'suraj.paul1@xicom.biz-2021-10-29 11:55:43','[]',0,'2021-10-29 11:55:43','2021-10-29 11:55:43','2022-10-29 11:55:43'),('77a46e5b41203695d0de61d97302fdd39382605656664c5aaaf19097e6ded6b73b5cceada77c62fc',16,3,'ramos@gmail.com-2021-10-22 10:43:21','[]',0,'2021-10-22 10:43:21','2021-10-22 10:43:21','2022-10-22 10:43:21'),('77f27c26a86d76c55d793508254df5bc390f9b27e766a78bb3b5665bfbdba30c9c1767ed44f1b828',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:41:37','[]',0,'2021-10-11 12:41:37','2021-10-11 12:41:37','2022-10-11 12:41:37'),('781e5c36de820d6ad944db37d9a23a44d5118b7d371c6fcde8c1f50e9ee4fd4224741c126dd37091',23,1,'suraj.paul@xicom.biz-2021-10-07 07:21:49','[]',0,'2021-10-07 07:21:49','2021-10-07 07:21:49','2022-10-07 07:21:49'),('78c619578b21715ef773a4cbb7a04c1c3ddcd0ec29c3fec727a9bde6d657d60438d4e7990825d5b6',6,1,'ravi.kumar@xicom.biz-2021-10-15 06:15:13','[]',0,'2021-10-15 06:15:13','2021-10-15 06:15:13','2022-10-15 06:15:13'),('7929ce9e62de9fbfbdd699904348610dbd07cc3bb762a7e5d5862abf6b11a8949425aedf7a00e3fd',6,3,'ravi.kumar@xicom.biz-2021-10-25 06:06:30','[]',0,'2021-10-25 06:06:30','2021-10-25 06:06:30','2022-10-25 06:06:30'),('7988717e11afa4c9546a3fd0e80cf66e62458cb854e2a55ecefd7572394a77ede48b012aa9948827',23,1,'johnsmith@gmail.com-2021-09-30 12:05:08','[]',0,'2021-09-30 12:05:08','2021-09-30 12:05:08','2022-09-30 12:05:08'),('7a6e6ad354edad0c856d7b50539608d2ed24d13038f81a565e271c39847539f042d395e48bc091ac',65,3,'chrishems@yopmail.com-2021-11-01 12:33:50','[]',0,'2021-11-01 12:33:50','2021-11-01 12:33:50','2022-11-01 12:33:50'),('7b115ec1de3cfd53d99d2705da68cbe644ae06af779fc929d8ddfb03a617ef4b763dd0924168f70c',23,1,'suraj.paul@xicom.biz-2021-10-21 11:53:44','[]',0,'2021-10-21 11:53:44','2021-10-21 11:53:44','2022-10-21 11:53:44'),('7bd74b682b510844424c3c89298eb2b556866d274dadd5c0a40def850fd2bdf8aeaabf0346b2643e',44,3,'chrisjames@yopmail.com-2021-10-27 10:14:11','[]',0,'2021-10-27 10:14:11','2021-10-27 10:14:11','2022-10-27 10:14:11'),('7bf0218968942cbd3d1c2178b90114388ad6eec90c6d31f7a6551693cb168b650c8096d0603a3476',23,1,'suraj.paul@xicom.biz-2021-10-21 10:10:57','[]',0,'2021-10-21 10:10:57','2021-10-21 10:10:57','2022-10-21 10:10:57'),('7e913d9557e3b118f1d198838f682f8a2c137ea4f4959984a67614e00953b34ef87ac683bbca0131',23,3,'suraj.paul@xicom.biz-2021-10-21 12:49:19','[]',0,'2021-10-21 12:49:19','2021-10-21 12:49:19','2022-10-21 12:49:19'),('803992097153873dc4a4a2e49094a3f9bf05a1810e1b7126db0971622c8d09391ff17394d5c7b957',23,3,'suraj.paul1@xicom.biz-2021-10-27 09:25:59','[]',0,'2021-10-27 09:25:59','2021-10-27 09:25:59','2022-10-27 09:25:59'),('80a4354676e2ab2bcd6a162570204b38e445d5b812c4651a857e5f1902ef34b9ab509772c4f8a22d',3,1,'student@gmail.com-2021-08-04 04:46:15','[]',0,'2021-08-04 04:46:15','2021-08-04 04:46:15','2022-08-04 04:46:15'),('80eddf17c4bae18012c700c110e8a4ef0939290305fad983163d51b49d38293d36ff0e63d2ac5e88',23,3,'suraj.paul1@xicom.biz-2021-11-08 10:03:41','[]',0,'2021-11-08 10:03:41','2021-11-08 10:03:41','2022-11-08 10:03:41'),('80f0a374de68f6ab96ddd58fa2e5c1a321f134cd5bc96db6d0d2ada8819d4b67aa7daca36f1fa82d',19,3,'zalton@gmail.com-2021-10-21 13:44:10','[]',0,'2021-10-21 13:44:10','2021-10-21 13:44:10','2022-10-21 13:44:10'),('814e5dfc4d1545e2d387ae7e98946c3dc512298348c29bec2e344506dce97f17a449a190328d4e98',34,1,'faf@gmail.com-2021-10-19 05:42:30','[]',0,'2021-10-19 05:42:30','2021-10-19 05:42:30','2022-10-19 05:42:30'),('81f40183838bd93af6101c40a660918ac235ca4dae9bb5de197fb7811de501f5560608c54d54f756',69,3,'finalstudent@yopmail.com-2021-11-08 09:14:29','[]',0,'2021-11-08 09:14:29','2021-11-08 09:14:29','2022-11-08 09:14:29'),('82b7142f1098504f40c4f82a63f0d79014c91b86e303f91c7b5c97ba4ce3e2fc3da3069d2197541b',39,3,'testtutor1@yopmail.com-2021-10-26 04:30:20','[]',0,'2021-10-26 04:30:20','2021-10-26 04:30:20','2022-10-26 04:30:20'),('82f5fbb6f37c7ea6c9381d4a0889ffebf93798710ba626315aff152f1c79df4b26719ea0ae11f5a6',23,3,'suraj.paul1@xicom.biz-2021-10-29 11:41:00','[]',0,'2021-10-29 11:41:00','2021-10-29 11:41:00','2022-10-29 11:41:00'),('835641e9babf99865e2bc66f6e908f575fc973b7796bef486f1b105019f27c0b8cfde7777a1eef6a',36,3,'testUser@yopmail.com-2021-10-25 10:51:01','[]',0,'2021-10-25 10:51:01','2021-10-25 10:51:01','2022-10-25 10:51:01'),('838b4fc984b6b14c1fc832321da4fb43441fb718733d05b4ca7738cb24b84fc71ae63cccacaf66ad',22,1,'flymate@gmail.com-2021-08-24 05:45:49','[]',0,'2021-08-24 05:45:49','2021-08-24 05:45:49','2022-08-24 05:45:49'),('83f6c4eac6ad66d8846ca01ce713a023c9d3b997842166122ff1e15b0400c94e496aba049bc27640',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:10:11','[]',0,'2021-10-08 10:10:11','2021-10-08 10:10:11','2022-10-08 10:10:11'),('8447e7ee1df34b069f16d2c7efdb4e28dd2e8964a133c457af3f5637c7855f1083ae472151a553f1',23,1,'suraj.paul@xicom.biz-2021-10-21 11:03:25','[]',0,'2021-10-21 11:03:25','2021-10-21 11:03:25','2022-10-21 11:03:25'),('8455c1295e690ef96312d238ba2286c24e659c9cf5b84678339bb876f89f77c9ee6ea2fe715d2e5c',29,1,'mehngatutor@gmail.com-2021-09-14 06:11:50','[]',0,'2021-09-14 06:11:50','2021-09-14 06:11:50','2022-09-14 06:11:50'),('847d6886981a43fbcc1f2354f05063c974283f854d9a75eed643a423b3bfc886c844473341ba4e5c',14,1,'fdsf@gmail.com-2021-08-16 06:35:41','[]',0,'2021-08-16 06:35:41','2021-08-16 06:35:41','2022-08-16 06:35:41'),('84b1978f244a6cd556fb4d62c78f865487d161ea069a0d7e06224c4a17b660f80f01539886d716b2',6,1,'ravi.kumar@xicom.biz-2021-10-08 04:47:37','[]',0,'2021-10-08 04:47:37','2021-10-08 04:47:37','2022-10-08 04:47:37'),('8545e2a0c396e165066fdd89be9e0c5e0cae89055d879907a9def2988d8b9ef2c4db87a0a6a14d5d',23,1,'suraj.paul@xicom.biz-2021-10-07 09:01:09','[]',0,'2021-10-07 09:01:09','2021-10-07 09:01:09','2022-10-07 09:01:09'),('859416b809576184d54f927bb086c8ffc649465722ce7403c602a3596cf8eab5da935a51b94ed2ed',17,1,'talented@gmail.com-2021-09-14 05:36:09','[]',0,'2021-09-14 05:36:09','2021-09-14 05:36:09','2022-09-14 05:36:09'),('866e6cf93aa28c2c43b1eb69bd348d70bc3a476b75fb3cab10b34567949ac1265ca6206f246d3b10',6,1,'ravi.kumar@xicom.biz-2021-10-12 12:00:28','[]',0,'2021-10-12 12:00:28','2021-10-12 12:00:28','2022-10-12 12:00:28'),('874291db0f90d53c71f64bd236a34d28d5cad3e2c81f90aa699160bec29cbe09e02b550ad8569ea3',6,3,'ravi.kumar@xicom.biz-2021-10-26 10:20:32','[]',0,'2021-10-26 10:20:32','2021-10-26 10:20:32','2022-10-26 10:20:32'),('885a70abeb4ae65fcbaad22d3c3d37b51da1e125c8b8802304b568afb12bea763bb21c49b6e8da5e',23,1,'suraj.paul@xicom.biz-2021-10-20 09:20:23','[]',0,'2021-10-20 09:20:24','2021-10-20 09:20:24','2022-10-20 09:20:24'),('8953cc3962d642a1a56973fd361c4c2933b4755e7cab3bb9b276e25dcb9dee0d099736f9d63c764f',16,3,'ramos@gmail.com-2021-10-25 04:56:03','[]',0,'2021-10-25 04:56:03','2021-10-25 04:56:03','2022-10-25 04:56:03'),('8a8676b97408679b5112bceb0920069d3731f627a0e119dc2bd088af70f5062cd84ca71d4fcd3bcc',16,1,'ramos@gmail.com-2021-08-24 05:49:58','[]',0,'2021-08-24 05:49:58','2021-08-24 05:49:58','2022-08-24 05:49:58'),('8ae8adf82393dfca06960d32e57de531765b27f648024fe1139c91a4c8e0838ccc43b25d586d54df',23,3,'suraj.paul@xicom.biz-2021-10-26 05:31:06','[]',0,'2021-10-26 05:31:07','2021-10-26 05:31:07','2022-10-26 05:31:07'),('8f279a1dcf0a711f373d1c857d60740566f0ecc514c4cbdd7ebd0645f7fb8cbcff4d28e87ceddc1d',24,1,'teacher@gmail.com-2021-09-02 06:34:35','[]',0,'2021-09-02 06:34:37','2021-09-02 06:34:37','2022-09-02 06:34:37'),('8f86191b7f53dd04af91a62479983b7e7e5c59b64219c0659d4a9c47dcf3503afd76f6b3ec3c4de9',27,1,'ravi.kumar@xicom.biz-2021-10-05 10:29:21','[]',0,'2021-10-05 10:29:21','2021-10-05 10:29:21','2022-10-05 10:29:21'),('90eb234060484a790abb2d20246d7f10fc13dfc8f59e91c7d40da7c5ee9ed73b2688904484e46af2',23,1,'sastatutor@gmail.com-2021-09-20 09:04:06','[]',0,'2021-09-20 09:04:06','2021-09-20 09:04:06','2022-09-20 09:04:06'),('918251f8698041b09a62708765eab6652f0d15fc031727ce34ee62f28ec4c84e4e8a3373609589ec',12,1,'test3@gmail.com-2021-08-16 06:30:00','[]',0,'2021-08-16 06:30:00','2021-08-16 06:30:00','2022-08-16 06:30:00'),('927ed180b489c1825ed113bf6c51b3394f04680307dee25a0d4784b3f351584b168b50a2d4b7587e',16,1,'ramos@gmail.com-2021-08-27 11:49:45','[]',0,'2021-08-27 11:49:45','2021-08-27 11:49:45','2022-08-27 11:49:45'),('92d65ce05a129f55038f401a83916d571ebd0bbe7f044386994d6a66d0803b8b408567f4a01f4c5b',6,3,'ravi.kumar@xicom.biz-2021-10-28 10:47:30','[]',0,'2021-10-28 10:47:30','2021-10-28 10:47:30','2022-10-28 10:47:30'),('92f545902262a2295abeec3e3658f0fdd4f52c1519ef292e306e3b68503daf0866daa38dcaad13c2',23,1,'suraj.paul@xicom.biz-2021-10-07 07:53:43','[]',0,'2021-10-07 07:53:43','2021-10-07 07:53:43','2022-10-07 07:53:43'),('939a4d17a8479e939ee84e320196a61a3ca015584735c96e62018d4696410a28929e379910d88337',23,1,'suraj.paul@xicom.biz-2021-10-21 09:33:08','[]',0,'2021-10-21 09:33:08','2021-10-21 09:33:08','2022-10-21 09:33:08'),('939d452cd449a784bd0945ff03e1350de4fea52c93cdbc4a4036e1415c07648d0e080bf42597d831',23,3,'suraj.paul1@xicom.biz-2021-10-28 12:50:17','[]',0,'2021-10-28 12:50:17','2021-10-28 12:50:17','2022-10-28 12:50:17'),('9417b4e8d9d9ad592750aa83ea9d987fec7935140511faa84cd46d68430b0118402bcbf4a88fd5f9',65,3,'chrishems@yopmail.com-2021-10-29 12:05:19','[]',0,'2021-10-29 12:05:19','2021-10-29 12:05:19','2022-10-29 12:05:19'),('947f91c85d8ff122998470dba6e6dbaaf77b7d328722e7247e2e2d632b24af98cf91d802d8d8c242',23,1,'sastatutor@gmail.com-2021-09-28 06:06:45','[]',0,'2021-09-28 06:06:45','2021-09-28 06:06:45','2022-09-28 06:06:45'),('9493a65c9295cdc0c2b2f9c235d532ec8ff2e93a58908f4c54ad40d784b813b252341a4b329ffbcd',4,1,'stu@gmail.com-2021-08-05 04:27:57','[]',0,'2021-08-05 04:27:57','2021-08-05 04:27:57','2022-08-05 04:27:57'),('94d5217bbf72d32b06fd84879454946f328eeba47a2ab575f0a4c76366dc9233c68a2786d413b3c3',6,3,'ravi.kumar@xicom.biz-2021-10-28 10:41:00','[]',0,'2021-10-28 10:41:00','2021-10-28 10:41:00','2022-10-28 10:41:00'),('96381da9294887a02eaa2d5f2422f9dac42644b584ede474ac41306195873daa4ecacda1f5a26b02',23,1,'suraj.paul@xicom.biz-2021-10-06 09:13:57','[]',0,'2021-10-06 09:13:57','2021-10-06 09:13:57','2022-10-06 09:13:57'),('970a844b471df2f2dc299c4f2e51aaf2ea79c589a5eb1b7291e52826d2a977cf472ab13e0c7c63da',17,1,'talented@gmail.com-2021-08-18 06:37:46','[]',0,'2021-08-18 06:37:46','2021-08-18 06:37:46','2022-08-18 06:37:46'),('9717132e9b6cf31162d1c43f8ac344869d2dc09d9536d57c8827a0887317981894490b7b3c8066c8',23,3,'suraj.paul@xicom.biz-2021-10-21 13:40:18','[]',0,'2021-10-21 13:40:18','2021-10-21 13:40:18','2022-10-21 13:40:18'),('97be639038ef8c55f174abd7bd4a63800a5c2f92395810ae085f67ace5fd9c42ed8e642b1dcf1113',64,3,'tomhardy@yopmail.com-2021-10-29 11:23:19','[]',0,'2021-10-29 11:23:19','2021-10-29 11:23:19','2022-10-29 11:23:19'),('99b574d504e27b809f6f9b87c08ebafca88deb4fd341b45b07d7f5aafc7e98ce2a0b7870bff24629',23,1,'johnsmith@gmail.com-2021-09-30 09:20:10','[]',0,'2021-09-30 09:20:10','2021-09-30 09:20:10','2022-09-30 09:20:10'),('9a6431329d8c013bcc6433f78d76c3b778bfab78249b3f138ae335caae7a5dcd57b0ec205576caec',26,1,'sweetu@gmail.com-2021-09-06 10:28:56','[]',0,'2021-09-06 10:28:56','2021-09-06 10:28:56','2022-09-06 10:28:56'),('9a888b87cc83b06d33ddbe4d900f9d51efa157f9b3f5085c5de3c061d03ee3d7f83cd10f69e6caae',25,1,'ravi.kumar@xicom.biz-2021-09-02 06:55:53','[]',0,'2021-09-02 06:55:53','2021-09-02 06:55:53','2022-09-02 06:55:53'),('9a9a65ec1061ba240fda76fa6816114ecdbd2c1ef779dc19f31c396a14230db12019af4f5f31946e',65,3,'chrishems@yopmail.com-2021-11-02 07:20:44','[]',0,'2021-11-02 07:20:44','2021-11-02 07:20:44','2022-11-02 07:20:44'),('9bc00153af7e5a84b33fcc82ba4a7e47c5e2200c076efcaf7a9ef27d92e8db4c2dda5764e5d5122f',23,1,'sastatutor@gmail.com-2021-09-14 06:37:51','[]',0,'2021-09-14 06:37:51','2021-09-14 06:37:51','2022-09-14 06:37:51'),('9bc35a8fa1f48c0532c6d94c6162224f7ac0aa18de4e5f0b0de522ba4c838b088b85114a27bfb88e',23,1,'suraj.paul@xicom.biz-2021-10-12 09:20:45','[]',0,'2021-10-12 09:20:45','2021-10-12 09:20:45','2022-10-12 09:20:45'),('9cdb1b6945d6123e4aa9b250630fa6fe9e6c3793a3c4f496d21ec7f5a6f2e294863addb3c7f8ea06',23,1,'suraj.paul@xicom.biz-2021-10-21 05:24:18','[]',0,'2021-10-21 05:24:18','2021-10-21 05:24:18','2022-10-21 05:24:18'),('9d58829ce830ceb52f7bbfbb00474f5f485b66d4f08e2319c3f75751d187d7728d7de40c27ab5249',5,1,'somebody@gmail.com-2021-08-18 06:26:50','[]',0,'2021-08-18 06:26:50','2021-08-18 06:26:50','2022-08-18 06:26:50'),('9e2148c0dbbb212cecbeb32ba1f118a1c0625c2f8e957fce5a34ed37035bf8dba6c03467e4d0350b',41,3,'tutorrk@gmail.com-2021-10-27 09:14:49','[]',0,'2021-10-27 09:14:49','2021-10-27 09:14:49','2022-10-27 09:14:49'),('9e8c5befcaae026ccb686e1248a77f9c74425f40d0b1bca1866389b4eeb409aac020d0887cfcfb50',23,3,'suraj.paul1@xicom.biz-2021-10-27 13:20:03','[]',0,'2021-10-27 13:20:03','2021-10-27 13:20:03','2022-10-27 13:20:03'),('9eee5349457ec596fe22aad6897f4060f41ab40ecba26e1828d50cd5ec6c0b07ca50aa2ad8be6d3c',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:00:47','[]',0,'2021-10-11 12:00:47','2021-10-11 12:00:47','2022-10-11 12:00:47'),('9fed8b9244d297adeecb4e96616f1ad44334ee127fdf58ca0df25972c0ef2fd8a6fcb4520f2819b5',23,3,'suraj.paul1@xicom.biz-2021-10-28 06:42:58','[]',0,'2021-10-28 06:42:58','2021-10-28 06:42:58','2022-10-28 06:42:58'),('a0847bf3e141ad9328dd72a3cb703d6ef8026cfbf81aabcd68442ae70e5df9c7414ae18b982ca9ee',40,3,'neymar@gmail.com-2021-10-26 09:57:35','[]',0,'2021-10-26 09:57:35','2021-10-26 09:57:35','2022-10-26 09:57:35'),('a0ea8ba445801af4b221cf224719500441fb554cebcecfff05f16825851038911120659b2be9af65',15,1,'newuser@gmail.com-2021-08-18 06:34:55','[]',0,'2021-08-18 06:34:55','2021-08-18 06:34:55','2022-08-18 06:34:55'),('a0fbba20fb22da371adac0a09ce3ec49c017464c885c45b93437f9f78227823520ffcfe2e831780a',23,1,'suraj.paul@xicom.biz-2021-10-21 11:46:01','[]',0,'2021-10-21 11:46:01','2021-10-21 11:46:01','2022-10-21 11:46:01'),('a0fdfc02b0bbdeacf44c31884b4a6262ef4e32730965d648f8c71be21113f065bba55a27a0ac1241',68,3,'finalTutor@yopmail.com-2021-11-08 06:21:34','[]',0,'2021-11-08 06:21:35','2021-11-08 06:21:35','2022-11-08 06:21:35'),('a1d0a80fef25db3c65395f34eaed20daffe71ad1a1c69c6a73e54bb02c397278fdae88905c9828e7',23,1,'sastatutor@gmail.com-2021-08-31 07:26:53','[]',0,'2021-08-31 07:26:53','2021-08-31 07:26:53','2022-08-31 07:26:53'),('a22d1bea647c2bef05ad2f7328a0a45554396c6dd875cb5ffc7326150a2cff7719b2f04b2136ca26',24,1,'teacher@gmail.com-2021-09-14 06:33:19','[]',0,'2021-09-14 06:33:19','2021-09-14 06:33:19','2022-09-14 06:33:19'),('a2d4b5b54e0a77fa6980dae8eee9e562d39c19a1fcf9bbd338027fad498fb8f0ea522565928c0a9b',23,3,'suraj.paul@xicom.biz-2021-10-25 11:52:13','[]',0,'2021-10-25 11:52:13','2021-10-25 11:52:13','2022-10-25 11:52:13'),('a3899b7f200915b7ed7da8d0b7cae1430790ad4bdb1a71995483aa1ee740c8cb86833ff448bbaafb',69,3,'finalstudent@yopmail.com-2021-11-08 10:25:12','[]',0,'2021-11-08 10:25:12','2021-11-08 10:25:12','2022-11-08 10:25:12'),('a600f986f92d770a666eef084c9c489972954597b172f5e011f8b1d561e063e885218c4c6d3327d1',4,1,'stu@gmail.com-2021-08-26 12:22:18','[]',0,'2021-08-26 12:22:18','2021-08-26 12:22:18','2022-08-26 12:22:18'),('a7c81d03e8c9a2e8052dc66aa139c1cd9a0295840108e70da2d11da27123b6503f5b5a2ff093aa53',23,1,'suraj.paul@xicom.biz-2021-10-07 07:24:31','[]',0,'2021-10-07 07:24:31','2021-10-07 07:24:31','2022-10-07 07:24:31'),('a7c8749c14f48e3d1ddb06e8d386464f5f5bc51bae4356136fd4da1f415a5730e9d9246849a6d1af',19,1,'zlaton@gmail.com-2021-08-18 10:56:40','[]',0,'2021-08-18 10:56:40','2021-08-18 10:56:40','2022-08-18 10:56:40'),('a93d23e1812584e3b023aff492f5f25304179c3b53602bb85a2d4b7144365b820bb0a1ac0fa0a2fe',16,3,'ramos@gmail.com-2021-10-25 10:16:56','[]',0,'2021-10-25 10:16:56','2021-10-25 10:16:56','2022-10-25 10:16:56'),('a95f49ae8767bea8c661ee097315da276fb12481e634b3134dc9432f46684787d360e94cf252e328',16,1,'ramos@gmail.com-2021-08-26 12:14:10','[]',0,'2021-08-26 12:14:10','2021-08-26 12:14:10','2022-08-26 12:14:10'),('a971e38708c4371fa8a5963617ebcd9f161aad0f2d2472df6d04a86e423e9cfd798cf0829b382245',17,1,'talented@gmail.com-2021-08-27 13:16:22','[]',0,'2021-08-27 13:16:22','2021-08-27 13:16:22','2022-08-27 13:16:22'),('a9c84fcf37012688c2e5fa76ce2312d44aa5bf8ff4105639c971dbac1dc770d129fc6c2cc08c276e',24,1,'teacher@gmail.com-2021-09-02 06:25:56','[]',0,'2021-09-02 06:25:56','2021-09-02 06:25:56','2022-09-02 06:25:56'),('aa70e7a68dcf1cb1ce7e657d36145fd780b4c57dbd24d1290ec40e2ffc5b9e6e33610cb34617eb02',16,1,'ramos@gmail.com-2021-10-11 11:36:14','[]',0,'2021-10-11 11:36:14','2021-10-11 11:36:14','2022-10-11 11:36:14'),('ac7a7d21dd788a4c46b11d0e5b4c6b230b3397554816e77327374afe38f40059044a86870023addc',6,3,'ravi.kumar@xicom.biz-2021-10-22 04:32:45','[]',0,'2021-10-22 04:32:45','2021-10-22 04:32:45','2022-10-22 04:32:45'),('acc56ae3bdf43f0a212cc9503bba4de4658f34a2b81a43bed50ca4956e1b53af0aad66ce31f2709f',24,1,'teacher@gmail.com-2021-09-22 07:57:34','[]',0,'2021-09-22 07:57:34','2021-09-22 07:57:34','2022-09-22 07:57:34'),('ad1a53b8f964179f3610c9ad0263454ac58e3ec50da24ca4eff48312f9543eb01d8408332ece657c',7,1,'amasic@neiu.edu-2021-08-05 11:59:15','[]',0,'2021-08-05 11:59:15','2021-08-05 11:59:15','2022-08-05 11:59:15'),('ad25eaa82a4349abd3227da3638d3b21d827d68284e3d97b7877831b5d4682b2f26da9637f0cff76',23,1,'suraj.paul@xicom.biz-2021-10-11 07:16:36','[]',0,'2021-10-11 07:16:37','2021-10-11 07:16:37','2022-10-11 07:16:37'),('addbe78122b45bd57b3c1d7c4c9a7e035b89e4904f282a81f276eaee988c7c5d96e69d5bcfb0e034',6,1,'ravi.kumar@xicom.biz-2021-10-21 12:31:31','[]',0,'2021-10-21 12:31:31','2021-10-21 12:31:31','2022-10-21 12:31:31'),('ae1b00efc4fc908bcb36be710bd76a9c758762b829db3e9a30c84a1b0ac38a5eb503db8f726ed231',23,1,'suraj.paul@xicom.biz-2021-10-07 07:28:35','[]',0,'2021-10-07 07:28:35','2021-10-07 07:28:35','2022-10-07 07:28:35'),('ae648227dd153856dfce121677cecadbb781e20e33498590fdb87937d4472622b6bdcc7660637150',24,1,'teacher@gmail.com-2021-09-02 06:34:35','[]',0,'2021-09-02 06:34:37','2021-09-02 06:34:37','2022-09-02 06:34:37'),('af4842d00a80e94a9ce504bb2d2ae8b4ed3d1913a92f2e97dd9400397e3fd298ae23f3229e3639af',6,1,'student@gmail.com-2021-09-21 05:56:38','[]',0,'2021-09-21 05:56:38','2021-09-21 05:56:38','2022-09-21 05:56:38'),('b11b28e4c3d9264b1d024dd8c35dc3830bf9d9be21221d633d71022ad635a751274f59e8365fd82c',23,1,'suraj.paul@xicom.biz-2021-10-04 05:35:02','[]',0,'2021-10-04 05:35:02','2021-10-04 05:35:02','2022-10-04 05:35:02'),('b2293c42474c74ab1f43efae78774d86e11fd1c0e97de4e814ea2e8e4c01b647ecb680c28b5c5698',27,1,'ravi.kumar@xicom.biz-2021-09-07 06:48:15','[]',0,'2021-09-07 06:48:15','2021-09-07 06:48:15','2022-09-07 06:48:15'),('b23af3e0e062e9ba98346df74be5f47db042bb4be9042621b1558c2f5dafd6645aebc1f3087d0872',6,1,'student@gmail.com-2021-09-17 09:07:44','[]',0,'2021-09-17 09:07:44','2021-09-17 09:07:44','2022-09-17 09:07:44'),('b3262f3ea26bbaf42a2cd8ab2a65311fffc360fdc46eaf1165e006cbe0047a4cf0bdd5d14c093879',6,1,'ravi.kumar@xicom.biz-2021-10-15 13:36:30','[]',0,'2021-10-15 13:36:30','2021-10-15 13:36:30','2022-10-15 13:36:30'),('b332e8165c38e9513b767e11966351671f61fddcaa649a7efb56a103aa0e05493e48341477495e82',23,1,'suraj.paul@xicom.biz-2021-10-07 07:34:47','[]',0,'2021-10-07 07:34:47','2021-10-07 07:34:47','2022-10-07 07:34:47'),('b4a5e6f78df77c14ff010e93fb9b1b245ca8849e2543f382fa699a10e9f85a68d818e78dd2cf841b',24,1,'teacher@gmail.com-2021-09-02 06:37:13','[]',0,'2021-09-02 06:37:13','2021-09-02 06:37:13','2022-09-02 06:37:13'),('b906968b168929135b6a6a89709cf9f2df7323ce6f464f142cf3f367727c04e117be0cb9e1a822cc',6,1,'ravi.kumar@xicom.biz-2021-10-21 07:05:17','[]',0,'2021-10-21 07:05:17','2021-10-21 07:05:17','2022-10-21 07:05:17'),('b9433b3ac34df80694fbd4eb21e4eeb47be8cce689072f9dc9262d58203a289f37c4f49b1c7fe8ad',6,1,'ravi.kumar@xicom.biz-2021-10-08 04:18:19','[]',0,'2021-10-08 04:18:19','2021-10-08 04:18:19','2022-10-08 04:18:19'),('bc12459534a49cb78b345b30284d0b34f35fc944f72e1b4e5b88304a06aae66944d3f823fd8b965c',6,1,'ravi.kumar@xicom.biz-2021-10-05 11:24:08','[]',0,'2021-10-05 11:24:08','2021-10-05 11:24:08','2022-10-05 11:24:08'),('bd6580cd3f312e412bd3cf30811082952c24be6adb15bf459133422830393de6138308db25470492',40,3,'neymar@gmail.com-2021-10-26 06:19:46','[]',0,'2021-10-26 06:19:46','2021-10-26 06:19:46','2022-10-26 06:19:46'),('bdf9519cf6aebef386972e5c402cf7e360e5cbf6994b3637ce685b680d207db51079457c614e66e0',17,1,'talented@gmail.com-2021-08-18 06:12:31','[]',0,'2021-08-18 06:12:31','2021-08-18 06:12:31','2022-08-18 06:12:31'),('bf16bdefd60a672502426a1b8fef787b0d0bb12c6cb8d4893c2d518b822393bc72e91a4baa0f4a59',19,1,'zlaton@gmail.com-2021-08-27 11:29:05','[]',0,'2021-08-27 11:29:05','2021-08-27 11:29:05','2022-08-27 11:29:05'),('bf649d7c9a5319b9d8fac91f051041f688d27e55822aabbbcbd20e56e5692fb4b4111ce183f61350',23,1,'suraj.paul@xicom.biz-2021-10-21 11:46:13','[]',0,'2021-10-21 11:46:13','2021-10-21 11:46:13','2022-10-21 11:46:13'),('c0915bde3f58206a4088b4229b773c05cbfe4e5cfea2e6aed8df1597bdb42e3ea32f9ba1ca908b4e',40,3,'neymar@gmail.com-2021-10-26 09:06:56','[]',0,'2021-10-26 09:06:56','2021-10-26 09:06:56','2022-10-26 09:06:56'),('c17b94b208b6999facb8bd7bc8112107597d7c2595464b30f27ca000ef41ee39075c48f25b227929',31,1,'akash@yopmail.com-2021-10-01 12:54:43','[]',0,'2021-10-01 12:54:43','2021-10-01 12:54:43','2022-10-01 12:54:43'),('c34f15fbd468e0c7b4d1d4d2002488bd5ec80e4831b2fa41ca89e61ebd7d8230a1bacbf2a2a61533',6,1,'ravi.kumar@xicom.biz-2021-10-08 10:07:09','[]',0,'2021-10-08 10:07:09','2021-10-08 10:07:09','2022-10-08 10:07:09'),('c3be636d2eceaa10e9dbba4d900d5c6d4585f9ae476eba0bd40b137ab58029b3a66a688d78d24f9e',5,1,'somebody@gmail.com-2021-10-21 07:04:48','[]',0,'2021-10-21 07:04:48','2021-10-21 07:04:48','2022-10-21 07:04:48'),('c3c17745514a4e5b7e140020926b2877f5ca175391fa9215ed9d4d78a8b12fc64ef37c49e688f913',23,1,'suraj.paul@xicom.biz-2021-10-07 07:30:05','[]',0,'2021-10-07 07:30:05','2021-10-07 07:30:05','2022-10-07 07:30:05'),('c4086788297b0d9ff31da5566057211a99a44468fd2b1e6728bc786a3d8829fb62f2682ce9091d43',23,3,'suraj.paul@xicom.biz-2021-10-26 11:35:19','[]',0,'2021-10-26 11:35:19','2021-10-26 11:35:19','2022-10-26 11:35:19'),('c41ff4ba11e2e3a2bc348ba0876fd7cafd9a617e70e8d52f23788bd72a2e0f412b12f5d2a4e9e3d1',6,1,'ravi.kumar@xicom.biz-2021-10-08 09:25:03','[]',0,'2021-10-08 09:25:04','2021-10-08 09:25:04','2022-10-08 09:25:04'),('c4242055873594f1a0426fa8dfea292dc6dd9db1ca7d997a1647976b95a3e203b9759295819c604e',6,1,'student@gmail.com-2021-09-21 04:17:19','[]',0,'2021-09-21 04:17:19','2021-09-21 04:17:19','2022-09-21 04:17:19'),('c5911cc35d06c37500735fb9d5da67a5b5f19db17f87ca41a0350797dc0c8469dca3b4618edcdec4',23,1,'suraj.paul@xicom.biz-2021-10-20 09:21:09','[]',0,'2021-10-20 09:21:09','2021-10-20 09:21:09','2022-10-20 09:21:09'),('c6029b32a2a84ee0da9a3c041e6660864999700a66a04a2f2295caff5be4d89451e3c01b07f2e3f0',6,1,'ravi.kumar@xicom.biz-2021-10-08 09:43:16','[]',0,'2021-10-08 09:43:17','2021-10-08 09:43:17','2022-10-08 09:43:17'),('c67ff43398c486338520390a72c4f5581f90b6673c88d64abb4771ddef4c5c270e3f47a04aaa1846',23,1,'sastatutor@gmail.com-2021-09-28 04:31:34','[]',0,'2021-09-28 04:31:34','2021-09-28 04:31:34','2022-09-28 04:31:34'),('c69d616fb4b557904d96104d86aa29be7f60bd20db72de8208b8d0838e873d5361331b418aa0ea2a',6,1,'ravi.kumar@xicom.biz-2021-10-12 13:08:36','[]',0,'2021-10-12 13:08:36','2021-10-12 13:08:36','2022-10-12 13:08:36'),('c73e20cb1cbeb5cdc21f52198f8137095df12c2e32bd556360cd8d8f37fdff9aa0083c7eae0b48b8',23,1,'suraj.paul@xicom.biz-2021-10-07 07:31:32','[]',0,'2021-10-07 07:31:32','2021-10-07 07:31:32','2022-10-07 07:31:32'),('c77ff4c7c807d7dd0152c015d963eac15f29a8ca361fd1c9798b724c79e45339b24114ca5037682c',24,1,'teacher@gmail.com-2021-09-14 04:33:54','[]',0,'2021-09-14 04:33:54','2021-09-14 04:33:54','2022-09-14 04:33:54'),('c80b3be062425a12f2e107f3bc974f6749baaaebb8f437d8f9e5d5084496ba18f2783ed12e3811f7',11,1,'asdasdsad@gmail.com-2021-08-16 06:28:41','[]',0,'2021-08-16 06:28:41','2021-08-16 06:28:41','2022-08-16 06:28:41'),('c9d0cf330e2ba1ff65f0ca95ff50ca525f58a7b483f2ec07af10fa2bd2458f7918313f55c2b426cd',23,1,'suraj.paul@xicom.biz-2021-10-12 11:53:04','[]',0,'2021-10-12 11:53:04','2021-10-12 11:53:04','2022-10-12 11:53:04'),('cb0714b808b0b50aff90291d1429dc7f8e56c8cd86bb0d0f1ab00faf2b679ca7a9fc8967f2c361c5',23,1,'suraj.paul@xicom.biz-2021-10-07 07:50:49','[]',0,'2021-10-07 07:50:49','2021-10-07 07:50:49','2022-10-07 07:50:49'),('cc13754455869cb1ea04d572abe6d0e2a38f5f70872f555c5677f707a04fbb520647bd71e0b629e8',23,3,'suraj.paul@xicom.biz-2021-10-22 04:16:21','[]',0,'2021-10-22 04:16:21','2021-10-22 04:16:21','2022-10-22 04:16:21'),('cc1d82e0018288412eaa49c165e258c6f32a90d30969042ca00bbb956705a13bd3481ed950dea8ee',23,1,'suraj.paul@xicom.biz-2021-10-12 12:04:30','[]',0,'2021-10-12 12:04:30','2021-10-12 12:04:30','2022-10-12 12:04:30'),('cd361736ee7b5ac6cf5eb76a5b40e915a856084a0b873c6bd647f46c7fc1ace6106cb4a2770beb2d',20,1,'CommunityFly@studybuddyllc.com-2021-08-19 10:28:37','[]',0,'2021-08-19 10:28:37','2021-08-19 10:28:37','2022-08-19 10:28:37'),('cde11eeb96cb7c34bba74cfba04c4ce8e63152ee7a2b87fde27408b0526294138b4b59c5e77df29b',6,1,'student@gmail.com-2021-10-05 09:32:50','[]',0,'2021-10-05 09:32:50','2021-10-05 09:32:50','2022-10-05 09:32:50'),('ce44ab8fe07a91f86f18d9b06864e75d8b6fff053f788272a476eab3372d8835a8d23cf1e41f6105',23,1,'suraj.paul@xicom.biz-2021-10-07 07:38:30','[]',0,'2021-10-07 07:38:30','2021-10-07 07:38:30','2022-10-07 07:38:30'),('cf8a00f3f149713bab09cd2452f9c72d675d3075e1e804f999cc1c37c331aea6993a99fdd6bcbdef',23,3,'suraj.paul1@xicom.biz-2021-10-29 11:40:09','[]',0,'2021-10-29 11:40:09','2021-10-29 11:40:09','2022-10-29 11:40:09'),('cfb3af07ac3ad0ce9527db6110257c1209c767d1612a54d28dd48e06140ebabb6f49f48dc3a8c495',6,1,'ravi.kumar@xicom.biz-2021-10-07 07:28:15','[]',0,'2021-10-07 07:28:15','2021-10-07 07:28:15','2022-10-07 07:28:15'),('cfbb0a444079114b08de2500df1442b3a693191789c90ceb5bc997abbf224f5ec414e31575756e85',16,1,'ramos@gmail.com-2021-08-16 09:34:48','[]',0,'2021-08-16 09:34:49','2021-08-16 09:34:49','2022-08-16 09:34:49'),('cffdd84a2640136a0f3abcbd85544818e5d57cf23d067fdd05efd6a5a0e1f7e155c2746163f2ff87',40,3,'nymar@gmail.com-2021-10-26 07:48:31','[]',0,'2021-10-26 07:48:31','2021-10-26 07:48:31','2022-10-26 07:48:31'),('d150cead9e53c6ab5a45727c29e7488b38509b6092535b51bfec57950be1c636ee3e0584adb832fd',8,1,'conor@gmail.com-2021-08-16 06:13:28','[]',0,'2021-08-16 06:13:28','2021-08-16 06:13:28','2022-08-16 06:13:28'),('d1c8d3c8e202f89cf3e85ec0c71dca41c5bef99c6debf301412bb91b74da57dd7d2f70a9fd43f07c',27,1,'ravi.kumar@xicom.biz-2021-10-05 10:29:02','[]',0,'2021-10-05 10:29:02','2021-10-05 10:29:02','2022-10-05 10:29:02'),('d22f53da7e3532ea91b34d65a5106b35493411717ef3490bd7d641b56e6df7bdc3e0a2af46de4952',15,1,'cornor@gmail.com-2021-09-21 05:23:29','[]',0,'2021-09-21 05:23:29','2021-09-21 05:23:29','2022-09-21 05:23:29'),('d2eb00c22443e2eded17e3a9b52f34c3f6935d7e50adcfe7537d4760bd479e49bed07c7836ce42e4',6,1,'ravi.kumar@xicom.biz-2021-10-11 11:57:25','[]',0,'2021-10-11 11:57:25','2021-10-11 11:57:25','2022-10-11 11:57:25'),('d391440a1830693e02945139001272091803931e4c52fe5603c85eb09ebe3a2bda1176ca8d877cf1',19,1,'zlaton@gmail.com-2021-08-18 11:16:57','[]',0,'2021-08-18 11:16:57','2021-08-18 11:16:57','2022-08-18 11:16:57'),('d396f9fb1206e788d2921a19ab79bc7e5745e4be365bf9a34d3bd3b21c1a2368e103ab0bf9cede5f',15,1,'cornor@gmail.com-2021-10-21 05:49:08','[]',0,'2021-10-21 05:49:08','2021-10-21 05:49:08','2022-10-21 05:49:08'),('d40ea7aab873ad194e3c582aef342e711785e6ace557a263e34d4b1408640d1950405c57a83348b2',19,1,'zalton@gmail.com-2021-10-21 07:12:05','[]',0,'2021-10-21 07:12:05','2021-10-21 07:12:05','2022-10-21 07:12:05'),('d4d2ed12b4cc718ef0c68fef3ff454c91eee7b4686ea438ce856f763e859edc2f1f5442970f02572',26,1,'sweetu@gmail.com-2021-09-21 06:10:49','[]',0,'2021-09-21 06:10:49','2021-09-21 06:10:49','2022-09-21 06:10:49'),('d55cd222ad5b76be8766f8c770afb42ff00fe02da048dff5271e9f553b5732e6738388b72ff2667d',6,3,'ravi.kumar@xicom.biz-2021-10-29 06:13:04','[]',0,'2021-10-29 06:13:04','2021-10-29 06:13:04','2022-10-29 06:13:04'),('d5686b8444529d3289e5a065fdaa72966a2a8e62d1bb997ac60296fbdbb1b4a9d2607748f7497c08',6,3,'ravi.kumar@xicom.biz-2021-11-01 11:34:33','[]',0,'2021-11-01 11:34:33','2021-11-01 11:34:33','2022-11-01 11:34:33'),('d57aa857a3e13025568dfa204d3eadf752df3e06eb6b4e1a1b36df409d9dcd28a5b2f9d7db14f5cb',5,1,'somebody@gmail.com-2021-08-27 11:51:19','[]',0,'2021-08-27 11:51:19','2021-08-27 11:51:19','2022-08-27 11:51:19'),('d622c9d92f0dae211bf7c007d9f413e8d954e4e8293294f08c84d84b062af3223b77025725278844',23,1,'suraj.paul@xicom.biz-2021-10-11 07:16:44','[]',0,'2021-10-11 07:16:44','2021-10-11 07:16:44','2022-10-11 07:16:44'),('d69e12c23050906cb0295421aab3e9b4acc6ea3a1fb7ea7f03691d992d0300b1eb24e617890dbc4e',26,1,'sweetu@gmail.com-2021-09-21 05:24:54','[]',0,'2021-09-21 05:24:54','2021-09-21 05:24:54','2022-09-21 05:24:54'),('d71af35f7ad9e993feb55e2175aaaf4e1256b2fd08a6558f28b47bff2ea770a4870ab94162a59929',16,1,'ramos@gmail.com-2021-08-26 12:11:39','[]',0,'2021-08-26 12:11:39','2021-08-26 12:11:39','2022-08-26 12:11:39'),('d721899c41b214fdb8c51a50cc01b8c4ebd014eb75101c5307b3c8ae062bd5b61d0af211207dfb2b',16,3,'ramos@gmail.com-2021-10-25 09:19:54','[]',0,'2021-10-25 09:19:54','2021-10-25 09:19:54','2022-10-25 09:19:54'),('d7fa79b232388f189a23dd5896d40435745a55c458e160e3b96d729cc51c04687e245fcb522eb80c',34,1,'faf@gmail.om-2021-10-19 05:25:34','[]',0,'2021-10-19 05:25:34','2021-10-19 05:25:34','2022-10-19 05:25:34'),('d8198881ba2719c19335529ede895189850bb2919dec6ec3753e1a1cc43bb8051ee14fe2eb70d81b',6,1,'student@gmail.com-2021-09-21 06:35:10','[]',0,'2021-09-21 06:35:10','2021-09-21 06:35:10','2022-09-21 06:35:10'),('d85cb7b7b04fc081efc9dc3d9f8a74db48e361e6de7ae12d8d5f766a715e6859d691112f74394ee9',15,1,'newuser@gmail.com-2021-08-16 07:03:40','[]',0,'2021-08-16 07:03:40','2021-08-16 07:03:40','2022-08-16 07:03:40'),('d8613b713a3016991592ce766b2e3fe245052d2a6cbb3e5c36262674b6703a8f222a1f5d9099b50e',5,1,'somebody@gmail.com-2021-08-05 05:26:51','[]',0,'2021-08-05 05:26:51','2021-08-05 05:26:51','2022-08-05 05:26:51'),('d9d69f2e340bfe06d060ed40849ccd7a5a324a09be592a6ff082ed5fe1ab7633d1f5de59b7e3d71e',35,3,'dipankur00@gmail.com-2021-10-25 06:58:38','[]',0,'2021-10-25 06:58:39','2021-10-25 06:58:39','2022-10-25 06:58:39'),('da6c0476932b386a8f769654fd460ea4424c48f188e1ee14c65219129ead05cbfaaa8e1cad98eab4',23,1,'suraj.paul@xicom.biz-2021-10-20 12:33:54','[]',0,'2021-10-20 12:33:54','2021-10-20 12:33:54','2022-10-20 12:33:54'),('daeea4e61536b0c644f77e3f953739f60068f578474b588849fe89f9aa8e6a9e5ace9e6c1dcc2a28',23,3,'suraj.paul1@xicom.biz-2021-10-29 10:26:16','[]',0,'2021-10-29 10:26:16','2021-10-29 10:26:16','2022-10-29 10:26:16'),('db1e2a1982152853d37f76301411ba3e752e5370aa078999cd4627027da1434689428bbded476c47',23,3,'suraj.paul1@xicom.biz-2021-11-08 10:39:42','[]',0,'2021-11-08 10:39:42','2021-11-08 10:39:42','2022-11-08 10:39:42'),('dcdbf42ebc2f036a3a34eb7a9f96ebf2e5159320048cc93084e69b1a9b0c4d66feb887ede90757f6',17,1,'talented@gmail.com-2021-08-26 12:16:31','[]',0,'2021-08-26 12:16:31','2021-08-26 12:16:31','2022-08-26 12:16:31'),('dd5d54af139a866d8c1c5a29f79a4dddd07a2dfe0a9ad583da527e3cd45f2d4ac201d0a91bb5583f',46,3,'testTutor007@yopmail.com-2021-10-27 13:03:17','[]',0,'2021-10-27 13:03:17','2021-10-27 13:03:17','2022-10-27 13:03:17'),('ddc8f4cded99345c771714229fd7ed6b7a968954f4ea14b89ee408a4f37c4499c61ca77a75a95784',24,1,'teacher@gmail.com-2021-09-01 03:58:56','[]',0,'2021-09-01 03:58:56','2021-09-01 03:58:56','2022-09-01 03:58:56'),('de8e24582a6d61d1ae960bafad57462e9d353954328d1931c53ed6aa5f8d3aa8ba62e4d21d131583',23,1,'johnsmith@gmail.com-2021-09-30 09:25:04','[]',0,'2021-09-30 09:25:04','2021-09-30 09:25:04','2022-09-30 09:25:04'),('de9ac27281894516150b450982bff7c630d3e75c9ab840da272182ecbdaaf3671094fbf73bf083e8',6,3,'ravi.kumar@xicom.biz-2021-10-25 10:06:27','[]',0,'2021-10-25 10:06:27','2021-10-25 10:06:27','2022-10-25 10:06:27'),('df74ef0ac039908797aba0fed746e95275ab7172d4d60de34c4bb104dcf27c9b6e16bfdab314f2f2',6,1,'ravi.kumar@xicom.biz-2021-10-08 09:48:07','[]',0,'2021-10-08 09:48:07','2021-10-08 09:48:07','2022-10-08 09:48:07'),('dfc3f07b96de5837f4e38547e2596a4a9f26581109565a5f46da26be5a08c9b8ee6926735a0ea58a',42,3,'chrisjames@gmail.com-2021-10-27 09:42:24','[]',0,'2021-10-27 09:42:24','2021-10-27 09:42:24','2022-10-27 09:42:24'),('e0e6e3f12d5ee2fd54646449f1d9053b7c5ddc71390ef52157ea560b754958226dbc247e2b623030',6,1,'ravi.kumar@xicom.biz-2021-10-05 10:30:39','[]',0,'2021-10-05 10:30:39','2021-10-05 10:30:39','2022-10-05 10:30:39'),('e0fab2e3f4916e7342d8cab6d2e0c539e21cb1b0d16a86d7a7c9ec7639b1b7ad1da612423ffeef88',6,1,'student@gmail.com-2021-09-22 07:46:53','[]',0,'2021-09-22 07:46:53','2021-09-22 07:46:53','2022-09-22 07:46:53'),('e104d6f4fa9c3806687443a80c3e9ee0a1300bfb9686eb70fc1d249d54e8dcf1cee31bc0ca9e752e',6,1,'ravi.kumar@xicom.biz-2021-10-12 04:23:40','[]',0,'2021-10-12 04:23:40','2021-10-12 04:23:40','2022-10-12 04:23:40'),('e3be68f9482854b7e13a801cb6563624493f842623d25b4ad8c57697c7a919a949686aec03772860',6,1,'student@gmail.com-2021-09-20 04:18:44','[]',0,'2021-09-20 04:18:45','2021-09-20 04:18:45','2022-09-20 04:18:45'),('e4f31d9835928448720b7e32cd3835690ecace80f0e506a55717441a4ff230638fc145dbdd9a80cf',23,1,'suraj.paul@xicom.biz-2021-10-20 12:51:54','[]',0,'2021-10-20 12:51:54','2021-10-20 12:51:54','2022-10-20 12:51:54'),('e59e0bb15f4576ee6b3d58bfe51e94d5cf978f13ebcb501764558ac245eef2ceead6b5802e535bb4',23,3,'suraj.paul1@xicom.biz-2021-10-27 04:48:34','[]',0,'2021-10-27 04:48:34','2021-10-27 04:48:34','2022-10-27 04:48:34'),('e6b7dd6610a61fa1d7bd4bb5a5f1416e92861e0d6eba92adc2f446ba1b4318e4eaea55659941fca0',46,3,'testTutor007@yopmail.com-2021-10-27 13:36:23','[]',0,'2021-10-27 13:36:23','2021-10-27 13:36:23','2022-10-27 13:36:23'),('e75180a98bd5cd162f3898846a62f2e0809960141fd21f865cfd06e67fbdbdb0df66cfc43a9e4751',23,3,'suraj.paul1@xicom.biz-2021-10-27 11:04:11','[]',0,'2021-10-27 11:04:11','2021-10-27 11:04:11','2022-10-27 11:04:11'),('e7b5d8a9c51e4a224ab6254732a0e8cb1bd58c5e24a6d096ead8e775805e9be485bd1ee136829649',67,3,'adomatic@studybuddy.com-2021-11-02 03:16:46','[]',0,'2021-11-02 03:16:46','2021-11-02 03:16:46','2022-11-02 03:16:46'),('e8145e3117d0570fbd9bd91f39f9c9e3bf4801e5a1dad691c756c270eff7448cd7532ddebec63e5d',23,1,'suraj.paul@xicom.biz-2021-10-07 07:20:24','[]',0,'2021-10-07 07:20:25','2021-10-07 07:20:25','2022-10-07 07:20:25'),('e83e22463b5295df2b11d3e359f1884fcceea29d863b544ab60848f05118b7a738ca0d50638f14d5',16,1,'ramos@gmail.com-2021-09-13 12:58:43','[]',0,'2021-09-13 12:58:43','2021-09-13 12:58:43','2022-09-13 12:58:43'),('e89400bd7c34917f7c233e9e8a11dfbd0e00f79eca637cdcbb7c00d71b4b762a48b2887da2ffde43',23,1,'suraj.paul@xicom.biz-2021-10-20 11:34:08','[]',0,'2021-10-20 11:34:08','2021-10-20 11:34:08','2022-10-20 11:34:08'),('e9cf116cade2d0fd3661b97771dd0b8eb0689d9ad589b7d543cf5e0dd484c8b94d55ac90c930a2ae',5,1,'somebody@gmail.com-2021-08-18 06:36:45','[]',0,'2021-08-18 06:36:45','2021-08-18 06:36:45','2022-08-18 06:36:45'),('eae127c10171c01f58199d777105c85605ae08d3b80523dd1067deeefd76dfc1cb87c172331bc96f',24,1,'teacher@gmail.com-2021-09-02 06:35:41','[]',0,'2021-09-02 06:35:41','2021-09-02 06:35:41','2022-09-02 06:35:41'),('eb5f600b80904321cc335031819d5878547084b867b5fde9e46641549f4cecef609933ac6037b185',23,1,'suraj.paul@xicom.biz-2021-10-15 07:54:49','[]',0,'2021-10-15 07:54:49','2021-10-15 07:54:49','2022-10-15 07:54:49'),('ec08d4e0cdc7c56bcb0e8d11263707139c2a6f8919216b7107d58541c46098fec86dbac1ae251b5d',6,3,'ravi.kumar@xicom.biz-2021-10-26 10:37:09','[]',0,'2021-10-26 10:37:09','2021-10-26 10:37:09','2022-10-26 10:37:09'),('ece9f43b638c28df6dc74f1e3891a94788ab70b12f614a8c4cf00a7e52cded67ffcd4c1d240b69d9',65,3,'chrishems@yopmail.com-2021-11-01 10:42:02','[]',0,'2021-11-01 10:42:03','2021-11-01 10:42:03','2022-11-01 10:42:03'),('ee0d05eb59483751edf34526e40561e14924ce7f9dbf93cae77f34f60064d6e60c13f7fe27b7c1fe',23,1,'suraj.paul@xicom.biz-2021-10-07 07:34:45','[]',0,'2021-10-07 07:34:45','2021-10-07 07:34:45','2022-10-07 07:34:45'),('ee9af01ed6cf5408c483e23a68fa24d0ab68daf17c83875b4a95669a20c6a8f0d8322c9ab8d0e847',6,1,'ravi.kumar@xicom.biz-2021-10-11 07:17:33','[]',0,'2021-10-11 07:17:33','2021-10-11 07:17:33','2022-10-11 07:17:33'),('eebf77044e1e8c19fd7b6a07d5898690cb1c7534388c9522cf5b3547af53306a19262ba088297b5a',23,1,'sastatutor@gmail.com-2021-09-24 11:51:51','[]',0,'2021-09-24 11:51:51','2021-09-24 11:51:51','2022-09-24 11:51:51'),('eed91a00a90c69e8518b3122447d9fb35565a2d638db4bbec68658c5506184026651b76ade111a92',24,1,'teacher@gmail.com-2021-09-07 05:39:20','[]',0,'2021-09-07 05:39:20','2021-09-07 05:39:20','2022-09-07 05:39:20'),('eeffa54d0bff26b5ea6953be2a6d13861e91161597b26e0f4ae554aa111478e74aeb8db1b208ea06',6,1,'ravi.kumar@xicom.biz-2021-10-11 12:36:02','[]',0,'2021-10-11 12:36:02','2021-10-11 12:36:02','2022-10-11 12:36:02'),('f262ef4a0aa60315b6023e8e17a06941c76185a09e0dffac350db67b7354b1206ea6f36aa91de20b',23,1,'suraj.paul@xicom.biz-2021-10-21 12:05:12','[]',0,'2021-10-21 12:05:12','2021-10-21 12:05:12','2022-10-21 12:05:12'),('f2ca808f9863261d8a87026d459bc09ea1d1a277c51668cc7a5074196382eb8954948ae544b6c690',6,1,'student@gmail.com-2021-09-29 05:28:25','[]',0,'2021-09-29 05:28:25','2021-09-29 05:28:25','2022-09-29 05:28:25'),('f2e1fe259645a09fe0140b4e4ea4087d0969357390c37da9544e9d2b5ea66f4ca3693b733a18e784',26,1,'sweetu@gmail.com-2021-09-21 06:34:35','[]',0,'2021-09-21 06:34:35','2021-09-21 06:34:35','2022-09-21 06:34:35'),('f325ab2bc955c131719d78ef4ef727689683adb6cbbc1d0b827ded0e9eb72b8859f83562af0edbb5',6,1,'student@gmail.com-2021-10-05 09:54:13','[]',0,'2021-10-05 09:54:13','2021-10-05 09:54:13','2022-10-05 09:54:13'),('f34a3e7da401f923fc2bd5abbf14cf6514a7efb8a6dd9dc4366535aa53a9f186781d7345650222e3',23,1,'suraj.paul@xicom.biz-2021-10-21 11:14:01','[]',0,'2021-10-21 11:14:01','2021-10-21 11:14:01','2022-10-21 11:14:01'),('f371dfb08587a802bcd6f37d919cb6f5a6200cdf29b38b06a95b97fe1e0ae98a8a25c63ebcd5ca12',6,1,'ravi.kumar@xicom.biz-2021-10-21 07:50:20','[]',0,'2021-10-21 07:50:20','2021-10-21 07:50:20','2022-10-21 07:50:20'),('f45e40b6434c43ab99bc3b4c5ab5bd166b5c0e5f1a597a977f40fc5949ca316ec4373d5a43133e1a',35,3,'dipankur00@gmail.com-2021-10-25 07:21:56','[]',0,'2021-10-25 07:21:56','2021-10-25 07:21:56','2022-10-25 07:21:56'),('f637b910e05b2579f9bf135080cee252415c8a38f74177e4d7588f3901c04f46e10eb501a82a7af3',26,1,'sweetu@gmail.com-2021-09-21 06:10:36','[]',0,'2021-09-21 06:10:36','2021-09-21 06:10:36','2022-09-21 06:10:36'),('f64a60cf5c67dc828ebf914310597ad74aac318b662a4b877107fca24c2dffccb2d8212abccfae8e',23,1,'suraj.paul@xicom.biz-2021-10-21 11:10:22','[]',0,'2021-10-21 11:10:22','2021-10-21 11:10:22','2022-10-21 11:10:22'),('f682e521135e045ee5dce83282ca4359f6d679abd5bbc753352f003299257b97e6169ee7b277a2f1',6,3,'ravi.kumar@xicom.biz-2021-10-29 06:13:57','[]',0,'2021-10-29 06:13:57','2021-10-29 06:13:57','2022-10-29 06:13:57'),('f7a2caf1008885fa2eebdbb5e948933b84d02811fa7d00d400a0013682ac17cf1f612f4969e4b59f',45,3,'chrisjames@yopmail.com-2021-10-27 10:34:41','[]',0,'2021-10-27 10:34:41','2021-10-27 10:34:41','2022-10-27 10:34:41'),('f7bd29b8bbd420131bfd14655b797b87c18ce85788ad6627bbf53896237bb79d32aae3a938f98188',62,3,'samanderson@yopmail.com-2021-10-29 10:52:44','[]',0,'2021-10-29 10:52:45','2021-10-29 10:52:45','2022-10-29 10:52:45'),('f7f554ceb86c885219687ffe66e468712ab13552fdab071797fb2c3910b12b1c5df60b53245a1c6d',23,1,'sastatutor@gmail.com-2021-09-24 11:27:22','[]',0,'2021-09-24 11:27:22','2021-09-24 11:27:22','2022-09-24 11:27:22'),('f82f0af05c715d86627d4e40176d8a073362703954fb5e933d142695603398be4be673d4bf1754ad',23,1,'suraj.paul@xicom.biz-2021-10-21 05:26:09','[]',0,'2021-10-21 05:26:09','2021-10-21 05:26:09','2022-10-21 05:26:09'),('f8b2a61a0dd451349e28a4d10df6b0ce2d07089815edf243c653ff645a9d4f9000531fb127af3dcd',4,1,'stu@gmail.com-2021-08-05 04:34:24','[]',0,'2021-08-05 04:34:24','2021-08-05 04:34:24','2022-08-05 04:34:24'),('f8dd2eeb8a0d9ce431fe4076e1af74de6622b4ff826057efd7298d32f2c2df4a773c43e21efa32cc',24,1,'teacher@gmail.com-2021-09-02 06:23:38','[]',0,'2021-09-02 06:23:38','2021-09-02 06:23:38','2022-09-02 06:23:38'),('f8ec5b0055bad48aff1d6584e2ffff208412d28079dd2bc7a07f90efa7485dce8fd7194ffd0847c0',10,1,'bconor@gmail.com-2021-08-16 06:15:58','[]',0,'2021-08-16 06:15:58','2021-08-16 06:15:58','2022-08-16 06:15:58'),('fa0177b036c1fd801fcb4d85d92b993e93477e616fbbe1a63d40f383d8329c02b9e067314afa6472',69,3,'finalstudent@yopmail.com-2021-11-08 07:54:58','[]',0,'2021-11-08 07:54:58','2021-11-08 07:54:58','2022-11-08 07:54:58'),('faa06d11af605b1fdd1a2c1587743f03f9cfd8543c69ae0a8d023e92c94dc9cb755d2ebbfa019463',16,1,'ramos@gmail.com-2021-08-18 11:25:04','[]',0,'2021-08-18 11:25:04','2021-08-18 11:25:04','2022-08-18 11:25:04'),('fadc7f1a3fe225ae18329b4fe2df4910d411cd4ece38d6f665bb1670a1981702065beb9cd9ce0c70',6,1,'student@gmail.com-2021-09-24 07:36:42','[]',0,'2021-09-24 07:36:42','2021-09-24 07:36:42','2022-09-24 07:36:42'),('fc51650bb3091076a1980669fae7f9470971b85ebe4010539f5c11b559a05a218099c1dcfd7408e9',19,3,'zalton@gmail.com-2021-10-22 11:15:24','[]',0,'2021-10-22 11:15:24','2021-10-22 11:15:24','2022-10-22 11:15:24'),('fc85bf2795a9837c781019819b481dbf17e35d39ef6f0a8a52b4e10b3de22d0e830390b078d12fd5',23,1,'suraj.paul@xicom.biz-2021-10-07 07:34:45','[]',0,'2021-10-07 07:34:45','2021-10-07 07:34:45','2022-10-07 07:34:45'),('fcf02ce1a4e16d856df404f7b54d373e6c06f69eaf44e4f2b35c5ba95b1a3be84af7267d766cac45',23,3,'suraj.paul@xicom.biz-2021-10-21 13:21:47','[]',0,'2021-10-21 13:21:47','2021-10-21 13:21:47','2022-10-21 13:21:47'),('fe88195c6ebab975511d4ce75d9594d2b38a45c17239a7b66c1ebc5540b2e5f11d93d1a261dd4b8c',6,1,'student@gmail.com-2021-10-05 09:58:12','[]',0,'2021-10-05 09:58:12','2021-10-05 09:58:12','2022-10-05 09:58:12'),('ffc442cfe34863ac3cc1e9c22f883694beeece73a0d22f3d3a93b1ed1fef9eaed72bdc41dd0629d0',6,1,'student@gmail.com-2021-09-24 07:36:59','[]',0,'2021-09-24 07:36:59','2021-09-24 07:36:59','2022-09-24 07:36:59'),('ffe1044874c4f2d7a0ae0c58a30773a1b6576ebb82fe960878cf24c1f8e8251996a00c99d41e2852',6,1,'student@gmail.com-2021-09-29 05:53:16','[]',0,'2021-09-29 05:53:16','2021-09-29 05:53:16','2022-09-29 05:53:16');
/*!40000 ALTER TABLE `oauth_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `client_id` bigint(20) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_auth_codes`
--

LOCK TABLES `oauth_auth_codes` WRITE;
/*!40000 ALTER TABLE `oauth_auth_codes` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_auth_codes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_clients`
--

LOCK TABLES `oauth_clients` WRITE;
/*!40000 ALTER TABLE `oauth_clients` DISABLE KEYS */;
INSERT INTO `oauth_clients` VALUES (1,NULL,'StudyBuddy Personal Access Client','P26HJX4N7VM8axQX15wWLNIUiDOHG1mCX6HszhgB',NULL,'http://localhost',1,0,0,'2021-08-03 07:48:18','2021-08-03 07:48:18'),(2,NULL,'StudyBuddy Password Grant Client','8iiuH0Cl1HvRnc9KipJGAsrXh9PBizmruT4gjpSH','users','http://localhost',0,1,0,'2021-08-03 07:48:18','2021-08-03 07:48:18'),(3,NULL,'Fly Personal Access Client','7XmLGqunqjduBcSqTzT1gVrJj8SMlcE17ZDBnOKS',NULL,'http://localhost',1,0,0,'2021-10-21 12:40:02','2021-10-21 12:40:02'),(4,NULL,'Fly Password Grant Client','T0BVs1Ekh3GSOPHJbAy6vKbvLx123Ds1nCvFwwjm','users','http://localhost',0,1,0,'2021-10-21 12:40:02','2021-10-21 12:40:02');
/*!40000 ALTER TABLE `oauth_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_personal_access_clients`
--

LOCK TABLES `oauth_personal_access_clients` WRITE;
/*!40000 ALTER TABLE `oauth_personal_access_clients` DISABLE KEYS */;
INSERT INTO `oauth_personal_access_clients` VALUES (1,1,'2021-08-03 07:48:18','2021-08-03 07:48:18'),(2,3,'2021-10-21 12:40:02','2021-10-21 12:40:02');
/*!40000 ALTER TABLE `oauth_personal_access_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oauth_refresh_tokens`
--

LOCK TABLES `oauth_refresh_tokens` WRITE;
/*!40000 ALTER TABLE `oauth_refresh_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `oauth_refresh_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'about_us','About Us','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\n\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.','2021-08-03 07:48:08','2021-08-03 07:48:08'),(2,'privacy_policy','Privacy Policy','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\n\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.','2021-08-03 07:48:08','2021-08-03 07:48:08'),(3,'terms_&_conditions','Terms & Conditions','Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\n\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.','2021-08-03 07:48:08','2021-08-03 07:48:08');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('ravi.kumar@xicom.biz','$2y$10$uthybuEjDF2NHLW/dJFlbufsvEzRN1IEWle13TCgDj1Oknm/YvWjO','2021-10-26 10:35:32'),('chrisjames@yopmail.com','$2y$10$iBWqWoMm/67AIo2XQQ1KVOjrEVtornOAnwi5UmSr9jq9.XUvH/rPG','2021-10-27 09:52:22');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_comment_replies`
--

DROP TABLE IF EXISTS `post_comment_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_comment_replies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_comment_replies`
--

LOCK TABLES `post_comment_replies` WRITE;
/*!40000 ALTER TABLE `post_comment_replies` DISABLE KEYS */;
INSERT INTO `post_comment_replies` VALUES (3,26,28,'Remeber something','2021-09-08 09:08:38','2021-09-08 09:08:38'),(4,26,28,'I need to check the reply comment','2021-09-09 04:28:04','2021-09-09 04:28:04'),(5,17,30,'Hi','2021-09-17 10:07:37','2021-09-17 10:07:37'),(6,17,30,'Hi2','2021-09-17 10:07:48','2021-09-17 10:07:48'),(7,29,16,'Having same friedns like you!','2021-09-22 07:45:56','2021-09-22 07:45:56'),(8,37,36,'Reply 1','2021-10-25 10:52:31','2021-10-25 10:52:31'),(9,39,37,'First reply','2021-10-25 11:12:18','2021-10-25 11:12:18');
/*!40000 ALTER TABLE `post_comment_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_comments`
--

DROP TABLE IF EXISTS `post_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_comments`
--

LOCK TABLES `post_comments` WRITE;
/*!40000 ALTER TABLE `post_comments` DISABLE KEYS */;
INSERT INTO `post_comments` VALUES (5,19,6,'Searching ramos for long on fly app!','2021-08-23 06:26:52','2021-08-23 06:26:52'),(15,2,6,'Welcome to fly somebody!','2021-08-23 09:14:26','2021-08-23 09:14:26'),(16,18,6,'Best place to visit!','2021-08-23 12:19:38','2021-08-23 12:19:38'),(17,17,6,'Koi to comment kar do ispe !','2021-08-23 12:20:04','2021-08-23 12:20:04'),(19,17,6,'Its my post!','2021-08-23 12:31:17','2021-08-23 12:31:17'),(22,20,6,'We are with you adnan ???','2021-08-24 06:44:59','2021-08-24 06:44:59'),(23,18,6,'I am in for the next time !','2021-08-26 05:22:37','2021-08-26 05:22:37'),(25,19,6,'Let me message to big to adjust within the ui and you can manage !','2021-08-26 09:39:58','2021-08-26 09:39:58'),(28,29,28,'Hello guys','2021-09-08 09:08:02','2021-09-08 09:08:02'),(29,1,32,'Congrats ?','2021-10-10 19:05:44','2021-10-10 19:05:44'),(31,52,32,'Checks out','2021-10-24 05:06:34','2021-10-24 05:06:34'),(32,51,16,'Test Notif comment','2021-10-25 05:31:37','2021-10-25 05:31:37'),(33,51,16,'Test Notif comment 2','2021-10-25 06:25:10','2021-10-25 06:25:10'),(34,53,19,'Test comment ?','2021-10-25 06:37:39','2021-10-25 06:37:39'),(35,51,16,'Test Notification comment 1','2021-10-25 06:42:44','2021-10-25 06:42:44'),(36,53,16,'Test Notification comment 1','2021-10-25 06:43:35','2021-10-25 06:43:35'),(37,34,36,'Test comment','2021-10-25 10:52:20','2021-10-25 10:52:20'),(38,53,37,'Blah','2021-10-25 11:09:48','2021-10-25 11:09:48'),(39,58,37,'First cmnt','2021-10-25 11:12:08','2021-10-25 11:12:08');
/*!40000 ALTER TABLE `post_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_favourites`
--

DROP TABLE IF EXISTS `post_favourites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_favourites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_favourites`
--

LOCK TABLES `post_favourites` WRITE;
/*!40000 ALTER TABLE `post_favourites` DISABLE KEYS */;
INSERT INTO `post_favourites` VALUES (31,1,32,'2021-10-10 19:05:42','2021-10-10 19:05:42'),(33,34,36,'2021-10-25 10:52:44','2021-10-25 10:52:44');
/*!40000 ALTER TABLE `post_favourites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_joins`
--

DROP TABLE IF EXISTS `post_joins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_joins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_joins`
--

LOCK TABLES `post_joins` WRITE;
/*!40000 ALTER TABLE `post_joins` DISABLE KEYS */;
INSERT INTO `post_joins` VALUES (4,2,6,'2021-08-23 09:14:29','2021-08-23 09:14:29'),(5,18,6,'2021-08-23 09:14:44','2021-08-23 09:14:44'),(6,17,6,'2021-08-23 12:20:07','2021-08-23 12:20:07'),(7,20,22,'2021-08-24 05:48:35','2021-08-24 05:48:35'),(8,19,22,'2021-08-24 05:48:36','2021-08-24 05:48:36'),(9,18,22,'2021-08-24 05:48:41','2021-08-24 05:48:41'),(10,17,22,'2021-08-24 05:48:44','2021-08-24 05:48:44'),(11,2,22,'2021-08-24 05:48:48','2021-08-24 05:48:48'),(12,1,22,'2021-08-24 05:48:50','2021-08-24 05:48:50'),(13,1,16,'2021-08-24 05:50:16','2021-08-24 05:50:16'),(14,2,16,'2021-08-24 05:50:17','2021-08-24 05:50:17'),(15,17,16,'2021-08-24 05:50:22','2021-08-24 05:50:22'),(16,18,16,'2021-08-24 05:50:23','2021-08-24 05:50:23'),(17,19,16,'2021-08-24 05:50:27','2021-08-24 05:50:27'),(18,20,16,'2021-08-24 05:50:28','2021-08-24 05:50:28'),(20,20,6,'2021-08-27 09:41:05','2021-08-27 09:41:05'),(21,20,6,'2021-08-27 09:41:15','2021-08-27 09:41:15'),(22,19,6,'2021-08-27 09:41:17','2021-08-27 09:41:17'),(23,26,15,'2021-08-27 11:35:16','2021-08-27 11:35:16'),(25,26,6,'2021-09-02 05:09:59','2021-09-02 05:09:59'),(26,29,28,'2021-09-07 09:04:42','2021-09-07 09:04:42'),(27,17,30,'2021-09-17 10:08:32','2021-09-17 10:08:32'),(29,42,32,'2021-10-12 10:09:32','2021-10-12 10:09:32'),(30,24,6,'2021-10-15 06:19:20','2021-10-15 06:19:20'),(33,47,6,'2021-10-19 04:57:19','2021-10-19 04:57:19'),(34,45,6,'2021-10-19 04:58:28','2021-10-19 04:58:28'),(36,52,19,'2021-10-22 04:35:00','2021-10-22 04:35:00'),(37,50,16,'2021-10-25 10:08:54','2021-10-25 10:08:54'),(38,34,36,'2021-10-25 10:52:40','2021-10-25 10:52:40');
/*!40000 ALTER TABLE `post_joins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_likes`
--

DROP TABLE IF EXISTS `post_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_likes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_likes`
--

LOCK TABLES `post_likes` WRITE;
/*!40000 ALTER TABLE `post_likes` DISABLE KEYS */;
INSERT INTO `post_likes` VALUES (14,17,6,'2021-08-23 07:14:51','2021-08-23 07:14:51'),(15,2,6,'2021-08-23 07:14:52','2021-08-23 07:14:52'),(32,18,6,'2021-08-23 07:45:15','2021-08-23 07:45:15'),(35,1,6,'2021-08-23 09:15:35','2021-08-23 09:15:35'),(37,19,22,'2021-08-24 05:48:30','2021-08-24 05:48:30'),(38,18,22,'2021-08-24 05:48:40','2021-08-24 05:48:40'),(39,17,22,'2021-08-24 05:48:43','2021-08-24 05:48:43'),(40,2,22,'2021-08-24 05:48:47','2021-08-24 05:48:47'),(41,1,22,'2021-08-24 05:48:49','2021-08-24 05:48:49'),(42,20,16,'2021-08-24 05:50:04','2021-08-24 05:50:04'),(43,19,16,'2021-08-24 05:50:05','2021-08-24 05:50:05'),(44,18,16,'2021-08-24 05:50:11','2021-08-24 05:50:11'),(45,17,16,'2021-08-24 05:50:12','2021-08-24 05:50:12'),(46,2,16,'2021-08-24 05:50:13','2021-08-24 05:50:13'),(47,1,16,'2021-08-24 05:50:15','2021-08-24 05:50:15'),(54,20,6,'2021-08-24 06:34:03','2021-08-24 06:34:03'),(56,24,17,'2021-08-27 11:28:23','2021-08-27 11:28:23'),(57,23,17,'2021-08-27 11:28:25','2021-08-27 11:28:25'),(58,24,19,'2021-08-27 11:29:22','2021-08-27 11:29:22'),(59,23,19,'2021-08-27 11:29:28','2021-08-27 11:29:28'),(60,20,19,'2021-08-27 11:29:29','2021-08-27 11:29:29'),(61,19,19,'2021-08-27 11:29:32','2021-08-27 11:29:32'),(62,18,19,'2021-08-27 11:29:35','2021-08-27 11:29:35'),(63,17,19,'2021-08-27 11:29:36','2021-08-27 11:29:36'),(64,2,19,'2021-08-27 11:29:41','2021-08-27 11:29:41'),(65,1,19,'2021-08-27 11:29:42','2021-08-27 11:29:42'),(67,25,15,'2021-08-27 11:35:18','2021-08-27 11:35:18'),(68,28,5,'2021-08-27 11:51:41','2021-08-27 11:51:41'),(69,27,5,'2021-08-27 11:51:43','2021-08-27 11:51:43'),(70,25,5,'2021-08-27 12:07:44','2021-08-27 12:07:44'),(71,24,5,'2021-08-27 12:07:45','2021-08-27 12:07:45'),(72,20,5,'2021-08-27 12:07:52','2021-08-27 12:07:52'),(73,19,5,'2021-08-27 12:07:53','2021-08-27 12:07:53'),(74,26,6,'2021-08-27 13:11:43','2021-08-27 13:11:43'),(75,25,6,'2021-08-27 13:11:43','2021-08-27 13:11:43'),(76,27,6,'2021-08-27 13:11:46','2021-08-27 13:11:46'),(77,28,6,'2021-08-27 13:11:47','2021-08-27 13:11:47'),(78,24,6,'2021-08-27 13:11:52','2021-08-27 13:11:52'),(79,23,6,'2021-08-27 13:11:54','2021-08-27 13:11:54'),(81,29,28,'2021-09-07 09:05:09','2021-09-07 09:05:09'),(86,33,32,'2021-10-06 18:05:00','2021-10-06 18:05:00'),(87,29,32,'2021-10-06 19:23:28','2021-10-06 19:23:28'),(88,1,32,'2021-10-10 19:05:21','2021-10-10 19:05:21'),(90,35,6,'2021-10-11 04:16:00','2021-10-11 04:16:00'),(91,42,32,'2021-10-12 10:09:43','2021-10-12 10:09:43'),(93,49,32,'2021-10-13 07:22:20','2021-10-13 07:22:20'),(99,47,6,'2021-10-21 13:26:36','2021-10-21 13:26:36'),(100,45,6,'2021-10-21 13:27:12','2021-10-21 13:27:12'),(106,52,19,'2021-10-22 04:28:24','2021-10-22 04:28:24'),(113,35,19,'2021-10-22 12:44:29','2021-10-22 12:44:29'),(114,51,32,'2021-10-24 05:06:20','2021-10-24 05:06:20'),(115,52,32,'2021-10-24 05:06:20','2021-10-24 05:06:20'),(118,52,16,'2021-10-25 05:04:31','2021-10-25 05:04:31'),(121,51,16,'2021-10-25 06:30:48','2021-10-25 06:30:48'),(122,53,19,'2021-10-25 06:37:20','2021-10-25 06:37:20'),(123,53,16,'2021-10-25 06:40:29','2021-10-25 06:40:29'),(124,54,16,'2021-10-25 07:14:08','2021-10-25 07:14:08'),(125,50,16,'2021-10-25 10:08:41','2021-10-25 10:08:41'),(126,34,36,'2021-10-25 10:52:04','2021-10-25 10:52:04'),(127,53,37,'2021-10-25 11:09:37','2021-10-25 11:09:37'),(128,58,37,'2021-10-25 11:11:58','2021-10-25 11:11:58'),(131,50,32,'2021-10-28 21:39:52','2021-10-28 21:39:52');
/*!40000 ALTER TABLE `post_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_locations`
--

DROP TABLE IF EXISTS `post_locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_locations`
--

LOCK TABLES `post_locations` WRITE;
/*!40000 ALTER TABLE `post_locations` DISABLE KEYS */;
INSERT INTO `post_locations` VALUES (11,18,'31.1048294','77.17339009999999','Himachal Pradesh, India','2021-08-16 11:52:08','2021-08-16 11:52:08'),(12,26,'30.7333148','76.7794179','Chandigarh, India','2021-08-27 11:33:06','2021-08-27 11:33:06'),(17,46,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA','2021-10-11 11:37:52','2021-10-11 11:37:52'),(18,53,'30.706688','76.68533','33, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055, India','2021-10-25 06:36:45','2021-10-25 06:36:45'),(19,58,'37.7819564','-122.4358316','1800 Ellis St, San Francisco, CA 94115, USA','2021-10-25 11:11:27','2021-10-25 11:11:27'),(21,39,'30.7066283','76.6853343','33, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055, India','2021-10-28 10:03:21','2021-10-28 10:03:21');
/*!40000 ALTER TABLE `post_locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_media`
--

DROP TABLE IF EXISTS `post_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_media`
--

LOCK TABLES `post_media` WRITE;
/*!40000 ALTER TABLE `post_media` DISABLE KEYS */;
INSERT INTO `post_media` VALUES (41,18,'postMedias/WlQ0b5YFoOLKcwZVfh27iwbuteLzPphMQ9BBXoCc.jpg','2021-08-16 11:52:08','2021-08-16 11:52:08'),(42,18,'postMedias/iBoVs3nOPf8AfUUqYSfJytjLLcL8ip9TcCZPietG.jpg','2021-08-16 11:52:08','2021-08-16 11:52:08'),(43,18,'postMedias/bjKhKcXWioDaRfNaw8STXxjI9bYp4Hj2g0387vPF.jpg','2021-08-16 11:52:08','2021-08-16 11:52:08'),(44,18,'postMedias/7IfMfui6DFNkwfh1igzeNab1vvrLf9PyVXsz0yPZ.jpg','2021-08-16 11:52:08','2021-08-16 11:52:08'),(47,23,'postMedias/iycLWQq2lpvXCF4EaOpo68Dxh2SHOkGJBa3tCsBM.jpg','2021-08-27 11:18:17','2021-08-27 11:18:17'),(48,23,'postMedias/ydhZEjxEiPPQNzl7eaCLI8jfX5jF25AgZMreZZqE.jpg','2021-08-27 11:18:17','2021-08-27 11:18:17'),(54,28,'postMedias/chHNZr6nUCdLJ4YroZBlGS0Bl70PBzYLOGybRgYm.jpg','2021-08-27 11:43:25','2021-08-27 11:43:25'),(55,28,'postMedias/itTnjxHf8uD1hScKz56g9chNsd4vwoHV84TY3Plq.jpg','2021-08-27 11:43:25','2021-08-27 11:43:25'),(56,28,'postMedias/AXsj0iAeu0NfwsgHHCGMkZrd86INeQP32k6KObtb.jpg','2021-08-27 11:43:25','2021-08-27 11:43:25'),(61,53,'postMedias/uErSSxmjDX26G5cdvwUOBY6PhO7nEytpW7I6Q5tS.jpg','2021-10-25 06:36:46','2021-10-25 06:36:46'),(62,58,'postMedias/d93YiYXIlzW82wsmfjQ5rfPk4Vymd5wR6SzdsQv9.jpg','2021-10-25 11:11:27','2021-10-25 11:11:27');
/*!40000 ALTER TABLE `post_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_mentions`
--

DROP TABLE IF EXISTS `post_mentions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_mentions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_mentions`
--

LOCK TABLES `post_mentions` WRITE;
/*!40000 ALTER TABLE `post_mentions` DISABLE KEYS */;
INSERT INTO `post_mentions` VALUES (4,31,15,'2021-09-22 09:13:26','2021-09-22 09:13:26'),(5,31,16,'2021-09-22 09:13:26','2021-09-22 09:13:26'),(6,31,17,'2021-09-22 09:13:26','2021-09-22 09:13:26'),(7,31,18,'2021-09-22 09:13:26','2021-09-22 09:13:26'),(21,32,5,'2021-09-24 10:27:39','2021-09-24 10:27:39'),(23,32,7,'2021-09-24 10:27:39','2021-09-24 10:27:39'),(24,32,15,'2021-09-24 10:27:39','2021-09-24 10:27:39'),(25,32,16,'2021-09-24 10:27:39','2021-09-24 10:27:39'),(26,32,17,'2021-09-24 10:27:39','2021-09-24 10:27:39'),(37,33,22,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(38,33,23,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(39,33,5,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(40,33,27,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(41,33,29,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(42,33,30,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(43,33,15,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(44,33,16,'2021-09-24 10:42:02','2021-09-24 10:42:02'),(45,35,6,'2021-10-08 13:03:39','2021-10-08 13:03:39'),(46,35,16,'2021-10-08 13:03:40','2021-10-08 13:03:40'),(47,35,23,'2021-10-08 13:03:40','2021-10-08 13:03:40'),(48,38,16,'2021-10-11 11:30:42','2021-10-11 11:30:42'),(49,38,17,'2021-10-11 11:30:42','2021-10-11 11:30:42'),(57,53,16,'2021-10-25 06:36:46','2021-10-25 06:36:46'),(58,58,19,'2021-10-25 11:11:27','2021-10-25 11:11:27'),(63,50,16,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(64,50,19,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(65,50,23,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(66,50,21,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(67,50,30,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(68,50,17,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(69,50,7,'2021-10-28 09:56:12','2021-10-28 09:56:12'),(77,62,5,'2021-10-28 10:18:37','2021-10-28 10:18:37'),(78,62,15,'2021-10-28 10:18:37','2021-10-28 10:18:37'),(79,62,7,'2021-10-28 10:18:37','2021-10-28 10:18:37');
/*!40000 ALTER TABLE `post_mentions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'null=>published,1=>disabled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,4,2,'Its my first post, hurraaaaaayyyyyy!',NULL,'2021-08-05 04:50:15','2021-08-05 04:50:15'),(2,5,2,'Hey everyone...its my new post!',NULL,'2021-08-05 09:02:37','2021-08-05 09:02:37'),(17,6,2,'Its a special evening tonight, guys please join me at 8PM. Thanks !',NULL,'2021-08-16 09:53:29','2021-08-16 11:13:44'),(18,6,2,'Beautiful Destinations!',NULL,'2021-08-16 10:45:26','2021-08-16 11:52:08'),(19,16,2,'ME, THE RAMOS FIRST POST!',NULL,'2021-08-18 11:31:42','2021-08-18 11:36:33'),(20,20,2,'Just going to be stressing about the test at the library, feel free to join in ?',NULL,'2021-08-19 10:55:21','2021-08-19 10:55:21'),(23,17,2,'Random pics!',NULL,'2021-08-27 11:18:17','2021-08-27 11:18:17'),(24,17,2,'Hey guys, just want to know anyone going to library this weekend!',NULL,'2021-08-27 11:19:21','2021-08-27 11:19:21'),(25,19,2,'ZLATON is here! You know me well.',NULL,'2021-08-27 11:32:06','2021-08-27 11:32:06'),(26,19,2,'Going to visit next month!',NULL,'2021-08-27 11:33:06','2021-08-27 11:33:06'),(27,15,2,'Hi friend...need company for himachal trip!',NULL,'2021-08-27 11:40:04','2021-08-27 11:40:04'),(28,15,2,'See my new pics!',NULL,'2021-08-27 11:41:24','2021-08-27 11:43:25'),(34,32,2,'Hello',NULL,'2021-10-08 00:51:20','2021-10-08 00:51:20'),(35,6,2,'Friends!',NULL,'2021-10-08 13:03:39','2021-10-08 13:03:39'),(39,6,2,'Add some points for the selected location !',NULL,'2021-10-11 11:31:34','2021-10-28 10:03:21'),(45,16,2,'Hi guys, anyone need electronics notes!',NULL,'2021-10-11 11:37:16','2021-10-11 11:37:16'),(46,16,2,'Leaving this place!',NULL,'2021-10-11 11:37:52','2021-10-11 11:37:52'),(47,16,2,'Hello guys !',NULL,'2021-10-11 11:38:04','2021-10-11 11:38:04'),(50,6,2,'Selected people for tutor session',NULL,'2021-10-15 13:51:24','2021-10-28 09:56:11'),(51,19,2,'This content is for testing post section. Lorem ipsum...',NULL,'2021-10-21 13:40:33','2021-10-21 13:40:33'),(52,23,2,'This content is for testing post section. Lorem ipsum...',NULL,'2021-10-21 13:42:43','2021-10-21 13:42:43'),(53,19,2,'Testing ...',NULL,'2021-10-25 06:36:44','2021-10-25 06:36:44'),(54,35,2,'First post ...',NULL,'2021-10-25 07:02:27','2021-10-25 07:02:27'),(55,37,2,'Blah blah blah',NULL,'2021-10-25 11:10:55','2021-10-25 11:10:55'),(56,37,2,'Blah blah blah',NULL,'2021-10-25 11:11:02','2021-10-25 11:11:02'),(57,37,2,'Blah blah blah',NULL,'2021-10-25 11:11:09','2021-10-25 11:11:09'),(58,37,2,'Blah blah blah',NULL,'2021-10-25 11:11:27','2021-10-25 11:11:27'),(59,6,2,'Some post without location, media and mention!',NULL,'2021-10-28 07:22:11','2021-10-28 07:22:11');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `session_id` int(11) DEFAULT NULL,
  `star` int(11) NOT NULL,
  `review` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,23,6,12,4,'Awesome tutor !',NULL,NULL),(2,6,23,14,4,'Good session',NULL,NULL),(3,23,6,16,5,'good!',NULL,NULL),(4,6,23,16,5,'Goodhello',NULL,NULL),(5,6,65,21,5,'Good',NULL,NULL),(6,6,65,21,4,'Session was quit good and informative!',NULL,NULL);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','admin','2021-08-03 07:46:33','2021-08-03 07:46:33'),(2,'University','university','2021-08-03 07:46:33','2021-08-03 07:46:33'),(3,'Tutor','tutor','2021-08-03 07:46:33','2021-08-03 07:46:33'),(4,'Student','student','2021-08-03 07:46:33','2021-08-03 07:46:33');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_attendances`
--

DROP TABLE IF EXISTS `session_attendances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_attendances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_attendances`
--

LOCK TABLES `session_attendances` WRITE;
/*!40000 ALTER TABLE `session_attendances` DISABLE KEYS */;
INSERT INTO `session_attendances` VALUES (12,1,6,'2021-08-23 12:13:33','2021-08-23 12:13:33'),(13,2,6,'2021-08-23 12:13:33','2021-08-23 12:13:33'),(14,3,6,'2021-09-16 06:59:58','2021-09-16 06:59:58'),(15,4,6,'2021-09-16 07:02:32','2021-09-16 07:02:32'),(16,5,30,'2021-09-17 12:29:55','2021-09-17 12:29:55'),(17,6,30,'2021-09-17 12:32:53','2021-09-17 12:32:53'),(18,7,30,'2021-09-17 12:36:38','2021-09-17 12:36:38'),(19,8,6,'2021-09-24 13:02:48','2021-09-24 13:02:48'),(20,9,6,'2021-09-24 13:03:24','2021-09-24 13:03:24'),(21,10,6,'2021-09-24 13:03:53','2021-09-24 13:03:53'),(22,11,6,'2021-09-29 05:57:12','2021-09-29 05:57:12'),(23,12,6,'2021-10-05 15:30:09','2021-10-05 15:30:09'),(24,13,6,'2021-10-06 09:55:10','2021-10-06 09:55:10'),(25,15,6,'2021-10-12 12:31:07','2021-10-12 12:31:07'),(26,16,6,'2021-10-15 16:24:16','2021-10-15 16:24:16'),(27,17,16,'2021-10-21 18:31:57','2021-10-21 18:31:57'),(28,18,37,'2021-10-25 12:52:04','2021-10-25 12:52:04'),(29,20,6,'2021-11-01 17:39:29','2021-11-01 17:39:29'),(30,21,6,'2021-11-01 17:41:26','2021-11-01 17:41:26'),(31,22,69,'2021-11-08 10:01:54','2021-11-08 10:01:54');
/*!40000 ALTER TABLE `session_attendances` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL COMMENT 'Session Creator',
  `tutor_id` int(11) NOT NULL COMMENT 'Assigned Tutor',
  `message` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `subject_id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0=>Offline, 1=>Online',
  `start_date_time` datetime NOT NULL,
  `end_date_time` datetime NOT NULL,
  `income` decimal(8,2) DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `is_organized_by` int(11) DEFAULT NULL COMMENT '0=>University,1=>Student',
  `backpack_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tutor_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=>pending,1=accepted,2=reject',
  `creator_status` int(11) NOT NULL DEFAULT '0' COMMENT '0=>pending,1=accepted,2=reject',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=>pending,1=started,2=completed',
  `tutor_ready` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>no,1=yes',
  `creator_ready` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>no,1=yes',
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tutor_otp_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>no,1=yes',
  `creator_otp_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=>no,1=yes',
  `extention_status` tinyint(1) DEFAULT '0' COMMENT '0=>no,1=requested,2=extended,3=cancelled',
  `extention_count` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (1,'Salman Physics Expert',2,17,'Learn Physics from Salman','Learn Physics from expert Salman',2,0,'2021-08-24 18:00:00','2021-08-24 19:00:00',NULL,NULL,NULL,NULL,0,NULL,'2021-08-23 09:36:46','2021-08-23 09:36:46',0,0,0,0,0,NULL,0,0,0,0),(2,'Physics Expert',2,29,'Learn Physics from Salman','Learn Physics from expert Salman',2,0,'2021-09-30 18:00:00','2021-10-01 19:00:00',NULL,NULL,NULL,NULL,0,NULL,'2021-08-23 09:36:46','2021-09-20 06:46:21',0,0,0,0,0,NULL,0,0,0,0),(3,'Session with john smith',6,23,'First Session with john smith','',3,1,'2021-09-30 19:30:30','2021-09-30 20:30:30',35.00,'30.7280925','76.8464024','2nd Floor, Tower B, Phase - I, Manimajra, Haryana, IT Park Rd, Phase - I, Sector 13, Sukteri, Haryana 134114, India',1,NULL,'2021-09-16 06:59:58','2021-09-29 13:02:49',1,1,1,0,0,NULL,0,0,0,0),(4,'Session with Sweetu ',6,26,'Sweetu Ke Saath Session.','',6,1,'2021-09-26 12:00:30','2021-09-26 13:00:30',50.00,'30.7281044','76.8464192','2nd Floor, Tower B, Phase - I, Manimajra, Haryana, IT Park Rd, Phase - I, Sector 13, Sukteri, Haryana 134114, India',1,NULL,'2021-09-16 07:02:32','2021-09-16 07:02:32',0,1,0,0,0,NULL,0,0,0,0),(8,'Session with Sasta Tutor',6,23,'Need Classes For Chemistry','',3,1,'2021-10-01 12:05:00','2021-10-01 13:05:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-09-24 13:02:48','2021-10-01 04:35:25',1,1,1,1,0,NULL,0,0,0,0),(9,'Session with Sasta Tutor',6,23,'Need Classes For Physics','',2,1,'2021-09-28 06:45:30','2021-09-28 07:45:30',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-09-24 13:03:24','2021-10-26 11:58:37',1,1,1,0,0,NULL,0,0,0,0),(10,'Session with Sasta Tutor',6,23,'Need Classes For Science','',1,1,'2021-09-29 06:45:30','2021-09-29 07:45:30',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-09-24 13:03:53','2021-10-26 11:58:37',1,1,1,0,0,NULL,0,0,0,0),(11,'Session with Sasta Tutor',6,23,'Physics Class With john smith','',2,1,'2021-10-04 17:00:30','2021-10-04 18:00:30',35.00,'30.7281104','76.8464211','2nd Floor, Tower B, Phase - I, Manimajra, Haryana, IT Park Rd, Phase - I, Sector 13, Sukteri, Haryana 134114, India',1,NULL,'2021-09-29 05:57:12','2021-10-26 11:58:37',1,1,1,1,1,'3896',1,1,0,0),(12,'Session with John Smith',6,23,'Chemistry Lecture With John','',3,1,'2021-10-05 17:45:00','2021-10-05 18:45:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-05 15:30:09','2021-10-05 16:42:30',1,1,1,1,1,'5736',1,1,0,0),(13,'Session with John Smith',6,23,'Science Classes','',1,1,'2021-10-06 13:25:00','2021-10-06 14:25:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-06 09:55:10','2021-10-06 13:01:00',1,1,1,1,1,'2228',1,1,0,0),(14,'Session with John',6,23,'Science Classes','',1,1,'2021-10-12 12:10:00','2021-10-12 13:10:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-11 11:02:10','2021-10-11 13:27:05',1,1,1,1,1,'5653',1,1,0,0),(15,'Session with John Smith',6,23,'Organic Chemistry','',3,1,'2021-10-12 17:15:00','2021-10-12 18:15:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-12 12:31:07','2021-10-12 13:24:50',1,1,1,1,1,'4786',1,1,0,0),(16,'Session with John smith',6,23,'Communication','',8,1,'2021-10-15 15:48:00','2021-10-15 16:58:00',35.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-15 16:24:16','2021-10-15 16:54:34',1,1,3,1,1,'2883',1,1,0,0),(17,'Session with John smith',16,23,'','',1,1,'2021-10-26 12:10:00','2021-10-26 13:10:00',35.00,'28.654850','77.187111','test',1,NULL,'2021-10-21 18:31:57','2021-10-22 04:30:37',1,1,1,1,0,NULL,0,0,0,0),(18,'Session with John smith',37,23,'Test','',1,1,'2021-10-25 05:00:00','2021-10-25 06:00:00',35.00,'37.7819564','-122.4358316','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-10-25 12:52:04','2021-10-29 16:17:40',2,1,4,0,0,NULL,0,0,0,0),(20,'Session with Chris James',6,65,'Finance Classes','',2,1,'2021-11-01 06:45:00','2021-11-01 07:45:00',45.00,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-11-01 17:39:29','2021-11-01 18:42:24',1,1,2,1,1,'8267',1,1,0,0),(21,'Session with Chris James',6,65,'Psychology Classes','',3,1,'2021-11-02 08:32:00','2021-11-02 09:32:00',45.00,'40.6331249','-89.3985283','Illinois, USA',1,'12','2021-11-01 13:15:00','2021-11-02 09:32:05',1,1,3,1,1,'9110',1,1,0,0),(22,'Session with John smith',69,23,'Blah...','',3,1,'2021-11-09 05:45:00','2021-11-09 06:45:00',35.00,'37.7819564','-122.4358316','1800 Ellis St, San Francisco, CA 94115, USA',1,NULL,'2021-11-08 10:01:54','2021-11-08 10:52:14',1,1,1,1,1,'2422',0,1,0,0);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stripe_state_token`
--

DROP TABLE IF EXISTS `stripe_state_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stripe_state_token` (
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stripe_state_token`
--

LOCK TABLES `stripe_state_token` WRITE;
/*!40000 ALTER TABLE `stripe_state_token` DISABLE KEYS */;
INSERT INTO `stripe_state_token` VALUES ('072DcQiinqjplyRI80E9OvGTOKB9OlzTZWqqaolw1ixYnrmBHvRkajfiWBJ6rB3shnSyaicZpKS48qimhxjMu5VFJvqD1J1Cqb4Q8eOX07y8WiVvjiIa3GNJHO6QrFOucd9knwZbhFOH',23),('8SaUzkw9bqVgA77dK7JqDCfNH6pXfbruwRFXKaXwT2UsAhZ4itPESb7zBT9n9DJozxu3IU4JdDhjsmR2Lg0PCFMJNvh8jz7mrns4ZRiOh3NMFdr3wu0uV1vuhNZFdOvKpkh1Q1MnarJ8',6),('FyLdVTbqNcwtbqQkzR8Z3p5IXsy9twLgwuWyeybQR3S5wqvuds2oTlD85NPOfqNIC2qAtlwjyGxuG4NB9BNL0x3YFXXO18TQMiFEZd1gihihgQsSE0Y65EkRCs8XzY7Y8DNaiFcvrrtY',23),('nqLplsPIGzgw8mMjeeq9Spe8Mwwii0v7iNeSR7kywmAnq9ed5srW7whbLhlKbpgz7QQAk2ErPHq3g4pCKn1ZAagOCYdpElLP1DdDGUc3z48g3tNYGNLYKP498iYYtqi8iQ4FXmoVQYTy',23),('RNFq1sKnaPmdc6jEEKzHqZoIC3SvXBGUoQyuCxQEvP1t1YZpfQV6TptY16VskSe4Bd30LiEgg6JX5ORpejf20YoKttyOmpTylSFyWp0aEzKc2AxIzxU5GvkF2vhNbPrbZol2qFZ8l0MJ',65),('XpwRXw4QFp5B45EnIYNgYu7t3yWXElgw613JE0QsNasdc0Lfc1GkhoTM3OSxrm9Byo32L0OXdwq957acbdGX183ga1ZIfjxKw1OegaMd5kMb0IgU3VbMdu4BJRxg9OsJoNbMyKvHXHtz',6),('y8UzwXTV5llwYNZOnQTsL2sivK1gfq340rLYKx9Jl30iH2gAJifdbyp9VnUV6k8ZOfm2oIE7oMcXbeSWRzlblEPWynzU3VVANnMpiOMwbG9H2rRwO8X9tKHhNI5F5oA0ZgN81Qr6OYtr',23),('ZpxtV3oR82hK8Fhd5C6l0RMIvpCN7FBnh3MgKt5EgVY6P1Ehod0o9Oo9jbrMbe9BIosb1rjjFIVQubDyoh50lMfiOrj0Dv0Ay2eZrT26GigFKg47aN4LJUmy9TnpgNyCetxE2Lozx7wM',65);
/*!40000 ALTER TABLE `stripe_state_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_language` int(11) DEFAULT NULL,
  `secondary_language` int(11) DEFAULT NULL,
  `secondary_language_level` int(11) DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_details`
--

LOCK TABLES `student_details` WRITE;
/*!40000 ALTER TABLE `student_details` DISABLE KEYS */;
INSERT INTO `student_details` VALUES (1,3,1,'male','Student of Oxford','hi there ! this is testing',1,2,2,'70.1234','35.1234','test address','2021-08-03 07:53:26','2021-08-05 04:20:09'),(2,4,1,'None','Asdsad','Asdsad',2,1,1,NULL,NULL,NULL,'2021-08-05 04:28:53','2021-08-26 12:22:49'),(3,5,1,'None','Somebody headline!','Somebody introduction!',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-05 05:28:33','2021-10-21 05:51:31'),(4,6,1,'Other','Student Boy Headline !','Student Boy Introduction!',1,3,3,'30.7036019','76.68207149999999','R 33, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 140307, India','2021-08-05 05:43:25','2021-10-28 11:21:41'),(5,7,1,NULL,'Need help in statistics','Looking to get a study geoup going got stats 360',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-05 20:38:40','2021-08-05 20:38:40'),(6,15,1,'None','Conor grey!','Ok then it is my personal choice',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-16 07:04:35','2021-10-21 05:49:44'),(7,16,1,'None','Ramos Headline !','Ramos Introduction.',NULL,NULL,NULL,'30.7333148','76.7794179','Chandigarh, India','2021-08-16 09:35:27','2021-09-13 12:59:26'),(8,17,1,'None','Talented boy Headline','Talented boy introduction',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-18 06:13:15','2021-08-18 06:38:12'),(9,18,1,NULL,'Looking for a study buddy','I really need help with finance looking to get a consistant study group together',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-18 07:48:58','2021-08-18 07:48:58'),(10,19,1,'None','This is new headline that will be refected on profile and can be changed later on !','Introduction needed from old hommies are not  as muchh cool!',NULL,NULL,NULL,'null','null','null','2021-08-18 11:13:41','2021-10-25 06:38:28'),(11,20,1,'None','Need a buddy to study with','Hey looking to make a study group for Finance 360',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-19 10:30:26','2021-08-19 10:53:22'),(12,21,1,NULL,'Loking for a buddy to study with','Anyone in Finance 360 with Dr. Yuan that can help me out.',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-20 15:55:08','2021-08-20 16:15:54'),(13,22,1,NULL,'Flymate headline!','Flymate introduction!',NULL,NULL,NULL,NULL,NULL,NULL,'2021-08-24 05:47:03','2021-08-24 05:47:03'),(14,28,1,NULL,'Chota Bacha Headline !','Chota Bacha Introduction!',NULL,NULL,NULL,NULL,NULL,NULL,'2021-09-07 07:02:49','2021-09-07 07:02:49'),(15,30,1,'None','Student build testing','M for resting here this app',NULL,NULL,NULL,'28.6283491','77.082476','J3HJ+8XQ, Janakpuri District Center, Janakpuri, New Delhi, Delhi 110058, India','2021-09-17 09:58:39','2021-09-17 13:24:48'),(16,32,1,NULL,'Looking to build a study group','Looking to build a study group mainly for math 153',NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-06 13:12:10','2021-10-06 13:12:10'),(17,34,1,NULL,'Coach at csk','You know me well !',NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-19 05:26:30','2021-10-19 05:26:30'),(18,35,1,'Male','Student','Test introduction ...',NULL,NULL,NULL,'null','null','null','2021-10-25 07:00:21','2021-10-25 07:04:42'),(19,36,1,NULL,'Test headline','Test introduction',NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-25 10:51:27','2021-10-25 10:51:27'),(20,37,1,'None','Test headline','Test intro...',NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-25 10:58:59','2021-11-08 09:13:13'),(21,60,1,'None','SomeOne special','Not needed',NULL,NULL,NULL,'30.7158745','76.69167279999999','B-65, Phase -7, Industrial Area, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar, Punjab 160055, India','2021-10-28 12:40:05','2021-10-28 12:40:53'),(22,66,1,NULL,'How is it going','Test',NULL,NULL,NULL,NULL,NULL,NULL,'2021-10-30 14:00:53','2021-10-30 14:00:53'),(23,69,1,'Male','Student at Hogwarts School of Witchcraft and Wizardry','Ambitious and good at potions',1,2,2,'51.6905814','-0.4181051','Harry Potter Studio Tour, Leavesden, Watford WD25 7LR, UK','2021-11-08 07:56:30','2021-11-08 10:26:36');
/*!40000 ALTER TABLE `student_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Accounting',NULL,'2021-08-03 07:46:33','2021-10-28 10:33:44'),(2,'Finance',NULL,'2021-08-03 07:46:33','2021-10-28 10:33:57'),(3,'Psychology',NULL,'2021-08-03 07:46:33','2021-10-28 10:34:22'),(4,'Social Work',NULL,'2021-08-03 07:46:33','2021-10-28 10:34:33'),(5,'Computer Science',NULL,'2021-08-03 07:46:34','2021-10-28 10:47:12'),(6,'Human Resource Development',NULL,'2021-08-03 07:46:34','2021-10-28 10:35:33'),(7,'Marketing Management',NULL,'2021-08-03 07:46:34','2021-10-28 10:35:56'),(8,'Communication and Media',NULL,'2021-08-03 07:46:34','2021-10-28 10:36:28'),(9,'Business Administration and Management',NULL,'2021-08-03 07:46:34','2021-10-28 10:47:00'),(10,'Liberal Arts and Science',NULL,'2021-08-03 07:46:34','2021-10-28 10:37:25'),(11,'English Language and Literature',NULL,'2021-08-03 07:46:34','2021-10-28 10:40:02'),(12,'Engineering','2021-10-28 10:40:11','2021-08-03 07:46:34','2021-10-28 10:40:11'),(13,'Art','2021-10-28 10:40:16','2021-08-03 07:46:34','2021-10-28 10:40:16'),(14,'Mathematics','2021-10-28 10:40:22','2021-08-03 07:46:34','2021-10-28 10:40:22'),(15,'English Language and Literature','2021-10-28 10:39:47','2021-10-28 10:38:46','2021-10-28 10:39:47');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_details`
--

DROP TABLE IF EXISTS `tutor_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tutor_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '0=>university,1=>private',
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `native_language` int(11) DEFAULT NULL,
  `secondary_language` int(11) DEFAULT NULL,
  `secondary_language_level` int(11) DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zoom` longtext COLLATE utf8mb4_unicode_ci,
  `hour_rate` double(10,2) DEFAULT NULL,
  `available_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `available_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_details`
--

LOCK TABLES `tutor_details` WRITE;
/*!40000 ALTER TABLE `tutor_details` DISABLE KEYS */;
INSERT INTO `tutor_details` VALUES (1,23,1,'1','Other','Teacher','Common tutor with knowledge!',NULL,NULL,NULL,'30.6977888','76.7053315','2222, Sector 71, Mohali Village, Sahibzada Ajit Singh Nagar, Punjab 140301, India',NULL,35.00,'03:02 AM','11:03 AM','2021-08-31 07:27:56','2021-10-29 11:56:14'),(2,24,1,'1','Male','Headline for teacher guy','No need to say about myself',1,4,4,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,20.00,'04:00 AM','10:00 PM','2021-09-01 04:08:36','2021-09-14 05:31:08'),(3,25,1,'1',NULL,'Xicom Employee!','You know me!',NULL,NULL,NULL,NULL,NULL,NULL,'http://zoom.com',NULL,NULL,NULL,'2021-09-02 06:56:55','2021-09-02 06:56:55'),(4,26,1,'1','Male','Sweetu!','Sweetu!',NULL,NULL,NULL,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,50.00,'02:45 PM','10:45 PM','2021-09-06 10:34:48','2021-09-14 06:31:22'),(5,27,1,'1','None','Headline !','Intro!',NULL,NULL,NULL,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,0.00,NULL,NULL,'2021-09-07 06:48:57','2021-09-14 06:28:16'),(6,29,1,'1','None','Pese hain to hi session book karna !','Pese ho to hi ana !',1,2,1,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,0.00,NULL,NULL,'2021-09-14 06:12:20','2021-09-14 06:26:54'),(7,33,1,'1',NULL,'You + Me + studying= A’s','Hey proficent in excel and minitab. Most knowlagable in statistics.',NULL,NULL,NULL,NULL,NULL,NULL,'https://us05web.zoom.us/j/9900859014?',NULL,NULL,NULL,'2021-10-17 18:11:35','2021-10-17 18:11:35'),(8,38,0,'1',NULL,'Test Headline','Test Introduction',NULL,NULL,NULL,NULL,NULL,NULL,'https://www.google.com',NULL,NULL,NULL,'2021-10-26 04:13:05','2021-10-26 04:13:05'),(9,39,0,'1','Male','Test Headline','Test intro',NULL,NULL,NULL,'null','null','null',NULL,NULL,NULL,NULL,'2021-10-26 04:31:00','2021-10-26 04:31:50'),(10,40,0,'1',NULL,'Neymar jr.','Neymar',NULL,NULL,NULL,NULL,NULL,NULL,'https://neymar.in',NULL,NULL,NULL,'2021-10-26 07:49:55','2021-10-26 07:49:55'),(11,41,0,'1',NULL,'rkasgsd','sfasdf',NULL,NULL,NULL,NULL,NULL,NULL,'https://rk.com',NULL,NULL,NULL,'2021-10-27 09:16:22','2021-10-27 09:16:22'),(12,42,0,'1','Male','Science Teacher','Experience of 4 years',NULL,NULL,NULL,'null','null','null',NULL,NULL,NULL,NULL,'2021-10-27 09:43:43','2021-10-27 09:46:06'),(13,43,0,'1',NULL,'Experience of 5 years in science and technology.','like to connect with fellow experence teachers.',NULL,NULL,NULL,NULL,NULL,NULL,'https://chrisjames.in',NULL,NULL,NULL,'2021-10-27 09:56:36','2021-10-27 09:56:36'),(14,44,0,'1','None','Experence in science!','Experience in science !',1,4,3,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,NULL,NULL,NULL,'2021-10-27 10:15:40','2021-10-27 10:29:50'),(15,45,0,'1','Male','Experience in science subject!','You know me well!',1,4,4,'37.7819564','-122.4358316','1800 Ellis St, San Francisco, CA 94115, USA',NULL,45.00,'04:45 PM','10:45 PM','2021-10-27 10:36:03','2021-10-27 10:38:49'),(16,46,0,'1','Male','Test headline','test intro',NULL,NULL,NULL,'null','null','null',NULL,NULL,NULL,NULL,'2021-10-27 12:59:16','2021-10-27 13:37:18'),(17,62,0,'1','None','6 years of experience in marketing and bussiness.','Need some fame as a marketing expert.',NULL,NULL,NULL,'null','null','null',NULL,NULL,NULL,NULL,'2021-10-29 10:54:38','2021-10-29 10:55:55'),(18,63,0,'1','Male','7 years of experience in marketing','Need some students to teach them!',1,4,4,'37.785834','-122.406417','1800 Ellis St, San Francisco, CA 94115, USA',NULL,35.00,'04:45 PM','10:45 PM','2021-10-29 11:13:01','2021-10-29 11:20:13'),(19,64,0,'1','Male','2 years of experience in social work','Social worker at illnious , CA',1,4,4,'37.785834','-122.406417','Illinois, USA',NULL,10.00,'05:45 AM','04:45 PM','2021-10-29 11:24:56','2021-10-29 11:29:37'),(20,65,0,'1','Male','Experienced accountant','Wants to enhace the students accounting skills by providing sessions.',1,4,4,'45.4510369','-98.4813447','1200 S Jay St, Aberdeen, SD 57401, USA',NULL,30.00,'04:45 PM','10:45 PM','2021-10-29 12:07:07','2021-10-29 12:10:41'),(21,68,0,'1','Male','Headmaster at Hogwarts School of Witchcraft and Wizardry','Defence against the dark arts teacher.',1,2,3,'51.6905814','-0.4181051','Harry Potter Studio Tour, Leavesden, Watford WD25 7LR, UK',NULL,20.00,'04:00 AM','12:00 PM','2021-11-08 07:13:17','2021-11-08 12:30:20');
/*!40000 ALTER TABLE `tutor_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university_details`
--

DROP TABLE IF EXISTS `university_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university_details`
--

LOCK TABLES `university_details` WRITE;
/*!40000 ALTER TABLE `university_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `university_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_notification_preferences`
--

DROP TABLE IF EXISTS `user_notification_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_notification_preferences` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `session_reminder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `chatbox` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `posts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `mentions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `followups` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_notification_preferences`
--

LOCK TABLES `user_notification_preferences` WRITE;
/*!40000 ALTER TABLE `user_notification_preferences` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_notification_preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_subjects`
--

DROP TABLE IF EXISTS `user_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_subjects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `is_update` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=282 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_subjects`
--

LOCK TABLES `user_subjects` WRITE;
/*!40000 ALTER TABLE `user_subjects` DISABLE KEYS */;
INSERT INTO `user_subjects` VALUES (1,3,1,1,'2021-08-03 07:53:39','2021-08-05 04:20:09'),(2,3,2,1,'2021-08-03 07:53:39','2021-08-05 04:20:09'),(5,4,1,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(6,4,2,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(7,4,3,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(8,4,4,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(9,4,5,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(10,4,6,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(11,4,7,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(12,4,8,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(13,4,9,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(14,4,10,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(15,4,11,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(16,4,12,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(17,4,13,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(18,4,14,1,'2021-08-05 04:34:36','2021-08-26 12:22:49'),(19,5,1,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(20,5,2,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(21,5,3,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(22,5,4,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(23,5,5,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(24,5,6,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(25,5,7,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(26,5,8,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(27,5,9,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(28,5,10,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(29,5,11,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(30,5,12,1,'2021-08-05 05:29:42','2021-10-21 05:51:31'),(31,5,13,1,'2021-08-05 05:29:42','2021-10-21 05:51:32'),(32,5,14,1,'2021-08-05 05:29:42','2021-10-21 05:51:32'),(33,6,1,1,'2021-08-05 06:09:57','2021-10-28 11:21:41'),(34,6,2,1,'2021-08-05 06:09:57','2021-10-28 11:21:41'),(35,6,3,1,'2021-08-05 06:09:57','2021-10-28 11:21:41'),(47,7,3,1,'2021-08-05 20:38:57','2021-08-05 20:38:57'),(48,7,6,1,'2021-08-05 20:38:57','2021-08-05 20:38:57'),(49,7,8,1,'2021-08-05 20:38:57','2021-08-05 20:38:57'),(60,15,1,1,'2021-08-16 07:04:39','2021-10-21 05:49:44'),(61,15,2,1,'2021-08-16 07:04:39','2021-10-21 05:49:44'),(62,15,3,1,'2021-08-16 07:04:39','2021-10-21 05:49:44'),(63,16,1,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(64,16,4,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(65,16,7,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(66,16,10,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(67,16,11,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(68,16,13,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(69,16,14,1,'2021-08-16 09:35:35','2021-09-13 12:59:26'),(70,17,2,1,'2021-08-18 06:13:25','2021-09-14 06:44:34'),(71,17,3,1,'2021-08-18 06:13:25','2021-09-14 06:44:34'),(72,17,14,1,'2021-08-18 06:13:25','2021-09-14 06:44:34'),(73,19,1,1,'2021-08-18 11:13:48','2021-10-25 06:38:28'),(74,19,2,1,'2021-08-18 11:13:48','2021-10-25 06:38:28'),(75,19,3,1,'2021-08-18 11:13:48','2021-10-25 06:38:28'),(76,19,14,1,'2021-08-18 11:13:48','2021-10-25 06:38:28'),(77,20,6,1,'2021-08-19 10:30:42','2021-08-19 10:53:22'),(78,20,12,1,'2021-08-19 10:30:42','2021-08-19 10:53:22'),(79,20,14,1,'2021-08-19 10:30:42','2021-08-19 10:53:22'),(80,21,6,1,'2021-08-20 16:10:07','2021-08-20 16:12:40'),(81,21,8,1,'2021-08-20 16:10:08','2021-08-20 16:12:40'),(82,21,12,1,'2021-08-20 16:10:08','2021-08-20 16:12:40'),(83,21,13,1,'2021-08-20 16:10:08','2021-08-20 16:12:40'),(84,21,14,1,'2021-08-20 16:10:08','2021-08-20 16:12:40'),(85,22,1,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(86,22,2,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(87,22,3,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(88,22,4,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(89,22,5,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(90,22,6,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(91,22,7,1,'2021-08-26 12:20:48','2021-08-26 12:20:48'),(95,24,1,1,'2021-09-01 05:40:22','2021-09-14 05:31:12'),(96,24,2,1,'2021-09-01 05:40:22','2021-09-14 05:31:16'),(97,24,3,1,'2021-09-01 05:40:22','2021-09-14 05:31:18'),(109,25,1,1,'2021-09-06 09:45:22','2021-09-06 09:45:22'),(110,25,2,1,'2021-09-06 09:45:22','2021-09-06 09:45:22'),(111,25,3,1,'2021-09-06 09:45:22','2021-09-06 09:45:22'),(115,26,13,1,'2021-09-07 05:34:31','2021-09-14 06:31:23'),(116,26,14,1,'2021-09-07 05:34:31','2021-09-14 06:31:23'),(117,26,1,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(118,26,2,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(119,26,3,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(120,26,4,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(121,26,5,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(122,26,6,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(123,26,7,1,'2021-09-07 05:35:00','2021-09-14 06:31:23'),(124,26,8,1,'2021-09-07 05:35:00','2021-09-14 06:31:24'),(125,26,9,1,'2021-09-07 05:35:00','2021-09-14 06:31:24'),(126,26,10,1,'2021-09-07 05:35:00','2021-09-14 06:31:24'),(127,26,11,1,'2021-09-07 05:35:00','2021-09-14 06:31:24'),(128,26,12,1,'2021-09-07 05:35:00','2021-09-14 06:31:24'),(129,24,13,1,'2021-09-07 06:32:38','2021-09-14 05:31:18'),(130,24,14,1,'2021-09-07 06:32:38','2021-09-14 05:31:18'),(131,28,1,1,'2021-09-07 07:23:59','2021-09-07 07:23:59'),(132,28,13,1,'2021-09-07 07:23:59','2021-09-07 07:23:59'),(133,28,14,1,'2021-09-07 07:23:59','2021-09-07 07:23:59'),(134,29,1,1,'2021-09-14 06:13:27','2021-09-14 06:26:54'),(135,29,2,1,'2021-09-14 06:13:27','2021-09-14 06:26:54'),(136,29,3,1,'2021-09-14 06:13:27','2021-09-14 06:26:54'),(137,27,1,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(138,27,2,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(139,27,3,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(140,27,4,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(141,27,5,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(142,27,6,1,'2021-09-14 06:27:53','2021-09-14 06:28:17'),(143,30,1,1,'2021-09-17 09:58:47','2021-09-17 13:24:48'),(144,30,2,1,'2021-09-17 09:58:47','2021-09-17 13:24:48'),(145,30,3,1,'2021-09-17 09:58:47','2021-09-17 13:24:48'),(146,30,4,1,'2021-09-17 09:58:47','2021-09-17 13:24:48'),(147,30,5,1,'2021-09-17 09:58:47','2021-09-17 13:24:49'),(148,30,6,1,'2021-09-17 09:58:47','2021-09-17 13:24:49'),(149,30,7,1,'2021-09-17 09:58:47','2021-09-17 13:24:49'),(150,30,8,1,'2021-09-17 09:58:48','2021-09-17 13:24:49'),(151,30,9,1,'2021-09-17 09:58:48','2021-09-17 13:24:49'),(152,30,10,1,'2021-09-17 09:58:48','2021-09-17 13:24:49'),(153,30,11,1,'2021-09-17 09:58:48','2021-09-17 13:24:49'),(154,32,1,1,'2021-10-06 13:12:20','2021-10-06 13:12:20'),(155,32,6,1,'2021-10-06 13:12:20','2021-10-06 13:12:20'),(156,32,14,1,'2021-10-06 13:12:20','2021-10-06 13:12:20'),(157,23,3,1,'2021-10-14 09:12:36','2021-10-29 11:56:14'),(158,23,4,1,'2021-10-14 09:12:36','2021-10-29 11:56:14'),(169,33,1,1,'2021-10-17 18:11:42','2021-10-17 18:11:42'),(170,33,2,1,'2021-10-17 18:11:42','2021-10-17 18:11:42'),(171,33,3,1,'2021-10-17 18:11:42','2021-10-17 18:11:42'),(172,33,5,1,'2021-10-17 18:11:42','2021-10-17 18:11:42'),(173,33,8,1,'2021-10-17 18:11:42','2021-10-17 18:11:42'),(174,34,1,1,'2021-10-19 05:26:37','2021-10-19 05:26:37'),(175,34,2,1,'2021-10-19 05:26:37','2021-10-19 05:26:37'),(176,34,3,1,'2021-10-19 05:26:37','2021-10-19 05:26:37'),(177,6,4,1,'2021-10-21 06:37:59','2021-10-28 11:21:41'),(178,6,5,1,'2021-10-21 06:37:59','2021-10-28 11:21:41'),(179,6,6,1,'2021-10-21 06:37:59','2021-10-28 11:21:41'),(180,6,7,1,'2021-10-21 06:37:59','2021-10-28 11:21:41'),(181,6,8,1,'2021-10-21 06:38:00','2021-10-28 11:21:41'),(183,6,10,1,'2021-10-21 06:38:00','2021-10-28 11:21:41'),(187,35,1,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(188,35,2,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(189,35,4,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(190,35,5,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(191,35,6,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(192,35,11,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(193,35,12,1,'2021-10-25 07:00:40','2021-10-25 07:04:42'),(194,36,1,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(195,36,2,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(196,36,5,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(197,36,8,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(198,36,12,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(199,36,14,1,'2021-10-25 10:51:33','2021-10-25 10:51:33'),(200,37,1,1,'2021-10-25 10:59:04','2021-11-08 09:13:13'),(201,37,5,1,'2021-10-25 10:59:04','2021-11-08 09:13:13'),(202,37,9,1,'2021-10-25 10:59:04','2021-11-08 09:13:13'),(203,37,12,1,'2021-10-25 10:59:04','2021-11-08 09:13:13'),(204,38,1,1,'2021-10-26 04:13:11','2021-10-26 04:13:11'),(205,38,5,1,'2021-10-26 04:13:11','2021-10-26 04:13:11'),(206,38,9,1,'2021-10-26 04:13:11','2021-10-26 04:13:11'),(207,38,12,1,'2021-10-26 04:13:11','2021-10-26 04:13:11'),(208,39,1,1,'2021-10-26 04:31:04','2021-10-26 04:31:50'),(209,39,5,1,'2021-10-26 04:31:04','2021-10-26 04:31:50'),(210,39,9,1,'2021-10-26 04:31:04','2021-10-26 04:31:50'),(211,39,12,1,'2021-10-26 04:31:04','2021-10-26 04:31:50'),(212,40,1,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(213,40,2,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(214,40,3,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(215,40,4,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(216,40,5,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(217,40,6,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(218,40,7,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(219,40,8,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(220,40,9,1,'2021-10-26 09:09:17','2021-10-26 09:09:17'),(221,42,1,1,'2021-10-27 09:43:56','2021-10-27 09:46:07'),(222,42,4,1,'2021-10-27 09:43:56','2021-10-27 09:46:07'),(223,42,6,1,'2021-10-27 09:43:56','2021-10-27 09:46:07'),(224,42,8,1,'2021-10-27 09:43:56','2021-10-27 09:46:07'),(225,42,12,1,'2021-10-27 09:43:56','2021-10-27 09:46:07'),(226,43,1,1,'2021-10-27 09:56:51','2021-10-27 09:56:51'),(227,43,2,1,'2021-10-27 09:56:51','2021-10-27 09:56:51'),(228,43,4,1,'2021-10-27 09:56:51','2021-10-27 09:56:51'),(229,43,6,1,'2021-10-27 09:56:52','2021-10-27 09:56:52'),(230,43,8,1,'2021-10-27 09:56:52','2021-10-27 09:56:52'),(231,44,1,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(232,44,2,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(233,44,3,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(234,44,4,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(235,44,5,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(236,44,6,1,'2021-10-27 10:15:53','2021-10-27 10:29:50'),(237,45,1,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(238,45,2,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(239,45,3,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(240,45,4,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(241,45,5,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(242,45,6,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(243,45,8,1,'2021-10-27 10:36:13','2021-10-27 10:38:49'),(244,46,1,1,'2021-10-27 12:59:21','2021-10-27 13:37:18'),(245,46,5,1,'2021-10-27 12:59:21','2021-10-27 13:37:18'),(246,46,9,1,'2021-10-27 12:59:21','2021-10-27 13:37:18'),(247,46,12,1,'2021-10-27 12:59:21','2021-10-27 13:37:18'),(248,60,6,1,'2021-10-28 12:40:13','2021-10-28 12:40:54'),(249,60,8,1,'2021-10-28 12:40:13','2021-10-28 12:40:54'),(250,60,9,1,'2021-10-28 12:40:13','2021-10-28 12:40:54'),(251,60,10,1,'2021-10-28 12:40:13','2021-10-28 12:40:54'),(252,60,11,1,'2021-10-28 12:40:13','2021-10-28 12:40:54'),(253,62,9,1,'2021-10-29 10:54:50','2021-10-29 10:55:55'),(254,63,9,1,'2021-10-29 11:13:15','2021-10-29 11:20:13'),(255,64,4,1,'2021-10-29 11:25:06','2021-10-29 11:29:37'),(257,23,1,1,'2021-10-29 11:43:31','2021-10-29 11:56:14'),(258,23,2,1,'2021-10-29 11:43:31','2021-10-29 11:56:14'),(259,65,1,1,'2021-10-29 12:07:15','2021-10-29 12:10:41'),(260,68,1,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(261,68,2,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(262,68,3,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(263,68,4,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(264,68,5,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(265,68,6,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(266,68,7,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(267,68,8,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(268,68,9,1,'2021-11-08 07:13:38','2021-11-08 12:30:20'),(269,68,10,1,'2021-11-08 07:13:38','2021-11-08 12:30:21'),(270,68,11,1,'2021-11-08 07:13:38','2021-11-08 12:30:21'),(271,69,1,1,'2021-11-08 07:56:38','2021-11-08 10:26:36'),(272,69,2,1,'2021-11-08 07:56:38','2021-11-08 10:26:36'),(273,69,3,1,'2021-11-08 07:56:38','2021-11-08 10:26:36'),(274,69,4,1,'2021-11-08 07:56:38','2021-11-08 10:26:36'),(275,69,5,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(276,69,6,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(277,69,7,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(278,69,8,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(279,69,9,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(280,69,10,1,'2021-11-08 07:56:39','2021-11-08 10:26:36'),(281,69,11,1,'2021-11-08 07:56:39','2021-11-08 10:26:36');
/*!40000 ALTER TABLE `user_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_universities`
--

DROP TABLE IF EXISTS `user_universities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_universities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_universities`
--

LOCK TABLES `user_universities` WRITE;
/*!40000 ALTER TABLE `user_universities` DISABLE KEYS */;
INSERT INTO `user_universities` VALUES (1,5,2,'2021-08-05 05:28:33','2021-10-21 05:51:31'),(2,6,2,'2021-08-05 05:43:25','2021-10-28 11:21:41'),(3,7,2,'2021-08-05 20:38:40','2021-08-05 20:38:40'),(4,15,2,'2021-08-16 07:04:34','2021-10-21 05:49:44'),(5,16,2,'2021-08-16 09:35:27','2021-09-13 12:59:26'),(6,17,2,'2021-08-18 06:13:15','2021-09-14 06:44:33'),(7,18,2,'2021-08-18 07:48:58','2021-08-18 07:48:58'),(8,19,2,'2021-08-18 11:13:41','2021-10-25 06:38:28'),(9,20,2,'2021-08-19 10:30:26','2021-08-19 10:53:22'),(10,21,2,'2021-08-20 15:55:08','2021-08-20 16:15:54'),(11,22,2,'2021-08-24 05:47:03','2021-08-24 05:47:03'),(12,23,2,'2021-08-31 07:27:56','2021-10-29 11:56:14'),(13,24,2,'2021-09-01 04:08:36','2021-09-14 05:31:08'),(14,25,2,'2021-09-02 06:56:55','2021-09-02 06:56:55'),(15,26,2,'2021-09-06 10:34:48','2021-09-14 06:31:22'),(16,27,2,'2021-09-07 06:48:57','2021-09-14 06:28:16'),(17,28,2,'2021-09-07 07:02:49','2021-09-07 07:02:49'),(18,29,2,'2021-09-14 06:12:20','2021-09-14 06:26:54'),(19,30,2,'2021-09-17 09:58:39','2021-09-17 13:24:48'),(20,32,2,'2021-10-06 13:12:10','2021-10-06 13:12:10'),(21,33,2,'2021-10-17 18:11:35','2021-10-17 18:11:35'),(22,34,2,'2021-10-19 05:26:30','2021-10-19 05:26:30'),(23,35,2,'2021-10-25 07:00:21','2021-10-25 07:04:42'),(24,36,2,'2021-10-25 10:51:27','2021-10-25 10:51:27'),(25,37,2,'2021-10-25 10:58:59','2021-11-08 09:13:13'),(26,38,2,'2021-10-26 04:13:05','2021-10-26 04:13:05'),(27,39,2,'2021-10-26 04:31:00','2021-10-26 04:31:50'),(28,40,2,'2021-10-26 07:49:55','2021-10-26 07:49:55'),(29,41,2,'2021-10-27 09:16:22','2021-10-27 09:16:22'),(30,42,2,'2021-10-27 09:43:43','2021-10-27 09:46:07'),(31,43,2,'2021-10-27 09:56:36','2021-10-27 09:56:36'),(32,44,2,'2021-10-27 10:15:40','2021-10-27 10:29:50'),(33,45,2,'2021-10-27 10:36:03','2021-10-27 10:38:49'),(34,46,2,'2021-10-27 12:59:16','2021-10-27 13:37:18'),(35,60,2,'2021-10-28 12:40:05','2021-10-28 12:40:53'),(36,62,52,'2021-10-29 10:54:38','2021-10-29 10:55:55'),(37,63,56,'2021-10-29 11:13:01','2021-10-29 11:20:13'),(38,64,56,'2021-10-29 11:24:56','2021-10-29 11:29:37'),(39,65,57,'2021-10-29 12:07:07','2021-10-29 12:10:41'),(40,66,2,'2021-10-30 14:00:53','2021-10-30 14:00:53'),(41,68,59,'2021-11-08 07:13:17','2021-11-08 12:30:20'),(42,69,2,'2021-11-08 07:56:29','2021-11-08 10:26:36');
/*!40000 ALTER TABLE `user_universities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=>deactivated,1=>activated',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification` int(11) DEFAULT NULL COMMENT 'null=enabled,1=>disabled',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stripe_cust_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avg_rating` double(8,2) NOT NULL DEFAULT '0.00',
  `stripe_acc_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` enum('ios','android','web') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_onboarding_complete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','','admin@study.com',NULL,'india','delhi','1234567890',NULL,'$2y$10$TvYsMJqQscscNB2/yqZmw.zT9oBJrI6lXVXaAsHg3PbTfyMvVTzdy',1,NULL,NULL,NULL,'nfvEaCCRfFeUaFCckrvhYq1roJem3fLCGbq2isUoWqByR75uoVTcrYGxj47L','2021-08-03 07:46:33','2021-08-03 07:46:33',NULL,0.00,NULL,NULL,NULL,0),(2,2,'University','','university@study.com',NULL,'india','delhi','1234567891',NULL,'$2y$10$7BAbM9sOWemMbz0YkvpCeezJ2cr8Ra9rxZ9e9/gxLMfUCdqiiL1/.',1,'117489679.jpg',NULL,NULL,NULL,'2021-08-03 07:46:33','2021-09-14 06:25:33',NULL,0.00,NULL,NULL,NULL,0),(3,4,'test1',NULL,'test@gmail.com',NULL,'test','test','1111111112',NULL,'$2y$10$pttjLyzrx.Ke2CGwSrLuRuIgmmY9eYkM.nnk4gOxgacogZnxgaxLq',1,NULL,1,NULL,NULL,'2021-08-03 07:49:52','2021-08-31 05:39:41',NULL,0.00,NULL,NULL,NULL,0),(5,4,'Somebody',NULL,'somebody@gmail.com','1970-01-31','USA','Texas','741236987456',NULL,'$2y$10$Oul/wyZTAJtyeBsPZDo4FeL7/Laxic5uET6y5GhCRNs254f5yjLnu',1,'416465567.PNG',1,NULL,NULL,'2021-08-05 05:26:50','2021-10-21 07:04:51',NULL,0.00,NULL,NULL,NULL,0),(6,4,'Student','Boy','ravi.kumar@xicom.biz','1970-01-08','USA','Texas','965874123254',NULL,'$2y$10$zydD.oP7WkFjxTFl.hEx.eSmME5w.WSWxwuP23iVI6GI785w/AAlK',1,'785908476.png',1,NULL,NULL,'2021-08-05 05:43:02','2021-11-02 09:32:31','cus_KORbvzgM7dmTAf',4.50,'acct_1JonfGPnfXYpube9','cVeCbdjqh0eXk6fP8cUsel:APA91bFVWZG_8FPw6_biB8wjUST7or-fNZ_nizKk2tRn_F-QLjSKrTCMjJphElS8rM2gVKImvBa4VgFBXaiOOz9U_k-BakTPfgBUfmBRIhOonxwloszheuo7CNkKi_kEqRBrbtJ2yGjT','ios',0),(7,4,'Adnan','Masic','amasic@neiu.edu','1995-05-19','USA','Texas','7739998240',NULL,'$2y$10$pwqnFEgDrFPs240s6A1vJ.51RCaC.fd3CkP/ZNF08.Rfm7BTl6Sxm',1,NULL,NULL,NULL,NULL,'2021-08-05 11:59:15','2021-08-05 20:38:40',NULL,0.00,NULL,NULL,NULL,0),(15,4,'Braian','O Conor','cornor@gmail.com','1970-01-08','USA','Texas','644324412364',NULL,'$2y$10$L1u43UVGC268EkuQ1bwfMuP/47K5o.S8jPbJfwGBThMHmjGTHEkae',1,'1915263835.PNG',NULL,NULL,NULL,'2021-08-16 07:03:39','2021-10-21 05:49:44',NULL,0.00,NULL,NULL,NULL,0),(16,4,'Ramos',NULL,'ramos@gmail.com','1970-01-30','USA','Texas','9514753682',NULL,'$2y$10$Jz7Vh49LlaMu1/UJAQOvkOdNmToiXhk9zQTX99BgHP1F6yp2HHT.m',1,'250726075.png',1,NULL,NULL,'2021-08-16 09:34:48','2021-10-25 10:16:56','cus_KRuhBWnwCD7aaf',0.00,NULL,'eBvIlcJcRRqRzc5NS-hbxD:APA91bH5fe2bcs2vhvHRj794MGMj4-Tnz3VZpqMaiLOY3zW7_H8AyrUH6r__uqAqTh1Z8sljB3JDnIO7VGrlqAYies2EUteIpkqN30mzUvDxbXrOCB7PoltKpvM3VE-0HyFNIOy47wq6','android',0),(17,4,'Talented','Boy','talented@gmail.com','1970-01-30','USA','Texas','85479631098',NULL,'$2y$10$pSrbqS72rP9ntXvkBUZD0u8MCd7M4F4zUtsXukRTF8gup6MMYBRC.',1,'1459058877.png',NULL,NULL,NULL,'2021-08-18 06:12:31','2021-09-14 06:44:33',NULL,0.00,NULL,NULL,NULL,0),(18,4,'Adnan','Masic','adomatic@studybuddyllc.com','1995-05-19','USA','Texas','7733951824',NULL,'$2y$10$4bevMB9z2.Qimzz69e7yhexP1SBn37Bdeh6Jb1vm.NRFNVnS.R.yK',1,NULL,NULL,NULL,NULL,'2021-08-18 07:47:47','2021-08-20 17:08:25',NULL,0.00,NULL,NULL,NULL,0),(19,4,'Zalton',NULL,'zalton@gmail.com','1970-01-08','USA','Texas','789654785964',NULL,'$2y$10$DlobWngB68N5JeS2HDPLoOVX3jUZIVGczDZXOMqcCJeJpvCXXR10.',1,'404277279.PNG',1,NULL,NULL,'2021-08-18 10:56:40','2021-10-25 07:39:46',NULL,0.00,NULL,'cKFEnvYUR5WY1AR3KtohvD:APA91bHA1TN0bLJ6ogPRPuWxMIbem8A1VuyI35oydm8kZu_FFxqWqFYTcQ_bGBLUvzsbVqC4e8qqBWWddmslv86-KDGYkBu8pTBVfsaB80495b0ie0t4TyUjg_eIu2qzZ-Inz0mv_zda','android',0),(20,4,'Adnan','Masic','CommunityFly@studybuddyllc.com','1995-05-19','USA','Texas','7733077065',NULL,'$2y$10$yWTuDd21guc1JBV2AAZ5ne.KJkpwVjPgUHsDxpO7xmb6iyjMPXsXi',1,'2101802574.png',NULL,NULL,NULL,'2021-08-19 10:28:37','2021-08-19 10:53:22',NULL,0.00,NULL,NULL,NULL,0),(21,4,'John','Colon','johncolon@studybuddyllc.com','1994-08-23','USA','Texas','8728003093',NULL,'$2y$10$Df7w7EzP5es1iPOC8Bnvwepc.yGhYRMuJAopvOAI5eo6bHVGAJf1G',1,NULL,1,NULL,NULL,'2021-08-20 15:54:05','2021-08-20 16:15:54',NULL,0.00,NULL,NULL,NULL,0),(22,4,'Fly','Mate','flymate@gmail.com','1970-01-30','USA','Texas','985698574123',NULL,'$2y$10$vs0nyoPwbzs8ekCpKlS6RuAv/l/B5hQ2gwKCkrd1uBJ4JRqNJRNn6',1,NULL,1,NULL,NULL,'2021-08-24 05:45:49','2021-08-26 12:20:52',NULL,0.00,NULL,NULL,NULL,0),(23,3,'John','smith','suraj.paul1@xicom.biz','1970-01-08','test','test','872389473857',NULL,'$2y$10$h4rc1GVx7I4Y3OR571VRN.eW1ItTWuIUaCGWBLlpID/AXoLaV3Zoq',1,'1962067981.png',1,NULL,NULL,'2021-08-31 07:26:53','2021-11-08 10:39:42','cus_KPdl8VS3loTFvE',4.50,'acct_1JopPBPgqmZozgSl','fkLISH74okn3gQB6MEhLZ1:APA91bG7cm0tU2LLzLpqUtBrKo-j_I6x7ZD7fmoOMx9elRy-LjICV9evEPAAIJTCjtXXTtelVFRzr3_GrMsZhbkvOSt4RFXvvxBHI_Oq72WTG3GqBfaBrv6y48-NKxHV4GyR0KZKAg5_','ios',1),(24,3,'Teacher','Guy','teacher@gmail.com','1985-02-08','USA','Texas','9517536842',NULL,'$2y$10$RYyrYuD75DnPa8.g1JcF.ex613TjFUxWj8CyeQqP6NE6VcFk5tKiq',1,'328982473.png',NULL,NULL,NULL,'2021-09-01 03:58:56','2021-09-21 05:43:51',NULL,0.00,NULL,NULL,NULL,0),(30,4,'Suraj','Paul','johnsmith@gmail.com','1970-01-01','USA','Texas','8076043823',NULL,'$2y$10$2TMB.ZhJ0zWUvEjuzlWfF.QZIT8WrG8T3nUS.ZX.68juKn3WAs6Ci',0,NULL,NULL,NULL,NULL,'2021-09-17 09:58:05','2021-09-17 13:24:48',NULL,0.00,NULL,NULL,NULL,0),(31,3,NULL,NULL,'akash@yopmail.com','1998-01-08','USA','Texas','7541259658',NULL,'$2y$10$oOj0OBxwD4sz/dxQGh0UDOic.UcYVR1UIpKbz.SLHnkHnGxPfmewK',0,NULL,NULL,NULL,NULL,'2021-10-01 12:54:42','2021-10-01 12:54:42',NULL,0.00,NULL,NULL,NULL,0),(32,4,'Adnan','Masic','test@yahoo.com','1995-05-08','USA','Texas','7735555555',NULL,'$2y$10$t.S36e76W3IfL82odhOyweSwwuoffo1ZScF0k5FIdCrg2Blc0aDcO',0,NULL,NULL,NULL,NULL,'2021-10-06 13:06:59','2021-10-06 17:51:52',NULL,0.00,NULL,NULL,NULL,0),(33,3,'Adnan','Masic','adnanmasic12@yahoo.com','1995-05-19','USA','Texas','5555555555',NULL,'$2y$10$/g4Z.kmsqRAJL.WIZPbUHOjm4a4RKvfL6flg4JMEfdDDumYyoa0H6',0,NULL,NULL,NULL,NULL,'2021-10-17 18:06:26','2021-10-17 18:11:45',NULL,0.00,NULL,NULL,NULL,0),(34,4,'Faf','Duplesis','faf@gmail.com','1985-01-01','USA','Texas','965874658965','2021-10-19 05:27:33','$2y$10$RC.FvDrObB8zjZvaGw.IIuwqK6wmVEFgaNki4L9xULCn4YBj96/Em',1,NULL,1,NULL,NULL,'2021-10-19 05:25:33','2021-10-19 05:26:41',NULL,0.00,NULL,NULL,NULL,0),(35,4,'Test','User','dipankur00@gmail.com','1970-01-08','USA','Texas','9877058699',NULL,'$2y$10$zC3fKkEfi8u0wK/y3Oe7a.y8EIz9Vye0aX5Ixtbb5qB7mSFXkKDu6',1,'336313640.PNG',1,NULL,NULL,'2021-10-25 06:58:38','2021-10-25 09:20:15','cus_KTJykjawlH2SDT',0.00,NULL,'cyMCdUmjQl-VTkaWbbeAIk:APA91bGwhzyfkdW3gcky5VjLE0lrpyyhniHQUv4KUuI3Kvl8e6JquLg3jnT1QMUklBkj5KWCgsyGf6YlQUAV3_gFBvzWZjvnMJ-_Ra46QDidGpoutZsK98ui1TOg_JtOG6vDT49AGa0s','android',0),(36,4,'Tes','User','testUser@yopmail.com','1970-01-08','USA','Texas','6253987456',NULL,'$2y$10$QCw.eGOdSIpxhz/SM1eVFO4E7SVD9mM.upXk2Lit0fWcVbT.BvKNW',0,NULL,1,NULL,NULL,'2021-10-25 10:51:01','2021-10-25 10:51:36',NULL,0.00,NULL,NULL,NULL,0),(37,4,'CR',NULL,'cr007@yopmail.com','1970-01-07','USA','Texas','6253895412',NULL,'$2y$10$hOQ6ZM4nKplH5oa12bdTWelLhZ5hzcVnedQT6gi0vfo6/RrH/cObm',1,'107889320.png',NULL,NULL,NULL,'2021-10-25 10:58:14','2021-11-08 09:13:13','cus_KTP66ox3gU0Ewh',0.00,NULL,'dWAKNekIVkc2vuQ1LToKjU:APA91bGcwZUBtQpkXUTK9pyN8Lsor4xoZU5zGK9q0tbXmYSy7hegmcBI6ofZGFJbhIyM_oYB7oABJZOC-UC8TmevpBRhWlL-IsPmsVx2xQB1aqNMDHH82vr7HN-HyPAi6iVdHubvmTxn','ios',0),(38,3,'Test','Tutor','testTutor@yopmail.om','1970-01-08','USA','Texas','6253987415',NULL,'$2y$10$6V3QuO2LHG5Z2mbpSUScYeOrR/wrlBmrZdHyUKb8gXiZw5FsgkDWm',0,NULL,1,NULL,NULL,'2021-10-25 13:20:20','2021-10-26 04:13:14',NULL,0.00,NULL,NULL,NULL,0),(39,3,'Test','Tutor','testtutor1@yopmail.com','1970-01-08','USA','Texas','6253965874',NULL,'$2y$10$l8cNfisTYko08g0VQCCM.O0i2mL1zzMaTyFZC7h5QZJ2KztxT58E6',1,NULL,NULL,NULL,NULL,'2021-10-26 04:30:19','2021-10-26 04:32:44',NULL,0.00,NULL,NULL,NULL,0),(40,3,'Neymar','Jr.','neymar@gmail.com','1970-01-30','USA','Texas','987658471230','2021-10-26 07:49:55','$2y$10$46K3Jrdk6x5W1RbGm0/RMe5M80zDeWewiBOkWe/ny/VvOcMuELFTq',1,NULL,1,NULL,NULL,'2021-10-26 07:48:30','2021-10-26 11:34:50',NULL,0.00,NULL,'f_KltWE7ZkX6oo6SAwP3aA:APA91bGocYMAM3lPS90gVK1kx53-2Hq8amhRMMG3wnM_AWbT8JBtX3iViX_JnhH_bZqTV_9X5nCWvUc3zAP5xgLVFe587iwy5EZZVIcxwqS6rXrR7tKcUNepejibq1yPMwaLVZLfWFLd','ios',0),(45,3,'Chris','James','chrisjames@yopmail.com',NULL,'USA','Texas','912365477895',NULL,'$2y$10$WvplHN2qhCMjJ84sfbh0Au.Z0G.R60zaELpgzvTkIjYt7Vh.hOJCu',0,'2123228568.png',NULL,NULL,NULL,'2021-10-27 10:34:41','2021-10-27 10:38:49',NULL,0.00,NULL,NULL,NULL,0),(46,3,'TestTutor',NULL,'testTutor007@yopmail.com','1970-01-08','USA','Texas','9876543210',NULL,'$2y$10$4fwOhs4nYNNOmTl.069/U.ZFLP86zJlvXNak1l0b4ygP5oXjVhE/S',1,'368203206.png',1,NULL,NULL,'2021-10-27 12:58:40','2021-11-08 06:11:15','cus_KUAhhHGj1Gsx8W',0.00,NULL,'f2MVjIjDdEUQrGSnIF17Lz:APA91bH9RXFbM54EWUJWT0Kdnk9ASI08qAIX502sJlNawmI94_ovIbv0K3Afin5L0l8CBQZYIEkDLO8Kj0RZDRrdtIkUfx8FL-4-DHXUS53YLF4EYV9757iK4uEwg5uHJhi4nhJRU1Ne','ios',0),(47,2,'Northeastern',NULL,'neiu.edu@gmail.com',NULL,'U.S','Chicago, Illinois','(773) 442-4050',NULL,'$2y$10$cgRi5YKYK1EAz/QRweiDyedZ68MybOd3EaqMNL24CrTE3GkClu30e',1,NULL,NULL,NULL,NULL,'2021-10-28 11:43:56','2021-10-28 11:44:03',NULL,0.00,NULL,NULL,NULL,0),(48,2,'University of Illinois at Chicago',NULL,'uic.edu@gmail.com',NULL,'U.S','Chicago, Illinois','(312) 996-7000',NULL,'$2y$10$s.aOUfQj8BlvrQB8agstAO1WSSB.lkbYcAFZxMd1W.ilQWwm/gEw6',1,NULL,NULL,NULL,NULL,'2021-10-28 11:50:30','2021-10-28 11:50:33',NULL,0.00,NULL,NULL,NULL,0),(49,2,'University of Chicago',NULL,'infocenter@uchicago.edu',NULL,'U.S','Chicago, Illinois','7737021234',NULL,'$2y$10$jQb/.44kI0NmPOwpLOHtke.Uu0VGw3RhetDg9RmYjwv8QjMHLz7yK',1,NULL,NULL,NULL,NULL,'2021-10-28 11:53:20','2021-10-28 11:54:16',NULL,0.00,NULL,NULL,NULL,0),(50,2,'Columbia College Chicago',NULL,'humanresources@colum.edu',NULL,'U.S','Chicago, Illinois','3123698215',NULL,'$2y$10$fyBC/G2UpkqkmB8dk07x8uY8w5tJgJbwt6l68FPQ8fMnFB16cFE6u',1,NULL,NULL,NULL,NULL,'2021-10-28 11:58:13','2021-10-28 11:58:16',NULL,0.00,NULL,NULL,NULL,0),(51,2,'Loyola',NULL,'webmaster@luc.edu',NULL,'U.S','Chicago, Illinois','7732743000',NULL,'$2y$10$EgBarSbocmWLPH9hKH6R9OLCrVCaa/cWSWJuPsP7l9gsePVIKxJla',1,NULL,NULL,NULL,NULL,'2021-10-28 12:00:44','2021-10-28 12:18:34',NULL,0.00,NULL,NULL,NULL,0),(52,2,'Concordia University River Forest',NULL,'cuchicago.edu@gmail.com',NULL,'U.S','River Forest, Illinois','7087718300',NULL,'$2y$10$kb6pj0CJFWcLxc85Ofyrz.1u8ChTMJR4FVemORzXi.x/t.hHkS4EW',1,NULL,NULL,NULL,NULL,'2021-10-28 12:13:50','2021-10-28 12:13:52',NULL,0.00,NULL,NULL,NULL,0),(53,2,'Eastern Illinois',NULL,'support@eiu.edu',NULL,'U.S','Charleston, Illinois','2175815000',NULL,'$2y$10$bkc5aCDR8LtwMfYMlbhm4ejYthFfF04RMK/iY4LBDxmNG4HpZxC0a',1,NULL,NULL,NULL,NULL,'2021-10-28 12:18:12','2021-10-28 12:18:44',NULL,0.00,NULL,NULL,NULL,0),(54,2,'Illinois Benedictine College',NULL,'ben.edu@gmail.com',NULL,'U.S','Lisle, Illinois','6308296000',NULL,'$2y$10$KXF3wgudi89P11lb64xU9.gSVeeHWnQZpsAZLLlLuvOSfk5fcvNVG',1,NULL,NULL,NULL,NULL,'2021-10-28 12:23:19','2021-10-28 12:23:21',NULL,0.00,NULL,NULL,NULL,0),(55,2,'Illinois Institute of Technology',NULL,'lit.edu@gmail.com',NULL,'U.S','Chicago , Illinois','3125673000',NULL,'$2y$10$zqJc/CAloxWubUGxPBqZ2u3VPiIT.bYZwjhhZVJf3/4Zjc1MsbwZG',1,NULL,NULL,NULL,NULL,'2021-10-28 12:25:51','2021-10-28 12:25:53',NULL,0.00,NULL,NULL,NULL,0),(56,2,'Illinois State University',NULL,'illinoisstate.edu@gmail.com',NULL,'U.S','Normal, Illinois','3094382181',NULL,'$2y$10$burcGS5du6mxBI0Wy1JcEeIE3bkP/lDAYj5yiFQRmZEnTgZMs0Uy6',1,NULL,NULL,NULL,NULL,'2021-10-28 12:27:53','2021-10-28 12:27:56',NULL,0.00,NULL,NULL,NULL,0),(57,2,'Northern Illinois University',NULL,'niu.edu@gmail.com',NULL,'U.S','DeKalb, Illinois','1601152828',NULL,'$2y$10$jBtB8kOm48ZfX8okcQhDl.C4H/sVbTCTDiZLoGMgti5N/RA4VT10S',1,NULL,NULL,NULL,NULL,'2021-10-28 12:30:56','2021-10-28 12:30:59',NULL,0.00,NULL,NULL,NULL,0),(58,2,'Southern Illinois University',NULL,'siu.edu@gmail.com',NULL,'U.S','Carbondale, Illinois','6184532121',NULL,'$2y$10$QsssQBG.GBrg8QoWXaEw9u7VydskpcgAEL1FbXBgMYKlwzU0VTTre',1,NULL,NULL,NULL,NULL,'2021-10-28 12:32:13','2021-10-28 12:32:18',NULL,0.00,NULL,NULL,NULL,0),(59,2,'Western Illinois University',NULL,'wiu.edu@gmail.com',NULL,'U.S','Macomb, Illinois','3092981414',NULL,'$2y$10$NcwiCMxVOcbfYoyf2XIoEeGuLnMOAp0czoFM2GqN5Al8u2uAqnzmW',1,NULL,NULL,NULL,NULL,'2021-10-28 12:33:32','2021-10-28 12:33:37',NULL,0.00,NULL,NULL,NULL,0),(65,3,'Chris','Hems','chrishems@yopmail.com','1970-01-29','USA','Texas','628354796132',NULL,'$2y$10$HUsQvI.QFgkMKxKxZTG1NuE00Pn8k0zE.BvbTglSKOXXIQCqBgf/O',1,'1244392582.png',1,NULL,NULL,'2021-10-29 12:05:19','2021-11-02 07:20:45','cus_KUu9WD0uiC6wcf',0.00,'acct_1JptvePYsdOgWTx5','fAN9_IAELU80pOpMYm_OwZ:APA91bHFFO4go2QsbGglc47R7HVPM_E-3KcRzw-Abqdh114U2TPKFjx2jSqkzWPjPsZDWaVm0dLblz6hZ_pBf1OuL-ZE-3SSe5XJP93R7NUbf_mxtd6u9x6LQdk23Ib-a-qYr78gdy_P','ios',0),(66,4,'Gse',NULL,'test@taco.com','1995-05-08','USA','Texas','8888888888',NULL,'$2y$10$auPlF/4oj5oT0MZVFSOPzOi/Bn0QbWNzT091qMRV.TRB5j497ybk.',0,NULL,NULL,NULL,NULL,'2021-10-30 14:00:25','2021-10-30 14:00:53',NULL,0.00,NULL,NULL,NULL,0),(67,3,NULL,NULL,'adomatic@studybuddy.com','1995-05-19','USA','Texas','7739998241',NULL,'$2y$10$nrqOIAlGd5qSwwc9J0j2ke.8LeKf.y//8cECdWlRmbVr1jjff.wXy',0,NULL,NULL,NULL,NULL,'2021-11-02 03:16:46','2021-11-02 03:16:46',NULL,0.00,NULL,NULL,NULL,0),(68,3,'Severus','Snape','finalTutor@yopmail.com',NULL,'USA','Texas','9877058690','2021-11-08 10:19:07','$2y$10$Gj3jN1rt/3lfQr4wNqzKYeL4Jvv5WY1uT3WB6Sm9zzjWtN6NyTJ6a',1,'1729755006.png',1,NULL,NULL,'2021-11-08 06:21:34','2021-11-08 12:32:32','cus_KYZCP3NF4pF0J3',0.00,NULL,'fkLISH74okn3gQB6MEhLZ1:APA91bG7cm0tU2LLzLpqUtBrKo-j_I6x7ZD7fmoOMx9elRy-LjICV9evEPAAIJTCjtXXTtelVFRzr3_GrMsZhbkvOSt4RFXvvxBHI_Oq72WTG3GqBfaBrv6y48-NKxHV4GyR0KZKAg5_','ios',0),(69,4,'Draco','Malfoy','finalstudent@yopmail.com','1970-01-08','USA','Alaska','9877058691',NULL,'$2y$10$AD/e55ZRthjDGQVMHnHuF.5SkaK90NKbjVhHdycXYYyyGkFWOI5/2',1,'1271620894.png',1,NULL,NULL,'2021-11-08 07:54:58','2021-11-08 10:32:30','cus_KYbi4XWo8vmRjU',0.00,NULL,'dHfroSwD6kDGpKQsRbDaoh:APA91bGgxCwDShta_oUmrcIWbxFdra8dxhi40Hcf9T4xcSgck8lKcYclJlsmFXWYo_zMKmAGTFE_hVhs9NttxefH3VfBHIBX9c8qOVZdGnZ9CY_y9TfHeFAyQe_2hky9uGk9XrFLkFdQ','ios',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallet_transactions`
--

DROP TABLE IF EXISTS `wallet_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wallet_transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `current_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `balance_amount` double(10,2) NOT NULL DEFAULT '0.00',
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0=>debit,1=>credit',
  `session_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallet_transactions`
--

LOCK TABLES `wallet_transactions` WRITE;
/*!40000 ALTER TABLE `wallet_transactions` DISABLE KEYS */;
INSERT INTO `wallet_transactions` VALUES (6,6,'pi_3Jjez2BDUACsglEL0ZwsZcXx',120.00,35.00,85.00,0,15,'2021-10-12 12:31:10','2021-10-12 12:31:10'),(9,23,'pi_3JkOP2BDUACsglEL0hpSZ67E',0.00,120.00,120.00,0,NULL,'2021-10-14 07:31:02','2021-10-14 07:31:02'),(10,23,'pi_3JkoWdBDUACsglEL1kIpYqjm',120.00,35.00,155.00,1,16,'2021-10-15 16:54:37','2021-10-15 16:54:37'),(11,16,'pi_3Jn0t7BDUACsglEL1w6aEGnp',0.00,30.00,30.00,1,NULL,'2021-10-21 13:00:55','2021-10-21 13:00:55'),(12,16,'pi_3Jn0txBDUACsglEL0AYoJs1r',30.00,3000.00,3030.00,1,NULL,'2021-10-21 13:01:47','2021-10-21 13:01:47'),(13,16,'pi_3Jn0u9BDUACsglEL0O3t3SxU',3030.00,35.00,2995.00,0,17,'2021-10-21 18:31:59','2021-10-21 18:31:59'),(14,35,'pi_3JoNKbBDUACsglEL0UG5kCcQ',0.00,1000.00,1000.00,1,NULL,'2021-10-25 07:10:55','2021-10-25 07:10:55'),(15,37,'pi_3JoSI1BDUACsglEL1ehTMHKp',0.00,1000.00,1000.00,1,NULL,'2021-10-25 12:28:35','2021-10-25 12:28:35'),(16,37,'pi_3JoSenBDUACsglEL1md9jiE8',1000.00,35.00,965.00,0,18,'2021-10-25 12:52:07','2021-10-25 12:52:07'),(17,23,'po_1JophdPgqmZozgSliQ9xKEf5',155.00,10.00,145.00,0,NULL,'2021-10-26 13:28:54','2021-10-26 13:28:54'),(18,65,'pi_3JrHOcBDUACsglEL1FdMHuKQ',0.00,45.00,45.00,1,21,'2021-11-02 07:27:04','2021-11-02 07:27:04'),(19,65,'pi_3JrJBSBDUACsglEL19pUdVLJ',45.00,45.00,90.00,1,21,'2021-11-02 09:21:36','2021-11-02 09:21:36'),(20,65,'pi_3JrJLdBDUACsglEL19hurGKo',90.00,45.00,135.00,1,21,'2021-11-02 09:32:07','2021-11-02 09:32:07'),(21,69,'pi_3JtUe5BDUACsglEL1T1WKTBF',0.00,1000.00,1000.00,1,NULL,'2021-11-08 10:00:12','2021-11-08 10:00:12'),(22,69,'pi_3JtUfnBDUACsglEL0KQJR4Al',1000.00,35.00,965.00,0,22,'2021-11-08 10:01:57','2021-11-08 10:01:57');
/*!40000 ALTER TABLE `wallet_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `webhook_calls`
--

DROP TABLE IF EXISTS `webhook_calls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `webhook_calls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci,
  `exception` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `webhook_calls`
--

LOCK TABLES `webhook_calls` WRITE;
/*!40000 ALTER TABLE `webhook_calls` DISABLE KEYS */;
/*!40000 ALTER TABLE `webhook_calls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdraws`
--

DROP TABLE IF EXISTS `withdraws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdraws` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `previous_balance` double(10,2) NOT NULL,
  `withdraw_amount` double(10,2) NOT NULL,
  `left_of_balance` double(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0=Pending, 1=Processing, 2=Completed, 3=Rejected',
  `transaction_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_via` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rejected_reason` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdraws`
--

LOCK TABLES `withdraws` WRITE;
/*!40000 ALTER TABLE `withdraws` DISABLE KEYS */;
INSERT INTO `withdraws` VALUES (5,23,155.00,10.00,145.00,2,'bank_account','card','po_1JophdPgqmZozgSliQ9xKEf5',NULL,'2021-10-26 13:28:34','2021-10-26 13:28:54'),(6,23,145.00,5.00,140.00,2,'bank_account','card','po_1Jp59kPgqmZozgSliquFKeRe',NULL,'2021-10-27 05:58:38','2021-10-27 05:58:38'),(8,65,135.00,5.00,130.00,0,NULL,NULL,NULL,NULL,'2021-11-02 09:42:36','2021-11-02 09:42:36');
/*!40000 ALTER TABLE `withdraws` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-09  7:08:41
