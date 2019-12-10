-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2019 a las 20:58:11
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_r`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `idBarrio` int(11) NOT NULL,
  `barrio` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`idBarrio`, `barrio`) VALUES
(1, '12 de octubre'),
(2, '2 de abril'),
(3, '20 de Julio'),
(4, '7 de mayo'),
(5, '7 de noviembre'),
(6, '8 de octubre'),
(7, '8 de octubre Bis'),
(8, 'Antenor Gauna'),
(9, 'Bernardino Rivadavia'),
(10, 'Caracolito'),
(11, 'Centro'),
(12, 'Collucio'),
(13, 'Cono Sur'),
(14, 'CoViFol'),
(15, 'Divino Niño'),
(16, 'Don Bosco'),
(17, 'El Palmar'),
(18, 'El Palomar'),
(19, 'El porvenir'),
(20, 'El Pucú'),
(21, 'El Resguardo'),
(22, 'El Timbó I'),
(23, 'El Timbó II'),
(24, 'Emilio Tomás'),
(25, 'Eva Perón'),
(26, 'Evita'),
(27, 'Facundo Quiroga'),
(28, 'Federación'),
(29, 'Fleming'),
(30, 'Fontana'),
(31, 'General San Martín'),
(32, 'Guadalupe'),
(33, 'Guayaibí'),
(34, 'Hipólito Yrigoyen'),
(35, 'Illia I'),
(36, 'Illía II'),
(37, 'Incone'),
(38, 'Independencia'),
(39, 'Itatí I'),
(40, 'Itatí II'),
(41, 'Juan Domingo Perón'),
(42, 'Juan Manuel de Rosas'),
(43, 'La Estrella'),
(44, 'La Floresta'),
(45, 'La Paz'),
(46, 'La Solidaridad'),
(47, 'Las Delicias'),
(48, 'Libertad'),
(49, 'Liborsi'),
(50, 'Lote 4'),
(51, 'Lujan'),
(52, 'Malvinas'),
(53, 'Mariano Moreno'),
(54, 'Militar'),
(55, 'Nanqom'),
(56, 'Nueva Formosa'),
(57, 'Nueva Pompeya'),
(58, 'Obrero'),
(59, 'Parque Urbano I'),
(60, 'Parque Urbano II'),
(61, 'República Argentina'),
(62, 'Ricardo Balbín'),
(63, 'Sagrado Corazón'),
(64, 'San Agustín'),
(65, 'San Andrés'),
(66, 'San Francisco'),
(67, 'San Isidro Labrador'),
(68, 'San José Obrero'),
(69, 'San Juan'),
(70, 'San Juan Bautista'),
(71, 'San Martín Norte'),
(72, 'San Martín Sur'),
(73, 'San Miguel'),
(74, 'San Pedro'),
(75, 'San Pío X'),
(76, 'Santa Isabel'),
(77, 'Santa Rosa'),
(78, 'Sarmiento'),
(79, 'Simón Bolívar'),
(80, 'Urunday'),
(81, 'Venezuela'),
(82, 'Vial'),
(83, 'Villa del Rosario'),
(84, 'Villa Hermosa'),
(85, 'Villa Jardín'),
(86, 'Villa Lourdes'),
(87, 'Virgen de Lujan'),
(88, 'Virgen del Carmen'),
(89, 'Virgen Nuestra Señora del Pilar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centroreciclaje`
--

CREATE TABLE `centroreciclaje` (
  `IdCentroReciclaje` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `typeRecycler` int(11) NOT NULL,
  `latCoords` float NOT NULL,
  `lngCoords` float NOT NULL,
  `timeCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `centroreciclaje`
--

INSERT INTO `centroreciclaje` (`IdCentroReciclaje`, `idUser`, `typeRecycler`, `latCoords`, `lngCoords`, `timeCreate`) VALUES
(1, 8, 1, -26.1458, -58.1506, '2019-12-09 05:30:53'),
(2, 9, 2, -26.0809, -58.2749, '2019-12-10 12:57:21'),
(3, 10, 4, -26.081, -58.275, '2019-12-10 18:38:58'),
(4, 11, 3, -26.0823, -58.2771, '2019-12-10 19:17:32'),
(5, 12, 3, -26.0808, -58.2744, '2019-12-10 19:38:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentario` int(11) NOT NULL,
  `idPublicacion` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `contenidoComentario` longtext NOT NULL,
  `fechaComentario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedores`
--

CREATE TABLE `contenedores` (
  `idCont` int(11) NOT NULL,
  `barrioCont` int(11) NOT NULL,
  `direccionCont` varchar(244) NOT NULL,
  `latCont` float NOT NULL,
  `lngCont` float NOT NULL,
  `tipoCont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenedores`
--

INSERT INTO `contenedores` (`idCont`, `barrioCont`, `direccionCont`, `latCont`, `lngCont`, `tipoCont`) VALUES
(1, 41, 'Beata Nazaria Ignacia March', -26.1315, -58.1736, 1),
(15, 25, 'cerca de casa', -26.1432, -58.1572, 3),
(17, 3, 'AV. Gendarmeria Nacional - Emilio Senes', -26.1582, -58.1867, 2),
(18, 10, 'Ayacucho - Av. Nicolas Avellaneda', -26.2038, -58.2099, 3),
(25, 5, 'Yrigoyen - Fontana', -26.1882, -58.1719, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `idDia` int(11) NOT NULL,
  `dia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`idDia`, `dia`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sádado'),
(7, 'Domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `idHorario` int(11) NOT NULL,
  `horario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`idHorario`, `horario`) VALUES
(1, '4:00am'),
(2, '5:00am'),
(3, '6:00am'),
(4, '7:00am'),
(5, '8:00am'),
(6, '9:00am'),
(7, '10:00am'),
(8, '7:00pm'),
(9, '8:00pm'),
(10, '9:00pm'),
(11, '10:00pm'),
(12, '11:00pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `idlike` int(11) NOT NULL,
  `idPublicacion` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idmensaje` int(11) NOT NULL,
  `usuarios_idusuario` int(11) NOT NULL,
  `usuarioMando` int(11) NOT NULL,
  `contenido` longtext NOT NULL,
  `fechaMensaje` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticia` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `tituloNoti` varchar(244) NOT NULL,
  `imagen` longtext NOT NULL,
  `descripcion` text NOT NULL,
  `link` longtext NOT NULL,
  `dateNoti` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `idUsuario`, `tituloNoti`, `imagen`, `descripcion`, `link`, `dateNoti`) VALUES
(1, 9, 'Nueve de cada diez argentinos consideran que reciclar debe ser obligatorio', 'img/imagenesNoticias/0037198943.jpg', 'Así lo determina una nueva investigación sobre la temática. El 95% de los encuestados coincide en que en la escuela ...', 'https://www.ambito.com/informacion-general/reciclaje/nueve-cada-diez-argentinos-consideran-que-reciclar-debe-ser-obligatorio-n5069132', '2019-12-10 14:36:37'),
(2, 9, '\'Navegando\', el proyecto con el que se fomenta el reciclaje en un colegio de Galicia', 'img/imagenesNoticias/cole-t.jpg', 'Una bonita iniciativa del Colegio Público Rural Jorge Juan de Xuvia para que los niños tomen conciencia de la importancia ...', 'https://www.hola.com/estar-bien/20191210155129/reciclaje-plastico-proyecto-colegio-galicia-gt/', '2019-12-10 14:34:57'),
(3, 9, '¿Qué países son líderes mundiales en reciclaje?¿En qué lugar está España?', 'img/imagenesNoticias/Reciclaje-botella-contenedor-iStock.jpg', 'Con el paso de los años nos hemos ido concienciando de la importancia del reciclaje para la preservación...', 'https://ecodiario.eleconomista.es/viralplus/noticias/10244266/12/19/que-paises-son-lideres-mundiales-en-reciclajeen-que-lugar-esta-espana.html', '2019-12-10 14:40:34'),
(4, 9, 'Música de reciclaje en el Teatro Real junto a Luz Casal y Sara Baras', 'img/imagenesNoticias/img_npalou_20191209-125016_imagenes_lv_otras_fuentes_foto_cateura-kB6G-U472131756765XLC-992x558@LaVanguardia-Web.jpg', 'Un año más, la Orquesta de Instrumentos Reciclados de Cateura se subirá a las tablas del Teatro Real de Madrid en su ya tradicional concierto navideño solidarioLos integrantes de la formación paraguaya son jóvenes de entre 11 y 25 años en riesgo de exclusión provenientes de Cateura, el vertedero más grande de la ciudad de Asunción,', 'https://www.lavanguardia.com/natural/20191209/472131756765/musica-reciclaje-orquestra-instrumentos-reciclados-cateura-concierto-madrid-ecoembes.html', '2019-12-10 14:48:15'),
(5, 9, 'Bares italianos utilizam macarrões como canudos para reduzir o uso de plástico', 'img/imagenesNoticias/stroodles2.jpg', '¡Y aquí va otra opción para reemplazar pajillas de plástico completamente innovadoras! Los bares en Italia decidieron usar la opción de paja no menos que el ingrediente más famoso cuando recordamos Italia: ¡la pasta!', 'https://www.revistacarpediem.com/bares-italianos-utilizam-macarroes-como-canudos-para-reduzir-o-uso-de-plastico/?fbclid=IwAR1s3W31zby8hMg94Fkbis7eMb-WhIcXartPHp8VT_R-0QmrHV4huD87vus', '2019-12-10 15:04:23'),
(6, 9, 'La máquina hace jugo y vasos hechos con cáscaras de naranja', 'img/imagenesNoticias/maquina-de-laranja-gigante.webp', 'Desde el jugo hasta la piel de naranja, no se desperdicia nada en la máquina de jugo diseñada por la oficina de diseño e innovación Carlo Ratti Associati en asociación con ENI. El dispositivo es un buen ejemplo de economía circular y cero desperdicio que los clientes pueden monitorear de cerca.', 'https://ciclovivo.com.br/inovacao/negocios/suco-copos-cascas-laranja/?fbclid=IwAR0krsUVK00SI2EGYXaWOwJ5gDa36DxGbxmJJ638XwJa9Tfct6GjijDEL0E', '2019-12-10 15:10:02'),
(7, 9, 'Se inauguró en Argentina la primera casa construida con ladrillos de plástico reciclado', 'img/imagenesNoticias/casa-de-ladrillos-PET-1920-1-1024x575.webp', 'Ocurrió en Junín de Mendoza, y es la primera de varias viviendas ecológicas que se construirán en dicha ciudad', 'https://www.infobae.com/sociedad/2017/03/13/se-inauguro-en-argentina-la-primera-casa-construida-con-ladrillos-de-plastico-reciclado/?fbclid=IwAR2oilGBCIqasQNa943HOTJApXBDL1hVMLbGr-X46Habo2jtiZRVVPnB8Co', '2019-12-10 15:11:59'),
(8, 9, 'Mantarrayas y tiburones ballena comen 63 piezas de plástico por hora en Indonesia, según un estudio', 'img/imagenesNoticias/manta6ball.jpg', 'Cada año, se arrojan al océano unos 5,25 billones de piezas nuevas de desechos plásticos, que incluyen 564 mil millones de botellas de agua y más de 500 mil millones de bolsas de plástico.', 'http://www.upsocl.com/verde/mantarrayas-y-tiburones-ballena-comen-63-piezas-de-plastico-por-hora-en-indonesia-segun-un-estudio/?fbclid=IwAR3_rzzKzlxlylXGV2zSat0kZoK7YnsQ6mPyuVqblG5lqNuC7vAUWS1Vw08', '2019-12-10 15:14:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idnotificacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `usuarioAccion` int(11) NOT NULL,
  `tipoNotificaion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `myLat` float NOT NULL,
  `myLng` float NOT NULL,
  `fotoPerfil` varchar(255) NOT NULL,
  `nombreCompleto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `idUsuario`, `myLat`, `myLng`, `fotoPerfil`, `nombreCompleto`) VALUES
(1, 2, 0, 0, 'img/imagenesPerfil/vector10.png', 'Sanchez Fredy Adrian'),
(3, 3, 0, 0, 'img/imagenesPerfil/dec3861d3a9a3cd56563f4c1d1975bbf - copia.png', 'Fredy Adrian Sanchez'),
(4, 4, 0, 0, 'img/imagenesPerfil/ferrari-logo-wallpaper-7856.jpg', 'Horacio Hernan Sanchez'),
(5, 5, 0, 0, 'img/imagenesPerfil/Boca_escudo.png', 'Javier Alejandro Sanchez'),
(6, 6, 0, 0, 'img/imagenesPerfil/12.jpg', 'Adrian'),
(7, 7, 0, 0, 'img/imagenesPerfil/sidebar_usuario-corporativo.png', 'Usuario'),
(8, 8, -26.1458, -58.1508, 'img/imagenesPerfil/excelentes seres humanos.jpg', 'Soy Un Coso de Prueba'),
(9, 9, -26.1795, -58.1859, 'img/imagenesPerfil/aprender-a-reciclar-1024x620.jpg', 'Reciclador Amigo'),
(10, 10, -26.0804, -58.2719, 'img/imagenesPerfil/casa-de-ladrillos-PET-1920-1-1024x575.webp', 'Fulana De tal'),
(11, 11, -26.0815, -58.2757, 'img/imagenesPerfil/maquina-de-laranja-gigante.webp', 'Hola Mundo'),
(12, 12, -26.0809, -58.2744, 'img/imagenesPerfil/stroodles2.jpg', 'Sanchez Fredy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idPerfil` int(11) NOT NULL,
  `nombrePrivilegio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`idPerfil`, `nombrePrivilegio`) VALUES
(1, 'Administrador'),
(2, 'Regular'),
(3, 'Reciclador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idpublicacion` int(11) NOT NULL,
  `idUserPublico` int(11) NOT NULL,
  `contenidoPublicacion` longtext NOT NULL,
  `fotoPublicacion` varchar(444) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idpublicacion`, `idUserPublico`, `contenidoPublicacion`, `fotoPublicacion`, `num_likes`, `fechaPublicacion`) VALUES
(2, 2, 'Me sobran botellas. Alguien necesita?', 'img/imagenesPublicaciones/botellas plasticas.jpg', 0, '2019-12-10 19:44:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontenedor`
--

CREATE TABLE `tipocontenedor` (
  `idTipoCont` int(11) NOT NULL,
  `tipoCont` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipocontenedor`
--

INSERT INTO `tipocontenedor` (`idTipoCont`, `tipoCont`) VALUES
(1, 'Papel/Cartón'),
(2, 'Orgánico'),
(3, 'Inorgánicos'),
(4, 'Peligrosos'),
(5, 'PET');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporeciclador`
--

CREATE TABLE `tiporeciclador` (
  `idTipoReciclador` int(11) NOT NULL,
  `tipoResiclador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiporeciclador`
--

INSERT INTO `tiporeciclador` (`idTipoReciclador`, `tipoResiclador`) VALUES
(1, 'Papel/Cartón'),
(2, 'Plásticos'),
(3, 'Metales'),
(4, 'Vidrio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporesiduos`
--

CREATE TABLE `tiporesiduos` (
  `IdTipoResiduos` int(11) NOT NULL,
  `nombreTipoR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiporesiduos`
--

INSERT INTO `tiporesiduos` (`IdTipoResiduos`, `nombreTipoR`) VALUES
(1, 'Papel/Cartón'),
(2, 'Plásticos'),
(3, 'Metales'),
(4, 'Vidrio'),
(5, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposnotificaciones`
--

CREATE TABLE `tiposnotificaciones` (
  `idtiposNotificaciones` int(11) NOT NULL,
  `nombreTipo` varchar(60) NOT NULL,
  `mensajeNotificacion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposnotificaciones`
--

INSERT INTO `tiposnotificaciones` (`idtiposNotificaciones`, `nombreTipo`, `mensajeNotificacion`) VALUES
(1, 'Like', 'le ha dado me gusta a tu publicación.'),
(2, 'Comentario', 'ha comentado tu publicación.'),
(3, 'Mensaje', 'te ha enviado un mensaje.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `idPrivilegio` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idPrivilegio`, `correo`, `usuario`, `contrasena`, `fecha_registro`) VALUES
(2, 1, 'adrian@sanchez.com', 'adrian@sanchez.com', '$2y$10$Qs9wzoqwTgdvh77cSC5JpOSNly0SAjObfuChFUlzGyQZVQBbSqT42', '2019-12-08 15:15:57'),
(3, 1, 'fredy@sanchez.com', 'fredy@sanchez.com', '$2y$10$eKoze5SUE5flFr0EP7Wf/.GWblVK0CE9B9U3x/r2djszQBxwimKPe', '2019-12-09 05:12:38'),
(4, 2, 'hernan@sanchez.com', 'Hernan', '$2y$10$yVbIbiUZL0lhcPbSMsDGdO9IJA3eTJ4soBeWSOZNeM7JlHG5sGQrS', '2019-12-08 15:15:57'),
(5, 2, 'ale@sanchez.com', 'Ale', '$2y$10$i6p6HikNcUnS9/ULe4Knw.Aov4ZvKQNvLLSIYwZvmjmynPmE92qcS', '2019-12-08 15:15:57'),
(6, 2, 'coso@coso.com', 'coso', '$2y$10$qnvqiPVwNWnG5R5IcBUGX.wL5dm4TvZrm1r/NFtwNZcHb7A57t.P6', '2019-12-08 15:15:57'),
(7, 2, 'usuario1@yahoo.com', 'Usuario', '$2y$10$tBfYFl2.HdAbcpRFwk4PieL33ic60RSXmOmQchHIwoaonki71unWq', '2019-12-08 15:15:57'),
(8, 3, 'prueba@prueba.com', 'prueba', '$2y$10$KaGkwfP9sSSXpWFEYvguZOP9VMS.jjfwS3p.TzsKG/bdIVC6yg5z2', '2019-12-09 05:30:53'),
(9, 3, 'reciclador@coso.com', 'Reciclador', '$2y$10$vEazLZwDpBUEcX9Od5QfteRIg.RHgWudW8U0t3ZxCFA7dfgLpsXnO', '2019-12-10 12:57:21'),
(10, 3, 'fulan@gmail.com', 'fulana', '$2y$10$VPz4lNsidD8plrFxM7QVC.EphJ7uOjexu5D3yyKDW.COUJ0awtD7m', '2019-12-10 18:38:58'),
(11, 3, 'hola@gmail.com', 'hola', '$2y$10$EBlTKTG07WJvidaw9m8/ZeIJtOoegRW31o6NCPgjAq0AGDRCG7kcW', '2019-12-10 19:17:32'),
(12, 3, 'fredy@gmail.com', 'Fredy', '$2y$10$L0QDW7kiS7qAE.hV4n/cQeyC4D16ETNPEfQrE3kDVRfbMTUIrBSua', '2019-12-10 19:38:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`idBarrio`);

--
-- Indices de la tabla `centroreciclaje`
--
ALTER TABLE `centroreciclaje`
  ADD PRIMARY KEY (`IdCentroReciclaje`),
  ADD KEY `IdUser` (`idUser`),
  ADD KEY `typeRecycler` (`typeRecycler`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `comentarioPublicacion_idx` (`idPublicacion`),
  ADD KEY `userComent` (`iduser`);

--
-- Indices de la tabla `contenedores`
--
ALTER TABLE `contenedores`
  ADD PRIMARY KEY (`idCont`),
  ADD KEY `contTipo` (`tipoCont`),
  ADD KEY `barrioContenedor` (`barrioCont`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`idDia`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`idlike`),
  ADD KEY `publiLikes_idx` (`idPublicacion`),
  ADD KEY `userLike` (`IdUser`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idmensaje`),
  ADD KEY `fk_mensajes_usuarios1_idx` (`usuarios_idusuario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idnotificacion`),
  ADD KEY `usuarioNotificacion_idx` (`idUsuario`),
  ADD KEY `fk_notificaciones_tiposNotificaciones1_idx` (`tipoNotificaion`),
  ADD KEY `usuarioAccion` (`usuarioAccion`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`),
  ADD KEY `perfilUser_idx` (`idUsuario`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idpublicacion`),
  ADD KEY `publicacioesUser_idx` (`idUserPublico`);

--
-- Indices de la tabla `tipocontenedor`
--
ALTER TABLE `tipocontenedor`
  ADD PRIMARY KEY (`idTipoCont`);

--
-- Indices de la tabla `tiporeciclador`
--
ALTER TABLE `tiporeciclador`
  ADD PRIMARY KEY (`idTipoReciclador`);

--
-- Indices de la tabla `tiporesiduos`
--
ALTER TABLE `tiporesiduos`
  ADD PRIMARY KEY (`IdTipoResiduos`);

--
-- Indices de la tabla `tiposnotificaciones`
--
ALTER TABLE `tiposnotificaciones`
  ADD PRIMARY KEY (`idtiposNotificaciones`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `priviUser_idx` (`idPrivilegio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `idBarrio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT de la tabla `centroreciclaje`
--
ALTER TABLE `centroreciclaje`
  MODIFY `IdCentroReciclaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `contenedores`
--
ALTER TABLE `contenedores`
  MODIFY `idCont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `idDia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `idlike` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idmensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idnotificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idpublicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipocontenedor`
--
ALTER TABLE `tipocontenedor`
  MODIFY `idTipoCont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tiporeciclador`
--
ALTER TABLE `tiporeciclador`
  MODIFY `idTipoReciclador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tiporesiduos`
--
ALTER TABLE `tiporesiduos`
  MODIFY `IdTipoResiduos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tiposnotificaciones`
--
ALTER TABLE `tiposnotificaciones`
  MODIFY `idtiposNotificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `centroreciclaje`
--
ALTER TABLE `centroreciclaje`
  ADD CONSTRAINT `IdUser` FOREIGN KEY (`idUser`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `typeRecycler` FOREIGN KEY (`typeRecycler`) REFERENCES `tiporeciclador` (`idTipoReciclador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarioPublicacion` FOREIGN KEY (`idPublicacion`) REFERENCES `publicaciones` (`idpublicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userComent` FOREIGN KEY (`iduser`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `contenedores`
--
ALTER TABLE `contenedores`
  ADD CONSTRAINT `barrioContenedor` FOREIGN KEY (`barrioCont`) REFERENCES `barrios` (`idBarrio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contTipo` FOREIGN KEY (`tipoCont`) REFERENCES `tiporesiduos` (`IdTipoResiduos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `publiLikes` FOREIGN KEY (`idPublicacion`) REFERENCES `publicaciones` (`idpublicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userLike` FOREIGN KEY (`IdUser`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `fk_mensajes_usuarios1` FOREIGN KEY (`usuarios_idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_notificaciones_tiposNotificaciones1` FOREIGN KEY (`tipoNotificaion`) REFERENCES `tiposnotificaciones` (`idtiposNotificaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarioAccion` FOREIGN KEY (`usuarioAccion`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarioNotificacion` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfilUser` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `publicacioesUser` FOREIGN KEY (`idUserPublico`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `priviUser` FOREIGN KEY (`idPrivilegio`) REFERENCES `privilegios` (`idPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
