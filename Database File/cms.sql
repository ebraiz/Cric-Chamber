-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2015 at 04:23 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`login_id`, `user_name`, `user_pass`) VALUES
(1, 'umar', 'ali'),
(2, 'kashif', 'chishti');

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE IF NOT EXISTS `menu1` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`m_id`, `m_title`) VALUES
(1, 'Home'),
(17, 'About Me'),
(18, 'Privacy Policy'),
(19, 'Disclaimer'),
(20, 'Cric Games'),
(21, 'FAQs'),
(22, 'Live Streaming');

-- --------------------------------------------------------

--
-- Table structure for table `menu2`
--

CREATE TABLE IF NOT EXISTS `menu2` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `menu2`
--

INSERT INTO `menu2` (`m_id`, `m_title`) VALUES
(9, 'Parodies'),
(12, 'Historical Victories'),
(13, 'Amazing Videos'),
(14, 'Best Catches'),
(15, 'Information'),
(16, 'Records');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_title` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `p_title`, `p_description`) VALUES
(1, 'Home ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su'),
(11, 'About', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(12, 'wallpapers', 'Rangana Herath from Srilanka takes an outstanding catch of Matthew Wade of Australia and break down the Opening Partnership of 136 between Wade and Warner, Wade dismiss on 64 against srilankan fast bowler Nuwan Kulasekara during Tri one-day series 2012 between India, Australia and Sri Lanka, Check it out....\r\nUploader: AussieSportUploader.'),
(13, 'About Me', 'I am a final year computer science of Edwardes College. I have create this cricket blog with full content management system behind it. This site is already exist with the name of Cric Chamber, which I have created previously on blogger.com, Enjoy this new version of the site or you can also visit the sister site URL: cricchamber.blogspot.com'),
(14, 'Privacy Policy', 'Cric Chamber know how to take care of the information we collect from our visitors, You do not need to give us your personal information to visit Cric Chamber, If you choose to contact us then we will only maintain the information as long as needed to respond to your question or request for Links, we do not give, share, sell or transfer any information to a third party other than demographics for our knowledge.\r\n\r\nIf users wish to subscribe to our E-mail Subscription, we ask for Email. Our Newsletter is powered by Feed burner, Feed burner use information submitted by you in the same manner as we use, Recipients of our newsletters can unsubscribe using the instructions listed at the end of the e-mail newsletter.\r\n\r\nWe use Google Analytics, which is covered by Googleâ€™s Privacy policy to monitor our traffic and to analyze visitorsâ€™s information, we use cookies with minimal information in them, Cookies are alphanumeric identifiers that we transfer to your computerâ€™s hard drive through your web browser and for each visitor to our Web page, our web server automatically recognizes information of your browser, Operating System, Website (from where you arrived) City/State/Country, Screen Resolutions and similar.\r\n\r\nComments that are Abusive, Personal, Incendiary, Irrelevant or written for any Advertising purpose cannot be published.\r\n\r\nIf you feel that this site is not following its stated information policy, you may Contact us.'),
(15, 'Disclaimer', 'Every Article here on Cric Chamber are self written by the Admin, but the Dates and General Information are collected from different Places for the Accuracy and Correctness and the wallpapers, Photos are not owned by Cric Chamber, They are just a collection of some beautiful images from different websites, Like Cricinfo.com, Cricpoint.com and Wallpapers99.com.\r\nas far as live streaming is concerned We are absolutely legal and contain links of other sites on the Internet, We do not host any streaming files, We just use links freely available over internet, All videos are broadcasted on Livecaster.tv, Yocast.tv, Ucaster.eu, Veemi.com, 99cast.com, mips.tv, streamhq.tv etc, If any issues, please contact the particular source hosting streaming content. We are not responsible for any damages or infringements causes.');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `title`, `description`, `date`, `author`, `category`, `image`) VALUES
(4, 'Anil Kumble 10 Wickets in an Inning', 'Anil Kumble from India takes 10 wickets in an inning against Pakistan, 2nd Test, 2nd Innings at Feroz Shah Kotla Delhi on February 4-8-1999. India won the toss and electing to bat, India found the off-spin of Saqlain Mustaq too hot to handle and were all out for 252 early on day two. With the pitch providing generous assistance to spinners, Kumble and Harbhajan Singh bowled out Pakistan for a measly 172. Anil Kumble takes 10 wicket in that Inning and becomes the first Indian bowler to achieved the historic feat of grabbing all ten wickets for 74 runs in 21.3 over spell. India won by 212 runs, India went into the match already 1-0 down in the two match series, eager to avenge the narrow 12-run defeat by Pakistan in Chennai a week previously. 2 match series drawn 1-1. Player of the match Anil Kumble for 14 wickets.', '2015-12-20 13:55:34', 'Admin', 'records', 'images/Kumble.jpg'),
(5, 'Funny Controversies Against Misbah', '37 year old Misbah-ul-Haq from Mianwali, is a Captain of Pakistan National Cricket Team, Now a days Misbah is criticize by alot of  his Pakistani fans because of his slow batting strike rate, due to which Pakistan has lost some big and important matches, One in World Cup Semi-Final against India 2011, Second also against India in T20 world cup 2007 and Third, is recently they lost T20 against England 2012, People of Pakistan spreading their funny Controversial opinion through Sms and different Social Networks in the form of images etc', '2015-12-20 13:56:33', 'Admin', 'information', 'images/Misbah.jpg'),
(6, 'What is D/L Method in Cricket?', 'This Duckworth/Lewis Method (written as D/L Method) is considered as the most accurate method of calculating the target for team batted second, as the name indicates this Method is Invented by the two British Statisticians, Frank Duckworth and Tony Lewis in January 1997, This Method is about 16 year old but still many cricket fans dont know what this method Actually is? Today we will explain in detailed about this Method.', '2015-12-20 13:57:07', 'Admin', 'information', 'images/ducklewis.png'),
(7, 'Sachin Tendulkar Funny Interview', 'Watch this amazing video clip of the Indian Star Batsman Sachin Ramesh Tendulkar giving his funny Parody interview to Aftab Iqbal in a (Urdu/Hindi) Program of Khabaar Naak telecast on Geo Tv.', '2015-12-21 15:53:47', 'Admin', 'parodies', 'images/tendulkar.gif'),
(8, 'Muhammad Aamir Funny Parody Interview', 'Pakistani Fast Bowler Muhammad Aamir giving his Funny Parody Interview to Banana News Network telecast on Geo Tv, Discussing the issue of match fixing and Series lost Against Australia.', '2015-12-21 15:54:24', 'Admin', 'parodies', 'images/amir.jpg'),
(9, 'Mohammad Amir Memorable Day (73* VS NZ)', 'This is a highlights of one the memorable match in which Pakistani Left arm fast Bowler Muhammad Amir Prove himself as great Batman after scoring 73* Runs (7 Fours & 3 Sixes) and give a stand of 103 Runs Partnership for 10th wicket with Saeed Ajmal (This Partnership becomes the 2nd highest runs partnership on 10th wicket), This match was actually lost by Pakistan with 7 runs but we have seen a great turnout by the Pakistani Tail-ender, when they came into bat they were 101 for 9 with 26.5 overs remaining and they ended the inning with 204, They fight for Pakistan till the first ball of 49th over bowled by Jacob Oram, when Saeed Ajmal Caught by Mills on 33, In the 3rd ODI match played against New Zealand at Sheikh Zayed Stadium, Abu Dhabi on 9 November 2009.', '2015-12-21 15:56:22', 'Admin', 'Historical Victories', 'images/amir1.jpg'),
(10, 'Champions Trophy Final Match 2004', 'This is another very interesting and historical Match Played between England and West indies, England set a target of 218 in 49.4 overs for West indies and In Reply they were 147 for 8 in 34th over when the last hope Chanderpaul caught out by Vaughan on 47. They still need 71 runs in 16 overs, England were sure that they gone a win this game but we seen a great turnout by a Wicket-Keeper Batsman CO Browne (35) and Bowler IDR Bradshaw(34) which gives a stand of 71 runs partnership for the 9 wicket and won the match against England in the final of ICC Champions Trophy 2004 Played at Kennington Oval, London on 25 September 2004.', '2015-12-21 15:57:05', 'Admin', 'Historical Victories', 'images/westindies2004.jpg'),
(11, 'Andrew Strauss Amazing Throw', 'Andrew Strauss the English captain does a masterful trick and destroys his own sunnies, on July 21, 2012 during fielding in the 1st Test, day 3 against South Africa at the Oval, He loses his glasses from his head, As he was throwing the ball to the wicket keeper and while the sunnies were in air they caught the drift of his throw and got broken into pieces. ', '2015-12-21 15:58:41', 'Admin', 'Amazing Videos', 'images/strauss.jpg'),
(12, 'Best 8 Balls Ever Of Shane Warne', 'In This Video, One of the worlds best leg spinner ', '2015-12-21 15:59:27', 'Admin', 'Amazing Videos', 'images/warne.jpg'),
(13, 'Best Catch By an Umpire in the History of Cricket', 'This video is not owned by Cric Chamber, I found it on youtube and want to share it on my site, In which a Pakistani Umpire Aleem Dar (The best umpire of the year 2009,2010,2011) takes a great catch in a fantastic style, during 2010 Australia vs England Ashes series.', '2015-12-21 16:00:14', 'Admin', 'Best Catches', 'images/aleem.jpg'),
(14, 'Catch of The Century', 'Rangana Herath from Srilanka takes an outstanding catch of Matthew Wade of Australia and break down the Opening Partnership of 136 between Wade and Warner, Wade dismiss on 64 against srilankan fast bowler Nuwan Kulasekara during Tri one-day series 2012 between India, Australia and Sri Lanka, Check it out....Uploader: AussieSportUploader.', '2015-12-21 16:02:15', 'Admin', 'Best Catches', 'images/catch.jpg'),
(28, 'Jason Gillespie unbeaten on 201* 2006', '37 Year Old Fast Bowler Jason Gillespie from Australia holds the World Record of the most Runs Scored by a nightwatchman, On his 31st Birthday, He came into bat as a nightwatchman on Day 1 and by Day 4 after lunch he was unbeaten on 201*(2 Sixes/26 Fours) in 425 Balls with the Strike Rate of 47.29 against Bangladesh on 16 April 2006 at Chittagong, Bangladesh.\r\nGillespie also give a stand of 320 runs for the 4th wicket partnership with Mike Hussey. Gillespie was awarded Man of The Match in honors for his Double Century in the first innings and Man of The Series for his efforts that included eight wickets, at an average of 11.25, across the two Tests.', '2015-12-23 15:31:49', 'Admin', 'records', 'images/gillipse.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
