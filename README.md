## Check 24 Test

>! **Running the server**
    [1] Initialize a NGINX/APACHE/WAMP/XAMP Webserver
    [2] cd ./check24
    [3] run: composer install
    [4] php -S localhost:8000 -t .
    [5] PHP 8.2.1 Development Server (http://localhost:8000) started

>! **Running migrations**
    [1] php artisan migrate
    [2] php artisan db:seed --class=TariffSeeder  (To populate Tariff table)


>! **NOTE**

1. ENV VARIABLES ARE DEFINED IN .env
2. UNIT TESTS WERE NOT MADE FOR THIS EXERCISE
3. NO DOCKER INTEGRATION WAS MADE FOR THIS EXERCISE
4. Retrieve order endpoint was also included in the development for demonstration of how the data would be managed if its required by a front end application.