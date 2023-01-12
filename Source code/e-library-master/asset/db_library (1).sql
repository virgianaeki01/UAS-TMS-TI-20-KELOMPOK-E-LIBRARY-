-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 07:27 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_book`
--

CREATE TABLE `tb_book` (
  `book_id` int(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `year` smallint(4) NOT NULL,
  `description` text NOT NULL,
  `img_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_book`
--

INSERT INTO `tb_book` (`book_id`, `title`, `author`, `year`, `description`, `img_name`) VALUES
(1, 'Dog Man and Cat Kid', 'Dav Pilkey', 2017, 'Hot diggity dog! Dog Man, the newest hero from Dav Pilkey, the creator of Captain Underpants, is back -- and this time he''s not alone. The heroic hound with a real nose for justice now has a furry feline sidekick, and together they have a mystery to sniff out! When a new kitty sitter arrives and a glamorous movie starlet goes missing, it''s up to Dog Man and Cat Kid to save the day! Will these heroes stay hot on the trail, or will Petey, the World''s Most Evil Cat, send them barking up the wrong tree?', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` smallint(15) NOT NULL,
  `cd_user` mediumint(8) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `birthday` date NOT NULL,
  `regisdate` date NOT NULL,
  `level` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `cd_user`, `name`, `address`, `email`, `pass`, `birthday`, `regisdate`, `level`, `status`) VALUES
(1, 1708001, 'Abdul Malik MS', 'Bogor', 'anothermalik@gmail.com', 'alik', '1996-01-01', '2017-08-01', 0, 1),
(17, 1708002, 'Haris Manaf', 'Jakarta', 'harismanap@gmail.com', 'manap', '1996-04-05', '2017-08-17', 1, 1),
(19, 1801003, 'aasa', 'ddsas', 'a@gmail.com', 'a', '2018-01-01', '2018-01-18', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_userlevel`
--

CREATE TABLE `tb_userlevel` (
  `level` tinyint(1) NOT NULL,
  `userlevel` text NOT NULL,
  `job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userlevel`
--

INSERT INTO `tb_userlevel` (`level`, `userlevel`, `job`) VALUES
(0, 'admin', 'bisa membuat semua user, hak ases penuh'),
(1, 'operator', 'hanya mengatur jalannya perpustakaan'),
(2, 'user', 'orang biasa yang menggunakan fasilitas perpustakaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book`
--
ALTER TABLE `tb_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`,`cd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book`
--
ALTER TABLE `tb_book`
  MODIFY `book_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` smallint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
