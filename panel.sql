-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eki 2021, 22:44:12
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
-- Veritabanı: `panel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_must` int(11) DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `blog_title`, `blog_slug`, `blog_file`, `blog_must`, `blog_content`, `blog_status`) VALUES
(31, NULL, '2021-09-03 11:20:39', 'Voluptatem Non est', 'repudiandae-aut-prae', '61322f3708ab7.png', NULL, '<p>Herkese yeniden merhabalaar arkadaşlar Power and Energy Society PES Komitesi d&ouml;nemin ilk etkinliği ile karşınızda.Udemy de eğitmenlik yapan Nazım Tiryaki hocamız ile beraber olacağız.Vereceği Solidworks eğitimi t&uuml;m IEEE &uuml;yelerine a&ccedil;ıktır.</p>', '0'),
(37, NULL, NULL, 'Aliqua Accusamus la', 'vel-unde-est-asperio', '615c7d3e755b0.png', NULL, '<p>adasd</p>', '1'),
(38, NULL, NULL, 'Et voluptas quos eaq', 'ut-odio-consequatur', '615c7d6706f12.png', NULL, '<p>asdas</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_30_095221_create_settings_table', 2),
(5, '2021_07_01_103658_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_must` int(11) DEFAULT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `page_title`, `page_slug`, `page_file`, `page_must`, `page_content`, `page_status`) VALUES
(1, '2021-07-07 08:37:33', '2021-07-13 05:24:53', 'IEEE Nedir?', 'ieee-nedir', '60ed4dd5c7499.jpeg', 0, '<p>A&ccedil;ılımı Institute of Electrical Electronics Engineers olan IEEE (T&uuml;rk&ccedil;esi: Elektrik Elektronik M&uuml;hendisleri Enstit&uuml;s&uuml;) &ldquo;İnsanlık Yararına Teknoloji&rdquo; sloganıyla herhangi bir k&acirc;r amacı g&uuml;tmeden teknolojinin gelişimi i&ccedil;in uğraşan bir topluluktur. 1884 yılında kurulan Amerika Elektrik M&uuml;hendisleri Enstit&uuml;s&uuml; ile Radyo M&uuml;hendisleri Enstit&uuml;s&uuml; 1 Ocak 1963 yılında IEEE&#39;yi oluşturmak i&ccedil;in birleştiler. IEEE t&uuml;m m&uuml;hendislik &ccedil;alışmaların yer aldığı alanlarda faaliyet g&ouml;stermesinin yanı sıra genel olarak elektrik, elektronik, telekom&uuml;nikasyon, otomasyon, uzay sistemleri, bilgisayar ve biyomedikal sistemler alanlarında faaliyet g&ouml;stermekte ve bu alanlarda bir&ccedil;ok standart belirlemektedir. IEEE, 400,000&rsquo;i aşkın &uuml;yesiyle 160&rsquo;dan fazla &uuml;lkede bulunan d&uuml;nyanın en b&uuml;y&uuml;k teknik topluluğudur. &Uuml;yeleri arasında akademisyenler, m&uuml;hendisler, bilim insanları gibi profesyonellerin bulunmasının yanı sıra d&uuml;nyadaki bir&ccedil;ok lise ve &uuml;niversite &ouml;ğrencisi yer almaktadır.</p>', '0'),
(23, NULL, '2021-07-13 05:25:33', 'IEEE Fırat Öğrenci Kolu', 'ieee-firat-ogrenci-kolu', '60ed4dfd8de2a.jpeg', NULL, '<p>IEEE Fırat &Uuml;niversitesi &Ouml;ğrenci Kolu d&uuml;nyanın en b&uuml;y&uuml;k teknolojik topluluğu olan IEEE&#39;nin d&uuml;nyadaki 1600 &ouml;ğrenci kolundan biri olup T&uuml;rkiye&#39;de toplam 79 tane olan global IEEE &ouml;ğrenci topluluklarının en aktiflerinden biridir. Topluluğumuza katılıp sosyal ve teknik alanda gelişmek isteyen t&uuml;m arkadaşlarımızı bu ailenin bir par&ccedil;ası olmaya davet ediyoruz. Etkinliklerimize katılıp haberdar olmak i&ccedil;in formu doldurup &uuml;ye olabilirsiniz. T&uuml;m duyurular i&ccedil;in sosyal medya hesaplarımızı takip edebilirsiniz.</p>', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `settings_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `settings_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_must` int(11) DEFAULT NULL,
  `settings_delete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `settings_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `settings_description`, `settings_category`, `key_category`, `category_id`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, NULL, '2021-09-22 03:56:17', 'başlık', 'Site', 'title_category', 1, 'title', 'Hoş Geldinizzzzz', 'text', 0, '0', '1'),
(2, NULL, '2021-09-22 03:56:11', 'Açıklama', 'Site', 'description__category', 1, 'description', 'Laravel ECMS Learning descriptionsadasd', 'text', 2, '0', '1'),
(3, NULL, '2021-09-22 03:56:11', 'Logo', 'Site', 'logo_category', 1, 'logo', '614ad2d6d1c95.png', 'file', 3, '0', '1'),
(4, NULL, '2021-09-22 03:56:11', 'icon', 'Site', 'icon_category', 1, 'icon', '6131df9b6e3f6.png', 'file', 4, '0', '1'),
(5, NULL, '2021-09-22 03:56:11', 'Anahtar Kelimeler', 'Site', 'keywords_category', 1, 'keywords', 'Laravel,ECMS ,Seyit Erdemir', 'text', 5, '0', '1'),
(8, NULL, '2021-09-22 03:54:07', 'Mail ', 'İletişim', 'mail_category', 2, 'mail', 'seyiterdemir4242@gmail.com', 'text', 0, '0', '1'),
(25, NULL, '2021-09-22 03:56:17', 'Footer Bilgi ', 'Site', 'footer_category', 1, 'footer', 'seyiterdemir', 'text', 1, '1', '1'),
(26, NULL, '2021-09-22 03:54:07', 'İnstragram Adresi', 'Sosyal', 'instagram_category', 3, 'instagram', 'xxxx asdas das d', 'text', 2, '0', '1'),
(29, NULL, '2021-09-22 03:53:56', 'Facebook Adresi', 'Sosyal', 'facebook_category', 3, 'facebook', 'seyit', 'text', 3, '0', '1'),
(40, NULL, '2021-09-22 03:54:07', ' Adresi', 'İletişim', 'address_category', 2, 'address', 'seyit', 'text', 1, '0', '1'),
(77, NULL, '2021-09-22 03:54:07', 'Deneme Editör', 'İletişim', 'editor_category', 2, 'editor', '<p>asda&nbsp; sdasda&nbsp; &nbsp;sdasdasd</p>', 'ckeditor', 2, '1', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_must` int(11) DEFAULT NULL,
  `slider_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `slider_title`, `slider_slug`, `slider_url`, `slider_file`, `slider_must`, `slider_content`, `slider_status`) VALUES
(24, NULL, '2021-09-03 11:19:59', 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETVhttps://www.youtube.com/user/FIRATIEEETV', '61322f0f0db7a.jpg', NULL, '<p>x</p>', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_file`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_status`) VALUES
(5, '615c617d40bbf.png', 'admin', 'Seyit', 'seyiterdemir4242@gmail.com', NULL, '$2y$10$xbNr0ULHqh6uZ5WqXGuaCeO7mJ0FaiNAzedNFGnTeInV3qraKTSNG', '1IZyJ31vUddgNDa0i6jt0Jo2wD3NAHI9Hh91Bgv6Gdc9Ha4U6D3px6lJTows', NULL, '2021-10-05 11:30:21', '1'),
(6, '60ed478a64895.jpg', 'admin', 'demo', 'demo.demo@gmail.com', NULL, '$2y$10$HiioCr8rdqM3WayE6Nw8F.solrcfPrUC9xa8g8/g7001sLluJgvKe', NULL, NULL, NULL, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
