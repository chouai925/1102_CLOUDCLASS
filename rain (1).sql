-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-04-08 15:15:29
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `fcu`
--

-- --------------------------------------------------------

--
-- 資料表結構 `rain`
--

CREATE TABLE `rain` (
  `id` int(11) NOT NULL COMMENT '主鍵',
  `dataorder` varchar(14) NOT NULL COMMENT '時間維度',
  `sysdatetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '資料更新時間',
  `sid` varchar(20) NOT NULL COMMENT '站台ID',
  `sname` varchar(60) DEFAULT NULL COMMENT '站台名稱',
  `sdatetime` datetime NOT NULL COMMENT '資料時間',
  `lat` double NOT NULL COMMENT '緯度',
  `lon` double NOT NULL COMMENT '經度',
  `hight` int(11) NOT NULL COMMENT '高度',
  `rain` int(11) NOT NULL COMMENT '60分鐘累積雨量',
  `minten` int(11) NOT NULL COMMENT '10分鐘累積雨量',
  `hourthree` int(11) NOT NULL COMMENT '3小時累積雨量',
  `hoursix` int(11) NOT NULL COMMENT '6小時累積雨量',
  `hourtwelve` int(11) NOT NULL COMMENT '12小時累積雨量',
  `hourtwentyfour` int(11) NOT NULL COMMENT '24小時累積雨量',
  `nowr` int(11) NOT NULL COMMENT '本日累積雨量',
  `cid` varchar(14) NOT NULL COMMENT '縣市ID',
  `cname` varchar(40) DEFAULT NULL COMMENT '縣市名稱',
  `tid` varchar(14) NOT NULL COMMENT '鄉鎮ID',
  `tname` varchar(60) DEFAULT NULL COMMENT '鄉鎮名稱'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `rain`
--
ALTER TABLE `rain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `checkduplicate` (`sid`,`sdatetime`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rain`
--
ALTER TABLE `rain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主鍵', AUTO_INCREMENT=7095395;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
