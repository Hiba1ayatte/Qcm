-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 nov. 2023 à 08:30
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `menarahold`
--

-- --------------------------------------------------------

--
-- Structure de la table `comp_note`
--

CREATE TABLE `comp_note` (
  `id` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `lettre` varchar(2) NOT NULL,
  `contexte` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comp_note`
--

INSERT INTO `comp_note` (`id`, `id_u`, `lettre`, `contexte`) VALUES
(206, 11, 'E', 'Vous êtes dynamique'),
(207, 11, 'E', 'Vous aimez parler'),
(208, 11, 'E', 'Vous pensez à voix haute'),
(209, 11, 'E', 'Vous agissez, puis pensez'),
(210, 11, 'E', 'Vous aimez établir de nouveaux contacts'),
(211, 11, 'E', 'Vous préférez parler plutôt qu’écrire'),
(212, 11, 'E', 'Vous pouvez facilement être distrait'),
(213, 11, 'I', 'Vous aimez écouter'),
(214, 11, 'I', 'Vous préférez vous concentrer sur une seule chose à la fois'),
(215, 11, 'I', 'Vous êtes indépendant'),
(216, 11, 'S', 'Vous vivez dans l instant présent '),
(217, 11, 'S', 'Vous aimez approfondir vos compétences'),
(218, 11, 'S', 'Vous restez fidèle aux méthodes qui ont fait leurs preuves '),
(219, 11, 'S', 'Vous préférez les instructions étape par étape'),
(220, 11, 'N', 'Vous pensez aux implications futures'),
(221, 11, 'N', 'Vous suivez votre instinct'),
(222, 11, 'T', 'Vous apparaissez calme et réservé'),
(223, 11, 'T', 'Vous avez un sens aigu de la justice'),
(224, 11, 'T', 'Vous êtes critique (vous remarquez vite les failles et les défauts)'),
(225, 11, 'T', 'Vous adorez argumenter pour le plaisir'),
(226, 11, 'T', 'Vous êtes franc et direct '),
(227, 11, 'F', 'Vous prenez les choses à cœur'),
(228, 11, 'F', 'Vous évitez la discussion et le conflit'),
(229, 11, 'J', 'Vous êtes sérieux et conventionnel'),
(230, 11, 'J', 'Vous aimez terminer vos projets '),
(231, 11, 'P', 'Vous cherchez à comprendre'),
(232, 12, 'E', 'Vous aimez parler'),
(233, 12, 'E', 'Vous agissez, puis pensez'),
(234, 12, 'E', 'Vous aimez établir de nouveaux contacts'),
(235, 12, 'E', 'Vous préférez parler plutôt qu’écrire'),
(236, 12, 'E', 'Vous pouvez facilement être distrait'),
(237, 12, 'E', 'Vous préférez faire plusieurs choses à la fois'),
(238, 12, 'I', 'Vous êtes calme'),
(239, 12, 'I', 'Vous réfléchissez posément'),
(240, 12, 'I', 'Vous vous sentez bien quand vous êtes seul'),
(241, 12, 'I', 'Vous êtes indépendant'),
(242, 12, 'S', 'Vous vous attachez aux faits et aux détails '),
(243, 12, 'S', 'Vous vivez dans l instant présent '),
(244, 12, 'S', 'Vous aimez approfondir vos compétences'),
(245, 12, 'S', 'Vous êtes pratique'),
(246, 12, 'S', 'Vous êtes réaliste : vous voyez ce qui existe'),
(247, 12, 'N', 'Vous remarquez tout ce qui est nouveau et différent'),
(248, 12, 'N', 'Vous n’aimez pas la routine'),
(249, 12, 'N', 'Vous êtes attirés par les idées originales'),
(250, 12, 'T', 'Vous vous efforcez dêtre objectif dans vos décisions'),
(251, 12, 'T', 'Vous avez un sens aigu de la justice'),
(252, 12, 'T', 'Vous êtes critique (vous remarquez vite les failles et les défauts)'),
(253, 12, 'T', 'Vous adorez argumenter pour le plaisir'),
(254, 12, 'T', 'Vous êtes franc et direct '),
(255, 12, 'T', 'Vous aimez vous placer en observateur'),
(256, 12, 'F', 'Vous tentez de faire plaisir (prompt à faire des compliments)'),
(257, 12, 'F', 'Vous faîtes confiance à vos impressions'),
(258, 12, 'J', 'Vous aimez organiser et planifier'),
(259, 12, 'J', 'Vous n’aimez pas le stress de dernière minute'),
(260, 12, 'J', 'Vous cherchez à maîtriser '),
(261, 12, 'P', 'Vous êtes ludique et non-conventionnel'),
(262, 12, 'P', 'Vous n’avez ni heure ni délais'),
(263, 12, 'P', 'Vous aimez démarrer des projets'),
(264, 12, 'P', 'Vous vous amusez d abord et travaillez ensuite'),
(265, 12, 'P', 'Vous rechignez à vous engager'),
(266, 12, 'P', 'Vous aimez conserver votre liberté d action'),
(267, 12, 'P', 'Vous restez ouvert, aimez vivre des expériences, vous adapter'),
(268, 13, 'E', 'Vous êtes dynamique'),
(269, 13, 'I', 'Vous aimez écouter'),
(270, 13, 'I', 'Vous réfléchissez posément'),
(271, 13, 'I', 'Vous pensez, puis agissez'),
(272, 13, 'I', 'Vous aimez approfondir vos contacts'),
(273, 13, 'I', 'Vous êtes considéré comme plutôt secret et réservé '),
(274, 13, 'I', 'Vous préférez vous concentrer sur une seule chose à la fois'),
(275, 13, 'I', 'Vous êtes indépendant'),
(276, 13, 'S', 'Vous aimez les choses utiles'),
(277, 13, 'S', 'Vous vivez dans l instant présent '),
(278, 13, 'S', 'Vous aimez approfondir vos compétences'),
(279, 13, 'S', 'Vous restez fidèle aux méthodes qui ont fait leurs preuves '),
(280, 13, 'S', 'Vous êtes pratique'),
(281, 13, 'S', 'Vous aimez ce qui est concret, réel, directement observable'),
(282, 13, 'N', 'Vous vous intéressez aux idées'),
(283, 13, 'N', 'Vous suivez votre instinct'),
(284, 13, 'N', 'Vous cherchez à comprendre'),
(285, 13, 'N', 'Vous êtes imaginatifs : vous voyez les possibilités'),
(286, 13, 'T', 'Vous vous efforcez dêtre objectif dans vos décisions'),
(287, 13, 'T', 'Vous avez un sens aigu de la justice'),
(288, 13, 'T', 'Vous êtes critique (vous remarquez vite les failles et les défauts)'),
(289, 13, 'T', 'Vous adorez argumenter pour le plaisir'),
(290, 13, 'T', 'Vous êtes franc et direct '),
(291, 13, 'T', 'Vous aimez vous placer en observateur'),
(292, 13, 'F', 'Vous êtes sociable et amical'),
(293, 13, 'F', 'Vous prenez les choses à cœur'),
(294, 13, 'F', 'Vous évitez la discussion et le conflit'),
(295, 13, 'F', 'Vous êtes motivé par l’estime des autres'),
(296, 13, 'J', 'Vous aimez organiser et planifier'),
(297, 13, 'J', 'Vous êtes sérieux et conventionnel'),
(298, 13, 'J', 'Vous suivez votre calendrier et êtes parfaitement ponctuel'),
(299, 13, 'J', 'Vous aimez terminer vos projets '),
(300, 13, 'J', 'Vous ne discutez pas les règles'),
(301, 13, 'J', 'Vous cherchez à maîtriser '),
(302, 13, 'J', 'Vous êtes à l’aise au sein de structures bien définies'),
(303, 13, 'P', 'Vous vous amusez d abord et travaillez ensuite'),
(304, 13, 'P', 'Vous rechignez à vous engager');

-- --------------------------------------------------------

--
-- Structure de la table `comp_noteq1`
--

CREATE TABLE `comp_noteq1` (
  `id` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_q` int(11) DEFAULT NULL,
  `reponse_q` varchar(255) DEFAULT NULL,
  `reponse_u` varchar(255) DEFAULT NULL,
  `est_correcte` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comp_noteq1`
--

INSERT INTO `comp_noteq1` (`id`, `id_u`, `id_q`, `reponse_q`, `reponse_u`, `est_correcte`) VALUES
(2, 1, 1, 'C', 'A', 0),
(3, 1, 2, '64', '64', 1),
(4, 1, 3, '5', '11', 0),
(5, 1, 4, 'N', 'A', 0),
(6, 1, 5, '13', '12', 0),
(7, 1, 6, 'D', 'Marseille', 0),
(8, 1, 7, '15', '15', 1),
(9, 1, 8, '8', '8', 1),
(10, 1, 9, 'Q', 'I', 0),
(11, 1, 10, '8+10', '8+5', 0),
(12, 1, 11, '1', '5+2', 0),
(13, 1, 12, '2+5', '6+1', 0),
(14, 1, 13, '0+6', '3+4', 0),
(15, 1, 14, '7', '2+1', 0),
(16, 1, 15, '10', 'V', 0),
(17, 1, 16, '3', 'T', 0),
(18, 1, 17, '6', 'D', 0),
(19, 1, 18, 'B', 'D', 0),
(20, 1, 19, 'B', 'A', 0),
(21, 1, 20, 'A', 'D', 0),
(22, 1, 21, 'A', 'C', 0),
(23, 1, 22, 'D', 'B', 0),
(24, 1, 23, 'B', 'B', 1),
(25, 1, 24, 'D', 'C', 0),
(26, 1, 25, 'D', 'D', 1),
(27, 2, 1, 'C', 'A', 0),
(28, 2, 2, '64', '64', 1),
(29, 2, 3, '5', '11', 0),
(30, 2, 4, 'N', 'A', 0),
(31, 2, 5, '13', '12', 0),
(32, 2, 6, 'D', 'Marseille', 0),
(33, 2, 7, '15', '15', 1),
(34, 2, 8, '8', '8', 1),
(35, 2, 9, 'Q', 'I', 0),
(36, 2, 10, '8+10', '8+5', 0),
(37, 2, 11, '1', '5+2', 0),
(38, 2, 12, '2+5', '6+1', 0),
(39, 2, 13, '0+6', '3+4', 0),
(40, 2, 14, '7', '2+1', 0),
(41, 2, 15, '10', 'V', 0),
(42, 2, 16, '3', 'T', 0),
(43, 2, 17, '6', 'D', 0),
(44, 2, 18, 'B', 'B', 1),
(45, 2, 19, 'B', 'A', 0),
(46, 2, 20, 'A', 'D', 0),
(47, 2, 21, 'A', 'C', 0),
(48, 2, 22, 'D', 'B', 0),
(49, 2, 23, 'B', 'B', 1),
(50, 2, 24, 'D', 'C', 0),
(51, 2, 25, 'D', 'A', 0),
(52, 3, 1, 'C', '', 0),
(53, 3, 2, '64', '', 0),
(54, 3, 3, '5', '', 0),
(55, 3, 4, 'N', '', 0),
(56, 3, 5, '13', '', 0),
(57, 3, 6, 'D', '', 0),
(58, 3, 7, '15', '', 0),
(59, 3, 8, '8', '', 0),
(60, 3, 9, 'Q', '', 0),
(61, 3, 10, '8+10', '', 0),
(62, 3, 11, '1', '', 0),
(63, 3, 12, '2+5', '', 0),
(64, 3, 13, '0+6', '', 0),
(65, 3, 14, '7', '', 0),
(66, 3, 15, '10', '', 0),
(67, 3, 16, '3', '', 0),
(68, 3, 17, '6', '', 0),
(69, 3, 18, 'B', '', 0),
(70, 3, 19, 'B', '', 0),
(71, 3, 20, 'A', '', 0),
(72, 3, 21, 'A', '', 0),
(73, 3, 22, 'D', '', 0),
(74, 3, 23, 'B', '', 0),
(75, 3, 24, 'D', '', 0),
(76, 3, 25, 'D', '', 0),
(77, 3, 1, 'C', '', 0),
(78, 3, 2, '64', '', 0),
(79, 3, 3, '5', '', 0),
(80, 3, 4, 'N', '', 0),
(81, 3, 5, '13', '', 0),
(82, 3, 6, 'D', '', 0),
(83, 3, 7, '15', '', 0),
(84, 3, 8, '8', '', 0),
(85, 3, 9, 'Q', '', 0),
(86, 3, 10, '8+10', '', 0),
(87, 3, 11, '1', '', 0),
(88, 3, 12, '2+5', '', 0),
(89, 3, 13, '0+6', '', 0),
(90, 3, 14, '7', '', 0),
(91, 3, 15, '10', '', 0),
(92, 3, 16, '3', '', 0),
(93, 3, 17, '6', '', 0),
(94, 3, 18, 'B', '', 0),
(95, 3, 19, 'B', '', 0),
(96, 3, 20, 'A', '', 0),
(97, 3, 21, 'A', '', 0),
(98, 3, 22, 'D', '', 0),
(99, 3, 23, 'B', '', 0),
(100, 3, 24, 'D', '', 0),
(101, 3, 25, 'D', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `comp_noteq2`
--

CREATE TABLE `comp_noteq2` (
  `id` int(11) NOT NULL,
  `id_u` int(11) DEFAULT NULL,
  `id_q` int(11) DEFAULT NULL,
  `reponse_q` varchar(255) DEFAULT NULL,
  `reponse_u` varchar(255) DEFAULT NULL,
  `est_correcte` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comp_noteq2`
--

INSERT INTO `comp_noteq2` (`id`, `id_u`, `id_q`, `reponse_q`, `reponse_u`, `est_correcte`) VALUES
(1, 2, 1, 'C', 'A', 0),
(2, 2, 1, 'C', 'A', 0),
(3, 2, 2, '64', '64', 1),
(4, 2, 3, '5', '11', 0),
(5, 2, 4, 'N', 'N', 1),
(6, 2, 5, '13', '13', 1),
(7, 2, 6, 'D', 'D', 1),
(8, 2, 7, '15', '15', 1),
(9, 2, 8, '8', '8', 1),
(10, 2, 9, 'Q', 'I', 0),
(11, 2, 10, '8+10', '8+10', 1),
(12, 2, 11, '5+2', '4', 0),
(13, 2, 12, '3+4', '6+1', 0),
(14, 2, 13, '4+2', '4+5', 0),
(15, 2, 14, '2+3', '1', 0),
(16, 2, 15, '1', '8', 0),
(17, 2, 16, '3', '12', 0),
(18, 2, 17, 'C', '2', 0),
(19, 2, 18, 'B', 'B', 1),
(20, 2, 19, 'B', 'B', 1),
(21, 2, 20, 'A', 'A', 1),
(22, 2, 21, 'A', 'C', 0),
(23, 2, 22, 'B', 'B', 1),
(24, 2, 23, 'B', 'B', 1),
(25, 2, 24, 'D', 'C', 0),
(26, 2, 25, 'D', 'D', 1),
(27, 3, 1, 'C', 'A', 0),
(28, 3, 2, '64', '64', 1),
(29, 3, 3, '5', '11', 0),
(30, 3, 4, 'N', 'N', 1),
(31, 3, 5, '13', '13', 1),
(32, 3, 6, 'D', 'D', 1),
(33, 3, 7, '15', '15', 1),
(34, 3, 8, '8', '8', 1),
(35, 3, 9, 'Q', 'I', 0),
(36, 3, 10, '8+10', '8+10', 1),
(37, 3, 11, '5+2', '4', 0),
(38, 3, 12, '3+4', '6+1', 0),
(39, 3, 13, '4+2', '4+5', 0),
(40, 3, 14, '2+3', '1', 0),
(41, 3, 15, '1', 'A', 0),
(42, 3, 16, '3', '12', 0),
(43, 3, 17, 'C', 'B', 0),
(44, 3, 18, 'B', 'B', 1),
(45, 3, 19, 'B', 'B', 1),
(46, 3, 20, 'A', 'A', 1),
(47, 3, 21, 'A', 'C', 0),
(48, 3, 22, 'B', 'B', 1),
(49, 3, 23, 'B', 'B', 1),
(50, 3, 24, 'D', 'C', 0),
(51, 3, 25, 'D', 'D', 1);

-- --------------------------------------------------------

--
-- Structure de la table `condidat`
--

CREATE TABLE `condidat` (
  `id` int(11) NOT NULL,
  `cin` varchar(120) NOT NULL,
  `nom` varchar(512) NOT NULL,
  `prenom` varchar(512) NOT NULL,
  `email` varchar(380) NOT NULL,
  `direction` varchar(256) NOT NULL,
  `service` varchar(256) NOT NULL,
  `societe` varchar(256) NOT NULL,
  `fonction` varchar(256) NOT NULL,
  `test` varchar(256) NOT NULL,
  `temps_total` time NOT NULL,
  `temps_part1` time NOT NULL,
  `temps_part2` time NOT NULL,
  `temps_part3` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `condidat`
--

INSERT INTO `condidat` (`id`, `cin`, `nom`, `prenom`, `email`, `direction`, `service`, `societe`, `fonction`, `test`, `temps_total`, `temps_part1`, `temps_part2`, `temps_part3`) VALUES
(1, 'EE974500', 'AYATTE', 'Hiba', 'hiba.ayatte123@gmail.com', '', '', '', 'AGENT PROJETS CH', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(3, 'E56780', 'AYATTE HIBA', 'HIBA', 'hiba.ayatte123@gmail.com', '', '', '', 'PRESIDENT DIRECTEUR GENERAL', 'Test Logique 1', '17:00:00', '00:00:00', '00:00:00', '00:00:00'),
(6, 'RT4568', 'matich', 'HAFSSA', 'hiba.ayatte123@gmail.com', '', '', '', 'ANALYSTE MARKETING', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00'),
(10, 'E567802', 'HARBOUL', 'Ayman', 'Ayman@gmail.com', '', '', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(11, 'h456789', 'lhirch', 'Mohssine', 'ELHirch@gmail.com', '', '', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(12, 'Z233234', 'AMAL', 'HASSAN', 'AMAL@gmail.com', '', '', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(13, 'A12345', 'AYATTE', 'Yahya', 'hiba.ayatte123@gmail.com', '', '', '', 'CHARGE(E) SMI SITE', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00'),
(14, 'E567802', 'NOURI', 'Amine', 'Nouri@gmail.com', 'RESSOURCES HUMAINES', 'RESSOURCES HUMAINES TRANSVERSE', 'MENARA HOLDING', 'DIRECTEUR EXECUTIF CAPITAL HUMAIN', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(15, 'g345678', 'ATIKA', 'LACHGHAR', 'A_A@gmail.com', '', '', '', 'CHARGE(E) SMI SITE', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00'),
(16, 'E5678021', 'SAAD', 'SALAH', 'SAAD@gmail.ma', '', '', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(17, 'z23976', 'zakia', 'weqqase', 'Wzqasse@gmail.com', '', '', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00'),
(20, 'E5678023', 'QASSI', 'Hind', 'D@GMAILH.com', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'AAKAR DEVELOPPEMENT', 'ASSISTANT(E) COMMERCIALE', 'Test Personnalite', '13:00:00', '00:00:00', '00:00:00', '00:00:00'),
(21, 'B678123', 'Bibous', 'Mohssine', 'BIbous@gmail.com', '', '', '', 'INFORMATICIEN(NE)', 'Test Logique 2', '15:00:00', '00:00:00', '00:00:00', '00:00:00'),
(22, 'RB1234', 'Ghounibiz', 'Abdelhadi', 'Ghnibiz@gmail.com', '', '', '', 'RESPONSABLE ADMINSTRATION DU PERSONNEL', 'Test Logique 1', '14:00:00', '00:00:00', '00:00:00', '00:00:00'),
(23, 'C45678', 'BAKKA', 'Charaf', 'CHARAF@gmail.com', 'CONTRÔLE DE GESTION', 'CONTRÔLE DE GESTION', 'MENARA LOGISTIQUE', 'CHARGÉ(E) CONTROLE DE GESTION', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00'),
(25, 'y726253', 'elmansouri', 'yahya', 'mansouri@gmail.com', '', '', '', 'RESPONSABLE ADMINSTRATION DU PERSONNEL', 'Test Logique 1', '14:00:00', '00:00:00', '00:00:00', '00:00:00'),
(26, 'E567802', 'ZAHID', 'Mohamed', 'zahid@gmail.com', 'PRESIDENCE', 'PRESIDENCE', 'MENARA HOLDING', 'PRESIDENT DIRECTEUR GENERAL', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `direction`
--

CREATE TABLE `direction` (
  `DIRECTION` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `direction`
--

INSERT INTO `direction` (`DIRECTION`) VALUES
('COMMERCIALE'),
('RESSOURCES HUMAINES'),
('DIRECTION GENERALE'),
('FINANCIERE'),
('EXPLOITATION'),
('CONTRÔLE DE GESTION'),
('ACHAT'),
('PRESIDENCE'),
('COMMUNICATION'),
('MANAGEMENT DE PROJETS'),
('SYSTEME D\'INFORMATION'),
('INDUSTRIELLE'),
('DEVELOPPEMENT'),
('SUPPLY CHAIN'),
('EXPLOITATION TRANSPORT'),
('EXPLOITATION GRANULAT'),
('CONTROLE QUALITE PRODUIT & SUPPORT TECHNIQUE'),
('SMI CONTROLE QUALITE PRODUITS ET R&D'),
('CONTROLE INTERNE'),
('TRAVAUX'),
('MARKETING'),
('AUDIT INTERNE'),
('SYSTEME DE MANAGEMENT INTEGRE'),
('LABORATOIRE'),
('SUPPORT'),
('RESTAURANT');

-- --------------------------------------------------------

--
-- Structure de la table `emp`
--

CREATE TABLE `emp` (
  `MATRICULE` varchar(6) DEFAULT NULL,
  `civilite` varchar(4) DEFAULT NULL,
  `PRENOM` varchar(12) DEFAULT NULL,
  `NOM` varchar(21) DEFAULT NULL,
  `SOCIETE` varchar(20) DEFAULT NULL,
  `SITE` varchar(29) DEFAULT NULL,
  `DIRECTION` varchar(21) DEFAULT NULL,
  `SERVICE` varchar(30) DEFAULT NULL,
  `FONCTION` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emp`
--

INSERT INTO `emp` (`MATRICULE`, `civilite`, `PRENOM`, `NOM`, `SOCIETE`, `SITE`, `DIRECTION`, `SERVICE`, `FONCTION`) VALUES
('A00010', 'Mlle', 'Hind', 'QASSI', 'AAKAR DEVELOPPEMENT', 'AAKAR DEVELOPPEMENT MARRAKECH', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'ASSISTANT(E) COMMERCIALE'),
('D00002', 'Mme', 'Ilham', 'DIKRA', 'MENARA UNIVERSITE', 'MENARA UNIVERSITE MARRAKECH', 'RESSOURCES HUMAINES', 'FORMATION', 'CHARGE(E) DES AFFAIRES PEDAGOGIQUES'),
('D00010', 'Mme', 'Naela', 'MOURAD', 'MENARA UNIVERSITE', 'MENARA UNIVERSITE MARRAKECH', 'DIRECTION GENERALE', 'DIRECTION GENERALE', 'CHARGE(E) D\'AFFAIRE ADMINISTRATIF(VE)'),
('D00011', 'M', 'Marouane', 'MAZHARI', 'MENARA UNIVERSITE', 'MENARA UNIVERSITE MARRAKECH', 'RESSOURCES HUMAINES', 'SERVICES GENERAUX', 'AGENT POLYVALENT'),
('E00005', 'M', 'Mohamed', 'AIT LAASRI', 'MENARA LOGISTIQUE', 'ML ADMINISTRATION MARRAKECH', 'FINANCIERE', 'COMPTABILITÉ', 'COMPTABLE'),
('E00010', 'M', 'Yassine', 'MELLALOU', 'MENARA LOGISTIQUE', 'ML ATELIERS', 'EXPLOITATION', 'MAINTENANCE', 'RESPONSABLE ATELIER'),
('E00053', 'M', 'Mohamed', 'BAYA', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CHAUFFEUR LIVRAISON'),
('E00054', 'M', 'Hamid', 'AAGOUR', 'MENARA LOGISTIQUE', 'ML ATELIERS', 'EXPLOITATION', 'MAINTENANCE', 'CHAUFFEUR PORTE-CHAR'),
('E00055', 'M', 'El Hassan', 'ABDELLAOUI', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CHAUFFEUR LIVRAISON'),
('E00057', 'M', 'Brahim', 'ARCHICH', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CHAUFFEUR LIVRAISON'),
('E00066', 'M', 'Abdelhakim', 'CHOUQUIR', 'MENARA LOGISTIQUE', 'ML ADMINISTRATION MARRAKECH', 'DIRECTION GENERALE', 'DIRECTION GÉNÉRALE', 'DIRECTEUR D’EXPLOITATION'),
('E00068', 'Mme', 'Oumaima', 'RHARBAJE', 'MENARA LOGISTIQUE', 'ML ADMINISTRATION MARRAKECH', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'RESPONSABLE LOCATION PAR INTERIM'),
('E00069', 'M', 'Yassine', 'RHZIOUNATE', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'GRUTIER'),
('E00070', 'M', 'Ahmed', 'ER-RAMLY', 'MENARA LOGISTIQUE', 'ML ATELIERS', 'EXPLOITATION', 'MAINTENANCE', 'MECANICIEN ENGINS'),
('E00072', 'M', 'Khalid', 'EL BOUIHI', 'MENARA LOGISTIQUE', 'ML ADMINISTRATION MARRAKECH', 'RESSOURCES HUMAINES', 'SERVICES GENERAUX', 'COURSIER'),
('E00073', 'M', 'Said', 'HORANE', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'GRUTIER'),
('E00074', 'M', 'Mohammed', 'IFQUIRANE', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'GRUTIER'),
('E00075', 'M', 'Charaf', 'BAKKA', 'MENARA LOGISTIQUE', 'ML ADMINISTRATION MARRAKECH', 'CONTRÔLE DE GESTION', 'CONTRÔLE DE GESTION', 'CHARGÉ(E) CONTROLE DE GESTION'),
('E00076', 'M', 'Abdelaziz', 'CHAKIR', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'GRUTIER'),
('E00077', 'M', 'Omar', 'AIT BEN ABBOU', 'MENARA LOGISTIQUE', 'ML ATELIERS', 'EXPLOITATION', 'MAINTENANCE', 'TECHNICIEN'),
('E00078', 'M', 'Mohamed', 'EL BAQQALY', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CHAUFFEUR LIVRAISON'),
('E00079', 'M', 'El Arbi', 'AIT RAHOU', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CHAUFFEUR LIVRAISON'),
('E00080', 'M', 'Mohammed', 'LAKHLOUFI', 'MENARA LOGISTIQUE', 'ML ATELIERS', 'EXPLOITATION', 'MAINTENANCE', 'MAGASINIER'),
('E00081', 'M', 'Saleh', 'MANI', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CONDUCTEUR ELEVATEUR'),
('E00082', 'M', 'Rachid', 'ID OUAKRIM', 'MENARA LOGISTIQUE', 'ML CHANTIERS', 'EXPLOITATION', 'LOGISTIQUE', 'CONDUCTEUR ELEVATEUR'),
('G00002', 'Mme', 'Najoua', 'DRIBINE', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'FINANCIERE', 'FINANCIER', 'RESPONSABLE ADMINSTRATIF ET FINANCIER'),
('G00063', 'M', 'Mly mustapha', 'IBNOU EL KATIB ALAOUI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'LOGISTIQUE', 'CHARGE(E) DE MISSION'),
('G00064', 'Mme', 'Wissal', 'EL MOUAIHI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'ACHAT', 'ACHAT', 'CHARGE(E) ACHATS'),
('G00065', 'M', 'Aly', 'HORMA', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'DIRECTION GÉNÉRALE', 'DIRECTEUR GENERAL'),
('G00082', 'Mme', 'Amina', 'OUMARRAKCHI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'RESSOURCES HUMAINES', 'SERVICES GENERAUX', 'FEMME DE MENAGE'),
('G00083', 'Mme', 'Sofia', 'CHERKAOUI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'FINANCIERE', 'FINANCIER', 'CHARGE(E) DE FACTURATION'),
('G00086', 'M', 'Rachid', 'TIHRARI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'AGENT COMMISSAIRE DE PISTE'),
('G00087', 'M', 'El Mustapha', 'BOUCHFAR', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'AGENT COMMISSAIRE DE PISTE'),
('G00095', 'M', 'Abdelmoula', 'FAOUZI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'LOGISTIQUE', 'SUPERVISEUR GENERAL'),
('G00102', 'Mme', 'Khadija', 'BIJJA', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'ADMINISTRATION DES VENTES', 'ASSISTANT(E) ADMINISTRATIF/VE'),
('G00104', 'M', 'Youssef', 'JAAFARI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'LOGISTIQUE', 'AGENT COMMISSAIRE DE PISTE'),
('G00105', 'M', 'Radouane', 'ID BILLA', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'RESSOURCES HUMAINES', 'SERVICES GENERAUX', 'JARDINIER'),
('G00107', 'M', 'Abdeljalil', 'ALI OUALLA', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'LOGISTIQUE', 'CHARGE(E) DE MAINTENANCE'),
('G00108', 'M', 'Abdelillah', 'BOUR', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'MARKETING', 'AGENT COMMISSAIRE DE PISTE'),
('G00111', 'Mme', 'Aziza', 'SIDICHATI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'RESSOURCES HUMAINES', 'SERVICES GENERAUX', 'FEMME DE MENAGE'),
('G00112', 'M', 'Yassine', 'MOUMANE', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'MARKETING', 'RESPONSABLE COMMERCIAL'),
('G00113', 'Mlle', 'Ghita', 'GAFLAOUI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'FINANCIERE', 'COMPTABILITÉ', 'COMPTABLE'),
('G00115', 'M', 'Abdelmoumane', 'BEN KADDOUR', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'DIRECTION GENERALE', 'LOGISTIQUE', 'ASSISTANT(E) STOCK'),
('G00116', 'Mme', 'Doha', 'MOUATASSEM', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'FINANCIERE', 'TRESORERIE', 'CAISSIER(E)'),
('G00117', 'M', 'Adnane', 'KHERROU', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'MARKETING', 'ASSISTANT(E) COMMERCIALE'),
('G00118', 'M', 'Abdelhakim', 'BOUKHABBAZ', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'MARKETING', 'AGENT COMMISSAIRE DE PISTE'),
('G00119', 'Mme', 'Aicha', 'AMMARI', 'MARRAKECH GRAND PRIX', 'MGP MARRAKECH', 'COMMERCIALE', 'MARKETING', 'CHARGE(E) DE COORDINATION PROJETS'),
('H00001', 'M', 'Mohamed', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'PRESIDENCE', 'PRESIDENT DIRECTEUR GENERAL'),
('H00002', 'M', 'Islam', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'PRESIDENCE', 'VICE PRESIDENT'),
('H00003', 'Mme', 'Lamiai', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'PRESIDENCE', 'ADMINISTRATEUR'),
('H00016', 'M', 'Omar', 'DARKAOUI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'RESSOURCES HUMAINES', 'RELATIONS PUBLICS', 'DIRECTEUR RELATIONS PUBLIQUES'),
('H00019', 'M', 'Rahhal', 'FIKRY', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'FINANCIERE', 'SERVICES JURIDIQUES', 'MANAGER SERVICE JURIDIQUE'),
('H00029', 'M', 'Mohamed', 'AIT BENZAITER', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'DIRECTION GÉNÉRALE', 'DIRECTEUR GENERAL EXECUTIF GROUPE'),
('H00032', 'M', 'El habib', 'JALAL', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'COMMUNICATION', 'COMMUNICATION', 'DIRECTEUR DE COMMUNICATION'),
('H00046', 'M', 'Mourad', 'BENMARHA', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'MANAGEMENT DE PROJETS', 'MANAGEMENT DE PROJETS', 'DIRECTEUR MANAGEMENT DES PROJETS'),
('H00065', 'M', 'Mly Aatif', 'MOUMANE', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'SYSTEME D\'INFORMATION', 'SYSTÈME D\'INFORMATION', 'DIRECTEUR SYSTEMES D\'INFORMATIONS'),
('H00070', 'M', 'Mohamed', 'MNOUAR', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'COMMUNICATION', 'COMMUNICATION', 'RESPONSABLE DE LA CREATION CONCEPTION DES SUPPORTS DE LA COMMUNICATION'),
('H00071', 'M', 'Lhoussaine', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'FINANCIERE', 'FINANCIER', 'MANAGER FINANCIER'),
('H00093', 'M', 'Amine', 'NOURI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'RESSOURCES HUMAINES', 'RESSOURCES HUMAINES TRANSVERSE', 'DIRECTEUR EXECUTIF CAPITAL HUMAIN'),
('H00112', 'M', 'Taoufiq', 'FADILI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'FINANCIERE', 'FINANCIER', 'DIRECTEUR EXECUTIF FINANCE'),
('H00118', 'Mme', 'Ibtissam', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'PRESIDENCE', 'ADMINISTRATEUR'),
('H00120', 'Mme', 'Rachida', 'ZAHID', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'ACHAT', 'ACHAT', 'DIRECTEUR ACHAT & APPROVISIONNEMENT'),
('H00122', 'M', 'El mehdi', 'FASKA', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'ACHAT', 'ACHAT', 'MANAGER ACHATS'),
('H00123', 'M', 'Aissam', 'EL MOUDARI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'INDUSTRIELLE', 'INDUSTRIEL TRANSVERSAL', 'DIRECTEUR INDUSTRIEL'),
('H00124', 'M', 'Khalid', 'LAARABI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'FINANCIERE', 'SERVICES JURIDIQUES', 'JURISTE'),
('H00125', 'M', 'Aimad', 'AMZIL', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'DIRECTION GÉNÉRALE', 'SECRETAIRE GENERAL CHARGE DU SUIVI DE LA PERFORMANCE'),
('H00128', 'M', 'Yassine', 'MSAADI', 'MENARA HOLDING', 'SIEGE SOCIAL MARRAKECH', 'PRESIDENCE', 'SECRETARIAT', 'ASSISTANT(E) AUPRÈS DE LA PRÉSIDENCE');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `FONCTION` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`FONCTION`) VALUES
('ASSISTANT(E) COMMERCIALE'),
('CHARGE(E) DES AFFAIRES PEDAGOGIQUES'),
('BUSINESS DEVELOPMENT MANAGER'),
('COURSIER ADMINISTRATIF INTERNE'),
('COMPTABLE'),
('MECANICIEN ENGINS'),
('CHAUFFEUR LIVRAISON'),
('CHAUFFEUR PORTE-CHAR'),
('DIRECTEUR D’EXPLOITATION'),
('CHARGE(E) ADMINISTRATION DES VENTES'),
('GRUTIER'),
('COURSIER'),
('CHARGÉ(E) CONTROLE DE GESTION'),
('TECHNICIEN'),
('RESPONSABLE ADMINSTRATIF ET FINANCIER'),
('CHARGE(E) DE MISSION'),
('CHARGE(E) ACHATS'),
('DIRECTEUR GENERAL'),
('FEMME DE MENAGE'),
('CHARGE(E) DE FACTURATION'),
('AGENT COMMISSAIRE DE PISTE'),
('SUPERVISEUR GENERAL'),
('ASSISTANT(E) ADMINISTRATIF/VE'),
('JARDINIER'),
('CHARGE(E) DE MAINTENANCE'),
('RESPONSABLE COMMERCIAL'),
('ASSISTANT(E) STOCK'),
('CAISSIER(E)'),
('CHARGE(E) DE COORDINATION PROJETS'),
('PRESIDENT DIRECTEUR GENERAL'),
('VICE PRESIDENT'),
('ADMINISTRATEUR'),
('DIRECTEUR RELATIONS PUBLIQUES'),
('MANAGER SERVICE JURIDIQUE'),
('DIRECTEUR GENERAL EXECUTIF GROUPE'),
('DIRECTEUR DE COMMUNICATION'),
('DIRECTEUR MANAGEMENT DES PROJETS'),
('DIRECTEUR SYSTEMES D\'INFORMATIONS'),
('RESPONSABLE DE LA CREATION CONCEPTION DES SUPPORTS DE LA COMMUNICATION'),
('RESPONSABLE SERVICE COMPTABILITE'),
('DIRECTEUR EXECUTIF CAPITAL HUMAIN'),
('DIRECTEUR EXECUTIF FINANCE'),
('OFFICE MANAGER P.D.G'),
('RESPONSABLE TRÉSORERIE'),
('DIRECTEUR ACHAT & APPROVISIONNEMENT'),
('MANAGER ACHATS'),
('DIRECTEUR INDUSTRIEL'),
('JURISTE'),
('CONSEILLER AUPRES DE LA DIRECTION GENERALE EXECUTIVE GROUPE'),
('ASSISTANT(E) AUPRÈS DE LA PRÉSIDENCE'),
('AIDE COMPTABLE'),
('DIRECTEUR DEVELOPPEMENT'),
('AGENT SUIVI ET COORDINATION'),
('CONDUCTEUR ELEVATEUR'),
('OUVRIER CHARGE/DECHARGE'),
('ELECTRICIEN'),
('GARDIEN'),
('AIDE MAGASINIER'),
('CHAUFFEUR CARRIERE'),
('OUVRIER PRESSE'),
('OUVRIER PARC'),
('CHAUFFEUR CANTER'),
('SOUDEUR'),
('OUVRIER PALETTES'),
('NURSE'),
('OUVRIER POUTRELLE'),
('OUVRIER LABORATOIRE'),
('GRAISSEUR'),
('CONDUCTEUR BOBCAT'),
('AGENT ORDONNANCEMENT ET LIVRAISON PF'),
('ASSISTANT(E) SERVICE VENTE'),
('OUVRIER CARRIERE'),
('OUVRIER POLYVALENT'),
('CHAUFFEUR CHARGEUSE'),
('AGENT DE REPORTING'),
('AIDE MECANICIEN'),
('AIDE CHAUFFEUR'),
('OPERATEUR PRESSE'),
('OPERATEUR MACHINE'),
('OUVRIER POMPE A GASOIL'),
('OUVRIER BPE'),
('CHAUFFEUR PELLE'),
('AGENT BUREAU DE VENTE'),
('CHAUDRONNIER'),
('MAGASINIER'),
('ELECTRICIEN INDUSTRIEL'),
('AGENT CONTROLE SYSTEME LIVRAISON'),
('MECANICIEN'),
('PNEUMATICIEN'),
('OUVRIER MACHINE COUTURE'),
('CHAUFFEUR'),
('OUVRIER DE NETTOYAGE'),
('CONDUCTEUR ENGINS'),
('PEINTRE'),
('CHAUFFEUR MALAXEUR'),
('AGENT REPARATION DES MOULES'),
('OUVRIER LAVAGE'),
('ASSISTANT(E) ADMINISTRATION DES VENTES'),
('MACON'),
('CUISINIER(E)'),
('AGENT POLYVALENT'),
('OUVRIER'),
('CHEF ATELIERS'),
('CHARGE DE MISSION AUPRES DE LA DIRECTION GENERALE DELEGUEE'),
('RESPONSABLE GRAND COMPTE CLIENT'),
('RESPONSABLE ACHATS'),
('RESPONSABLE MAGASIN CENTRAL'),
('MANAGER RISQUE CLIENT & CREDIT MANAGEMENT'),
('RESPONSABLE PRODUCTION SITE'),
('MANAGER PRODUCTION'),
('RESPONSABLE UNITE PRESSE'),
('OPERATEUR CENTRALE A BETON'),
('AGENT DE MAINTENANCE POUTRELLE'),
('RESPONSABLE ASSISTANCE TECHNIQUE RATTACHE A LA DIRECTION COMMERCIALE'),
('CHEF CONDUCTEURS ELEVATEURS'),
('CHEF D\'EQUIPE PRESSE'),
('OUVRIER NETTOYAGE DES MOULES'),
('RESPONSABLE CENTRALE A BETON'),
('RESPONSABLE SUIVI PROJETS'),
('TECHNICO COMMERCIAL'),
('CHEF ATELIER'),
('OUVRIER PONT'),
('MANAGER BUSINESS DEVELOPEMENT & RESPONSABLE F2V'),
('CHARGE DE MISSION COMMERCIALE'),
('AGENT SUIVI ET ORDONNANCEMENT BPE'),
('OUVRIER MACHINE VIBRO'),
('RESPONSABLE APPROVISIONNEMENT MATIERES PREMIERES & GESTION DE STOCK'),
('OPERATEUR CENTRALE A BETON POUTRELLE'),
('OUVRIER DE TENSION'),
('CHARGE(E) CONTROLE QUALITE PRODUITS'),
('CHEF DE PARC PRODUITS FINIS'),
('MANAGER SUPPLY CHAIN'),
('OUVRIER MACHINE FILEUSE'),
('MANAGER CONTROLE DE GESTION PAR INTERIM'),
('AGENT DE MAINTENANCE CENTRALE A BETON'),
('CHEF D\'EQUIPE POUTRELLE'),
('AGENT DE MAINTENANCE PRESSE'),
('AGENT DE CONTROLE DE COMPTAGE PHYSIQUE'),
('TOLIER'),
('MANAGER MAINTENANCE'),
('RESPONSABLE UNITE POUTRELLE PAR INTERIM'),
('MANAGER SECURITE ET ADMINISTRATION DES SYSTEMES'),
('RESPONSABLE ANIMATION RESEAU DE DISTRIBUTION REGIONAL'),
('AGENT ANIMATION HSE'),
('CHAUFFEUR POMPE A BETON'),
('RESPONSABLE TRANSPORT'),
('AGENT CONTROLE FACTURES'),
('RESPONSABLE ACHAT-SITE'),
('DIRECTEUR CAPITAL HUMAIN'),
('RESPONSABLE ORDONNANCEMENT REGIONAL BPE'),
('RESPONSABLE CONTRÔLE SITE'),
('RESPONSABLE FORCE DE VENTES'),
('RESPONSABLE CONTROLE INTERNE'),
('RESPONSABLE ADMINSTRATION DES VENTES'),
('EMPLOYE CAFETERIA'),
('RESPONSABLE COMMERCIAL & PRESCRIPTION REGIONAL MARQUE REVETIUM'),
('DIRECTEUR REGIONAL'),
('CAISSIER(E) PRINCIPALE'),
('CHEF D\'EQUIPE PARC PF'),
('RESPONSABLE BUREAU D\'ETUDES SITE'),
('RESPONSABLE SERVICE TECHNIQUE AVANT & APRES VENTE'),
('AGENT DE MAINTENANCE MECANIQUE INDUSTRIELLE'),
('AGENT DE CONTROLE DU PONT BASCULE'),
('ELECTRICIEN AUTO'),
('RESPONSABLE PRODUCTION SITE PAR INTERIM'),
('RESPONSABLE MAGASIN'),
('MANAGER SITE'),
('RESPONSABLE UNITE POUTRELLE'),
('COURSIER INDUSTRIEL'),
('RESPONSABLE ADMINSTRATION DU PERSONNEL'),
('AGENT SUIVI PARC BPE'),
('RESPONSABLE LIGNE BPE'),
('RESPONSABLE SMI'),
('RESPONSABLE CONTROLE QUALITE PRODUITS & SUPPORT TECHNIQUE SITE'),
('CHARGE(E) BUREAU D\'ETUDES'),
('RESPONSABLE SERVICES GENERAUX'),
('ASSISTANT(E) RH'),
('CHARGE(E) DE LA COMPTABILITE DES IMMOBILISATIONS'),
('CHEF JARDINIERS'),
('CHARGE(E) APPROVISONNEMENT MATIERES PREMIERES & GESTION DE STOCK'),
('CHEF PEINTRES'),
('RESPONSABLE MAINTENANCE SITE'),
('CHARGE(E) COMPTABILITE GENERALE'),
('RESPONSABLE PERFORMANCE GASOIL'),
('CHARGE (E) DE TRESORERIE'),
('MANAGER SMI ET R&D'),
('AGENT DE RECOUVREMENT'),
('CHARGE(E) CONTRÔLE QUALITE MATIERES PREMIERES'),
('RESPONSABLE SI'),
('RESPONSABLE PARC PRODUITS FINIS'),
('RESPONSABLE ELECTRICITE ET HYDRAULIQUE'),
('CHARGE(E) DE RECOUVREMENT'),
('CHARGE(E) COMMERCIAL & PRESCRIPTION MARQUE REVETIUM'),
('RESPONSABLE ADV TRANSVERSAL'),
('MANAGER PROJETS INDUSTRIELS'),
('CHARGE(E) DE PERFORMANCE INDUSTRIELLE'),
('CHEF CHAUDRONNIERS'),
('MANAGER PRECONTENTIEUX & CONTENTIEUX'),
('CHARGE(E) MARKETING ET COMMUNICATION'),
('RESPONSABLE ORDONNANCEMENT REGIONAL PF'),
('CHARGE(E) ORDONNANCEMENT ET LIVRAISON'),
('INFIRMIER(E)'),
('OUVRIER MAINTENANCE ATELIER'),
('CHARGE(E) DE LA COMPTABILITE FOURNISSEUR'),
('INGENIEUR PERFORMANCE INDUSTRIELLE'),
('INFORMATICIEN(NE)'),
('CHARGE(E) CONTRÔLE QUALITE LIGNE DE PRODUCTION'),
('CHARGE(E) CONTROLE SYSTEME LIVRAISON'),
('MONITEUR'),
('RESPONSABLE SIRH'),
('CHARGE(E) DE GESTION PARC BPE'),
('TECHNICIEN B.E.T'),
('COURSIER ADMINISTRATIF EXTERNE'),
('RESPONSABLE CONTROLE QUALITE PRODUITS & SUPPORT TECHNIQUE REGIONAL'),
('CHARGE(E) FORMATION & ONBOARDING'),
('CHARGE(E) ADMINISTRATION DU PERSONNEL'),
('AGENT DE DEBARDAGE'),
('AGENT D’ADMINISTRATION DU PERSONNEL'),
('RESPONSABLE PMO RH & RSE'),
('DIRECTEUR COMMERCIAL'),
('ASSISTANT(E) DIRECTEUR GENERAL EXECUTIF'),
('RESPONSABLE SMI-SITE'),
('RESPONSABLE ORDONNANCEMENT SITE'),
('ANALYSTE MARKETING'),
('CONTROLEUR DE SITE'),
('CHEF MECANICIENS ENGINS'),
('AGENT APPROVISIONNEMENT MATIERES PREMIERES & GSETION DE STOCK'),
('ARCHITECTE RESPONSABLE DEPARTEMENT CONCEPTION & DEVELOPPEMENT ARCHITECTURAL'),
('CHARGE(E) EXPLOITATION SITE'),
('CHARGE DE L\'ADMINISTRATION DES VENTES'),
('COMMUNITY MANAGER'),
('CHARGE(E) SMI SITE'),
('ASSISTANT(E) MANAGER RECOUVREMENT & CREDIT MANAGEMENT'),
('RESPONSABLE CONTROLE QUALITE PRODUITS & SUPPORT TECHNIQUE'),
('MANAGER FINANCIER'),
('ASSISTANT(E) MANAGER PRECONTENTEIUX & CONTENTIEUX'),
('ASSISTANT(E) RESPONSABLE ASSURANCE'),
('DESSINATEUR/ICE INDUSTRIEL'),
('ASSISTANT(E) DIRECTEUR COMMERCIAL'),
('AGENT DE GESTION GASOIL'),
('INFOGRAPHISTE'),
('AGENT SERVICES GENERAUX'),
('AGENT DE CONTROLE DE GESTION'),
('ASSISTANT(E) CONTROLE INTERNE'),
('ARCHITECTE CHEF DE PROJETS'),
('PLOMBIER'),
('CONTROLEUR QUALITE LIGNE DE PRODUCTION'),
('CHARGE(E) SERVICES GENERAUX'),
('Chargé(e) Projets Achats'),
('CHARGE(E) EXPLOITATION SI'),
('CHARGE(E) SUPPLY CHAIN REVETIUM'),
('DIRECTEUR GENERAL EXECUTIF'),
('ASSISTANT(E) DIRECTEUR INDUSTRIEL'),
('AGENT D\'ACCUEIL'),
('AGENT D\'ASSURANCE'),
('MANAGER LEAN MANUFACTURING'),
('ASSISTANTE R&D'),
('RESPONSABLE PROJETS SMI'),
('MANAGER COMMERCIAL & PRESCRIPTION MARQUE REVETIUM'),
('ASSISTANT(E) ACHATS'),
('CONTROLEUR PERFORMANCE SUPPLY CHAIN'),
('AGENT PROJETS CH'),
('AGENT SERVICE TECHNIQUE AVANT & APRES VENTES'),
('DIRECTEUR MARKETING'),
('DIRECTEUR AUDIT INTERNE'),
('CHARGE(E) ADMINISTRATIVE & RELATIONS PUBLIQUES REGION'),
('CHEF MECANICIENS'),
('RESPONSABLE PROJET SI'),
('AGENT D\'ORDONNANCEMENT'),
('RESPONSABLE CONTROLE DE GESTION'),
('DIRECTEUR D\'EXPLOITATION ACTIVITE TRANSPORT'),
('ASSISTANT(E) SERVICE LOGISTIQUE'),
('AGENT CONTROLE CARBURANT'),
('CHARGE(E) ORDONNANCEMENT'),
('RESPONSABLE SUIVI PARC CAMION'),
('CHEF DE STATION'),
('CHEF SOUDEURS'),
('CHEF DE POSTE'),
('RESPONSABLE PRODUCTION REGIONAL'),
('RESPONSABLE APPROVISIONNEMENT PDR'),
('RESPONSABLE RECOUVREMENT ET CREDIT MANAGEMENT'),
('ATTACHE ADMINISTRATIF'),
('CHARGE(E) ORDONNANCEMENT SITE'),
('CHAUFFEUR TRANSPORT DU PERSONNEL'),
('RESPONSABLE PARC'),
('CHARGE(E) D\'ARCHIVE'),
('VULCANISATEUR'),
('DIRECTEUR GENERAL ADJOINT'),
('RESPONSABLE SITE'),
('RESPONSABLE CONTROLE DE GESTION & PERFORMANCE SOCIALE'),
('RESPONSABLE ASSURANCE PAR INTERIM'),
('ASSISTANT(E) SERVICE JURIDIQUE'),
('MANAGER COMMERCIAL'),
('RESPONSABLE ELECTRICITE INDUSTRIELLE'),
('CHARGE(E) ELECTRICITE INDUSTRIELLE'),
('DIRECTEUR D\'EXPLOITATION ACTIVITE CARRIERES'),
('TRESORIER'),
('RESPONSABLE CONTRÔLE QUALITE PRODUITS'),
('AGENT DE CONTROLE QUALITE PRODUIT'),
('RESPONSABLE BUREAU DE METHODES'),
('ACHETEUSE'),
('CHARGE(E) ADMINISTRATION DES CREDITS'),
('CHARGE(E) ELECTRICITE ET INSTRUMENTATION'),
('RESPONSABLE DE L\'ADMINISTRATION DU PARC INFORMATIQUE'),
('ASSISTANT(E) DE DIRECTION'),
('RESPONSABLE PROJETS INFRASTRUCTURE IT &TELECOM'),
('RESPONSABLE SERVICE MEDICAL'),
('RESPONSABLE PROSPECTION & ÉTUDES'),
('RESPONSABLE ATELIER'),
('AGENT DE CARRIÈRE'),
('CHARGE(E) EXPLOITATION DE CARRIERE'),
('CHARGE DU SYSTEME D\'INFORMATION RH'),
('CHARGE(E) PROJETS & PERFORMANCE INDUSTRIELLE'),
('CHARGE(E) DE MONTAGE DES INSTALLATIONS INDUSTRIELLES'),
('CHAUFFEUR NIVELEUSE'),
('CHARGÉ DE RECRUTEMENT & DÉVELOPPEMENT RH'),
('MANAGER REGIONAL'),
('CHARGE (E) DE RECOUVREMENT'),
('CHARGE(E) SUPPORT TECHNIQUE & ADMINISTRATIF'),
('AGENT DE CONTROLE LIVRAISON'),
('SOUS CHEF PATISSIER'),
('CHEF DE PARTIE'),
('COMMIS PATISSIER'),
('AGENT ADMINISTRATIF(VE)'),
('CHEF STEWARD'),
('STEWARD'),
('LIVREUR'),
('RESPONSABLE RESTAURANT'),
('CHEF DE CUISINE'),
('SERVEUR (SE)'),
('BARMAN'),
('CUISINIER(E) T'),
('BOULANGER'),
('CHEF PATISSIER'),
('MANAGER DÉVELOPPEMENT INDUSTRIEL'),
('CONDUCTEUR DES TRAVAUX'),
('RESPONSABLE ETUDES, CONCEPTION ET AMENAGEMENT'),
('RESPONSABLE PROJETS ET METHODES'),
('ECONOMISTE DE CONSTRUCTION'),
('TECHNICIEN(NE) BATIMENT'),
('CHARGE(E) DE COORDINATION DES TRAVAUX'),
('CHEF D\'EQUIPE TRAVAUX'),
('FERRAILLEUR'),
('OUVRIER TRAVAUX'),
('POSEUR'),
('PLATRIER'),
('BOISEUR'),
('TECHNICIEN(NE) METREUR'),
('DIRECTEUR GENERAL DELEGUE'),
('CHEF COMPTABLE');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `matricule` varchar(126) NOT NULL,
  `password` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `matricule`, `password`) VALUES
(1, 'A00005', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `mbti`
--

CREATE TABLE `mbti` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mbti`
--

INSERT INTO `mbti` (`id`, `Name`, `resume`, `description`, `categorie`, `photo`) VALUES
(1, 'ENFJ', '[value-3]', '[value-4]', '[value-5]', 'ENFJ.png'),
(2, 'ENFP', '[value-3]', '[value-4]', '[value-5]', 'ENFP.png'),
(3, 'ENTJ', '[value-3]', '[value-4]', '[value-5]', 'ENTJ.png'),
(4, 'ENTP', '[value-3]', '[value-4]', '[value-5]', 'ENTP.png'),
(5, 'ESFJ', '[value-3]', '[value-4]', '[value-5]', 'ESFJ.png'),
(6, 'ESFP', '[value-3]', '[value-4]', '[value-5]', 'ESFP.png'),
(7, 'ESTJ', '[value-3]', '[value-4]', '[value-5]', 'ESTJ.png'),
(8, 'ESTP', '[value-3]', '[value-4]', '[value-5]', 'ESTP.png'),
(9, 'INFJ', '[value-3]', '[value-4]', '[value-5]', 'INFJ.png'),
(10, 'INFP', '[value-3]', '[value-4]', '[value-5]', 'INFP.png'),
(11, 'INTJ', '[value-3]', '[value-4]', '[value-5]', 'INTJ.png'),
(12, 'INTP', '[value-3]', '[value-4]', '[value-5]', 'INTP.png'),
(13, 'ISFJ', '[value-3]', '[value-4]', '[value-5]', 'ISFJ.png'),
(14, 'ISFP', '[value-3]', '[value-4]', '[value-5]', 'ISFP.png'),
(15, 'ISTJ', '[value-3]', '[value-4]', '[value-5]', 'ISTJ.png'),
(16, 'ISTP', '[value-3]', '[value-4]', '[value-5]', 'ISTP.png');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `cin` varchar(128) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `personalite` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id`, `cin`, `nom`, `prenom`, `personalite`) VALUES
(1, 'EE974500', 'AYATTE', 'HIBA', 'ISFP'),
(3, 'RT4568', 'matich', 'HAFSSA', 'ENTJ'),
(4, 'A12345', 'AYATTE', 'Yahya', 'ISFJ'),
(5, 'E567802', 'NOURI', 'Amine', 'ISFP'),
(6, 'g345678', 'ATIKA', 'LACHGHAR', 'ENTP'),
(7, 'E5678021', 'SAAD', 'SALAH', 'ESTJ'),
(8, 'z23976', 'zakia', 'weqqase', 'ENTP'),
(11, 'E5678023', 'QASSI', 'Hind', 'ESTJ'),
(12, 'C45678', 'BAKKA', 'Charaf', 'ESTP'),
(13, 'E567802', 'ZAHID', 'Mohamed', 'ISTJ');

-- --------------------------------------------------------

--
-- Structure de la table `noteq1`
--

CREATE TABLE `noteq1` (
  `id` int(11) NOT NULL,
  `cin` varchar(110) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noteq1`
--

INSERT INTO `noteq1` (`id`, `cin`, `nom`, `prenom`, `score`) VALUES
(1, 'S87654', 'ZAHID', 'Mohamed', -60),
(2, 'RB1234', 'Ghounibiz', 'Abdelhadi', -60),
(3, 'y726253', 'elmansouri', 'yahya', 0);

-- --------------------------------------------------------

--
-- Structure de la table `noteq1_1`
--

CREATE TABLE `noteq1_1` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `cin` varchar(128) NOT NULL,
  `score` int(11) NOT NULL,
  `q1` varchar(120) NOT NULL,
  `q2` varchar(120) NOT NULL,
  `q3` varchar(128) NOT NULL,
  `q4` varchar(128) NOT NULL,
  `q5` varchar(120) NOT NULL,
  `q6` varchar(120) NOT NULL,
  `q7` varchar(120) NOT NULL,
  `q8` varchar(120) NOT NULL,
  `q9` varchar(120) NOT NULL,
  `q10` varchar(120) NOT NULL,
  `q11` varchar(120) NOT NULL,
  `q12` varchar(120) NOT NULL,
  `q13` varchar(120) NOT NULL,
  `q14` varchar(120) NOT NULL,
  `q15` varchar(120) NOT NULL,
  `q16` varchar(120) NOT NULL,
  `q17` varchar(120) NOT NULL,
  `q18` varchar(120) NOT NULL,
  `q19` varchar(120) NOT NULL,
  `q20` varchar(120) NOT NULL,
  `q21` varchar(120) NOT NULL,
  `q22` varchar(120) NOT NULL,
  `q23` varchar(120) NOT NULL,
  `q24` varchar(120) NOT NULL,
  `q25` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noteq1_1`
--

INSERT INTO `noteq1_1` (`id`, `nom`, `prenom`, `cin`, `score`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`) VALUES
(1, 'ZAHID', 'Mohamed', 'S87654', -60, 'A', '64', '11', 'A', '12', 'Marseille', '15', '8', 'I', '8+5', '5+2', '6+1', '3+4', '2+1', 'V', 'T', 'D', 'D', 'A', 'D', 'C', 'B', 'B', 'C', 'D');

-- --------------------------------------------------------

--
-- Structure de la table `noteq2`
--

CREATE TABLE `noteq2` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `cin` varchar(128) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noteq2`
--

INSERT INTO `noteq2` (`id`, `nom`, `prenom`, `cin`, `score`) VALUES
(2, 'NOURI', 'Amine', 'Q23456\r\n', 4),
(3, 'Bibous', 'Mohssine', 'B678123', 4);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `SERVICE` varchar(41) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`SERVICE`) VALUES
('ADMINISTRATION DES VENTES'),
('FORMATION'),
('DIRECTION GENERALE'),
('SERVICES GENERAUX'),
('COMPTABILITÉ'),
('MAINTENANCE'),
('LOGISTIQUE'),
('DIRECTION GÉNÉRALE'),
('CONTRÔLE DE GESTION'),
('FINANCIER'),
('ACHAT'),
('MARKETING'),
('TRESORERIE'),
('PRESIDENCE'),
('RELATIONS PUBLICS'),
('SERVICES JURIDIQUES'),
('COMMUNICATION'),
('MANAGEMENT DE PROJETS'),
('SYSTÈME D\'INFORMATION'),
('RESSOURCES HUMAINES TRANSVERSE'),
('SECRETARIAT'),
('INDUSTRIEL TRANSVERSAL'),
('DEVELOPPEMENT'),
('TECHNIQUE'),
('PLANIFICATION ET CONTROLE REALISATION'),
('TRANSPORT PRODUITS PREFABRIQUES'),
('MAGASIN'),
('SUPPLY CHAIN TRANSVERSE'),
('EXPLOITATION'),
('PRODUCTION'),
('ORDONNANCEMENT PRODUITS PREFABRIQUES'),
('CONTROLE QUALITE PRODUIT'),
('TRANSPORT BPE'),
('LIVRAISON'),
('CONTROLE OPERATIONNEL'),
('GESTION DE STOCK'),
('TRAVAUX'),
('FORCE DE VENTE'),
('ADMINISTRATION CREDITS'),
('COMMERCIAL TRANSVERSAL'),
('ORDONNANCEMENT BPE'),
('MEDICAL'),
('CONTROLE INTERNE'),
('COMMERCIAL & PRESCRIPTION MARQUE REVETIUM'),
('CAISSE'),
('BUREAU D\'ÉTUDE'),
('SERVICE AVANT ET APRES VENTE'),
('ADMINISTRATION PERSONNEL'),
('SYSTEME DE MANAGEMENT INTEGRE'),
('BUREAU DE VENTE'),
('TRSORERIE'),
('RECHERCHES ET DEVELOPPEMENT'),
('RECOUVREMENT & CREDIT MANAGEMENT'),
('JURIDIQUES'),
('SYSTEME D\'INFORMATION RH'),
('DEVELOPPEMENT RH'),
('CONCEPTION & DEVELOPPEMENT ARCHITECTURAL'),
('FINANCE TRANSVERSAL'),
('ASSURANCE'),
('STANDARD'),
('AUDIT INTERNE'),
('PRESCRIPTION'),
('ORDONNANCEMENT'),
('ARCHIVE'),
('COMPTABILITE'),
('JURIDIQUE'),
('TRESORIE'),
('ACCUEIL'),
('PROJET & METHODE'),
('PATISSERIE'),
('ADMINISTRATION'),
('RESTAURANT'),
('CUISINE'),
('BOULANGERIE');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `matricule` varchar(128) NOT NULL,
  `fonction` varchar(256) NOT NULL,
  `test` varchar(120) NOT NULL,
  `temps_total` time NOT NULL,
  `temps_part1` time NOT NULL,
  `temps_part2` time NOT NULL,
  `temps_part3` time NOT NULL,
  `email` varchar(126) NOT NULL,
  `message` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id`, `nom`, `matricule`, `fonction`, `test`, `temps_total`, `temps_part1`, `temps_part2`, `temps_part3`, `email`, `message`, `created_at`) VALUES
(1, 'Session Hiba', '', 'AGENT PROJETS CH', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=1', '2023-11-07 14:55:15'),
(2, 'Session test 1', 'H00001', 'PRESIDENT DIRECTEUR GENERAL', 'Test Logique 1', '00:00:00', '02:00:00', '05:00:00', '10:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour voudrez vous passer un test Logique sur le lien suivant <br>Lien du test : Qcm/condidatQ1.php?session_id=2', '2023-11-07 15:06:11'),
(3, 'Session Test 2', 'H00093', 'DIRECTEUR EXECUTIF CAPITAL HUMAIN', 'Test Logique 2', '00:00:00', '02:00:00', '05:00:00', '07:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour voudrez vous passer un test Logique sur le lien suivant<br>Lien du test : Qcm/condidatQ2.php?session_id=3', '2023-11-07 15:08:11'),
(4, 'Session test', '', 'ANALYSTE MARKETING', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=4', '2023-11-15 16:09:40'),
(5, 'session d\'insertion', '', 'CHARGE(E) BUREAU D\'ETUDES', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=5', '2023-11-16 08:00:17'),
(6, 'Hiba', '', 'CHARGE(E) SMI SITE', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=6', '2023-11-16 10:31:51'),
(7, 'Mama', 'H00093', 'DIRECTEUR EXECUTIF CAPITAL HUMAIN', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=7', '2023-11-16 13:45:21'),
(8, 'AAKAR', 'A00010', 'ASSISTANT(E) COMMERCIALE', 'Test Personnalite', '13:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=8', '2023-11-16 14:59:50'),
(9, 'Session Informaticien', '', 'INFORMATICIEN(NE)', 'Test Logique 2', '00:00:00', '02:00:00', '05:00:00', '08:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour voudrez vous passer un test Logique sur le lien suivant<br>Lien du test : Qcm/condidatQ2.php?session_id=9', '2023-11-17 07:26:55'),
(10, 'Session Ghounibiz', '', 'RESPONSABLE ADMINSTRATION DU PERSONNEL', 'Test Logique 1', '00:00:00', '02:00:00', '05:00:00', '07:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour voudrez vous passer un test Logique sur le lien suivant <br>Lien du test : Qcm/condidatQ1.php?session_id=10', '2023-11-17 07:35:56'),
(11, 'Session Hiba', 'E00075', 'CHARGÉ(E) CONTROLE DE GESTION', 'Test Personnalite', '12:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=11', '2023-11-17 07:56:19'),
(12, 'session zahid perso', 'H00001', 'PRESIDENT DIRECTEUR GENERAL', 'Test Personnalite', '10:00:00', '00:00:00', '00:00:00', '00:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant <br>Lien du test : Qcm/condidat.php?session_id=12', '2023-11-23 17:14:27');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `SOCIETE` varchar(47) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`SOCIETE`) VALUES
('AAKAR DEVELOPPEMENT'),
('MENARA UNIVERSITE'),
('MENARA LOGISTIQUE'),
('MARRAKECH GRAND PRIX'),
('MENARA HOLDING'),
('STE IMMOBILIERE DU TENSIFT'),
('MENARA PREFA INTERIM'),
('CARRIERES ET TRANSPORT MENARA INTERIM'),
('MENARA LOGISTIQUE INTERIM'),
('STE IMMOBILIERE DU TENSIFT INTERIM'),
('MENARA TRANSPORT ET LOGISTIQUE INTERIM'),
('TRAVAUX DE CONSTRUCTION GENERALE MENARA INTERIM'),
('MENARA PREFA'),
('MENARA TRANSPORT ET LOGISTIQUE'),
('CARRIERES ET TRANSPORT MENARA'),
('TAMAN'),
('TRAVAUX DE CONSTRUCTION GENERALE MENARA'),
('FONDATION ZAHID'),
('Z 5 HOLDING');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test` varchar(121) NOT NULL,
  `lien` varchar(121) NOT NULL,
  `message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `test`, `lien`, `message`) VALUES
(1, 'Test Personnalite', 'Qcm/condidat.php', 'Bonjour, voudrez vous passer un test de personnalite sur le lien suivant '),
(2, 'Test Logique 1', 'Qcm/condidatQ1.php', 'Bonjour voudrez vous passer un test Logique sur le lien suivant '),
(3, 'Test Logique 2', 'Qcm/condidatQ2.php', 'Bonjour voudrez vous passer un test Logique sur le lien suivant');

-- --------------------------------------------------------

--
-- Structure de la table `test1`
--

CREATE TABLE `test1` (
  `id` int(2) NOT NULL,
  `Question` varchar(689) DEFAULT NULL,
  `Valeur` varchar(41) DEFAULT NULL,
  `Choix` varchar(336) DEFAULT NULL,
  `Reponse1` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test1`
--

INSERT INTO `test1` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(1, 'Déterminer la lettre marquante :', '9(N) - 26(V) - 13(T) - 5(?)', NULL, 'C'),
(2, 'Complétez la série :', '1 - 4 -16 - ? - 256', NULL, '64'),
(3, 'Complétez ce tableau numérique', '5 -- 2 -- 10 -- 6 -- 4 -- 7 -- 3 --9 -- ?', NULL, '5'),
(4, 'Complétez la série :', 'B - F - J - ?', NULL, 'N'),
(5, 'Complétez la série :', '2 - 3 - 5 - 8 - ? - 21', NULL, '13'),
(6, 'Complétez la série :', 'Pau - Nice - Paris - ?', 'A-Bordeaux B-Lille C-Marseille D-Rennes', 'D'),
(7, 'Quel nombre manque', '3 -- 7 -- 11 -- ? -- 19', NULL, '15'),
(8, 'Trouvez le chiffre manquant', 'chat (4) Singe(5) cheval(6) éléphant(?)', NULL, '8'),
(9, 'Complétez la série :', 'D - 1 - F - 3 - J - 0 - K - 5 - ?', NULL, 'Q'),
(10, 'Déterminer les deux nombres manquants :', '2 - 19 - 4 - 16 - 6 - 13 - ? - ? - 10 - 7', NULL, '8+10'),
(11, 'Complétez la série :', 'question11.png', NULL, '1'),
(12, 'Complétez la série :', 'question12.png', NULL, '2+5'),
(13, 'Complétez la série :', 'question13.png', NULL, '0+6'),
(14, 'Complétez la série :', 'question14.png', NULL, '7'),
(15, 'Complétez la série :', 'question15.png', NULL, '10'),
(16, 'Complétez la série :', 'question16.png', NULL, '3'),
(17, 'Complétez la série :', 'question17.png', NULL, '6'),
(18, 'Thomas vit à Poitiers. Antoine, un de ses amis de longue date, vit aux États-Unis mais, ce dernier se rend souvent à Paris pour affaireet essaye, à chaque fois,de revoir Thomas . Mais, n\'ayant pas suffisamment de temps pour se rendre à Poitiers, Antoine donne toujoursrendez-vous à Thomas à Tours. Paris est à 240 km de Tours et à 340 km de Poitiers . Thomas, qui neprend jamais l\'autoroute, roule à une vitesse moyenne de 50 km/h. Antoine, lui, prend l\'autoroute; mais, compte tenu de la circulation , il roule à une vitesse moyenne de 100 km/h, seulement.S\'ils partent tous les deux à la même heure,lequel des deux arrive le premier à Tours et combien de temps doit-il attendre son ami ?', NULL, 'A - Antoine et 18min B - Thomas et 24min C - Antoine et 36min D - Thomas et 12min', 'B'),
(19, 'Marie veut repeindre les murs de sa chambre et demande à sa soeur Julie de l’aider. La pièce (rectangulaire) fait 3 m de large et 5 m de long. Le plafond est à une hauteur de 2,50 m. Avant d’aller acheter leur peinture, Marie et Julie doivent déterminer la surface qu’elles auront à peindre. Bricoleuses amateurs, elles décident de prévoir large en considérant que les murs sont entiers, c’est-à-dire sans fenêtre et sans porte. Mais, Marie et Julie ne sont pas très à l’aise avec l’arithmétique : elles ont besoin de votre aide pour le calcul de la surface. Selon vous, quelle surface devront-elles peindre ?', NULL, 'A-35² B-40 m² C-37,5 m² D-42,5 m²', 'B'),
(20, 'Un chef d’entreprise, dont la société emploie 100 cadres et900 ouvriers, veut savoir combien il doit recruter de nouveaux em-ployés dans le cadre de la réduction du temps de travail. Son person-nel travaillait auparavant 39 heures par semaine ; il va désormaistravailler 35 heures. Combien faut-il embaucher de cadres etd’ouvriers pour compenser intégralement les heures non faites ?', NULL, 'A-11 cadres et 103 ouvrier B-18 cadres et 124 ouvriers C-10 cadres et 134 ouvriers D-22 cadres et 120 ouvriers', 'A'),
(21, 'Vous vous rendez dîner chez un ami et c’est à vous que revient laconception du dessert. Vous connaissez une merveilleuse recette degâteau au chocolat. Pour 6 personnes, les ingrédients sont : 250 g debeurre, 200 g de sucre, 300 g de chocolat, 6 œufs et 3 cuillerées de fa-rine. Mais, votre ami reçoit 4 personnes seulement. Quelles sont,dans ce cas, les doses requises pour chaque ingrédient de la recette ?', NULL, 'A-170 g de beurre, 130 g de sucre, 200 g de chocolat, 4 œufs, 2 cuillerées de farine B-200 g de beurre, 150 g de sucre, 240 g de chocolat, 4 œufs,1 cuillerée de farine C-230 g de beurre, 100 g de sucre, 180 g de chocolat, 5 œufs, 2 cuillerées de farine D-190 g de beurre, 110 g de sucre, 250 g de chocolat, 3 œufs, 1 cuillerée de farine', 'A'),
(22, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question22.png', NULL, 'D'),
(23, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question23.png', NULL, 'B'),
(24, 'Choisissez, parmi les 4 éléments A, B, C, D, E et F celui qui doit terminer la série.', 'question24.png', NULL, 'D'),
(25, 'Choisissez, parmi les 4 éléments A, B, C celui qui doit terminer la série.', 'question25.png', NULL, 'D');

-- --------------------------------------------------------

--
-- Structure de la table `test1p1`
--

CREATE TABLE `test1p1` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(39) DEFAULT NULL,
  `Valeur` varchar(41) DEFAULT NULL,
  `Choix` varchar(39) DEFAULT NULL,
  `Reponse1` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test1p1`
--

INSERT INTO `test1p1` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(1, 'Déterminer la lettre marquante :', '9(N) - 26(V) - 13(T) - 5(?)', NULL, 'C'),
(2, 'Complétez la série :', '1 - 4 -16 - ? - 256', NULL, '64'),
(3, 'Complétez ce tableau numérique', '5 -- 2 -- 10 -- 6 -- 4 -- 7 -- 3 --9 -- ?', NULL, '5'),
(4, 'Complétez la série :', 'B - F - J - ?', NULL, 'N'),
(5, 'Complétez la série :', '2 - 3 - 5 - 8 - ? - 21', NULL, '13'),
(6, 'Complétez la série :', 'Pau - Nice - Paris - ?', 'A-Bordeaux B-Lille C-Marseille D-Rennes', 'D'),
(7, 'Quel nombre manque', '3 -- 7 -- 11 -- ? -- 19', NULL, '15'),
(8, 'Trouvez le chiffre manquant', 'chat (4) Singe(5) cheval(6) éléphant(?)', NULL, '8'),
(9, 'Complétez la série :', 'D - 1 - F - 3 - J - 0 - K - 5 - ?', NULL, 'Q'),
(10, 'Déterminer les deux nombres manquants :', '2 - 19 - 4 - 16 - 6 - 13 - ? - ? - 10 - 7', NULL, '8+10');

-- --------------------------------------------------------

--
-- Structure de la table `test1p2`
--

CREATE TABLE `test1p2` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(20) DEFAULT NULL,
  `Valeur` varchar(14) DEFAULT NULL,
  `Choix` varchar(10) DEFAULT NULL,
  `Reponse1` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test1p2`
--

INSERT INTO `test1p2` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(11, 'Complétez la série :', 'question11.png', NULL, '1'),
(12, 'Complétez la série :', 'question12.png', NULL, '2+5'),
(13, 'Complétez la série :', 'question13.png', NULL, '0+6'),
(14, 'Complétez la série :', 'question14.png', NULL, '7'),
(15, 'Complétez la série :', 'question15.png', NULL, '10'),
(16, 'Complétez la série :', 'question16.png', NULL, '3'),
(17, 'Complétez la série :', 'question17.png', NULL, '6');

-- --------------------------------------------------------

--
-- Structure de la table `test1p3`
--

CREATE TABLE `test1p3` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(689) DEFAULT NULL,
  `Valeur` varchar(14) DEFAULT NULL,
  `Choix` varchar(336) DEFAULT NULL,
  `Reponse1` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test1p3`
--

INSERT INTO `test1p3` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(18, 'Thomas vit à Poitiers. Antoine, un de ses amis de longue date, vit aux États-Unis mais, ce dernier se rend souvent à Paris pour affaireet essaye, à chaque fois,de revoir Thomas . Mais, n\'ayant pas suffisamment de temps pour se rendre à Poitiers, Antoine donne toujoursrendez-vous à Thomas à Tours. Paris est à 240 km de Tours et à 340 km de Poitiers . Thomas, qui neprend jamais l\'autoroute, roule à une vitesse moyenne de 50 km/h. Antoine, lui, prend l\'autoroute; mais, compte tenu de la circulation , il roule à une vitesse moyenne de 100 km/h, seulement.S\'ils partent tous les deux à la même heure,lequel des deux arrive le premier à Tours et combien de temps doit-il attendre son ami ?', NULL, 'A - Antoine et 18min B - Thomas et 24min C - Antoine et 36min D - Thomas et 12min', 'B'),
(19, 'Marie veut repeindre les murs de sa chambre et demande à sa soeur Julie de l’aider. La pièce (rectangulaire) fait 3 m de large et 5 m de long. Le plafond est à une hauteur de 2,50 m. Avant d’aller acheter leur peinture, Marie et Julie doivent déterminer la surface qu’elles auront à peindre. Bricoleuses amateurs, elles décident de prévoir large en considérant que les murs sont entiers, c’est-à-dire sans fenêtre et sans porte. Mais, Marie et Julie ne sont pas très à l’aise avec l’arithmétique : elles ont besoin de votre aide pour le calcul de la surface. Selon vous, quelle surface devront-elles peindre ?', NULL, 'A-35² B-40 m² C-37,5 m² D-42,5 m²', 'B'),
(20, 'Un chef d’entreprise, dont la société emploie 100 cadres et900 ouvriers, veut savoir combien il doit recruter de nouveaux em-ployés dans le cadre de la réduction du temps de travail. Son person-nel travaillait auparavant 39 heures par semaine ; il va désormaistravailler 35 heures. Combien faut-il embaucher de cadres etd’ouvriers pour compenser intégralement les heures non faites ?', NULL, 'A-11 cadres et 103 ouvrier B-18 cadres et 124 ouvriers C-10 cadres et 134 ouvriers D-22 cadres et 120 ouvriers', 'A'),
(21, 'Vous vous rendez dîner chez un ami et c’est à vous que revient laconception du dessert. Vous connaissez une merveilleuse recette degâteau au chocolat. Pour 6 personnes, les ingrédients sont : 250 g debeurre, 200 g de sucre, 300 g de chocolat, 6 œufs et 3 cuillerées de fa-rine. Mais, votre ami reçoit 4 personnes seulement. Quelles sont,dans ce cas, les doses requises pour chaque ingrédient de la recette ?', NULL, 'A-170 g de beurre, 130 g de sucre, 200 g de chocolat, 4 œufs, 2 cuillerées de farine B-200 g de beurre, 150 g de sucre, 240 g de chocolat, 4 œufs,1 cuillerée de farine C-230 g de beurre, 100 g de sucre, 180 g de chocolat, 5 œufs, 2 cuillerées de farine D-190 g de beurre, 110 g de sucre, 250 g de chocolat, 3 œufs, 1 cuillerée de farine', 'A'),
(22, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question22.png', NULL, 'D'),
(23, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question23.png', NULL, 'B'),
(24, 'Choisissez, parmi les 4 éléments A, B, C, D, E et F celui qui doit terminer la série.', 'question24.png', NULL, 'D'),
(25, 'Choisissez, parmi les 4 éléments A, B, C celui qui doit terminer la série.', 'question25.png', NULL, 'D');

-- --------------------------------------------------------

--
-- Structure de la table `test2`
--

CREATE TABLE `test2` (
  `id` int(2) NOT NULL,
  `Question` varchar(689) DEFAULT NULL,
  `Valeur` varchar(41) DEFAULT NULL,
  `Choix` varchar(336) DEFAULT NULL,
  `Reponse1` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test2`
--

INSERT INTO `test2` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(1, 'Déterminer la lettre marquante :', '9(N) - 26(V) - 13(T) - 5(?)', NULL, 'C'),
(2, 'complétez la série :', '1 - 4 -16 - ? - 256', NULL, '64'),
(3, 'complétez ce tableau numérique', '5 -- 2 -- 10 -- 6 -- 4 -- 7 -- 3 --9 -- ?', NULL, '5'),
(4, 'complétez la série :', 'B - F - J - ?', NULL, 'N'),
(5, 'complétez la série :', '2 - 3 - 5 - 8 - ? - 21', NULL, '13'),
(6, 'complétez la série :', 'Pau - Nice - Paris - ?', 'A-Bordeaux B-Lille C-Marseille D-Rennes', 'D'),
(7, 'Quel nombre manque', '3 -- 7 -- 11 -- ? -- 19', NULL, '15'),
(8, 'Trouvez le chiffre manquant', 'chat (4) Singe(5) cheval(6) éléphant(?)', NULL, '8'),
(9, 'complétez la série :', 'D - 1 - F - 3 - J - 0 - K - 5 - ?', NULL, 'Q'),
(10, 'Déterminer les deux nombres manquants :', '2 - 19 - 4 - 16 - 6 - 13 - ? - ? - 10 - 7', NULL, '8+10'),
(11, 'complétez la série :', 'question_11.png', NULL, '5+2'),
(12, 'complétez la série :', 'question_12.png', NULL, '3+4'),
(13, 'complétez la série :', 'question_13.png', NULL, '4+2'),
(14, 'complétez la série :', 'question_14.png', NULL, '2+3'),
(15, 'complétez la série :', 'question_15.png', NULL, '1'),
(16, 'complétez la série :', 'question_16.png', NULL, '3'),
(17, 'complétez la série :', 'question17.png', NULL, 'C'),
(18, 'Thomas vit à Poitiers. Antoine, un de ses amis de longue date, vit aux États-Unis mais, ce dernier se rend souvent à Paris pour affaireet essaye, à chaque fois,de revoir Thomas . Mais, n\'ayant pas suffisamment de temps pour se rendre à Poitiers, Antoine donne toujoursrendez-vous à Thomas à Tours. Paris est à 240 km de Tours et à 340 km de Poitiers . Thomas, qui neprend jamais l\'autoroute, roule à une vitesse moyenne de 50 km/h. Antoine, lui, prend l\'autoroute; mais, compte tenu de la circulation , il roule à une vitesse moyenne de 100 km/h, seulement.S\'ils partent tous les deux à la même heure,lequel des deux arrive le premier à Tours et combien de temps doit-il attendre son ami ?', NULL, 'A - Antoine et 18min B - Thomas et 24min C - Antoine et 36min D - Thomas et 12min', 'B'),
(19, 'Marie veut repeindre les murs de sa chambre et demande à sa soeur Julie de l’aider. La pièce (rectangulaire) fait 3 m de large et 5 m de long. Le plafond est à une hauteur de 2,50 m. Avant d’aller acheter leur peinture, Marie et Julie doivent déterminer la surface qu’elles auront à peindre. Bricoleuses amateurs, elles décident de prévoir large en considérant que les murs sont entiers, c’est-à-dire sans fenêtre et sans porte. Mais, Marie et Julie ne sont pas très à l’aise avec l’arithmétique : elles ont besoin de votre aide pour le calcul de la surface. Selon vous, quelle surface devront-elles peindre ?', NULL, 'A-35² B-40 m² C-37,5 m² D-42,5 m²', 'B'),
(20, 'Un chef d’entreprise, dont la société emploie 100 cadres et900 ouvriers, veut savoir combien il doit recruter de nouveaux em-ployés dans le cadre de la réduction du temps de travail. Son person-nel travaillait auparavant 39 heures par semaine ; il va désormaistravailler 35 heures. Combien faut-il embaucher de cadres etd’ouvriers pour compenser intégralement les heures non faites ?', NULL, 'A-11 cadres et 103 ouvrier B-18 cadres et 124 ouvriers C-10 cadres et 134 ouvriers D-22 cadres et 120 ouvriers', 'A'),
(21, 'Vous vous rendez dîner chez un ami et c’est à vous que revient laconception du dessert. Vous connaissez une merveilleuse recette degâteau au chocolat. Pour 6 personnes, les ingrédients sont : 250 g debeurre, 200 g de sucre, 300 g de chocolat, 6 œufs et 3 cuillerées de fa-rine. Mais, votre ami reçoit 4 personnes seulement. Quelles sont,dans ce cas, les doses requises pour chaque ingrédient de la recette ?', NULL, 'A-170 g de beurre, 130 g de sucre, 200 g de chocolat, 4 œufs, 2 cuillerées de farine B-200 g de beurre, 150 g de sucre, 240 g de chocolat, 4 œufs,1 cuillerée de farine C-230 g de beurre, 100 g de sucre, 180 g de chocolat, 5 œufs, 2 cuillerées de farine D-190 g de beurre, 110 g de sucre, 250 g de chocolat, 3 œufs, 1 cuillerée de farine', 'A'),
(22, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question_22.png', NULL, 'B'),
(23, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question_23.png', NULL, 'B'),
(24, 'Choisissez, parmi les 4 éléments A, B, C, D, E et F celui qui doit terminer la série.', 'question_24.png', NULL, 'D'),
(25, 'Choisissez, parmi les 4 éléments A, B, C celui qui doit terminer la série.', 'question_25.png', NULL, 'D');

-- --------------------------------------------------------

--
-- Structure de la table `test2p1`
--

CREATE TABLE `test2p1` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(39) DEFAULT NULL,
  `Valeur` varchar(41) DEFAULT NULL,
  `Choix` varchar(39) DEFAULT NULL,
  `Reponse1` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test2p1`
--

INSERT INTO `test2p1` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(1, 'Déterminer la lettre marquante :', '9(N) - 26(V) - 13(T) - 5(?)', NULL, 'C'),
(2, 'complétez la série :', '1 - 4 -16 - ? - 256', NULL, '64'),
(3, 'complétez ce tableau numérique', '5 -- 2 -- 10 -- 6 -- 4 -- 7 -- 3 --9 -- ?', NULL, '5'),
(4, 'complétez la série :', 'B - F - J - ?', NULL, 'N'),
(5, 'complétez la série :', '2 - 3 - 5 - 8 - ? - 21', NULL, '13'),
(6, 'complétez la série :', 'Pau - Nice - Paris - ?', 'A-Bordeaux B-Lille C-Marseille D-Rennes', 'D'),
(7, 'Quel nombre manque', '3 -- 7 -- 11 -- ? -- 19', NULL, '15'),
(8, 'Trouvez le chiffre manquant', 'chat (4) Singe(5) cheval(6) éléphant(?)', NULL, '8'),
(9, 'complétez la série :', 'D - 1 - F - 3 - J - 0 - K - 5 - ?', NULL, 'Q'),
(10, 'Déterminer les deux nombres manquants :', '2 - 19 - 4 - 16 - 6 - 13 - ? - ? - 10 - 7', NULL, '8+10');

-- --------------------------------------------------------

--
-- Structure de la table `test2p2`
--

CREATE TABLE `test2p2` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(20) DEFAULT NULL,
  `Valeur` varchar(15) DEFAULT NULL,
  `Choix` varchar(10) DEFAULT NULL,
  `Reponse1` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test2p2`
--

INSERT INTO `test2p2` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(11, 'complétez la série :', 'question_11.png', NULL, '5+2'),
(12, 'complétez la série :', 'question_12.png', NULL, '3+4'),
(13, 'complétez la série :', 'question_13.png', NULL, '4+2'),
(14, 'complétez la série :', 'question_14.png', NULL, '2+3'),
(15, 'complétez la série :', 'question_15.png', NULL, '1'),
(16, 'complétez la série :', 'question_16.png', NULL, '3'),
(17, 'complétez la série :', 'question17.png', NULL, 'C');

-- --------------------------------------------------------

--
-- Structure de la table `test2p3`
--

CREATE TABLE `test2p3` (
  `id` int(2) DEFAULT NULL,
  `Question` varchar(689) DEFAULT NULL,
  `Valeur` varchar(15) DEFAULT NULL,
  `Choix` varchar(336) DEFAULT NULL,
  `Reponse1` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test2p3`
--

INSERT INTO `test2p3` (`id`, `Question`, `Valeur`, `Choix`, `Reponse1`) VALUES
(18, 'Thomas vit à Poitiers. Antoine, un de ses amis de longue date, vit aux États-Unis mais, ce dernier se rend souvent à Paris pour affaireet essaye, à chaque fois,de revoir Thomas . Mais, n\'ayant pas suffisamment de temps pour se rendre à Poitiers, Antoine donne toujoursrendez-vous à Thomas à Tours. Paris est à 240 km de Tours et à 340 km de Poitiers . Thomas, qui neprend jamais l\'autoroute, roule à une vitesse moyenne de 50 km/h. Antoine, lui, prend l\'autoroute; mais, compte tenu de la circulation , il roule à une vitesse moyenne de 100 km/h, seulement.S\'ils partent tous les deux à la même heure,lequel des deux arrive le premier à Tours et combien de temps doit-il attendre son ami ?', NULL, 'A - Antoine et 18min B - Thomas et 24min C - Antoine et 36min D - Thomas et 12min', 'B'),
(19, 'Marie veut repeindre les murs de sa chambre et demande à sa soeur Julie de l’aider. La pièce (rectangulaire) fait 3 m de large et 5 m de long. Le plafond est à une hauteur de 2,50 m. Avant d’aller acheter leur peinture, Marie et Julie doivent déterminer la surface qu’elles auront à peindre. Bricoleuses amateurs, elles décident de prévoir large en considérant que les murs sont entiers, c’est-à-dire sans fenêtre et sans porte. Mais, Marie et Julie ne sont pas très à l’aise avec l’arithmétique : elles ont besoin de votre aide pour le calcul de la surface. Selon vous, quelle surface devront-elles peindre ?', NULL, 'A-35² B-40 m² C-37,5 m² D-42,5 m²', 'B'),
(20, 'Un chef d’entreprise, dont la société emploie 100 cadres et900 ouvriers, veut savoir combien il doit recruter de nouveaux em-ployés dans le cadre de la réduction du temps de travail. Son person-nel travaillait auparavant 39 heures par semaine ; il va désormaistravailler 35 heures. Combien faut-il embaucher de cadres etd’ouvriers pour compenser intégralement les heures non faites ?', NULL, 'A-11 cadres et 103 ouvrier B-18 cadres et 124 ouvriers C-10 cadres et 134 ouvriers D-22 cadres et 120 ouvriers', 'A'),
(21, 'Vous vous rendez dîner chez un ami et c’est à vous que revient laconception du dessert. Vous connaissez une merveilleuse recette degâteau au chocolat. Pour 6 personnes, les ingrédients sont : 250 g debeurre, 200 g de sucre, 300 g de chocolat, 6 œufs et 3 cuillerées de fa-rine. Mais, votre ami reçoit 4 personnes seulement. Quelles sont,dans ce cas, les doses requises pour chaque ingrédient de la recette ?', NULL, 'A-170 g de beurre, 130 g de sucre, 200 g de chocolat, 4 œufs, 2 cuillerées de farine B-200 g de beurre, 150 g de sucre, 240 g de chocolat, 4 œufs,1 cuillerée de farine C-230 g de beurre, 100 g de sucre, 180 g de chocolat, 5 œufs, 2 cuillerées de farine D-190 g de beurre, 110 g de sucre, 250 g de chocolat, 3 œufs, 1 cuillerée de farine', 'A'),
(22, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question_22.png', NULL, 'B'),
(23, 'Choisissez, parmi les 4 éléments A, B, C et D, celui qui doit terminer la série.', 'question_23.png', NULL, 'B'),
(24, 'Choisissez, parmi les 4 éléments A, B, C, D, E et F celui qui doit terminer la série.', 'question_24.png', NULL, 'D'),
(25, 'Choisissez, parmi les 4 éléments A, B, C celui qui doit terminer la série.', 'question_25.png', NULL, 'D');

-- --------------------------------------------------------

--
-- Structure de la table `test_note`
--

CREATE TABLE `test_note` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `cin` varchar(128) NOT NULL,
  `pdf` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `test_pers`
--

CREATE TABLE `test_pers` (
  `id` int(11) NOT NULL,
  `lettre` varchar(12) NOT NULL,
  `contexte` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pers`
--

INSERT INTO `test_pers` (`id`, `lettre`, `contexte`) VALUES
(1, 'E', 'Vous êtes dynamique'),
(2, 'E', 'Vous aimez parler'),
(3, 'E', 'Vous pensez à voix haute'),
(4, 'E', 'Vous agissez, puis pensez'),
(5, 'E', 'Vous n’aimez pas être seul'),
(6, 'E', 'Vous aimez établir de nouveaux contacts'),
(7, 'E', 'Vous préférez parler plutôt qu’écrire'),
(8, 'E', 'Vous pouvez facilement être distrait'),
(9, 'E', 'Vous préférez faire plusieurs choses à la fois'),
(10, 'E', 'Vous avez parfois un discours changeant'),
(11, 'I', 'Vous êtes calme'),
(12, 'I', 'Vous aimez écouter'),
(13, 'I', 'Vous réfléchissez posément'),
(14, 'I', 'Vous pensez, puis agissez'),
(15, 'I', 'Vous vous sentez bien quand vous êtes seul'),
(16, 'I', 'Vous aimez approfondir vos contacts'),
(17, 'I', 'Vous êtes considéré comme plutôt secret et réservé '),
(18, 'I', 'Vous possédez une bonne capacité de concentration'),
(19, 'I', 'Vous préférez vous concentrer sur une seule chose à la fois'),
(20, 'I', 'Vous êtes indépendant'),
(21, 'S', 'Vous vous attachez aux faits et aux détails '),
(22, 'S', 'Vous aimez les choses utiles'),
(23, 'S', 'Vous vivez dans l instant présent '),
(24, 'S', 'Vous faites confiance à l’expérience'),
(25, 'S', 'Vous aimez approfondir vos compétences'),
(26, 'S', 'Vous restez fidèle aux méthodes qui ont fait leurs preuves '),
(27, 'S', 'Vous préférez les instructions étape par étape'),
(28, 'S', 'Vous êtes pratique'),
(29, 'S', 'Vous aimez ce qui est concret, réel, directement observable'),
(30, 'S', 'Vous êtes réaliste : vous voyez ce qui existe'),
(31, 'N', 'Vous vous intéressez aux idées'),
(32, 'N', 'Vous remarquez tout ce qui est nouveau et différent'),
(33, 'N', 'Vous pensez aux implications futures'),
(34, 'N', 'Vous suivez votre instinct'),
(35, 'N', 'Vous aimez apprendre de nouvelles compétences'),
(36, 'N', 'Vous n’aimez pas la routine'),
(37, 'N', 'Vous cherchez à comprendre'),
(38, 'N', 'Vous êtes théorique'),
(39, 'N', 'Vous êtes attirés par les idées originales'),
(40, 'N', 'Vous êtes imaginatifs : vous voyez les possibilités'),
(41, 'T', 'Vous vous efforcez dêtre objectif dans vos décisions'),
(42, 'T', 'Vous apparaissez calme et réservé'),
(43, 'T', 'Vous avez un sens aigu de la justice'),
(44, 'T', 'Vous vous impliquez peu, vous prenez de la distance'),
(45, 'T', 'Vous êtes critique (vous remarquez vite les failles et les défauts)'),
(46, 'T', 'Vous adorez argumenter pour le plaisir'),
(47, 'T', 'Vous êtes franc et direct '),
(48, 'T', 'Vous êtes motivé par vos projets'),
(49, 'T', 'Vous aimez vous placer en observateur'),
(50, 'T', 'Vous êtes sensible à la logique'),
(51, 'F', 'Vous fondez vos décisions sur vos valeurs et vos sentiments'),
(52, 'F', 'Vous êtes sociable et amical'),
(53, 'F', 'Vous avez tendance à la clémence'),
(54, 'F', 'Vous prenez les choses à cœur'),
(55, 'F', 'Vous tentez de faire plaisir (prompt à faire des compliments)'),
(56, 'F', 'Vous évitez la discussion et le conflit'),
(57, 'F', 'Vous êtes diplomate et faîtes preuve de tact'),
(58, 'F', 'Vous êtes motivé par l’estime des autres'),
(59, 'F', 'Vous êtes sensible (facilement blessé)'),
(60, 'F', 'Vous faîtes confiance à vos impressions'),
(61, 'J', 'Vous aimez organiser et planifier'),
(62, 'J', 'Vous êtes sérieux et conventionnel'),
(63, 'J', 'Vous suivez votre calendrier et êtes parfaitement ponctuel'),
(64, 'J', 'Vous aimez terminer vos projets '),
(65, 'J', 'Vous travaillez d abord, vous vous amusez ensuite'),
(66, 'J', 'Vous n’aimez pas le stress de dernière minute'),
(67, 'J', 'Vous ne discutez pas les règles'),
(68, 'J', 'Vous cherchez à maîtriser '),
(69, 'J', 'Vous êtes à l’aise au sein de structures bien définies'),
(70, 'J', 'Vous n’aimez pas le provisoire, l’incertain'),
(71, 'P', 'Vous aimez vivre de façon flexible'),
(72, 'P', 'Vous êtes ludique et non-conventionnel'),
(73, 'P', 'Vous n’avez ni heure ni délais'),
(74, 'P', 'Vous aimez démarrer des projets'),
(75, 'P', 'Vous vous amusez d abord et travaillez ensuite'),
(76, 'P', 'Vous rechignez à vous engager'),
(77, 'P', 'Vous discutez les règles'),
(78, 'P', 'Vous cherchez à comprendre'),
(79, 'P', 'Vous aimez conserver votre liberté d action'),
(80, 'P', 'Vous restez ouvert, aimez vivre des expériences, vous adapter');

-- --------------------------------------------------------

--
-- Structure de la table `test_pers_p1`
--

CREATE TABLE `test_pers_p1` (
  `id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pers_p1`
--

INSERT INTO `test_pers_p1` (`id`, `q1`, `q2`) VALUES
(1, 1, 11),
(2, 2, 12),
(3, 3, 13),
(4, 4, 14),
(5, 5, 15),
(6, 6, 16),
(7, 7, 17),
(8, 8, 18),
(9, 9, 19),
(10, 10, 20);

-- --------------------------------------------------------

--
-- Structure de la table `test_pers_p2`
--

CREATE TABLE `test_pers_p2` (
  `id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pers_p2`
--

INSERT INTO `test_pers_p2` (`id`, `q1`, `q2`) VALUES
(1, 21, 31),
(2, 22, 32),
(3, 23, 33),
(4, 24, 34),
(5, 25, 35),
(6, 26, 36),
(7, 27, 37),
(8, 28, 38),
(9, 29, 39),
(10, 30, 40);

-- --------------------------------------------------------

--
-- Structure de la table `test_pers_p3`
--

CREATE TABLE `test_pers_p3` (
  `id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pers_p3`
--

INSERT INTO `test_pers_p3` (`id`, `q1`, `q2`) VALUES
(1, 41, 51),
(2, 42, 52),
(3, 43, 53),
(4, 44, 54),
(5, 45, 55),
(6, 46, 56),
(7, 47, 57),
(8, 48, 58),
(9, 49, 59),
(10, 50, 60);

-- --------------------------------------------------------

--
-- Structure de la table `test_pers_p4`
--

CREATE TABLE `test_pers_p4` (
  `id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test_pers_p4`
--

INSERT INTO `test_pers_p4` (`id`, `q1`, `q2`) VALUES
(1, 61, 71),
(2, 62, 72),
(3, 63, 73),
(4, 64, 74),
(5, 65, 75),
(6, 66, 76),
(7, 67, 77),
(8, 68, 78),
(9, 69, 79),
(10, 70, 80);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comp_note`
--
ALTER TABLE `comp_note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_u` (`id_u`);

--
-- Index pour la table `comp_noteq1`
--
ALTER TABLE `comp_noteq1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_q` (`id_q`),
  ADD KEY `id_u` (`id_u`);

--
-- Index pour la table `comp_noteq2`
--
ALTER TABLE `comp_noteq2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_q` (`id_q`);

--
-- Index pour la table `condidat`
--
ALTER TABLE `condidat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mbti`
--
ALTER TABLE `mbti`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noteq1`
--
ALTER TABLE `noteq1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noteq1_1`
--
ALTER TABLE `noteq1_1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `noteq2`
--
ALTER TABLE `noteq2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_note`
--
ALTER TABLE `test_note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_pers`
--
ALTER TABLE `test_pers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_pers_p1`
--
ALTER TABLE `test_pers_p1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_q1` (`q1`),
  ADD KEY `fk_q2` (`q2`);

--
-- Index pour la table `test_pers_p2`
--
ALTER TABLE `test_pers_p2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_q3` (`q1`),
  ADD KEY `fk_q4` (`q2`);

--
-- Index pour la table `test_pers_p3`
--
ALTER TABLE `test_pers_p3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_q5` (`q1`),
  ADD KEY `fk_q6` (`q2`);

--
-- Index pour la table `test_pers_p4`
--
ALTER TABLE `test_pers_p4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_7` (`q1`),
  ADD KEY `fk_8` (`q2`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comp_note`
--
ALTER TABLE `comp_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT pour la table `comp_noteq1`
--
ALTER TABLE `comp_noteq1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT pour la table `comp_noteq2`
--
ALTER TABLE `comp_noteq2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `condidat`
--
ALTER TABLE `condidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mbti`
--
ALTER TABLE `mbti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `noteq1`
--
ALTER TABLE `noteq1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `noteq1_1`
--
ALTER TABLE `noteq1_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `noteq2`
--
ALTER TABLE `noteq2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `test_note`
--
ALTER TABLE `test_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `test_pers`
--
ALTER TABLE `test_pers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `test_pers_p1`
--
ALTER TABLE `test_pers_p1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `test_pers_p2`
--
ALTER TABLE `test_pers_p2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `test_pers_p3`
--
ALTER TABLE `test_pers_p3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `test_pers_p4`
--
ALTER TABLE `test_pers_p4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comp_note`
--
ALTER TABLE `comp_note`
  ADD CONSTRAINT `fk_u` FOREIGN KEY (`id_u`) REFERENCES `note` (`id`);

--
-- Contraintes pour la table `comp_noteq1`
--
ALTER TABLE `comp_noteq1`
  ADD CONSTRAINT `comp_noteq1_ibfk_1` FOREIGN KEY (`id_q`) REFERENCES `test1` (`id`);

--
-- Contraintes pour la table `comp_noteq2`
--
ALTER TABLE `comp_noteq2`
  ADD CONSTRAINT `fk_q` FOREIGN KEY (`id_q`) REFERENCES `test2` (`id`);

--
-- Contraintes pour la table `test_pers_p1`
--
ALTER TABLE `test_pers_p1`
  ADD CONSTRAINT `fk_q1` FOREIGN KEY (`q1`) REFERENCES `test_pers` (`id`),
  ADD CONSTRAINT `fk_q2` FOREIGN KEY (`q2`) REFERENCES `test_pers` (`id`);

--
-- Contraintes pour la table `test_pers_p2`
--
ALTER TABLE `test_pers_p2`
  ADD CONSTRAINT `fk_q3` FOREIGN KEY (`q1`) REFERENCES `test_pers` (`id`),
  ADD CONSTRAINT `fk_q4` FOREIGN KEY (`q2`) REFERENCES `test_pers` (`id`);

--
-- Contraintes pour la table `test_pers_p3`
--
ALTER TABLE `test_pers_p3`
  ADD CONSTRAINT `fk_q5` FOREIGN KEY (`q1`) REFERENCES `test_pers` (`id`),
  ADD CONSTRAINT `fk_q6` FOREIGN KEY (`q2`) REFERENCES `test_pers` (`id`);

--
-- Contraintes pour la table `test_pers_p4`
--
ALTER TABLE `test_pers_p4`
  ADD CONSTRAINT `fk_7` FOREIGN KEY (`q1`) REFERENCES `test_pers` (`id`),
  ADD CONSTRAINT `fk_8` FOREIGN KEY (`q2`) REFERENCES `test_pers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
