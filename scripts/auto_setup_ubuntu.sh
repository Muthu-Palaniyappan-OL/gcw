#!/bin/bash

############################################################################
#             THIS WORKS ONLY FOR FEDORA BASED LINUX DISTRO                #
# FOR ANY OTHER LINUX DISTRO CHANGE YUM TO YOUR PARTICULAR PACKAGE MANAGER #
#           UPDATE COMMAND TO YOUR PACKAGE MANAGER'S UPDATE COMMAND        #
#                       THIS SCRIPT REQUIRES SUDO POWER                    #
############################################################################

echo "Updating your repo..."
# Updating your Reporsitory
sudo apt update -y

# installing GIT
echo "Installing git..."
sudo apt install git -y

echo "installing webserver..."
# Install httpd webserver
sudo apt install apache2 -y

# Starting httpd
echo "Starting httpd..."
sudo service apache2 start

echo "Installing Mysql..."
# install mysql-server
sudo apt install mysql-server mysql -y 

# Starting MySQL
echo "Starting Mysql..."
sudo service mysql start
sudo service apache2 restart

echo "Installing php..."
# install php
sudo apt install php-cli php php-mysql php-pear-MDB2-Driver-mysqli.noarch php-mcrypt php-mbstring php-curl php-xml php-pear php-bcmath php-json -y

echo "Restarting the Apache2 And MySQL..."
sudo service apache2 restart
sudo service mysql restart

echo "Downloading Repo..."
sudo git clone https://github.com/Muthu-Palaniyappan-OL/gcw.git /var/www/html

echo "Downloading sql..."
curl -O https://github.com/Muthu-Palaniyappan-OL/gcw/blob/main/scripts/auto_setup_mysql.sql

echo "Executing sql..."
sudo mysql < https://github.com/Muthu-Palaniyappan-OL/gcw/blob/main/scripts/auto_setup_mysql.sql

# I prefer You to run this command frequently or better add a crontab to automate this process
###############################################################
# php /var/www/html/gcw/admin/php/killAllUnwantedSessions.php #
###############################################################

echo "Website is live: "
echo "Go to $(curl ifconfig.me)/gcw"

echo "Scripted Finished Execution."