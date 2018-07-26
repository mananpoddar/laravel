<div style="font-size:3em;">Installation instructions:<br></div>
Clone the repo via this url github.com:mananpoddar/laravel.git<br>
Create a .env file by running the following command cp .env.example .env<br>
Install various packages and dependencies: composer install<br>
Run migrations then seed the database:<br>
php artisan migrate<br>
php artisan db:seed<br>
Generate an encryption key for the app:<br> php artisan key:generate.
