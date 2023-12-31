up:
	docker-compose up -d
stop:
	docker-compose down --remove-orphans

composer-install:
	docker-compose run --rm php-cli composer install --ignore-platform-reqs

run:
	docker-compose run --rm php-cli php src/app.php -f=/app/input/input.txt

test:
	docker-compose run --rm php-cli php vendor/bin/phpunit