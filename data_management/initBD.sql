-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2017 at 10:10 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `BDe_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login`) VALUES
('root');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `name`) VALUES
(1, 'Laptops'),
(2, 'PCs'),
(3, 'Monitors'),
(4, 'TVs'),
(5, 'Smartphones'),
(6, 'Smartwatches'),
(7, 'Software'),
(8, 'Printers');

-- --------------------------------------------------------

--
-- Table structure for table `itm`
--

CREATE TABLE `itm` (
  `itm_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `itm`
--

INSERT INTO `itm` (`itm_id`, `name`, `stock`, `price`) VALUES
(1, 'ASUS X807', 10, 979.9),
(2, 'Lenovo Thinkpad e11', 15, 1119.9),
(3, 'HP 250 G5', 20, 1499.9),
(4, 'Acer Aspire E5', 15, 1799.9),
(5, 'Samsung Galaxy S7', 140, 2349.99),
(6, 'iPhone 6', 150, 2719.99),
(7, 'iPhone 7', 160, 3899.99),
(8, 'HTC One m8', 100, 2199.99),
(9, 'HP Prodesk 400', 11, 2199.99),
(10, 'CES V4', 13, 1399.99),
(11, 'HP Elite G1', 7, 4899.99),
(12, 'ASUS VivoPC 499', 12, 979.99),
(13, 'Horizon 24HL', 22, 519),
(14, 'Samsung UE40KU', 25, 1999.99),
(15, 'LG 32LH', 20, 1499.99),
(16, 'Gogen 82PRA', 9, 549.99);

-- --------------------------------------------------------

--
-- Table structure for table `itm_cat`
--

CREATE TABLE `itm_cat` (
  `itm_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `login` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `prename` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usr`
--

INSERT INTO `usr` (`login`, `name`, `prename`, `email`, `passwd`) VALUES
('anicusan', 'andrei', 'nicusan', 'abc@123.com', '04c94ae2f29deebee7417a573bba5d3598bdd094'),
('carinuta', 'bajan', 'carina', 'carinuta@gmail.com', 'cd0863fec75c3bc5d197981c2f2274d55b6ee180'),
('claudiai', 'ionescu', 'claudia', 'i.claudia@yahoo.com', 'ea55e6987f50226e9d3809f207b2e6a49327733d'),
('didinax', 'fodor', 'didina', 'didinax@yahoo.com', '81f98e39acee5cdfe4e83ca7bf8b6a194937ef4e'),
('ioanas', 'stan', 'ioana', 'iostan@gmail.com', '8246d069fffedfe1cdc1450e6c5df51e76646790'),
('mariana', 'pop', 'mariana', 'maripop@gmail.com', '4e5bc7e9fd395beef2223cf52f3cfb7f97c5cbca'),
('marimat', 'matei', 'marioara', 'marimat@gmail.com', '5d8c277639e46506c112ce479f750c7076e01e32'),
('mateioan', 'matei', 'ioan', 'ionel.m@rdslink.ro', 'e0932fd237389082125e7f9e78be06e1c3e86e90'),
('nicusans', 'simona', 'nicusan', 'anomis@yahoo.com', 'bb21158c733229347bd4e681891e213d94c685be'),
('root', 'root', 'root', 'root@root.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'),
('sorinutaxx', 'rosca', 'sorina', 'sorina_r.rdslink.ro', '171c8cd26eb36ced1571a4d9b986a9a58cfff15e');

-- --------------------------------------------------------

--
-- Table structure for table `usr_itm`
--

CREATE TABLE `usr_itm` (
  `login` varchar(20) NOT NULL,
  `itm_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `itm`
--
ALTER TABLE `itm`
  ADD PRIMARY KEY (`itm_id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `itm`
--
ALTER TABLE `itm`
  MODIFY `itm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;