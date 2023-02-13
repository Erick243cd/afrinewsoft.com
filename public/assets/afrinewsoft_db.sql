-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage de la structure de la table afrinewsoft_db. africontacts
CREATE TABLE IF NOT EXISTS `africontacts` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT,
  `contactName` varchar(100) NOT NULL,
  `contactEmail` text NOT NULL,
  `contactPhone` varchar(100) DEFAULT NULL,
  `contactObject` varchar(100) DEFAULT NULL,
  `contactMessage` text NOT NULL,
  `contactDate` date NOT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table afrinewsoft_db.africontacts : ~0 rows (environ)
/*!40000 ALTER TABLE `africontacts` DISABLE KEYS */;
INSERT INTO `africontacts` (`contactId`, `contactName`, `contactEmail`, `contactPhone`, `contactObject`, `contactMessage`, `contactDate`) VALUES
	(1, 'Kasongo ', 'kasongo@gmail.com', '02393380', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0000-00-00');
/*!40000 ALTER TABLE `africontacts` ENABLE KEYS */;

-- Listage de la structure de la table afrinewsoft_db. afriservices
CREATE TABLE IF NOT EXISTS `afriservices` (
  `serviceId` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `serviceName_fr` varchar(100) NOT NULL,
  `serviceDescription_fr` text,
  `serviceName_en` varchar(100) NOT NULL,
  `serviceDescription_en` text,
  `serviceImage` varchar(100) NOT NULL,
  `data_aos_delay` int(11) NOT NULL,
  `serviceCover` varchar(100) NOT NULL,
  `serviceSlug` varchar(100) NOT NULL,
  PRIMARY KEY (`serviceId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Listage des données de la table afrinewsoft_db.afriservices : ~7 rows (environ)
/*!40000 ALTER TABLE `afriservices` DISABLE KEYS */;
INSERT INTO `afriservices` (`serviceId`, `serviceName_fr`, `serviceDescription_fr`, `serviceName_en`, `serviceDescription_en`, `serviceImage`, `data_aos_delay`, `serviceCover`, `serviceSlug`) VALUES
	(1, 'Conception graphique', 'Etant donné que le Design graphique fait partie des étapes clés de la communication visuelle pour votre entreprise ou pour vous-même ; nous  mettons un accent particulier sur la conception de votre logo, vos flyers, vos bannières publicitaires et même votre site web.<p>Nous faisons une combinaison propre des images, textes pour l’affichage à l’écran et pour l’impression, ensuite nous vous présentons le résultat et attendons votre validation car nous restons prêts pour tout apport de modification selon votre demande. Nous faisons de votre satisfaction une priorité, et surtout quand il s’agit de votre <b><i>identité visuelle</i></b>.</p>', 'Graphic design', 'Etant donné que le Design graphique fait partie des étapes clés de la communication visuelle pour votre entreprise ou pour vous-même ; nous  mettons un accent particulier sur la conception de votre logo, vos flyers, vos bannières publicitaires et même votre site web.<p>Nous faisons une combinaison propre des images, textes pour l’affichage à l’écran et pour l’impression, ensuite nous vous présentons le résultat et attendons votre validation car nous restons prêts pour tout apport de modification selon votre demande. Nous faisons de votre satisfaction une priorité, et surtout quand il s’agit de votre <b><i>identité visuelle</i></b>.</p>', '001-ux.png', 0, 'graphic-design-afrinewsoft .webp', 'graphic-design'),
	(2, 'Conception des logiciels', 'Chez Afrinewsoft, Concevoir un logiciel ne s’arrête pas seulement à l’implémentation des fonctionnalités demandées par le client, mais au contraire nous faisons une étude approfondie de besoins du client, et faisons le choix des technologies et d’architecture de sorte que logiciel à livrer soit agile. </br><p>Partant de la conception, nous passons par tous les tests possibles pour nous rassurer sur la robustesse, la sécurité, l’utilisabilité ainsi que l’agilité du logiciel que nous vous livrons. </br>Nous vous garantissons la sécurité de vos données contre tout type d’attaques malveillantes.</p><p>Vous êtes une entreprise, un établissement scolaire ou commercial, une ONG, un service privé ou public et vous désirer informatiser la gestion de vos activités, alors nous vous invitons de nous confier vos projets tout en vous rassurant que vous serez satisfait par notre savoir-faire. </p>', 'Software Designer', 'Chez Afrinewsoft, Concevoir un logiciel ne s’arrête pas seulement à l’implémentation des fonctionnalités demandées par le client, mais au contraire nous faisons une étude approfondie de besoins du client, et faisons le choix des technologies et d’architecture de sorte que logiciel à livrer soit agile. </br><p>Partant de la conception, nous passons par tous les tests possibles pour nous rassurer sur la robustesse, la sécurité, l’utilisabilité ainsi que l’agilité du logiciel que nous vous livrons. </br>Nous vous garantissons la sécurité de vos données contre tout type d’attaques malveillantes.</p><p>Vous êtes une entreprise, un établissement scolaire ou commercial, une ONG, un service privé ou public et vous désirer informatiser la gestion de vos activités, alors nous vous invitons de nous confier vos projets tout en vous rassurant que vous serez satisfait par notre savoir-faire. </p>', '005-web-development.png', 100, 'software-design-afrinewsoft-transp.webp', 'software-designer'),
	(4, 'Développement Web', 'Comme nous l’avons mentionné sur la <a href="https://afrinewsoft.co;/services/software-designer">Conception logiciel</a>,  Nous ajoutons ici que nous concevons des sites web dynamiques, vitrines, portfolio, E-commerce, pour la présentation de vos activités et renforcement de votre image ou celle de votre entreprise.<p>Nous vous invitons également à suivre nos conseils sur <a href="#"> la nécessité d’avoir un Site Web professionnel.</a></p>', 'Web Development', 'Comme nous l’avons mentionné sur la <a href="https://afrinewsoft.co;/services/software-designer">Conception logiciel</a>,  Nous ajoutons ici que nous concevons des sites web dynamiques, vitrines, portfolio, E-commerce, pour la présentation de vos activités et renforcement de votre image ou celle de votre entreprise.<p>Nous vous invitons également à suivre nos conseils sur <a href="#"> la nécessité d’avoir un Site Web professionnel.</a></p>', '007-world-wide-web-1.png', 200, 'web-development-afrinewsoft.webp', 'web-development'),
	(5, 'Photographie événementielle', 'Pour l’immortalisation de vos événements, nous vous facilitons la couverture par la photographie et la vidéographie ; avec des appareils de la récente technologie ainsi qu’une équipe qualifiée dans la prise et traitement des images.<p>Pour la réalisation de vidéos de longue durée, nous sommes en partenariat  avec <b>DREAM STUDIO</b>, qui est une entreprise spécialisée dans la réalisation et production des vidéos et photos Et dans la ville de Lubumbashi. </p> Nous invitons à visiter <a href="https://web.facebook.com/dreamstudio874" target="_blanck"> DREAM STUDIO </a> sur leur page Facebook.', 'Event photography', 'Pour l’immortalisation de vos événements, nous vous facilitons la couverture par la photographie et la vidéographie ; avec des appareils de la récente technologie ainsi qu’une équipe qualifiée dans la prise et traitement des images.<p>Pour la réalisation de vidéos de longue durée, nous sommes en partenariat  avec <b>DREAM STUDIO</b>, qui est une entreprise spécialisée dans la réalisation et production des vidéos et photos Et dans la ville de Lubumbashi. </p> Nous invitons à visiter <a href="https://web.facebook.com/dreamstudio874" target="_blanck"> DREAM STUDIO </a> sur leur page Facebook.', '008-photography.png', 300, 'event-photography-afrinewsoft.webp', 'event-photography'),
	(6, 'Marketing Digital', 'Grace aux canaux numériques, nous nous sommes engagés de vous accompagner dans la vente de vos produits et services. Nous vous aidons à augmenter les visites de votre site web et les transformer en acte d’achat. <p>Si vous avez des produits ou services que vous voulez vendre mais vous ne savez pas atteindre le public qui est censé de vous consommer, nous sommes la solution qu’il vous faut pour la croissance de vos activités.</p>', 'Digital Marketing', 'Grace aux canaux numériques, nous nous sommes engagés de vous accompagner dans la vente de vos produits et services. Nous vous aidons à augmenter les visites de votre site web et les transformer en acte d’achat. <p>Si vous avez des produits ou services que vous voulez vendre mais vous ne savez pas atteindre le public qui est censé de vous consommer, nous sommes la solution qu’il vous faut pour la croissance de vos activités.</p>', '014-social-media-1.png', 0, 'digital-marketing-afrinewsoft.webp', 'digital-marketing'),
	(7, 'Impression tout support', 'Vous avez besoin d’améliorer la visibilité de votre marque,  et cela vous conduit à la nécessité de  <a href="https://afrinewsoft.com/services/graphic-design">conception</a>  et impression des cartes de visite, des flyers ou dépliants, des panneaux publicitaires,  des roll up, ou faire imprimer vos marques sur des t-shirts, Chapeaux et tout autre support d’impression, Afrinewsoft vous tient comme toujours compagnie et vous facilite l’ensemble de tous les services cités ci-haut à moindre coût et dans le bref délai.', 'Printing on all supports', 'Vous avez besoin d’améliorer la visibilité de votre marque,  et cela vous conduit à la nécessité de  <a href="https://afrinewsoft.com/services/graphic-design">conception</a>  et impression des cartes de visite, des flyers ou dépliants, des panneaux publicitaires,  des roll up, ou faire imprimer vos marques sur des t-shirts, Chapeaux et tout autre support d’impression, Afrinewsoft vous tient comme toujours compagnie et vous facilite l’ensemble de tous les services cités ci-haut à moindre coût et dans le bref délai.', '015-3d-printer.png', 100, 'print-all-support-afrinewsoft.webp', 'printing-on-all-supports'),
	(8, 'Installation de caméras de surveillance', '<p>Afrinewsoft offre des services d’installation des caméras de surveillance pour les bâtiments de toute grandeur, des maisons privées, des bureaux, des maisons de ventes, des salles de classe, etc. </p>\r\n<p>Donc vous n’avez plus à vous inquiéter car Afrinewsoft vous aide désormais à garder l’œil sur tout ce qui vous appartient. N’hésitez pas de nous contacter au cas où vous avez besoin de sécuriser vos biens ou ceux de votre entreprise.</p>', 'Installation of surveillance cameras', '<p>Afrinewsoft offre des services d’installation des caméras de surveillance pour les bâtiments de toute grandeur, des maisons privées, des bureaux, des maisons de ventes, des salles de classe, etc. </p>\r\n<p>Donc vous n’avez plus à vous inquiéter car Afrinewsoft vous aide désormais à garder l’œil sur tout ce qui vous appartient. N’hésitez pas de nous contacter au cas où vous avez besoin de sécuriser vos biens ou ceux de votre entreprise.</p>', '018-cctv-camera.png', 100, 'camera-surveillance-afrinewsoft.webp', 'installation-of-urveillance-cameras'),
	(9, 'Installation et Administration réseaux', '<p>Le réseau informatique est l’un des moyens indispensables pour la communication et le partage des informations au sein d’une entreprise. </p>\r\n<p>Vous avez des logiciels, des fichiers à partager entre différents postes de travail au sein de votre entreprise ; il est évident que la confiance dans les réseaux sociaux diminue au cas où les données à partager sont très sensibles. Et Afrinewsoft vous donne des opportunités dans l’installation des réseaux locaux sécurisés pour le partage des données et celles des applications entre les postes de travail de votre entreprise. </p>\r\n<p>Ainsi vous serez rassuré de la disponibilité de vos informations ainsi que de leur sécurité. </p>', 'Network installation and administration', '<p>Le réseau informatique est l’un des moyens indispensables pour la communication et le partage des informations au sein d’une entreprise. </p>\r\n<p>Vous avez des logiciels, des fichiers à partager entre différents postes de travail au sein de votre entreprise ; il est évident que la confiance dans les réseaux sociaux diminue au cas où les données à partager sont très sensibles. Et Afrinewsoft vous donne des opportunités dans l’installation des réseaux locaux sécurisés pour le partage des données et celles des applications entre les postes de travail de votre entreprise. </p>\r\n<p>Ainsi vous serez rassuré de la disponibilité de vos informations ainsi que de leur sécurité. </p>', '021-cloud-computing.png', 100, 'networking-installation.webp', 'network-installation-and-administration');
/*!40000 ALTER TABLE `afriservices` ENABLE KEYS */;

-- Listage de la structure de la table afrinewsoft_db. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Listage des données de la table afrinewsoft_db.migrations : ~2 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2022-04-19-222124', 'App\\Database\\Migrations\\Services', 'default', 'App', 1666040551, 1),
	(3, '2022-10-17-205316', 'App\\Database\\Migrations\\Contacts', 'default', 'App', 1666040672, 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
