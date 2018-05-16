DROP DATABASE IF EXISTS finaldb;

CREATE DATABASE finaldb;

USE finaldb;

GRANT ALL PRIVILEGES ON *.* TO 'webphp'@'localhost' IDENTIFIED BY 'password';

CREATE TABLE auth
(
   userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username varchar(60),
   password varchar(60),
   firstName varchar(60),
   lastName varchar(60),
   email varchar(60),
   phone varchar(60)
);


INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('lonestar1','MayThSchtzBeWithU','Lone','Star','lonestar1@schwartzmail.com','2173550320');
INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('KRoland','12345','King','Roland','palace@druidia.pl','8003784342');
INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('PrezScroobLuggage','12345','President','Scroob','scroob@spaceballs.ge','8005882300');