#!/bin/bash

directory="/var/www/html"
logsfile="/var/www"
xterm -e ./ngrok http 80 & clear
service apache2 start

echo "" > logs.txt

cp index.html "$directory/index.html" & cp handle.php "$directory/handle.php" & cp logs.txt "$logsfile/logs.txt"


chown -R www-data:www-data $directory
chown -R www-data:www-data $logsfile
echo "Waiting for connections..." > "$logsfile/logs.txt"
xterm -e tail -f "$logsfile/logs.txt" &
clear
