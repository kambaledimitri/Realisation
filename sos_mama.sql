-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 20 fév. 2021 à 09:47
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sos_mama`
--

-- --------------------------------------------------------

--
-- Structure de la table `about1`
--

CREATE TABLE `about1` (
  `id` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `texte` varchar(500) DEFAULT NULL,
  `para1` varchar(200) DEFAULT NULL,
  `para2` varchar(200) DEFAULT NULL,
  `para3` varchar(200) DEFAULT NULL,
  `para4` varchar(200) DEFAULT NULL,
  `para5` varchar(200) DEFAULT NULL,
  `para6` varchar(200) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `about1`
--

INSERT INTO `about1` (`id`, `titre`, `texte`, `para1`, `para2`, `para3`, `para4`, `para5`, `para6`, `photo`) VALUES
(1, 'SOS MAMAS Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'app-mobile-image-2.png'),
(2, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'app-mobile-image-2.png'),
(3, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'app-mobile-image-2.png');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_type` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `password`, `username`, `PHOTO`, `name`, `email`, `user_type`, `telephone`, `adresse`) VALUES
(1, 'qwert', 'webmaster', 'IMG.jpg', 'joel', 'mungumakilumbu@gmail.com', 'admin', '0998477384', 'goma; hombi av nhfur\r\njeue'),
(2, 'le fils ', 'scorpion', NULL, 'le fils ', 'katoro@gmail.com', 'super admin', '08434477384', 'goma; majengoav nhfur\r\njeue'),
(3, '1234', 'danny27', 'karmm.jpg', 'joel', 'jtjoel11@gmail.com', 'simple user', '66633662', 'goa dhehew'),
(4, '12345', 'danny27', 'team-member-2.png', 'daniel katoro', 'danielkatoro@gmail.com', 'admin', '0984883389222', 'Goma; RDC'),
(5, '0987654321', 'hdhdhdhd', 'logo-white.png', 'jtotooror', 'dansns@gmail.com', 'super admin', '08434477384', 'ggdggststds'),
(6, 'jered', 'jered', NULL, 'jered', 'jered@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `banner`
--

CREATE TABLE `banner` (
  `ID_BANNER` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXT` varchar(200) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner1`
--

CREATE TABLE `banner1` (
  `id_banner1` int(11) NOT NULL,
  `titre` varchar(300) DEFAULT NULL,
  `texte` varchar(500) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `date_post` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `banner1`
--

INSERT INTO `banner1` (`id_banner1`, `titre`, `texte`, `photo`, `date_post`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'phone.png', '2021-02-19'),
(2, 'Lorem ipsum dolor sit amet, consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'phone.png', '2021-02-19');

-- --------------------------------------------------------

--
-- Structure de la table `banner2`
--

CREATE TABLE `banner2` (
  `ID_BANNER2` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXTE` varchar(200) DEFAULT NULL,
  `NOMBRE` int(11) DEFAULT NULL,
  `NOM_BTN` varchar(20) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner3`
--

CREATE TABLE `banner3` (
  `ID_BANNER3` int(11) NOT NULL,
  `TITRE` varchar(30) DEFAULT NULL,
  `TEXTE` varchar(200) DEFAULT NULL,
  `PHOTO` varchar(30) DEFAULT NULL,
  `ICON` varchar(20) DEFAULT NULL,
  `DATE_POSTE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(30) DEFAULT NULL,
  `contenu` text,
  `date_poste` datetime DEFAULT NULL,
  `photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `box1`
--

CREATE TABLE `box1` (
  `ID` int(11) NOT NULL,
  `TITRE` varchar(50) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `ICON` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `box1`
--

INSERT INTO `box1` (`ID`, `TITRE`, `DESCRIPTION`, `ICON`) VALUES
(1, 'scorpion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ''),
(2, 'sos_mama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fa fa-users'),
(3, 'sos_mama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fa fa-home');

-- --------------------------------------------------------

--
-- Structure de la table `box2`
--

CREATE TABLE `box2` (
  `ID` int(11) NOT NULL,
  `TITRE` varchar(200) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `ICON` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `box2`
--

INSERT INTO `box2` (`ID`, `TITRE`, `DESCRIPTION`, `ICON`) VALUES
(5, 'sos_mama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fab fa-twitter'),
(4, 'sos_mama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fab fa-github'),
(3, 'sos_mama', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'fa fa-users');

-- --------------------------------------------------------

--
-- Structure de la table `counter`
--

CREATE TABLE `counter` (
  `id_count` int(11) NOT NULL,
  `icone` varchar(40) DEFAULT NULL,
  `nombre` int(11) DEFAULT NULL,
  `texte` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `counter`
--

INSERT INTO `counter` (`id_count`, `icone`, `nombre`, `texte`) VALUES
(1, 'fas fa-users', 45, 'client'),
(2, 'fas fa-cloud-download-alt', 78, 'Telechargements'),
(3, 'fas fa-smile', 50, 'satisfait'),
(4, 'fas fa-mug-hot', 33, 'client actifs');

-- --------------------------------------------------------

--
-- Structure de la table `faqsection`
--

CREATE TABLE `faqsection` (
  `id` int(11) NOT NULL,
  `question1` varchar(200) DEFAULT NULL,
  `reponse1` varchar(500) DEFAULT NULL,
  `question2` varchar(200) DEFAULT NULL,
  `reponse2` varchar(500) DEFAULT NULL,
  `question3` varchar(200) DEFAULT NULL,
  `reponse3` varchar(500) DEFAULT NULL,
  `question4` varchar(200) DEFAULT NULL,
  `reponse4` varchar(500) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faqsection`
--

INSERT INTO `faqsection` (`id`, `question1`, `reponse1`, `question2`, `reponse2`, `question3`, `reponse3`, `question4`, `reponse4`, `photo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1606568086665.jpg'),
(2, 'SOS MAMAS  ipsum dolor sit amet, consectetur adipisicing elit', 'SOS MAMAS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'SOS MAMAS Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedrehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'SOS MAMAS Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'about-us.png');

-- --------------------------------------------------------

--
-- Structure de la table `fonction1`
--

CREATE TABLE `fonction1` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `texte` varchar(700) NOT NULL,
  `para1` varchar(500) NOT NULL,
  `para2` varchar(500) NOT NULL,
  `para3` varchar(500) NOT NULL,
  `para4` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fonction1`
--

INSERT INTO `fonction1` (`id`, `titre`, `texte`, `para1`, `para2`, `para3`, `para4`, `photo`) VALUES
(1, 'comment ca marche ', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'sos_mama.png'),
(3, 'comment ca marche', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'chrisle fils.jpg'),
(4, 'Comment ca marche?', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'phone.png');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `date_poste` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id`, `photo`, `date_poste`) VALUES
(6, '2021_01_21_15_41_IMG_2528.JPG', '2021-02-18 09:20:34'),
(7, '02.jpg', '2021-02-18 09:20:42'),
(8, '03.jpg', '2021-02-18 09:20:50'),
(9, '04.jpg', '2021-02-18 09:20:58'),
(10, '05.jpg', '2021-02-18 09:21:04'),
(11, '06.jpg', '2021-02-18 09:21:21');

-- --------------------------------------------------------

--
-- Structure de la table `image_box`
--

CREATE TABLE `image_box` (
  `ID` int(11) NOT NULL,
  `IMAGE` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image_box`
--

INSERT INTO `image_box` (`ID`, `IMAGE`) VALUES
(5, 'phone.png');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `ID_MESSAGE` int(11) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `SUJET` varchar(100) DEFAULT NULL,
  `CONTENU_MESSAGE` varchar(300) DEFAULT NULL,
  `DATE_ENVOI` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `meta_tag`
--

CREATE TABLE `meta_tag` (
  `id` int(11) NOT NULL,
  `PHOTO` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `lien_twitter` varchar(50) NOT NULL,
  `lien_youtube` varchar(50) NOT NULL,
  `lien_linkedin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `meta_tag`
--

INSERT INTO `meta_tag` (`id`, `PHOTO`, `description`, `lien_twitter`, `lien_youtube`, `lien_linkedin`) VALUES
(1, 'logo-white.png', 'SOS-MAMAS est une plateforme mobile connectée à un bracelet électronique Permettant de surveillerles differents parametres vitaux des femmes enceintes.', 'www.twitter.com/sos-mamas', 'www.youtube.com/sos-mamas', 'www.linkedin.com/sos-mamas');

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `date_enre` date DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partenaire`
--

INSERT INTO `partenaire` (`id`, `nom`, `photo`, `date_enre`, `lien`) VALUES
(14, 'UPTODATE DEVELOPERS', 'clients-logo-001.png', '2021-02-17', 'https://www.uptodatedevelopers.com'),
(15, 'AGROAP', 'clients-logo-02.png', '2021-02-17', 'https://www.Agroapp.com'),
(16, 'OPTICAH', 'clients-logo-03.jpg', '2021-02-17', 'https://www.opticah.com'),
(17, 'ARRRR', 'clients-logo-06.png', '2021-02-17', 'https://www.AR.com'),
(18, 'SURVATAN', 'clients-logo-07.png', '2021-02-17', 'https://www.survatan.com'),
(19, 'MICHTEL', 'clients-logo-055.png', '2021-02-17', 'https://www.mitchel.com'),
(20, 'ISDR', 'partener-logo-05.png', '2021-02-17', 'https://www.ISDR.com');

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `titre` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `team`
--

INSERT INTO `team` (`id`, `nom`, `titre`, `description`, `photo`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'Pascovich kaluzi', 'Ambassador of Kalemi', 'Envoyer special de kalemie Ã  Goma', '123602542_355126612372130_6998', 'https://www.facebook.com/BlaisePascalKaluzi', 'https://twitter.com/KPascovich', 'https://www.instagram.com/pascovich_kaluzi/?hl=fr'),
(2, 'joel', 'UPTODATE DEV', 'updev', '2021_01_21_12_40_IMG_2457.JPG', 'https//', 'https/', 'https/');

-- --------------------------------------------------------

--
-- Structure de la table `url`
--

CREATE TABLE `url` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `url_ios` varchar(200) NOT NULL,
  `url_anro` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `url`
--

INSERT INTO `url` (`id`, `titre`, `url_ios`, `url_anro`) VALUES
(1, 'SOS MAMAS OUI OUI OUI OUI', 'http//googleplay.com', 'https//google.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about1`
--
ALTER TABLE `about1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Index pour la table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID_BANNER`);

--
-- Index pour la table `banner1`
--
ALTER TABLE `banner1`
  ADD PRIMARY KEY (`id_banner1`);

--
-- Index pour la table `banner2`
--
ALTER TABLE `banner2`
  ADD PRIMARY KEY (`ID_BANNER2`);

--
-- Index pour la table `banner3`
--
ALTER TABLE `banner3`
  ADD PRIMARY KEY (`ID_BANNER3`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `box1`
--
ALTER TABLE `box1`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `box2`
--
ALTER TABLE `box2`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id_count`);

--
-- Index pour la table `faqsection`
--
ALTER TABLE `faqsection`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction1`
--
ALTER TABLE `fonction1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `image_box`
--
ALTER TABLE `image_box`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID_MESSAGE`);

--
-- Index pour la table `meta_tag`
--
ALTER TABLE `meta_tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about1`
--
ALTER TABLE `about1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `banner`
--
ALTER TABLE `banner`
  MODIFY `ID_BANNER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner1`
--
ALTER TABLE `banner1`
  MODIFY `id_banner1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `banner2`
--
ALTER TABLE `banner2`
  MODIFY `ID_BANNER2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner3`
--
ALTER TABLE `banner3`
  MODIFY `ID_BANNER3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `box1`
--
ALTER TABLE `box1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `box2`
--
ALTER TABLE `box2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `counter`
--
ALTER TABLE `counter`
  MODIFY `id_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `faqsection`
--
ALTER TABLE `faqsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fonction1`
--
ALTER TABLE `fonction1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `image_box`
--
ALTER TABLE `image_box`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `ID_MESSAGE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `meta_tag`
--
ALTER TABLE `meta_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `url`
--
ALTER TABLE `url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
