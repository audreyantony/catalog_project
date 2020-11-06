-- MySQL Workbench Synchronization
-- Generated: 2020-11-06 15:47
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Audrey

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `catalog_project` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `catalog_project`.`product` (
  `id_product` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_product` VARCHAR(100) NOT NULL,
  `description_product` TINYTEXT NOT NULL,
  `price_product` DECIMAL(7,2) NOT NULL,
  `discount_product` TINYINT(3) UNSIGNED NOT NULL,
  `discount_start_date_product` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `discount_end_date_product` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `promoted_product` TINYINT(3) NULL DEFAULT NULL,
  `instock_product` TINYINT(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id_product`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`category` (
  `id_category` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_category` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_category`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`img` (
  `id_img` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_img` VARCHAR(60) NOT NULL,
  `alt_img` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id_img`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`product_has_category` (
  `product_id_product` INT(10) UNSIGNED NOT NULL,
  `category_id_category` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`product_id_product`, `category_id_category`),
  INDEX `fk_product_has_category_category1_idx` (`category_id_category` ASC),
  INDEX `fk_product_has_category_product_idx` (`product_id_product` ASC),
  CONSTRAINT `fk_product_has_category_product`
    FOREIGN KEY (`product_id_product`)
    REFERENCES `catalog_project`.`product` (`id_product`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_has_category_category1`
    FOREIGN KEY (`category_id_category`)
    REFERENCES `catalog_project`.`category` (`id_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`product_has_img` (
  `product_id_product_has_img` INT(10) UNSIGNED NOT NULL,
  `img_id_product_has_img` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`product_id_product_has_img`, `img_id_product_has_img`),
  INDEX `fk_product_has_img_img1_idx` (`img_id_product_has_img` ASC),
  INDEX `fk_product_has_img_product1_idx` (`product_id_product_has_img` ASC),
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

CREATE TABLE IF NOT EXISTS `catalog_project`.`shop` (
  `id_shop` INT(11) UNSIGNED NOT NULL,
  `name_shop` VARCHAR(40) NOT NULL,
  `lat_shop` VARCHAR(25) NOT NULL,
  `long_shop` VARCHAR(25) NOT NULL,
  `street_shop` VARCHAR(180) NOT NULL,
  `post_code_shop` VARCHAR(5) NOT NULL,
  `city_shop` VARCHAR(60) NOT NULL,
  `description_shop` TINYTEXT NOT NULL,
  PRIMARY KEY (`id_shop`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `catalog_project`.`user` (
  `id_user` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_user` VARCHAR(60) NOT NULL,
  `pwd_user` VARCHAR(255) NOT NULL,
  `mail_user` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`id_user`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;