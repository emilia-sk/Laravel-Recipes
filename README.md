<img src ="/public/images/screenshot-1.png" width="520" height="300">

## Laravel Recipes App

#### Laravel Recipes is a web application for dessert recipes. Features CRUD functionality and user authentication.
- Used the Laravel 9 framework (PHP and MySQL)
- Front-end is build with Bootstrap 5 and custom CSS; App is responsive
- Used Alpine.js for flash messages
- Users can register and post, edit or delete recipes

## Usage

- ### Database
This app uses MySQL. To use something different, open up config/Database.php and change the default driver. <br>
To use MySQL, install it, setup a database and then add your database credentials(database, username and password) to the .env.example file and rename it to .env

- ### Database Migrations
To create all database tables and columns, run the following:
```
php artisan migrate
```

- ### Database Seeding
To add the example recipes with a single user, run the following:
```
php artisan db:seed
```
- ### Running The App
Run the following:
```
php artisan serve
```
