# ************************************************************
# Sequel Ace SQL dump
# Version 3013
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.5.8-MariaDB)
# Database: jadwal_sepak_bola
# Generation Time: 2021-01-23 22:38:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

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



# Dump of table jadwals
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jadwals`;

CREATE TABLE `jadwals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tim_lawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skor_tim` int(11) DEFAULT NULL,
  `skor_lawan` int(11) DEFAULT NULL,
  `jadwal_mulai` datetime NOT NULL,
  `jadwal_selesai` datetime NOT NULL,
  `studion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `jadwals` WRITE;
/*!40000 ALTER TABLE `jadwals` DISABLE KEYS */;

INSERT INTO `jadwals` (`id`, `tim`, `tim_lawan`, `skor_tim`, `skor_lawan`, `jadwal_mulai`, `jadwal_selesai`, `studion`, `created_at`, `updated_at`)
VALUES
	(1,'Persib Bandung','Arema Malang',1,1,'2021-01-24 05:13:00','2021-01-24 06:13:00','Jalak Harupat Bandung','2021-01-23 22:13:44','2021-01-23 22:28:28'),
	(2,'Persib Bandung','Persija Jakarta',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(3,'Persib Bandung','Persibaya Surabaya',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(4,'Persib Bandung','Persiba Balikpapan',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(5,'Persib Bandung','Bali United',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(6,'Persib Bandung','Timnas Indonesia 19',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(7,'Persib Bandung','Man United',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(8,'Persib Bandung','United 1',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(9,'Persib Bandung','United 2',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(10,'Persib Bandung','United 3',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(11,'Persib Bandung','MU',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42'),
	(12,'Persib Bandung','FCB',NULL,NULL,'2021-01-25 05:18:00','2021-01-25 06:18:00','Jalak Harupat Bandung','2021-01-23 22:18:42','2021-01-23 22:18:42');

/*!40000 ALTER TABLE `jadwals` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(4,'2014_10_12_000000_create_users_table',1),
	(5,'2014_10_12_100000_create_password_resets_table',1),
	(6,'2019_08_19_000000_create_failed_jobs_table',1),
	(8,'2021_01_23_214542_create_jadwals_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Admin','admin@mail.com',NULL,'$2y$10$uPFF85IHgmWLJ0wGnbcpv.BKIUkZAWRAqtuO6eB22/EnupfSFEUG6',NULL,'2021-01-23 21:06:32','2021-01-23 21:06:32');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
