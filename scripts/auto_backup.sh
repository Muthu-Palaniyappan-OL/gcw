#!/bin/bash

echo "Backing Up..."
sudo echo "/* CFREATING DATABASE AND USING IT */" >> /var/www/html/gcw/admin/backup/auto_setup_mysql.sql
sudo echo "CREATE DATABASE gcw_db;" >> /var/www/html/gcw/admin/backup/auto_setup_mysql.sql
sudo echo " USE gcw_db;" >> /var/www/html/gcw/admin/backup/auto_setup_mysql.sql
sudo echo "" >> /var/www/html/gcw/admin/backup/auto_setup_mysql.sql
sudo mysqldump gcw_db >> /var/www/html/gcw/admin/backup/auto_setup_mysql.sql 
echo "Done"