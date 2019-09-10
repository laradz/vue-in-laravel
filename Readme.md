## Vue in Laravel

Scaffold repo for Laravel Meeting Algiers, September 21th 2019

### Installation
```

git clone git@github.com:laradz/vue-in-laravel.git

cd vue-in-laravel

composer install # Install backend dependencies

sudo chmod 777 storage/ -R # Chmod Storage

cp .env.example .env # Update database credentials configuration

php artisan key:generate # Generate new keys for Laravel

php artisan migrate:fresh --seed # Run migration and seed communes

yarn install # or npm i to Install node dependencies(>= node 9.x)

php artisan serve 

npm run watch # To compile assets for prod

```

Now you are ready to follow the meetup with Hadji Kouceyla ;)