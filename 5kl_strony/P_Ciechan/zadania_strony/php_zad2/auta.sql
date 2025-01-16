-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 11, 2024 at 10:38 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `id` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `rok` int(20) NOT NULL,
  `nazwa_pliku` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `samochody`
--

INSERT INTO `samochody` (`id`, `marka`, `model`, `rok`, `nazwa_pliku`) VALUES
(1, 'BMW', '3 Series', 2018, 'bmw_3series_2018.png'),
(2, 'BMW', '3 Series', 2020, 'bmw_3series_2020.png'),
(3, 'BMW', '3 Series', 2022, 'bmw_3series_2022.png'),
(4, 'BMW', 'X5', 2019, 'bmw_x5_2019.png'),
(5, 'BMW', 'X5', 2021, 'bmw_x5_2021.png'),
(6, 'Audi', 'A4', 2017, 'audi_a4_2017.png'),
(7, 'Audi', 'Q7', 2019, 'audi_q7_2019.png'),
(8, 'Mercedes', 'C-Class', 2018, 'mercedes_cclass_2018.png'),
(9, 'Mercedes', 'GLE', 2020, 'mercedes_gle_2020.png'),
(10, 'Toyota', 'Corolla', 2021, 'toyota_corolla_2021.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `samochody`
--
ALTER TABLE `samochody`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
