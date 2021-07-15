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

echo "Installing MariaDB..."
# install mysql-server
sudo dnf install mariadb mariadb-server

# Starting Mariadb
echo "Starting MariaDb..."
sudo service mariadb start
sudo service httpd restart

echo "Installing php..."
# install php
sudo yum -y install php-cli php php-mysql php-pear-MDB2-Driver-mysqli.noarch php-mcrypt php-mbstring php-curl php-xml php-json

echo "Restarting the HTTPD And MARIADB..."
sudo service httpd restart
sudo service mysqld restart

echo "Downloading Repo..."
sudo git clone https://github.com/Muthu-Palaniyappan-OL/gcw.git /var/www/html/gcw
sudo chmod -R 777 /var/www/html
sudo cp -r /var/www/html/gcw/* /var/www/html 
sudo rm -r /var/www/html/gcw

echo "Downloading sql..."
curl -O https://raw.githubusercontent.com/Muthu-Palaniyappan-OL/gcw/main/admin/backup/auto_setup_mysql.sql

echo "Executing sql..."
sudo mysql < ./auto_setup_mysql.sql

# I prefer You to run this command frequently or better add a crontab to automate this process
###############################################################
# php /var/www/html/gcw/admin/php/killAllUnwantedSessions.php #
###############################################################

echo "Website is live: "
echo "Go to $(curl ifconfig.me)"

echo "Scripted Finished Execution."
