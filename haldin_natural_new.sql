-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2019 pada 05.12
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haldin_natural_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_about_us`
--

CREATE TABLE `t_about_us` (
  `id` int(20) NOT NULL,
  `title1` text NOT NULL,
  `story1` text NOT NULL,
  `title2` text NOT NULL,
  `story2` text NOT NULL,
  `aboutus_video` text NOT NULL,
  `header_photo` text NOT NULL,
  `file_name` text NOT NULL,
  `file_name2` text NOT NULL,
  `file_name3` text NOT NULL,
  `header_uploaded_on` datetime NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `uploaded_on2` datetime NOT NULL,
  `uploaded_on3` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_about_us`
--

INSERT INTO `t_about_us` (`id`, `title1`, `story1`, `title2`, `story2`, `aboutus_video`, `header_photo`, `file_name`, `file_name2`, `file_name3`, `header_uploaded_on`, `uploaded_on`, `uploaded_on2`, `uploaded_on3`) VALUES
(1, 'About Us', '<p style=\"text-align:center\"><em>Although Haldin calls Indonesia home, the company started life in the United States more than two decades ago. Originally established as an importer of Indonesian Vanilla to customers in North America, Haldin expanded its offering to meet their increasingly diverse demands. At the same time, Haldin developed its expertise in sourcing the best quality raw materials and turning those natural materials into the essential building blocks around which customers built their products.</em></p>\r\n', 'Haldin!', '<p style=\"text-align:justify\">Today, Haldin serves the needs of the food and beverage, flavor and fragrance, health food, pharmaceutical, and cosmetic industries with locally sourced and processed products supplied in eight key product groups: Tea and Coffee; Functional Ingredient; Cosmetic and Care Ingredient; Essential Oil; Vanilla and Cocoa; Natural Sweetener; Seasoning Ingredient; and Fruit &amp; Vegetable.<br />\r\n<br />\r\nHaldin operates five manufacturing sites in Indonesia. Three manufacturing in liquid and powder extraction, one in coconut and the last one is for our material preparation.<br />\r\n<br />\r\nThe largest and newest of the facilities in Indonesia uses state of the art continuous extraction to produce top note Essence, Liquid Extract, and high quality agglomeration spray dried products with an annual capacity of more than 20,000 tons. Close to the source of its natural products, Haldin also strives to be close to its customers. Through its international network of distributors and agents. Haldin&#39;s customers are in more than 53 countries across five continents.<br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><em>Our Vision :</em></p>\r\n\r\n<p style=\"text-align:center\">To be respectable leader in each product group, in Indonesia and globally, in providing quality natural ingredients.</p>\r\n\r\n<p style=\"text-align:center\"><em>Our Mission :</em></p>\r\n\r\n<p style=\"text-align:center\">To provide ingredients and solutions to leading brands, both in Indonesia and globally.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'https://www.youtube.com/watch?v=zZeJ5BivcZc', '', 'taman.png', '', '', '0000-00-00 00:00:00', '2019-02-07 17:12:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Haldins People', '<p><em>We are Haldin. A company built on teamwork, trust, and synergy of great people. We are passionate about what we do. We live in a fun-happy environment that promotes creativity and innovation. It&#39;s the love for what we do that bring out the best in all of us. we are high achiever and strive for great success. We are family and friends.</em></p>\r\n', 'High Ethical Standards', '<p style=\"text-align:justify\">Working at Haldin means working in a company with a clear strategy and ambitious objectives and commitment to a strong corporate value and high ethical standards. Haldin believes in good and long-lasting relationship with all of our important stakeholders: our management, employees, customers, suppliers, and the communities working together to achieve one goal. Ambitious and enthusiastic employees.</p>\r\n\r\n<p style=\"text-align:justify\">Our working environment encourages talented and ambitious people to work together among enthusiastic colleagues with inspiring and motivating managers. Haldin wants to maintain and develop a challenging and rewarding working environment for our employees.</p>\r\n\r\n<p style=\"text-align:justify\">If you would like to be a part of our team and are looking for a challenging career opportunity, please send your resume and application letter to:&nbsp;<a href=\"mailto:Â career@haldin-natural.com?subject=Career%20with%20Haldin\" target=\"_blank\">&nbsp;career@haldin-natural.com</a></p>\r\n', '', 'About Us - 1920 x 900px.png', 'About Us - 555 x 650px.png', 'our people 4.png', 'our people 5.png', '2019-02-07 18:18:56', '2019-02-07 18:17:07', '2019-02-04 16:38:46', '2019-02-04 16:39:37'),
(3, '', '', '', '', '', '', 'our people 4.png', '', '', '0000-00-00 00:00:00', '2019-02-04 15:31:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `current_login` datetime NOT NULL,
  `page` text NOT NULL,
  `status` int(5) NOT NULL,
  `hit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id`, `name`, `password`, `current_login`, `page`, `status`, `hit`) VALUES
('admin', 'Admin MIS', '5bcefed96c53191bde0d1d90fa0e06a0', '0000-00-00 00:00:00', '', 1, 0),
('marketing.haldin', 'Marketing Haldin', '5bcefed96c53191bde0d1d90fa0e06a0', '0000-00-00 00:00:00', '', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_blog_record`
--

CREATE TABLE `t_blog_record` (
  `id` int(100) NOT NULL,
  `judul_blog` text NOT NULL,
  `username` text NOT NULL,
  `date_created` date NOT NULL,
  `headline` text NOT NULL,
  `content` text NOT NULL,
  `category_product` text NOT NULL,
  `tags` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_blog_record`
--

INSERT INTO `t_blog_record` (`id`, `judul_blog`, `username`, `date_created`, `headline`, `content`, `category_product`, `tags`) VALUES
(2, 'It\'s Coffee Liquid Extract!', 'Marketing Haldin', '2019-01-22', 'Haldin\'s Coffee Product', 'Produced from Indonesian origin coffee Robusta and Arabica beans, Haldin’s Coffee Extract is made for one sole purpose; delivering the sensory characteristics of a freshly brewed coffee.\r\n\r\n\r\nCoffee Extract\r\nConcentrated liquid extract, containing full characteristics of coffee, from top note to body note flavor.\r\n\r\n\r\nTechnology\r\nOur technology allows the process to capture the entire aroma profile of roasted coffee beans, whilst extracting the body profile to its optimal yields, making it a distinctive coffee extract when compared to others.\r\n\r\n\r\nCoffee Liquid Extract Application :\r\nBeverages: Syrup, Ready-to-drink beverage, Instant powder drink, Flavored water, Effervescent, Fruits beverage, Carbonated drink\r\n\r\nSweet goods: Biscuits, Cereal, Cracker, Snacks, Bakery, Instant dessert\r\n\r\nDairy: Ice cream, Milk, Yoghurt\r\n\r\nConfectionary: Hard candy, Chewing gum, Chocolate, Soft candy', 'Tea & Coffee', 'Tea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_category_poduct`
--

CREATE TABLE `t_category_poduct` (
  `id` varchar(20) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_category_poduct`
--

INSERT INTO `t_category_poduct` (`id`, `name`) VALUES
('PROD001', 'Tea & Coffee'),
('PROD002', 'Functional Ingredients'),
('PROD003', 'Cocoa & Vanilla'),
('PROD004', 'Essential Oil'),
('PROD005', 'Honey & Coconut'),
('PROD006', 'Cosmetic & Care Ingredients'),
('PROD007', 'Fruit & Vegetable'),
('PROD008', 'Seasoning Ingredients');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_main_page`
--

CREATE TABLE `t_main_page` (
  `id` int(10) NOT NULL,
  `welcome_headline` text NOT NULL,
  `welcome_content` text NOT NULL,
  `file_name` text NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_main_page`
--

INSERT INTO `t_main_page` (`id`, `welcome_headline`, `welcome_content`, `file_name`, `uploaded_on`) VALUES
(1, 'Welcome to haldin natural', '<p>Our products are the building blocks that deliver exceptional top note, mouthfeel, taste and health functions inside the consumer products. At Haldin, we produce an extensive line of quality natural ingredients for our customers needed by various industries; Beverage; Dairy; Bakery; Confectionery; Cosmetic and Care</p>', 'Background_Home.jpg', '2019-01-29 11:01:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_main_product`
--

CREATE TABLE `t_main_product` (
  `id` int(20) NOT NULL,
  `file_name` text NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_main_product`
--

INSERT INTO `t_main_product` (`id`, `file_name`, `uploaded_on`) VALUES
(1, 'our product.jpg', '2019-02-08 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_online`
--

CREATE TABLE `t_online` (
  `id` int(10) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `url` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_online`
--

INSERT INTO `t_online` (`id`, `ip`, `url`, `time`, `date`) VALUES
(0, '', '/haldinnatural/cpanel/login.ph', '08:28:40', '2019-01-28'),
(6, '::1', '/haldinnatural/cpanel/login.ph', '09:51:31', '2019-01-24'),
(7, '', '/haldinnatural/cpanel/login.ph', '09:52:43', '2019-01-24'),
(8, '', '/haldinnatural/cpanel/login.ph', '09:54:45', '2019-01-24'),
(9, '', '/haldinnatural/cpanel/login.ph', '10:59:25', '2019-01-24'),
(10, '', '/haldinnatural/cpanel/login.ph', '11:07:10', '2019-01-24'),
(11, '', '/haldinnatural/cpanel/login.ph', '11:07:17', '2019-01-24'),
(12, '', '/haldinnatural/cpanel/login.ph', '11:07:51', '2019-01-24'),
(13, '', '/haldinnatural/cpanel/login.ph', '11:08:07', '2019-01-24'),
(14, '', '/haldinnatural/cpanel/login.ph', '11:29:24', '2019-01-24'),
(15, '', '/haldinnatural/cpanel/login.ph', '11:33:42', '2019-01-24'),
(16, '', '/haldinnatural/cpanel/login.ph', '11:35:31', '2019-01-24'),
(17, '', '/haldinnatural/cpanel/login.ph', '13:26:34', '2019-01-24'),
(18, '', '/haldinnatural/cpanel/login.ph', '13:33:48', '2019-01-24'),
(19, '', '/haldinnatural/cpanel/login.ph', '13:48:09', '2019-01-24'),
(20, '', '/haldinnatural/cpanel/login.ph', '16:15:39', '2019-01-24'),
(21, '', '/haldinnatural/cpanel/login.ph', '17:44:49', '2019-01-24'),
(22, '', '/haldinnatural/cpanel/login.ph', '20:50:27', '2019-01-24'),
(23, '', '/haldinnatural/cpanel/login.ph', '08:13:49', '2019-01-25'),
(24, '', '/haldinnatural/cpanel/login.ph', '10:12:48', '2019-01-25'),
(25, '', '/haldinnatural/cpanel/login.ph', '11:09:29', '2019-01-25'),
(26, '', '/haldinnatural/cpanel/login.ph', '16:38:25', '2019-01-25'),
(27, '', '/haldinnatural/cpanel/login.ph', '20:24:58', '2019-01-26'),
(28, '', '/haldinnatural/cpanel/login.ph', '20:50:13', '2019-01-26'),
(29, '', '/haldinnatural/cpanel/login.ph', '05:31:27', '2019-01-27'),
(30, '', '/haldinnatural/cpanel/login.ph', '05:36:26', '2019-01-27'),
(31, '', '/haldinnatural/cpanel/login.ph', '10:08:11', '2019-01-27'),
(32, '', '/haldinnatural/cpanel/login.ph', '10:12:45', '2019-01-27'),
(33, '', '/haldinnatural/cpanel/login.ph', '21:46:44', '2019-01-27'),
(34, '', '/haldinnatural/cpanel/login.ph', '09:18:51', '2019-01-28'),
(35, '', '/haldinnatural/cpanel/login.ph', '10:33:45', '2019-01-29'),
(36, '', '/haldinnatural/cpanel/login.ph', '12:51:30', '2019-01-29'),
(37, '', '/haldinnatural/cpanel/login.ph', '12:52:11', '2019-01-29'),
(38, '', '/haldinnatural/cpanel/login.ph', '12:55:26', '2019-01-29'),
(39, '', '/haldinnatural/cpanel/login.ph', '10:33:00', '2019-01-30'),
(40, '', '/haldinnatural/cpanel/login.ph', '13:45:03', '2019-02-04'),
(41, '', '/haldinnatural/cpanel/login.ph', '14:08:41', '2019-02-04'),
(42, '', '/haldinnatural/cpanel/login.ph', '15:08:23', '2019-02-06'),
(43, '', '/haldinnatural/cpanel/login.ph', '21:07:52', '2019-02-06'),
(44, '', '/haldinnatural/cpanel/login.ph', '08:16:33', '2019-02-07'),
(45, '', '/haldinnatural/cpanel/login.ph', '17:07:49', '2019-02-07'),
(46, '', '/haldinnatural/cpanel/login.ph', '18:10:50', '2019-02-07'),
(47, '', '/haldinnatural/cpanel/login.ph', '08:48:06', '2019-02-08'),
(48, '', '/haldinnatural/cpanel/login.ph', '10:40:36', '2019-02-08'),
(49, '', '/haldinnatural/cpanel/login.ph', '22:25:52', '2019-02-08'),
(50, '', '/haldinnatural/cpanel/login.ph', '05:10:23', '2019-02-09'),
(51, '', '/haldinnatural/cpanel/login.ph', '20:48:39', '2019-02-09'),
(52, '', '/haldinnatural/cpanel/login.ph', '21:33:43', '2019-02-09'),
(53, '', '/haldinnatural/cpanel/login.ph', '21:34:23', '2019-02-09'),
(54, '', '/haldinnatural/cpanel/login.ph', '08:52:24', '2019-02-10'),
(55, '', '/haldinnatural/cpanel/login.ph', '08:54:30', '2019-02-10'),
(56, '', '/haldinnatural/cpanel/login.ph', '08:56:00', '2019-02-10'),
(57, '', '/haldinnatural/cpanel/login.ph', '08:56:12', '2019-02-10'),
(58, '', '/haldinnatural/cpanel/login.ph', '07:59:26', '2019-02-11'),
(59, '', '/haldinnatural/cpanel/login.ph', '09:02:53', '2019-02-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_our_product`
--

CREATE TABLE `t_our_product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `file_name` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_our_product`
--

INSERT INTO `t_our_product` (`id`, `name`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'Tea & Coffee', 'Haldin Product-01.png', '2019-01-28 09:26:06', '1'),
(2, 'Functional Ingredients', 'Haldin Product-02.png', '2019-01-27 10:41:05', '1'),
(3, 'Essential Oil', 'Haldin Product-04.png', '2019-01-27 08:46:12', '1'),
(4, 'Cocoa & Vanilla', 'Haldin Product-03.png', '2019-01-27 08:51:00', '1'),
(5, 'Honey & coconut', 'Haldin Product-05.png', '2019-01-27 08:54:53', '1'),
(6, 'Cosmetic & Care', 'Haldin Product-06.png', '2019-01-27 09:00:30', '1'),
(7, 'Fruit & Vegetable', 'Haldin Product-07.png', '2019-01-27 09:03:27', '1'),
(8, 'Seasoning Ingredients', 'Haldin Product-08.png', '2019-01-27 09:05:08', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_page_admin`
--

CREATE TABLE `t_page_admin` (
  `id` int(100) NOT NULL,
  `nama_menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_page_admin`
--

INSERT INTO `t_page_admin` (`id`, `nama_menu`) VALUES
(1, '828e0013b8f3bc1bb22b4f57172b019d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_process_capabilities`
--

CREATE TABLE `t_process_capabilities` (
  `id` int(20) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `header` text NOT NULL,
  `isi` text NOT NULL,
  `photo` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `banner_photo` text NOT NULL,
  `banner_uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_process_capabilities`
--

INSERT INTO `t_process_capabilities` (`id`, `title`, `content`, `header`, `isi`, `photo`, `uploaded_on`, `banner_photo`, `banner_uploaded_on`) VALUES
(1, 'Process & Capabilities', '<p>At Haldin, we believe that the best quality products come from a combination of the right process and the best technology. Commited to this principle, we ensure that everything at Haldin; The People, The Processes, and The Technology is properly integrated</p>\r\n', '', '', 'teknologi spray drying.png', '2019-02-08 17:21:08', 'teknologi - 4-min.png', '2019-02-08 17:11:57'),
(2, '', '', '1. Manufacturing', '<p>We are fully equipped with the technology, expertise, and experience to employ the right production technique to produce the right product :</p><p>âœ” Milling</p><p>âœ” Distilling</p><p>âœ” Fractionating</p><p>âœ” Extracting</p><p>âœ” Spray drying</p>', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, '', '', '2. Pilot Plant', '<p>The Pilot Plants provide a way to simulate a continuous countercurrent extraction process and pre-determine process parameters such as temperature, solvent requirement, yields, production time and costs.</p><p>Knowing the product quality and evaporation behavior or temperature sensitivity of an extract is important for a successful extraction.</p>', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(4, '', '', '3. Pilot Extraction Plant', '<p>Haldin pilot extraction and evaporation plants provide us the possibility to determine the relevant process parameters which are necessary for the production plant beforehand.</p><p>Haldin extraction plants fully meet these demands due to innovative exchange of views with customers and extensive experiences in practice. The extraction plants are used for the recovery of natural extracts; oleoresins, colorings, aromas, extractive-basic materials in general from:</p><p>âœ” Leaves</p><p>âœ” Roots</p><p>âœ” Seeds</p><p>âœ” Barks</p><p>âœ” Spices</p><p>âœ” Fruits</p><p>âœ” Others</p>', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, '', '', '4. Pilot Evaporation Plant', '<p>Evaporation unit, condenser, vacuum pump.&nbsp;</p>\r\n\r\n<p>Advantages from pilot extraction plants:</p>\r\n\r\n<p>Determination of all process conditions which are necessary for the design and of a production plant, as for example: yields, solvent requirement, temperatures, etc.</p>\r\n', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_product`
--

CREATE TABLE `t_product` (
  `id` int(10) NOT NULL,
  `product` text NOT NULL,
  `story` text NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `content3` text NOT NULL,
  `content4` text NOT NULL,
  `content5` text NOT NULL,
  `jenis_product1` text NOT NULL,
  `content_product1` text NOT NULL,
  `jenis_product2` text NOT NULL,
  `content_product2` text NOT NULL,
  `jenis_product3` text NOT NULL,
  `content_product3` text NOT NULL,
  `jenis_product4` text NOT NULL,
  `content_product4` text NOT NULL,
  `banner_photo` text NOT NULL,
  `slider1` text NOT NULL,
  `slider2` text NOT NULL,
  `slider3` text NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_product`
--

INSERT INTO `t_product` (`id`, `product`, `story`, `content1`, `content2`, `content3`, `content4`, `content5`, `jenis_product1`, `content_product1`, `jenis_product2`, `content_product2`, `jenis_product3`, `content_product3`, `jenis_product4`, `content_product4`, `banner_photo`, `slider1`, `slider2`, `slider3`, `status`) VALUES
(1, 'Tea', '<p>Haldin combines state of the art processing with the highest quality raw materialsto produce pure tea concetrated liquid and spray dried products. In order to fulfill the needs of our customers, Haldin produces several distinct lines of liquid products, essence, natural concentrates, extracts, and spray dried extract</p>\r\n', '<p>Made to perfection using the best raw materials, the right process, and the best technology, Haldin&#39;s Tea Extracts provides the essential top note and most intense tea flavor, resembling that to a freshly brewed tea. From green tea to black tea, from liquid extracts to spray dried extracts, our products are natural, yet consistent in quality, and naturally safe.Available in form of Essence, Concentrate, Extract, and Spray Dried.</p>\r\n', '', '', '', '', 'Tea Essenstrateâ„¢', '<p>A proprietary of Haldin involving a non-heated concentration method for aromatic volatile to provide an enchanced natural flavor.</p>\r\n', 'Tea Essence', '<p>Enchance your products with intense flavor and aroma. The tea essence, which provides the essential top note and most intense natural flavor of tea, is made to meet market needs for a strong aroma, which enriches, improves, and differentiates customers products.</p>\r\n', 'Tea Concentrate & Extract', '<p>Brings the essence of tea and delivers the entire flavor profile of the tea. Haldin&rsquo;s natural tea concentrate and extract contain both the top note essence of the natural product and the body notes of the tea it self; some of which could be bitterness, sweetness, or acidity.</p>\r\n', 'Tea Spray Dried', '<p>Naturally stable, easy and cost-effective to transport, without ever have to worry about the loss of quality. Tea Spray dried extract offers a number of advantages to the user. It can also be used in dry mixes. Haldin spray dries its tea extracts to produce tea powder extracts for use mainly in tea beverage related products.&nbsp;</p>\r\n', 'Coffee & Tea - Banner2.png', 'Tea - 1.png', 'Tea - 2.png', 'Tea - 3.png', 1),
(2, 'Coffee', 'Haldin combines state of the art processing with the highest quality raw materialsto produce pure tea concetrated liquid and spray dried products. In order to fulfill the needs of our customers, Haldin produces several distinct lines of liquid products, essence, natural concentrates, extracts, and spray dried extracts.', 'Produced from Indonesian origin Coffee Robusta & Arabica beans, Haldinâ€™s Coffee Extract is made for one soul purpose; resembling the sensory characterisÂ­tics of a freshly brewed coffee. Our technology allows the process to capture the entire aroma profile of roasted coffee beans, whilst extracting the body to its optiÂ­mal yield, making it a distinctive coffee extract compared to others. Available in Coffee Essence, Coffee Concentrate, and Coffee Extract', '', '', '', '', 'Coffee Concentrate', 'Natural coffee concentrate contains the body note that provides the entire coffee profile.', 'Coffee Essence', ' Coffee Essence offers a distinctive coffee aroma, used extensively to enhance the coffee related products distinctive aromas and tastes. It is natural, simple, and cost effective for the use in coffee beverage formulations which requires a more â€œrealâ€ coffee characteristics in the end product.', 'Coffee Extract', 'Haldinï¿½s natural coffee extract contain both the top note essence of the natural product and the body notes of the coffee, these natural concentrates provide the entire flavor profile of coffee. These products are mainly used as building blocks ingredients for coffee ready to drinks, candies, and bakery fillings & toppings.', '', '', '', 'coffee - 1.png', 'coffee - 2.png', 'coffee - 3.png', 1),
(3, 'Functional Ingredients', '<p><em>Haldin combines state of the art processing with the highest quality raw materials to produce liquid &amp; spray dried products</em></p>\r\n', '<p style=\"text-align:justify\">Other Haldin powder extracts such as roselle, pandan, tamarind, and ginger, represent the exotic and the uniqueness of products characteristic to Indonesia; suitable for those in the flavoring and F&amp;B industries</p>\r\n\r\n<p style=\"text-align:justify\">Extracting goodness and key characteristics from natural plant concentrated liquids and transforming them into dried extracts demands a combination of expertise, experience, and technology.</p>\r\n', '<p style=\"text-align:justify\">For pharmaceutical use, Haldin serves the market with products such as; red ginger, eurycoma longifolia, and guava leaf extracts, which are being standardized for its active constituents, making it reliable and dependable for promoting specific health benefits. Other added value features include; product textures, particle size, and water-soluble based products, which can be easily blended with other ingredients.</p>\r\n\r\n<p style=\"text-align:justify\">Other Haldin powder extracts such as roselle, pandan, tamarind, and ginger, represent the exotic and the uniqueness of products characteristic to Indonesia; suitable for those in the flavoring and F&amp;B industries.</p>\r\n', 'Haldin spray dries its natural extracts to produce powder extracts for use in foods, beverages, health foods, and pharmaceuticals applications. With its existing range of product variants, Haldin is capable of fulfilling demand for many types of product. Key spray dried products include sour lime, guarana, and ginger powder extract.', 'For pharmaceutical use, Haldin serves the market with products such as; red ginger, eurycoma longifolia, and guava leaf extracts, which are being standardized for its active constituents, making it reliable and dependable for promoting specific health benefits. Other added value features include; product textures, particle size, and water-soluble based products, which can be easily blended with other ingredients.', 'Other Haldin powder extracts such as roselle, pandan, tamarind, and ginger, represent the exotic and the uniqueness of products characteristic to Indonesia; suitable for those in the flavoring and F&B industries.', '', '', '', '', '', '', '', '', 'Functional - Banner.png', 'functional - 1.png', 'functional - 2.png', 'functional - 3.png', 1),
(4, 'Essential Oil', '<p style=\"text-align:center\"><em>Essential Oils were initially produced in Egypt, as early as 3,500 BC. They were used extensivelly for aromatherapy in religion, as well as for medicinal purposes. They were followed bu the Chinese and Indians, who used essential oils for armoatherapy massage as a treatment and promoted them for health and the power of their fragrance. Since the late 1970 and early 1980&#39;s the use of essential oil has become a major part of alternative and holistic health systems, and has a huge beneficial usage across the world.&nbsp;</em></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', '<p style=\"text-align:justify\">Today the use of essential oils has expanded into wider applications. Not only well known for their health benefits, they also make an important contribution in the flavor and fragrance areas. Essential oils also play significant roles in cosmetics, perfumery, aromatherapy, personal care, and to a lesser extent, in household, cleaning agents and toiletries.</p>\r\n\r\n<p style=\"text-align:justify\">Indonesia, as one of the world&rsquo;s largest producers of essential oils, has long been producing key essential oils for the world market. Some of the better known include: citronella, nutmeg, ginger, and ylang ylang. More recently as numerous bo&Acirc;&shy;tanical plants native to Indonesia have been studied and their functional properties been better appreciated, more essential oils have been introduced andhave started to be widely used. Amongst them are: patchouli, kaffir lime, sandalwood, cajuput, cananga, clove bud, and galangal.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', '', 'Essential Oil - Banner.png', 'essential oil - 1.png', 'essential oil - 2.png', 'essential oil - 4.png', 1),
(5, 'Cocoa', '<p>Cocoa has commonly been used to replicate chocolate flavor in formulations simply because genuine chocolate flavors have not been available.</p>', '<p style=\"text-align: justify;\">For cocoa derivative products, Haldin specializes in producing cocoa extracts. Compared to familiar known cocoa powder, cocoa extract has the advantage in its solubility, making it a preferable ingredients for cocoa application products, which in the in the production process simplifies the formulation and ingredients mixing steps. Additionally, it is more intense in flavor and nearly fat free.</p><p style=\"text-align: justify;\">Haldin&rsquo;s Cocoa Extract is available in two forms; liquid and spray dried powder, which, and standardized to contain minimum active compound of polyphenols and naturally occurring theobromine.</p>', '', '', '', '', 'Cocoa Liquid Extract', '<p>This involves the food grade alcoholic extraction of soluble components from cocoa liquor. The extraction is then concentrated into fine liquid cocoa with a strong cocoa aroma, chocolate color and deep, rich flavour. The extract is water soluble. The product is Halal certified.</p>', 'Chocolate Liquid Extract', '<p style=\"text-align: right;\">Haldin chocolate extract is processes to retain the &ldquo;volatile top notes&rdquo; present in raw cocoa beans. Sugar is combined to this extract. Chocolate extract replaces the flavour and aromas which are lost when the beans are processed with heat and pressure. Water soluble and rich chocolate colored this extract is economical efficient in all manufacturing of chocolate products.</p>', 'Cocoa Spray Dried Powder', '<p>Extracted and concentrated with Haldin unique technology and process. It retains high antioxidant theobromine and strong cocoa aroma, completely water soluble and leaves no sediment. The product is Halal certified.</p>', '', '', 'Vanilla & Cocoa - Banner.png', 'cocoa.png', 'cocoa_extract.png', 'cocoa2.png', 1),
(6, 'Vanilla', '<p>Vanilla is the most widely used flavoring in the world, vanilla is a member of the orchida familty. Vanilla originates from Mexico where it was highly prized by The Ancient Aztec Totonaco Indians. Spanish conquistadors brought it to Europe from where it was introduced to French possessions in the tropics.</p>', '<p style=\"text-align: justify;\">Today, Indonesia is the world&rsquo;s third biggest grower of vanilla. Vanilla grows across the Archipelago but predominantly in Bali, Sulawesi, and Java.</p><p style=\"text-align: justify;\">Like fine wine, vanilla needs careful handling and aging to produce the best result. After harvesting, the green pods are blanched and then fermented, a process which turns the natural glucocytes in the beans to vanillin, which gives vanilla, its distinctive flavor notes. The beans are then dried naturally in the shade and cured for several months until they are ready to be used.</p><p style=\"text-align: justify;\">Demand for this superb product range from manufacturers of premium ice creams and beverages, up to the chefs of fine restaurants and specialist bakeries. To meet all their needs Haldin offers several types of pure vanilla extracts; all characterized by their pleasant flavor and varied functionality.</p>', '<p style=\"text-align: justify;\">Haldin sources vanilla beans from all the key areas of Indonesia. Involved in their cultivation, picking, and processing, Haldin selects the best beans for its range of vanilla products from single and double fold vanilla extracts, vanilla 10, 20, and 30 folds, vanilla oleoresin and vanilla powder.</p><p style=\"text-align: justify;\">An essential ingredient in so many of the world&rsquo;s favorite products, vanilla is widely used by the food and beverage industry, adding its smooth sweetness to ice creams and dairy products, confectionary, baked and frozen foods, and drinks. Vanilla is also used by the pharmaceutical industry in medicines and in tablet coatings, as well as playing a calming role in aromatherapy, in which vanilla oil is used to induce a state of calm</p>', '', '', '', 'Vanilla Extract', '<p>Haldin produces one fold to 30 fold extracts. The product is water soluble, which gives it extensive uses in various manufacturing processes.</p>', 'Vanilla Spray Dried Powder', '<p>Haldin Vanilla Spray Dried powder is water soluble. It is like brown in coloring and comes with a pleasant and lingering aroma.</p>', 'Vanilla Oleoresin', '<p>Lucious brown and is thicker than honey-almost semi solid. It is soluble in oil. Haldin Vanila Oleoresin is almost 100% moisture-free, does not easily oxidize and can have a long shelf-life stored in a cool place.</p>', '', '', '', 'vanilla - 1.png', 'vanilla - 2.png', 'vanilla - 3.png', 1),
(7, 'Cosmetic & Care', '<p style=\"text-align:center\"><em>Haldins cosmetic care ingredients specialize in the supply of an extensive range of natural and conventional ingredients for cosmetic industry, fragrance &amp; perfumery, spa, massage, and aromatherapy applications. Our products include standardized herbal extracts and a large selection of other natural ingredients for development of personal care products.</em></p>\r\n', '<p style=\"text-align:justify\">Haldin is committed to keeping abreast of the latest research in skin care and nutritional ingredients and pledges to make a difference by bridging the gap between supply and demand of the nutritive ingredients that our valued clients require.</p>\r\n\r\n<p style=\"text-align:justify\">We are eager to bring exotic natural ingredients to our customers who are at the forefront of the skin care industries. To help us achieve our goals, we have built strong relationships based on trust and mutual benefit with both our suppliers and clients.</p>\r\n', '<p style=\"text-align:justify\">Our dedicated R&amp;D team is delighted to assist you with sourcing new products and ingredients for your formulation needs. We offer our valued clients the benefit of our strong, established relationships with manufacturers around the globe, and our capacity to source products quickly, efficiently, and cost effectively. Between our highly qualified technical staff, we work closely with our clients to ensure that the products we provide to them meet our customers needs, perform to their expectations and are delivered on time, on budget, and to the best quality. From raw material to client, we provide a whole-of service solution.</p>\r\n\r\n<p style=\"text-align:justify\">We welcome and encourage you to please let us know of any ingredients that you are seeking but are not able to locate via our website.</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Cosmetic Care - Banner2.png', 'cosmetic care - 1.png', 'cosmetic care - 2.png', 'cosmetic care - 3.png', 1),
(8, 'Seasoning Ingredients', '<p style=\"text-align: center;\"><em>Spices and seasonings are used for flavor, color, aroma, and preservation of food or beverages. Spices may be derived from many parts of the plant : Bark, Buds, Flowers, Fruits, Leaves, Rhizomes, Roots, Seeds, Stigmas, and Styles or The Entire Plant Tops. Spices are often dried and used in processed but complete state.</em></p>', '<p style=\"text-align: justify;\">Spices and seasoning have been used in foods for centuries. Archeologists estimate that by 50,000 B.C. primitive man had discovered that parts of certain aromatic plants help make food taste better. Using herbs and spices in cooking offers the chance to prepare exotic gourmet dishes or ethnic meals.</p><p style=\"text-align: justify;\">Haldin are dedicated to satisfying the special needs of our customers, be it a new formulation, developing customized products, and providing technical assistance. All spices and seasoning are made based on their natural aroma, color, specific texture, and taste requirements.</p><p style=\"text-align: justify;\">With a capable R&amp;D team led by highly qualified R&amp;D personnel in food industry, we are specialized in manufacturing and developing special and proprietary formula for food companies. We provide private blends for companies ranging from small businesses to large corporations.</p>', '<p style=\"text-align: justify;\">Haldin offer the highest quality seasoning and spices, we are proud to serve customers with good taste around the world. At Haldin, we take pride in providing high-quality dry blends and outstanding service to our customers.</p><p style=\"text-align: justify;\">Whether you need the assistance of our R&amp;D team, want to clean up an existing ingredient statement, or require a more reliable source to provide your current items, Haldin has the experience to help you succeed. We want to be your partner in keeping you efficient and competitive.</p>', '', '', '', '', '', '', '', '', '', '', '', 'Seasoning - Banner.png', 'seasoning - 1.png', 'seasoning - 2.png', 'seasoning - 3.png', 1),
(9, 'Coconut', '<p style=\"text-align: center;\"><em>To fulfill market requirements for honey and coconut products in their most basic or traditional form, Haldin provides basic materials in products of brown sugar and liquid honey. With these products, Haldin serve the global needs for those inspice &amp; seasonings, herbal beverages, health foods &amp; pharmaceuticals, and for tobacco industries.</em>&nbsp;</p>', '<p style=\"text-align: justify;\">Haldin&rsquo;s Honey and Coconut products are grown and sourced locally, where we work closely with our suppliers all around Indonesia in order to provide the best. By sharing with our suppliers, knowledge provided by our in-house expertise in the agricultural area, and giving assistance in the cultivation and end product selecting process, Haldin aims always to supply our customers with the finest honey and coconut products.</p><p style=\"text-align: justify;\">To conserve exotic, distinctive characteristic of Indonesian honey, and its functional benefits, we guarantee the purity of our honey, as the result of controlled process from upstream to downstream.</p><p style=\"text-align: justify;\">Our Coconut made delicately by the hands of thousands farmers and processed in food safety certified facilities, we ensure our coconut sugar is pure (tested with Carbon Isotope Analyser) and free from allergens.</p>', '', '', '', '', 'Coconut Sugar', '<p style=\"text-align: justify;\">Made delicately by the hands of thousands farmers and processed in food safety certified facilities, we ensure our coconut sugar is pure (tested with Carbon Isotope Analyser) and free from allergens.</p>', 'Coconut Syrup', '<p>Our coconut syrup provides convenience for industrial mixing purposes. Processed and packed aseptically, we guarantee the stability both in shelf life and quality.</p>', 'Coconut Water Powder', '<p>With advance spray drying technology, we ensure our coconut water powder is shelf stable, easily soluble and blends well with other ingredients.</p>', 'Coconut Milk Powder', '<p>Processed hygienically by state of art spray drying technology, we bring you Indonesian most versatile ingredients, coming only from the freshest coconut milk.</p>', 'Coconut - Banner.png', 'coconut_milk_powder.png', 'coconut_sugar.png', 'coconut_sugar2.png', 1),
(10, 'Honey', '', '', '', '', '', '', 'Honey', '<p>To conserve exotic, distinctive characteristic of Indonesian honey, and its functional benefits, we guarantee the purity of our honey, as the result of controlled process from upstream to downstream.</p>', 'Honey Powder', '<p>Produced from selected grades of natural honey which is converted to free-flowing powder using advanced spray dryer machines, with capacity over 3.000 tons per year. Our honey powder is suitable for infant formula, growing up milk, beverages, baked goods, and snacks.</p>', '', '', '', '', '', 'honey.png', 'honey2.png', 'honey3.png', 1),
(11, 'Fruit & Vegetable', '<p style=\"text-align:center\"><em>Haldin&#39;s product line in fruit &amp; vegetable extract, available in wide range of tropical fruit &amp; vegetable.</em></p>\r\n', '<p style=\"text-align:justify\">Our products are produced from selected raw material, which can be an excellent solution for the needs of natural ingredients base both for requirement in natural benefits and standard regulation claims.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Quality</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Starting from tightly monitoring of raw materials selection to calculating the optimum process, our fruit &amp; vegetable extracts are developed to achieve premium quality product.</p>\r\n\r\n<p style=\"text-align:justify\">âœ… Water soluble</p>\r\n\r\n<p style=\"text-align:justify\">âœ… Natural colour</p>\r\n\r\n<p style=\"text-align:justify\">âœ… Taste and aroma recovery</p>\r\n\r\n<p style=\"text-align:justify\">âœ… Long shelf life</p>\r\n\r\n<p style=\"text-align:justify\">âœ… Food safety standard</p>\r\n', '<h3 style=\"text-align:justify\"><strong>Application</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Beverage: Fruit juice based, fruit tea based, hot drinks, cold drinks, syrup<br />\r\nDairy: Ice cream, powder milk, liquid milk, yoghurt<br />\r\nConfectionary: soft candy, hard candy, jelly, chocolate, pudding<br />\r\nBakery: soft cake, cream filling, biscuit<br />\r\nPharmaceutical: Fruit &amp; Vegetable supplement<br />\r\nOthers: Baby food</p>\r\n', '', '', '', '', '', '', '', '', '', '', '', 'Fruit Vegetable - Banner.png', 'fruitvegetable.png', 'fruit vegetables - 2.png', 'fruit vegetables - 3.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_product_application`
--

CREATE TABLE `t_product_application` (
  `id` int(10) NOT NULL,
  `product1` text NOT NULL,
  `product1_content` text NOT NULL,
  `product2` text NOT NULL,
  `product2_content` text NOT NULL,
  `product3` text NOT NULL,
  `product3_content` text NOT NULL,
  `product4` text NOT NULL,
  `product4_content` text NOT NULL,
  `product5` text NOT NULL,
  `product5_content` text NOT NULL,
  `product6` text NOT NULL,
  `product6_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_product_application`
--

INSERT INTO `t_product_application` (`id`, `product1`, `product1_content`, `product2`, `product2_content`, `product3`, `product3_content`, `product4`, `product4_content`, `product5`, `product5_content`, `product6`, `product6_content`) VALUES
(1, 'Beverage', '', 'Dairy', '', 'Confectionery', '', 'Bakery', '', 'Cosmetic', '', 'Food Services', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_safety_quality`
--

CREATE TABLE `t_safety_quality` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `point1_title` varchar(255) NOT NULL,
  `point1_content` text NOT NULL,
  `point1_icon` text NOT NULL,
  `photo` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `banner_photo` text NOT NULL,
  `banner_uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_safety_quality`
--

INSERT INTO `t_safety_quality` (`id`, `title`, `content`, `point1_title`, `point1_content`, `point1_icon`, `photo`, `uploaded_on`, `banner_photo`, `banner_uploaded_on`) VALUES
(1, 'Safety', '<p>Haldin&#39;s processing plants have certification to ensure the highest standards of safety and product integrity.</p>\r\n', '', '', '', 'safety-2.png', '2019-02-11 09:20:54', 'safety.png', '2019-02-09 21:34:52'),
(2, 'Quality', '<p>As well as working with growers to ensure quality, we monitor every step of the production process to ensure consistent product integrity.</p>\r\n', '', '', '', 'quality - 2.png', '2019-02-11 09:24:55', '', '0000-00-00 00:00:00'),
(3, '', '', 'Certified', '<p>We are certified with FSCC 22000, ISO 14001; ISO 9001; Halal; Kosher; Organic; which encompasses: product and process quality; hygiene and safety incorporating GMP/HAACP management; quality management; Halal management; Kosher requirement; Organic management and environmental safeguards and responsibility.</p>\r\n', 'certified.png', '', '2019-02-07 11:45:08', '', '0000-00-00 00:00:00'),
(4, '', '', 'International Standards', '<p>To ensure delivering the high quality products, Haldin applies International Standards, which exhibits Haldin&rsquo;s concern to have the proper, ethical, and international standards of processing the natural ingredients that both responsible to internal and external environment. It encompasses product, process quality; hygiene and safety. FSSC 22000 demonstrates Haldin responsibility to serve customers with the food safety management. By implement this ISO system means Haldin runs GMP (Good Manufacturing Practices) and HACCP (Hazard Analysis and Critical Control Point) to be able to manufacture and deliver the safety products for the best of our valuable customers.</p>', 'international_standards.png', '', '2019-02-07 11:44:49', '', '0000-00-00 00:00:00'),
(5, '', '', '', '<p>Our quality control and testing lab is equipped, and expertly staffed, to undertake Gas chromatography, GC Mass Spectrometry; High Performance Liquid Chromatograph; &nbsp;Carbon Isotope Analyzer; Colorimeter; and Microbiological testing laboratory.</p>\r\n', 'qc.png', '', '2019-02-07 11:48:00', '', '0000-00-00 00:00:00'),
(6, '', '', '', '<p>From source to final destination, the focus is always on meeting customer needs and exceeding customer expectations.</p>', 'good.png', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_solutions_applications`
--

CREATE TABLE `t_solutions_applications` (
  `id` int(20) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `header` text NOT NULL,
  `isi` text NOT NULL,
  `photo` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `banner_photo` text NOT NULL,
  `banner_uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_solutions_applications`
--

INSERT INTO `t_solutions_applications` (`id`, `title`, `content`, `header`, `isi`, `photo`, `uploaded_on`, `banner_photo`, `banner_uploaded_on`) VALUES
(1, 'Solutions & Applications', '<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>At Haldin, we believe that the best quality products come from a combination of the right process and the best technology. </em></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><em>Commited to this principle, we ensure that everything at Haldin; The People, The Processes, and The Technology is properly integrated.</em></span></p>\r\n', '', '', 'teknologi - 3.png', '2019-02-08 22:32:39', 'teknologi - 5-min.png', '2019-02-08 22:31:53'),
(2, '', '', '1. Research & Development', '<p>Haldin&#39;s extensive experience in meeting the needs of the food, beverage, flavor, fragrance, health food, pharmaceutical, and cosmetic industries, coupled with expertise across its five key product groups, faciliate synergy and innovation in the creation of customized solutions to customer needs.</p>\r\n\r\n<p>&nbsp;As well as responding to specific customer briefs, Haldin&rsquo;s engineers and technicians are also involved in proactive research into new ingredients or improved techniques that will bring out the best in natural materials and provide better ingredients that will contribute to product quality and better meet customer needs.</p>\r\n', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, '', '', '2. Innovation Lab', '<p>As part of providing total solutions to customers, Haldin has its own innovation lab :</p>\r\n\r\n<p>âœ” Innovation Lab Bakery and Confectionery</p>\r\n\r\n<p>âœ” Innovation Lab Seasoning</p>\r\n\r\n<p>âœ” Innovation Lab Cosmetic and Personal Care</p>\r\n\r\n<p>âœ” Innovation Lab Dairy and Beverage</p>\r\n\r\n<p style=\"text-align:justify\">The Innovation Lab allows Haldin to show and display prototype products for its current and potential customers, giving them the opportunity to give input on finished products ideas. Customers can experience the aroma, taste, and the physical appearance of proposed finished products. The formulations devised by our Innovation Lab expert are often tested by internal panels before being presented to customers.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">At Haldin, customer response and feedback on prototypes always plays a vital role and helps us as we strive for continuous improvement and to exceed customers needs. The Innovation Lab helps us in devising the right product or combination of products to optimize end product efficacy, impact or differentiation.</p>\r\n', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(4, '', '', '3. Technical Services', '<p>Technical services play significant roles ensuring us to deliver only the best quality products.</p><p>From start to finish, technical services put lots of their attempt to guarantee the product quality achieved. By monitoring and analyzing products with several parameters, Haldin technical services must ensure the finished products are within the specification, making sure those rigid requirements are met.</p><p>Before raw materials are being processed, Haldin would do several checks, initially regarding the supplier requirement and the raw materials diagnose. It is done for us to be able to detect and check whether raw materials received are within our range of specification. From there, technical services would ensure that we only purchase those best quality raw materials. Once agreed, we would then transfer and give it to be produced by our related operating business units. When the production finished, it will be returned back to the technical services, the finished products must pass the quality test on product specification.</p><p>To check the finished product quality, Haldin equip itself by providing several tools which includes; Gas Chromatography, High Performance Liquid Chromatography and Microbiological Testing Unit. Several components being tested are; microbiological testing, total solid, active ingredients and the physical appearances which must pass our rigid requirement.</p><p>When the products quality have been ensured and approved, technical services would issue the supporting data as the reliable &amp; valid documentation. Those related data include; Certificate of Analysis or COA, Material Sheet Data Specification or MSDS and Product Specification. All data at the end will be documented and kept for specific period of time, depending on their use.</p><p>Those stages of checking and analyzing, is done only to meet the high products requirement from customers. By understanding that, hence delivering the best quality products would be placed as our first priority.</p>', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(5, '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sustainability`
--

CREATE TABLE `t_sustainability` (
  `id` int(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `point1_title` varchar(255) NOT NULL,
  `point1_content` text NOT NULL,
  `point1_icon` text NOT NULL,
  `photo` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `banner_photo` text NOT NULL,
  `banner_uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_sustainability`
--

INSERT INTO `t_sustainability` (`id`, `title`, `content`, `point1_title`, `point1_content`, `point1_icon`, `photo`, `uploaded_on`, `banner_photo`, `banner_uploaded_on`) VALUES
(1, 'Sustainability', '<p style=\"text-align:justify\"><em>Sustainable development is development that meets the needs of the present without compromising the ability of future generations to meet their own needs</em></p>\r\n\r\n<p style=\"text-align:justify\"><em>Haldin sustainability means that we really taken care of processing the safety products from start to finish. It involves the traceability, gather reliable sources, monitor the incoming sources which should meet our specification, processing, quality control, and microbiological test.</em></p>\r\n', '', '', '', 'sustainbility - 2.png', '2019-02-10 09:23:27', 'sustainability-min.png', '2019-02-10 09:13:11'),
(2, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(3, '', '', 'Our Approach to Sustainability', '<p>Being committed to sustainability is an integral part of Haldin&rsquo;s vision and mission of being the leading manufacturer which supply the selected natural ingredients to many range of different customers worldwide.</p><p>To achieve this, we must understand what sustainability means for our business, build it into every component of our value chain, and involve every employee within Haldin.</p><p>We believe that by making corporate social accountability, an integral part of the way we work will create long-term value on an economically, socially, and environmentally sustainable basis.</p><p>We will do this by being transparent and open to discussion with our stakeholders and by respecting and responding to the values and concerns of the communities in which we operate.</p><p>In our discussion forum with our stakeholders, Haldin would highlight:</p><p>âœ” Safety</p><p>âœ” Health</p><p>âœ” Environment</p><p>âœ” Quality</p>', 'ss-icon-6.png', '', '2019-02-10 09:23:54', '', '0000-00-00 00:00:00'),
(4, '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_why_choose_us`
--

CREATE TABLE `t_why_choose_us` (
  `id` int(10) NOT NULL,
  `point1` text NOT NULL,
  `point1_content` text NOT NULL,
  `point2` text NOT NULL,
  `point2_content` text NOT NULL,
  `point3` text NOT NULL,
  `point3_content` text NOT NULL,
  `file_name` text NOT NULL,
  `file_name2` text NOT NULL,
  `file_name3` text NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_why_choose_us`
--

INSERT INTO `t_why_choose_us` (`id`, `point1`, `point1_content`, `point2`, `point2_content`, `point3`, `point3_content`, `file_name`, `file_name2`, `file_name3`, `uploaded_on`, `status`) VALUES
(1, 'Complete Traceability', '<p>We adding value to local natural raw materials and all our sources are traceable</p>', 'Our Expertise', '<p>We competences in Liquid extraction/ distillation &amp; Powder Technology. Haldin operates five manufacturing sites in Indonesia uses the largest and newest of the facilities, with an annual capacity more than 20,000 tons.</p>', 'Catering to the world market', '<p>Today, we ship to more than 53 countries around the world.</p>', 'about.jpg', 'why choose us - 2.png', 'why choose us - 1.png', '2019-02-07 17:12:16', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_about_us`
--
ALTER TABLE `t_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_blog_record`
--
ALTER TABLE `t_blog_record`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_category_poduct`
--
ALTER TABLE `t_category_poduct`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_main_page`
--
ALTER TABLE `t_main_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_main_product`
--
ALTER TABLE `t_main_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_online`
--
ALTER TABLE `t_online`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_our_product`
--
ALTER TABLE `t_our_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_page_admin`
--
ALTER TABLE `t_page_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_process_capabilities`
--
ALTER TABLE `t_process_capabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_product`
--
ALTER TABLE `t_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_product_application`
--
ALTER TABLE `t_product_application`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_safety_quality`
--
ALTER TABLE `t_safety_quality`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_solutions_applications`
--
ALTER TABLE `t_solutions_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_sustainability`
--
ALTER TABLE `t_sustainability`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_why_choose_us`
--
ALTER TABLE `t_why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_about_us`
--
ALTER TABLE `t_about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_blog_record`
--
ALTER TABLE `t_blog_record`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_main_product`
--
ALTER TABLE `t_main_product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_online`
--
ALTER TABLE `t_online`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `t_our_product`
--
ALTER TABLE `t_our_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_page_admin`
--
ALTER TABLE `t_page_admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_process_capabilities`
--
ALTER TABLE `t_process_capabilities`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_product`
--
ALTER TABLE `t_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `t_product_application`
--
ALTER TABLE `t_product_application`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `t_safety_quality`
--
ALTER TABLE `t_safety_quality`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `t_solutions_applications`
--
ALTER TABLE `t_solutions_applications`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `t_sustainability`
--
ALTER TABLE `t_sustainability`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_why_choose_us`
--
ALTER TABLE `t_why_choose_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
