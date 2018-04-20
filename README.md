# Package Onestartup Users

  **onestartup/user-admin** is a module manage user of our project

# Installation

- Run this in the terminal
```php
composer require onestartup/user-admin
```
- after add the ServiceProvider to the providers array in config/app.php
```php
Onestartup\UserAdmin\UserAdminProvider::class,
````
- Run migration
```php
php artisan migrate
```
- add next lines to app/User.php
```php
protected $fillable = [
        'name', 'email', 'password','short_bio', 'rol_id'
    ];
```
- run serv
```php
php artisan serve
```
- test in this route how admin user
```php
http://localhost:8000/admin/user
```