-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 03:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctg`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'),
(2, 'sec_user', 'greenChair153', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `pagenum` int(11) NOT NULL,
  `title1` varchar(100) DEFAULT NULL,
  `para1` text DEFAULT NULL,
  `img1` varchar(20) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `para2` text DEFAULT NULL,
  `img2` varchar(20) DEFAULT NULL,
  `title3` varchar(100) DEFAULT NULL,
  `para3` text DEFAULT NULL,
  `img3` varchar(20) DEFAULT NULL,
  `title4` varchar(100) DEFAULT NULL,
  `reviewtext1` text DEFAULT NULL,
  `reviewtext2` text DEFAULT NULL,
  `reviewtext3` text DEFAULT NULL,
  `reviewtext4` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagenum`, `title1`, `para1`, `img1`, `title2`, `para2`, `img2`, `title3`, `para3`, `img3`, `title4`, `reviewtext1`, `reviewtext2`, `reviewtext3`, `reviewtext4`) VALUES
(1, 1, 'What do I offer?', '               <h2><i>My Experience</i></h2>\r\n                    <span>My name is Marcelo J. Carena, <br><br>I have worked both as an academic leader, and as a teacher, in various Universities and Organizations. As an academic leader, I\'ve always been people-oriented and achievement focused working with the education of students and mentoring faculty colleagues for teaching practice and research direction. <br><br>My commitment to teaching and learning has been continuous for over 20 years, and I have over 30 years of experience in the Ag business. I have continuously applied innovative approaches to teaching methods and practice in support of teaching excellence. I established unique content and teaching techniques in the area of plant sciences by considering the diversity of the student population and my active participation in teaching circles and national teaching associations. <br><br>I enjoyed tertiary teaching for a long time and still, after so many years, it lifts my spirit when I lecture, most recently virtually for a tertiary course at the University of Buenos Aires during COVID-19 last year. I have been a strong learner with the customer always in mind when marketing education and I would like to share my experiences to those around me, and my students, by challenging them with unique ideas. </span>', 'Hp-2.jpg', '', 'I have authored hundreds of peer-reviewed publications, books, book chapters, and conference papers, many as invited plenary lectures and awards. <br><br>Books have pre-empted national and international needs with back covers often been dedicated to those that envision the development of the next generation of healthier and sustainable cultivars with less need of fertilizer and water. I have served as unique University elected representative and member at several national and international organizations. <br><br>I have also served as elected Chair and Secretary of many Committees, the United Nations, the European Association of Plant Breeders (EUCARPIA), the American Seed Trade Association (ASTA), the United States Department of Agriculture (USDA), the Advisory Committee for an AFRI Education program, and the American Societies of Crop Science and Agronomy.<br><br>\r\nI\'ve represented the academia as Senior Editor of the book series “Handbook of Plant Breeding” for U.S., European, Chinese, and South American Editorials, as elected Technical Editor of European Journal of Plant Breeding (Euphytica), Editorial Board member of International Journal of Maize and Allied Species (Maydica), among others. <br><br>In Euphytica, I have made editorial decisions for over 300 peer-review manuscripts between 2001 and 2020 and now he is working with Springer, Frontiers, and Genes Editorials. In addition, I have represented DLF and AgResearch in industry management teams and boards.\r\nNow, I have initiated a ‘Sustainable Plant Breeding’ module series to provide solutions to the question,', 'Hp-3.png', '', '<h2><u>\'Who will develop the next generation of sustainable cultivars?’</u></h2>', '', '<h2><u>Reviews</u></h2>', '\"Dr. Carena, one of the best teachers I have met in the plant breeding space. He is the co-author of the famous textbook: Quantitative Genetics in Maize Breeding, and he is very experienced in breeding for drought tolerance, sustainable plant breeding and breeding for climate change.\"\r\n<br><br>\r\n<b>- Yuanjie Su</b>\r\n<br>\r\n<i>Nunhems (BASF)</i>', '\"under Carena’s tenure, the NDSU maize breeding and genetics program has gained unique support from private companies, trade organizations, and the farmer producers. The sum of all these activities certainly provides strong evidence of the positive impact he had on the economy of northern U.S. states.\"\r\n<br><br>\r\n<b>- Dr. Arnel Hallauer</b>\r\n<br>\r\n<i>Distinguished Emeritus ISU Professor and National Academy of Sciences member</i>', '\"Dr. Carena was nationally recognized for developing the new methodologies AUDDC and BRACE for high throughput phenotyping of genetically complex traits, in this case, drought tolerance and rate of dry down. We also applaud your vision to adapt tropical unique maize to our short-season farms.\"\r\n<br><br>\r\n<i>- The Executive Director of the North Dakota Corn Utilization Council (NDCUC)</i>', '\"Dr. Carena has an impressive record. He has developed materials with a fast dry down, earliness, drought tolerance, disease resistance, and high yield, focusing on long-term as well as short-term needs,\"\r\n<br><br>\r\n<b>- Dr. Phillips</b>\r\n<br>\r\n<i>Regents Professor Emeritus UMN</i>'),
(2, 2, '<h2><u>About Me</u></h2>', '<span>My name is Marcelo J. Carena, I was born in Argentina, and I have been a plant breeder representing the public and private sectors for almost 30 years, most of the time serving as professor and maize breeding unit leader at North Dakota State University. I have a B.S. in Agronomy (1987-1991) from Argentina, a MS in Plant Breeding (1992-1995) from Europe, and a Ph.D. in Plant Breeding (1996-1999) from Iowa State University in the USA. From 1999 to 2017, I led the NDSU maize breeding and genetics research program. <br><br>My Previous Work: The program was worldwide known for being the most northern public maize breeding program in North America, moving maize north to cooler seasons and west to dry areas. During that time my students and I developed over 90 unique short-season germ plasm, lines, and hybrids with PVP and innovation awards. It was the only maize breeding program in the USA fully funded by grower organizations receiving royalties and fees from products still being commercialized today.<br><br> I also managed the North Dakota Hybrid Corn Performance Testing (HCPT) program for the state while developing national and worldwide capacity building and plant genetic resources IP policies representing the USDA at the United Nations. My program has challenged agricultural dilemmas to develop the next generation of sustainable cultivars, bridging the missing link between industry and farmers. I currently serve as senior adviser and contractor for breeding project reviews and guidance as well as trainer worldwide. <br><br>\r\n                    I led several national public-private programs with focus on genetic diversity research, adapting tropical genetic materials to shorter world seasons. The breeding program has developed not only products but also non-destructive methods for high throughput phenotyping of genetically complex traits, difficult to measure, and highly influenced by the environment, which helped mitigate climate changes and has saved millions of dollars to industry and farmers (e.g., AUDDC for fast dry down and BRACE for drought tolerance).</span>', 'AbM-1.jpg', '', '', '', '', '', '', '', '', '', '', ''),
(3, 3, '<h1><u>Contact Me!</u></h1>', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
