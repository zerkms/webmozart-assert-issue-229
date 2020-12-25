.PHONY: composer-install
composer-install:
	docker run --rm -v $(shell pwd):/app -w /app composer:2 composer install

.PHONY: psalm
psalm: composer-install
	docker run --rm -v $(shell pwd):/app -w /app composer:2 ./vendor/bin/psalm
