-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 06:35 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `postedby` varchar(200) NOT NULL,
  `news` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `postedby`, `news`, `subject`, `date`) VALUES
(1, 'Rabby', 'voter registration started in due time', 'voter registration', 1524105767),
(2, 'Rabby', 'Bangladesh cricket team played very well. Most of the people are watching tv when Bangladesh cricket team played another team.', 'Bangladesh', 1524106590),
(3, 'nabil', 'Football is the best entertaining game in the world. we can play football anytime.', 'Football', 1524107461);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `parmanentaddress` varchar(50) NOT NULL,
  `presentaddress` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `fathernid` varchar(20) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `mothernid` varchar(20) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `brothersistername` varchar(100) NOT NULL,
  `brothersisternid` varchar(50) NOT NULL,
  `marrital` varchar(50) NOT NULL,
  `marriedname` varchar(50) NOT NULL,
  `marriednid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `dob`, `gender`, `religion`, `status`, `email`, `password`, `confirmpassword`, `mobile`, `occupation`, `blood`, `image`, `parmanentaddress`, `presentaddress`, `fathername`, `fathernid`, `fatheroccupation`, `mothername`, `mothernid`, `motheroccupation`, `brothersistername`, `brothersisternid`, `marrital`, `marriedname`, `marriednid`) VALUES
(15, 'Rabby', 'Rikabder', '1995-01-03', 'male', 'muslim', NULL, 'rabby312@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', ' narsingdi', ' dhaka', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '16353465785756453', 'housewife', 'Robin', '12345768686958574', 'married', 'priya', '12345678675645432'),
(16, 'Robin', 'Rikabder', '1997-06-11', 'male', 'muslim', NULL, 'Robin@gmail.com', 'Robin1234', 'Robin1234', '01933253615', 'student', 'A+', '', ' narsingdi', ' dhaka', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '16353465785756453', 'housewife', 'Rabby', '12345768686958574', 'unmarried', '', ''),
(24, 'Rabby', 'Rikabder', '1981-06-23', 'male', 'muslim', NULL, 'rabby4@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', ' Narsingdi', ' Dhaka', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '12345678912345678', 'housewife', 'Rohan Rikabder', '12345768686958574', 'unmarried', '', ''),
(25, 'Rabby', 'Rikabder', '1981-06-23', 'male', 'muslim', NULL, 'rabby40@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', ' Narsingdi', ' Dhaka', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '12345678912345678', 'housewife', 'Rohan Rikabder', '12345768686958574', 'unmarried', '', ''),
(27, 'Rabby', 'Rikabder', '1993-07-23', 'male', 'muslim', NULL, 'jdsifjiejfo@gmail.com', 'Asdf1234', 'Asdf1234', '01933253615', 'student', 'A+', '', ' Narsingdi', ' Dhaka', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '12345678912345678', 'housewife', '', '', 'unmarried', '', ''),
(28, 'Rabby', 'Rikabder', '1996-06-06', 'male', 'muslim', NULL, 'mg@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', ' djfiid', ' kjdfiej', 'Md Nuruzzaman Rikabder', '12374658574938364', 'business', 'Robi Begum', '16353465785756453', 'housewife', '', '', 'unmarried', '', ''),
(29, 'Abul', 'Kalam', '1996-06-06', 'male', 'muslim', NULL, 'abul@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', 'vola', ' danga', 'Mohammad jamal', '12374658574938364', 'business', 'Sokhina Begum', '16353465785756453', 'housewife', '', '', 'unmarried', '', ''),
(30, 'Abul', 'Kalam', '1996-06-06', 'male', 'hindu', NULL, 'abu300l@gmail.com', 'Asdf12345', 'Asdf12345', '01933253615', 'student', 'A+', '', ' hhv', ' ftft', 'Mohammad jamal', '12374658574938364', 'business', 'Sokhina Begum', '16353465785756453', 'housewife', '', '', 'unmarried', '', ''),
(31, 'kamal', 'hasan', '1994-02-17', 'male', 'muslim', NULL, 'kamal@gmail.com', 'Asdf12345', 'Asdf12345', '01955678767', 'Doctor', 'O+', '', ' kjkk', ' kjk', 'Jamal Hasan', '12374658574938364', 'business', 'Fatima Akter', '12345678912345678', 'housewife', '', '', 'unmarried', '', ''),
(32, 'kamal', 'hasan', '1994-02-17', 'male', 'muslim', NULL, 'kamal12@gmail.com', 'Asdf12345', 'Asdf12345', '01955678767', 'Doctor', 'O+', '', ' kjkk', ' kjk', 'Jamal Hasan', '12374658574938364', 'business', 'Fatima Akter', '12345678912345678', 'housewife', '', '', 'unmarried', '', ''),
(33, 'Turna', 'Jahan', '1994-07-19', 'female', 'muslim', 0, 'turna@gmail.com', 'Asdf12345', 'Asdf12345', '01945678756', 'Doctor', 'A-', 0x6c322e706e67, ' dhaka', ' Dhaka', 'Abdel Baten', '18374652726354645', 'teacher', 'Amena Begum', '12345678912345678', 'housewife', '', '', 'unmarried', '', ''),
(34, 'aporna', 'khan', '1993-06-17', 'female', 'muslim', 0, 'aporna@gmail.com', 'Asdf1234', 'Asdf1234', '01955678767', 'Engineer', 'B+', 0x6c322e706e67, ' dhaka', ' dhaka', 'Abdul Kadir', '12344444444444444', 'Doctor', 'Amena Begum', '16353465785756453', 'housewife', '', '', 'unmarried', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
