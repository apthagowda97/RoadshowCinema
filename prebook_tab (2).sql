-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 02:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `prebook_tab`
--

CREATE TABLE `prebook_tab` (
  `PREBOOK_ID` int(11) NOT NULL,
  `SCREEN_NO` int(11) NOT NULL,
  `SHOW_TIME` time NOT NULL,
  `MOVIE_ID` int(11) NOT NULL,
  `SEAT_NO` int(11) NOT NULL,
  `DONE` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prebook_tab`
--

INSERT INTO `prebook_tab` (`PREBOOK_ID`, `SCREEN_NO`, `SHOW_TIME`, `MOVIE_ID`, `SEAT_NO`, `DONE`) VALUES
(1, 1, '10:00:00', 4, 1, 0x30),
(2, 1, '10:00:00', 4, 2, 0x30),
(3, 1, '10:00:00', 4, 3, 0x30),
(4, 1, '10:00:00', 4, 4, 0x30),
(5, 1, '10:00:00', 4, 5, 0x30),
(6, 1, '10:00:00', 4, 6, 0x30),
(7, 1, '10:00:00', 4, 7, 0x30),
(8, 1, '10:00:00', 4, 8, 0x30),
(9, 1, '10:00:00', 4, 9, 0x30),
(10, 1, '10:00:00', 4, 10, 0x30),
(11, 1, '10:00:00', 4, 11, 0x30),
(12, 1, '10:00:00', 4, 12, 0x30),
(13, 1, '10:00:00', 4, 13, 0x30),
(14, 1, '10:00:00', 4, 14, 0x30),
(15, 1, '10:00:00', 4, 15, 0x30),
(16, 1, '10:00:00', 4, 16, 0x30),
(17, 1, '10:00:00', 4, 17, 0x30),
(18, 1, '10:00:00', 4, 18, 0x30),
(19, 1, '10:00:00', 4, 19, 0x30),
(20, 1, '10:00:00', 4, 20, 0x30),
(21, 1, '10:00:00', 4, 21, 0x30),
(22, 1, '10:00:00', 4, 22, 0x30),
(23, 1, '10:00:00', 4, 23, 0x30),
(24, 1, '10:00:00', 4, 24, 0x30),
(25, 1, '10:00:00', 4, 25, 0x30),
(26, 1, '10:00:00', 4, 26, 0x30),
(27, 1, '10:00:00', 4, 27, 0x30),
(28, 1, '10:00:00', 4, 28, 0x30),
(29, 1, '10:00:00', 4, 29, 0x30),
(30, 1, '10:00:00', 4, 30, 0x30),
(31, 1, '10:00:00', 4, 31, 0x30),
(32, 1, '10:00:00', 4, 32, 0x30),
(33, 1, '10:00:00', 4, 33, 0x31),
(34, 1, '10:00:00', 4, 34, 0x30),
(35, 1, '10:00:00', 4, 35, 0x30),
(36, 1, '10:00:00', 4, 36, 0x30),
(37, 1, '10:00:00', 4, 37, 0x30),
(38, 1, '10:00:00', 4, 38, 0x30),
(39, 1, '10:00:00', 4, 39, 0x30),
(40, 1, '10:00:00', 4, 40, 0x30),
(41, 1, '14:00:00', 1, 1, 0x31),
(42, 1, '14:00:00', 1, 2, 0x31),
(43, 1, '14:00:00', 1, 3, 0x30),
(44, 1, '14:00:00', 1, 4, 0x30),
(45, 1, '14:00:00', 1, 5, 0x30),
(46, 1, '14:00:00', 1, 6, 0x30),
(47, 1, '14:00:00', 1, 7, 0x30),
(48, 1, '14:00:00', 1, 8, 0x30),
(49, 1, '14:00:00', 1, 9, 0x30),
(50, 1, '14:00:00', 1, 10, 0x30),
(51, 1, '14:00:00', 1, 11, 0x30),
(52, 1, '14:00:00', 1, 12, 0x30),
(53, 1, '14:00:00', 1, 13, 0x30),
(54, 1, '14:00:00', 1, 14, 0x30),
(55, 1, '14:00:00', 1, 15, 0x30),
(56, 1, '14:00:00', 1, 16, 0x30),
(57, 1, '14:00:00', 1, 17, 0x30),
(58, 1, '14:00:00', 1, 18, 0x30),
(59, 1, '14:00:00', 1, 19, 0x30),
(60, 1, '14:00:00', 1, 20, 0x30),
(61, 1, '14:00:00', 1, 21, 0x30),
(62, 1, '14:00:00', 1, 22, 0x30),
(63, 1, '14:00:00', 1, 23, 0x30),
(64, 1, '14:00:00', 1, 24, 0x30),
(65, 1, '14:00:00', 1, 25, 0x30),
(66, 1, '14:00:00', 1, 26, 0x30),
(67, 1, '14:00:00', 1, 27, 0x30),
(68, 1, '14:00:00', 1, 28, 0x30),
(69, 1, '14:00:00', 1, 29, 0x30),
(70, 1, '14:00:00', 1, 30, 0x30),
(71, 1, '14:00:00', 1, 31, 0x30),
(72, 1, '14:00:00', 1, 32, 0x30),
(73, 1, '14:00:00', 1, 33, 0x30),
(74, 1, '14:00:00', 1, 34, 0x30),
(75, 1, '14:00:00', 1, 35, 0x30),
(76, 1, '14:00:00', 1, 36, 0x30),
(77, 1, '14:00:00', 1, 37, 0x30),
(78, 1, '14:00:00', 1, 38, 0x30),
(79, 1, '14:00:00', 1, 39, 0x30),
(80, 1, '14:00:00', 1, 40, 0x30),
(81, 1, '19:00:00', 1, 1, 0x30),
(82, 1, '19:00:00', 1, 2, 0x30),
(83, 1, '19:00:00', 1, 3, 0x30),
(84, 1, '19:00:00', 1, 4, 0x30),
(85, 1, '19:00:00', 1, 5, 0x30),
(86, 1, '19:00:00', 1, 6, 0x30),
(87, 1, '19:00:00', 1, 7, 0x30),
(88, 1, '19:00:00', 1, 8, 0x30),
(89, 1, '19:00:00', 1, 9, 0x30),
(90, 1, '19:00:00', 1, 10, 0x30),
(91, 1, '19:00:00', 1, 11, 0x30),
(92, 1, '19:00:00', 1, 12, 0x30),
(93, 1, '19:00:00', 1, 13, 0x30),
(94, 1, '19:00:00', 1, 14, 0x30),
(95, 1, '19:00:00', 1, 15, 0x30),
(96, 1, '19:00:00', 1, 16, 0x30),
(97, 1, '19:00:00', 1, 17, 0x30),
(98, 1, '19:00:00', 1, 18, 0x30),
(99, 1, '19:00:00', 1, 19, 0x30),
(100, 1, '19:00:00', 1, 20, 0x30),
(101, 1, '19:00:00', 1, 21, 0x30),
(102, 1, '19:00:00', 1, 22, 0x30),
(103, 1, '19:00:00', 1, 23, 0x30),
(104, 1, '19:00:00', 1, 24, 0x30),
(105, 1, '19:00:00', 1, 25, 0x30),
(106, 1, '19:00:00', 1, 26, 0x30),
(107, 1, '19:00:00', 1, 27, 0x30),
(108, 1, '19:00:00', 1, 28, 0x30),
(109, 1, '19:00:00', 1, 29, 0x30),
(110, 1, '19:00:00', 1, 30, 0x30),
(111, 1, '19:00:00', 1, 31, 0x30),
(112, 1, '19:00:00', 1, 32, 0x30),
(113, 1, '19:00:00', 1, 33, 0x30),
(114, 1, '19:00:00', 1, 34, 0x30),
(115, 1, '19:00:00', 1, 35, 0x30),
(116, 1, '19:00:00', 1, 36, 0x30),
(117, 1, '19:00:00', 1, 37, 0x30),
(118, 1, '19:00:00', 1, 38, 0x30),
(119, 1, '19:00:00', 1, 39, 0x30),
(120, 1, '19:00:00', 1, 40, 0x30),
(121, 2, '10:00:00', 5, 1, 0x30),
(122, 2, '10:00:00', 5, 2, 0x30),
(123, 2, '10:00:00', 5, 3, 0x30),
(124, 2, '10:00:00', 5, 4, 0x30),
(125, 2, '10:00:00', 5, 5, 0x30),
(126, 2, '10:00:00', 5, 6, 0x30),
(127, 2, '10:00:00', 5, 7, 0x30),
(128, 2, '10:00:00', 5, 8, 0x30),
(129, 2, '10:00:00', 5, 9, 0x30),
(130, 2, '10:00:00', 5, 10, 0x30),
(131, 2, '10:00:00', 5, 11, 0x30),
(132, 2, '10:00:00', 5, 12, 0x30),
(133, 2, '10:00:00', 5, 13, 0x30),
(134, 2, '10:00:00', 5, 14, 0x30),
(135, 2, '10:00:00', 5, 15, 0x30),
(136, 2, '10:00:00', 5, 16, 0x30),
(137, 2, '10:00:00', 5, 17, 0x30),
(138, 2, '10:00:00', 5, 18, 0x30),
(139, 2, '10:00:00', 5, 19, 0x30),
(140, 2, '10:00:00', 5, 20, 0x30),
(141, 2, '10:00:00', 5, 21, 0x30),
(142, 2, '10:00:00', 5, 22, 0x30),
(143, 2, '10:00:00', 5, 23, 0x30),
(144, 2, '10:00:00', 5, 24, 0x30),
(145, 2, '10:00:00', 5, 25, 0x30),
(146, 2, '10:00:00', 5, 26, 0x30),
(147, 2, '10:00:00', 5, 27, 0x30),
(148, 2, '10:00:00', 5, 28, 0x30),
(149, 2, '10:00:00', 5, 29, 0x30),
(150, 2, '10:00:00', 5, 30, 0x30),
(151, 2, '10:00:00', 5, 31, 0x30),
(152, 2, '10:00:00', 5, 32, 0x30),
(153, 2, '10:00:00', 5, 33, 0x30),
(154, 2, '10:00:00', 5, 34, 0x30),
(155, 2, '10:00:00', 5, 35, 0x30),
(156, 2, '10:00:00', 5, 36, 0x30),
(157, 2, '10:00:00', 5, 37, 0x30),
(158, 2, '10:00:00', 5, 38, 0x30),
(159, 2, '10:00:00', 5, 39, 0x30),
(160, 2, '10:00:00', 5, 40, 0x30),
(161, 2, '14:00:00', 2, 1, 0x30),
(162, 2, '14:00:00', 2, 2, 0x31),
(163, 2, '14:00:00', 2, 3, 0x30),
(164, 2, '14:00:00', 2, 4, 0x30),
(165, 2, '14:00:00', 2, 5, 0x30),
(166, 2, '14:00:00', 2, 6, 0x30),
(167, 2, '14:00:00', 2, 7, 0x30),
(168, 2, '14:00:00', 2, 8, 0x30),
(169, 2, '14:00:00', 2, 9, 0x30),
(170, 2, '14:00:00', 2, 10, 0x30),
(171, 2, '14:00:00', 2, 11, 0x30),
(172, 2, '14:00:00', 2, 12, 0x30),
(173, 2, '14:00:00', 2, 13, 0x30),
(174, 2, '14:00:00', 2, 14, 0x30),
(175, 2, '14:00:00', 2, 15, 0x30),
(176, 2, '14:00:00', 2, 16, 0x30),
(177, 2, '14:00:00', 2, 17, 0x30),
(178, 2, '14:00:00', 2, 18, 0x30),
(179, 2, '14:00:00', 2, 19, 0x30),
(180, 2, '14:00:00', 2, 20, 0x30),
(181, 2, '14:00:00', 2, 21, 0x30),
(182, 2, '14:00:00', 2, 22, 0x30),
(183, 2, '14:00:00', 2, 23, 0x30),
(184, 2, '14:00:00', 2, 24, 0x30),
(185, 2, '14:00:00', 2, 25, 0x30),
(186, 2, '14:00:00', 2, 26, 0x30),
(187, 2, '14:00:00', 2, 27, 0x30),
(188, 2, '14:00:00', 2, 28, 0x30),
(189, 2, '14:00:00', 2, 29, 0x30),
(190, 2, '14:00:00', 2, 30, 0x30),
(191, 2, '14:00:00', 2, 31, 0x30),
(192, 2, '14:00:00', 2, 32, 0x30),
(193, 2, '14:00:00', 2, 33, 0x30),
(194, 2, '14:00:00', 2, 34, 0x30),
(195, 2, '14:00:00', 2, 35, 0x30),
(196, 2, '14:00:00', 2, 36, 0x30),
(197, 2, '14:00:00', 2, 37, 0x30),
(198, 2, '14:00:00', 2, 38, 0x30),
(199, 2, '14:00:00', 2, 39, 0x30),
(200, 2, '14:00:00', 2, 40, 0x30),
(201, 2, '19:00:00', 2, 1, 0x30),
(202, 2, '19:00:00', 2, 2, 0x30),
(203, 2, '19:00:00', 2, 3, 0x30),
(204, 2, '19:00:00', 2, 4, 0x30),
(205, 2, '19:00:00', 2, 5, 0x30),
(206, 2, '19:00:00', 2, 6, 0x30),
(207, 2, '19:00:00', 2, 7, 0x30),
(208, 2, '19:00:00', 2, 8, 0x30),
(209, 2, '19:00:00', 2, 9, 0x30),
(210, 2, '19:00:00', 2, 10, 0x30),
(211, 2, '19:00:00', 2, 11, 0x30),
(212, 2, '19:00:00', 2, 12, 0x30),
(213, 2, '19:00:00', 2, 13, 0x30),
(214, 2, '19:00:00', 2, 14, 0x30),
(215, 2, '19:00:00', 2, 15, 0x30),
(216, 2, '19:00:00', 2, 16, 0x30),
(217, 2, '19:00:00', 2, 17, 0x30),
(218, 2, '19:00:00', 2, 18, 0x30),
(219, 2, '19:00:00', 2, 19, 0x30),
(220, 2, '19:00:00', 2, 20, 0x30),
(221, 2, '19:00:00', 2, 21, 0x30),
(222, 2, '19:00:00', 2, 22, 0x30),
(223, 2, '19:00:00', 2, 23, 0x30),
(224, 2, '19:00:00', 2, 24, 0x30),
(225, 2, '19:00:00', 2, 25, 0x30),
(226, 2, '19:00:00', 2, 26, 0x30),
(227, 2, '19:00:00', 2, 27, 0x30),
(228, 2, '19:00:00', 2, 28, 0x30),
(229, 2, '19:00:00', 2, 29, 0x30),
(230, 2, '19:00:00', 2, 30, 0x30),
(231, 2, '19:00:00', 2, 31, 0x30),
(232, 2, '19:00:00', 2, 32, 0x30),
(233, 2, '19:00:00', 2, 33, 0x30),
(234, 2, '19:00:00', 2, 34, 0x30),
(235, 2, '19:00:00', 2, 35, 0x30),
(236, 2, '19:00:00', 2, 36, 0x30),
(237, 2, '19:00:00', 2, 37, 0x30),
(238, 2, '19:00:00', 2, 38, 0x30),
(239, 2, '19:00:00', 2, 39, 0x30),
(240, 2, '19:00:00', 2, 40, 0x30),
(241, 3, '10:00:00', 6, 1, 0x30),
(242, 3, '10:00:00', 6, 2, 0x30),
(243, 3, '10:00:00', 6, 3, 0x30),
(244, 3, '10:00:00', 6, 4, 0x30),
(245, 3, '10:00:00', 6, 5, 0x30),
(246, 3, '10:00:00', 6, 6, 0x30),
(247, 3, '10:00:00', 6, 7, 0x30),
(248, 3, '10:00:00', 6, 8, 0x30),
(249, 3, '10:00:00', 6, 9, 0x30),
(250, 3, '10:00:00', 6, 10, 0x30),
(251, 3, '10:00:00', 6, 11, 0x30),
(252, 3, '10:00:00', 6, 12, 0x30),
(253, 3, '10:00:00', 6, 13, 0x30),
(254, 3, '10:00:00', 6, 14, 0x30),
(255, 3, '10:00:00', 6, 15, 0x30),
(256, 3, '10:00:00', 6, 16, 0x30),
(257, 3, '10:00:00', 6, 17, 0x30),
(258, 3, '10:00:00', 6, 18, 0x30),
(259, 3, '10:00:00', 6, 19, 0x30),
(260, 3, '10:00:00', 6, 20, 0x30),
(261, 3, '10:00:00', 6, 21, 0x30),
(262, 3, '10:00:00', 6, 22, 0x30),
(263, 3, '10:00:00', 6, 23, 0x30),
(264, 3, '10:00:00', 6, 24, 0x30),
(265, 3, '10:00:00', 6, 25, 0x30),
(266, 3, '10:00:00', 6, 26, 0x30),
(267, 3, '10:00:00', 6, 27, 0x30),
(268, 3, '10:00:00', 6, 28, 0x30),
(269, 3, '10:00:00', 6, 29, 0x30),
(270, 3, '10:00:00', 6, 30, 0x30),
(271, 3, '10:00:00', 6, 31, 0x30),
(272, 3, '10:00:00', 6, 32, 0x30),
(273, 3, '10:00:00', 6, 33, 0x30),
(274, 3, '10:00:00', 6, 34, 0x30),
(275, 3, '10:00:00', 6, 35, 0x30),
(276, 3, '10:00:00', 6, 36, 0x30),
(277, 3, '10:00:00', 6, 37, 0x30),
(278, 3, '10:00:00', 6, 38, 0x30),
(279, 3, '10:00:00', 6, 39, 0x30),
(280, 3, '10:00:00', 6, 40, 0x30),
(281, 3, '14:00:00', 3, 1, 0x30),
(282, 3, '14:00:00', 3, 2, 0x30),
(283, 3, '14:00:00', 3, 3, 0x30),
(284, 3, '14:00:00', 3, 4, 0x30),
(285, 3, '14:00:00', 3, 5, 0x30),
(286, 3, '14:00:00', 3, 6, 0x30),
(287, 3, '14:00:00', 3, 7, 0x30),
(288, 3, '14:00:00', 3, 8, 0x30),
(289, 3, '14:00:00', 3, 9, 0x30),
(290, 3, '14:00:00', 3, 10, 0x30),
(291, 3, '14:00:00', 3, 11, 0x30),
(292, 3, '14:00:00', 3, 12, 0x30),
(293, 3, '14:00:00', 3, 13, 0x30),
(294, 3, '14:00:00', 3, 14, 0x30),
(295, 3, '14:00:00', 3, 15, 0x30),
(296, 3, '14:00:00', 3, 16, 0x30),
(297, 3, '14:00:00', 3, 17, 0x30),
(298, 3, '14:00:00', 3, 18, 0x30),
(299, 3, '14:00:00', 3, 19, 0x30),
(300, 3, '14:00:00', 3, 20, 0x30),
(301, 3, '14:00:00', 3, 21, 0x30),
(302, 3, '14:00:00', 3, 22, 0x30),
(303, 3, '14:00:00', 3, 23, 0x30),
(304, 3, '14:00:00', 3, 24, 0x30),
(305, 3, '14:00:00', 3, 25, 0x30),
(306, 3, '14:00:00', 3, 26, 0x30),
(307, 3, '14:00:00', 3, 27, 0x30),
(308, 3, '14:00:00', 3, 28, 0x30),
(309, 3, '14:00:00', 3, 29, 0x30),
(310, 3, '14:00:00', 3, 30, 0x30),
(311, 3, '14:00:00', 3, 31, 0x30),
(312, 3, '14:00:00', 3, 32, 0x30),
(313, 3, '14:00:00', 3, 33, 0x30),
(314, 3, '14:00:00', 3, 34, 0x30),
(315, 3, '14:00:00', 3, 35, 0x30),
(316, 3, '14:00:00', 3, 36, 0x30),
(317, 3, '14:00:00', 3, 37, 0x30),
(318, 3, '14:00:00', 3, 38, 0x30),
(319, 3, '14:00:00', 3, 39, 0x30),
(320, 3, '14:00:00', 3, 40, 0x30),
(321, 3, '19:00:00', 3, 1, 0x30),
(322, 3, '19:00:00', 3, 2, 0x30),
(323, 3, '19:00:00', 3, 3, 0x30),
(324, 3, '19:00:00', 3, 4, 0x30),
(325, 3, '19:00:00', 3, 5, 0x30),
(326, 3, '19:00:00', 3, 6, 0x30),
(327, 3, '19:00:00', 3, 7, 0x30),
(328, 3, '19:00:00', 3, 8, 0x30),
(329, 3, '19:00:00', 3, 9, 0x30),
(330, 3, '19:00:00', 3, 10, 0x30),
(331, 3, '19:00:00', 3, 11, 0x30),
(332, 3, '19:00:00', 3, 12, 0x30),
(333, 3, '19:00:00', 3, 13, 0x30),
(334, 3, '19:00:00', 3, 14, 0x30),
(335, 3, '19:00:00', 3, 15, 0x30),
(336, 3, '19:00:00', 3, 16, 0x30),
(337, 3, '19:00:00', 3, 17, 0x30),
(338, 3, '19:00:00', 3, 18, 0x30),
(339, 3, '19:00:00', 3, 19, 0x30),
(340, 3, '19:00:00', 3, 20, 0x30),
(341, 3, '19:00:00', 3, 21, 0x30),
(342, 3, '19:00:00', 3, 22, 0x30),
(343, 3, '19:00:00', 3, 23, 0x30),
(344, 3, '19:00:00', 3, 24, 0x30),
(345, 3, '19:00:00', 3, 25, 0x30),
(346, 3, '19:00:00', 3, 26, 0x30),
(347, 3, '19:00:00', 3, 27, 0x30),
(348, 3, '19:00:00', 3, 28, 0x30),
(349, 3, '19:00:00', 3, 29, 0x30),
(350, 3, '19:00:00', 3, 30, 0x30),
(351, 3, '19:00:00', 3, 31, 0x30),
(352, 3, '19:00:00', 3, 32, 0x30),
(353, 3, '19:00:00', 3, 33, 0x30),
(354, 3, '19:00:00', 3, 34, 0x30),
(355, 3, '19:00:00', 3, 35, 0x30),
(356, 3, '19:00:00', 3, 36, 0x30),
(357, 3, '19:00:00', 3, 37, 0x30),
(358, 3, '19:00:00', 3, 38, 0x30),
(359, 3, '19:00:00', 3, 39, 0x30),
(360, 3, '19:00:00', 3, 40, 0x30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prebook_tab`
--
ALTER TABLE `prebook_tab`
  ADD PRIMARY KEY (`PREBOOK_ID`),
  ADD KEY `MOVIE_ID` (`MOVIE_ID`),
  ADD KEY `SEAT_NO` (`SEAT_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prebook_tab`
--
ALTER TABLE `prebook_tab`
  MODIFY `PREBOOK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `prebook_tab`
--
ALTER TABLE `prebook_tab`
  ADD CONSTRAINT `prebook_tab_ibfk_1` FOREIGN KEY (`MOVIE_ID`) REFERENCES `movie_tab` (`MOVIE_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `prebook_tab_ibfk_2` FOREIGN KEY (`SEAT_NO`) REFERENCES `theater_tab` (`SEAT_NO`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
