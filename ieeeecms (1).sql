-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Tem 2021, 12:58:37
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
-- Veritabanı: `ieeeecms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `baskans`
--

CREATE TABLE `baskans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `baskan_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baskan_linked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_gorevi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baskan_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baskan_must` int(11) DEFAULT NULL,
  `baskan_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `baskans`
--

INSERT INTO `baskans` (`id`, `created_at`, `updated_at`, `baskan_title`, `baskan_linked`, `baskan_mail`, `baskan_gorevi`, `baskan_slug`, `baskan_file`, `baskan_must`, `baskan_status`) VALUES
(23, NULL, '2021-07-15 07:30:20', 'Assoc. Prof. Turgay KAYA', 'asdf', 'asdf', 'Akademik Lider', 'assoc-prof-turgay-kaya', '60ed482a72445.png', 1, '1'),
(25, NULL, '2021-07-15 07:30:20', 'Sezen AYDIN', 'afsgd', 'asdfgh', 'Yönetim Kurulu Eş Başkanı', 'sezen-aydin', '60ed4942d65db.jpg', 0, '1'),
(26, NULL, '2021-07-15 07:30:20', 'Expedita tempora tem', 'Modi velit neque omn', 'Rerum irure asperior', 'Tempore laboriosam', 'sit-nam-aliquip-ut', '60f00e2e7653d.png', 2, '1');

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
(31, NULL, NULL, 'Power and Energy Society', 'power-and-energy-society', '60ed4e4bd8308.jpeg', NULL, '<p>Herkese yeniden merhabalaar arkadaşlar Power and Energy Society PES Komitesi d&ouml;nemin ilk etkinliği ile karşınızda.Udemy de eğitmenlik yapan Nazım Tiryaki hocamız ile beraber olacağız.Vereceği Solidworks eğitimi t&uuml;m IEEE &uuml;yelerine a&ccedil;ıktır.</p>', '1'),
(32, NULL, NULL, 'Educational Activitiesi', 'educational-activitiesi', '60ed4e749aca2.jpeg', NULL, '<p>IEEE Fırat Educational Activities komitesi olarak ger&ccedil;ekleştirdiğimiz &lsquo;Etkili İletişim&rsquo; eğitimimiz; Dr. Burcu YİĞİT&rsquo;in eğitmenliği eşliğinde Google Meet &uuml;zerinden ger&ccedil;ekleşecektir ve sertifikalıdır. Hepiniz davetlisiniz</p>', '1'),
(33, NULL, NULL, 'Women In Engineering', 'women-in-engineering', '60ed4e9268000.jpeg', NULL, '<p>IEEE Turkey Student Branch WIE tarafından başlatılan &ldquo;Connect-Support-Inspire Talks&rdquo; Mini Seminer serisinin dokuzuncusuna IEEE g&ouml;n&uuml;ll&uuml;leri ile buluştuğumuz &ldquo;Connect&rdquo; konseptiyle IEEE Fırat olarak ev sahipliği yapmaktayız hepiniz etkinliğimize davelisiniz</p>', '1'),
(34, NULL, NULL, 'Kardeş Öğrenci Kolları Projesi', 'kardes-ogrenci-kollari-projesi', '60ed4eab95af8.jpeg', NULL, '<p>Kardeş okullarımız ile birlikte Kariyer G&uuml;nleri yolculuğuna &ccedil;ıkıyoruz.IEEE FU CS, IEEE ERU CS ve Kahramanmaraş IEEE KSU CS olarak birlikte, birbirinden değerli konuklar ile ger&ccedil;ekleştirileceğimiz etkinliğimize hepiniz davetlisiniz</p>', '1'),
(35, NULL, NULL, 'Computer Society', 'computer-society', '60ed4ec63abd8.jpeg', NULL, '<p>Computer Society komitemizin d&uuml;zenlediği Siber G&uuml;venlik 101 Eğitimimizde 02.01.2021 Cumartesi g&uuml;n&uuml; 13.00 - 17.00 saatleri arasında Computer Society başkanımız Fatih G&Uuml;REL&#39;in moderat&ouml;rl&uuml;ğ&uuml;nde Samet EMİROĞLU ve Berat G&ouml;kberk İŞLER bizlerle olacak.</p>', '1'),
(36, NULL, NULL, 'Robotics and Automation Society', 'robotics-and-automation-society', '60ed4ee7d4135.jpeg', NULL, '<p>IEEE Fırat Üniversitesi Robotics and Automation Society olarak İstinye ve Akdeniz Üniversiteleri IEEE &Ouml;ğrenci Toplulukları ile sağlamış olduğumuz ortaklıkla &ldquo;Temel Düzeyde Arduino Eğitimi&rdquo; etkinliğimizi duyurmaktan mutluluk duyarız</p>', '1');

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
-- Tablo için tablo yapısı `iks`
--

CREATE TABLE `iks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ik_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ik_linked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ik_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ik_gorevi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ik_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ik_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ik_must` int(11) DEFAULT NULL,
  `ik_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iks`
--

INSERT INTO `iks` (`id`, `created_at`, `updated_at`, `ik_title`, `ik_linked`, `ik_mail`, `ik_gorevi`, `ik_slug`, `ik_file`, `ik_must`, `ik_status`) VALUES
(23, NULL, '2021-07-14 05:03:41', 'Fatih GÜREL', 'https://www.linkedin.com/in/fatihgurel/', 'dfas', 'Computer Society Başkanı', 'fatih-gurel', '60ed4bc8a02e5.jpg', NULL, '1'),
(24, NULL, NULL, 'Çağla Nur ÇELİK', 'aad', 'dfas', 'Educational Activities Başkanı', 'cagla-nur-celik', '60ed4be474403.jpeg', NULL, '1'),
(25, NULL, NULL, 'Baran Sertan BOZTAŞ', 'aad', 'dfas', 'Kardeş Öğrenci Kolları Projesi Başkanı', 'baran-sertan-boztas', '60ed4c00cb2eb.jpeg', NULL, '1'),
(26, NULL, NULL, 'Serkan ÇOLAK', 'aad', 'dfas', 'Robotics & Automation Society Eş Başkanı', 'serkan-colak', '60ed4c2076ef0.jpg', NULL, '1'),
(27, NULL, NULL, 'Hasan Sadi GENÇOĞLU', 'aad', 'dfas', 'Robotics & Automation Society Eş Başkanı', 'hasan-sadi-gencoglu', '60ed4c38996de.jpeg', NULL, '1'),
(28, NULL, NULL, 'Tuğçe AYAZOĞLU', 'aad', 'dfas', 'Sponsorluk-Etkinlik Komitesi Eş Başkanı', 'tugce-ayazoglu', '60ed4c61141c9.jpg', NULL, '1'),
(29, NULL, NULL, 'Büşra ÖZTÜRK', 'aad', 'dfas', 'Sponsorluk-Etkinlik Komitesi Eş Başkanı', 'busra-ozturk', '60ed4c763cce4.jpg', NULL, '1'),
(30, NULL, NULL, 'Sezen Sena ÖZBEK', 'aad', 'dfas', 'Power & Energy Society Başkanı', 'sezen-sena-ozbek', '60ed4c93e0837.jpg', NULL, '1'),
(31, NULL, '2021-07-13 05:23:14', 'Ayşe Şevval URAL', 'aad', 'dfas', 'Tanıtım-Tasarım Komitesi Başkan', 'ayse-sevval-ural', '60ed4d726a86a.png', NULL, '1'),
(32, NULL, NULL, 'Canan ÇELİK', 'aad', 'dfas', 'Women in Engineering Başkan', 'canan-celik', '60ed4cc8671bf.jpg', NULL, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `komites`
--

CREATE TABLE `komites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `baskan_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `baskan_linked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yardimci_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yardimci_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yardimci_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yardimci_linked` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komite_kisa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komite_rengi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komite_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ieee_nedir` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fieee_nedir` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komite_faliyet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `komite_must` int(11) DEFAULT NULL,
  `komite_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `komites`
--

INSERT INTO `komites` (`id`, `created_at`, `updated_at`, `baskan_file`, `baskan_name`, `baskan_mail`, `baskan_linked`, `yardimci_file`, `yardimci_name`, `yardimci_mail`, `yardimci_linked`, `komite_title`, `komite_kisa`, `komite_rengi`, `komite_slug`, `ieee_nedir`, `fieee_nedir`, `komite_faliyet`, `komite_must`, `komite_status`) VALUES
(27, NULL, '2021-07-15 05:01:59', '60ed406228712.jpg', 'Fatih GÜREL', 'fatihgurel.yazilim@gmail.com', 'https://www.linkedin.com/in/fatihgurel/?locale=tr_TR', 'null', NULL, NULL, NULL, 'COMPUTER SOCIETY', 'CS', 'orange', 'computer-society', 'IEEE CS, bilgisayar bilimleri ve mühendisliğinde bilgi, ilham ve işbirliği için önde gelen bir kaynaktır. Dünya çapındaki üyeleri ortak bir noktada buluşturan Computer Society, profesyonel kariyerlerinin her aşamasında gerekli araçları sağlayarak teknolojiyi geliştiren bireyleri desteklemektedir. Güvenilir kaynakları arasında uluslararası konferanslar, kurul onaylı yayınlar, güçlü ve kapsamlı bir dijital kütüphane ve sürekli öğrenme olanakları bulunmaktadır.', 'IEEE Fırat CS komitesi, bilgisayar bilimleri, yazılım, donanım ve daha bir çok konu hakkında çeşitli eğitimler ve üyelerin ilgilerine yönelik projeler düzenler. Yapısında bulunan teknik ekip ile üyelerin kendini geliştirmek için katılabileceği çeşitli projeler geliştirerek ihtiyaç duyulan ekip halinde çalışma ve tartışma ortamının sağlanmasını üyelerine sunar.', '<p>IEEE&nbsp;Fırat&nbsp;Computer&nbsp;Society&nbsp;olarak&nbsp;hazır&nbsp;y&uuml;r&uuml;tmekte&nbsp;oldugumuz &uuml;&ccedil;&nbsp;proje&nbsp;ekibimiz&nbsp;bulunmaktadır.Bunlar;</p>\r\n\r\n<ul>\r\n	<li>Web&nbsp;Programlama</li>\r\n	<li>Mobil&nbsp;Programlama&nbsp;</li>\r\n	<li>Masa&uuml;st&uuml;&nbsp;Programlama&nbsp;</li>\r\n</ul>\r\n\r\n<p>Bunların&nbsp;yanı&nbsp;sıra&nbsp;web seminerleri&nbsp;ve&nbsp;online&nbsp;eğitimler&nbsp;d&uuml;zenlemekteyiz</p>', 0, '1'),
(28, NULL, '2021-07-14 11:53:39', '60ed418432f00.jpeg', 'EDUCATIONAL ACTIVITIES', 'caglanurcelik1118@gmail.com', 'https://www.linkedin.com/in/caglanurcelik/', '60ed418433dba.jpeg', NULL, NULL, NULL, 'EDUCATIONAL ACTIVITIES', 'EA', 'blue', 'educational-activities', 'IEEE EA, eğitim politikalarıyla ve çevresel-toplumsal sorunlarla ilgilenir. Üniversite öncesi öğrencilere, üniversite öğrencilerine ve genel kamuoyuna bilim ve mühendislik öğretmeyi amaçlarken, aynı zamanda çevresel ve toplumsal sorunlara mühendislik yaklaşımıyla çözümler üretir. IEEE Türkiye Educational Activities 45+ farklı üniversitede 2500+ üyesiyle etkinliğini aktif bir şekilde göstermektedir.', 'IEEE üyelerine ve diğer tüm insanlara mühendislik ve bilim eğitimi için yüksek kaliteli fırsatları sağlamayı amaçlar. IEEE’nin teknik ilgi alanlarına, yüksek öğreniminin tüm temel yönleri hakkında mesleki bakış açısı sunar. Çevresel ve toplumsal sorunları fark edip; mühendislik bakış açısıyla sorunlara yoğunlaşarak, sorunları çözecek projeleri hayata geçirir. Yapılan bu projeler üzerinden insanlara eğitimler vererek, konu hakkında bilgi edinebilmesini sağlar.', '<ul>\r\n	<li>EPICS in IEEE</li>\r\n	<li>Eğitimler-Hour of CODE</li>\r\n	<li>Bilim Deneyleri</li>\r\n	<li>Alanında Uzman Kişiler ile S&ouml;yleşiler</li>\r\n	<li>Pusula Projesi</li>\r\n</ul>', 1, '1'),
(29, NULL, '2021-07-13 05:22:08', '60ed41ea5fac2.jpeg', 'Baran Sertan BOZTAŞ', 'asdfdg', 'afsgd', '60ed41ea60464.jpeg', 'Baran Sertan BOZTAŞ', 'sadafds', 'asfgdf', 'Kardeş Öğrenci Kollar Projesi', 'KÖK', 'yellow', 'kardes-ogrenci-kollar-projesi', 'IEEE Türkiye Şubesi Öğrenci Kollarına bağlı olan Kardeş Öğrenci Kolları Projesi ya da KÖK projesi 2009 yılında Öğrenci Kolları’nın iletişimsizliğini ortadan kaldırmak ve Öğrenci Kollarını beraber çalışmaya teşvik ederek akademik, teknik ve sosyal anlamda kişisel ve kurumsal olarak kendimizi geliştirmek amacı ile kuruldu.', 'IEEE Fırat KÖK projesini içtenlikle benimsemiş bir kulüptür. Kardeş kolları ile gerek eğlence gerek birlikte çalışma anlamında gerekli altyapıyı oluşturmak adına KÖK projesi çatısı altında çalışmalarını yürütmektedir.', '<ul>\r\n	<li>Tanışma toplantısı</li>\r\n	<li>Kardeş Kollar ile Oyun&amp;Eğlence Etkinlikleri</li>\r\n	<li>Kardeş kollar ile Komiteler Arası Ortak Etkinlik</li>\r\n</ul>', 2, '1'),
(30, NULL, '2021-07-13 05:22:08', '60ed437c31eae.jpg', 'Sezen Sena ÖZBEK', 'asdfgh', 'zxcfgh', '60ed437c32069.jpg', 'Sezen Sena ÖZBEK', 'asdfgh', 'asdfghn', 'POWER & ENERGY SOCIETY', 'PES', 'dark green', 'power-energy-society', 'IEEE’nin en eski topluluğu ve kar amacı gütmeyen bir oluşumdur.Power and Energy Society(PES) yani Güç ve Enerji Topluluğu,IEEE’nin bünyesinde barındırdığı 39 topluluktan birisidir.Dünya çapında 100.000’den fazla üyesiyle alanındaki en önemli kurumlardan birisidir. Sektörel olarak belirlediği standartlar, destek verdiği Ar-Ge çalışmaları, uyguladığı eğitim programları ve bunların dışında aldığı bir çok etkin rol ile IEEE PES; mühendislerin, bilim insanlarının, öğrencilerin, sektörün liderlerinin ve onların çalışanlarının en büyük destekcilerindendir.', 'Üyeler ile güç ve enerji konuları üzerine proje geliştirmek veya proje geliştirmek isteyenlere destek olmak, Güç ve enerji konularına ilgi duyan ancak yeterli bilgi ve deneyime sahip olmayan kişilere destek olarak gelişimlerine katkıda bulunmak, Sektördeki yenilikleri takip ederek güncel konular hakkında bilgi sahibi olmak ve bunları üyelerine aktarmak, Kısacası güç ve enerji konuları üzerine çalışarak üyelerine ve çevresine bir bilgi kaynağı olmaktır.', '<ul>\r\n	<li>Solar rover yarışması,</li>\r\n	<li>Women in power,</li>\r\n	<li>Children in power,</li>\r\n	<li>Teknik eğitimler,</li>\r\n	<li>Alanında uzman kişilerle s&ouml;yleşiler,&nbsp;</li>\r\n	<li>Teknik projeler ve podcastler.</li>\r\n</ul>', 5, '1'),
(31, NULL, '2021-07-15 04:43:26', '60ed43e0c8f06.jpeg', 'Hasan Sadi GENÇOĞLU', 'asldkjf', 'asdsf', '60ed43e0c90d3.jpeg', NULL, NULL, NULL, 'Robotic and Automation Society', 'RAS', 'red', 'robotic-and-automation-society', 'IEEE RAS (Robotic and Automation Society), uygulanan ve teorik konularda dahil olmak üzere robotik ve otomasyon alanlarında bilimsel bilgi gelişimini ve değişimini destekleyen profesyonel bir IEEE topluluğudur.', 'IEEE RAS komitesi, üyelerinin sektördeki son gelişmeleri aktarmayı ve robotik-otomasyon alanındaki bilimsel ve teknolojik bilgilerin değişimini yakından inceleyip bu alanda projeler geliştirmeyi amaçlar. Üyelerinin derslerine katkıda bulunması amacıyla teknik eğitimler düzenlemek, inovatif projeler gerçekleştirmek, ve teknik geziler düzenlemek suretiyle çalışmalar gerçekleştirir. Yani IEEE RAS komitesinin vizyonu robotik ve otomasyonda en tanınmış saygın küresel organizasyon olmaktır.', '<ul>\r\n	<li>Piknik,</li>\r\n	<li>Sokak hayvanlarına mama dağıtma etkinliği,</li>\r\n	<li>Futbol turnuvası,</li>\r\n	<li>U&ccedil;urtma şenliği ve</li>\r\n	<li>K&uuml;lt&uuml;r gezileri.</li>\r\n</ul>', 3, '1'),
(32, NULL, '2021-07-13 05:22:08', '60ed445ee2724.jpg', 'Büşra ÖZTÜRK', 'asdfgh', 'zxcvbnj', '60ed445ee2b1a.jpg', 'Büşra ÖZTÜRK', 'asdfgh', 'asdfghj', 'SPONSORLUK-ETKİNLİK KOMİTESİ', 'SEK', 'green', 'sponsorluk-etkinlik-komitesi', 'Amacımız teknik yönü ağır basan kulübümüzde iletişimimizi güçlendirerek karşılıklı güven ortamı yaratıp sosyal etkinlikler, eğitim ve seminerlerle güçlü bir ekip oluşturmaktır. Tüm komitelerin etkinlikleri için gerekli sponsor desteğini gönüllü şirket, esnaf ve resmi kurumlardan sağlamaya çalışır.', 'Sosyal, kültürel ve eğitici etkinliklerle üyelerin keyifli vakit geçirmesini, birbirleriyle kaynaşmalarını ve ekip ruhunun güçlenmesini sağlar. Kaynak sağlamak isteyen sponsorlarla görüşüp destek alarak aynı zamanda topluluğumuzu tanıtma görevini yapar.', '<ul>\r\n	<li>Piknik,</li>\r\n	<li>Sokak hayvanlarına mama dağıtma etkinliği,</li>\r\n	<li>Futbol turnuvası,</li>\r\n	<li>U&ccedil;urtma şenliği ve</li>\r\n	<li>K&uuml;lt&uuml;r gezileri.</li>\r\n</ul>', 4, '1'),
(33, NULL, '2021-07-13 05:22:08', '60ed44d222d14.png', 'Ayşe Şevval URAL', 'qwe', 'asdfgh', '60ed44d223681.png', 'Ayşe Şevval URAL', 'asdfg', '<asdfg', 'TANITIM-TASARIM KOMİTESİ', 'TTK', 'purple', 'tanitim-tasarim-komitesi', 'Tanıtım Tasarım Komitesi yıl içerisinde yapılacak olan ya da yapılması planlanan etkinlikler için gerekli görsel ögelerin hazırlanmasından ve planlanan bu etkinliklerin en etkin şekilde tanıtılmasından sorumlu IEEE alt birimidir .', 'Etkinlik öncesi tanıtımı, afiş tasarımı ve video tasarımlarını hazırlar. Etkinlikte yer alacak kişileri etkinliğe hazırlar ve etkinliklerin tasarım tarafını üstlenir.Etkinlik öncesi sosyal medya etkinlik tanıtımı görevini üstlenir ve katılımcıların etkinlik ile ilgili tüm bilgilere ulaşmasını sağlar.Etkinlik sonrası fotoğrafları hazırlar ve sosyal medya paylaşımlarını yönetir', '<ul>\r\n	<li>Tasarım Eğitimleri</li>\r\n	<li>Tasarım Yarışması</li>\r\n	<li>Alanında Uzman Kişilerle S&ouml;yleşiler</li>\r\n</ul>', 6, '1'),
(34, NULL, '2021-07-13 05:22:08', '60ed453f822fc.jpg', 'Canan ÇELİK', 'asdfgh', 'afsgd', '60ed453f82493.jpg', 'Canan ÇELİK', 'asdfgh', 'asdfghn', 'WOMEN IN ENGINEERING', 'WIE', 'darkpurple', 'women-in-engineering', 'IEEE WIE, Kadınları mühendislik ,bilim ,kariyer ve yönetim alanlarında destekleyen, uluslararası en büyük teknik meslek örgütüdür. WIE, kadınların mühendislik, bilim, teknoloji ve matematik alanlarında güçlü, yaratıcı ve aktif olmasını amaçlar. IEEE WIE ,kesinlikle erkek karşıtı bir oluşum olmayıp; kadının toplumdaki statüsünü, iş istihdamını erkeklerle eşitlemeyi amaçlamakta ve bunu yaparken de toplumdaki önyargıları kırmayı amaçlamaktadır.', 'IEEE Fırat WIE olarak kadınları daha aktif çalışanlar olmaya ortaokullardan, liselerden, üniversite sıralarından başlayarak teşvik etmek, toplumdaki kadın iş gücü seviyesini arttırıp daha iyi yarınlar için geleceğe altyapı oluşturmayı amaçlamaktadır.', '<ul>\r\n	<li>STAR Projesi,</li>\r\n	<li>Kariyer ve kişisel gelişim workshopları,</li>\r\n	<li>Tea talk ve salon ekinlikleri.</li>\r\n</ul>', 7, '1');

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
  `settings_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_must` int(11) NOT NULL,
  `settings_delete` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, NULL, '2021-07-12 09:50:26', 'başlık', 'title', 'IEEE Fırat\'a Hoş Geldiniz', 'text', 0, '0', '1'),
(2, NULL, '2021-07-01 08:17:14', 'Açıklama', 'description', 'Laravel ECMS Learning description', 'text', 1, '0', '1'),
(3, NULL, '2021-07-12 10:22:59', 'Logo', 'logo', '60ec4233e680d.png', 'file', 2, '0', '1'),
(4, NULL, '2021-07-13 09:12:35', 'icon', 'icon', '60ed833396e3b.png', 'file', 3, '0', '1'),
(5, NULL, NULL, 'Anahtar Kelimeler', 'keywords', 'Laravel,ECMS ,Seyit Erdemir', 'text', 4, '0', '1'),
(6, NULL, NULL, 'Başkan Telefonu', 'phone_baskan', '55555555555', 'text', 5, '0', '1'),
(7, NULL, NULL, 'Sekreter Telefonu', 'phone_sekreter', '55555555555', 'text', 6, '0', '1'),
(8, NULL, '2021-07-13 09:28:42', 'Mail ', 'mail', 'sssss', 'text', 7, '0', '1'),
(11, NULL, '2021-07-13 09:28:04', 'Açık Adres ', 'adres', '<p>Fırat &Uuml;niversitesi M&uuml;hendislik Kamp&uuml;s&uuml; M&uuml;hendislik Fak&uuml;ltesi Elektrik-Elektronik M&uuml;hendisliği Binası IEEE Fırat &Ouml;ğrenci Kul&uuml;b&uuml; Odası 23200 Merkez/Elazığ</p>', 'ckeditor', 10, '0', '1'),
(25, NULL, '2021-07-15 04:23:55', 'Footer Bilgi ', 'footer', '2021©TheComputerSocietyWebDevelopmentTeam', 'text', 11, '1', '1'),
(26, NULL, NULL, 'İnstragram Adresi', 'instagram', 'xxxx', 'text', 7, '0', '1'),
(27, NULL, NULL, 'Twitter Adresi', 'twitter', 'xxxxxxx', 'text', 7, '0', '1'),
(28, NULL, NULL, 'LinkedIn Adresi', 'linked', 'xxxx', 'text', 7, '0', '1'),
(29, NULL, NULL, 'Facebook Adresi', 'facebook', 'xxxx', 'text', 7, '0', '1'),
(30, NULL, '2021-07-12 11:37:59', 'Slogan', 'slogan', 'Okulu Bitireceksin Ya Sonra !', 'text', 7, '0', '1'),
(31, NULL, '2021-07-14 04:14:06', 'Anasayfa Resim', 'home_file', '60ee8ebee8322.jpg', 'file', 2, '0', '1'),
(32, NULL, '2021-07-13 07:37:05', 'Üye Ol Resimi', 'uyeol_resim', '60ed6cd1a151c.jpg', 'file', 3, '0', '1'),
(33, NULL, '2021-07-13 07:37:50', 'Üye Ol Yazısı', 'uyeol_content', '<p>Sene başında M&uuml;hendislik Fak&uuml;ltesi genel kantininde ve Bilgisayar M&uuml;hendisliği b&ouml;l&uuml;m&uuml;nde &uuml;ye kayıt stantlarımız a&ccedil;ılmaktadır. Bu stantlardan kul&uuml;b&uuml;m&uuml;ze &uuml;ye olabilirsiniz. Stant g&uuml;nlerini ka&ccedil;ırdınız mı ? Hi&ccedil; problem değil bizimle iletişime ge&ccedil;in.</p>', 'ckeditor', 10, '0', '1'),
(34, NULL, '2021-07-13 07:36:27', 'Üye Ol 2. Resimi', 'uyeol_resimalt', '60ed6cab4b741.jpg', 'file', 3, '0', '1');

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
(24, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETVhttps://www.youtube.com/user/FIRATIEEETV', '60ed4f5e8388a.jpeg', NULL, '<p>x</p>', '1'),
(25, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4f6cd4478.jpeg', NULL, '<p>x</p>', '1'),
(26, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4f7b66d77.jpeg', NULL, '<p>x</p>', '1'),
(27, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4f8fccd66.jpeg', NULL, '<p>x</p>', '1'),
(28, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4fa26105f.jpeg', NULL, '<p>x</p>', '1'),
(29, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4fbc8d830.jpeg', NULL, '<p>x</p>', '1'),
(30, NULL, NULL, 'x', 'x', 'https://www.youtube.com/user/FIRATIEEETV', '60ed4fd47954f.jpeg', NULL, '<p>x</p>', '1');

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
(5, '60ec5772b3a71.png', 'admin', 'Seyit', 'seyiterdemir4242@gmail.com', NULL, '$2y$10$xbNr0ULHqh6uZ5WqXGuaCeO7mJ0FaiNAzedNFGnTeInV3qraKTSNG', 'SXFttlNcuMazE5t6SX0hNHHGENYSOyzdwfpegZrOVVSwTt3WUbOHbXF6ii7O', NULL, NULL, '1'),
(6, '60ed478a64895.jpg', 'admin', 'demo', 'demo.demo@gmail.com', NULL, '$2y$10$HiioCr8rdqM3WayE6Nw8F.solrcfPrUC9xa8g8/g7001sLluJgvKe', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yks`
--

CREATE TABLE `yks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `yk_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yk_linked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yk_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yk_gorevi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yk_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yk_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yk_must` int(11) DEFAULT NULL,
  `yk_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `yks`
--

INSERT INTO `yks` (`id`, `created_at`, `updated_at`, `yk_title`, `yk_linked`, `yk_mail`, `yk_gorevi`, `yk_slug`, `yk_file`, `yk_must`, `yk_status`) VALUES
(26, NULL, NULL, 'Gökmen ONUK', 'asd', 'asdf', 'Finansal Direktör', 'gokmen-onuk', '60ed496fdf7bd.jpg', NULL, '1'),
(27, NULL, NULL, 'Devran BABAT', 'asd', 'asdf', 'Dış İşlerden Sorumlu Başkan Yardımcısı', 'devran-babat', '60ed4992f023a.jpg', NULL, '1'),
(28, NULL, NULL, 'Bilgesu OCAK', 'asd', 'asdf', 'İç İşlerden Sorumlu Başkan Yardımcıs', 'bilgesu-ocak', '60ed4af497e56.jpg', NULL, '1'),
(29, NULL, NULL, 'Canan ÇELİK', 'asd', 'asdf', 'Yönetim Kurulu Genel Sekreteri', 'canan-celik', '60ed4b10b4d72.jpg', NULL, '1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `baskans`
--
ALTER TABLE `baskans`
  ADD PRIMARY KEY (`id`);

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
-- Tablo için indeksler `iks`
--
ALTER TABLE `iks`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `komites`
--
ALTER TABLE `komites`
  ADD PRIMARY KEY (`id`);

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
-- Tablo için indeksler `yks`
--
ALTER TABLE `yks`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `baskans`
--
ALTER TABLE `baskans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iks`
--
ALTER TABLE `iks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `komites`
--
ALTER TABLE `komites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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

--
-- Tablo için AUTO_INCREMENT değeri `yks`
--
ALTER TABLE `yks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
