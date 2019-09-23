
## Vue in Laravel

Scaffold repo for Laravel Meetup Algiers, September 21th 2019

### Installation

```

git clone https://github.com/laradz/vue-in-laravel.git

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

### Nice to Have

- [VsCode](https://code.visualstudio.com/) with [vetur](https://marketplace.visualstudio.com/items?itemName=octref.vetur) installed
- [Google chrome](https://www.google.com/chrome/?brand=CHBD&gclid=CjwKCAjwk93rBRBLEiwAcMapUejXicjrvLi9vDE8HAmBy5TJp7fVtb6nGc_2b-ii6LKLdl2_Bh065RoCvk0QAvD_BwE&gclsrc=aw.ds) with [Vue.js devtools](https://chrome.google.com/webstore/detail/vuejs-devtools/ljjemllljcmogpfapbkkighbhhppjdbg?hl=en)

Open the project in Vs code or other editor, and you are ready to follow the meetup with Hadji Kouceyla ;)
