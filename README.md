# Devnote - Laravel Package
A laravel package for manage project note or todos for developers in local env

## Purpose/Benefit of it - 
As a developer, if you working on multiple project then it dificult to manage or remember task/todos 
respect to each project. That's why this plugin will help you.

## How to use?
Just install the package in your laravel project and the application will
run automatically in the right-bottom section of every page, if your env setup is local.

```php
APP_ENV=local
```
When your project goes Live/Production then it automatically disabled.

## Installation

> **No dependency on PHP version and LARAVEL version**

### STEP 1: Run the composer command:

```shell
composer require creative-syntax/devnote
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
CreativeSyntax\DevNote\DevNoteServiceProvider::class,
```

### STEP 3: Publish the assets:

```php
php artisan vendor:publish --provider="CreativeSyntax\DevNote\DevNoteServiceProvider" --force

- OR - 

php artisan vendor:publish --tag=devnote-assets --force
```
![2023-05-27_132203](https://github.com/dev-arindam-roy/devnote-laravel-package/assets/24665327/e124c732-6916-46ad-a79d-eedbd94a5639)

## Purpose/Benefit of it - 
As a developer, if you working on multiple project then it dificult to manage or remember task/todos 
respect to each project. That's why this plugin will help you.

## How to use?
Just install the package in your laravel project and the application will
run automatically, if your env setup is local.

## License MIT
2023 - 2030
