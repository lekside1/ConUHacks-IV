-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2019 at 04:13 PM
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
-- Database: `dictionary`
--

-- --------------------------------------------------------

--
-- Table structure for table `slang`
--

CREATE TABLE `slang` (
  `term` text NOT NULL,
  `def` text NOT NULL,
  `translation` text NOT NULL,
  `explic` tinyint(1) NOT NULL,
  `example_fr_1` text NOT NULL,
  `example_en_1` text NOT NULL,
  `example_fr_2` text NOT NULL,
  `example_en_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slang`
--

INSERT INTO `slang` (`term`, `def`, `translation`, `explic`, `example_fr_1`, `example_en_1`, `example_fr_2`, `example_en_2`) VALUES
('Moé', 'Contraction of \"moi\", used to refer to the speaker as the object of the sentence.', 'Me', 0, '\"Moé, chuis tranquille!\"', '\"I am tranquil!\" (with emphasis)', '\"Touche-moé pas!\"', '\"Don\'t touch me!\"'),
('Abreuvoir', 'Originates from the combination of \"abreuver\" and the suffix \"-oir\" in the 18th century.', 'Drinking fountain', 0, '\"Je vais boire de l\'eau à l\'abreuvoir.\"', '\"I will go drink water at the drinking fountain.\"', '\"Ammène-moi devant l\'abreuvoir.\"', '\"Bring me in front of the drinking fountain.\"'),
('Frencher', 'Borrowed and contracted from the English \"French kiss\".', 'French kiss', 0, '\"J\'ai frenché ma blonde.\"', '\"I french kissed my girlfriend.\"', '\"Frencher, c\'est dégoutant\"', '\"French kissing, that is disgusting.\"'),
('Niaiser', 'Originates from the combination of \"niais\" (dumb) and the verb suffix \"-er\".', 'Joking/Fooling around', 0, '\"Arrête de niaiser!\"', '\"Stop fooling around!\"', '\"Est-ce que tu me niaises?\"', '\"Are you kidding me?\"'),
('Frette', 'Contraction of \"froid\".', 'Cold', 0, '\"Il fait frette ici.\"', '\"It is cold in here.\"', '\"Au Québec, il fait frette.\"', '\"In Quebec, it is cold.\"'),
('Chum', 'Borrowed from the English \"chum\".', 'Boyfriend', 0, '\"J\'ai vu mon chum hier.\"', '\"I saw my boyfriend yesterday.\"', '\"Malheureusement, je n\'aurais pas de chum pendant longtemps.\"', '\"Sadly, I won\'t have a boyfriend for a long time.\"'),
('Blonde', 'Unknown.', 'Girlfriend', 0, '\"Ta blonde est belle.\"', '\"Your girlfriend is beautiful.\"', '\"Il est sorti avec sa blonde la semaine passée.\"', '\"He went out with his girlfriend last week.\"'),
('Tabarnak', 'Profanity which comes from \"tabernacle\", \r\na fixed, locked box in which, in some Christian churches, the Eucharist is \"reserved\" (stored).', 'F*ck', 1, '\"Tabarnak, j\'ai oublié mon sac à dos.\"', '\"F*ck, I forgot my bag.\"', '\"Je m\'en tabarnak.\"', '\"I don\'t give a f*ck.\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
