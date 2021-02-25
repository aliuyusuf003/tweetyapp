## Tools used during development
composer require laravel/ui:^1.0 --dev
php artisan ui bootstrap --auth

npm install -D tailwindcss@npm:@tailwindcss/postcss7-compat @tailwindcss/postcss7-compat postcss@^7 autoprefixer@^9
npm install /// css/main.css
npm run dev

factory(App\Tweet)->create();
factory('App\Tweet', 4)->create(['user_id'=> 1]);// create tweets and attach user_id