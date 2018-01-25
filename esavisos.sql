-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2015 at 02:37 PM
-- Server version: 5.1.58
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a3286768_avisos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `us_id` int(8) NOT NULL AUTO_INCREMENT,
  `us_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `us_clave` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `us_status` int(1) NOT NULL DEFAULT '1' COMMENT '1 Activo, 2 Inactivo',
  `us_fecha` date NOT NULL,
  `us_tipo` int(1) NOT NULL COMMENT '1 Paciente, 2 Doctor, 3 Administrador',
  `us_nombre` varchar(40) NOT NULL,
  `us_apellido` varchar(40) NOT NULL,
  `us_username` varchar(20) NOT NULL,
  PRIMARY KEY (`us_id`),
  UNIQUE KEY `us_email` (`us_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=189 ;

--
-- Dumping data for table `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` VALUES(136, 'mauro@aol.com', '123456', 1, '2014-09-26', 2, '', '', '');
INSERT INTO `tbl_usuarios` VALUES(188, 'mariguti@yahoo.com', '123456', 1, '2014-12-15', 2, 'Maria', 'Gutierrez', 'marigut');
