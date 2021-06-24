### Table of contents
* [About](#general-info)
* [Problem Project Solves](#problemItSolves)
* [Technologies](#technologies)
* [Setup](#setup)

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

Run these in your shell in ubuntu based OS:
You dont need to install these if have these:

```
$ sudo apt install apache2
$ sudo apt install mysl-server
$ mysql_secure_instalation
$ sudo apt install php php-mysql
```

before running the website have these SQL queries executed.

```
CREATE DATABASE gcw_db;
CREATE TABLE newsletter_subscribers(email VARCHAR(20), PRIMARY KEY (email));
``` 
