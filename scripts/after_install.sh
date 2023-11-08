#!/bin/bash

# Start the Apache service if it's not running
if ! pgrep apache2 > /dev/null; then
  sudo /etc/init.d/apache2 start > /dev/null
  echo "Apache service started."
else
  echo "Apache2 is already running."
fi
