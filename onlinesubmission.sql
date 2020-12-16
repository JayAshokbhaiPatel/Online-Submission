-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 07:51 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinesubmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('jignesh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cpp`
--

CREATE TABLE `cpp` (
  `id` int(11) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `input` varchar(1000) NOT NULL,
  `output` varchar(1000) NOT NULL,
  `prn` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpp`
--

INSERT INTO `cpp` (`id`, `body`, `input`, `output`, `prn`) VALUES
(8, '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}', '', 'Hello, World!', 0),
(9, '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}', '', 'Hello, World!', 0),
(10, '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}', '', 'Hello, World!', 0),
(11, '#include <stdio.h>\r\nint main()\r\n{\r\n   // printf() displays the string inside quotation\r\n   printf(\"Hello, World!\");\r\n   return 0;\r\n}', '', 'Hello, World!', 0),
(12, '#include <stdio.h>\r\nint main()\r\n{\r\n    int number;\r\n\r\n    // printf() dislpays the formatted output \r\n    printf(\"Enter an integer: \");  \r\n    \r\n    // scanf() reads the formatted input and stores them\r\n    scanf(\"%d\", &number);  \r\n    \r\n    // printf() displays the formatted output\r\n    printf(\"You entered: %d\", number);\r\n    return 0;\r\n}', '25', 'Enter an integer: You entered: 25', 0),
(13, '#include <stdio.h>\r\nint main()\r\n{\r\n    int number;\r\n\r\n    // printf() dislpays the formatted output \r\n    printf(\"Enter an integer: \");  \r\n    \r\n    // scanf() reads the formatted input and stores them\r\n    scanf(\"%d\", &number);  \r\n    \r\n    // printf() displays the formatted output\r\n    printf(\"You entered: %d\", number);\r\n    return 0;\r\n}', '25', 'Enter an integer: You entered: 25', 1),
(14, '#include <stdio.h>\r\nint main()\r\n{\r\n    int number;\r\n\r\n    // printf() dislpays the formatted output \r\n    printf(\"Enter an integer: \");  \r\n    \r\n    // scanf() reads the formatted input and stores them\r\n    scanf(\"%d\", &number);  \r\n    \r\n    // printf() displays the formatted output\r\n    printf(\"You entered: %d\", number);\r\n    return 0;\r\n}', '50', 'Enter an integer: You entered: 50', 1),
(15, '#include <stdio.h>\r\nint main()\r\n{\r\n    int firstNumber, secondNumber, sumOfTwoNumbers;\r\n    \r\n    printf(\"Enter two integers: \");\r\n\r\n    // Two integers entered by user is stored using scanf() function\r\n    scanf(\"%d %d\", &firstNumber, &secondNumber);\r\n\r\n    // sum of two numbers in stored in variable sumOfTwoNumbers\r\n    sumOfTwoNumbers = firstNumber + secondNumber;\r\n\r\n    // Displays sum      \r\n    printf(\"%d + %d = %d\", firstNumber, secondNumber, sumOfTwoNumbers);\r\n\r\n    return 0;\r\n}', '25\r\n30', 'Enter two integers: 25 + 30 = 55', 1),
(16, '#include <stdio.h>\r\nint main()\r\n{\r\n    int firstNumber, secondNumber, sumOfTwoNumbers;\r\n    \r\n    printf(\"Enter two integers: \");\r\n\r\n    // Two integers entered by user is stored using scanf() function\r\n    scanf(\"%d %d\", &firstNumber, &secondNumber);\r\n\r\n    // sum of two numbers in stored in variable sumOfTwoNumbers\r\n    sumOfTwoNumbers = firstNumber + secondNumber;\r\n\r\n    // Displays sum      \r\n    printf(\"%d + %d = %d\", firstNumber, secondNumber, sumOfTwoNumbers);\r\n\r\n    return 0;\r\n}', '50\r\n50', 'Enter two integers: 50 + 50 = 100', 20160338001636);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `body` varchar(1000) NOT NULL,
  `output` varchar(1000) NOT NULL,
  `prn` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prn`
--

CREATE TABLE `prn` (
  `S_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `prn` bigint(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `year` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pnumber` int(20) NOT NULL,
  `poccupation` varchar(50) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `password` varchar(535) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`prn`, `fname`, `mname`, `lname`, `email`, `phone`, `gender`, `dob`, `year`, `state`, `city`, `address`, `pname`, `pnumber`, `poccupation`, `paddress`, `pemail`, `password`, `username`, `Date`, `file`) VALUES
(1, 'jigo', 'm', 'parkar', 'jigneshthakur04@gmail.com', 123456789, 'm', '2018-02-06', 'sy', 'MH', 'pune', 'sadfadadsf', '', 0, '', '', '', '$2y$10$kUS5MeYAQl9x1ZU5ZLV.XeYrma0PyQlHw80Tk81i7ifQtnhgbMkcC', 'jigo', '2018-03-20 12:36:27', ''),
(20130338001234, '								 aaa', 'bbb', 'ccc', 'abc@gmail.com', 123456789, '', '0000-00-00', 'sy', '', '-Select-', '', '', 0, '', '', '', 's_password', '', '0000-00-00 00:00:00', 0x4172726179),
(20160338001616, 'Jay', 'A', 'Patel', 'Jaypatel120847@gmail.com', 1234567890, 'male', '1970-01-01', '', '', '-Select-', '', 'Ashokbhai', 2147483647, '', '', '', '123456', 'jay_patel', '2018-03-20 12:49:21', ''),
(20160338001636, 'Dipen', 'P', 'Parmar', 'Dipen890@gmail.com', 1234567890, '', '1970-01-01', '', '', '-Select-', '', 'M', 2147483647, '', '', '', '$2y$10$tKFL8wniGEMiRpipWPazPOVLduFjmN6iUGOk9JXlim4uZ83V2Rcw2', 'dipen_parmar', '2018-03-20 13:04:09', ''),
(201503380012013, 'Yash', 'K', 'Mistry', 'Nickmick3120@gmail.com', 1234567890, '', '1970-01-01', '', '', '-Select-', '', 'M', 2147483647, '', '', '', '$2y$10$btMblmcGtxiZi0aGATjH5.AGE1APA.V3bKSZsptlFe1S.fPq.Y6US', 'yash_mistry', '2018-03-08 07:36:22', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `T_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `education` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`T_id`, `Name`, `lname`, `email`, `phone`, `dob`, `gender`, `education`, `password`, `username`, `date`) VALUES
(1, 'sachin', 'tendulkar', 'sachin@gmail.com', 123456789, '2018-02-05', 'm', '', '', '', '2018-02-04 10:54:19'),
(2, 'sachin', 'tendulkar', 'sachin@gmail.com', 123456, '2018-02-06', 'm', 'education', '123', 'sachin', '2018-02-03 18:30:00'),
(3, 'jignesh', 'sdfs', 'jignesh@gmail.com', 123456, '2018-02-06', 'm', 'education', '202cb962ac59075b964b07152d234b70', 'jignesh', '2018-02-03 18:30:00'),
(4, 'jignesh', 'xyz', 'jigneshthakur04@gmail.com', 123456, '2018-02-05', 'm', 'education', '$2y$10$Mxf66b/dVzdOnh20n/B7mu/gu4o/cYQzD5YVOYWxK0Xk.f36C37J.', 'jignesh', '2018-02-05 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpp`
--
ALTER TABLE `cpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prn`
--
ALTER TABLE `prn`
  ADD PRIMARY KEY (`S_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`prn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `PRN` (`prn`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`T_id`),
  ADD UNIQUE KEY `T_id` (`T_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpp`
--
ALTER TABLE `cpp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
