-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema demo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema demo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `demo` ;

-- -----------------------------------------------------
-- Table `demo`.`jobs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demo`.`jobs` (
  `job_id` INT NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `description` LONGTEXT NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `location` VARCHAR(45) NOT NULL,
  `duration` INT NOT NULL,
  `telephone` INT NOT NULL,
  PRIMARY KEY (`job_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `demo`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demo`.`users` (
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `password_confirm` VARCHAR(45) NULL DEFAULT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `surname` VARCHAR(45) NULL DEFAULT NULL,
  `fathername` VARCHAR(45) NULL DEFAULT NULL,
  `mothername` VARCHAR(45) NULL DEFAULT NULL,
  `birthdate` DATE NULL DEFAULT NULL,
  `amka` VARCHAR(45) NULL DEFAULT NULL,
  `afm` VARCHAR(45) NULL DEFAULT NULL,
  `phone` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`email`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `demo`.`offers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demo`.`offers` (
  `id` INT NOT NULL,
  `anal_bathmologia` BLOB NOT NULL,
  `CV` BLOB NOT NULL,
  `description` LONGTEXT NOT NULL,
  `users_email` VARCHAR(45) NOT NULL,
  `jobs_job_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_offers_users1_idx` (`users_email` ASC) VISIBLE,
  INDEX `fk_offers_jobs1_idx` (`jobs_job_id` ASC) VISIBLE,
  CONSTRAINT `fk_offers_users1`
    FOREIGN KEY (`users_email`)
    REFERENCES `demo`.`users` (`email`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_offers_jobs1`
    FOREIGN KEY (`jobs_job_id`)
    REFERENCES `demo`.`jobs` (`job_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `demo`.`employer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `demo`.`employer` (
  `email` VARCHAR(45) NOT NULL,
  `AFM` INT NULL,
  `telephnoe` INT NULL,
  `DOY` VARCHAR(45) NULL,
  `password` INT NULL,
  `company_name` VARCHAR(45) NOT NULL,
  `country` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `T.K.` INT NULL,
  PRIMARY KEY (`email`, `company_name`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
