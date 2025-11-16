# Laravel Skeleton + Docker Sail

This repository provides a minimal Laravel skeleton prepared to work with Docker Sail, PHPStan, and Larastan.

## Requirements
- Docker and Docker Compose
- Git

## Installation

git clone https://github.com/DuncanGuijo/laravel_skeleton.git
cd laravel_skeleton

cp .env.example .env

composer install

./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate

## AuthSanctum

This branch includes an example of how to use the folder structure together with Laravel Sanctum for authentication.

./vendor/bin/sail artisan migrate

## PHPStan

./vendor/bin/sail php ./vendor/bin/phpstan analyse
