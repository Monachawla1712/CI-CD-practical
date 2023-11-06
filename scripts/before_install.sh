#!/bin/bash

export Databasename
export User
export Password
export Host

sudo sed -i "s/^.*DB_NAME.*$/define('DB_NAME', '$Databasename' );/" wp-config.php
sudo sed -i "s/^.*DB_USER.*$/define('DB_USER, '$User' );/" wp-config.php
sudo sed -i "s/^.*DB_PASSWORD.*$/define('DB_PASSWORD', '$Password' );/" wp-config.php
sudo sed -i "s/^.*DB_HOST.*$/define('DB_HOST', '$Host' );/" wp-config.php




