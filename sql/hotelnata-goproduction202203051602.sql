-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: hotelnata
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.5-MariaDB

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
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abouts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `selected` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (3,'tes','tes','tes','tes','2022-02-27 02:40:34','2022-03-05 00:48:10',0),(4,'HOTEL NATA. SINCE 2022','HIGH QUALITY ACCOMMODATION SERVICES','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum','2022-02-27 02:52:59','2022-03-05 00:48:10',1);
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_room` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `proof_of_payment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booking_adults` int(11) DEFAULT NULL,
  `booking_children` int(11) DEFAULT NULL,
  `country` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_payment` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
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
-- Table structure for table `gallerys`
--

DROP TABLE IF EXISTS `gallerys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallerys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `selected` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallerys`
--

LOCK TABLES `gallerys` WRITE;
/*!40000 ALTER TABLE `gallerys` DISABLE KEYS */;
INSERT INTO `gallerys` VALUES (5,'Swimming Pool','gallery1.jpg','2022-03-01 07:22:41','2022-03-01 07:24:35',1,'swimming pool'),(6,'Cocktail','gallery2.jpg','2022-03-01 07:23:58','2022-03-01 07:24:38',1,'restaurant'),(7,'Room View','gallery3.jpg','2022-03-01 07:24:29','2022-03-01 08:47:43',1,'room view'),(8,'Spa Therapy','gallery4.jpg','2022-03-01 08:48:46','2022-03-01 08:48:51',1,'spa'),(9,'Breakfast','gallery5.jpg','2022-03-01 08:49:35','2022-03-01 08:50:15',1,'restaurant'),(10,'Restaurant','gallery6.jpg','2022-03-01 08:50:08','2022-03-01 08:50:12',1,'restaurant');
/*!40000 ALTER TABLE `gallerys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (2,'tangguhlaks','tangguhlaks@gmail.com','Tolong dong','2022-03-05 01:33:42','2022-03-05 01:33:42');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(7,'2022_02_26_103417_slider',2),(8,'2022_02_26_103417_sliders',3),(9,'2022_02_27_080449_abouts',4),(10,'2022_02_27_152903_rooms',5),(11,'2022_02_27_154100_room_images',6),(12,'2022_03_01_024915_gallerys',7),(13,'2022_03_03_035651_create_services_table',8),(14,'2022_03_03_183125_create_books_table',9),(15,'2022_03_05_042536_create_ratings_table',10),(16,'2022_03_05_065322_create_messages_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_book` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selected` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (8,13,3,'Ruanganya nyaman bangettt, gak sabar pengen nginep disini lagiii',5,'2022-03-05 01:23:32','2022-03-05 01:27:35','tangguhlaks',0);
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_images`
--

DROP TABLE IF EXISTS `room_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_room` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `selected` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_images`
--

LOCK TABLES `room_images` WRITE;
/*!40000 ALTER TABLE `room_images` DISABLE KEYS */;
INSERT INTO `room_images` VALUES (10,1,'Single Room1.jpg','2022-02-27 21:52:01','2022-02-28 07:02:53',1),(11,2,'Double Room1.jpg','2022-02-27 21:52:11','2022-02-28 07:00:04',1),(12,1,'Single Room2.jpg','2022-02-28 06:43:03','2022-02-28 07:02:53',0),(13,1,'Single Room3.jpg','2022-03-03 08:44:35','2022-03-03 08:44:35',NULL),(14,3,'Tes Room1.jpg','2022-03-05 00:58:12','2022-03-05 00:59:17',1),(15,3,'Tes Room2.jpg','2022-03-05 00:58:31','2022-03-05 00:59:17',0),(16,3,'Tes Room3.jpg','2022-03-05 00:58:44','2022-03-05 00:58:44',NULL);
/*!40000 ALTER TABLE `room_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rooms` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `favorite` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'Single Room','The Condoloft offers luxury of space for entertaining friends and family. Featuring a separate bedroom and living room for a comfortable and savvy lifestyle also very suitable for long stay along with an oversized window overlooking Bandung Beautiful Scenery.','he Condoloft offers luxury of space for entertaining friends and family. Featuring a separate bedroom and living room for a comfortable and savvy lifestyle also very suitable for long stay along with an oversized window overlooking Bandung Beautiful Scenery.','DOUBLE BED;3 PERSONS;FREE INTERNET;FREE WI-FI;BREAKFAST INCLUDE;FLAT SCREEN TV;FULL AC;BATHROOM','2022-02-27 09:19:57','2022-03-03 08:45:08',300000,1),(2,'Double Room','he Condoloft offers luxury of space for entertaining friends and family. Featuring a separate bedroom and living room for a comfortable and savvy lifestyle also very suitable for long stay along with an oversized window overlooking Bandung Beautiful Scenery.','he Condoloft offers luxury of space for entertaining friends and family. Featuring a separate bedroom and living room for a comfortable and savvy lifestyle also very suitable for long stay along with an oversized window overlooking Bandung Beautiful Scenery.','3 PERSONS;FREE INTERNET;FREE WI-FI;FLAT SCREEN TV','2022-02-27 10:28:07','2022-02-28 07:36:37',200000,1),(3,'Tes Room','kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size. Namun, penawaran yang diberikan tergantung pada masing-masing hotel. Standard room hotel bintang 1 dan bintang 5 tentu berbeda.','kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size. Namun, penawaran yang diberikan tergantung pada masing-masing hotel. Standard room hotel bintang 1 dan bintang 5 tentu berbeda.','DOUBLE BED;3 PERSONS;FREE INTERNET;FREE WI-FI;BREAKFAST INCLUDE;FLAT SCREEN TV;FULL AC','2022-03-05 00:57:49','2022-03-05 00:57:49',200000,NULL);
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (4,'Restaurant the best ever','service1.jpg','2022-03-02 21:37:11','2022-03-02 21:37:11','Restaurant','flaticon-tray-1'),(5,'Spa the best ever','service2.jpg','2022-03-02 21:38:24','2022-03-02 21:38:24','Spa - Beauty & Health','flaticon-nature'),(6,'Beautiful swimming pool','service3.jpg','2022-03-02 21:43:34','2022-03-02 21:43:34','Swimming Pool','flaticon-sports');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (14,'slider1.jpg','2022-02-26 20:10:46','2022-02-26 20:10:46','TOUCH THE DREAM','Live Your Myth In Hotel Nata'),(15,'slider2.jpg','2022-02-26 20:12:02','2022-02-26 20:12:02','WHERE DREAMS COME TRUE','You\'ll Never Forget Your Stay');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sienna Azka Xaviera','admincantik@gmail.com','$2y$10$R1Be0YrRXIxHYnOYbsRMTejJDvAztc5lLVrVT5GwMsrXzoNWC8gkK','2022-02-23 10:13:14','2022-02-23 10:13:14',2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'hotelnata'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-05 16:02:17
