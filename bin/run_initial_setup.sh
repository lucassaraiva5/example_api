#!/bin/bash

composer install
php bin/console lexik:jwt:generate-keypair --overwrite --quiet
php bin/console doctrine:schema:drop --force
php bin/console doctrine:schema:create
php bin/console doctrine:schema:update --force
php bin/console cache:clear
php bin/console doctrine:fixtures:load --purge-with-truncate --quiet