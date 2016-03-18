-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 18 Mars 2016 à 21:23
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `td-laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `baps`
--

CREATE TABLE `baps` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `NomPrenomCHEF` varchar(255) NOT NULL DEFAULT '',
  `fonctionCHEF` varchar(255) NOT NULL DEFAULT '',
  `adresseCHEF` text NOT NULL,
  `emailCHEF` varchar(255) NOT NULL DEFAULT '',
  `telCHEF` varchar(255) NOT NULL DEFAULT '',
  `NomPrenomCON` varchar(255) NOT NULL DEFAULT '',
  `fonctionCON` varchar(255) NOT NULL DEFAULT '',
  `adresseCON` varchar(255) NOT NULL DEFAULT '',
  `emailCON` varchar(255) NOT NULL DEFAULT '',
  `telCON` varchar(255) NOT NULL DEFAULT '',
  `social` text NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `raison` text NOT NULL,
  `contexte` text NOT NULL,
  `objectif` text NOT NULL,
  `contraintes` text NOT NULL,
  `accepted` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `baps`
--

INSERT INTO `baps` (`id`, `name`, `NomPrenomCHEF`, `fonctionCHEF`, `adresseCHEF`, `emailCHEF`, `telCHEF`, `NomPrenomCON`, `fonctionCON`, `adresseCON`, `emailCON`, `telCON`, `social`, `type`, `raison`, `contexte`, `objectif`, `contraintes`, `accepted`, `created_at`, `updated_at`) VALUES
(1, 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour@gmail.com', 'bonjour', 'bonjour', 'bonjour', 'bonjour', 'bonjour@gmail.com', 'bonjour', 'bonjour', 'site', 'bonjour', 'bonjour', 'bonjour', 'bonjjour', 1, '2016-03-18 14:37:08', '2016-03-18 19:14:22'),
(2, 'bap', 'bap', 'bap', 'bap', 'bap@gmail.com', 'bap', 'bap', 'bap', 'bap', 'bap@gmail.com', 'bap', 'bap', '2D', 'bap', 'bap', 'bap', 'bap', 1, '2016-03-18 19:15:12', '2016-03-18 19:19:47');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Animi quia sunt doloremque quaerat laborum rem corrupti. Delectus sint sapiente consequuntur quibusdam. Non libero non eius maxime voluptas id natus dolor. Quas laudantium quod velit totam facere.', 7, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(2, 'Cum nisi omnis est ex nam ea eius. Velit cum id vero facilis ea aliquid et. Quam qui quo veritatis aspernatur. Totam accusantium aut qui molestiae nam aut.', 9, 10, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(4, 'Ratione enim repudiandae ea necessitatibus. Ut ut architecto exercitationem est. Libero officiis qui beatae alias fugit quis.', 14, 4, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(5, 'Eum quia necessitatibus illum sed. Eius et architecto voluptatem hic autem.', 18, 12, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(6, 'Atque ut dolores et eius ut. Et omnis est ducimus mollitia quisquam omnis. Veniam iste fuga harum doloribus. Quia sint et ipsum possimus magni.', 4, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(7, 'Et veniam voluptas ad distinctio sint repellendus. Consequatur beatae quos quia delectus.\nExplicabo est in quae consequuntur. Exercitationem velit tenetur sapiente illo ea doloremque dolores.', 17, 14, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(8, 'Perferendis est ut inventore qui delectus animi in. Asperiores dolorum dolorem ab repellat necessitatibus voluptas. Iste repellat harum eveniet ullam consequatur non.', 14, 8, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(11, 'Aliquam omnis quidem et quaerat quo. Error perferendis maxime quod. Ut est nisi rem maxime consequatur quia expedita. Recusandae nihil consequuntur dolor omnis consequatur eaque ipsum.', 20, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(12, 'Nostrum error at veritatis libero unde qui ut. Sint eveniet quod voluptas. Deserunt aliquam eum doloribus et.jpojpojop', 12, 5, '2016-03-08 10:09:39', '2016-03-16 15:15:51'),
(13, 'Non vel explicabo ab quos accusamus excepturi. Est ducimus ducimus inventore dolorem nihil. Nam rerum reprehenderit id nemo.', 8, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(14, 'Sunt cum omnis dolores repellendus et quidem. Occaecati explicabo laudantium laudantium ea nisi ex. Ratione enim et ab sed ea iusto aliquid.', 7, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(15, 'Nisi velit alias est fugit voluptas ullam earum. Id et totam soluta sequi provident. At ea non ex porro totam. In repudiandae voluptatem atque asperiores velit.', 17, 8, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(16, 'Corporis vero tempore debitis temporibus minus fugiat maiores quia. Culpa modi ad error cum totam est.', 8, 4, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(17, 'Voluptas aut ut eum est. Veniam harum facere sunt sequi enim qui. Atque qui ducimus pariatur odit facilis quia id ducimus. Blanditiis beatae a optio.', 15, 10, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(18, 'Et cum alias dolorum reprehenderit. Praesentium consectetur animi nam. Voluptatem aut perspiciatis sed ratione quos veniam.', 8, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(19, 'Et unde eum ipsum aut. Et enim aut nesciunt ut. Excepturi minima deleniti fuga et enim aperiam.', 16, 5, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(20, 'Enim quidem ab dolor voluptatibus mollitia. Aliquam illum doloremque sit saepe. Facere et quibusdam cum enim quo enim.', 14, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(21, 'Fuga sed ipsum necessitatibus nemo dolorum eveniet inventore. Voluptate ut quam ut similique iusto. Quasi distinctio et aut aut.', 5, 10, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(22, 'Libero ut labore in consequuntur architecto alias. Ut qui maiores praesentium. Odio sed distinctio voluptatum veniam. Harum et id molestias repudiandae.', 6, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(24, 'Doloribus voluptatem dolorem nulla vitae et sit nam. Quasi aut explicabo nihil et iste aut voluptate. Quas neque cupiditate reprehenderit sint ea a.', 17, 4, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(25, 'Vitae et rem enim non voluptates. Earum reiciendis eum itaque neque. Cupiditate id quae sed ut natus fuga ratione. Numquam ut non dolorum ullam earum.', 11, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(26, 'Aut commodi voluptatem non ea rerum et provident. Quasi voluptatem molestiae accusamus itaque sunt id. Veritatis a nostrum laudantium quibusdam quas deleniti.', 12, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(27, 'Dicta velit impedit itaque qui magni velit. Aut illo voluptatibus dolor libero qui provident. Ut perspiciatis nihil et minus sed porro et.', 14, 12, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(28, 'Corrupti possimus earum libero. Quia sit aut aliquam natus consequatur distinctio. Quia accusantium recusandae enim vitae quia sapiente et.', 16, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(29, 'Excepturi aut quisquam praesentium voluptatibus reprehenderit qui. Aut ea dolor ex ut dolorum esse. Occaecati et accusamus nihil est non. Ea id non placeat blanditiis natus.', 15, 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(30, 'Quia esse minima quia voluptas ut. Est optio sed aperiam ut cum magnam. Beatae fuga voluptatum cumque temporibus ipsam.', 7, 14, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(32, 'Accusantium perferendis distinctio quis voluptas totam. Ex at consequatur placeat fuga mollitia repellat tenetur. Et facilis laboriosam magnam blanditiis nisi.', 14, 14, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(33, 'Laborum perferendis officiis unde vero. Consequatur est harum et quisquam.', 16, 14, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(34, 'Illum exercitationem maiores veritatis similique. Atque ea quos eligendi non corrupti a. Sint qui et et ea.', 13, 10, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(36, 'Numquam facere sint enim aut. Rerum voluptas esse eligendi. Fugiat voluptas mollitia itaque.', 17, 13, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(38, 'Qui cum maiores porro eos. Eos sed tenetur omnis porro. Dolores dolores natus ea ut rerum. Ut natus consectetur rerum at.', 2, 5, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(40, 'Ex et dolorum quisquam culpa quaerat earum. Ea ipsam maiores reprehenderit. Est doloribus reiciendis impedit id quo ut maxime.', 18, 10, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(41, 'dpzaojdzpoajdpoazjpodjazpojdpazoj', 1, 17, '2016-03-16 13:40:06', '2016-03-16 13:40:06'),
(42, 'Bonjour j''adore les pommes de terre', 1, 17, '2016-03-16 13:40:41', '2016-03-16 14:02:33'),
(43, 'dpzaojdzpoajdpoazjpodjazpojdpazoj', 1, 17, '2016-03-16 13:41:53', '2016-03-16 13:41:53'),
(44, 'dpzaojdzpoajdpoazjpodjazpojdpazoj', 1, 17, '2016-03-16 13:42:09', '2016-03-16 13:42:09'),
(47, 'waddup', 1, 17, '2016-03-16 13:47:16', '2016-03-16 13:47:16'),
(48, 'waddup', 1, 17, '2016-03-16 13:48:02', '2016-03-16 13:48:02'),
(49, 'waddup', 1, 17, '2016-03-16 13:48:20', '2016-03-16 13:48:20'),
(51, 'je suis un commentaire\r\n', 1, 9, '2016-03-16 14:03:21', '2016-03-16 14:03:21'),
(52, 'hello', 1, 9, '2016-03-16 14:14:10', '2016-03-16 14:14:10'),
(53, 'bonjour', 23, 17, '2016-03-18 17:51:47', '2016-03-18 17:51:47');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `updated_at`, `created_at`) VALUES
(1, 'bonjour', 'bonjour@gmail.com', 'bonjour', '2016-03-16 16:11:26', '2016-03-16 16:11:26'),
(2, 'willl', 'gom@gmail.com', 'salut', '2016-03-18 12:57:08', '2016-03-18 12:57:08');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_07_105858_create_posts_table', 1),
('2016_03_07_105915_create_comments_table', 1),
('2016_03_07_112432_foreign_keys', 1),
('2016_03_11_082054_update_users_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Ullam voluptatem eligendi sit et ex consectetur et occaecati.', 'Reprehenderit magnam ut quidem sapiente. Sequi deserunt est eaque est. Vitae distinctio id molestias et qui. Autem quia autem harum est eaque. Nesciunt eos laborum nihil aut et harum aut quis.', 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(5, 'Totam qui quo quia porro.', 'Enim totam dignissimos voluptatem quaerat commodi. Sit facere at consequuntur omnis. Quod at et dignissimos harum id. Ut sed et ex consequuntur illo.', 7, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(6, 'Sequi alias accusantium adipisci sint quas labore.', 'Consequatur est magni aperiam perspiciatis. Voluptas sint minus quidem expedita. Labore accusantium id itaque est veritatis. Omnis omnis asperiores quam veritatis quam unde cumque.', 16, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(7, 'Repellendus labore officia aut architecto et accusantium.', 'Totam incidunt architecto fugit. Dolor nostrum ipsam qui quia. Pariatur omnis aut sit consequatur.', 4, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(8, 'Voluptatibus corporis incidunt vel eum corrupti ullam dolores.', 'Doloremque neque ullam sint consequatur qui. Libero libero itaque ea in non rerum. Tempora dolore labore voluptatibus facilis voluptas illum eligendi.', 20, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(9, 'Libero libero dolorum blanditiis fugiat reiciendis.', 'Qui saepe adipisci natus aut quo sit ea. Qui vero maxime ab ut est velit minus. Porro aspernatur est blanditiis expedita aut provident illo.', 14, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(10, 'Dolorem perspiciatis aut rerum molestias commodi enim quas.', 'Earum quae sed et. Qui magni itaque laudantium et optio provident. Sit iure eum ad atque. Fugit similique et voluptatem dolore velit consequuntur.', 19, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(11, 'Nam quod quo placeat quia.', 'Voluptatum labore eos est quis. Saepe aperiam dolorem culpa magni nihil. Autem fugit numquam sequi temporibus est aspernatur consequatur.', 8, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(12, 'Non debitis officia asperiores mollitia ab quidem.', 'Non nulla quae necessitatibus ut. Veniam quaerat tempore nihil temporibus. Consequatur at commodi unde quas accusamus alias necessitatibus.', 3, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(13, 'Consequatur quo sed dolores magni aperiam.', 'Ut ut aliquam quisquam animi dolor necessitatibus atque. Id mollitia quia exercitationem sed molestiae voluptatibus et in. Inventore ratione quod iure eos quisquam ipsum.', 15, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(14, 'Quam quasi velit ipsum eum rerum iure.', 'Saepe qui quas excepturi. Aliquid accusamus non unde facilis illo voluptates sed. Et rerum aut amet laudantium autem libero.', 6, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(15, 'Perspiciatis deserunt aut repellendus fugiat quia omnis velit.', 'Illo dolor sapiente impedit voluptatibus. Eveniet corrupti sunt delectus rerum. Qui voluptatem vero accusamus possimus molestiae dignissimos dolores voluptatem.', 3, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(16, 'bonjour', 'bonjour\r\n', 1, '2016-03-09 16:31:27', '2016-03-09 16:31:27'),
(17, 'zapodzapojdpo', 'fepojazpojzpaofjfza', 1, '2016-03-11 06:43:42', '2016-03-11 06:43:42'),
(18, 'waddup', 'yo', 1, '2016-03-11 10:03:29', '2016-03-11 10:03:29');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `isAdmin`, `created_at`, `updated_at`) VALUES
(1, 'WilliamWNG', 'william.wong0613@gmail.com', '$2y$10$WUKhjYui/pFTw5GurbuIFuhnNyXfxjwJCVx1NR1ZJ7BOOQnNILSPq', 'Yfjm5pcbFyGqq0ZmXCqfUjurRL7NYe1aEqvVJ1MrkWF8cESW8KPJ342R6C5j', 1, '2016-03-07 10:32:42', '2016-03-18 17:51:12'),
(2, 'Dr. Michael Zemlak II', 'Ward63@Stanton.com', '$2y$10$t3oFMO/XM9k8rYgTpEl7b.hbPR1BN3g0lUlMLrcLPICFYLDYx9tu.', 'JRijrLjN8d', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(3, 'Torrey Lakin', 'Yost.Mariela@gmail.com', '$2y$10$nyiGXdrGPwSU.Ye/Y6/g..kOZOaIGQjlBcd6wj77Rl.jB2fYUID2C', 'Q2zCKDrkyW', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(4, 'Greyson Dare', 'Stamm.Ettie@Stroman.com', '$2y$10$GzH0H/T9NpVry95xCFrMHuo8IOzDk6jcnMThgflyfgLluL6dpPVB2', 'xwTZ9sPOWf', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(5, 'Arjun Schamberger III', 'nSchmeler@Tremblay.com', '$2y$10$1MPa.fV/qVu5c.0CPtiXLOAXHyDF2h/hMX1x1lrub456lo7I4qURy', '84FBgwwYHR', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(6, 'Kevon Mertz', 'Leone.Ankunding@yahoo.com', '$2y$10$RunzDfm4pk7PKq/hCt1tz.1ZZaO7.80yK.c0.CXQ29obbRZ6POwqS', 'StQgcyeCcC', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(7, 'Hipolito Spencer', 'Irwin.Shanahan@yahoo.com', '$2y$10$UB/PKX/w8cr4olAw9YaNaemBBrcHb4AzONedwD.29ilhWII2lznKe', 'utCmHE33kF', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(8, 'Miss Eugenia Miller', 'Zachery.Stehr@gmail.com', '$2y$10$t9m8bJ3awv94DWIoIOa5o.ZS0tY8YrylS.99K4AmNbsCw3geg5Qte', 'QzRquEs4Zz', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(9, 'Prof. Garett Herman', 'Gulgowski.Thalia@Hills.com', '$2y$10$wkCfPvj7QPwDGgUI5b9ht.x4lFF4ns80C79NHD4681TObTY3VrA5e', 'kfYcuiEFbB', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(10, 'Daphne Kohler Jr.', 'Marques.Hayes@hotmail.com', '$2y$10$bTfKGrc.dbE6AzHeCtGbmeXCjgvvX.eDAjSXHPtfj3kfOlt.w6NKe', 'kQPFamegEh', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(11, 'Mrs. Hermina Will DVM', 'Gottlieb.Dario@hotmail.com', '$2y$10$MYdoQ916bRrTFZDBj8/JL.FU3U37TESnl/EHyNzojPuks8K89ufay', 'uehnzBbxGr', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(12, 'Devin Witting', 'hWalker@Johns.com', '$2y$10$E/r71Lb9mCzMp3P/mXHAyu9Tc/FEJFY7PTLRV8DhkCUse5.T7JEjm', 'ZEFF9W5CUA', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(13, 'Prof. Jessie Botsford', 'Toy71@hotmail.com', '$2y$10$/v9ZmLM9pCrB94BDgrnhvecTNIZ8X4BSLlC7dSEAdyob10D7rsrdK', '8Zfkt0g2Hk', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(14, 'Scottie Konopelski', 'mKoch@Dickens.com', '$2y$10$IaY1.HdarSXcJexD9fITouN6MWNYLxb563QEmcNwGmyHtcsxjz0Wm', '3CrM0c8hoD', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(15, 'Kristy Auer', 'Schimmel.Forest@yahoo.com', '$2y$10$4yJ7j46vE/bTlDoVU6xb2.KUZ8zgVI.XXnWR3GlNYMgaj6h2WtD8i', 'guud8hcMyj', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(16, 'Jordyn Schiller PhD', 'Lionel.Gorczany@Welch.com', '$2y$10$oNoWhtYdjJIaXQPyeJY3rerBDum.RU3HgqWT6q4bLpDiMX0Mh8Yba', 'bHsPMsgFhZ', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(17, 'Albertha Nitzsche', 'Imani.Kozey@Koch.com', '$2y$10$3AuSupLhLxJWFgCJu53IIOsE8zfI00ujCJEwrgfkquh3phyu/FT/6', 'm7i7iagdN4', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(18, 'Ashley Walsh', 'Cheyanne74@hotmail.com', '$2y$10$hmk5MHnyee8Vf33FDb.CfegJYr2TIl7hStEMdzbo2CjnKZjLwl9re', '8ef7g6QTEs', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(19, 'Mr. Jillian Bernhard V', 'Rogahn.Vita@yahoo.com', '$2y$10$P1EiO5se23bj0mcXz3AkZ.isExzl0TzVKeomblrfDa/WmtT3mkuKS', 'ls6z0vtzkx', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(20, 'Elvera Schimmel Sr.', 'Amalia.Hills@Jerde.net', '$2y$10$6Ffr4knfH13PapWtBbHkAufagRFmD3V4HJaRzvr/modwi7vkvO8fy', 'WMaYsAXgI2', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(21, 'Dr. Brady VonRueden PhD', 'Tom.Osinski@Halvorson.com', '$2y$10$KVS0TodRX/w1GQioDSIEVOG8rKfm0XX/34d.yAFn81andg0riQkRm', 'wmNtH7eVfi', 0, '2016-03-08 10:09:39', '2016-03-08 10:09:39'),
(22, 'hello', 'hello@gmail.com', '$2y$10$yA6Uc2yfbWm.v8V4ILans.w8e6I6TopGE2hlU5lvlkuvPSpmBXfAG', 'Au5E4yitCue3BYVCyUgD8YyG0KrhbMZOafYIqJIerr8YYz2IzndRfalUFIUy', 0, '2016-03-11 09:23:40', '2016-03-16 15:42:52'),
(23, 'charlie', 'charlie@gmail.com', '$2y$10$tOAb1rfb0YaSZ./jhOSFiOnH8BlBjxXekqb4fdEzIMUz1xExkBbKe', '8rMILKj7A13nsXvQshH2ptCetBSJAOxeLvVtJfolCq5A40bIJ7ctHvri4A7a', 0, '2016-03-18 17:51:31', '2016-03-18 17:52:45');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `baps`
--
ALTER TABLE `baps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `baps`
--
ALTER TABLE `baps`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
