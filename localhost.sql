-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 21 mars 2024 à 07:49
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formation`
--
CREATE DATABASE IF NOT EXISTS `formation` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `formation`;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateentree` date NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `prix`, `dateentree`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Réunion', '0', '2024-03-13', 'Réunion très important. afin de', '1710920105.jpg', '2024-03-20 06:35:05', '2024-03-20 06:35:05'),
(2, 'Acaton', '20000', '2024-03-14', 'L\'acaton est un concours de développeur. ceci est créer pour mesuré notre compétence en codage. le prix de gagnants se lèvera à 100000, le deuxième à 200000', '1710938555.jpg', '2024-03-20 06:43:04', '2024-03-20 11:42:35'),
(3, 'Sortie de promotion', '20000', '2024-03-22', 'Sortie de promotion. Nous tenons a vous informer que pour cette année si les étudiant qui vient de finir ses études chez nous, vont célébré leur fin d\'étude en faisons un sortie de promotion. le prix d\'entrée est a 20000 pour chaque étudiant et 10000 par personnes pour leur de ses invitées', '1710920962.jpg', '2024-03-20 06:49:22', '2024-03-20 06:49:22');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soustitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateentree` date NOT NULL,
  `jours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heures` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `soustitre`, `prix`, `dateentree`, `jours`, `heures`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Call francophone', 'langue + pratique', '20000', '2024-03-22', 'vendredi jeudi', '9', 'vous serais bénéficies de nos services lors d\'une inscription. stage offert. durée 4 mois', '1710921284.jpg', '2024-03-19 18:53:41', '2024-03-20 06:54:44'),
(2, 'Graphic Design', 'Ps et Lr', '200000', '2024-03-27', 'lundi et vendredi', '9', 'On vous apprend a créer une image très stylés. Et on vous aide aussi à exploré votre talent interne', '1710921200.jpg', '2024-03-20 06:53:20', '2024-03-20 06:53:20'),
(3, 'Special REACT', 'spécial samedi', '50000', '2024-03-14', 'samedi', '7 à 18', 'Jsx/ Props/ Hooks \r\nFireBase (base de données)  \r\nReact Routeur \r\nNode Js \r\nMongoDB \r\nReact + vite \r\nReact native', '1710921531.jpg', '2024-03-20 06:58:07', '2024-03-20 06:58:52'),
(4, 'Python', 'Spécial PYTHON', '900000', '2024-03-20', 'Lundi Mercredi', '7 à 20', 'Kivy Django Odoo', '1711004872.jpg', '2024-03-21 06:07:52', '2024-03-21 06:07:52');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` bigint UNSIGNED NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_articles` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaire`, `id_articles`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 'sf', 1, 1, '2024-03-20 08:00:08', '2024-03-20 08:00:08'),
(2, 'Très Bien', 4, 4, '2024-03-21 06:15:38', '2024-03-21 06:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint UNSIGNED NOT NULL,
  `type` enum('PAYMENT_DATE','APP_NAME','DEVELOPPER_NAME','ANOTHER') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ANOTHER' COMMENT 'table de configuration',
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ramahery', 'oramahery@gmail.com', 'il y a un probleme', '2024-03-21 06:18:04', '2024-03-21 06:18:04');

-- --------------------------------------------------------

--
-- Structure de la table `ecolages`
--

CREATE TABLE `ecolages` (
  `id` bigint UNSIGNED NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_matieres` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ecolages`
--

INSERT INTO `ecolages` (`id`, `prix`, `id_matieres`, `created_at`, `updated_at`) VALUES
(2, '90000', 7, '2024-03-21 05:54:32', '2024-03-21 05:54:32'),
(3, '500000', 6, '2024-03-21 05:54:50', '2024-03-21 05:54:50'),
(4, '500000', 5, '2024-03-21 05:55:07', '2024-03-21 05:55:07'),
(5, '300000', 4, '2024-03-21 05:55:21', '2024-03-21 05:55:21'),
(6, '60000', 2, '2024-03-21 05:55:36', '2024-03-21 05:55:36'),
(7, '200000', 1, '2024-03-21 05:55:51', '2024-03-21 05:55:51');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `adresse`, `sexe`, `contact`, `pdp`, `departement`, `matricule`, `created_at`, `updated_at`) VALUES
(1, 'ramahery', 'oninjatovo', 'vh61 volosarika ambanidia tananarivo', 'homme', '330416307', '1710877723.jpg', '7', NULL, '2024-03-19 18:48:43', '2024-03-19 18:48:43'),
(2, 'Dupont', 'Patrick', 'vh61 volosarika', 'homme', '78956258', '1711004227.png', '6', 111, '2024-03-21 05:57:08', '2024-03-21 05:57:08'),
(3, 'Aboudou', 'Raza', 'VZ 61 Anjomakely', 'homme', '123456', '1711004320.jpg', '5', 987, '2024-03-21 05:58:40', '2024-03-21 05:58:40'),
(4, 'Tolotra', 'Manjaka', 'vh61 volosarika 12', 'homme', '34789456', '1711004361.jpg', '5', 456, '2024-03-21 05:59:21', '2024-03-21 05:59:21'),
(5, 'Tolotra', 'Razah', 'fvz 61 ambolotara', 'homme', '6987532588', '1711005312.jpg', '5', NULL, '2024-03-21 06:15:12', '2024-03-21 06:15:12'),
(6, 'Tolotra', 'Razanabaoka', 'militaire spécial', 'homme', '336548897536', '1711005429.jpg', '1', NULL, '2024-03-21 06:17:09', '2024-03-21 06:17:09');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, soluta!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quia, delectus consequatur amet sed, excepturi ut dolore odit reiciendis maiores distinctio error quae cupiditate ad earum unde commodi quos omnis.', '2024-03-19 09:58:13', '2024-03-19 09:58:13'),
(2, 'Lorem, ipsum dolor.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sint incidunt ducimus, dolore harum dolorum ex, natus nesciunt autem explicabo omnis odio, nostrum neque repellendus magni quae expedita reiciendis. Quibusdam?', '2024-03-19 09:58:39', '2024-03-19 09:58:39'),
(3, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum illo officia delectus obcaecati hic laborum voluptas recusandae molestias dolores quis accusantium, sed maxime sunt dolorem blanditiis perferendis? Odit, facere eveniet.', '2024-03-19 09:59:09', '2024-03-19 09:59:09');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `email`, `Adresse`, `numero`, `site`, `created_at`, `updated_at`) VALUES
(1, 'oramahery@gmail.com', 'vh 61 volosarika ambanidia tana II', 346670196, 'Njato Ramah (GitHub)', '2024-03-19 09:57:04', '2024-03-19 09:57:04');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` bigint UNSIGNED NOT NULL,
  `matiere` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `matiere`, `created_at`, `updated_at`) VALUES
(1, 'developeur special Python', '2024-03-19 09:51:26', '2024-03-19 09:51:26'),
(2, 'designer photoshop', '2024-03-19 09:51:50', '2024-03-19 09:51:50'),
(3, 'dactylo', '2024-03-19 09:51:57', '2024-03-19 09:51:57'),
(4, 'developeur web Laravel', '2024-03-19 09:52:08', '2024-03-19 09:52:08'),
(5, 'developeur special symfony', '2024-03-19 09:52:15', '2024-03-19 09:52:15'),
(6, 'developeur web React', '2024-03-19 09:52:44', '2024-03-19 09:52:44'),
(7, 'call anglophone', '2024-03-19 09:52:54', '2024-03-19 09:52:54'),
(8, 'call francophone', '2024-03-19 09:52:59', '2024-03-19 09:52:59');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_15_084526_create_travailles_table', 1),
(6, '2024_03_15_084539_create_matieres_table', 1),
(7, '2024_03_15_084548_create_contacts_table', 1),
(8, '2024_03_15_084710_create_formations_table', 1),
(9, '2024_03_15_084739_create_etudiants_table', 1),
(10, '2024_03_15_084801_create_annonces_table', 1),
(11, '2024_03_15_084834_create_articles_table', 1),
(12, '2024_03_15_085105_create_personnels_table', 1),
(13, '2024_03_15_085132_create_ecolages_table', 1),
(14, '2024_03_15_085207_create_payments_table', 1),
(15, '2024_03_16_052813_create_commentaires_table', 1),
(16, '2024_03_16_111337_create_reservations_table', 1),
(17, '2024_03_16_212400_create_configurations_table', 1),
(18, '2024_03_19_084827_create_infos_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `mois` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ecolages` bigint UNSIGNED NOT NULL,
  `id_etudiants` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `payments`
--

INSERT INTO `payments` (`id`, `created_at`, `updated_at`, `mois`, `id_ecolages`, `id_etudiants`) VALUES
(1, '2024-03-21 05:57:35', '2024-03-21 05:57:35', 'mars', 6, 2),
(2, '2024-03-21 05:59:36', '2024-03-21 05:59:36', 'janvier', 4, 4),
(3, '2024-03-21 06:00:45', '2024-03-21 06:00:45', 'fevrier', 3, 3),
(4, '2024-03-21 06:01:31', '2024-03-21 06:01:31', 'mars', 7, 2),
(5, '2024-03-21 06:02:00', '2024-03-21 06:02:00', 'mais', 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateentree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datedelivre` datetime NOT NULL,
  `dateexpiration` datetime NOT NULL,
  `poste_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `created_at`, `updated_at`, `nom`, `prenom`, `datenaissance`, `email`, `contact`, `sexe`, `matricule`, `dateentree`, `pdp`, `mdp`, `postale`, `adresse`, `ville`, `region`, `province`, `cin`, `delivre`, `datedelivre`, `dateexpiration`, `poste_id`) VALUES
(2, '2024-03-19 09:49:15', '2024-03-19 09:49:15', 'ramahery', 'Oninjatovo', '1995-01-02', 'oramahery@gmail.com', 330416307, 'homme', '1', '2024-04-04', '1710845354.jpg', '$2y$12$RFZuWw9QYLcByrNwJj0VCePiJSsSXPjxuYdIHVGTJYlTaszt2QPgK', '105', 'vh61 volosarika', 'ambanidia', 'analamanga', 'tananarive', '105131022969', 'arivonimamo', '2021-01-03 00:00:00', '2026-01-03 00:00:00', 2),
(3, '2024-03-19 10:01:14', '2024-03-19 10:01:14', 'Dupont', 'Patrick', '2000-03-05', 'dupon@gmail.com', 34627589, 'homme', '2', '2024-03-20', '1710846074.jpg', '$2y$12$Pi7MrhEsTJWqwECIwGuiWOet2mBzNSMFhPmBtO9MiY4FYyNuQpfFK', '103', 'andoharano', 'andoharanofotsy', 'analamanga', 'tananarive', '123456789', 'tana 2', '2022-02-02 00:00:00', '2032-02-02 00:00:00', 2),
(4, '2024-03-19 10:04:48', '2024-03-19 10:04:48', 'Fara', 'Malemy', '1987-05-13', 'Fara@yopmail.com', 2345231, 'femme', '5978', '2024-03-07', '1710846287.jpg', '$2y$12$zLCu4iIOvCxaWpXcuw2MOeuuAHtkmSRX9DLhBSSy/fZU4/0al6qJe', '78', 'vh61 volosarika ambanidia tananarivo', '456', 'analamanga', 'tamatave', '213468795', 'analamanga', '2022-02-02 00:00:00', '2024-03-22 00:00:00', 14);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `id_articles` bigint UNSIGNED NOT NULL,
  `id_users` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `id_articles`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2024-03-20 08:24:12', '2024-03-20 08:24:12'),
(2, 4, 4, '2024-03-21 06:15:22', '2024-03-21 06:15:22'),
(3, 3, 3, '2024-03-21 06:16:23', '2024-03-21 06:16:23');

-- --------------------------------------------------------

--
-- Structure de la table `travailles`
--

CREATE TABLE `travailles` (
  `id` bigint UNSIGNED NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `travailles`
--

INSERT INTO `travailles` (`id`, `poste`, `prix`, `created_at`, `updated_at`) VALUES
(2, 'developpeur Laravel', '90000', '2024-03-19 09:28:50', '2024-03-19 09:46:52'),
(11, 'developpeur React', '50000', '2024-03-19 09:51:41', '2024-03-19 09:51:41'),
(12, 'enseignant anglais', '30000', '2024-03-19 10:01:36', '2024-03-19 10:01:36'),
(13, 'enseignant français', '20000', '2024-03-19 10:02:02', '2024-03-19 10:02:02'),
(14, 'receptioniste', '20000', '2024-03-19 10:02:33', '2024-03-19 10:02:33');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `status`, `email_verified_at`, `mdp`, `pdp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ramahery', 'oramahery@gmail.com', 'user', NULL, '$2y$12$O25BC8laNXyiiXd9XJ0evOPZlm8OxBfW4g0CTdZMou3uLmtWPmKYC', '1710854887.jpg', NULL, '2024-03-19 12:28:07', '2024-03-19 12:28:07'),
(2, 'admin', 'admin@admin.com', 'admin', NULL, '$2y$12$O25BC8laNXyiiXd9XJ0evOPZlm8OxBfW4g0CTdZMou3...', '1710854887.jpg', NULL, NULL, NULL),
(3, 'Tolotra', 'tolotra@gmail.com', 'user', NULL, '$2y$12$D2VU6WCa2cXRhn2C.mpk6.I//1g6VYA8oyRPcGUiyiCm2UnvbNwVO', '1711005055.jpg', NULL, '2024-03-21 06:10:56', '2024-03-21 06:10:56'),
(4, 'fanantenana', 'fana@gmail.com', 'user', NULL, '$2y$12$84txWQGxf7NvbYKTh35WdePpYMYx6yvhpA2d3o.gvkaZYQ1x81AfK', '1711005096.jpg', NULL, '2024-03-21 06:11:37', '2024-03-21 06:11:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaires_id_articles_foreign` (`id_articles`),
  ADD KEY `commentaires_id_users_foreign` (`id_users`);

--
-- Index pour la table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecolages`
--
ALTER TABLE `ecolages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ecolages_id_matieres_foreign` (`id_matieres`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_id_ecolages_foreign` (`id_ecolages`),
  ADD KEY `payments_id_etudiants_foreign` (`id_etudiants`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personnels_email_unique` (`email`),
  ADD UNIQUE KEY `personnels_matricule_unique` (`matricule`),
  ADD KEY `personnels_poste_id_foreign` (`poste_id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id_articles_foreign` (`id_articles`),
  ADD KEY `reservations_id_users_foreign` (`id_users`);

--
-- Index pour la table `travailles`
--
ALTER TABLE `travailles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ecolages`
--
ALTER TABLE `ecolages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `travailles`
--
ALTER TABLE `travailles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_id_articles_foreign` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaires_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ecolages`
--
ALTER TABLE `ecolages`
  ADD CONSTRAINT `ecolages_id_matieres_foreign` FOREIGN KEY (`id_matieres`) REFERENCES `matieres` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_id_ecolages_foreign` FOREIGN KEY (`id_ecolages`) REFERENCES `ecolages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_id_etudiants_foreign` FOREIGN KEY (`id_etudiants`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD CONSTRAINT `personnels_poste_id_foreign` FOREIGN KEY (`poste_id`) REFERENCES `travailles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_id_articles_foreign` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
