DROP DATABASE IF EXISTS conjuguer_calc_project;

CREATE DATABASE conjuguer_calc_project;

USE conjuguer_calc_project;

CREATE TABLE utilisateurs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(30) UNIQUE,
  name VARCHAR(30),
  password VARCHAR(256)
)

CREATE TABLE histo_conjug (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  verbe VARCHAR(30),
  temps VARCHAR(30),
  FOREIGN KEY (userId) REFERENCES utilisateurs(id)
)

CREATE TABLE histo_calc (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  valeur1 INT,
  operateur VARCHAR(1),
  valeur2 INT,
  FOREIGN KEY (userId) REFERENCES utilisateurs(id)
)

DROP TABLE utilisateurs, histo_calc, histo_conjug;