#!/bin/bash


# private_ip=$(aws ec2 describe-instances --filters "Name=tag:Name,Values=new_db" --query "Reservations[0].Instances[0].PrivateIpAddress" --output text)
# sudo sed -i "s/^.*DB_HOST.*$/define('DB_HOST', '$private_ip');/" /var/www/html/wp-config.php


# Start the Apache service if it's not running
if ! pgrep apache2 > /dev/null; then
  sudo /etc/init.d/apache2 start > /dev/null
  echo "Apache service started."
else
  echo "Apache2 is already running."
fi
