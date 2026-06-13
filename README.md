# SoundBoard

![STATUS: Complete](https://img.shields.io/badge/status-complete-green)
![PHP](https://img.shields.io/badge/PHP-brown?logo=php)
![JavaScript](https://img.shields.io/badge/JavaScript-brown?logo=javascript)
![CSS](https://img.shields.io/badge/CSS-brown?logo=css)
![Docker](https://img.shields.io/badge/Docker-brown?logo=docker)

## Sound Trigger Launchboard
A simple Javascript Action Sound Launchboard, full of buttons to trigger any desirable sound.
Fully extensible, just drag and drop sound over the folders, add a PNG icon to each folder to
show inside each category button.

Live Demo: https://soundpanel.iskarion.ddns.net

![snapshot](./web/snapshot.png)

## Install / Deploy Instructions
 1. Clone Repository
    ```bash
    git clone git@github.com:pinakure/SoundBoard.git /src/soundboard
    ```
 3. Get up the container
    ```bash
    cd /src/soundboard
    docker compose up --build -d 
    ```
 4. Check container logs
    ```bash
    docker logs soundboard 
    ```
    
## Adding more sound categories and sounds
  1. Adding a new category
     - Create a new folder over /src/soundboard/web/sfx/ (i.e. 'explosions')
     - Add a PNG picture with **same name** as the category and transparent background
  2. Adding new sounds
     - Simply drop the wav files in the desired category, on /src/soundboard/web/sfx/
  - Dont forget to reset the container once the sound files have been modified. 
    ```bash
    docker reset soundboard
    ```
