-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 11:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `cntctnum` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `locked` varchar(255) NOT NULL,
  `attempts` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `fullname`, `status`, `cntctnum`, `address`, `locked`, `attempts`) VALUES
(13, 'kurtellie', 'parel', 'Kurt Ellie Parel', 'Student', '09431236789', 'Onate Street. Mandurriao Iloilo City', 'False', 0),
(14, 'ar', 'ar', 'Armada Arms', 'Teacher', '09231452314', 'Guzman Jesena Mandurriao Iloilo City', 'False', 0),
(15, 'psalmy21', 'psalmy21', 'Psalm Tweniwan', 'Teacher', '09231456789', 'Moton Janiuay Iloilo', 'False', 0),
(16, 'kneecoal08', 'lampa', 'Nicole Lampa', 'Student', '091512354673', 'Timawa St. Molo Iloilo City', 'False', 0),
(17, 'valynswift', 'frias', 'Valyn Frias', 'Student', '09138901237', 'Habol-habol Leganes Iloilo City', 'False', 0),
(18, 'rheajoy', 'belleza', 'Rhea Joy Belleza', 'Student', '091234512345', 'Kansalan Oton Iloilo City', 'False', 0),
(27, 'Kaila', 'kaila', 'Kaila Rose Lampa', 'Student', '092314312313', 'Manduriao Iloilo City', 'False', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classposts`
--

CREATE TABLE `classposts` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `postedby` varchar(255) NOT NULL,
  `classcode` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classposts`
--

INSERT INTO `classposts` (`id`, `content`, `postedby`, `classcode`) VALUES
(45, 'Tomorrow will be the deadline of our module 1. Please pass.', 'Armada Arms', 1002),
(46, 'Tomorrow is the last schedule for your output\n', 'Armada Arms', 1002);

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(255) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `classcode` int(255) NOT NULL,
  `studentid` int(255) NOT NULL,
  `studentname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `content`, `classcode`, `studentid`, `studentname`) VALUES
(8, '|Student{So sir, when will be the deadline of module 6?|Teacher{Tomorrow will be the deadline of the module 6', 1002, 13, 'Kurt Ellie Parel'),
(9, '', 1211, 13, 'Kurt Ellie Parel'),
(10, '', 1002, 16, 'Nicole Lampa'),
(11, '', 1211, 16, 'Nicole Lampa'),
(12, '|Teacher{Hey Valyn|Student{Hi sir', 1002, 17, 'Valyn Frias'),
(13, '', 1211, 17, 'Valyn Frias'),
(14, '', 1002, 18, 'Rhea Joy Belleza'),
(15, '', 1211, 18, 'Rhea Joy Belleza'),
(17, '', 1002, 26, 'Kaila Rose Lampa'),
(18, '', 1002, 27, 'Kaila Rose Lampa');

-- --------------------------------------------------------

--
-- Table structure for table `enrolledcourses`
--

CREATE TABLE `enrolledcourses` (
  `id` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `studentID` int(11) NOT NULL,
  `classcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolledcourses`
--

INSERT INTO `enrolledcourses` (`id`, `subjectname`, `teacher`, `studentID`, `classcode`) VALUES
(21, 'Capstone 2', 'Armada Arms', 13, 1002),
(22, 'Information Assurance and Security', 'Armada Arms', 13, 1211),
(23, 'Capstone 2', 'Armada Arms', 16, 1002),
(24, 'Information Assurance and Security', 'Armada Arms', 16, 1211),
(25, 'Capstone 2', 'Armada Arms', 17, 1002),
(26, 'Information Assurance and Security', 'Armada Arms', 17, 1211),
(27, 'Capstone 2', 'Armada Arms', 18, 1002),
(28, 'Information Assurance and Security', 'Armada Arms', 18, 1211),
(31, 'Capstone 2', 'Armada Arms', 27, 1002);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `classcode` int(11) NOT NULL,
  `score` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `title`, `content`, `subject`, `classcode`, `score`) VALUES
(103, 'Module 1 Introduction to Capstone', '-ConceptNotes*This here is collection of notes that signifies a concept notes. Something students should be reading to gain knowledge.-Question*What number of module is this?\na. 1 \nb. 2-Answer*a-Question*What do you gain by reading a concept notes?-Answer*knowledge', 'Capstone 2', 1002, '0/2'),
(104, 'Module 2: Introductiuon etc.', '-ConceptNotes*Capstone is important because etc etc-Question*Is capstone important?-Answer*yes-Question*What number of module is this?-Answer*2', 'Capstone 2', 1002, '0/2'),
(105, 'Module 1: Introduction', '-ConceptNotes*This widget is filled with information about the subject.-Question*Is Kurt handsome?-Answer*yes', 'Information Assurance and Security', 1211, '0/1'),
(106, 'Module 3: Intro for Capstone 2', '-ConceptNotes*Capstone 2 is not a thesis. Capstone 2 is not a thesis. Capstone 2 is not a thesis. Capstone 2 is not a thesis. Capstone 2 is not a thesis. Capstone 2 is not a thesis. Capstone 2 is not a thesis. -Question*Capstone is not a?-Answer*thesis-Question*Importance of capstone? \nA. etc2\nB. etc-Answer*a', 'Capstone 2', 1002, '0/2'),
(107, 'Quiz: First Quiz', '-Question*Is kyla ugly?-Answer*yes-Question*Is kurt handsome?\na. Yes\nb. No-Answer*a', 'Capstone 2', 1002, '0/2'),
(109, 'Module 4: Dummy Module', '-ConceptNotes*This here is a random concept notes-Question*Are dachshunds the best breed? A. yes B. no-Answer*a', 'Capstone 2', 1002, '0/1'),
(110, 'Module 5: Sample Module', '-ConceptNotes*This here is an example concept notes This here is an example concept notes This here is an example concept notes This here is an example concept notes This here is an example concept notes -Question*Are dachshunds the best breed? A. yes B. no-Answer*a', 'Capstone 2', 1002, '0/1');

-- --------------------------------------------------------

--
-- Table structure for table `passedmodules`
--

CREATE TABLE `passedmodules` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `classcode` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `score` varchar(255) NOT NULL,
  `moduleid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passedmodules`
--

INSERT INTO `passedmodules` (`id`, `title`, `content`, `subject`, `classcode`, `studentID`, `score`, `moduleid`) VALUES
(50, 'Module 4: Dummy Module', '-ConceptNotes*This here is a random concept notes-Question*Are dachshunds the best breed? A. yes B. no-Correct*a', 'Capstone 2', 1002, 17, '1/1', 109),
(51, 'Module 1 Introduction to Capstone', '-ConceptNotes*This here is collection of notes that signifies a concept notes. Something students should be reading to gain knowledge.-Question*What number of module is this?\na. 1 \nb. 2-Wrong*a-Question*What do you gain by reading a concept notes?-Wrong*nothing', 'Capstone 2', 1002, 13, '0/2', 103),
(52, 'Module 5: Sample Module', '-ConceptNotes*This here is an example concept notes This here is an example concept notes This here is an example concept notes This here is an example concept notes This here is an example concept notes -Question*Are dachshunds the best breed? A. yes B. no-Wrong*a', 'Capstone 2', 1002, 13, '0/1', 110);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `classcode` int(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `teacherid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`classcode`, `subjectname`, `teacher`, `teacherid`) VALUES
(1002, 'Capstone 2', 'Armada Arms', 14),
(1111, 'System Administration and Maintenance', 'Armada Arms', 14),
(1211, 'Information Assurance and Security', 'Armada Arms', 14),
(10223, 'Qualitative Research', 'Psalm Tweniwan', 15);

-- --------------------------------------------------------

--
-- Table structure for table `teacherpost`
--

CREATE TABLE `teacherpost` (
  `id` int(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `postedby` varchar(255) NOT NULL,
  `teacherid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherpost`
--

INSERT INTO `teacherpost` (`id`, `content`, `date`, `postedby`, `teacherid`) VALUES
(48, 'Tomorrow there will be a meeting at CITE', '2021-05-25', 'Armada Arms', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classposts`
--
ALTER TABLE `classposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolledcourses`
--
ALTER TABLE `enrolledcourses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `classcode` (`classcode`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `classcode` (`classcode`);

--
-- Indexes for table `passedmodules`
--
ALTER TABLE `passedmodules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `moduleid` (`moduleid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`classcode`),
  ADD KEY `teacherid` (`teacherid`);

--
-- Indexes for table `teacherpost`
--
ALTER TABLE `teacherpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacherid` (`teacherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `classposts`
--
ALTER TABLE `classposts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enrolledcourses`
--
ALTER TABLE `enrolledcourses`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `passedmodules`
--
ALTER TABLE `passedmodules`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `classcode` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10224;

--
-- AUTO_INCREMENT for table `teacherpost`
--
ALTER TABLE `teacherpost`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolledcourses`
--
ALTER TABLE `enrolledcourses`
  ADD CONSTRAINT `enrolledcourses_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `accounts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrolledcourses_ibfk_2` FOREIGN KEY (`classcode`) REFERENCES `subjects` (`classcode`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`classcode`) REFERENCES `subjects` (`classcode`);

--
-- Constraints for table `passedmodules`
--
ALTER TABLE `passedmodules`
  ADD CONSTRAINT `passedmodules_ibfk_1` FOREIGN KEY (`moduleid`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacherpost`
--
ALTER TABLE `teacherpost`
  ADD CONSTRAINT `teacherpost_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `accounts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
