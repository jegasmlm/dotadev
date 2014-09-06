SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `dotadev`.`heroes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`heroes` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `role_id` INT NOT NULL ,
  `group_id` INT NOT NULL ,
  `image` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`roles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`roles` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`users` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `login` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`groups`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`groups` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`strategies`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`strategies` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `modified` DATETIME NULL ,
  `created` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`strategies_roles`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`strategies_roles` (
  `id` INT NOT NULL ,
  `role_id` INT NOT NULL ,
  `strategy_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`users_heroes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`users_heroes` (
  `id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `hero_id` VARCHAR(45) NOT NULL ,
  `experience` INT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dotadev`.`heroes_counters`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dotadev`.`heroes_counters` (
  `id` INT NOT NULL ,
  `hero_id` INT NOT NULL ,
  `counter_id` INT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
