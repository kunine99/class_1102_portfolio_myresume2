-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-02-17 17:04:02
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `resume_basic_intro`
--

CREATE TABLE `resume_basic_intro` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `addr` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `graduate` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `other` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `resume_basic_intro`
--

INSERT INTO `resume_basic_intro` (`id`, `name`, `addr`, `email`, `graduate`, `position`, `other`) VALUES
(1, '張宴榕', '新北市，汐止區', 'rongyy94job@gmail.com', '銘傳大學—應用日語學系', '前/後端工程師(全職)', '立志轉職為工程師的人');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_bottom`
--

CREATE TABLE `resume_bottom` (
  `id` int(11) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `resume_bottom`
--

INSERT INTO `resume_bottom` (`id`, `bottom`) VALUES
(1, '@2022 resume');

-- --------------------------------------------------------

--
-- 資料表結構 `resume_image`
--

CREATE TABLE `resume_image` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wk` tinyint(1) DEFAULT NULL,
  `por` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porName` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `resume_image`
--

INSERT INTO `resume_image` (`id`, `img`, `sh`, `intro`, `wk`, `por`, `porName`) VALUES
(2, 'intro20220217022539.png', 0, '1', 0, NULL, NULL),
(4, 'intro20220217035140.png', 0, '1', 0, NULL, NULL),
(5, 'intro20220217040715.png', 1, '1', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_title`
--

CREATE TABLE `resume_title` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `resume_title`
--

INSERT INTO `resume_title` (`id`, `img`, `text`, `sh`) VALUES
(1, 'testimg', 'yesyyexy', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `resume_work_experience`
--

CREATE TABLE `resume_work_experience` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1,
  `time` text COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `resume_work_experience`
--

INSERT INTO `resume_work_experience` (`id`, `title`, `text`, `sh`, `time`) VALUES
(1, '泰山職業訓練場－PHP資料庫網頁設計班', '報名政府職訓局開辦課程【PHP資料庫網頁設計班】【920小時】，學習網頁程式設計相關技術，後端學習使用PHP原生語言撰寫網頁並搭配MySQL建構資料庫 進行資料管理，前端則使用HTML、CSS、JavaScript/JQ撰寫出具有動態效果的網頁內容，並配合Bootstrap 框架製作出RWD響應式網頁，最後再使用git進行基礎的版本控制。', 1, '2021/09~2022/03'),
(2, 'test標題', 'test內容', 0, 'test日期');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `resume_basic_intro`
--
ALTER TABLE `resume_basic_intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_bottom`
--
ALTER TABLE `resume_bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_image`
--
ALTER TABLE `resume_image`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- 資料表索引 `resume_title`
--
ALTER TABLE `resume_title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `resume_work_experience`
--
ALTER TABLE `resume_work_experience`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_bottom`
--
ALTER TABLE `resume_bottom`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_image`
--
ALTER TABLE `resume_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_title`
--
ALTER TABLE `resume_title`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `resume_work_experience`
--
ALTER TABLE `resume_work_experience`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
