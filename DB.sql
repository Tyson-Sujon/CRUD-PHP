-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 06:43 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=unread 2=read'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `status`) VALUES
(1, 'as', 'dad@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 2),
(3, 'as', 'admin@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 2),
(4, 'Contact Information', 'tahsan.anan.06@gmail.com', 'OFFICE IN NEW YORK\r\nAddress :Event Center park WT 22 New York\r\n    Phone :+9 125 645 8654\r\n    e-mail :info@exemple.com\r\n\r\n', 2),
(9, 'sujon  aslam', 'admin@gmail.com', 'somthing that happens occurre How evesnt sentence. ', 1),
(10, 'sujon', 'arash0101@gmail.com', 'The chapels interior is designed and fitted in a traditional Irish style, but with an appreciation of contemporary trends. Its furnishings include the mosaic flooring, altar plate, metalwork and enamel pieces, liturgical textiles, and nineteen', 2),
(11, 'Ashraf', 'Ashraf@gmail.com', 'Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `progress` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `title`, `year`, `progress`, `status`) VALUES
(2, 'S.S.C', '2009', 40, 1),
(3, 'H.S.C', '2012', 60, 1),
(4, 'B.SC', '2020', 75, 1),
(5, 'Responsive Web Design', '2015', 85, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `my_image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `category`, `summary`, `logo`, `my_image`, `status`) VALUES
(35, '―Alan Weiss', 'Your most unhappy customers are your greatest source of learning.sujonraz@gmail', 'We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect of the customer experience a little bit better.', '42.jpg', '15.jpg', 1),
(36, '―Blaise Pascal', 'Your most unhappy customers are your greatest source of learning.', 'Your most unhappy customers are your greatest source of learning.', '42.png', '19.jpg', 1),
(37, '―Brian Tracy', 'Your most unhappy customers are your greatest source of learning.', 'Customer service shouldn\'t just be a department, it should be the entire company.', '43.png', '43.jpg', 1),
(38, '―David J. Schwartz-', 'Your most unhappy customers are your greatest source of learning.', 'A man without a smiling face must not open a shop.', '44.png', '44.jpg', 1),
(39, '― Gucci Family Slogan', 'Your most unhappy customers are your greatest source of learning.', 'It is easier to love a brand when the brand loves you back.', '45.png', '45.jpg', 1),
(40, '– Kevin Stirtz', 'Your most unhappy customers are your greatest source of learning.', 'The magic formula that successful businesses have discovered is to treat customers like guests and employees like people.', '46.png', '46.jpg', 1),
(41, '– Maya Angelou', 'Your most unhappy customers are your greatest source of learning.', 'A lot of people have fancy things to say about customer service,', '46.png', '15.jpg', 1),
(42, '―Dale Carnegie', 'Your most unhappy customers are your greatest source of learning.', 'Here is a powerful yet simple rule. Always give people more than they expect to get.', '44.png', '19.jpg', 1),
(43, '― Bill Gates', 'Your most unhappy customers are your greatest source of learning.', 'If you dont appreciate your customers, someone else will.', '14.jpg', '20.jpg', 1),
(44, '― Sam Walton', 'Your most unhappy customers are your greatest source of learning.', 'A customer talking about their experience with you is worth ten times that which you write or say about yourself.', '21.jpg', '44.jpg', 1),
(45, '― Jeff Bezos', 'Your most unhappy customers are your greatest source of learning.', 'Ask your customers to be part of the solution, and don\'t view them as part of the problem.', '42.jpg', '45.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active ; 2=deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `icon`, `result`, `status`) VALUES
(1, 'like', 'fas fa-heart', '1200', 1),
(2, 'Total videos', 'fab fa-youtube', '350', 1),
(3, 'per year Income', 'fas fa-hand-holding-usd', '795', 1),
(4, 'Our success', 'flaticon-award', '458', 1),
(5, 'Our client', 'flaticon-woman', '857', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office_address`
--

CREATE TABLE `office_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office_address`
--

INSERT INTO `office_address` (`id`, `email`, `phone`, `address`, `location`, `summary`, `status`) VALUES
(1, 'osiassujon@gmail.com', '+880197555555555', 'Bikalpa Tower, 4th Floor, House 74, Road 5/A, Satmasjid Road, Dhanmondi, Dhaka 1209, Bangladesh', 'Bangladesh', 'rich product content can include 360-degree rotation images, allowing shoppers to view the item in its entirety and at their discretion. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `category`, `thumbnail`, `featured_image`, `summary`, `status`) VALUES
(18, 'animation', 'design', '18.jpg', '18.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 1),
(19, 'graphices', 'art', '19.jpg', '19.jpg', 'Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor\r\n                                    tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque\r\n                                    ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras\r\n                                    sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.', 1),
(21, 'Beautiful Bangladesh', 'Nature', '21.jpg', '21.jpg', 'Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor\r\n                                    tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque\r\n                                    ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet, consectetur adipiscing elit. Cras\r\n                                    sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc.', 1),
(30, 'Beautiful', 'all beauty', '30.jpg', '30.jpg', 'lorum ipsum dummy text......', 1),
(31, 'pen', 'drive', '31.jpg', '31.jpg', 'Text messages are used for personal, family, business and social purposes. \r\nGovernmental and non-governmental organizations use text ', 1),
(32, 'Web Developer', 'software company', '32.jpg', '32.jpg', 'A software company is a company whose primary products are various forms of software, software technology, distribution, and software product development. They make up the software industry.', 1),
(34, 'Reference site about Lorem Ipsum, giving information on its origins', ' Lorem ', '', '', 'ipsum is dummy', 1),
(35, 'Beautiful Bangladesh Beautiful Bangladesh Beautiful Bangladesh', 'Nature', '', '', 'founded by veterans of the interactive fiction studio Infocom after it shut down in 1989?', 1),
(36, 'animation', 'Nature', '', '', 'ipsum is dummy', 1),
(37, 'animation', 'Nature', '', '', 'ipsum is dummy', 1),
(38, '', '', '', '', '', 1),
(39, '', '', '', '', '', 1),
(40, 'x', 'g', '', '', 'a', 1),
(41, '', '', '', '', '', 1),
(42, 'asd', 'zxc', '', '', 'fgh', 1),
(43, 'Beautiful Bangladesh Beautiful Bangladesh Beautiful Bangladesh', 'Nature', '', '', 'founded by veterans of the interactive fiction studio Infocom after it shut down in 1989?', 1),
(44, '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active 2=deactivated  '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `summary`, `status`) VALUES
(1, 'creative design', 'fab fa-react', 'Naturally, product content is absolutely imperative for any basic ecommerce (and distributed commerce) effort. \r\n                   ', 1),
(5, 'Services', 'fab fa-free-code-camp', 'If that content is lacking, then the consumer will feel too uncertain to move forward with a purchase. If that content is inaccurate,', 1),
(6, 'Edit', 'fal fa-edit', 'With rich product content, the reader should be able to imagine not just what the product is, but also what it would be like to own that item', 1),
(8, 'tyson rich man', 'fal fa-desktop', 'ich product content features much more interesting - and a greater number of - visuals.', 1),
(9, ' rich product', 'fal fa-edit', 'rich product content can include 360-degree rotation images, allowing shoppers to view the item in its entirety and at their discretion.\r\n                   ', 1),
(11, 'lorem ipsum', 'fab fa-free-code-camp', '                     Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor \r\n                   ', 1),
(12, 'lorem ipsum', 'fab fa-free-code-camp', 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor ', 1),
(13, 'Rimon', 'fab fa-react', 'moza losss......... afsx,cvb,zkxkfdsoladrkjew;xkc asdkjlszxcnxz., puri besos', 1),
(14, '', '', 'nmbmn\r\n                   ', 1),
(15, 'tyson', 'fab fa-react', '                     \r\nlorem ipsum', 1),
(16, 'tyson', 'fab fa-react', '                     \r\nlorem ipsum', 1),
(17, 'Our online videos', 'fab fa-youtube', '3657', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT 'default.png',
  `copyright` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `copyright`, `about`, `tagline`, `office_address`, `email`, `phone`) VALUES
(5, 'default.png', 'vai valo asen', 'CodeDoc is a Sublime Text 2/3 plugin to speedup writing documenting comments. Currently .', 'professional web developer with long time.', 'Dhanmondi -dhaka', 'osiassujon@gmail.com', '+8801955555555555'),
(6, 'default.png', 'welcome', 'lorem ipsum is a dummy text', 'Sublime Text 2/3 Plugin (creative, I know.) ... DocBlockr makes it simple to create new doc blocks', 'gulshan-dhaka-1260', 'jaysean@gmail.com', '+880184444444444');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `name`, `icon`, `link`, `status`) VALUES
(2, 'twitter', 'fab fa-twitter', 'https://twitter.com', 'active'),
(3, 'instagram', 'fab fa-instagram', 'https://www.instagram.com/', 'active'),
(6, 'fb', 'fab fa-facebook', 'https://www.facebook.com/omar.alek1', 'active'),
(7, 'linkedin', 'fab fa-linkedin', 'https://www.linkedin.com/', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active ;2=deactive',
  `role` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=user 2=employee 3=admin',
  `profile_image` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `role`, `profile_image`) VALUES
(26, 'lol_s', 'as@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(27, 'sujon', 'sujonwow@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 1, 3, 'default.png'),
(28, 'sas', 'as@gmail11.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(29, 'sujon21201', 'asasd11212@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(30, 'rasel_pubge!! molla', 'arash01@gmail.com', '$2y$10$gPJlsJ7wn4FxNA3UNqp40OeydSaguHRFimBkYTm3RPvqgOpowF1ZW', 2, 1, 'default.png'),
(31, 'Redoan_Roni', 'Homeless727@gmail.com', '$2y$10$P1d097UdNV/Ry8vBvL/It.dKltkWBGyctwjAAT8SpIHMovmxfvqC2', 1, 1, 'default.png'),
(32, 'sujon_admin', 'admin@gmai.com', '$2y$10$nvqZ6VpSmj6W2/MzZ0Be0.hNQYxVmGlJPmMxIBTxg2T.XWQC9CzbW', 1, 1, 'default.png'),
(33, 'sujon', 'as@gmail1.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(34, 'sujon', 'sujonwow1@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(35, 'sas', 'as@gmail1122.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(36, 'sujon', 'asasd13@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(37, 'rasel_pubge!!', 'arash0112@gmail.com', '$2y$10$gPJlsJ7wn4FxNA3UNqp40OeydSaguHRFimBkYTm3RPvqgOpowF1ZW', 1, 1, 'default.png'),
(38, 'Redoan_Roni', 'Homeless72722@gmail.com', '$2y$10$P1d097UdNV/Ry8vBvL/It.dKltkWBGyctwjAAT8SpIHMovmxfvqC2', 1, 1, 'default.png'),
(39, 'long', 'as12@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(40, 'sujon', 'sujonwowa@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(41, 'sas11', 'as@gmail1s1.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(42, 'sujon_d', 'asasd11212as@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(43, 'rasel_pubge!', 'arash01as@gmail.com', '$2y$10$gPJlsJ7wn4FxNA3UNqp40OeydSaguHRFimBkYTm3RPvqgOpowF1ZW', 1, 1, 'default.png'),
(44, 'Redoan_Roni_fsd', 'Homeles12s727@gmail.com', '$2y$10$P1d097UdNV/Ry8vBvL/It.dKltkWBGyctwjAAT8SpIHMovmxfvqC2', 2, 1, 'default.png'),
(45, 'sujon_admin01', 'admin11@gmai.com', '$2y$10$nvqZ6VpSmj6W2/MzZ0Be0.hNQYxVmGlJPmMxIBTxg2T.XWQC9CzbW', 1, 1, 'default.png'),
(46, 'loverw1', 'as@gmail2w1.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(47, 'sujonsad', 'sujoqwewow1@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(48, 'sas', 'asqwe@gmail1122.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvItvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(49, 'sujonqew', 'asasd13qwe@gmail.com', '$2y$10$a5KJJUtyPs5MqkYCrVPNxuMz2jVOtSvasvPwICWq0T/jddXaiIOv6', 2, 1, 'default.png'),
(50, 'rasel_pubge!!23', 'arash011qew2@gmail.com', '$2y$10$gPJlsJ7wn4FxNA3UNqp40OeydSaguHRFimBkYTm3RPvqgOpowF1ZW', 2, 1, 'default.png'),
(51, 'Redoan_Roniqwe', 'Homeless7qwe2722@gmail.com', '$2y$10$P1d097UdNV/Ry8vBvL/It.dKltkWBGyctwjAAT8SpIHMovmxfvqC2', 2, 1, 'default.png'),
(52, 'a', 'a@gmail.com', '$2y$10$1tmMLuVgbqQKcUQ5RO4DJ.ueNOGXhxQ32SSn.mQseQXNsriW8Q9au', 1, 1, 'default.png'),
(53, 'rakib', 'rakib@gmail.com', '$2y$10$XgyGuWVUG1RSdPxsOU/pI.SY55PQvIiAKCvfSm0HAp92A82WireBS', 1, 1, 'default.png'),
(54, 's', 'asas!@gmail.com', '$2y$10$eoEy6kvB5FzU4AsJcTOAr.UgXdkeU.v5eQlWR1WhnAGt6eyN/QEli', 1, 1, 'default.png'),
(55, 'qewqw', 'as22@gmail.com', '$2y$10$eGcler/sw2AaQV9dGrBuzuzyXZp.sKrg9ymxYrggocF54gFkbXZR.', 1, 1, 'default.png'),
(57, 'as', 'asas@gmail.com', '$2y$10$9sk0nIGuF21U9HTQ0lqJA.bWCbDBiXTwcQfdXNtH0j2hEhq8hUxrq', 1, 1, 'default.png'),
(58, 'astyh', 'sasz@gmail.com', '$2y$10$T7tK/aiDmPLPNe3UdwCLOeGIRknPAH3FkV2whUPo0h2QWtEf.zE1K', 1, 1, 'default.png'),
(59, 'ghjgvhn', 'dad@gmail.com', '$2y$10$2m1WglnWwueUpDaPFsBgde0.KYjvuGsR7kc5IJzhJKlA35gai5gCK', 1, 1, 'default.png'),
(60, 'gaaaj', 'dad1@gmail.com', '$2y$10$9v7qpNngsmEIvokx9mDOSuuG.KpErOl1RN4qIV5hWP1rJSFcTvHr2', 1, 1, 'default.png'),
(61, 'ghjgvhn', 'asdasd@hhdf.com', '$2y$10$7xQtKKZ.aAEz0zlHlcf5m.zlS07wrtMU/xqbyMRAmo2OLLB3Pqywi', 1, 1, 'default.png'),
(62, 'lion', 'lion@gmail.com', '$2y$10$YzsyC8Rfm/UM0DbUAKFkCeafLT2t332ah5twQteYocDQeWDIVDY5q', 1, 1, 'default.png'),
(63, 'mas', 'mas@gmail.com', '$2y$10$Fm7/OJBXXM6Rf0WvRwmjTOuJVJoS4lFd6eQAzo1ZaAJIv2/L9oBAi', 1, 1, 'default.png'),
(64, 'M. A. Hosan Sujon', 'sujon90@gmail.com', '$2y$10$.wEc4tbfDUTAP7Xu7ON/jOoqxfzFVjEtYUWGeRJY3Lp7NEBK1Y/Li', 2, 1, 'default.png'),
(65, 'Anan Tahsan', 'tahsan.anan.06@gmail.com', '$2y$10$YBW2TwJsFyEAq/Au1kYNBe3H2FPHO2n9bV0qVbLOO/Cdj3Bkngo2K', 1, 1, '65.jpg'),
(66, 'sujon001', 'sujon001@gmail.com', '$2y$10$uTd7MA3Nf9BJvLjHLmAOgOurTAZxZnU8twO3rYol4yAfrmQHTAud6', 1, 1, 'default.png'),
(67, 'Admin', 'admin@gmail.com', '$2y$10$YXYUJcij0wi8p4r05rT2p.g4rUisjqYnfErMX19/P0N997csY7mda', 1, 1, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_address`
--
ALTER TABLE `office_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `office_address`
--
ALTER TABLE `office_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
