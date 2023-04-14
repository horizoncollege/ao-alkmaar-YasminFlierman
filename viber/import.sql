DROP DATABASE IF EXISTS viber;
CREATE DATABASE viber;
USE viber;
CREATE TABLE products (
    productID int(13) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    type varchar(255) NOT NULL,
    productName varchar(100) NOT NULL,
    productDesc varchar(500) NOT NULL,
    productVoorraad int(13) NOT NULL,
    price FLOAT NOT NULL,
    maat varchar(255) NOT NULL,
    imgDir varchar(255) NOT NULL
    );

CREATE TABLE users (
    userID int(13) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(50) NOT NULL,
    email varchar(255) NOT NULL,
    geslacht varchar(255) NOT NULL,
    telefoonnummer int(13) NOT NULL,
    style varchar(255),
    shirtMaat varchar(5) NOT NULL,
    truiMaat varchar(5) NOT NULL,
    broekMaat varchar(5) NOT NULL,
    schoenMaat int(3) NOT NULL,
    bhMaat varchar(255)
    );