#!/bin/bash

composer install
php bin/console doctrine:schema:update --force
php bin/console cache:clear