-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `Todolist`;
CREATE DATABASE `Todolist` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `Todolist`;

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `Id` int NOT NULL AUTO_INCREMENT,
  ` title` text NOT NULL,
  `description` text NOT NULL,
 ` done` tinyint(6) NOT NULL ,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;






-- 2022-11-13 22:11:35
