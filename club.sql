SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `activites`;
CREATE TABLE IF NOT EXISTS `activites` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Liste des activit�s' AUTO_INCREMENT=7 ;

INSERT INTO `activites` VALUES
(1, 'Assemblée Générale', 'Salle G. Brassens, Aytré', 1, '2011-02-10 15:30:00'),
(2, 'Recrutement', 'Bordeaux - Parc des expositions', 1, '2012-03-23 09:00:00'),
(3, 'Repas de fin d''année', 'Salle des fêtes', 2, '2011-12-18 19:00:00'),
(4, 'Soirée Foot', 'Chez Wam', 0, '2011-04-13 12:10:05'),
(6, 'Bowling', 'Bowling des Minimes', 1, '2012-01-19 00:00:00');

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `categorie` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Liste des adhérents actuels et anciens' AUTO_INCREMENT=43 ;

INSERT INTO `adherents` VALUES
(1, 'Duparc', 'Jos', 'jduparc@maboite.fr', 1),
(2, 'Violau', 'Lulu', 'nateau@maboite.fr', 4),
(3, 'Turin', 'Philippe', 'philron@maboite.net', 2),
(5, 'Rodrigue', 'Pascal', 'prod@maboite.fr', 1),
(6, 'Hislon', 'Cath', 'cathslen@maboite.fr', 6),
(10, 'Sempied', 'Chris', 'chris@maboite.fr', 8),
(11, 'Robertson', 'Elisabeth', 'relis@maboite.fr', 5),
(13, 'Roman', 'Lolo', 'james@maboite.fr', 7),
(17, 'Breze-Tchang', 'Steeve', 'tchangsiechen@maboite.fr', 3),
(21, 'Rabal', 'Anna', 'annara@maboite.fr', 7),
(24, 'Damkan', 'Christophe', 'christDam@maboite.fr', 6),
(28, 'Woman', 'Sylvia', 'sylviawo@maboite.fr', 2),
(33, 'Roux', 'Nathy', 'cantenath@maboite.fr', 6),
(40, 'Rocky', 'Val', 'valro@maboite.fr', 1),
(42, 'Tchang', 'Romain', 'balloo@maboite.fr', 4);

DROP TABLE IF EXISTS `inscriptions`;
CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite` int(11) NOT NULL,
  `adherent` int(11) NOT NULL,
  `remarque` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Inscriptions des adhérents aux activités' AUTO_INCREMENT=130 ;

INSERT INTO `inscriptions` VALUES
(101, 1, 2, 'Pour une fois !'),
(3, 1, 4, 'C''est pas trop tôt !'),
(129, 1, 33, NULL),
(9, 3, 2, NULL),
(123, 1, 1, NULL),
(16, 4, 1, NULL),
(12, 1, 0, NULL),
(14, 1, 7, NULL),
(17, 4, 2, NULL),
(20, 4, 3, NULL),
(113, 1, 6, NULL),
(100, 1, 28, NULL),
(120, 4, 11, NULL),
(121, 1, 17, NULL),
(28, 4, 40, NULL),
(125, 2, 42, NULL),
(31, 3, 1, NULL),
(32, 3, 42, NULL),
(34, 3, 3, NULL),
(35, 3, 5, 'J''en rêvais !'),
(38, 3, 11, 'Avec ma moitié'),
(39, 3, 13, 'Cooooooool'),
(40, 3, 17, 'Si tout va bien'),
(42, 3, 28, NULL),
(43, 3, 33, NULL),
(44, 3, 40, NULL),
(99, 1, 5, NULL),
(124, 2, 11, NULL),
(128, 1, 11, NULL),
(122, 1, 40, NULL),
(52, 4, 28, NULL),
(54, 4, 5, NULL),
(56, 4, 17, NULL),
(117, 1, 42, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
