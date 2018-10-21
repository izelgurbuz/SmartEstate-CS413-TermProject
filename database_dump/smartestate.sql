-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2018 at 08:15 PM
-- Server version: 5.7.18
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `about` varchar(255) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `city`, `about`, `phonenum`, `email`, `picture`, `address`, `facebook`, `twitter`, `google`, `linkedin`) VALUES
(1, 'Yonca Yunatci', 'Ankara', 'She is the best ', '901234567891', 'yunatci@gmail.com', 'http://w3.bilkent.edu.tr/www/wp-content/uploads/sites/5/2015/05/ing-amblemP.jpg', 'Bilkent University, Ankara', 'http://facebook.com', 'http://twotter.com', 'http://google.com', 'http://linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `agid` int(11) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appid`, `uid`, `agid`, `date`) VALUES
(1, 1, 1, '19/12/2017');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `pid` int(11) NOT NULL,
  `agentID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `what` varchar(20) NOT NULL,
  `forWhat` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `bedroom` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `addDate` date NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `BuildingAge` varchar(255) NOT NULL,
  `Heating` varchar(255) NOT NULL,
  `ExerciseRoom` varchar(255) NOT NULL,
  `Parking` varchar(255) NOT NULL,
  `Sewer` varchar(255) NOT NULL,
  `StorageRoom` varchar(255) NOT NULL,
  `Cooling` varchar(255) NOT NULL,
  `Water` varchar(255) NOT NULL,
  `isAirConditioning` int(11) NOT NULL,
  `isLaundryRoom` int(11) NOT NULL,
  `isWindowCovering` int(11) NOT NULL,
  `isSwimmingPool` int(11) NOT NULL,
  `isGym` int(11) NOT NULL,
  `isInternet` int(11) NOT NULL,
  `isCentralHeating` int(11) NOT NULL,
  `isAlarm` int(11) NOT NULL,
  `firstFloorPlan` text NOT NULL,
  `firstFloorArea` int(11) NOT NULL,
  `secondFloorPlan` text NOT NULL,
  `secondFloorArea` int(11) NOT NULL,
  `garage` text NOT NULL,
  `garageArea` int(11) NOT NULL,
  `youtubeURL` varchar(255) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`pid`, `agentID`, `name`, `what`, `forWhat`, `price`, `description`, `bedroom`, `room`, `bathroom`, `area`, `addDate`, `address`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `BuildingAge`, `Heating`, `ExerciseRoom`, `Parking`, `Sewer`, `StorageRoom`, `Cooling`, `Water`, `isAirConditioning`, `isLaundryRoom`, `isWindowCovering`, `isSwimmingPool`, `isGym`, `isInternet`, `isCentralHeating`, `isAlarm`, `firstFloorPlan`, `firstFloorArea`, `secondFloorPlan`, `secondFloorArea`, `garage`, `garageArea`, `youtubeURL`, `location`) VALUES
(1, 1, 'Camlik Sitesi E2 Blok', 'house', 'sale', 420, '					<p>\r\n						Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis. \r\n					</p>\r\n\r\n					<p>\r\n						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.\r\n					</p>\r\n\r\n					<p>\r\n						Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.\r\n					</p>', 3, 4, 1, 800, '2017-12-17', 'Kat: 24 No: 120, Albatros Cd. Universiteler Mh. 06800 Cankaya', 'images/single-property-01.jpg', 'images/single-property-02.jpg', 'images/single-property-03.jpg', 'images/single-property-04.jpg', 'images/single-property-05.jpg', 'images/single-property-06.jpg', '2 Years', 'Forced Air, Gas', 'Yes', 'Attached Garrage', 'Public/City', 'No', 'Central Cooling', 'Yes', 1, 1, 1, 1, 1, 1, 1, 1, '						<div>\r\n						<a class=\"floor-pic mfp-image\" href=\"https://i.imgur.com/kChy7IU.jpg\">\r\n							<img src=\"https://i.imgur.com/kChy7IU.jpg\" alt=\"\">\r\n						</a>\r\n						<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>\r\n						</div>', 460, '						<div>\r\n							<a class=\"floor-pic mfp-image\" href=\"https://i.imgur.com/l2VNlwu.jpg\">\r\n								<img src=\"https://i.imgur.com/l2VNlwu.jpg\" alt=\"\">\r\n							</a>\r\n							<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut taciti sociosqu condimentum feugiat.</p>\r\n						</div>', 440, '						<div>\r\n							<a class=\"floor-pic mfp-image\" href=\"https://i.imgur.com/0zJYERy.jpg\">\r\n								<img src=\"https://i.imgur.com/0zJYERy.jpg\" alt=\"\">\r\n							</a>\r\n						</div>', 140, 'UPBJKppEXoQ', '<div id=\"propertyMap\" data-latitude=\"39.880303\" data-longitude=\"32.749437\"></div>'),
(2, 1, 'Park Sitesi F1 Blok', 'house', 'rent', 900, '					<p>\r\n						Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis. \r\n					</p>\r\n\r\n					<p>\r\n						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.\r\n					</p>\r\n\r\n					<p>\r\n						Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.\r\n					</p>', 5, 2, 3, 800, '2017-12-17', ' Kat10 No:80, Bilkent Park Sitesi Universiteler Mh. 06800 Cankaya', 'images/single-property-04.jpg', 'images/single-property-05.jpg', 'images/single-property-06.jpg', 'images/single-property-01.jpg', 'images/single-property-02.jpg', 'images/single-property-03.jpg', '8', 'Gas', 'Yes', 'Private Garrage', 'Central', 'Yes', 'Airconditioner', 'Central', 1, 1, 0, 0, 1, 1, 1, 1, '						<div>\r\n						<a class=\"floor-pic mfp-image\" href=\"https://i.imgur.com/kChy7IU.jpg\">\r\n							<img src=\"https://i.imgur.com/kChy7IU.jpg\" alt=\"\">\r\n						</a>\r\n						<p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent conubia.</p>\r\n						</div>', 200, '', -1, '', -1, 'TrQtNL3G1ks', '<div id=\"propertyMap\" data-latitude=\"39.881347\" data-longitude=\"32.758561\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `about` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `email`, `picture`, `title`, `type`, `phone`, `about`, `twitter`, `facebook`, `google`) VALUES
(1, 'mustafa', 'Mustafa Culban', 'm02800280c', 'mustafaculban1@gmail.com', 'http://w3.bilkent.edu.tr/www/wp-content/uploads/sites/5/2015/05/ing-amblemP.jpg', 'REGULAR AGENT', 'agent', '123 123 32 31', 'about me section for mustafa', 'twitter', 'facebook', 'googlee'),
(2, 'mustafa2', 'Mustafa Culban', 'm02800280c', 'karamusluk@gmail.com', 'http://w3.bilkent.edu.tr/www/wp-content/uploads/sites/5/2015/05/ing-amblemP.jpg', 'UI DESIGNER', 'admin', '123 123 32 31', 'about me section for mustafa', 'twitter', 'facebook', 'googlee'),
(3, 'mustafaculban', 'Mustafa Culban', 'm02800280c', 'mustafaculban@gmail.com', 'http://w3.bilkent.edu.tr/www/wp-content/uploads/sites/5/2015/05/ing-amblemP.jpg', 'REGULAR WORKER', 'regular', '123 123 32 31', 'about me section for mustafa', 'twitter', 'facebook', 'googlee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appid`),
  ADD KEY `agid` (`agid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `agentID` (`agentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`agid`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`agentID`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
