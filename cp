#!/bin/bash 
if [ $(hostname) == "MacBook-Pro-van-wesley.local" ]; then
	echo Please Wait...
	echo Sending Files To Webserver...
	cp -r * /volumes/web/projecten/OSMS
	echo Done!
    tput bel
    terminal-notifier -message "Files Are Copyed!" -title "WDG.P Copy" > /dev/null
	clear
else
	echo works only on wesley\'s mac. sorry.
fi