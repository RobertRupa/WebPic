-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 27 Cze 2019, 13:40
-- Wersja serwera: 5.6.39
-- Wersja PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `konatsu_upload`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uploader`
--

CREATE TABLE `uploader` (
  `id` int(10) UNSIGNED NOT NULL,
  `unique_id` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(1024) DEFAULT NULL,
  `url` text NOT NULL,
  `alt` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `uploader`
--

INSERT INTO `uploader` (`id`, `unique_id`, `created`, `comment`, `url`, `alt`) VALUES
(99, 'sadfsdv', '2019-05-13 12:44:01', '', '/upload/99/konatsu-pl-logo.jpg', ''),
(101, 'sadfsdv', '2019-05-13 12:48:26', '', '/upload/konatsu-pl-logo.jpg', ''),
(102, 'OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I', '2019-05-13 13:52:38', 'OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut', '/upload/102/OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I_OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut.png', ''),
(103, 'OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I', '2019-05-13 13:53:19', 'OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut', '/upload/OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I_OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut.png', ''),
(104, 'OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I', '2019-05-13 13:53:33', 'OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut', '/upload/OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I_OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut.png', ''),
(105, 'OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I', '2019-05-13 13:54:58', 'OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut', '/upload/OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I_OlimpProteinBar_Display_ChocoCheesecake_0004_old_cut.png', ''),
(109, 'OLN-OLPRO-BI-0064-CZ-001-B01-SA2-ED2-T-I', '2019-05-16 10:33:56', '', '/upload/DNA - karta produktu.jpg', ''),
(110, 'qwe', '2019-05-16 20:15:13', '', '/upload/57393866_337181656988417_48256057809567744_n.png', '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uploader`
--
ALTER TABLE `uploader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uploader`
--
ALTER TABLE `uploader`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
