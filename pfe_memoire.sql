-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 19, 2021 at 06:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe_memoire`
--

-- --------------------------------------------------------

--
-- Table structure for table `appel_offre`
--

DROP TABLE IF EXISTS `appel_offre`;
CREATE TABLE IF NOT EXISTS `appel_offre` (
  `ref_AO` varchar(30) NOT NULL,
  `objet_AO` varchar(200) NOT NULL,
  `desc_AO` varchar(200) NOT NULL,
  `date_creation_AO` date NOT NULL,
  `duree_validite` int(3) NOT NULL,
  `duree_engagement` int(3) NOT NULL,
  `montant_garantie` int(3) NOT NULL,
  `date_ouverture_plis` date NOT NULL,
  `heure_ouverture_plis` time NOT NULL,
  `mode` char(40) NOT NULL,
  `nature` char(15) NOT NULL,
  `etape` varchar(100) NOT NULL,
  `etat` char(50) NOT NULL,
  `observation_AO` varchar(200) NOT NULL,
  `ref_CC` varchar(30) NOT NULL,
  PRIMARY KEY (`ref_AO`),
  KEY `ref_CC` (`ref_CC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appel_offre`
--

INSERT INTO `appel_offre` (`ref_AO`, `objet_AO`, `desc_AO`, `date_creation_AO`, `duree_validite`, `duree_engagement`, `montant_garantie`, `date_ouverture_plis`, `heure_ouverture_plis`, `mode`, `nature`, `etape`, `etat`, `observation_AO`, `ref_CC`) VALUES
('01/DCL/DGM/2021', 'MARCHE A COMMANDES', 'MARCHE A COMMANDES ', '2021-01-10', 30, 90, 5, '2021-03-10', '13:00:00', 'International Restreint', 'Service', 'Centre d\'Achats', 'En Cours', '/', 'CC/01/DCL/DGM/2021'),
('01/DQHSE/SMI/2021', 'Accompagnement de l\'ENGTP a la mise en place d\'un systeme de management integre', 'Accompagnement de l\'ENGTP a la mise en place d\'un systeme de management integre', '2021-02-14', 40, 90, 5, '2021-04-14', '13:00:00', 'National Ouvert', 'Services', 'CEOT', 'En Cours', '/', 'CC/01/DQHSE/SMI/2021'),
('01/DRH/INV/2020', 'EQUIPEMENTS DE CLIMATISATION', 'Equipements de climatisation', '2020-04-03', 30, 90, 5, '2020-03-10', '13:00:00', 'National ouvert', 'Travaux', 'Reception des offres', 'Encours', '/', 'CC/01DRH/INV/2020'),
('01/DRM/2021', 'SOUS TRAITANCE DES TRAVAUX DE TERRASSEMENT', 'Sous traitance des travaux de terrassement', '2021-01-03', 90, 120, 30, '2021-03-01', '10:00:00', 'National restreint', 'Travaux', 'COP financier', 'Infructueux', '/', 'CC/01/DRM/2021'),
('01/DRZ/DAF/MC/2021', 'PRESTATION DE SERVICE: HYGIENE ET ENTRETIEN DES LOCAUX ET ESPACES VERTS', '/', '2021-02-01', 90, 120, 20, '2021-04-01', '09:00:00', 'National ouvert', 'Service', 'CEOT', 'Encours', '/', 'CC/01/DRZ/DAF/MC/2021'),
('01/INV/DAT/2020', 'Deux pelles excavatrices sur chenilles 40T', '/', '2020-04-14', 30, 90, 40, '2020-06-13', '08:30:00', 'National ouvert', 'Fourniture', 'Centre d\'achats', 'Annulee', '/', 'CC/01/INV/DAT/2020');

-- --------------------------------------------------------

--
-- Table structure for table `baosem`
--

DROP TABLE IF EXISTS `baosem`;
CREATE TABLE IF NOT EXISTS `baosem` (
  `num_baosem` int(6) NOT NULL,
  `date_apparition` date NOT NULL,
  `desc_baosem` varchar(200) NOT NULL,
  PRIMARY KEY (`num_baosem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baosem`
--

INSERT INTO `baosem` (`num_baosem`, `date_apparition`, `desc_baosem`) VALUES
(1561, '2019-12-10', 'BAOSEM Num. 1561 DU 10-12-2019'),
(1575, '2019-12-10', 'BAOSEM Num 1575 DU 10/12/2019'),
(1581, '2019-12-28', 'BAOSEM Num. 1581 DU 28-12-2019'),
(1617, '2020-04-07', 'BAOSEM Num. 1617 DU 07-04-2020'),
(1620, '2020-04-16', 'BAOSEM Num. 1620 DU 16-04-2020'),
(1622, '2020-04-22', 'BAOSEM Num. 1622 DU 22-04-2020'),
(1629, '2020-05-12', 'BAOSEM Num. 1629 DU 12-05-2020'),
(1634, '2020-05-25', 'BAOSEM Num. 1634 DU 25-05-2020'),
(1642, '2020-06-17', 'BAOSEM Num. 1642 DU 17-06-2020');

-- --------------------------------------------------------

--
-- Table structure for table `cahier_des_charges`
--

DROP TABLE IF EXISTS `cahier_des_charges`;
CREATE TABLE IF NOT EXISTS `cahier_des_charges` (
  `ref_CC` varchar(30) NOT NULL,
  `objet_CC` varchar(150) NOT NULL,
  `date_creation_CC` date NOT NULL,
  `duree_garantie` int(5) NOT NULL,
  `montant_CC` int(10) NOT NULL,
  `observation_CC` varchar(200) NOT NULL,
  PRIMARY KEY (`ref_CC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cahier_des_charges`
--

INSERT INTO `cahier_des_charges` (`ref_CC`, `objet_CC`, `date_creation_CC`, `duree_garantie`, `montant_CC`, `observation_CC`) VALUES
('CC/01/DCL/DGM/2021', 'MARCHE A COMMANDES', '2021-01-10', 365, 150000, '/'),
('CC/01/DQHSE/SMI/2021', 'Accompagnement de l\'ENGTP a la mise en place d\'un systeme de management integre.', '2021-02-14', 365, 100000, '/'),
('CC/01/DRM/2021', 'TRAVAUX DE TERRASSEMENT.', '2021-02-01', 365, 30000, '/'),
('CC/01/DRZ/DAF/MC/2021', 'HYGIENE ET ENTRETIEN DES LOCAUX ET ESPACES VERTS', '2021-01-03', 365, 90000, '/'),
('CC/01/INV/DAT/2020', 'Deux (02) pelles excavatrices sur chenilles 40T', '2020-04-14', 365, 500000, '/'),
('CC/01DRH/INV/2020', 'EQUIPEMENTS DE CLIMATISATION.', '2020-05-04', 365, 200000, '/'),
('CC/02/DRH/INV/2020', 'FOURNITURE DE (04) CHAPITAUX ', '2020-04-15', 365, 400000, '/'),
('CC/02/INV/DAT/2020', 'Quatre (04) compresseurs sur pneus 14 bars', '2020-10-07', 365, 250000, '/'),
('CC/03/DCL/SCIMAT/2021', 'FOURNITURE DE CIMENT', '2021-02-02', 365, 50000, '/'),
('CC/03/DRH/INV/2020', 'Fourniture de (150)cabines dortoirs (lot Num 01).', '2020-08-25', 365, 60000, '/');

-- --------------------------------------------------------

--
-- Table structure for table `depot_offre`
--

DROP TABLE IF EXISTS `depot_offre`;
CREATE TABLE IF NOT EXISTS `depot_offre` (
  `num_ordre_bog` varchar(10) NOT NULL,
  `date_depot` date NOT NULL,
  `heure_depot` time NOT NULL,
  `nom_depot` varchar(30) NOT NULL,
  `prenom_depot` varchar(30) NOT NULL,
  `observation_depot` varchar(200) NOT NULL,
  `ref_AO` varchar(30) NOT NULL,
  PRIMARY KEY (`num_ordre_bog`),
  KEY `ref_AO` (`ref_AO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `depot_offre`
--

INSERT INTO `depot_offre` (`num_ordre_bog`, `date_depot`, `heure_depot`, `nom_depot`, `prenom_depot`, `observation_depot`, `ref_AO`) VALUES
('33/2021', '2021-02-03', '10:00:00', 'DEBA', 'Nasredine', '/', '01/DCL/DGM/2021'),
('34/2021', '2021-02-21', '09:00:00', 'BELHADJI', 'Hocine', '/', '01/DCL/DGM/2021'),
('36/2021', '2021-02-24', '11:00:00', 'HADJIMI', 'Amine', '/', '01/DCL/DGM/2021'),
('37/2021', '2021-02-26', '10:00:00', 'MAKHLOUFI', 'Rafik', '/', '01/DQHSE/SMI/2021'),
('46/2021', '2021-02-28', '11:30:00', 'BENSALIM', 'Radouane', '/', '01/DQHSE/SMI/2021'),
('47/2021', '2021-03-01', '11:00:00', 'HADJIMI ', 'Amine', '/', '01/DQHSE/SMI/2021'),
('48/2021', '2021-03-04', '14:00:00', 'GUETTACHE', 'Brahim', '/', '01/DCL/DGM/2021'),
('49/2021', '2021-03-04', '14:00:00', 'ABZAR', 'Kamel Adine', '/', '01/DQHSE/SMI/2021');

-- --------------------------------------------------------

--
-- Table structure for table `placard`
--

DROP TABLE IF EXISTS `placard`;
CREATE TABLE IF NOT EXISTS `placard` (
  `ref_placard` varchar(30) NOT NULL,
  `type_placard` varchar(100) NOT NULL,
  `date_creation_placard` date NOT NULL,
  `objet_placard` varchar(200) NOT NULL,
  `ref_AO` varchar(30) NOT NULL,
  `num_baosem` int(6) NOT NULL,
  PRIMARY KEY (`ref_placard`),
  KEY `ref_AO` (`ref_AO`),
  KEY `num_baosem` (`num_baosem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placard`
--

INSERT INTO `placard` (`ref_placard`, `type_placard`, `date_creation_placard`, `objet_placard`, `ref_AO`, `num_baosem`) VALUES
('PL/01/DCL/DGM/2021', 'Insertion', '2021-02-20', 'AVIS DE LANCEMENT DE L\'APPEL Num. 01/DCL/DGM/2021 RELATIF A MARCHE A COMMANDES', '01/DCL/DGM/2021', 1561),
('PL/01/DQHSE/SMI/2021', 'Insertion', '2021-02-15', 'AVIS DE LANCEMENT DE L\'APPEL NUM.01/DQHSE/SMI/2021 RELATIF A l\'accompagnement de l\'ENGTP a la mise en place d\'un systeme de management integer.', '01/DQHSE/SMI/2021', 1575),
('PL/01/DRH/INV/2020', 'Insertion', '2020-04-05', 'AVIS DE LANCEMENT DE L\'APPEL Num. 01/DRH/INV/2020 RELATIF A L\'ACQUISITION DES EQUIPEMENTS DE CLIMATISATION', '01/DCL/DGM/2021', 1642);

-- --------------------------------------------------------

--
-- Table structure for table `pv`
--

DROP TABLE IF EXISTS `pv`;
CREATE TABLE IF NOT EXISTS `pv` (
  `ref_PV` varchar(30) NOT NULL,
  `date_PV` date DEFAULT NULL,
  `heure_PV` time DEFAULT NULL,
  `type_PV` varchar(10) NOT NULL,
  `objet_PV` varchar(200) DEFAULT NULL,
  `desc_PV` varchar(200) DEFAULT NULL,
  `observation_PV` varchar(200) DEFAULT NULL,
  `ref_AO` varchar(30) NOT NULL,
  PRIMARY KEY (`ref_PV`),
  KEY `ref_AO` (`ref_AO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pv`
--

INSERT INTO `pv` (`ref_PV`, `date_PV`, `heure_PV`, `type_PV`, `objet_PV`, `desc_PV`, `observation_PV`, `ref_AO`) VALUES
('CEOT/01/DCL/DGM/2021', '2021-03-31', '10:00:00', 'CEOT', 'PV de l\'etude technique de l\'offre Num. 01/DCL/DGM/2021', 'PV de l\'etude technique de l\'offre Num. 01/DCL/DGM/2021', '/', '01/DCL/DGM/2021'),
('CEOT/01/DQHSE/SMI/2021', '2021-03-28', '14:00:00', 'CEOT', 'PV de l\'etude technique de l\'offre Num. 01/DQHSE/SMI/2021', '/', '/', '01/DQHSE/SMI/2021'),
('COP1/01/DCL/DGM/2021', '2021-03-17', '14:00:00', 'COP1', 'PV d\'ouverture des plis etape 1 de l\'offre Num. 01/DCL/DGM/2021', 'PV d\'ouverture des plis etape 1 de l\'offre Num. 01/DCL/DGM/2021', '/', '01/DCL/DGM/2021'),
('COP1/01/DQHSE/SMI/2021', '2021-03-21', '10:30:00', 'COP1', 'PV d\'ouverture des plis etape 1 de l\'offre Num. 01/DQHSE/SMI/2021', '/', '/', '01/DQHSE/SMI/2021'),
('COP2/01/DCL/DGM/2021', '2021-03-24', '11:00:00', 'COP2', 'PV d\'ouverture des plis etape 2 de l\'offre Num. 01/DCL/DGM/2021', 'PV d\'ouverture des plis etape 2 de l\'offre Num. 01/DCL/DGM/2021', '/', '01/DCL/DGM/2021'),
('COP2/01/DQHSE/SMI/2021', '2021-04-04', '10:00:00', 'COP2', 'PV d\'ouverture des plis etape 2 de l\'offre Num. 01/DQHSE/SMI/2021', '/', '/', '01/DQHSE/SMI/2021');

-- --------------------------------------------------------

--
-- Table structure for table `registre_retrait_cahier_charges`
--

DROP TABLE IF EXISTS `registre_retrait_cahier_charges`;
CREATE TABLE IF NOT EXISTS `registre_retrait_cahier_charges` (
  `num_ordre_retrait` varchar(10) NOT NULL,
  `date_retrait` date NOT NULL,
  `nom_retrait` varchar(30) NOT NULL,
  `prenom_retrait` varchar(30) NOT NULL,
  `observation_retrait` varchar(200) NOT NULL,
  `code_soumissionnaire` int(6) NOT NULL,
  `ref_AO` varchar(30) NOT NULL,
  PRIMARY KEY (`num_ordre_retrait`),
  KEY `code_soumissionnaire` (`code_soumissionnaire`),
  KEY `ref_AO` (`ref_AO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registre_retrait_cahier_charges`
--

INSERT INTO `registre_retrait_cahier_charges` (`num_ordre_retrait`, `date_retrait`, `nom_retrait`, `prenom_retrait`, `observation_retrait`, `code_soumissionnaire`, `ref_AO`) VALUES
('12/2021', '2021-02-05', 'KADDOURI', 'Abdelouaheb', '/', 100001, '01/DCL/DGM/2021'),
('13/2021', '2021-02-06', 'BENSALAH', 'Abderazzak', '/', 100007, '01/DQHSE/SMI/2021'),
('14/2021', '2021-02-06', 'TRAD', 'Chakib', '/', 100008, '01/DQHSE/SMI/2021'),
('15/2021', '2021-02-09', 'BELHADJI', 'Hocine', '/', 100006, '01/DQHSE/SMI/2021'),
('16/2021', '2021-02-11', 'BENAMRANE', 'Radouane', '/', 100005, '01/DQHSE/SMI/2021'),
('24/2021', '2021-02-17', 'DJEMIL', 'Monir', '/', 100003, '01/DQHSE/SMI/2021'),
('25/2021', '2021-02-17', 'DEBA', 'Nasredine', '/', 100004, '01/DCL/DGM/2021'),
('27/2021', '2021-02-22', 'ABZAR', 'Kamel Adine', '/', 100001, '01/DCL/DGM/2021'),
('28/2021', '2021-02-22', 'MAKHLOUFI', 'Rafik', '/', 100002, '01/DQHSE/SMI/2021');

-- --------------------------------------------------------

--
-- Table structure for table `soumissionnaire`
--

DROP TABLE IF EXISTS `soumissionnaire`;
CREATE TABLE IF NOT EXISTS `soumissionnaire` (
  `code_soumissionnaire` int(6) NOT NULL,
  `raison_social` varchar(50) NOT NULL,
  `nom_contact` varchar(30) DEFAULT NULL,
  `prenom_contact` varchar(30) DEFAULT NULL,
  `registre_commerce` varchar(10) DEFAULT NULL,
  `num_idf_fiscal` varchar(15) DEFAULT NULL,
  `num_fix` varchar(15) DEFAULT NULL,
  `num_fax` varchar(15) DEFAULT NULL,
  `num_mobile` varchar(13) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`code_soumissionnaire`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soumissionnaire`
--

INSERT INTO `soumissionnaire` (`code_soumissionnaire`, `raison_social`, `nom_contact`, `prenom_contact`, `registre_commerce`, `num_idf_fiscal`, `num_fix`, `num_fax`, `num_mobile`, `adresse`, `email`) VALUES
(100001, 'ETS GAGI SERVICES', 'BOUMAZA', 'Sofiane', '04A4321044', '000016001255402', '021016186', '023372543', '0696319313', '602 logts, Route des Dunes, Cheraga, Alger.', 'boumaza.sof@gmail.com'),
(100002, 'TDT/EMR SPA', 'MAKHLOUFI', 'Rafik', '0968413805', '000016003892054', '123456789', '123455789', '0770902723', 'Alger', 'm_rafik@gmail.fr'),
(100003, 'EURL TRANS MES', 'DJEMIL', 'Monir', '0680972520', '000023000876839', '123-45-67-89', '123-45-57-89', '0550211112', 'Annaba', 'monir.d@yahoo.com'),
(100004, 'EURL BALAT EL HOGGAR', 'DEBA ', 'Nasredine', '98B0282218', '000001005643176', '123-45-67-89', '123-45-57-89', '0660366038', 'Adrar', 'deba_nasredine@gmail.com'),
(100005, 'EURL AMMARI SERVICES', 'BENAMRANE ', 'Chaabane', '06B0123826', '000016987329722', '123-45-67-89', '123-45-57-89', '0660504339', 'Alger', 'eurl_ammari_sc@yahoo.fr'),
(100006, 'EURL AFIF SERVICES', 'BENAMRANE', 'Radouane', '0213852B06', '000060983298466', '123-45-67-89', '123-45-57-89', '0660366038', 'Bejaia', 'eurlafif@yahoo.fr'),
(100007, 'EURL TGMS', 'BELHADJI', 'Hocine', '14B0425085', '000048073209372', '123-45-67-89', '123-45-57-89', '0550800512', 'Relizane', 'tgmshmd@yahoo.fr'),
(100008, 'ETS HOUAS FOUAD TRAVAUX', 'BENSALAH', 'Abderazzak', '1249536A14', '000045068984381', '123-45-67-89', '123-45-57-89', '0661381305', 'Naama', 'houasloct@yahoo.fr'),
(100009, 'EURL RTR', 'TRAD', 'Chakib', '0862167B98', '000025074329833', '123-45-67-89', '123-45-57-89', '0661645167', 'Tebessa', 'sarlrtr@yahoo.com'),
(100010, 'SARL MARS LOGISTIQUE', 'KADDOURI', 'Abdelouaheb', '0980570B08', '000020074937432', '123-45-67-89', '123-45-57-89', '0561639908', 'Saida', 'dbaizid@marslogistique.com');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `matricule` int(5) NOT NULL,
  `nom_utilisateur` varchar(30) NOT NULL,
  `prenom_utilisateur` varchar(30) NOT NULL,
  `mot_de_passe` varchar(30) NOT NULL,
  `role_utilisateur` char(20) NOT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`matricule`, `nom_utilisateur`, `prenom_utilisateur`, `mot_de_passe`, `role_utilisateur`, `actif`) VALUES
(10001, 'Boukaraoun', 'Maya', '0001', 'Administrateur', NULL),
(20001, 'Amrani', 'Ramy', '0002', 'Centre d\'Achats', NULL),
(30001, 'Berahal', 'Sara', '0003', 'BOG', NULL),
(40001, 'Chetouane', 'Sayid', '0004', 'COP', NULL),
(50001, 'Chaib', 'Leila', '0005', 'CEOT', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appel_offre`
--
ALTER TABLE `appel_offre`
  ADD CONSTRAINT `relation` FOREIGN KEY (`ref_CC`) REFERENCES `cahier_des_charges` (`ref_CC`);

--
-- Constraints for table `depot_offre`
--
ALTER TABLE `depot_offre`
  ADD CONSTRAINT `relation1` FOREIGN KEY (`ref_AO`) REFERENCES `appel_offre` (`ref_AO`);

--
-- Constraints for table `placard`
--
ALTER TABLE `placard`
  ADD CONSTRAINT `rel1` FOREIGN KEY (`ref_AO`) REFERENCES `appel_offre` (`ref_AO`),
  ADD CONSTRAINT `rel2` FOREIGN KEY (`num_baosem`) REFERENCES `baosem` (`num_baosem`);

--
-- Constraints for table `pv`
--
ALTER TABLE `pv`
  ADD CONSTRAINT `rel3` FOREIGN KEY (`ref_AO`) REFERENCES `appel_offre` (`ref_AO`);

--
-- Constraints for table `registre_retrait_cahier_charges`
--
ALTER TABLE `registre_retrait_cahier_charges`
  ADD CONSTRAINT `rel4` FOREIGN KEY (`ref_AO`) REFERENCES `appel_offre` (`ref_AO`),
  ADD CONSTRAINT `rel5` FOREIGN KEY (`code_soumissionnaire`) REFERENCES `soumissionnaire` (`code_soumissionnaire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
