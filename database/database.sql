CREATE DATABASE manager_users_tutorial;

USE manager_users_tutorial;

CREATE TABLE users(
   id int(11) AUTO_INCREMENT not null,
   names varchar(100) not null,
   lastnames varchar(100) not null,
   country varchar(100) not null,
   email varchar(255) not null,
   birthday date not null,
   password varchar(255) not null,

   CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

