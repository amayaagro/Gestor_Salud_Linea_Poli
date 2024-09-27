-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2024 a las 04:23:47
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
-- Base de datos: `hms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@12345', '28-12-2016 11:42:05 AM'),
(2, 'Administrador', 'Admin1234', '24-09-2024 11:02:59 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `consultancyFees` int(11) DEFAULT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `userStatus` int(11) DEFAULT NULL,
  `doctorStatus` int(11) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`) VALUES
(8, 'Ginecólogo/Obstetra', 11, 8, 120000, '2024-09-24', '2:00 PM', '2024-09-25 18:11:35', 1, 1, NULL),
(9, 'Médico General', 13, 8, 110000, '2024-09-25', '1:15 PM', '2024-09-25 18:12:01', 1, 1, NULL),
(10, 'Fisiatra', 17, 9, 120000, '2024-09-26', '5:30 PM', '2024-09-25 18:16:47', 1, 1, NULL),
(11, 'Médico General', 13, 9, 110000, '2024-09-25', '12:30 PM', '2024-09-25 18:17:29', 1, 1, NULL),
(12, 'Médico General', 12, 15, 110000, '2024-09-30', '10:15 AM', '2024-09-25 18:19:06', 1, 1, NULL),
(13, 'Dermatólogo', 14, 15, 120000, '2024-09-25', '1:30 PM', '2024-09-25 18:19:32', 1, 1, NULL),
(14, 'Dermatólogo', 14, 17, 120000, '2024-09-26', '1:30 PM', '2024-09-25 18:20:14', 1, 1, NULL),
(15, 'Médico General', 12, 17, 110000, '2024-09-30', '1:30 PM', '2024-09-25 18:20:31', 1, 1, NULL),
(16, 'Médico Internista', 16, 18, 120000, '2024-09-23', '8:30 AM', '2024-09-25 18:21:32', 0, 1, '2024-09-25 23:18:54'),
(17, 'Homeópata', 15, 18, 120000, '2024-09-26', '9:15 PM', '2024-09-25 18:22:25', 1, 1, NULL),
(18, 'Neurólogo', 18, 19, 120000, '2024-09-28', '9:30 AM', '2024-09-25 18:23:27', 1, 1, NULL),
(19, 'Ginecólogo/Obstetra', 10, 19, 120000, '2024-09-25', '12:30 PM', '2024-09-25 18:24:21', 1, 1, NULL),
(20, 'Homeópata', 15, 20, 120000, '2024-09-30', '2:30 PM', '2024-09-25 18:25:17', 1, 1, NULL),
(21, 'Neurólogo', 18, 20, 120000, '2024-09-24', '5:00 PM', '2024-09-25 18:26:02', 1, 1, NULL),
(22, 'Fisiatra', 17, 21, 120000, '2024-09-26', '7:30 AM', '2024-09-25 18:26:53', 1, 1, NULL),
(23, 'Médico General', 12, 21, 110000, '2024-09-30', '10:30 AM', '2024-09-25 18:27:11', 1, 1, NULL),
(24, 'Ginecólogo/Obstetra', 11, 23, 120000, '2024-09-22', '6:30 PM', '2024-09-25 18:27:56', 1, 1, NULL),
(25, 'Médico General', 12, 23, 110000, '2024-09-24', '5:30 PM', '2024-09-25 18:28:11', 1, 1, NULL),
(26, 'Médico Internista', 16, 23, 120000, '2024-09-26', '1:30 PM', '2024-09-25 18:28:25', 1, 1, NULL),
(27, 'Neurólogo', 18, 24, 120000, '2024-09-25', '4:30 PM', '2024-09-25 18:29:10', 1, 1, NULL),
(28, 'Médico General', 13, 24, 110000, '2024-09-25', '1:30 PM', '2024-09-25 18:29:26', 1, 1, NULL),
(29, 'Médico General', 12, 18, 110000, '2024-09-25', '7:30 AM', '2024-09-25 23:18:35', 1, 1, NULL),
(30, 'Homeópata', 15, 18, 120000, '2024-09-30', '4:45 PM', '2024-09-25 23:32:13', 1, 1, NULL),
(31, 'Médico Internista', 16, 18, 120000, '2024-09-30', '3:45 PM', '2024-09-25 23:36:34', 1, 1, NULL),
(32, 'Fisiatra', 17, 15, 120000, '2024-09-26', '10:15 AM', '2024-09-26 00:05:14', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(10, 'Ginecólogo/Obstetra', 'Aquilino Villegas Sanchez', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 315697412, 'aquilino.villegas@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 16:54:53', '2024-09-25 20:38:25'),
(11, 'Ginecólogo/Obstetra', 'María Angel Angel', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogota - Colombia. Consultorio 302', '120000', 311256987, 'maria.angel@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 16:57:44', '2024-09-25 18:44:39'),
(12, 'Médico General', 'Esperanza Aránzazu Flórez', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '110000', 3147365789, 'esperanza.aranzazu@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:00:00', NULL),
(13, 'Médico General', 'Fernando Alvarez Vélez', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '110000', 3158884013, 'fernando.alvarez@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:01:59', '2024-09-25 20:55:49'),
(14, 'Dermatólogo', 'Fernando Rodriguez Alzate', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 316000258, 'fernando.rodriguez@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:03:17', NULL),
(15, 'Homeópata', 'Alexander Perez Ángel', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 315874269, 'alexander.perez@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:08:46', NULL),
(16, 'Médico Internista', 'Gonzalo Correa Cano', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 315368974, 'gonzalo.correa@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:18:57', '0000-00-00 00:00:00'),
(17, 'Fisiatra', 'Maria Esneida López López', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 3158963456, 'mariae.lopez@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:21:49', NULL),
(18, 'Neurólogo', 'Alberto Castaño Montoya', '5 Avenida Colón, Carrera 50 # 52 - 21. Bogotá - Colombia', '120000', 3126987452, 'alberto.castano@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-25 17:23:23', NULL),
(19, 'Pediatría', 'Mauricio Arango Villa', '5 Avenida Colón, Carrera 50 # 52 - 21.', '120000', 345897423, 'mauricioa@clinica.com.co', '84748ed3467bcac14f375fe2d85e2cc4', '2024-09-26 19:34:02', '2024-09-26 19:36:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(23, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 18:30:17', NULL, 0),
(24, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 18:30:28', NULL, 0),
(25, NULL, 'Aquilino Villegas Sanchez', 0x3a3a3100000000000000000000000000, '2024-09-25 18:30:47', NULL, 0),
(26, 11, 'maria.angel@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 18:32:07', '26-09-2024 12:25:54 AM', 1),
(27, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:32:34', NULL, 0),
(28, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:32:44', NULL, 0),
(29, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:32:55', NULL, 0),
(30, NULL, 'Aquilino Villegas Sanchez', 0x3a3a3100000000000000000000000000, '2024-09-25 20:39:41', NULL, 0),
(31, 10, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:40:02', '26-09-2024 02:22:50 AM', 1),
(32, NULL, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:53:07', NULL, 0),
(33, 10, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:53:35', '26-09-2024 02:25:27 AM', 1),
(34, 13, 'fernando.alvarez@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 20:56:38', '26-09-2024 04:31:36 AM', 1),
(35, NULL, 'Gonzalo Correa Cano', 0x3a3a3100000000000000000000000000, '2024-09-25 23:37:23', NULL, 0),
(36, 16, 'gonzalo.correa@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-25 23:38:33', '26-09-2024 05:16:01 AM', 1),
(37, NULL, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-26 00:01:38', NULL, 0),
(38, NULL, 'mauriciog@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-26 00:02:07', NULL, 0),
(39, NULL, 'mauriciog@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-26 00:02:26', NULL, 0),
(40, NULL, 'Alexander Perez Ángel', 0x3a3a3100000000000000000000000000, '2024-09-26 18:04:46', NULL, 0),
(41, NULL, 'alexander.perez@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-26 18:05:07', NULL, 0),
(42, NULL, 'alexander.perez@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-26 18:05:19', NULL, 0),
(43, NULL, 'alexander.perez@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-26 18:05:55', NULL, 0),
(44, NULL, 'Aquilino Villegas Sanchez', 0x3a3a3100000000000000000000000000, '2024-09-26 18:07:13', NULL, 0),
(45, 10, 'aquilino.villegas@clinica.com.co', 0x3a3a3100000000000000000000000000, '2024-09-26 18:07:31', '27-09-2024 12:52:38 AM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Ginecólogo/Obstetra', '2016-12-28 06:37:25', '2024-09-24 13:06:53'),
(2, 'Médico General', '2016-12-28 06:38:12', '2024-09-24 13:07:41'),
(3, 'Dermatólogo', '2016-12-28 06:38:48', '2024-09-24 13:07:57'),
(4, 'Homeópata', '2016-12-28 06:39:26', '2024-09-24 13:08:11'),
(5, 'Médico Internista', '2016-12-28 06:39:51', '2024-09-24 13:08:49'),
(6, 'Dentista', '2016-12-28 06:40:08', '2024-09-24 13:08:29'),
(7, 'Otorrinolaringólogo', '2016-12-28 06:41:18', '2024-09-24 13:09:22'),
(9, 'Neurólogo', '2016-12-28 07:37:39', '2024-09-24 13:09:54'),
(10, 'Fisiatra', '2017-01-07 08:07:53', '2024-09-24 13:10:05'),
(11, 'Deportólogo', '2019-06-23 17:51:06', '2024-09-24 13:10:16'),
(12, 'Urólogo', '2019-11-10 18:36:36', '2024-09-24 13:10:39'),
(17, 'Endocrinología ', '2024-09-26 19:28:25', NULL),
(18, 'Pediatría', '2024-09-26 19:28:50', '2024-09-26 19:35:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `LastupdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `IsRead` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(4, 'Felipe Sanchéz', 'fsanciez@yahoo.com', 312569874, ' Buenas deseo conocer los horarios de la clínica, muchas gracias.', '2024-09-24 20:31:48', 'Buen día, los horarios de atención de la clínica es de lunes a sábado de 10:00 am a 8:00 pm ', '2024-09-25 19:52:59', 1),
(5, 'Fernando Cardona López', 'dcardona@outlook.com', 315336789, ' Buen día, me pueden informar  si tienen el servicio de urología habilitado, gracias.', '2024-09-24 20:35:27', 'Buenos días, por el momento el servicio de urología no se encuentra habilitado.', '2024-09-25 19:54:38', 1),
(6, 'Alberto Contretas Ramirez', 'albertor@outlook.com', 3254789641, ' Buenos días, quisiera conocer qué servicio de Neurología tienen disponible en este momento, muchas gracias', '2024-09-26 17:06:35', 'Buenos días, el servicio de Neurología se activará en unos días, nos pondremos en contacto con usted para avisarle cuando esta disponible.', '2024-09-26 17:09:19', 1),
(7, 'Alexander Gómez Ramirez', 'alexanderg@gmail.com', 3154786932, ' Buenos días señores Clinica, me podrían informar si el servicio de odontología se encuentra disponible y en que horario están prestando servicios, gracias. ', '2024-09-26 17:20:49', 'Buenos días, señor Alexander el servicio de odontología se encuentra desactivado, esperamos que prontamente este en servicio, le avisaremos via correo electrónico cuando este disponible.', '2024-09-26 17:23:55', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(10) NOT NULL,
  `PatientID` int(10) DEFAULT NULL,
  `BloodPressure` varchar(200) DEFAULT NULL,
  `BloodSugar` varchar(200) NOT NULL,
  `Weight` varchar(100) DEFAULT NULL,
  `Temperature` varchar(200) DEFAULT NULL,
  `MedicalPres` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblmedicalhistory`
--

INSERT INTO `tblmedicalhistory` (`ID`, `PatientID`, `BloodPressure`, `BloodSugar`, `Weight`, `Temperature`, `MedicalPres`, `CreationDate`) VALUES
(8, 6, '120/70', '90', '64', '36', 'Paciente en condiciones normales, con proceso inflamatorio en las vías urinarias.', '2024-09-25 18:40:12'),
(9, 8, '120/70', '90', '75', '37', 'Se realiza control con antigripales, se da incapacidad por 3 días', '2024-09-25 21:03:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`, `UpdationDate`) VALUES
(6, 11, 'María Pérez López', 3158663977, 'marial@gmail.com', 'Mujer', 'Calle 45 32 A 31', 35, 'Ingreso por problemas de miomas', '2024-09-25 18:37:15', '2024-09-26 22:36:52'),
(7, 10, 'Angela Rodríguez Mota', 325489633, 'angelar@gmail.com', 'Mujer', 'Carrera 3 # 225 - 30', 38, 'Paciente con proceso de premenopausia, se inicia tratamiento hormonal. ', '2024-09-25 20:45:09', '2024-09-26 22:37:13'),
(8, 13, 'Alexander Montoya', 325974123, 'alexanderm@gmail.com', 'Hombre', 'Carrera 56 # 180 - 66', 35, 'Control por un cuadro severo de gripe', '2024-09-25 21:02:01', '2024-09-25 23:39:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(31, NULL, 'marialgmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:12:31', NULL, 0),
(32, NULL, 'marialgmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:13:34', NULL, 0),
(33, NULL, 'marialgmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:13:48', NULL, 0),
(34, NULL, 'marialgmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:14:40', NULL, 0),
(35, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:15:13', '25-09-2024 01:02:54 AM', 1),
(36, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 19:33:55', '25-09-2024 01:07:07 AM', 1),
(37, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-24 23:29:17', '25-09-2024 05:32:54 AM', 1),
(38, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 00:03:53', '25-09-2024 05:35:25 AM', 1),
(39, NULL, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 00:05:49', NULL, 0),
(40, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 01:17:28', '25-09-2024 07:43:59 AM', 1),
(41, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 15:32:22', '25-09-2024 09:52:16 PM', 1),
(42, 8, 'marial@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:09:12', '25-09-2024 11:45:14 PM', 1),
(43, 9, 'mario@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:16:27', '25-09-2024 11:47:43 PM', 1),
(44, 15, 'mauriciog@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:18:01', '25-09-2024 11:49:45 PM', 1),
(45, 17, 'amalia@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:19:58', '25-09-2024 11:50:43 PM', 1),
(46, 18, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:20:57', '25-09-2024 11:52:51 PM', 1),
(47, 19, 'angelar@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:23:02', '25-09-2024 11:54:30 PM', 1),
(48, 20, 'gustavor@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:24:58', '25-09-2024 11:56:18 PM', 1),
(49, 21, 'esperanzam@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:26:31', '25-09-2024 11:57:25 PM', 1),
(50, 23, 'andreac@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:27:38', '25-09-2024 11:58:39 PM', 1),
(51, 24, 'alexanderm@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-25 18:28:53', '25-09-2024 11:59:38 PM', 1),
(52, 18, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 23:18:02', '26-09-2024 04:56:24 AM', 1),
(53, NULL, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 23:26:43', NULL, 0),
(54, 18, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 23:28:07', '26-09-2024 05:05:26 AM', 1),
(55, 18, 'alejandroa@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-25 23:35:53', NULL, 1),
(56, 15, 'mauriciog@outlook.com', 0x3a3a3100000000000000000000000000, '2024-09-26 00:03:06', '26-09-2024 05:36:04 AM', 1),
(57, NULL, 'abelardor@gmail.com', 0x3a3a3100000000000000000000000000, '2024-09-26 19:46:07', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(8, 'María Pérez López', 'Calle 45 32 A 31', 'Bogotá', 'Mujer', 'marial@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-24 19:10:45', '2024-09-25 17:28:29'),
(9, 'Mario Espitia Arango', 'Celle 03 # 10 - 21', 'Bogotá', 'Hombre', 'mario@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 16:26:07', '2024-09-25 17:33:45'),
(15, 'Mauricio Gómez', 'Calle 100 # 34 - 31', 'Chía', 'Hombre', 'mauriciog@outlook.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 16:36:47', '2024-09-25 17:34:18'),
(17, 'Amalia Arango Arango', 'Carrera 54 # 25 - 40', 'Bogota', 'Mujer', 'amalia@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 16:47:52', '2024-09-25 17:35:15'),
(18, 'Alejandro Arango Gutiérrez', 'Calle 20 # 374 - 26', 'Bogotá', 'Hombre', 'alejandroa@outlook.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 16:49:18', '0000-00-00 00:00:00'),
(19, 'Angela Rodríguez Mota', 'Carrera 3 # 225 - 30', 'Bogotá', 'Mujer', 'angelar@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 17:27:18', NULL),
(20, 'Gustavo Ramírez Restrepo', 'Cale 35 B # 25 A 45', 'Bogotá', 'Hombre', 'gustavor@outlook.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 17:38:03', NULL),
(21, 'Esperanza Martinez Suaréz', 'Calle 25 # 34 - 256', 'Bogotá', 'Mujer', 'esperanzam@outlook.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 17:39:16', NULL),
(23, 'Andrea Cardona López', 'Calle 45 # 26 - 45', 'Bogotá', 'Mujer', 'andreac@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 17:41:35', NULL),
(24, 'Alexander Montoya', 'Carrera 56 # 180 - 66', 'Bogotá', 'Hombre', 'alexanderm@gmail.com', '4f516d6dabbfb711feab0fa904f9daed', '2024-09-25 18:08:26', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
