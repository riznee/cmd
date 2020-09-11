<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Status Applicaton 


## Installing Applications
Please run following command as follows

* composer install
* run **php artisan key:generate**
* To setup the admin account of the application  put the credential information seed file
* run **php artisan migrate:seed**
* create a cron job on server enter the following command
# Start job every 1 minute
\* * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1




