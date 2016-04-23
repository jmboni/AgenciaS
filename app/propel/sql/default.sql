
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- categoria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(255) NOT NULL,
    `creado` DATETIME,
    `actualizado` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- trabajos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `trabajos`;

CREATE TABLE `trabajos`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `categoria_id` INTEGER NOT NULL,
    `tipo` VARCHAR(255),
    `compania` VARCHAR(255) NOT NULL,
    `logo` VARCHAR(255),
    `url` VARCHAR(255),
    `posicion` VARCHAR(255) NOT NULL,
    `localidad` VARCHAR(255) NOT NULL,
    `descripcion` TEXT NOT NULL,
    `how_to_apply` TEXT NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `publico` TINYINT(1) DEFAULT 1 NOT NULL,
    `activado` TINYINT(1) DEFAULT 0 NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `finaliza` DATETIME,
    `creado` DATETIME,
    `actualizado` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `trabajos_fi_2d35a9` (`categoria_id`),
    CONSTRAINT `trabajos_fk_2d35a9`
        FOREIGN KEY (`categoria_id`)
        REFERENCES `categoria` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- afiliados
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `afiliados`;

CREATE TABLE `afiliados`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `url` VARCHAR(255),
    `email` VARCHAR(255) NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `activado` TINYINT(1) DEFAULT 0 NOT NULL,
    `creado` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- categoria_afiliado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categoria_afiliado`;

CREATE TABLE `categoria_afiliado`
(
    `categoria_id` INTEGER NOT NULL,
    `afiliado_id` INTEGER NOT NULL,
    PRIMARY KEY (`categoria_id`,`afiliado_id`),
    INDEX `categoria_afiliado_fi_a3a960` (`afiliado_id`),
    CONSTRAINT `categoria_afiliado_fk_2d35a9`
        FOREIGN KEY (`categoria_id`)
        REFERENCES `categoria` (`id`),
    CONSTRAINT `categoria_afiliado_fk_a3a960`
        FOREIGN KEY (`afiliado_id`)
        REFERENCES `afiliados` (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
