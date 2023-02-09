-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 01:50:20
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
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `idasignatura` int(11) NOT NULL,
  `nombreAsignatura` varchar(45) NOT NULL,
  `descripcionAsignatura` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`idasignatura`, `nombreAsignatura`, `descripcionAsignatura`) VALUES
(1, 'Estructura de datos', 'Esta es la materia de estructura de datos y se ven muchas cosas'),
(2, 'Programación imperativa', 'Esta es la materia de programación imperativa'),
(5, 'APTO VII', 'Materia de apto VII'),
(6, 'Lenguajes Visuales', 'Materia donde se ve el uso de android studio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `idejercicio` int(11) NOT NULL,
  `tipoEjercicio` varchar(45) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `ejercicio` varchar(2000) NOT NULL,
  `respuesta` varchar(2000) DEFAULT NULL,
  `temas_idtema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`idejercicio`, `tipoEjercicio`, `descripcion`, `ejercicio`, `respuesta`, `temas_idtema`) VALUES
(1, 'Ejercicio', 'este es un ejercicio de tema 1', 'aqui un ejercicio bien chido', 'var a = 1;var b = 2;var c = a   b;', 7),
(19, 'Ejercicio', 'a', 'function peticionRegEjercicio()', 'dasd', 1),
(20, 'Ejemplo', 'ejemplo de un registro', '$conexion = new mysqli(\"localhost\",\"root\",\"\",\"proyectoFi', '$sql_tema = \"SELECT * FROM temas WHERE idtema =.$id.\";<br>$query_tema = mysqli_query($conexion, $sql_tema);', 1),
(26, 'Ejercicio', 'asdashdkjasdasd.d asdasd asdasdsadasdasdasdasd', 'asdas<br>dasdasdad<br>asdasdasda<br>sdasd{<br>adasdasadasd<br>a}dasd', 'adasd<br>1232131231231231231232131', 6),
(27, 'Ejercicio', 'este es un ejercicio para el tema 7 con nombre otro tema', 'asdsadasda<br>sdas<br>d123123<br>assdasd', 'dasdasd<br>32123<br>123213 <br>{adasdasd}', 7),
(28, 'Ejercicio', '1cghgch', '1234', '1234', 6),
(29, 'Ejercicio', 'un ejercicio para el tema 1de esto', 'el<br>ejer<br>cicio', 'la<br>res<br>puesta', 2),
(30, 'Ejercicio', 'instrucciones genericas', 'instrucciones genericas', 'instrucciones genericas', 6),
(33, 'Ejercicio', 'descripcion', 'ejer<br>cicio', 'respu<br>esta', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(500) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `tipoUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`idlogin`, `nombre`, `usuario`, `contraseña`, `codigo`, `tipoUsuario`) VALUES
(7, 'Gabriel', 'gabi', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '216434701', 'admin'),
(8, 'Fabiola', 'fabi', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '213265321', 'alumno'),
(9, 'Angel', 'angel', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '215465987', 'maestro'),
(10, 'Ángel A.', 'antecon', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '123456678', 'maestro'),
(12, 'Usuario Prueba', 'usuario1', 'f18f901189bacfede4e6db238b5ca15788140b7ade94ee66d846b002aba70e77656cf16f1b27d589b98986396eb026aa6ef9e7843adadfab1aa5c8469728ea4b', '21654587', 'alumno'),
(14, 'usuario2', 'usuario2', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '321654987', 'admin'),
(15, 'Prueba', 'prueba', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '1234657980', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `idtema` int(11) NOT NULL,
  `nombreTema` varchar(45) NOT NULL,
  `asignaturas_idasignatura` int(11) NOT NULL,
  `descripcionTema` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`idtema`, `nombreTema`, `asignaturas_idasignatura`, `descripcionTema`) VALUES
(1, 'Tema 1', 1, 'Este es el tema 1 de estructura de datos'),
(2, 'tema 1', 2, 'El tema uno de programación imperativa'),
(6, 'Que son', 1, 'Que son las estructuras de datos'),
(7, 'Otro tema', 1, 'la descripción de otro tema'),
(15, 'Vistas', 6, 'Se ve el uso de las vistas en android studio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`idasignatura`);

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`idejercicio`),
  ADD KEY `fk_ejercicios_temas1` (`temas_idtema`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`idtema`),
  ADD KEY `fk_temas_asignaturas` (`asignaturas_idasignatura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `idasignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `idejercicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `idtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD CONSTRAINT `fk_ejercicios_temas1` FOREIGN KEY (`temas_idtema`) REFERENCES `temas` (`idtema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `fk_temas_asignaturas` FOREIGN KEY (`asignaturas_idasignatura`) REFERENCES `asignaturas` (`idasignatura`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
