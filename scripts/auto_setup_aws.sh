#!/bin/bash

############################################################################
#    THIS IS SUPPOSED TO BE USED IN AMAZON LINUX IMAGE IN AWS SERVERS      #
# FOR ANY OTHER LINUX DISTRO CHANGE YUM TO YOUR PARTICULAR PACKAGE MANAGER #
#           UPDATE COMMAND TO YOUR PACKAGE MANAGER'S UPDATE COMMAND        #
#                       THIS SCRIPT REQUIRES SUDO POWER                    #
############################################################################

echo "Updating your repo..."
# Updating your Reporsitory
sudo yum -y update

# installing GIT
echo "Installing git..."
sudo yum -y install git

echo "installing webserver..."
# Install httpd webserver
sudo yum -y install httpd

# Starting httpd
echo "Starting httpd..."
sudo service httpd start

echo "Installing Mysql..."
# install mysql-server
sudo yum -y install mysql-server mysql 

# Starting MySQL
echo "Starting Mysql..."
sudo service mysqld start
sudo service httpd restart

echo "Installing php..."
# install php
sudo yum -y install php-cli php php-mysql php-pear-MDB2-Driver-mysqli.noarch php-mcrypt php-mbstring php-curl php-xml php-pear php-json

echo "Restarting the Apache2 And MySQL..."
sudo service httpd restart
sudo service mysqld restart

echo "Downloading Repo..."
sudo git clone https://github.com/Muthu-Palaniyappan-OL/gcw.git /var/www/html/gcw
sudo chmod -R 777 /var/www/html
sudo cp -r /var/www/html/gcw /var/www/html 
sudo rm -r /var/www/html/gcw

echo "Downloading sql..."
curl -O https://github.com/Muthu-Palaniyappan-OL/gcw/blob/main/admin/backup/auto_setup_mysql.sql

echo "Executing sql..."
sudo mysql < https://github.com/Muthu-Palaniyappan-OL/gcw/blob/main/admin/backup/auto_setup_mysql.sql

# I prefer You to run this command frequently or better add a crontab to automate this process
###############################################################
# php /var/www/html/gcw/admin/php/killAllUnwantedSessions.php #
###############################################################

echo "Website is live: "
echo "Go to $(curl ifconfig.me)/gcw"

echo "Scripted Finished Execution."