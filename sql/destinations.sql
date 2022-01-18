-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Nov 2021 um 16:41
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `fswd14_cr12_mount_everest_sebastian_stiedl`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `price`, `picture`, `latitude`, `longitude`) VALUES
(1, 'Faroe Islands', 'The Faroe Islands are an archipelago made up of 18 rugged islands, separated by narrow sounds and fjords. These volcanic islands lie in the North Atlantic Ocean at 62º north and 6º47 west, located about halfway between Scotland and Iceland.', '€1.500', '61a0a586ab408.jpg', '62.01416229850582', ' -6.742200715582686'),
(3, 'New Foundland', 'The Newfoundland is a large, strong dog breed from—wait for it—Newfoundland. They were originally used as a working dog to pull nets for fishermen and haul wood from the forest. Theyre a capable and hardworking dog, well suited to work on land or water.', '€2.000', '61a0ac69aa9a1.jpg', '53.324126014418624', '-60.349677975604116'),
(4, 'Reykjavik ', 'Reykjavík is the northernmost capital of a sovereign state in the world. It is among the cleanest, greenest, and safest cities in the world. The first permanent settlement in Iceland was in Reykjavík in 874 AD. ... Reykjavík is the only capital city in th', '€1.300', '61a0c5d66e7f2.jpeg', '64.14269710182218', ' -21.926664614247866'),
(5, 'Greenland', 'Greenland is the worlds largest island and an autonomous Danish dependent territory with limited self-government and its own parliament. ... Greenland enjoys perpetual daylight for two months each year but over 80% of the island is covered by an ice cap 4', '€1.700', '61a0c730e1c81.jpg', '70.48624191539693', '-21.964963059716776'),
(9, 'Copenhagen', 'Copenhagen, Danish København, capital and largest city of Denmark. It is located on the islands of Zealand (Sjælland) and Amager, at the southern end of The Sound (Øresund). ... In 1167 Bishop Absalon of Roskilde built a castle on an islet off the coast a', ' €500', '61a0f4a65c51c.jpg', '55.68481422889577', '12.573357227145133'),
(10, 'Oslo', 'Oslo is the oldest of the Scandinavian capitals, and its history goes back 1000 years, to the time when the first settlements were built at the inlet of the Oslo fjord. The capital of Norway is also its largest city. Oslo has over 600,000 inhabitants and ', '€650', '61a0f51fbcae6.png', '59.91306909467319', '10.743717286691307'),
(11, 'Quebec', 'Quebec, French Québec, eastern province of Canada. Constituting nearly one-sixth of Canadas total land area, Quebec is the largest of Canadas 10 provinces in area and is second only to Ontario in population. Its capital, Quebec city, is the oldest city in', '€1.200', '61a0f59aa553a.jpg', '46.815080415525145', '-71.20810247943278'),
(12, 'Bergen', 'Bergen is the second-largest city in Norway. The municipality covers 465 square kilometres (180 sq mi) and is on the peninsula of Bergenshalvøyen. The city centre and northern neighbourhoods are on Byfjorden, \"the city fjord\", and the city is surrounded b', '€670', '61a0f64646b9f.jpg', '60.41387577182736', '5.335298933286249');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
