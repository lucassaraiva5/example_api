## Movies Test API

##Requirements
 * Docker version >= 20.10.17
 * docker-compose version >= 1.29.2

### How to start API

Build the docker

`docker-compose up -d --build`

And to run initial setup execute this command:

`docker exec symfony_dockerized_php_1 bash -c "sh bin/run_initial_setup.sh" `

## How to execute the Tests

`docker exec symfony_dockerized_php_1 bash -c "sh bin/run_tests.sh"`

