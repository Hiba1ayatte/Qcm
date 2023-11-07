-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 07 nov. 2023 à 18:39
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
(2, 'S5678', 'ZAHID', 'Mohamed', 'zahid@gmail.com', '', '', '', 'PRESIDENT DIRECTEUR GENERAL', 'Test Logique 1', '17:00:00', '00:00:00', '00:00:00', '00:00:00');

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

-- --------------------------------------------------------

--
-- Structure de la table `noteq1`
--

CREATE TABLE `noteq1` (
  `id` int(11) NOT NULL,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `cin` varchar(128) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'Session Test 2', 'H00093', 'DIRECTEUR EXECUTIF CAPITAL HUMAIN', 'Test Logique 2', '00:00:00', '02:00:00', '05:00:00', '07:00:00', 'hiba.ayatte123@gmail.com', 'Bonjour voudrez vous passer un test Logique sur le lien suivant<br>Lien du test : Qcm/condidatQ2.php?session_id=3', '2023-11-07 15:08:11');

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

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `condidat`
--
ALTER TABLE `condidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `noteq1`
--
ALTER TABLE `noteq1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `noteq2`
--
ALTER TABLE `noteq2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
