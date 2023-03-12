CREATE DATABASE APPLY;
USE APPLY;

CREATE TABLE `APPOINTMENT` ( 
    `FIRSTNAME` VARCHAR(30) NOT NULL , 
    `INITIAL` VARCHAR(2) NULL DEFAULT NULL , 
    `LASTNAME` VARCHAR(60) NOT NULL , 
    `EMAIL` VARCHAR(256) NOT NULL ,
    PRIMARY KEY(`EMAIL`), 
    `SERVICE` VARCHAR(10) NOT NULL , 
    `PHONE` VARCHAR(14) NOT NULL , 
    `ADDRESS1` VARCHAR(50) NOT NULL , 
    `ADDRESS2` VARCHAR(50) NOT NULL , 
    `APARTMENT` VARCHAR(10) NULL DEFAULT NULL , 
    `CITY` VARCHAR(20) NOT NULL , 
    `COUNTRY` VARCHAR(20) NOT NULL , 
    `STATE` VARCHAR(20) NULL DEFAULT NULL , 
    `ZIP` VARCHAR(8) NOT NULL , 
    `SUBJECT` VARCHAR(30) NOT NULL , 
    `DESCRIPTION` VARCHAR(250) NOT NULL , 
    `FILE1` LONGBLOB NULL DEFAULT NULL , 
    `FILE2` LONGBLOB NULL DEFAULT NULL);

CREATE TABLE `CONTACT` ( 
    `FIRSTNAME` VARCHAR(30) NOT NULL , 
    `INITIAL` VARCHAR(2) NULL DEFAULT NULL , 
    `LASTNAME` VARCHAR(60) NOT NULL , 
    `EMAIL` VARCHAR(256) NOT NULL ,
    PRIMARY KEY (`EMAIL`), 
    `PHONE` VARCHAR(14) NOT NULL , 
    `ADDRESS1` VARCHAR(50) NOT NULL , 
    `ADDRESS2` VARCHAR(50) NOT NULL , 
    `APARTMENT` VARCHAR(10) NULL DEFAULT NULL , 
    `CITY` VARCHAR(20) NOT NULL , 
    `COUNTRY` VARCHAR(20) NOT NULL , 
    `STATE` VARCHAR(20) NULL DEFAULT NULL , 
    `ZIP` VARCHAR(8) NOT NULL , 
    `HOW` VARCHAR(60) NOT NULL , 
    `INFO` VARCHAR(250) NOT NULL);

COMMIT;