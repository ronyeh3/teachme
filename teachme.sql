-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 09:00 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teachme`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET hebrew NOT NULL,
  `name` varchar(255) CHARACTER SET hebrew NOT NULL,
  `phone` int(64) NOT NULL,
  `content` text CHARACTER SET hebrew NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `name`, `phone`, `content`) VALUES
(11, 'sg2@fbfsd', 'fdbs', 4534, 'fsgfd'),
(2, 'ham@gmail.com', 'חם', 53453455, 'שלום שמי חם זהו בני יפת \r\nיפת אמור שלום'),
(3, 'slomi@gmail.com', 'שלומי', 436266236, 'אני אוהב את האתר שלכם תודה רבה'),
(4, 'avi@gmail.com', 'אבי', 4334574, 'אחלה אתר מגיע לכם מאה !!!!!!'),
(5, 'bibi@habayta.com', 'ביבי נתניהו', 4656656, 'שרה מרביצה לייי הצילווו'),
(6, 'ronen@gmail.com', 'רונן פרץ', 557347774, 'ההסתברות  להטלה קוביה היא מתפלגת נורמלית'),
(7, 'aba@gmail.com', 'אבא', 45645654, 'הבן שלי אוהב אותכם'),
(8, 'misha@gmail.com', 'מישה', 645645645, 'עיברית שפה קשעעע'),
(9, 'elinor@gmail.com', 'אלינור בוסיאן', 43623662, 'כל הכבוד לכם אחלה עבודה !!!!'),
(10, 'mikey@gmail.com', 'מייקי', 4362346, 'מייטי מיקס'),
(12, 'ronyamaniak@gmail.com', 'אליהו אליהו', 541111111, 'קקה של אתר הייתי מוכר אותו לחמאס');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `emailofstudent` varchar(255) CHARACTER SET hebrew NOT NULL,
  `emailofteacher` varchar(255) CHARACTER SET hebrew NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`emailofstudent`, `emailofteacher`) VALUES
('avi@gmail.com', 'simi@sinmi'),
('avi@gmail.com', 'zahi@bgu.ac.il'),
('mikey@gmail.com', 'eli@gmail.com'),
('ber@gmail.com', 'dana@dana.co.il'),
('ron@microsoft.com', 'zik@gmail.com'),
('ron@microsoft.com', 'rina@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `fname` varchar(30) CHARACTER SET hebrew NOT NULL,
  `lname` varchar(30) CHARACTER SET hebrew NOT NULL,
  `email` varchar(60) CHARACTER SET hebrew NOT NULL,
  `bdate` date NOT NULL,
  `password` varchar(30) CHARACTER SET hebrew NOT NULL,
  `gender` text CHARACTER SET hebrew NOT NULL,
  `address` varchar(255) CHARACTER SET hebrew NOT NULL,
  `area` varchar(255) CHARACTER SET hebrew NOT NULL,
  `fields` varchar(255) CHARACTER SET hebrew NOT NULL,
  `price` int(30) NOT NULL,
  `pic` varchar(255) CHARACTER SET hebrew NOT NULL,
  `aboutMe` varchar(1024) CHARACTER SET hebrew NOT NULL,
  `question` varchar(255) CHARACTER SET hebrew NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`fname`, `lname`, `email`, `bdate`, `password`, `gender`, `address`, `area`, `fields`, `price`, `pic`, `aboutMe`, `question`) VALUES
('בוא', 'נראה', '1234@gmail.com', '2016-05-31', '12345678', 'female', 'אם זה', 'north', 'ezrahot', 45, 'upload_images/1234@gmail.com.jpeg', 'zdfnd', 'fdhs'),
('שחר', 'חסון', 'a@gmail.com', '2008-04-03', '123456', 'male', 'אשכי הפלדה 5', 'north hedera sharon shtahim', 'english geo music math pisic', 100, 'upload_images/a@gmail.com.jpg', 'אני שחר חסון אני סטנדפיסט אבל לא כולם יודעים שאני גם מלמד פיזיקה קוונטית', 'וולבי'),
('עמוס', 'ביימל', 'amos@gmail.com', '1966-04-07', '123456', 'male', 'ביניין 35 למעלה', 'north hedera sharon center jeru shtahim shfelaa darom', 'ezrahot english biology geo history chimistry thung music cs math stat safrot pisic sycho french bible com', 50, 'upload_images/amos@gmail.com.jpg', 'אני עמוס אני מלמד בכל הארץ אנשים ואני המצאתי את המכונת טיורינג', 'תוכי'),
('אביב', 'גפן', 'aviv@gmail.com', '2000-03-02', '123456', 'male', 'בירח', 'north hedera sharon center jeru shtahim shfelaa darom', 'english music cs math safrot bible com', 500, 'upload_images/aviv@gmail.com.jpg', 'אני אביב גפן וכולכם מטומטמים !\r\nאני אלמד אותם מה שאני אוהב ורוצה', 'ינשוף'),
('בנצי', 'ירושלמי', 'benymore@gmail.com', '2016-05-31', '1234567890', 'male', 'רמות 5', 'north hedera sharon center', 'biology', 45, 'upload_images/benymore@gmail.com.jpg', 'אני מורה לביולוגיה כבר 50 שנה בתחום אין עבודה', 'כלב'),
('דנה', 'קמה', 'dana@dana.co.il', '2011-03-10', '1/2&#39;3ק', 'female', 'שכונה ד', 'north sharon', 'biology geo', 200, 'upload_images/dana@dana.co.il.jpg', 'אני מורה ללשון וחינוך מיוחד.', 'כלב'),
('אלי', 'אוחנה', 'eli@gmail.com', '2012-10-26', '123456', 'male', 'המכבים 5 יפו', 'north hedera sharon center jeru shtahim shfelaa', 'english biology geo history chimistry thung music cs math stat safrot pisic sycho french bible com', 2000, 'upload_images/eli@gmail.com.jpg', 'שמי אלי ואני אוהב חתולים!', 'ברנולי'),
('מנהל', 'מערכת', 'manager@teachme.co.il', '2016-01-01', '123456', 'male', '', '', '', 0, '', '', ''),
('מילה', 'קוניס', 'nila@gmai.com', '2016-05-31', '123456', 'male', 'fhsdrhs', 'jeru shtahim darom', 'english geo cs stat bible', 436, 'upload_images/nila@gmai.com.jpg', 'אני מילה קוניס ואני התחתנתי עם יהודי \r\nבמקום עם אשטון קוצ&amp;#39;ר ועכשיו אין לי כסף\r\nאז אני מלמדת תנך כי עשיתי עלייה', 'פרה'),
('רינה', 'צמח', 'rina@gmail.com', '1975-10-28', 'rina12', 'female', 'הצמחים 89 בל אייר', 'north hedera sharon center jeru', 'ezrahot english biology geo history chimistry sycho french bible com', 100, 'upload_images/rina@gmail.com.jpg', 'שלום אני מורה לסטטיסטיקה ברמה ארצית', 'רני'),
('שימי המלך', 'תבורי', 'simi@sinmi', '2017-01-10', '123456', 'male', 'ueev', 'north hedera sharon center', 'ezrahot english biology geo', 100, 'upload_images/simi@sinmi.jpg', 'עיניים', 'חתול'),
('תרצה', 'תרצקוב', 'tir@gmail.com', '2011-10-26', 'tir123', 'male', 'המתרצים', 'north hedera sharon center jeru shtahim shfelaa', 'pisic sycho french bible', 250, 'upload_images/tir@gmail.com.jpg', 'שלום אני תרצה המרצה!', 'תנין'),
('צחי', 'רוזן', 'zahi@bgu.ac.il', '2002-03-14', 'qwertyu', 'male', 'בן גוריון בניין 35', 'hedera sharon shtahim darom', 'ezrahot biology history thung cs math safrot', 50, 'upload_images/zahi@bgu.ac.il.jpg', 'אני צחי אני איש אשכולות אני מעלה לכולם בעירעור', 'אלבטרוס'),
('צילנית', 'מצליל', 'zik@gmail.com', '2002-08-25', 'zil123', 'female', 'המסתירים 79 ירושלים', 'north hedera sharon center jeru shtahim shfelaa', 'english biology geo history chimistry math stat safrot pisic', 200, 'upload_images/zik@gmail.com.jpg', 'שלום אני צילה ואני מצילה חיים במבחנים!', 'ארנב');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) CHARACTER SET hebrew NOT NULL,
  `lname` varchar(30) CHARACTER SET hebrew NOT NULL,
  `email` varchar(60) CHARACTER SET hebrew NOT NULL,
  `bdate` date NOT NULL,
  `password` varchar(30) CHARACTER SET hebrew NOT NULL,
  `gender` text CHARACTER SET hebrew NOT NULL,
  `address` varchar(255) CHARACTER SET hebrew NOT NULL,
  `question` varchar(255) CHARACTER SET hebrew NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `bdate`, `password`, `gender`, `address`, `question`) VALUES
('אבי', 'לוי', 'avi@gmail.com', '1990-12-31', '123456', 'male', 'יצחק רגר 3 באר שבע', 'oli'),
('אלינור המלכה שלי', 'גפן', 'aviv@gmail.con', '1982-08-05', 'qwe123', 'female', 'המנותקים 89 קפריסין', 'תוכי'),
('ברלד', 'שמעוני', 'ber@gmail.com', '1994-10-28', 'ber123', 'male', 'המצחיקים 0 יפו', 'סמור'),
('דן', 'ולדימירוב', 'dan@gmail.com', '2006-07-26', 'dan123', 'male', 'שמירים 4 נתניה', 'oli'),
('גילי', 'שם טוב', 'gili@gmail.com', '1999-10-28', 'gili123', 'male', 'הנביאים 5 אילת', 'gulash'),
('מייקי', 'נגלר', 'mikey@gmail.com', '2016-05-31', '123456', 'female', 'אברהם אבינו 3 באר שבע', 'jack'),
('נעמה', 'צחר', 'naama@gmail.com', '1984-03-16', '123456', 'female', 'אבן גבירול 4 תל אביב', 'kuki'),
('ניסים', 'אבוחצירה', 'nisim@gmail.con', '1995-12-03', '102938', 'male', 'יאנוש קורצאק 10 אשדוד', 'nis'),
('גע', 'vnzzc', 'ron@microsoft.com', '2016-05-31', '123456', 'male', 'דרך מצדה', 'ברנולי'),
('שרית ', 'חדד', 'sarit@gmail.com', '2015-10-30', '123098', 'female', 'המזרחים 5 נתניה', 'dog'),
('שלומי', 'שבת', 'shlomi@gmail.com', '1900-08-29', '123456', 'male', 'הזקנים 120 סביון', 'סוסיתא');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
