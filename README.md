<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About This API

This API is created using Laravel 9.19 API Resource. It has Users, Product. Protected routes are also added. Protected routes with Laravel Sanctum.

## Following are the Models

-   User
-   Product

## Usage

Clone the project via git clone or download the zip file.

## .env

Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.

## Composer Install

cd into the project directory via terminal and run the following command to install composer packages.

```
   $ composer install
```

## Run Migration

then run the following command to create migrations in the databbase.

```
   $ php artisan migrate
```

## Run App

```
   $ php artisan serve
```

## Test Api in your Postmant

### in the folder "postman" has file "mock-test-binar.postman_collection.json". import the file to your postman

## API EndPoints

##### Auth

-   "Register" POST http://localhost:8000/api/register
-   "Login" POST http://localhost:8000/api/login
-   "Logout" POST http://localhost:8000/api/logout

##### Product

-   "Get All Product" GET http://localhost:8000/api/products
-   "Create Product" POST http://localhost:8000/api/products
-   "Get Detail Product By id" POST http://localhost:8000/api/products/1
-   "Update Product By id" POST http://localhost:8000/api/products/1 with \_method PATCH
-   "Delete Product By id" POST http://localhost:8000/api/products/1

## Screen Capture Postman Result

#### Login

![alt text](https://github.com/[dedenurr]/[mock-test-binar]/blob/[master]/public/storage/imagePostman/login.jpg?raw=true)

## Test Api in Swagger

-   http://localhost:8000/api/documentation
