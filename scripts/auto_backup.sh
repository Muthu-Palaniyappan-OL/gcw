#!/bin/bash

echo "Backing Up..."
sudo rm /var/www/html/admin/backup/auto_setup_mysql.sql
sudo echo "/* CFREATING DATABASE AND USING IT */" >> /var/www/html/admin/backup/auto_setup_mysql.sql
sudo chmod -R 777 /var/www/html/admin/backup/auto_setup_mysql.sql
sudo echo "CREATE DATABASE gcw_db;" >> /var/www/html/admin/backup/auto_setup_mysql.sql
sudo echo "USE gcw_db;" >> /var/www/html/admin/backup/auto_setup_mysql.sql
sudo echo "" >> /var/www/html/admin/backup/auto_setup_mysql.sql
sudo mysqldump gcw_db >> /var/www/html/admin/backup/auto_setup_mysql.sql 
echo "Done"