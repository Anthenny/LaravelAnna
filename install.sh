#!/bin/bash

echo 'Hi, is this ur first time opening this project?'

while : ; do # colon is built into bash; and is always true.
    read -n1 -p "Are you sure? [Y/n] " response
    echo
    case "$response" in
        y|Y|"") echo "We are going to start the setup right now"; break ;; # Break out of while loop
        n|N) echo -e "canceled"; break ;; # Break out of while loop
        *) echo "Invalid option given." ;;
    esac
done

echo 'Moving example.env to .env'

cp .env.example .env;

echo 'generating keygen'

php artisan key:generate;

echo 'Building the containers right now..'

docker-compose --env-file .env -f docker-compose.dev.yml up -d --build --remove-orphans

echo 'succesfully setup the project!'
