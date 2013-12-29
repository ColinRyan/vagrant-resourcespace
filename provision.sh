#!/bin/sh

export DEBIAN_FRONTEND=noninteractive

sudo DEBIAN_FRONTEND=noninteractive apt-get -q -y update
sudo DEBIAN_FRONTEND=noninteractive apt-get -q -y install apache2 mysql-server php5 php5-dev php5-gd php5-mysql subversion
sudo DEBIAN_FRONTEND=noninteractive apt-get -q -y install vim nano imagemagick
sudo DEBIAN_FRONTEND=noninteractive apt-get -q -y install ghostscript antiword xpdf ffmpeg postfix libimage-exiftool-perl cron wget 

cd /var/www
sudo svn co http://svn.montala.net/svn/resourcespace
cd resourcespace
sudo mkdir filestore
sudo chmod 777 filestore 
sudo chmod -R 777 include
sudo chown -R www-data:www-data .

echo "create database resourcespace" | mysql -u root

sudo cp /vagrant/php.ini /etc/php5/apache2/
sudo cp /vagrant/config.php /var/www/resourcespace/include/

sudo apache2ctl restart
