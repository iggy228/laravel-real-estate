# About App

Web made in Laravel framework with HTML, CSS, JS and Bootstrap css library for displaying real estates from db. App is also responsive for mobile phones.

## Requirements

-   Laravel >= 10.10
-   PHP >= 8.1
-   MySQL
-   Node.js >= 18.16.1

## Installation

1. Clone repository

    ```bash
    git clone https://github.com/iggy228/laravel-real-estate.git
    cd laravel-real-estate
    ```

2. Install PHP and Node.js dependencies

    ```bash
    composer install
    npm install
    ```

3. Create **.env** file

    Copy **.env.example** file to **.env**

    ```bash
    cp .env.example .env
    ```

4. Run migrations and seeders

    ```bash
    php artisan migrate
    php artisan db:seed
    ```

5. Run development servers with frontend server

    ```bash
    php artisan serve
    ```

    For running frontend server use command

    ```bash
    npm run dev
    ```

Now you can open application on localhost:8000
