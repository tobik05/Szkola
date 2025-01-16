-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Paź 2020, 12:13
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `id` int(11) NOT NULL,
  `imie` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `nazwisko` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Jan', 'Kasprowicz'),
(2, 'Jan', 'Brzechwa'),
(3, 'Julian', 'Tuwim'),
(4, 'Janusz', 'Korczak'),
(5, 'Joanna', 'Chmielewska'),
(6, 'Witold', 'Gombrowicz'),
(7, 'Aleksander', 'Fredro'),
(8, 'Henryk', 'Sienkiewicz'),
(9, 'Magdalena', 'Witkiewicz'),
(10, 'Leon', 'Kruczkowski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czytelnicy`
--

CREATE TABLE `czytelnicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `DATA_ur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `czytelnicy`
--

INSERT INTO `czytelnicy` (`id`, `imie`, `nazwisko`, `DATA_ur`) VALUES
(1, 'Janina', 'Michalak', '1999-01-10'),
(2, 'Adam', 'Milek', '2001-10-23'),
(3, 'Bogdan', 'Nowacki', '1998-03-20'),
(4, 'Krzysztof', 'Kowalski', '1999-06-04'),
(5, 'Jadwiga', 'Kowal', '2001-02-20'),
(6, 'Magdalena', 'Mucha', '2000-01-05'),
(7, 'Maciej', 'Wysocki', '2001-11-23'),
(8, 'zbigniew', 'Lasecki', '1999-10-10'),
(9, 'Aleksandra', 'Kucharczyk', '1999-05-10'),
(10, 'Olga', 'Domys', '2001-03-01'),
(11, 'Anna', 'Michalak', '1997-05-24'),
(12, 'Maciej', 'Wysocki', '1999-02-02');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(46) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`) VALUES
(1, 'epika'),
(2, 'dramat'),
(3, 'liryka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `id` int(11) NOT NULL,
  `id_kategoria` int(11) DEFAULT NULL,
  `tytul` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `id_autor` int(11) DEFAULT NULL,
  `id_wydawnictwo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`id`, `id_kategoria`, `tytul`, `id_autor`, `id_wydawnictwo`) VALUES
(7, 3, 'Dies irae', 1, 3),
(8, 3, 'Poezje', 1, 1),
(9, 3, 'Wiersze wybrane', 2, 2),
(10, 3, 'Brzechwa dzieciom', 2, 1),
(11, 3, 'Bambo', 3, 3),
(12, 3, 'Rzepka', 3, 2),
(13, 3, 'Lokomotywa', 3, 1),
(17, 1, 'Kosmos', 6, 2),
(18, 1, 'Ferdydurke', 6, 2),
(19, 1, 'Trans-atlantyk', 6, 2),
(23, 1, 'Pech', 5, 3),
(24, 1, 'Lesio', 5, 2),
(25, 2, 'Zemsta', 7, 2),
(26, 2, 'Pan Jowialski', 7, 1),
(31, 1, 'Quo vadis', 8, 4),
(32, 1, 'Potop', 8, 1),
(33, 1, 'Ogniem i mieczem', 8, 2),
(34, 1, 'Panny roztropne', 9, 2),
(35, 1, 'Zamek z piasku', 9, 3),
(36, 2, 'Niemcy', 10, 1),
(37, 2, 'Odwiedziny', 10, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wydawnictwa`
--

CREATE TABLE `wydawnictwa` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wydawnictwa`
--

INSERT INTO `wydawnictwa` (`id`, `nazwa`) VALUES
(1, 'Amber'),
(2, 'Merlin'),
(3, 'Świat książki'),
(4, 'Dobra literatura');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `id` int(20) NOT NULL,
  `id_czytelnik` int(11) DEFAULT NULL,
  `id_ksiazka` int(11) DEFAULT NULL,
  `data_wypozyczenia` date DEFAULT NULL,
  `data_oddania` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`id`, `id_czytelnik`, `id_ksiazka`, `data_wypozyczenia`, `data_oddania`) VALUES
(1, 2, 22, '2018-01-01', '2018-01-12'),
(2, 3, 12, '2017-10-01', '2017-10-26'),
(3, 1, 30, '2018-01-07', '2018-01-21'),
(4, 3, 15, '2017-12-03', '2017-12-11'),
(5, 2, 25, '2017-11-06', '2017-11-23'),
(6, 5, 28, '2018-01-02', '2018-01-10'),
(7, 6, 29, '2017-12-13', '2018-01-09'),
(8, 9, 21, '2017-11-19', '2017-12-12'),
(9, 2, 10, '2018-01-05', '2018-01-19'),
(10, 3, 17, '2017-11-13', '2017-12-03');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `autorzy`
--
ALTER TABLE `autorzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `czytelnicy`
--
ALTER TABLE `czytelnicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT dla tabeli `wydawnictwa`
--
ALTER TABLE `wydawnictwa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
