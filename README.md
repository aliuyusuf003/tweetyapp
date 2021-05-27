## Laravel Project SetUp with Tailwind mix.
https://laracasts.com/series/laravel-6-from-scratch/episodes/55
-laravel new tweety --auth
-set up env variables for database access
-migrate your migrations

## Conversion of design to html and css i.e. Slicing.
https://laracasts.com/series/laravel-6-from-scratch/episodes/56
-https://laravel.com/docs/6.x/blade#components-and-slots // more about blade templating 

## Making the page dynamic by generating business/relevant logic models
https://laracasts.com/series/laravel-6-from-scratch/episodes/57
php artisan make:model Tweet -fmc
factory,migrations,controller(fmc)

php artisan make:migration create_follows_table
-Determine the structure of migrations of model(Tweet) and necessary foreign keys
-ModelFactory is used to generate model data e.g TweetFactory
-use php artisan tinker, to play with your data model
factory('App\Tweet')->create();  // manufacture tweets data
-Determine the relationships existing between models e.g. Users,Tweets,Followers,etc.
-Ask the necessary questions connecting the models.
- getAvatarAttribute === avatar // custom attribute refactoring.

## Introducing Pivot table and its usage
https://laracasts.com/series/laravel-6-from-scratch/episodes/58
- if foreignId is not working, use unsignedBigInteger
## Tinker
-use php artisan tinker, to play with your data model
factory('App\Tweet')->create();  // manufacture tweets data
App\User::find(1)->follows // 1 represents user id.

## Chaining of methods on Eloquents
https://laravel.com/docs/6.x/eloquent

Tweet::whereIn('user_id',$friends)->orWhere('user_id',$this->id)->latest()->get();
Tweet::where('user_id',$this->id)->latest()->get();
        // $ids = $this->follows->pluck('id'); // follows() is better than follows
        // $ids->push($this->id);
## Route Key name
https://laracasts.com/series/laravel-6-from-scratch/episodes/60

DB::listen(function($query){var_dump($query->sql,$query->bindings);}); // debuging
{{route('profile',$tweet->user)}} // passing parameter in route name
- trait is used to refactor methods in one class to another e.g User model.
-Route::get('/profiles/{user:name}','ProfilesController@show')->name('profile');// rather than using routekeyName in model for your params
-most applications user model grows alot.


## Tools used during development
php artisan make:controller PageController
composer require laravel/ui:^1.0 --dev
php artisan ui bootstrap --auth

npm install -D tailwindcss@npm:@tailwindcss/postcss7-compat @tailwindcss/postcss7-compat postcss@^7 autoprefixer@^9
npm install /// css/main.css
npm run dev



factory('App\Tweet', 4)->create(['user_id'=> 1]);// create tweets and attach user_id
if and unless can be used interchangeably.