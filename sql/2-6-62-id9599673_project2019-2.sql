-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 10:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9599673_project2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `userid` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questionnumber` text NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `userid`, `questionnumber`, `answer`) VALUES
(64, '2', '1', 'Yes'),
(63, '1', '80', 'No'),
(59, '1', '2', 'No'),
(60, '1', '3', 'No'),
(61, '1', '4', 'Yes'),
(62, '1', '79', 'No'),
(58, '1', '1', 'Yes'),
(65, '2', '2', 'No'),
(66, '2', '3', 'No'),
(67, '1', '7', 'Yes'),
(68, '4', '2', 'Yes'),
(69, '1', '5', 'No'),
(70, '1', '6', 'No'),
(71, '1', '8', 'No'),
(72, '1', '9', 'No'),
(73, '1', '12', 'No'),
(74, '1', '20', 'No'),
(75, '1', '10', 'Yes'),
(76, '1', '11', 'Yes'),
(77, '1', '78', 'Yes'),
(78, '1', '16', 'Yes'),
(79, '1', '13', 'Yes'),
(80, '1', '14', 'No'),
(81, '1', '15', 'Yes'),
(82, '1', '17', 'No'),
(83, '1', '18', 'Yes'),
(84, '1', '19', 'No'),
(85, '1', '21', 'Yes'),
(86, '1', '22', 'Yes'),
(87, '1', '23', 'Yes'),
(88, '1', '24', 'Yes'),
(89, '1', '25', 'No'),
(90, '1', '26', 'Yes'),
(91, '1', '27', 'No'),
(92, '1', '28', 'No'),
(93, '1', '29', 'Yes'),
(94, '1', '30', 'No'),
(95, '1', '31', 'Yes'),
(96, '1', '32', 'No'),
(97, '1', '33', 'No'),
(98, '1', '34', 'Yes'),
(99, '1', '35', 'No'),
(100, '1', '36', 'No'),
(101, '1', '37', 'Yes'),
(102, '1', '38', 'No'),
(103, '1', '39', 'Yes'),
(104, '1', '40', 'Yes'),
(105, '1', '41', 'No'),
(106, '1', '42', 'Yes'),
(107, '1', '43', 'Yes'),
(108, '1', '44', 'Yes'),
(109, '1', '45', 'Yes'),
(110, '1', '46', 'No'),
(111, '1', '47', 'No'),
(112, '1', '48', 'No'),
(113, '1', '49', 'Yes'),
(114, '1', '50', 'Yes'),
(115, '1', '51', 'No'),
(116, '1', '52', 'No'),
(117, '1', '53', 'No'),
(118, '1', '54', 'No'),
(119, '1', '55', 'No'),
(120, '1', '56', 'No'),
(121, '1', '57', 'Yes'),
(122, '1', '58', 'Yes'),
(123, '1', '59', 'No'),
(124, '1', '60', 'No'),
(125, '1', '61', 'Yes'),
(126, '1', '62', 'No'),
(127, '1', '63', 'No'),
(128, '1', '64', 'Yes'),
(129, '1', '65', 'Yes'),
(130, '1', '66', 'No'),
(131, '1', '67', 'No'),
(132, '1', '68', 'No'),
(133, '1', '69', 'Yes'),
(134, '1', '70', 'Yes'),
(135, '1', '71', 'No'),
(136, '1', '72', 'No'),
(137, '1', '73', 'Yes'),
(138, '1', '74', 'No'),
(139, '1', '75', 'Yes'),
(140, '1', '76', 'No'),
(141, '1', '77', 'No'),
(142, '2', '4', 'Yes'),
(143, '2', '5', 'Yes'),
(144, '2', '6', 'Yes'),
(145, '2', '9', 'Yes'),
(146, '2', '18', 'Yes'),
(147, '2', '27', 'Yes'),
(148, '4', '80', 'No'),
(149, '4', '3', 'No'),
(150, '4', '4', 'Yes'),
(151, '4', '79', 'No'),
(152, '4', '4', 'Yes'),
(153, '4', '7', 'Yes'),
(154, '4', '5', 'No'),
(155, '4', '6', 'No'),
(156, '4', '8', 'Yes'),
(157, '4', '9', 'No'),
(158, '4', '12', 'No'),
(159, '4', '20', 'Yes'),
(160, '4', '10', 'Yes'),
(161, '4', '11', 'Yes'),
(162, '4', '78', 'Yes'),
(163, '4', '16', 'Yes'),
(164, '4', '13', 'Yes'),
(165, '4', '14', 'No'),
(166, '4', '15', 'No'),
(167, '4', '17', 'No'),
(168, '4', '18', 'Yes'),
(169, '4', '19', 'No'),
(170, '4', '21', 'Yes'),
(171, '4', '22', 'Yes'),
(172, '4', '23', 'Yes'),
(173, '4', '24', 'Yes'),
(174, '4', '25', 'No'),
(175, '4', '26', 'Yes'),
(176, '4', '27', 'Yes'),
(177, '4', '28', 'No'),
(178, '4', '29', 'No'),
(179, '4', '30', 'Yes'),
(180, '4', '31', 'Yes'),
(181, '4', '32', 'Yes'),
(182, '4', '33', 'No'),
(183, '4', '34', 'Yes'),
(184, '4', '35', 'No'),
(185, '4', '36', 'Yes'),
(186, '4', '37', 'No'),
(187, '4', '38', 'No'),
(188, '4', '39', 'No'),
(189, '4', '40', 'No'),
(190, '4', '41', 'Yes'),
(191, '4', '42', 'Yes'),
(192, '4', '43', 'Yes'),
(193, '4', '44', 'Yes'),
(194, '4', '45', 'Yes'),
(195, '4', '46', 'No'),
(196, '4', '47', 'No'),
(197, '4', '48', 'No'),
(198, '4', '49', 'Yes'),
(199, '4', '50', 'Yes'),
(200, '4', '51', 'No'),
(201, '4', '52', 'No'),
(202, '4', '53', 'No'),
(203, '4', '54', 'No'),
(204, '4', '55', 'No'),
(205, '4', '56', 'No'),
(206, '4', '57', 'Yes'),
(207, '4', '58', 'Yes'),
(208, '4', '59', 'No'),
(209, '4', '60', 'No'),
(210, '4', '61', 'Yes'),
(211, '4', '62', 'No'),
(212, '4', '63', 'No'),
(213, '4', '64', 'Yes'),
(214, '4', '65', 'Yes'),
(215, '4', '66', 'No'),
(216, '4', '67', 'No'),
(217, '4', '68', 'No'),
(218, '4', '69', 'Yes'),
(219, '4', '70', 'Yes'),
(220, '4', '71', 'No'),
(221, '4', '72', 'No'),
(222, '4', '73', 'Yes'),
(223, '4', '74', 'No'),
(224, '4', '75', 'Yes'),
(225, '4', '76', 'No'),
(226, '4', '77', 'No'),
(227, '4', '1', 'Yes'),
(228, '3', '1', 'Yes'),
(229, '3', '2', 'Yes'),
(230, '2', '31', 'Yes'),
(231, '2', '34', 'Yes'),
(232, '2', '36', 'No'),
(233, '2', '37', 'Yes'),
(234, '2', '35', 'No'),
(235, '2', '38', 'Yes'),
(236, '2', '39', 'No'),
(237, '2', '40', 'No'),
(238, '2', '41', 'Yes'),
(239, '2', '43', 'No'),
(240, '2', '45', 'No'),
(241, '2', '44', 'No'),
(242, '2', '47', 'No'),
(243, '2', '63', 'Yes'),
(244, '2', '49', 'Yes'),
(245, '2', '53', 'Yes'),
(246, '2', '55', 'Yes'),
(247, '2', '59', 'Yes'),
(248, '2', '57', 'No'),
(249, '2', '7', 'Yes'),
(250, '2', '8', 'No'),
(251, '2', '10', 'Yes'),
(252, '2', '11', 'Yes'),
(253, '2', '15', 'Yes'),
(254, '2', '13', 'Yes'),
(255, '2', '12', 'No'),
(256, '2', '14', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `set` text COLLATE utf8_unicode_ci NOT NULL,
  `number` text COLLATE utf8_unicode_ci NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer1` text COLLATE utf8_unicode_ci NOT NULL,
  `answer2` text COLLATE utf8_unicode_ci NOT NULL,
  `answer3` text COLLATE utf8_unicode_ci NOT NULL,
  `answer4` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `set`, `number`, `question`, `answer1`, `answer2`, `answer3`, `answer4`) VALUES
(1, '1', '', 'ฉันสนุกกับการอ่านหนังสือ', 'Yes', 'No', '', ''),
(2, '1', '', 'ฉันชอบวิชาคณิตศาสตร์และวิทยาศาสตร์ มากที่สุด และฉันสามารถทำคะแนนได้ดีทั้ง 2 วิชา', 'Yes', 'No', '', ''),
(3, '1', '', 'ฉันสนุกกับการขีดเขียน วาดภาพ ระบายสี ', 'Yes', 'No', '', ''),
(4, '1', '', 'ฉันสนุกกับการใช้ชีวิตอิสระ การทำกิจกรรมนอกบ้าน', 'Yes', 'No', '', ''),
(5, '1', '', 'ฉันมีเสียงที่ไพเราะและชอบร้องเพลง', 'Yes', 'No', '', ''),
(6, '1', '', 'ฉันเป็นคนที่ผู้อื่นชอบมาขอคำแนะนำ', 'Yes', 'No', '', ''),
(7, '1', '', 'ฉันมีเป้าหมายที่สำคัญในชีวิต ซึ่งฉันมักคิดถึงอยู่บ่อยๆ', 'Yes', 'No', '', ''),
(8, '1', '', 'ฉันเป็นคนรักสัตว์ และใช้เวลาอยู่กับพวกมันนานๆ', 'Yes', 'No', '', ''),
(9, '1', '', 'ฉันชอบวิชาภาษาอังกฤษ สังคม ประวัติศาสตร์ มากกว่าคณิตศาสตร์และวิทยาศาสตร์', 'Yes', 'No', '', ''),
(10, '1', '', 'ฉันชอบเรียนรู้ค้นหา รูปแบบ หรือกฎเกณฑ์ ในเรื่องต่างๆ', 'Yes', 'No', '', ''),
(11, '1', '', 'ฉันชอบหาวิธีแยกชิ้นส่วนแล้วประกอบกลับเข้าไปใหม่ เช่น ชิ้นส่วนของอุปกรณ์ เครื่องเล่น เป็นต้น', 'Yes', 'No', '', ''),
(12, '1', '', 'ฉันเป็นคนว่องไว และรู้สึกเบื่อ ถ้าไม่ได้เคลื่อนไหวร่างกาย', 'Yes', 'No', '', ''),
(13, '1', '', 'ฉันฟังเพลงบ่อย และรู้สึกเพลิดเพลินกับเสียงเพลง', 'Yes', 'No', '', ''),
(14, '1', '', 'ฉันชอบไปงานปาร์ตี้ / งานสังคมต่างๆ', 'Yes', 'No', '', ''),
(15, '1', '', 'ฉันคิดว่าฉันเป็นคนอิสระ พึ่งพาตนเองได้', 'Yes', 'No', '', ''),
(16, '1', '', 'ฉันสนุกกับการดู ภาพยนตร์สารคดี เกี่ยวกับธรรมชาติ / ชีวิตสัตว์โลก', 'Yes', 'No', '', ''),
(17, '1', '', 'ฉันสามารถใช้คำพูดโน้มน้าวให้ผู้อื่นเปลี่ยนใจได้', 'Yes', 'No', '', ''),
(18, '1', '', 'ฉันชอบเล่น/ ชอบทดลอง และสนใจเกี่ยวกับ การค้นพบทางวิทยาศาสตร์ใหม่ๆ', 'Yes', 'No', '', ''),
(19, '1', '', 'เวลาดูทีวีหรือวีดีโอ ฉันสนใจที่จะดูภาพ มากกว่า ที่จะฟังเสียง', 'Yes', 'No', '', ''),
(20, '1', '', 'ฉันคิดว่าฉันสามารถจัดระเบียบร่างกายได้ดี', 'Yes', 'No', '', ''),
(21, '1', '', 'ฉันสามารถเล่นเครื่องดนตรีบางประเภทได้', 'Yes', 'No', '', ''),
(22, '1', '', 'ฉันไม่ชอบมีปากเสียงกับผู้อื่น', 'Yes', 'No', '', ''),
(23, '1', '', 'บางครั้งฉันก็ชอบพูดกับตัวเอง', 'Yes', 'No', '', ''),
(24, '1', '', 'การสังเกตอากัปกริยา เรียนรู้เกี่ยวกับนิสัยของนกหรือสัตว์ต่างๆ เป็นเรื่องที่สนุกมาก', 'Yes', 'No', '', ''),
(25, '1', '', 'ฉันเล่นเกมต่อคำศัพท์ หรือเกมภาษาเก่ง', 'Yes', 'No', '', ''),
(26, '1', '', 'ฉันเชื่อว่าทุกสิ่งอย่างมีเหตุผลที่อธิบายได้', 'Yes', 'No', '', ''),
(27, '1', '', 'เวลาที่ฉันหลับตา บางทีฉันก็สามารถเห็นภาพที่ฉันคิด/วางแผนไว้ ได้อย่างชัดเจน', 'Yes', 'No', '', ''),
(28, '1', '', 'ฉันมีทักษะ ด้านกีฬามากกว่า 1 อย่าง และสามารถเรียนรู้การเล่นกีฬาใหม่ๆได้อย่างรวดเร็ว', 'Yes', 'No', '', ''),
(29, '1', '', 'ฉันสามารถจับจังหวะดนตรีได้อย่างง่ายดาย', 'Yes', 'No', '', ''),
(30, '1', '', 'ฉันสนุกกับการที่ทำให้ผู้คนได้ทำงานร่วมกัน', 'Yes', 'No', '', ''),
(31, '1', '', 'ฉันชอบใช้เวลาอยู่คนเดียวเพื่อคิดทบทวนถึงเรื่องที่สำคัญๆเกี่ยวกับตนเอง', 'Yes', 'No', '', ''),
(32, '1', '', 'ฉันสามารถแยกแยะประเภทของสัตว์และพืชต่างๆ ได้', 'Yes', 'No', '', ''),
(33, '1', '', 'ฉันชอบเรียนรู้คำศัพท์ใหม่ๆและทำความเข้าใจเกี่ยวกับความหมายของคำศัพท์นั้น', 'Yes', 'No', '', ''),
(34, '1', '', 'ฉันชอบเล่นเกม ชอบเรียนรู้เทคนิค ขั้นตอน และวิธีแก้ปัญหาในการเล่น', 'Yes', 'No', '', ''),
(35, '1', '', 'ฉันอ่านแผนที่เก่งและสามารถหาสถานที่ หรือหาทาง ที่ไม่คุ้นเคยได้', 'Yes', 'No', '', ''),
(36, '1', '', 'ฉันไม่ชอบเล่นกีฬาประเภททีม แต่ชอบกีฬาประเภทเดี่ยวมากกว่า  เช่น เทนนิส ว่ายน้ำ กอล์ฟ เป็นต้น', 'Yes', 'No', '', ''),
(37, '1', '', 'ฉันรู้จักชื่อเพลงมากมายและรู้จักชื่อเครื่องดนตรี หลากหลาย', 'Yes', 'No', '', ''),
(38, '1', '', 'ฉันรู้ดีว่าฉันเป็นผู้นำได้และผู้อื่นก็รับทราบเช่นนั้น', 'Yes', 'No', '', ''),
(39, '1', '', 'ฉันรู้ตัวดีว่าฉันชอบพักรีสอร์ทประเภทใด แนวธรรมชาติ หรือแนวแฟนซี', 'Yes', 'No', '', ''),
(40, '1', '', 'ฉันชอบไปเที่ยวสวนสัตว์ พิพิธภัณฑ์ประวัติศาสตร์ธรรมชาติ หรือสถานที่ที่ได้เรียนรู้เกี่ยวกับโลกของเรา', 'Yes', 'No', '', ''),
(41, '1', '', 'การจดจำ บอกเล่าเรื่องราวต่างๆในโรงเรียนเป็นเรื่องที่ง่ายมากสำหรับฉัน', 'Yes', 'No', '', ''),
(42, '1', '', 'การเรียนรู้ / ทำงานเกี่ยวกับข้อมูล ตัวเลข เป็นเรื่องที่สนุกมากสำหรับฉัน', 'Yes', 'No', '', ''),
(43, '1', '', 'ฉันชอบสีบางสีมากกว่าสีอื่นๆ', 'Yes', 'No', '', ''),
(44, '1', '', 'ฉันไม่สนใจว่ามือจะเปรอะเปื้อนจากการทำกิจกรรมประเภททาสี ปั้นแต่ง หรือประกอบสิ่งของ', 'Yes', 'No', '', ''),
(45, '1', '', 'บางที่ฉันก็มักจะเดินร้องเพลงโฆษณาทางทีวี หรือเพลงที่ชอบ ในใจ', 'Yes', 'No', '', ''),
(46, '1', '', 'เวลาฉันมีปัญหา ฉันมักจะขอความช่วยเหลือจากเพื่อน', 'Yes', 'No', '', ''),
(47, '1', '', 'ฉันรู้ดีว่า ฉันเก่ง หรือ ไม่เก่งเรื่องใด', 'Yes', 'No', '', ''),
(48, '1', '', 'ฉันจะสบายใจและเชื่อมั่นในตนเอง ถ้าได้ทำกิจกรรมนอกสถานที่แนวธรรมชาติ', 'Yes', 'No', '', ''),
(49, '1', '', 'ฉันชอบหาความรู้จากพจนานุกรมหรือสารานุกรม', 'Yes', 'No', '', ''),
(50, '1', '', 'ฉันชอบถามผู้อื่นว่าสิ่งโน้น สิ่งนี้ มันทำงานได้อย่างไร หรือทำไมจึงเป็นเช่นนั้น', 'Yes', 'No', '', ''),
(51, '1', '', 'ฉันชอบร่างภาพ / วาดภาพ สิ่งที่ฉันกำลังคิด', 'Yes', 'No', '', ''),
(52, '1', '', 'บางครั้งฉันก็ยกมือ ยกไม้  แสดงท่าทางประกอบการพูดคุยกับผู้อื่น', 'Yes', 'No', '', ''),
(53, '1', '', 'ฉันชอบแต่งเพลง / แต่งทำนองเพลงเล่น', 'Yes', 'No', '', ''),
(54, '1', '', 'ฉันมีเพื่อนสนิทอย่างน้อย 3 คน', 'Yes', 'No', '', ''),
(55, '1', '', 'ฉันมีงานอดิเรกที่ฉันสนใจและฉันก็ชอบทำด้วยตนเอง', 'Yes', 'No', '', ''),
(56, '1', '', 'ฉันชอบกิจกรรมประเภท ตั้งแคมป์ปีนเขา', 'Yes', 'No', '', ''),
(57, '1', '', 'ฉันชอบพูดคุยกับเพื่อนหรือคนในครอบครัวมากกว่าดูทีวี', 'Yes', 'No', '', ''),
(58, '1', '', 'การทำความเข้าใจเกี่ยวกับแนวคิดทางคณิตศาสตร์ใหม่ๆที่โรงเรียน เป็นเรื่องที่ง่ายมากสำหรับฉัน', 'Yes', 'No', '', ''),
(59, '1', '', 'ฉันสนุกกับการอ่านหนังสือที่มีรูปวาด หรือ ภาพประกอบมากๆ', 'Yes', 'No', '', ''),
(60, '1', '', 'ฉันชอบเล่นกีฬามากกว่าชอบดูกีฬา', 'Yes', 'No', '', ''),
(61, '1', '', 'ฉันมักจะเคาะจังหวะ หรือฮัมเพลง ขณะเรียนหนังสือ หรือขณะที่โทรศัพท์', 'Yes', 'No', '', ''),
(62, '1', '', 'มันง่ายมากสำหรับฉันถ้าอยากจะรู้อะไรจากผู้อื่น', 'Yes', 'No', '', ''),
(63, '1', '', 'ฉันต้องการจะทำงานอิสระ / อยากจะเริ่มต้นธุรกิจของตนเอง', 'Yes', 'No', '', ''),
(64, '1', '', 'ฉันต้องการจะเป็นอาสาสมัครองค์กรพิทักษ์สิ่งแวดล้อม/อนุรักษ์ธรรมชาติ', 'Yes', 'No', '', ''),
(65, '1', '', 'ฉันชอบแต่งนวนิยาย เขียนโคลงกลอน หรือเขียนรายงานต่างๆ', 'Yes', 'No', '', ''),
(66, '1', '', 'ฉันชอบสิ่งต่างๆทีถูกจัดระเบียบ จัดกลุ่ม หรือถูกชั่ง ตวง วัด ไว้เรียบร้อยดีแล้ว', 'Yes', 'No', '', ''),
(67, '1', '', 'ฉันเก่งด้านการทายภาพ ต่อภาพหรือการเล่นประเภทแก้ปัญหา หาทางออก', 'Yes', 'No', '', ''),
(68, '1', '', 'ฉันชอบกิจกรรมประเภทการพูดการเต้น การละเล่นหรือกีฬาต่างๆ', 'Yes', 'No', '', ''),
(69, '1', '', 'ฉันฟังออกและบอกได้ว่ามีโน้ตดนตรีตัวใดเล่นผิดคีย์', 'Yes', 'No', '', ''),
(70, '1', '', 'ฉันรู้สึกสบายดีแม้จะต้องอยู่ท่ามกลางผู้คนก็ตาม', 'Yes', 'No', '', ''),
(71, '1', '', 'ฉันชอบใช้เวลาครุ่นคิดเกี่ยวกับสิ่งดีๆในตัวเอง', 'Yes', 'No', '', ''),
(72, '1', '', 'ตอนเด็กๆ ฉันชอบพลิกก้อนหิน ก้อนดิน  เพื่อมองหา สิ่งที่มีชีวิตที่อยู่ข้างใต้', 'Yes', 'No', '', ''),
(73, '1', '', 'ฉันสามารถบรรยายสิ่งต่างๆได้ดี', 'Yes', 'No', '', ''),
(74, '1', '', 'ฉันคิดว่าฉันทำงานเกี่ยวกับข้อมูล/ตัวเลขได้ดี', 'Yes', 'No', '', ''),
(75, '1', '', 'ฉันจดจำใบหน้าผู้คนได้ดีกว่าการจำชื่อ', 'Yes', 'No', '', ''),
(76, '1', '', 'ฉันทำงานฝีมือ ประเภท  เย็บปักถักร้อย ปั้นแกะสลัก หรือ สร้างโมเดลฯลฯ ได้ดี', 'Yes', 'No', '', ''),
(77, '1', '', 'ฉันรู้ดีว่าฉันชอบหรือไม่ชอบ ดนตรี ประเภทใด', 'Yes', 'No', '', ''),
(78, '1', '', 'ฉันเก่งในการหาเพื่อนใหม่ๆ', 'Yes', 'No', '', ''),
(79, '1', '', 'ฉันชอบคิดอะไรล่วงหน้าก่อนลงมือทำ', 'Yes', 'No', '', ''),
(80, '1', '', 'ฉันเก่งในเรื่องการปลูกต้นไม้และดูแลต้นไม้', 'Yes', 'No', '', ''),
(81, '2', '1', 'มีพื้นฐานความรู้ดี และสนุกกับการเรียนวิชา วิทยาศาสตร์', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(82, '2', '2', 'มีความถนัดในการคิดคำนวณได้คล่อง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(83, '2', '3', 'ช่างสังเกต ชอบศึกษาค้นคว้า ทดลอง วิเคราะห์ ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(84, '2', '4', 'ชอบแก้โจทย์ปัญหาต่างๆ   รู้สึกท้าทายกับการหาคำตอบ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(85, '2', '5', 'คิดอย่างมีระบบและมีเหตุผล ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(86, '2', '6', 'มีความคิดสร้างสรรค์  ชอบคิดค้นสิ่งใหม่ ๆ ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(87, '2', '7', 'แสดงความคิดเห็นได้อย่างมีเหตุผล ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(88, '2', '8', 'กล้าตัดสินใจ แก้ปัญหาต่าง ๆ ได้อย่างรวดเร็ว', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(89, '2', '9', 'มีความละเอียดรอบคอบ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(90, '2', '10', 'สนใจเทคโนโลยี และ วิทยาการใหม่ๆ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(91, '2', '11', 'มองการณ์ไกล  รู้จักคิดและวางแผนในการทำสิ่งใดสิ่งหนึ่ง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(92, '2', '12', 'มีความอดทน มุ่งมั่น และพยายาม ไม่ท้อถอย', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(93, '2', '13', 'มีพื้นฐานความรู้วิชาคณิตศาสตร์ดี คิดคำนวณได้คล่อง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(94, '2', '14', 'มีความสามารถในการใช้ภาษา ฟัง พูด อ่าน เขียน ทั้งภาษาไทยและภาษาอังกฤษ ได้คล่อง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(95, '2', '15', 'คิดวิเคราะห์อย่างมีระบบและมีเหตุผล', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(96, '2', '16', 'มีจินตนาการและมีความคิดสร้างสรรค์', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(97, '2', '17', 'สนใจเหตุการณ์ และข่าวสารในสังคมปัจจุบัน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(98, '2', '18', 'มีความกระตือรือร้น   ใฝ่หาความรู้อยู่เสมอ    ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(99, '2', '19', 'สามารถถ่ายทอดความคิดให้ผู้อื่นเข้าใจได้ชัดเจน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(100, '2', '20', 'แสดงความคิดเห็นได้อย่างมีเหตุผล ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(101, '2', '21', 'สนใจวิเคราะห์  เปรียบเทียบ และสรุปความหมายของเหตุการณ์ต่าง ๆ  ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(102, '2', '22', 'มีความอดทน มุ่งมั่น พยายาม และไม่ย่อท้อ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(103, '2', '23', 'มีจินตนาการเห็นภาพที่เป็นนามธรรม. เรื่องพื้นที่ ระยะทาง ขนาด และรูปทรง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(104, '2', '24', 'สนใจติดตามเทคโนโลยีและวิทยาการใหม่ๆ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(105, '2', '25', 'พื้นฐานความรู้ดีในวิชาภาษาอังกฤษ ฟัง พูด อ่าน เขียนได้คล่อง', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(106, '2', '26', 'มีพื้นฐานความรู้ดีในวิชาภาษาไทย   รักการอ่าน  การเขียน ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(107, '2', '27', 'สนใจและสนุกกับการเรียนด้านภาษา ทั้งภาษาไทยและภาษาอังกฤษ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(108, '2', '28', 'สามารถถ่ายทอดความรู้ความคิดและจินตนาการออกมาได้อย่างชัดเจน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(109, '2', '29', 'รับรู้ เข้าใจ และเห็นคุณค่าของศิลปวัฒนธรรม ดนตรีและภาษา', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(110, '2', '30', 'มีจินตนาการและมีความคิดสร้างสรรค์', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(111, '2', '31', 'สนใจเหตุการณ์ และข่าวสารในสังคมปัจจุบัน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(112, '2', '32', 'มีความคล่องตัวในการเขียนหรือพูดโต้ตอบ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(113, '2', '33', 'กระตือรือร้น ใฝ่เรียนใฝ่รู้อยู่เสมอ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(114, '2', '34', 'คล่องแคล่ว มีไหวพริบดี แก้ไขเหตุการณ์เฉพาะหน้าได้', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(115, '2', '35', 'กล้าพูด กล้าแสดงออกในทางที่เหมาะสม', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(116, '2', '36', 'ชอบการติดต่อสื่อสารกับผู้อื่น ร่าเริงแจ่มใส   เข้ากับผู้อื่นได้ง่าย', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(117, '2', '37', 'มีความรู้พื้นฐานในการใช้ภาษา ฟัง พูด อ่าน เขียนทั้งภาษาไทยและภาษาอังกฤษ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(118, '2', '38', 'ับรู้ เข้าใจ และเห็นคุณค่าของศิลปวัฒนธรรม ดนตรีและภาษา', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(119, '2', '39', 'ีความสนใจด้านภาษา รักการอ่าน การเขียน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(120, '2', '40', 'สนใจเหตุการณ์ และข่าวสารในสังคมปัจจุบัน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(121, '2', '41', 'ชอบการวิเคราะห์ อภิปรายเหตุการณ์ต่าง ๆ ที่เกิดขึ้นในสังคม', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(122, '2', '42', 'ีมนุษย์สัมพันธ์ดี สนุกกับการทำงานที่ต้องเกี่ยวข้องพบปะกับผู้อื่นเสมอ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(123, '2', '43', 'สามารถควบคุมตนเอง และ ปรับตัวให้เข้ากับสถานการณ์ต่าง ๆ ได้ดี', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(124, '2', '44', 'ีจินตนาการและมีความคิดสร้างสรรค์', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(125, '2', '45', 'ีไหวพริบดี  สามารถแก้ไขเหตุการณ์เฉพาะหน้าได้', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(126, '2', '46', 'คล่องแคล่ว กล้าแสดงความคิดเห็น และนำเสนอได้อย่างสร้างสรรค์', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(127, '2', '47', 'มีมานะที่จะเรียนภาคทฤษฎีได้สำเร็จจนถึงขั้นอุดมศึกษาได้', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(128, '2', '48', 'สนใจสิ่งแวดล้อมรอบตัว ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(129, '2', '49', 'มีความคิดริเริ่มสร้างสรรค์ ในการผลิตหรือประดิษฐ์ชิ้นงาน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(130, '2', '50', 'พื้นฐานความรู้วิชาภาคปฏิบัติดีกว่าด้านวิชาการ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(131, '2', '51', 'ชอบเรียนภาคปฏิบัติ ลงมือทำ มากกว่าเรียนภาคทฤษฎี', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(132, '2', '52', 'อยากเรียนเพื่อมีความรู้ความสามารถเฉพาะทาง ด้านอาชีพ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(133, '2', '53', 'ต้องการเรียนจบเพื่อมีงานทำเร็ว ๆ หลังจบชั้น ม.3', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(134, '2', '54', 'มีความเชื่อมั่นว่าการเรียนสายอาชีพ ก็สามารถมีอนาคตที่เจริญมั่นคงได้', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(135, '2', '55', 'ไม่รู้สึกด้อย  กล้าที่จะบอกใคร ๆว่าเรียนต่อสายอาชีพ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(136, '2', '56', 'มีวินัยในตนเอง สามารถรับผิดชอบตนเองในการเรียนได้', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(137, '2', '57', 'มีความอุตสาหะ วิริยะ อดทนในการทำงาน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(138, '2', '58', 'มีเป้าหมายชัดเจนในการเรียนสายอาชีพ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(139, '2', '59', 'ผู้ปกครองให้อิสระในการตัดสินใจเลือกศึกษาต่อ ไม่ว่าสายสามัญหรือสายอาชีพ', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด'),
(140, '2', '60', 'สามารถควบคุมตนเองได้ ไม่คล้อยตามการชักชวนในทางที่ผิดของเพื่อน', 'ไม่ใช่เลย', 'ไม่แน่ใจ', 'ค่อนข้างใช่', 'ใช่ที่สุด');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill` text COLLATE utf8_unicode_ci NOT NULL,
  `questionnumber` text COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill`, `questionnumber`, `remark`) VALUES
(1, '1', '1', 'ด้านภาษา'),
(2, '1', '9', 'ด้านภาษา'),
(3, '1', '17', 'ด้านภาษา'),
(4, '1', '25', 'ด้านภาษา'),
(5, '1', '33', 'ด้านภาษา'),
(6, '1', '41', 'ด้านภาษา'),
(7, '1', '49', 'ด้านภาษา'),
(8, '1', '57', 'ด้านภาษา'),
(9, '1', '65', 'ด้านภาษา'),
(10, '2', '73', 'ด้านภาษา'),
(11, '2', '2', 'คณิตศาสตร์'),
(12, '2', '10', 'คณิตศาสตร์'),
(13, '2', '18', 'คณิตศาสตร์'),
(14, '2', '26', 'คณิตศาสตร์'),
(15, '2', '34', 'คณิตศาสตร์'),
(16, '2', '42', 'คณิตศาสตร์'),
(17, '2', '50', 'คณิตศาสตร์'),
(18, '2', '58', 'คณิตศาสตร์'),
(19, '2', '66', 'คณิตศาสตร์'),
(20, '', '74', 'คณิตศาสตร์'),
(21, '3', '3', 'ด้านมิติสัมพันธ์'),
(22, '3', '11', 'ด้านมิติสัมพันธ์'),
(23, '3', '19', 'ด้านมิติสัมพันธ์'),
(24, '3', '27', 'ด้านมิติสัมพันธ์'),
(25, '3', '35', 'ด้านมิติสัมพันธ์'),
(26, '3', '43', 'ด้านมิติสัมพันธ์'),
(27, '3', '51', 'ด้านมิติสัมพันธ์'),
(28, '3', '59', 'ด้านมิติสัมพันธ์'),
(29, '3', '67', 'ด้านมิติสัมพันธ์'),
(30, '3', '75', 'ด้านมิติสัมพันธ์'),
(31, '4', '4', 'ด้านร่างกายและการเคลื่อนไหว'),
(32, '4', '12', 'ด้านร่างกายและการเคลื่อนไหว'),
(33, '4', '20', 'ด้านร่างกายและการเคลื่อนไหว'),
(34, '4', '28', 'ด้านร่างกายและการเคลื่อนไหว'),
(35, '4', '36', 'ด้านร่างกายและการเคลื่อนไหว'),
(36, '4', '44', 'ด้านร่างกายและการเคลื่อนไหว'),
(37, '4', '52', 'ด้านร่างกายและการเคลื่อนไหว'),
(38, '4', '60', 'ด้านร่างกายและการเคลื่อนไหว'),
(39, '4', '68', 'ด้านร่างกายและการเคลื่อนไหว'),
(40, '4', '76', 'ด้านร่างกายและการเคลื่อนไหว'),
(41, '5', '5', 'ด้านดนตรี'),
(42, '5', '13', 'ด้านดนตรี'),
(43, '5', '21', 'ด้านดนตรี'),
(44, '5', '29', 'ด้านดนตรี'),
(45, '5', '37', 'ด้านดนตรี'),
(46, '5', '45', 'ด้านดนตรี'),
(47, '5', '53', 'ด้านดนตรี'),
(48, '5', '61', 'ด้านดนตรี'),
(49, '5', '69', 'ด้านดนตรี'),
(50, '5', '77', 'ด้านดนตรี'),
(51, '6', '6', 'ด้านความสัมพันธ์กับผู้อื่น'),
(52, '6', '14', 'ด้านความสัมพันธ์กับผู้อื่น'),
(53, '6', '22', 'ด้านความสัมพันธ์กับผู้อื่น'),
(54, '6', '30', 'ด้านความสัมพันธ์กับผู้อื่น'),
(55, '6', '38', 'ด้านความสัมพันธ์กับผู้อื่น'),
(56, '6', '46', 'ด้านความสัมพันธ์กับผู้อื่น'),
(57, '6', '54', 'ด้านความสัมพันธ์กับผู้อื่น'),
(58, '6', '62', 'ด้านความสัมพันธ์กับผู้อื่น'),
(59, '6', '70', 'ด้านความสัมพันธ์กับผู้อื่น'),
(60, '6', '78', 'ด้านความสัมพันธ์กับผู้อื่น'),
(61, '7', '7', 'ด้านการเข้าใจตนเอง'),
(62, '7', '15', 'ด้านการเข้าใจตนเอง'),
(63, '7', '23', 'ด้านการเข้าใจตนเอง'),
(64, '7', '31', 'ด้านการเข้าใจตนเอง'),
(65, '7', '39', 'ด้านการเข้าใจตนเอง'),
(66, '7', '47', 'ด้านการเข้าใจตนเอง'),
(67, '7', '55', 'ด้านการเข้าใจตนเอง'),
(68, '7', '63', 'ด้านการเข้าใจตนเอง'),
(69, '7', '71', 'ด้านการเข้าใจตนเอง'),
(70, '7', '79', 'ด้านการเข้าใจตนเอง'),
(71, '8', '8', 'ด้านการเข้าใจธรรมชาติ'),
(72, '8', '16', 'ด้านการเข้าใจธรรมชาติ'),
(73, '8', '24', 'ด้านการเข้าใจธรรมชาติ'),
(74, '8', '32', 'ด้านการเข้าใจธรรมชาติ'),
(75, '8', '40', 'ด้านการเข้าใจธรรมชาติ'),
(76, '8', '48', 'ด้านการเข้าใจธรรมชาติ'),
(77, '8', '56', 'ด้านการเข้าใจธรรมชาติ'),
(78, '8', '64', 'ด้านการเข้าใจธรรมชาติ'),
(79, '8', '72', 'ด้านการเข้าใจธรรมชาติ'),
(80, '8', '80', 'ด้านการเข้าใจธรรมชาติ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `surname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `room` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `year` text NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `current` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `expect` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `logontime` text,
  `remark` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `username`, `surname`, `class`, `room`, `number`, `year`, `email`, `password`, `current`, `expect`, `logontime`, `remark`) VALUES
(14, '1', '1', '1', '', '1', '1', '1', '1@mail', 'c4ca4238a0b923820dcc509a6f75849b', '', '1', '1559322199', ''),
(15, '3', '3', '3', '3', '3', '3', '3', '3@3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', '3', '3', '1559144711', ''),
(13, '2', 'บัญชา', 'ดอกคำ', '6', '3', '2', '2561', 'buncha@mail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'ห้อง Gifted', 'วิทย์', '1559322128', ''),
(16, '4', 'สี่', '4', '1', '', '', '', '4@4', 'a87ff679a2f3e71d9181a67b7542122c', 'ห้องปกติ', '', '1559322174', ''),
(17, '5', '5', '5', '5', '5', '5', '5', '5@5', 'b53b3a3d6ab90ce0268229151c9bde11', '5', '5', NULL, ''),
(22, '6', 'ชื่อ6', 'สกุล6', '6', '6', '6', '6', '6@6', '1679091c5a880faf6fb5e6087eb1b2dc', '6', '7', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
