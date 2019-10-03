USE `cms`;
-- USE `unaux_24579808_halawatha`;

-- Dumping structure for table cms.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
	(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '18-10-2016 04:18:16');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table cms.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.category: ~2 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
	(1, 'E-commerce', 'E-commerce', '2017-03-28 12:40:55', '2019-06-24 12:36:04'),
	(2, 'general', 'dsdas', '2017-06-11 16:24:06', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table cms.complaintremark
CREATE TABLE IF NOT EXISTS `complaintremark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.complaintremark: ~8 rows (approximately)
/*!40000 ALTER TABLE `complaintremark` DISABLE KEYS */;
INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
	(1, 2, 'in process', 'Hi this for demo', '2017-04-01 22:59:19'),
	(2, 9, 'in process', 'hiiiiiiiiiiiiiiiiiiii', '2017-04-02 00:07:59'),
	(3, 3, 'in process', 'test', '2017-05-02 21:27:43'),
	(4, 19, 'closed', 'case solved', '2017-06-11 16:48:33'),
	(5, 1, 'closed', 'This sample text for testing', '2018-09-05 22:38:26'),
	(6, 5, 'in process', 'test Data', '2019-06-24 12:56:17'),
	(7, 23, 'in process', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-06-24 16:04:47'),
	(8, 23, 'closed', 'Issue resolved ', '2019-06-24 16:07:08');
/*!40000 ALTER TABLE `complaintremark` ENABLE KEYS */;

-- Dumping structure for table cms.state
CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stateName` varchar(255) DEFAULT NULL,
  `stateDescription` tinytext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.state: ~4 rows (approximately)
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
	(3, 'Uttar Pradesh', '', '2016-10-18 17:05:02', '0000-00-00 00:00:00'),
	(4, 'Punjab', 'pbPB', '2016-10-18 17:05:58', '0000-00-00 00:00:00'),
	(5, 'Haryana', 'Haryana', '2017-03-28 12:50:36', '0000-00-00 00:00:00'),
	(6, 'Delhi', 'Delhi', '2017-06-11 16:24:12', '2019-06-24 12:54:19');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

-- Dumping structure for table cms.subcategory
CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.subcategory: ~3 rows (approximately)
/*!40000 ALTER TABLE `subcategory` DISABLE KEYS */;
INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
	(1, 1, 'Online Shopping', '2017-03-28 12:41:07', '0000-00-00 00:00:00'),
	(2, 1, 'E-wllaet', '2017-03-28 12:41:20', '0000-00-00 00:00:00'),
	(3, 2, 'other', '2019-06-24 12:36:44', '2019-06-24 12:51:38');
/*!40000 ALTER TABLE `subcategory` ENABLE KEYS */;

-- Dumping structure for table cms.tblproducts
CREATE TABLE IF NOT EXISTS `tblproducts` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `complaintNumber` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cms.tblproducts: ~9 rows (approximately)
/*!40000 ALTER TABLE `tblproducts` DISABLE KEYS */;
INSERT INTO `tblproducts` (`id`, `userId`, `image`, `regDate`, `lastUpdationDate`) VALUES
	(1, 2147483647, '568011570032237.jpg', '2019-10-02 21:33:57', NULL),
	(3434, 2147483647, '8022361569994218.jpg', '2019-10-02 11:00:18', NULL),
	(9867, 2147483647, '7541731569994356', '2019-10-02 11:02:36', NULL),
	(12345, 2147483647, '870351569993746.png', '2019-10-02 10:52:26', NULL),
	(123456, 2147483647, '9179691569994192.png', '2019-10-02 10:59:52', NULL),
	(876875, 2147483647, '5361781569994302.F.M Fazrin.png', '2019-10-02 11:01:42', NULL),
	(9989876, 2147483647, '2924661569995039.png', '2019-10-02 11:13:59', NULL),
	(12343434, 2147483647, '6654411569993911.jpg', '2019-10-02 10:55:11', NULL),
	(76767565, 2147483647, '8983061569994699.png', '2019-10-02 11:08:19', NULL),
	(876888787, 2147483647, '4138611569997215.png', '2019-10-02 11:50:15', NULL),
	(1231122323, 2147483647, '5849621569994906.jpg', '2019-10-02 11:11:46', NULL),
	(2147483647, 2147483647, '2112701569994992.jpg', '2019-10-02 11:13:12', NULL);
/*!40000 ALTER TABLE `tblproducts` ENABLE KEYS */;

-- Dumping structure for table cms.userlog
CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.userlog: ~29 rows (approximately)
/*!40000 ALTER TABLE `userlog` DISABLE KEYS */;
INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
	(1, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-03-28 22:34:36', '', 1),
	(2, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-03-29 20:32:26', '', 1),
	(3, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-03-30 20:28:00', '', 1),
	(4, 0, 'dsad', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:09:07', '', 0),
	(5, 0, 'dwerwer', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:11:22', '', 0),
	(6, 0, 'ffert', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:11:29', '', 0),
	(7, 0, 'ewrwe', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:12:12', '', 0),
	(8, 0, 'ewrwe', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:17:51', '', 0),
	(9, 0, 'ewrwe', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:17:54', '', 0),
	(10, 0, 'fsdfsdff', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:18:11', '', 0),
	(11, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-03-31 23:19:25', '', 1),
	(12, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-04-02 00:22:35', '02-04-2017 12:24:41 AM', 1),
	(13, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-04-02 00:28:09', '02-04-2017 12:50:42 AM', 1),
	(14, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-04-02 01:08:15', '02-04-2017 01:08:19 AM', 1),
	(15, 0, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-04-03 00:20:20', '', 0),
	(16, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-04-03 00:20:28', '03-04-2017 12:26:50 AM', 1),
	(17, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2017-05-02 23:31:26', '', 1),
	(18, 0, 'test@gm.com', _binary 0x3A3A3100000000000000000000000000, '2017-06-11 16:18:50', '', 0),
	(19, 5, 'abc@abc.com', _binary 0x3A3A3100000000000000000000000000, '2017-06-11 16:26:30', '11-06-2017 04:39:15 PM', 1),
	(20, 6, 'xyz@xyz.com', _binary 0x3A3A3100000000000000000000000000, '2017-06-11 16:43:28', '11-06-2017 04:45:46 PM', 1),
	(21, 6, 'xyz@xyz.com', _binary 0x3A3A3100000000000000000000000000, '2017-06-11 16:49:45', '11-06-2017 04:50:02 PM', 1),
	(22, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2018-05-24 23:56:07', '', 1),
	(23, 0, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2018-09-05 22:35:22', '', 0),
	(24, 0, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2018-09-05 22:35:32', '', 0),
	(25, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2018-09-05 22:37:12', '', 1),
	(26, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2019-06-24 15:57:30', '24-06-2019 04:11:08 PM', 1),
	(27, 1, 'anuj.lpu1@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2019-10-02 01:21:53', '02-10-2019 01:24:53 AM', 1),
	(28, 2, 'mfmfazrin1986@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2019-10-02 01:31:24', '', 1),
	(29, 2, 'mfmfazrin1986@gmail.com', _binary 0x3A3A3100000000000000000000000000, '2019-10-02 01:48:48', '02-10-2019 09:14:49 PM', 1);
/*!40000 ALTER TABLE `userlog` ENABLE KEYS */;

-- Dumping structure for table cms.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table cms.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
	(1, 'Anuj Kumar', 'anuj.lpu1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 9999857860, 'Shakarpur', 'Uttar Pradesh', 'India', 110092, '6e8024ec26c292f258ec30f01e0392dc.png', '2017-03-28 17:14:52', '2019-06-24 16:09:44', 1),
	(2, 'Mohamed Farook Mohamed Fazrin', 'mfmfazrin1986@gmail.com', '71e17aba47d4d6364748518455afd09e', 772049123, NULL, NULL, NULL, NULL, 'c9c2bce82b74978a3e87079f2ce6e52b.png', '2019-10-02 01:31:01', '2019-10-02 08:00:51', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
