
container_php       = app
container_db        = db
container_server    = webserver

#############################################
###                                       ###
###   MakeFile for Laravel Crash Course   ###
###                                       ###
#############################################

composer_dep: #install composer dependency >> ./vendors
	@docker run --rm -v $(CURDIR):/app composer install

laravel_install: #Create new Laravel project
	@docker-compose exec $(container_php) composer create-project --prefer-dist laravel/laravel app

key: #generate APP key
	@docker-compose exec $(container_php) php artisan key:generate

ownership: #Set ownership
	@sudo chown $(USER):$(USER) . -R

#####################################
###                               ###
###       Work in containers      ###
###                               ###
#####################################

start: #start docker containers @docker-compose up -d
	@docker-compose up -d

stop: #stop docker containers
	@docker-compose down

show: #show docker's containers
	@sudo docker ps

connect_app: #Connect to APP container
	@docker-compose exec $(container_php) bash

connect_db: #Connect to DB container
	@docker-compose exec $(container_db) bash

connect_server: #Connect to container_server container
	@docker-compose exec $(container_server) /bin/sh
