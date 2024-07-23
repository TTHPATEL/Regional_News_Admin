-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 08:23 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense_type`
--

CREATE TABLE `expense_type` (
  `e_t_id` int(10) NOT NULL,
  `e_t_name` varchar(20) NOT NULL,
  `e_t_detail` text NOT NULL,
  `e_t_status` int(10) NOT NULL,
  `e_t_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_type`
--

INSERT INTO `expense_type` (`e_t_id`, `e_t_name`, `e_t_detail`, `e_t_status`, `e_t_c_date`) VALUES
(1, 'electricity charges', 'While calculating the common electricity charges, one should ensure to include all the electrical expenses on account of compound lighting, borewell electricity expenses, passage lighting, lift electricity expenses etc', 1, '2022-03-06'),
(2, 'Water charges', ' there is one / two common meter for water supply to the various flats / shops / bungalows etc. Hence they are required to collect the \"Water Charges\" from its members', 1, '2022-03-06'),
(3, 'Lift maintenance', 'each and every member of the Society shall have to pay the expenses for the repairs and maintenance of the lift including the charges of running the lift equally irrespective of the fact whether the members use the lift or do not use the lift at all', 1, '2022-03-06'),
(4, 'Camera Maintenance', 'Public surveillance cameras help you stay safe while clubbing, shopping, and traveling', 1, '2022-03-06'),
(5, 'Fire Extinguishers', 'A fire extinguisher is an active fire protection device used to extinguish or control small fires, often in emergency situations', 1, '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `extra_income`
--

CREATE TABLE `extra_income` (
  `e_i_id` int(10) NOT NULL,
  `e_i_title` varchar(20) NOT NULL,
  `e_i_desc` text NOT NULL,
  `e_i_amount` int(10) NOT NULL,
  `e_i_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extra_income`
--

INSERT INTO `extra_income` (`e_i_id`, `e_i_title`, `e_i_desc`, `e_i_amount`, `e_i_c_date`) VALUES
(1, 'Newpaper', 'we can sale  old  and used newpaper,furniture to Junk dealer\r\n', 2000, '2022-03-28'),
(2, 'festival', 'Membre of society are contributes 10000 ', 5000, '2022-03-28'),
(3, 'Maintenace', 'previous year maintenace 40000', 20000, '2022-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `maint_user`
--

CREATE TABLE `maint_user` (
  `m_u_id` int(20) NOT NULL,
  `sm_m_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `m_u_date` date NOT NULL,
  `m_u_status` int(10) NOT NULL,
  `m_u_pay_mode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maint_user`
--

INSERT INTO `maint_user` (`m_u_id`, `sm_m_id`, `u_id`, `m_u_date`, `m_u_status`, `m_u_pay_mode`) VALUES
(1, 1, 1, '2021-02-10', 1, 2),
(2, 1, 2, '2021-02-10', 0, 0),
(3, 1, 3, '2021-02-10', 0, 0),
(4, 1, 4, '2021-02-10', 0, 0),
(5, 1, 5, '2021-02-10', 0, 0),
(6, 1, 6, '2021-02-10', 0, 0),
(7, 1, 7, '2021-02-10', 0, 0),
(8, 1, 8, '2021-02-10', 0, 0),
(9, 1, 9, '2021-02-10', 0, 0),
(10, 1, 10, '2021-02-10', 0, 0),
(11, 2, 1, '2021-03-10', 1, 1),
(12, 2, 2, '2021-03-10', 0, 0),
(13, 2, 3, '2021-03-10', 0, 0),
(14, 2, 4, '2021-03-10', 0, 0),
(15, 2, 5, '2021-03-10', 0, 0),
(16, 2, 6, '2021-03-10', 0, 0),
(17, 2, 7, '2021-03-10', 0, 0),
(18, 2, 8, '2021-03-10', 0, 0),
(19, 2, 9, '2021-03-10', 0, 0),
(20, 2, 10, '2021-03-10', 0, 0),
(21, 3, 1, '2021-04-10', 1, 1),
(22, 3, 2, '2021-04-10', 0, 0),
(23, 3, 3, '2021-04-10', 0, 0),
(24, 3, 4, '2021-04-10', 0, 0),
(25, 3, 5, '2021-04-10', 0, 0),
(26, 3, 6, '2021-04-10', 0, 0),
(27, 3, 7, '2021-04-10', 0, 0),
(28, 3, 8, '2021-04-10', 0, 0),
(29, 3, 9, '2021-04-10', 0, 0),
(30, 3, 10, '2021-04-10', 0, 0),
(31, 4, 1, '2021-05-10', 1, 2),
(32, 4, 2, '2021-05-10', 0, 0),
(33, 4, 3, '2021-05-10', 0, 0),
(34, 4, 4, '2021-05-10', 0, 0),
(35, 4, 5, '2021-05-10', 0, 0),
(36, 4, 6, '2021-05-10', 0, 0),
(37, 4, 7, '2021-05-10', 0, 0),
(38, 4, 8, '2021-05-10', 0, 0),
(39, 4, 9, '2021-05-10', 0, 0),
(40, 4, 10, '2021-05-10', 0, 0),
(41, 10, 1, '2021-11-10', 1, 1),
(42, 10, 2, '2021-11-10', 0, 0),
(43, 10, 3, '2021-11-10', 0, 0),
(44, 10, 4, '2021-11-10', 0, 0),
(45, 10, 5, '2021-11-10', 0, 0),
(46, 10, 6, '2021-11-10', 0, 0),
(47, 10, 7, '2021-11-10', 0, 0),
(48, 10, 8, '2021-11-10', 0, 0),
(49, 10, 9, '2021-11-10', 0, 0),
(50, 10, 10, '2021-11-10', 0, 0),
(51, 9, 1, '2021-10-10', 1, 1),
(52, 9, 2, '2021-10-10', 0, 0),
(53, 9, 3, '2021-10-10', 0, 0),
(54, 9, 4, '2021-10-10', 0, 0),
(55, 9, 5, '2021-10-10', 0, 0),
(56, 9, 6, '2021-10-10', 0, 0),
(57, 9, 7, '2021-10-10', 0, 0),
(58, 9, 8, '2021-10-10', 0, 0),
(59, 9, 9, '2021-10-10', 0, 0),
(60, 9, 10, '2021-10-10', 0, 0),
(61, 7, 1, '2021-08-10', 1, 1),
(62, 7, 2, '2021-08-10', 0, 0),
(63, 7, 3, '2021-08-10', 0, 0),
(64, 7, 4, '2021-08-10', 0, 0),
(65, 7, 5, '2021-08-10', 0, 0),
(66, 7, 6, '2021-08-10', 0, 0),
(67, 7, 7, '2021-08-10', 0, 0),
(68, 7, 8, '2021-08-10', 0, 0),
(69, 7, 9, '2021-08-10', 0, 0),
(70, 7, 10, '2021-08-10', 0, 0),
(71, 14, 1, '2022-03-10', 1, 1),
(72, 14, 2, '2022-03-10', 0, 0),
(73, 14, 3, '2022-03-10', 0, 0),
(74, 14, 4, '2022-03-10', 0, 0),
(75, 14, 5, '2022-03-10', 0, 0),
(76, 14, 6, '2022-03-10', 0, 0),
(77, 14, 7, '2022-03-10', 0, 0),
(78, 14, 8, '2022-03-10', 0, 0),
(79, 14, 9, '2022-03-10', 0, 0),
(80, 14, 10, '2022-03-10', 0, 0),
(81, 11, 1, '2021-12-10', 1, 1),
(82, 11, 2, '2021-12-10', 0, 0),
(83, 11, 3, '2021-12-10', 0, 0),
(84, 11, 4, '2021-12-10', 0, 0),
(85, 11, 5, '2021-12-10', 0, 0),
(86, 11, 6, '2021-12-10', 0, 0),
(87, 11, 7, '2021-12-10', 0, 0),
(88, 11, 8, '2021-12-10', 0, 0),
(89, 11, 9, '2021-12-10', 0, 0),
(90, 11, 10, '2021-12-10', 0, 0),
(91, 6, 1, '2021-07-10', 1, 1),
(92, 6, 2, '2021-07-10', 0, 0),
(93, 6, 3, '2021-07-10', 0, 0),
(94, 6, 4, '2021-07-10', 0, 0),
(95, 6, 5, '2021-07-10', 0, 0),
(96, 6, 6, '2021-07-10', 0, 0),
(97, 6, 7, '2021-07-10', 0, 0),
(98, 6, 8, '2021-07-10', 0, 0),
(99, 6, 9, '2021-07-10', 0, 0),
(100, 6, 10, '2021-07-10', 0, 0),
(101, 12, 1, '2022-01-10', 1, 1),
(102, 12, 2, '2022-01-10', 0, 0),
(103, 12, 3, '2022-01-10', 0, 0),
(104, 12, 4, '2022-01-10', 0, 0),
(105, 12, 5, '2022-01-10', 0, 0),
(106, 12, 6, '2022-01-10', 0, 0),
(107, 12, 7, '2022-01-10', 0, 0),
(108, 12, 8, '2022-01-10', 0, 0),
(109, 12, 9, '2022-01-10', 0, 0),
(110, 12, 10, '2022-01-10', 0, 0),
(111, 17, 1, '2020-03-10', 1, 1),
(112, 17, 2, '2020-03-10', 0, 0),
(113, 17, 3, '2020-03-10', 0, 0),
(114, 17, 4, '2020-03-10', 0, 0),
(115, 17, 5, '2020-03-10', 0, 0),
(116, 17, 6, '2020-03-10', 0, 0),
(117, 17, 7, '2020-03-10', 0, 0),
(118, 17, 8, '2020-03-10', 0, 0),
(119, 17, 9, '2020-03-10', 0, 0),
(120, 17, 10, '2020-03-10', 0, 0),
(121, 17, 11, '2020-03-10', 0, 0),
(122, 13, 1, '2022-02-10', 1, 1),
(123, 13, 2, '2022-02-10', 0, 0),
(124, 13, 3, '2022-02-10', 0, 0),
(125, 13, 4, '2022-02-10', 0, 0),
(126, 13, 5, '2022-02-10', 0, 0),
(127, 13, 6, '2022-02-10', 0, 0),
(128, 13, 7, '2022-02-10', 0, 0),
(129, 13, 8, '2022-02-10', 0, 0),
(130, 13, 9, '2022-02-10', 0, 0),
(131, 13, 10, '2022-02-10', 0, 0),
(132, 13, 11, '2022-02-10', 0, 0),
(133, 19, 1, '2020-05-10', 1, 1),
(134, 19, 2, '2020-05-10', 0, 0),
(135, 19, 3, '2020-05-10', 0, 0),
(136, 19, 4, '2020-05-10', 0, 0),
(137, 19, 5, '2020-05-10', 0, 0),
(138, 19, 6, '2020-05-10', 0, 0),
(139, 19, 7, '2020-05-10', 0, 0),
(140, 19, 8, '2020-05-10', 0, 0),
(141, 19, 9, '2020-05-10', 0, 0),
(142, 19, 10, '2020-05-10', 0, 0),
(143, 19, 11, '2020-05-10', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sm_complaint`
--

CREATE TABLE `sm_complaint` (
  `sm_c_id` int(10) NOT NULL,
  `sm_u_id` int(10) NOT NULL,
  `sm_u_title` varchar(20) NOT NULL,
  `sm_u_desc` text NOT NULL,
  `sm_u_c_type` varchar(20) NOT NULL,
  `sm_u_status` int(10) NOT NULL,
  `sm_u_r_date` date NOT NULL,
  `sm_u_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_complaint`
--

INSERT INTO `sm_complaint` (`sm_c_id`, `sm_u_id`, `sm_u_title`, `sm_u_desc`, `sm_u_c_type`, `sm_u_status`, `sm_u_r_date`, `sm_u_c_date`) VALUES
(1, 1, 'clean', '3rd floor clean', 'Repair', 1, '2022-03-25', '2022-03-25'),
(2, 1, 'camera request', 'A wing camera are not working', 'Repair', 1, '2022-03-27', '2022-03-27'),
(3, 5, 'lost', 'my heel is lost please check the camera', 'Lost', 1, '2022-03-27', '2022-03-27'),
(4, 1, 'clean', 'd wing parking clear', 'Clean', 1, '2022-03-28', '2022-03-28'),
(5, 1, 'clean', 'e wing floor clean', 'Clean', 0, '2022-03-28', '2022-03-28'),
(6, 1, 'wallet', 'my wallet is lost that is black colour', 'Lost', 0, '2022-03-31', '2022-03-31'),
(7, 1, 'icard', 'my icard lost from cm ', 'Lost', 1, '2022-03-31', '2022-03-31'),
(8, 1, 'lost wallet', 'my wallet is lost today', 'Lost', 1, '2022-03-31', '2022-03-31'),
(9, 1, 'repair ', 'repair a public washroom of society', 'Repair', 0, '2022-05-12', '2022-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `sm_event`
--

CREATE TABLE `sm_event` (
  `sm_e_id` int(10) NOT NULL,
  `sm_e_title` varchar(20) NOT NULL,
  `sm_e_desc` text NOT NULL,
  `sm_e_start_date` date NOT NULL,
  `sm_e_end_date` date NOT NULL,
  `sm_e_status` int(10) NOT NULL,
  `sm_e_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_event`
--

INSERT INTO `sm_event` (`sm_e_id`, `sm_e_title`, `sm_e_desc`, `sm_e_start_date`, `sm_e_end_date`, `sm_e_status`, `sm_e_c_date`) VALUES
(1, 'Fire Safety Programm', 'The goal of a Fire Safety Program is to mitigate the risk of fire that has the potential to result in property damage and personal injury. This is achieved through: Compliance with applicable fire safety codes, standards, and regulations. Providing fire safety education and training.', '2020-12-20', '2020-12-25', 1, '2022-03-05'),
(2, 'Blood Donation Camp ', 'The purpose to organize a blood donation camp is to motivate people to donate blood and social works. The purpose of blood donation camp to select a suitable donor whose blood will be safe to the recipient and who himself shall not in any way be harmed by blood donation.', '2021-01-02', '2021-01-10', 1, '2022-03-29'),
(3, 'kite flying', 'The tradition of kite flying is for a healthy exposure in the early morning Sun. These initial rays are healthy and a good source of Vitamin D. It is also considered to be good for skin and helps in fighting many infections and sickness caused by the chilly winter winds.', '2021-01-14', '2021-01-14', 1, '2022-03-05'),
(4, 'Holi Celebration', 'The Holi festival commemorates the victory of good over evil, notably the burning and destruction of a demoness named Holika. This was made possible with the help of the Hindu god of preservation, Lord Vishnu.', '2021-03-29', '2021-03-29', 1, '2022-03-05'),
(5, 'World EnvironmentDay', 'World Environment Day is observed on June 5 every year. The purpose of World Environment Day is to spread awareness about the threat to the environment due to rising pollution levels and climate change.', '2021-06-05', '2021-06-05', 1, '2022-03-05'),
(6, 'InternationalYogaDay', 'Yoga means asana to create the perfect balance of body, mind, and soul. Yoga is not just 1 posture or exercise, it is a complete science which Indian people have been using for centuries.', '2021-06-21', '2021-06-21', 1, '2022-03-05'),
(7, 'Ganesh Chaturthi', 'Ganesh Chaturthi, also called Vinayaka Chaturthi, in Hinduism, 10-day festival marking the birth of the elephant-headed deity Ganesha, the god of prosperity and wisdom. It begins on the fourth day (chaturthi) of the month of Bhadrapada (August–September), the sixth month of the Hindu calendar', '2021-10-10', '2021-10-21', 1, '2022-03-06'),
(8, 'World Aids day', 'he theme for World AIDS Day 2021 is “End inequalities. End AIDS. End Pandemics”. The day focuses on the increasing inequalities & inequities in access to the healthcare services for HIV due to Covid-19.', '2021-12-01', '2021-12-01', 1, '2022-03-06'),
(9, 'New Year Celebration', 'It symbolizes motivation for many new beginnings. Another new 365-day journey begins with the New Year eve being the first day. Though we live the same life with just a set of new resolutions made to break later, we tend to believe that it is a new start', '2021-12-31', '2022-01-01', 1, '2022-03-06'),
(10, 'Makar Sankranti ', ' Makar Sankranti festival is known by the name of Uttarayan which is one of the major festivities in the state. Kite flying is the prime attraction of this day. Undhiyu and Chikkis are prepared on this festival and people relish it heartily', '2022-01-14', '2022-01-14', 1, '2022-03-06'),
(11, ' Republic Day', 'It symbolizes motivation for many new beginnings. Another new 365-day journey begins with the New Year eve being the first day. Though we live the same life with just a set of new resolutions made to break later, we tend to believe that it is a new start', '2022-01-26', '2022-01-26', 1, '2022-03-06'),
(12, 'Holi Celebration', 'Enjoy the celebration by dancing in the colors to the beat of the dholak. Sing Holi songs and let your body move to the beat while you celebrate the coming of spring. Eat and drink traditional Holi delicacies. A great way to celebrate Holi is with delicious traditional Indian meals.', '2022-03-18', '2022-03-18', 0, '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `sm_expense_detail`
--

CREATE TABLE `sm_expense_detail` (
  `sm_e_d_id` int(10) NOT NULL,
  `e_t_id` int(10) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `sm_e_amount` int(10) NOT NULL,
  `sm_e_desc` text NOT NULL,
  `sm_e_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_expense_detail`
--

INSERT INTO `sm_expense_detail` (`sm_e_d_id`, `e_t_id`, `e_name`, `sm_e_amount`, `sm_e_desc`, `sm_e_c_date`) VALUES
(1, 4, 'Building A Camera Repair', 500, 'Camera Repair Of A wing', '2022-03-06'),
(2, 2, 'water bill ', 3000, ' water bill wing A ', '0000-00-00'),
(3, 2, 'water bill ', 3000, 'water bill wing b', '2022-03-06'),
(4, 2, 'water bill ', 3000, 'water bill wing C', '2022-03-06'),
(5, 3, 'lift repair ', 800, 'lift repair for wing d', '2022-03-06'),
(6, 5, 'fire equipment', 20000, 'fire equipment for all wing', '2022-03-06'),
(7, 1, 'electricity bill', 10000, 'electricity bill', '2022-03-06'),
(8, 2, 'water bill ', 3000, 'water bill for wing d', '2022-03-06'),
(9, 4, 'camera repair', 500, 'camera repair wing e', '2022-03-06'),
(10, 3, 'lift repair ', 300, 'lift repair wing f', '2022-03-06'),
(11, 1, 'light bill', 400, 'light bill reapir', '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `sm_maintance`
--

CREATE TABLE `sm_maintance` (
  `sm_m_id` int(20) NOT NULL,
  `sm_m_y` varchar(30) NOT NULL,
  `sm_m_amount` int(30) NOT NULL,
  `sm_m_month` varchar(30) NOT NULL,
  `sm_m_year` varchar(30) NOT NULL,
  `sm_m_status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_maintance`
--

INSERT INTO `sm_maintance` (`sm_m_id`, `sm_m_y`, `sm_m_amount`, `sm_m_month`, `sm_m_year`, `sm_m_status`) VALUES
(1, '2021-01', 500, '01', '2021', 1),
(2, '2021-02', 600, '02', '2021', 1),
(3, '2021-03', 300, '03', '2021', 1),
(4, '2021-04', 500, '04', '2021', 1),
(5, '2021-05', 600, '05', '2021', 1),
(6, '2021-06', 350, '06', '2021', 1),
(7, '2021-07', 1000, '07', '2021', 1),
(8, '2021-08', 700, '08', '2021', 1),
(9, '2021-09', 500, '09', '2021', 1),
(10, '2021-10', 1000, '10', '2021', 1),
(11, '2021-11', 500, '11', '2021', 1),
(12, '2021-12', 500, '12', '2021', 1),
(13, '2022-01', 1000, '01', '2022', 1),
(14, '2022-02', 500, '02', '2022', 1),
(17, '2020-02', 500, '02', '2020', 1),
(18, '2019-02', 500, '02', '2019', 1),
(19, '2020-04', 300, '04', '2020', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sm_notification`
--

CREATE TABLE `sm_notification` (
  `sm_n_id` int(10) NOT NULL,
  `sm_n_title` varchar(30) NOT NULL,
  `sm_n_detail` text NOT NULL,
  `sm_n_pic` text NOT NULL,
  `sm_n_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_notification`
--

INSERT INTO `sm_notification` (`sm_n_id`, `sm_n_title`, `sm_n_detail`, `sm_n_pic`, `sm_n_date`) VALUES
(19, 'meeting', '7:30 meeting will be held   \r\nhttps://meet.google.com/sjt-qrbn-edy', 'dss_pic/google-meet-logo.png', '2022-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `sm_user`
--

CREATE TABLE `sm_user` (
  `u_id` int(10) NOT NULL,
  `w_id` int(10) NOT NULL,
  `u_r_id` int(10) NOT NULL,
  `u_flat_no` varchar(30) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_mobile` varchar(50) NOT NULL,
  `u_gender` varchar(20) NOT NULL,
  `u_t_member` int(10) NOT NULL,
  `u_dob` date NOT NULL,
  `u_email` varchar(30) NOT NULL,
  `u_pwd` text NOT NULL,
  `u_pic` text NOT NULL,
  `u_t_v_no` int(10) NOT NULL,
  `u_f_v_no` int(10) NOT NULL,
  `u_status` int(10) NOT NULL,
  `u_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_user`
--

INSERT INTO `sm_user` (`u_id`, `w_id`, `u_r_id`, `u_flat_no`, `u_name`, `u_mobile`, `u_gender`, `u_t_member`, `u_dob`, `u_email`, `u_pwd`, `u_pic`, `u_t_v_no`, `u_f_v_no`, `u_status`, `u_c_date`) VALUES
(1, 1, 1, '202', 'Amar Joshi', '8758355555', 'Male', 4, '1999-03-20', 'ajoshi@gmail.com', 'joshi@123', 'dss_pic/admin.png', 2, 2, 1, '2022-03-05'),
(2, 3, 2, '404', 'Archita Bhatt', '9888072356', 'Female', 2, '1997-01-24', 'abhatt123i@gmail.com', 'bhatt@123', 'dss_pic/download.png', 3, 2, 1, '2022-03-05'),
(3, 3, 3, '307', 'Sahil rathod', '8976543476', 'Male', 6, '1987-03-07', 'srathod@gmail.com', 'rathod@123', 'dss_pic/apple-touch-icon-180x180.png', 4, 2, 1, '2022-03-05'),
(4, 4, 4, '505', 'Sonam Kapoor', '8976566553', 'Female', 8, '1999-09-08', 'skapoor@gmail.com', 'kapoor@123', 'dss_pic/download (1).png', 4, 4, 1, '2022-03-05'),
(5, 4, 5, '101', 'Archita Joshi', '8976545456', 'Female', 1, '1999-02-24', 'architai@gmail.com', '12345', 'dss_pic/images.jpg', 1, 1, 1, '2022-03-06'),
(6, 1, 5, '203', 'Amit shah', '8796545656', 'Male', 4, '1978-02-02', 'amit@gmail.com', 'amit123', 'dss_pic/admin.png', 1, 2, 1, '2022-03-06'),
(7, 3, 1, '202', 'ram', '9876768767', 'Male', 2, '1999-02-24', 'ajoshi@gmail.com', 'joshi@123', 'dss_pic/admin.png', 2, 2, 1, '2022-03-06'),
(8, 4, 4, '202', 'Ali Joshi', '7866836836', 'Female', 4, '1999-02-20', 'aoshi@gmail.com', '1234', 'dss_pic/images.jpg', 22, 1, 1, '2022-03-06'),
(9, 4, 4, '202', 'Archita Bhatt', '897656787', 'Female', 1, '1999-01-11', 'sss99@gmail.com', '123456789', 'dss_pic/download.png', 1, 1, 1, '2022-03-06'),
(10, 4, 5, '507', 'Nija Rajan', '897878786', 'Female', 2, '1998-06-06', 'rajan@gmail.com', 'rajan', 'dss_pic/images.jpg', 2, 1, 1, '2022-03-06'),
(11, 2, 1, '201', 'Sahil mohanty', '9876543276', 'Male', 3, '1999-09-24', 'sahil@gmail.com', 'sahil123', 'dss_pic/sss.jpg', 2, 1, 1, '2022-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `sm_user_role`
--

CREATE TABLE `sm_user_role` (
  `u_r_id` int(20) NOT NULL,
  `u_role` varchar(20) NOT NULL,
  `u_status` int(10) NOT NULL,
  `u_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_user_role`
--

INSERT INTO `sm_user_role` (`u_r_id`, `u_role`, `u_status`, `u_c_date`) VALUES
(1, 'Secretary ', 1, '2022-03-05'),
(2, 'President', 1, '2022-03-05'),
(3, 'Treasurer', 1, '2022-03-05'),
(4, 'Vice President', 0, '2022-03-05'),
(5, 'Memeber', 1, '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `sm_visitor`
--

CREATE TABLE `sm_visitor` (
  `sm_v_id` int(10) NOT NULL,
  `sm_v_name` varchar(20) NOT NULL,
  `sm_v_type` varchar(20) NOT NULL,
  `sm_v_contact` int(10) NOT NULL,
  `sm_v_guardname` varchar(20) NOT NULL,
  `u_id` int(10) NOT NULL,
  `sm_v_member` int(10) NOT NULL,
  `sm_v_time` time NOT NULL,
  `sm_v_status` int(10) NOT NULL,
  `sm_v_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_visitor`
--

INSERT INTO `sm_visitor` (`sm_v_id`, `sm_v_name`, `sm_v_type`, `sm_v_contact`, `sm_v_guardname`, `u_id`, `sm_v_member`, `sm_v_time`, `sm_v_status`, `sm_v_c_date`) VALUES
(1, 'nisha singh', '1', 2147483647, 'Ramesh jha ', 6, 5, '00:00:00', 1, '2022-03-27'),
(2, 'shanu jha', '3', 2147483647, 'Ramesh jha ', 8, 2, '12:30:00', 1, '2022-03-27'),
(3, 'sapna', '1', 2147483647, 'Ramesh jha ', 6, 2, '00:00:00', 1, '2022-03-27'),
(4, 'supriti', '2', 830583558, 'Ramesh jha ', 1, 2, '00:00:08', 1, '2022-03-27'),
(5, 'nisha', '1', 2147483647, 'Ramesh jha ', 9, 1, '00:00:08', 1, '2022-03-28'),
(6, 'pragya', '1', 832585454, 'Ramesh jha ', 3, 2, '00:00:08', 1, '2022-03-28'),
(7, 'sachin', '1', 909097868, 'Ramesh jha ', 4, 1, '00:00:08', 1, '2022-03-29'),
(8, 'sapna rao', '1', 2147483647, 'Ramesh jha ', 1, 2, '00:00:00', 1, '2022-03-31'),
(9, 'vaidhai patel', '1', 897879787, 'Rahul rai', 1, 2, '00:00:31', 1, '2022-03-31'),
(10, 'james', '1', 878686686, 'Rahul rai', 1, 1, '00:00:08', 1, '2022-03-31'),
(11, 'jenil', '2 ', 896898776, 'Rahul rai', 4, 12, '00:00:31', 1, '2022-03-31'),
(12, 'shir', '2', 2147483647, 'Kriti Tiwari', 1, 1, '00:00:10', 1, '2022-05-12'),
(13, 'pragya', '2', 2147483647, 'Kriti Tiwari', 11, 1, '00:00:12', 1, '2022-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `sm_wing`
--

CREATE TABLE `sm_wing` (
  `w_id` int(10) NOT NULL,
  `w_name` varchar(30) NOT NULL,
  `w_status` int(10) NOT NULL,
  `w_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_wing`
--

INSERT INTO `sm_wing` (`w_id`, `w_name`, `w_status`, `w_c_date`) VALUES
(1, 'A', 1, '2022-03-05'),
(2, 'B', 1, '2022-03-05'),
(3, 'C', 1, '2022-03-05'),
(4, 'D', 1, '2022-03-05'),
(5, 'E', 0, '2022-03-05'),
(6, 'F', 0, '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `sm_wkstaff_salary`
--

CREATE TABLE `sm_wkstaff_salary` (
  `sm_s_s_id` int(10) NOT NULL,
  `s_w_s_id` int(10) NOT NULL,
  `sm_s_s_month` int(20) NOT NULL,
  `sm_s_s_year` int(20) NOT NULL,
  `sm_s_p_date` date NOT NULL,
  `s_w_p_amount` int(20) NOT NULL,
  `s_w_attain_day` int(10) NOT NULL,
  `sm_s_s_status` int(10) NOT NULL,
  `sm_s_s_c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_wkstaff_salary`
--

INSERT INTO `sm_wkstaff_salary` (`sm_s_s_id`, `s_w_s_id`, `sm_s_s_month`, `sm_s_s_year`, `sm_s_p_date`, `s_w_p_amount`, `s_w_attain_day`, `sm_s_s_status`, `sm_s_s_c_date`) VALUES
(1, 5, 1, 2021, '2021-02-01', 5000, 30, 1, '2022-03-06'),
(2, 3, 1, 2021, '2021-02-01', 4000, 20, 1, '2022-03-06'),
(3, 1, 3, 2021, '2021-04-01', 5000, 24, 1, '2022-03-06'),
(4, 3, 4, 2021, '2021-05-04', 5000, 24, 1, '2022-03-06'),
(5, 6, 7, 2021, '2021-08-07', 5000, 24, 1, '2022-03-06'),
(6, 6, 8, 2021, '2021-09-01', 5000, 24, 1, '2022-03-06'),
(7, 7, 9, 2021, '2021-10-01', 5000, 24, 1, '2022-03-06'),
(8, 1, 10, 2021, '2021-11-01', 5000, 20, 1, '2022-03-06'),
(9, 3, 12, 2021, '2022-01-01', 5000, 24, 1, '2022-03-06'),
(10, 1, 12, 2021, '2022-01-01', 5000, 24, 1, '2022-03-06'),
(11, 3, 1, 2022, '2022-02-01', 5000, 24, 1, '2022-03-06'),
(12, 1, 1, 2021, '2022-02-01', 5000, 24, 1, '2022-03-06'),
(13, 3, 2, 2022, '2022-03-01', 5000, 24, 0, '2022-03-06'),
(14, 1, 2, 2022, '2022-03-01', 5000, 24, 0, '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `sm_wk_staff`
--

CREATE TABLE `sm_wk_staff` (
  `s_w_s_id` int(10) NOT NULL,
  `w_s_name` varchar(30) NOT NULL,
  `w_s_address` text NOT NULL,
  `w_s_contact` varchar(10) NOT NULL,
  `w_email_id` varchar(40) NOT NULL,
  `w_s_pic` text NOT NULL,
  `w_s_status` int(10) NOT NULL,
  `w_s_salary` int(30) NOT NULL,
  `w_s_c_date` date NOT NULL,
  `w_s_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sm_wk_staff`
--

INSERT INTO `sm_wk_staff` (`s_w_s_id`, `w_s_name`, `w_s_address`, `w_s_contact`, `w_email_id`, `w_s_pic`, `w_s_status`, `w_s_salary`, `w_s_c_date`, `w_s_role`) VALUES
(1, 'Kriti Tiwari', 'B 30 SWASTIK colony surat ', '987655333', 'rupamohanty002@gmail.com', 'download (1).png', 1, 7000, '2022-03-06', 'sweeper'),
(3, 'Ramesh jha ', '202  KRATIK AVENUE ', '908675655', 'rameshjha@gmail.com', 'download.jpg', 1, 5000, '2022-03-06', 'watchman'),
(5, 'Shalini rao', ' 306 Tusli park', '987654565', 'shalinirao@gmail.com', 'download.png', 1, 5000, '2022-03-06', 'sweeper'),
(6, 'Sham Trivedi', 'B 701 SWASTIK NAGAR', '914748364', 'shamtrivedi@gmail.com', 'download (1).png', 1, 5000, '2022-03-06', 'watchman'),
(7, 'Darmesh khila', '89 LAXHMI  NARGAR', '897654562', 'darmeshkhila@gmail.com', 'download.jpg', 1, 50000, '2022-03-06', 'sweeper'),
(8, 'shivani rao', 'B 101 RAJVIR PARK', '9821474838', 'shivanirao@gmail.com', 'images.jpg', 0, 5000, '2022-03-06', 'sweeper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense_type`
--
ALTER TABLE `expense_type`
  ADD PRIMARY KEY (`e_t_id`);

--
-- Indexes for table `extra_income`
--
ALTER TABLE `extra_income`
  ADD PRIMARY KEY (`e_i_id`);

--
-- Indexes for table `maint_user`
--
ALTER TABLE `maint_user`
  ADD PRIMARY KEY (`m_u_id`),
  ADD KEY `sm_m_id` (`sm_m_id`);

--
-- Indexes for table `sm_complaint`
--
ALTER TABLE `sm_complaint`
  ADD PRIMARY KEY (`sm_c_id`);

--
-- Indexes for table `sm_event`
--
ALTER TABLE `sm_event`
  ADD PRIMARY KEY (`sm_e_id`);

--
-- Indexes for table `sm_expense_detail`
--
ALTER TABLE `sm_expense_detail`
  ADD PRIMARY KEY (`sm_e_d_id`);

--
-- Indexes for table `sm_maintance`
--
ALTER TABLE `sm_maintance`
  ADD PRIMARY KEY (`sm_m_id`);

--
-- Indexes for table `sm_notification`
--
ALTER TABLE `sm_notification`
  ADD PRIMARY KEY (`sm_n_id`);

--
-- Indexes for table `sm_user`
--
ALTER TABLE `sm_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `sm_user_role`
--
ALTER TABLE `sm_user_role`
  ADD PRIMARY KEY (`u_r_id`);

--
-- Indexes for table `sm_visitor`
--
ALTER TABLE `sm_visitor`
  ADD PRIMARY KEY (`sm_v_id`);

--
-- Indexes for table `sm_wing`
--
ALTER TABLE `sm_wing`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `sm_wkstaff_salary`
--
ALTER TABLE `sm_wkstaff_salary`
  ADD PRIMARY KEY (`sm_s_s_id`) USING BTREE;

--
-- Indexes for table `sm_wk_staff`
--
ALTER TABLE `sm_wk_staff`
  ADD PRIMARY KEY (`s_w_s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense_type`
--
ALTER TABLE `expense_type`
  MODIFY `e_t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extra_income`
--
ALTER TABLE `extra_income`
  MODIFY `e_i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maint_user`
--
ALTER TABLE `maint_user`
  MODIFY `m_u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `sm_complaint`
--
ALTER TABLE `sm_complaint`
  MODIFY `sm_c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sm_event`
--
ALTER TABLE `sm_event`
  MODIFY `sm_e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sm_expense_detail`
--
ALTER TABLE `sm_expense_detail`
  MODIFY `sm_e_d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sm_maintance`
--
ALTER TABLE `sm_maintance`
  MODIFY `sm_m_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sm_notification`
--
ALTER TABLE `sm_notification`
  MODIFY `sm_n_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sm_user`
--
ALTER TABLE `sm_user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sm_user_role`
--
ALTER TABLE `sm_user_role`
  MODIFY `u_r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sm_visitor`
--
ALTER TABLE `sm_visitor`
  MODIFY `sm_v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sm_wing`
--
ALTER TABLE `sm_wing`
  MODIFY `w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sm_wkstaff_salary`
--
ALTER TABLE `sm_wkstaff_salary`
  MODIFY `sm_s_s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sm_wk_staff`
--
ALTER TABLE `sm_wk_staff`
  MODIFY `s_w_s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
