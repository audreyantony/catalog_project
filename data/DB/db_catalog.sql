-- MySQL Workbench Synchronization
-- Generated: 2020-10-09 12:06
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: audrey.antony

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `catalog_project` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `catalog_project`.`user` (
  `id_user` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_user` VARCHAR(60) NOT NULL,
  `pwd_user` VARCHAR(255) NOT NULL,
  `mail_user` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE INDEX `name_user_UNIQUE` (`name_user` ASC) VISIBLE,
  UNIQUE INDEX `mail_user_UNIQUE` (`mail_user` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`product` (
  `id_product` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_product` VARCHAR(100) NOT NULL,
  `description_product` TINYTEXT NOT NULL,
  `price_product` DECIMAL(7,2) NOT NULL,
  `discount_product` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `promoted_product` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `instock_product` TINYINT(3) UNSIGNED NULL DEFAULT NULL,
  `id_category_product` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_product`, `id_category_product`),
  UNIQUE INDEX `name_product_UNIQUE` (`name_product` ASC) VISIBLE,
  INDEX `fk_product_category_idx` (`id_category_product` ASC) VISIBLE,
  CONSTRAINT `fk_product_category`
    FOREIGN KEY (`id_category_product`)
    REFERENCES `catalog_project`.`category` (`id_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`img` (
  `id_img` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_img` VARCHAR(60) NOT NULL,
  `alt_img` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id_img`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`shop` (
  `id_shop` INT(11) NOT NULL,
  `name_shop` VARCHAR(40) NOT NULL,
  `localisation_shop` VARCHAR(80) NOT NULL,
  `description_shop` TINYTEXT NOT NULL,
  PRIMARY KEY (`id_shop`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`category` (
  `id_category` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_category` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_category`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`product_has_img` (
  `product_id_product_has_img` INT(10) UNSIGNED NOT NULL,
  `img_id_product_has_img` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`product_id_product_has_img`, `img_id_product_has_img`),
  INDEX `fk_product_has_img_img1_idx` (`img_id_product_has_img` ASC) VISIBLE,
  INDEX `fk_product_has_img_product1_idx` (`product_id_product_has_img` ASC) VISIBLE,
  CONSTRAINT `fk_product_has_img_product1`
    FOREIGN KEY (`product_id_product_has_img`)
    REFERENCES `catalog_project`.`product` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_has_img_img1`
    FOREIGN KEY (`img_id_product_has_img`)
    REFERENCES `catalog_project`.`img` (`id_img`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
