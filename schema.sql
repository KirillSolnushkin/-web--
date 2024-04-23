CREATE DATABASE IF NOT EXISTS MySiteDB;

USE MySiteDB;

CREATE TABLE IF NOT EXISTS Notes (
  Id INT(11) AUTO_INCREMENT PRIMARY KEY,
  Created DATE,
  Title VARCHAR(50),
  Article VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Comments (
  Id INT(11) AUTO_INCREMENT PRIMARY KEY,
  Created DATE,
  Author VARCHAR(50),
  Comment VARCHAR(255),
  Art_Id INT(11),
  FOREIGN KEY (Art_Id) REFERENCES Notes(Id) ON DELETE CASCADE
);