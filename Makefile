up: # Spin up the containers for development.
	docker-compose --env-file .env -f docker/docker-compose.dev.yml up -d --remove-orphans

build: # Build the containers, when it's done spin up the containers for development
	docker-compose --env-file .env -f docker-compose.dev.yml up -d --build --remove-orphans

down: # Down containers for development
	docker-compose --env-file .env -f docker/docker-compose.dev.yml down --remove-orphans
