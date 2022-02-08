#!/bin/bash
echo "push changes to prod server"
#should show on site if successful"
sudo cp -r -v . /var/www/html/ > log.txt
cat log.txt