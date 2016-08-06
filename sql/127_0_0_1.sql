-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 12:41 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--
CREATE DATABASE IF NOT EXISTS `test2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test2`;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `systemID` int(11) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `name`, `systemID`, `description`, `releaseDate`) VALUES
(1, 'Pokemon Sun', 4, 'Pokemon Sun is an upcoming role-playing video games in the Pokemon series developed by Game Freak and published by The Pokemon Company for the Nintendo 3DS handheld game console.', '2016-11-18'),
(2, 'Pokemon Moon', 4, 'Pokemon Moon is an upcoming role-playing video games in the Pokemon series developed by Game Freak and published by The Pokemon Company for the Nintendo 3DS handheld game console.', '2016-11-18'),
(3, 'No Man\'s Sky', 1, 'Deus Ex: Mankind Divided is an upcoming cyberpunk-themed action role-playing stealth video game developed by Eidos Montreal and published by Square Enix as a sequel to the 2011 Deus Ex: Human Revolution.', '2016-08-09'),
(4, 'Deus Ex: Mankind Divided', 1, 'No Man\'s Sky is an upcoming action-adventure survival video game developed and published by the indie studio Hello Games.', '2016-08-23'),
(5, 'Worms W.M.D', 1, 'Worms W.M.D is an upcoming artillery strategy game in the Worms series.', '2016-08-23'),
(6, 'World of Warcraft: Legion', 1, 'World of Warcraft: Legion is the sixth expansion set in the massively multiplayer online role-playing game World of Warcraft, following Warlords of Draenor.', '2016-08-30'),
(7, 'Attack on Titan', 1, 'Attack on Titan follows the riveting story line of Attack on Titan’s first season and focuses on the exploits of various key characters, putting the player in a position to relive the anime’s most shocking, courageous, and exhilarating moments.', '2016-08-30'),
(8, 'God Eater 2: Rage Burst', 1, 'Eradicate the Aragami in the sequel to the action-packed monster-slaying game God Eater.', '2016-08-30'),
(9, 'NASCAR Heat Evolution', 1, 'NASCAR Heat Evolution will immerse fans in the excitement of stock car racing and allow users to live the experience of taking the checkered flag.', '2016-09-13'),
(10, 'NBA 2K17', 1, 'NBA 2K17 is an upcoming basketball simulation video game developed by Visual Concepts and published by 2K Sports.', '2016-09-20'),
(11, 'Forza Horizon 3', 1, 'Forza Horizon 3 is an upcoming racing video game developed by Playground Games and published by Microsoft Studios.', '2016-09-27'),
(12, 'FIFA 17', 1, 'FIFA 17 is an upcoming association football video game.', '2016-09-27'),
(13, 'Mafia III', 1, 'Mafia III is an upcoming action-adventure video game developed by Hangar 13 and published by 2K Games.', '2016-10-07'),
(14, 'Gears of War 4', 1, 'Gears of War 4 is an upcoming third-person shooter video game developed by The Coalition and published by Microsoft Studios.', '2016-10-11'),
(15, 'Battlefield 1', 1, 'Battlefield 1 is an upcoming first-person shooter video game developed by EA DICE and published by Electronic Arts.', '2016-10-21'),
(16, 'Sid Meier\'s Civilization VI', 1, 'Sid Meier\'s Civilization VI or Civilization VI is an upcoming 4X video game in the Civilization series. It is being developed by Firaxis Games, published by 2K Games, and distributed by Take-Two Interactive.', '2016-10-21'),
(17, 'Just Dance 2017', 1, 'Just Dance 2017 is a dance video game developed and published by Ubisoft.', '2016-10-25'),
(18, 'Titanfall 2', 1, 'Titanfall 2 is an upcoming first-person shooter video game, the sequel to Titanfall. It is being developed by Respawn Entertainment and will be published by Electronic Arts.', '2016-10-28'),
(19, 'Call of Duty: Infinite Warfare', 1, 'Call of Duty: Infinite Warfare is an upcoming first-person shooter video game developed by Infinity Ward and published by Activision.', '2016-11-04'),
(20, 'Dishonored 2', 1, 'Dishonored 2 is an upcoming action-adventure stealth role-playing video game being developed by Arkane Studios and published by Bethesda Softworks.', '2016-11-11'),
(21, 'Watch Dogs 2', 1, 'Watch Dogs 2 is an upcoming open world action-adventure third-person shooter video game developed by Ubisoft Montreal.', '2016-11-15'),
(22, 'South Park: The Fractured But Whole', 1, 'South Park: The Fractured but Whole is a 2016 role-playing video game developed by Ubisoft San Francisco, in collaboration with South Park Digital Studios and published by Ubisoft.', '2016-12-06'),
(23, 'Dead Rising 4', 1, 'Dead Rising 4 is an upcoming open world survival horror beat \'em up video game developed by Capcom Vancouver and published by Microsoft Studios.', '2016-12-06'),
(24, 'Deus Ex: Mankind Divided', 3, 'No Man\'s Sky is an upcoming action-adventure survival video game developed and published by the indie studio Hello Games.', '2016-08-23'),
(25, 'Attack on Titan', 3, 'Attack on Titan follows the riveting story line of Attack on Titan’s first season and focuses on the exploits of various key characters, putting the player in a position to relive the anime’s most shocking, courageous, and exhilarating moments.', '2016-08-30'),
(26, 'XCOM 2', 3, 'XCOM 2 is a turn-based tactics video game developed by Firaxis Games and published by 2K Games.', '2016-09-06'),
(27, 'NBA 2K17', 3, 'NBA 2K17 is an upcoming basketball simulation video game developed by Visual Concepts and published by 2K Sports.', '2016-09-20'),
(28, 'FIFA 17', 3, 'FIFA 17 is an upcoming association football video game.', '2016-09-27'),
(29, 'Forza Horizon 3', 3, 'Forza Horizon 3 is an upcoming racing video game developed by Playground Games and published by Microsoft Studios.', '2016-09-27'),
(30, 'Final Fantasy XV', 3, 'Final Fantasy XV is an upcoming action role-playing video game being developed and published by Square Enix.', '2016-09-30'),
(31, 'Mafia III', 3, 'Mafia III is an upcoming action-adventure video game developed by Hangar 13 and published by 2K Games.', '2016-10-07'),
(32, 'Gears of War 4', 3, 'Gears of War 4 is an upcoming third-person shooter video game developed by The Coalition and published by Microsoft Studios.', '2016-10-11'),
(33, 'Madden NFL 17', 3, 'Madden NFL 17 is an American football sports video game based on the National Football League and published by EA Sports.', '2016-08-23'),
(34, 'WWE 2K17', 3, 'WWE 2K17 is an upcoming professional wrestling video game in development by Yuke\'s and Visual Concepts and will be published by 2K Sports.', '2016-10-11'),
(35, 'Skylanders Imaginators', 3, 'Skylanders: Imaginators is the sixth installment in the Skylanders series, developed by Toys for Bob and published by Activision.', '2016-10-16'),
(36, 'Battlefield 1', 3, 'Battlefield 1 is an upcoming first-person shooter video game developed by EA DICE and published by Electronic Arts.', '2016-10-21'),
(37, 'Dragon Ball Xenoverse 2', 3, 'Dragon Ball Xenoverse 2 is an upcoming fighting role-playing video game being developed by Dimps and published by Bandai Namco Entertainment based on the Dragon Ball franchise.', '2016-10-25'),
(38, 'Just Dance 2017', 3, 'Just Dance 2017 is a dance video game developed and published by Ubisoft.', '2016-10-25'),
(39, 'Titanfall 2', 3, 'Titanfall 2 is an upcoming first-person shooter video game, the sequel to Titanfall. It is being developed by Respawn Entertainment and will be published by Electronic Arts.', '2016-10-28'),
(40, 'Call of Duty: Infinite Warfare', 3, 'Call of Duty: Infinite Warfare is an upcoming first-person shooter video game developed by Infinity Ward and published by Activision.', '2016-11-04'),
(41, 'Dishonored 2', 3, 'Dishonored 2 is an upcoming action-adventure stealth role-playing video game being developed by Arkane Studios and published by Bethesda Softworks.', '2016-11-11'),
(42, 'Watch Dogs 2', 3, 'Watch Dogs 2 is an upcoming open world action-adventure third-person shooter video game developed by Ubisoft Montreal.', '2016-11-15'),
(43, 'South Park: The Fractured But Whole', 3, 'South Park: The Fractured but Whole is a 2016 role-playing video game developed by Ubisoft San Francisco, in collaboration with South Park Digital Studios and published by Ubisoft.', '2016-12-06'),
(44, 'Dead Rising 4', 3, 'Dead Rising 4 is an upcoming open world survival horror beat \'em up video game developed by Capcom Vancouver and published by Microsoft Studios.', '2016-12-06'),
(45, 'Madden NFL 17', 2, 'Madden NFL 17 is an American football sports video game based on the National Football League and published by EA Sports.', '2016-08-23'),
(46, 'The King of Fighters XIV', 2, 'The King of Fighters XIV is an upcoming fighting game in The King of Fighters series developed and published in Japan by SNK.', '2016-08-23'),
(47, 'Deus Ex: Mankind Divided', 2, 'No Man\'s Sky is an upcoming action-adventure survival video game developed and published by the indie studio Hello Games.', '2016-08-23'),
(48, 'God Eater 2: Rage Burst', 2, 'Eradicate the Aragami in the sequel to the action-packed monster-slaying game God Eater.', '2016-08-30'),
(49, 'Attack on Titan', 2, 'Attack on Titan follows the riveting story line of Attack on Titan’s first season and focuses on the exploits of various key characters, putting the player in a position to relive the anime’s most shocking, courageous, and exhilarating moments.', '2016-08-30'),
(50, 'Hatsune Miku: Project Diva X', 2, 'Hatsune Miku: Project DIVA X is a 2016 rhythm game created by Sega and Crypton Future Media.', '2016-08-30'),
(51, 'XCOM 2', 2, 'XCOM 2 is a turn-based tactics video game developed by Firaxis Games and published by 2K Games.', '2016-09-06'),
(52, 'NASCAR Heat Evolution', 2, 'NASCAR Heat Evolution will immerse fans in the excitement of stock car racing and allow users to live the experience of taking the checkered flag.', '2016-09-13'),
(53, 'NBA 2K17', 2, 'NBA 2K17 is an upcoming basketball simulation video game developed by Visual Concepts and published by 2K Sports.', '2016-09-20'),
(54, 'FIFA 17', 2, 'FIFA 17 is an upcoming association football video game.', '2016-09-27'),
(55, 'Psycho-Pass: Mandatory Happiness', 2, 'Psycho-Pass: Mandatory Happiness is a visual novel video game developed by 5pb.', '2016-09-16'),
(56, 'Final Fantasy XV', 2, 'Final Fantasy XV is an upcoming action role-playing video game being developed and published by Square Enix.', '2016-09-30'),
(57, 'Mafia III', 2, 'Mafia III is an upcoming action-adventure video game developed by Hangar 13 and published by 2K Games.', '2016-10-07'),
(58, 'WWE 2K17', 2, 'WWE 2K17 is an upcoming professional wrestling video game in development by Yuke\'s and Visual Concepts and will be published by 2K Sports.', '2016-10-11'),
(59, 'Skylanders Imaginators', 2, 'Skylanders: Imaginators is the sixth installment in the Skylanders series, developed by Toys for Bob and published by Activision.', '2016-10-16'),
(60, 'Battlefield 1', 2, 'Battlefield 1 is an upcoming first-person shooter video game developed by EA DICE and published by Electronic Arts.', '2016-10-21'),
(61, 'Dragon Ball Xenoverse 2', 2, 'Dragon Ball Xenoverse 2 is an upcoming fighting role-playing video game being developed by Dimps and published by Bandai Namco Entertainment based on the Dragon Ball franchise.', '2016-10-25'),
(62, 'The Last Guardian', 2, 'The Last Guardian, known in Japan as Hitokui no Owashi Trico, is an upcoming video game developed by genDESIGN and published by Sony Interactive Entertainment.', '2016-10-25'),
(63, 'World of Final Fantasy', 2, 'World of Final Fantasy is an upcoming role-playing video game being developed and published by Square Enix.', '2016-10-25'),
(64, 'Just Dance 2017', 2, 'Just Dance 2017 is a dance video game developed and published by Ubisoft.', '2016-10-25'),
(65, 'Titanfall 2', 2, 'Titanfall 2 is an upcoming first-person shooter video game, the sequel to Titanfall. It is being developed by Respawn Entertainment and will be published by Electronic Arts.', '2016-10-28'),
(66, 'Metroid Prime: Federation Force', 4, 'Metroid Prime: Federation Force is an upcoming cooperative first-person shooter being developed by Next Level Games.', '2016-08-19'),
(67, 'Dragon Quest VII: Fragments of the Forgotten Past', 4, 'Travel to the past to save the present in this classic Dragon Quest adventure that has been completely remade from the ground up for Nintendo 3DS.', '2016-09-16'),
(68, 'Shin Megami Tensei IV: Apocalypse', 4, 'Shin Megami Tensei IV: Apocalypse, known in Japan as Shin Megami Tensei IV: Final, is a post-apocalyptic role-playing video game developed and published by Atlus.', '2016-09-20'),
(69, 'Sonic Boom: Fire & Ice', 4, 'Sonic Boom: Fire & Ice is an upcoming action-adventure platform game developed by Sanzaru Games and published by Sega.', '2016-09-27'),
(70, 'Yo-Kai Watch 2: Bony Spirits', 4, 'Yo-Kai Watch 2 is an RPG sequel themed around catching and battling the ghost-like creatures known as Yokai. The game is developed and published by Level-5.', '2016-09-30'),
(71, 'Yo-Kai Watch 2: Fleshy Souls', 4, 'Yo-Kai Watch 2 is an RPG sequel themed around catching and battling the ghost-like creatures known as Yokai. The game is developed and published by Level-5.', '2016-09-30'),
(72, 'Mario Party Star Rush', 4, 'Mario Party: Star Rush is an upcoming party video game being developed and published by Nintendo.', '2016-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `pcgames`
--

CREATE TABLE `pcgames` (
  `gameID` int(11) NOT NULL,
  `image` varchar(512) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pcgames`
--

INSERT INTO `pcgames` (`gameID`, `image`, `name`, `description`, `releaseDate`, `link`) VALUES
(1, '1', 'Pokemon Sun', 'Pokemon Sun is an upcoming role-playing video games in the Pokémon series developed by Game Freak and published by The Pokémon Company for the Nintendo 3DS handheld game console.', '2016-11-18', '1'),
(2, '2', 'Pokemon Moon', 'Pokemon Moon is an upcoming role-playing video games in the Pokémon series developed by Game Freak and published by The Pokémon Company for the Nintendo 3DS handheld game console.', '2016-11-18', ''),
(3, '3', 'No Man\'s Sky', 'No Man\'s Sky is an upcoming action-adventure survival video game developed and published by the indie studio Hello Games.', '2016-08-09', ''),
(4, '4', 'aa', '4', '1111-11-11', '1'),
(5, '6', 'ak', '6', '1111-11-11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `systemID` int(11) NOT NULL,
  `system` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`systemID`, `system`) VALUES
(1, 'PC'),
(3, 'XboxOne'),
(2, 'Playstation4'),
(4, 'Nintendo3DS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`),
  ADD KEY `systemID` (`systemID`);

--
-- Indexes for table `pcgames`
--
ALTER TABLE `pcgames`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`systemID`),
  ADD UNIQUE KEY `system` (`system`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `pcgames`
--
ALTER TABLE `pcgames`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `systemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
