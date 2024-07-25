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
-- テーブルの構造 `gs_building_table`
--

CREATE TABLE `gs_building_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `address` char(128) NOT NULL,
  `image_path` varchar(64) NOT NULL,
  `date` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_building_table`
--

INSERT INTO `gs_building_table` (`id`, `name`, `address`, `image_path`, `date`) VALUES
(1, '渋谷パルコ', '東京都渋谷区宇田川町15-1', 'img/b_id_1.jpeg', 2019),
(2, '富士ソフト汐留ビル', '東京都港区東新橋2-15-1', 'img/b_id_2.jpg', 2024),
(3, 'ザ・パークハウス六番町', '東京都千代田区六番町５−４', 'img/b_id_3.jpg', 2012);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_building_table`
--
ALTER TABLE `gs_building_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_building_table`
--
ALTER TABLE `gs_building_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
