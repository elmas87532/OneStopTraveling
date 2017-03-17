-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-03-17 04:10:17
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.21

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

-- --------------------------------------------------------

--
-- 資料表結構 `county`
--

CREATE TABLE `county` (
  `Cou_ID` int(11) NOT NULL,
  `Cou_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `Fav_ID` int(10) NOT NULL,
  `FB_userID` varchar(20) NOT NULL,
  `Fav_URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `favorite`
--

INSERT INTO `favorite` (`Fav_ID`, `FB_userID`, `Fav_URL`) VALUES
(1, 'test', '0'),
(2, 'test', '0'),
(3, 'test', '0'),
(4, 'test', '0'),
(5, 'test', 'item-detail.php?id='),
(6, 'test', '0'),
(7, 'test', '0'),
(8, 'test', '0');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `FB_userID` varchar(20) NOT NULL,
  `Pro_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`FB_userID`, `Pro_ID`) VALUES
('test', 1),
('test', 10),
('test', 11),
('test', 12);

-- --------------------------------------------------------

--
-- 資料表結構 `project`
--

CREATE TABLE `project` (
  `Pro_ID` int(11) NOT NULL,
  `Pro_Name` varchar(20) NOT NULL,
  `Pro_Syr` int(4) NOT NULL,
  `Pro_Smon` int(2) NOT NULL,
  `Pro_Sdate` int(2) NOT NULL,
  `Pro_Eyr` int(4) NOT NULL,
  `Pro_Emon` int(2) NOT NULL,
  `Pro_Edate` int(2) NOT NULL,
  `Pro_LeaderUID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `project`
--

INSERT INTO `project` (`Pro_ID`, `Pro_Name`, `Pro_Syr`, `Pro_Smon`, `Pro_Sdate`, `Pro_Eyr`, `Pro_Emon`, `Pro_Edate`, `Pro_LeaderUID`) VALUES
(1, 'ddd', 2017, 1, 1, 2017, 1, 1, ''),
(2, 'qq', 2017, 3, 1, 2017, 3, 1, 'test'),
(3, 'qw', 2017, 1, 2, 2017, 1, 2, 'test'),
(4, 'ww', 2017, 1, 1, 2017, 1, 1, 'test'),
(5, 'y', 2017, 1, 1, 2017, 1, 1, 'test'),
(6, 'x', 2017, 1, 1, 2017, 1, 1, 'test'),
(7, 'aa', 2017, 1, 1, 2017, 1, 1, 'test'),
(8, 'r', 2017, 1, 1, 2017, 1, 1, 'test'),
(9, 'cc', 2017, 1, 1, 2017, 1, 1, 'test'),
(10, 'c', 2017, 1, 1, 2017, 1, 1, 'test'),
(11, '', 2017, 1, 1, 2017, 1, 1, 'test'),
(12, '', 2017, 1, 1, 2017, 1, 1, 'test');

-- --------------------------------------------------------

--
-- 資料表結構 `region`
--

CREATE TABLE `region` (
  `Reg_ID` int(11) NOT NULL,
  `Reg_Name` varchar(20) NOT NULL,
  `Cou_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `schedule`
--

CREATE TABLE `schedule` (
  `Sch_ID` int(11) NOT NULL,
  `Sch_Start` datetime NOT NULL,
  `Sch_End` datetime NOT NULL,
  `Sch_Date` date NOT NULL,
  `Pro_ID` int(11) NOT NULL,
  `Act_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `transportation`
--

CREATE TABLE `transportation` (
  `Tran_ID` int(11) NOT NULL,
  `Tran_Name` varchar(20) NOT NULL,
  `Tran_Phone` int(11) NOT NULL,
  `Reg_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `FB_userID` varchar(20) NOT NULL,
  `FB_userName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Act_ID`);

--
-- 資料表索引 `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`Cou_ID`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`Fav_ID`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`FB_userID`,`Pro_ID`);

--
-- 資料表索引 `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Pro_ID`);

--
-- 資料表索引 `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`Reg_ID`);

--
-- 資料表索引 `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Sch_ID`);

--
-- 資料表索引 `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`Tran_ID`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`FB_userID`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `Fav_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用資料表 AUTO_INCREMENT `project`
--
ALTER TABLE `project`
  MODIFY `Pro_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
