-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ara 2014, 13:13:40
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `itiraf`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `admin`, `sifre`) VALUES
(1, 'admin', 'a123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `itiraflar`
--

CREATE TABLE IF NOT EXISTS `itiraflar` (
  `kayit_no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `itiraflar` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`kayit_no`,`isim`),
  KEY `uye_id` (`isim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soyadi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kullanici_adi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `eposta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adi`, `soyadi`, `kullanici_adi`, `sifre`, `eposta`) VALUES
(2, 'murat', 'cakir', 'yakisikli', 'asd', 'asd.com.tr'),
(3, 'cetın', 'soyubey', 'king', '123456', 'dsdçadsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
