echo hiii
#!/bin/bash

# Stop the Apache service if it's running
if pgrep apache2 > /dev/null; then
  sudo /etc/init.d/apache2 stop > /dev/null
  echo "Apache service stopped."
else
  echo "No Apache processes found."
fi

