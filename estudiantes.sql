--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--
CREATE TABLE IF NOT EXISTS `estudiantes`.`estudiante` ( 
  `id` INT NOT NULL AUTO_INCREMENT , 
  `nombre` VARCHAR(255) NULL DEFAULT NULL , 
  `identificacion` VARCHAR(255) NULL DEFAULT NULL , 
  `curso` VARCHAR(255) NULL DEFAULT NULL , 
  PRIMARY KEY (`id`)
) ENGINE = InnoDB; 