# Recipes
VALIDPROJECT ?= src/*
ENV ?= src/.env

all: $(VALIDPROJECT) $(ENV) init 

$(ENV):
	@cp src/.env.example src/.env
$(VALIDPROJECT):
	composer create-project --prefer-dist laravel/laravel src
init:
	@docker-compose up -d
build:
	@docker-compose up -d --build
key-generate:
	@docker exec -it app php artisan key:generate
install-dependencies:
	@docker exec -it app composer install
migrate:
	@docker exec -it app php artisan migrate
docker-login:
	@docker exec -it app bash

.PHONY: all init 
