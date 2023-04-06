-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 09:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `name`, `email`, `message`) VALUES
(14, 'Kumar Chaudhary', 'kumarbhetwal25@gmail.com', 'hello there');

-- --------------------------------------------------------

--
-- Table structure for table `new_admission`
--

CREATE TABLE `new_admission` (
  `id` int(255) NOT NULL,
  `stdname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `csei` varchar(255) NOT NULL,
  `ccei` int(255) NOT NULL,
  `cemebs` int(255) NOT NULL,
  `aggrement` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_admission`
--

INSERT INTO `new_admission` (`id`, `stdname`, `mname`, `fname`, `address`, `age`, `gender`, `csei`, `ccei`, `cemebs`, `aggrement`, `status`) VALUES
(14, 'Roshan Karki', 'roshan mom name', 'fathername', 'kumroj', 23, 'male', 'dasiy', 7, 7, 'Agree', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(255) NOT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthyear` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticetitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noticemessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `day`, `monthyear`, `noticetitle`, `noticemessage`) VALUES
(1, '२', 'बिही, चैत, २०७९', 'Farewell', 'message'),
(2, '३', 'मंगल, चैत, २०७९', 'छैटौँ, साताँै, आठौँ दिन जमिन्दारको प्राइभेट', 'पाँचौँ दिन टोली प्रमुखको घर अर्थात् आफ्नो गाउँको जमिन्दारको घरमा एक ट्रक मालसामान आएको देख्दा सुकुम्वासीहरूले हाम्रो निम्ति आएका हुन् भनेर आ-आफैमा निष्कर्ष निकालेपछि खुसीको निश्चित सीमा रहेन ।'),
(3, '१५', 'बुध, चैत, २०७९', 'SEE Exam', '“सानैदेखि नेपाली माध्यमबाट पढ्ने बानीले गर्दा सुरुमा धेरै गाह्रो पर्यो तर … ।” हरिको उत्तर पूण रूपले आउन नपाउँदै बीचैमा एक वयस्कले सल्लाह दियो, “अङ्ग्रेजीको परीक्षा नेपालीमा नै दिए भैहाल्थ्यो नि बाबु ।” हरि केही बोल्न सकेन ।'),
(4, '८', 'बुध, चैत, २०७९', 'SEE Exam', 'afjasdfhdvqpdvquipchadsjkvbcsajklc'),
(5, '८', 'बुध, चैत, २०७९', 'New Year', 'Lets JUmp in'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_achievment`
--

CREATE TABLE `student_achievment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gpa` float NOT NULL,
  `achievmemt` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_achievment`
--

INSERT INTO `student_achievment` (`id`, `name`, `gpa`, `achievmemt`, `image`, `quote`) VALUES
(153, 'roshan', 31, 'dgagds', 'kumar_A_medium_shot_of_a_beautiful_white_woman_wearing_a_black__a7481e0a-d50d-46e7-b17a-e63104cabcfe.png', 'fsgaadgasdasjcbxjasxbcshello k chh snacai  cau ,a [ani eya samcjai co daasja chj tmililai ni sanchai cjj vamma e asha garkeo cuuu'),
(154, 'kumar', 31, 'post', 'kumar_A_medium_shot_of_a_beautiful_white_woman_wearing_a_black__a7481e0a-d50d-46e7-b17a-e63104cabcfe.png', 'dfafaf'),
(155, 'coomar', 31, 'dgagds', 'kumar_A_medium_shot_of_a_beautiful_white_woman_wearing_a_black__a7481e0a-d50d-46e7-b17a-e63104cabcfe.png', 'fsgaadgasdasjcbxjasxbcshello k chh snacai  cau ,a [ani eya samcjai co daasja chj tmililai ni sanchai cjj vamma e asha garkeo cuuu'),
(156, 'coomar', 31, 'dgagds', 'crabcrab_A_medium_shot_of_a_white_woman_wearing_a_T-shirt_captu_9bf09640-28d0-428a-ac70-5b65ba33712c.png', 'fsgaadgasdasjcbxjasxbcshello k chh snacai  cau ,a [ani eya samcjai co daasja chj tmililai ni sanchai cjj vamma e asha garkeo cuuu'),
(157, 'roshan', 3, 'web ', '326836336_740110210650015_3728957324159410233_n.jpg', 'hello there'),
(158, 'roshan', 3.5, 'web', '326836336_740110210650015_3728957324159410233_n.jpg', 'dfsaajsbdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_users`
--

CREATE TABLE `student_users` (
  `studentid` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_users`
--

INSERT INTO `student_users` (`studentid`, `password`) VALUES
(34536, '346535643'),
(352345, '23532532'),
(3463463, '346534646'),
(23453245, '2345345345'),
(23532453, '234553534'),
(1343324324, '11111111'),
(2147483647, '11111111');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_forum`
--

CREATE TABLE `teacher_forum` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_forum`
--

INSERT INTO `teacher_forum` (`id`, `name`, `image`, `post`, `quote`, `category`) VALUES
(26, 'Ram Chandra Regmi', 'to9nrn6h.png', 'Nepali Teacher', 'Optional', 'static'),
(27, 'Hanzee', 'kumar_A_medium_shot_of_a_beautiful_white_woman_wearing_a_black__a7481e0a-d50d-46e7-b17a-e63104cabcfe.png', 'Science Teacher', 'optional', 'static'),
(28, 'Ram Chandra Regmi', 'to9nrn6h.png', 'Nepali Teacher', 'optional', 'dynamic'),
(29, 'Hanzee', 'kumar_A_medium_shot_of_a_beautiful_white_woman_wearing_a_black__a7481e0a-d50d-46e7-b17a-e63104cabcfe.png', 'English', 'optional', 'static'),
(30, 'Hanzee', 'crabcrab_A_medium_shot_of_a_white_woman_wearing_a_T-shirt_captu_9bf09640-28d0-428a-ac70-5b65ba33712c.png', 'English', 'optional', 'dynamic');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(5, 'user', 'user', 'user'),
(6, 'kumar', 'kumar', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_admission`
--
ALTER TABLE `new_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_achievment`
--
ALTER TABLE `student_achievment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_users`
--
ALTER TABLE `student_users`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `teacher_forum`
--
ALTER TABLE `teacher_forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `new_admission`
--
ALTER TABLE `new_admission`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_achievment`
--
ALTER TABLE `student_achievment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `student_users`
--
ALTER TABLE `student_users`
  MODIFY `studentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `teacher_forum`
--
ALTER TABLE `teacher_forum`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
