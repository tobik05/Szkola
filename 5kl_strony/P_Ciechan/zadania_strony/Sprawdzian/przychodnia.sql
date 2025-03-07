-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Wrz 2022, 09:08
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `przychodnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekarz`
--

CREATE TABLE `lekarz` (
  `id_lekarza` int(11) NOT NULL,
  `Nazwisko` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Specjalnosc` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Data_ur` date NOT NULL,
  `NIP` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `pesel` varchar(15) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `lekarz`
--

INSERT INTO `lekarz` (`id_lekarza`, `Nazwisko`, `Imie`, `Specjalnosc`, `Data_ur`, `NIP`, `pesel`) VALUES
(23, 'Kadaj', 'Monika', 'laryngolog', '1965-03-16', '879-122-69-94', '65031687654'),
(25, 'Kordylewski', 'Michal', 'nefrolog', '1970-01-13', '567-098-55-66', '70011345567'),
(26, 'Lewandowska', 'Sylwia', 'urolog', '1955-04-22', '444-567-87-65', '55042256786'),
(28, 'Maslowski', 'Michal', 'okulista', '1956-10-19', '345-667-56-65', '56101988766'),
(29, 'Olejnik', 'Jacek', 'pediatra', '1960-07-23', '887-667-56-66', '60072388766'),
(30, 'Silakowska', 'Magdalena', 'nefrolog', '1959-11-25', '899-008-56-33', '59112599088'),
(31, 'Reks', 'Pawel', 'pediatra', '1971-09-26', '776-562-09-05', '71092699876'),
(33, 'Tucholska', 'Katarzyna', 'laryngolog', '1970-11-11', '876-555-09-33', '70111133456'),
(34, 'Nowak', 'Anna', 'nefrolog', '1970-04-12', '877-222-34-56', '70041245678'),
(36, 'Dybowski', 'Daniel', 'ortopeda', '1954-02-18', '556-877-90-67', '54021833455'),
(38, 'Boniecki', 'Pawel', 'alergolog', '1950-05-09', '566-978-87-01', '50050956677'),
(39, 'Celmer', 'Rados?aw', 'dermatolog', '1946-08-23', '657-879-65-88', '46082399875'),
(41, 'Czapiewski', 'Jakub', 'laryngolog', '1967-08-09', '234-986-99-44', '67080997756'),
(42, 'Dybowski', 'Michal', 'nefrolog', '1966-05-29', '456-787-56-91', '66052988755'),
(45, 'Jackowska', 'Agnieszka', 'chirurg', '1970-11-05', '876-456-98-12', '70110565723'),
(49, 'Krajewska', 'Malgorzata', 'neurolog', '1977-06-06', '456-987-75-33', '77060688543'),
(50, 'Poznanski', 'Maciej', 'kardiolog', '1972-08-18', '546-978-34-98', '72081877653'),
(51, 'Kowalik', 'Szymon', 'ortopeda', '1955-09-05', '546-787-76-44', '55090587622'),
(52, 'Marciniak', 'Krzysztof', 'reumatolog', '1956-10-10', '876-089-34-76', '56101098724'),
(53, 'Zakowska', 'Grazyna', 'okulista', '1967-09-06', '345-968-87-55', '67090656683'),
(55, 'Gawronski', 'Piotr', 'laryngolog', '1969-10-27', '887-988-67-54', '69102777544'),
(60, 'Jaworska', 'Karolina', 'chirurg', '1968-04-02', '456-997-87-23', '68040276503'),
(61, 'Olszewska', 'Anna', 'nefrolog', '1954-07-03', '445-987-77-34', '54070376501'),
(64, 'Stefanowicz', 'Grzegorz', 'internista', '1955-10-27', '657-098-67-55', '55102744582'),
(65, 'Witkowski', 'Karol', 'onkolog', '1965-08-04', '567-987-88-66', '65080487296'),
(67, 'Belczynska', 'Marta', 'internista', '1973-08-26', '345-878-87-34', '73082679300'),
(69, 'Mruk', 'Agata', 'endokrynolog', '1968-03-08', '867-456-34-55', '68030899823'),
(70, 'Gruszka', 'Marcin', 'internista', '1971-02-02', '768-873-67-44', '71020265499'),
(71, 'Rydz', 'Adam', 'laryngolog', '1972-07-26', '334-678-98-30', '72072674961'),
(72, 'Damian', 'Iwona', 'dermatolog', '1954-09-23', '456-098-67-01', '54092365792');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjent`
--

CREATE TABLE `pacjent` (
  `Id_pacjenta` int(11) NOT NULL,
  `Nazwisko` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Imie` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `Pesel` varchar(11) COLLATE utf8_polish_ci NOT NULL,
  `Data_ur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pacjent`
--

INSERT INTO `pacjent` (`Id_pacjenta`, `Nazwisko`, `Imie`, `Pesel`, `Data_ur`) VALUES
(100, 'Kowal', 'Waldemar', '01211309876', '2001-01-13'),
(110, 'Cyrankowska', 'Ilona', '06281498876', '2006-08-14'),
(111, 'Imbierowicz', 'Hanna', '64040456673', '1964-04-04'),
(121, 'Karlowski', 'Henryk', '55090933455', '1955-09-09'),
(122, 'Nowakowska', 'Joanna', '73050512356', '1973-05-05'),
(124, 'Witkowski', 'Hubert', '88030422354', '1988-03-04'),
(135, 'Walentowicz', 'Kinga', '02250987765', '2002-05-09'),
(147, 'Gumowska', 'Dorota', '65092490065', '1965-09-24'),
(155, 'Duch', 'Alicja', '06231299954', '2006-03-12'),
(160, 'Misz', 'Borys', '77121098855', '1977-12-10'),
(161, 'Barski', 'Karol', '99021766543', '1999-02-17'),
(163, 'Bartkowiak', 'Bartlomiej', '07210376599', '2007-01-03'),
(164, 'Benetkiewicz', 'Piotr', '01260988555', '2001-06-09'),
(165, 'Ciborski', 'Maciej', '57091566457', '1957-09-15'),
(166, 'Gesicki', 'Radoslaw', '00222709836', '2000-02-27'),
(170, 'Grajkowska', 'Monika', '06271109823', '2006-07-11'),
(172, 'Juszczyk', 'Adela', '99100996548', '1999-10-09'),
(173, 'Kolasinski', 'Karol', '98090433765', '1998-09-04'),
(180, 'Kosicka', 'Kamila', '03212099545', '2003-01-20'),
(181, 'Kupinski', 'Jakub', '78061600987', '1978-06-16'),
(184, 'Lajzer', 'Michal', '77092566487', '1977-09-25'),
(189, 'Lipinski', 'Artur', '02281902345', '2002-08-19'),
(191, 'Malkowski', 'Adam', '75082822376', '1975-08-28'),
(192, 'Noch', 'Przemyslaw', '99111590976', '1999-11-15'),
(193, 'Nowicka', 'Karolina', '06231744366', '2006-03-17'),
(197, 'Pawlak', 'Justyna', '01250577856', '2001-05-05'),
(198, 'Pawlowski', 'Jaroslaw', '80062465987', '1980-06-24'),
(200, 'Plaskowski', 'Jacek', '56070476895', '1956-07-04'),
(204, 'Ruminski', 'Krzysztof', '99101010987', '1999-10-10'),
(205, 'Szalewski', 'Wojciech', '99111987656', '1999-11-19'),
(207, 'Szewczyk', 'Maciej', '99092776545', '1999-09-27'),
(208, 'Wadowska', 'Agnieszka', '04262908766', '2004-06-29'),
(209, 'Waga', 'Emilia', '95052768598', '1995-05-27'),
(212, 'Wilkonska', 'Marta', '83070576855', '1983-07-05'),
(213, 'Bojanowska', 'Magdalena', '71022675598', '1971-02-26'),
(216, 'Czyza', 'Pawel', '06281233456', '2006-08-12'),
(226, 'Grabania', 'Malgorzata', '99040554586', '1999-04-05'),
(227, 'Kadajska', 'Monika', '05272799043', '2005-07-27'),
(231, 'Becmer', 'Wojciech', '99032778655', '1999-03-27'),
(233, 'Biernacka', 'Izabela', '58073022657', '1958-07-30'),
(235, 'Blaszkiewicz', 'Marcin', '04280999856', '2004-08-09'),
(236, 'Boladz', 'Artur', '73022098768', '1973-02-20'),
(238, 'Ciecharowska', 'Ilona', '65082890067', '1965-08-28'),
(241, 'Cyrankowska', 'Monika', '03272809866', '2003-07-28'),
(243, 'Dankowski', 'Daniel', '06291477654', '2006-09-14'),
(244, 'Draszczyk', 'Alicja', '99030778645', '1999-03-07'),
(245, 'Duszynska', 'Joanna', '66032685097', '1966-03-26'),
(246, 'Gumowska', 'Anna', '59092098756', '1959-09-20'),
(247, 'Imbierowicz', 'Joanna', '05272555476', '2005-07-25'),
(248, 'Kaminska', 'Jolanta', '04221987656', '2004-02-19'),
(249, 'Karlowski', 'Radoslaw', '80070324576', '1980-07-03'),
(252, 'Koronska', 'Sylwia', '99122889704', '1999-12-28'),
(253, 'lukaszewska', 'Katarzyna', '03271788923', '2003-07-17'),
(255, 'Modlinska', 'Agnieszka', '06260192845', '2006-06-01'),
(257, 'Polarek', 'Mariola', '53070987966', '1953-07-09'),
(258, 'Ottka', 'Piotr', '49072987556', '1949-07-29'),
(262, 'Pieczatowski', 'Witold', '04282277655', '2004-08-22'),
(263, 'Trawinska', 'Monika', '07220899876', '2007-02-08'),
(264, 'Smoczynska', 'Karolina', '99040112365', '1999-04-01'),
(266, 'Walentowicz', 'Hanna', '00290122345', '2000-09-01'),
(271, 'Winiarska', 'Kinga', '83072768895', '1983-07-27'),
(272, 'Walasz', 'Mariusz', '93032265788', '1993-03-22'),
(273, 'Wojciechowska', 'Katarzyna', '01230688765', '2001-03-06'),
(274, 'Wolski', 'Marek', '99022009768', '1999-02-20'),
(276, 'Zawadzka', 'Monika', '97012657489', '1997-01-26'),
(283, 'Wronikowska', 'Magdalena', '06240488976', '2006-04-04'),
(284, 'Andracki', 'Bartosz', '95082336577', '1995-08-23'),
(285, 'Bednarczyk', 'Lukasz', '05210786955', '2005-01-07'),
(286, 'Bogdan', 'Dawid', '99101889765', '1999-10-18'),
(288, 'Janas', 'Marcin', '99072987699', '1999-07-29'),
(290, 'Januszkiewicz', 'Szymon', '04241477685', '2004-04-14'),
(291, 'Kaznowska', 'Agnieszka', '47032598077', '1947-03-25'),
(292, 'Korda', 'Dawid', '88122685903', '1988-12-26'),
(295, 'Kosicki', 'Pawel', '06250799087', '2006-05-07'),
(296, 'Krankowska', 'Justyna', '99052009768', '1999-05-20'),
(299, 'Kurasz', 'Malgorzata', '80072765543', '1980-07-27'),
(300, 'Miler', 'Beata', '99012776588', '1999-01-27'),
(301, 'Nielepiec', 'Tomasz', '02222678854', '2002-02-26'),
(303, 'Pietrzak', 'Iwona', '76103098067', '1976-10-30'),
(306, 'Pirogowski', 'Piotr', '06220488795', '2006-02-04'),
(307, 'Romanska', 'Monika', '73082776855', '1973-08-27'),
(308, 'Sankiewicz', 'Przemyslaw', '99100445677', '1999-10-04'),
(309, 'Sibilak', 'Izabela', '70120675809', '1970-12-06'),
(311, 'Siemiatkowska', 'Anna', '00210188976', '2000-01-01'),
(313, 'Sowinska', 'Dorota', '88012087966', '1988-01-20'),
(314, 'Srubka', 'Marta', '03292376544', '2003-09-23'),
(316, 'Waruszewska', 'Agnieszka', '81102454687', '1981-10-24'),
(317, 'Wichrowska', 'Malgorzata', '01212799822', '2001-01-27'),
(318, 'Wilczek', 'Agata', '95082778956', '1995-08-27'),
(319, 'Wiorowska', 'Agnieszka', '04292148765', '2004-09-21'),
(401, 'Wirowski', 'Marcin', '90112238495', '1990-11-22'),
(403, 'Wozniak', 'Szymon', '99123009458', '1999-12-30'),
(404, 'Zielinski', 'Tomasz', '49060987956', '1949-06-09'),
(405, 'Zygarska', 'Joanna', '07220799825', '2007-02-07'),
(408, 'Ostrowski', 'Grzegorz', '01241990654', '2001-04-19'),
(409, 'Rutkowska', 'Karolina', '96022675877', '1996-02-26'),
(411, 'Jeziorski', 'Adrian', '99021774658', '1999-02-17'),
(412, 'Zabielska', 'Kamila', '03260688934', '2003-06-06'),
(415, 'Borowiec', 'Dorota', '07230899833', '2007-03-08'),
(416, 'Rawski', 'Mariusz', '98062657877', '1998-06-26'),
(418, 'Borowski', 'Andrzej', '92031487655', '1992-03-14'),
(420, 'Kandulska', 'Eugenia', '91052687765', '1991-05-26');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyta`
--

CREATE TABLE `wizyta` (
  `id_lekarza` int(11) NOT NULL,
  `Id_pacjenta` int(11) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wizyta`
--

INSERT INTO `wizyta` (`id_lekarza`, `Id_pacjenta`, `Data`) VALUES
(23, 124, '2006-12-13'),
(23, 172, '2006-01-25'),
(23, 191, '2006-02-01'),
(23, 191, '2006-09-26'),
(23, 207, '2006-09-25'),
(23, 252, '2006-03-06'),
(23, 272, '2006-10-26'),
(23, 272, '2007-02-13'),
(23, 291, '2006-01-09'),
(23, 291, '2006-06-06'),
(23, 416, '2006-01-07'),
(25, 100, '2006-08-04'),
(25, 135, '2006-09-24'),
(25, 135, '2007-04-07'),
(25, 248, '2006-05-26'),
(26, 238, '2006-08-02'),
(26, 238, '2007-03-12'),
(26, 249, '2006-10-19'),
(26, 401, '2006-04-09'),
(28, 111, '2006-02-03'),
(28, 161, '2006-10-15'),
(28, 209, '2007-04-01'),
(28, 246, '2006-07-17'),
(28, 246, '2006-09-27'),
(28, 252, '2007-02-10'),
(28, 313, '2006-10-27'),
(29, 170, '2007-02-15'),
(29, 241, '2007-01-25'),
(29, 253, '2006-08-28'),
(29, 283, '2006-12-04'),
(29, 306, '2007-02-14'),
(29, 311, '2006-12-29'),
(29, 311, '2007-02-04'),
(29, 317, '2007-04-01'),
(29, 319, '2006-01-28'),
(30, 164, '2006-11-10'),
(30, 255, '2007-02-03'),
(30, 273, '2006-07-26'),
(31, 100, '2006-03-26'),
(31, 100, '2006-08-12'),
(31, 100, '2007-04-29'),
(31, 110, '2006-12-08'),
(31, 110, '2007-03-29'),
(31, 216, '2007-02-24'),
(31, 273, '2006-01-27'),
(31, 301, '2006-06-06'),
(31, 301, '2006-12-06'),
(31, 415, '2007-04-10'),
(33, 111, '2006-01-23'),
(33, 155, '2006-11-11'),
(33, 166, '2006-09-13'),
(33, 180, '2006-07-08'),
(33, 262, '2006-09-03'),
(33, 314, '2006-07-08'),
(33, 314, '2007-01-20'),
(33, 405, '2007-03-24'),
(34, 110, '2007-02-20'),
(34, 170, '2007-01-18'),
(34, 170, '2007-03-04'),
(34, 197, '2006-07-26'),
(34, 262, '2006-01-24'),
(34, 262, '2006-04-10'),
(34, 262, '2006-10-20'),
(34, 415, '2007-04-15'),
(36, 160, '2006-12-29'),
(36, 172, '2006-10-10'),
(36, 204, '2006-07-07'),
(36, 213, '2006-12-07'),
(36, 213, '2007-03-26'),
(36, 257, '2006-10-29'),
(36, 286, '2006-09-07'),
(36, 286, '2006-12-09'),
(36, 307, '2006-12-05'),
(38, 122, '2006-10-19'),
(38, 164, '2006-10-26'),
(38, 241, '2006-10-11'),
(38, 241, '2006-12-01'),
(38, 247, '2006-02-26'),
(38, 263, '2007-04-20'),
(38, 303, '2006-07-05'),
(38, 309, '2006-04-26'),
(38, 314, '2007-08-06'),
(39, 147, '2007-01-29'),
(39, 205, '2006-01-29'),
(39, 205, '2006-03-13'),
(39, 205, '2006-06-14'),
(39, 286, '2007-03-03'),
(39, 299, '2006-02-03'),
(39, 299, '2006-04-05'),
(39, 420, '2001-01-22'),
(41, 198, '2006-09-05'),
(41, 200, '2006-09-24'),
(41, 200, '2007-01-20'),
(41, 212, '2006-09-18'),
(41, 231, '2006-03-12'),
(41, 231, '2006-05-24'),
(41, 231, '2007-01-25'),
(41, 284, '2006-11-11'),
(41, 292, '2006-10-24'),
(41, 296, '2007-02-10'),
(42, 166, '2007-03-27'),
(42, 193, '2007-01-24'),
(42, 285, '2006-09-11'),
(45, 121, '2006-10-24'),
(45, 122, '2006-11-20'),
(45, 165, '2006-10-18'),
(45, 204, '2006-09-26'),
(45, 207, '2006-11-23'),
(45, 258, '2006-11-03'),
(45, 271, '2006-02-01'),
(45, 288, '2006-04-09'),
(45, 409, '2007-01-24'),
(49, 163, '2007-03-12'),
(49, 193, '2007-02-13'),
(49, 227, '2006-10-20'),
(49, 408, '2006-09-03'),
(50, 227, '2006-02-03'),
(50, 227, '2006-11-21'),
(50, 290, '2006-11-12'),
(50, 405, '2007-03-28'),
(50, 412, '2006-07-07'),
(51, 135, '2007-02-26'),
(51, 189, '2007-01-03'),
(51, 295, '2007-02-12'),
(52, 121, '2006-09-14'),
(52, 121, '2007-03-13'),
(52, 226, '2006-10-10'),
(52, 245, '2006-09-02'),
(52, 284, '2007-02-12'),
(52, 411, '2006-11-23'),
(53, 155, '2007-02-19'),
(53, 208, '2006-03-18'),
(53, 212, '2007-02-11'),
(53, 235, '2006-10-22'),
(53, 266, '2006-12-25'),
(53, 301, '2006-10-24'),
(55, 205, '2007-03-08'),
(55, 213, '2006-04-02'),
(55, 264, '2006-03-04'),
(55, 271, '2007-02-15'),
(55, 303, '2006-09-07'),
(60, 173, '2007-03-24'),
(60, 184, '2007-09-12'),
(60, 200, '2006-09-08'),
(60, 209, '2006-09-25'),
(60, 209, '2006-11-29'),
(60, 226, '2006-04-20'),
(60, 226, '2006-09-21'),
(60, 231, '2007-02-03'),
(60, 286, '2007-01-25'),
(60, 299, '2006-05-13'),
(61, 180, '2006-10-20'),
(61, 208, '2006-07-08'),
(61, 208, '2007-01-25'),
(61, 243, '2006-12-28'),
(61, 266, '2006-09-16'),
(61, 319, '2006-09-03'),
(61, 319, '2006-11-09'),
(64, 160, '2007-02-03'),
(64, 181, '2006-10-12'),
(64, 184, '2006-03-08'),
(64, 401, '2006-12-07'),
(64, 401, '2007-03-12'),
(65, 181, '2006-02-10'),
(65, 181, '2006-09-24'),
(65, 181, '2007-02-12'),
(65, 192, '2007-02-09'),
(65, 244, '2006-10-24'),
(65, 291, '2006-10-18'),
(65, 300, '2001-11-24'),
(65, 316, '2006-10-11'),
(65, 403, '2003-12-12'),
(65, 418, '2000-06-23'),
(67, 147, '2007-02-08'),
(67, 236, '2007-03-16'),
(67, 257, '2006-05-05'),
(67, 257, '2006-12-22'),
(69, 165, '2007-03-30'),
(69, 236, '2006-09-26'),
(69, 292, '2006-01-04'),
(69, 316, '2006-10-27'),
(69, 316, '2007-02-13'),
(70, 124, '2006-01-25'),
(70, 124, '2006-10-09'),
(70, 245, '2006-11-04'),
(70, 272, '2006-10-24'),
(70, 308, '2007-01-07'),
(71, 161, '2006-04-08'),
(71, 161, '2006-08-15'),
(71, 233, '2006-12-03'),
(71, 238, '2006-09-04'),
(71, 258, '2006-10-19'),
(71, 274, '2006-01-23'),
(71, 313, '2006-12-03'),
(71, 404, '2007-03-12'),
(72, 173, '2006-09-02'),
(72, 173, '2006-10-28'),
(72, 191, '2006-10-12'),
(72, 198, '2006-10-19'),
(72, 233, '2006-07-06'),
(72, 233, '2006-10-02'),
(72, 246, '2006-07-10'),
(72, 249, '2006-07-06'),
(72, 249, '2006-08-23'),
(72, 249, '2006-09-28'),
(72, 276, '2007-05-12'),
(72, 288, '2006-10-30'),
(72, 309, '2006-09-28'),
(72, 309, '2007-02-16'),
(72, 404, '2006-08-28'),
(72, 409, '2006-08-03'),
(72, 416, '2007-01-25');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lekarz`
--
ALTER TABLE `lekarz`
  ADD PRIMARY KEY (`id_lekarza`);

--
-- Indeksy dla tabeli `pacjent`
--
ALTER TABLE `pacjent`
  ADD PRIMARY KEY (`Id_pacjenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pacjent`
--
ALTER TABLE `pacjent`
  MODIFY `Id_pacjenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=430;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
