# expresate-microservices
(Fork from @codenip-tech github)
Premium content for Microservices with Symfony and Docker

This repository contains the basic configuration for a complete local environment for Symfony microservices projects

Content:
NGINX 1.19 container to handle HTTP requests 
PHP 7.4.13 container to host your Symfony application
MySQL 8.0 container to store databases
RabbitMQ 
(feel free to update any version in Dockerfiles and ports in docker-compose.yml)

Installation:
Run make build to create all containers
Enter the PHP container with make ssh-be
Install your favourite Symfony version with composer create-project symfony/skeleton project [version (e.g. 5.2.*)]
Move the content to the root folder with mv project/* . && mv project/.env .. This is necessary since Composer won't install the project if the folder already contains data.
Copy the content from project/.gitignore and paste it in the root's folder .gitignore
Remove project folder (not needed anymore)
Navigate to localhost:1000 so you can see the Symfony welcome page :)
Happy coding!

For testing
Insert phpunit testing with composer 'composer require --dev phpunit/phpunit symfony/test-pack'
Run sf d:m:m -n --env=test to apply migrations on test enviroment
If .pem has access problems: 'chmod 644 public.pem private.pem'

