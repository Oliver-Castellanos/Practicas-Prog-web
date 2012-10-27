SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT ,
  `nickname_user` VARCHAR(45) NOT NULL ,
  `tipo_user` VARCHAR(45) NOT NULL ,
  `user_id_user` INT NOT NULL ,
  `concurso_id_con` INT NOT NULL ,
  PRIMARY KEY (`id_user`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`concurso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`concurso` (
  `id_con` INT NOT NULL AUTO_INCREMENT ,
  `nombre_con` VARCHAR(45) NOT NULL ,
  `hashtag_con` VARCHAR(20) NOT NULL ,
  `categoria_con` VARCHAR(30) NOT NULL ,
  `dificultad_con` VARCHAR(10) NOT NULL ,
  `imagenes_con` VARCHAR(45) NULL ,
  `user_id_user` INT NOT NULL ,
  PRIMARY KEY (`id_con`) ,
  INDEX `fk_concurso_user_idx` (`user_id_user` ASC) ,
  CONSTRAINT `fk_concurso_user`
    FOREIGN KEY (`user_id_user` )
    REFERENCES `mydb`.`user` (`id_user` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
