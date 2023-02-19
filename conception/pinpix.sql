-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 fév. 2023 à 14:06
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pinpix`
--

-- --------------------------------------------------------

--
-- Structure de la table `assign`
--

CREATE TABLE `assign` (
  `id_image` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `assign`
--

INSERT INTO `assign` (`id_image`, `id_tag`) VALUES
(5, 5),
(5, 7),
(5, 23);

-- --------------------------------------------------------

--
-- Structure de la table `follow`
--

CREATE TABLE `follow` (
  `id_user_1` int(11) NOT NULL,
  `id_user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `follow`
--

INSERT INTO `follow` (`id_user_1`, `id_user_2`) VALUES
(7, 9);

-- --------------------------------------------------------

--
-- Structure de la table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `name_gallery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `name_gallery`) VALUES
(1, 'niko'),
(2, 'ttt'),
(3, 'itn');

-- --------------------------------------------------------

--
-- Structure de la table `give`
--

CREATE TABLE `give` (
  `id_gallery` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `give`
--

INSERT INTO `give` (`id_gallery`, `id_user`) VALUES
(1, 7),
(2, 9),
(3, 3),
(3, 9);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `url_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `url_image`) VALUES
(1, 'assets\ressourcesimgaerosmith2014.JPG'),
(2, 'assets/ressources/img/femme.jpg'),
(3, 'assets\\ressources\\img\\femme.jpg'),
(4, 'assets\\ressources\\img'),
(5, 'assets\\ressources\\img\\tramway.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_image` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id_image`, `id_user`) VALUES
(3, 7),
(5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

CREATE TABLE `links` (
  `id_image` int(11) NOT NULL,
  `id_gallery` int(11) NOT NULL,
  `date_image_links` timestamp NOT NULL DEFAULT current_timestamp(),
  `description_links` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id_image`, `id_gallery`, `date_image_links`, `description_links`) VALUES
(3, 1, '2023-02-10 13:30:27', 'dfxfcghbjknl,mkiouydhgbqjk;kd,fn:s;mùcxwlp wdsijnlk,zmù:fd'),
(5, 1, '2023-02-10 14:01:39', NULL),
(3, 2, '2023-02-13 09:39:24', NULL),
(5, 3, '2023-02-13 10:23:38', 'ici une description differente');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(10, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(11) NOT NULL,
  `name_tag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id_tag`, `name_tag`) VALUES
(1, 'Nature'),
(2, 'Animaux'),
(3, 'Nourriture'),
(4, 'Technologie'),
(5, 'Espace'),
(6, 'Chien'),
(7, 'Chats'),
(8, 'Ciel'),
(9, 'Rivière'),
(10, 'Voiture'),
(11, 'Sombre'),
(12, 'Paysage'),
(13, 'Forêt'),
(14, 'Texture'),
(15, 'Abstrait'),
(16, 'Montagne'),
(17, 'Plage'),
(18, 'Désert'),
(19, 'Ville'),
(20, 'Campagne'),
(21, 'Art'),
(22, 'Photos'),
(23, 'Images'),
(24, 'Soleil'),
(25, 'Plantes'),
(26, 'Nuit');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `pwd_user` varchar(255) NOT NULL,
  `mail_user` varchar(100) NOT NULL,
  `creation_date_user` timestamp NOT NULL DEFAULT current_timestamp(),
  `bio_user` text DEFAULT NULL,
  `id_image` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `pwd_user`, `mail_user`, `creation_date_user`, `bio_user`, `id_image`, `id_role`) VALUES
(2, 'Nicochoco', 'i', 'nicochoco@hotmail.fr', '2023-02-01 23:00:00', 'Je suis le petit Nico, amateur de choco', 1, 10),
(3, 'Micaelle', '456michaelle', 'micaelle32@gmail.com', '2023-02-01 23:00:00', 'Je suis Micaelle, passionnée et passionante', 2, 10),
(4, 'jytjygj', '', 'htrytrythf', '2023-02-10 09:32:42', 'htrtdgrd', 1, 1),
(6, '', '', '', '2023-02-10 09:33:42', NULL, 1, 1),
(7, 'nico', '$2y$10$7LQkwW7J3PH1GBpmj0CmJuDvgx7kK7r/M7ugwhawjryAG1Jsm5FDG', 'nico@nico.nico', '2023-02-10 11:09:41', NULL, 1, 10),
(8, 'ici', '$2y$10$yQofpElUkoJxXDl8JeTKquRGfhrOcocoPsGqxN0YU/ZEy1ST42Esm', 'ici@ici.ici', '2023-02-10 11:10:58', NULL, 1, 10),
(9, 'ttt', '$2y$10$L2.Q.O6siTF.ieB4ah83gOCELvumFcFIKc3VCLkEALHlEvnzEqw16', 'ttt.ttt@ttt.ttt', '2023-02-13 09:31:06', NULL, 1, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`id_image`,`id_tag`),
  ADD KEY `id_tag` (`id_tag`);

--
-- Index pour la table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id_user_1`,`id_user_2`),
  ADD KEY `id_user_2` (`id_user_2`);

--
-- Index pour la table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Index pour la table `give`
--
ALTER TABLE `give`
  ADD PRIMARY KEY (`id_gallery`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_image`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_gallery`,`id_image`),
  ADD KEY `id_image` (`id_image`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `name_user` (`name_user`),
  ADD UNIQUE KEY `mail_user` (`mail_user`),
  ADD KEY `id_image` (`id_image`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`),
  ADD CONSTRAINT `assign_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `tags` (`id_tag`);

--
-- Contraintes pour la table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`id_user_1`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `follow_ibfk_2` FOREIGN KEY (`id_user_2`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `give`
--
ALTER TABLE `give`
  ADD CONSTRAINT `give_ibfk_1` FOREIGN KEY (`id_gallery`) REFERENCES `gallery` (`id_gallery`),
  ADD CONSTRAINT `give_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`),
  ADD CONSTRAINT `links_ibfk_2` FOREIGN KEY (`id_gallery`) REFERENCES `gallery` (`id_gallery`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
