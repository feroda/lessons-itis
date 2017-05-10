CREATE DATABASE db_esercitazione;
USE db_esercitazione;

GRANT ALL PRIVILEGES ON db_esercitazione.* TO 'prof'@'localhost' IDENTIFIED by 'prof';
GRANT ALL PRIVILEGES ON db_esercitazione.* TO 'prof'@'%' IDENTIFIED BY 'prof';

CREATE TABLE persone (
  id INT(12) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(64) NOT NULL,
  surname VARCHAR(64) NOT NULL,
  comment VARCHAR(512) NOT NULL,
  colors VARCHAR(64) NOT NULL,
  username VARCHAR(64) NOT NULL
);
