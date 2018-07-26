Installation instructions<br>
Clone the repo via this url github.com:mananpoddar/laravel.git
Create a .env file by running the following command cp .env.example .env
Install various packages and dependencies: composer install
Run migrations then seed the database:
php artisan migrate
php artisan db:seed
Generate an encryption key for the app: php artisan key:generate.
