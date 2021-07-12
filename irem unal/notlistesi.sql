-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Tem 2021, 23:18:55
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `notlar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notlistesi`
--

DROP TABLE IF EXISTS `notlistesi`;
CREATE TABLE IF NOT EXISTS `notlistesi` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nots` text COLLATE utf8_turkish_ci NOT NULL,
  `ders` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `bilgi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `notlistesi`
--

INSERT INTO `notlistesi` (`id`, `nots`, `ders`, `konu`, `bilgi`) VALUES
(2, 'deneme text 2', 'Ag sistemleri', 'hafta 6', 'gizli bilgi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
