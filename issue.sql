-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for issue_tracker
DROP DATABASE IF EXISTS `issue_tracker`;
CREATE DATABASE IF NOT EXISTS `issue_tracker` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `issue_tracker`;


-- Dumping structure for table issue_tracker.issues
DROP TABLE IF EXISTS `issues`;
CREATE TABLE IF NOT EXISTS `issues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `issue_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) unsigned NOT NULL DEFAULT '1',
  `priority_id` int(10) unsigned NOT NULL DEFAULT '3',
  `project_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `issues_priority_id_foreign` (`priority_id`),
  KEY `issues_status_id_foreign` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.issues: ~27 rows (approximately)
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
INSERT INTO `issues` (`id`, `issue_title`, `issue_desc`, `status_id`, `priority_id`, `project_id`, `created_at`, `updated_at`) VALUES
	(1, 'Harum quia mollitia non pariatur.', 'Aut exercitationem enim odit recusandae nostrum ullam eaque. Deleniti voluptatum vitae officia nihil. Enim non sint quas accusantium quo. Sit enim quaerat doloribus praesentium sed dignissimos.', 2, 1, 1, '2014-06-10 05:57:38', '2014-06-19 09:15:31'),
	(2, 'Reprehenderit saepe in laboriosam non.', 'Molestiae vero illo voluptas et. Et perferendis rem et eius quibusdam laborum est architecto. Omnis suscipit corporis odio repudiandae non optio. Mollitia numquam quo similique explicabo sint perspiciatis.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(3, 'Deserunt et rerum.', 'Exercitationem aut soluta dolores officia. Illum asperiores commodi aut voluptatem dicta quo. Voluptatem fuga qui soluta dolor iure. Laboriosam sit quia tempore.', 1, 1, 1, '2014-06-10 05:57:38', '2014-06-19 10:31:03'),
	(4, 'Ut natus molestiae.', 'Inventore debitis et est necessitatibus non ab et. Sunt aut ea quo iste. Aut animi quia ut.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(5, 'Sed et accusamus voluptas.', 'Dolores excepturi quam quis adipisci. Reprehenderit et sunt assumenda ea quo est dignissimos.', 1, 1, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:26'),
	(6, 'Eius facilis aliquam nemo reiciendis.', 'Ipsam iusto odit sed amet et. Quas reprehenderit eveniet exercitationem nobis. Eos qui soluta et et non aut. Iusto inventore enim non nihil dolor rerum.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(7, 'Molestias facere blanditiis aspernatur omnis.', 'Dicta suscipit consequuntur blanditiis nisi sed. Ut velit minima omnis. Minima aliquid numquam consequatur amet animi ipsam veritatis excepturi. Ratione aut et est non ut vel et.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(8, 'Minus hic odio perferendis temporibus.', 'Ut optio culpa qui quae hic. Non neque magni facilis quia. Quam dicta dignissimos qui. Sit voluptatem fugiat velit numquam qui.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(9, 'Sed itaque doloremque aut.', 'Non enim error dolorum sit. Et quas exercitationem sunt est veniam doloribus. Et atque sequi aut sed. Minima fugiat laboriosam totam et vel. Dolores sapiente dolore et consequatur perspiciatis.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(10, 'Error dolorem debitis enim qui.', 'Cupiditate nobis quidem et adipisci nisi perferendis saepe. Non aut inventore qui nesciunt voluptatem. Nemo temporibus quos quis unde. Neque ipsam cum enim adipisci et ut.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(11, 'Culpa explicabo corrupti qui quidem aut.', 'Velit quae tempora nisi maxime aut. Possimus non facilis et aut. Sit laudantium perspiciatis ipsum consectetur qui. Cumque esse quae hic assumenda officiis nostrum dicta.', 2, 2, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:28'),
	(12, 'Voluptatem excepturi laborum maxime.', 'Maiores dolor voluptatum sunt illo libero sint. Voluptatem consequatur nemo assumenda et sit. Et nihil consequatur et et ex. Voluptate animi molestiae voluptatem. Sed vel deleniti est dolor in.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(13, 'Voluptatum non incidunt id harum.', 'Et recusandae nam dicta quas ullam voluptas. Mollitia nulla non provident fugit error nesciunt cumque dolores. Molestias quaerat corrupti eum et laboriosam.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(14, 'Quo reprehenderit incidunt tempore.', 'Tempore alias iure non qui reprehenderit dolores. Omnis et at dicta sapiente velit aspernatur. Consectetur atque qui voluptatem veniam.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(15, 'Enim nam aperiam et.', 'Molestiae accusantium rerum delectus aut voluptatem at aut. Sint sit aperiam modi velit omnis rerum tempore. Laudantium odit soluta quaerat doloribus.', 1, 1, 1, '2014-06-10 05:57:38', '2014-06-19 10:31:16'),
	(16, 'Quaerat ea est veniam atque.', 'Culpa repellendus sit et illum. Ex eum temporibus vel nostrum aut blanditiis dolor.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(17, 'Dolorem ea tempore consequuntur.', 'Praesentium voluptatem rerum suscipit sapiente. Est quo ex magni eaque dolor odio optio. Minima fugiat vel et aut iste.', 1, 2, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:35'),
	(18, 'Explicabo voluptate sapiente vel.', 'Quidem mollitia ea et a. Necessitatibus sequi ut vel et voluptatem. Alias perferendis nihil voluptatem qui. Vel facere atque quam fugit quis ad.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(19, 'Et non blanditiis qui assumenda.', 'Minus necessitatibus exercitationem ea veritatis. Et ipsam aut quod quo omnis. Est ratione omnis quis ipsum magni. Tempore quis saepe hic quia et deserunt vero. Dolor deserunt quia voluptas voluptatem sint et dolor molestias.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(20, 'Adipisci suscipit eius alias.', 'Voluptas eum nisi omnis perspiciatis. Sint aliquid in deleniti atque ut et. Sint voluptas ad exercitationem id placeat amet. Corporis reiciendis nihil ex voluptatibus.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(21, 'Quasi molestiae quasi harum qui blanditiis.', 'Harum sunt impedit minus repellendus itaque dolorum maxime. Possimus sequi exercitationem quis maiores atque reiciendis occaecati autem.', 2, 2, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:38'),
	(22, 'Illum expedita ratione incidunt.', 'Nobis aut et atque ipsum nihil. Consequuntur dolores rerum sit sed a praesentium dolorum. Iste explicabo est quis vel ullam eos. Assumenda provident iusto rerum quis natus nihil ad.', 2, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:58'),
	(23, 'Voluptas dolore a.', 'Quam perferendis molestiae beatae dolorum minima qui. Cupiditate sit qui magni sapiente non dolores magni maiores. Omnis qui laboriosam sed. Dolores corrupti sit placeat cupiditate optio omnis.', 1, 1, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:46'),
	(24, 'Corporis voluptas ut quos vel.', 'Consequuntur autem nostrum quaerat enim excepturi. Aut qui magni nesciunt sed quis et error. Et et iste molestiae est exercitationem dolor.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(25, 'Aspernatur incidunt hic.', 'Repellat debitis voluptatibus esse dolores. Cumque perferendis aut exercitationem nihil hic sed atque eos. Qui et rem mollitia fuga aspernatur. Vel dolores molestiae et est veniam aut.', 1, 3, 1, '2014-06-10 05:57:38', '2014-06-10 05:57:38'),
	(28, 'Quis qui corrupti.', 'Est velit eum dolorum explicabo nisi. Sed dolor vero inventore aut. Nisi fugit enim expedita iusto magni.', 1, 2, 1, '2014-06-10 05:57:38', '2014-06-10 05:58:56'),
	(29, 'test2', 'lkdjhlfkajldkf', 1, 1, 1, '2014-06-24 19:39:57', '2014-06-24 19:39:57');
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.issue_user
DROP TABLE IF EXISTS `issue_user`;
CREATE TABLE IF NOT EXISTS `issue_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `issue_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `issue_user_issue_id_foreign` (`issue_id`),
  KEY `issue_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.issue_user: ~8 rows (approximately)
/*!40000 ALTER TABLE `issue_user` DISABLE KEYS */;
INSERT INTO `issue_user` (`id`, `issue_id`, `user_id`) VALUES
	(3, 3, 3),
	(5, 5, 1),
	(6, 5, 2),
	(9, 1, 1),
	(10, 3, 1),
	(11, 2, 1),
	(14, 7, 1),
	(15, 4, 8);
/*!40000 ALTER TABLE `issue_user` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_05_27_100322_create_users_table', 1),
	('2014_05_27_100518_create_status_table', 2),
	('2014_05_27_100753_create_priority_table', 3),
	('2014_05_27_101033_create_issues_table', 4),
	('2014_05_27_101420_create_issue_user_table', 5),
	('2014_05_27_101847_create_projects_table', 6),
	('2014_05_27_102117_create_project_user_table', 7),
	('2014_06_12_014740_create_role_table', 8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.priority
DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.priority: ~3 rows (approximately)
/*!40000 ALTER TABLE `priority` DISABLE KEYS */;
INSERT INTO `priority` (`id`, `title`) VALUES
	(1, 'high'),
	(2, 'medium'),
	(3, 'low');
/*!40000 ALTER TABLE `priority` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.projects
DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proj_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.projects: ~3 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `proj_desc`) VALUES
	(10, 'project 1', '123455676\r\n\r\ngggggggggggg'),
	(12, 'project 3', 'fhawdfhhw'),
	(13, 'project3', 'jlh/klklsdfgvh/klz\r\nnacbnmacnm,bbn');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.project_user
DROP TABLE IF EXISTS `project_user`;
CREATE TABLE IF NOT EXISTS `project_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `project_user_project_id_foreign` (`project_id`),
  KEY `project_user_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.project_user: ~11 rows (approximately)
/*!40000 ALTER TABLE `project_user` DISABLE KEYS */;
INSERT INTO `project_user` (`id`, `project_id`, `user_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3),
	(4, 2, 4),
	(5, 2, 5),
	(6, 2, 6),
	(7, 2, 7),
	(8, 2, 8),
	(9, 1, 8),
	(10, 2, 9),
	(11, 2, 10);
/*!40000 ALTER TABLE `project_user` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`) VALUES
	(1, 'Admin'),
	(2, 'User'),
	(3, 'Guest');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.status
DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.status: ~4 rows (approximately)
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`id`, `title`) VALUES
	(1, 'open'),
	(2, 'close'),
	(3, 'pending'),
	(4, 'progress');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;


-- Dumping structure for table issue_tracker.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table issue_tracker.users: ~10 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
	(1, 'stan', 'stan@gmail.com', '$2y$10$OMkXuCPp.v/qGWD65Oe/ouB6XglwDQrS.//vJjN481AoiKYNuBt7i', '254JMqe0EsOjHdtoxaPDJfPywQ4EnSlP7yffWY4IRtJ0m7jzFUKLUAMIClXC', '2014-06-24 18:35:55', '2014-09-01 10:59:25', 1),
	(2, 'wenbin', 'wenbin@gmail.com', '$2y$10$X1eOA1neZB6.tgzzi2Y1eesS2kcCSoep00/0ZzL1.E2ySu.crPefO', 'O6bzvYaHM32Ctb6eFFV8FlwNHL49SDi7d515TVFaAOr8gi7hbQllZIxIEZGQ', '2014-06-24 18:35:55', '2014-08-28 05:47:37', 2),
	(3, 'guest', 'guest@gmail.com', '$2y$10$R.2Q.4WcfS1eGSvTXYhOSuCdzdDrew6ctwOKMUiYJ2RqRtlmfqKqy', 'kslXoSxqLxOOZ3EGaXXsxAtLP1yPoTzbgdUU3GeTvOSwLZf9JuC5UglD4TEX', '2014-06-24 18:35:55', '2014-06-25 14:21:19', 3),
	(4, 'sid.walter', 'ybahringer@hyatt.com', '$2y$10$iVHXOSebtsUBdDuktKBgV.YYGB/zJwPEyJQw4aMKJliqW1FMt.E/y', NULL, '2014-06-24 18:35:56', '2014-06-24 18:35:56', 3),
	(5, 'lavonne.koch', 'hudson.rosemary@jastwilderman.info', '$2y$10$G2B0DMKKXapngurd.RWG9eMXQ4Nx.voJ93lSfavoGNzRYESoYcw4y', NULL, '2014-06-24 18:35:56', '2014-06-24 18:35:56', 3),
	(6, 'finn07', 'cbernhard@fritsch.net', '$2y$10$zEixs6p0v5BUjOagdyIhCufEaEMXz.X6ze3ufe71TDdELric7Sxi6', NULL, '2014-06-24 18:35:56', '2014-06-24 18:35:56', 3),
	(7, 'lina.jakubowski', 'titus.mayer@yost.com', '$2y$10$TFxy5AQ/kZC3YVw6Fcknx.fk7DbGNStzmvZpGMC6b8QKyoGzdeQK6', NULL, '2014-06-24 18:35:56', '2014-06-24 18:35:56', 3),
	(8, 'walter61', 'nader.ibrahim@huelsconsidine.com', '$2y$10$zn9f4lKbZYp.2n2l.NvrZOtMqr4VLRBmYwaAaKk331FmZPlE6r0L2', NULL, '2014-06-24 18:35:57', '2014-06-24 18:35:57', 3),
	(9, 'efrain16', 'aufderhar.deion@yahoo.com', '$2y$10$PgcA/uuUWORLIrDA3UxySeV2XXaAZKDJ9Ngcikrt2Kfz2UY4ir9Na', NULL, '2014-06-24 18:35:57', '2014-06-24 18:35:57', 3),
	(10, 'lbosco', 'gkub@hotmail.com', '$2y$10$NVHVdMggK6HO.jXGB31lJeB4swPxrlE2pLPUTAFMMr46W7t.I5ZuW', NULL, '2014-06-24 18:35:57', '2014-06-24 18:35:57', 3);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
