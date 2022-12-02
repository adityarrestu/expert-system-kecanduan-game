## Expert System for Checking Myopic Using Backward Chaining's Method by BrandoID.

### Please follow steps below to use this expert system.

This is an application for checking myopic for any kind of user.

Install all the packages needed using composer, if you haven't install composer, you can get it on https://getcomposer.org.

    composer install
    
Copy the `.env.example` file and paste it on the same folder, then rename it to `.env`.

Edit the `.env` file and change the value of `APP_NAME` and `APP_URL`, then you can change the rest of the variables' value according to your need.

For your information, there is no database in this application, so no need to edit all `DB_*` variables on the `.env` file or run `php artisan migrate`.

After that, generate a new key for the application.

    php artisan key:generate
    
After you finish all of that stuff, you already can use the application as a user.
