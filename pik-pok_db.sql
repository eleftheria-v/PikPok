-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 09 Ιουν 2020 στις 21:14:42
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `pik-pok_db`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `docomment`
--

CREATE TABLE `docomment` (
  `cid` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Άδειασμα δεδομένων του πίνακα `docomment`
--

INSERT INTO `docomment` (`cid`, `comment`, `rid`, `pid`) VALUES
(5, 'Acomment here\r\n', 25, 30),
(6, 'another comment', 25, 23),
(7, 'comments all over', 25, 19),
(8, 'You can comment here!	', 25, 30),
(9, 'You can comment here!	', 25, 30),
(10, 'It looks amazing!!!!', 32, 44),
(11, 'Please give me your recipe!!!!!!', 32, 34),
(12, 'Ασε τα λαγκαδια και παμε για μπυρες στο λιμανι!', 32, 63),
(13, 'Δες και το The last kingdom!! ', 32, 57),
(14, 'Καλό αγώνα!', 31, 61),
(15, 'POLI WRAIO TO XWRIO SOY :)', 33, 32),
(17, 'Είσαι είδωλο!!!', 33, 69),
(18, 'Όχι σκουπίδια, όχι πλαστικά σε θάλασσες και ακτές!', 33, 43),
(19, 'ΔΩΣΕ ΜΟΥ ΛΙΓΟ ΚΑΛΕ ΚΥΡΙΑΑΑΑ', 33, 70),
(20, 'Ελα Ηρακλειο να σε παω!!!', 31, 70);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `dolike`
--

CREATE TABLE `dolike` (
  `lid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `dolike`
--

INSERT INTO `dolike` (`lid`, `rid`, `pid`) VALUES
(26, 23, 21),
(27, 23, 18),
(28, 23, 11),
(29, 24, 31),
(30, 24, 11),
(31, 24, 22),
(32, 24, 21),
(33, 18, 31),
(34, 18, 22),
(35, 18, 20),
(36, 18, 30),
(37, 18, 23),
(38, 18, 19),
(39, 19, 30),
(40, 19, 23),
(41, 20, 30),
(42, 20, 17),
(43, 22, 30),
(44, 22, 15),
(45, 19, 16),
(46, 27, 23),
(47, 30, 23),
(48, 21, 23),
(49, 32, 40),
(50, 32, 38),
(51, 35, 64),
(52, 35, 63),
(53, 35, 47),
(54, 35, 37),
(55, 36, 69),
(56, 36, 39),
(57, 36, 44),
(58, 34, 69),
(59, 31, 69),
(60, 31, 37),
(61, 32, 69),
(62, 32, 47),
(63, 32, 59),
(64, 32, 37),
(65, 31, 53),
(66, 31, 70),
(67, 31, 68),
(68, 33, 61),
(69, 33, 37),
(70, 33, 42),
(71, 31, 64);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `registered`
--

CREATE TABLE `registered` (
  `rid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `sex` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilephoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `registered`
--

INSERT INTO `registered` (`rid`, `name`, `surname`, `bday`, `sex`, `username`, `password`, `email`, `profilephoto`) VALUES
(31, 'Katerina Maria', 'Gerakianaki', '1999-07-22', 'Female', 'categer', '12345', 'katerinagerak99@gmail.com', '100577142_536455340365235_7305561056338771968_n.jpg'),
(32, 'Maria', 'Gerakianaki', '1982-11-11', 'Female', 'marger', '5432154321', 'maria@gmail.com', 'αρχείο λήψης.jpg'),
(33, 'Eleftheria', 'Vlachou', '1999-09-04', 'Female', 'v_eleftheria', '1999', 'evlleafc@gmail.com', '20180920_223231.jpg'),
(34, 'Panagiota', 'Vlachou', '1995-12-18', 'Other', 'panvla', '567', 'panvla@gmail.com', '20171113_155554.jpg'),
(35, 'Thanos', 'Manesiotis', '1997-05-14', 'Male', 'mane', '21', 'mane21@gmail.com', 'moufamelisanidis.jpg'),
(36, 'julia', 'alexadratou', '1974-11-07', 'Female', '<3blackbird', '2', 'juliakai2mauroi@tousthelo.com', 'julia.jpg'),
(47, 'Ara', 'ava', '1998-12-11', 'Female', 'dejf', '12345', 'akskahd@gmail.com', '100577142_536455340365235_7305561056338771968_n.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `upphoto`
--

CREATE TABLE `upphoto` (
  `pid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `daytime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rid` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `upphoto`
--

INSERT INTO `upphoto` (`pid`, `photo`, `description`, `tag`, `daytime`, `rid`, `likes`) VALUES
(32, '100683046_2581021265481115_3147606751839256576_n.jpg', 'My favorite spot!!!!', 'sunset  Crete vilage', '2020-05-27 09:13:05', 31, 0),
(34, '100715135_2623399124607809_2979111800382947328_n.jpg', 'Well im in love with sorbe!!', 'sorbe banana strawberries', '2020-05-27 09:17:54', 31, 0),
(35, '101292705_1831545123651270_4685640076749701120_n.jpg', 'My home view!!!', 'sunset Crete Vasillies', '2020-05-27 09:19:11', 31, 0),
(36, '95902870_2591829007754638_6207069917087268864_n.jpg', 'Homemade cheesecake with orange jam', 'cheesecake homade', '2020-05-27 09:21:00', 31, 0),
(37, '94998834_3059995584043756_3369448680330362880_n.jpg', 'Late snack', 'chocolate', '2020-05-30 12:17:58', 31, 4),
(38, '100618702_2941102365988185_7318273034253500416_n.jpg', 'Homade cupcakes!!! ', 'cupcakes chocolate homemade', '2020-05-27 10:30:08', 31, 1),
(39, '100567871_538007193556981_8118020984428036096_n.jpg', 'Keratokampos!!!', 'Crete sea Keratokampos', '2020-05-28 13:50:12', 31, 1),
(40, '100601415_567661030556316_3012259267051782144_n.jpg', 'Burgers with my cousin', 'burgers family Tripoli ', '2020-05-27 10:29:59', 31, 1),
(42, '101584284_534450484099465_4580816404843855872_n.jpg', 'Dinner with my brother', 'Pizza pizzalovers food', '2020-05-30 12:20:16', 31, 1),
(43, '100824448_3182970505100235_50159613084958720_n.jpg', 'Milos Tour 2019!', 'Summer Greece Milos', '2020-05-27 09:48:47', 31, 0),
(44, '101504903_899529120474397_4295589155724853248_n.jpg', 'YAS SUGARRR ', 'hance&cretel Heraklion Crete', '2020-05-28 13:50:18', 31, 1),
(45, '100541524_552378388781188_4472545145509642240_n.jpg', 'OMAGOT', 'breakfast bacon croissant', '2020-05-27 10:12:01', 31, 0),
(46, '95882491_231774844944364_1942052171071619072_n.jpg', 'My first homade cheesecake!!!', 'homade strawberies summer', '2020-05-27 10:18:52', 32, 0),
(47, '100472227_3007148469374574_3407155757295075328_n.jpg', 'Its pasta time!!!', 'Pasta food foodlover bacon', '2020-05-29 18:20:29', 32, 2),
(48, '100474486_242337433726790_2855627844195713024_n.jpg', 'BEST THING IN ATHENS', 'sweets chocolate Athens Monastiraki Serbetospito', '2020-05-27 10:21:41', 32, 0),
(49, '100542383_688230421721559_2005939066570276864_n.jpg', 'Friends with benefits ;)', 'Souvlaki beer friends', '2020-05-27 10:22:55', 32, 0),
(50, '101410479_251154626137261_5790600759598907392_n.jpg', 'Lets go to Milos again!!!', 'Millos summer summer2019 ', '2020-05-27 10:24:19', 32, 0),
(51, '100999892_685525708908581_8270062203936178176_n.jpg', 'In love with those ', 'Chocolate ', '2020-05-27 10:25:43', 32, 0),
(52, '100787923_1432221080317875_5284429281693270016_n.jpg', 'Homade cake !!!', 'cake  sweets homemade', '2020-05-27 10:27:44', 32, 0),
(53, '101273478_541596463200149_7805845358147272704_n.jpg', 'Breakfast with my love', 'chocolate pancakes masmallow breakfast', '2020-05-30 06:47:11', 32, 1),
(54, 'Στιγμιότυπο οθόνης (76).png', 'city', 'cocktails nightout lights', '2020-05-28 10:03:46', 33, 0),
(55, 'Στιγμιότυπο οθόνης (24).png', 'lights', 'city travel night', '2020-05-28 10:04:40', 33, 0),
(57, 'Στιγμιότυπο οθόνης (48).png', 'movienight', 'netflix movie popcorn', '2020-05-28 10:06:56', 34, 0),
(58, '20171116_191218.jpg', '<3', 'simplicity', '2020-05-28 10:07:58', 34, 0),
(59, '20171109_173817.jpg', '~sky is the limit~', 'nofilter sky happyhour', '2020-05-29 18:20:50', 33, 1),
(60, 'ekeieinaiden vlepeis.jpg', 'koitakala', '#anoixetamatiasou', '2020-05-28 13:36:17', 35, 0),
(61, '5.jpg', 'tha tin petixo ayth thn fora', '#rixeeeeee', '2020-05-30 12:16:40', 35, 1),
(62, '4.jpg', 'alogaki alogaki', '#gianaparoumeaera', '2020-05-28 13:37:52', 35, 0),
(63, '2.jpg', 'εδω δεν θα γινοταν το βεστιβαλ μπυρας;;που πηγαν;', '#beeronly', '2020-05-28 13:41:57', 35, 1),
(64, '1.jpg', 'paralia brika...tora prepei na bro kai gkomena', '#foreveralone', '2020-06-09 17:22:22', 35, 2),
(65, '2-2santousxiotes.jpg', 'αξεχαστες εποχες', '#maurhmouexeiskaneithnzohmou', '2020-05-28 13:46:38', 36, 0),
(66, 'elanagimno8oymedarlink.jpg', 'ελα να μου κανεις παρεα!!!', '#naiesypoutodiavazeisauththnstigmh', '2020-05-28 13:47:39', 36, 0),
(67, 'koitatopoulaki.jpg', 'xamogelaaaa', '#topoulakitsiou', '2020-05-28 13:48:11', 36, 0),
(68, 'x.jpg', 'xxx', '#xxx', '2020-05-30 06:59:18', 36, 1),
(69, 'tioraioiliovasilema.jpg', 'Μην ζηλευεις', '#sunset', '2020-05-29 18:20:06', 36, 4),
(70, '100696914_2694896747432764_3104961050894663680_n.jpg', 'ice cream !!', 'sweets summer Crete', '2020-05-30 06:50:07', 32, 1),
(71, '101199842_195888184871813_4737359347078660096_n.jpg', 'Coffeeeeeeeeeee!!!!!', 'coffee banana taxinichocolate  breakfast', '2020-05-30 07:09:14', 31, 0),
(73, '100674658_2870924256289447_2156642455305322496_n.jpg', 'breakfast', 'banana strawberries oats chocolate', '2020-06-09 17:37:39', 31, 0);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `docomment`
--
ALTER TABLE `docomment`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Ευρετήρια για πίνακα `dolike`
--
ALTER TABLE `dolike`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Ευρετήρια για πίνακα `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Ευρετήρια για πίνακα `upphoto`
--
ALTER TABLE `upphoto`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `rid` (`rid`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `docomment`
--
ALTER TABLE `docomment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT για πίνακα `dolike`
--
ALTER TABLE `dolike`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT για πίνακα `registered`
--
ALTER TABLE `registered`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT για πίνακα `upphoto`
--
ALTER TABLE `upphoto`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
