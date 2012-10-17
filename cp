#!/bin/bash 
if [ $(hostname) == "MacBook-Pro-van-wesley.local" ]; then
	echo Please Wait...
	echo Sending Files To Webserver...
	cp -r * /volumes/web/projecten/OSMS
	echo Done!
	clear
else
	echo works only on wesley\'s mac. sorry.
fi