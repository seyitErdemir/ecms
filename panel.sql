-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Mar 2022, 21:37:20
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
  `blog_galeri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_must` int(11) DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_blog_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_blog_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_blog_gallery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `created_at`, `updated_at`, `blog_title`, `blog_slug`, `blog_file`, `blog_galeri`, `blog_must`, `blog_content`, `en_blog_title`, `en_blog_file`, `en_blog_content`, `en_blog_gallery`, `blog_status`) VALUES
(53, NULL, '2022-03-06 20:51:20', 'tr tr trt rtr tr tr tr tr tr tr tr', 'tr-tr-trt-rtr-tr-tr-tr-tr-tr-tr-tr', '622533618bd1e.png', NULL, 0, '<p>tr tr trt rtr tr tr tr tr tr tr tr&nbsp;tr tr trt rtr tr tr tr tr tr tr tr&nbsp;tr tr trt rtr tr tr tr tr tr tr tr</p>', 'en en en en en en', '62253377492df.png', 'en en en en en enen en en en en en', NULL, '1'),
(54, NULL, '2022-03-06 20:51:20', 'en en en en en en', 'en-en-en-en-en-en', '62253377492df.png', NULL, 1, '<p>en en en en en en&nbsp;en en en en en en&nbsp;en en en en en en&nbsp;en en en en en en&nbsp;en en en en en en</p>', 'tr tr trt rtr tr tr tr tr tr tr tr', '622533618bd1e.png', 'tr tr trt rtr tr tr tr tr tr tr tr', NULL, '1');

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
(86, NULL, '2022-02-27 16:35:58', 'Panel Logo', 'Panel', 'panel_logo_category', 1, 'panel_logo', '621bd29eac09d.png', 'file', 0, '1', '0'),
(87, NULL, '2022-02-27 09:03:13', 'Site Logo', 'Site', 'logo_category', 2, 'logo', NULL, 'file', 0, '1', '0'),
(89, NULL, '2022-02-27 16:35:58', 'Panel Footer', 'Panel', 'panel_footer_category', 1, 'panel_footer', 'WebDesign', 'text', 1, '1', '0'),
(90, NULL, '2022-02-27 16:35:58', 'Panel Title', 'Panel', 'panel_title_category', 1, 'panel_title', 'Merhaba Panelime Hoşgeldiniz', 'text', NULL, '1', '0'),
(91, NULL, '2022-02-27 16:35:58', 'Panel  Description', 'Panel', 'panel_description_category', 1, 'panel_description', 'Php-Laravel CMS Panel', 'text', NULL, '1', '0'),
(92, NULL, '2022-02-27 16:35:58', 'Panel Favicon', 'Panel', 'panel_favicon_category', 1, 'panel_favicon', '621bd178938b1.png', 'file', NULL, '1', '0'),
(93, NULL, NULL, 'Description', 'Site', 'description_category', 2, 'description', NULL, 'text', NULL, '1', '0'),
(94, NULL, NULL, 'Footer', 'Site', 'footer_category', 2, 'footer', NULL, 'text', NULL, '1', '0');

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
(5, '615c617d40bbf.png', 'admin', 'Seyittttt', 'seyiterdemir4242@gmail.com', NULL, '$2y$10$xbNr0ULHqh6uZ5WqXGuaCeO7mJ0FaiNAzedNFGnTeInV3qraKTSNG', 'RVeDME7dRbXZBEPvaMHF6Z7rpQWfNmat66HePwIwBj0R0E6sLYqcM4FHkuqO', NULL, '2022-02-23 11:58:54', '1'),
(10, '622808aa801f4.png', 'admin', 'seyitttttttttt', 'seyit@gmail.com', NULL, '$2y$10$SJIneLaaVX2x9PmFT76LiezLrTxsga8yMMLiEkfhLLzsesJhGr4eu', NULL, NULL, NULL, '1');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
