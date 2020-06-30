# Host: 127.0.0.1  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2019-10-29 11:24:43
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'Loua','gfranckloua27@gmail.com','838970da52a04a4b01bd8a03c289240e33bcac3d','bla bla bla','admin'),(2,'LOUA','gfranckloua28@gmail.com','838970da52a04a4b01bd8a03c289240e33bcac3d','0iK5yd9DxQV5D6PaoI3w30o6WAVzzB','modo');

#
# Structure for table "commentaires"
#

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `datec` datetime NOT NULL,
  `vu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "commentaires"
#

INSERT INTO `commentaires` VALUES (2,'Franck','gfranckloua28@gmail.com','ce site c\'est trÃ¨s cool, je remercie tout l\'Ã©quipe pour leur travail bien fait',2,'2019-04-18 00:04:00',1),(3,'Issa','issa@gmail.com','cet articule est trÃ¨s cool.',1,'2019-08-22 21:59:58',0),(4,'Franck','gfranckloua28@gmail.com','Avec cet articule j\'ai puis comprendre les bases du langage HTML5 &amp; CSS3.',1,'2019-08-22 22:05:16',0),(5,'Franck','gfranckloua28@gmail.com','j\'apprends bien avec vous merci.',1,'2019-08-22 22:19:55',0),(6,'Franck','gfranckloua28@gmail.com','Je suis content de votre articule trop cool.',1,'2019-08-22 22:24:47',0),(7,'Franck','gfranckloua28@gmail.com','La Maths est trÃ¨s cool pour la vie.',2,'2019-08-22 22:31:12',0),(8,'Issa','issa@gmail.com','Avec ce blog le LWITECH connaÃ®tra une Ã©norme Ã©volution dans le secteur de la technologie.',4,'2019-08-22 22:36:02',0);

#
# Structure for table "messages"
#

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_nomcmoplet` varchar(50) DEFAULT NULL,
  `m_telephone` varchar(15) DEFAULT NULL,
  `m_email` varchar(50) DEFAULT NULL,
  `m_adresse` varchar(60) DEFAULT NULL,
  `m_contenu` text,
  `m_date_heure_edition` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "messages"
#

INSERT INTO `messages` VALUES (1,'LOUA Jean Gbamon','621456210','gfranckloua22@gmail.com','Conakry, Yimbayah Pharmacie','Je trouve trÃ¨s intÃ©ressant notre blog, j\'avais besoin de vous pour dÃ©velopper un site web pour notre sociÃ©tÃ©, contactez moi au plus vite si disponible.','2019-08-23 21:33:48'),(2,'LAMAH PaulineGuinee','625145230','paulineguinee@gmail.com','Conakry, Cosa','Je suis trÃ¨s contente de visiter ce site et je vous propose un partenariat.','2019-08-23 21:42:18');

#
# Structure for table "posts"
#

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `containte` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'posts2.jpg',
  `date` datetime NOT NULL,
  `writer` varchar(255) CHARACTER SET utf8 NOT NULL,
  `posted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'essai de blog en mode','La barre de navigation est entiÃ¨rement contenu dans une balise HTML5 de type tag. Ã  l\'intÃ©rieur d\'un div conseillÃ©, la barre de navigation est composÃ©e de deux parties principales. Un logo ou un lien vers la marque, ainsi que les liens de navigation.','posts.png','2019-04-18 05:00:55','gfranckloua27@gmail.com',1),(2,'Maths','Modidfication pas effectuÃ©e !','posts2.jpg','2019-04-18 04:58:16','gfranckloua27@gmail.com',1),(3,'PROGRAMME','La programmation orientÃ© objet est trÃ¨s super pour la programmation des applications ultra puissantes\r\navoir un blog est trÃ¨s cool pour partager sa connaissance avec les autres.','posts2.jpg','2019-04-18 05:09:01','gfranckloua27@gmail.com',0),(4,'Mon Premier Article','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','posts2.jpg','2019-04-18 02:30:40','gfranckloua27@gmail.com',1),(5,'Mon DeuxiÃ¨me Article','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','posts2.jpg','2019-04-18 02:52:48','gfranckloua27@gmail.com',0),(6,'ESSAI PAS COOL','contenu de l\'essai','posts2.jpg','2019-04-18 06:25:00','gfranckloua27@gmail.com',0),(7,'Mon TroisiÃ¨me  Article','eeh pas cool fio','posts2.jpg','2019-04-18 06:29:36','gfranckloua27@gmail.com',0),(8,'Mon QuatriÃ¨me Article','essai pas bon d\'abord dhjsfd sdfgdsf\r\nsdfgshdfsdfsdfsdffgsdfsdfsdfgsdfhjsdgkfsdf\r\nsdfgsdfhjsdgfsdhjfsgdfsdsdfgsdhjgfjsdfsdfsdf\r\nsdfsgdfgsdfjsdfgsdjf\r\ndfs sdfsdfghsdfvsdghfsdfsdf\r\nsdf sdnfsdfhjsdgfs fsdftfysdftsyudfyuzfzer dfsdfvsdfuze fdsfsdfgzeufgzerdfsdfsd fsdfsdfhgsdfzegyufzefzeze\r\nsdfsdfsdfsdfgsdfsdjfgsdjfsd fsdfsdhgfvsdgfsdfgsdf sdfsdfsdgfsgdfhjsdf sdf','8.png','2019-04-27 11:17:18','gfranckloua27@gmail.com',0);

#
# Structure for table "utilisateur"
#

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telephone` varchar(60) NOT NULL,
  `genre` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "utilisateur"
#

INSERT INTO `utilisateur` VALUES (1,'Franck','gfranckloua28@gmail.com','838970da52a04a4b01bd8a03c289240e33bcac3d','666321940','M'),(2,'Issa','issa@gmail.com','6e9c98149ca3a457846b4e2e4419f0a0a7666c27','6201345896','M');
