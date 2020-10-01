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
CREATE DATABASE IF NOT EXISTS `smart-group-test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `smart-group-test`;

-- Export de la structure de la table smart-group-test. breaking_news
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
CREATE TABLE IF NOT EXISTS `headlines` (
  `id` varchar(50) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table smart-group-test.headlines : ~4 rows (environ)
DELETE FROM `headlines`;
/*!40000 ALTER TABLE `headlines` DISABLE KEYS */;
INSERT INTO `headlines` (`id`, `content`, `description`, `author`, `name`, `title`, `url`, `urltoimage`, `category`, `publishedat`, `created_at`, `updated_at`, `deleted_at`) VALUES
	('Gambasaki', 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', NULL, NULL, '2020-10-01 01:37:53', '2020-09-30 23:37:53', '2020-09-30 23:37:53', NULL),
	('GambaZak', 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', NULL, NULL, '2020-10-01 01:38:25', '2020-09-30 23:38:25', '2020-09-30 23:38:25', NULL),
	('GambaZaki', 'anything to add related to content', 'here we are, we do a sample headline insert', 'nkodo mne', NULL, 'sample headline insert', 'nothing', NULL, NULL, '2020-10-01 01:39:14', '2020-09-30 23:39:14', '2020-09-30 23:39:14', NULL),
	('source', NULL, NULL, 'author', NULL, NULL, NULL, NULL, NULL, '2020-10-01 01:25:21', '2020-09-30 23:25:20', '2020-09-30 23:25:20', NULL),
	('tes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-01 00:17:24', '2020-10-01 00:17:24', NULL),
	('tes1', NULL, NULL, 'ert', 'smart coding', NULL, NULL, NULL, NULL, NULL, '2020-10-01 00:18:33', '2020-10-01 00:18:33', NULL),
	('tes11', NULL, NULL, 'ert', 'smart coding', 'a test for those who want to be hire in SmartCodeGroup', NULL, NULL, NULL, NULL, '2020-10-01 00:18:58', '2020-10-01 00:18:58', NULL),
	('tes111', NULL, 'yoooo', 'ert', 'smart coding', 'a test for those who want to be hire in SmartCodeGroup', NULL, NULL, NULL, NULL, '2020-10-01 00:19:13', '2020-10-01 00:19:13', NULL),
	('tes1111', NULL, 'yoooo', 'ert', 'smart coding', 'a test for those who want to be hire in SmartCodeGroup', 'https://www.engadget.com/ios-14-review-130053409.html', NULL, NULL, NULL, '2020-10-01 00:19:33', '2020-10-01 00:19:33', NULL);
/*!40000 ALTER TABLE `headlines` ENABLE KEYS */;

-- Export de la structure de la table smart-group-test. tblproduct
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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
