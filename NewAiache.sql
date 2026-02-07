CREATE DATABASE Newaiache;
USE Newaiache;

CREATE TABLE admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

INSERT INTO admin_users (username, password)
VALUES ('AdminAiAche', 'Admin123@#');

CREATE TABLE IF NOT EXISTS `collegeevents` (
  `id` int 11 NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `posted_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `TAMILNADU` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LM_NO` varchar(50) DEFAULT NULL,
  `Name_of_the_College` varchar(255) DEFAULT NULL,
  `Principal_Name` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `KERALA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LM_NO` varchar(50) DEFAULT NULL,
  `Name_of_the_College` varchar(255) DEFAULT NULL,
  `Principal_Name` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `KARNATAKA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LM_NO` varchar(50) DEFAULT NULL,
  `Name_of_the_College` varchar(255) DEFAULT NULL,
  `Principal_Name` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `ANDHRA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LM_NO` varchar(50) DEFAULT NULL,
  `Name_of_the_College` varchar(255) DEFAULT NULL,
  `Principal_Name` varchar(255) DEFAULT NULL,
  `Phone_No` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SHOW TABLES;
DESCRIBE collegeevents;
