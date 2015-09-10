-- MySQL Script generated by MySQL Workbench
-- 09/08/15 11:43:27
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema m108_twiter
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema m108_twiter
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `m108_twiter` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `m108_twiter` ;

-- -----------------------------------------------------
-- Table `m108_twiter`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `m108_twiter`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellidos` VARCHAR(45) NULL,
  `nacimiento` DATE NULL,
  `email` VARCHAR(45) NULL,
  `password` TINYTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m108_twiter`.`tweets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `m108_twiter`.`tweets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tweet` TINYTEXT NULL,
  `fecha` DATETIME NULL,
  `id_usuarios` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tweets_usuarios_idx` (`id_usuarios` ASC),
  CONSTRAINT `fk_tweets_usuarios`
    FOREIGN KEY (`id_usuarios`)
    REFERENCES `m108_twiter`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m108_twiter`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `m108_twiter`.`categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `m108_twiter`.`tweets_categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `m108_twiter`.`tweets_categorias` (
  `id_tweets` INT NOT NULL,
  `id_categorias` INT NOT NULL,
  PRIMARY KEY (`id_tweets`, `id_categorias`),
  INDEX `fk_tweets_has_categorias_categorias1_idx` (`id_categorias` ASC),
  INDEX `fk_tweets_has_categorias_tweets1_idx` (`id_tweets` ASC),
  CONSTRAINT `fk_tweets_has_categorias_tweets1`
    FOREIGN KEY (`id_tweets`)
    REFERENCES `m108_twiter`.`tweets` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tweets_has_categorias_categorias1`
    FOREIGN KEY (`id_categorias`)
    REFERENCES `m108_twiter`.`categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;