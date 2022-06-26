# RS APP Project

This project is using CoreUI with Laravel 8

## Installation

``` bash
# clone the repo
$ git clone https://github.com/narendra087/rsapp.git rsapp

# go into app's directory
$ cd rsapp

# install app's dependencies
$ composer install

# install app's dependencies
$ npm install

```

### using MySQL

Copy file ".env.example", and change its name to ".env".
Then in file ".env" complete this database configuration:
* DB_CONNECTION=mysql
* DB_HOST=127.0.0.1
* DB_PORT=3306
* DB_DATABASE=rsapp-db
* DB_USERNAME=root
* DB_PASSWORD=

### Set APP_URL


### Next step

``` bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev

# and repeat generate mixing
$ npm run dev
```

## Usage

``` bash
# start local server
$ php artisan serve

# test
$ php vendor/bin/phpunit
```

Open your browser with address: [localhost:8000](localhost:8000)  
Click "Login" on sidebar menu and log in with credentials:

* E-mail: _admin@admin.com_
* Password: _password_

This user has roles: _user_ and _admin_

--- 
