<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Setting Up a Laravel Application After Cloning from GitHub

1. Install composer dependencies:
```sh
composer install
```
> Copy the content of `.env.example` to a new file called `.env`.
2. Generate the application key:
```sh
php artisan key:generate
```
> Configure your database information in your `.env`.
3. Run migrations:
```sh
php artisan migrate
```
4. Booting up the development server:
```sh
php artisan serve
```
