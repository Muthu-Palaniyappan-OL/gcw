### Table of contents
* [About](#general-info)
* [Problem Project Solves](#problem-it-solves)
* [Technologies](#technologies)
* [Setup](#setup)
* [Get in touch with creator](#contact)

## General info
This is a website and needed technological solution for any generic corporate company.

## Problem It Solves
Any company which goes for IPO needs a basic website as staturatory compliant.
Assume a normal steel plant goes for IPO it needs to spend some money on building the website and building websites this way will make company be dependant on other companies for its website.
Using web designer makes the website not that much flexible for future needs.
 
## Technologies
Project is created with:
* HTML5
* CSS3
* Java Script
* PHP 7.4.3
* MySQL 8.0.25
	
## Setup
To run this project, You need LAMP(Apache, MySQL, PHP) Webserver:

 - To Install Necessary Softwares run these in your shell in Ubuntu/Ubuntu-based OS to install Apache2, MySQL, PHP:

 ```
 $ sudo apt install apache2
 $ sudo apt install mysl-server
 $ mysql_secure_installation
 $ sudo apt install php php-mysql
 ```
 
 - Clone this repositary in /var/www/html directory using the below command.
 
 ```
 git clone https://github.com/Muthu-Palaniyappan-OL/gcw.git
 ```
 
 - Run these SQL queries.

 ```
 CREATE DATABASE gcw_db;
 CREATE TABLE newsletter_subscribers(email VARCHAR(20), PRIMARY KEY (email));
 ```

 - Goto to URl [localhost/gcw](localhost/gcw) via your browser to see your website.

## Contact
For more information and suggestions contact [Muthu Palaniyappan OL](mailto:muthu892542@gmail.com).
