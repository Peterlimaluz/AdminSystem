SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `calendario`
-- ----------------------------
DROP TABLE IF EXISTS `calendario`;
CREATE TABLE `calendario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codusuario` int(11) NOT NULL DEFAULT '0',
  `dia` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `mes` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ano` varchar(4) COLLATE utf8_bin NOT NULL DEFAULT '',
  `assunto` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `categoria` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT '',
  `local` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `descricao` blob NOT NULL,
  `dh_inclusao` datetime DEFAULT NULL,
  `dh_ult_alteracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of calendario
-- ----------------------------
INSERT INTO `calendario` VALUES ('2', '1', '15', '05', '2016', 'aasas', '3', 'ssss', 0x737373, '2016-05-15 16:38:28', '2016-05-15 16:38:51');

-- ----------------------------
-- Table structure for `noticias`
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dh_inclusao` datetime DEFAULT NULL,
  `noticia` blob,
  `codusuario` int(11) DEFAULT NULL,
  `ativo` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', '2016-05-15 16:21:11', 0x73617361736173, '1', 'S');
INSERT INTO `noticias` VALUES ('2', '2016-05-15 16:29:44', 0x5465737465206465206E6F7469636961730D0A, '1', 'S');

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nome` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `dh_inclusao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'regisrmp', 'Regis Rafael Martins Pedreira', '2016-05-15 16:21:58');
