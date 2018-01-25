/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50524
Source Host           : 127.0.0.1:3306
Source Database       : clasificados

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2014-08-15 15:01:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auditoria
-- ----------------------------
DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE `auditoria` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cedula` int(50) DEFAULT NULL,
  `operacion` text,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `id_tarjeta` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_auditoria` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auditoria
-- ----------------------------
INSERT INTO `auditoria` VALUES ('1', '15739243', 'Inactiv&oacute; el Cliente de la cedula 15739242 desde la ip 127.0.0.1', '2014-02-21', '08:25:41', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('2', '15739243', 'Activó Cliente de la cedula 15739242 desde la ip 127.0.0.1', '2014-02-21', '08:26:14', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('3', '15739243', 'Elimin&oacute; Cliente de la cedula 15739242 desde la ip 127.0.0.1', '2014-02-21', '08:40:22', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('4', '15739242', 'Bloqueo Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:53:37', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('5', '15739242', 'Bloqueo Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:55:12', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('6', '15739242', 'Bloqueo Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:55:35', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('7', '15739242', 'Activó Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:58:30', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('8', '15739242', 'Bloqueo Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:58:47', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('9', '15739242', 'Activó Usuario de la cedula 15968666 desde la ip 127.0.0.1', '2014-02-21', '12:58:49', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('10', '15739242', 'Inactiv&oacute; el Cliente de la cedula 15739242 desde la ip 127.0.0.1', '2014-02-21', '12:59:57', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('11', '15739242', 'Inactiv&oacute; la Agencia de la cedula / Rif 15632522 desde la ip 127.0.0.1', '2014-02-21', '13:00:06', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('12', '15739242', 'Activó Cliente de la cedula 15739242 desde la ip 127.0.0.1', '2014-02-21', '13:19:01', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('13', '15739242', 'Activ&oacute; la Agencia de la cedula / Rif 15632522 desde la ip 127.0.0.1', '2014-02-21', '13:30:21', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('14', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '14:59:35', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('15', '0', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '14:59:42', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('16', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:02:24', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('17', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:02:59', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('18', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:09:09', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('19', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:12:06', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('20', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:13:27', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('21', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:14:03', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('22', '15739242', 'Entró a su perfil de usuario desde la Ip 127.0.0.1', '2014-06-03', '15:15:24', '127.0.0.1', '0');
INSERT INTO `auditoria` VALUES ('23', '15739242', 'Envió sus respuestas secretas al correo electrónico desde la Ip 127.0.0.1', '2014-06-03', '15:18:32', '127.0.0.1', '0');

-- ----------------------------
-- Table structure for aviso
-- ----------------------------
DROP TABLE IF EXISTS `aviso`;
CREATE TABLE `aviso` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `codigo_aviso` int(10) unsigned zerofill DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `descripcion` text,
  `tipo_fecha` int(10) DEFAULT NULL,
  `fecha_publ` text,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  `categoria` int(10) DEFAULT NULL,
  `cant_palabra` int(20) DEFAULT NULL,
  `palabras_adicionales` int(20) DEFAULT NULL,
  `tipo_pago` varchar(10) DEFAULT NULL,
  `id_tarjeta` int(10) DEFAULT NULL,
  `monto_base` decimal(11,2) DEFAULT NULL,
  `monto_iva` decimal(11,2) DEFAULT NULL,
  `monto_total` decimal(11,2) DEFAULT NULL,
  `tasa_iva` int(10) DEFAULT NULL,
  `id_transaccion` int(10) DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cedula` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aviso
-- ----------------------------
INSERT INTO `aviso` VALUES ('10', '0000000001', '15739242', 'vendo corsa 4 puertas, color negro, con sonido papeles en reglas unico dueño verlo es comprarlo esta en buen estado.', '2', '01/02/2014,02/02/2014,03/02/2014,04/02/2014', '0000-00-00', '0000-00-00', '3', '15', '21', '0', 'credito', '1', '732.50', '87.90', '820.40', '12', null, '2014-01-31');
INSERT INTO `aviso` VALUES ('14', '0000000002', '15728596', 'prueba de aviso', '1', '', '2014-06-03', '2014-06-17', '1', '18', '3', '0', 'credito', '3', '732.50', '87.90', '820.40', '12', null, '2014-06-02');

-- ----------------------------
-- Table structure for bloqueo_aviso
-- ----------------------------
DROP TABLE IF EXISTS `bloqueo_aviso`;
CREATE TABLE `bloqueo_aviso` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_aviso` int(10) DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `motivo` text,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bloqueo_aviso
-- ----------------------------
INSERT INTO `bloqueo_aviso` VALUES ('1', '10', '15739242', 'no explico el contenido de la publicación', '2014-02-19');

-- ----------------------------
-- Table structure for bloqueo_tarjeta
-- ----------------------------
DROP TABLE IF EXISTS `bloqueo_tarjeta`;
CREATE TABLE `bloqueo_tarjeta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_tarjeta` int(20) DEFAULT NULL,
  `motivo_bloqueo` text,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bloqueo_tarjeta
-- ----------------------------
INSERT INTO `bloqueo_tarjeta` VALUES ('18', '4', 'Fraude', '2014-02-21');
INSERT INTO `bloqueo_tarjeta` VALUES ('19', '0', '', '2014-02-21');
INSERT INTO `bloqueo_tarjeta` VALUES ('20', '2', '', '2014-02-21');
INSERT INTO `bloqueo_tarjeta` VALUES ('21', '2', '', '2014-02-21');
INSERT INTO `bloqueo_tarjeta` VALUES ('22', '2', '', '2014-02-21');
INSERT INTO `bloqueo_tarjeta` VALUES ('23', '2', 'Extravío', '2014-02-26');

-- ----------------------------
-- Table structure for bloqueo_usuario
-- ----------------------------
DROP TABLE IF EXISTS `bloqueo_usuario`;
CREATE TABLE `bloqueo_usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cedula_user` int(20) DEFAULT NULL,
  `motivo_bloqueo` text,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bloqueo_usuario
-- ----------------------------
INSERT INTO `bloqueo_usuario` VALUES ('1', '15739242', 'wqerwrwre', '2014-02-21');

-- ----------------------------
-- Table structure for dias_festivos
-- ----------------------------
DROP TABLE IF EXISTS `dias_festivos`;
CREATE TABLE `dias_festivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(20) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dias_festivos
-- ----------------------------
INSERT INTO `dias_festivos` VALUES ('1', '01/01', 'Año Nuevo');
INSERT INTO `dias_festivos` VALUES ('2', '17/04', 'Jueves Santo');
INSERT INTO `dias_festivos` VALUES ('3', '18/04', 'Viernes Santo');
INSERT INTO `dias_festivos` VALUES ('4', '01/05', 'Día del Trabajador');
INSERT INTO `dias_festivos` VALUES ('5', '25/12', 'Navidad');

-- ----------------------------
-- Table structure for parametro_tarifa
-- ----------------------------
DROP TABLE IF EXISTS `parametro_tarifa`;
CREATE TABLE `parametro_tarifa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `palabras_maxima` int(10) DEFAULT NULL,
  `valor_palabra` decimal(11,2) DEFAULT NULL,
  `valor_adicional` decimal(11,2) DEFAULT NULL,
  `valor_iva` int(10) DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of parametro_tarifa
-- ----------------------------
INSERT INTO `parametro_tarifa` VALUES ('1', '25', '29.30', '15.50', '12', '2014-01-20');

-- ----------------------------
-- Table structure for plantilla_email
-- ----------------------------
DROP TABLE IF EXISTS `plantilla_email`;
CREATE TABLE `plantilla_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tipo_id` int(10) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` longblob,
  `status` int(10) DEFAULT '1',
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plantilla_email
-- ----------------------------
INSERT INTO `plantilla_email` VALUES ('4', '4', 'Bienvenidos', 0x3C703E266E6273703B457374616D6F7320617175266961637574653B2070617261206179756461726C652061206D616E74656E65727365206F7267616E697A61646F2C20706172612071756520706F64616D6F7320766F6C7665722061206861636572206C6F2071756520616D61732E207072756562613C2F703E0D0A3C703E266E6273703B3C2F703E, '1', '2014-05-21');
INSERT INTO `plantilla_email` VALUES ('6', '1', 'Creación de Cuenta', 0x3C703E457374696D61646F207573756172696F2C20656C7369676C6F207465206461206C61206D266161637574653B7320636F726469616C206269656E76656E6964612061206E75657374726F203C7374726F6E673E4E7565766F2073697374656D61206465206573656D706C656F732E636F6D2E266E6273703B3C2F7374726F6E673E20556E61206E75657661206D616E657261206D266161637574653B732066266161637574653B63696C2079207261706964612064652023746578746F2E205920736F62726520746F646F20756E2076266961637574653B6E63756C6F206469726563746F207061726120666163696C69746172746520656C206163657263616D69656E746F2061206E7565737472612063617361207175652C206573706572616D6F73207175652070726F6E746F20736561206C6120747579612074616D6269266561637574653B6E2E204E6F20647564657320656E20636F6E74616374617220636F6E206E6F736F74726F732070617261206C6F20717565206775737465732E3C2F703E, '1', '2014-05-26');

-- ----------------------------
-- Table structure for preguntas
-- ----------------------------
DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE `preguntas` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero` (`numero`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of preguntas
-- ----------------------------
INSERT INTO `preguntas` VALUES ('1', 'Nombre de tu escuela primaria?', '1');
INSERT INTO `preguntas` VALUES ('2', 'Nombre de tu mascota?', '2');
INSERT INTO `preguntas` VALUES ('3', 'De que color son tus ojos?', '3');
INSERT INTO `preguntas` VALUES ('4', 'Te has hecho algun piercing o perforaciones?', '4');
INSERT INTO `preguntas` VALUES ('5', 'Nombre de tu sobrino(a) mayor', '5');
INSERT INTO `preguntas` VALUES ('6', 'Nombre de tu abuela materna', '6');
INSERT INTO `preguntas` VALUES ('7', 'En que lugar te gustaria vivir?', '7');
INSERT INTO `preguntas` VALUES ('8', 'Ciudad natal de tu padre', '8');
INSERT INTO `preguntas` VALUES ('9', 'Cuantas veces te has enamorado?', '9');
INSERT INTO `preguntas` VALUES ('10', 'Bebida favorita? ', '10');
INSERT INTO `preguntas` VALUES ('11', 'Cual es tu postre favorito?', '11');
INSERT INTO `preguntas` VALUES ('12', 'Cual es tu cancion favorita? ', '12');
INSERT INTO `preguntas` VALUES ('13', 'Cual es tu artista favorito?', '13');
INSERT INTO `preguntas` VALUES ('14', 'Marca de pasta dental que usas? ', '14');
INSERT INTO `preguntas` VALUES ('15', 'Cual es tu flor favorita? ', '15');
INSERT INTO `preguntas` VALUES ('16', 'Deporte favorito? ', '16');
INSERT INTO `preguntas` VALUES ('235', 'Bebida alcoholica preferida', '17');
INSERT INTO `preguntas` VALUES ('236', 'Nombre de tu mejor amigo de la infancia', '18');
INSERT INTO `preguntas` VALUES ('237', 'Personaje favorito de los Simpson?', '19');
INSERT INTO `preguntas` VALUES ('238', 'Canal de TV preferido?', '20');
INSERT INTO `preguntas` VALUES ('239', 'Cual es tu color favorito?', '21');
INSERT INTO `preguntas` VALUES ('240', 'Cantante o grupo favorito? ', '22');
INSERT INTO `preguntas` VALUES ('241', 'Lugar que te gustaria visitar?', '23');
INSERT INTO `preguntas` VALUES ('242', 'Signo del zodiaco? ', '24');
INSERT INTO `preguntas` VALUES ('243', 'Profesion de tu padre', '25');
INSERT INTO `preguntas` VALUES ('244', 'Marca de vehiculo de tu padre', '26');
INSERT INTO `preguntas` VALUES ('245', 'De cual lado de la cama duermes, izquierda, derecha o centro?', '27');
INSERT INTO `preguntas` VALUES ('246', 'Cuantos hermanos(as) tienes?', '28');
INSERT INTO `preguntas` VALUES ('247', 'Lugar donde fuistes en tu luna de miel?', '29');
INSERT INTO `preguntas` VALUES ('248', 'Nombre de tu padrino?', '30');

-- ----------------------------
-- Table structure for preguntas_usuario
-- ----------------------------
DROP TABLE IF EXISTS `preguntas_usuario`;
CREATE TABLE `preguntas_usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cedula` int(50) DEFAULT NULL,
  `preg1` varchar(255) DEFAULT NULL,
  `preg2` varchar(255) DEFAULT NULL,
  `preg3` varchar(255) DEFAULT NULL,
  `resp1` varchar(255) DEFAULT NULL,
  `resp2` varchar(255) DEFAULT NULL,
  `resp3` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of preguntas_usuario
-- ----------------------------

-- ----------------------------
-- Table structure for sucursal
-- ----------------------------
DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE `sucursal` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sucursal` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursal
-- ----------------------------
INSERT INTO `sucursal` VALUES ('1', 'Maracay', '1');
INSERT INTO `sucursal` VALUES ('2', 'Boulevar', '1');
INSERT INTO `sucursal` VALUES ('3', 'Valencia', '1');
INSERT INTO `sucursal` VALUES ('4', 'Cagua', '1');
INSERT INTO `sucursal` VALUES ('5', 'Victoria', '1');
INSERT INTO `sucursal` VALUES ('6', 'Caracas', '1');
INSERT INTO `sucursal` VALUES ('7', 'Web', '1');

-- ----------------------------
-- Table structure for tarjeta_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tarjeta_usuario`;
CREATE TABLE `tarjeta_usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cedula` int(20) DEFAULT NULL,
  `tipo_tc` varchar(255) DEFAULT NULL,
  `numero_tc` varchar(255) DEFAULT NULL,
  `bcoemisor_tc` int(10) DEFAULT NULL,
  `dir_fac_tc` text,
  `status` int(10) DEFAULT '1',
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuarios_tarjetas` (`cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tarjeta_usuario
-- ----------------------------
INSERT INTO `tarjeta_usuario` VALUES ('1', '15739242', 'visa', '5259711510298804', '4', 'macata aragua', '1', '2014-01-16');
INSERT INTO `tarjeta_usuario` VALUES ('2', '15739242', 'master', '5259711510298583', '13', 'maracay aragua', '1', '2014-01-21');
INSERT INTO `tarjeta_usuario` VALUES ('3', '15728596', 'visa', '234534******5353', '1', 'Maracay', '1', '2014-06-02');

-- ----------------------------
-- Table structure for tbl_bancos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bancos`;
CREATE TABLE `tbl_bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banco` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de bancos';

-- ----------------------------
-- Records of tbl_bancos
-- ----------------------------
INSERT INTO `tbl_bancos` VALUES ('1', 'Banco de Venezuela');
INSERT INTO `tbl_bancos` VALUES ('3', 'Banesco');
INSERT INTO `tbl_bancos` VALUES ('4', 'BBVA Banco Provincial');
INSERT INTO `tbl_bancos` VALUES ('7', 'Banco Mercantil');
INSERT INTO `tbl_bancos` VALUES ('8', 'Bicentenario Banco Universal');
INSERT INTO `tbl_bancos` VALUES ('13', 'Banco Occidental de Descuento BOD');
INSERT INTO `tbl_bancos` VALUES ('14', 'Bancaribe');
INSERT INTO `tbl_bancos` VALUES ('15', 'Banco Exterior');
INSERT INTO `tbl_bancos` VALUES ('16', 'Banco del Tesoro');
INSERT INTO `tbl_bancos` VALUES ('19', 'Banco Industrial de Venezuela');
INSERT INTO `tbl_bancos` VALUES ('20', 'Banco Nacional de Cr?dito BNC');
INSERT INTO `tbl_bancos` VALUES ('23', 'Corp Banca BOD');
INSERT INTO `tbl_bancos` VALUES ('24', 'BFC');
INSERT INTO `tbl_bancos` VALUES ('27', 'Venezolano de Credito');
INSERT INTO `tbl_bancos` VALUES ('28', 'Banco Caroni');
INSERT INTO `tbl_bancos` VALUES ('31', 'Banco Agricola de Venezuela');
INSERT INTO `tbl_bancos` VALUES ('32', 'Banco Sofitasa');
INSERT INTO `tbl_bancos` VALUES ('35', 'Banco Plaza');
INSERT INTO `tbl_bancos` VALUES ('36', 'Del Sur');
INSERT INTO `tbl_bancos` VALUES ('39', 'Citibank');
INSERT INTO `tbl_bancos` VALUES ('40', 'Banco Activo');
INSERT INTO `tbl_bancos` VALUES ('43', 'Banplus');
INSERT INTO `tbl_bancos` VALUES ('44', '100% Banco');
INSERT INTO `tbl_bancos` VALUES ('47', 'Banco Espiritu Santo (Venezuela)');
INSERT INTO `tbl_bancos` VALUES ('48', 'Banco Internacional de Desarrollo');
INSERT INTO `tbl_bancos` VALUES ('51', 'Banco de Exportacion y Comercio');

-- ----------------------------
-- Table structure for temporal_aviso
-- ----------------------------
DROP TABLE IF EXISTS `temporal_aviso`;
CREATE TABLE `temporal_aviso` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cedula` int(20) DEFAULT NULL,
  `descripcion` text,
  `tipo_fecha` int(10) DEFAULT NULL,
  `fecha_publ` text,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  `status` int(10) DEFAULT '2',
  `categoria` int(10) DEFAULT NULL,
  `cant_palabra` int(20) DEFAULT NULL,
  `id_tarjeta` int(10) DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of temporal_aviso
-- ----------------------------

-- ----------------------------
-- Table structure for tipo_clasificados
-- ----------------------------
DROP TABLE IF EXISTS `tipo_clasificados`;
CREATE TABLE `tipo_clasificados` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_clasificados
-- ----------------------------
INSERT INTO `tipo_clasificados` VALUES ('1', 'Apartamentos alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('2', 'Apartamentos Venta', '2');
INSERT INTO `tipo_clasificados` VALUES ('3', 'Casas alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('4', 'Casas Venta', '2');
INSERT INTO `tipo_clasificados` VALUES ('5', 'Condominios', '2');
INSERT INTO `tipo_clasificados` VALUES ('6', 'Quinta alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('7', 'Quintas venta', '2');
INSERT INTO `tipo_clasificados` VALUES ('8', 'Galpones alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('9', 'Galpones venta', '2');
INSERT INTO `tipo_clasificados` VALUES ('10', 'Habitaciones alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('11', 'Locales alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('12', 'Oficinas venta', '2');
INSERT INTO `tipo_clasificados` VALUES ('13', 'Oficina alquiler', '2');
INSERT INTO `tipo_clasificados` VALUES ('14', 'Parcelas / Terrenos', '2');
INSERT INTO `tipo_clasificados` VALUES ('15', 'Vehiculos (Compra- venta)', '4');
INSERT INTO `tipo_clasificados` VALUES ('16', 'Motos (Compra-venta)', '4');
INSERT INTO `tipo_clasificados` VALUES ('18', 'Empleo varios', '1');
INSERT INTO `tipo_clasificados` VALUES ('19', 'Muebles (Compra-venta)', '2');
INSERT INTO `tipo_clasificados` VALUES ('20', 'Servicios especializados', '3');
INSERT INTO `tipo_clasificados` VALUES ('21', 'Animales', '5');
INSERT INTO `tipo_clasificados` VALUES ('22', 'Belleza', '5');
INSERT INTO `tipo_clasificados` VALUES ('23', 'Cerámicas', '5');
INSERT INTO `tipo_clasificados` VALUES ('24', 'Comidas', '5');
INSERT INTO `tipo_clasificados` VALUES ('25', 'Compras varias', '5');
INSERT INTO `tipo_clasificados` VALUES ('26', 'Cursos', '5');
INSERT INTO `tipo_clasificados` VALUES ('27', 'Decoraciones', '5');
INSERT INTO `tipo_clasificados` VALUES ('28', 'Electricidad', '5');
INSERT INTO `tipo_clasificados` VALUES ('29', 'Vacaciones / Turismo', '5');
INSERT INTO `tipo_clasificados` VALUES ('30', 'Fumigaciones', '5');
INSERT INTO `tipo_clasificados` VALUES ('31', 'Gimnasia', '5');
INSERT INTO `tipo_clasificados` VALUES ('32', 'Guardería', '5');
INSERT INTO `tipo_clasificados` VALUES ('33', 'Hípotecas / Préstamos', '5');
INSERT INTO `tipo_clasificados` VALUES ('34', 'Institutos Educacionales', '5');
INSERT INTO `tipo_clasificados` VALUES ('35', 'Música', '5');
INSERT INTO `tipo_clasificados` VALUES ('36', 'Negocios (Compra-venta)', '5');
INSERT INTO `tipo_clasificados` VALUES ('37', 'Profesionales', '5');
INSERT INTO `tipo_clasificados` VALUES ('38', 'Teléfono', '5');
INSERT INTO `tipo_clasificados` VALUES ('39', 'Ventas varias', '5');
INSERT INTO `tipo_clasificados` VALUES ('40', 'Deporte', '5');
INSERT INTO `tipo_clasificados` VALUES ('41', 'Auto escuelas', '5');
INSERT INTO `tipo_clasificados` VALUES ('42', 'Veterinarios', '5');
INSERT INTO `tipo_clasificados` VALUES ('43', 'Fiestas', '5');
INSERT INTO `tipo_clasificados` VALUES ('44', 'Ventas de acciones', '5');
INSERT INTO `tipo_clasificados` VALUES ('45', 'Computación', '5');
INSERT INTO `tipo_clasificados` VALUES ('46', 'Traje de alquiles y venta', '5');
INSERT INTO `tipo_clasificados` VALUES ('47', 'Sólo para adultos', '5');
INSERT INTO `tipo_clasificados` VALUES ('48', 'Mensaje de amor y amistad', '5');
INSERT INTO `tipo_clasificados` VALUES ('49', 'Artes y espectáculos', '5');
INSERT INTO `tipo_clasificados` VALUES ('50', 'Última hora', '5');

-- ----------------------------
-- Table structure for tipo_email
-- ----------------------------
DROP TABLE IF EXISTS `tipo_email`;
CREATE TABLE `tipo_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_email
-- ----------------------------
INSERT INTO `tipo_email` VALUES ('1', 'Agradecimiento', '1', '2014-05-19');
INSERT INTO `tipo_email` VALUES ('2', 'Recuperar Clave', '1', '2014-05-19');
INSERT INTO `tipo_email` VALUES ('3', 'Confirmación Aviso', '1', '2014-05-19');
INSERT INTO `tipo_email` VALUES ('4', 'Publicidad', '1', '2014-05-19');

-- ----------------------------
-- Table structure for transaccion_bnc
-- ----------------------------
DROP TABLE IF EXISTS `transaccion_bnc`;
CREATE TABLE `transaccion_bnc` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idInvoice` int(10) DEFAULT NULL COMMENT 'Número único que identifique a la operación',
  `Amount` decimal(15,2) DEFAULT NULL COMMENT 'Monto de la operación. (Máximo 15 enteros y 2 decimales)',
  `idReturnCode` int(10) DEFAULT NULL COMMENT '0 = Operación Exitosa, 1 = Error en la operación',
  `Value` int(10) DEFAULT NULL COMMENT 'Si idReturnCode = 0, Código de Autorización de la compra. \r\nSi idReturnCode = 1, Código del Error en la operación',
  `Description` text COMMENT 'Descripción del resultado de la operación',
  `idCardType` int(10) DEFAULT NULL COMMENT 'Tipo de Tarjeta procesada.\r\n 1 = Visa,\r\n 2 = MasterCard,\r\n 3 = Débito Maestro',
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaccion_bnc
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cedula` int(20) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL COMMENT 'Tipo 1  Administradores\r\n\r\nTipo 2 Usuarios Operadores\r\n\r\nTipo3  Usuarios Clientes\r\n\r\nTipo4 Usuarios Agencias',
  `status` int(10) DEFAULT '1' COMMENT 'status 1=>Activo\r\n\r\nstatus2=>Bloqueado\r\n\r\nstatus3= Inactivo',
  `tlf_movil` varchar(50) DEFAULT NULL,
  `tlf_local` varchar(50) DEFAULT NULL,
  `lugar_nac` varchar(255) DEFAULT NULL,
  `direccion` text,
  `intento_fallido` int(10) DEFAULT NULL,
  `forma_pago` varchar(50) DEFAULT NULL,
  `numero_tarjeta_debito` varchar(255) DEFAULT NULL,
  `preg1` int(10) DEFAULT NULL,
  `resp1` varchar(255) DEFAULT NULL,
  `preg2` int(10) DEFAULT NULL,
  `resp2` varchar(255) DEFAULT NULL,
  `preg3` int(10) DEFAULT NULL,
  `resp3` varchar(255) DEFAULT NULL,
  `codigo_especial` int(10) DEFAULT NULL,
  `fecha_reg` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cedula` (`cedula`),
  KEY `preg1` (`preg1`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', '15739242', 'jesus reyes', 'user@gmail.com', 'user', '2', '1', '(0412) 585-95-55', '(0243) 565-65-66', 'maracay', 'maracay aragua', '0', '', null, '3', 'marron', '11', 'quesillo', '239', 'azul', null, '2014-01-16');
INSERT INTO `usuarios` VALUES ('2', '15739243', 'Jose Riera', 'admin@gmail.com', 'admin', '1', '1', '(0412) 585-95-55', '(0412) 585-95-55', 'maracay', 'maracay aragua', '0', '', null, '0', '', '0', '', '0', '', null, null);
INSERT INTO `usuarios` VALUES ('3', '15968666', 'Maria Reyes', 'maria@gmail.com', '123456', '3', '1', '(0412) 585-95-55', '(0243) 569-66-66', '0', 'Maracay Aragua', '0', null, null, null, null, null, null, null, null, null, '2014-01-21');
INSERT INTO `usuarios` VALUES ('4', '15739484', 'jesus reyes', 'jesus@gmail.com', '123456', '3', '1', '(0412) 566-66-66', '(0243) 566-66-66', 'maracay', 'aragua', '0', '', null, '3', 'negro', '16', 'futbol', '242', 'cancer', null, '2014-01-21');
INSERT INTO `usuarios` VALUES ('5', '15632522', 'multiserviciosrj,c.a', 'multiserv@gmail.com', '123456', '4', '1', '(0412) 569-66-66', '(0426) 555-55-55', '0', 'urb.  maracay centro cerca', '0', null, null, null, null, null, null, null, null, null, '2014-01-27');
INSERT INTO `usuarios` VALUES ('6', '15728596', 'José Reyes', 'jss.reyes2@gmail.com', '123456', '2', '1', '(0412) 965-85-95', '(0212) 296-57-58', 'Maracay', 'Maracay Aragua', null, '', null, '1', '1', '11', '2', '240', '3', null, '2014-06-02');
