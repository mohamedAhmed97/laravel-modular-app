# Laravel Monolithic Modular App

This project is a monolithic Laravel web application that is modularized into three modules: product, customer, and cart. Each module has its own set of routes, controllers, models, and views, but they share a common database and authentication system.

## Prerequisites

To run this project, you will need to have the following tools installed on your machine:

- PHP (version 8.0 or later)
- Composer
- MySQL or another supported database
- A web server (such as Apache or Nginx)

## Local Development

To run the project locally, follow these steps:

1. Clone the repository to your local machine:

   `````
   git clone https://github.com/mohamedAhmed97/laravel-modular-app.git
   `````

2. Change into the project directory:

   ````
   cd laravel-modular-app
   ````

3. Install the project dependencies using Composer:

   ````
   composer install
   ````

4. Set up the database by creating a new database and running the database migrations:
    1. For customer module 
        ````
        php artisan module:migrate Customer
        ````
    2. For product module
        ````
        php artisan module:migrate Product
        ````
    3. For cart module
        ````
        php artisan module:migrate Cart
        ````

5. Seed the database with sample data (optional):
    1. For customer module 
        ````
           php artisan module:seed Customer
        ````
    2. For product module
        ````
           php artisan module:seed Product
        ````
    3. For cart module
        ````
           php artisan module:seed Cart
        ````

6. Start the development server:

   ````
   php artisan serve
   ````

7. Access the web application in your browser at `http://localhost:8000`.

## Modules

This monolithic Laravel app is modularized into three modules:

- Product - This module is responsible for managing the products in the inventory. It includes routes for viewing, creating, updating, and deleting products.

- Customer - This module is responsible for managing the customers of the store. It includes routes for viewing, creating, updating, and deleting customers.

- Cart - This module is responsible for managing the shopping cart of the customer. It includes routes for adding and removing products from the cart, and for viewing the contents of the cart.

Each module has its own set of routes, controllers, models, and views, which are organized in a modular directory structure under the `app/Modules` directory.

## Conclusion

This project demonstrates how to modularize a monolithic Laravel web application into three modules: product, customer, and cart. Use this project as a starting point for your own modular Laravel applications, and feel free to modify the code and configuration to suit your needs.