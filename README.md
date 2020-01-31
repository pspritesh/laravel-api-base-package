<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Laravel API Base Package

This is the base setup of Laravel framework which contains Laravel API package used to develop decoupled applications.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Setting up this package

1. Clone the repository
    ```sh
    git clone https://github.com/pspritesh/laravel-api-base-package.git
    ```
2. Go to root directory and install all dependencies
   ```sh
   cd laravel-api-base-package
   composer install
   ```
3. Then create the `.env` file as well as generate Laravel Application key using following commands
   ```sh
   php -r "file_exists('.env') || copy('.env.example', '.env');"
   php artisan key:generate --ansi
   ```
4. Setup your database configuration in `.env` to connect your app with database and migrate user table
   ```sh
   php artisan migrate
   ```
5. After the setup is completed, you can start the server using `php artisan serve`

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
