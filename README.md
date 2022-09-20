<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

#### Register

![register](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/register.JPG)

#### Login

![login](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/login.JPG)

#### Get All Products

![Get All Products](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/getProduct.JPG)

#### Get Detailed Product By Id

![Get Detail Product](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/getDetailProduct.JPG)

#### Create Product

![Create Product](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/createProduct.JPG)

#### Update Product By Id

![Update Product](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/updateProduct.JPG)

#### Delete Product By Id

![Delete Product](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/deleteProduct.JPG)

#### Logout Product By Id

![logout](https://github.com/dedenurr/mock-test-binar/blob/master/public/imagePostman/logout.JPG)

## Test Api in Swagger

-   http://localhost:8000/api/documentation

## Jawaban Mock Test

[Jawaban Mock Test](https://github.com/dedenurr/mock-test-binar/blob/master/Jawaban_no_1-4_Dede_nurrahman_Mock-test-Binar-BackendDev.pdf)
