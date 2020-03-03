# Laravel backend

This backend is implemented using [Laravel](https://laravel.com/). Laravel is a widly used PHP framework.

## Starting the server

First you must have installed [PHP](https://www.php.net/) and [Composer](https://getcomposer.org/download/) on your system.

Download the dependencies by running:

```composer install```

Copy the default configuration:

```cp .env.example .env```

Generate an application key:

```php artisan key:generate```

Create an empty database:

```touch database/database.sqlite```

Create database schema:

```php artisan migrate```

Next start the server by running:

```php artisan serve --port=3000```
