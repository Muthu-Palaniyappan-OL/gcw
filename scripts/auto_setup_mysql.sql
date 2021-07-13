/*Create User muthu*/
CREATE USER 'muthu'@'localhost' IDENTIFIED BY 'muthumuthu';

/*Giving privileges to muthu*/
GRANT ALL PRIVILEGES ON * . * TO 'muthu'@'localhost';

/*CREATING A DB*/
CREATE DATABASE gcw_db;

/*USING THE SAME DB*/
USE gcw_db;

/*CREATE A TABLE TO HANDLE NEWSLETTERS*/
CREATE TABLE newsletter_subscribers(email VARCHAR(40), PRIMARY KEY (email));

/*Inserting Dummy NewsLetter SubScribers*/
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
('helloworld@helloworld.com');

/*CREATING A TABLE FOR MAINTAINING THE VISITORS COUNT*/
CREATE TABLE `gcw_db`.`visitor_count` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `page` VARCHAR(15) NOT NULL , `visit_count` INT(255) NOT NULL , `date` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*Active Users*/
CREATE TABLE activeUser(session VARCHAR(30), time TIME, ipaddr VARCHAR(25), PRIMARY KEY (session));

/*Html Paragraphs Information*/
CREATE TABLE Htmldata(name VARCHAR(20), txt VARCHAR(1000), PRIMARY KEY (name));

/*Filling The Html Paragraph Info*/
INSERT INTO Htmldata VALUES
("abtUs","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo"),
("hist","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("found","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("etc","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("product1","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("product2","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("product3","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo."),
("invInfo","Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et voluptatibus aperiam soluta explicabo.");

/*For Announcements*/
CREATE TABLE `gcw_db`.`media` ( `id` INT(15) NOT NULL AUTO_INCREMENT , `title` VARCHAR(50) NOT NULL , `meta` VARCHAR(25) NOT NULL , `text` VARCHAR(1000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*Making Simple Announcements*/
INSERT INTO `media` VALUES
(1,"Anncouncement Title 1", "2020 11 50" , "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et "),
(2,"Anncouncement Title 2", "2020 11 51" , "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et "),
(3,"Anncouncement Title 3", "2020 11 52" , "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis totam libero aliquam minus amet excepturi deleniti asperiores! Deserunt blanditiis repellendus, sit repudiandae vero quo et ");

/*For Contact Us Forms*/
CREATE TABLE `gcw_db`.`contactUsInfo` ( `name` VARCHAR(30) NOT NULL , `email` VARCHAR(40) NOT NULL , `message` VARCHAR(1000) NOT NULL , PRIMARY KEY (`email`)) ENGINE = InnoDB;\

/*For Creating Jobs*/
CREATE TABLE `gcw_db`.`jobs` ( `title` VARCHAR(50) NOT NULL , `discription` VARCHAR(1000) NOT NULL , `id` INT(10) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id`)) ENGINE = InnoDB;

/*For Job Applications by user*/
CREATE TABLE `gcw_db`.`jobApplications` ( `First_Name` VARCHAR(30) NOT NULL , `Last_Name` VARCHAR(30) NOT NULL , `Email_Address` VARCHAR(50) NOT NULL , `Portfolio` VARCHAR(30) NOT NULL , `Position` VARCHAR(30) NOT NULL , `Salary` INT(10) NOT NULL , `StartDate` VARCHAR(30) NOT NULL , `Phone` BIGINT(255) NOT NULL , `Fax` VARCHAR(15) NOT NULL , `Relocate` VARCHAR(30) NOT NULL , `Organization` VARCHAR(40) NOT NULL , `Reference` VARCHAR(100) NOT NULL, PRIMARY KEY (Email_Address)) ENGINE = InnoDB;
