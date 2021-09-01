-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Tem 2021, 11:12:28
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ecms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tedbirler`
--

CREATE TABLE `tedbirler` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `komite_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_must` int(11) DEFAULT NULL,
  `komite_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tedbirler`
--

INSERT INTO `tedbirler` (`id`, `created_at`, `updated_at`, `komite_title`, `komite_slug`, `komite_file`, `komite_must`, `komite_content`, `komite_status`) VALUES
(1, '2021-07-07 08:37:33', '2021-07-10 07:57:54', 'komite title 1', 'komite-title-1', '60e80b5750bcd.png', 0, '<p>&nbsp;Yaygın inancın tersine, Lorem Ipsum rastgele s&amp;ouml;zc&amp;uuml;klerden oluşmaz. K&amp;ouml;kleri M.&amp;Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&amp;ccedil;mişi vardır. Virginia&amp;#39;daki Hampden-Sydney College&amp;#39;dan Latince profes&amp;ouml;r&amp;uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&amp;ccedil;en ve anlaşılması en g&amp;uuml;&amp;ccedil; s&amp;ouml;zc&amp;uuml;klerden biri olan &amp;#39;consectetur&amp;#39; s&amp;ouml;zc&amp;uuml;ğ&amp;uuml;n&amp;uuml;n klasik edebiyattaki &amp;ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &amp;Ccedil;i&amp;ccedil;ero tarafından M.&amp;Ouml;. 45 tarihinde kaleme alınan &amp;quot;de Finibus Bonorum et Malorum&amp;quot; (İyi ve K&amp;ouml;t&amp;uuml;n&amp;uuml;n U&amp;ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&amp;ouml;l&amp;uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &amp;uuml;zerine bir tezdir ve R&amp;ouml;nesans d&amp;ouml;neminde &amp;ccedil;ok pop&amp;uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &amp;quot;Lorem ipsum dolor sit amet&amp;quot; 1.10.32 sayılı b&amp;ouml;l&amp;uuml;mdeki bir satırdan gelmektedir.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;1500&amp;#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&amp;ccedil;in yeniden &amp;uuml;retilmiştir. &amp;Ccedil;i&amp;ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&amp;ouml;l&amp;uuml;mleri de 1914 H. Rackham &amp;ccedil;evirisinden alınan İngilizce s&amp;uuml;r&amp;uuml;mleri eşliğinde &amp;ouml;zg&amp;uuml;n bi&amp;ccedil;iminden yeniden &amp;uuml;retilmiştir.&nbsp;</p>', '0'),
(2, '2021-07-08 08:37:37', '2021-07-10 07:57:58', 'komite title 2 ', 'komite title 2 ', 'komite title 1 ', 1, 'komite title 1 ', '1'),
(3, '2021-07-22 08:37:41', '2021-07-10 07:57:58', 'komite title 3', 'komite-title-3', '60e80b657eda7.png', 2, '<p>komite title 1</p>', '1'),
(4, NULL, '2021-07-09 05:49:21', 'komite title 4 ', 'komite title 4', 'komite title 1 ', 3, 'komite title 1 ', '1'),
(5, '2021-07-15 08:37:45', '2021-07-09 05:49:21', 'komite title 5 ', 'komite title 5 ', 'komite title 1 ', 4, 'komite title 1 ', '1'),
(6, '2021-07-15 08:37:48', '2021-07-09 05:49:21', 'komite title 6 ', 'komite title6 ', 'komite title 1 ', 5, 'komite title 1 ', '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tedbirler`
--
ALTER TABLE `tedbirler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tedbirler`
--
ALTER TABLE `tedbirler`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
