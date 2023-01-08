-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2023 at 12:47 PM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20114294_perfetto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `des` text NOT NULL,
  `list1` text NOT NULL,
  `list2` text NOT NULL,
  `list3` text NOT NULL,
  `list4` text NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `des`, `list1`, `list2`, `list3`, `list4`, `img1`, `img2`, `img3`, `img4`, `year`) VALUES
(1, 'we are macking world best products', '<p>&lsquo;&rsquo;The Perfetto was established on January 1, 2017, by Mr Suvas Barot and Mr Vishal Barot with the vision of creating an impact in the industry of packaging by making it more compact, affordable &amp; Sustainable. Perfetto was initially established as a finishing unit in the chattral, Gujarat. It started with the main stakeholders and the initial working team of 15 and has served for more than 5 years in the field of the finishing unit. After providing this service in the market for 5 years Perfetto was all ready to keep his foot in the manufacturing unit.&rsquo;&rsquo;</p>\r\n', ' Full-Service Electrical Layout Design', ' Writing And Installation', ' Emergency Power Solution', ' Virtually Industrial Robotic Need You Have', 'about1.jpg', 'about2.jpg', 'about4.jpg', 'about5.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `des`) VALUES
(1, ' From Short tales to an Sunflowee Story!', '<p>Today, we are recognised under the topmost software development companies and we owe it to our clienteles and team. We believe in building a door from where we can see our client&rsquo;s success, consequently ours. We transform dreams into reality. Bringing ideas into existence with the help of our team. What kepes our team motivated is the success of our clients and their start-ups. The contentment of our clients is the key to our motivation and success. And our word of honour is to keep serving the community and work.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `quoate` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `des1`, `des2`, `des3`, `quoate`, `create_at`) VALUES
(4, 'blog1.jpg', 'Top 10 Robotics Engineering Trends Industrial Robotics', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown specimen book. It has survived not only centuries, but printer took a galley of type and scrambled it to make a type specimen book. It has survived not only centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>I&rsquo;m as proud of many of the things we haven&rsquo;t done as the things we have done. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n', '2022-12-20 08:39:21'),
(5, 'blog2.jpg', 'Robotics Engineering: 10 Trends Shaping The Industrial Robotics', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown specimen book. It has survived not only centuries, but printer took a galley of type and scrambled it to make a type specimen book. It has survived not only centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>I&rsquo;m as proud of many of the things we haven&rsquo;t done as the things we have done. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n', '2022-12-03 06:04:36'),
(6, 'blog3.jpg', 'Know How The US Cuts Labor Adoption Of Industrial Robots', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown specimen book. It has survived not only centuries, but printer took a galley of type and scrambled it to make a type specimen book. It has survived not only centuries, but also the leap into electronic Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>I&rsquo;m as proud of many of the things we haven&rsquo;t done as the things we have done. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>\r\n', '2022-12-03 06:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(5, 'jakhaniya', 'pateldigvijay1511@gmail.com', '9714641515', 'okk', 'rrr'),
(6, 'digvijay', 'admin@gmail.com', '916476158', 'gerg', 'okk'),
(7, 'hh', 'jakhaniyasandip97@gmail.com', '916476158', ' fdtr', 'gfcjgh'),
(8, 'ashish', 'ashish@gmail.com', '9016476158', 'hfguyf', 'hauyt'),
(9, 'sandip', 'admin@gmail.com', '916476158', 'gtewrg', 'efsdfdsfsdfdfsdfs'),
(10, 'jakhaniya', 'admin@gmail.com', '9714641515', 'hg', 'EF'),
(11, 'jakhaniya', 'jakhaniyadigvijay@02gmail.com', '9714641515', 'okk ', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `des` text NOT NULL,
  `adr` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `des`, `adr`, `email`, `phone`, `map`) VALUES
(1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis velit libero vero, aliquid magnam sed, quidem labore unde aspernatur esse iusto quo quas, dolorum atque dignissimos asperiores. Ab, est accusantium.</p>\r\n', '<p>Survey No. 6/002, Opp. Ambavpura Primary School, Near Ambavpura-Pansar Cross Road, Ambavpura, Kadi, Mehsana - 382732 Gujarat,India</p>\r\n', 'perfettopackaging@gmail.com ', '+91-9979905555', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7328.865312140043!2d72.458361!3d23.300056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9286a9bb848b5178!2sPerfetto%20Packaging!5e0!3m2!1sen!2sin!4v1667902422610!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_form`
--

CREATE TABLE `inquiry_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `unit_type` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry_form`
--

INSERT INTO `inquiry_form` (`id`, `name`, `email`, `phone`, `quantity`, `unit_type`, `product`, `message`) VALUES
(4, 'rqrqr', 'wrwqrwr', 'dfsdf', '21', 'rqq3wr', 'PP Woven Cement bags', 'rqwrwrwqr'),
(5, 'digvijay', 'pateldigvijay1511@gmail.com', '8678676', '200', 'rqwrqw', 'BOPP Laminated PP Woven Bags', 'e5ttjy'),
(6, 'jakhaniya', 'admin@gmail.com', '', '', '', '', 'EF'),
(7, 'jakhaniya', 'jakhaniyadigvijay@02gmail.com', '', '', '', '', 'done'),
(8, 'digvijay', 'pateldigvijay1511@gmail.com', '+91-9979905555', '-1', 'dd', 'PP Woven Bags', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, 'https://www.facebook.com/sunfloweebiztech', 'https://twitter.com/Sunfloweebiz', 'https://www.instagram.com/sunfloweebiztech/', 'https://www.linkedin.com/company/sunfloweebiztech');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `sort_des` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `des3` text NOT NULL,
  `des4` text NOT NULL,
  `des_title1` varchar(255) NOT NULL,
  `des_containt1` text NOT NULL,
  `des_title2` varchar(255) NOT NULL,
  `des_containt2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `sort_des`, `des1`, `des2`, `des3`, `des4`, `des_title1`, `des_containt1`, `des_title2`, `des_containt2`) VALUES
(4, 'PP Woven Bags', '1.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(5, 'PP/HDPE Tapes (TAP)', '2.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(6, 'PP/HDPE Woven Fabrics (Coated/Uncoated)', '3.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(7, 'PP/HDPE Woven Bags', '4.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(8, 'BOPP Laminated PP Woven Bags', '5.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(9, 'PP Woven Courier bags', '6.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(10, 'BOPP Laminated PP Woven Bags', '7.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(11, 'PP Woven Cement bags', '8.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.'),
(12, 'Pp Woven box bags', '9.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>\r\n', 'Going further with rich product', 'Just as importantly, rich content features much more interesting - and a greater number of - visuals. Instead of a single photo, brands and retailers are increasingly offering a series of images, presenting the product from a range of different angles and in different contexts.', 'Align and engage with business strategy', 'These are some critical questions that will need answering. And content writers need to know the answers to these questions if they’re to be able to create a successful content strategy. Product managers and content writers should align on the goals of the product and the business as part of developing a content strategy.');

-- --------------------------------------------------------

--
-- Table structure for table `products_reviews`
--

CREATE TABLE `products_reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_reviews`
--

INSERT INTO `products_reviews` (`id`, `name`, `email`, `message`) VALUES
(2, 'digvijay', 'pateldigvijay1511@gmail.com', 'done'),
(3, 'sandip', 'jakhaniyadigvijay@02gmail.com', 'okk');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `img`, `name`, `position`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(2, 'team5.jpg', 'sandip', 'CTO', 'https://www.facebook.com/sunfloweebiztech', 'https://twitter.com/Sunfloweebiz', 'https://www.instagram.com/sunfloweebiztech/', 'https://www.linkedin.com/company/sunfloweebiztech'),
(4, 'team3.jpg', 'viral', 'CEO', 'https://www.facebook.com/sunfloweebiztech', 'https://twitter.com/Sunfloweebiz', 'https://www.instagram.com/sunfloweebiztech/', 'https://www.linkedin.com/company/sunfloweebiztech'),
(5, 'team6.jpg', 'digvijay', 'Co- Worker', 'https://www.facebook.com/sunfloweebiztech', 'https://twitter.com/Sunfloweebiz', 'https://www.instagram.com/sunfloweebiztech/', 'https://www.linkedin.com/company/sunfloweebiztech');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(2, 'digvijay', 'pateldigvijay1511@gmail.com', '$2y$10$qtNBK9mhP4LkIeenIyXLFeO.Y1EyNyNq2BtHXOkPeFRXck9wSIQSK', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_form`
--
ALTER TABLE `inquiry_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_reviews`
--
ALTER TABLE `products_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry_form`
--
ALTER TABLE `inquiry_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products_reviews`
--
ALTER TABLE `products_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
