/*CREATING A DB*/
CREATE DATABASE gcw_db;

/*USING THE SAME DB*/
USE gcw_db;

/*CREATE A TABLE TO HANDLE NEWSLETTERS*/
CREATE TABLE newsletter_subscribers(email VARCHAR(20), PRIMARY KEY (email));

/*UNCOMMENT THIS BLOCK OF CODE WHILE DEBUGGING*/
/*
INSERT INTO newsletter_subscribers VALUES
('test@gmail.com'),
('test1@gmail.com'),
('test2@gmail.com'),
('test3@gmail.com'),
('muthu@gmail.com'),
('muthu@muthu.com'),
('muthu@domain.com'),
('pencil@pencil.com'),
('mouse@mouse.com'),
('peppermint@peppermint.com'),
('helloworld@helloworld.com'),
('test@gmail.com');
*/

/*CREATING A TABLE FOR MAINTAINING THE VISITORS COUNT*/
CREATE TABLE `gcw_db`.`visitor_count` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `page` VARCHAR(15) NOT NULL , `visit_count` INT(255) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*Active Users*/
CREATE TABLE activeUser(session VARCHAR(30), time TIME, ipaddr VARCHAR(25), PRIMARY KEY (session));

CREATE TABLE Htmldata(name VARCHAR(20), txt VARCHAR(1000), PRIMARY KEY (name));

INSERT INTO Htmldata VALUES
("abtUs","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo"),
("hist","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("found","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("etc","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.");