-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: ספטמבר 29, 2021 בזמן 04:25 PM
-- גרסת שרת: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a&a_restaurant`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `administrator_user`
--

CREATE TABLE `administrator_user` (
  `Name_user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password_user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Id_manger` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `administrator_user`
--

INSERT INTO `administrator_user` (`Name_user`, `Password_user`, `Id_manger`) VALUES
('נחום תקום', '1234', '1020304050'),
('דוד בן גוריון', '1234', '11111111'),
('ראובן ריבלין', '1234', '1112131415'),
('חיים כובש', '1234', '212223344'),
('אלון גלאי', '1234', '212332211'),
('אבי אלמו', '1234', '313233826');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `a_a_menu`
--

CREATE TABLE `a_a_menu` (
  `Price` int(10) NOT NULL,
  `Mkt` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Component` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_menu` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `a_a_menu`
--

INSERT INTO `a_a_menu` (`Price`, `Mkt`, `Component`, `Name_menu`) VALUES
(45, 'A1234', 'האגדה מספרת שהקרפצ\'יו הומצא בשנות החמישים של המאה הקודמת על ידי השף של המסעדה המפורסמת \"הארי\'ז בר\" בונציה\r\nפרוסות בקר טרי דקיקות מתובלות במלח ים, בלסמי מצומצם ושמן זית, מוגש עם בצלים צלויים, עגבניות שרי קונפי, פלפלים חריפים עלי רוקט', 'קארפצ\'ו בקר'),
(39, 'b1234', 'מנהג אמריקאי הוא לצפות בראשון בצהריים במשחק פוטבול, ולנשנש כנפיים , אז למה שלא יהיה טבעוני ?\r\nכנפי כרובית אפויות ברוטב צ\'ילי. כרובית פיקנטית ללא טיגון, ללא קמח, אפויה ביוגורט להיט\r\nדגשים מיוחדים - מנה חריפה (חריפות ברוטב)', 'כנפי כרובית'),
(49, 'C1234', ' דג טונה טרי צרוב מעט מבחוץ אבל נא מבפנים השילוב המושלם שבאמת מוציא מחומר הגלם הזה את הכי טוב שלו\r\nפילה טונה אדומה שומשום לבן ושחור צילי יבש  מעט פלפל שחור ושמן שומשום', 'טאטקי טונה אדומה'),
(89, 'D1234', ' מנת הדגל כבר 10 שנים\r\nנתחי בשר בקר מיושן נא לצליה אישית על אבן לוהטת', 'סינטה בצריבה אישית'),
(66, 'E1234', 'נתח טופו עם ויניגרט יוזו ואצות וואקמה מיובשות\r\nאצות וואקמה צילי אדום בצל סגול גינגר ברוטב סויה בהיר ויוזו', 'סינטופו '),
(115, 'F1234', 'כתף בקר ממולאת בערמונים ושזיפים ביין אדום, שוקי אווז צלויות ברוטב תפוחים\r\nולחיזוק צלעות טלה עם כרישה ומרווה שרופה או עוף בסיידר תפוחים ופטריותוזו', 'כתף בקר '),
(40, 'G1234', 'קינוח של פונדנט שוקולד ושמן זית עם מוס שוקולד ביטר סבלה קקאו עם שמן זית ומלח וסוכריות שמן זית\r\n', 'קינוח שוקולד ושמן זית'),
(37, 'H1234', 'צנצנת במילוי שכבות של קולי פירות יער\r\nקרם פטיסייר תותים טריים שטרויזל קקאו שברי מרנג גלידת תות ושוקולד לבן מקרון במילוי גנאש שוקולד חלב ותמצית אוכמניות ושקדים קלויים', 'קינוח תותים');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `club_members`
--

CREATE TABLE `club_members` (
  `Name_member` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password_member` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_members` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_members` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `club_members`
--

INSERT INTO `club_members` (`Name_member`, `Password_member`, `id_members`, `phone_number`, `Email_members`) VALUES
('אבשלום אלמו', '2133', '313233827', '52467281', 'aaa@walla.com'),
('אלון ', '1221', '221122113', '56448222', 'alon@outlock.co.il'),
('חיים כהן ', '1234', '21233432', '54789223', 'haim@gmail.com'),
('מאור בוזגלו ', '2122', '312234422', '545432292', 'maor@outlock.co.il'),
('משה איבגי', '1414', '21225669', '542336547', 'mm@walla.com'),
('רון אפרתי ', '21223', '213221234', '0533224532', 'ronafraty@outlooc.com');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `deliveries`
--

CREATE TABLE `deliveries` (
  `Order_Number` bigint(20) UNSIGNED NOT NULL,
  `type_Order` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Order_Branch` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile_Phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Another_mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail_adress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Order_time` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Comments_order` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `deliveries`
--

INSERT INTO `deliveries` (`Order_Number`, `type_Order`, `Order_Branch`, `First_name`, `last_name`, `Address`, `Mobile_Phone`, `Another_mobile`, `Mail_adress`, `Order_time`, `Comments_order`) VALUES
(79, 'TA', 'כפר סבא', 'מיכל ', 'גרינברג ', '', '052-4582002', '', '', '14:54', ' '),
(83, 'TA', 'כפר סבא', 'אבי', 'אלמו ', '', '052-4582002', '', '', '14:54', 'קוד 1234*'),
(84, 'TA', 'כפר סבא', 'רון ', 'מנשה', '', '052-4582333', '', '', '20:54', 'קוד 1224*'),
(85, 'Deliver', ' תל אביב ', 'קובי ', 'רחמים ', 'הר סיני 32 תל אביב ', '052-3332002', '052-6374843', 'ramim@gmail.com', '19:29', 'בבקשה הרבה רטבים למנות ');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `feedback`
--

CREATE TABLE `feedback` (
  `count_feedback` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Service` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `General_satisfaction` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quality_meal` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Waiting_time` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Service_experience` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Free_text` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `feedback`
--

INSERT INTO `feedback` (`count_feedback`, `Location`, `Service`, `General_satisfaction`, `Quality_meal`, `Waiting_time`, `Service_experience`, `Free_text`) VALUES
(1, 'כפר סבא', 'איסוף עצמי', 'טוב', 'מצווין', 'טעון שיפור', 'מספיק בקושי ', 'המתנתי הרבה זמן עד שהאוכל היה מוכן'),
(2, 'ראש העין', 'משלוח', 'מצווין', 'מצווין', 'מצווין', 'מצווין', 'אין כמוכם חוויה נהדרת'),
(3, 'תל אביב', 'ישיבה במסעדה', 'טוב מאוד', 'מצווין ', 'טוב', 'מצווין', 'השולחן התעכב ב 10 דק\' , חוץ מזה החוויה היתה מושלמת בסניף.'),
(4, 'כפר סבא', 'משלוח', 'טוב מאוד ', 'מצווין ', 'טעון שיפור ', 'טוב מאוד ', 'השליח איחר ב 10 דק\' , חוץ מזה הכול היה ברמה גבוהה'),
(6, ' ראש העין', 'איסוף עצמי', 'טוב', 'טוב מאוד', 'מצווין', 'טוב מאוד', 'אחלה שירות , חוויה נהדרת'),
(7, 'תל אביב', 'משלוח', 'טוב מאוד', 'מצווין', 'טעון שיפור', 'מספיק בקושי', 'המארחת עיכבה לי את ההזמנה חבל מאוד '),
(8, ' ראש העין', 'משלוח', 'טוב מאוד', 'מספיק בקושי', 'מצווין', 'טוב', 'אחלה '),
(9, ' ראש העין', 'איסוף עצמי', 'טוב', 'מספיק בקושי', 'טוב', 'טוב', 'היה טוב '),
(10, 'תל אביב', 'איסוף עצמי', 'טוב מאוד', 'מצווין', 'טוב מאוד', 'מצווין', 'פשוט כיף להזמין ממכם '),
(11, 'תל אביב', 'איסוף עצמי', 'טוב מאוד', 'מספיק בקושי', 'מספיק בקושי', 'טוב מאוד', 'זמן המתנה היה ארוך הפעם ');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `jobs`
--

CREATE TABLE `jobs` (
  `First_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Location` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job_title` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CV` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `jobs`
--

INSERT INTO `jobs` (`First_name`, `Last_name`, `Email`, `Phone_number`, `Location`, `Job_title`, `CV`) VALUES
('אלון ', 'הסהס', 'alon@walla.com', '054-3223321', ' ראש העין', 'עובדי מטבח ', 'textfx.png'),
('מני ', 'חיים', 'mani_h@gmail.com', '534725492', 'תל אביב', 'מלצר/ת או מארח/ת', ''),
('מור ', 'גלי ', 'mor@walla.com', '052-3332002', ' ראש העין', 'מלצרים  מארחות', ''),
('מור ', 'גלי ', 'mor222@walla.com', '052-3332002', ' ראש העין', 'מלצרים  מארחות', ''),
('משה', 'ירוחם', 'mos_yr@walla.com', '527463892', 'כפר סבא', 'שליח/ה', ''),
('רון', 'שמאי', 'ron1277@walla.com', '54368493', 'ראש העין', 'עובד/ת מטבח', ''),
('יעקב', 'אזולאי', 'yackov007@walla.com', '052-4582002', ' ראש העין', 'עובדי מטבח ', 'textfx (1).png'),
('יוסי', 'בניון ', 'yossy@gmail.com', '522234566', 'תל אביב', 'שליח/ה', '');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `sit_order`
--

CREATE TABLE `sit_order` (
  `order_Num` bigint(20) UNSIGNED NOT NULL,
  `Order_Branch` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `First_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_Order` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Order` date NOT NULL,
  `Time_Order` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pepole_Order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `sit_order`
--

INSERT INTO `sit_order` (`order_Num`, `Order_Branch`, `First_name`, `last_name`, `phone_number`, `phone_number2`, `Email_Order`, `Date_Order`, `Time_Order`, `Pepole_Order`) VALUES
(10, 'כפר סבא ', 'אלון ', 'גלאי', '052-6374321', '052-6374433', 'smatan10@gmail.com', '2021-10-01', '15:30', 5),
(11, 'תל אביב', 'רון ', 'איתן ', '052-6371111', '052-6372322', 'ronaitan@gmail.com', '2021-10-01', '18:28', 5);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `totall_orders`
--

CREATE TABLE `totall_orders` (
  `order_Numbres` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pepole_order` int(10) NOT NULL,
  `Cutlery` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- הוצאת מידע עבור טבלה `totall_orders`
--

INSERT INTO `totall_orders` (`order_Numbres`, `total_price`, `pepole_order`, `Cutlery`) VALUES
('80', '253', 4, 'yes'),
('82', '209', 5, 'yes'),
('84', '352', 5, 'no'),
('85', '276', 10, 'yes');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `administrator_user`
--
ALTER TABLE `administrator_user`
  ADD PRIMARY KEY (`Id_manger`);

--
-- אינדקסים לטבלה `a_a_menu`
--
ALTER TABLE `a_a_menu`
  ADD PRIMARY KEY (`Mkt`);

--
-- אינדקסים לטבלה `club_members`
--
ALTER TABLE `club_members`
  ADD PRIMARY KEY (`Name_member`,`id_members`);

--
-- אינדקסים לטבלה `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`Order_Number`),
  ADD UNIQUE KEY `Order_Number` (`Order_Number`);

--
-- אינדקסים לטבלה `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `count_feedback` (`count_feedback`);

--
-- אינדקסים לטבלה `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`Email`);

--
-- אינדקסים לטבלה `sit_order`
--
ALTER TABLE `sit_order`
  ADD UNIQUE KEY `order_Num` (`order_Num`);

--
-- אינדקסים לטבלה `totall_orders`
--
ALTER TABLE `totall_orders`
  ADD PRIMARY KEY (`order_Numbres`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `Order_Number` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `count_feedback` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sit_order`
--
ALTER TABLE `sit_order`
  MODIFY `order_Num` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
