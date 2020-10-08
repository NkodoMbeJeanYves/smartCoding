-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour smart-group-test
DROP DATABASE IF EXISTS `smart-group-test`;
CREATE DATABASE IF NOT EXISTS `smart-group-test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `smart-group-test`;

-- Export de la structure de la table smart-group-test. breaking_news
DROP TABLE IF EXISTS `breaking_news`;
CREATE TABLE IF NOT EXISTS `breaking_news` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `content` text,
  `author` varchar(250) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- Export de données de la table smart-group-test.breaking_news : ~0 rows (environ)
DELETE FROM `breaking_news`;
/*!40000 ALTER TABLE `breaking_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `breaking_news` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. headlines
DROP TABLE IF EXISTS `headlines`;
CREATE TABLE IF NOT EXISTS `headlines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `description` text,
  `author` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `title` varchar(250) DEFAULT NULL,
  `url` text,
  `urltoimage` text,
  `category` varchar(50) DEFAULT NULL,
  `publishedat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Export de données de la table smart-group-test.headlines : ~7 rows (environ)
DELETE FROM `headlines`;
/*!40000 ALTER TABLE `headlines` DISABLE KEYS */;
INSERT INTO `headlines` (`id`, `content`, `description`, `author`, `name`, `title`, `url`, `urltoimage`, `category`, `publishedat`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'testing', 'my description here', 'Nkodo Mbe Jean Yves', 'Ahre', 'Covid Year', 'https://www.engadget.com/ios-14-review-130053409.html', 'http://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg', NULL, '2020-10-07 15:06:36', '2020-10-07 13:06:36', '2020-10-07 18:12:59', NULL),
	(2, 'sdsds', 'fsfhsf', 'Nkodo Mbe Jean Yves', 'smart coding', 'New Scholar Year', '"https://www.engadget.com/ios-14-review-130053409.html', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.W-40t8FU9bgyNpSGR3KuBQHaEK%26pid%3DApi&f=1', NULL, '2020-10-07 13:31:33', '2020-10-07 11:31:32', '2020-10-07 18:13:04', NULL),
	(3, 'bla bla bal', 'information concernant la rentree scolaire apres covid', 'Nkodo Mbe Jean Yves', 'Teacher at Sainte Cecile College', 'Rentrée Scolaire Covid-19', 'https://www.engadget.com/ios-14-review-130053409.html', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.the.me%2Fwp-content%2Fuploads%2F2013%2F11%2Ffull-resolution_sample_images_sony_a7r-legacy_lenses_5ln.jpg&f=1&nofb=1', NULL, '2020-10-07 13:26:11', '2020-10-07 11:26:10', '2020-10-07 18:13:07', NULL),
	(4, 'kjgskjgd', 'Welcome SmartCodeGroup?', 'author', 'my source', 'my title', 'kjhslkhlc', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.sdPzLur0sIejPLBWSg9bJAHaFI%26pid%3DApi&f=1', NULL, '2020-10-09 17:08:00', '2020-10-01 15:11:56', '2020-10-07 18:13:10', NULL),
	(5, 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', 'http://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg', NULL, '2020-10-01 01:39:14', '2020-09-30 23:39:14', '2020-10-07 18:13:15', NULL),
	(6, 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', 'http://images.fonearena.com/blog/wp-content/uploads/2013/11/Lenovo-p780-camera-sample-10.jpg', NULL, '2020-10-01 01:38:25', '2020-09-30 23:38:25', '2020-10-07 18:13:18', NULL),
	(7, 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.sdPzLur0sIejPLBWSg9bJAHaFI%26pid%3DApi&f=1', NULL, '2020-10-01 01:37:53', '2020-09-30 23:37:53', '2020-10-07 18:13:22', NULL);
/*!40000 ALTER TABLE `headlines` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table smart-group-test.migrations : ~2 rows (environ)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Export de données de la table smart-group-test.password_resets : ~0 rows (environ)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. tblproduct
DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Export de données de la table smart-group-test.tblproduct : ~4 rows (environ)
DELETE FROM `tblproduct`;
/*!40000 ALTER TABLE `tblproduct` DISABLE KEYS */;
INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
	(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
	(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
	(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
	(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);
/*!40000 ALTER TABLE `tblproduct` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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

-- Export de données de la table smart-group-test.users : ~1 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'nkodo mbe', 'nkodomjy@cbwonder.com', NULL, '$2y$10$wSSnJsIrUOm4vswOFE6yEeyRp5qY7Y71Matkl37CNMAOoRtR4.vDG', NULL, '2020-10-07 14:26:34', '2020-10-07 14:26:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
