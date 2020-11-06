-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 06 nov. 2020 à 14:49
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `catalog_project1`
--

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'ready-to-use'),
(2, 'ingredients'),
(3, 'diy-kit'),
(4, 'recipe-book'),
(5, 'essential-oils');

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id_img`, `name_img`, `alt_img`) VALUES
(5, 'products/baking-soda.png', 'Bob\'s Red Mill - Backing soda'),
(6, 'products/bathroom-cleaner.png', 'Bio-D - Bathroom cleaner'),
(8, 'products/bobsredmill.jpeg', 'Bob\'s Red Mill'),
(9, 'products/book1.png', '\"Homemade Cleaners\"'),
(10, 'products/book2.png', '\"Essential Oils\"'),
(11, 'products/citric-acid.png', 'It\'s Just! - Citric Acid'),
(12, 'products/eucalyptus.png', 'Aroma-Zone - Eucalyptus'),
(13, 'products/hemp-soap.png', 'Bio-D - Hemp Soap'),
(14, 'products/kit1.png', 'Green Goddess - kit'),
(15, 'products/kit2.png', 'Green Goddess - kit'),
(16, 'products/kit3.png', 'Green Goddess - kit'),
(17, 'products/lavender.png', 'Aroma-Zone - Lavender'),
(18, 'products/lemon.png', 'Aroma-Zone - Lemon'),
(19, 'products/marseille-soap.png', 'Marius Fabre - Marseille Soap'),
(20, 'products/mirror-spray.png', 'Bio-D - Mirror Spray'),
(21, 'products/surface-sanitiser.png', 'Bio-D - Surface Sanitiser'),
(22, 'products/vinegar.png', 'White House - Lavender Vinegar'),
(23, 'products/washing-up.png', 'Bio-D - Washing up!'),
(24, 'products/itsjust!.png', 'It\'s Just!'),
(25, 'products/aroma-zone.jpeg', 'Aroma-Zone'),
(26, 'products/whitehouse.png', 'White House'),
(27, 'products/marius-fabre.png', 'Marius Fabre'),
(28, 'products/green-goddess.png', 'Green Goddess'),
(29, 'products/clean-mama.jpg', '\"Clean Mama\'s Guide\"'),
(30, 'products/biod.jpg', 'Bio-D');

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `description_product`, `price_product`, `discount_product`, `discount_start_date_product`, `discount_end_date_product`, `promoted_product`, `instock_product`) VALUES
(1, 'Marseille Soap - Marius Fabre', 'Since 1900 Marius Fabre has been making soap that is cooked in a cauldron to traditional Marseille soap-making methods. Made from vegetable oils –no colouring, no added fragrances and no synthetic products– our Marseille olive oil soap cubes are parti', '8.80', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 1, 1),
(2, 'Baking Soda - Bob\'s Red Mill', ' Use as a cleansing booster with your laundry or dish detergent, as a pH buffer in swimming pools, or for cleaning kitchen surfaces.\r\nA natural antigen against bacterial and fungal growth, as well as an effective pest deterrent, sodium bicarbonate can be ', '9.90', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(3, 'Citric Acid - It\'s Just', 'Effective homemade cleaner that removes rust, lime, hard water stains or calcium desposits; Natural antibacterial composition; Deoderize and clean household appliances, faucets and much more; Remove unsightly buildup easily; Environment friendly ', '15.50', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(4, 'Cleaning Vinegar - White House', 'Lavender scent, healthy, safe.\r\nStronger to clean better! 6% acidity!\r\n100% All Natural ', '4.40', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(5, 'Laundry Powder Kit - Green Goddess', 'The Green Goddess Laundry Powder Kit makes four batches of concentrated laundry powder.  Using 1tbs per wash gives you 132 washes – just 34 cents per wash.\r\nEach kit contains 1kg of our Premium Baking Soda, 1 kg of our Premium Soda Ash and a 500ml bottl', '39.90', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(6, 'Natural Cleaning Pack - Green Goddess', 'Start living a more natural, toxin-free life with our Natural Cleaning Starter Pack. Keep all the products for yourself or gift them to friend interested in changing to a cleaner greener way.\r\nNatural Cleaning Starter Pack includes;\r\n\r\nGlass Cleaner 500ml', '59.90', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(7, 'Basic Natural Kit - Green Goddess', 'This basic natural cleaning DIY kit will give you everything you need to start making chemical-free cleaners for your home. \r\nKit includes;\r\n1kg Premium Baking Soda\r\n1kg Premium Borax\r\n1kg Premium Soda Ash\r\n1 kg Premium Oxygen Bleach\r\n1 Litre Double Stren', '85.50', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(8, 'Eucalyptus staigeriana BIO - Aroma-zone', 'This lemon-scented oil can be used in laundry and floor products', '5.80', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(9, 'Provence Lavender - Aroma-zone', 'Great calming, fine Lavender essential oil is normally used in laundry products', '5.70', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(10, 'Organic sicily lemon - Aroma-zone', 'Fortifying, purifying and sanitizing, Lemon essential oil is appreciated for stimulating the body. Its fine and fruity scent makes it very pleasant and its lemon zest flavor is ideal in cooking and in cleaning products.', '5.60', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(11, 'Bathroom Cleaner - Bio-D', 'Life’s too short to spend ages cleaning the bathroom. This convenient, versatile Bathroom Cleaner is ultra-effective and tough on limescale and watermarks. It can be used on glass, ceramics, perspex, chrome and most non-porous surfaces: just squirt, wai', '3.90', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(12, 'Grapefruit Washing Up Liquid - Bio-D', 'The zingy Pink Grapefruit scent of this concentrated Washing Up Liquid is like sunshine in a bottle. It’s just the ticket to enliven the senses and makes tackling that stack of dirty dishes that little bit easier. It’s incredibly tough on burnt-on sta', '2.20', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(13, 'Glass & Mirror Spray - Bio-D', 'Give windows the wow factor and mirrors a makeover with this streak free Glass and Mirror Cleaner.', '2.00', 20, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(14, 'Multi Surface Sanitiser - Bio-D', 'Use this wonder product on sinks, baths, cookers, floors, tiles, work surfaces and paintwork ,add neat to a cloth for those heavy duty jobs or mix a small amount with water for citrus cleaning power.', '3.30', 30, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(15, 'Hemp Oil Soaps - Bio-D', 'Handmade soap using the finest quality, organic cold pressed hemp seed oil.\r\n\r\nThe Hemp Oil soaps are moisturising and have gentle cleansing properties.\r\n\r\nThis is a pack of 5 soaps', '10.00', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(16, '\'Homemade cleaners\" - Mandy O. & Dionna F.', 'Discover simple ways to naturally clean your home. Toxic chemicals are found in almost all commercial cleaners—the very products you buy to make your home hygenic and healthy.', '21.90', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(17, '\"Essential Oils\" - Kasey Schwartz', 'From tea tree and lavender to lemon and peppermint, essential oils have been praised for their ability to clean and protect surfaces. Essential Oils for a Clean and Healthy Home teaches you how to use all-natural oils around your home, from cleaning kitch', '15.40', 0, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(18, '\"Clean Mama’s\" - Becky Rapinchuk', 'In Clean Mama’s Guide to a Healthy Home, Becky Rapinchuk, author of Simply Clean and creator of the popular cleaning website Clean Mama, provides a step-by-step guide to take charge of your home’s wellness with a comprehensive, all-natural cleaning sy', '18.50', 50, '2020-11-02 14:18:15', '2020-10-14 07:00:37', 0, 1),
(19, 'Fake Product 1 - Fakery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla ultricies purus et porta. Etiam commodo non nulla in aliquam. Donec tincidunt ante semper mauris ullamcorper, vel fringilla arcu dictum. Pellentesque habitant morbi tristique senectus ', '15.50', 0, '2020-11-04 07:31:03', '2020-11-04 06:31:03', 0, 1),
(20, 'Fake Product 2 - Fakery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla ultricies purus et porta. Etiam commodo non nulla in aliquam. Donec tincidunt ante semper mauris ullamcorper, vel fringilla arcu dictum. Pellentesque habitant morbi tristique senectus', '125.50', 0, '2020-11-04 07:31:28', '2020-11-05 06:33:57', 0, 1),
(21, 'Fake Product 3 - Fakery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla ultricies purus et porta. Etiam commodo non nulla in aliquam. Donec tincidunt ante semper mauris ullamcorper, vel fringilla arcu dictum. Pellentesque habitant morbi tristique senectus ', '256.60', 0, '2020-11-04 07:33:36', '2020-11-04 06:33:36', 0, 1);

--
-- Déchargement des données de la table `product_has_category`
--

INSERT INTO `product_has_category` (`product_id_product`, `category_id_category`) VALUES
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(19, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(15, 2),
(5, 3),
(6, 3),
(7, 3),
(20, 3),
(16, 4),
(17, 4),
(18, 4),
(21, 4),
(8, 5),
(9, 5),
(10, 5),
(19, 5),
(20, 5);

--
-- Déchargement des données de la table `product_has_img`
--

INSERT INTO `product_has_img` (`product_id_product_has_img`, `img_id_product_has_img`) VALUES
(2, 5),
(11, 6),
(2, 8),
(16, 9),
(17, 10),
(3, 11),
(8, 12),
(19, 12),
(15, 13),
(19, 13),
(5, 14),
(20, 14),
(6, 15),
(7, 16),
(9, 17),
(10, 18),
(19, 18),
(1, 19),
(13, 20),
(20, 20),
(14, 21),
(4, 22),
(12, 23),
(3, 24),
(8, 25),
(9, 25),
(10, 25),
(4, 26),
(1, 27),
(5, 28),
(6, 28),
(7, 28),
(18, 29),
(21, 29),
(11, 30),
(12, 30),
(13, 30),
(14, 30),
(15, 30);

--
-- Déchargement des données de la table `shop`
--

INSERT INTO `shop` (`id_shop`, `name_shop`, `lat_shop`, `long_shop`, `street_shop`, `post_code_shop`, `city_shop`, `description_shop`) VALUES
(1, 'AnA Raspail', '48.84', '2.33', '228 Boulevard Raspail', '75014', 'Paris 14e Arrondissement', '01.23.45.67.89'),
(2, 'AnA Montrouge', '48.815', '2.319', '16 Avenue Verdier', '92120', 'Montrouge', '01.98.76.54.32'),
(3, 'AnA Champs-Élysées', '48.87', '2.31', '45 Avenue Franklin Delano Roosevelt', '75008', 'Paris 8e Arrondissement', '01.29.38.47.56');

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `pwd_user`, `mail_user`) VALUES
(1, 'admin', '$2y$10$f9CVlLMcUnRhdwK6UeynjOXFq5vHAYSBo9KPMz9af0ydf0adn.Pw2', 'audrey@calzi.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;