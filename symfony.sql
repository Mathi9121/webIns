-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 07 Novembre 2014 à 17:47
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `Adresse`
--

INSERT INTO `Adresse` (`id`, `nomStructure`, `adresse`, `adresseComplement`, `CP`, `ville`, `pays`) VALUES
(1, NULL, '23 Rue des Balkans', '', '75020', 'Paris', NULL),
(2, 'Traces', '23 rue des Balkans', NULL, '75020', 'PARIS', NULL),
(3, 'Musées d''art et d''histoire', 'Bd Jacques Dalcroze - CP 3432', NULL, '1211', 'GENEVE 3 (Suisse)', NULL),
(4, 'CCSTI Grenoble - La Casemate', '1 Place Saint-Laurent', NULL, '38000', 'GRENOBLE', NULL),
(5, 'Muséum d''Histoire naturelle', '1 rue Dolomieu', NULL, '38000', 'GRENOBLE', NULL),
(6, NULL, 'CC-04-1051', '', '77431', 'Marne-la-Vallée', NULL),
(7, 'Cité de l''Economie et de la Monnaie', '48-50 rue Notre Dame des Victoires', NULL, '75002', 'PARIS', NULL),
(8, 'Musée de la Vie wallonne', 'Cour des Mineurs', NULL, '4670', 'LIEGE (Belgique)', NULL),
(9, 'Château-Fort de Guise', '', NULL, '2120', 'GUISE', NULL),
(10, 'particulière', '636 route du By', NULL, '74930', 'SCIENTRIER', NULL),
(11, 'Universcience - Cité des Sciences et de l''industrie', 'DMSE-DSIT - 30 avenue Corentin Cariou (Niv 0)', NULL, '75930', 'PARIS', NULL),
(12, 'Universcience', '30 avenue Corentin Cariou', NULL, '75930', 'PARIS Cedex 19', NULL),
(13, NULL, '46 Rue des Iles', '', '74000', 'Annecy', NULL),
(14, 'La Turbine Sciences', '3, rue des Tisserands', NULL, '74960', 'CRAN-GEVRIER', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Convention`
--

CREATE TABLE IF NOT EXISTS `Convention` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edition` date DEFAULT NULL,
  `envoiPresidentU2ex` date DEFAULT NULL,
  `retourPresidentU2ex` date DEFAULT NULL,
  `envoiOrganisme2ex` date DEFAULT NULL,
  `retourOrganisme1ex` date DEFAULT NULL,
  `envoiPresidentU1ex` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `Convention`
--

INSERT INTO `Convention` (`id`, `numero`, `edition`, `envoiPresidentU2ex`, `retourPresidentU2ex`, `envoiOrganisme2ex`, `retourOrganisme1ex`, `envoiPresidentU1ex`) VALUES
(1, '2014/07/128', '2014-07-22', '2014-07-23', '2014-08-26', '2014-08-27', '2014-09-05', '2014-10-29'),
(2, '2014/06/124', '2014-06-25', '2014-06-26', '2014-07-01', '2014-07-02', '2014-07-17', '2014-07-21'),
(3, '2014/06/125', '2014-06-25', '2014-06-26', '2014-07-01', '2014-07-02', '2014-07-18', '2014-07-21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

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
-- Structure de la table `formationformule_modele`
--

CREATE TABLE IF NOT EXISTS `formationformule_modele` (
  `formationformule_id` int(11) NOT NULL,
  `modele_id` int(11) NOT NULL,
  PRIMARY KEY (`formationformule_id`,`modele_id`),
  KEY `IDX_6F857ABEAD890511` (`formationformule_id`),
  KEY `IDX_6F857ABEAC14B70A` (`modele_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `formationformule_modele`
--

INSERT INTO `formationformule_modele` (`formationformule_id`, `modele_id`) VALUES
(352, 1),
(352, 2),
(352, 3),
(352, 4),
(352, 5),
(353, 1),
(353, 2),
(353, 3),
(353, 4),
(353, 5),
(353, 6),
(353, 7),
(353, 8),
(353, 9),
(353, 10),
(353, 11);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=376 ;

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
(16, 'sans hébergement, repas du midi inclus', '700', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Inscription`
--

CREATE TABLE IF NOT EXISTS `Inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `convention_id` int(11) DEFAULT NULL,
  `formationformule_id` int(11) DEFAULT NULL,
  `dateInscription` datetime NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attentes` longtext COLLATE utf8_unicode_ci NOT NULL,
  `statutOrgFinanceur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `statutConvention` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ordre` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D80C7901A2ACEBCC` (`convention_id`),
  KEY `IDX_D80C7901AD890511` (`formationformule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `Inscription`
--

INSERT INTO `Inscription` (`id`, `convention_id`, `formationformule_id`, `dateInscription`, `statut`, `attentes`, `statutOrgFinanceur`, `statutConvention`, `hash`, `ordre`) VALUES
(1, 1, 353, '2014-10-29 16:14:56', 'accepté', 'Avec cette formation j''espère pouvoir développer des compétences dans la gestion de projets spécifiques de type participatifs. J''aimerai aussi avoir une vision globale du réseau national des acteurs des projets participatifs. ', NULL, NULL, 'e88eccfd2aeb9ad4d3f3d7aa18e064770f904ac66c7421264dbf64704e7edde5', NULL),
(2, NULL, 353, '2014-10-29 16:14:56', 'accepté', 'Savoir mettre en place et projet participatif et l''évaluer dans le cadre du secteur de médiation culturelle. ', NULL, NULL, '708e0f51d6cb0df50a90f0e7eff57ed71b3231262b2653e9da2df3580a077d5e', NULL),
(3, NULL, 352, '2014-10-29 16:14:56', 'en attente', 'En savoir plus sur ce sujet et découvrir des expériences réalisées autour de ce thème. Quelles sont aussi les limites d''un projet participatif ?', NULL, NULL, 'ab29469d63b3f5eaad987a13a4baf0331e69dd258778ea442434c3b598837ed1', NULL),
(4, NULL, 352, '2014-10-29 16:14:56', 'accepté', 'Développement des compétences. ', NULL, NULL, 'f50e0a20ac1e7fda0f8d6608b3f5925f82890428d4773a3f878c93a790f8d518', NULL),
(5, 2, 352, '2014-10-29 16:14:56', 'accepté', 'Repérer les motivations pour savoir quand, comment et sur quoi mobiliser. découvrir les expériences réussies et avortées (benchmark). Aborder la question des évaluations de ces pratiques et de la reconnaissance à offrir en retour. ', NULL, NULL, 'c2f08869b23d62f48d741a609162746350512acd5164bad18d3c42e8e9be154f', NULL),
(6, NULL, 353, '2014-10-29 16:14:56', 'accepté', 'Au sein d''un musée de société, nous désirons développer les projets participatifs et leur donner de nouvelles directions. Cette formation enrichira nos pratiques professionnelles et permettra des échanges très riches de sens, comme lors de chacune des formations. ', NULL, NULL, 'ae57fc329b55b889510b6f746b9df2d5ba525122c5b97b1603ec6e3b33ee947c', NULL),
(7, NULL, 353, '2014-10-29 16:14:56', 'accepté', 'Apprendre à penser et concevoir un projet participatif cohérent, qui permettrait de travailler sur certains aspects de la promotion du Château-Fort de Guise avec les habitants de la ville et des environs ; tout en les impliquant dans la conservation et la valorisation de leur patrimoine. ', NULL, NULL, '338a08a657c3ffd297197a24994179b064956114c807fe30c492f29325754a68', NULL),
(8, NULL, 353, '2014-10-29 16:14:56', 'annulé', 'Découvrir des méthodes de participation active autour d''expositions comme la mienne sur le Développement Durable, et la Biodiversité Malgache destinée aux Jeunes et moins jeunes Français et Européens.', NULL, NULL, '2e1350888f42ae4e52eeb08ea5258c6e06096d33874d9e7f8dcb28d156aa8a5e', NULL),
(9, NULL, 353, '2014-10-29 16:14:56', 'accepté', '* Décortiquer le processus de construction d’un projet culturel participatif * Analyser les enjeux, les avantages, les inconvénients et les limites de ce type de projet * Expérimenter et acquérir de nouvelles pratiques méthodologiques et pratiques éprouvées sur le terrain ', NULL, NULL, '0c3b268d1f21cf01d347333bd05afae57bbdc81fc412130ddbd16a4ab58efb3e', NULL),
(10, NULL, 353, '2014-10-29 16:14:56', 'accepté', '* Connaitre les différentes étapes et outils à mettre en place * Connaître Les différents types de projet participatif * Cerner les publics envisageables\n* Connaître les différents acteurs à intégrer * Quels sont les partenaires envisageables à solliciter ', NULL, NULL, '1067b6cb6a3293180a5f56bb29598685056ea50ab741b017b88348727459d606', NULL),
(11, 3, 353, '2014-10-29 16:14:56', 'accepté', 'Appréhender avec plus de précision les différentes typologies de projets et/ou actions participatifs, ainsi que les échelles d''application possibles.\nConnaître le(s) processus d''organisation et construction d''un projet participatif. ', NULL, NULL, '1f760d89250fee57287704a750cc482244d02a57cc103df4c91d95b5fcc05cdd', NULL);

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

--
-- Contenu de la table `inscription_personnes`
--

INSERT INTO `inscription_personnes` (`inscription_id`, `personne_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(1, 12),
(5, 13),
(11, 14);

-- --------------------------------------------------------

--
-- Structure de la table `Intervenants`
--

CREATE TABLE IF NOT EXISTS `Intervenants` (
  `formation_id` int(11) NOT NULL,
  `intervenant_id` int(11) NOT NULL,
  PRIMARY KEY (`formation_id`,`intervenant_id`),
  UNIQUE KEY `UNIQ_6191D938AB9A1716` (`intervenant_id`),
  KEY `IDX_6191D9385200282E` (`formation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ModeleLogistique`
--

CREATE TABLE IF NOT EXISTS `ModeleLogistique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `typeReponse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ordre` int(11) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_697A99215200282E` (`formation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Contenu de la table `ModeleLogistique`
--

INSERT INTO `ModeleLogistique` (`id`, `date`, `description`, `typeReponse`, `ordre`, `formation_id`) VALUES
(1, NULL, 'Arrivée', 'dateTime', 0, 39),
(2, NULL, 'Départ', 'text', 10, 39),
(3, '2014-09-16 00:00:00', 'Midi', 'bool', 2, 39),
(4, '2014-09-17 00:00:00', 'Midi', 'bool', 5, 39),
(5, '2014-09-18 00:00:00', 'Midi', 'bool', 8, 39),
(6, '2014-09-16 00:00:00', 'Nuit', 'bool', 1, 39),
(7, '2014-09-16 00:00:00', 'Soir', 'bool', 3, 39),
(8, '2014-09-17 00:00:00', 'Nuit', 'bool', 4, 39),
(9, '2014-09-17 00:00:00', 'Soir', 'bool', 6, 39),
(10, '2014-09-18 00:00:00', 'Nuit', 'bool', 7, 39),
(11, '2014-09-18 00:00:00', 'Nuit', 'bool', 9, 39);

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE IF NOT EXISTS `Personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_id` int(11) DEFAULT NULL,
  `civilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mailAdmin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_F6B8ABB94DE7DC5C` (`adresse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `Personne`
--

INSERT INTO `Personne` (`id`, `adresse_id`, `civilite`, `nom`, `prenom`, `fonction`, `tel`, `fax`, `mail`, `mailAdmin`, `discr`, `commentaire`) VALUES
(1, 2, 'Mlle', 'BARROIS DE SARIGNY', 'Charlotte', 'Responsable pôle Innovations et responsabilité sociétale', '01 43 48 36 96', NULL, 'charlotte.barrois-de-sarigny@groupe-traces.fr', 'traces@ens.fr', 'stagiaire', NULL),
(2, 3, 'Mme', 'BRUNSCHWIG', 'Murielle', 'Médiatrice culturelle', '41 22 418 25 88', NULL, 'murielle.brunschwig@ville-ge.ch', 'carole.baud@ville-ge.ch', 'stagiaire', NULL),
(3, 4, 'Mlle', 'CHERY', 'Anaïs', 'Stagiaire', '06 74 11 15 70', NULL, 'anais.chery.mail@gmail.com', 'anais.chery.mail@gmail.com', 'stagiaire', NULL),
(4, 5, 'Mr', 'DECORPS', 'Pascal', 'Responsable des publics', '04 76 44 95 33', NULL, 'pascal.decorps@ville-grenoble.fr', '', 'stagiaire', NULL),
(5, 7, 'Mlle', 'DRAHE', 'Charlotte', 'Responsable des Publics', '01 42 92 26 39', NULL, 'charlotte.drahe@banque-france.fr', 'martine.baraduc@banque-France.fr', 'stagiaire', NULL),
(6, 8, 'Mme', 'DRECHSEL', 'Anne', 'Attachée - responsable service Médiation culturelle', '04 237 90 85', NULL, 'anne.drechsel@provincedeliege.be', '', 'stagiaire', NULL),
(7, 9, 'Mlle', 'MATHOT', 'Emilie', 'Animatrice du patrimoine', '03 23 61 11 76', NULL, 'chateaudeguise@clubduvieuxmanoir.fr', 'compta@clubduvieuxmanoir.fr', 'stagiaire', NULL),
(8, 10, 'Mme', 'PAYEN', 'Françoise', 'Exposition personnelle Madagascar', '04 50 25 52 31', NULL, 'payen-francoise@wanadoo.fr', 'payen-francoise@wanadoo.fr', 'stagiaire', NULL),
(9, 11, 'Mlle', 'PONCET', 'Anaïs', 'Médiatrice scientifique', '01 40 05 80 99', NULL, 'anais.poncet@universcience.fr', '', 'stagiaire', NULL),
(10, 12, 'Mme', 'VERGÉ-FERRERI', 'Isabelle', 'Chargée de médiation scientifique', '01 40 05 83 75', NULL, 'isabelle.verge-ferreri@universcience.fr', 'olivier.persenot@universcience.fr', 'stagiaire', NULL),
(11, 14, 'Mr', 'VERJUS', 'Pierre-Marie', 'Médiateur scientifique', '04 50 08 17 00', NULL, 'pmverjus@agglo-annecy.fr', '', 'stagiaire', NULL),
(12, 1, 'Mme', 'BLANC', 'Marie', 'Directrice', NULL, NULL, NULL, NULL, 'signataire', NULL),
(13, 6, 'Mme', 'DUCRUEZET', 'Françoise', 'Directrice', NULL, NULL, NULL, NULL, 'signataire', NULL),
(14, 13, 'Mr', 'LENOIR', 'Sébastien', 'Directeur Général', NULL, NULL, NULL, NULL, 'signataire', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ReponsesLogistique`
--

CREATE TABLE IF NOT EXISTS `ReponsesLogistique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modele_id` int(11) DEFAULT NULL,
  `inscription_id` int(11) DEFAULT NULL,
  `reponse` tinyint(1) DEFAULT NULL,
  `reponseText` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1106717FAC14B70A` (`modele_id`),
  KEY `IDX_1106717F5DAC5993` (`inscription_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=264 ;

--
-- Contenu de la table `ReponsesLogistique`
--

INSERT INTO `ReponsesLogistique` (`id`, `modele_id`, `inscription_id`, `reponse`, `reponseText`, `date`) VALUES
(203, 3, 4, 1, NULL, NULL),
(204, 4, 4, 1, NULL, NULL),
(205, 5, 4, 1, NULL, NULL),
(206, 6, 2, 1, NULL, NULL),
(207, 4, 6, 1, NULL, NULL),
(208, 9, 1, 0, NULL, NULL),
(209, 10, 2, 0, NULL, NULL),
(210, 8, 6, 1, NULL, NULL),
(211, 7, 6, 1, NULL, NULL),
(212, 3, 2, 1, NULL, NULL),
(213, 6, 8, 1, NULL, NULL),
(214, 8, 8, 1, NULL, NULL),
(215, 10, 7, 0, NULL, NULL),
(216, 11, 6, 1, NULL, NULL),
(217, 5, 10, 1, NULL, NULL),
(218, 8, 9, 0, NULL, NULL),
(219, 6, 10, 1, NULL, NULL),
(220, 8, 11, 1, NULL, NULL),
(221, 10, 11, 1, NULL, NULL),
(222, 9, 9, 1, NULL, NULL),
(223, 4, 2, 0, NULL, NULL),
(224, 9, 2, 0, NULL, NULL),
(225, 4, 5, 1, NULL, NULL),
(226, 8, 1, 1, NULL, NULL),
(227, 6, 1, 1, NULL, NULL),
(228, 5, 1, 1, NULL, NULL),
(229, 11, 1, 1, NULL, NULL),
(230, 5, 6, 1, NULL, NULL),
(231, 3, 3, 1, NULL, NULL),
(232, 8, 7, 1, NULL, NULL),
(233, 8, 10, 0, NULL, NULL),
(234, 3, 1, 0, NULL, NULL),
(235, 7, 1, 1, NULL, NULL),
(236, 3, 9, 0, NULL, NULL),
(237, 3, 7, 1, NULL, NULL),
(238, 7, 7, 1, NULL, NULL),
(239, 6, 7, 1, NULL, NULL),
(240, 6, 6, 1, NULL, NULL),
(241, 6, 6, 1, NULL, NULL),
(242, 3, 6, 1, NULL, NULL),
(243, 7, 9, 1, NULL, NULL),
(244, 7, 10, 1, NULL, NULL),
(245, 4, 10, 1, NULL, NULL),
(246, 4, 9, 1, NULL, NULL),
(247, 9, 10, 1, NULL, NULL),
(248, 10, 10, 1, NULL, NULL),
(249, 10, 9, 0, NULL, NULL),
(250, 9, 7, 1, NULL, NULL),
(251, 9, 6, 1, NULL, NULL),
(252, 10, 1, 0, NULL, NULL),
(253, 3, 5, 1, NULL, NULL),
(254, 7, 2, 0, NULL, NULL),
(255, 9, 8, 1, NULL, NULL),
(256, 10, 8, 0, NULL, NULL),
(257, 5, 8, 1, NULL, NULL),
(258, 2, 4, NULL, '', NULL),
(259, 2, 5, NULL, '', NULL),
(260, 2, 1, NULL, '', NULL),
(261, 8, 2, 1, NULL, NULL),
(262, 4, 1, 1, NULL, NULL),
(263, 10, 6, 1, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `Structure`
--

INSERT INTO `Structure` (`id`, `adresse_id`, `type_id`, `nom`) VALUES
(9, 1, 1, 'TRACES'),
(10, 6, 2, 'Banque de France'),
(11, 13, 3, 'Communauté de l''Agglomération d''Annecy');

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

--
-- Contenu de la table `structures_tags`
--

INSERT INTO `structures_tags` (`structure_id`, `tagStructure_id`) VALUES
(9, 17),
(10, 18),
(11, 19);

-- --------------------------------------------------------

--
-- Structure de la table `TagStructure`
--

CREATE TABLE IF NOT EXISTS `TagStructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `TagStructure`
--

INSERT INTO `TagStructure` (`id`, `tag`) VALUES
(17, 'Association Loi 1901'),
(18, 'Institut de droit public'),
(19, 'Structure Intercommunale');

-- --------------------------------------------------------

--
-- Structure de la table `Template`
--

CREATE TABLE IF NOT EXISTS `Template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Template`
--

INSERT INTO `Template` (`id`, `nom`, `type`, `date`, `contenu`, `filename`) VALUES
(2, 'Template test', 'pdf', '2009-01-01 00:00:00', '<h1 style="text-align: center;"><strong><img src="http://tinymce.cachefly.net/4.1/plugins/emoticons/img/smiley-innocent.gif" alt="innocent" />CONVENTION n&deg;&nbsp;{{ inscription.convention.numero }}</strong></h1>\r\n<h2 style="text-align: center;"><strong>{{ inscription.attentes }} Formation</strong></h2>\r\n<p>Dur&eacute;e : {{ date_difference(formation.dateDebut, formation.dateFin) }}</p>\r\n<p>Entre les soussign&eacute;s :</p>\r\n<p>&nbsp;</p>\r\n<p>L''OCIM (Office de Coop&eacute;ration et d''Information Mus&eacute;ales) -</p>\r\n<p>Universit&eacute; de Bourgogne</p>\r\n<p>36, rue Chabot Charny</p>\r\n<p>21000 Dijon</p>\r\n<p>(Organisme de formation public reconnu sous le num&eacute;ro 26.21.P0016.21)</p>\r\n<p>&nbsp;</p>\r\n<p>&Eacute;tablissement Public &agrave; Caract&egrave;re Scientifique, Culturel et Professionnel repr&eacute;sent&eacute; par Monsieur Alain BONNIN, Pr&eacute;sident de l&rsquo;Universit&eacute; de Bourgogne</p>\r\n<p>&nbsp;</p>\r\n<p>d''une part</p>\r\n<p>&nbsp;</p>\r\n<p>et</p>\r\n<p>&nbsp;</p>\r\n<p>{{ inscription.signataire.adresse.structure.nom }}</p>\r\n<p>{{ inscription.signataire.adresse.adresseComplement }}</p>\r\n<p>{{ inscription.signataire.adresse.adresse }}</p>\r\n<p>{{ inscription.signataire.adresse.CP }} {{ inscription.signataire.adresse.ville }}</p>\r\n<p>{{ inscription.signataire.adresse.structure.nom }}&nbsp;repr&eacute;sent&eacute;(e) par&nbsp;{{ inscription.signataire.civilite }}&nbsp;{{ inscription.signataire.prenom }} {{ inscription.signataire.nom }}, {{ inscription.signataire.fonction }}</p>\r\n<p>&nbsp;</p>\r\n<p>d&rsquo;autre part,</p>\r\n<p>&nbsp;</p>\r\n<p>il est convenu ce qui suit :</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Article 1 :</strong></p>\r\n<p>Dans le cadre de ses actions de formation, l''OCIM-Universit&eacute; de Bourgogne organise {{ formation.dateText }}, &agrave; {{ formation.lieu }}, la formation <strong>{{ formation.intitule }}</strong>. Cette formation repr&eacute;sente un volume de {{ formation.nbHeures }}</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Article 2 :</strong></p>\r\n<p>L''OCIM-Universit&eacute; de Bourgogne accueillera dans cette formation le stagiaire suivant :</p>\r\n<p>{{ inscription.stagiaire.civilite }} {{ inscription.stagiaire.prenom }} {{ inscription.stagiaire.nom }}</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Article 3 :</strong></p>\r\n<p>Le co&ucirc;t global de la formation est&nbsp;{{ inscription.formationformule.formule.tarif }} &euro; par personne.</p>\r\n<p>En contre partie et &agrave; l''issue de la formation,&nbsp;{{ inscription.signataire.adresse.structure.nom }} s''engage &agrave; payer &agrave; l''OCIM-Universit&eacute; de Bourgogne les frais de participation p&eacute;dagogique qui se d&eacute;composent comme suit :</p>\r\n<p>Total des frais&nbsp;: {{ inscription.formationformule.formule.tarif }} &euro;</p>\r\n<p>Au vu d''une facture &eacute;mise par l''OCIM-Universit&eacute; de Bourgogne, {{ inscription.signataire.adresse.structure.nom }} se lib&eacute;rera de la somme due par imputation au cr&eacute;dit du r&eacute;gisseur de l''OCIM-Universit&eacute; de Bourgogne ouvert aupr&egrave;s de la Tr&eacute;sorerie g&eacute;n&eacute;rale de la C&ocirc;te d&rsquo;Or</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>&Eacute;tablissement&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Guichet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N&deg; de compte&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cl&eacute; RIP</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10071&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 21000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 00001006020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 15</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Article 4 :</strong></p>\r\n<p>En cas d''annulation par le participant sans que l''OCIM-Universit&eacute; de Bourgogne ne soit averti avant le d&eacute;but de la formation, l''OCIM-Universit&eacute; de Bourgogne pourra exiger le paiement de l''int&eacute;gralit&eacute; des frais de formation.</p>\r\n<p>Il est entendu que si l''OCIM-Universit&eacute; de Bourgogne annule la formation pour quelle que raison que ce soit, aucun paiement de frais de formation ne pourra &ecirc;tre demand&eacute;.</p>\r\n<p>En cas d&rsquo;annulation partielle de la formation, due par exemple &agrave; l&rsquo;absence impr&eacute;vue de l&rsquo;un des formateurs, le co&ucirc;t total (frais de participation, de restauration et d&rsquo;h&eacute;bergement) sera recalcul&eacute; au prorata de la dur&eacute;e effective de la formation.</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p><strong>Article 5 :</strong></p>\r\n<p>La pr&eacute;sente convention est &eacute;tablie pour la dur&eacute;e de la formation.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Article 6 :</strong></p>\r\n<p>Tous les diff&eacute;rends auxquels la pr&eacute;sente convention pourrait donner lieu seront r&eacute;solus par voie d''arbitrage selon les r&egrave;gles professionnelles de conciliation.</p>\r\n<p>&nbsp;</p>\r\n<p>&Agrave; Dijon, le {{ inscription.convention.edition|date(''d/m/Y'') }}</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Pour Le pr&eacute;sident de l&rsquo;Universit&eacute; de Bourgogne</p>\r\n<p>et par d&eacute;l&eacute;gation, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;{{ inscription.signataire.prenom }} {{ inscription.signataire.nom }}</p>\r\n<p>La Directrice G&eacute;n&eacute;rale des Services Adjointe,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ inscription.signataire.adresse.structure.nom }}</p>\r\n<p>Marie France MATHIEU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>Universit&eacute; de Bourgogne</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Catherine RUPPLI,</p>\r\n<p>Responsable Administrative,</p>\r\n<p>OCIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>', 'Convention - {{inscription.convention.numero}} - {{inscription.stagiaire.nom}} - {{inscription.stagiaire.prenom}}');

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
-- Structure de la table `TypeStructure`
--

CREATE TABLE IF NOT EXISTS `TypeStructure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `TypeStructure`
--

INSERT INTO `TypeStructure` (`id`, `type`) VALUES
(1, 'Association Loi 1901'),
(2, 'Institut de droit public'),
(3, 'Structure Intercommunale');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `nom`, `prenom`, `login`, `mail`, `password`, `admin`) VALUES
(1, 'Runge', 'Etienne', 'etienne', 'etienne.runge@gmail.com', 'j0R8LEaE/2cRAm/yq+ca2vF1tChqHb6YF6fZwauZdv8Zqr7f5l4f77OVO723ZZUB22V1FdincsAyMOe4K1wbXw==', 1),
(2, 'Ferdjani', 'laure', 'laure', 'laure.ferdjani@u-bourgogne.fr', '+g80KqpCE3uSreT4ilESRDO7P0tZTmXnbcqEna2xh03mdxLe4RMzMXdjeX9T9UHI9B2pG0zXF3c4Ce0lx9fAmg==', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD CONSTRAINT `FK_C2B1A31CC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `TypeFormation` (`id`);

--
-- Contraintes pour la table `formationformule_modele`
--
ALTER TABLE `formationformule_modele`
  ADD CONSTRAINT `FK_6F857ABEAC14B70A` FOREIGN KEY (`modele_id`) REFERENCES `ModeleLogistique` (`id`),
  ADD CONSTRAINT `FK_6F857ABEAD890511` FOREIGN KEY (`formationformule_id`) REFERENCES `formation_formule` (`id`);

--
-- Contraintes pour la table `formation_formule`
--
ALTER TABLE `formation_formule`
  ADD CONSTRAINT `FK_25A3D9E35200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_25A3D9E32A68F4D1` FOREIGN KEY (`formule_id`) REFERENCES `Formule` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD CONSTRAINT `FK_D80C7901AD890511` FOREIGN KEY (`formationformule_id`) REFERENCES `formation_formule` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D80C7901A2ACEBCC` FOREIGN KEY (`convention_id`) REFERENCES `Convention` (`id`);

--
-- Contraintes pour la table `inscription_personnes`
--
ALTER TABLE `inscription_personnes`
  ADD CONSTRAINT `FK_8DA13C33A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `Personne` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8DA13C335DAC5993` FOREIGN KEY (`inscription_id`) REFERENCES `Inscription` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Intervenants`
--
ALTER TABLE `Intervenants`
  ADD CONSTRAINT `FK_6191D938AB9A1716` FOREIGN KEY (`intervenant_id`) REFERENCES `Personne` (`id`),
  ADD CONSTRAINT `FK_6191D9385200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`);

--
-- Contraintes pour la table `ModeleLogistique`
--
ALTER TABLE `ModeleLogistique`
  ADD CONSTRAINT `FK_697A99215200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`);

--
-- Contraintes pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD CONSTRAINT `FK_F6B8ABB94DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `Adresse` (`id`);

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
  ADD CONSTRAINT `FK_EDF0B549C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `TypeStructure` (`id`),
  ADD CONSTRAINT `FK_EDF0B5494DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `Adresse` (`id`);

--
-- Contraintes pour la table `structures_tags`
--
ALTER TABLE `structures_tags`
  ADD CONSTRAINT `FK_97267AE67F71136D` FOREIGN KEY (`tagStructure_id`) REFERENCES `TagStructure` (`id`),
  ADD CONSTRAINT `FK_97267AE62534008B` FOREIGN KEY (`structure_id`) REFERENCES `Structure` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
