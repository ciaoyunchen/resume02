-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 12 月 13 日 02:28
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `name`, `age`, `education`, `abilities`, `skills`) VALUES
(1, '陳巧芸 / Doris', '1993-03-03（26Y）', '國立台灣藝術大學（圖文傳播藝術學系）/國立台南女子高級中學（理工組）', '平面設計/網頁設計/活動規劃/專案執行', 'Photoshop/Illustrator/Indesign/HTML/CSS/Javascript/jQuery/Bootstrap');

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `tel`, `email`) VALUES
(1, '0905-120-177', 'dolly.chen702@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `cover`
--

CREATE TABLE `cover` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `cover`
--

INSERT INTO `cover` (`id`, `file`, `text`, `sh`) VALUES
(1, 'cover_img1.jpg', 'Sometimes it is now or never!', 1),
(2, 'cover_img2.jpg', 'Sometimes it is now or never!', 0),
(3, 'cover_img3.jpg', 'Sometimes it is now or never!', 0),
(4, 'cover_img4.jpg', 'Sometimes it is now or never!', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(10) UNSIGNED NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `company`, `title`, `time`, `period`, `pay`, `file`, `content`) VALUES
(1, '台灣樂金生活健康', '活動企劃專員', 'Sep 2015', '1.5Y', '30K/month', 'lg.png', '行銷活動規劃/簡報提案/佈置物設計/活動執行'),
(2, '欣臨股份有限公司', '產品副理', 'Mar 2017', '3Y', '45K/month', 'thl.png', '商品開發/肖像授權開發/產品包裝設計/行銷預算規劃/專案進度控管'),
(3, '雄獅旅行社', '網頁設計師', 'Jan 2019', '4Y', '50K/month', 'bear.jpg', '網頁設計規劃');

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `user`, `password`) VALUES
(1, 'admin', '0303');

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `http` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `file`, `http`, `sh`) VALUES
(1, 'perpetual01.jpg', '＃', 1),
(2, 'perpetual02.jpg', '＃', 1),
(3, 'lottery.jpg', '＃', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `special`
--

CREATE TABLE `special` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `special`
--

INSERT INTO `special` (`id`, `title`, `text`, `sh`) VALUES
(1, '豐富的想像力，加上100%的行動力！', '擁有無限想像力的雙魚座，總喜歡嘗試過往沒有嘗試過的新鮮事，在規劃行銷活動這部分也常常有很多的點子，感謝前東家願意讓經驗微薄的我盡情嘗試，從完全沒有半點行銷底的我，在短短兩年的時間經手了無數的活動企劃，也成功讓新品牌在消費者心中佔有一席之地。', 1),
(2, '身兼多職的品牌企劃，簡報製造機？', '對我而言，從來不想將自己設限在一個固定的職位、固定的工作內容，而是喜歡將自己的能力在職場上發揮到最大，把品牌企劃做好是基本，也利用自己設計的專長幫公司省下所有設計費用，公司品牌活動找不到PG？沒問題我自己來！商品拍攝沒有預算？沒問題我也可以！同事簡報做太醜？沒關係我馬上美化一個：）', 1),
(3, '同理他人，不過度預設立場！', '身為一個品牌小主管，帶領的團隊成員有些是剛畢業的新鮮人，有些甚至比我年長許多，要怎麼在團隊中找到平衡也是我一直在學習的，但不同的位子看事情的角度也不同，能夠站在對方的立場思考事情，才是唯一獲得認同的方法，很慶幸自己在前東家時順利的帶領團隊成員為公司創造更好的績效！', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `cover`
--
ALTER TABLE `cover`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `special`
--
ALTER TABLE `special`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
