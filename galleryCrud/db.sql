CREATE DATABASE CSV_DB;
USE CSV_DB;
CREATE TABLE IMAGECRUD (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(30) NOT NULL,
  DESCRIPTION VARCHAR(60) NOT NULL,
  IMAGE VARCHAR(255) NOT NULL
);