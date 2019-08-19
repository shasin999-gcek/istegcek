-- Adminer 4.6.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `branches` (`id`, `branch_name`) VALUES
(1,	'Computer Science And Engineering'),
(2,	'Mechanical Engineering'),
(3,	'Civil Engineering'),
(4,	'Electrical And Electronics Engineering'),
(5,	'Electronics And Communication Engineering');

DROP TABLE IF EXISTS `career_preferences`;
CREATE TABLE `career_preferences` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `career_preferences` (`id`, `value`) VALUES
(1,	'Teaching'),
(2,	'Research Work'),
(3,	'Govt. Job'),
(4,	'Public Sector Undertaking'),
(5,	'Private Industry'),
(6,	'Self Employment'),
(7,	'Higher Studies'),
(8,	'Management Studies');

DROP TABLE IF EXISTS `other_career_preferences`;
CREATE TABLE `other_career_preferences` (
  `reg_id` int(20) unsigned NOT NULL,
  `value` varchar(100) NOT NULL,
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `other_career_preferences_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `other_services`;
CREATE TABLE `other_services` (
  `reg_id` int(20) unsigned NOT NULL,
  `value` varchar(100) NOT NULL,
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `other_services_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `other_special_interests`;
CREATE TABLE `other_special_interests` (
  `reg_id` int(20) unsigned NOT NULL,
  `value` varchar(100) NOT NULL,
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `other_special_interests_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `services` (`id`, `value`) VALUES
(1,	'Coaching for competitive examination, job interview etc.'),
(2,	'Supervisory and communication skill developmen'),
(3,	'Training for self-employment'),
(4,	'Guidance on job opportunities in India and abroad'),
(5,	'Arranging training in industries and visits to industry'),
(6,	'Awareness on social, cultural and ethical values and norms'),
(7,	'Special Coaching, General counselling services');

DROP TABLE IF EXISTS `special_interests`;
CREATE TABLE `special_interests` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `special_interests` (`id`, `value`) VALUES
(1,	'Sports'),
(2,	'Games'),
(3,	'Reading'),
(4,	'Literary'),
(5,	'Drama'),
(6,	'Music'),
(7,	'Photography');

DROP TABLE IF EXISTS `student_career_preferences`;
CREATE TABLE `student_career_preferences` (
  `reg_id` int(20) unsigned NOT NULL,
  `career_preference_id` int(20) unsigned NOT NULL,
  KEY `career_preference_id` (`career_preference_id`),
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `student_career_preferences_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `student_registrations`;
CREATE TABLE `student_registrations` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `branch_id` int(11) NOT NULL,
  `adm_no` varchar(20) NOT NULL,
  `semester` char(2) NOT NULL,
  `house_name` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `reg_year` year(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(20) DEFAULT NULL,
  `deleted_by` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `student_services`;
CREATE TABLE `student_services` (
  `reg_id` int(20) unsigned NOT NULL,
  `service_id` int(20) unsigned NOT NULL,
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `student_services_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `student_special_interests`;
CREATE TABLE `student_special_interests` (
  `reg_id` int(20) unsigned NOT NULL,
  `special_interest_id` int(20) unsigned NOT NULL,
  KEY `special_interest_id` (`special_interest_id`),
  KEY `reg_id` (`reg_id`),
  CONSTRAINT `student_special_interests_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `student_registrations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_user_id` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(20) DEFAULT NULL,
  `updated_by` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-08-28 15:59:21
