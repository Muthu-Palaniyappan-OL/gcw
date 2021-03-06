### Table of contents
* [General Info](#general-info)
* [Features](#features)
* [Problem Project Solves](#problem-it-solves)
* [Technologies](#technologies)
* [Setup](#setup)
* [Deploying in AWS Amazon Linux](#deploying-in-aWS-amazon-linux)
* [Get In Touch With Creator](#contact)

## General info
This is a website and also needed technological solution for many generic corporate company who needs quick and fast website and customisable website and this project makes the company not depended on any other company for designing/maintaining the website. This project also includes a shell script which is a automated script to set up the website automatically in a AWS Instance in seconds. A corporate company can host a website under a minute(*Including creating a AWS account and starting an instance*). This website also packs features such that a person who doesn't know any programming language can edit and maintain the website. This website also protects the company for common attacks like SQL Injections.

## Features
* Superfast and simple procedure to setup the website in AWS/Azure/Any cloud service provider (Automated Shell Script).
* Protection From SQL Injection Attacks (Enhanced Security).
* Edit website pages without knowing any programming language (From Admin Page).
* Create Job and make announcements without knowing any programming language (From Admin Page).
* Receive Job applications from candidates and receive contact us form in admin page.
* Superfast and easy backup solution. Back up your data in 10 seconds. (Automated Shell Script to download the Export the Whole Database).
* Makes your company not depended on any other company for maintaining your stakeholders data.
* Create your website in seconds when you host it on AWS(Amazon Linux Image) or Some Linux Distro.

## Problem It Solves
Any company which goes for IPO needs a basic website (Which is a statutory compliant in many country).
Assume a normal steel plant goes for IPO it needs to spend some money on building the website and building websites using web designer or outsourcing it to any other company will make steel company be dependant stakeholders data may not be secure in other companies hands.
Using web designer makes the website not much flexible for future needs. So using the source code from this project can be the best solution to build fast scalable website for company which needs it fast.

## Technologies
Project is created with:
* HTML5
* CSS3
* Java Script
* PHP 7.4.3
* MySQL 8.0.25 (Even Works With MariaDB)
	
## Setup

**For Fedora/Fedora Derivates/Cent OS**

```
curl https://raw.githubusercontent.com/Muthu-Palaniyappan-OL/gcw/main/scripts/auto_setup.sh | sudo bash
```

**For Ubuntu/Ubuntu Derivatives**

```
curl https://raw.githubusercontent.com/Muthu-Palaniyappan-OL/gcw/main/scripts/auto_setup_ubuntu.sh | sudo bash
```

## Deploying in AWS Amazon Linux

if you want to depoly this website in AWS/Azure/Any Cloud Service provider. Execute this command in CLI of your server.

```
curl https://raw.githubusercontent.com/Muthu-Palaniyappan-OL/gcw/main/scripts/auto_setup_aws.sh | sudo bash
```

*Remember You Need root Privileges To Do This. Before Installing And Running This script Take a look at the [script](scripts/auto_setup.sh)*

After Succesful Execution of above script execute the following commands to create a **default user in mysql** (*You need to be root for this*)

```
sudo mysql
CREATE USER 'gcw'@'localhost' IDENTIFIED BY 'gcw';
GRANT ALL PRIVILEGES ON * . * TO 'gcw'@'localhost';
exit;
```

*Here i create gcw user by default. you can create your own user if you want but you have to change in the password and username which you create here [common/databaseConnect.php](common/databaseConnect.php), I recommend you to do so.*

I strongly recommend you to **change default password** in [adminpage](admin/login.php) so that you website is safe.


**IT WAS SUCCESSFULLY DEPLOYED IN AWS (IN AMAZON LINUX IMAGE)**
![Home Page](https://github.com/Muthu-Palaniyappan-OL/gcw/blob/main/assets/img/img1.jpg)

## Important Note

I prefer you to Run 

```
php /var/www/html/admin/php/killAllUnwantedSessions.php
```
command frequently so that everything is clean or add a crontab for automating this

if your picking to use crontab add
```
*/10 * * * * php /var/www/html/admin/php/killAllUnwantedSessions.php
*/10 * * * * rm /var/lib/php/sessions/*
```
this to your crontab

You can enable .htaccess if you want in apache2 configuration.

For Taking BackUp, Follow Instructions in Admin Page's Back Section.

## Contact

For more information and suggestions contact [Muthu Palaniyappan OL](mailto:muthu892542@gmail.com).
