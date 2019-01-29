-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2019 at 04:27 AM
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
  `term` text CHARACTER SET latin1 NOT NULL,
  `def` text CHARACTER SET latin1 NOT NULL,
  `translation` text CHARACTER SET latin1 NOT NULL,
  `explic` tinyint(1) NOT NULL,
  `example_fr_1` text CHARACTER SET latin1 NOT NULL,
  `example_en_1` text CHARACTER SET latin1 NOT NULL,
  `example_fr_2` text CHARACTER SET latin1 NOT NULL,
  `example_en_2` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `slang`
--

INSERT INTO `slang` (`term`, `def`, `translation`, `explic`, `example_fr_1`, `example_en_1`, `example_fr_2`, `example_en_2`) VALUES
('Mo&eacute', 'Contraction of \"moi\", used to refer to the speaker as the object of the sentence.', 'Me', 0, '\"Mo&eacute, chuis tranquille!\"', '\"I am tranquil!\" (with emphasis)', '\"Touche-mo&eacute pas!\"', '\"Don\'t touch me!\"'),
('Abreuvoir', 'Originates from the combination of \"abreuver\" and the suffix \"-oir\" in the 18th century.', 'Drinking fountain', 0, '\"Je vais boire de l\'eau &agrave l\'abreuvoir.\"', '\"I will go drink water at the drinking fountain.\"', '\"Amm&egravene-moi devant l\'abreuvoir.\"', '\"Bring me in front of the drinking fountain.\"'),
('Frencher', 'Borrowed and contracted from the English \"French kiss\".', 'French kiss', 0, '\"J\'ai french&eacute ma blonde.\"', '\"I french kissed my girlfriend.\"', '\"Frencher, c\'est d&eacutegoutant\"', '\"French kissing, that is disgusting.\"'),
('Niaiser', 'Originates from the combination of \"niais\" (dumb) and the verb suffix \"-er\".', 'Joking/Fooling around', 0, 'Arrête de niaiser!', '\"Stop fooling around!\"', '\"Est-ce que tu me niaises?\"', '\"Are you kidding me?\"'),
('Frette', 'Contraction of \"froid\".', 'Cold', 0, '\"Il fait frette ici.\"', '\"It is cold in here.\"', '\"Au Qu&eacutebec, il fait frette.\"', '\"In Quebec, it is cold.\"'),
('Chum', 'Borrowed from the English \"chum\".', 'Boyfriend', 0, '\"J\'ai vu mon chum hier.\"', '\"I saw my boyfriend yesterday.\"', '\"Malheureusement, je n\'aurais pas de chum pendant longtemps.\"', '\"Sadly, I won\'t have a boyfriend for a long time.\"'),
('Blonde', 'Unknown.', 'Girlfriend', 0, '\"Ta blonde est belle.\"', '\"Your girlfriend is beautiful.\"', '\"Il est sorti avec sa blonde la semaine pass&eacutee.\"', '\"He went out with his girlfriend last week.\"'),
('Tabarnak', 'Profanity which comes from \"tabernacle\", \r\na fixed, locked box in which, in some Christian churches, the Eucharist is \"reserved\" (stored).', 'F*ck', 1, '\"Tabarnak, j\'ai oublié mon sac &agrave dos.\"', '\"F*ck, I forgot my bag.\"', '\"Je m\'en tabarnak.\"', '\"I don\'t give a f*ck.\"'),
('Crisse', 'Originates from \"Christ\", a title for the saviour and redeemer who would bring salvation to the whole House of Israel.', 'F*ck', 1, '\"Criss, pourquoi c\'est si long?\"', '\"F*ck, why is it so long?\"', '\"Il est crissement stupide.\"', '\"He is f*cking stupid.\"');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
