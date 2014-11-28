-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2014 at 11:09 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estudiantes_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `Codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `Correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`Codigo`, `Nombre`, `Apellido`, `Correo`) VALUES
('12112009', 'Andrea', 'Castañeda', 'andrecastan@hotmail.com'),
('12112022', 'Jenniffer', 'González', 'rosanegra2323@gmail.com'),
('12112004', 'Mario David', 'Otalvaro', 'mariootalvaro@gmail.com'),
('12112034', 'Alejandra', 'Soto', 'malala1016@hotmail.com'),
('11212010', 'Viviana ', 'Benavides', 'viviana.ben.par@gmail.com'),
('11219034', 'Juan ', 'Perez', 'juan.p@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
`IDNota` int(255) NOT NULL,
  `Nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `Porcentaje` int(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `notas`
--

INSERT INTO `notas` (`IDNota`, `Nombre`, `Porcentaje`) VALUES
(2, 'Taller1', 30),
(3, 'Taller2', 30),
(4, 'Taller3', 40);

-- --------------------------------------------------------

--
-- Table structure for table `notas_estudiantes`
--

CREATE TABLE IF NOT EXISTS `notas_estudiantes` (
  `Codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `IDNota` int(255) NOT NULL,
  `Valor_Nota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `notas_estudiantes`
--

INSERT INTO `notas_estudiantes` (`Codigo`, `IDNota`, `Valor_Nota`) VALUES
('12112009', 2, 5),
('12112022', 2, 5),
('12112004', 2, 4),
('12112022', 3, 4),
('12112009', 4, 5),
('12112022', 4, 3),
('12112004', 4, 1),
('12112009', 3, 5),
('12112004', 3, 3),
('11212010', 3, 5),
('11219034', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `Codigo` text NOT NULL,
  `FechaIn` date NOT NULL,
  `FechaFn` date NOT NULL,
  `Prioridad` text NOT NULL,
  `Tarea` text NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tareas`
--

INSERT INTO `tareas` (`Codigo`, `FechaIn`, `FechaFn`, `Prioridad`, `Tarea`, `Descripcion`) VALUES
('12112009', '2014-09-12', '2014-09-13', 'Alta', 'Videojuegos', 'Terminar la idea del proyecto'),
('12112022', '2014-09-11', '2014-09-18', 'Baja', 'Algo', 'Toca hacer algo'),
('11212010', '2014-09-15', '2014-09-18', 'Media', 'Algo mas', 'Hacer algo mas porque mas es mejor'),
('11219034', '2014-09-19', '2014-09-26', 'Alta', 'Go away', 'just go away for a week');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notas`
--
ALTER TABLE `notas`
 ADD PRIMARY KEY (`IDNota`), ADD UNIQUE KEY `IDNota` (`IDNota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notas`
--
ALTER TABLE `notas`
MODIFY `IDNota` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
