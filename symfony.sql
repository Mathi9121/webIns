-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 16 Janvier 2015 à 16:44
-- Version du serveur :  5.5.40-1
-- Version de PHP :  5.6.4-4

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
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Template`
--

INSERT INTO `Template` (`id`, `nom`, `type`, `date`, `filename`, `contenu`) VALUES
(1, 'Convention - base', 'convention', '2015-01-04 19:10:10', '{{formation.id}} - Convention {{inscription.convention.numeroToString}} {{inscription.stagiaire.nom}} {{inscription.stagiaire.prenom}}', '<p class="western" style="margin-right: -0cm; margin-bottom: 0cm; line-height: 100%;" align="center"><font face="Gill Sans MT, sans-serif"><font style="font-size: 14pt;" size="4"><strong><img src="http://www.ocim.fr/wp-content/themes/ocim/img/logo.png" alt="Logo-Ocim" width="168" height="61" /></strong></font></font></p>\r\n<p class="western" style="margin-right: -0cm; margin-bottom: 0cm; line-height: 100%;" align="center"><font face="Gill Sans MT, sans-serif"><font style="font-size: 14pt;" size="4"><strong>CONVENTION n&deg; {{ inscription.convention.numeroToString }}<br /></strong></font></font></p>\r\n<p class="western" style="margin-bottom: 0cm; line-height: 100%;" align="center"><font face="Gill Sans MT, sans-serif"><font style="font-size: 14pt;" size="4"><strong>Formation</strong></font></font></p>\r\n<p class="western" style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>\r\n<p style="margin-bottom: 0cm; line-height: 100%;">&nbsp;</p>\r\n<p align="justify"><span style="font-size: 10pt;">Entre les soussign&eacute;s :</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">L''OCIM (Office de Coop&eacute;ration et d''Information Mus&eacute;ales) -</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Universit&eacute; de Bourgogne</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">36, rue Chabot Charny</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">21000 Dijon</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">(Organisme de formation public reconnu sous le num&eacute;ro 26.21.P0016.21)</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&Eacute;tablissement Public &agrave; Caract&egrave;re Scientifique, Culturel et Professionnel</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">repr&eacute;sent&eacute; par Monsieur Alain BONNIN, Pr&eacute;sident de l&rsquo;Universit&eacute; de Bourgogne</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">d''une part</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">et</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">{{ inscription.signataire.adresse.adresse }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">{{ inscription.signataire.adresse.adresseComplement }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">{{ inscription.signataire.adresse.CP }} {{ inscription.signataire.adresse.ville }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Collectivit&eacute; Territoriale repr&eacute;sent&eacute;(e) par {{ inscription.signataire.civilite }} {{ inscription.signataire.prenom }} {{ inscription.signataire.nom }} {{ inscription.signataire.fonction }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">d&rsquo;autre part,</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">il est convenu ce qui suit :</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 1 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">Dans le cadre de ses actions de formation, l''OCIM-Universit&eacute; de Bourgogne organise {{ formation.dateText }}, &agrave;, la formation {{ formation.intitule }}. Cette formation repr&eacute;sente un volume de {{ formation.nbHeures }} heures.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 2 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">L''OCIM-Universit&eacute; de Bourgogne accueillera dans cette formation le stagiaire suivant :</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">{{ inscription.stagiaire.civilite }} {{ inscription.stagiaire.prenom }} {{ inscription.stagiaire.nom }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 3 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">Le co&ucirc;t global de la formation est &laquo;Total_des_Frais&raquo; &euro; par personne.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">En contre partie et &agrave; l''issue de la formation, &laquo;Organisme_Financeur&raquo; s''engage &agrave; payer &agrave; l''OCIM-Universit&eacute; de Bourgogne les frais de participation, de restauration et d''h&eacute;bergement qui se d&eacute;composent comme suit :</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Total des frais&nbsp;:&nbsp;{{ inscription.formationformule.formule.tarif }} &euro;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Au vu d''une facture &eacute;mise par l''OCIM-Universit&eacute; de Bourgogne, &laquo;Organisme_Financeur&raquo; se lib&eacute;rera de la somme due par imputation au cr&eacute;dit du r&eacute;gisseur de l''OCIM-Universit&eacute; de Bourgogne ouvert aupr&egrave;s de la Tr&eacute;sorerie g&eacute;n&eacute;rale de la C&ocirc;te d&rsquo;Or</span></p>\r\n<p align="justify"><span style="font-size: 10pt;"> &Eacute;tablissement Guichet N&deg; de compte Cl&eacute; RIP</span></p>\r\n<p align="justify"><span style="font-size: 10pt;"> 10071 21000 00001006020 15</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 4 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">En cas d''annulation par le participant sans que l''OCIM-Universit&eacute; de Bourgogne ne soit averti avant le d&eacute;but de la formation, l''OCIM-Universit&eacute; de Bourgogne pourra exiger le paiement de l''int&eacute;gralit&eacute; des frais de formation.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Il est entendu que si l''OCIM-Universit&eacute; de Bourgogne annule la formation pour quelle que raison que ce soit, aucun paiement de frais de formation ne pourra &ecirc;tre demand&eacute;.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">En cas d&rsquo;annulation partielle de la formation, due par exemple &agrave; l&rsquo;absence impr&eacute;vue de l&rsquo;un des formateurs, le co&ucirc;t total (frais de participation, de restauration et d&rsquo;h&eacute;bergement) sera recalcul&eacute; au prorata de la dur&eacute;e effective de la formation.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 5 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">La pr&eacute;sente convention est &eacute;tablie pour la dur&eacute;e de la formation.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<h2 align="justify"><span style="font-size: 10pt;">Article 6 :</span></h2>\r\n<p align="justify"><span style="font-size: 10pt;">Tous les diff&eacute;rends auxquels la pr&eacute;sente convention pourrait donner lieu seront r&eacute;solus par voie d''arbitrage selon les r&egrave;gles professionnelles de conciliation.</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&Agrave; Dijon, {{ inscription.convention.edition|date(''d/m/Y'') }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Pour Le pr&eacute;sident de L&rsquo;Universit&eacute; de Bourgogne</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Et par d&eacute;l&eacute;gation, {{ inscription.signataire.prenom }} {{ inscription.signataire.nom }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">L&rsquo;Adjointe &agrave; la Directrice G&eacute;n&eacute;rale des Services, {{ inscription.signataire.adresse.nomStructure }}</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Marie France MATHIEU, </span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Universit&eacute; de Bourgogne</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp; <br /></span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Catherine RUPPLI,</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">Responsable Administrative,</span></p>\r\n<p align="justify"><span style="font-size: 10pt;">OCIM </span></p>'),
(15, 'Devis', 'pdf', '2015-01-15 14:58:52', 'Devis - {{inscription.stagiaire.nom}} - {{inscription.stagiaire.prenom}}', '<table style="height: 100%; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td style="vertical-align: top;"><span style="font-size: 10pt;"><img src="http://www.ocim.fr/wp-content/themes/ocim/img/bandeau-lateral-courrier.png" alt="Bandeau-Ocim" width="185" height="1080" /></span></td>\r\n<td style="vertical-align: top;">\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;">&nbsp;</div>\r\n<div style="vertical-align: top; text-align: right;"><span style="font-size: 10pt;">Dijon, le {{date}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></div>\r\n<div style="vertical-align: top; text-align: right;"><span style="font-size: 10pt;">&nbsp;</span></div>\r\n<div style="float: right; margin-right: 2cm; border: 1pt solid grey; width: 8cm; padding: 0.15cm;">{{ inscription.signataire.adresse.nomStructure }}<br /><span style="font-size: 10pt;"> {{ inscription.signataire.adresse.adresse }}</span><br /><span style="font-size: 10pt;"> {{ inscription.signataire.adresse.adresseComplement }}</span><br /><span style="font-size: 10pt;"> {{ inscription.signataire.adresse.CP }} {{ inscription.signataire.adresse.ville }} {{ inscription.signataire.adresse.pays }}</span></div>\r\n<h2 style="text-align: center;">&nbsp;</h2>\r\n<h2 style="text-align: center;">&nbsp;</h2>\r\n<h2 style="text-align: center;">&nbsp;</h2>\r\n<h2 style="text-align: center;">&nbsp;</h2>\r\n<h2 style="text-align: center;"><span style="font-size: 10pt;">DEVIS DE FORMATION</span></h2>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Participation de&nbsp;{{ inscription.stagiaire.civilitepretty }}&nbsp;{{ inscription.stagiaire.prenom }} {{ inscription.stagiaire.nom }},</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Au Stage "<strong>{{ formation.intitule }}</strong>" organis&eacute; par l''OCIM &agrave;<strong> {{ formation.lieu }},&nbsp;{{ formation.dateText }}</strong></span></p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;"><strong>&nbsp;Co&ucirc;t total :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ inscription.formationformule.formule.tarif }} euros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /></strong></span></p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;">Fait &agrave; Dijon, le {{date}}</span></p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;">Laure FERDJANI,<br />Responsable Logistique.</span></p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;">&nbsp;</p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">L''OCIM est reconnu en tant qu''organisme de formation public sous le n&deg;26.21.P0016.21.<br />N&deg; de SIRET : 192 112 373 00449 / Code APE 803 Z</span></p>\r\n<p style="text-align: left;"><span style="color: #ff0000; font-size: 10pt;"><em>Attention ! Une demande de devis n''est pas une demande d''inscription.<br />Pour vous pr&eacute;-inscrire en ligne : <a href="http://www.ocim.fr">http://www.ocim.fr</a>.</em></span></p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;">Minist&egrave;re de l''Enseignement sup&eacute;rieur et de la Recherche<br />Universit&eacute; de Bourgogne</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(18, 'Confirmation', 'pdf', '2015-01-16 16:11:31', 'Confirmation - {{inscription.stagiaire.nom}} - {{inscription.stagiaire.prenom}}', '<table style="height: 100%; width: 100%;">\r\n<tbody>\r\n<tr>\r\n<td style="vertical-align: top;"><span style="font-size: 10pt;"><img src="http://www.ocim.fr/wp-content/themes/ocim/img/bandeau-lateral-courrier.png" alt="Bandeau-Ocim" width="185" height="1080" /></span></td>\r\n<td style="vertical-align: top;">\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;"><span style="font-size: 10pt;">&nbsp;&agrave; Dijon, le {{ date }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<div style="float: right; margin-right: 2cm; border: 1pt solid grey; width: 8cm; padding: 0.15cm;">\r\n<div style="text-align: left;"><span style="font-size: 10pt;">{{ inscription.stagiaire.civilitepretty|capitalize }} {{ inscription.stagiaire.prenom|capitalize }} {{ inscription.stagiaire.nom|capitalize }}</span><br /><span style="font-size: 10pt;"> {{ inscription.stagiaire.adresse.nomStructure }}</span><br /><span style="font-size: 10pt;"> {{ inscription.stagiaire.adresse.adresse }}</span><br /><span style="font-size: 10pt;"> {{ inscription.stagiaire.adresse.adresseComplement }}</span><br /><span style="font-size: 10pt;"> {{ inscription.stagiaire.adresse.CP }} {{ inscription.stagiaire.adresse.ville }} {{ inscription.stagiaire.adresse.pays }}</span></div>\r\n</div>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">{{ formation.type }}&nbsp;de l''OCIM</span><br /> <span style="font-size: 10pt;">{{ formation.intitule }}</span><br /> <span style="font-size: 10pt;">{{ formation.lieu }},&nbsp;{{ formation.dateText }}</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">{{ inscription.stagiaire.civilitepretty }},</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">J''ai le plaisir de vous confirmer votre inscription au Stage "<strong>{{ formation.intitule }}</strong>" organis&eacute; par l''OCIM &agrave; {{ formation.lieu }}, {{ formation.dateText }}.<br /></span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Je vous rappelle que lors de votre pr&eacute;inscription, vous avez opt&eacute; pour le forfait &agrave; {{ inscription.formationformule.formule.tarif }} euros, ({{ inscription.formationformule.formule.description }}).</span></p>\r\n<p style="text-align: left;"><span style="font-size: 10pt;">Vous trouverez ci-joint(s) :</span></p>\r\n<ul style="margin-left: 2cm;">\r\n<li style="text-align: left;"><span style="font-size: 10pt;">Le programme de la formation.</span></li>\r\n<li style="text-align: left;"><span style="font-size: 10pt;">Votre formulaire de pr&eacute;-inscription &agrave; compl&eacute;ter pour validation du dossier.</span></li>\r\n<li style="text-align: left;"><span style="font-size: 10pt;">Une fiche logistique &agrave; compl&eacute;ter et &agrave; retourner au plus vite.</span></li>\r\n</ul>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">Un courriel pr&eacute;sentant toutes les informations pratiques vous sera transmis une semaine avant le s&eacute;minaire.</span></p>\r\n<p><span style="font-size: 10pt;">Si vous &eacute;tiez dans l''impossibilit&eacute; de suivre ce s&eacute;minaire, je vous remercie de bien vouloir m''en informer au plus vite.</span></p>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">&nbsp;</span></p>\r\n<p><span style="font-size: 10pt;">Avec mes meilleures salutations.</span></p>\r\n<p><span style="font-size: 10pt;">Laure FERDJANI,<br />Responsable Logistique.</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>'),
(19, 'Preinscription', 'pdf', '2015-01-16 16:38:54', 'Préinscription -', '<h1>Formation<img style="float: right;" src="http://www.ocim.fr/wp-content/themes/ocim/img/logo.png" alt="Logo-Ocim" width="168" height="61" /></h1>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div style="clear: both;">\r\n<div style="float: left;">\r\n<h2>❒ Inscription</h2>\r\n<p>a obtenu l''accord de prise <br />en charg&micro;e et s''inscrit &agrave;</p>\r\n</div>\r\n<div style="float: right; width: 10cm; border: 1pt solid grey; padding: 5px;">\r\n<p>{{ formation.intitule }}<br />-&nbsp;{{ formation.type }} -</p>\r\n<p>{{ formation.lieu }}, {{ formation.dateText }}</p>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style="color: #000000; background-color: #ddd; border: 1pt solid black;">Stagiaire</p>\r\n<p>{{ inscription.stagiaire.civilitepretty }} {{ inscription.stagiaire.prenom }} {{ inscription.stagiaire.nom }}</p>\r\n<p>&Eacute;tablissement : {{ inscription.stagiaire.adresse.nomStructure }}</p>\r\n<p>Fonction : {{ inscription.stagiaire.fonction }}</p>\r\n<p>Adresse : {{ inscription.stagiaire.adresse.adresse }} {{ inscription.stagiaire.adresse.adresseComplement }} - {{ inscription.stagiaire.adresse.adresseComplement }} {{ inscription.stagiaire.adresse.CP }} {{ inscription.stagiaire.adresse.ville }} {{ inscription.stagiaire.adresse.pays }}</p>\r\n<p>T&eacute;l&eacute;phone : {{ inscription.stagiaire.tel }}</p>\r\n<p>T&eacute;l&eacute;copieur : {{ inscription.stagiaire.fax }}</p>\r\n<p>Courriel : {{ inscription.stagiaire.mail }}</p>\r\n<p>Vos attentes pour cette formation :&nbsp;{{ inscription.attentes }}</p>\r\n<p>&nbsp;</p>');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
