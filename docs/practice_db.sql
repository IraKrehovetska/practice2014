SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `twm` DEFAULT CHARACTER SET latin1 ;
USE `twm` ;

-- -----------------------------------------------------
-- Table `twm`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `twm`.`roles` ;

CREATE  TABLE IF NOT EXISTS `twm`.`roles` (
  `role_id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`role_id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `twm`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `twm`.`users` ;

CREATE  TABLE IF NOT EXISTS `twm`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `picture` VARCHAR(45) NULL ,
  `google_uid` VARCHAR(45) NULL ,
  `role_id` INT NOT NULL ,
  PRIMARY KEY (`user_id`, `role_id`) ,
  INDEX `fk_users_1_idx` (`role_id` ASC) ,
  CONSTRAINT `fk_users_1`
    FOREIGN KEY (`role_id` )
    REFERENCES `twm`.`roles` (`role_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `twm`.`messages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `twm`.`messages` ;

CREATE  TABLE IF NOT EXISTS `twm`.`messages` (
  `message_id` INT NOT NULL AUTO_INCREMENT ,
  `receiver_id` INT NOT NULL ,
  `sender_id` INT NOT NULL ,
  `text` TEXT NOT NULL ,
  `title` VARCHAR(45) NULL ,
  `datetime` DATETIME NOT NULL ,
  PRIMARY KEY (`message_id`, `receiver_id`, `sender_id`) ,
  INDEX `fk_messages_1_idx` (`receiver_id` ASC) ,
  INDEX `fk_messages_2_idx` (`sender_id` ASC) ,
  CONSTRAINT `fk_messages_1`
    FOREIGN KEY (`receiver_id` )
    REFERENCES `twm`.`users` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_messages_2`
    FOREIGN KEY (`sender_id` )
    REFERENCES `twm`.`users` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `twm`.`travels`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `twm`.`travels` ;

CREATE  TABLE IF NOT EXISTS `twm`.`travels` (
  `travel_id` INT NOT NULL AUTO_INCREMENT ,
  `from` VARCHAR(45) NOT NULL ,
  `to` VARCHAR(45) NOT NULL ,
  `payment` VARCHAR(45) NULL ,
  `no_pets` TINYINT(1) NULL ,
  `no_smoke` TINYINT(1) NULL ,
  `gender` VARCHAR(45) NULL ,
  `date` DATE NOT NULL ,
  `user_id` INT NOT NULL ,
  PRIMARY KEY (`travel_id`, `user_id`) ,
  INDEX `fk_travels_1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_travels_1`
    FOREIGN KEY (`user_id` )
    REFERENCES `twm`.`users` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `twm`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `twm`.`comments` ;

CREATE  TABLE IF NOT EXISTS `twm`.`comments` (
  `comment_id` INT NOT NULL AUTO_INCREMENT ,
  `sender_id` INT NOT NULL ,
  `user_id` INT NOT NULL ,
  `text` TEXT NOT NULL ,
  `datetime` DATETIME NOT NULL ,
  PRIMARY KEY (`comment_id`, `sender_id`, `user_id`) ,
  INDEX `fk_comments_1_idx` (`sender_id` ASC) ,
  INDEX `fk_comments_2_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_comments_1`
    FOREIGN KEY (`sender_id` )
    REFERENCES `twm`.`users` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_2`
    FOREIGN KEY (`user_id` )
    REFERENCES `twm`.`users` (`user_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `twm` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
