-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jun 2020 um 15:13
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `reminder`
--
CREATE DATABASE IF NOT EXISTS `reminder` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `reminder`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `category` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`category`, `color`) VALUES
('Bildung', '#79A4A8'),
('DHBW', '#EB8771'),
('Lernen', '#2D91E2'),
('Studium', '#A63CEC');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `remind2`
--

CREATE TABLE `remind2` (
  `id` int(10) NOT NULL,
  `bezeichnung` varchar(255) NOT NULL,
  `datum` datetime NOT NULL,
  `done` tinyint(1) NOT NULL,
  `category` varchar(255) NOT NULL,
  `category2` varchar(255) DEFAULT NULL,
  `category3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `remind2`
--

INSERT INTO `remind2` (`id`, `bezeichnung`, `datum`, `done`, `category`, `category2`, `category3`) VALUES
(23, 'Aufgabenlösung einreichen', '2020-05-25 14:45:20', 0, 'DHBW', 'Studium', 'Bildung'),
(24, 'mündliche Prüfung', '2020-09-01 09:00:00', 0, 'DHBW', 'Studium', 'Lernen');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category`);

--
-- Indizes für die Tabelle `remind2`
--
ALTER TABLE `remind2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `remind2`
--
ALTER TABLE `remind2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Change DB User auth-plugin to mysql-sql-password
ALTER USER admin IDENTIFIED WITH mysql_native_password BY 'pw';