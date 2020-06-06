# Companies Catalog Website
A webpage for companies catalog. Build on Laravel 7.

## General info
This is a training project to learn Laravel.
The [task](Laravel_uzduotis.pdf) was to create a companies catalog website.

### Features
* Add new company
* Edit information about company
* Delete company
* Search company by title and company code
* User register

## Technologies
Project is created with:
* Bootstrap 4
* Laravel 7

## Set up instructions
1. To run this app you need to have a PHP, Composer, MySQL database and Valet.
2. Clone this repo and navigate into the folder
```
git clone https://github.com/aistyska/companies-catalog.git
```
3. Install all the dependencies
```
composer install
```
4. Link this project to valet
```
valet link
```
5. Create environment file
```
cp .env.example .env
php artisan key:generate
```
6. Inside `.env` file update DB_DATABASE, DB_USERNAME, DB_PASSWORD parameters to your local database connection.
7. Run migrations
```
php artisan migrate
```
8. That's it! You should be able to access the web through [companies-catalog.test](http://companies-catalog.test)
