#!/bin/bash
git commit -a -m "eudomus"
git push origin master
ssh eudomus@metricspot.com "cd webapps/woocommerce/wp-content/themes/minCommerce; git pull origin master; exit;"
