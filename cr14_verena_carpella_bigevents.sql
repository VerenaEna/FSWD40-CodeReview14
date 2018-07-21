-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Jul 2018 um 03:04
-- Server-Version: 10.1.32-MariaDB
-- PHP-Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_verena_carpella_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locationName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventUrl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `event`
--

INSERT INTO `event` (`id`, `name`, `title`, `startDate`, `endDate`, `description`, `image`, `capacity`, `email`, `tel`, `locationName`, `address`, `nr`, `postcode`, `city`, `country`, `eventUrl`, `type`) VALUES
(1, 'Gerald Fleischhacker', 'Ich bin ja nicht deppert!', '2018-07-21 19:00:00', '2018-07-23 19:00:00', 'Pointiert und amüsant: Mit seinem neuen Programm „Ich bin ja nicht deppert!“ zeigt Gerald Fleischhacker sie absurde Welt der großen Steuergeldverschwender auf.\r\n\r\nGerald Fleischhacker - Ich bin ja nicht deppert!\r\nFoto: Felicitas Matern\r\nDer Sommer kommt. Die großen Ferien sind bald da. Die Strände füllen sich. Die Städte leeren sich. Die Menschen im Land sind rechtschaffen faul und lassen sich die Sonne auf den Bauch scheinen oder den Regen auf den Kopf prasseln. Je nachdem. Alle haben sie Urlaub und Entspannung verdient. Nur einem will das nicht so richtig gelingen. Gerald Fleischhacker nämlich.\r\nAuch wenn die Erfolgsshow \"Bist Du Deppert!\" auf PULS 4 in Sommerpause ist, im Hintergrund wird eifrig gewerkelt. Einerseits an neuen Fällen für die nächsten Staffeln, andererseits aber auch am neuem SOLO-Programm.\r\n\r\nDenn auch mit dem unglaublichen Erfolg von \"Bist Du Deppert!\" ist Mastermind und Moderator Gerald Fleischhacker eines klar: \"Ich bin ja nicht deppert!\". Auch wenn es so aussieht, als würde das durchaus helfen um das Leben in unserer heutigen Welt leichter zu bewältigen.', 'https://images.unsplash.com/photo-1531973819741-e27a5ae2cc7b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e2760e74f571db7f9108887e56efc73c&auto=format&fit=crop&w=1050&q=80', '200', 'test@mail.com', '0521444756', 'MuseumsQuartier Vienna', 'Museumsplatz', '5', '1110', 'Wien', 'AT', 'https://events.wien.info/en/vgo/impulstanz-2018/', 'Concert'),
(2, 'Serge Falck', 'Am Beckenrand', '2013-01-01 00:00:00', '2013-01-01 00:00:00', 'Mit seinem ersten Soloprogramm „Am Beckenrand“ wagt der Schauspieler Serge Falck (bekannt aus: „Kaisermühlenblues“, „CopStories“, „Tatort“ und „Medicopter 117“)\" den Sprung ins Kabarett.\r\n\r\nSerge Falck - Am Beckenrand\r\nFoto: Sarge Falck\r\nDer gebürtige Belgier und „lebende Österreicher“ (wie er sich selbst gerne bezeichnet) führt sein Publikum durch einen abwechslungsreichen Abend voll von humorvollen Geschichten und eigenen Songs. Er streift durch den Alltag von uns allen und philosophiert dabei, wie wir oft selbst am Beckenrand stehen und uns fragen, ob wir nun springen sollen oder nicht.\r\nSerge Falcks Geschichten führen von Song zu Song, dabei hält er sich selbst und seinem Publikum humorvoll und geistreich den Spiegel vor.\r\n\r\nIn „Am Beckenrand“ wählt Serge Falck bewusst den Schritt in unbekanntere Gewässer: So folgen auf Szenen oder Sequenzen, in denen der Schauspieler sich selber auf die Schaufel nimmt, plötzlich ganz stille Momente, die ihn von seiner ganz persönlichen Seite zeigen.\r\n\r\nBegleitet wird Serge Falck dabei von einer großartigen Band bestehend aus: Philipp Jagschitz (Keyboard), Ilse Riedler (Saxophon), Bernhard Osanna (Bass) und Christian Zieglwanger (Schlagzeug).\r\n\r\nEin Abend voll Musik, Humor und Tiefgang!', 'https://images.unsplash.com/photo-1531947556702-6b7a7c64b83e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e2aae9add0fde58372124976ff91ac38&auto=format&fit=crop&w=701&q=80', '50', 'info@akzent.at', '0668533301', 'Akzent', 'Theresianumgasse', '16-18', '1040', 'Wien', 'AT', 'https://www.events.at/e/serge-falck-am-beckenrand-0', 'Theatre'),
(3, 'Berni Wagner', 'Babylon', '2013-01-01 00:00:00', '2013-01-01 00:00:00', 'Sieben Jahre in der Großstadt. Und je länger Berni hier wohnt, desto mehr leidet er am Gegenteil von Fremdenhass: Er mag niemanden mehr, den er kennt.\r\n\r\nBerni Wagner - Babylon\r\nFoto: Astrid Knie\r\nDeshalb geht er auch mit Leuten, die er nicht kennt, an Orte zu denen er nicht eingeladen ist und unterhält sich dort in Sprachen, die er nicht spricht, über Themen, von denen er nichts versteht.\r\n\r\nSicher, er hat er eine Reihe von Problemen – aber Berührungsängste gehören nicht dazu! Vom Horror im Supermarkt über das Bordservice in der U-Bahn bis zu den Aliens im Prater:\r\nIn Bablyon! trifft zähflüssiger Alltag auf urbane Legende.\r\n\r\nEin kleines Epos gegen die Vereinsamung. Geschichten, wie sie selbst Berni Wagner nur in Wien passieren können.', 'https://images.unsplash.com/photo-1531977723862-0581c213ef33?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0e8c6ab8df0f6bb257f9acdf6db794d2&auto=format&fit=crop&w=1900&q=80', '20', 'test@mail.com', '0521444756', 'MuseumsQuartier Vienna', 'Museumsplatz', '8-12', '1110', 'Wien', 'AF', 'https://www.events.at/e/berni-wagner-babylon', 'Movie');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
