#!/bin/bash  

############################################################################
#             THIS WORKS ONLY FOR DEBIAN BASED LINUX DISTRO                #
# FOR ANY OTHER LINUX DISTRO CHANGE apt TO YOUR PARTICULAR PACKAGE MANAGER #
#           UPDATE COMMAND TO YOUR PACKAGE MANAGER'S UPDATE COMMAND        #
############################################################################

echo "Updating your repo..."
# Update your Reporsitory
sudo apt update
sudo apt upgrade

echo "installing Apache2"
# Install apache2 webser
sudo apt install apache2 -y

# installing php and related libraries
echo "Installing PHP and Its Related Libraries..."
sudo apt-get install php php-cgi php-common php-pear php-mbstring libapache2-mod-php php-mcrypt php-mysql -y

echo "Installing Mysql..."
# install mysql-server
sudo apt install mysql-server mysql-client -y

echo "Starting the Apache2 And MySQL..."
sudo service apache2 start
sudo service mysql start

echo "Securing MySQL..."
sudo mysql_secure_installation # set root password and remember it

# installing phpmyadmin
echo "Installing PHPMYADMIN..."
sudo apt install phpmyadmin -y

# installing GIT
echo "Installing PHPMYADMIN..."
sudo apt install git -y

# installing VIM
echo "Installing PHPMYADMIN..."
sudo apt install vim -y


#Restarting Services
echo "Restarting the Apache2 And MySQL..."
sudo service apache2 restart
sudo service mysql restart

sudo git clone https://github.com/Muthu-Palaniyappan-OL/gcw.git
 
sudo mysql < ./auto_setup_mysql.sql

echo "Website is live: "
echo "Go to http://localhost/gcw/"

echo "Scripted Finished Execution."