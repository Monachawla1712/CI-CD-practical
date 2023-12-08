#!/bin/bash

export NAME
export USER
export PASSWORD

sudo sed -i "s/^.*DB_NAME.*$/define('DB_NAME', '$NAME');/" wp-config.php
sudo sed -i "s/^.*DB_USER.*$/define('DB_USER', '$USER');/" wp-config.php
sudo sed -i "s/^.*DB_PASSWORD.*$/define('DB_PASSWORD', '$PASSWORD');/" wp-config.php
