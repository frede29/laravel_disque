-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 06 avr. 2021 à 07:05
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `disque`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'JAZZ', '2021-04-01 22:51:43', '2021-04-01 22:51:43'),
(4, 'SLOW', '2021-04-01 23:10:32', '2021-04-01 23:10:32'),
(9, 'POP', '2021-04-05 08:54:02', '2021-04-05 08:54:02');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 'yyyyyyyyyyyyyy', 2, 4, 'App\\Models\\Topic', '2021-04-05 23:31:06', '2021-04-05 23:31:06'),
(2, 'nnnnnnnnn', 2, 4, 'App\\Models\\Topic', '2021-04-05 23:43:25', '2021-04-05 23:43:25'),
(3, 'nnnnn', 2, 5, 'App\\Models\\Topic', '2021-04-05 23:43:40', '2021-04-05 23:43:40');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_30_221450_create_table_disques', 2),
(5, '2021_04_01_213519_create_categories_table', 3),
(6, '2021_04_02_135151_add_category_id_columns_to_table_disques', 4),
(7, '2021_04_04_231055_add_admin_column_to_users', 4),
(8, '2021_04_05_003657_add_adminchange_column_to_users', 5),
(9, '2021_04_05_112352_create_topics_table', 6),
(10, '2021_04_05_112635_create_comments_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `table_disques`
--

CREATE TABLE `table_disques` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `table_disques`
--

INSERT INTO `table_disques` (`id`, `title`, `code`, `author`, `description`, `price`, `image`, `created_at`, `updated_at`, `category_id`, `deleted_at`) VALUES
(9, 'Return to Forever', 'J03', 'humphrey lyttelton', 'Humphrey Richard Adeane Lyttelton (23 May 1921 – 25 April 2008), also known as Humph, was an English jazz musician and broadcaster from the Lyttelton family.', 13.70, '20210403232927.jpg', '2021-04-03 21:29:27', '2021-04-03 21:29:27', 1, NULL),
(11, 'The Best of Aretha Franklin', 'J02', 'Aretha Franklin', 'Aretha Louise Franklin, née le 25 mars 1942 à Memphis et morte le 16 août 2018 à Détroit, est une chanteuse, pianiste et auteure-compositrice américaine de soul, jazz, gospel et rhythm and blues. Elle est fréquemment surnommée « The Queen Of Soul', 17.50, 'jazz2.jpg', '2021-04-05 08:40:32', '2021-04-05 08:40:32', 1, NULL),
(13, 'thriller', 'P01', 'Mickael jackson', 'Michael Jackson [ˈmaɪkəl ˈdʒæksən], né le 29 août 1958 à Gary et mort le 25 juin 2009 à Los Angeles, est un auteur-compositeur-interprète, danseur-chorégraphe et acteur américain', 17.50, '1617620095.jpg', '2021-04-05 08:54:55', '2021-04-05 08:54:55', 9, NULL),
(17, 'savoir aimer', 'S01', 'Florent pagny', 'Savoir aimer est le 4ᵉ album studio de Florent Pagny, sorti le 7 novembre 1997 chez Mercury France', 6.30, '1617685366.jpg', '2021-04-06 03:02:46', '2021-04-06 03:02:46', 4, NULL),
(18, 'elle a les yeux revolvers', 'S02', 'Marc lavoine', 'Marc Lavoine, né le 6 août 1962 à Longjumeau (Essonne), est un chanteur, parolier et acteur français. Il connaît son premier succès en 1984 avec la chanson Pour une biguine avec toi, suivi l\'année suivante du titre Elle a les yeux revolver', 10.50, '1617685448.jpg', '2021-04-06 03:04:08', '2021-04-06 03:04:08', 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `topics`
--

INSERT INTO `topics` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sit nisi ex perferendis ut.', 'Omnis officia amet molestiae voluptatibus eius. In quis consequuntur rerum magnam saepe. Velit fuga hic modi a illum.', 4, '2021-04-05 10:16:40', '2021-04-05 10:16:40'),
(2, 'Ea rerum doloremque in id.', 'Molestiae vitae voluptatem sit dolorum tenetur voluptatem est. Rerum impedit non sed occaecati sit. Qui sit aut unde atque earum molestiae unde.', 5, '2021-04-05 10:16:40', '2021-04-05 10:16:40'),
(3, 'Id cupiditate autem aliquam et aut similique aperiam.', 'Sed quae fugiat enim quidem et aut perspiciatis. Aperiam beatae dignissimos nihil rerum necessitatibus. Debitis omnis quod ut quis sunt sit dolorem. Esse voluptatem aut dolor non dignissimos.', 6, '2021-04-05 10:16:40', '2021-04-05 10:16:40'),
(4, 'Nisi rem deleniti voluptatem rerum qui quis sit similique.', 'Deserunt aliquid eum accusamus illum. Aliquid qui et et possimus sint nihil. Sit ad repellat assumenda perferendis laudantium. Laboriosam enim nostrum nesciunt cupiditate.', 7, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(5, 'Voluptatem consequatur vel nulla dolorum ex provident assumenda.', 'Quisquam sint officia architecto quia dolorem quas. Non distinctio accusantium voluptas est exercitationem id id. Magni et commodi aut asperiores mollitia. Minus eaque accusantium voluptatem voluptates aut.', 8, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(6, 'Dolores quas placeat eaque sed.', 'Nihil ut facilis ipsum optio. Vel sed voluptates ducimus nihil. At earum voluptatem ut velit assumenda autem. Ea quia cupiditate est et voluptates.', 9, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(7, 'Ut nostrum eum possimus voluptas nam consequatur et.', 'Veniam quis impedit in ea porro. Quia placeat eligendi sed. Et quo aut adipisci quasi nostrum. Fuga corrupti repellat voluptate aliquid.', 10, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(8, 'At alias officiis ut voluptatum fuga non.', 'Modi ex dolores sed rem minima. Eligendi qui qui quia laborum.', 11, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(9, 'Ut maxime et iure aliquid cum non.', 'Omnis illum sit voluptatem sed quas odit. Molestiae non culpa quod quaerat. Et molestiae omnis et reprehenderit fugiat eum error. Commodi ullam perferendis alias nulla non natus consequuntur.', 12, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(10, 'Adipisci voluptatem reprehenderit sit veritatis neque.', 'Qui quod qui assumenda harum expedita ipsam itaque at. Nihil et voluptatem eos similique suscipit rerum et culpa. Sit nostrum amet molestias sapiente rerum.', 13, '2021-04-05 10:16:41', '2021-04-05 10:16:41'),
(12, 'pop', 'Michael jackson', 2, '2021-04-06 01:49:27', '2021-04-06 01:49:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(2, 'admin', 'admin120@gmail.com', NULL, '$2y$10$FnA4QjSwp8/vw5aL7trPSOSQmBRbdclPYw0UpTLr9wGr4K9WmwvEi', NULL, '2021-04-05 01:34:32', '2021-04-05 01:34:32', 0),
(3, 'FELIX mario', 'mario@aol.com', NULL, '$2y$10$vXqaxelVjmiilbqC4iyub.F/2Acsr1AtnyrHKGakqahvSDgbvX2Wu', NULL, '2021-04-05 08:19:08', '2021-04-05 08:19:08', 0),
(4, 'Leif Conroy', 'olin.daugherty@example.org', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1nA0ltgpZ7', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(5, 'Dr. Talia Hills', 'jnitzsche@example.net', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'bP74HmCVIQ', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(6, 'Mustafa Johns V', 'schoen.cary@example.com', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4eFgFj0nJb', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(7, 'Dakota Little', 'ykrajcik@example.com', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pIWb8xay19', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(8, 'Alba Moore', 'kcremin@example.org', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LWzRv9v5Zo', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(9, 'Haylie Haag', 'presley44@example.com', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KcdJ0Z6iBH', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(10, 'Austyn Shields', 'okuhn@example.net', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Rzj3pR8HWn', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(11, 'Prof. Ilene Hintz', 'margret.oconnell@example.net', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oTcuCrOo4K', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(12, 'Rodolfo West', 'mavis46@example.com', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7ujqEahfTx', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0),
(13, 'Prof. Tyrell Gerhold V', 'hmohr@example.com', '2021-04-05 10:16:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LK8ZpclOlj', '2021-04-05 10:16:40', '2021-04-05 10:16:40', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `table_disques`
--
ALTER TABLE `table_disques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `table_disques`
--
ALTER TABLE `table_disques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
