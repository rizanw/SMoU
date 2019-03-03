-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mis_moua
CREATE DATABASE IF NOT EXISTS `mis_moua` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mis_moua`;

-- Dumping structure for table mis_moua.cit
CREATE TABLE IF NOT EXISTS `cit` (
  `cit_id` int(10) NOT NULL AUTO_INCREMENT,
  `cit_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.cit: ~2 rows (approximately)
/*!40000 ALTER TABLE `cit` DISABLE KEYS */;
INSERT INTO `cit` (`cit_id`, `cit_name`) VALUES
	(1, 'Surabaya'),
	(2, 'Jakarta');
/*!40000 ALTER TABLE `cit` ENABLE KEYS */;

-- Dumping structure for table mis_moua.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mis_moua.ci_sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table mis_moua.m_contact
CREATE TABLE IF NOT EXISTS `m_contact` (
  `m_con_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_con_name` varchar(100) NOT NULL,
  `m_pla_id` int(4) DEFAULT NULL,
  `m_con_phone` varchar(20) NOT NULL,
  `m_con_email` varchar(100) NOT NULL,
  `m_con_role` varchar(50) NOT NULL,
  PRIMARY KEY (`m_con_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.m_contact: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_contact` DISABLE KEYS */;
INSERT INTO `m_contact` (`m_con_id`, `m_con_name`, `m_pla_id`, `m_con_phone`, `m_con_email`, `m_con_role`) VALUES
	(2, 'Andre', 1, '082231487906', 'rzkandre@gmail.com', 'staff');
/*!40000 ALTER TABLE `m_contact` ENABLE KEYS */;

-- Dumping structure for table mis_moua.m_moua
CREATE TABLE IF NOT EXISTS `m_moua` (
  `m_moua_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_moua_type` char(1) NOT NULL,
  `m_pla_id` int(4) DEFAULT NULL,
  `m_par_id` int(10) DEFAULT NULL,
  `m_con_id` int(10) DEFAULT NULL,
  `m_mut_id` int(2) DEFAULT NULL,
  `m_moua_doc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`m_moua_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.m_moua: ~2 rows (approximately)
/*!40000 ALTER TABLE `m_moua` DISABLE KEYS */;
INSERT INTO `m_moua` (`m_moua_id`, `m_moua_type`, `m_pla_id`, `m_par_id`, `m_con_id`, `m_mut_id`, `m_moua_doc`) VALUES
	(4, 'M', 1, 0, 0, 2, '65985061_p0_master1200.jpg'),
	(12, '', 0, 0, 0, 0, '66124848_p0_master1200.jpg');
/*!40000 ALTER TABLE `m_moua` ENABLE KEYS */;

-- Dumping structure for table mis_moua.m_mutual
CREATE TABLE IF NOT EXISTS `m_mutual` (
  `m_mut_id` int(2) NOT NULL AUTO_INCREMENT,
  `m_mut_name` varchar(20) NOT NULL,
  PRIMARY KEY (`m_mut_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.m_mutual: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_mutual` DISABLE KEYS */;
INSERT INTO `m_mutual` (`m_mut_id`, `m_mut_name`) VALUES
	(2, 'IO');
/*!40000 ALTER TABLE `m_mutual` ENABLE KEYS */;

-- Dumping structure for table mis_moua.m_partner
CREATE TABLE IF NOT EXISTS `m_partner` (
  `m_par_id` int(10) NOT NULL AUTO_INCREMENT,
  `m_par_name` varchar(100) NOT NULL,
  `m_par_detail` varchar(50) NOT NULL,
  PRIMARY KEY (`m_par_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.m_partner: ~1 rows (approximately)
/*!40000 ALTER TABLE `m_partner` DISABLE KEYS */;
INSERT INTO `m_partner` (`m_par_id`, `m_par_name`, `m_par_detail`) VALUES
	(3, 'Rizan', 'dsadas');
/*!40000 ALTER TABLE `m_partner` ENABLE KEYS */;

-- Dumping structure for table mis_moua.m_place
CREATE TABLE IF NOT EXISTS `m_place` (
  `m_pla_id` int(4) NOT NULL AUTO_INCREMENT,
  `m_pla_name` varchar(100) NOT NULL,
  `sta_id` int(6) DEFAULT NULL,
  `cit_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`m_pla_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.m_place: ~0 rows (approximately)
/*!40000 ALTER TABLE `m_place` DISABLE KEYS */;
INSERT INTO `m_place` (`m_pla_id`, `m_pla_name`, `sta_id`, `cit_id`) VALUES
	(1, 'ITS', 1, 1);
/*!40000 ALTER TABLE `m_place` ENABLE KEYS */;

-- Dumping structure for table mis_moua.sta
CREATE TABLE IF NOT EXISTS `sta` (
  `sta_id` int(10) NOT NULL AUTO_INCREMENT,
  `sta_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.sta: ~0 rows (approximately)
/*!40000 ALTER TABLE `sta` DISABLE KEYS */;
INSERT INTO `sta` (`sta_id`, `sta_name`) VALUES
	(1, 'Jawa Timur');
/*!40000 ALTER TABLE `sta` ENABLE KEYS */;

-- Dumping structure for table mis_moua.tbl_last_login
CREATE TABLE IF NOT EXISTS `tbl_last_login` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table mis_moua.tbl_last_login: ~7 rows (approximately)
/*!40000 ALTER TABLE `tbl_last_login` DISABLE KEYS */;
INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
	(1, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-30 16:46:57'),
	(2, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-30 22:44:53'),
	(3, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-30 23:19:31'),
	(4, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 00:12:29'),
	(5, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 00:15:42'),
	(6, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 00:19:17'),
	(7, 1, '{"role":"1","roleText":"System Administrator","name":"System Administrator"}', '127.0.0.1', 'Chrome 66.0.3359.181', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'Windows 10', '2018-05-31 01:24:38');
/*!40000 ALTER TABLE `tbl_last_login` ENABLE KEYS */;

-- Dumping structure for table mis_moua.tbl_reset_password
CREATE TABLE IF NOT EXISTS `tbl_reset_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table mis_moua.tbl_reset_password: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_reset_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reset_password` ENABLE KEYS */;

-- Dumping structure for table mis_moua.tbl_roles
CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table mis_moua.tbl_roles: 3 rows
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
	(1, 'System Administrator'),
	(2, 'Manager'),
	(3, 'Employee');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;

-- Dumping structure for table mis_moua.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table mis_moua.tbl_users: 1 rows
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
	(1, 'admin@admin.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-05-30 19:19:03');
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
