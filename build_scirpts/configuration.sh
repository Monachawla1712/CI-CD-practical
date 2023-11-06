#!/bin/bash
CONFIG_PATH="./config/production.json"
echo check below
echo $CONFIG_PATH 
mkdir config
echo "{}" >> $CONFIG_PATH 
echo $PWD
json -I -f $CONFIG_PATH \
     -e "this.DB_HOST='$DB_HOST'"\
     -e "this.DB_NAME='$DB_NAME'"\
     -e "this.DB_PASSWORD='$DB_PASSWORD'"\
     -e "this.DB_USER='$DB_USER'"
