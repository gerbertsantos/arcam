-- -----------------------------------------------------
-- Table `marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_marca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `veiculo` (
  `id_veiculo` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `id_marca` INT NOT NULL,
  PRIMARY KEY (`id_veiculo`, `id_marca`),
  INDEX `fk_veiculo_marca_idx` (`id_marca` ASC),
  CONSTRAINT `fk_veiculo_marca`
    FOREIGN KEY (`id_marca`)
    REFERENCES `marca` (`id_marca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

INSERT INTO `marca` (`id_marca`, `nome`) VALUES (1, 'BMW');
INSERT INTO `marca` (`id_marca`, `nome`) VALUES (2, 'PORSCHE');
INSERT INTO `marca` (`id_marca`, `nome`) VALUES (3, 'HONDA');