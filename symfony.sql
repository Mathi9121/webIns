-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 15 Janvier 2015 à 01:04
-- Version du serveur :  5.5.40-1
-- Version de PHP :  5.6.4-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `Template`
--

CREATE TABLE IF NOT EXISTS `Template` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Template`
--

INSERT INTO `Template` (`id`, `nom`, `type`, `date`, `contenu`, `filename`) VALUES
(7, 'Confirmation', 'pdf', '2015-01-14 23:08:00', '<div style="float: left; height: 100%;"><img src="http://www.ocim.fr/wp-content/themes/ocim/img/bandeau-lateral-courrier.png" alt="Bandeau-Ocim" /></div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;"><span style="font-size: 12pt;">Dijon, le {{date|date(''d/m/Y'')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /></span></div>\r\n<div style="vertical-align: top; text-align: right;"><span style="font-size: 12pt;"><br /></span>\r\n<div style="border: 2px solid grey; width: 9cm; float: right; padding: 0.15cm;">\r\n<div style="text-align: left;">{{ inscription.stagiaire.civilitepretty|capitalize }} {{ inscription.stagiaire.prenom|capitalize }} {{ inscription.stagiaire.nom|capitalize }}<br /> {{ inscription.stagiaire.adresse.nomStructure }}<br /> {{ inscription.stagiaire.adresse.adresse }}<br /> {{ inscription.stagiaire.adresse.adresseComplement }}<br /> {{ inscription.stagiaire.adresse.CP }} {{ inscription.stagiaire.adresse.ville }} {{ inscription.stagiaire.adresse.pays }}</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">{{ formation.type }}&nbsp;de l''OCIM</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">{{ formation.intitule }}</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">{{ formation.lieu }},&nbsp;{{ formation.dateText }} </span></p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">{{ inscription.stagiaire.civilitepretty }},</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">J''ai le plaisir de vous confirmer votre inscription au Stage "<strong>{{ formation.intitule }}</strong>" organis&eacute; par l''OCIM &agrave; {{ formation.lieu }}, {{ formation.dateText }}.<br /></span></p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">Je vous rappelle que lors de votre pr&eacute;inscription, vous avez opt&eacute; pour le forfait &agrave; {{ inscription.formationformule.formule.tarif }} euros, ({{ inscription.formationformule.formule.description }}).</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">Vous trouverez ci-joint(s) :</span></p>\r\n<ul style="margin-left: 2cm;">\r\n<li style="text-align: left;"><span style="font-size: 12pt;">Le programme de la formation.</span></li>\r\n<li style="text-align: left;"><span style="font-size: 12pt;">Votre formulaire de pr&eacute;-inscription &agrave; compl&eacute;ter pour validation du dossier.</span></li>\r\n<li style="text-align: left;"><span style="font-size: 12pt;">Une fiche logistique &agrave; compl&eacute;ter et &agrave; retourner au plus vite.</span></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: 12pt;">Un courriel pr&eacute;sentant toutes les informations pratiques vous sera transmis une semaine avant le s&eacute;minaire.</span></p>\r\n<p><span style="font-size: 12pt;">Si vous &eacute;tiez dans l''impossibilit&eacute; de suivre ce s&eacute;minaire, je vous remercie de bien vouloir m''en informer au plus vite.</span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style="font-size: 12pt;">Avec mes meilleures salutations.</span></p>\r\n<p><span style="font-size: 12pt;">Laure FERDJANI,<br />Responsable Logistique.</span></p>', 'Confirmation - {{inscription.stagiaire.nom}} - {{inscription.stagiaire.prenom}}'),
(14, 'Devis', 'pdf', '2015-01-15 00:52:15', '<div style="float: left; height: 100%;"><img src="http://www.ocim.fr/wp-content/themes/ocim/img/bandeau-lateral-courrier.png" alt="Bandeau-Ocim" /></div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;"><span style="font-size: 12pt;">Dijon, le {{date|date(''d/m/Y'')}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>\r\n<div style="vertical-align: top; text-align: right;"><br />\r\n<div style="border: 2px solid grey; width: 9cm; float: right; padding: 0.15cm;">\r\n<div style="text-align: left;"><span style="font-size: 12pt;">{{ inscription.signataire.adresse.nomStructure }}</span><br /><span style="font-size: 12pt;"> {{ inscription.signataire.adresse.adresse }}</span><br /><span style="font-size: 12pt;"> {{ inscription.signataire.adresse.adresseComplement }}</span><br /><span style="font-size: 12pt;"> {{ inscription.signataire.adresse.CP }} {{ inscription.signataire.adresse.ville }} {{ inscription.signataire.adresse.pays }}</span></div>\r\n</div>\r\n</div>\r\n<p><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<h2 style="text-align: center;"><span style="font-size: 12pt;">DEVIS DE FORMATION</span></h2>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">Participation de&nbsp;{{ inscription.stagiaire.civilitepretty }}&nbsp;{{ inscription.stagiaire.prenom }} {{ inscription.stagiaire.nom }},</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">Au Stage "<strong>{{ formation.intitule }}</strong>" organis&eacute; par l''OCIM &agrave;<strong> {{ formation.lieu }},&nbsp;{{ formation.dateText }}</strong></span></p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 14pt;"><strong>&nbsp;Co&ucirc;t total :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ inscription.formationformule.formule.tarif }} euros</strong></span></p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 12pt;">Fait &agrave; Dijon, le {{date|date(''d/m/Y'')}}</span></p>\r\n<p style="text-align: right;"><span style="font-size: 12pt;">Laure FERDJANI,<br />Responsable Logistique.</span></p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: 12pt;">L''OCIM est reconnu en tant qu''organisme de formation public sous le n&deg;26.21.P0016.21.<br />N&deg; de SIRET : 192 112 373 00449 / Code APE 803 Z</span></p>\r\n<p style="text-align: left;"><span style="color: #ff0000;"><em><span style="font-size: 10pt;">Attention ! Une demande de devis n''est pas une demande d''inscription.<br />Pour vous pr&eacute;-inscrire en ligne : <a href="http://www.ocim.fr">http://www.ocim.fr</a>.</span></em></span></p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;">Minist&egrave;re de l''Enseignement sup&eacute;rieur et de la Recherche<br />Universit&eacute; de Bourgogne</span></p>', 'Confirmation - {{inscription.stagiaire.nom}} - {{inscription.stagiaire.prenom}}');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Template`
--
ALTER TABLE `Template`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Template`
--
ALTER TABLE `Template`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
