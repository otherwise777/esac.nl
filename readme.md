<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://p-----ackagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Framework/libaries

The following libaries and framework are used:
- [Laravel](https://laravel.com)
- [datatables](https://datatables.net/)
- [Jquery](https://jquery.com/)
- [Form](https://github.com/LaravelCollective/html)
- [Bower](https://bower.io/)
- [Npm](https://www.npmjs.com/)
- [SummerNote](http://summernote.org/)
- [Laravel-mix (Webpack)](https://github.com/JeffreyWay/laravel-mix)

## Setup for Docker
 1. Clone or download this project
 2. Download and install  [Docker](https://www.docker.com/)
 3. In this folder, run `docker-compose up`
 
The docker compose runs 2 containers, 1 containing the database, and one php container running the website
which also fills the database. Laraval uses the [Docker environment file](.env.docker) to run the project inside docker.
You might notice the local version is a bit slow, that's because docker uses a volume to mount
the project, for this reason the debug bar has been switched off to make it faster.


## Setting up steps
Create an .env file from .env.example, with your local values for 
DB\_HOST, DB\_PORT, DB\_DATABASE, DB\_USERNAME and DB\_PASSWORD

### setup local environment
you need the following programs to run the code on your local environment:
* Xampp: https://www.apachefriends.org/index.html
* Composer: https://getcomposer.org/download/
* NodeJS: https://nodejs.org/en/download/

In command line, execute the following commands:

	composer update
    php artisan migrate
    php artisan db:seed
    npm install
    npm run dev

When you made changes to css or js file you need to build the css en js file again this can be done one with

    npm run dev

It is also possible that webpack recompiles your files when you make a change by running the following command

    npm run watch

When you update the server make sure you run the following commands

    php artisan migrate
    npm run production
 

