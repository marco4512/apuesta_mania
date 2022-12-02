-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2022 a las 00:07:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apimania`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_admin`, `id_user`, `id_permisos`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apuestas`
--

CREATE TABLE `apuestas` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_opcion_apuesta` int(11) NOT NULL,
  `cantidad_apostada` double NOT NULL,
  `status_apuesta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apuestas`
--

INSERT INTO `apuestas` (`id`, `id_user`, `id_categoria`, `id_opcion_apuesta`, `cantidad_apostada`, `status_apuesta`) VALUES
(1, 1, 1, 1, 60, 'Se gano'),
(2, 1, 1, 2, 150.5, 'Se gano'),
(3, 1, 1, 2, 150.3, 'Se gano'),
(4, 1, 2, 4, 50, 'Se gano'),
(5, 1, 1, 2, 100, 'Se gano'),
(6, 1, 1, 3, 500, 'Se gano'),
(7, 9, 2, 6, 650, 'Se gano'),
(8, 5, 4, 7, 450, 'Se gano'),
(9, 34, 1, 1, 60, 'Se gano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_juegos`
--

CREATE TABLE `categoria_juegos` (
  `id_categorias` int(11) NOT NULL,
  `nombre_categoria` text CHARACTER SET latin1 NOT NULL,
  `url_categoria_img` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria_juegos`
--

INSERT INTO `categoria_juegos` (`id_categorias`, `nombre_categoria`, `url_categoria_img`) VALUES
(1, 'Casino', 'https://cdn.pixabay.com/photo/2016/11/21/17/34/las-vegas-1846684_960_720.jpg'),
(2, 'Fotball', 'https://cdn.pixabay.com/photo/2018/06/12/20/17/soccer-3471402_960_720.jpg'),
(3, 'Baloncesto', 'https://i0.wp.com/naciondeportes.com/wp-content/uploads/2020/05/chicago-bulls-despues-de-michael-jordan.jpg?fit=1000%2C600&ssl=1'),
(4, 'Americano', 'https://cdn.pixabay.com/photo/2016/11/29/03/53/athletes-1867185_960_720.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones_de_apuesta`
--

CREATE TABLE `opciones_de_apuesta` (
  `id_opciones` int(11) NOT NULL,
  `nombre_opcion` text NOT NULL,
  `catidad_minima` double NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `url_imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opciones_de_apuesta`
--

INSERT INTO `opciones_de_apuesta` (`id_opciones`, `nombre_opcion`, `catidad_minima`, `id_categoria`, `url_imagen`) VALUES
(1, 'Poquer', 50, 1, 'https://cdn.pixabay.com/photo/2015/01/08/16/35/play-593207_960_720.jpg'),
(2, 'Ruleta', 50, 1, 'https://cdn.pixabay.com/photo/2015/10/23/15/28/game-bank-1003151_960_720.jpg'),
(3, 'Blackjack', 60, 1, 'https://cdn.pixabay.com/photo/2013/07/25/12/06/card-game-167051_960_720.jpg'),
(4, 'Real Madrid', 450, 2, 'https://images.news18.com/ibnlive/uploads/2021/03/1614676202_c75c28559e048ecb2e0c232a374ebaa2.jpg'),
(5, 'Fc Barcelona', 600, 2, 'https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/190px-FC_Barcelona_%28crest%29.svg.png'),
(6, 'Ac milan', 600, 2, 'data:image/png;base64,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'),
(7, 'Dallas Cowboys', 450, 4, 'https://www.tshaonline.org/images/handbook/entries/DD/dallas-cowboys-star-logo.jpg'),
(8, 'New England Patriots', 600, 4, 'https://lh3.googleusercontent.com/QXTGFbTl0wLSkPLXeW2q3kb07-qgXimGZbPfftb6CshhQSexCsi9flXu0OhIzFTp2wjz'),
(9, 'New York Jets', 600, 4, 'data:image/jpeg;base64,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'),
(10, 'Chicago bulls', 300, 3, 'https://a.espncdn.com/i/teamlogos/nba/500/chi.png'),
(11, 'Miami heats', 600, 3, 'https://upload.wikimedia.org/wikipedia/en/thumb/f/fb/Miami_Heat_logo.svg/800px-Miami_Heat_logo.svg.png'),
(12, 'LA Clippers', 600, 3, 'https://a.espncdn.com/combiner/i?img=/i/teamlogos/nba/500/lac.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `nombre_permiso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `nombre_permiso`) VALUES
(1, 'root'),
(2, 'moderador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `tarjetNumber` text NOT NULL,
  `birtday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `tarjetNumber`, `birtday`) VALUES
(1, 'marco', 'marco_alex45@hotmail.com', '114400880077', '1234-1234-1324-5462', '2000-01-25'),
(5, 'carlos', 'carlos@hotmail.com', '123456789654', '1111-1111-1111-1111', '2022-11-25'),
(6, 'jose', 'jose@hotmail.com', '123456', '2222-2222-2222-2222', '2022-11-25'),
(7, 'Adriano', 'aiannuzzi0@posterous.com', '3Cpcd5bV', '5048-3723-1395-7389', '2001-09-27'),
(8, 'Shirlee', 'smundford1@people.com.cn', 'gk6HRMP', '5048-3786-8512-8798', '2003-11-07'),
(9, 'Derek', 'dghiraldi2@spotify.com', 'ZC8upp6', '5048-3759-4151-8176', '1999-10-21'),
(10, 'Rosana', 'rbricksey3@whitehouse.gov', 'y0fjjK', '5048-3761-5352-0355', '2003-09-12'),
(11, 'Rosabelle', 'rbettley4@indiegogo.com', 'cknxQ1nVcvP', '5108-7559-3805-7659', '2001-09-25'),
(12, 'Perrine', 'pwarrack5@about.com', 'Epy8RKAb4NC', '5048-3710-4850-4953', '2003-02-24'),
(13, 'Pavel', 'pvandevelde6@about.com', 'h0EmhadGD', '5108-7549-7782-6264', '2002-04-01'),
(14, 'Sophey', 'sfranzke7@php.net', '3Ganlzpw2Qx', '5108-7513-1007-1608', '1999-11-28'),
(15, 'Abdul', 'akibel8@facebook.com', 'pPCBxlwq7MnL', '5048-3796-9270-4910', '2004-11-08'),
(16, 'Debera', 'dchallenger9@nyu.edu', '1FUOIJwn', '5048-3714-8253-3328', '1999-07-04'),
(17, 'Llewellyn', 'lcriellya@naver.com', 'M2OfaPyYL3', '5108-7595-3698-4678', '2003-03-11'),
(18, 'Lizzy', 'lgoudardb@twitter.com', 'm3NKJEBKYLU', '5108-7589-7576-3072', '2002-07-12'),
(19, 'Birdie', 'bhopkinsc@msn.com', 'ZdrEdnY', '5108-7516-9120-6971', '1999-01-10'),
(20, 'Gerta', 'gvakhrushind@merriam-webster.com', 'hT57mPsQ', '5108-7501-5424-7019', '2003-12-14'),
(21, 'Otha', 'otrewarthae@paginegialle.it', 'MyJazrUxsy', '5048-3767-0568-7496', '2002-12-13'),
(22, 'Geoffrey', 'gdedneyf@ihg.com', 'Te6c8hb', '5108-7517-4800-5111', '2002-05-18'),
(23, 'Dyna', 'dbucklang@miibeian.gov.cn', 'O1kmmMn9yzL', '5048-3724-1072-2991', '2000-06-25'),
(24, 'Lowrance', 'ldanneilh@unicef.org', 'pRNbUR5Qb6JG', '5108-7529-6056-2839', '2003-06-28'),
(25, 'Phil', 'prolfei@uol.com.br', '6lFt9Se', '5048-3794-6906-6808', '2003-12-11'),
(26, 'Palm', 'pglavinj@unblog.fr', 'XeC80B', '5048-3792-3218-8269', '2003-10-22'),
(27, 'Nikos', 'nbestonk@reddit.com', 'kfXEvNMjwXd0', '5108-7550-4789-6500', '2004-12-27'),
(28, 'Cob', 'croblettl@noaa.gov', 'IPFHMTpXlYF9', '5108-7572-1574-9735', '2004-03-14'),
(29, 'Golda', 'grangerm@omniture.com', 'pGAWqFZ3', '5108-7587-7015-0475', '2003-06-17'),
(30, 'Maxi', 'melcomn@typepad.com', 'X0Uzaol', '5048-3700-3584-5585', '2001-05-24'),
(31, 'Jermayne', 'jpersenceo@miitbeian.gov.cn', 'bEPWKqr9', '5108-7532-8092-1465', '2004-03-14'),
(32, 'Gae', 'gclementetp@hp.com', 'EFzIJHl', '5108-7532-9356-4401', '2003-07-17'),
(33, 'Jewel', 'jkenafaqueq@youtube.com', 'IF3uoSQ6', '5048-3744-7071-9248', '2004-05-20'),
(34, 'Kellina', 'kwalesr@state.tx.us', 'KDnpHqs3mwb', '5108-7598-7519-4434', '2002-06-11'),
(35, 'Rayshell', 'rdunsfords@huffingtonpost.com', 'LXNw4Vg', '5048-3768-8119-9142', '1999-09-16'),
(36, 'Dotti', 'dbowldt@kickstarter.com', 'cTjQSNXyC', '5108-7548-0161-8887', '2003-08-23'),
(37, 'marcoasas', 'hola@jhgasd.com', '4654654879', '1111-2222-3333-5555', '2022-12-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `apuestas`
--
ALTER TABLE `apuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_opcion_apuesta` (`id_opcion_apuesta`);

--
-- Indices de la tabla `categoria_juegos`
--
ALTER TABLE `categoria_juegos`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `opciones_de_apuesta`
--
ALTER TABLE `opciones_de_apuesta`
  ADD PRIMARY KEY (`id_opciones`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apuestas`
--
ALTER TABLE `apuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria_juegos`
--
ALTER TABLE `categoria_juegos`
  MODIFY `id_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `opciones_de_apuesta`
--
ALTER TABLE `opciones_de_apuesta`
  MODIFY `id_opciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `apuestas`
--
ALTER TABLE `apuestas`
  ADD CONSTRAINT `apuestas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `apuestas_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_juegos` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `apuestas_ibfk_3` FOREIGN KEY (`id_opcion_apuesta`) REFERENCES `opciones_de_apuesta` (`id_opciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opciones_de_apuesta`
--
ALTER TABLE `opciones_de_apuesta`
  ADD CONSTRAINT `opciones_de_apuesta_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria_juegos` (`id_categorias`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
