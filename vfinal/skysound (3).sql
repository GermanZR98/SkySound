-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2018 a las 14:13:51
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skysound`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nadmin` varchar(120) NOT NULL,
  `uadmin` varchar(120) NOT NULL,
  `cadmin` varchar(120) NOT NULL,
  `eadmin` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdmin`, `nadmin`, `uadmin`, `cadmin`, `eadmin`) VALUES
(1, 'german', 'TheZambrana98', '25931827225d07b6908698860f14687e', 'german@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `idcancion` int(11) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `ncancion` varchar(255) NOT NULL,
  `reproduccion` int(50) NOT NULL,
  `cancion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`idcancion`, `artista`, `ncancion`, `reproduccion`, `cancion`) VALUES
(1, 'dazed', 'electronica-2000-2009', 6502, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdazed%2Felectronica-2000-2009%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(2, 'dj_hacks', 'pop-2018-mixed-by-shota-from-dj-hacks', 68917, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdj_hacks%2Fpop-2018-mixed-by-shota-from-dj-hacks%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(3, 'adamkvasnica3', 'flamenco', 3224, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fadamkvasnica3%2Fflamenco%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(4, 'RadioXTrack', 'heavy-metal-02-nicolas-ullmann', 920, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FRadioXTrack%2Fheavy-metal-02-nicolas-ullmann%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(5, 'wrayandnephew', 'kenny-allstars-sounds-of-carnival-series-ft-dj-larizzle-afro-house-uk-funky', 0, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fwrayandnephew%2Fkenny-allstars-sounds-of-carnival-series-ft-dj-larizzle-afro-house-uk-funky%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"'),
(6, 'djsesion', 'reggaeton-2018-reggaeton-mix-2018-lo-mas-nuevo-ozuna-bad-bunny-maluma-j-balvin-becky-g', 12495, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjsesion%2Freggaeton-2018-reggaeton-mix-2018-lo-mas-nuevo-ozuna-bad-bunny-maluma-j-balvin-becky-g%2F&amp;hide_cover=1&amp;light=1\" framebo'),
(7, 'soulpreachernight', 'the-70s-groove-heavily', 3907, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fsoulpreachernight%2Fthe-70s-groove-heavily%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(8, 'djrusske', 'djrusske-30minutesof-uk-rap', 71839, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fdjrusske%2Fdjrusske-30minutesof-uk-rap%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(9, 'trapjaw', 'dark-industrial-cafe-vol-2-dirtydaela', 7068, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Ftrapjaw%2Fdark-industrial-cafe-vol-2-dirtydaela%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(10, 'maxvibes', 'raw-funk-03', 16899, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Fmaxvibes%2Fraw-funk-03%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(11, 'lowlight', 'alternative-blade-runner-2049-soundtrack', 8985, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2Flowlight%2Falternative-blade-runner-2049-soundtrack%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n'),
(12, 'DJFLOWNY', 'dj-flow-bachata-clasica-con-flow-2014-lmp', 1472, '<iframe width=\"100%\" height=\"120\" src=\"https://www.mixcloud.com/widget/iframe/?feed=https%3A%2F%2Fwww.mixcloud.com%2FDJFLOWNY%2Fdj-flow-bachata-clasica-con-flow-2014-lmp%2F&amp;hide_cover=1&amp;light=1\" frameborder=\"0\"></iframe>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `idcancion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `comentario`, `idcancion`, `nombre`) VALUES
(108, 'Canción:2:33?', 1, 'a'),
(109, 'Me gustó mucho!!!', 3, 'TheZambrana98'),
(110, 'sdsfsfd', 1, 'TheZambrana98'),
(111, 'rggrgr', 7, 'TheZambrana98');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(33) NOT NULL,
  `apellidousuario` varchar(50) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `correo`, `contrasena`, `apellidousuario`, `nombreusuario`) VALUES
(1, 'germandaw98@gmail.com', '25931827225d07b6908698860f14687e', 'zambrana', 'TheZambrana98'),
(2, 'prueba@gmail.com', '8b69508176c22e2914787e964225eb91', 'zambrana', 'TheZambrana9?'),
(4, 'a@g.com', '0cc175b9c0f1b6a831c399e269772661', 'a', 'a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`idcancion`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `idcancion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
