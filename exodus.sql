CREATE TABLE IF NOT EXISTS `exodus` (
  `id` INT NOT NULL,
  `operation_number` VARCHAR(45) NOT NULL,
  `operation_amount` VARCHAR(45) NOT NULL,
  `operation_datetime` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL)
ENGINE = InnoDB