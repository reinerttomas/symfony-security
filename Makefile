php=symfony-security-php-1
database=symfony-security-database-1

### DOCKER ###

build:
	@docker compose build --pull --no-cache

up:
	@docker compose up -d

down:
	@docker compose down

php:
	@docker exec -it $(php) bash

db:
	@docker exec -it $(database) bash

### ANALYSIS ###

phpstan:
	@docker exec -e APP_ENV=test -it $(php) composer phpstan

ccs:
	@docker exec -e APP_ENV=test -it $(php) composer ccs

fcs:
	@docker exec -e APP_ENV=test -it $(php) composer fcs

test:
	@docker exec -e APP_ENV=test -it $(php) composer test

ci:
	@docker exec -e APP_ENV=test -it $(php) composer ci
