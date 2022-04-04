-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-04-04 14:03:27
-- サーバのバージョン： 10.4.22-MariaDB
-- PHP のバージョン: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `nekocafe`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(1) NOT NULL,
  `menu` varchar(16) NOT NULL,
  `price` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `menu`
--

INSERT INTO `menu` (`menu_id`, `menu`, `price`) VALUES
(1, '30分', 600),
(2, '60分', 1200),
(3, '90分', 1800),
(4, '60分(朝限定)', 1000);

-- --------------------------------------------------------

--
-- テーブルの構造 `yoyaku`
--

CREATE TABLE `yoyaku` (
  `date` varchar(16) NOT NULL,
  `time` varchar(12) NOT NULL,
  `num` int(1) NOT NULL,
  `menu_id` int(1) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `yoyaku`
--

INSERT INTO `yoyaku` (`date`, `time`, `num`, `menu_id`, `name`, `email`, `phone`, `id`) VALUES
('2022/04/11', '11:30am', 3, 4, 'sssssssss', 'ssssss', '9438298', 4),
('2022/04/26', '2:00pm', 4, 2, 'oooooo', 'ooooooo', '7371912', 5),
('2022/03/27', '10:30am', 1, 1, 'aaaaa', 'sada', '23456', 6),
('2022/04/11', '12:00pm', 1, 1, 'kfdjal', 'dmskal', '47823', 7),
('2022/04/20', '4:00pm', 3, 3, 'saki', 'asaddff@maks.jp', '909-333-4456', 8),
('2022/04/20', '10:30am', 3, 2, 'aaaaaa', 'kdgbds@ddd', '09028374', 9),
('2022/04/20', '3:30pm', 4, 2, 'asada', 'oosl@ssd.com', '090-7234-847', 10),
('2022/04/05', '11:00am', 1, 2, 'aaaaa', 'ssssss', '47823', 11),
('2022/04/26', '11:00am', 3, 4, 'asadaana', 'asada@sss.com', '090-7823-123', 12);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- テーブルのインデックス `yoyaku`
--
ALTER TABLE `yoyaku`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルの AUTO_INCREMENT `yoyaku`
--
ALTER TABLE `yoyaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
