-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 09:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_games`
--

-- --------------------------------------------------------

--
-- Table structure for table `games_list`
--

CREATE TABLE `games_list` (
  `gameID` int(11) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `game_price` decimal(4,2) NOT NULL DEFAULT '0.00',
  `game_source` varchar(50) NOT NULL,
  `game_genre` varchar(50) NOT NULL,
  `game_notes` text NOT NULL,
  `game_adder` varchar(50) NOT NULL,
  `game_upvotes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games_list`
--

INSERT INTO `games_list` (`gameID`, `game_name`, `game_price`, `game_source`, `game_genre`, `game_notes`, `game_adder`, `game_upvotes`) VALUES
(6, 'TestGame: The Game', '9.11', 'your mom\'s house', 'test \'em up', 'this is not a real game, duh this is just a sql test ya doorknob', 'beckypls', 0),
(11, 'Test 2: Even testier', '9.12', 'up your butt WWWWWOOOOOAAAAHHHH boom', 'suck it', 'haha', 'matt', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games_list`
--
ALTER TABLE `games_list`
  ADD PRIMARY KEY (`gameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games_list`
--
ALTER TABLE `games_list`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
