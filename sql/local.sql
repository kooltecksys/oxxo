-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: ::1    Database: local
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `done_missions`
--

DROP TABLE IF EXISTS `done_missions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `done_missions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `mission_id` bigint(20) unsigned NOT NULL,
  `oxxo_id` bigint(20) unsigned NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `done_missions_user_id_foreign` (`user_id`),
  KEY `done_missions_mission_id_foreign` (`mission_id`),
  KEY `done_missions_oxxo_id_foreign` (`oxxo_id`),
  CONSTRAINT `done_missions_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`),
  CONSTRAINT `done_missions_oxxo_id_foreign` FOREIGN KEY (`oxxo_id`) REFERENCES `oxxos` (`id`),
  CONSTRAINT `done_missions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `done_missions`
--

LOCK TABLES `done_missions` WRITE;
/*!40000 ALTER TABLE `done_missions` DISABLE KEYS */;
/*!40000 ALTER TABLE `done_missions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` VALUES (3,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` VALUES (4,'2021_03_02_171531_create_oxxos_table',1);
INSERT INTO `migrations` VALUES (5,'2021_03_02_171542_create_profiles_table',1);
INSERT INTO `migrations` VALUES (6,'2021_03_02_180811_create_missions_table',1);
INSERT INTO `migrations` VALUES (7,'2021_03_02_180820_create_prizes_table',1);
INSERT INTO `migrations` VALUES (8,'2021_03_02_180828_create_objectives_table',1);
INSERT INTO `migrations` VALUES (9,'2021_03_02_180840_create_orders_table',1);
INSERT INTO `migrations` VALUES (10,'2021_03_02_181718_create_done_missions_table',1);
INSERT INTO `migrations` VALUES (11,'2021_03_08_164942_create_points_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `missions`
--

DROP TABLE IF EXISTS `missions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `missions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `validity_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validity_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missions`
--

LOCK TABLES `missions` WRITE;
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
INSERT INTO `missions` VALUES (1,1,'2021-04-25','12:00','GL Total Marcas EF21','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl.','assets\\images\\misiones\\misiones-oxxo-01.jpg','xu726Lwd',3,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `missions` VALUES (2,1,'2021-05-27','16:00','GL Total Marcas EF22','Praesent vulputate vestibulum libero, eu luctus turpis euismod in.','assets\\images\\misiones\\misiones-oxxo-01.jpg','jUPjS181',8,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `missions` VALUES (3,1,'2021-06-30','20:00','GL Total Marcas EF23','Morbi eget mi condimentum odio elementum semper dictum molestie magna.','assets\\images\\misiones\\misiones-oxxo-01.jpg','u3QyVBNC',8,'2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objectives`
--

DROP TABLE IF EXISTS `objectives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `objectives` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `mission_id` bigint(20) unsigned NOT NULL,
  `base` int(11) NOT NULL,
  `progress` int(11) NOT NULL,
  `goal` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `objectives_user_id_foreign` (`user_id`),
  KEY `objectives_mission_id_foreign` (`mission_id`),
  CONSTRAINT `objectives_mission_id_foreign` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`),
  CONSTRAINT `objectives_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objectives`
--

LOCK TABLES `objectives` WRITE;
/*!40000 ALTER TABLE `objectives` DISABLE KEYS */;
INSERT INTO `objectives` VALUES (1,1,1,1,2,5,10,'SNICKERS 48g','assets\\images\\productos\\SNK-001-KLT.png','2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `objectives` VALUES (2,1,1,2,5,15,30,'SNICKERS VITROLERO','assets\\images\\productos\\SNK-014-KLT.png','2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `objectives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'1,2',100,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `orders` VALUES (2,1,1,'3',1000,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `orders` VALUES (3,1,1,'3,1',1200,'2021-03-09 02:16:39','2021-03-09 02:16:39');
INSERT INTO `orders` VALUES (4,1,1,'3,1',1200,'2021-03-09 02:27:52','2021-03-09 02:27:52');
INSERT INTO `orders` VALUES (5,1,1,'3,1',1200,'2021-03-09 02:28:05','2021-03-09 02:28:05');
INSERT INTO `orders` VALUES (6,1,1,'3,1',1200,'2021-03-09 02:28:23','2021-03-09 02:28:23');
INSERT INTO `orders` VALUES (7,1,1,'3',1200,'2021-03-09 02:30:12','2021-03-09 02:30:12');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oxxos`
--

DROP TABLE IF EXISTS `oxxos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `oxxos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `store` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oxxos`
--

LOCK TABLES `oxxos` WRITE;
/*!40000 ALTER TABLE `oxxos` DISABLE KEYS */;
INSERT INTO `oxxos` VALUES (1,1,'ifKZ0uJt1s','7505606558','GHxXgiaZLL 91m1L #23','México','2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `oxxos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
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
-- Table structure for table `points`
--

DROP TABLE IF EXISTS `points`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `points` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `transaction_id` bigint(20) unsigned NOT NULL,
  `out` tinyint(1) NOT NULL DEFAULT '0',
  `amount` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `points_user_id_foreign` (`user_id`),
  CONSTRAINT `points_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `points`
--

LOCK TABLES `points` WRITE;
/*!40000 ALTER TABLE `points` DISABLE KEYS */;
INSERT INTO `points` VALUES (1,1,1,1,0,500,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `points` VALUES (2,1,1,2,0,1500,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `points` VALUES (3,1,1,1,1,100,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `points` VALUES (4,1,1,3,0,750,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `points` VALUES (5,1,1,6,1,1200,'2021-03-09 02:28:23','2021-03-09 02:28:23');
INSERT INTO `points` VALUES (6,1,1,7,1,1200,'2021-03-09 02:30:12','2021-03-09 02:30:12');
/*!40000 ALTER TABLE `points` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prizes`
--

DROP TABLE IF EXISTS `prizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `prizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prizes`
--

LOCK TABLES `prizes` WRITE;
/*!40000 ALTER TABLE `prizes` DISABLE KEYS */;
INSERT INTO `prizes` VALUES (1,1,'Nintendo DS','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.','assets\\images\\premios\\10.jpg','tecnología',1000,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `prizes` VALUES (2,1,'PlayStation 5','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.','assets\\images\\premios\\09.jpg','tecnología',10000,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `prizes` VALUES (3,1,'rH7VgXmk','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.','assets\\images\\premios\\01.jpg','hogar',100,'2021-03-09 02:14:18','2021-03-09 02:14:18');
INSERT INTO `prizes` VALUES (4,1,'Smart TV 50\"','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et blandit nisl. Praesent vulputate vestibulum libero, eu luctus turpis euismod in.','assets\\images\\premios\\11.jpg','entretenimiento',3000,'2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `prizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `profiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psurname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msurname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oxxo_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  KEY `profiles_oxxo_id_foreign` (`oxxo_id`),
  CONSTRAINT `profiles_oxxo_id_foreign` FOREIGN KEY (`oxxo_id`) REFERENCES `oxxos` (`id`),
  CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,1,1,'Victor','l4aPZw9','3UDlAcCwaD','prueba@email.com','7731','8994804167','1980-01-25',NULL,1,'2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Victor HF','prueba@email.com',NULL,'$2y$10$RuslGKKOsKKAsMMhfPA5F.j9ElEvgFJ.uG5v.kVQN89IVZYVZ.TPC',NULL,'2021-03-09 02:14:18','2021-03-09 02:14:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-08 14:49:19
