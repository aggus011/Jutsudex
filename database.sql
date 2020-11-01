-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2020 a las 00:00:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jutsus-maldonado-agustina`
--
CREATE DATABASE IF NOT EXISTS `jutsus-maldonado-agustina` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jutsus-maldonado-agustina`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jutsu`
--

CREATE TABLE `jutsu` (
  `nro` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `usuario` text DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jutsu`
--

INSERT INTO `jutsu` (`nro`, `nombre`, `descripcion`, `usuario`, `img_url`, `tipo`) VALUES
(1, 'Rasengan', 'El rasengan es una poderosa técnica, creada por Minato Namikaze, que se basa principalmente en la Manipulación de la Forma la cual lleva \'hasta el punto más alto posible\', en donde el usuario emite un gran flujo de Chakra desde la palma de su mano para luego hacerlo girar en todas direcciones a una alta velocidad, haciendo que se comprima en forma de esfera, obteniendo un gran poder destructivo. Una vez que se libera el nivel más alto de Chakra comprimido, la increíble rotación y poder de destrucción se sincronizan y aceleran mutuamente. Al impactar en el objetivo se crea una onda de choque, que avanza y barre todo en su camino volcando la tierra en el proceso. A menos que colisione con algo en su camino, no hay paro de su poder.', 'Uzumaki Naruto, Namikaze Minato, Jiraiya, Konohamaru, Uzumaki Boruto', 'Imagenes/Rasengan.jpg', 'ninjutsu'),
(2, 'Chidori', 'El chidori es una técnica, creada por Kakashi Hatake, que consiste en la acumulación de una gran cantidad de Chakra en la mano del usuario para después convertirla en electricidad, la cantidad de Chakra es tan grande que se hace visible. La alta concentración de energía eléctrica produce un sonido que recuerda a los cantos de pájaros, de ahí su nombre. Una vez hecho esto, la persona se dirige a su blanco con una gran velocidad para poder atacar y dañar a su objetivo. Debido a que esta técnica usa el Raiton para mejorar el ataque y el poder de penetración, causa que su simple contacto ocasione un daño que suele ser mortal, por esta razón es clasificada como una técnica de asesinato inmediato.', 'Kakashi Hatake, Sasuke Uchiha, Sarada Uchiha', 'Imagenes/Chidori.jpg', 'ninjutsu'),
(3, 'Armadura de arena', 'La Armadura de Arena es una técnica en donde Gaara utiliza su arena para que cubra todo su cuerpo y de esta forma crear una segunda protección contra los ataques físicos o cuando sus oponentes logran pasar su Escudo de Arena, generalmente no se nota a simple vista pero si Gaara es lastimado al instante se nota la arena a su alrededor. A pesar de ser una buena ventaja, el mantenimiento de la técnica requiere una gran cantidad de chakra y resistencia, y al estar pegada en el cuerpo del usuario causa que su velocidad y agilidad disminuya. La principal función de la armadura es reducir el impacto del ataque enemigo ya que en sí, la arena no es tan dura.', 'Gaara', 'Imagenes/Arena.jpg', 'ninjutsu'),
(4, 'Tsukuyomi', 'Eñ Tsukuyomi es un genjutsu de gran nivel que es otorgado por el Mangekyo Sharingan de Itachi Uchiha. Representa el \'Mundo Espiritual y la Oscuridad\'. Su utilizacion requiere de contacto visual para llevarlo a cabo, atrapando así al objetivo en una ilusión completamente bajo el control del usuario, donde puede controlar totalmente el tiempo, el espacio y hasta la materia. La destreza de Itachi con la técnica es tal, que puede alterar la percepción del tiempo dentro de la ilusión, haciendo creer que varios segundos parecieran varios días, esto con finalidad de tortura. Dentro del jutsu, los atrapados sufrirán los tormentos de un infierno indescriptible de dolor y tortura, y alguna otra vez, se les mostrará repetidamente una horrenda e infernal imagen de agonía y caos, sin idea de cuándo terminará cualquiera de ellos. Como resultado, el atrapado dentro de la ilusión, sólo puede esperar hasta el colapso de su psique.', 'Itachi Uchiha', 'Imagenes/Tsukuyomi.jpg', 'genjutsu'),
(5, 'Ilusion demoniaca', 'Es un poderoso Genjutsu que bloquea todos los sentidos dejando inmóvil y vulnerable al oponente. Este se realiza mediante la armonía de los cantos que realizan los dos grandes sapos y en el momento en que esta técnica alcanza al sentido auditivo del enemigo, este queda atrapado dentro del jutsu. Dentro del mundo genjutsu, los objetivos son rodeados por todos lados por cuatro sapos samurais, con su mente y cuerpo completamente sellados entre sus manos en una barrera. Este genjutsu es tan potente que permite incluso atrapar a cientos de objetivos a la vez si es necesario', 'Fukasaku (con Shima), Shima (con Fukasaku)', 'Imagenes/Demoniaca.jpg', 'genjutsu'),
(6, 'Remolino de la hoja', 'El remolino de la hoja es un taijutsu que consiste en una serie de patadas altas y bajas. El usuario al realizar este jutsu, primero ataca con una patada baja para dañar la parte inferior de su oponente, debido a que éste intentará esquivarlo, el ninja realiza una patada alta de tal forma que dañe al enemigo, o sea, que es una precaución por si el primer ataque no funciona. A pesar de esto, las posibilidades de que falle son muy pocas a causa de que la única forma de poder bloquear la técnica o detenerla es tener la misma velocidad que el usuario.', 'Rock Lee, Might Guy, Metal Lee', 'Imagenes/Remolino.jpg', 'taijutsu'),
(7, 'Liberacion de las ocho puertas', 'La liberacion de las ocho puertas es un taijutsu de Konohagakure que permite la apertura de hasta siete de las Ocho Puertas, para aumentar drásticamente las habilidades físicas de su usuario y ganar un poder abrumador muchas veces mayor al suyo.', 'Rock Lee, Kakashi Hatake, Metal Lee, Might Duy, Might Guy', 'Imagenes/Puertas.jpg', 'taijutsu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_jutsu`
--

CREATE TABLE `tipo_jutsu` (
  `tipo` varchar(50) NOT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_jutsu`
--

INSERT INTO `tipo_jutsu` (`tipo`, `img`) VALUES
('genjutsu', 'Imagenes/Genjutsu.jpg'),
('ninjutsu', 'Imagenes/Ninjutsu.jpg'),
('taijutsu', 'Imagenes/Taijutsu.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(50) NOT NULL,
  `contrasenia` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `contrasenia`) VALUES
('agus', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jutsu`
--
ALTER TABLE `jutsu`
  ADD PRIMARY KEY (`nro`),
  ADD KEY `jutsu` (`tipo`);

--
-- Indices de la tabla `tipo_jutsu`
--
ALTER TABLE `tipo_jutsu`
  ADD PRIMARY KEY (`tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jutsu`
--
ALTER TABLE `jutsu`
  ADD CONSTRAINT `jutsu` FOREIGN KEY (`tipo`) REFERENCES `tipo_jutsu` (`tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
