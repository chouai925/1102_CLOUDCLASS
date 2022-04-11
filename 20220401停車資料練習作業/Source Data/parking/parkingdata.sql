-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-04-11 11:08:05
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
-- 資料表結構 `parkingdata`
--

CREATE TABLE `parkingdata` (
  `id` int(11) NOT NULL COMMENT '主鍵',
  `parkid` char(20) CHARACTER SET ascii NOT NULL COMMENT '停車處id',
  `parkName` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '停車處名稱',
  `totalSpace` int(11) NOT NULL COMMENT '車格',
  `surplusSpace` int(11) NOT NULL COMMENT '空位車格',
  `payGuide` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '停車說明',
  `introduction` varchar(250) NOT NULL COMMENT '停車處介紹',
  `address` varchar(250) NOT NULL COMMENT '停車處住址',
  `wgsX` char(16) CHARACTER SET ascii NOT NULL COMMENT 'X座標',
  `wgsY` char(16) CHARACTER SET ascii NOT NULL COMMENT 'Y座標',
  `areaId` char(4) CHARACTER SET ascii NOT NULL COMMENT '區域代碼',
  `areaName` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '區域名稱',
  `systemdatetime` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '資料創始時間',
  `datatime` char(14) CHARACTER SET ascii NOT NULL COMMENT '資料更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `parkingdata`
--
ALTER TABLE `parkingdata`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `parkingdata`
--
ALTER TABLE `parkingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主鍵';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
