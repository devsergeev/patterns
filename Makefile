docker-run = docker-compose -f ./docker/docker-compose.yml --env-file ./docker/.env run --rm
php-cli = $(docker-run) php-cli

bash:
	$(php-cli) bash
