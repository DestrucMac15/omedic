/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : omedic

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2019-03-29 17:57:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blogs
-- ----------------------------
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id_blog` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_blog` varchar(255) NOT NULL,
  `fecha_blog` date NOT NULL,
  `resumen_blog` varchar(255) NOT NULL,
  `contenido_blog` varchar(50000) NOT NULL,
  `imagen_blog` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_blog`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of blogs
-- ----------------------------
INSERT INTO `blogs` VALUES ('1', 'Entrada 2', '2019-03-21', 'Esta en una de las entradas mas cortas que hay', 'Aqui va un texto demasiado largo   <br>\r\n  <br>\r\npara poder ver el comportamiento de esto', '1.', '1');

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Laboratorio');
INSERT INTO `categorias` VALUES ('2', 'Prueba');

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(255) NOT NULL,
  `correo_cliente` varchar(255) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clientes
-- ----------------------------
INSERT INTO `clientes` VALUES ('1', 'Marco ', 'joungmac4@gmail.com', 'Calle de alla');

-- ----------------------------
-- Table structure for comentarios
-- ----------------------------
DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comentario` varchar(255) NOT NULL,
  `correo_comentario` varchar(255) NOT NULL,
  `fecha_comentario` date NOT NULL,
  `hora_comentario` time NOT NULL,
  `id_blog` int(11) NOT NULL,
  `texto_comentario` varchar(1000) NOT NULL,
  `tipo_usuario` varchar(255) NOT NULL DEFAULT 'usuario',
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comentarios
-- ----------------------------
INSERT INTO `comentarios` VALUES ('1', 'Marco Antonio Medina Ortega', 'joungmac4@gmail.com', '2019-03-19', '13:27:00', '1', 'podrias colocar entrada 2 y otra foto porfis', 'usuario');
INSERT INTO `comentarios` VALUES ('2', 'Marco Ortega', 'joungmac4@gmail.com', '2019-03-19', '13:30:24', '1', 'Claro que si Marco ya la cambie, gracias ', 'admin');

-- ----------------------------
-- Table structure for desc_reservaciones
-- ----------------------------
DROP TABLE IF EXISTS `desc_reservaciones`;
CREATE TABLE `desc_reservaciones` (
  `id_desreservacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) NOT NULL,
  `estatus_desreservacion` varchar(255) NOT NULL,
  `id_reservacion` int(11) NOT NULL,
  `fecha_desreservacion` date NOT NULL,
  `hora_desreservaciones` time NOT NULL,
  PRIMARY KEY (`id_desreservacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of desc_reservaciones
-- ----------------------------
INSERT INTO `desc_reservaciones` VALUES ('1', '1', 'asignada', '1', '2019-04-01', '15:54:39');
INSERT INTO `desc_reservaciones` VALUES ('2', '1', 'asignada', '1', '2019-04-02', '16:03:53');

-- ----------------------------
-- Table structure for reservaciones
-- ----------------------------
DROP TABLE IF EXISTS `reservaciones`;
CREATE TABLE `reservaciones` (
  `id_reservacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `estatus_reservacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reservacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of reservaciones
-- ----------------------------
INSERT INTO `reservaciones` VALUES ('1', '1', 'pendiente');

-- ----------------------------
-- Table structure for servicios
-- ----------------------------
DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(255) NOT NULL,
  `descripcion_servicio` varchar(255) NOT NULL,
  `tiempo_servicio` int(11) NOT NULL,
  `precio_servicio` varchar(255) NOT NULL,
  `espera_servicio` int(11) NOT NULL,
  `id_categoria` varchar(255) NOT NULL,
  `foto_servicio` varchar(255) NOT NULL,
  `categoria_servicio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of servicios
-- ----------------------------
INSERT INTO `servicios` VALUES ('1', 'Biometría Hermáticas', 'Hace algo bueno de algo', '60', '350', '60', '1', '1.png', 'ultrasonido');
INSERT INTO `servicios` VALUES ('2', 'Biometria de otra cosa', 'asdasdasdasdasd', '60', '200', '30', '1', '2.png', 'rayos x');
INSERT INTO `servicios` VALUES ('3', 'Biometría Hermáticas', 'no se que es', '60', '600', '30', '2', '3.jpg', 'Cardiologia');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) NOT NULL,
  `nick_usuario` varchar(255) NOT NULL,
  `pass_usuario` varchar(255) NOT NULL,
  `estatus_usuario` varchar(255) NOT NULL,
  `correo_usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'Marco Ortega', 'admin', 'admin', 'activo', 'joungmac4@gmail.com');
