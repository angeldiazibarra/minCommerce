#!/bin/bash
git commit -a -m "eudomus"
git push origin master
sshw "cd /var/www/eudomus/wp-content/themes/minCommerce; git pull origin master; exit;"
