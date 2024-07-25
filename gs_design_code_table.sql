-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 7 月 26 日 00:24
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db_kadai10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_design_code_table`
--

CREATE TABLE `gs_design_code_table` (
  `dc_id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `img` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_design_code_table`
--

INSERT INTO `gs_design_code_table` (`dc_id`, `name`, `img`) VALUES
(1, 'EURO_CODE', 'img/map/code/EU.jpeg'),
(2, 'US_CODE', 'img/map/code/US.png'),
(3, 'JPN_CODE', 'img/map/code/japan.jpeg');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_design_code_table`
--
ALTER TABLE `gs_design_code_table`
  ADD PRIMARY KEY (`dc_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_design_code_table`
--
ALTER TABLE `gs_design_code_table`
  MODIFY `dc_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
