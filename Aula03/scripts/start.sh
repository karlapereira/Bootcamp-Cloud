#!/bin/bash
cd /var/www/html
mv rds.conf.php ../
rm -R *
mv ../rds.conf.php .