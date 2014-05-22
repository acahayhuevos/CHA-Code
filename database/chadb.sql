-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2014 a las 05:51:37
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  `userid` int(11) NOT NULL,
  `img` varchar(300) COLLATE utf8_bin NOT NULL,
  `likes` int(11) NOT NULL,
  `fucks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=167 ;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `content`, `userid`, `img`, `likes`, `fucks`) VALUES
(1, 'I am just sad that a lot of people probably wouldn''t get the joke, if there is a good guy here, please send the link of the post about obama the antchrist so that people will know\r\n', 1, '', 5, 3),
(2, 'I feel like I''m the only person on the fucking server who is capable of flying a helicopter', 2, '', 60, 2),
(3, 'I have 15 stars on my attack chopper and im a very objective oriented player, i hate to see people who jump in vehicles to abandon it when they get to the action-_-', 2, '', 509, 34),
(4, 'Fly lower or more on the side. If you are in the middle if course everyone is going to see you. You are a heli not a flying tank so you can get shot down fairly easily', 1, '', 0, 42),
(5, 'I bet 100 bucks that you cannot cut your head off and walk for 100 mts', 1, '', 0, 0),
(31, 'Waanana be a rock star!', 1, '', 5, 4),
(36, '"Youâ€™re an insane, degenerate piece of filth, and you deserve to die."', 1, 'http://universediscourse.files.wordpress.com/2013/07/bb2.jpg?w=640&h=360', 0, 0),
(38, '-Say my name, say it... \n-Heisenberg\n-Good', 1, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSNZ51PDmnPePlN_ZctrOp-Na-vuep-n1CsPnST7udRGUuFo5bD', 1, 0),
(40, 'Demand a trial by combat in your class', 1, 'http://img.pandawhale.com/post-43409-Tyrion-I-demand-a-trial-by-com-7zhA.gif', 2, 1),
(63, 'I will rule the world', 1, '', 0, 0),
(64, 'Ohh naana', 1, 'http://gamentrain.com/wp-content/uploads/2013/04/rain_blackmill.png', 0, 0),
(71, 'Daftpunk', 1, 'http://www.billboard.com/files/styles/promo_650/public/media/daft-punk-tron-650-430.jpg', 1, 1),
(133, 'We are shining, say my name!', 1, 'http://static.guim.co.uk/sys-images/guardian/Pix/pictures/2011/10/25/1319533374187/Florence-And-The-Machine-005.jpg', 11, 45),
(152, 'She is a very good singer, i love her', 2, 'http://static.guim.co.uk/sys-images/Guardian/Pix/pictures/2010/1/24/1264355915735/florence-and-the-machine--001.jpg', 9, 11),
(155, 'Look at this stupid dog', 2, 'http://cdn.buzznet.com/assets/users16/eavie/default/stupid-dog--large-msg-134404025925.jpg?post_id=106350520', 46, 39),
(166, 'I like the way you lie', 2, '', 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `replay`
--

CREATE TABLE IF NOT EXISTS `replay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_bin NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `img` varchar(300) COLLATE utf8_bin NOT NULL,
  `likes` int(11) NOT NULL,
  `fucks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=124 ;

--
-- Volcado de datos para la tabla `replay`
--

INSERT INTO `replay` (`id`, `content`, `postid`, `userid`, `img`, `likes`, `fucks`) VALUES
(1, 'I have an extra large cow in my garage, will try with it, youll see bitch', 5, 2, '', 3, 9),
(2, 'hahahaha what to se that!', 5, 1, '', 5, 2),
(3, 'Ya losserrr!', 5, 1, '', 0, 0),
(4, 'The you got to love rambo, he loves jumping from choppers, bitches are gonna hate', 3, 1, '', 0, 0),
(5, 'Hola soy papa', 5, 1, '', 0, 0),
(6, 'Hoaskdjlsf', 31, 1, '', 2, 0),
(7, 'Whayttsdsd', 31, 1, '', 0, 0),
(8, 'Dont be a bitch dude', 31, 1, '', 0, 0),
(9, 'Fly bitch, like the fly you are!', 4, 1, '', 0, 0),
(10, 'How are you?', 4, 1, '', 0, 0),
(11, 'What do i mean? Bitch', 4, 1, '', 0, 0),
(12, 'I still dont get the joke, are you retarded?', 1, 1, '', 0, 0),
(13, 'Fuck everyone', 3, 1, '', 0, 0),
(14, 'Dumb ass', 2, 1, '', 0, 1),
(15, 'I give you my hat pepper', 2, 1, '', 1, 0),
(16, 'Thar dwarf if a fucking badaas, geat episode!', 40, 1, '', 1, 0),
(17, 'Yull see', 40, 1, 'http://images5.fanpop.com/image/photos/30800000/got-game-of-thrones-30822822-500-281.gif', 0, 1),
(18, 'there you go', 40, 1, 'http://ih0.redbubble.net/image.12444050.7751/flat,550x550,075,f.jpg', 0, 0),
(19, 'ThatÂ´s gool ', 38, 1, '', 0, 0),
(20, 'Yo got it', 38, 1, 'http://memexico.com/wp-content/uploads/2012/05/AsqAqVYCQAAQ8gV.png', 0, 0),
(21, 'badass', 36, 1, 'http://i3.kym-cdn.com/photos/images/original/000/217/594/FIHci.jpg', 0, 1),
(22, 'lol', 36, 1, 'http://www.quickmeme.com/img/4f/4feed5501c3c531b8f36407ecc5e8309c05a35d2d041eadcdf85dbf539b95791.jpg', 0, 0),
(23, 'goasjasdlasld', 40, 1, '', 0, 0),
(24, 'this is a replay', 40, 1, '', 0, 0),
(25, 'new reply this time yes', 40, 1, '', 0, 0),
(26, 'Got this rply ok', 40, 1, '', 0, 0),
(27, 'You must be scared as shit', 40, 1, '', 0, 0),
(28, 'Do not care for it', 46, 1, '', 0, 0),
(29, 'I demand an answer: Like it?', 38, 1, 'http://www.nofrackingway.us/wp-content/uploads/2012/11/poop.jpg', 0, 0),
(30, 'Pera pera', 72, 1, '', 0, 0),
(31, 'jajaajajajaj ctz lol', 99, 1, '', 0, 0),
(32, 'Hola', 99, 1, '', 0, 0),
(33, 'Thats great', 71, 1, '', 2, 0),
(34, 'Dude thats nice', 118, 1, '', 0, 0),
(35, 'Cool dude', 71, 1, '', 1, 0),
(36, 'Fuck it', 71, 1, '', 0, 0),
(37, 'nice', 122, 1, '', 0, 0),
(38, 'olls', 71, 1, '', 0, 0),
(39, 'She is a beauty', 133, 1, '', 3, 2),
(40, 'Damn true', 133, 1, '', 2, 0),
(41, 'Fufe', 133, 1, '', 0, 0),
(42, 'Done', 133, 1, '', 0, 0),
(43, 'great i say!', 133, 1, '', 0, 0),
(44, 'Fofofofofofofofofof', 133, 1, '', 1, 0),
(45, 'Fosiasdsa', 134, 1, '', 0, 0),
(46, 'klajdlsad', 136, 1, '', 0, 1),
(47, 'gogogog', 137, 1, '', 0, 0),
(48, 'lÃ±zkdxlÃ±skdÃ±ls', 144, 1, '', 0, 1),
(49, 'hyhyhy', 145, 1, '', 0, 1),
(50, 'lÃ±askdÃ±lsd', 145, 1, '', 1, 0),
(51, 'golemmm', 149, 1, '', 1, 0),
(52, 'contrary, i got ya', 150, 1, '', 0, 0),
(53, 'golme', 151, 1, '', 0, 1),
(54, 'Hey thats gloomy', 133, 1, '', 0, 0),
(55, 'glommy my ass', 133, 1, '', 0, 0),
(56, 'lkasÃ±dls', 133, 2, '', 1, 0),
(57, 'Im bacck at home bitches', 71, 2, '', 1, 0),
(58, 'Got this one', 133, 2, '', 1, 0),
(59, 'This is very cool men', 152, 2, '', 1, 1),
(60, 'yeah!', 152, 2, '', 0, 1),
(61, 'lÃ±lkxzx', 154, 1, '', 1, 0),
(62, 'I love it!', 155, 1, '', 1, 0),
(63, 'Badass dog, my legend', 155, 1, '', 0, 0),
(64, 'Good luck men', 155, 1, '', 0, 0),
(65, 'Huha', 155, 1, '', 0, 0),
(66, 'Suck it', 155, 1, '', 0, 0),
(67, 'Suck it', 155, 1, '', 0, 0),
(68, 'Look at me!', 155, 1, '', 0, 0),
(69, 'hehehehe', 155, 1, '', 0, 0),
(70, 'hehehehe', 155, 1, '', 0, 0),
(71, 'hehehehe', 155, 1, '', 0, 0),
(72, 'hehehehe', 155, 1, '', 0, 0),
(73, 'hehehehe', 155, 1, '', 0, 0),
(74, 'hehehehe', 155, 1, '', 0, 0),
(75, 'hehehehe', 155, 1, '', 0, 0),
(76, 'jijiji', 155, 1, '', 0, 0),
(77, 'jujuju', 155, 1, '', 0, 0),
(78, 'jujuju', 155, 1, '', 0, 0),
(79, 'lolo', 155, 1, '', 0, 0),
(80, 'Gorfona', 152, 1, '', 1, 0),
(81, 'Fifi', 152, 1, '', 0, 0),
(82, 'Hola', 155, 1, '', 0, 0),
(83, 'Hola', 155, 1, '', 0, 0),
(84, 'Hola', 155, 1, '', 0, 0),
(85, 'Hola', 155, 1, '', 0, 0),
(86, 'Hola', 155, 1, '', 0, 0),
(87, 'Hola', 155, 1, '', 0, 0),
(88, 'Holaasd', 155, 1, '', 0, 0),
(89, 'Holaasd', 155, 1, '', 0, 0),
(90, 'lkÃ±lkdlskdÃ±s', 155, 1, '', 0, 0),
(91, 'a wild reply', 156, 1, '', 2, 1),
(92, '{Ã±xz\n', 156, 1, '', 0, 0),
(93, 'lkxlsakdsÃ±slÃ±l', 156, 1, '', 1, 1),
(94, 'user id', 156, 2, '', 1, 0),
(95, 'hya', 156, 2, '', 1, 0),
(96, 'lklÃ±kÃ±l', 158, 2, '', 1, 0),
(97, 'lÃ±lÃ±', 155, 2, '', 0, 0),
(98, 'lÃ±lÃ±', 155, 2, '', 0, 0),
(99, 'lkldksl', 155, 2, '', 0, 0),
(100, 'lkldksl', 155, 2, '', 0, 0),
(101, 'lkldksl', 155, 2, '', 0, 0),
(102, 'lkldksl', 155, 2, '', 0, 0),
(103, 'lklklkÃ±', 155, 2, '', 0, 0),
(104, 'lklklkÃ±', 155, 2, '', 0, 0),
(105, 'lklklkÃ±', 155, 2, '', 0, 0),
(106, 'lklklkÃ±', 155, 2, '', 0, 0),
(107, 'lklklkÃ±', 155, 2, '', 0, 0),
(108, 'lklklkÃ±', 155, 2, '', 0, 0),
(109, 'alÃ±kslsads', 159, 2, '', 1, 0),
(110, 'Ã±lkasdls', 161, 2, '', 1, 0),
(111, 'juju', 162, 2, '', 1, 0),
(112, 'Hula', 155, 2, '', 0, 0),
(113, 'Hula', 155, 2, '', 0, 0),
(114, 'Ã±lÃ±lÃ±sa', 155, 2, '', 0, 0),
(115, 'Ã±lÃ±lÃ±sa', 155, 2, '', 0, 0),
(116, 'l,m.,m,', 165, 2, '', 0, 0),
(117, '.,m,.', 155, 2, '', 0, 0),
(118, '.,m,.', 155, 2, '', 0, 0),
(119, 'Fufufa', 155, 2, '', 0, 1),
(120, 'Justav Gung', 166, 2, '', 1, 0),
(121, 'Me too', 166, 2, '', 1, 0),
(122, 'ThatÂ´s sweet', 166, 2, '', 0, 1),
(123, 'ThatÂ´s cool', 166, 2, '', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) COLLATE utf8_bin NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=110 ;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`id`, `tag`, `post_id`) VALUES
(1, 'got', 40),
(2, 'dwarf', 40),
(3, 'got', 3),
(4, 'got', 5),
(5, 'tyronrules', 40),
(6, 'ifyouknowhatimean', 40),
(35, 'conquertheworld', 63),
(36, 'complot', 63),
(37, 'song', 64),
(38, 'blackmill', 64),
(39, 'nana', 64),
(40, 'owa', 65),
(41, 'whatsyourname', 65),
(42, 'bitches', 65),
(43, 'yolo', 66),
(44, 'yala', 66),
(45, 'yale', 66),
(47, 'music', 68),
(48, 'trythis', 68),
(49, 'lol', 68),
(50, 'music', 69),
(51, 'dp', 69),
(53, 'image', 71),
(54, 'music', 71),
(55, 'daftpunk', 71),
(56, 'wut', 72),
(57, 'lol', 72),
(58, 'animal', 73),
(59, 'africa', 73),
(60, 'yolo', 73),
(61, 'plds', 74),
(62, 'isdksmk', 74),
(63, 'jojojo', 76),
(64, 'jijiji', 76),
(65, 'animal', 77),
(66, 'au', 77),
(67, 'pepe', 78),
(68, 'ola', 78),
(69, 'lolo', 79),
(70, '123', 79),
(73, 'yolo', 98),
(79, 'florence', 133),
(88, 'gogog', 143),
(95, 'florence', 152),
(98, 'yolo', 155),
(99, 'dog', 155),
(100, 'stupid', 155),
(108, 'liar', 166),
(109, 'lie', 166);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) COLLATE utf8_bin NOT NULL,
  `about` text COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nickname`, `about`, `password`, `avatar`, `email`) VALUES
(1, 'PussyCat', 'My Funny Collection of pussies', '123', 'images/u1.jpg', 'hhh@g.com'),
(2, 'Badaasss', 'Just Picking my nose', '123', 'images/u2.jpg', 'ppp@g.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
