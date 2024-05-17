-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 17, 2024 at 10:07 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mosiedle`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `when` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `object_id` int(11) NOT NULL,
  `object_type` text NOT NULL,
  `before` text DEFAULT NULL,
  `after` text NOT NULL,
  `type` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `when`, `object_id`, `object_type`, `before`, `after`, `type`, `description`) VALUES
(771, 2, '2024-05-08 17:46:14', 4, 'users', 'Imię: Kacper Korus<br/> Email: member@gmail.com<br/> Rola: 4<br/> Wspólnota: ', 'Imię: Kacper Korus<br/> Email: member@gmail.com<br/> Rola: 1<br/> Wspólnota: ', 1, 'Edyctowano użytkownika'),
(772, 2, '2024-05-08 17:48:18', 4, 'users', 'Imię: Kacper Korus<br/> Email: member@gmail.com<br/> Rola: 1<br/> Wspólnota: ', 'Imię: Kacper Korus<br/> Email: member@gmail.com<br/> Rola: 4<br/> Wspólnota: ', 1, 'Edyctowano użytkownika'),
(773, 2, '2024-05-09 11:45:43', 6, 'users', '', 'Imię: test test<br/> Email: huj<br/> Rola: 4<br/> Wspólnota: ', 2, 'Dodano użytkownika użytkownika'),
(774, 2, '2024-05-09 11:57:25', 7, 'users', '', 'Imię: test test<br/> Email: huhj@heh.pl<br/> Rola: 3<br/> Wspólnota: ', 2, 'Dodano użytkownika użytkownika'),
(775, 2, '2024-05-09 12:18:53', 7, 'users', 'Imię: <br/> Nazwisko: <br/> Drugie imię: <br/> Mail: <br/> Rola: 3<br/> Status: <br/> Opis: <br/> Szkoła: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(776, 2, '2024-05-09 12:19:08', 7, 'users', 'Imię: <br/> Nazwisko: <br/> Drugie imię: <br/> Mail: <br/> Rola: <br/> Status: <br/> Opis: <br/> Szkoła: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(777, 2, '2024-05-09 12:19:29', 7, 'users', 'Imię: <br/> Nazwisko: <br/> Drugie imię: <br/> Mail: <br/> Rola: <br/> Status: <br/> Opis: <br/> Szkoła: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(778, 2, '2024-05-09 12:20:08', 6, 'users', 'Imię: <br/> Nazwisko: <br/> Drugie imię: <br/> Mail: <br/> Rola: 4<br/> Status: <br/> Opis: <br/> Szkoła: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(779, 2, '2024-05-09 12:21:24', 8, 'users', '', 'Imię: test test<br/> Email: test@test.pl<br/> Rola: 4<br/> Wspólnota: ', 2, 'Dodano użytkownika użytkownika'),
(780, 2, '2024-05-09 12:21:33', 8, 'users', 'Imię: <br/> Nazwisko: <br/> Drugie imię: <br/> Mail: <br/> Rola: 4<br/> Status: <br/> Opis: <br/> Szkoła: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(781, 2, '2024-05-09 12:22:48', 9, 'users', '', 'Imię: test test<br/> Email: test@test.pl<br/> Rola: 1<br/> Wspólnota: ', 2, 'Dodano użytkownika użytkownika'),
(782, 2, '2024-05-09 12:23:00', 9, 'users', 'Imię: test test<br/> Email: test@test.pl<br/> Rola: 1<br/> Wspólnota: ', 'Imię: deleted_user<br/> Nazwisko: deleted_user<br/> Drugie imię: deleted_user<br/> Mail: deleted_user<br/> Rola: 1<br/> Status: 1<br/> Opis: deleted_user<br/> Szkoła: 1<br/>', 3, 'Usunięto użytkownika'),
(783, 2, '2024-05-12 11:22:51', 1, 'mtablice', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(784, 2, '2024-05-12 11:23:00', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(785, 2, '2024-05-12 11:23:04', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(786, 2, '2024-05-12 11:23:35', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(787, 2, '2024-05-12 11:23:37', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(788, 2, '2024-05-12 11:25:02', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(789, 2, '2024-05-12 11:25:16', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(790, 2, '2024-05-12 11:25:40', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: <br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(791, 2, '2024-05-12 11:26:28', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(792, 2, '2024-05-12 11:26:38', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(793, 2, '2024-05-12 11:26:43', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(794, 2, '2024-05-12 11:26:47', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(795, 2, '2024-05-12 11:26:51', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano tablicę'),
(796, 2, '2024-05-12 11:30:36', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano danę mTablicy'),
(797, 2, '2024-05-12 11:30:39', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: NULL<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano danę mTablicy'),
(798, 2, '2024-05-12 11:31:44', 1, 'mtablice', 'Data początku gwarancji: 1970-01-01<br/> Data końca gwarancji: 1970-01-01<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(799, 2, '2024-05-12 11:32:56', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(800, 2, '2024-05-12 11:33:06', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(801, 2, '2024-05-12 11:33:26', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(802, 2, '2024-05-12 11:33:38', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(803, 2, '2024-05-12 11:33:41', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: <br/> Data końca gwarancji: <br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(804, 2, '2024-05-12 11:35:56', 1, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(805, 2, '2024-05-12 11:37:19', 1, 'mtablice', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: klatka 2<br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(806, 2, '2024-05-12 11:37:31', 1, 'mtablice', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: klatka 2<br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: klatka 2<br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(807, 2, '2024-05-12 11:37:51', 1, 'mtablice', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: klatka 2<br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(808, 2, '2024-05-12 11:49:39', 1, 'mtablice', 'Hasło: ', 'Hasło: 12345', 1, 'Edytowano hasło mTablicy'),
(809, 2, '2024-05-12 11:53:04', 1, 'mtablice', 'Hasło: ', 'Hasło: 1234', 1, 'Edytowano hasło mTablicy'),
(810, 2, '2024-05-12 11:53:32', 1, 'mtablice', 'Hasło: 1234', 'Hasło: 12345', 1, 'Edytowano hasło mTablicy'),
(811, 2, '2024-05-12 11:55:11', 1, 'mtablice', 'Hasło: 12345', 'Hasło: 123456', 1, 'Edytowano hasło mTablicy'),
(812, 2, '2024-05-12 11:55:51', 1, 'mtablice', 'Hasło: 123456', 'Hasło: 12345678', 1, 'Edytowano hasło mTablicy'),
(813, 2, '2024-05-12 11:56:56', 1, 'mtablice', 'Hasło: 12345678', 'Hasło: 123456789', 1, 'Edytowano hasło mTablicy'),
(814, 2, '2024-05-12 11:57:34', 1, 'mtablice', 'Hasło: 123456789', 'Hasło: 12345678', 1, 'Edytowano hasło mTablicy'),
(815, 2, '2024-05-12 11:58:41', 1, 'mtablice', 'Hasło: 12345678', 'Hasło: 1234', 1, 'Edytowano hasło mTablicy'),
(816, 2, '2024-05-12 11:59:29', 1, 'mtablice', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 2024-05-12<br/> Data końca gwarancji: 2026-05-12<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(817, 2, '2024-05-12 12:24:09', 2, 'mtablice', '', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', 2, 'Dodano mTablicę'),
(818, 2, '2024-05-12 12:31:01', 3, 'mtablice', '', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', 2, 'Dodano mTablicę'),
(819, 2, '2024-05-12 12:32:50', 4, 'mtablice', '', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', 2, 'Dodano mTablicę'),
(820, 2, '2024-05-12 12:35:09', 5, 'mtablice', '', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 12345<br/> Kod zaproszenia: ', 2, 'Dodano mTablicę'),
(821, 2, '2024-05-12 12:41:11', 2, 'mtablice', 'Model: mTablica Basic<br/> Data produkcji: 0000-00-00 00:00:00<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', '', 3, 'Usunięto mTablicę'),
(822, 2, '2024-05-12 12:42:22', 3, 'mtablice', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12 14:31:01<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', '', 3, 'Usunięto mTablicę'),
(823, 2, '2024-05-12 12:42:28', 4, 'mtablice', 'Model: mTablica Basic<br/> Data produkcji: 2024-05-12 14:32:50<br/> Gwarancja: 0000-00-00 - 0000-00-00<br/> Wspólnota: 0<br/> Szczegóły: <br/> Opis: <br/> Hasło: 1234<br/> Kod zaproszenia: ', '', 3, 'Usunięto mTablicę'),
(824, 2, '2024-05-12 12:43:11', 5, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy'),
(825, 2, '2024-05-12 12:43:18', 5, 'mtablice', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Professional<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 'Data początku gwarancji: 0000-00-00<br/> Data końca gwarancji: 0000-00-00<br/> Model: mTablica Basic<br/> Wspólnota: 0<br/> Szczegóły miejsca: <br/> Opis: <br/> Kod zaproszenia: ', 1, 'Edytowano dane mTablicy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `log_types`
--

CREATE TABLE `log_types` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_types`
--

INSERT INTO `log_types` (`id`, `type`) VALUES
(1, 'modify'),
(2, 'create'),
(3, 'delete');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mtablice`
--

CREATE TABLE `mtablice` (
  `id` int(11) NOT NULL,
  `serial` varchar(80) NOT NULL,
  `wspolnota_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `warranty_start` date DEFAULT NULL,
  `warranty_end` date DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `place_details` varchar(50) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `model` varchar(150) NOT NULL,
  `invite_code` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mtablice`
--

INSERT INTO `mtablice` (`id`, `serial`, `wspolnota_id`, `status_id`, `create_date`, `warranty_start`, `warranty_end`, `password`, `place_details`, `description`, `model`, `invite_code`, `user_id`) VALUES
(1, 'mTablica0001', 0, 0, '2024-05-04 20:44:38', '2024-05-12', '2026-05-12', '1234', '', '', 'mTablica Basic', '', 5),
(5, 'mTablica-0005', 0, 0, '2024-05-12 14:35:09', '0000-00-00', '0000-00-00', '12345', '', '', 'mTablica Basic', '', 15);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'super_admin'),
(2, 'adm_wspolnota'),
(3, 'adm_3rdparty'),
(4, 'member'),
(5, 'mtablica');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `communities` varchar(100) DEFAULT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `communities`, `fullName`, `email`, `password`, `created_at`, `role_id`) VALUES
(1, NULL, 'Gustaw Sołdecki', 'gugisek@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2024-05-04 12:50:20', 2),
(2, NULL, 'Jakub Strzelczak', 'jakub@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2024-05-04 15:11:51', 1),
(3, NULL, 'Miasto Stołeczne Warszawa', '3rd@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2024-05-04 15:39:26', 3),
(4, '', 'Kacper Korus', 'member@gmail.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2024-05-04 16:04:45', 4),
(5, NULL, 'mTablica0001', 'mtablica0001@mosiedle.pl', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2024-05-04 19:28:06', 5),
(15, NULL, 'mTablica-0005', 'mtablica-0005@mosiedle.pl', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '2024-05-12 14:35:09', 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_fk0` (`user_id`),
  ADD KEY `logs_fk1` (`type`);

--
-- Indeksy dla tabeli `log_types`
--
ALTER TABLE `log_types`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `mtablice`
--
ALTER TABLE `mtablice`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=826;

--
-- AUTO_INCREMENT for table `log_types`
--
ALTER TABLE `log_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mtablice`
--
ALTER TABLE `mtablice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `logs_fk1` FOREIGN KEY (`type`) REFERENCES `log_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
