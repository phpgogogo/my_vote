-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-23 11:53:44
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `vote`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `already_vote`
--

CREATE TABLE `already_vote` (
  `id` int(11) UNSIGNED NOT NULL,
  `already_vote_name` varchar(32) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `already_vote`
--

INSERT INTO `already_vote` (`id`, `already_vote_name`, `topic_id`) VALUES
(1, 'eee', 1),
(2, 'eee', 4),
(3, 'rrr', 1),
(4, 'eee', 45),
(5, 'eee', 56);

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic_id` int(11) UNSIGNED NOT NULL,
  `opt` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `topic_id`, `opt`, `count`) VALUES
(1, 1, '選項111', 7),
(12, 1, '選項3666', 4),
(13, 1, '選項4', 5),
(21, 1, 'fffffffffffffffffff', 2),
(22, 1, 'dddddddddddddddd', 1),
(23, 4, '贊成', 1),
(24, 4, '反對', 9),
(25, 4, '無意見', 1),
(89, 45, 'q1', 1),
(90, 45, 'q2', 2),
(91, 45, 'q3', 0),
(94, 49, '', 0),
(95, 51, '', 0),
(96, 52, 'p1', 1),
(97, 52, 'p2', 1),
(98, 52, 'p3', 0),
(99, 53, 'u1', 1),
(100, 53, 'u2', 0),
(101, 53, 'u3', 1),
(102, 53, 'u4', 0),
(104, 56, 'q1', 1),
(105, 56, 'q2', 1),
(107, 56, 'q4', 1),
(108, 56, 'q5', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `topic`, `status`) VALUES
(1, '哈哈哈333', 1),
(4, 'new', 1),
(45, 'qweqwe', 1),
(47, 'dfff', 1),
(48, 'wef', 1),
(49, 'qqq', 1),
(50, 'www', 1),
(51, 'qqqww', 1),
(52, 'weewewe', 1),
(53, '6540', 1),
(56, 'qqqqq', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` varchar(2) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `email`, `name`, `gender`, `birthday`) VALUES
(1, 'qwdwqd', 'wqdwqd', 'wqdwqdwqd', 'wqdqwdwqdqwd', '男', '2021-12-09'),
(2, 'aaa', 'aaa', 'wdd', 'wdwd', '男', '2021-11-29'),
(3, 'www', 'www', 'w', 'www', 'w', '0000-00-00'),
(4, 'ccc', 'ccc', 'cc', 'ccc', 'c', '0000-00-00'),
(5, 'ccc', 'ccc', 'cc', 'ccc', 'c', '0000-00-00'),
(6, 'qqq', 'qq', 'q', 'qqq', 'q', '0000-00-00'),
(7, 'eee', 'eee', 'wwwwwww', 'www', 'w', '2011-10-30'),
(8, '', '', '', '', '', '0000-00-00'),
(9, 'ddd', 'ddd', 'd', 'ddd', 'd', '2021-11-29'),
(10, 'rrr', 'rrr', 'r', 'rrr', 'r', '2021-12-23');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `already_vote`
--
ALTER TABLE `already_vote`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `already_vote`
--
ALTER TABLE `already_vote`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
