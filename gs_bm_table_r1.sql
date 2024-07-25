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
-- テーブルの構造 `gs_bm_table_r1`
--

CREATE TABLE `gs_bm_table_r1` (
  `id` int(12) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `building_id` int(10) DEFAULT NULL,
  `design_code_id` int(12) DEFAULT NULL,
  `date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_bm_table_r1`
--

INSERT INTO `gs_bm_table_r1` (`id`, `user_id`, `building_id`, `design_code_id`, `date`, `modified_date`) VALUES
(1, 1, 2, 1, '2024-07-10 01:50:16', NULL),
(29, 2, 2, 1, '2024-07-18 02:46:22', NULL),
(31, 3, 2, 1, '2024-07-18 02:57:02', NULL),
(32, 1, 1, 3, '2024-07-20 00:21:52', NULL),
(33, 3, 1, 3, '2024-07-20 00:25:58', NULL),
(35, 2, 3, 2, '2024-07-20 00:44:06', NULL),
(38, 2, 1, 3, '2024-07-20 01:04:16', NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table_r1`
--
ALTER TABLE `gs_bm_table_r1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_bm_table_r1`
--
ALTER TABLE `gs_bm_table_r1`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
