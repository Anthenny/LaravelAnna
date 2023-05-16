# Table of contents
1. [General](#markdown-header-general)
2. [Requirements](#markdown-header-requirements)
3. [Getting started](#markdown-header-getting-started)
4. [First time running the application](#markdown-header-first-time-running-the-application)
5. [Database management](#markdown-header-database-management)
6. [Mailhog](#markdown-header-mailhog)


## General
This project is using a Laravel backend. It is currently functioning as an API. at a later point we will implement a frontend framework.

Only develop when the containers are running, this prevents unnecessary bugs (It might work on your development env doesn't mean it will run elsewhere.)

## Requirements ☕
- Docker
- Docker-compose
- Able to run make commands (<b>It's not a must</b>)

## First time running the application
Because u dont have the means to run the project yet we will start by installing the images services etc.

If you are able to run the sh and make commands this will be very straight forward. Simply go to the root of the project and run `sh install.sh`. That's it.

If you want to do it manually remove the `.example` part of the `.env.example` file because laravel and docker-compose.dev.yml expect this file to be here with the right configurations.

CD in to the root of the project and use `make build` this will trigger the app to build the containers and spin it up in dev mode. If u can't run make commands go to the makefile and run the commands from the root dir of the project.

After building and spinning up the containers go to http://localhost:81/ ,please give the containers the time to startup. If it's succesful u should see the homepage.

After building the backend succesfully u can go to phpmyadmin http://localhost:8888/.

If you have errors make sure to use `docker ps`. If you see that a container is down or trying to restart use `docker logs -f <container name or ID>`

## Database management
To manage our database in development I used PhpMyAdmin, this is a gui that is often used when using a sql database.

Go to http://localhost:8888/. And you should see a database called annasaccessoires in the left column.

## Mailhog
To intercept emails we use a service called Mailhog. Credentials are already in ur .env file under the Mailhog section. 
If u want to use this service go to: http://localhost:8025/
