-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2022 at 12:22 PM
-- Server version: 5.7.37
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mouvemen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` bigint(20) NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `name_en`, `name_ar`, `name_fr`) VALUES
(2, 'test', 'test 1 43', 'test 3 55');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` bigint(20) NOT NULL,
  `page_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `btn_title_ar` varchar(255) DEFAULT NULL,
  `btn_title_en` varchar(255) DEFAULT NULL,
  `btn_title_fr` varchar(255) DEFAULT NULL,
  `btn_URL` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `page_id`, `image`, `title_ar`, `title_en`, `title_fr`, `btn_title_ar`, `btn_title_en`, `btn_title_fr`, `btn_URL`, `orders`) VALUES
(1, 1, '99312500.png', '', 'We act for the development of human beings, every human being and all of the human being', '', '', '', '', '', 0),
(2, 14, '95819551.png', '', 'Volunteer', '', '', 'Volunteer', '', '', 0),
(3, 15, '72733857.png', '', 'Donate', '', '', 'Donate', '', '', 0),
(4, 16, '63373837.png', '', 'Contact Us', '', '', 'on', '', '', 0),
(5, 2, '88241861.jpg', '', 'for more human society', '', '', '', '', '', 0),
(6, 4, '60789086.png', '', 'Founders ', '', '', 'Founders of Mouvement Social', '', '', 0),
(8, 8, '82348244.png', '', 'History', '', '', 'History', '', '', 0),
(9, 9, '26728309.png', '', 'MS Programs', '', '', 'MS Programs', '', '', 0),
(10, 17, '93928896.png', 'Title Comes<br>Here', 'Title Comes<br>Here', 'Title Comes<br>Here', '', '', '', '', 0),
(11, 10, '27804074.png', '', 'Annual Report', '', '', 'Annual  Report', '', '', 0),
(12, 11, '16374033.png', '', 'MS Library', '', '', 'MS Library', '', '', 0),
(13, 18, '88361122.png', '', '', '', '', '', '', '', 0),
(14, 13, '84809723.png', '', 'Careers & Calls', '', '', 'Careers & Calls', '', '', 0),
(15, 19, '17786330.png', 'Title Comes<br>Here', 'MS Team', 'Title Comes<br>Here', '', 'MS Team', '', '', 0),
(16, 23, '23858665.png', '', 'MS action', '', '', '', '', '', 0),
(17, 25, '86269644.jpg', 'Title Comes<br>Here', 'MS Centers', 'Title Comes<br>Here', '', 'MS Centers', '', '', 0),
(19, 21, '80369407.png', '', 'MS Values', '', '', 'MS Values', '', '', 0),
(20, 20, '79306616.png', '', 'MS Values', '', '', 'MS Values', '', '', 0),
(21, 5, '11488447.png', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `calls_id` bigint(20) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `description_ar` longtext,
  `description_en` longtext,
  `description_fr` longtext,
  `dates` datetime DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`calls_id`, `title_ar`, `title_en`, `title_fr`, `description_ar`, `description_en`, `description_fr`, `dates`, `orders`, `is_active`) VALUES
(1, 'Translations', 'Translations', 'Translations', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '2021-03-23 16:10:00', 1, 1),
(2, 'Video Production', 'Video Production', 'Video Production', 'الجديد من التقاط لقطة الشاشة', 'Highlight some of the fundraising', '&nbsp;We&rsquo;re worldwide non-profit charity ogranization.', '2021-03-31 11:30:00', 1, 1),
(3, 'Supply of educational kits', 'Supply of educational kits', 'Supply of educational kits', '<br />', '<br />', '<br />', '2021-02-09 08:30:00', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `calls_docs`
--

CREATE TABLE `calls_docs` (
  `calls_docs_id` bigint(20) NOT NULL,
  `calls_id` bigint(20) DEFAULT NULL,
  `doc_title_ar` varchar(255) DEFAULT NULL,
  `doc_title_en` varchar(255) DEFAULT NULL,
  `doc_title_fr` varchar(255) DEFAULT NULL,
  `doc_ar` varchar(255) DEFAULT NULL,
  `doc_en` varchar(255) DEFAULT NULL,
  `doc_fr` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calls_docs`
--

INSERT INTO `calls_docs` (`calls_docs_id`, `calls_id`, `doc_title_ar`, `doc_title_en`, `doc_title_fr`, `doc_ar`, `doc_en`, `doc_fr`, `orders`, `is_active`) VALUES
(1, 2, 'الجديد من التقاط لقطة الشاشة', 'Highlight some of the fundraising', 'Highlight some of the fundraising', '1529_blog-1-2.jpg', '5507_icons for website-04_9354.png', '3589_team-1-1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `centers_id` bigint(20) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL,
  `address_ar` varchar(1000) DEFAULT NULL,
  `address_en` varchar(1000) DEFAULT NULL,
  `address_fr` varchar(1000) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `type` bigint(20) DEFAULT NULL,
  `area_id` bigint(20) DEFAULT NULL,
  `text_ar` longtext,
  `text_en` longtext,
  `text_fr` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`centers_id`, `name_ar`, `name_en`, `name_fr`, `address_ar`, `address_en`, `address_fr`, `phone`, `fax`, `email`, `orders`, `type`, `area_id`, `text_ar`, `text_en`, `text_fr`) VALUES
(7, 'Badaro (Head office)', 'Badaro (Head office)', 'Badaro (Head office)', 'Badaro, main road, Mouvement Social bldg., Beirut.', 'Badaro, main road, Mouvement Social bldg., Beirut.', 'Badaro, main road, Mouvement Social bldg., Beirut.', '+961 1 381 879 - +961 1 390 335', '+961 1 387 736', 'msl@mouvementsocial.org', 1, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(8, 'Ghobeyri', 'Ghobeyri', 'Ghobeyri', 'Msharafieh intersection, Al Shahidayn Street, behind &quot;Boutiques Terminal&quot;, 1st floor.<br /> Person in charge: Mirna Kanj<br /> Activities: Education; Youth economic &amp; social empowerment;  Rehabilitation and re-integration of juveniles in conflict with the law.', 'Msharafieh intersection, Al Shahidayn Street, behind &quot;Boutiques Terminal&quot;, 1st floor.<br /><br />', 'Msharafieh intersection, Al Shahidayn Street, behind &quot;Boutiques Terminal&quot;, 1st floor.<br /> Person in charge: Mirna Kanj<br /> Activities: Education; Youth economic &amp; social empowerment;  Rehabilitation and re-integration of juveniles in conflict with the law.', '+961 1 543 001', '', 'c.ghobeyri@mouvementsocial.org', 2, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(9, 'Nabatieh', 'Nabatieh', 'Nabatieh', 'Kamel el Sabbah street, Mouyin Jaber bldg., 2nd floor, in front of Leila Nassar School.<br /><br />', 'Kamel el Sabbah street, Mouyin Jaber bldg., 2nd floor, in front of Leila Nassar School.<br /><br />', 'Kamel el Sabbah street, Mouyin Jaber bldg., 2nd floor, in front of Leila Nassar School.<br /> Person in charge: Najat Ibrahim<br /> Activities: Education; Youth economic &amp; social empowerment.', '+961 7 768 088 - +961 70 114 131', '', 'c.nabatiye@mouvementsocial.org', 3, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(10, 'Second Nabatieh Center', 'Second Nabatieh Center', 'Second Nabatieh Center', 'Center Khayyat, 1st floor, in front of Fransabank.<br /> Person in charge: Najat Ibrahim <br /> Activities: Education; Youth economic &amp; social empowerment.', 'Center Khayyat, 1st floor, in front of Fransabank.<br /><br />', 'Center Khayyat, 1st floor, in front of Fransabank.<br /> Person in charge: Najat Ibrahim <br /> Activities: Education; Youth economic &amp; social empowerment.', '+961 7 761 790 - +961 70 114 131', '', 'c.nabatiye@mouvementsocial.org', 4, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(11, 'Akkar1', 'Akkar1', 'Akkar', 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg., 1st floor<br /> Person in charge: Amal Ibrahim<br /> Activities: Protection.<br />', 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg., 1st floor<br />test<br /><br />', 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg., 1st floor<br /> Person in charge: Amal Ibrahim<br /> Activities: Protection.', '+961 6 691 861 - +961 70 109 801', '', 'c.akkar@mouvementsocial.org', 5, 2, 2, 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg., 1st floor&nbsp;', 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg.,&nbsp;', 'Halba, Cheikh Mohammed intersection, Nicolas Khoury bldg., 1st floor Person in charge: Amal Ibrahim Activities: Protection.'),
(12, 'Second Akkar Center', 'Second Akkar Center', 'Second Akkar Center', 'Halba, Cheikh Mohammed Street, near Warrak Gas Station, above Agronord for Agriculture, 1st and 2nd Floor<br /> Activities: Education; Youth economic &amp; social empowerment.', 'Halba, Cheikh Mohammed Street, above Agronord for Agriculture, 1st and 2nd Floor<br /><br />', 'Halba, Cheikh Mohammed Street, near Warrak Gas Station, above Agronord for Agriculture, 1st and 2nd Floor<br /> Activities: Education; Youth economic &amp; social empowerment.', '+961 6 691 861 - +961 70 109 801', '', 'c.akkar@mouvementsocial.org', 6, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(13, 'Tripoli', 'Tripoli', 'Tripoli', 'Al Nejmeh roundabout, Al Jamal bldg., above Badr Ghanem library, 1st floor.<br /> Person in charge: Mira El Bacha<br /> Activities: Education; Protection; Youth economic &amp; social empowerment; Rehabilitation and re-integration of juveniles in conflict with the law.', 'Al Nejmeh roundabout, Al Jamal bldg., above Badr Ghanem library, 1st floor.<br /><br />', 'Al Nejmeh roundabout, Al Jamal bldg., above Badr Ghanem library, 1st floor.<br /> Person in charge: Mira El Bacha<br /> Activities: Education; Protection; Youth economic &amp; social  empowerment; Rehabilitation and re-integration of juveniles in conflict  with the law.', '+961 6 431 979 - +961 71 623 047', '', 'c.tripoli@mouvementsocial.org <br> ', 7, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(14, 'Sin El Fil I', 'Sin El Fil I', 'Sin El Fil I', 'Railroad intersection, Al Jadid district, Mrs. Saad road, Hamwi bldg., 1st floor.<br /> Person in charge: Roula Tannous<br /> Activities: Education.', 'Railroad intersection, Al Jadid district, Mrs. Saad road, Hamwi bldg., 1st floor.<br /><br />', 'Railroad intersection, Al Jadid district, Mrs. Saad road, Hamwi bldg., 1st floor.<br /> Person in charge: Roula Tannous<br /> Activities: Education.', '+961 1 259 254 - +961 71 056 701', '', 'c.sinelfil@mouvementsocial.org <br> ', 8, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(15, 'Sin EL Fil II', 'Sin EL Fil II', 'Sin EL Fil II', 'Bourj Hammoud, Al Malaab Al Baladi road, in front of Kahel nursing home, Wahat Al Rajaa bldg.<br /> Person in charge: Imane Ajami<br /> Activities: Education; Protection; Youth economic &amp; social empowerment.', 'Bourj Hammoud, Al Malaab Al Baladi road, Wahat Al Rajaa bldg.<br /><br />', 'Bourj Hammoud, Al Malaab Al Baladi road, in front of Kahel nursing home, Wahat Al Rajaa bldg.<br /> Person in charge: Imane Ajami<br /> Activities: Education; Protection; Youth economic &amp; social empowerment.', '+961 1 259 253 - +961 70 109 197', '', 'c.bourjhamoud@mouvementsocial.org', 9, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(16, 'Jnah Center & Kindergarten', 'Jnah Center & Kindergarten', 'Jnah Center & Kindergarten', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br /> Person in charge: Mirna Kanj<br /> Activities: Education; Protection.', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br /><br />', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br />.', '+961 1 823 312', '', 'c.jnah@mouvementsocial.org', 10, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(17, 'Jnah Kindergarten (school)', 'Jnah Kindergarten (school)', 'Jnah Kindergarten (school)', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br /> Person in charge: Nadine Zein<br /> Activities: Education.', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br /><br />', 'Sultan Ibrahim district, Kataya-Noun carpentry intersection.<br /> Person in charge: Nadine Zein<br /> Activities: Education.', '+961 1 823 314 - +961 70 117 689', '', 'c.ecolejnah@mouvementsocial.org', 11, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(18, 'Saida', 'Saida', 'Saida', 'Rijal al Arbayine district, Masri bldg., Ground Floor.<br /> Person in charge: Salma Saoudi<br /> Activities: Youth economic &amp; social empowerment.', 'Rijal al Arbayine district, Masri bldg., Ground Floor.<br /><br />', 'Rijal al Arbayine district, Masri bldg., Ground Floor.<br /> Person in charge: Salma Saoudi<br /> Activities: Youth economic &amp; social empowerment.', '+961 70 109 837', '', 'c.saida@mouvementsocial.org', 12, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(19, 'Second Saida Center', 'Second Saida Center', 'Second Saida Center', 'Iskandarani Street, near Hammoud Hospital.<br /> Person in charge: Salma Saoudi<br /> Activities: Education; Protection; Youth economic &amp; social empowerment.', 'Iskandarani Street, near Hammoud Hospital.<br /><br />', 'Iskandarani Street, near Hammoud Hospital.<br /> Person in charge: Salma Saoudi<br /> Activities: Education; Protection; Youth economic &amp; social empowerment.', '+961 7 725 447 - +961 70 109 837', '', 'c.saida@mouvementsocial.org', 13, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(20, 'Zahle', 'Zahle', 'Zahle', 'Zahle, Hoch El Oumara street, Sakhet bldg., 3rd floor.<br />', 'Zahle, Hoch El Oumara street, Sakhet bldg., 3rd floor.', 'Zahle, Hoch El Oumara street, Sakhet bldg., 3rd floor.', '+961 70 483 855', '', 'c.zahle@mouvementsocial.org', 14, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(21, 'Kfarzabad', 'Kfarzabad', 'Kfarzabad', 'Ghassan Abou Faysal Bldg., ground floor, near to Ahel-Al-Raya restaurant.<br /> Person in charge: Carine Louis<br /> Activities: Education; Youth economic &amp; social empowerment; Rehabilitation and re-integration of juveniles in conflict with the law.', 'Ghassan Abou Faysal Bldg., ground floor, near to Ahel-Al-Raya restaurant.<br /><br />', 'Ghassan Abou Faysal Bldg., ground floor, near to Ahel-Al-Raya restaurant.<br /> Person in charge: Carine Louis<br /> Activities: Education; Youth economic &amp; social empowerment;  Rehabilitation and re-integration of juveniles in conflict with the law.', '+961 8 804 811 - +961 70 483 855', '', 'c.zahle@mouvementsocial.org', 15, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(22, 'Jdeidet El Fekha (Baalbeck)', 'Jdeidet El Fekha (Baalbeck)', 'Jdeidet El Fekha (Baalbeck)', 'Jdeidet El Fekha, Al Maalaka, Sayde Bechara Street, Khoury bldg. 1st floor.<br /> Person in charge: Hassan Zeineddine<br /> Activities: Education; Protection; Youth economic &amp; social empowerment', 'Jdeidet El Fekha, Al Maalaka, Sayde Bechara Street, Khoury bldg. 1st floor.<br /><br />', 'Jdeidet El Fekha, Al Maalaka, Sayde Bechara Street, Khoury bldg. 1st floor.<br /> Person in charge: Hassan Zeineddine<br /> Activities: Education; Protection; Youth economic &amp; social empowerment', '+961 70 382 758', '', 'c.fekha@mouvementsocial.org', 16, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(23, 'Roumieh Prison', 'Roumieh Prison', 'Roumieh Prison', 'Person in charge: Nada Abbani<br /> Activities: Rehabilitation and re-integration of juveniles in conflict with the law.', '', 'Person in charge: Nada Abbani<br /> Activities: Rehabilitation and re-integration of juveniles in conflict with the law.', '+961 1 878 302 - +961 70 299 617', '', 'n.abbani@mouvementsocial.org', 17, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;'),
(24, 'Barbar El Khazen Prison', 'Barbar El Khazen Prison', 'Barbar El Khazen Prison', 'Person in charge: Nada Abbani<br /> Activities: Rehabilitation of women in conflict with the law.', '', 'Person in charge: Nada Abbani<br /> Activities: Rehabilitation of women in conflict with the law.', '+961 1 867 945 - +961 70 299 617', '', 'n.abbani@mouvementsocial.org', 18, 2, 0, '&nbsp;', '&nbsp;', '&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `centers_type`
--

CREATE TABLE `centers_type` (
  `centers_type_id` bigint(20) NOT NULL,
  `centers_type_ar` varchar(255) DEFAULT NULL,
  `centers_type_en` varchar(255) DEFAULT NULL,
  `centers_type_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `centers_type`
--

INSERT INTO `centers_type` (`centers_type_id`, `centers_type_ar`, `centers_type_en`, `centers_type_fr`) VALUES
(1, 'Central Departments', 'Central Departments', 'Central Departments'),
(2, 'Centers', 'Centers', 'Centers');

-- --------------------------------------------------------

--
-- Table structure for table `cms_admin`
--

CREATE TABLE `cms_admin` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user_name` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cms_user_role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cms_admin`
--

INSERT INTO `cms_admin` (`admin_id`, `admin_name`, `user_name`, `password`, `email`, `cms_user_role_id`) VALUES
(16, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '', 1),
(21, 'Admin', 'mouvemen_admin', '4021a7f8f4229f5f4457dfdc6ffc91fc', '', 1),
(22, 'Mazen', 'Mazen', '827ccb0eea8a706c4c34a16891f84e7b', 'm.banna@multiframes.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_user_role`
--

CREATE TABLE `cms_user_role` (
  `cms_user_role_id` int(11) NOT NULL,
  `cms_user_type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cms_user_role`
--

INSERT INTO `cms_user_role` (`cms_user_role_id`, `cms_user_type_name`) VALUES
(1, 'Admin'),
(2, 'Sales');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_form_id` bigint(20) NOT NULL,
  `submitted_date_time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_form_id`, `submitted_date_time`, `ip`, `name`, `email_address`, `phone`, `subject`, `message`, `country`) VALUES
(1, '2021-03-18 10:16:40', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'edsa', 'uyi87tiy', ''),
(2, '2021-03-18 10:24:14', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'edsa', '5rfd', ''),
(3, '2021-03-18 10:24:30', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'edsa', '5rfd', ''),
(4, '2021-03-18 10:25:05', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'edsa', '76yt5f', ''),
(5, '2021-03-18 10:25:32', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'wre', 'ewrtwe', ''),
(6, '2021-03-18 10:26:03', '::1', 'Omar Jaber', '345@sdf.com', '12341341', 'sad', 'ads', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_us_id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `address_en` varchar(255) DEFAULT NULL,
  `address_fr` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `email`, `address_ar`, `address_en`, `address_fr`, `phone`, `fax`) VALUES
(1, 'msl@mouvementsocial.org', 'Badaro, main road, Mouvement Social bldg., Beirut.', 'Badaro, main road, Mouvement Social bldg., Beirut.', 'Badaro, main road, Mouvement Social bldg., Beirut.', '+961 1 381 879 - +961 1 390 335', '+961 1 387 736');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` bigint(20) NOT NULL,
  `currency_ar` varchar(255) DEFAULT NULL,
  `currency_en` varchar(255) DEFAULT NULL,
  `currency_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` bigint(20) NOT NULL,
  `programs_id` bigint(20) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `currency_id` bigint(20) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_id` bigint(20) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `payment_type` bigint(20) DEFAULT NULL,
  `status` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `name`, `image`, `URL`, `orders`) VALUES
(1, 'MS', '41105729.png', 'www.multiframes.com', 1),
(2, 'UNRWA', '48276918.jpg', 'www.multiframes.com', 1),
(3, 'UNHCR', '66075394.jpg', 'www.multiframes.com', 0),
(4, 'Save the children', '53409077.jpg', 'www.multiframes.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `finance_id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`finance_id`, `image`, `title_ar`, `title_en`, `title_fr`, `orders`) VALUES
(4, '49058077.jpg', 'Distribution of expenses per activity', 'Distribution of expenses per activity', 'Distribution of expenses per activity', 1),
(5, '16454492.jpg', 'Distribution of revenues per source', 'Distribution of revenues per source', 'Distribution of revenues per source', 2),
(6, '59228154.jpg', 'Distribution of foreign sources', 'Distribution of foreign sources', 'Distribution of foreign sources', 3),
(7, '75015758.jpg', 'Distribution of local sources', 'Distribution of local sources', 'Distribution of local sources', 4);

-- --------------------------------------------------------

--
-- Table structure for table `finance_statement`
--

CREATE TABLE `finance_statement` (
  `finance_statement_id` bigint(20) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `file_an` varchar(255) DEFAULT NULL,
  `file_en` varchar(255) DEFAULT NULL,
  `file_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finance_statement`
--

INSERT INTO `finance_statement` (`finance_statement_id`, `year`, `file_an`, `file_en`, `file_fr`) VALUES
(1, '2017', '5328_2017.pdf', '1534_2017.pdf', '6173_2017.pdf'),
(2, '2018', '2139_2018.pdf', '7515_2018.pdf', '4313_2018.pdf'),
(3, '2019', '9972_2019.pdf', '4537_2019.pdf', '8988_2019.pdf'),
(4, '2020', '2749_2020.pdf', '1456_2020.pdf', '9345_2020.pdf'),
(5, '2016-2018', '5951_2018.pdf', '8606_2018.pdf', '8554_2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `founders_id` bigint(20) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position_ar` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `position_fr` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `bio_ar` longtext,
  `bio_en` longtext,
  `bio_fr` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`founders_id`, `name_ar`, `name_en`, `name_fr`, `image`, `position_ar`, `position_en`, `position_fr`, `orders`, `bio_ar`, `bio_en`, `bio_fr`) VALUES
(1, 'Bishop Gregoire Haddad', 'Bishop Gregoire Haddad', 'Bishop Gregoire Haddad', '85912189.png', '', '', '', 1, 'Gr&eacute;goire Haddad was also, as mentioned, prominently known as Greek Catholic archbishop of Beirut, where he pursued a very personal and controversial ecclesiastic vocation. His thoughts and religious actions focused on humanizing the church, questioning centuries-old traditions, and creating new religious practices, all of which ended up by removing him, by the patriarch, from the archbishopric of Beirut, though Vatican authorities did not detect any wrongdoing incompatible with the catholic faith.  <br />\r\n<br />\r\nIn the context of his beliefs, Gr&eacute;goire Haddad has also been an advocate of Christian-Islamic dialogue, both from a religious point of view as well as from a societal perspective in the Lebanese context. He participated in many conferences in Lebanon and abroad around this topic. <br />\r\n<br />\r\nIn the same line of action, Gr&eacute;goire Haddad established in 1998 the &lsquo;Civil Society Movement&rsquo;, a political group which called for a regime not based on religious affiliation, both on the political scene and in personal and social matters. <br />\r\n<br />\r\nThese facets in Gr&eacute;goire&rsquo;s life and actions may seem to outside observers as separate vectors with no close relations among them. But for him, they were not only related, but serve, each from an angle, exactly the same and only cause that he fought for all his life: the cause of man, &ldquo;the only absolute value after God&rdquo;, as he used to say in his religious writings, elaborating further: Our objective is the &ldquo;Development of human beings, every human being and all of human being (all their sides: physical, spiritual, economic, educational, etc.).&rdquo; This is also the ultimate motto of Mouvement Social.', 'Gr&eacute;goire Haddad was also, as mentioned, prominently known as Greek  Catholic archbishop of Beirut, where he pursued a very personal and  controversial ecclesiastic vocation. His thoughts and religious actions  focused on humanizing the church, questioning centuries-old traditions,  and creating new religious practices, all of which ended up by removing  him, by the patriarch, from the archbishopric of Beirut, though Vatican  authorities did not detect any wrongdoing incompatible with the catholic  faith.  <br />\r\n<br />\r\nIn the context of his beliefs, Gr&eacute;goire Haddad has also been an advocate  of Christian-Islamic dialogue, both from a religious point of view as  well as from a societal perspective in the Lebanese context. He  participated in many conferences in Lebanon and abroad around this  topic. <br />\r\n<br />\r\nIn the same line of action, Gr&eacute;goire Haddad established in 1998 the  &lsquo;Civil Society Movement&rsquo;, a political group which called for a regime  not based on religious affiliation, both on the political scene and in  personal and social matters. <br />\r\n<br />\r\nThese facets in Gr&eacute;goire&rsquo;s life and actions may seem to outside  observers as separate vectors with no close relations among them. But  for him, they were not only related, but serve, each from an angle,  exactly the same and only cause that he fought for all his life: the  cause of man, &ldquo;the only absolute value after God&rdquo;, as he used to say in  his religious writings, elaborating further: Our objective is the  &ldquo;Development of human beings, every human being and all of human being  (all their sides: physical, spiritual, economic, educational, etc.).&rdquo;  This is also the ultimate motto of Mouvement Social.', 'Gr&eacute;goire Haddad was also, as mentioned, prominently known as Greek  Catholic archbishop of Beirut, where he pursued a very personal and  controversial ecclesiastic vocation. His thoughts and religious actions  focused on humanizing the church, questioning centuries-old traditions,  and creating new religious practices, all of which ended up by removing  him, by the patriarch, from the archbishopric of Beirut, though Vatican  authorities did not detect any wrongdoing incompatible with the catholic  faith.  <br />\r\n<br />\r\nIn the context of his beliefs, Gr&eacute;goire Haddad has also been an advocate  of Christian-Islamic dialogue, both from a religious point of view as  well as from a societal perspective in the Lebanese context. He  participated in many conferences in Lebanon and abroad around this  topic. <br />\r\n<br />\r\nIn the same line of action, Gr&eacute;goire Haddad established in 1998 the  &lsquo;Civil Society Movement&rsquo;, a political group which called for a regime  not based on religious affiliation, both on the political scene and in  personal and social matters. <br />\r\n<br />\r\nThese facets in Gr&eacute;goire&rsquo;s life and actions may seem to outside  observers as separate vectors with no close relations among them. But  for him, they were not only related, but serve, each from an angle,  exactly the same and only cause that he fought for all his life: the  cause of man, &ldquo;the only absolute value after God&rdquo;, as he used to say in  his religious writings, elaborating further: Our objective is the  &ldquo;Development of human beings, every human being and all of human being  (all their sides: physical, spiritual, economic, educational, etc.).&rdquo;  This is also the ultimate motto of Mouvement Social.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_item`
--

CREATE TABLE `gallery_item` (
  `gallery_item_id` bigint(20) NOT NULL,
  `centers_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_item`
--

INSERT INTO `gallery_item` (`gallery_item_id`, `centers_id`, `image`, `video`, `orders`) VALUES
(49, 25, '60ec4a9da80a2.png', '', 0),
(50, 25, '60ec4a9da87d0.png', '', 0),
(51, 25, '60ec4a9dacae7.png', '', 0),
(52, 25, '60ec4aa674eb5.png', 'https://youtu.be/6IXURNe8YWY', 0),
(57, 27, '60ed2abc18269.png', '', 0),
(58, 27, '60ed2abc1825a.png', '', 0),
(59, 27, '60ed2abc18259.png', '', 0),
(60, 27, '60ed2ac448a71.png', 'https://youtu.be/6IXURNe8YWY', 0),
(61, 28, '60ed2b5ba8738.png', '', 0),
(62, 28, '60ed2b5bab7d6.png', '', 0),
(63, 28, '60ed2b5bac166.png', '', 0),
(64, 28, '60ed2b683eab5.png', 'https://youtu.be/6IXURNe8YWY', 0),
(95, 26, '60ec4a9da80a2.png', '', 0),
(96, 26, '60ec4a9da87d0.png', '', 0),
(97, 26, '60ec4a9dacae7.png', '', 0),
(98, 26, '60ed52223dbb6.png', '', 0),
(99, 26, '60ed522240bb4.png', '', 0),
(100, 26, '60ec4aa674eb5.png', 'https://youtu.be/6IXURNe8YWY', 0),
(101, 26, '60ed315187d56.png', 'https://youtu.be/6IXURNe8YWY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history_image`
--

CREATE TABLE `history_image` (
  `history_image_id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_image`
--

INSERT INTO `history_image` (`history_image_id`, `title`, `image`, `orders`) VALUES
(1, '', '24303570.png', 8),
(2, '', '28110991.png', 7),
(3, '', '14379002.png', 6),
(4, '', '24978156.png', 5),
(5, '', '77892478.png', 4),
(6, '', '49310852.png', 3),
(8, 'volunteering', '46713246.png', 10),
(9, 'volunteering', '80566543.png', 1),
(10, 'Education', '21450545.png', 9);

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `job_vacancy_id` bigint(20) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `description_ar` longtext,
  `description_en` longtext,
  `description_fr` longtext,
  `requirements_ar` longtext,
  `requirements_en` longtext,
  `requirements_fr` longtext,
  `dates` date DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`job_vacancy_id`, `title_ar`, `title_en`, `title_fr`, `description_ar`, `description_en`, `description_fr`, `requirements_ar`, `requirements_en`, `requirements_fr`, `dates`, `orders`, `is_active`) VALUES
(1, 'Social worker', 'Social worker', 'Social worker', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '&nbsp;<span style=\"color: rgb(126, 126, 126); font-family: Jost, sans-serif; font-size: 18px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.</span>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</p>\r\n<p style=\"box-sizing: border-box; margin: 35px 0px 0px; font-size: 18px; line-height: 2; color: rgb(126, 126, 126); font-family: Jost, sans-serif;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', '2021-03-16', 1, 1),
(2, 'Therapist', 'Therapist', 'Therapist', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '&nbsp;', '2021-03-17', 1, 1),
(3, 'Program Manager', 'Program Manager', 'Program Manager', '<br />', '<br />', '<br />', '<br />', '<br />', '<br />', '2021-04-05', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_history`
--

CREATE TABLE `ms_history` (
  `ms_history_id` bigint(20) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `details_ar` longtext,
  `details_en` longtext,
  `details_fr` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_history`
--

INSERT INTO `ms_history` (`ms_history_id`, `year`, `details_ar`, `details_en`, `details_fr`) VALUES
(6, '1958-1960', 'Constitution of a six-member founding committee', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Establishment</strong></span></div>\r\n<div>Constitution of a six-member founding committee, excluding the real founder Archbishop Gr&eacute;goire Haddad (by his own wish); First recruitment of volunteers and field actions; Official recognition of MS as a non-governmental association, later recognized as &lsquo;public interest association&rsquo;.</div>\r\n<div>&nbsp;</div>', 'Constitution of a six-member founding committee'),
(7, '1960-1975', 'First recruitment of volunteers and field action', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Volunteers-led activities in all regions</strong></span></div>\r\n<div>During these first 15 years, development actions were launched in many regions and sectors: Development, education, rural, socio-economic surveys, vaccination, health, and recreational. Most of these actions were performed by volunteers, who were the actual backbone of the association.</div>\r\n<div>&nbsp;</div>', 'First recruitment of volunteers and field action'),
(8, '2010-2020', 'Official recognition of MS as non-governmental association, later recognized as &lsquo;public interest association&rsquo;', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Syrian war effects</strong></span></div>\r\n<div>Besides the regular development initiatives, MS added specific programs dedicated to Syrian refugees (in Lebanon) and Lebanese host communities. In August 2020, other emergency actions helped victims of the Port blast. The year 2020 also witnessed the re-launching of a large volunteer recruitment program. Funding was largely assured by international organizations and development agencies.</div>\r\n<div>&nbsp;</div>', 'Official recognition of MS as non-governmental association, later recognized as &lsquo;public interest association&rsquo;'),
(9, '1975-1990', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Relief actions to mitigate the war effects<span style=\"white-space: pre;\">	</span></strong></span></div>\r\n<div>With the beginning of the war, relief and reconstruction actions had to be added to regular programs. Microcredit facilities were offered to small producers; artisans were assisted through marketing their products; vocational training centers and production workshops were created</div>\r\n<div>&nbsp;</div>', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Relief actions to mitigate the war effects<span style=\"white-space: pre;\">	</span></strong></span></div>\r\n<div>With the beginning of the war, relief and reconstruction actions had to be added to regular programs. Microcredit facilities were offered to small producers; artisans were assisted through marketing their products; vocational training centers and production workshops were created</div>\r\n<div>&nbsp;</div>', '<strong>Volunteers-led activities in all regions</strong><br />\r\nDuring these first 15 years, development actions were launched in many  regions and sectors: education, rural, homeless, vaccination, health,  recreational and after-school support for needy children, etc. Most of  these actions were performed by volunteers, who were the actual backbone  of the association. MS also cooperated with public agencies in  socio-economic surveys through a dedicated department within the MS, and  on the ground to help manage medication, dispensaries and hospitals.'),
(10, '1990-2010', '<strong>Relief actions to mitigate the civil war effects</strong><br />\r\nWith the beginning of the war, relief and reconstruction actions had to  be added to regular programs (health, education, development). On the  development side, microcredit facilities were offered to small  producers, artisans were assisted through marketing their products,  vocational training centers and production workshops were created.  Volunteer-based activities had to stop and employees were recruited  instead. Local funding was also scarce, so MS had to rely on private  European organizations.', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>Development actions by professional staff</strong></span></div>\r\n<div>After the war, there was a need to foster the economic cycle, through various axis: Production units, rural development, women, and youth empowerment. Relief actions also continued through assisting displaced families, in addition to child protection, health clinics, and alternative education. Young and women prisoners were taken care of through rehabilitation, reintegration, and &lsquo;community work&rsquo; alternative.&nbsp;</div>\r\n<div>&nbsp;</div>', '<strong>Relief actions to mitigate the civil war effects</strong><br />\r\nWith the beginning of the war, relief and reconstruction actions had to  be added to regular programs (health, education, development). On the  development side, microcredit facilities were offered to small  producers, artisans were assisted through marketing their products,  vocational training centers and production workshops were created.  Volunteer-based activities had to stop and employees were recruited  instead. Local funding was also scarce, so MS had to rely on private  European organizations.'),
(12, '2021-…', '&nbsp;', '<div><span style=\"color: rgb(51, 204, 204);\"><strong>More emergencies&hellip;</strong></span></div>\r\n<div>Due to the Covid-19 pandemic, MS came up with specific programs to foster vaccination among the elderly, in addition to awareness campaigns and masks&rsquo; production. Other initiatives were added to help the increasing number of poor in the country due to the economic crisis.</div>\r\n<div>&nbsp;</div>', '&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `ms_team`
--

CREATE TABLE `ms_team` (
  `ms_team_id` bigint(20) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position_ar` varchar(255) DEFAULT NULL,
  `position_en` varchar(255) DEFAULT NULL,
  `position_fr` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `bio_ar` longtext,
  `bio_en` longtext,
  `bio_fr` longtext,
  `team_type_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_team`
--

INSERT INTO `ms_team` (`ms_team_id`, `name_ar`, `name_en`, `name_fr`, `image`, `position_ar`, `position_en`, `position_fr`, `orders`, `bio_ar`, `bio_en`, `bio_fr`, `team_type_id`) VALUES
(4, 'Abdel Mawla el Solh', 'Abdel Mawla el Solh', 'Abdel Mawla el Solh', '24038090.jpg', 'Representative toward the government', 'Representative toward the government', 'Representative toward the government', 0, 'Representative toward the government, Diplomat, Former Ambassador at UNHCR', 'Representative toward the government, Diplomat, Former Ambassador at UNHCR', 'Representative toward the government, Diplomat, Former Ambassador at UNHCR', 1),
(5, 'Kamal Salibi', 'Kamal Salibi', 'Kamal Salibi', '32347891.jpg', 'Secretary', 'Secretary', 'Secretary', 0, 'Secretary, Dentist', 'Secretary, Dentist <br />', 'Secretary, Dentist <br />', 1),
(6, 'Roger Melki', 'Roger Melki', 'Roger Melki', '32609310.jpg', 'Treasurer', 'Treasurer', 'Treasurer', 0, 'Treasurer, Economist', 'Treasurer, Economist ', 'Treasurer, Economist ', 1),
(7, 'Charbel Ghosn', 'Charbel Ghosn', 'Charbel Ghosn', '37077976.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Travel agent', 'Consultant, Travel agent', 'Consultant, Travel agent', 1),
(8, 'Georges Karkabi', 'Georges Karkabi', 'Georges Karkabi', '31902100.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Former Banker', 'Consultant, Former Banker', 'Consultant, Former Banker', 1),
(9, 'Georgette Moughames', 'Georgette Moughames', 'Georgette Moughames', '14866558.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Administrative', 'Consultant, Administrative', 'Consultant, Administrative', 1),
(10, 'Hassan Hammoud', 'Hassan Hammoud', 'Hassan Hammoud', '46231749.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Attorney', 'Consultant, Attorney', 'Consultant, Attorney', 1),
(11, 'Kanj Hamade', 'Kanj Hamade', 'Kanj Hamade', '13688009.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Assistant professor of agriculture and rural development', 'Consultant, Assistant professor of agriculture and rural development', 'Consultant, Assistant professor of agriculture and rural development', 1),
(12, 'May Moufarrej', 'May Moufarrej', 'May Moufarrej', '37109681.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Senior social worker', 'Consultant, Senior social worker', 'Consultant, Senior social worker', 1),
(13, 'Ziad Abdel Samad', 'Ziad Abdel Samad', 'Ziad Abdel Samad', '13933260.jpg', 'Consultant', 'Consultant', 'Consultant', 0, 'Consultant, Expert in the protection of social and economic rights', 'Consultant, Expert in the protection of social and economic rights', 'Consultant, Expert in the protection of social and economic rights', 1),
(14, 'Tamam Mroueh', 'Tamam Mroueh', 'Tamam Mroueh', '83271107.jpg', 'Executive Director', 'Executive Director', 'Executive Director', 0, '<br />', '<br />', '<br />', 1),
(15, 'Nadine Karam', 'Nadine Karam', 'Nadine Karam', '29965247.jpg', 'Finance & Accounting Manager', 'Finance & Accounting Manager', 'Finance & Accounting Manager', 0, 'Finance and accounting manager<br />\r\nn.karam@mouvementsocial.org', 'Finance and accounting manager<br />\r\nn.karam@mouvementsocial.org', 'Finance and accounting manager<br />\r\nn.karam@mouvementsocial.org', 2),
(16, 'Rita Jreidi', 'Rita Jreidi', 'Rita Jreidi', '17479078.jpg', 'Human Resources Development Manager', 'Human Resources Development Manager', 'Human Resources Development Manager', 0, 'Human resources development manager <br />\r\nr.jreidi@mouvementsocial.org', 'Human resources development manager <br />\r\nr.jreidi@mouvementsocial.org', 'Human resources development manager <br />\r\nr.jreidi@mouvementsocial.org', 2),
(17, 'Mario Khater', 'Mario Khater', 'Mario Khater', '21304405.jpg', 'Programs’ Manager', 'Programs’ Manager', 'Programs’ Manager', 0, 'Programs&rsquo; manager<br />\r\nm.khater@mouvementsocial.org', 'Programs&rsquo; manager<br />\r\nm.khater@mouvementsocial.org', 'Programs&rsquo; manager<br />\r\nm.khater@mouvementsocial.org', 2),
(18, 'Roula Yazbeck', 'Roula Yazbeck', 'Roula Yazbeck', '72992241.jpg', 'Support Services Manager', 'Support Services Manager', 'Support Services Manager', 0, 'Support services manager<br />\r\nr.yazbeck@mouvementsocial.org', 'Support services manager<br />\r\nr.yazbeck@mouvementsocial.org', 'Support services manager<br />\r\nr.yazbeck@mouvementsocial.org', 2),
(19, 'Katia Kartenian', 'Katia Kartenian', 'Katia Kartenian', '57926793.jpg', 'Continuous Learning & Empowerment Specialist', 'Continuous Learning & Empowerment Specialist', 'Continuous Learning & Empowerment Specialist', 0, 'Continuous learning and empowerment specialist<br />\r\nk.kartenian@mouvementsocial.org', 'Continuous learning and empowerment specialist<br />\r\nk.kartenian@mouvementsocial.org', 'Continuous learning and empowerment specialist<br />\r\nk.kartenian@mouvementsocial.org', 2),
(20, 'Nicolas Sbeih', 'Nicolas Sbeih', 'Nicolas Sbeih', '54137682.jpg', 'Media & Communication', 'Media & Communication', 'Media & Communication', 0, 'Media and communication<br />\r\nn.sbeih@mouvementsocial.org', 'Media and communication<br />\r\nn.sbeih@mouvementsocial.org', 'Media and communication<br />\r\nn.sbeih@mouvementsocial.org', 2),
(22, 'Mirna Kanj', 'Mirna Kanj', 'Mirna Kanj', '15124920.jpg', 'Ghobayri & Jnah Center', 'Ghobayri & Jnah Center', 'Ghobayri & Jnah Center', 0, '<br />', '<br />', '<br />', 3),
(23, 'Nadine Zein', 'Nadine Zein', 'Nadine Zein', '99638913.jpg', 'Jnah Kindergarten', 'Jnah Kindergarten', 'Jnah Kindergarten', 0, '<br />', '<br />', '<br />', 3),
(24, 'Najat Ibrahim', 'Najat Ibrahim', 'Najat Ibrahim', '30201468.jpg', 'Nabatieh', 'Nabatieh', 'Nabatieh', 0, '<br />', '<br />', '<br />', 3),
(25, 'Amal Ibrahim', 'Amal Ibrahim', 'Amal Ibrahim', '70781427.jpg', 'Akkar', 'Akkar', 'Akkar', 0, '<br />', '<br />', '<br />', 3),
(26, 'Mira Al Basha', 'Mira Al Basha', 'Mira Al Basha', '38899346.jpg', 'Tripoli', 'Tripoli', 'Tripoli', 0, '<br />', '<br />', '<br />', 3),
(27, 'Roula Tannous', 'Roula Tannous', 'Roula Tannous', '94109141.jpg', 'Sin El Fil ', 'Sin El Fil ', 'Sin El Fil ', 0, '<br />', '<br />', '<br />', 3),
(28, 'Iman Ajami', 'Iman Ajami', 'Iman Ajami', '21415061.jpg', 'Bourj Hammoud', 'Bourj Hammoud', 'Bourj Hammoud', 0, '<br />', '<br />', '<br />', 3),
(29, 'Salma Saoudi', 'Salma Saoudi', 'Salma Saoudi', '81648539.jpg', 'Saida', 'Saida', 'Saida', 0, '<br />', '<br />', '<br />', 3),
(30, 'Carine Louis', 'Carine Louis', 'Carine Louis', '54349479.jpg', 'Zahle & Kfarzabad', 'Zahle & Kfarzabad', 'Zahle & Kfarzabad', 0, '<br />', '<br />', '<br />', 3),
(31, 'Hassan Zeineddine', 'Hassan Zeineddine', 'Hassan Zeineddine', '34375320.jpg', 'Jdeidet El-Fakha (Baalbeck)', 'Jdeidet El-Fakha (Baalbeck)', 'Jdeidet El-Fakha (Baalbeck)', 0, '<br />', '<br />', '<br />', 3),
(32, 'Nada Abbani', 'Nada Abbani', 'Nada Abbani', '78006908.jpg', 'Prisons (Roumieh & Barbar El Khazen)', 'Prisons (Roumieh & Barbar El Khazen)', 'Prisons (Roumieh & Barbar El Khazen)', 0, '<br />', '<br />', '<br />', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ms_values`
--

CREATE TABLE `ms_values` (
  `ms_values_id` bigint(20) NOT NULL,
  `value_ar` varchar(255) DEFAULT NULL,
  `value_en` varchar(255) DEFAULT NULL,
  `value_fr` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_values`
--

INSERT INTO `ms_values` (`ms_values_id`, `value_ar`, `value_en`, `value_fr`, `orders`) VALUES
(1, 'Movement: to stress the dynamic feature of MS, so as to cope with changing needs of the society it was built to serve.', '<u><strong>&nbsp;Movement:</strong></u> To stress the dynamic feature of MS, so as to cope with changing needs.', '<br />\r\n<br />\r\n<br />\r\n<br />\r\nMovement: to stress the dynamic feature of MS, so as to cope with changing needs of the society it was built to serve.', 1),
(2, 'Social: to indicate that MS is concerned by all aspects of the society &ndash;  educational, cultural, economic, environmental, sanitary&hellip;', '<u><strong>Non-charitable:</strong></u> MS&rsquo; vocation is not about gathering donations from rich people and distribute them among the poor, but fostering development.&nbsp;', 'Social: to indicate that MS is concerned by all aspects of the society &ndash;  educational, cultural, economic, environmental, sanitary&hellip;', 5),
(3, 'Secular: this means that it is equally open to all people, from all religions, even for agnostics and heretics', '<u><strong>Non-partisan:</strong></u> It is not affiliated in any way to any party or any political side.', 'Secular: this means that it is equally open to all people, from all religions, even for agnostics and heretics', 4),
(4, '<ul>\r\n    <li>Non-partisan: it is not affiliated in any way to any party or any  political side. It was initially described as no-political, until MS  founders realize that any action is political in its essence.</li>\r\n</ul>', '<u><strong>Non-communitarian:</strong></u> It is equally open to all people, from all religions, even for heretics.', 'Non-partisan: it is not affiliated in any way to any party or any  political side. It was initially described as no-political, until MS  founders realize that any action is political in its essence.', 3),
(5, '<u><strong>Non-charitable:</strong></u> MS&rsquo; vocation is different from charitable associations  that just gather donations from rich people and distribute them among  the poor. Its founders believed that this process does not', '<u><strong>Social:</strong></u> MS is concerned by all aspects of the society &ndash; educational, cultural, economic&hellip;', '<br />\r\n<br />\r\n<br />\r\n<br />\r\nNon-charitable: MS&rsquo; vocation is different from charitable associations  that just gather donations from rich people and distribute them among  the poor. Its founders believed that this process does not solve the  pove', 2),
(6, '&nbsp;', '<u><strong>Human development:</strong></u> For every human being and all of the human being, meaning all their aspects.', '&nbsp;', 7),
(7, '&nbsp;', '<u><strong>Development from within:</strong></u><strong> </strong>Society has to take in charge its own destiny towards development, without waiting for &ndash; or necessarily relying on outside help. This is best achieved through volunteering.', '&nbsp;', 8),
(8, '&nbsp;', '<strong><u>&nbsp;Act to change </u></strong>what should be changed in society to make it more human: Laws, stigmas, traditions...', '&nbsp;', 6),
(9, '&nbsp;', '<u><strong>Research-based:</strong></u> All initiatives should be based on surveys and studies.&nbsp;', '&nbsp;', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` bigint(20) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `details_ar` longtext,
  `details_en` longtext,
  `details_fr` longtext,
  `dates` date DEFAULT NULL,
  `sub_title_ar` longtext,
  `sub_title_en` longtext,
  `sub_title_fr` longtext,
  `sub_details_ar` longtext,
  `sub_details_en` longtext,
  `sub_details_fr` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title_ar`, `title_en`, `title_fr`, `details_ar`, `details_en`, `details_fr`, `dates`, `sub_title_ar`, `sub_title_en`, `sub_title_fr`, `sub_details_ar`, `sub_details_en`, `sub_details_fr`) VALUES
(5, '', 'Conference', '', '&nbsp;', '<a id=\"fck_paste_padding\">﻿</a>Convicted minors\r\n<div>A conference was organized by MS with multiple partners to discuss the best ways to reintegrate young convicted prisoners. Officials from the Ministries of Justice and Social Affairs, Unicef, and other partners took part in the half-day conference. Final recommendations insisted on protecting minors before and after any unlawful act, including through implementing the law that offers the possibility of replacing imprisonment by &lsquo;community service&rsquo; or &lsquo;supervised freedom&rsquo;.&nbsp;</div>\r\n<div>&nbsp;</div>', '&nbsp;', '0000-00-00', '', 'Conference', '', '', 'How to improve the reintegration of young prisoners', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `newsletter_id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `submitted_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`newsletter_id`, `email`, `ip`, `country`, `submitted_date_time`) VALUES
(1, '345@sdf.com', '::1', '', '2021-03-18 11:16:07'),
(2, 'n.sbeih@mouvementsocial.org', '141.138.191.114', '', '2021-07-28 11:15:36'),
(3, 'meslmenifarah@gmail.com', '10.44.167.250', '', '2021-12-03 07:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `news_images_id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `news_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`news_images_id`, `image`, `is_main`, `video_url`, `orders`, `news_id`) VALUES
(1, '95637784.jpg', 1, 'https://www.youtube.com/watch?v=-2e_pjdYTZw', 1, 1),
(2, '11926271.png', 0, '', 0, 1),
(3, '36480705.png', 1, '', 0, 1),
(4, '45188387.jpg', 1, '', 0, 2),
(5, '58255755.jpg', 1, '', 0, 3),
(6, '90122755.jpg', 1, '', 0, 4),
(7, '50642430.jpg', 1, '', 0, 2),
(8, '', 1, '', 0, 3),
(9, '51352218.jpg', 1, '', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` bigint(20) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL,
  `details_ar` longtext,
  `details_en` longtext,
  `details_fr` longtext,
  `image` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `name_ar`, `name_en`, `name_fr`, `details_ar`, `details_en`, `details_fr`, `image`, `video_url`) VALUES
(1, 'Home', 'Home', 'Home', '&nbsp;', '&nbsp;', '&nbsp;', '', ''),
(2, 'من أجل مجتمع عادل <br>وإنساني', 'For a More <br>Human Society', 'Pour une société juste<br> et humaine', '<div>هناك العديد من الأشكال المتاحة لنصوص لوريم إيبسوم ، لكن الغالبية تعرضت للتغيير بشكل ما ، عن طريق إدخال بعض الفكاهة أو الكلمات العشوائية التي لا تبدو قابلة للتصديق إلى حد ما. إذا كنت ستستخدم مقطعًا من لوريم إيبسوم ، فعليك التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص.</div>\r\n<div>&nbsp;</div>\r\n<div>لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل.</div>\r\n<div>&nbsp;</div>\r\n<div>لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة.</div>', 'Mouvement Social is a non-confessional, non-partisan, and non-charitable association. It aims to build a fair citizenship-based society, and to improve the autonomy of the underprivileged through socio-economic development. It works to implicate youth in the improvement of their society through volunteering.', '<div>Il existe de nombreuses variantes de passages du Lorem Ipsum disponibles, mais la majorit&eacute; ont subi des alt&eacute;rations sous une forme ou une autre, par de l\'humour inject&eacute; ou des mots al&eacute;atoires qui ne semblent m&ecirc;me pas l&eacute;g&egrave;rement cr&eacute;dibles. Si vous comptez utiliser un passage du Lorem Ipsum, vous devez vous assurer qu\'il n\'y a rien de g&ecirc;nant cach&eacute; au milieu du texte.</div>\r\n<div>&nbsp;</div>\r\n<div>Lorem Ipsum est simplement un faux texte de l\'industrie de l\'impression et de la composition. Lorem Ipsum a &eacute;t&eacute; le texte factice standard de l\'industrie depuis les ann&eacute;es 1500, quand un imprimeur inconnu a pris une gal&egrave;re de caract&egrave;res et l\'a brouill&eacute;e pour en faire un livre de sp&eacute;cimens. Il a surv&eacute;cu non seulement cinq si&egrave;cles, mais aussi le saut dans la composition &eacute;lectronique, demeurant essentiellement inchang&eacute;. Il a &eacute;t&eacute; popularis&eacute; dans les ann&eacute;es 1960 avec la sortie de feuilles Letraset contenant des passages du Lorem Ipsum, et plus r&eacute;cemment avec des logiciels de publication assist&eacute;e par ordinateur comme.</div>\r\n<div>&nbsp;</div>\r\n<div>Lorem Ipsum est simplement un faux texte de l\'industrie de l\'impression et de la composition. Lorem Ipsum a &eacute;t&eacute; le texte factice standard de l\'industrie depuis les ann&eacute;es 1500, quand un imprimeur inconnu a pris une gal&egrave;re de caract&egrave;res et l\'a brouill&eacute;e pour en faire un livre de sp&eacute;cimens.</div>', '12636178.jpg', ''),
(3, 'Scope of action', 'Scope of action', 'abScope of action', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<br />\r\n<div>Scope of action</div>\r\n<div>&nbsp;</div>\r\n<div>Through its 6 decades of life (1961-2021), Mouvement Social (MS) has been working persistently to achieve its goals, in spite of the well-known complications of the situation in the country (wars, social unrest, economic crisis&hellip;). MS has now more than 200 employees, in addition to volunteers, dedicated to achieving MS ideals and objectives.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Vectors</div>\r\n<div>Along its history, MS was active in almost all fields that have an effect on the human being as a whole. Its present action is focused on four pillars:</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Education: formal or informal education, depending on the context and needs.</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Protection: all actions that protect children and their families against violence, forced labor, poverty, armed groups, conflict with the law. Parallel programs take care of convicted juveniles and women prisoners.</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Youth: programs that help unprivileged young people acquire qualifications and find job opportunities.</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Volunteering: train young people so that they could achieve development projects, and become vectors of change in the society. Around 250 volunteers are active now.&nbsp; &nbsp;&nbsp;</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Various: specific programs dedicated to youth and women empowerment, production units, Syrian refugees and Lebanese host communities&hellip;</div>\r\n<div>&nbsp;</div>\r\n<div>Geography</div>\r\n<div>MS centers and action are spread all over the territory: Baalbeck, Tripoli, Akkar, Ghobeyri, Jnah, Sin-el-Fil, Bourj Hammoud, Saida, Nabatieh, Zahleh&hellip; and surrounding areas.</div>\r\n<div>&nbsp;</div>\r\n<div>Resources</div>\r\n<div>Mouvement Social has always pursued a total transparency in its actions and financial data. MS projects are supported financially and technically by many entities:</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>International organizations: UNICEF, UNDP&hellip;</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Public development agencies from: the European Union, France, USA, UK, Denmark, Spain, Hungary, Netherland, Germany&hellip;</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Private international organizations: Save the Children (UK), Partage (France), CCFD (France), Christian Aid (UK), Save the Children (UK), Hilfswerk (Austria), ARCS (Italy)&hellip;</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Local ministries: Ministries of Social Affairs, Education, Justice, and labor&hellip;</div>\r\n<div>&bull;<span style=\"white-space:pre\">	</span>Private sources: Murex company, Michel Ghazal Foundation, individual donors</div>\r\n<div>Each program, in dedicated inside pages, has its own donors that are fully mentioned.&nbsp; Overall annual budget (the last four years) lies between 4 and 6 million USD (see inside Finance page link).&nbsp;</div>\r\n<div>&nbsp;</div>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '33854994.jpg', ''),
(4, 'founders', 'founders', 'founders', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mouvement Social (MS), as it is known, was founded by Greek Catholic archbishop Gr&eacute;goire Haddad. But the first officially registered founding board of MS, back in 1960, did not include his name. Instead, it was composed of six personalities: <br />\r\n<strong>  Hanifeh Sabra, Leila Najjar, Leila Ghantous, Jean Mrad, Robert Stambouli, Tarek Chouman.</strong><br />\r\nThese personalities have been selected so as to represent gender equity, and to be from the six most important religious communities in Lebanon (three Christians and three Muslims). But they were not, neither officially nor unofficially, representative of the civil or religious authorities of their respective communities. <br />\r\nThat was anyway the only religious-based aspect of Mouvement Social which, according to its by-laws and later on to its activities, has no religious facet whatsoever. And in order to confirm this secular aspect, Gr&eacute;goire Haddad chose not to be among the official founders, due to his ecclesiastic position as archbishop. He was only, officially, a &lsquo;consultant&rsquo; to the association.   <br />\r\nNevertheless, Mouvement Social name was linked since the beginning and for more than three decades before his retirement to Gr&eacute;goire Haddad&rsquo;s name. He was the founder, the inspiration, the engine, the manager, and the spirit for the association and for generations of volunteers that helped achieve MS goals. Even upon his retirement and after he passed away (in 2015), he kept inspiring MS officials, staff and volunteers.<br />\r\nIn various periods of his much busy life, Gr&eacute;goire Haddad (he always refused to bear a title) has also been behind - or part of - many initiatives, besides Mouvement Social, among which: <br />\r\n<ul>\r\n    <li>&ldquo;Association du Foyer de l&rsquo;Enfant Libanais&rdquo; (AFEL) that takes in charge vulnerable children at risk of delinquency till their majority;</li>\r\n    <li>&ldquo;Village SOS&rdquo;: another organization (emulating a French model) that also takes in charge orphans or abandoned children, but within family-like structures;</li>\r\n    <li>&ldquo;L&rsquo;artisan du Liban&rdquo;, a limited liability company that aims at marketing artifacts of Lebanese artisans internally and abroad through a fair trade operation;</li>\r\n    <li>&ldquo;Habitat Development Organization&rdquo; that built at some point dwellings for families with limited revenues;</li>\r\n</ul>\r\n<br />\r\nGenerations of volunteers and professional social workers have contributed to translate these values into daily actions. Volunteering, in particular, has always been a core element in MS&rsquo; philosophy. That&rsquo;s because we believe that citizens have to take in charge their own development, the development of their community and that of the whole country. But, according to the founder Gr&eacute;goire Haddad, all these human actors have to avoid some risks and pitfalls:<br />\r\n<ul>\r\n    <li>The objective of social work is about needy people; it should not become a way for the social worker to please themselves, or gain reputation, or just to have a good conscience.</li>\r\n    <li>We should never discriminate among people on any ground, even in periods of war or social tension.</li>\r\n    <li>Never forget that relief work, even in emergency cases, should seek in fine sustainable development for a more human society.</li>\r\n    <li>Never feel that the people that we are helping are indebted to us in any way.</li>\r\n    <li>Avoid working within closed organizations based on religious affiliations or political parties, as the objective of their actions is to gain prestige and social recognition for themselves.</li>\r\n    <li>Another risk is linked to emergency aid coming from foreign countries that seek eventually to gain acknowledgement and gratitude. Dealing with this kind of aid is not banned, provided it serves the development of needy people, and not the interests of the donors.</li>\r\n    <li>Lack of coordination among several NGOs working in the same field provokes inefficiency and a lot of waste. And whenever coordination actually exists, it is often hindered by the ego of some contributors.</li>\r\n    <li>Another risk is that we would end up, as a country and a society, addicted to foreign aid, so as to become professional mendicants.</li>\r\n</ul>\r\n<br type=\"_moz\" />\r\n<ul>\r\n    <li>&ldquo;Association d&rsquo;Entraide Professionnelle&rdquo; that offers, till today, microcredits to small producers, merchants, and service providers.</li>\r\n    <li>&ldquo;Oasis de l&rsquo;Esp&eacute;rance&rdquo;, an organization that followed the French Abb&eacute; Pierre internal and international action by giving homeless and jobless individuals the opportunity to work and live decently through restoring and selling old furniture offered by people;</li>\r\n    <li>&ldquo;IRAP&rdquo;, an association that takes in charge the education and integration of deaf-mute children;</li>\r\n    <li>&ldquo;Aley Caza Development Association&rdquo; that took action during the war to assure basic services to the population (as he was at that time residing in his old family house at Ain-El-Remmaneh, Aley Caza);</li>\r\n</ul>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '24087698.jpg', ''),
(5, 'mission', 'mission', 'mission', '&nbsp;', '&nbsp;', '&nbsp;', '16200449.jpg', ''),
(6, 'Our Mission', 'Our Mission', 'Our Mission', 'the Human Being&hellip; All the Human Being&hellip; and every Human Being&hellip; is at the forefront of the organization&rsquo;s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. <br />', 'the Human Being&hellip; All the Human Being&hellip; and every Human Being&hellip; is at the forefront of the organization&rsquo;s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. <br />', 'the Human Being&hellip; All the Human Being&hellip; and every Human Being&hellip; is at the forefront of the organization&rsquo;s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. <br />', '', ''),
(7, 'Our Vision', 'Our Vision', 'Our Vision', 'the Human Being… All the Human Being… and every Human Being… is at the forefront of the organization’s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. ', 'the Human Being… All the Human Being… and every Human Being… is at the forefront of the organization’s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. ', 'the Human Being… All the Human Being… and every Human Being… is at the forefront of the organization’s priorities. It aims to build a fair and humane society, to improve the citizenship and autonomy of the underprivileged through socio-economic development projects and to implicate Lebanese youths in the development and improvement of their society. Mouvement Social works to build social support networks as well as empower individuals to engage in the wider community. ', '', ''),
(8, 'history', 'history', 'history', '<div style=\"text-align: center;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\nIt has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. book</div>', '<div style=\"text-align: justify;\">Mouvement Social (MS) was one of the first development non-governmental organizations (NGO) in Lebanon &ndash; that remain active, and growing, till now. The founder Gr&eacute;goire Haddad was at that time (late 1950s) general caretaker at the Greek Catholic archbishopric of Beirut. Under this status, he had multiple activities, among which two directly related to the conception of MS:<br />\r\n&nbsp;</div>\r\n<ul>\r\n    <li style=\"text-align: justify;\">He was the animator and spiritual guide for many Christian associations that used to meet regularly and discuss religious and social issues. But at some point, some of these young people felt that a trans-religious entity would be more beneficial to the country and society at large. Furthermore, they were eager to act, feeling that the mere exchange of ideas is not enough.</li>\r\n    <li style=\"text-align: justify;\">On the other hand, many needy individuals and families used to come to the archbishopric, asking for help. Gr&eacute;goire Haddad, while trying to help them as much as possible, came eventually to the conclusion that &lsquo;charitable&rsquo; action is not enough, and that there was need to move on to a broader perspective towards a &lsquo;social development&rsquo; movement that gives each individual the right and the possibility to blossom.<br />\r\n    <br />\r\n    Between the eagerness of the youth groups to &lsquo;do something&rsquo;, and the real needs of the population, the idea of a non-religious development-based association was maturing, until it came to life under the name of Mouvement Social.</li>\r\n</ul>\r\n<br />\r\n<div>&nbsp;</div>', '<div style=\"text-align: center;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div style=\"text-align: center;\">&nbsp;</div>\r\n<div style=\"text-align: center;\">&nbsp;</div>', '97087264.jpg', ''),
(9, 'programs', 'programs', 'programs', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '13268776.jpg', ''),
(10, 'Financial Resources', 'Annual Report', 'Financial Resources', 'In its early life, Mouvement Social (MS) has been relying on its own resources and individual donors to achieve its projects and goals. Anyway, in the beginning, nearly all tasks were handled by volunteers, so that expenses were at a minimum level. In the 1960s, under the presidency of Fouad Chehab, MS has also been partly funded by public agencies that charged it with tasks related to social studies, research, surveys and inspection works, mostly in social and health-related issues. With this experience at hand, a &lsquo;Studies and Surveys Office&rsquo; was officially established with two professional sociologists, that carried out, for a fee, more surveys for the government (Ministry of Labor, National Social Security Fund, Central administration for Statistics&hellip;), as well as for international organizations. This activity helped out in assuring regular income for the MS. <br />\r\n<br />\r\nStarting 1975, with the civil war, MS had to rely more and more on foreign private non-governmental organizations (NGOs) to fund its relief and development activities. This trend has been going on till now, while UN agencies and public development agencies from major countries have later on stepped in as major funders for MS projects, as shown in the financial reports for the past 4 years.  <br />\r\n<br />\r\nAs we publish these figures and related information, MS wants to assure that transparency is one of its key concerns and priorities.', 'In its early life, Mouvement Social (MS) has been relying on its own resources and individual donors to achieve its projects and goals. Anyway, in the beginning, nearly all tasks were handled by volunteers, so that expenses were at a minimum level. In the 1960s, under the presidency of Fouad Chehab, MS has also been partly funded by public agencies that charged it with tasks related to social studies, research, surveys and inspection works, mostly in social and health-related issues. With this experience at hand, a &lsquo;Studies and Surveys Office&rsquo; was officially established with two professional sociologists, that carried out, for a fee, more surveys for the government (Ministry of Labor, National Social Security Fund, Central administration for Statistics&hellip;), as well as for international organizations. This activity helped out in assuring regular income for the MS. <br />\r\n<br />\r\nStarting 1975, with the civil war, MS had to rely more and more on foreign private non-governmental organizations (NGOs) to fund its relief and development activities. This trend has been going on till now, while UN agencies and public development agencies from major countries have later on stepped in as major funders for MS projects, as shown in the financial reports for the past 4 years.  <br />\r\n<br />\r\nAs we publish these figures and related information, MS wants to assure that transparency is one of its key concerns and priorities.', 'In its early life, Mouvement Social (MS) has been relying on its own resources and individual donors to achieve its projects and goals. Anyway, in the beginning, nearly all tasks were handled by volunteers, so that expenses were at a minimum level. In the 1960s, under the presidency of Fouad Chehab, MS has also been partly funded by public agencies that charged it with tasks related to social studies, research, surveys and inspection works, mostly in social and health-related issues. With this experience at hand, a &lsquo;Studies and Surveys Office&rsquo; was officially established with two professional sociologists, that carried out, for a fee, more surveys for the government (Ministry of Labor, National Social Security Fund, Central administration for Statistics&hellip;), as well as for international organizations. This activity helped out in assuring regular income for the MS. <br />\r\n<br />\r\nStarting 1975, with the civil war, MS had to rely more and more on foreign private non-governmental organizations (NGOs) to fund its relief and development activities. This trend has been going on till now, while UN agencies and public development agencies from major countries have later on stepped in as major funders for MS projects, as shown in the financial reports for the past 4 years.  <br />\r\n<br />\r\nAs we publish these figures and related information, MS wants to assure that transparency is one of its key concerns and priorities.', '14707901.png', ''),
(11, 'Publications', 'Publications', 'Publications', '&nbsp;', '&nbsp;', '&nbsp;', '67808809.jpg', ''),
(12, 'testimonials', 'testimonials', 'testimonials', '&nbsp;', '&nbsp;', '&nbsp;', '54464781.jpg', ''),
(13, 'Careers & Calls', 'Careers & Calls', 'Careers & Calls', 'Join Mouvement Social to help make a difference for a more human society. MS has been working with vulnerable communities since 1961, in collaboration with international organizations. It has now more than 200 employees committed to its human goals and values.', 'Join Mouvement Social to help make a difference for a more human  society. MS has been working with vulnerable communities since 1961, in  collaboration with international organizations. It has now more than 200  employees committed to its human goals and values.&nbsp; <br />', '&nbsp;Join Mouvement Social to help make a difference for a more human  society. MS has been working with vulnerable communities since 1961, in  collaboration with international organizations. It has now more than 200  employees committed to its human goals and values.', '95046095.jpg', ''),
(14, 'Volunteer to Make a Difference', 'Volunteer to Make a Difference', 'Volunteer to Make a Difference', 'When you volunteer with Mouvement Social, we&rsquo;ll make sure you receive initial training on issues like social justice, equity, leadership and project management. More importantly, you will participate in achieving our common goal for a more human society through multiple projects, and also you will be able to create your own development project in your village or neighborhood. <br />\r\n<br />\r\nTo join our team in any part of the country, just click below to fill in this form:', 'When you volunteer with Mouvement Social, we&rsquo;ll make sure you receive  initial training on issues like social justice, equity, leadership and  project management. More importantly, you will participate in achieving  our common goal for a more human society through multiple projects, and  also you will be able to create your own development project in your  village or neighborhood. <br />\r\n<br />\r\nTo join our team in any part of the country, just click below to fill in this form:', 'When you volunteer with Mouvement Social, we&rsquo;ll make sure you receive  initial training on issues like social justice, equity, leadership and  project management. More importantly, you will participate in achieving  our common goal for a more human society through multiple projects, and  also you will be able to create your own development project in your  village or neighborhood. <br />\r\n<br />\r\nTo join our team in any part of the country, just click below to fill in this form:', '92249011.jpg', 'https://www.youtube.com/watch?v=-2e_pjdYTZw'),
(15, 'donate', 'donate', 'donate', 'Help us achieve our common goal for a more human society. Donate what you can. <br />\r\nTransparency concerns: Every program is regularly audited by the corresponding donors, mainly international organizations (UNICEF, Save the Children&hellip;). Moreover, all financial revenues and expenses are verified yearly by an external auditor. Details are listed in the Finance page. <br />\r\nTo donate, whether you are inside or outside the country, just click on the form below to fill in the corresponding form:', '&nbsp;Help us achieve our common goal for a more human society. Donate what you can. <br />\r\nTransparency concerns: Every program is regularly audited by the  corresponding donors, mainly international organizations (UNICEF, Save  the Children&hellip;). Moreover, all financial revenues and expenses are  verified yearly by an external auditor. Details are listed in the  Finance page. <br />\r\nTo donate, whether you are inside or outside the country, just click on the form below to fill in the corresponding form:', '&nbsp;Help us achieve our common goal for a more human society. Donate what you can. <br />\r\nTransparency concerns: Every program is regularly audited by the  corresponding donors, mainly international organizations (UNICEF, Save  the Children&hellip;). Moreover, all financial revenues and expenses are  verified yearly by an external auditor. Details are listed in the  Finance page. <br />\r\nTo donate, whether you are inside or outside the country, just click on the form below to fill in the corresponding form:', '', ''),
(16, 'contact us', 'contact us', 'contact us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.', 'contact us text<br />', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Have you done google research which works all the time.', '', ''),
(17, 'News', 'News', 'News', '&nbsp;', '&nbsp;', '&nbsp;', '', ''),
(18, 'Testimonials', 'Testimonials', 'Testimonials', '&nbsp;', '&nbsp;', '&nbsp;', '', ''),
(19, 'Team', 'Team', 'Team', '&nbsp;', '&nbsp;', '&nbsp;', '', ''),
(20, 'Before Values Text', 'Before Values Text', 'Before Values Text', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Mouvement Social (MS) has been tagged since day one, back in the 1960s, as secular, non-partisan, non-charitable association. But what does all this mean, in terms of actions, values and perception? Word after word, one can see how Mouvement Social built its beliefs:', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '', ''),
(21, 'After Values Text', 'After Values Text', 'After Values Text', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '', ''),
(22, 'Social Work', 'Social Work', 'Social Work', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Generations of volunteers and professional social workers have contributed to translate these values into daily actions. Volunteering, in particular, has always been a core element in MS&rsquo; philosophy. That&rsquo;s because we believe that citizens have to take in charge their own development, the development of their community and that of the whole country. But, according to the founder Gr&eacute;goire Haddad, all these human actors have to avoid some risks and pitfalls:<br />\r\n<ul>\r\n    <li>The objective of social work is about needy people; it should not become a way for the social worker to please themselves, or gain reputation, or just to have a good conscience.</li>\r\n    <li>We should never discriminate among people on any ground, even in periods of war or social tension.</li>\r\n    <li>Never forget that relief work, even in emergency cases, should seek in fine sustainable development for a more human society.</li>\r\n    <li>Never feel that the people that we are helping are indebted to us in any way.</li>\r\n    <li>Avoid working within closed organizations based on religious affiliations or political parties, as the objective of their actions is to gain prestige and social recognition for themselves.</li>\r\n    <li>Another risk is linked to emergency aid coming from foreign countries that seek eventually to gain acknowledgement and gratitude. Dealing with this kind of aid is not banned, provided it serves the development of needy people, and not the interests of the donors.</li>\r\n    <li>Lack of coordination among several NGOs working in the same field provokes inefficiency and a lot of waste. And whenever coordination actually exists, it is often hindered by the ego of some contributors.</li>\r\n    <li>Another risk is that we would end up, as a country and a society, addicted to foreign aid, so as to become professional mendicants.</li>\r\n</ul>', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '', '');
INSERT INTO `page` (`page_id`, `name_ar`, `name_en`, `name_fr`, `details_ar`, `details_en`, `details_fr`, `image`, `video_url`) VALUES
(23, 'MS Actions', 'MS Actions', 'MS Actions', 'Mouvement Social is a non-confessional, non-partisan, and non-charitable association. It aims to build a fair citizenship-based society, and to improve the autonomy of the underprivileged through socio-economic development. It works to implicate youth in the improvement of their society through volunteering.', '<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Through its 6 decades of life (1961-2021), Mouvement Social (MS) has been working persistently to achieve its goals, in spite of the well-known complications of the situation in the country (wars, social unrest, economic crisis&hellip;). MS has now more than 200 employees, in addition to volunteers, dedicated to achieving MS ideals and objectives. <o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\"><o:p>&nbsp;</o:p></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;;&#10;color:#0070C0\">Vectors<o:p></o:p></span></b></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Along its history, MS was active in almost all fields that have an effect on the human being as a whole. Its present action is focused on four pillars:<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol;mso-bidi-font-weight:bold\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Education: </span></b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">formal or informal education, depending on the context and needs.<b><o:p></o:p></b></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Protection: </span></b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">all actions that protect children and their families against violence, forced labor, poverty, armed groups, conflict with the law. Parallel programs take care of convicted juveniles and women prisoners.<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol;mso-bidi-font-weight:bold\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Youth: </span></b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">programs that help unprivileged young people acquire qualifications and find job opportunities.<b><o:p></o:p></b></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol;mso-bidi-font-weight:bold\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Volunteering:</span></b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\"> train young people so that they could achieve development projects, and become vectors of change in the society. Around 250 volunteers are active now.&nbsp;&nbsp;&nbsp; <b><o:p></o:p></b></span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo1\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol;mso-bidi-font-weight:bold\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Various</span></b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">: specific programs dedicated to youth and women empowerment, production units, Syrian refugees and Lebanese host communities&hellip;<b><o:p></o:p></b></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\"><o:p>&nbsp;</o:p></span></b></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;;&#10;color:#00B0F0\">Geography<o:p></o:p></span></b></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">MS centers and action are spread all over the territory: Baalbeck, Tripoli, Akkar, Ghobeyri, Jnah, Sin-el-Fil, Bourj Hammoud, Saida, Nabatieh, Zahleh&hellip; and surrounding areas.<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\"><o:p>&nbsp;</o:p></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;;&#10;color:#00B0F0\">Resources<o:p></o:p></span></b></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Mouvement Social has always pursued a total transparency in its actions and financial data. MS projects are supported financially and technically by many entities:<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-.25in;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">International organizations: UNICEF, UNDP&hellip;<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Public development agencies from: the European Union, France, USA, UK, Denmark, Spain, Hungary, Netherland, Germany&hellip;<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Private international organizations: Save the Children (UK), Partage (France), CCFD (France), Christian Aid (UK), Save the Children (UK), Hilfswerk (Austria), ARCS (Italy)&hellip;<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Local ministries: Ministries of Social Affairs, Education, Justice, and labor&hellip;<o:p></o:p></span></p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-.25in;mso-list:l0 level1 lfo2\"><!--[if !supportLists]--><span style=\"font-size:14.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;&#10;mso-bidi-font-family:Symbol\">&middot;<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"font-size:&#10;14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Private sources: Murex company, Michel Ghazal Foundation, individual donors<o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;\">Each program, in dedicated inside pages, has its own donors that are fully mentioned.&nbsp; Overall annual budget (the last four years) lies between 4 and 6 million USD (see inside Finance page<span style=\"color:red\"> link</span>). <o:p></o:p></span></p>\r\n<p class=\"MsoNormal\"><b><span style=\"font-size:14.0pt;font-family:&quot;Bahnschrift&quot;,&quot;sans-serif&quot;;&#10;color:#00B0F0\"><o:p>&nbsp;</o:p></span></b></p>', 'Mouvement Social is a non-confessional, non-partisan, and non-charitable association. It aims to build a fair citizenship-based society, and to improve the autonomy of the underprivileged through socio-economic development. It works to implicate youth in the improvement of their society through volunteering.', '68824967.png', ''),
(24, 'founders 2', 'founders 2', 'founders 2', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<span style=\"color: rgb(0, 0, 255);\">There are many variations o</span>f passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '41900010.jpg', ''),
(25, 'Centers', 'Centers', 'Centers', '&nbsp;', '&nbsp;', '&nbsp;', '74686631.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `programs_id` bigint(20) NOT NULL,
  `programs_category_id` bigint(20) DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `description_ar` longtext,
  `description_en` longtext,
  `description_fr` longtext,
  `beneficiaries_ar` longtext,
  `beneficiaries_en` longtext,
  `beneficiaries_fr` longtext,
  `date` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `show_home` tinyint(4) NOT NULL,
  `sub_title_ar` longtext,
  `sub_title_en` longtext,
  `sub_title_fr` longtext,
  `sub_details_ar` longtext,
  `sub_details_en` longtext,
  `sub_details_fr` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`programs_id`, `programs_category_id`, `title_ar`, `title_en`, `title_fr`, `description_ar`, `description_en`, `description_fr`, `beneficiaries_ar`, `beneficiaries_en`, `beneficiaries_fr`, `date`, `location`, `budget`, `show_home`, `sub_title_ar`, `sub_title_en`, `sub_title_fr`, `sub_details_ar`, `sub_details_en`, `sub_details_fr`) VALUES
(15, 1, '', 'Child Protection And Access to Justice for High-Risk Children', '', 'Mouvement Social (MS) has an inclusive approach to include people who are most vulnerable in a non-discriminatory fashion, while also catering for the specific needs of vulnerable groups such as children with disabilities and girls in unsafe conditions. The present program especially targets children involved in worst forms of child labor, a term that includes children working in harsh conditions, abused in any way, or affected by armed violence. <br />\r\nThe program, mainly funded by UNICEF, is spread over the following areas: Halba and al-Hissa (Akkar), Tripoli, Bourj Hammoud, Jnah, Saida, and Baalback - Al-Fekeha.<br />\r\nUnder this program, MS intervention includes the following services, each benefiting hundreds of vulnerable children and their parents: <br />\r\n<ul>\r\n    <li>Psychological support.</li>\r\n    <li>Case management and specialized services.</li>\r\n    <li>Support to caregivers of high-risk children to promote wellbeing and protection.</li>\r\n    <li>Following up with juveniles in conflict with the law to spare them imprisonment (&lsquo;community service&rsquo; and/or &lsquo;supervised freedom&rsquo; instead of actual detention).</li>\r\n    <li>Training professionals and practitioners on new curricula for high-risk children and their caregivers.</li>\r\n    <li>Organizing workshops with juvenile judges and other stakeholders to discuss options and challenges on child protection, and promote non-custodial measures.</li>\r\n    <li>Contributing to social behavioral change in vulnerable communities, through recreational and cultural events: cinemas, theater&hellip;</li>\r\n</ul>\r\nIn the child protection programs, MS also collaborates with the Ministry of Social Affairs (MoSA), and with the Ministry of Interior to address prison overcrowding.', 'Mouvement Social (MS) has an inclusive approach to include people who are most vulnerable in a non-discriminatory fashion, while also catering for the specific needs of vulnerable groups such as children with disabilities and girls in unsafe conditions. The present program especially targets children involved in worst forms of child labor, a term that includes children working in harsh conditions, abused in any way, or affected by armed violence. <br />\r\nThe program, mainly funded by UNICEF, is spread over the following areas: Halba and al-Hissa (Akkar), Tripoli, Bourj Hammoud, Jnah, Saida, and Baalback - Al-Fekeha.<br />\r\nUnder this program, MS intervention includes the following services, each benefiting hundreds of vulnerable children and their parents: <br />\r\n<ul>\r\n    <li>Psychological support.</li>\r\n    <li>Case management and specialized services.</li>\r\n    <li>Support to caregivers of high-risk children to promote wellbeing and protection.</li>\r\n    <li>Following up with juveniles in conflict with the law to spare them imprisonment (&lsquo;community service&rsquo; and/or &lsquo;supervised freedom&rsquo; instead of actual detention).</li>\r\n    <li>Training professionals and practitioners on new curricula for high-risk children and their caregivers.</li>\r\n    <li>Organizing workshops with juvenile judges and other stakeholders to discuss options and challenges on child protection, and promote non-custodial measures.</li>\r\n    <li>Contributing to social behavioral change in vulnerable communities, through recreational and cultural events: cinemas, theater&hellip;</li>\r\n</ul>\r\nIn the child protection programs, MS also collaborates with the Ministry of Social Affairs (MoSA), and with the Ministry of Interior to address prison overcrowding.', 'Mouvement Social (MS) has an inclusive approach to include people who are most vulnerable in a non-discriminatory fashion, while also catering for the specific needs of vulnerable groups such as children with disabilities and girls in unsafe conditions. The present program especially targets children involved in worst forms of child labor, a term that includes children working in harsh conditions, abused in any way, or affected by armed violence. <br />\r\nThe program, mainly funded by UNICEF, is spread over the following areas: Halba and al-Hissa (Akkar), Tripoli, Bourj Hammoud, Jnah, Saida, and Baalback - Al-Fekeha.<br />\r\nUnder this program, MS intervention includes the following services, each benefiting hundreds of vulnerable children and their parents: <br />\r\n<ul>\r\n    <li>Psychological support.</li>\r\n    <li>Case management and specialized services.</li>\r\n    <li>Support to caregivers of high-risk children to promote wellbeing and protection.</li>\r\n    <li>Following up with juveniles in conflict with the law to spare them imprisonment (&lsquo;community service&rsquo; and/or &lsquo;supervised freedom&rsquo; instead of actual detention).</li>\r\n    <li>Training professionals and practitioners on new curricula for high-risk children and their caregivers.</li>\r\n    <li>Organizing workshops with juvenile judges and other stakeholders to discuss options and challenges on child protection, and promote non-custodial measures.</li>\r\n    <li>Contributing to social behavioral change in vulnerable communities, through recreational and cultural events: cinemas, theater&hellip;</li>\r\n</ul>\r\nIn the child protection programs, MS also collaborates with the Ministry of Social Affairs (MoSA), and with the Ministry of Interior to address prison overcrowding.', '<strong>Success story</strong><br />\r\nBouchra (name changed), a sixteen-year-old Syrian girl from Hamah,  suffered from tragic war effects. Upon her arrival to Lebanon, she lived  the worst days of her life, as she discovered that her mother had an  affair&hellip; and started to abuse her and threatened to kill her for fear of  revealing her misconduct. The girl ended up with a troubled health,  traumatic stress disorder, and suicidal thoughts. She tried to kill  herself, twice. Upon our intervention, she started feeling again the  wish to interact with others who may help her, and to re-shape her  future life. She gave up the idea of killing herself, improving her  determination to live and be productive. She is now learning to read and  write and is on the list for vocational training as hair dresser at our  center. &ldquo;I am very happy that I met someone to talk to and tell them my  concerns, after I got over a dreadful period where I did not trust  anyone as the dearest people to my heart, my mother, let me down.&rdquo;', '<strong>Success story</strong><br />\r\nBouchra (name changed), a sixteen-year-old Syrian girl from Hamah, suffered from tragic war effects. Upon her arrival to Lebanon, she lived the worst days of her life, as she discovered that her mother had an affair&hellip; and started to abuse her and threatened to kill her for fear of revealing her misconduct. The girl ended up with a troubled health, traumatic stress disorder, and suicidal thoughts. She tried to kill herself, twice. Upon our intervention, she started feeling again the wish to interact with others who may help her, and to re-shape her future life. She gave up the idea of killing herself, improving her determination to live and be productive. She is now learning to read and write and is on the list for vocational training as hair dresser at our center. &ldquo;I am very happy that I met someone to talk to and tell them my concerns, after I got over a dreadful period where I did not trust anyone as the dearest people to my heart, my mother, let me down.&rdquo;', '<strong>Success story</strong><br />\r\nBouchra (name changed), a sixteen-year-old Syrian girl from Hamah,  suffered from tragic war effects. Upon her arrival to Lebanon, she lived  the worst days of her life, as she discovered that her mother had an  affair&hellip; and started to abuse her and threatened to kill her for fear of  revealing her misconduct. The girl ended up with a troubled health,  traumatic stress disorder, and suicidal thoughts. She tried to kill  herself, twice. Upon our intervention, she started feeling again the  wish to interact with others who may help her, and to re-shape her  future life. She gave up the idea of killing herself, improving her  determination to live and be productive. She is now learning to read and  write and is on the list for vocational training as hair dresser at our  center. &ldquo;I am very happy that I met someone to talk to and tell them my  concerns, after I got over a dreadful period where I did not trust  anyone as the dearest people to my heart, my mother, let me down.&rdquo;', '0000-00-00', 'Halba and al-Hissa (Akkar), Tripoli, Bourj Hammoud, Jnah, Saida, and Baalback - Al-Fekeha', '', 1, 'Child Protection and Justice', 'Juveniles', '', 'Child Protection And Access to Justice for High-Risk Children', 'Child protection and access to justice for high-risk children', 'Mouvement Social (MS) has an inclusive approach to include people who '),
(17, 2, 'Non-Formal Education', 'Non-Formal Education', 'NON-FORMAL EDUCATION', 'So many children cannot pursue normal education. This is mainly the case for vulnerable Lebanese children and refugees. Syrians are generally offered schooling in public schools in a second shift, in the afternoon. But many, for any reason, are not able to join this official program. Also many Lebanese children from poor communities do not join formal education, in public or private schools. For all these marginalized young populations, Mouvement Social (MS), along with other local non-governmental organizations (NGOs), is executing adapted programmes supported by UNICEF, Partage (France), Save the Children (UK), and Christian Aid (UK). <br />\r\n<br />\r\nMovement Social is very active in this field, due its expertise, resources&hellip; but most of all its beliefs and dedication since decades to help marginalized populations get a second chance in life. <br />\r\nThe alternative education process is being executed according to multiple recipes, as shown below, within the following regions that are covered by MS centers: Halba (Akkar), Tripoli, Kfar Zabad (Zahle), Bourj Hammoud, Jnah, Ghobairy, Chiyah, Saida, Nabatieh, Fekeha (Baalbek). <br />\r\n<br />\r\n<strong>Kindergarten</strong><br />\r\nThis programme, implemented in partnership with Partage, targets non-Lebanese children aged 3 to 5 years, who have no access to formal public kindergartens in second shift schools (as is the case for upper classes). It is implemented in our Jnah center. <br />\r\n<br />\r\n<strong>  Literacy and Numeracy </strong><br />\r\nThe Basic Literacy and Numeracy (BLN) programme targets children aged 10-14 years old who have limited or no prior learning. The BLN programme provides learning in 3 subjects: Arabic language, foreign language and Math, plus Life Skills and psycho-social support activities. Children will be referred afterwards to formal education whenever possible, or an alternative one. <br />\r\n<br />\r\nAlternatively, other children in the same age group of 10-14 years old, who come from the most marginalized pockets, are not even able to follow the regular BLN and therefore remain out of learning. Since July 2019, Mouvement Social started to implement the Adapted Basic Literacy and Numeracy (ABLN) programme to cater to the needs of these children, who  have problematic situations (working, with disability, married, stateless). <br />\r\n<br />\r\n<strong>  Homework support</strong><br />\r\nMS, in partnership with Save the Children, Partage, and Christian Aid, is targeting, through this component, children enrolled in public schools who are at risk of dropping out due to their poor academic results. The programme focuses on providing these children with individualized homework support. <br />\r\n<br />\r\n<strong>  Reaching Schools </strong><br />\r\nLack of transportation has been repeatedly reported to be among the barriers to accessing education for vulnerable families. To overcome this obstacle, cash assistance is offered to cover the cost of transportation for children in second shift public schools. Priority is given to children with disabilities, very young children, and children enrolled in a school hard to reach. <br />\r\n<br />\r\nFor more information<br />\r\nFouad Mansour<br />\r\n<a href=\"mailto:f.mansour@mouvementsocial.org\">f.mansour@mouvementsocial.org</a><br />\r\nTel.: 70-115 964', 'So many children cannot pursue normal education. This is mainly the case for vulnerable Lebanese children and refugees. Syrians are generally offered schooling in public schools in a second shift, in the afternoon. But many, for any reason, are not able to join this official program. Also many Lebanese children from poor communities do not join formal education, in public or private schools. For all these marginalized young populations, Mouvement Social (MS), along with other local non-governmental organizations (NGOs), is executing adapted programmes supported by UNICEF, Partage (France), Save the Children (UK), and Christian Aid (UK). <br />\r\n<br />\r\nMovement Social is very active in this field, due its expertise, resources&hellip; but most of all its beliefs and dedication since decades to help marginalized populations get a second chance in life. <br />\r\nThe alternative education process is being executed according to multiple recipes, as shown below, within the following regions that are covered by MS centers: Halba (Akkar), Tripoli, Kfar Zabad (Zahle), Bourj Hammoud, Jnah, Ghobairy, Chiyah, Saida, Nabatieh, Fekeha (Baalbek). <br />\r\n<br />\r\n<strong>Kindergarten</strong><br />\r\nThis programme, implemented in partnership with Partage, targets non-Lebanese children aged 3 to 5 years, who have no access to formal public kindergartens in second shift schools (as is the case for upper classes). It is implemented in our Jnah center. <br />\r\n<br />\r\n<strong>  Literacy and Numeracy </strong><br />\r\nThe Basic Literacy and Numeracy (BLN) programme targets children aged 10-14 years old who have limited or no prior learning. The BLN programme provides learning in 3 subjects: Arabic language, foreign language and Math, plus Life Skills and psycho-social support activities. Children will be referred afterwards to formal education whenever possible, or an alternative one. <br />\r\n<br />\r\nAlternatively, other children in the same age group of 10-14 years old, who come from the most marginalized pockets, are not even able to follow the regular BLN and therefore remain out of learning. Since July 2019, Mouvement Social started to implement the Adapted Basic Literacy and Numeracy (ABLN) programme to cater to the needs of these children, who  have problematic situations (working, with disability, married, stateless). <br />\r\n<br />\r\n<strong>  Homework support</strong><br />\r\nMS, in partnership with Save the Children, Partage, and Christian Aid, is targeting, through this component, children enrolled in public schools who are at risk of dropping out due to their poor academic results. The programme focuses on providing these children with individualized homework support. <br />\r\n<br />\r\n<strong>  Reaching Schools </strong><br />\r\nLack of transportation has been repeatedly reported to be among the barriers to accessing education for vulnerable families. To overcome this obstacle, cash assistance is offered to cover the cost of transportation for children in second shift public schools. Priority is given to children with disabilities, very young children, and children enrolled in a school hard to reach. <br />\r\n<br />\r\nFor more information<br />\r\nFouad Mansour<br />\r\n<a href=\"mailto:f.mansour@mouvementsocial.org\">f.mansour@mouvementsocial.org</a><br />\r\nTel.: 70-115 964', 'So many children cannot pursue normal education. This is mainly the case for vulnerable Lebanese children and refugees. Syrians are generally offered schooling in public schools in a second shift, in the afternoon. But many, for any reason, are not able to join this official program. Also many Lebanese children from poor communities do not join formal education, in public or private schools. For all these marginalized young populations, Mouvement Social (MS), along with other local non-governmental organizations (NGOs), is executing adapted programmes supported by UNICEF, Partage (France), Save the Children (UK), and Christian Aid (UK). <br />\r\n<br />\r\nMovement Social is very active in this field, due its expertise, resources&hellip; but most of all its beliefs and dedication since decades to help marginalized populations get a second chance in life. <br />\r\nThe alternative education process is being executed according to multiple recipes, as shown below, within the following regions that are covered by MS centers: Halba (Akkar), Tripoli, Kfar Zabad (Zahle), Bourj Hammoud, Jnah, Ghobairy, Chiyah, Saida, Nabatieh, Fekeha (Baalbek). <br />\r\n<br />\r\n<strong>Kindergarten</strong><br />\r\nThis programme, implemented in partnership with Partage, targets non-Lebanese children aged 3 to 5 years, who have no access to formal public kindergartens in second shift schools (as is the case for upper classes). It is implemented in our Jnah center. <br />\r\n<br />\r\n<strong>  Literacy and Numeracy </strong><br />\r\nThe Basic Literacy and Numeracy (BLN) programme targets children aged 10-14 years old who have limited or no prior learning. The BLN programme provides learning in 3 subjects: Arabic language, foreign language and Math, plus Life Skills and psycho-social support activities. Children will be referred afterwards to formal education whenever possible, or an alternative one. <br />\r\n<br />\r\nAlternatively, other children in the same age group of 10-14 years old, who come from the most marginalized pockets, are not even able to follow the regular BLN and therefore remain out of learning. Since July 2019, Mouvement Social started to implement the Adapted Basic Literacy and Numeracy (ABLN) programme to cater to the needs of these children, who  have problematic situations (working, with disability, married, stateless). <br />\r\n<br />\r\n<strong>  Homework support</strong><br />\r\nMS, in partnership with Save the Children, Partage, and Christian Aid, is targeting, through this component, children enrolled in public schools who are at risk of dropping out due to their poor academic results. The programme focuses on providing these children with individualized homework support. <br />\r\n<br />\r\n<strong>  Reaching Schools </strong><br />\r\nLack of transportation has been repeatedly reported to be among the barriers to accessing education for vulnerable families. To overcome this obstacle, cash assistance is offered to cover the cost of transportation for children in second shift public schools. Priority is given to children with disabilities, very young children, and children enrolled in a school hard to reach. <br />\r\n<br />\r\nFor more information<br />\r\nFouad Mansour<br />\r\n<a href=\"mailto:f.mansour@mouvementsocial.org\">f.mansour@mouvementsocial.org</a><br />\r\nTel.: 70-115 964', '&nbsp;', '<br />', '<br />', '0000-00-00', '<br />', '', 1, '', 'Non-Formal Education', '', '', 'For children who cannot pursue normal education', ''),
(18, 5, 'Youth Action Plan', 'Youth', 'Youth Action Plan', 'Mouvement Social (MS), in a broad line of activities, aims to help youth (14-24) who did not have the opportunity to pursue enough education, in order to offer them a second chance in life, in an inclusive and equity-based manner. This is achieved through multiple and successive programs, always focusing on actual priorities as per the situation on the ground. The present running program, supported by UNICEF, is explicitly titled &lsquo;Supporting vulnerable girls and boys with learning, soft and hard skills, and employability programmes in Lebanon.&rdquo; It has been conceived to have a large coverage: from Akkar to the south, Bekaa, Mount L.ebanon, and Beirut area, with multiple sites in each region. <br />\r\n<br />\r\nFor each of the activities listed below, hundreds of young boys and girls are benefitting and continue to receive help that, for many, is changing the course of their life. The idea is to reduce the dependence of vulnerable populations on assistance, reduce poverty and foster social and economic development.<br />\r\n<br />\r\nMS action related to youth actually includes the following components into its programming:<br />\r\n<ul>\r\n    <li><strong>Support education:</strong> This is done through public schools, or, if not possible, through non-formal education programs tailored for youth. For youth who have been out of school for years and thus lack the minimum learning skills to either join again formal education or become employable, a basic literacy and numeracy learning service is provided.</li>\r\n    <li><strong>Provide vocational training:</strong> This training targets those who lack the minimum employability and vocational skills. Adolescents who graduate will have access to apprenticeship, increasing their chances to reach professional success. Those who cannot, for some reason, attend the Certified Vocational Training have the opportunity to pursue short training sessions. Curriculum is diversified: computer and electronics, agriculture, sewing, cooking, audio-visual techniques, hair dressing, etc.</li>\r\n    <li><strong>The Innovation Lab:</strong> This lab, located in our Bourj Hammoud center, delivers digital and entrepreneurship skills. Additionally, &lsquo;Career Inspiration Sessions&rsquo; are organized through a Mentorship Program, giving the opportunity to the targeted youth to learn from and build on successes of companies.</li>\r\n    <li><strong>Provide internship, apprenticeship, on-the-job training:</strong> This represents for youth an opportunity to be eventually hired into a job that can mark the start of a career. Occasionally, MS offers a &lsquo;Cash for Work&rsquo; program for a duration of 40 working days.</li>\r\n    <li><strong>Refer youth to employment opportunities:</strong> A service that includes job matching, participation in career fairs, offering employment subsidies, etc.</li>\r\n    <li><strong>Provide life skills and conflict resolution:</strong> This is meant to strengthen social cohesion and resilience among youth within a situation (in the country) that is subject to successive crises and tensions.</li>\r\n</ul>\r\n<strong>    For more information: </strong><br />\r\n<strong> Salha Nasser</strong><br />\r\n<a href=\"mailto:s.nasser@mouvementsocial.org\">s.nasser@mouvementsocial.org</a><br />\r\nTel: 70-115 896', 'Mouvement Social (MS), in a broad line of activities, aims to help youth (14-24) who did not have the opportunity to pursue enough education, in order to offer them a second chance in life, in an inclusive and equity-based manner. This is achieved through multiple and successive programs, always focusing on actual priorities as per the situation on the ground. The present running program, supported by UNICEF, is explicitly titled &lsquo;Supporting vulnerable girls and boys with learning, soft and hard skills, and employability programmes in Lebanon.&rdquo; It has been conceived to have a large coverage: from Akkar to the south, Bekaa, Mount L.ebanon, and Beirut area, with multiple sites in each region. <br />\r\n<br />\r\nFor each of the activities listed below, hundreds of young boys and girls are benefitting and continue to receive help that, for many, is changing the course of their life. The idea is to reduce the dependence of vulnerable populations on assistance, reduce poverty and foster social and economic development.<br />\r\n<br />\r\nMS action related to youth actually includes the following components into its programming:<br />\r\n<ul>\r\n    <li><strong>Support education:</strong> This is done through public schools, or, if not possible, through non-formal education programs tailored for youth. For youth who have been out of school for years and thus lack the minimum learning skills to either join again formal education or become employable, a basic literacy and numeracy learning service is provided.</li>\r\n    <li><strong>Provide vocational training:</strong> This training targets those who lack the minimum employability and vocational skills. Adolescents who graduate will have access to apprenticeship, increasing their chances to reach professional success. Those who cannot, for some reason, attend the Certified Vocational Training have the opportunity to pursue short training sessions. Curriculum is diversified: computer and electronics, agriculture, sewing, cooking, audio-visual techniques, hair dressing, etc.</li>\r\n    <li><strong>The Innovation Lab:</strong> This lab, located in our Bourj Hammoud center, delivers digital and entrepreneurship skills. Additionally, &lsquo;Career Inspiration Sessions&rsquo; are organized through a Mentorship Program, giving the opportunity to the targeted youth to learn from and build on successes of companies.</li>\r\n    <li><strong>Provide internship, apprenticeship, on-the-job training:</strong> This represents for youth an opportunity to be eventually hired into a job that can mark the start of a career. Occasionally, MS offers a &lsquo;Cash for Work&rsquo; program for a duration of 40 working days.</li>\r\n    <li><strong>Refer youth to employment opportunities:</strong> A service that includes job matching, participation in career fairs, offering employment subsidies, etc.</li>\r\n    <li><strong>Provide life skills and conflict resolution:</strong> This is meant to strengthen social cohesion and resilience among youth within a situation (in the country) that is subject to successive crises and tensions.</li>\r\n</ul>\r\n<strong>    For more information: </strong><br />\r\n<strong> Salha Nasser</strong><br />\r\n<a href=\"mailto:s.nasser@mouvementsocial.org\">s.nasser@mouvementsocial.org</a><br />\r\nTel: 70-115 896', 'Mouvement Social (MS), in a broad line of activities, aims to help youth (14-24) who did not have the opportunity to pursue enough education, in order to offer them a second chance in life, in an inclusive and equity-based manner. This is achieved through multiple and successive programs, always focusing on actual priorities as per the situation on the ground. The present running program, supported by UNICEF, is explicitly titled &lsquo;Supporting vulnerable girls and boys with learning, soft and hard skills, and employability programmes in Lebanon.&rdquo; It has been conceived to have a large coverage: from Akkar to the south, Bekaa, Mount L.ebanon, and Beirut area, with multiple sites in each region. <br />\r\n<br />\r\nFor each of the activities listed below, hundreds of young boys and girls are benefitting and continue to receive help that, for many, is changing the course of their life. The idea is to reduce the dependence of vulnerable populations on assistance, reduce poverty and foster social and economic development.<br />\r\n<br />\r\nMS action related to youth actually includes the following components into its programming:<br />\r\n<ul>\r\n    <li><strong>Support education:</strong> This is done through public schools, or, if not possible, through non-formal education programs tailored for youth. For youth who have been out of school for years and thus lack the minimum learning skills to either join again formal education or become employable, a basic literacy and numeracy learning service is provided.</li>\r\n    <li><strong>Provide vocational training:</strong> This training targets those who lack the minimum employability and vocational skills. Adolescents who graduate will have access to apprenticeship, increasing their chances to reach professional success. Those who cannot, for some reason, attend the Certified Vocational Training have the opportunity to pursue short training sessions. Curriculum is diversified: computer and electronics, agriculture, sewing, cooking, audio-visual techniques, hair dressing, etc.</li>\r\n    <li><strong>The Innovation Lab:</strong> This lab, located in our Bourj Hammoud center, delivers digital and entrepreneurship skills. Additionally, &lsquo;Career Inspiration Sessions&rsquo; are organized through a Mentorship Program, giving the opportunity to the targeted youth to learn from and build on successes of companies.</li>\r\n    <li><strong>Provide internship, apprenticeship, on-the-job training:</strong> This represents for youth an opportunity to be eventually hired into a job that can mark the start of a career. Occasionally, MS offers a &lsquo;Cash for Work&rsquo; program for a duration of 40 working days.</li>\r\n    <li><strong>Refer youth to employment opportunities:</strong> A service that includes job matching, participation in career fairs, offering employment subsidies, etc.</li>\r\n    <li><strong>Provide life skills and conflict resolution:</strong> This is meant to strengthen social cohesion and resilience among youth within a situation (in the country) that is subject to successive crises and tensions.</li>\r\n</ul>\r\n<strong>    For more information: </strong><br />\r\n<strong> Salha Nasser</strong><br />\r\n<a href=\"mailto:s.nasser@mouvementsocial.org\">s.nasser@mouvementsocial.org</a><br />\r\nTel: 70-115 896', '<br />', '<br />', '<br />', '0000-00-00', '<br />', '', 1, '', 'Youth', '', '', 'Supporting vulnerable youth with learning, soft and hard skills, and employability program', ''),
(19, 1, 'Support for Young Male and Women Prisoners', 'Support for Young Male and Women Prisoners', 'Support for Young Male and Women Prisoners', 'The involvement of Mouvement Social (MS) in prisons has been continuous since 1993. Multiple programmes, adapted to the circumstances, have been applied, in collaboration with funding agencies (mainly international organizations). The present programme is a perfect example of how MS and partners deal with this somehow neglected issue in the country.   <br />\r\n<br />\r\nFor this programme, MS partners with local NGOs that work in the same field, and has the active financial and technical support of Italian NGOs: ARCS, No Peace Without Justice (NPWJ), Tuscany Prisoners&rsquo; Rights Guarantor, Antigone, Prisoners&rsquo; Rights Guarantor.<br />\r\n<br />\r\n<strong>  First action: Psychological and legal support </strong><br />\r\nThis initiative aims to offer psychosocial and legal support for vulnerable women at Barbar El-Khazen (BEK) jail and young male adults in Roumieh jail. With an individual interview for every prisoner, a specific run is defined to come up with suitable services for each single prisoner&rsquo;s case. This includes psychological services, punctual therapeutic actions to contain for instance anxiety and to strengthen the ability of adaptation. Group sessions are also organized to resolve common problems to the inmates: impulsive behaviors, emotions management, use of drug, etc. We add to these psychological services a legal assistance, where a lawyer follows on the various cases furnishing individual consultation and assistance. <br />\r\n<br />\r\n<strong>Second action: Life skills and vocational training</strong><br />\r\nTo set up the training, the social staff runs an assessment to design the adapted curricula, among the following: sewing; carpentry; electronics; mechanics; recycling; plus others as per needs. Production workshops are also available in order to provide prisoners with some economic benefit during their detention. Some of their work is exhibited at the Artisan du Liban outlets. Life skills training is also offered for those who want.<br />\r\n<br />\r\n<strong>Third action: support for inmates with a disability</strong><br />\r\nThe Roumieh prison hasn&rsquo;t any suitable infrastructure for persons with disabilities. Therefore, slides, handrail and baths are being installed to facilitate their daily life and to increase their autonomy inside the jail. In BEK, a kitchen has been renewed, and Mouvement Social has concerted the purchase of the kitchen material. <br />\r\n<br />\r\n<strong>Fourth action: cultural activities</strong><br />\r\nCultural activities are being implemented in Roumieh and in BEK (yoga, movie club, sport, music, creative writing, theatre and video making), to favor positive relational approaches among inmates. A newsletter is also issued to break the isolation between &quot;the inside&quot; and &quot;the outside&quot;.<br />\r\n<br />\r\n<strong>Fifth action: Family reconciliation service</strong><br />\r\nWe believe that family is a major factor in the reintegration process, being the first step of prisoners&rsquo; path to normal life. In BEK, MS staff succeeds in covering relationship needs between prisoners and their families. In Roumieh, the problem is the high number of inmates, hence security access restrictions to family visits. Still, it is of paramount importance to focus on family healing role, whenever needed.  <br />\r\n<br />\r\n<strong>Sixth action: End of sentence preparation </strong><br />\r\nTowards the end of the prison sentence, a phase of follow-up starts to help social reintegration and prevent recidivism. Follow up activity consists in individual counseling. Upon release, Roumieh prisoners are offered a temporary hosting facility, managed by another NGO (AJEM) in Rabieh (Antelias). It offers a temporary accommodation and psychosocial support up to social reintegration. In BEK prison, foreign prisoners (who constitute a large part of imprisoned women), could be addressed to Support Centers for victims of violence and individuals at risk of social exclusion. <br />\r\n<br />\r\n<strong>Seventh action: Improvement of the justice and penitentiary system</strong><br />\r\nMS, along with its local and foreign partners, tries to reform the penitentiary system. Training sessions and coordinated actions are organized in this regard. One of the main axes of action evolves around replacing detention with &lsquo;community work&rsquo; or &lsquo;supervised freedom&rsquo;. A 2002 law allows those alternatives for juveniles but it is rarely used by judges. So, MS tries hard to make it happen as frequently as possible, through direct contacts with judges and lawyers, and finding places (NGOs, municipalities) where sentenced youngsters could work under proper supervision.<br />\r\n<br />\r\n<strong>For more information</strong><br />\r\nCharlotte Tanios: <br />\r\n<a href=\"mailto:c.tanios@mouvementsocial.org\"> c.tanios@mouvementsocial.org</a><br />\r\nTel: 70115682<br />\r\n<br />\r\nNada Abbani: <br />\r\n<a href=\"mailto:n.abbani@mouvementsocial.org\">n.abbani@mouvementsocial.org</a><br />\r\nTel: 70299617', 'The involvement of Mouvement Social (MS) in prisons has been continuous since 1993. Multiple programmes, adapted to the circumstances, have been applied, in collaboration with funding agencies (mainly international organizations). The present programme is a perfect example of how MS and partners deal with this somehow neglected issue in the country.   <br />\r\n<br />\r\nFor this programme, MS partners with local NGOs that work in the same field, and has the active financial and technical support of Italian NGOs: ARCS, No Peace Without Justice (NPWJ), Tuscany Prisoners&rsquo; Rights Guarantor, Antigone, Prisoners&rsquo; Rights Guarantor.<br />\r\n<br />\r\n<strong>  First action: Psychological and legal support </strong><br />\r\nThis initiative aims to offer psychosocial and legal support for vulnerable women at Barbar El-Khazen (BEK) jail and young male adults in Roumieh jail. With an individual interview for every prisoner, a specific run is defined to come up with suitable services for each single prisoner&rsquo;s case. This includes psychological services, punctual therapeutic actions to contain for instance anxiety and to strengthen the ability of adaptation. Group sessions are also organized to resolve common problems to the inmates: impulsive behaviors, emotions management, use of drug, etc. We add to these psychological services a legal assistance, where a lawyer follows on the various cases furnishing individual consultation and assistance. <br />\r\n<br />\r\n<strong>Second action: Life skills and vocational training</strong><br />\r\nTo set up the training, the social staff runs an assessment to design the adapted curricula, among the following: sewing; carpentry; electronics; mechanics; recycling; plus others as per needs. Production workshops are also available in order to provide prisoners with some economic benefit during their detention. Some of their work is exhibited at the Artisan du Liban outlets. Life skills training is also offered for those who want.<br />\r\n<br />\r\n<strong>Third action: support for inmates with a disability</strong><br />\r\nThe Roumieh prison hasn&rsquo;t any suitable infrastructure for persons with disabilities. Therefore, slides, handrail and baths are being installed to facilitate their daily life and to increase their autonomy inside the jail. In BEK, a kitchen has been renewed, and Mouvement Social has concerted the purchase of the kitchen material. <br />\r\n<br />\r\n<strong>Fourth action: cultural activities</strong><br />\r\nCultural activities are being implemented in Roumieh and in BEK (yoga, movie club, sport, music, creative writing, theatre and video making), to favor positive relational approaches among inmates. A newsletter is also issued to break the isolation between &quot;the inside&quot; and &quot;the outside&quot;.<br />\r\n<br />\r\n<strong>Fifth action: Family reconciliation service</strong><br />\r\nWe believe that family is a major factor in the reintegration process, being the first step of prisoners&rsquo; path to normal life. In BEK, MS staff succeeds in covering relationship needs between prisoners and their families. In Roumieh, the problem is the high number of inmates, hence security access restrictions to family visits. Still, it is of paramount importance to focus on family healing role, whenever needed.  <br />\r\n<br />\r\n<strong>Sixth action: End of sentence preparation </strong><br />\r\nTowards the end of the prison sentence, a phase of follow-up starts to help social reintegration and prevent recidivism. Follow up activity consists in individual counseling. Upon release, Roumieh prisoners are offered a temporary hosting facility, managed by another NGO (AJEM) in Rabieh (Antelias). It offers a temporary accommodation and psychosocial support up to social reintegration. In BEK prison, foreign prisoners (who constitute a large part of imprisoned women), could be addressed to Support Centers for victims of violence and individuals at risk of social exclusion. <br />\r\n<br />\r\n<strong>Seventh action: Improvement of the justice and penitentiary system</strong><br />\r\nMS, along with its local and foreign partners, tries to reform the penitentiary system. Training sessions and coordinated actions are organized in this regard. One of the main axes of action evolves around replacing detention with &lsquo;community work&rsquo; or &lsquo;supervised freedom&rsquo;. A 2002 law allows those alternatives for juveniles but it is rarely used by judges. So, MS tries hard to make it happen as frequently as possible, through direct contacts with judges and lawyers, and finding places (NGOs, municipalities) where sentenced youngsters could work under proper supervision.<br />\r\n<br />\r\n<strong>For more information</strong><br />\r\nCharlotte Tanios: <br />\r\n<a href=\"mailto:c.tanios@mouvementsocial.org\"> c.tanios@mouvementsocial.org</a><br />\r\nTel: 70115682<br />\r\n<br />\r\nNada Abbani: <br />\r\n<a href=\"mailto:n.abbani@mouvementsocial.org\">n.abbani@mouvementsocial.org</a><br />\r\nTel: 70299617', 'The involvement of Mouvement Social (MS) in prisons has been continuous since 1993. Multiple programmes, adapted to the circumstances, have been applied, in collaboration with funding agencies (mainly international organizations). The present programme is a perfect example of how MS and partners deal with this somehow neglected issue in the country.   <br />\r\n<br />\r\nFor this programme, MS partners with local NGOs that work in the same field, and has the active financial and technical support of Italian NGOs: ARCS, No Peace Without Justice (NPWJ), Tuscany Prisoners&rsquo; Rights Guarantor, Antigone, Prisoners&rsquo; Rights Guarantor.<br />\r\n<br />\r\n<strong>  First action: Psychological and legal support </strong><br />\r\nThis initiative aims to offer psychosocial and legal support for vulnerable women at Barbar El-Khazen (BEK) jail and young male adults in Roumieh jail. With an individual interview for every prisoner, a specific run is defined to come up with suitable services for each single prisoner&rsquo;s case. This includes psychological services, punctual therapeutic actions to contain for instance anxiety and to strengthen the ability of adaptation. Group sessions are also organized to resolve common problems to the inmates: impulsive behaviors, emotions management, use of drug, etc. We add to these psychological services a legal assistance, where a lawyer follows on the various cases furnishing individual consultation and assistance. <br />\r\n<br />\r\n<strong>Second action: Life skills and vocational training</strong><br />\r\nTo set up the training, the social staff runs an assessment to design the adapted curricula, among the following: sewing; carpentry; electronics; mechanics; recycling; plus others as per needs. Production workshops are also available in order to provide prisoners with some economic benefit during their detention. Some of their work is exhibited at the Artisan du Liban outlets. Life skills training is also offered for those who want.<br />\r\n<br />\r\n<strong>Third action: support for inmates with a disability</strong><br />\r\nThe Roumieh prison hasn&rsquo;t any suitable infrastructure for persons with disabilities. Therefore, slides, handrail and baths are being installed to facilitate their daily life and to increase their autonomy inside the jail. In BEK, a kitchen has been renewed, and Mouvement Social has concerted the purchase of the kitchen material. <br />\r\n<br />\r\n<strong>Fourth action: cultural activities</strong><br />\r\nCultural activities are being implemented in Roumieh and in BEK (yoga, movie club, sport, music, creative writing, theatre and video making), to favor positive relational approaches among inmates. A newsletter is also issued to break the isolation between &quot;the inside&quot; and &quot;the outside&quot;.<br />\r\n<br />\r\n<strong>Fifth action: Family reconciliation service</strong><br />\r\nWe believe that family is a major factor in the reintegration process, being the first step of prisoners&rsquo; path to normal life. In BEK, MS staff succeeds in covering relationship needs between prisoners and their families. In Roumieh, the problem is the high number of inmates, hence security access restrictions to family visits. Still, it is of paramount importance to focus on family healing role, whenever needed.  <br />\r\n<br />\r\n<strong>Sixth action: End of sentence preparation </strong><br />\r\nTowards the end of the prison sentence, a phase of follow-up starts to help social reintegration and prevent recidivism. Follow up activity consists in individual counseling. Upon release, Roumieh prisoners are offered a temporary hosting facility, managed by another NGO (AJEM) in Rabieh (Antelias). It offers a temporary accommodation and psychosocial support up to social reintegration. In BEK prison, foreign prisoners (who constitute a large part of imprisoned women), could be addressed to Support Centers for victims of violence and individuals at risk of social exclusion. <br />\r\n<br />\r\n<strong>Seventh action: Improvement of the justice and penitentiary system</strong><br />\r\nMS, along with its local and foreign partners, tries to reform the penitentiary system. Training sessions and coordinated actions are organized in this regard. One of the main axes of action evolves around replacing detention with &lsquo;community work&rsquo; or &lsquo;supervised freedom&rsquo;. A 2002 law allows those alternatives for juveniles but it is rarely used by judges. So, MS tries hard to make it happen as frequently as possible, through direct contacts with judges and lawyers, and finding places (NGOs, municipalities) where sentenced youngsters could work under proper supervision.<br />\r\n<br />\r\n<strong>For more information</strong><br />\r\nCharlotte Tanios: <br />\r\n<a href=\"mailto:c.tanios@mouvementsocial.org\"> c.tanios@mouvementsocial.org</a><br />\r\nTel: 70115682<br />\r\n<br />\r\nNada Abbani: <br />\r\n<a href=\"mailto:n.abbani@mouvementsocial.org\">n.abbani@mouvementsocial.org</a><br />\r\nTel: 70299617', 'Chadia (her name has been changed), 27 years old, known as detainee B.K. 13, has been imprisoned, for the first time, for working as a drug dealer. Her life was already a nightmare, but detention was a final choc that wiped off all confidence in herself and her future, while she is in her early life. We had to start an individual follow-up with building trust between us, and helped her to cope with her situation. Then we draw up together a life project, and started to implement it by giving her tasks to give some meaning to her detainee life. She was encouraged to participate in all activities provided by MS. With time, she acquired many social skills: the ability to communicate and make the right decisions to reach her goals, along the way to helping her plan for her future after her release. It is a typical case. Teaching some work skills was perhaps the simple part. What is hard in her case, as with many others, is to the ability to overcome fears, despair, lack of communication, and the absence of any life plan. In this case, drug use had also to be tackled.', 'Chadia (her name has been changed), 27 years old, known as detainee B.K.  13, has been imprisoned, for the first time, for working as a drug  dealer. Her life was already a nightmare, but detention was a final choc  that wiped off all confidence in herself and her future, while she is  in her early life. We had to start an individual follow-up with building  trust between us, and helped her to cope with her situation. Then we  draw up together a life project, and started to implement it by giving  her tasks to give some meaning to her detainee life. She was encouraged  to participate in all activities provided by MS. With time, she acquired  many social skills: the ability to communicate and make the right  decisions to reach her goals, along the way to helping her plan for her  future after her release. It is a typical case. Teaching some work  skills was perhaps the simple part. What is hard in her case, as with  many others, is to the ability to overcome fears, despair, lack of  communication, and the absence of any life plan. In this case, drug use  had also to be tackled.', 'Chadia (her name has been changed), 27 years old, known as detainee B.K.  13, has been imprisoned, for the first time, for working as a drug  dealer. Her life was already a nightmare, but detention was a final choc  that wiped off all confidence in herself and her future, while she is  in her early life. We had to start an individual follow-up with building  trust between us, and helped her to cope with her situation. Then we  draw up together a life project, and started to implement it by giving  her tasks to give some meaning to her detainee life. She was encouraged  to participate in all activities provided by MS. With time, she acquired  many social skills: the ability to communicate and make the right  decisions to reach her goals, along the way to helping her plan for her  future after her release. It is a typical case. Teaching some work  skills was perhaps the simple part. What is hard in her case, as with  many others, is to the ability to overcome fears, despair, lack of  communication, and the absence of any life plan. In this case, drug use  had also to be tackled.', '0000-00-00', '<br />', '', 0, '', 'Prisoners', '', '', 'Support for Young Male and Women Prisoners ', '');
INSERT INTO `programs` (`programs_id`, `programs_category_id`, `title_ar`, `title_en`, `title_fr`, `description_ar`, `description_en`, `description_fr`, `beneficiaries_ar`, `beneficiaries_en`, `beneficiaries_fr`, `date`, `location`, `budget`, `show_home`, `sub_title_ar`, `sub_title_en`, `sub_title_fr`, `sub_details_ar`, `sub_details_en`, `sub_details_fr`) VALUES
(20, 4, 'SAFIR or Youth in Action', 'SAFIR or Youth in Action', 'SAFIR or Youth in Action', '<br />', '<strong>The young generation aspires to a new model of society and governance, more inclusive and fairer. And we support it.<br />\r\n</strong><br />\r\nMouvement Social believes that youth are the most important agents of change in society. In this context, it is now a partner of Safir, an ambitious project supporting youth and aiming the achievement of the Sustainable Development Goals (SDGs). <br />\r\n<br />\r\nThis project, in progress in Lebanon (and 8 other regional countries), is co-financed by the European Union, and implemented by Institut Fran&ccedil;ais, Agence Fran&ccedil;aise de la Francophonie (AFF), The French CFI D&eacute;veloppement M&eacute;dias, Pitchworthy (Lebanese social accelerator), and other Arab NGOs, with Mouvement Social as local partner, along with other NGOs. <br />\r\n<br />\r\n<strong>Three Objectives</strong><br />\r\nSafir project aims at fostering youth participation and the development of projects with social, cultural and environmental impact. The project, which will be implemented over 4 years, till 2024, is built around 3 pillars: <br />\r\n<ul>\r\n    <li>Supporting a number of young project leaders.</li>\r\n    <li>Creating spaces for youth to advocate for their rights.</li>\r\n    <li>Supporting youth in action.</li>\r\n</ul>\r\nOther partners in this project will complement its action by developing a network of social entrepreneurship structures and incubators, and offering funding to successful and ambitious projects. <br />\r\nMS will give during the course of the project a selected number of young people the opportunity to participate in social transformation by supporting initiatives focused on the SDGs. <br />\r\nMouvement Social was chosen for its expertise to offer young people advocacy training. It will be given the means to support the project beneficiaries in multiple ways. Eventually, the objective is to structure an ecosystem favorable to the development of projects with positive social impact, and to promote talents and promising initiatives.<br />\r\nThe output will also include, for Mouvement Social, strengthening advocacy training methodologies.  <br />\r\n<br />\r\n<strong>  For more information:</strong><br />\r\nRaji Said<br />\r\n<a href=\"mailto:r.said@mouvementsocial.org\"> r.said@mouvementsocial.org</a><br />\r\nTel: 70 117 689<br />\r\n<br />\r\nKatia Kartenian<br />\r\n<a href=\"mailto:k.kartenian@mouvementsocial.org\"> k.kartenian@mouvementsocial.org</a><br />\r\nTel: 81 430 037', '<br />', '<br />', '<label class=\"col-md-3 control-label\"><br />\r\n</label>', '<br />', '0000-00-00', '<br />', '', 0, '', 'SAFIR or Youth in Action', '', '', 'The young generation aspires to a new model of society and governance, more inclusive and fairer. And we support it', ''),
(21, 4, 'The Shabake Project', 'The Shabake Project', 'The Shabake Project', '<br />', '&ldquo;Strengthening Resilience of Lebanese Civil Society in Order to Improve Crisis Prevention and Management&rdquo;: that is the objective of the Shabake project, which is supported by AFD - Agence Fran&ccedil;aise de D&eacute;veloppement and the Denmark&rsquo;s development cooperation Danida, and implemented by the French public agency for international technical cooperation Expertise France, with Mouvement Social (MS) as local partner (among other NGOs).<br />\r\nTotal amount of the grant: USD 689,321<br />\r\n<br />\r\n<strong>How is the project affecting our activities?</strong><br />\r\nThrough the Shabake project, Mouvement Social will be strengthened in order to empower affected youth. The quality of this initiative will pick MS&rsquo; resilience to properly respond in times of crisis. Moreover, MS is investing its historical experience and its gained capacities to revitalize Volunteerism as a key component for civic engagement and community development. All of which is needed in such defining moments in Lebanon. The project holds two main complementary components.<br />\r\n<br />\r\n<strong>Component 1: Capacity Building</strong><br />\r\nThrough this component, Mouvement Social will eventually become a more efficient civil society actor. The project will allow MS to invest the needed expertise to give local communities more strength by empowering the staff with the needed skills, establishing control systems, and leveraging on the existing human resources. <br />\r\n<br />\r\n<strong>Component 2: Vulnerability Reduction Project</strong><br />\r\nThrough this component, MS is launching a youth volunteer program, which aims at engaging youth to reduce the impact of crises on their societies. MS is recruiting young men and women from universities, high schools, and social centers, and preparing 100 of them to intervene in the most affected areas through the implementation of citizenship projects. This relatively small group will form the cadres through which snowball volunteer groups will grow. <br />\r\nThis objective is pursued relentlessly, in spite of some difficulties and delays due to the economic, financial and sanitary situation. The process is going on thanks to the collaboration of university officials. Online sessions were introduced to present the Shabake program to interested students. This is also backed by a social media campaign, through inciting clips and posts. Followed eight training sessions about diversity and inclusiveness, human rights, social justice, conflict resolution, advocacy, leadership, sustainable development, and project management.  <br />\r\n<br />\r\n<strong> For more information:</strong><br />\r\nRaji Said<br />\r\n<a href=\"mailto:r.said@mouvementsocial.org\">r.said@mouvementsocial.org</a><br />\r\n<br />\r\nFadwa Farhat<br />\r\n<a href=\"mailto:f.farhat@mouvementsocial.org\"> f.farhat@mouvementsocial.org</a><br />\r\nTel: 70117689', '<br />', 'Lea Wehbe (17 years old, high school, Nabatiye): I volunteered with the Movement Social within Shabakeh project to help ease the effects of the well-known crises in Lebanese society today. As a woman, it is also important for me to break the stereotypical image of women\'s abilities, and provide equal opportunities for both genders.', 'Lea Wehbe (17 years old, high school, Nabatiye): I volunteered with the  Movement Social within Shabakeh project to help ease the effects of the  well-known crises in Lebanese society today. As a woman, it is also  important for me to break the stereotypical image of women\'s abilities,  and provide equal opportunities for both genders.', '<br />', '0000-00-00', '<br />', '', 0, '', 'The Shabake Project', '', '', 'Strengthening Resilience of Lebanese Civil Society in Order to Improve Crisis Prevention and Management', ''),
(22, 2, 'Sponsorship Program', 'Sponsorship Program', 'Sponsorship Program', '<br />', 'This program is a particular one, even though it is included into our global effort to improve the living conditions and educational needs of vulnerable children and families. The program, budgeted (last year) at 287,000$, is going on since 1993, with the continuous support of the French NGO &lsquo;Partage avec les enfants du monde&rsquo;. The initial idea behind this association is to incite French individuals to sponsor (be a &lsquo;godfather&rsquo; for) one child in a country subject to a socio-economic crisis or to sponsor activities in relevant centers. The godfather/godmother commits to send a monthly amount of money to help children pursue education and have a better life. In order to give a more personal touch, the sponsored child sends periodic letters to their godfather with pictures, drawings, and news. A newsletter about the situation in Lebanon, the socio-economic conditions, and MS actions is also prepared thrice a year by a group by young volunteers from this project and sent individually to each godfather. On Average, about 450 children are yearly supported by their French godfathers through this scheme.<br />\r\n<br />\r\nPartage actions have lately developed to help our institutions that cater to the needs of those children. They also support a real free of charge school. The activities related to the program are concentrated in Sin-El-Fil and Jnah areas, around our centers there. <br />\r\n<br />\r\nPartage interventions have the following impact:<br />\r\n<ul>\r\n    <li>450 children are now directly helped by their French godfather.</li>\r\n    <li>229 children, aged 6-17, benefit from learning opportunities, activities, psychological support, in addition, lately, to COVID-19 awareness.</li>\r\n    <li>119 mothers took part in remote activities about COVID-19 awareness, social responsibility, psychological and positive parenting.</li>\r\n    <li>229 households benefited from cash assistance, in the form of food and hygiene items.</li>\r\n    <li>Children with educational difficulties, coming from surrounding schools, are helped to improve their educational level.</li>\r\n    <li>Children with socio-economic difficulties benefit from our support to enroll in schools.</li>\r\n    <li>And this year, Partage NGO helped renovating MS Sin El-Fil and Jnah Centers damaged by the Beirut Port Blast.</li>\r\n    <li>In Jnah center, around 40 to 50 children are recruited per year in its dedicated kindergarten. Other children (currently 255) at risk of school failure or dropping out receive also educational support.</li>\r\n    <li>The program also allowed 95 young people in socioeconomic difficulties to access technical or university training over a period of 3 years through scholarships and appropriate monitoring. So far last year, 46 young people have been referred to technical schools and 28 to universities.</li>\r\n    <li>For children with special needs, speech therapists and psychologists are available in the center.</li>\r\n</ul>\r\nIn total, during 2020, around 746 children and young people were identified and recruited to benefit from the educational support, plus 657 children and youth benefited from MS services.', 'This program is a particular one, even though it is included into our global effort to improve the living conditions and educational needs of vulnerable children and families. The program, budgeted (last year) at 287,000$, is going on since 1993, with the continuous support of the French NGO &lsquo;Partage avec les enfants du monde&rsquo;. The initial idea behind this association is to incite French individuals to sponsor (be a &lsquo;godfather&rsquo; for) one child in a country subject to a socio-economic crisis or to sponsor activities in relevant centers. The godfather/godmother commits to send a monthly amount of money to help children pursue education and have a better life. In order to give a more personal touch, the sponsored child sends periodic letters to their godfather with pictures, drawings, and news. A newsletter about the situation in Lebanon, the socio-economic conditions, and MS actions is also prepared thrice a year by a group by young volunteers from this project and sent individually to each godfather. On Average, about 450 children are yearly supported by their French godfathers through this scheme.<br />\r\n<br />\r\nPartage actions have lately developed to help our institutions that cater to the needs of those children. They also support a real free of charge school. The activities related to the program are concentrated in Sin-El-Fil and Jnah areas, around our centers there. <br />\r\n<br />\r\nPartage interventions have the following impact:<br />\r\n<ul>\r\n    <li>450 children are now directly helped by their French godfather.</li>\r\n    <li>229 children, aged 6-17, benefit from learning opportunities, activities, psychological support, in addition, lately, to COVID-19 awareness.</li>\r\n    <li>119 mothers took part in remote activities about COVID-19 awareness, social responsibility, psychological and positive parenting.</li>\r\n    <li>229 households benefited from cash assistance, in the form of food and hygiene items.</li>\r\n    <li>Children with educational difficulties, coming from surrounding schools, are helped to improve their educational level.</li>\r\n    <li>Children with socio-economic difficulties benefit from our support to enroll in schools.</li>\r\n    <li>And this year, Partage NGO helped renovating MS Sin El-Fil and Jnah Centers damaged by the Beirut Port Blast.</li>\r\n    <li>In Jnah center, around 40 to 50 children are recruited per year in its dedicated kindergarten. Other children (currently 255) at risk of school failure or dropping out receive also educational support.</li>\r\n    <li>The program also allowed 95 young people in socioeconomic difficulties to access technical or university training over a period of 3 years through scholarships and appropriate monitoring. So far last year, 46 young people have been referred to technical schools and 28 to universities.</li>\r\n    <li>For children with special needs, speech therapists and psychologists are available in the center.</li>\r\n</ul>\r\nIn total, during 2020, around 746 children and young people were identified and recruited to benefit from the educational support, plus 657 children and youth benefited from MS services.', '<br />', '<table width=\"100%\" cellspacing=\"1\" cellpadding=\"1\" border=\"1\">\r\n    <tbody>\r\n        <tr>\r\n            <td>&nbsp;</td>\r\n            <td colspan=\"3\"><strong>Children</strong></td>\r\n            <td colspan=\"2\"><strong>Adults</strong></td>\r\n        </tr>\r\n        <tr>\r\n            <td>Age of direct beneficiaries</td>\r\n            <td>Pre school  0 to 5/6 years</td>\r\n            <td>Primary 6/7 to 12/13 years</td>\r\n            <td>Secondary 13/14 to 17 years</td>\r\n            <td>&amp;18 to 24 years</td>\r\n            <td>More than 25 years</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Number of direct beneficiaries</td>\r\n            <td>&nbsp;134</td>\r\n            <td>380</td>\r\n            <td>&nbsp;177</td>\r\n            <td>&nbsp;57</td>\r\n            <td>&nbsp;423</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Total direct beneficiaries</td>\r\n            <td colspan=\"3\">&nbsp;691</td>\r\n            <td colspan=\"2\">&nbsp;480</td>\r\n        </tr>\r\n        <tr>\r\n            <td>Total indirect beneficiaries</td>\r\n            <td colspan=\"3\">&nbsp;1161</td>\r\n            <td colspan=\"2\">&nbsp;350</td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n<br />\r\n<br />\r\n<br />\r\nMy name is Mahmoud, I am 11 years old, and I live in Jnah area. My brothers and my sister have already studied in the Social Mouvement center; as for me, I\'ve been there since kindergarten. Since the start of confinement, I have been spending my time in the countryside in the family home while my father has stayed in Beirut to work, although he returns home every Saturday. We have a lot of difficulties, especially because of these online studies, but the MS center does everything possible to help us: every day educators help me with my homework and lessons. I spend my time studying and playing with the educational games that were offered to us in December. I hope everything will go back to how it was before so that I could come back to Beirut and the Mouvement Social Center to resume all our previous activities.', '<br />', '0000-00-00', '<br />', '', 0, '', 'Partage', '', '', 'Sponsorship Program', ''),
(23, 2, '', 'Inclusion Program', '', '<br />', 'Children with disability are rarely taken in charge by official educational institutions. In fact, there are only few public schools adapted to the specific needs of children with disability. Instead, public budgets are allocated to private organizations that deal with these children. But main funds and actual work are provided by national NGOs and international organizations. <br />\r\n<br />\r\nMouvement Social (MS) has always been very active in this area, as it is consistent with its belief that every human, especially the neediest, should have proper attention and care. For this project, MS has the support of UNICEF.<br />\r\n<br />\r\n<strong>  What are we aiming for?</strong>\r\n<ul>\r\n    <li>To enroll children with disabilities in appropriate education and child protection services.</li>\r\n    <li>To promote the social inclusion of children with disabilities in their community, through inciting positive attitudes.</li>\r\n</ul>\r\nTo reach these objectives, we assigned to the job specialized human resources, including 8 social workers involved in social integration, covering the following areas: Akkar (Qobayat), Tripoli and its suburbs, Bekaa, Baalbek-Hermel, Beirut, Mount Lebanon, South (Saida), and Nabatiyeh. We also recruited 3 specialists in social integration and inclusion.<br />\r\n<br />\r\nAdditionally, we helped in founding local committees (or restructure them when they already existed) consisting of community active bodies. The committees&rsquo; output is multi-dimensional:<br />\r\n<ul>\r\n    <li>Spread awareness about the inclusion and rights of children with disabilities.</li>\r\n    <li>Support efforts among local associations and authorities for the benefit of children.</li>\r\n    <li>Support efforts for registration of children within educational programs.</li>\r\n</ul>\r\nTo back these efforts, we also recruited 56 volunteers (an average of 7 per center) to participate in providing awareness sessions and advocating for inclusion and the rights of children with disabilities.<br />\r\n<br />\r\n<strong>Outcomes</strong><br />\r\nIn terms of quantitative results, MS reached the following output:<br />\r\n<ul>\r\n    <li>A medical evaluation (auditory, locomotor and speech), has been done to determine the pathway for 800 recruited children. Those who have been identified were enrolled in appropriate education programs (formal or informal) or child protection programs.</li>\r\n    <li>Referral networks with specialized organizations were established, and the listing of all relevant organizations was updated.</li>\r\n    <li>A survey of available services (special services for each type of disability, and health facilities) was conducted.</li>\r\n    <li>Children were then directed as per their age and status to NGOs that wish to host children with disabilities. Children with severe disabilities are placed and followed up in specialized schools/NGOs.</li>\r\n    <li>Relatives/tutors of children with disabilities, along with people with disabilities, were sensitized to be aware of their rights, so that they could be able to request their inclusion in educational institutions and specialized services.</li>\r\n    <li>Promote inclusion in different regions through specific events.</li>\r\n</ul>\r\nThis long-haul work that MS is accomplishing will be pursued as long as needs are still massive and unsatisfied, with the help of international organizations. <br />\r\n<strong>     <br />\r\nFor more information:</strong><br />\r\nFouad Mansour<br />\r\n<a href=\"mailto: f.mansour@mouvementsocial.org\"> f.mansour@mouvementsocial.org</a><br />\r\nTel: 70-115964', '<br />', '<br />', '<br />', '<br />', '0000-00-00', '<br />', '', 1, '', 'Inclusion Program', '', '', 'Integration of children with disabilities in the local community ', ''),
(24, 2, 'Supporting vulnerable children’s education', 'Enrolling children in education', 'Supporting vulnerable children’s education', '<br />', 'A significant number of young boys and girls in poor areas, Lebanese and non-Lebanese (mainly Syrian), are not pursuing proper education. Instead, most are being used by their parents, tutors, or pushed by urgent need, to work at a very young age, sometimes in jobs with high risks.<br />\r\n<br />\r\n<br />\r\nIn order to help these vulnerable young residents and avoid reaching a &lsquo;lost generation&rsquo; situation, Mouvement Social (MS) has been working with UNICEF to ensure enrolling them in an educational process, according to multiple formulas. <br />\r\n<br />\r\nThe present program is being executed in many areas: Halba (Akkar), Tripoli, Jnah, Bourj Hammoud, Ghobeyri, Saida, Nabatieh, Zahle-Kfarzabad, Jdeidet El Fekha (Baalbek). Targeted areas are mainly poor neighborhoods in cities, illegal compounds, shelters in rural areas. <br />\r\n<br />\r\nMS is reaching out for these children and offering them minimal educational perspective, under three actions:<br />\r\n<ul>\r\n    <li><strong>Basic Literacy and Numeracy program (BLN):</strong> 1400 out-of-school children between 10 and 14 years old (50% of girls, 3% of children with special needs).</li>\r\n    <li><strong>Adapted Literacy and Numeracy program (ABLN):</strong> 1800 out-of-school vulnerable children between 10 and 14 years old (70% are working children, 40% of girls, 5% of children with special needs).</li>\r\n    <li><strong>Social Inclusion:</strong> 1500 men, women and children, including 800 children with special education needs or disability between 3 and 18 years old.</li>\r\n    <li><strong>Outreach and Social Behavioral Change:</strong> 7,104 children between 3 and 18 years.</li>\r\n</ul>\r\nAs for indirect beneficiaries, MS&rsquo; program involves caregivers, siblings and relatives of the direct children, in addition to community stakeholders through public events and collaboration with 13 municipalities in the targeted areas.<br />\r\nThe program has a cost of 2,292,923 USD, funded at 90% by UNICEF. <br />\r\n<br />\r\n<strong>Implementation<br />\r\n</strong><br />\r\nMS is implementing the program in multiple formats and through a series of actions:<br />\r\n<ul>\r\n    <li><strong>Outreach procedures</strong> (household visits, meetings with communities, parents and employers) to identify marginalized groups, in order to sensitize them on child rights, inclusion, protection, and health. MS centers have a long-lasting presence in the targeted geographical areas which led to trustful bonds with local communities.</li>\r\n    <li><strong>Train and support</strong> the mapped communities, partners, including municipalities, ministries, and governorates. Awareness sessions are provided to caregivers. MS coordinates with UNICEF&rsquo;s field offices and Ministry of Education regional offices to follow-up on children placed in schools.</li>\r\n    <li><strong>Provide non-formal education</strong> for non-Lebanese 10 to 14 years girls and boys who are hardest to enroll in formal education. The program will enable children who left school since many years, or who never entered school, to learn basic literacy and numeracy. The objective is to convey those children afterwards to vocational training.</li>\r\n    <li><strong>Provide services</strong> to support children with special needs (motor impairment, hearing/seeing impairment, intellectual impairment, speaking impairment) to enrol in formal education and non-formal education.</li>\r\n</ul>\r\nMS has an inclusive approach in a non-discriminatory fashion, i.e.  equity in terms of nationality and gender. The infrastructure of MS, including the accumulation of expertise, allows us to maintain the implementation of the program on a continuous basis. <br />\r\n<br />\r\n<strong>   For more information:</strong><br />\r\nFouad Mansour<br />\r\n<a href=\"mailto:f.mansour@mouvementsocial.org\"> f.mansour@mouvementsocial.org</a><br />\r\nTel: 70-115964', '<br />', '<br />', '<br />', '<br />', '0000-00-00', '<br />', '', 0, 'eeew 12333', 'Enrolling children in education', 'fdgdg', 'gg gffggg', 'Supporting vulnerable children’s education', 'fdgdfg'),
(25, 1, 'Qudra', 'Qudra  project', 'Qudra ', '<br />', 'The aim of this intervention is to lessen the effects of the Syrian and Iraqi crises by addressing the needs of refugees, internally displaced persons (IDPs), returnees and Lebanese host communities. Within this framework, Mouvement Social (MS) is setting the ground for a humanitarian-to-development aid transition in collaboration with the Ministry of Social Affairs (MoSA). The intervention is focused on the delivery of protection services within the Social Development Centres (SDCs). The project, which has a budget of USD 1,070,666, has a duration of 20 months. It is supported by the European Union, Germany, Spain, and Hungary, and implemented by Expertise France, with Mouvement Social as local partner (among other NGOs). <br />\r\n<br />\r\nThe project targets:<br />\r\n<ol type=\"a\">\r\n    <li>High-risk children aged between 0 and 18 years old, including unaccompanied minors, children associated with armed conflicts and violence, and children who dropped out of school.</li>\r\n    <li>Vulnerable youths and adults, including persons with disabilities, single mothers, elderly, and others.</li>\r\n</ol>\r\nThe present action builds on the activities and results of a former nearly similar Qudra-1 (Dec. 2018 to Aug. 2019), that was operated in Majdal Anjar, Doueir and Ansar. The present Qudra-2 targets disadvantaged people in the southern Doueir and Ansar villages, by expanding protection services provided by MS and other working partners. These targeted areas host refugees and locals, which increases conflicts due to different social and cultural norms, and competition over employment. <br />\r\n<br />\r\nActivities are being implemented through a series of steps. For instance: <br />\r\n<ul>\r\n    <li>Coordinate with SDC Directors so as to include more people in planned activities;</li>\r\n    <li>Provide further opportunities to volunteers so that they could sustain their engagement beyond the project&rsquo;s duration;</li>\r\n    <li>Refer targeted beneficiaries to MS&rsquo; other programmes offered in adjacent community centres.</li>\r\n</ul>\r\n<strong>  Targeted Beneficiaries </strong><br />\r\nThe final beneficiaries of the action will be around 2,000 children below the age of 18 who are in need of protection services. They can be categorised as vulnerable children engaging in the Worst Forms of Child Labour (WFCL), including those who are associated with armed conflict and violence, who dropped out of school, or who are unaccompanied minors. The action also benefits around 1,500 vulnerable adults and youth, including people with disability, single mothers and elderly. Finally, 36 youth volunteers are included in the action. <br />\r\n<br />\r\n<strong>   For more information</strong><br />\r\nSalam Rahal: <br />\r\n<a href=\"mailto:s.rahal@mouvementsocial.org\"> s.rahal@mouvementsocial.org</a><br />\r\nTel : 71-548541', '<br />', '<br />', 'why the title is fixed', '<br />', '0000-00-00', '<br />', '', 1, '', 'Qudra project', '', 'is focused on the delivery of protection services within the SDCs', 'Is focused on the delivery of protection services within the SDCs', '');

-- --------------------------------------------------------

--
-- Table structure for table `programs_category`
--

CREATE TABLE `programs_category` (
  `programs_category_id` bigint(20) NOT NULL,
  `cat_name_ar` varchar(255) DEFAULT NULL,
  `cat_name_en` varchar(255) DEFAULT NULL,
  `cat_name_fr` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `description_ar` longtext NOT NULL,
  `description_en` longtext NOT NULL,
  `description_fr` longtext NOT NULL,
  `active` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs_category`
--

INSERT INTO `programs_category` (`programs_category_id`, `cat_name_ar`, `cat_name_en`, `cat_name_fr`, `icon`, `orders`, `description_ar`, `description_en`, `description_fr`, `active`) VALUES
(1, 'Protection', 'Protection', 'Protection', '42726411.png', 1, 'Mouvement Social (MS) has a long history in protecting children at risk. Before the civil war, MS used to organize week-end activities and summer camps for unprivileged children. Some of these were literally living on the street selling chewing gum (so they were called &lsquo;Chiclets Boys&rsquo;). Later on, MS offered them a year-long shelter in Sin-el-Fil. Since then, initiatives to take care of children at risk never stopped, including for instance, in the 1970s, the largest polio vaccination campaign ever launched in the country. More recently, programs target children subject to violence and mistreatment, those who suffer from harsh social conditions and are at risk to fall into illegal activities, if they did not already have problems with the law. Educators and specialists tackle all kinds of challenging situation, including worst forms of child labor, while extending protection and psychological help to the whole family if necessary. MS advantage is that it has, at the same time, the know-how, the resources, and enjoys a wide acceptance by all communities.', 'Mouvement Social (MS) has a long history in protecting children at risk.  Before the civil war, MS used to organize week-end activities and  summer camps for unprivileged children. Some of these were literally  living on the street selling chewing gum (so they were called &lsquo;Chiclets  Boys&rsquo;). Later on, MS offered them a year-long shelter in Sin-el-Fil.  Since then, initiatives to take care of children at risk never stopped,  including for instance, in the 1970s, the largest polio vaccination  campaign ever launched in the country. More recently, programs target  children subject to violence and mistreatment, those who suffer from  harsh social conditions and are at risk to fall into illegal activities,  if they did not already have problems with the law. Educators and  specialists tackle all kinds of challenging situation, including worst  forms of child labor, while extending protection and psychological help  to the whole family if necessary. MS advantage is that it has, at the  same time, the know-how, the resources, and enjoys a wide acceptance by  all communities.', 'Mouvement Social (MS) has a long history in protecting children at risk.  Before the civil war, MS used to organize week-end activities and  summer camps for unprivileged children. Some of these were literally  living on the street selling chewing gum (so they were called &lsquo;Chiclets  Boys&rsquo;). Later on, MS offered them a year-long shelter in Sin-el-Fil.  Since then, initiatives to take care of children at risk never stopped,  including for instance, in the 1970s, the largest polio vaccination  campaign ever launched in the country. More recently, programs target  children subject to violence and mistreatment, those who suffer from  harsh social conditions and are at risk to fall into illegal activities,  if they did not already have problems with the law. Educators and  specialists tackle all kinds of challenging situation, including worst  forms of child labor, while extending protection and psychological help  to the whole family if necessary. MS advantage is that it has, at the  same time, the know-how, the resources, and enjoys a wide acceptance by  all communities.', 1),
(2, 'Education', 'Education', 'Education', '65960167.png', 2, '&nbsp;', 'Mouvement Social (MS) has been involved since its first active years in  the education process of underprivileged children. It all started with  homework support in the 1960s and 1970s. A group of volunteers, students  themselves in secondary classes in high-level schools, used to dedicate  their after-class time to help younger pupils from nearby public  schools accomplish their homework. These teen volunteers (16-18 years  old) were probably not aware that this activity is just an element in MS  commitment that every human, especially the neediest, should have  proper attention and care. And that education is an essential part of  the human development process. The objectives have not changed since.  That&rsquo;s because a significant number of young boys and girls still are  not pursuing proper education. Some are brought out of school and forced  to start working at a very young age. Other cases are even more  dramatic: children with disability, refugees, displaced&hellip; For each  category, MS has come up with adapted programs so that we do not end up  with a &lsquo;lost generation&rsquo;.', '&nbsp;', 1),
(3, 'Prisoners', 'Prisoners', 'Prisoners', '30827658.png', 3, 'Prisons in Lebanon are solely places of detention, with nearly no effort for rehabilitation or alternatives. This goes for all kinds of prisoners, including minors. A law, passed in 2002, gave judges the possibility to replace juvenile imprisonment by public interest work &ndash; an alternative that judges rarely use. Mouvement Social (MS) has been struggling since to make this happen as widely as possible. And this is one of many interventions that MS is pursuing to help convicted juveniles go back to normal life. A parallel work is being done for the sake of women prisoners, especially that many of them are foreign house aids coming from African or Asian countries, a situation that adds to their misfortune.', 'Prisons in Lebanon are solely places of detention, with nearly no effort  for rehabilitation or alternatives. This goes for all kinds of  prisoners, including minors. A law, passed in 2002, gave judges the  possibility to replace juvenile imprisonment by public interest work &ndash;  an alternative that judges rarely use. Mouvement Social (MS) has been  struggling since to make this happen as widely as possible. And this is  one of many interventions that MS is pursuing to help convicted  juveniles go back to normal life. A parallel work is being done for the  sake of women prisoners, especially that many of them are foreign house  aids coming from African or Asian countries, a situation that adds to  their misfortune.<br />\r\n<br />\r\n<strong>Active program</strong><br />\r\nSupport to young and women prisoners in Roumieh and Barbar-el-Khazen prisoners', 'Prisons in Lebanon are solely places of detention, with nearly no effort  for rehabilitation or alternatives. This goes for all kinds of  prisoners, including minors. A law, passed in 2002, gave judges the  possibility to replace juvenile imprisonment by public interest work &ndash;  an alternative that judges rarely use. Mouvement Social (MS) has been  struggling since to make this happen as widely as possible. And this is  one of many interventions that MS is pursuing to help convicted  juveniles go back to normal life. A parallel work is being done for the  sake of women prisoners, especially that many of them are foreign house  aids coming from African or Asian countries, a situation that adds to  their misfortune.', 0),
(4, 'Volunteering', 'Volunteering', 'Volunteering', '32438484.png', 4, 'In January 1961, the first issue of a periodic bulletin called &lsquo;La Revue Sociale&rsquo; (the Social Journal) was published by the new-born Mouvement Social association. In that issue were put out its by-laws where we can find in the very first lines the following: &ldquo;The objectives of the Mouvement Social is to rally young people who want to commit to social action, train them, ideologically and practically, so that they could contribute to solving the social problems of the country&hellip;.&rdquo; Ample details explain how these volunteers should work within their own community and beyond. This is one indication of the importance of volunteering in the founders&rsquo; mind (especially main founder Gr&eacute;goire Haddad himself). For them, it is not enough to find a solution to a social problem somewhere; this should be done, at least partly, by volunteers. That&rsquo;s because, according to MS, the society should take in charge its own development, instead of waiting for some public agency. <br />\r\nPractically, this volunteering spirit grew like a snowball. Groups and clubs were constituted, generations of volunteers spread all over the country, readily available on a phone call to act and achieve any task: vaccination campaigns, education, summer camps and support for vulnerable children, social surveys, development works&hellip; Nowadays, some needs may have changed, but the spirit is still there, through specific recruitment programs.', 'In January 1961, the first issue of a periodic bulletin called &lsquo;La Revue  Sociale&rsquo; (the Social Journal) was published by the new-born Mouvement  Social association. In that issue were put out its by-laws where we can  find in the very first lines the following: &ldquo;The objectives of the  Mouvement Social is to rally young people who want to commit to social  action, train them, ideologically and practically, so that they could  contribute to solving the social problems of the country&hellip;.&rdquo; Ample  details explain how these volunteers should work within their own  community and beyond. This is one indication of the importance of  volunteering in the founders&rsquo; mind (especially main founder Gr&eacute;goire  Haddad himself). For them, it is not enough to find a solution to a  social problem somewhere; this should be done, at least partly, by  volunteers. That&rsquo;s because, according to MS, the society should take in  charge its own development, instead of waiting for some public agency. <br />\r\nPractically, this volunteering spirit grew like a snowball. Groups and  clubs were constituted, generations of volunteers spread all over the  country, readily available on a phone call to act and achieve any task:  vaccination campaigns, education, summer camps and support for  vulnerable children, social surveys, development works&hellip; Nowadays, some  needs may have changed, but the spirit is still there, through specific  recruitment programs.', 'In January 1961, the first issue of a periodic bulletin called &lsquo;La Revue  Sociale&rsquo; (the Social Journal) was published by the new-born Mouvement  Social association. In that issue were put out its by-laws where we can  find in the very first lines the following: &ldquo;The objectives of the  Mouvement Social is to rally young people who want to commit to social  action, train them, ideologically and practically, so that they could  contribute to solving the social problems of the country&hellip;.&rdquo; Ample  details explain how these volunteers should work within their own  community and beyond. This is one indication of the importance of  volunteering in the founders&rsquo; mind (especially main founder Gr&eacute;goire  Haddad himself). For them, it is not enough to find a solution to a  social problem somewhere; this should be done, at least partly, by  volunteers. That&rsquo;s because, according to MS, the society should take in  charge its own development, instead of waiting for some public agency. <br />\r\nPractically, this volunteering spirit grew like a snowball. Groups and  clubs were constituted, generations of volunteers spread all over the  country, readily available on a phone call to act and achieve any task:  vaccination campaigns, education, summer camps and support for  vulnerable children, social surveys, development works&hellip; Nowadays, some  needs may have changed, but the spirit is still there, through specific  recruitment programs.', 1),
(5, 'Socio economic empowerment', 'Socio economic empowerment', 'Socio economic empowerment', '89633698.png', 5, 'The multiple crises that hit the country, over and over again, left a lot of young girls and boys without enough skills to let them find a job and have a decent life. The situation is even worse for those who suffer from disability or living in a challenging environment. Risks are high to find these young people engage into illegal activities. This is typically a situation where &lsquo;charitable&rsquo; aid is certainly not adequate. Youth have to be empowered so that they could depend on their own abilities to pursue a normal life &ndash; and be convinced that there is a way out. Mouvement Social (MS) has always been heading towards this direction. Vocational training is the key, but sometimes not enough. Psychological support could be needed. Even basic literacy is to be taught to those who left the school too early without acquiring elementary knowledge, required for any job. MS interventions accompany them all the way: from literacy and numeracy learning, to enrolment in formal education, to vocational training, to life skills acquisition, to internships&hellip;', 'The multiple crises that hit the country, over and over again, left a  lot of young girls and boys without enough skills to let them find a job  and have a decent life. The situation is even worse for those who  suffer from disability or living in a challenging environment. Risks are  high to find these young people engage into illegal activities. This is  typically a situation where &lsquo;charitable&rsquo; aid is certainly not adequate.  Youth have to be empowered so that they could depend on their own  abilities to pursue a normal life &ndash; and be convinced that there is a way  out. Mouvement Social (MS) has always been heading towards this  direction. Vocational training is the key, but sometimes not enough.  Psychological support could be needed. Even basic literacy is to be  taught to those who left the school too early without acquiring  elementary knowledge, required for any job. MS interventions accompany  them all the way: from literacy and numeracy learning, to enrolment in  formal education, to vocational training, to life skills acquisition, to  internships&hellip;<br />\r\n<strong><br />\r\nActive program:</strong><br />\r\nYouth Action Plan: Supporting vulnerable girls and boys with learning, soft and hard skills, and employability programmes.', 'The multiple crises that hit the country, over and over again, left a  lot of young girls and boys without enough skills to let them find a job  and have a decent life. The situation is even worse for those who  suffer from disability or living in a challenging environment. Risks are  high to find these young people engage into illegal activities. This is  typically a situation where &lsquo;charitable&rsquo; aid is certainly not adequate.  Youth have to be empowered so that they could depend on their own  abilities to pursue a normal life &ndash; and be convinced that there is a way  out. Mouvement Social (MS) has always been heading towards this  direction. Vocational training is the key, but sometimes not enough.  Psychological support could be needed. Even basic literacy is to be  taught to those who left the school too early without acquiring  elementary knowledge, required for any job. MS interventions accompany  them all the way: from literacy and numeracy learning, to enrolment in  formal education, to vocational training, to life skills acquisition, to  internships&hellip;', 1);

-- --------------------------------------------------------

--
-- Table structure for table `programs_donors`
--

CREATE TABLE `programs_donors` (
  `programs_donors_id` bigint(20) NOT NULL,
  `donor_id` bigint(20) DEFAULT NULL,
  `program_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programs_donors`
--

INSERT INTO `programs_donors` (`programs_donors_id`, `donor_id`, `program_id`) VALUES
(2, 1, 9),
(3, 1, 10),
(4, 1, 11),
(5, 1, 12),
(6, 1, 14),
(8, 2, 12),
(9, 2, 13),
(10, 3, 10),
(11, 3, 11),
(12, 2, 14),
(13, 4, 11),
(14, 3, 13),
(16, 4, 9),
(17, 1, 8),
(18, 2, 8),
(19, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `program_images`
--

CREATE TABLE `program_images` (
  `program_images_id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_main` tinyint(1) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `programs_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program_images`
--

INSERT INTO `program_images` (`program_images_id`, `image`, `is_main`, `video_url`, `orders`, `programs_id`) VALUES
(17, '29257480.jpg', 1, '', 0, 8),
(18, '64267095.jpg', 1, '', 0, 10),
(19, '80188617.jpg', 1, '', 0, 9),
(20, '80838196.jpg', 1, '', 0, 11),
(21, '66941585.jpg', 1, '', 0, 12),
(22, '83351623.jpg', 1, '', 0, 13),
(23, '37952061.jpg', 1, '', 0, 14),
(24, '30217647.jpg', 0, '', 2, 12),
(25, '31943965.jpg', 0, '', 1, 12),
(26, '30290918.jpg', 0, '', 3, 12),
(27, '22593372.jpg', 1, '', 0, 15),
(28, '68463853.jpg', 1, '', 0, 16),
(29, '93191185.jpg', 1, '', 0, 17),
(30, '49503988.jpg', 1, '', 0, 18),
(31, '42024584.jpg', 1, '', 0, 19),
(32, '71094707.jpg', 1, '', 0, 20),
(33, '70819266.jpg', 1, '', 0, 22),
(34, '77735233.jpg', 1, '', 0, 23),
(35, '96926211.jpg', 1, '', 0, 24),
(36, '86404959.jpg', 0, '', 2, 20),
(37, '20846593.jpg', 1, '', 0, 21),
(38, '22866635.png', 1, '', 0, 21),
(39, '', 1, '', 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `publication_id` bigint(20) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `details_ar` longtext,
  `details_en` longtext,
  `details_fr` longtext,
  `file_ar` varchar(255) DEFAULT NULL,
  `file_en` varchar(255) DEFAULT NULL,
  `file_fr` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`publication_id`, `title_ar`, `title_en`, `title_fr`, `details_ar`, `details_en`, `details_fr`, `file_ar`, `file_en`, `file_fr`, `image`) VALUES
(1, 'Publication Title Comes Here', 'Publication Title Comes Here', 'Publication Title Comes Here', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '7027_about-counter-1-1.jpg', '2551_about-counter-1-1.jpg', '4217_about-counter-1-1.jpg', '77523956.jpg'),
(2, 'الجديد من التقاط لقطة الشاشة', 'Our donation is hope for poor childrens', 'Our donation is hope for poor childrens', '&nbsp;', '&nbsp;', '&nbsp;', '', '', '', '37211803.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` bigint(20) NOT NULL,
  `social_media` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `is_volunteer` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` bigint(20) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `team_type`
--

CREATE TABLE `team_type` (
  `team_type_id` bigint(20) NOT NULL,
  `team_type_ar` varchar(255) DEFAULT NULL,
  `team_type_en` varchar(255) DEFAULT NULL,
  `team_type_fr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team_type`
--

INSERT INTO `team_type` (`team_type_id`, `team_type_ar`, `team_type_en`, `team_type_fr`) VALUES
(1, 'Executive Board', 'Executive Board', 'Executive Board'),
(2, 'Key Central Staff', 'Key Central Staff', 'Key Central Staff'),
(3, 'Centers’ Coordinators', 'Centers’ Coordinators', 'Centers’ Coordinators');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` bigint(20) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_fr` varchar(255) DEFAULT NULL,
  `description_ar` longtext,
  `description_en` longtext,
  `description_fr` longtext,
  `image` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `orders` bigint(20) DEFAULT NULL,
  `show_home` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `title_ar`, `title_en`, `title_fr`, `description_ar`, `description_en`, `description_fr`, `image`, `video_url`, `orders`, `show_home`) VALUES
(1, 'We’re worldwide non-profit charity ogranization.', 'We’re worldwide non-profit charity ogranization.', 'We’re worldwide non-profit charity ogranization.', 'One person can make all the difference for a child across the globe...Children International is living proof that, although helping just one person.', 'We believe that the society has to take in charge its own destiny towards development, without relying on outside help, that might come or not.', 'One person can make all the difference for a child across the globe...Children International is living proof that, although helping just one person.', '81444114.png', 'https://www.youtube.com/watch?v=7RXv1i8AfoQ', 1, 1),
(2, 'Education', 'Education', 'Education', '<br />', 'School and career orientation activity to help youth build their future, and to spread awareness about the importance of vocational and academic guidance &ndash; Saida, Jan 2021. (1&rsquo;53&rsquo;&rsquo; Video)', '<br />', '19717491.png', '', 0, 1),
(3, 'Sondos (Saida, 17)', 'Sondos (Saida, 17)', 'Sondos (Saida, 17)', '<br />', 'I left school because I suffer from severe vision impairment, and I opted for a vocational path. With the Help of Mouvement Social I am following a career I am passionate about, that is to work in the hospitality field. My ambition is to become a famous cook!', 'I left school because I suffer from severe vision impairment, and I opted for a vocational path. With the Help of Mouvement Social I am following a career I am passionate about, that is to work in the hospitality field. My ambition is to become a famous cook!', '96176349.png', '', 0, 1),
(4, 'Mouhamad', 'Mouhamad', 'Mouhamad', '<br />', 'I am 13 years old, I have been out of school for 2 years, I had an accident at work, my fingers were cut off, and they referred my case to Mouvement Social within the protection and inclusion program. I benefited from many physiotherapy and rehabilitation sessions.  Now I am back to school and I am so happy I can go on with my education.', '<br />', '44544074.png', '', 0, 1),
(5, 'Joe, paraplegic', 'Joe, paraplegic', 'Joe, paraplegic', '<br />', 'I studied IT, but I really wanted to work as DJ. So, my father bought me a music mixer machine. Since then, and with the help of Mouvement Social, I started to expand my equipment and became well known in this domain. Despite my condition, I did not give up and succeeded to do what I want.', '<br />', '98273401.png', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_form`
--

CREATE TABLE `volunteer_form` (
  `volunteer_form_id` bigint(20) NOT NULL,
  `submitted_date_time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `message` longtext,
  `country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer_form`
--

INSERT INTO `volunteer_form` (`volunteer_form_id`, `submitted_date_time`, `ip`, `name`, `email`, `phone`, `DOB`, `address`, `occupation`, `message`, `country`) VALUES
(1, '2021-03-18 10:47:09', '::1', 'Omar Jaber', '345@sdf.com', '12341341', '2021-03-18', 'Chouifat, Omara Street', 'Occupation', 'sadasd', ''),
(2, '2021-03-18 10:50:23', '::1', 'Omar Jaber', '345@sdf.com', '12341341', '2021-03-18', 'Chouifat, Omara Street', 'Occupation', 'test', ''),
(3, '2021-03-18 10:51:11', '::1', 'Omar Jaber', '345@sdf.com', '12341341', '2021-03-18', 'Chouifat, Omara Street', 'Occupation', 'test', ''),
(4, '2021-03-18 10:51:43', '::1', 'Omar Jaber', '345@sdf.com', '12341341', '2021-03-19', 'Chouifat, Omara Street', 'Occupation', 'fdsesd', ''),
(5, '2021-05-07 10:04:19', '185.40.210.123', 'Nicolas Sbeih', 'nicolassbeih@gmail.com', '3225985', '1961-12-21', 'Bsalim Nabay Road', 'consulatnt', 'hi how are yu', ''),
(6, '2021-05-07 10:05:01', '89.187.219.17', 'jessica hourani', 'j.hourani@mouvementsocial.org', 'jessica', '2020-02-02', '12', ' chn', 'hvfkjb', ''),
(7, '2021-05-11 11:00:15', '141.138.191.114', 'jessica hourani', 'j.hourani@mouvementsocial.org', '76655296', '2000-02-05', 'beir', 'grhr', 'htjt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`calls_id`);

--
-- Indexes for table `calls_docs`
--
ALTER TABLE `calls_docs`
  ADD PRIMARY KEY (`calls_docs_id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`centers_id`);

--
-- Indexes for table `centers_type`
--
ALTER TABLE `centers_type`
  ADD PRIMARY KEY (`centers_type_id`);

--
-- Indexes for table `cms_admin`
--
ALTER TABLE `cms_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cms_user_role`
--
ALTER TABLE `cms_user_role`
  ADD PRIMARY KEY (`cms_user_role_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `finance_statement`
--
ALTER TABLE `finance_statement`
  ADD PRIMARY KEY (`finance_statement_id`);

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`founders_id`);

--
-- Indexes for table `gallery_item`
--
ALTER TABLE `gallery_item`
  ADD PRIMARY KEY (`gallery_item_id`);

--
-- Indexes for table `history_image`
--
ALTER TABLE `history_image`
  ADD PRIMARY KEY (`history_image_id`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`job_vacancy_id`);

--
-- Indexes for table `ms_history`
--
ALTER TABLE `ms_history`
  ADD PRIMARY KEY (`ms_history_id`);

--
-- Indexes for table `ms_team`
--
ALTER TABLE `ms_team`
  ADD PRIMARY KEY (`ms_team_id`);

--
-- Indexes for table `ms_values`
--
ALTER TABLE `ms_values`
  ADD PRIMARY KEY (`ms_values_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsletter_id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`news_images_id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`programs_id`);

--
-- Indexes for table `programs_category`
--
ALTER TABLE `programs_category`
  ADD PRIMARY KEY (`programs_category_id`);

--
-- Indexes for table `programs_donors`
--
ALTER TABLE `programs_donors`
  ADD PRIMARY KEY (`programs_donors_id`);

--
-- Indexes for table `program_images`
--
ALTER TABLE `program_images`
  ADD PRIMARY KEY (`program_images_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`publication_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `team_type`
--
ALTER TABLE `team_type`
  ADD PRIMARY KEY (`team_type_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  ADD PRIMARY KEY (`volunteer_form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `calls_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calls_docs`
--
ALTER TABLE `calls_docs`
  MODIFY `calls_docs_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `centers_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `centers_type`
--
ALTER TABLE `centers_type`
  MODIFY `centers_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_admin`
--
ALTER TABLE `cms_admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cms_user_role`
--
ALTER TABLE `cms_user_role`
  MODIFY `cms_user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_form_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `finance_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `finance_statement`
--
ALTER TABLE `finance_statement`
  MODIFY `finance_statement_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `founders_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_item`
--
ALTER TABLE `gallery_item`
  MODIFY `gallery_item_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `history_image`
--
ALTER TABLE `history_image`
  MODIFY `history_image_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `job_vacancy_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_history`
--
ALTER TABLE `ms_history`
  MODIFY `ms_history_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ms_team`
--
ALTER TABLE `ms_team`
  MODIFY `ms_team_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ms_values`
--
ALTER TABLE `ms_values`
  MODIFY `ms_values_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsletter_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `news_images_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `programs_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `programs_category`
--
ALTER TABLE `programs_category`
  MODIFY `programs_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `programs_donors`
--
ALTER TABLE `programs_donors`
  MODIFY `programs_donors_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `program_images`
--
ALTER TABLE `program_images`
  MODIFY `program_images_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `publication_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_media_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_type`
--
ALTER TABLE `team_type`
  MODIFY `team_type_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonials_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `volunteer_form`
--
ALTER TABLE `volunteer_form`
  MODIFY `volunteer_form_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
