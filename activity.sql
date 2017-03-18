-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-03-18 04:56:19
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `one_stop_traveling`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `Act_ID` int(11) NOT NULL,
  `Act_Name` varchar(20) NOT NULL,
  `Act_Catagory` varchar(20) NOT NULL,
  `Act_Address` varchar(20) NOT NULL,
  `Act_Mode` text NOT NULL,
  `Reg_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `activity`
--

INSERT INTO `activity` (`Act_ID`, `Act_Name`, `Act_Catagory`, `Act_Address`, `Act_Mode`, `Reg_ID`) VALUES
(1, '台南孔廟', '旅遊景點', '700台南市中西區南門路2號', 'WALKING', 700),
(2, '台南赤崁樓', '旅遊景點', '700台南市中西區民族路二段212號', 'WALKING', 700);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Act_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
