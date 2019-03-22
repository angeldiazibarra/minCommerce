#!/bin/bash
git commit -a -m "eudomus"
git push origin master
ssh root@188.166.23.142 "cd /var/www/eudomus/wp-content/themes/minCommerce; git pull origin master; exit;"
