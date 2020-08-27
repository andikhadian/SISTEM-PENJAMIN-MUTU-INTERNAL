-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:33067
-- Generation Time: Aug 27, 2020 at 01:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjamin_mutu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `dokumen_id` int(11) NOT NULL,
  `nama_dokumen` varchar(100) NOT NULL,
  `kategori_dokumen` varchar(20) NOT NULL,
  `jenis_dokumen` varchar(20) NOT NULL,
  `kelompok_dokumen` varchar(30) NOT NULL,
  `file_dokumen` varchar(200) NOT NULL,
  `tgl_dokumen_masuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`dokumen_id`, `nama_dokumen`, `kategori_dokumen`, `jenis_dokumen`, `kelompok_dokumen`, `file_dokumen`, `tgl_dokumen_masuk`) VALUES
(32, 'FTI KEBIJAKAN GAMBAR', 'GAMBAR', 'KEBIJAKAN', 'FTI', 'a8064c32b6f0fbed059d2d9547e2c715.png', '1598534762'),
(33, 'FTI KEBIJAKAN PDF', 'PDF', 'KEBIJAKAN', 'FTI', '2a7fb28a518092e0327f50ef259492c5.pdf', '1598534870'),
(34, 'FTI KEBIJAKAN WORD', 'WORD', 'KEBIJAKAN', 'FTI', '934dab232c956c5ef40c247297c22be3.docx', '1598534886'),
(35, 'FTI INSTRUMEN GAMBAR', 'GAMBAR', 'INSTRUMEN', 'FTI', '504ca912458cc1c48c2286a6e2a0bb54.png', '1598534929'),
(36, 'FTI INSTRUMEN PDF', 'PDF', 'INSTRUMEN', 'FTI', '89beb27c8911d692b3de98413cba0ad8.pdf', '1598534946'),
(37, 'FTI INSTRUMEN WORD', 'WORD', 'INSTRUMEN', 'FTI', '739667875486855cd43d518a3251e9e0.docx', '1598534963'),
(38, 'FTI MANUAL GAMBAR', 'GAMBAR', 'MANUAL', 'FTI', '4e725ab6fdf277085087a487c6590ad6.png', '1598534984'),
(39, 'FTI MANUAL PDF', 'PDF', 'MANUAL', 'FTI', 'e6af205b1fef6906ee67f09dd7f46b30.pdf', '1598534997'),
(40, 'FTI MANUAL WORD', 'WORD', 'MANUAL', 'FTI', 'bdcafa3ed58e7431e04db2eb2b7e5b45.docx', '1598535014'),
(41, 'FTI STANDAR GAMBAR', 'GAMBAR', 'STANDAR', 'FTI', 'c6685a329d9adc002796c6faa329d97a.png', '1598535032'),
(42, 'FTI STANDAR PDF', 'PDF', 'STANDAR', 'FTI', '53fb712cd52b098bbfaa3193a7c06337.pdf', '1598535082'),
(43, 'FTI STANDAR WORD', 'WORD', 'STANDAR', 'FTI', '2f043a663e0a3afbb466f9b2e0ee4203.docx', '1598535100'),
(44, 'SI KEBIJAKAN GAMBAR', 'GAMBAR', 'KEBIJAKAN', 'SI', '88d9485708528dc483d31d074e816b6a.png', '1598535134'),
(45, 'SI KEBIJAKAN PDF', 'PDF', 'KEBIJAKAN', 'SI', 'a55e2a2cc720e2f6ad9f5cc4965704d4.pdf', '1598535150'),
(46, 'SI KEBIJAKAN WORD', 'WORD', 'KEBIJAKAN', 'SI', '40cde42dd7e457cddf795e2c7cccb128.docx', '1598535165'),
(47, 'SI INSTRUMEN GAMBAR', 'GAMBAR', 'INSTRUMEN', 'SI', '3313b3001bd3f145bf8749063f36b920.png', '1598535189'),
(48, 'SI INSTRUMEN PDF', 'PDF', 'INSTRUMEN', 'SI', 'ff1e830bd3e31d54d45ca20330f29497.pdf', '1598535201'),
(49, 'SI INSTRUMEN WORD', 'WORD', 'INSTRUMEN', 'SI', '18e7fc8da3cef16b0eef1cc842200c33.docx', '1598535215'),
(50, 'SI MANUAL GAMBAR', 'GAMBAR', 'MANUAL', 'SI', 'f98d2a55978467b0ba839e81f88c802d.png', '1598535245'),
(51, 'SI MANUAL PDF', 'PDF', 'MANUAL', 'SI', 'ff911afe02a9c2efbc467ee99def4027.pdf', '1598535268'),
(52, 'SI MANUAL WORD', 'WORD', 'MANUAL', 'SI', 'f1dd11fee55131a6b2f18714c41faa14.docx', '1598535281'),
(53, 'SI STANDAR GAMBAR', 'GAMBAR', 'STANDAR', 'SI', '64fd4c26d65e140a0cfb6eee977dabec.png', '1598535303'),
(54, 'SI STANDAR PDF', 'PDF', 'STANDAR', 'SI', '69b5db66786f52234813b134dff02510.pdf', '1598535316'),
(55, 'SI STANDAR WORD', 'WORD', 'STANDAR', 'SI', 'd25c590e7d7108176ea362fe014892ca.docx', '1598535330'),
(56, 'IK KEBIJAKAN GAMBAR', 'GAMBAR', 'KEBIJAKAN', 'IK', '5fee80767e5f08b004c7793610893edb.png', '1598535361'),
(57, 'IK KEBIJAKAN PDF', 'PDF', 'KEBIJAKAN', 'IK', '8f2b074c51bfd1fd3a48d7f3ab183493.pdf', '1598535376'),
(58, 'IK KEBIJAKAN WORD', 'WORD', 'KEBIJAKAN', 'IK', 'b12737e7a89edda71c0a4b574c019fba.docx', '1598535391'),
(59, 'IK INSTRUMEN GAMBAR', 'GAMBAR', 'INSTRUMEN', 'IK', '289daebafbc466f3de6fe646ab83aee9.png', '1598535415'),
(60, 'IK INSTRUMEN PDF', 'PDF', 'INSTRUMEN', 'IK', '00e442e440798f2624cebf24588530cd.pdf', '1598535440'),
(61, 'IK INSTRUMEN WORD', 'WORD', 'INSTRUMEN', 'IK', 'ad90e1e5754e89a85371b15b1f3f31c4.docx', '1598535455'),
(62, 'IK MANUAL GAMBAR', 'GAMBAR', 'MANUAL', 'IK', '44eee8d2f80e04a60c94035d36a18960.png', '1598535501'),
(63, 'IK MANUAL PDF', 'PDF', 'MANUAL', 'IK', '9455a2b747b7111de1630b9c3448008a.pdf', '1598535516'),
(64, 'IK MANUAL WORD', 'WORD', 'MANUAL', 'IK', '2f7c7eb443787042a16d04748d3c1085.docx', '1598535531'),
(65, 'IK STANDAR GAMBAR', 'GAMBAR', 'STANDAR', 'IK', 'ae7cd19faf06588bac0aef217cf3d1e2.png', '1598535555'),
(66, 'IK STANDAR PDF', 'PDF', 'STANDAR', 'IK', '8db7c1a30a6dbb782cf1c46fee9ed801.pdf', '1598535569'),
(67, 'IK STANDAR WORD', 'WORD', 'STANDAR', 'IK', 'e60f8305adb58aa1a5aeb245efdf9c99.docx', '1598535581');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_user`, `username`, `password`, `role`, `date_created`) VALUES
(1, 'Admin UPM', '2020080001', '$2y$10$/wkwqSOXIuiRvJ65M4sNuOeyaoNeAW27BereV0iEvAt3Oo9KucJ6G', 'ADMIN', '1597450488'),
(2, 'Fakultas FTI', '2020080002', '$2y$10$B4XzvvNbhZaoBSy2Yzb7NukDGQ8rpz9u87AO0BwuFc9cuWohjhiJO', 'FAKULTAS', '1597450488'),
(5, 'Fakultas SI', '2020080003', '$2y$10$6CZ7y2/FgMOZANIezHPmzu4SpFY0B.5Zzru6nBH761O2jH.rO9z5.', 'FAKULTAS', '1597460488'),
(6, 'Andikha Dian Nugraha', '2020080004', '$2y$10$rm7DC/UA76sDbJRj.iToWOsTDhgeh0/ZptUYIHjzMAmDy8.Ool61m', 'FAKULTAS', '1597538591'),
(7, 'Tester', 'tester', '$2y$10$HwhfWvaajqj3fJm5QBua2uSyXnNzv85HM9Hv4jkxxhHtgvD6fR1xO', 'FAKULTAS', '1597742878');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
