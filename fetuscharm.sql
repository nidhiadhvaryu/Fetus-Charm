-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 04:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fetuscharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `adminID` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`adminID`, `Username`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogtb`
--

CREATE TABLE `blogtb` (
  `blogID` int(10) NOT NULL,
  `blogName` varchar(30) NOT NULL,
  `blogTitle` varchar(40) NOT NULL,
  `blogImage` text NOT NULL,
  `blogDate` date NOT NULL,
  `blogAuthor` varchar(40) NOT NULL,
  `blogShortdescription` text NOT NULL,
  `blogDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carttb`
--

CREATE TABLE `carttb` (
  `cartID` int(10) NOT NULL,
  `packageID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `customerSessionID` text DEFAULT NULL,
  `cartDateTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `orderproductID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carttb`
--

INSERT INTO `carttb` (`cartID`, `packageID`, `customerID`, `customerSessionID`, `cartDateTime`, `orderproductID`) VALUES
(31, 61, 0, 'kgvi14rip7h7sjnjuksloduo5a', '2022-06-21 09:03:19.852527', 0),
(32, 71, 14, '', '2022-06-21 18:43:44.437336', 20),
(33, 72, 14, '', '2022-06-21 18:43:44.440552', 20),
(34, 65, 15, '', '2022-06-21 19:52:20.307566', 21),
(35, 61, 15, '', '2022-06-21 19:52:20.311792', 21),
(36, 77, 0, 't240jm76j80adpuaji2civhn15', '2022-06-22 01:37:59.249865', 22),
(37, 71, 0, 't240jm76j80adpuaji2civhn15', '2022-06-22 01:37:59.255593', 22),
(38, 77, 15, '', '2022-06-22 00:00:02.082586', 0),
(39, 81, 15, '', '2022-06-22 00:00:07.572860', 0),
(40, 71, 15, '', '2022-06-22 00:17:13.038152', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorytb`
--

CREATE TABLE `categorytb` (
  `categoryID` int(10) NOT NULL,
  `categoryName` text NOT NULL,
  `categoryImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorytb`
--

INSERT INTO `categorytb` (`categoryID`, `categoryName`, `categoryImage`) VALUES
(69, 'Maternity ', 'files/category/169.jfif'),
(70, 'Baby Shower', 'files/category/170.jpeg'),
(71, 'Baby Naming Ceremony', 'files/category/download71.jfif'),
(72, 'Birthday', 'files/category/172.jfif'),
(73, 'Born Baby', 'files/category/173.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `citytb`
--

CREATE TABLE `citytb` (
  `cityID` int(10) NOT NULL,
  `cityName` varchar(30) NOT NULL,
  `stateID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citytb`
--

INSERT INTO `citytb` (`cityID`, `cityName`, `stateID`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 35),
(97, 'Bilaspur', 35),
(98, 'Dantewada', 35),
(99, 'Dhamtari', 35),
(100, 'Durg', 35),
(101, 'Jashpur', 35),
(102, 'Janjgir-Champa', 35),
(103, 'Korba', 35),
(104, 'Koriya', 35),
(105, 'Kanker', 35),
(106, 'Kawardha', 35),
(107, 'Mahasamund', 35),
(108, 'Raigarh', 35),
(109, 'Rajnandgaon', 35),
(110, 'Raipur', 35),
(111, 'Surguja', 35),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

-- --------------------------------------------------------

--
-- Table structure for table `contacttb`
--

CREATE TABLE `contacttb` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `countrytb`
--

CREATE TABLE `countrytb` (
  `countryID` int(10) NOT NULL,
  `countryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countrytb`
--

INSERT INTO `countrytb` (`countryID`, `countryName`) VALUES
(105, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `customerregistrationtb`
--

CREATE TABLE `customerregistrationtb` (
  `customerID` int(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `emailID` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `DOB` date NOT NULL,
  `addressLine1` varchar(200) NOT NULL,
  `addressLine2` varchar(200) NOT NULL,
  `pincode` bigint(6) NOT NULL,
  `profile` text NOT NULL,
  `countryID` int(10) NOT NULL,
  `stateID` int(10) NOT NULL,
  `cityID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerregistrationtb`
--

INSERT INTO `customerregistrationtb` (`customerID`, `firstName`, `lastName`, `emailID`, `password`, `contactno`, `gender`, `DOB`, `addressLine1`, `addressLine2`, `pincode`, `profile`, `countryID`, `stateID`, `cityID`, `isActive`) VALUES
(14, 'Pankaj', 'Adhvaryu', 'nidhiadhvaryu10@gmail.com', 'neel@345', 8956458547, 'Male', '2022-06-24', '2/1077, Chhowala Street,  Sagrampura,  Surat -395002', 'ssss', 395002, 'files/114.jfif', 105, 5, 130, 0),
(15, 'Neel', 'Bhatt', 'bhattneel006@gmail.com', 'neel@123', 8695654785, 'Male', '2022-06-12', '2/1077, Chhowala Street, ', 'Sagrampura', 395002, 'files/download (3) (1)15.png', 105, 5, 140, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitemtb`
--

CREATE TABLE `orderitemtb` (
  `orderitemID` int(10) NOT NULL,
  `cartID` int(10) NOT NULL,
  `packageID` int(10) NOT NULL,
  `packageprice` double NOT NULL,
  `customerID` int(10) NOT NULL,
  `customerSessionID` text DEFAULT NULL,
  `cartDateTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `orderproductID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitemtb`
--

INSERT INTO `orderitemtb` (`orderitemID`, `cartID`, `packageID`, `packageprice`, `customerID`, `customerSessionID`, `cartDateTime`, `orderproductID`) VALUES
(22, 31, 61, 5000, 0, 'kgvi14rip7h7sjnjuksloduo5a', '2022-06-21 09:03:23.792987', 0),
(23, 32, 71, 4000, 14, '', '2022-06-21 18:43:44.435215', 20),
(24, 33, 72, 2500, 14, '', '2022-06-21 18:43:44.438960', 20),
(25, 34, 65, 3000, 15, '', '2022-06-21 19:52:20.305797', 21),
(26, 35, 61, 5000, 15, '', '2022-06-21 19:52:20.309710', 21),
(27, 36, 77, 2500, 0, 't240jm76j80adpuaji2civhn15', '2022-06-22 01:37:59.247338', 22),
(28, 37, 71, 4000, 0, 't240jm76j80adpuaji2civhn15', '2022-06-22 01:37:59.252518', 22),
(29, 38, 77, 2500, 15, '', '2022-06-22 00:00:15.205026', 0),
(30, 39, 81, 2100, 15, '', '2022-06-22 00:00:15.208328', 0),
(31, 40, 71, 4000, 15, '', '2022-06-22 00:17:18.716044', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderproducttb`
--

CREATE TABLE `orderproducttb` (
  `orderproductID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `customerSessionID` text DEFAULT NULL,
  `vendorID` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailID` varchar(40) NOT NULL,
  `contactno` bigint(30) NOT NULL,
  `addressline1` varchar(100) NOT NULL,
  `addressline2` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `countryID` int(10) NOT NULL,
  `stateID` int(10) NOT NULL,
  `cityID` int(10) NOT NULL,
  `subTotal` double NOT NULL,
  `discount` float NOT NULL,
  `gst` float NOT NULL,
  `grandtotal` double NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderproducttb`
--

INSERT INTO `orderproducttb` (`orderproductID`, `customerID`, `customerSessionID`, `vendorID`, `firstname`, `lastname`, `emailID`, `contactno`, `addressline1`, `addressline2`, `pincode`, `countryID`, `stateID`, `cityID`, `subTotal`, `discount`, `gst`, `grandtotal`, `isActive`) VALUES
(20, 14, '', 37, 'Adhvaryu', 'Pankaj', 'nidhiadhvaryu10@gmail.com', 8956458547, '2/1077, Chhowala Street,  Sagrampura,  Surat -395002', 'ssss', 395002, 105, 5, 130, 6500, 0, 0, 6500, 1),
(21, 15, '', 32, 'Neel', 'Bhatt', 'nidhiadhvaryu10@gmail.com', 8956458547, '2/1077, Chhowala Street,  Sagrampura,  Surat -395002', 'ssss', 395002, 105, 5, 130, 8000, 0, 0, 8000, 1),
(22, 0, 't240jm76j80adpuaji2civhn15', 35, 'Dhruvi', 'Pastagia', 'dhruvi@gmail.com', 8401520632, '2/1077, Chhowala Street,  ', 'Sagrampura', 395002, 105, 5, 147, 6500, 0, 0, 6500, 1),
(23, 15, '', 35, 'Neel', 'Bhatt', 'bhattneel006@gmail.com', 8695654785, '2/1077, Chhowala Street, ', 'ssss', 395002, 105, 5, 140, 8600, 0, 0, 8600, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packagetb`
--

CREATE TABLE `packagetb` (
  `packageID` int(10) NOT NULL,
  `packageName` text NOT NULL,
  `shortdescription` text NOT NULL,
  `description` text NOT NULL,
  `packagePrice` float NOT NULL,
  `coverphoto` text NOT NULL,
  `noofdays` int(20) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `vendorID` int(10) NOT NULL,
  `subcategoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packagetb`
--

INSERT INTO `packagetb` (`packageID`, `packageName`, `shortdescription`, `description`, `packagePrice`, `coverphoto`, `noofdays`, `categoryID`, `vendorID`, `subcategoryID`) VALUES
(61, 'Classic Maternity Photoshoot', 'Studio based photography', '<p>There is nothing more so beautiful, fulfilling and admiring like the <strong>feeling of bearing your Baby</strong>. Pregnancy is an extraordinary transformation of body and storm of emotions, from happiness and worries, courage and fear, strength and weakness, but the most – <strong>endless Beauty</strong>. It is the time for you to admire every single curve, extra layer, fallen hair or even swollen feet, something only a pregnant woman can understand, hardly explain, and transition to that beautiful <i><strong>new development</strong></i> inside her. And it is <strong>amazing</strong>! <strong>Worth capturing!</strong></p><p>The best time to depict the shine of Maternity is <strong>28th -34th week</strong>.&nbsp; Some might think it would be too late or difficult with the due date approaching, but it is the best time to click the magical change and catch the <strong>World of the Baby.</strong></p><p><strong>Maternity Photo Session</strong> has dedicated time <strong>from 1.5 to 6 hours</strong>, based on your chosen package and&nbsp; health, and can be clicked indoors or outside, in the beautiful garden or close by Pashan lake. During the session, you will be given plenty of time to change, take a break or deal with those natural moments of sudden cramps, mood swings or simple “cannot do” phases.</p><p>Daddy and children (if any) are well included into the clicks and comfort of mommy. You also have the option to pre-book make-up artist, use <a href=\"https://editaphotography.in/maternity-gowns-available-at-our-photo-studio/\">designer gowns</a>, and enjoy privacy in the dedicated room. In case of outdoor shooting, the foldable tent would replace the room to assure the same.</p>', 5000, 'files/package/161.jpg', 2, 69, 32, 21),
(62, 'Glamour Maternity Package', 'Glamour Baby Bump Shoot', '<p><strong>GLAMOUR Maternity Package</strong> is also a studio setup. I use studio lighting to create glamorous, magazine style portraits. This is the latest addition to my maternity portrait styles in late 2019. This is primarily a women oriented setup, although husbands can be added to this setup. I don’t allow adding children to this setup. For styling this look, I prefer using a wrap or a dress. I am hoping to expand this genre over the coming years.</p>', 4000, 'files/package/1 (2)62.jpg', 3, 69, 32, 21),
(63, 'Family Photoshoot', 'All the happiness in one click', '<p><strong>“Family is the most important thing in the world” – Princess Diana</strong></p><p>All the inside jokes, all that you’ve been through together, all the laughs and tears and hugs.&nbsp; It’s time to capture this moment forever.&nbsp; Our photos have a power like nothing else as the days, seasons and years pass by.&nbsp; Let’s make that vision of a family portrait that you’ve had in your head finally become a reality.&nbsp;&nbsp;</p><p>There is a lot to think about, but as a family photographer, it’s my pleasure to guide you through it.&nbsp; You’ll tell me what you want from the session – your ideas, your style and the types of pictures you desire.&nbsp;&nbsp;</p><p>We’ll pick a place that feels good to your family, so you can enjoy some time in each other’s company.&nbsp; It could be your favorite park, on the streets of your hometown or in your own backyard.&nbsp; There are also many beautiful areas that you may never have considered.&nbsp; As a Philadelphia family photographer, I know of lots of <a href=\"https://www.emilybrunnerphotography.com/clients/photoshoot-location-ideas\">great locations</a> to suggest.</p><p>If you need help deciding on outfits, there are many tips for that.&nbsp; It’s a lot less complicated than you may think.&nbsp; I have a <a href=\"https://www.emilybrunnerphotography.com/clients/what-to-wear\">what to wear</a> guide to help you and we’ll also talk about ideas when we plan your session.</p>', 7000, 'files/package/1 (2)63.jpg', 5, 69, 33, 21),
(64, 'Couple Photoshoot', 'Creative and Candid Photoshoot', '<p>Though pregnancy feels long, it will be over in the blink of an eye. Capture these fleeting moments with maternity pictures that reflect your unique personality and life. You don\'t need to spend a lot of money to have a successful pregnancy photoshoot – baby bumps are photogenic without a lot of fuss. Whether you decide to hire a photographer or do it yourself, here are the best maternity picture ideas to help you get stunning images that you and your family will treasure.</p>', 5000, 'files/package/images (2)64.jpg', 5, 69, 33, 21),
(65, 'Rose Gold Theme ', 'Gorgeous Rose Gold decorations', '<p>Celebrate your little ones in all their biggest moments with our range of rose gold party decorations!</p><p>The hottest colour of the season is here to stay.&nbsp; Throw a truly glamorous baby shower with our rose gold baby shower collection.</p>', 3000, 'files/package/babyshower1(rose gold)1.png', 1, 70, 34, 22),
(66, 'Yellow Theme', 'Perfect for a gender neutral baby shower', '<p>A yellow baby shower theme is perfect for a gender neutral baby shower, where the mom and dad to be may not be finding out what the baby is until it is born. Or, a yellow themed shower can be for anyone who just simply loves the color yellow!</p><p>It is a wonderful choice if you are looking to throw a bright and cheerful shower - which many people do since the arrival of a new baby is a cheerful occasion! It is also a great choice when planning a spring or summer baby shower.</p><p>Let\'s get started with all of the cute, inspiring yellow baby shower ideas!</p><p>Start of by choosing what kind of baby shower decorations you plan to have at the shower.</p><p>Flowers, balloons, streamers, centerpieces, rustic, traditional, minimal - &nbsp;To make your planning easier, you can always find out what the mom-to-be likes and doesn\'t like to get some ideas on how to decorate.&nbsp;</p><p>Since yellow is such a cheerful color, bright flowers seem to be a perfect choice for baby shower decor.</p><p>Tulips, sunflowers, pansies, roses - you can even incorporate some pretty orange and red flowers.</p>', 3500, 'files/package/babyshower3(yellow)66.png', 1, 70, 34, 22),
(67, 'Seemantham Based Decoration', 'This is the most ancient decoration', '<p>Today on the blog we are so excited to share a beautiful baby shower Ideas with the most adorable themes. If there’s one thing that can always put a smile on our faces, it’s a super cute baby shower! We would love seeing new parents, family, and friends welcoming the tiny one with all their love and wishes.</p><p>For the new mom and dad that want something more on the traditional bucolic side, we love this coconut mat themed shower! Lots of tuberose lotus hangings and the stage setup tie the whole celebrations together. Decor by Wedding Aaha-Chennai.</p>', 4500, 'files/package/babyshower4(semanthan)67.png', 1, 70, 34, 23),
(68, 'Krishna Style Baby Shower Theme', 'Aesthetic and Ecofriendly Decor', '<p><strong>Whose name is Krishna?</strong> &nbsp;Making flower work is closely related to Lord Krishna , and we thank LordKrishna for lending his name for our Eco-friendly venture</p><p><br>&nbsp;</p><p><strong>How are we different from others? </strong>We don’t use any floralfoam, FRP panels, No thermacoal, No plastic in our décor. You can see our hastags in our Instagram posts and see how positive the response has been. Any materials that we use in our décor, we ask our selves, is this natural? Is this biodegradale?</p><p><strong>What are we doing at DecorbyKrishna</strong>_ We are taking small scale home based events like birthdays, Pellikooturu, Pooja, vratam, Housewarming ceremony. Simple, eco-friendly and low budget events are what we are concentrating till 2019.</p><p><strong>GoLocal- Go Natural, Empower local Artisans: </strong>This is the strategy we follow. Disadvantages of plastic packaging and transport is ruled out when local flowers are used. Forgotten techniques of leaf art, floral art are revived in our designs. Natural and biodegradable cotton, jute fabrics and Handlooms are used as drapes and flooring</p><p><strong>How are we achieving this? </strong>Its simple, we go with traditional and evergreen designs with fresh fragrant local flowers, coconut leaves, banana leaves. These designs are timetested and give a huge positive response from clients.&nbsp;</p><p><strong>Plastic is everywhere.</strong> Without our knowledge plastic is in our land, environment and also in our body. Obviosuly plastic has intruded in our décor too. We use Koramats, brass items, wooden chairs and all kinds of biodegradable materials as alternatives to plastic materials</p><p><strong>No fiber reinforced plastics</strong>: The self-imposed “Noplastic” strategy has made us quit ubiquitous FRP panels and MDF boards and switch to traditional wood and Metal alternatives</p><p><strong>No FloralFoam :&nbsp;</strong> Floral foam is a single time use plastic, just like our plastic cover, neither biodegradable nor ecofriendly. Simple banana bark assembly is the solution that we found as alternative to Floralfoam.&nbsp;</p><p><br>&nbsp;</p>', 5000, 'files/package/babyshower5(krishna style)68.png', 1, 70, 34, 23),
(69, 'Traditional and Modern Food ideas ', ' variety of food options for your guests', '<p>It could be a daunting task when conducting a baby shower party without proper planning. Arranging food is the most complicated thing while throwing a baby shower party most families prefer&nbsp;home catering services on such special occasions. However, catering services and ideas of a baby shower function purely depend upon the factors like timing of the function, length of baby shower event, and the budget along with the location where you are going to conduct the function.</p><p>It wouldn’t be so nice to keep your guest with grumbling tummies on such a fun-filled event. Here in this article, we elaborate on what things to be considered before arranging a successful baby shower event along with top catering ideas for the baby shower function.</p><h2>Planning a Baby Shower Menu</h2><p>There hasn’t been any organized menu chart for serving your guest at a baby shower function, so you can serve your guest according to your wish. However, there are few guidelines to follow for arranging better catering menus to make it easier and simpler.</p><p>Here are the secrets to conduct a great baby shower function with top catering menus.</p><ul><li><strong>Serve with Lots of Options:</strong>&nbsp;Your catering menu for your baby shower function should have a wide range of food items along with dietary needs. Having a diverse food item at your catering will ease people who have some restriction of foods due to their health condition.</li><li><strong>Baby Shower Function Time:&nbsp;</strong>Arranging the catering menu depends upon the time of your baby shower function. If your function falls in the early afternoon or late morning means arranging a brunch or light lunch menu will be perfect. However, if your function falls in the late afternoon or early evening means you need to provide a heartier menu.</li><li><strong>Budget &amp; Location:&nbsp;</strong>Serving a big spread along with drinks and desserts will cost you a lot. So, always stick with your budget and consider the number of guests you invited to plan your food menu. Likewise, the venue/location of your baby shower function plays a role in planning a perfect food menu. If you planned to conduct at home, you can provide a hot food menu, else you need to hire&nbsp;<a href=\"https://www.cateringcorner.in/\">the best catering services</a>&nbsp;for your function happening in the hall or restaurant.</li><li><strong>Serving Style:</strong>&nbsp;To avoid food wastage and avoid preparing specific food in large quantities, prefer&nbsp;<a href=\"https://www.cateringcorner.in/buffet-catering-services/\">buffet catering services</a>&nbsp;with a wide range of food items. With such a type of catering service, you can satisfy all your guests and also avoid food wastage significantly.</li><li>Well, those secrets will guide you perfectly for conducting a great baby shower function.</li></ul>', 4000, 'files/package/cateringbabyshower69.png', 1, 70, 34, 26),
(70, 'Delux Shoot', 'Most Beautiful Shoots', '<p>Baby Shower Photography Nairobi. Photographing mothers-to-be is one of our favorite things to do as professional <a href=\"https://fiestahouseattire.com/\">pregnancy photographers Nairobi Kenya</a>. We love the inherent joy, beauty and significance of <a href=\"https://www.instagram.com/fiestahouseattire/?hl=en\">maternity photography</a>.</p><p>Most Beautiful Baby Shower Photography Nairobi, Mombasa Maternity shoots, Nairobi maternity shoots, Newborn and Family Baby bump Photography and Videography Studio. Best Photographers in Nairobi,&nbsp; Maternity Photographers, newborn photographers, babies photographers, and families photographers.</p><p><i>We offer Most Beautiful Maternity Shoots, </i>Family Maternity portraits. We specialize in capturing and telling your pregnancy’s journey through our maternity Photography.</p><p>Document the beauty of your pregnancy with Nairobi Pregnancy Photoshoot Session and you will never forget. There are some great benefits to having your pregnancy photos taken by a professional Kenyan maternity photographer. It is a time to be remembered and cherished. <a href=\"https://www.facebook.com/pg/fiestahouseattire\">Fiesta House Attire</a> makes your maternity photoshoot memorable.</p><p>Our Modern Maternity Photography Kenya is breathtaking. Its only natural that you love your child from the moment of existence.. The memories can be forever cherished through <a href=\"https://fiestahouseattire.com/pregnancy-photos-pricing-plans-fiestah-house-attire/\">maternity photography</a>.</p><p>Baby Shower Photography Kenya, our Maternity Photographers captures a woman as her true self. A<a href=\"https://fiestahouseattire.com/pregnancy-photos-pricing-plans-fiestah-house-attire/\"> professional maternity photographer</a> knows how to capture the beauty and simplicity that come together to make to create a great maternity photography masterpiece.</p><p>Fiesta House Attire specializes in maternity photography, family photography in Kenya, We are currently serving pregnancy photography needs all over Kenya.. Our aim is to please clients who love creative and artistic photography.</p><p>Fiesta House Attire Creates soulful portraits which has been a key contributor to our recognition as the top rated Professional Kenyan Maternity Photographers, Pregnancy is such an exciting time and we are thrilled to be able to capture it for you.</p><p>Let us know your best time to schedule a maternity photo shoot, secure your date today!<br>Wondering where your maternity photo shoot will take place? Your <a href=\"https://fiestahouseattire.com/contact-us/\">maternity photo shoot </a>can take place in our <a href=\"https://fiestahouseattire.com/exclusive-maternity-photography-in-kenya-with-fiesta-house-attire/\">photography studio in Nairobi Kenya</a>, an outdoor location of your choice, or a beach location in Mombasa Kenya.</p><p>With this in mind do you need to rent a maternity gown for your maternity photography or event? . We have what you need most.&nbsp;<a href=\"https://www.facebook.com/pg/fiestahouseattire\">Fiesta House Attire</a>&nbsp;offers fashionable designer uniquely made maternity gowns for hire.&nbsp; We have maternity designer pregnancy gowns for&nbsp;<a href=\"https://www.instagram.com/fiestahouseattire/?hl=en\">maternity photography</a>, baby showers, formal wear,&nbsp; weddings, and pregnancy reveals that fit your budget and lifestyle. Indeed, hire a maternity gown for any occasion.</p><p>We offer variety of gowns to showcase the beauty of your&nbsp;<i>pregnancy</i>. Request for Modern Maternity Photography Kenya.&nbsp; We create artistic portraits for you to remember this special moment in your life.</p>', 5000, 'files/package/westernstylebabyshowerphoto70.png', 2, 70, 34, 24),
(71, 'Flowers and Balloons Based Ceremony', 'Decoration with Balloons and Flowers', '<p>Baby on the Moon Naming Ceremony Decorations.Let your baby reach for the moon with this moon naming ceremony decoration theme. And this decor idea for the cradle is perfect to bring that magical touch to your baby’s celebrations. So, it also special because it is added with Moon Cradle.</p><p>This function is commonly known as barse or namkaran in Indian Marathi people group and furthermore called as namakaran samarambh. It is the naming function festivity of Boy and Girl, the festival brings with infant support service, by decoration idea for naming ceremony beautification the bed of infant was improved. It is the eternality of praising the support service.</p><p><br>Naming Ceremony is also known as “Cradle Ceremony” and in Marathi “Barsa” or “Namkaran Sohala”. Sukanya Events is best planners, organizers, and decorator in Mumbai for Naming ceremony, having best theme decorations which make your child’s Naming Ceremony worth remembering with our innovative ideas.<br>The “Naming Ceremony” or “Namkaran Sohala” basically, celebrates on arrival of a new baby. to praise them as they start their excursion through life.&nbsp;<br>It is a lovely way of greeting or welcoming the child’s arrival in the World and authoritatively presenting the child to family, relatives, and friends.<br>It is also the perfect opportunity to bring your friends and family together, show off your new little one and make promises for their future together.<br>Naming Ceremonies are also a fantastic way to welcome adopted children into the family, or to celebrate when two families are blending into one.</p>', 4000, 'files/package/minnie-mouse-theme-cradle-ceremony-decoration-for-baby-girl-1 (1)71.jpg', 2, 71, 35, 28),
(72, 'Designer Cake', 'Variety of Delicious cake', '<p>Birthdays are incomplete without the delicious cakes. Get home delivery of birthday cakes anywhere in India from BloomsVilla. We offer all types of birthday cakes online such as Butterscotch, Black Forest Cake, Red Velvet, Pineapple, Strawberry, Chocolate Truffle, Vanilla, etc. Shop for the best birthday cakes in India- Birthday Photo Cakes, Birthday Cupcakes, Birthday Heart Shaped Cakes, etc. Celebrate your birthdays&nbsp;with a delicious cake from Floweraura and make lifetime memories.</p><p>We all surprise our loved ones with a special Cake on their Birthday. This year, make this annual thing special. Surprise them with not just any Cake but a Designer one. These exotic Cakes are one of a kind. If you want to give the best surprise to your loved ones on their Birthday then, Designer Cakes are what you should order.</p>', 2500, 'files/package/babyshowercake72.png', 1, 72, 37, 40),
(73, 'Krishna Style Theme', 'Drapes and lights Based ', '<p>Naming ceremony decoration is the most precious thing in couple’s life. So, introducing your bundle of joy to all your friends and family marks an important day in your baby’s lives.</p><p>We are here to provide a platform to the photo industry where they can demonstrate their work, find new customers and provide best customer service. We are here to become the first choice of the customer for finding anything related to photographs and video making.</p><p>We are India’s Largest Search Engine for the Photography Industry and we will be making the life of customers and the photography industry easy by solving their major problems related to managing manpower, money and technology.</p>', 5000, 'files/package/krishnabasedjhulababynaming (1)73.png', 1, 71, 35, 29),
(74, 'Cradle Ceremony', 'Cradle With Flowers', '<ul><li>Baby Cradle With Artificial Flower Decoration</li><li>Backdrop 8ft x 9ft With White And Yellow&nbsp;</li><li>Theme Cut Out.4 ( Baby Theme )</li><li>Two Pot With Flowers</li><li>Baby Name With Props</li><li>Three Led</li><li>Entrance Welcome Board With Stand</li></ul>', 3500, 'files/package/jhula based baby naming ceremony74.png', 2, 71, 35, 29),
(75, 'Best Quality Food', 'Best catering solutions forClients', '<p>We will plan and execute your kids naming ceremony within your budget with eye-catching decorations, entertainment services, catering etc. Feel free to contact us for more information and making the event the long lasting happy memory with the family and friends!</p><p>Book your child’s Naming ceremony with us and our team will take care of your event for you.</p><p>Look no further! Catering provides a sumptuous food itinerary to fulfill your each and every catering need. Be it a large, mid or small sized event, our full-range of outdoor and indoor catering services cover complete food preparation and presentation for formal and informal gatherings.</p><p>We balance price with quality to deliver the best catering solutions for our customers and are confident that whatever you may need a caterer for and when you need to impress your guests we will deliver.</p><p>MS Catering will help you craft a custom menu for your special occasion that will blow the mind of your guests and delight their taste buds. Your event specialist will work hand-in-hand with our culinary team to provide you with the best dining experience in Bengaluru.</p><p>Whether you are planning a wedding, a corporate meeting or a social gathering, our expertise can make your vision for the perfect event become a reality.</p><p>SPICE UP YOUR OCCASSIONS WITH MS CATERING.</p>', 2000, 'files/package/cateringbabyshower75.png', 2, 71, 35, 32),
(76, 'Naming Photoshoot', 'Babies Glow Up', '<p>Naming your baby is one of the greatest joys of your life and a naming ceremony is intended for that occasion. Ceremonies may seem difficult to set up and organize but it doesn’t have to be that way. In Hinduism, Namkaran is an auspicious day for naming your baby. Traditionally, naming ceremonies are held right after birth but that’s not always the case. Some parents choose to host iT before their child’s first birthday while others pick specific months for the occasion. Either way, if you’re hunting for ideas on how to make this special day even bigger, we’ve got you covered.</p><p>A naming ceremony is a stage at which a person or persons is officially assigned a name. The methods of the practice differ over cultures and religions. The timing at which a name is assigned can vary from some days after birth to several months or many years.</p>', 4000, 'files/package/babynamingphotoshoot76.png', 1, 71, 35, 30),
(77, 'Party Propz Style', 'Day of remembrance', '<p>When a baby is born its first birthday is celebrated as one year of being born so one birthday has occurred. In effect the birthday is considered an anniversary of an event and anniversaries are celebrated in terms of years. First birthday is an anniversary of being born. And so on from there.</p><p>Your baby’s 1st birthday should be magical. Nothing can go wrong. However, even if they do, then it will be a beautiful mess.&nbsp; There are so many things that you can do to give your little angel the very best on their first-ever birthday party.&nbsp; In as much as the pressure is there, it should not get into your head that bad. Go simple. There is some elegance in simplicity.&nbsp; However, we can all agree that the one thing that makes a perfect present is <a href=\"https://www.localgrapher.com/newborn-christmas-photo-shoot-ideas/\">beautiful baby pictures</a>. With the tips above, you will have quite some brilliant and doable 1st birthday photo ideas to help you capture and savor all the beautiful moments.</p>', 2500, 'files/package/firstbirthdayphotoshoot77.png', 1, 72, 37, 33),
(78, 'Turning five', 'A place where make your day full of thrills', '<p>HAPPY 5TH BIRTHDAY!<br>Do you know what Five means?<br>You\'re&nbsp;<br>Fabulous,&nbsp;<br>Imaginative,&nbsp;<br>Valuable and<br>Exceptional</p><p>Kids are the wonder and joy of every family. The way they brighten up our day is an irreplaceable moment. Since they are only having a birthday once a year, make this a memory for keeps with a sweet and cuddly greeting for your adorable <a href=\"https://www.parents.com/fun/birthdays/themes/birthday-party-theme-ideas-for-5-to-6-year-olds/\">5-year-old.</a></p><p>Whether you choose to inspire the young person, entertain them with a joke, or amaze them with a poem, your handwritten message will mean a lot to them and their parents. These sweet, fun, and silly 5th birthday quotes and messages are the best way to send a little birthday cheer.</p>', 1500, 'files/package/fifthbirthdayphotoshoot78.png', 1, 72, 37, 34),
(79, 'Turning Ten!! ', 'You are now double digits!!', '<p>The 10th birthday messages below blatantly tell the newly anointed 10 year old that turning 10 is a milestone as far as birthdays are concerned.</p><p>Looking for 10th birthday photoshoot ideas for your son or daughter? <a href=\"https://www.peerspace.com/plan/photo-shoot\">Peerspace</a> can help you out with that.&nbsp;A 10th birthday is a huge event in any child’s life. they’ve officially entered the double-digits and become a “zero-teen”, as Beverly Cleary’s beloved character <a href=\"https://www.salon.com/2021/03/29/i-want-to-be-more-like-ramona-quimby-beverly-clearys-patron-saint-of-messy-girls-as-an-adult/\">Ramona Quimby</a> put it. At 10 years old, they’ve got a whole new world of tweendom to discover. So what better way to mark the occasion than with a special birthday photoshoot?&nbsp;</p><p>You can book countless amazing and fun photoshoot venues on <a href=\"https://www.peerspace.com/plan/photo-shoot\">Peerspace</a> across the globe. And if you need a little help narrowing down the options, we’re here to get you started. Here are 12 of our favorite 10th birthday ideas, perfect for the new zero-teens in your life. Some of these spaces would even make an amazing spot to host a special 10th birthday party, too!</p>', 3500, 'files/package/tenthbirthdayphotoshootwithparents79.png', 1, 72, 37, 35),
(80, 'Jungle Theme', 'Zoo animal theme BirthdayParty', '<p>Name&nbsp;:&nbsp;Jungle Theme Party Decoration - For Boys Girls - Animal Theme Birthday Party Decorations, Animal Balloons, Birthday Theme,Theme Decoration - Set of 49</p><p>Type&nbsp;:&nbsp;Balloons</p><p>Color&nbsp;:&nbsp;Green</p><p>Net Quantity (N)&nbsp;:&nbsp;1</p><p>A COMPLETE JUNGE THEME BIRTHDAY DECORATION PACK&nbsp;:&nbsp;This exclusive 49Pcs jungle theme happy birthday decoration set includes: 1pc golden happy birthday letter foil balloon, 6pcs animal foil balloon, 15Pcs light green balloon, 15pcs dark green balloons, 8pcs golden balloon, 2pcs green foil curtain, 1Pc balloon glue dot and 1Pc balloon garland arch roll.</p>', 2500, 'files/package/junglethemebirthdayparty80.png', 1, 72, 37, 36),
(81, 'Great Baby Photoshoot', 'Treasure baby’s moments ', '<p><strong>From Bump to Baby Let’s Celebrate Every Moment</strong></p><p>The rise of the newborn photo shoot has led to many opportunities to capture beautiful memories of the little one\'s pictures. Newborn shoots take place best when a baby is 5 to 10 days old, when their still-forming bones are most pliable for the posing, that can only be photographed by a professional photographer. What makes Shital Photo Stand out, is that our studio is completely sanitized before each shoot, our props and wraps our exclusively imported from New York and Russia. Our Photographers and in-house baby stylist are well trained to handle the babies with outmost care making us best in this field with regards to safety and quality.</p>', 2100, 'files/package/newbornphotoshoot181.png', 4, 73, 36, 39);

-- --------------------------------------------------------

--
-- Table structure for table `portfoliotb`
--

CREATE TABLE `portfoliotb` (
  `portfolioID` int(10) NOT NULL,
  `packageID` int(10) NOT NULL,
  `album` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfoliotb`
--

INSERT INTO `portfoliotb` (`portfolioID`, `packageID`, `album`) VALUES
(62, 59, 'portfoilioImagegallery62.jpg'),
(63, 61, 'portfoilioImagegallery63.jpg'),
(64, 61, 'portfoilioImagegallery64.png'),
(65, 62, 'portfoilioImagegallery65.png'),
(66, 62, 'portfoilioImagegallery66.png'),
(68, 63, 'portfoilioImagegallery68.png'),
(69, 63, 'portfoilioImagegallery69.png'),
(72, 64, 'portfoilioImagegallery72.jpg'),
(73, 64, 'portfoilioImagegallery73.jpg'),
(75, 65, 'portfoilioImagegallery75.png'),
(76, 66, 'portfoilioImagegallery76.jpg'),
(77, 66, 'portfoilioImagegallery77.png'),
(78, 65, 'portfoilioImagegallery78.jpg'),
(79, 66, 'portfoilioImagegallery79.png'),
(80, 67, 'portfoilioImagegallery80.jpg'),
(81, 67, 'portfoilioImagegallery81.png'),
(82, 68, 'portfoilioImagegallery82.jpg'),
(83, 68, 'portfoilioImagegallery83.png'),
(84, 69, 'portfoilioImagegallery84.png'),
(85, 69, 'portfoilioImagegallery85.png'),
(86, 70, 'portfoilioImagegallery86.png'),
(87, 70, 'portfoilioImagegallery87.png'),
(88, 71, 'portfoilioImagegallery88.jpg'),
(89, 71, 'portfoilioImagegallery89.jpg'),
(92, 72, 'portfoilioImagegallery92.png'),
(93, 72, 'portfoilioImagegallery93.jpeg'),
(95, 73, 'portfoilioImagegallery95.png'),
(96, 73, 'portfoilioImagegallery96.png'),
(97, 73, 'portfoilioImagegallery97.jpg'),
(99, 74, 'portfoilioImagegallery99.png'),
(100, 74, 'portfoilioImagegallery100.png'),
(101, 75, 'portfoilioImagegallery101.png'),
(102, 75, 'portfoilioImagegallery102.png'),
(103, 76, 'portfoilioImagegallery103.png'),
(104, 76, 'portfoilioImagegallery104.png'),
(105, 77, 'portfoilioImagegallery105.png'),
(106, 77, 'portfoilioImagegallery106.png'),
(107, 77, 'portfoilioImagegallery107.png'),
(108, 78, 'portfoilioImagegallery108.png'),
(109, 78, 'portfoilioImagegallery109.png'),
(110, 79, 'portfoilioImagegallery110.png'),
(111, 79, 'portfoilioImagegallery111.png'),
(112, 80, 'portfoilioImagegallery112.png'),
(113, 80, 'portfoilioImagegallery113.png'),
(114, 81, 'portfoilioImagegallery114.png'),
(115, 81, 'portfoilioImagegallery115.png'),
(116, 81, 'portfoilioImagegallery116.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `ratereviewID` int(10) NOT NULL,
  `packageID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `reviewTitle` text NOT NULL,
  `reviewDate` date NOT NULL,
  `package_review_name` text NOT NULL,
  `package_review_email` varchar(255) NOT NULL,
  `package_review_rating` float NOT NULL,
  `package_review_date` datetime NOT NULL DEFAULT current_timestamp(),
  `package_review_message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`ratereviewID`, `packageID`, `customerID`, `reviewTitle`, `reviewDate`, `package_review_name`, `package_review_email`, `package_review_rating`, `package_review_date`, `package_review_message`) VALUES
(13, 61, 14, 'Best Package', '2022-06-15', 'Dhruvi Pastagia', 'nidhiadhvaryu10@gmail.com', 5, '2022-06-21 13:26:45', 'szrgvstrh'),
(15, 65, 14, 'Best Package', '2022-06-22', 'Dhruvi Pastagia', 'dhruvi@gmail.com', 4, '2022-06-21 23:27:29', 'dvczfdvd');

-- --------------------------------------------------------

--
-- Table structure for table `statetb`
--

CREATE TABLE `statetb` (
  `stateID` int(10) NOT NULL,
  `stateName` varchar(30) NOT NULL,
  `countryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statetb`
--

INSERT INTO `statetb` (`stateID`, `stateName`, `countryID`) VALUES
(1, 'Andhra Pradesh', 105),
(2, 'Assam', 105),
(3, 'Arunachal Pradesh', 105),
(4, 'Bihar', 105),
(5, 'Gujrat', 105),
(6, 'Haryana', 105),
(7, 'Himachal Pradesh', 105),
(8, 'Jammu & Kashmir', 105),
(9, 'Karnataka', 105),
(10, 'Kerala', 105),
(11, 'Madhya Pradesh', 105),
(12, 'Maharashtra', 105),
(13, 'Manipur', 105),
(14, 'Meghalaya', 105),
(15, 'Mizoram', 105),
(16, 'Nagaland', 105),
(17, 'Orissa', 105),
(18, 'Punjab', 105),
(19, 'Rajasthan', 105),
(20, 'Sikkim', 105),
(21, 'Tamil Nadu', 105),
(22, 'Tripura', 105),
(23, 'Uttar Pradesh', 105),
(24, 'West Bengal', 105),
(25, 'Delhi', 105),
(26, 'Goa', 105),
(27, 'Pondichery', 105),
(28, 'Lakshdweep', 105),
(29, 'Daman & Diu', 105),
(30, 'Dadra & Nagar', 105),
(31, 'Chandigarh', 105),
(32, 'Andaman & Nicobar', 105),
(33, 'Uttaranchal', 105),
(34, 'Jharkhand', 105),
(35, 'Chattisgarh', 105);

-- --------------------------------------------------------

--
-- Table structure for table `subcategorytb`
--

CREATE TABLE `subcategorytb` (
  `subcategoryID` int(10) NOT NULL,
  `subcategoryName` text NOT NULL,
  `categoryID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategorytb`
--

INSERT INTO `subcategorytb` (`subcategoryID`, `subcategoryName`, `categoryID`) VALUES
(21, 'Maternity Photoshoot', 69),
(22, 'Theme Based Baby Shower', 70),
(23, 'Indian Style Baby Shower', 70),
(24, 'Baby Shower Photoshoot', 70),
(26, 'Baby Shower Catering', 70),
(28, 'Theme Based Baby Naming Ceremony', 71),
(29, 'Indian Style Baby Naming Ceremony', 71),
(30, 'Baby Naming Ceremony Photoshoot', 71),
(32, 'Baby Naming Ceremony Catering', 71),
(33, 'First Birthday', 72),
(34, 'Fifth Birthday', 72),
(35, 'Tenth Birthday', 72),
(36, 'Theme Based Birthday Party', 72),
(38, 'Birthday Party Catering', 72),
(39, 'Born Baby Photoshoot', 73),
(40, 'Cake smash', 72);

-- --------------------------------------------------------

--
-- Table structure for table `testimonialtb`
--

CREATE TABLE `testimonialtb` (
  `testimonialID` int(10) NOT NULL,
  `testimonialImage` text NOT NULL,
  `testimonialName` varchar(80) NOT NULL,
  `testimonialDescription` text NOT NULL,
  `testimonialDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonialtb`
--

INSERT INTO `testimonialtb` (`testimonialID`, `testimonialImage`, `testimonialName`, `testimonialDescription`, `testimonialDate`) VALUES
(6, 'files/testimonial/download (1)6.png', 'Kanan Shah', '<p>Wonderful photography. Would like to make a special mention of Shiv, who was our photographer for the evening. Amazing pics and very patient as well as very professional.&nbsp;</p>', '2022-05-17'),
(7, 'files/testimonial/testimonialimage1 (1)7.jpg', 'Kevin Bhatt', '<p>Extremely Happy with Maternity and Baby Shower Photo shoots. It was a great experience right from the beginning. We had a very good experience with entire phometo team.</p>', '2022-06-05'),
(8, 'files/testimonial/download (2)8.png', 'Pooja Jariwala', '<p>A very good service from the team, Team work to be very well appreciated. I had given my marriage album for print, Quality and the Time to delivery is too good.</p>', '2022-05-15'),
(9, 'files/testimonial/download (3) (1)9.png', 'Shruti Vakani', '<p>Had a great experience with Phometo. The communication with the representative on WhatsApp was very clear. The photographers were on time, very polite, friendly.&nbsp;</p>', '2022-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `vendorregistrationtb`
--

CREATE TABLE `vendorregistrationtb` (
  `vendorID` int(10) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `personName` varchar(30) NOT NULL,
  `companyType` varchar(50) NOT NULL,
  `emailID` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `map` text NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `vendorProfile` text NOT NULL,
  `company_Vendor_IDProof` text NOT NULL,
  `vendorDescription` text DEFAULT NULL,
  `countryID` int(10) NOT NULL,
  `stateID` int(10) NOT NULL,
  `cityID` int(10) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorregistrationtb`
--

INSERT INTO `vendorregistrationtb` (`vendorID`, `companyName`, `personName`, `companyType`, `emailID`, `password`, `address`, `map`, `contactno`, `vendorProfile`, `company_Vendor_IDProof`, `vendorDescription`, `countryID`, `stateID`, `cityID`, `isActive`) VALUES
(31, 'Swastik Photo', 'Pratik Patel', 'Born Baby', 'swastikphoto@gmail.com', 'swastik@123', '27, Sunday Residency, Hazira-Sayan Rd, opp. Shrusti row house', 'https://www.google.com/maps/dir//Swastik+Photo,+27,+Sunday+Residency,+Hazira-Sayan+Rd,+opp.+Shrusti+row+house,+Surat,+Gujarat+394107/@21.2594868,72.8445263,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be04b1dcf6ea6c5:0x531e088abbea67e5!2m2!1d72.846715!2d21.2594868', 9825674725, 'files/profile/swastikphoto1.png', 'files/idproof/Driving-License31.jpg', '<p>The rise of the newborn photo shoot has led to many opportunities to capture beautiful memories of the little one\'s pictures. Newborn shoots take place best when a baby is 5 to 10 days old, when their still-forming bones are most pliable for the posing, that can only be photographed by a professional photographer. What makes Shital Photo Stand out, is that our studio is completely sanitized before each shoot, our props and wraps our exclusively imported from New York and Russia. Our Photographers and in-house baby stylist are well trained to handle the babies with outmost care making us best in this field with regards to safety and quality.</p>', 105, 5, 147, 1),
(32, 'Sg Clicks', 'Sunil Gohel', 'Maternity ', 'sgclicks@gmail.com', 'sgclicks@123', '8, Sant-Tukram Soc-2, near Jai Mataji Temple, Palanpur Jakatnaka', 'https://www.google.com/maps/place/Sg+Clicks/@21.2136468,72.7813204,17z/data=!3m1!4b1!4m5!3m4!1s0x3be04dd9954156a7:0xda61b46c1c7e0cad!8m2!3d21.2136468!4d72.7813204', 8652451235, 'files/profile/sgclicks1.jpg', 'files/idproof/pancard32.jpg', '<p>Hi, my name\'s Sunil Gohel and I\'m the director of SG Click. I started photography at a very young age. After passing out from my school I decided to turn this passion to my profession.</p><p>Based in Burdwan, a small town in West Bengal I along with my team have worked all over the state.</p><p>I have worked on different kinds of projects, like wedding, pre wedding, films, advertisements. All along my journey many things have changed, but one thing has remained the same, my urge of learning new things and this practice has helped me to give the maximum value to every project.</p>', 105, 5, 147, 1),
(33, 'LNC Photography', 'Abhishek Jariwala', 'Maternity ', 'lncphotography@gmail.com', 'lncp@123', '609, Lakshmi Bhawan, 6th Floor, Sundaram Avenue, Mount Road, Chennai, Tamil Nadu 600006', 'https://www.google.com/maps/search/609,+Lakshmi+Bhawan,+6th+Floor,+Sundaram+Avenue,+Mount+Road,+Chennai,+Tamil+Nadu+600006+/@19.9923496,64.2616129,4z', 9677049218, 'files/profile/lnc1.jpg', 'files/idproof/aadhaarcard33.jpg', '<p>Meet <strong>Abhishek &nbsp;Jariwala</strong> – the Founder of <a href=\"https://lncphotography.in/\">LNC Photography</a>. Abbishek studied in Malaysia to pursue his studies as a software engineer and as all engineers do, he truly followed his other passion aside engineering. LNC Photography thus began in June 2012.&nbsp; From a humble beginning, LNC Photography has grown to a team of 20 and counting – the team that supports your planning ahead of the big day to a wonderful photography experience on the best candid wedding photography, to the work after. We process your best looks and highlights with the help of our in-house editing team. With our timely delivery. you could share on social media the happiness and joy of your professional photographs as quickly as you can. This promise is for&nbsp; every couple no matter what package you book.</p>', 105, 21, 469, 0),
(34, 'The Studio Om', 'Manish More', 'Baby Shower', 'studioom@gmail.com', 'studioom@123', 'U-1, Raj Complex, Uma Bhavan Char Rasta, Bhatar Road, Surat - 395007, Near Vaishnodevi Temple', 'https://www.google.com/maps/dir//The+Studio+Om,+Four+Lane,+Raj+Complex,+M-3,+2nd+Floor,+Bhatar+Rd,+near+Uma+Bhavan,+Surat,+Gujarat+395007/@21.1663242,72.8113589,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be04e048d4c741f:0xe131ba75ef9070cf!2m2!1d72.8134799!2d21.1661728', 7458965623, 'files/profile/studioom1.png', 'files/idproof/Driving-License34.jpg', '<p>We are here to provide a platform to the photo industry where they can demonstrate their work, find new customers and provide best customer service. We are here to become the first choice of the customer for finding anything related to photographs and video making.</p><p>We are India’s Largest Search Engine for the Photography Industry and we will be making the life of customers and the photography industry easy by solving their major problems related to managing manpower, money and technology.</p>', 105, 5, 147, 1),
(35, 'phometo', 'Shiv Prakash', 'Baby Naming Ceremony', 'contact@phometo.com', 'phometo@123', '831A, 1st Floor, 4th Main, 5th Cross Rd, Vijayanagar, Bengaluru, Karnataka 560040', 'https://www.google.com/maps/dir//Phometo,+%23831A,+1st+Floor,+4th+Main,+5th+Cross+Rd,+Vijayanagar,+Bengaluru,+Karnataka+560040/@12.9728573,77.5410043,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3bae3d8d68f88f15:0x9eb6f29b43132d20!2m2!1d77.5410043!2d12.9728573', 9620200005, 'files/profile/phometo1.png', 'files/idproof/aadhaarcard35.jpg', '<p>Howdy! Welcome to PHOMETO. We are an avid, artistic and ingenious team who have pictured over 2000+ events, Documented memories of 300+ couples, perpetually exploring ingenious ways to tell stories through the pictures. We believe that weddings are one of the purest reflection of emotions of love in life. Our goal is not only to capture the moment, but also to narrate the story of emotions. We pour ourselves into every project we are a part of and we devote ourselves to create unique photos.</p><p>Our delightful clients refers us as one of the best photographers in India. A bunch of abundant talents being photographers and cinematographers here in our team are focusing on making charming and hearty pictures and visuals on each events. Having different perspectives and bizarre we are agitate to preserve your memories forever.</p>', 105, 9, 224, 1),
(36, 'Max-Media Photo Studio', 'Umesh Joshi', 'Born Baby', 'hello@maxmediastudio.com', 'maxmedia@123', 'Shop No.1, Raj Victoria, Opp. Raj Arcade, Near Walkway Road, Galaxy Circle, Pal-Adajan', 'https://www.google.com/maps/dir//Max+Media+Photo+Studio+-+Kids+Photography,+Wedding+Photography+and+Academy+in+Adajan-Pal+Shop+-+1,+Raj+Victoria,+Opp+Raj+Arcade+Walkway+Road,+Nr+Galaxy+Circle,+Pal+Adajan+Surat,+Gujarat+395009/@21.192651,72.780086,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3be04db565ad48fd:0x15ef5ee733fe846c!2m2!1d72.780086!2d21.192651', 7069111155, 'files/profile/maxmedia1.png', 'files/idproof/Driving-License36.jpg', '<p>Maxmedia Studio has a unique taste of photo capturing techniques and we assure you of having excellent photo shoot experience at our studio.</p><p>With more than 1000 props and exclusive quality cameras and equipments, we create wide artistic moments to create and make them memorable for our clients.</p><p>We offer a complete range of Digital Photography and Videography solutions to suit all our clients. Our strong team of professional photographers and videographers shall always be at your back and call to provide you with a completely satisfying Visual Experience.</p>', 105, 5, 147, 1),
(37, 'Floweraura', 'Amish Bhatt', 'Birthday', 'wecare@floweraura.com', 'flower@123', 'C2, 1st Floor, Old DLF Colony, Sector 14, Gurugram', 'https://www.google.com/maps/place/Floweraura/@28.4707495,77.0426109,17z/data=!3m1!4b1!4m5!3m4!1s0x390d19004fffffff:0xec351e66a16cde53!8m2!3d28.4707495!4d77.044805', 9650062220, 'files/profile/floweraura (1)1.jpg', 'files/idproof/pancard37.jpg', '<p>Birthdays are incomplete without Cakes! The practice of cutting a cake on Birthday, blowing the candles and making a wish is age old. Birthdays are special as they make you a year older, wiser and mature. They definitely call for a big celebration and no celebration is complete without a cake. An ideal birthday party scene is friends and family gathered around singing happy birthday and there is a delicious and tempting birthday cake made for the party. With the kind of busy lives that people have, there is almost no time for baking a birthday cake. Well, fret not! FNP comes to your rescue! We have the best and the yummiest cakes for making your celebrations super special! Cakes are associated with celebrations, cherished childhood memories, cake fights, surprise parties etc. Understanding the importance of cakes and getting the taste and flavour right, is what we specialize in. Our skilled cake artists ensure that every order is crafted to perfection so that you can have a memorable cake for your special occasions. So, whether you <a href=\"https://data.fnp.com/fondant-cakes\">buy fondant cakes</a> or photo ones, they will make the birthday boy/girl ecstatic, for a cake is the soul of the party. Don’t keep waiting now and check out the incredible collection of birthday cakes on our site.</p>', 105, 6, 154, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_socialmediatb`
--

CREATE TABLE `vendor_socialmediatb` (
  `vendor_socialmediaID` int(10) NOT NULL,
  `facebookURL` text NOT NULL,
  `instagramURL` text NOT NULL,
  `youtubeURL` text NOT NULL,
  `vendorID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_socialmediatb`
--

INSERT INTO `vendor_socialmediatb` (`vendor_socialmediaID`, `facebookURL`, `instagramURL`, `youtubeURL`, `vendorID`) VALUES
(15, 'https://www.facebook.com/groups/699156686956628', 'https://instagram.com/swastik.photo?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Pu7yWGyyatQ', 31),
(16, 'https://www.facebookcom/nidhi.adhvaryu.56', 'https://instagram.com/flowerauraofficial?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Fv8uPOTB8dw', 37),
(17, 'https://www.facebook.com/groups/699156686956628', 'https://instagram.com/sg_clicks_?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Fv8uPOTB8dw', 32),
(18, 'https://www.facebook.com/nidhi.adhvaryu.56', 'https://instagram.com/lncphotographychennai?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Pu7yWGyyatQ', 33),
(19, 'https://www.facebookcom/nidhi.adhvaryu.56', 'https://instagram.com/maxmediastudio?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Pu7yWGyyatQ', 36),
(20, 'https://www.facebookcom/nidhi.adhvaryu.56', 'https://instagram.com/phometo?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Pu7yWGyyatQ', 35),
(21, 'https://www.facebookcom/nidhi.adhvaryu.56', 'https://instagram.com/studio_om_photography?igshid=YmMyMTA2M2Y=', 'https://youtu.be/Pu7yWGyyatQ', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `blogtb`
--
ALTER TABLE `blogtb`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `carttb`
--
ALTER TABLE `carttb`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `categorytb`
--
ALTER TABLE `categorytb`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `citytb`
--
ALTER TABLE `citytb`
  ADD PRIMARY KEY (`cityID`);

--
-- Indexes for table `countrytb`
--
ALTER TABLE `countrytb`
  ADD PRIMARY KEY (`countryID`);

--
-- Indexes for table `customerregistrationtb`
--
ALTER TABLE `customerregistrationtb`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `orderitemtb`
--
ALTER TABLE `orderitemtb`
  ADD PRIMARY KEY (`orderitemID`);

--
-- Indexes for table `orderproducttb`
--
ALTER TABLE `orderproducttb`
  ADD PRIMARY KEY (`orderproductID`);

--
-- Indexes for table `packagetb`
--
ALTER TABLE `packagetb`
  ADD PRIMARY KEY (`packageID`);

--
-- Indexes for table `portfoliotb`
--
ALTER TABLE `portfoliotb`
  ADD PRIMARY KEY (`portfolioID`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`ratereviewID`);

--
-- Indexes for table `statetb`
--
ALTER TABLE `statetb`
  ADD PRIMARY KEY (`stateID`);

--
-- Indexes for table `subcategorytb`
--
ALTER TABLE `subcategorytb`
  ADD PRIMARY KEY (`subcategoryID`);

--
-- Indexes for table `testimonialtb`
--
ALTER TABLE `testimonialtb`
  ADD PRIMARY KEY (`testimonialID`);

--
-- Indexes for table `vendorregistrationtb`
--
ALTER TABLE `vendorregistrationtb`
  ADD PRIMARY KEY (`vendorID`);

--
-- Indexes for table `vendor_socialmediatb`
--
ALTER TABLE `vendor_socialmediatb`
  ADD PRIMARY KEY (`vendor_socialmediaID`),
  ADD KEY `vencon` (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogtb`
--
ALTER TABLE `blogtb`
  MODIFY `blogID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carttb`
--
ALTER TABLE `carttb`
  MODIFY `cartID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `categorytb`
--
ALTER TABLE `categorytb`
  MODIFY `categoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `citytb`
--
ALTER TABLE `citytb`
  MODIFY `cityID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `countrytb`
--
ALTER TABLE `countrytb`
  MODIFY `countryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `customerregistrationtb`
--
ALTER TABLE `customerregistrationtb`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderitemtb`
--
ALTER TABLE `orderitemtb`
  MODIFY `orderitemID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orderproducttb`
--
ALTER TABLE `orderproducttb`
  MODIFY `orderproductID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `packagetb`
--
ALTER TABLE `packagetb`
  MODIFY `packageID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `portfoliotb`
--
ALTER TABLE `portfoliotb`
  MODIFY `portfolioID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `ratereviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statetb`
--
ALTER TABLE `statetb`
  MODIFY `stateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subcategorytb`
--
ALTER TABLE `subcategorytb`
  MODIFY `subcategoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `testimonialtb`
--
ALTER TABLE `testimonialtb`
  MODIFY `testimonialID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendorregistrationtb`
--
ALTER TABLE `vendorregistrationtb`
  MODIFY `vendorID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vendor_socialmediatb`
--
ALTER TABLE `vendor_socialmediatb`
  MODIFY `vendor_socialmediaID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vendor_socialmediatb`
--
ALTER TABLE `vendor_socialmediatb`
  ADD CONSTRAINT `vencon` FOREIGN KEY (`vendorID`) REFERENCES `vendorregistrationtb` (`vendorID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
