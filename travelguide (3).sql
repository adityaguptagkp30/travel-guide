-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 07:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin1', 'admin@gmail.com', '56ab24c15b72a457069c5ea42fcfc640');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(250) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(32, 'very  nice place'),
(32, 'good to go'),
(26, 'very nice helpful website'),
(26, 'kmkk'),
(26, 'nice site'),
(26, ''),
(26, 'dfs'),
(26, 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `address`, `contact`, `image`, `about`) VALUES
(22, 'Hotel Royal Plaza', '19, Ashoka Raod, Connaught Place New Delhi', '7667875456', 'hotelroyalplaza.jpg', 'The hotel is famous for its \r\nservice to the customers');

-- --------------------------------------------------------

--
-- Table structure for table `malls`
--

CREATE TABLE `malls` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malls`
--

INSERT INTO `malls` (`id`, `name`, `address`, `contact`, `image`, `about`) VALUES
(22, 'Select City Walk', 'Saket, South Delhi', '9999999999', 'silvercitywalkmall.jpg', 'Select City Walk, Saket is one of the most well-known malls in Delhi. Even if you havenâ€™t visited the capital city, youâ€™re bound to have heard your friends from Delhi mention this place.\r\n\r\nHere, you will find all sorts of fashion brands. From High Street like Zara and H&M to super luxury brands such as Chanel and Dior there is something for everyoneâ€™s wallet!\r\n\r\nOnce youâ€™re done shopping and are in the mood for some soul food, there are plenty of options for different kinds of cuisine, and some sinful dessert places as well.\r\n\r\nIf youâ€™re not really in the mood to shop and just want to chill out, there is ample open space with gardens and fountains where some interesting open air activities like music shows, discussions etc take place.'),
(22, ' DLF Promenade', 'Vasant Kunj, South Delhi', '2323232323', 'Promenade-has-all-the-best-clothing-brands-.jpg', 'This is one of the best upmarket shopping malls in Delhi. Located in Vasant Vihar, this mall doesnâ€™t have a metro station but can be accessed by public transport buses or by Uber/Ola.\r\n\r\nIt has a great selection of clothing brands and restaurants that you would love to check out. Apart from well known high street brands, you will also find some smaller and lesser known stores here that have unique and chic styles of clothing. There is also a very cool kidsâ€™ play area here that will keep your toddlers occupied!\r\n\r\nWhile this place is awesome for a shopping and food binge, we also recommend it for a date, family dinner or even to run errands at this mall has it all under one roof!'),
(22, 'DLF Emporio', ' Vasant Kunj, South Delhi', '3333333333', 'DLF-Emporio-is-among-the-most-upmarket-malls-in-Delhi-.jpg', 'This upmarket mall in Delhi (Vasant Kunj) would definitely rank as the most exclusive in the capital area. All of the most high-end, luxury fashion brands like Armani and Gucci can be found here.\r\n\r\nThere are also some lovely cafes located on the ground floor that you must visit. What adds to the really elegant and posh vibe of this mall is a guy playing the grand piano at the centre, producing some beautiful, soulful tunes.\r\n\r\nIf youâ€™re really in the mood to splurge and pamper yourself shopping at stores in the likes of Armani, Dior and Gucci, this is one mall that has all the super luxury brands. But, if you have rent to pay at the end of the month, we suggest you leave your credit card at home!\r\n\r\nEither way, If youâ€™re shopping or just window-shopping, this mall is worth the experience!\r\n\r\n'),
(22, 'Ansal Plaza', 'August Kranti Marg, South Delhi', '7878898999', 'The-amphitheatre-at-Ansal-Plaza-.jpg', 'This is one of the oldest malls in Delhi. While this place doesnâ€™t boast of fancy brands and movie theatres, it has its own charm. Located in the heart of South Delhi, this was one of the oldest hangout spots for college-going Delhiites as it was the first mall to come up in south Delhi.\r\n\r\nThere is a Decathlon store here that it is famous, and it also has some good fast-food eateries. What is prominent about this mall is the huge amphitheatre located right in the middle of it. If you are looking for a quiet place to practice your guitar or rehearse for a play, this is a great option for you!'),
(22, 'Ambience Mall', 'Vasant Kunj, South Delhi', '7678899999', 'Ambience-Mall-has-a-Westside-and-a-Big-Bazaar-.jpg', 'Right next to Promenade and Emporio, this mall is very well planned and houses all national and international brands, has a food court with good variety, and many other restaurants.\r\n\r\nAs it shares the premises with Promenade and Emporio Mall, this place is starkly different, and comparatively low-end, housing more popular Indian retail brands with mass produced clothing and accessories such as Westside and Big Bazaar.\r\n\r\nThere is an entertainment area with a variety of fun games and rides for your kids, to keep them occupied while you run your errands.');

-- --------------------------------------------------------

--
-- Table structure for table `monuments`
--

CREATE TABLE `monuments` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monuments`
--

INSERT INTO `monuments` (`id`, `name`, `address`, `contact`, `image`, `about`) VALUES
(19, 'abc', 'abc', 'abc', 'images (1).jpeg', 'abc'),
(22, 'Humayunâ€™s Tomb', 'Mathura Road, opposite the Nizamuddin Dargah', '7678889999', 'Humayunâ€™s-Tomb-is-a-UNESCO-World-Heritage-Site-.jpg', 'A UNESCO World Heritage Site, Humayunâ€™s Tomb is a stunning piece of Persian architecture built in the Mughal era. It was commissioned in 1526, nine years after Humayunâ€™s death, by his widow Hamida Banu Begum. This beautiful monument is made of red sandstone.\r\n\r\nThe tomb is in the centre of Charbagh-style of gardens with pools that are connected to canals. It has two entrances: a southern side and a western side. The high central arch and the octagonal shape of the structure are important aesthetics of Mughal architectures.'),
(22, 'Lodi Gardens', 'Lodhi Road, New Delhi', '7678899888', 'Lodi-Gardens-is-a-great-picnic-spot-.jpg', 'The Lodi Gardens is one of Delhiâ€™s very popular tourist attractions. With monuments and tombs from the Lodi and the Sayyed dynasties, the Lodi Gardens has the tombs of Sikander Lodi and Muhammad Shah.\r\n\r\nMany people head to this garden in the mornings and evenings for walking, jogging and exercise. A beautiful picnic spot, the tomb looks even more beautiful during sunset.'),
(22, 'Qutub Minar', ' Mehrauli', '67787678687', 'Qutub-Minar-was-built-in-1193-.jpg', 'This 73-meter high tower was built by Qutub-ud-Din Aibak in the year 1193. Built after the defeat of Delhiâ€™s last Hindu ruler, the Qutub Minar was constructed to celebrate the Muslim supremacy in Delhi. It is the highest tower in India, with five levels and projecting balconies. The first three levels are made up of red sandstone and the last two of marble and sandstone.\r\n\r\nThe Qutub Minar has three different types of architectural styles. The construction of the minar was started by Aibak (who only made the basement). Later, Iltutmish added on three stories and then it was completed by Firoz Shah Tuglak, who constructed the last two stories. Quwwat-us-Islam Mosque, the first mosque ever to be built in India, is situated here.'),
(22, 'Safdarjungâ€™s Tomb', 'Lodi Estate, New Delhi', '6767788998', 'The-grave-was-built-as-a-garden-tomb-.jpg', 'The Safdarjungâ€™s Tomb is the grave of Safdarjung. This garden tomb was built in the year 1753-54 by his son, Shuja-ud-Daula. It has several small awnings, like the Moti Mahal, Jangli Mahal and Badsha Pasand.\r\n\r\nThe compound of the tomb also contains a library and a Madrasa that is being maintained by the Archaeological Survey of India. The Safdarganjâ€™s Tomb is built on a raised platform with red sandstone and a white marble dome.'),
(22, 'Red Fort (Lal Qila)', 'Netaji Subhash Road, Chandini Chowk, Old Delhi', '6778899887', 'Lal-Qila-took-a-decade-to-complete-.jpg', 'This enormous red sandstone fort is synonymous with Delhi and is a testimony of the glory of the Mughal Empire. Built in 1638 by Shah Jahan, it took around ten years to be completed.\r\n\r\nA UNESCO World Heritage Site, the Red Fort is octagonal in shape with walls adorned with flowers and calligraphy, typically in the style of beautiful Mughal era architecture.'),
(23, 'sads', 'sadasd', 'sdasd', 'toa-heftiba-686209-unsplash.jpg', 'sdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(250) NOT NULL,
  `place` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `place`) VALUES
(23, 'ALLAHABAD'),
(22, 'DELHI'),
(11, 'GHAZIABAD'),
(2, 'GORAKHPUR');

-- --------------------------------------------------------

--
-- Table structure for table `temples`
--

CREATE TABLE `temples` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temples`
--

INSERT INTO `temples` (`id`, `name`, `address`, `contact`, `image`, `about`) VALUES
(22, 'Lotus Temple, South Delhi', 'south delhi', '7876543345', 'The-Lotus-Temple-South-Delhi.jpg', 'This house of worship for the BahÃ¡â€™Ã­ religion costing $10 million opened in 1986. It is open to all and requires no religious affiliations or other qualifications of its visitors, who come in droves to see it.\r\n\r\nConsidered to be an architectural marvel, the temple accommodates 2500 people. It has 27 petals etched out of marble, which are arranged in clusters of three to form nine sides. Space is only meant for gathering, reflecting and worshipping. Though rituals are not permitted; singing, chanting, praying or reading any religious text in any language is allowed along with lecturing, sermonising, and fund-raising.'),
(22, 'Chhattarpur Temple', 'South Delhi', '4556677788', 'Chattarpur-Temple-South-Delhi-.jpg', 'Officially known as the Shri Aadya Katyayani Shakti Peetham, this temple to Goddess Katyayani (A manifestation of Goddess Durga) is just 4 kilometers from Qutub Minar. This marble temple is envisaged and constructed through the exemplary efforts of Sant Shiromani Baba Nagpal.\r\n\r\nThis huge temple follows the Vassar type of architecture and has perforated or latticed stonework on all sides. Spread overall an area of 60 acres, this complex has 20 temples, big and small, divided into three separate complexes where the temples were built in both North Indian and South Indian styles of architecture.'),
(22, 'Yogmaya Temple', 'Mehrauli', '5656567777', 'The-entry-door-to-the-Yogmaya-Precincts-.jpg', 'A Shakthi Peetha (Seat of Power) dedicated to the Goddess Yogmaaya, the sister of Krishna, representing the illusionary power of God. This temple is also said to have been built by the Pandavas.\r\n\r\nOver the years, it has faced assaults about 27 times, from various invading armies, including those of Mohammed Ghazni and Mamluks and had to be repeatedly restored or rebuilt. The temple, which is still in use today, was re-built by Raja Vikramaditya Hemu.'),
(22, 'Swaminarayan Akshardham', 'New Delhi', '6767778877', 'Swaminarayan-Akshardham.jpg', 'Inaugurated in 2005, this temple complex combines the finest example of traditional Hindu/Indian culture, architecture and spirituality. Sitting near the banks of the Yamuna, the temple attracts a huge number of visitors, many of whom believe it to be the temporal abode of God on earth. Etched with intricate carvings, the Akshardham Mandir alone is 141-foot high, spans 316-foot wide, and extends 356-foot long.'),
(22, 'Jagannath Mandir', 'New Delhi', '7688987889', 'Jagannath-Mandir-New-Delhi-.jpg', 'Located 1 kilometer away from the INA Metro Station, the Jagannath Temple is an easily accessible alternative to all those who wanted to but were unable to visit Him at Puri.\r\n\r\nThe temple is open to everyone without discrimination against caste, creed, gender or community. The temple promotes the learning of all classical Indian dances, and especially Odissi. It is also involved in promoting philanthropic activities and works to uplift the underprivileged.\r\n\r\n'),
(22, 'ISKCON Temple', 'Near Nehru Place', '6787878899', 'The-ISKCON-Temple-at-Delhi-.jpg', 'This Vaishnav temple of Lord Krishna and Radharani opened in 1998, near Nehru Place.  There are many such temples in India built under the auspices of the International Society for Krishna Consciousness. Vaishnavism or the worship of an avatar of  Vishnu, usually Krishna, originated in the first millennium BCE and continues strong to this day.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(250) NOT NULL,
  `verification` int(1) NOT NULL,
  `imageSource` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `id`, `verification`, `imageSource`) VALUES
('shivanshu1', 'shivanshu5416jaiswal@gmail.com', '4bbde07660e5eff90873642cfae9a8dd', 26, 1, 'Lal-Qila-took-a-decade-to-complete-.jpg'),
('shivanshu', 'shivanshu5417jaiswal@gmail.com', '4bbde07660e5eff90873642cfae9a8dd', 33, 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place` (`place`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
