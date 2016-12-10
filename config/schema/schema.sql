-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1,	'The title',	'This is the article body.',	'2016-12-10 11:42:22',	NULL),
(2,	'A title once again',	'And the article body follows.',	'2016-12-10 11:42:23',	NULL),
(3,	'Title strikes back',	'This is really exciting! Not.',	'2016-12-10 11:42:23',	NULL),
(4,	'Odio velit atque architecto aut ut modi in',	'Minim magni sunt, dolore cumque quaerat nulla qui velit rem accusantium Nam qui aspernatur est, inventore dicta a aspernatur.',	'2016-12-10 06:24:43',	'2016-12-10 06:24:43'),
(5,	'Accusantium soluta soluta sint exercitationem ea e',	'Sed eveniet, dolor dignissimos velit cumque sit reprehenderit, non quo aut animi, irure ab ut autem provident, vero.',	'2016-12-10 06:24:58',	'2016-12-10 06:24:58'),
(6,	'Suscipit nesciunt sed recusandae Corporis volupt',	'Ad quae deleniti praesentium ut dignissimos magnam non ipsum, blanditiis explicabo. Perspiciatis, incidunt, voluptas.',	'2016-12-10 06:25:09',	'2016-12-10 06:25:09');

DROP TABLE IF EXISTS `school_classes`;
CREATE TABLE `school_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(30) NOT NULL,
  `school_teacher_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `school_classes` (`id`, `code`, `school_teacher_id`, `name`, `created`, `deleted`) VALUES
(1,	'12A',	0,	'Frances Hines',	'2016-12-10 08:35:09',	'2011-06-30 16:50:00'),
(2,	'12B',	0,	'Ashely Burns',	'2016-12-10 08:35:27',	'2016-02-26 03:56:00');

DROP TABLE IF EXISTS `school_exams`;
CREATE TABLE `school_exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `school_student_id` int(11) NOT NULL,
  `school_subject_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `score` float(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `school_exams` (`id`, `school_student_id`, `school_subject_id`, `created`, `score`) VALUES
(1,	1,	1,	'2016-12-10 08:38:50',	99.00),
(2,	1,	1,	'2016-12-10 08:39:02',	78.00),
(3,	2,	1,	'2016-12-10 08:39:14',	88.00);

DROP TABLE IF EXISTS `school_students`;
CREATE TABLE `school_students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(200) NOT NULL,
  `school_class_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `deleted` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school_class_id` (`school_class_id`),
  CONSTRAINT `school_students_ibfk_1` FOREIGN KEY (`school_class_id`) REFERENCES `school_classes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `school_students` (`id`, `name`, `school_class_id`, `created`, `deleted`) VALUES
(1,	'Lester Wilkins',	2,	'2016-12-10 08:37:02',	'2017-04-03 09:56:00'),
(2,	'Zelda Sweet',	2,	'2016-12-10 08:37:16',	'2013-02-23 01:07:00');

DROP TABLE IF EXISTS `school_subjects`;
CREATE TABLE `school_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `school_subjects` (`id`, `name`) VALUES
(1,	'Bahasa Indonesia'),
(2,	'Matematika'),
(3,	'IPA'),
(4,	'IPS');

DROP TABLE IF EXISTS `school_teachers`;
CREATE TABLE `school_teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `school_teachers` (`id`, `name`) VALUES
(1,	'Ariel Nelson');

-- 2016-12-10 09:38:06