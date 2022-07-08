#!/bin/bash

export APP_ENV=test
export APP_DEBUG=0

php bin/console doctrine:schema:drop --force --env=test --no-debug
php bin/console doctrine:database:create --env=test --no-debug
php bin/console doctrine:schema:create --env=test --no-debug
php bin/console doctrine:schema:update --force --env=test --no-debug
php bin/console cache:clear --env=test --no-debug
php bin/console doctrine:fixtures:load --append --quiet --env=test --no-debug
php bin/phpunit
