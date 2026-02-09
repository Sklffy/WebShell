cd /var/www/html
mkdir uploads
sudo chown -R www-data:www-data uploads
sudo chmod 755 uploads

sudo systemctl restart apache2
sudo systemctl restart httpd

http://<server-ip>:8080
or
http://<server-ip>
