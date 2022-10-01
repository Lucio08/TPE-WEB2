-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 18:07:33
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muralismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `murales`
--

CREATE TABLE `murales` (
  `id_tipo` int(11) NOT NULL,
  `id_mural` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `ubicacion` varchar(45) NOT NULL,
  `lugar` varchar(45) NOT NULL,
  `año` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `murales`
--

INSERT INTO `murales` (`id_tipo`, `id_mural`, `nombre`, `descripcion`, `ubicacion`, `lugar`, `año`, `imagen`) VALUES
(1, 1, 'DIEGO MARADONA ETERNO', 'Homenaje al mejor futbolista de todos los tiempos y voz de las gargantas populares. Se trata del primer tributo público que Diego Armando Maradona recibe en la ciudad de Azul. En la realizacion de este mural conto con el apoyo de integrantes del espacio cultural Pedro Paisano Frías, quienes colaboraron con el artista local e hicieron su aporte a este inminente capitulo que se suma al patrimonio cultural local.  \r\n', 'Azul Prov. de Bs As.', 'Paredon de local de comerciantes propietarios', '2021', 'pintura1.jpeg'),
(1, 2, 'HÉROES DE MALVINAS', 'Mural realiazado en homenaje a los  héroes y caídos de Malvinas, a pedido de un ex combatiente ya que resulta muy significativo y necesario sembrar memoria para que no crezca el olvido y reivindicar la soberanía argentina sobre las islas y buscar justicia por los sueños que se hundieron allí.', 'Azul Prov. de Bs As.', 'Hogar de  ex combatiente en las islas Malvin', '2021', 'pintura2.jpg'),
(1, 3, 'LA VIDA NO SE RINDE', 'Mural realizado para el Encuentro Internacional de Muralismo \"El canto de la Selva\" en la ciudad de Santa Cruz de la Sierra en Bolivia, en homenaje a la Pachamama madre tierra en defensa a la naturaleza.\r\n', 'Santa Cruz de la Sierra, Bolivia.', 'Esquina de Cobija y Salvatierra.', '2019', 'pintura3bolivia.jpg'),
(2, 4, 'PASEO DE LA MEMORIA', 'Mural realizado en el marco del Taller de Muralismo del Profesorado en Artes y Visuales para homenajear a las madres y abuelas de Plaza de Mayo en su busqueda de Justicia y Verdad.', 'Berisso, Prov. de Bs As.', 'Acceso a la escuela de Berisso', '2019', 'mosaicosBerisso(2).jpg'),
(2, 5, '', 'Mural de mosaico llevado acabo en el Tercer Encuentro de Muralismo y Arte Publico \"En algun Lugar De La Mancha\" realizado de manera colectiva en homenaje al centenario del Parque Domingo Faustino Sarmiento en la ciudad de Azul.', 'Azul, Prov. de Bs As.', 'Parque Domingo Faustino Sarmiento', '2020', 'mosaicosAzul.JPG'),
(2, 6, 'UN NUEVO AMANECER\r\n', 'Refleja la busqueda incansable de Madres y Abuelas de Plaza de Mayo, que, tras la noche mas oscura de nuestro pais, luchan por un nuevo amanecer para nuestra historia desde la Memoria, la Verdad y la Justicia. Realizado en 2021 por Berenice Martinez en el taller de Muralismo del prof Martin Meza de la Escuela de Arte de Berisso.', 'Berisso, Prov. de Bs As.', 'Publico', '2021', '1berissomosaicos.jpg'),
(3, 7, 'HOMENAJE', 'Mural de esgrafiado hecho junto a Pablo Lopez y Julian Pons. Es un homenaje a un señor llamado Pablo que poseía un viñedo en Carhué. La tematica desarollada hace referencia al trabajo que tuvo que realizar la familia para poder llevar adelante un proyecto de esa magnitud en un espacio geografico que no está preparado para ello. Se pueden observar herramientas y manos que representan el trabajo.', 'Carhué, Argenitna.', 'Arte publico', '2021', 'esgrafiado1arhue.jpg'),
(3, 8, 'LAS BRASAS', 'El mural esta inspirado en un poema que corresponde a Roberto  Glorioso, poeta azuleño. Dicha obra fue realizada en 2016 el marco del Encuentro de Muralismo y Arte Público \"En Algún Lugar de la Mancha\", y restaurada en 2021 con la tecnica de esgrafiado y mosaico. Quienes estubieron acargo de esta obra fueron Martin Meza y Jeronimo De La Fuente.', 'Azul Prov. de Bs As.', 'Espacio Cultural Don Cipriano ', '2021', ''),
(3, 9, 'SIEMBRA ARTE COSECHA LIBERTAD', 'Este mural se encuentra en el Centro Universitario Azuleño (CUA) de La plata y fue hecho con el marco de un taller Intesivo de Mural Esgrafiado con el  fin de reinvidicar la educacion publica y la historia del CUA.', 'La Plata, Prov de Bs As', ' Centro universitario Azuleño (CUA)', '2019', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id_tipo` int(11) NOT NULL,
  `tecnica` varchar(45) NOT NULL,
  `materiales` varchar(300) NOT NULL,
  `descripcion de la tecnica` varchar(300) NOT NULL,
  `historia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `tecnica`, `materiales`, `descripcion de la tecnica`, `historia`) VALUES
(1, 'pintura', 'Materiales  indispensables para pintar un mural: Pinceles, pinturas, toallas de papel,una cubeta de agua para limpiar los pinceles, cuerda para medir o usar de guía y escalera de tijera.', 'La principal característica que define a la pintura mural, es sin duda, su caracter decorativo. De hecho la gente que recurre a los servicios de muralismo es porque quiere resolver una necesidad estética, o bien para dar un valor a un muro que estaba degradado. En ambos casos la finalidad siempre va', 'El comienzo de la pintura mural fue la iconografía de las pinturas rupestres, luego el arte mural surgió en las ciudades antiguas, en sus plazas, templos, viviendas y tumbas; ilustrando escenas de la vida cotidiana y del universo religioso.'),
(2, 'mosaicos', 'Los materiales con los que se pueden hacer murales en mosaicos son: Cemento, piedra reconstituída, mármoles, resinas sintéticas, madera, etc. La luz tiene un papel de especial significado, ya que permite detacar el relieve y vislumbrar las figuras modeladas, tambien piedra, cerámica, pasta vítrea, e', 'El mosaiquismo es un método decorativo basado en la unión de piezas con diferentes colores, texturas y formas. Estos objetos se llaman teselas y, si bien están disponibles en tiendas, también pueden fabricarse con elementos a punto de tirar o para reciclar.\r\nUna vez elegidas las teselas, van a unifi', 'Un poco de historia acerca del Mosaiquismo:\r\nEl mosaiquismo es una de las técnicas artísticas más antiguas de la humanidad. Se descubrieron objetos con estos acabados que datan de miles de años, construidos a base de piedras de río. Su popularidad creció durante la antigua Grecia y el Imperio romano.\r\n\r\n'),
(3, 'esgrafiado', 'Materiales que se utilizan en la realización de un esgrafiado. Para preparar el mortero de esgrafiado se utiliza cal como elemento conglomerante y arena o marmolina como árido para dar trabazón y una estructura sólida al conjunto.\r\n', 'Esta técnica se realiza con una argamasa de cal, arena y agua a la que añadimos el pigmento del color que queramos, siempre mineral, ya que si no es mineral se produce una reacción con la cal dejando la masa dura e inservible.\r\nEs una técnica decorativa que se realiza sobre un muro y tiene una prepa', 'El término esgrafiado proviene del italiano sgraffiare, \'hacer incisiones o rascar con una herramienta especial llamada grafio\'. ​​ El esgrafiado arquitectónico es una técnica muy antigua que utilizaron ya las civilizaciones del IV milenio a. C.. Los romanos usaron también esta decoración con dibujos sencillos.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `murales`
--
ALTER TABLE `murales`
  ADD PRIMARY KEY (`id_mural`),
  ADD KEY `fk_restriction_murales` (`id_tipo`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `murales`
--
ALTER TABLE `murales`
  MODIFY `id_mural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `murales`
--
ALTER TABLE `murales`
  ADD CONSTRAINT `fk_restriction_murales` FOREIGN KEY (`id_tipo`) REFERENCES `tipos` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
