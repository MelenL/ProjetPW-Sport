-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : dim. 14 jan. 2024 à 18:12
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sport`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_raccourci` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom_categorie`, `code_raccourci`, `description`) VALUES
(1, 'Jeunes', 'JN', 'Ceci est une description'),
(2, 'Adultes', 'AD', NULL),
(3, 'Seniors', 'SR', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_tel` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `numero_tel`) VALUES
(1, 'Martin', 'Sophie', 'sophie.martin@example.com', '0123456789'),
(2, 'Lefevre', 'Thomas', 'thomas.lefevre@example.com', '0123456789'),
(3, 'Girard', 'Céline', 'celine.girard@example.com', '0123456789'),
(4, 'Robin', 'Antoine', 'antoine.robin@example.com', '0123456789'),
(5, 'Roux', 'Emilie', 'emilie.roux@example.com', '0123456789'),
(6, 'Lemoine', 'Nicolas', 'nicolas.lemoine@example.com', '0123456789'),
(9, 'Guerin', 'Elodie', 'elodie.guerin@example.com', '0123456789'),
(10, 'Fournier', 'Pierre', 'pierre.fournier@example.com', '0123456789'),
(11, 'Dupuis', 'Manon', 'manon.dupuis@example.com', '0123456789'),
(12, 'Moulin', 'Guillaume', 'guillaume.moulin@example.com', '0123456789'),
(33, 'Caron', 'Baptiste', 'baptiste.caron@example.com', '0123456789'),
(34, 'Lopez', 'Mélanie', 'melanie.lopez@example.com', '0123456789'),
(35, 'Test', 'Test', 'jesuis@jesuis.fr', '0768161144'),
(36, 'Test', 'Test', 'jesuis@jesuis.fr', '0768161144'),
(37, 'Test', 'Test', 'jesuis@jesuis.fr', '0768161144'),
(41, 'Laclais', 'Melen', 'test@rtfdssq.fr', '0758654');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231209152359', '2023-12-09 15:24:04', 17),
('DoctrineMigrations\\Version20231209152450', '2023-12-09 15:24:54', 8),
('DoctrineMigrations\\Version20231209154133', '2023-12-09 15:41:38', 41),
('DoctrineMigrations\\Version20231209154659', '2023-12-09 15:47:05', 18),
('DoctrineMigrations\\Version20231209155026', '2023-12-09 15:50:30', 27),
('DoctrineMigrations\\Version20231209155209', '2023-12-09 15:52:16', 27),
('DoctrineMigrations\\Version20231219161731', '2023-12-19 16:18:41', 40),
('DoctrineMigrations\\Version20231219162114', '2023-12-19 16:21:18', 37),
('DoctrineMigrations\\Version20231219162146', '2023-12-19 16:21:50', 43),
('DoctrineMigrations\\Version20231226132325', '2023-12-26 13:24:03', 55),
('DoctrineMigrations\\Version20231226132950', '2023-12-26 13:29:54', 60),
('DoctrineMigrations\\Version20231226142434', '2023-12-26 14:24:38', 16),
('DoctrineMigrations\\Version20231226142548', '2023-12-26 14:25:51', 37);

-- --------------------------------------------------------

--
-- Structure de la table `educateur`
--

CREATE TABLE `educateur` (
  `id` int(11) NOT NULL,
  `licencie_id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `est_admin` tinyint(1) NOT NULL,
  `roles` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `educateur`
--

INSERT INTO `educateur` (`id`, `licencie_id`, `email`, `password`, `est_admin`, `roles`) VALUES
(17, 2, 'test@test.fr', '$2y$13$xyGwtfEUa31qeVWDd7aL0ODzOr.H/sdn2AbgJ7BbEAhWcanRYCHUS', 1, '[]');

-- --------------------------------------------------------

--
-- Structure de la table `licencie`
--

CREATE TABLE `licencie` (
  `id` int(11) NOT NULL,
  `id_categorie_id` int(11) NOT NULL,
  `id_contact_id` int(11) NOT NULL,
  `numero_licence` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `licencie`
--

INSERT INTO `licencie` (`id`, `id_categorie_id`, `id_contact_id`, `numero_licence`, `nom`, `prenom`) VALUES
(1, 2, 1, 12346, 'Martin', 'Sophie'),
(2, 3, 2, 12347, 'Lefevre', 'Thomas'),
(3, 1, 3, 12348, 'Girard', 'Céline'),
(4, 2, 4, 12349, 'Robin', 'Antoine'),
(5, 1, 5, 12350, 'Roux', 'Emilie'),
(6, 1, 6, 12351, 'Lemoine', 'Nicolas'),
(9, 1, 9, 12354, 'Guerin', 'Elodie'),
(10, 2, 10, 12355, 'Fournier', 'Pierre'),
(11, 3, 11, 12356, 'Dupuis', 'Manon'),
(12, 1, 12, 12357, 'Moulin', 'Guillaume');

-- --------------------------------------------------------

--
-- Structure de la table `mail_contact`
--

CREATE TABLE `mail_contact` (
  `id` int(11) NOT NULL,
  `id_contact_id` int(11) NOT NULL,
  `date_envoi` date NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_contact`
--

INSERT INTO `mail_contact` (`id`, `id_contact_id`, `date_envoi`, `objet`, `message`) VALUES
(4, 2, '2024-01-02', 'Jeunes et Adultes - Rencontre sportives', 'Ceci est un mail pour une future rencontres sportives.'),
(5, 2, '2024-01-02', 'Pique nique', 'N’oubliez pas votre gourde');

-- --------------------------------------------------------

--
-- Structure de la table `mail_contact_categorie`
--

CREATE TABLE `mail_contact_categorie` (
  `mail_contact_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_contact_categorie`
--

INSERT INTO `mail_contact_categorie` (`mail_contact_id`, `categorie_id`) VALUES
(4, 1),
(4, 2),
(5, 2),
(5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `mail_edu`
--

CREATE TABLE `mail_edu` (
  `id` int(11) NOT NULL,
  `id_educateur_id` int(11) NOT NULL,
  `date_envoie` date NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_edu`
--

INSERT INTO `mail_edu` (`id`, `id_educateur_id`, `date_envoie`, `objet`, `message`) VALUES
(4, 17, '2024-01-02', 'Test de VMA à programmer', 'Il faudrais programmer un test de VMA pour les nouveaux arrivants.'),
(5, 17, '2024-01-02', 'Futur rencontre', 'Pourrait-tu programmer la future rencontre ?');

-- --------------------------------------------------------

--
-- Structure de la table `mail_edu_educateur`
--

CREATE TABLE `mail_edu_educateur` (
  `mail_edu_id` int(11) NOT NULL,
  `educateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `mail_edu_educateur`
--

INSERT INTO `mail_edu_educateur` (`mail_edu_id`, `educateur_id`) VALUES
(4, 17);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `educateur`
--
ALTER TABLE `educateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_763C0122B56DCD74` (`licencie_id`),
  ADD UNIQUE KEY `UNIQ_763C0122E7927C74` (`email`);

--
-- Index pour la table `licencie`
--
ALTER TABLE `licencie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3B755612422BA59D` (`id_contact_id`),
  ADD KEY `IDX_3B7556129F34925F` (`id_categorie_id`);

--
-- Index pour la table `mail_contact`
--
ALTER TABLE `mail_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_96DF6757422BA59D` (`id_contact_id`);

--
-- Index pour la table `mail_contact_categorie`
--
ALTER TABLE `mail_contact_categorie`
  ADD PRIMARY KEY (`mail_contact_id`,`categorie_id`),
  ADD KEY `IDX_340E21C33362CFB6` (`mail_contact_id`),
  ADD KEY `IDX_340E21C3BCF5E72D` (`categorie_id`);

--
-- Index pour la table `mail_edu`
--
ALTER TABLE `mail_edu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8CB8D4A3483D6F7C` (`id_educateur_id`);

--
-- Index pour la table `mail_edu_educateur`
--
ALTER TABLE `mail_edu_educateur`
  ADD PRIMARY KEY (`mail_edu_id`,`educateur_id`),
  ADD KEY `IDX_7A814C4C9D911D20` (`mail_edu_id`),
  ADD KEY `IDX_7A814C4C6BFC1A0E` (`educateur_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `educateur`
--
ALTER TABLE `educateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `licencie`
--
ALTER TABLE `licencie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `mail_contact`
--
ALTER TABLE `mail_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `mail_edu`
--
ALTER TABLE `mail_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `educateur`
--
ALTER TABLE `educateur`
  ADD CONSTRAINT `FK_763C0122B56DCD74` FOREIGN KEY (`licencie_id`) REFERENCES `licencie` (`id`);

--
-- Contraintes pour la table `licencie`
--
ALTER TABLE `licencie`
  ADD CONSTRAINT `FK_3B755612422BA59D` FOREIGN KEY (`id_contact_id`) REFERENCES `contact` (`id`),
  ADD CONSTRAINT `FK_3B7556129F34925F` FOREIGN KEY (`id_categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `mail_contact`
--
ALTER TABLE `mail_contact`
  ADD CONSTRAINT `FK_96DF6757422BA59D` FOREIGN KEY (`id_contact_id`) REFERENCES `contact` (`id`);

--
-- Contraintes pour la table `mail_contact_categorie`
--
ALTER TABLE `mail_contact_categorie`
  ADD CONSTRAINT `FK_340E21C33362CFB6` FOREIGN KEY (`mail_contact_id`) REFERENCES `mail_contact` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_340E21C3BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `mail_edu`
--
ALTER TABLE `mail_edu`
  ADD CONSTRAINT `FK_8CB8D4A3483D6F7C` FOREIGN KEY (`id_educateur_id`) REFERENCES `educateur` (`id`);

--
-- Contraintes pour la table `mail_edu_educateur`
--
ALTER TABLE `mail_edu_educateur`
  ADD CONSTRAINT `FK_7A814C4C6BFC1A0E` FOREIGN KEY (`educateur_id`) REFERENCES `educateur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7A814C4C9D911D20` FOREIGN KEY (`mail_edu_id`) REFERENCES `mail_edu` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
