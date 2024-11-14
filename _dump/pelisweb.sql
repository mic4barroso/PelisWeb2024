-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2024 a las 04:18:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pelisweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `contenido` text NOT NULL,
  `fecha` date NOT NULL,
  `id_resena` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `calificacion_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `clasificacion` varchar(10) NOT NULL,
  `fecha_estreno` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `idioma_original` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `guion` varchar(100) NOT NULL,
  `fotografia` varchar(100) NOT NULL,
  `reparto` varchar(200) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`id`, `nombre`, `genero`, `tags`, `tipo`, `clasificacion`, `fecha_estreno`, `duracion`, `idioma_original`, `direccion`, `guion`, `fotografia`, `reparto`, `calificacion`) VALUES
(1, 'The Batman', 'Accion', 'superheroes', 'Pelicula', 'PG-13', '2022-03-04', 176, 'Ingles', 'Matt Reeves', 'Matt Reeves, Peter Craig', 'Greig Fraser', 'Robert Pattinson, Zoe Kravitz, Paul Dano, Jeffrey Wright', 4),
(2, 'Avengers', 'Accion', 'Marvel', 'Pelicula', 'PG-13', '2012-05-02', 143, 'Ingles', 'Joss Whedon', 'Joss Whedon', 'Seamus McGarvey', 'Robert Downey Jr., Chris Evans, Chris Hemsworth, Scarlett Johansson\r\n', 4),
(3, 'Friends', 'Comedia', 'Sitcom', 'Serie', 'TV-14', '1994-09-22', 22, 'Ingles', 'Gary Halvorson, Kevin Bright, Michael Lembeck', 'Marta Kauffman, David Crane', 'Nick McLean\r\n\r\n', 'Jennifer Aniston, Courteney Cox Arquette, Matthew Perry, David Schwimmer', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id_listas` int(11) NOT NULL,
  `nombre_listas` varchar(20) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `id_favoritos` int(11) NOT NULL,
  `id_resena` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_listas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`) VALUES
(1, 'modificar perfil'),
(2, 'eliminar perfil'),
(3, 'eliminar etiquetas'),
(4, 'editar etiqueta'),
(5, 'agregar etiqueta'),
(6, 'eliminar genero'),
(7, 'modificar genero'),
(8, 'agregar genero'),
(9, 'agregar films'),
(10, 'modificar films'),
(11, 'eliminar films'),
(12, 'agregar personal tecnico'),
(13, 'modificar personal tecnico'),
(14, 'eliminar personal tecnico'),
(15, 'buscar personal tecnico'),
(16, 'crear lista de peliculas'),
(17, 'agregar a favoritos'),
(18, 'agregar resena'),
(19, 'editar resena'),
(20, 'eliminar resena'),
(21, 'calificar'),
(22, 'ver comentarios'),
(23, 'eliminar comentario'),
(24, 'modificar comentario'),
(25, 'agregar comentario'),
(26, 'compartir film por facebook');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaltecnico`
--

CREATE TABLE `personaltecnico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `lugar_nacimiento` varchar(50) NOT NULL,
  `biografia` text NOT NULL,
  `films` varchar(200) NOT NULL,
  `id_tipopersonaltecnico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personaltecnico`
--

INSERT INTO `personaltecnico` (`id`, `nombre`, `fecha_nacimiento`, `edad`, `lugar_nacimiento`, `biografia`, `films`, `id_tipopersonaltecnico`) VALUES
(1, 'Jennifer Aniston', '1969-02-11', 55, 'Estados Unidos', 'Jennifer Aniston, es una actriz estadounidense, nacida en California, famosa por su papel de Rachel Green en la serie Friends. Su actuación en esta comedia la lanzó al estrellato y le valió premios como el Emmy y el Globo de Oro. Tras Friends, continuó protagonizando éxitos de cine y televisión, como Marley & Me y The Morning Show, consolidándose como una de las figuras más queridas de Hollywood.', 'Friends, The Morning Show', 1),
(2, 'Robert Downey Jr.', '1965-04-04', 59, 'Estados Unidos', 'Robert Downey Jr., nacido el 4 de abril de 1965 en Nueva York, es un actor estadounidense conocido por su talento y versatilidad. Tras destacar en películas en los años 80 y 90, su carrera se vio interrumpida por problemas personales, pero logró una exitosa recuperación. Su regreso al estrellato llegó con el papel de Tony Stark en Iron Man (2008), que lo convirtió en uno de los actores más emblemáticos del Universo Marvel. Hoy es reconocido como una figura clave en Hollywood, gracias a su carisma y talento.', 'Iron Man, Dolittle, Oppenheimer', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `spoiler` tinyint(1) NOT NULL,
  `megusta` int(11) NOT NULL,
  `nomegusta` int(11) NOT NULL,
  `id_films` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'usuario'),
(2, 'administrador'),
(3, 'editor de contenido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_permisos`
--

CREATE TABLE `roles_permisos` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles_permisos`
--

INSERT INTO `roles_permisos` (`id`, `id_rol`, `id_permisos`) VALUES
(1, 1, 16),
(2, 1, 17),
(3, 1, 18),
(4, 1, 19),
(5, 1, 20),
(6, 1, 21),
(7, 1, 23),
(8, 1, 24),
(9, 1, 25),
(10, 1, 1),
(11, 2, 1),
(12, 2, 2),
(13, 2, 3),
(14, 2, 4),
(15, 2, 5),
(16, 2, 6),
(17, 2, 7),
(18, 2, 8),
(19, 2, 9),
(20, 2, 10),
(21, 2, 11),
(22, 2, 12),
(23, 2, 13),
(24, 2, 14),
(25, 3, 3),
(26, 3, 4),
(27, 3, 5),
(28, 3, 6),
(29, 3, 7),
(30, 3, 8),
(31, 3, 9),
(32, 3, 10),
(33, 3, 11),
(34, 3, 12),
(35, 3, 13),
(36, 3, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuarios`
--

CREATE TABLE `roles_usuarios` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles_usuarios`
--

INSERT INTO `roles_usuarios` (`id`, `id_usuario`, `id_rol`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 3),
(4, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_personaltecnico`
--

CREATE TABLE `tipos_personaltecnico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_personaltecnico`
--

INSERT INTO `tipos_personaltecnico` (`id`, `nombre`) VALUES
(1, 'actor'),
(2, 'director'),
(3, 'guionista'),
(4, 'fotografo'),
(5, 'productor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `contrasena`) VALUES
(1, 'Ana Laura', 'Ruescas Viano', 'osruescas@gmail.com', 'Amind123'),
(2, 'Toro', 'Ruescas', 'toro@gmail.com', 'Editor123'),
(3, 'Ciro', 'Coria', 'ciroelkpo@gmail.com', 'Editor123'),
(4, 'Micaela', 'Barroso', 'macaela@gmail.com', 'Admin123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_resena` (`id_resena`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_films` (`id_films`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
  ADD PRIMARY KEY (`id_listas`),
  ADD KEY `id_films` (`id_films`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_favoritos` (`id_favoritos`),
  ADD KEY `id_resena` (`id_resena`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_listas` (`id_listas`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personaltecnico`
--
ALTER TABLE `personaltecnico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rolPersonalTecnico` (`id_tipopersonaltecnico`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_films` (`id_films`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles_permisos`
--
ALTER TABLE `roles_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_permisos` (`id_permisos`);

--
-- Indices de la tabla `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tipos_personaltecnico`
--
ALTER TABLE `tipos_personaltecnico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id_listas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `personaltecnico`
--
ALTER TABLE `personaltecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `resenas`
--
ALTER TABLE `resenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles_permisos`
--
ALTER TABLE `roles_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `roles_usuarios`
--
ALTER TABLE `roles_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_personaltecnico`
--
ALTER TABLE `tipos_personaltecnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personaltecnico`
--
ALTER TABLE `personaltecnico`
  ADD CONSTRAINT `personaltecnico_ibfk_1` FOREIGN KEY (`id_tipopersonaltecnico`) REFERENCES `tipos_personaltecnico` (`id`),
  ADD CONSTRAINT `personaltecnico_ibfk_2` FOREIGN KEY (`id_tipopersonaltecnico`) REFERENCES `films` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
