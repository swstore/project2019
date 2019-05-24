-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 18, 2019 at 10:36 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `id9599673_project2019`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `answer`
-- 

CREATE TABLE `answer` (
  `id` int(11) NOT NULL auto_increment,
  `userid` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `questionnumber` text NOT NULL,
  `answer` text character set utf8 collate utf8_unicode_ci NOT NULL,
  `comment` text character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

-- 
-- Dumping data for table `answer`
-- 

INSERT INTO `answer` VALUES (1, '1', '1', 'yes', '');
INSERT INTO `answer` VALUES (2, '1', '2', 'yes', '');
INSERT INTO `answer` VALUES (41, '1', '0', 'no', '');
INSERT INTO `answer` VALUES (40, '1', '4', 'yes', '');
INSERT INTO `answer` VALUES (39, '1', '3', 'yes', '');
