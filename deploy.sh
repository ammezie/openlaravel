#!/usr/bin/env bash

git pull origin master

composer install
php artisan optimize

#php artisan route:cache
php artisan config:cache

npm run production