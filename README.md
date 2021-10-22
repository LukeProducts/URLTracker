# GeolocationEngineering

The Geolocation-Engeneering Toolkit is to obtain the exact location of a user using an fake maps page through ngrok fowarding.

# requirements:

xterm, apache2, unzip, php-curl

installation:
```
sudo apt install xterm
sudo apt install apache2
sudo apt install unzip
sudo apt-get install php-curl
```
# Usage:
First unzip ngrok:
```
unzip ngrok.zip
```

Then make tracker.sh executable and start the program with sudo privileges:
```sh
chmod +x tracker.sh

sudo ./tracker.sh
```

There will be 2 windows popping up:
| Lifeview of logsfile | ngrok server status |
| ----- | ----- |
|![empty_00142](https://user-images.githubusercontent.com/73026669/137955603-4d841a71-f4a5-45ea-9a46-3271fbaf428f.png)| ![ngrok_00071](https://user-images.githubusercontent.com/73026669/137955671-7cf5410a-aa93-4b66-bdcb-ad6fad1a5cd3.png)|
|After someone opend the url, you'll se several information of the victim| 
|![RES](https://user-images.githubusercontent.com/73026669/138503825-b92cab36-bf36-4881-a8c9-7b221ebf5ef7.jpg)
(proxy example, not our address)| 

The coords shown are summarized under "Google Maps", 
you can see the geolocation on a map if you visit the printed url under this tag,

# IMPORTANT:
tracking will only work if you use the https secure web protocol 
(second link on ngrok), because geolocating is not allowed with the http protol, 
but it is with https






# ngrok

if you want to get an ngrok plan for unlimited server uptime, visit [ngrok](https://ngrok.com/), sign up there, and 
activate your ngrok with the command 
```sh
./ngrok authtoken YOURAUTHTOKEN

ngrok RESPONSE:

Authtoken saved to configuration file: /home/user/.ngrok2/ngrok.yml
```
The authtoken will be shown as soon as youre signed up under [setup](https://dashboard.ngrok.com/get-started/setup).
After that, you'll see, that ngrok always opens with:


![ngrok_authed_00000](https://user-images.githubusercontent.com/73026669/137959293-06d4417e-41e5-4092-b983-ccd4dac362b4.png)



DISCLAIMER: THIS IS FOR EDUCATIONAL PURPOSES ONLY! 
NO LIABILITY FOR ILLEGAL USE IS ASSUMED!

[![Build Status](https://user-images.githubusercontent.com/73026669/110617122-9c75ad00-8195-11eb-9ba5-422356072776.png)](https://github.com/LukeProducts)



© 2021 Copyright by LukeProducts
