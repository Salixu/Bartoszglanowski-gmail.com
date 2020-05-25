SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `consuldb` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
USE `consuldb` ;


CREATE TABLE IF NOT EXISTS `consuldb`.`adminsConstultations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `consultation_start` VARCHAR(256),
  `consultation_end` VARCHAR(256),
  PRIMARY KEY (`id`));

  CREATE TABLE IF NOT EXISTS `consuldb`.`daysOff` (
    `id` INT NOT NULL,
    `consultation_date` VARCHAR(256),
    PRIMARY KEY (`id`));

    CREATE TABLE IF NOT EXISTS `consuldb`.`studentsConsultations` (
      `id` INT NOT NULL,
      `student_name` VARCHAR(256),
      `student_surname` VARCHAR(256),
      `student_mail` VARCHAR(256),
      `subject` VARCHAR(256),
      `status` VARCHAR(256),
      `consultation_date` VARCHAR(256),
      `consultation_start` VARCHAR(256),
      `consultation_end` VARCHAR(256),
      PRIMARY KEY (`id`))


ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
