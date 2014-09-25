-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 25 Septembre 2014 à 10:31
-- Version du serveur: 5.5.37
-- Version de PHP: 5.4.4-14+deb7u11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `Adresse`
--

CREATE TABLE IF NOT EXISTS `Adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomStructure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresseComplement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Contenu de la table `Adresse`
--

INSERT INTO `Adresse` (`id`, `nomStructure`, `adresse`, `adresseComplement`, `CP`, `ville`, `pays`) VALUES
(31, 'testordre', 'testordre', 'testordre', 'testordre', 'testordre', 'testordre'),
(32, 'testordre', 'testordre', 'testordre', 'testordre', 'testordre', 'testordre'),
(33, 'testordre', 'testordre', 'testordre', 'testordre', 'testordre', 'testordre'),
(34, 'testordre', 'testordre', 'testordre', 'testordre', 'testordre', 'testordre'),
(35, 'testordre', 'testordre', 'testordre', 'testordre', 'testordre', 'testordre'),
(36, 'testordre autre formation', 'testordre autre formation', 'testordre autre formation', 'testordre autre formation', 'testordre autre formation', 'testordre autre formation'),
(37, 'b', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Convention`
--

CREATE TABLE IF NOT EXISTS `Convention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edition` date NOT NULL,
  `envoiPresidentU2ex` date NOT NULL,
  `retourPresidentU2ex` date NOT NULL,
  `envoiOrganisme2ex` date NOT NULL,
  `retourOrganisme1ex` date NOT NULL,
  `envoiPresidentU1ex` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `Formation`
--

CREATE TABLE IF NOT EXISTS `Formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) DEFAULT NULL,
  `intitule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `dateText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbHeures` decimal(5,1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C2B1A31CC54C8C93` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=49 ;

--
-- Contenu de la table `Formation`
--

INSERT INTO `Formation` (`id`, `type_id`, `intitule`, `lieu`, `dateDebut`, `dateFin`, `dateText`, `nbHeures`) VALUES
(39, 1, 'Questionner et concevoir un projet participatif', 'Grenoble', '2014-09-16', '2014-09-18', 'les 16,17 et 18 septembre 2014', 0.0),
(40, 1, 'Concevoir des documents d''accompagnement à la visite pour les jeunes enfants', 'Nantes', '2014-10-07', '2014-10-09', 'les 7,8 et 9 octobre 2014', 0.0),
(41, 2, 'Décrypter l''acte de médiation', 'Paris', '2014-11-27', '2014-11-27', 'le 27 novembre 2014', 0.0),
(42, 1, 'Connaître et analyser ses publics', 'Lyon', '2015-01-20', '2015-01-22', 'les 20,21 et 22 janvier 2015', 0.0),
(43, 1, 'Ecrire les textes autour de l''exposition', 'Dijon', '2014-12-02', '2014-12-04', 'les 2,3 et 4 décembre 2014', 0.0),
(44, 1, 'Construire et développer le partenariat dans le territoire', 'Saint-Etienne', '2014-11-18', '2014-11-20', 'les 18, 19 et 20 novembre 2014', 0.0),
(45, 5, 'Intégrer l’itinérance dans la conception d’une exposition', 'Paris', '2014-10-16', '2014-10-16', 'le 16 octobre 2014', 0.0);

-- --------------------------------------------------------

--
-- Structure de la table `formation_formule`
--

CREATE TABLE IF NOT EXISTS `formation_formule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formule_id` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_25A3D9E32A68F4D1` (`formule_id`),
  KEY `IDX_25A3D9E35200282E` (`formation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=374 ;

--
-- Contenu de la table `formation_formule`
--

INSERT INTO `formation_formule` (`id`, `formule_id`, `formation_id`) VALUES
(352, 16, 39),
(353, 15, 39),
(354, 16, 40),
(355, 15, 40),
(356, 14, 41),
(357, 16, 42),
(358, 15, 42),
(359, 16, 43),
(360, 15, 43),
(361, 16, 44),
(362, 15, 44),
(363, 14, 45);

-- --------------------------------------------------------

--
-- Structure de la table `Formule`
--

CREATE TABLE IF NOT EXISTS `Formule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tarif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `midi` tinyint(1) NOT NULL,
  `soir` tinyint(1) NOT NULL,
  `nuit` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `Formule`
--

INSERT INTO `Formule` (`id`, `description`, `tarif`, `midi`, `soir`, `nuit`) VALUES
(14, 'repas du midi inclus', '110', 1, 0, 0),
(15, 'avec hébergement, repas du midi et du soir inclus', '960', 1, 1, 1),
(16, 'sans hébergement, repas du midi inclus', '700', 1, 0, 0),
(28, 'formule test suppression', '1561542160', 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Inscription`
--

CREATE TABLE IF NOT EXISTS `Inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `convention_id` int(11) DEFAULT NULL,
  `dateInscription` datetime NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attentes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `statutOrgFinanceur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statutConvention` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formationformule_id` int(11) DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D80C7901A2ACEBCC` (`convention_id`),
  KEY `IDX_D80C7901AD890511` (`formationformule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Structure de la table `inscription_personnes`
--

CREATE TABLE IF NOT EXISTS `inscription_personnes` (
  `inscription_id` int(11) NOT NULL,
  `personne_id` int(11) NOT NULL,
  PRIMARY KEY (`inscription_id`,`personne_id`),
  UNIQUE KEY `UNIQ_8DA13C33A21BD112` (`personne_id`),
  KEY `IDX_8DA13C335DAC5993` (`inscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ModeleLogistique`
--

CREATE TABLE IF NOT EXISTS `ModeleLogistique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typeReponse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formationformule_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_697A9921AD890511` (`formationformule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE IF NOT EXISTS `Personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `civilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mailAdmin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F6B8ABB94DE7DC5C` (`adresse_id`),
  KEY `IDX_F6B8ABB9C54C8C93` (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Structure de la table `ReponsesLogistique`
--

CREATE TABLE IF NOT EXISTS `ReponsesLogistique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modele_id` int(11) DEFAULT NULL,
  `reponse` tinyint(1) NOT NULL,
  `reponseText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `inscription_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1106717FAC14B70A` (`modele_id`),
  KEY `IDX_1106717F5DAC5993` (`inscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Structure`
--

CREATE TABLE IF NOT EXISTS `Structure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_EDF0B5494DE7DC5C` (`adresse_id`),
  KEY `IDX_EDF0B549C54C8C93` (`type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `structures_tags`
--

CREATE TABLE IF NOT EXISTS `structures_tags` (
  `structure_id` int(11) NOT NULL,
  `tagStructure_id` int(11) NOT NULL,
  PRIMARY KEY (`structure_id`,`tagStructure_id`),
  KEY `IDX_97267AE62534008B` (`structure_id`),
  KEY `IDX_97267AE67F71136D` (`tagStructure_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `TagStructure`
--

CREATE TABLE IF NOT EXISTS `TagStructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `TypeFormation`
--

CREATE TABLE IF NOT EXISTS `TypeFormation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `TypeFormation`
--

INSERT INTO `TypeFormation` (`id`, `type`) VALUES
(1, 'Formation'),
(2, 'Journée atelier'),
(3, 'Rencontre professionnelle'),
(4, 'Journée d''étude'),
(5, 'Journée de visite');

-- --------------------------------------------------------

--
-- Structure de la table `TypePersonne`
--

CREATE TABLE IF NOT EXISTS `TypePersonne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `TypePersonne`
--

INSERT INTO `TypePersonne` (`id`, `type`) VALUES
(1, 'Intervenant'),
(2, 'Stagiaire'),
(3, 'Signataire');

-- --------------------------------------------------------

--
-- Structure de la table `TypeStructure`
--

CREATE TABLE IF NOT EXISTS `TypeStructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `TypeStructure`
--

INSERT INTO `TypeStructure` (`id`, `type`) VALUES
(1, 'Organisme Financeur'),
(2, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `nom`, `prenom`, `login`, `mail`, `password`, `admin`) VALUES
(1, 'Runge', 'Etienne', 'etienne', 'etienne.runge@gmail.com', 'j0R8LEaE/2cRAm/yq+ca2vF1tChqHb6YF6fZwauZdv8Zqr7f5l4f77OVO723ZZUB22V1FdincsAyMOe4K1wbXw==', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD CONSTRAINT `FK_C2B1A31CC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `TypeFormation` (`id`);

--
-- Contraintes pour la table `formation_formule`
--
ALTER TABLE `formation_formule`
  ADD CONSTRAINT `FK_25A3D9E32A68F4D1` FOREIGN KEY (`formule_id`) REFERENCES `Formule` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_25A3D9E35200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD CONSTRAINT `FK_D80C7901A2ACEBCC` FOREIGN KEY (`convention_id`) REFERENCES `Convention` (`id`),
  ADD CONSTRAINT `FK_D80C7901AD890511` FOREIGN KEY (`formationformule_id`) REFERENCES `formation_formule` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `inscription_personnes`
--
ALTER TABLE `inscription_personnes`
  ADD CONSTRAINT `FK_8DA13C335DAC5993` FOREIGN KEY (`inscription_id`) REFERENCES `Inscription` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8DA13C33A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `Personne` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ModeleLogistique`
--
ALTER TABLE `ModeleLogistique`
  ADD CONSTRAINT `FK_697A9921AD890511` FOREIGN KEY (`formationformule_id`) REFERENCES `formation_formule` (`id`);

--
-- Contraintes pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD CONSTRAINT `FK_F6B8ABB94DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `Adresse` (`id`),
  ADD CONSTRAINT `FK_F6B8ABB9C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `TypePersonne` (`id`);

--
-- Contraintes pour la table `ReponsesLogistique`
--
ALTER TABLE `ReponsesLogistique`
  ADD CONSTRAINT `FK_1106717F5DAC5993` FOREIGN KEY (`inscription_id`) REFERENCES `Inscription` (`id`),
  ADD CONSTRAINT `FK_1106717FAC14B70A` FOREIGN KEY (`modele_id`) REFERENCES `ModeleLogistique` (`id`);

--
-- Contraintes pour la table `Structure`
--
ALTER TABLE `Structure`
  ADD CONSTRAINT `FK_EDF0B5494DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `Adresse` (`id`),
  ADD CONSTRAINT `FK_EDF0B549C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `TypeStructure` (`id`);

--
-- Contraintes pour la table `structures_tags`
--
ALTER TABLE `structures_tags`
  ADD CONSTRAINT `FK_97267AE62534008B` FOREIGN KEY (`structure_id`) REFERENCES `Structure` (`id`),
  ADD CONSTRAINT `FK_97267AE67F71136D` FOREIGN KEY (`tagStructure_id`) REFERENCES `TagStructure` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
