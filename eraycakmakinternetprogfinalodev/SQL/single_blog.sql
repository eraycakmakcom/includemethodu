-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 May 2020, 14:08:29
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `single_blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gorseller`
--

CREATE TABLE `gorseller` (
  `gorsel_id` int(5) NOT NULL,
  `gorsel_ad` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `gorsel_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `gorseller`
--

INSERT INTO `gorseller` (`gorsel_id`, `gorsel_ad`, `gorsel_time`) VALUES
(1, '61867037.jpg', '2020-05-10'),
(2, 'contact-bg.jpg', '2020-05-09'),
(3, '80299468.jpg', '2020-05-10'),
(4, '77279447.png', '2020-05-10'),
(5, '93417365.jpg', '2020-05-10'),
(6, '27738308.jpg', '2020-05-10'),
(7, '75586425.jpg', '2020-05-10'),
(8, '81479318.jpg', '2020-05-10'),
(9, '63639964.jpg', '2020-05-10'),
(11, '58726175.jpg', '2020-05-10'),
(12, '20089400.jpg', '2020-05-10'),
(13, '64975877.jpg', '2020-05-10'),
(14, '1738942.jpg', '2020-05-10'),
(15, '59289093.jpg', '2020-05-10'),
(16, '36712609.jpg', '2020-05-10'),
(17, '48897289.png', '2020-05-10'),
(18, '69813077.png', '2020-05-10'),
(19, '90761829.jpg', '2020-05-10'),
(20, '99452468.jpg', '2020-05-10'),
(21, '78132565.jpg', '2020-05-10'),
(22, '87984319.jpg', '2020-05-10'),
(23, '77853243.jpg', '2020-05-10'),
(24, '6342070.jpg', '2020-05-10'),
(25, '4884892.jpg', '2020-05-10'),
(26, '14651664.png', '2020-05-10'),
(27, '51131034.jpg', '2020-05-10'),
(28, '61554586.jpg', '2020-05-10'),
(29, '57701844.jpg', '2020-05-10'),
(30, '97623950.jpg', '2020-05-10'),
(31, '96485541.jpg', '2020-05-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(5) NOT NULL,
  `owner_ad` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_soyad` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_mail` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_git` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_linkedin` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_facebook` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_twit` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_insta` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_pin` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `owner_hk` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `owner`
--

INSERT INTO `owner` (`owner_id`, `owner_ad`, `owner_soyad`, `owner_mail`, `owner_git`, `owner_linkedin`, `owner_facebook`, `owner_twit`, `owner_insta`, `owner_pin`, `owner_hk`) VALUES
(1, 'SINGLE', 'BLOGG', 'mail@single.mail', 'github.com', 'linkedin.com', 'facebook.com', '', '', 'pinterest.com', 'Bu bir Hk. yazısır');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `page`
--

CREATE TABLE `page` (
  `page_id` int(100) NOT NULL,
  `page_title` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_ozet` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_img` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `page_okunma` int(100) NOT NULL,
  `page_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_ozet`, `page_text`, `page_img`, `page_okunma`, `page_time`) VALUES
(1, 'Bu İlk Yazımız', 'İlk Yazımızın ÖZetiia', '<p>Lorem Ipsum Nedir? Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur. Neden Kullanırız? Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir. Nereden Gelir? Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir. 1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n', '8869981.jpg', 22, '2020-05-09'),
(2, 'YEni bir yazı', 'YEni yasdsagfe', '<p>sdgasdgsdfgagfdagedgrdfgarfd</p>\r\n', '61867037.jpg', 0, '2020-05-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `patron`
--

CREATE TABLE `patron` (
  `patron_id` int(5) NOT NULL,
  `patron_reis` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `patron_sihir` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `patron_r1` int(5) NOT NULL,
  `patron_r2` int(25) NOT NULL,
  `deneme` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `patron`
--

INSERT INTO `patron` (`patron_id`, `patron_reis`, `patron_sihir`, `patron_r1`, `patron_r2`, `deneme`) VALUES
(1, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 5843350, 7158199, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `site`
--

CREATE TABLE `site` (
  `site_id` int(5) NOT NULL,
  `site_url` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_title` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_desc` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_soru` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_analystic` varchar(350) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_logo` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_google` varchar(350) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_yandex` varchar(350) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_bing` varchar(350) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_index` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_index_alt` varchar(252) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_tanitim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_tanitim_alt` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer1` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer1_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer2` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer2_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer3` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_footer3_text` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_referans` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  `site_referans_alt` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `site`
--

INSERT INTO `site` (`site_id`, `site_url`, `site_title`, `site_desc`, `site_soru`, `site_analystic`, `site_logo`, `site_google`, `site_yandex`, `site_bing`, `site_index`, `site_index_alt`, `site_tanitim`, `site_tanitim_alt`, `site_footer1`, `site_footer1_text`, `site_footer2`, `site_footer2_text`, `site_footer3`, `site_footer3_text`, `site_referans`, `site_referans_alt`) VALUES
(1, 'http://localhost/singel_blog/', 'Single Blog', 'Single Blog Çalışması Cem Celal Altınay tarafından karantina günlerinde yapılmıştırç', 'Lorem İpsum Nedir?', '', '', '', '', '', 'Hoş Geldin', 'Biraz gezinelim...', 'TANITIM YAZISI', 'Sitemiz çok amaçlı olup hepimiz içindir', 'Tam dinamik Footer (1)', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', 'Tam dinamik Footer (2)', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', 'Tam dinamik Footer (3)', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır.', 'Site Referanslar v.b. hakkındaaa', '<p>Lorem Ipsum Nedir? Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur. Neden Kullanırız? Yinelenen bir sayfa i&ccedil;eriğinin okuyucunun dikkatini dağıttığı bilinen bir ger&ccedil;ektir. Lorem Ipsum kullanmanın amacı, s&uuml;rekli &#39;buraya metin gelecek, buraya metin gelecek&#39; yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda bir&ccedil;ok masa&uuml;st&uuml; yayıncılık paketi ve web sayfa d&uuml;zenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında &#39;lorem ipsum&#39; anahtar s&ouml;zc&uuml;kleri ile arama yapıldığında hen&uuml;z tasarım aşamasında olan &ccedil;ok sayıda site listelenir. Yıllar i&ccedil;inde, bazen kazara, bazen bilin&ccedil;li olarak (&ouml;rneğin mizah katılarak), &ccedil;eşitli s&uuml;r&uuml;mleri geliştirilmiştir. Nereden Gelir? Yaygın inancın tersine, Lorem Ipsum rastgele s&ouml;zc&uuml;klerden oluşmaz. K&ouml;kleri M.&Ouml;. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir ge&ccedil;mişi vardır. Virginia&#39;daki Hampden-Sydney College&#39;dan Latince profes&ouml;r&uuml; Richard McClintock, bir Lorem Ipsum pasajında ge&ccedil;en ve anlaşılması en g&uuml;&ccedil; s&ouml;zc&uuml;klerden biri olan &#39;consectetur&#39; s&ouml;zc&uuml;ğ&uuml;n&uuml;n klasik edebiyattaki &ouml;rneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, &Ccedil;i&ccedil;ero tarafından M.&Ouml;. 45 tarihinde kaleme alınan &quot;de Finibus Bonorum et Malorum&quot; (İyi ve K&ouml;t&uuml;n&uuml;n U&ccedil; Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı b&ouml;l&uuml;mlerinden gelmektedir. Bu kitap, ahlak kuramı &uuml;zerine bir tezdir ve R&ouml;nesans d&ouml;neminde &ccedil;ok pop&uuml;ler olmuştur. Lorem Ipsum pasajının ilk satırı olan &quot;Lorem ipsum dolor sit amet&quot; 1.10.32 sayılı b&ouml;l&uuml;mdeki bir satırdan gelmektedir. 1500&#39;lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler i&ccedil;in yeniden &uuml;retilmiştir. &Ccedil;i&ccedil;ero tarafından yazılan 1.10.32 ve 1.10.33 b&ouml;l&uuml;mleri de 1914 H. Rackham &ccedil;evirisinden alınan İngilizce s&uuml;r&uuml;mleri eşliğinde &ouml;zg&uuml;n bi&ccedil;iminden yeniden &uuml;retilmiştir.</p>\r\n');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `gorseller`
--
ALTER TABLE `gorseller`
  ADD PRIMARY KEY (`gorsel_id`);

--
-- Tablo için indeksler `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Tablo için indeksler `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Tablo için indeksler `patron`
--
ALTER TABLE `patron`
  ADD PRIMARY KEY (`patron_id`);

--
-- Tablo için indeksler `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `gorseller`
--
ALTER TABLE `gorseller`
  MODIFY `gorsel_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `patron`
--
ALTER TABLE `patron`
  MODIFY `patron_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
