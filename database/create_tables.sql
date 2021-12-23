DROP DATABASE IF EXISTS aratos_project;
CREATE DATABASE IF NOT EXISTS aratos_project;

USE aratos_project;

DROP TABLE IF EXISTS teachers;
CREATE TABLE teachers (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS students;
CREATE TABLE students(
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    fathername VARCHAR(255) NOT NULL,
    grade FLOAT(4) NOT NULL,
    mobilenumber VARCHAR(25) NOT NULL,
    birthday DATE NOT NULL,
    PRIMARY KEY(id)
);

SELECT * FROM teachers;
SELECT * FROM students;

INSERT INTO teachers (id, name, surname, username, password, email)
VALUES (null, 'Andreas', 'Andreou', 'AndAnd1', 'Andreas25@', 'andreas@gmail.com'),
		(null, 'George', 'Georgiou', 'GeoGeo1', 'George25@', 'george@gmail.com'),
		(null, 'Maria', 'Papa', 'MarMar1', 'Maria25@', 'maria@gmail.com');