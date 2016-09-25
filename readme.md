#That1Card
Admin site and REST API for That1Card android application.

#Requirements
1. PHP 5.2 or greater.
2. MySQL 
3. composer

#Build Instructions

1. Clone the repo 
2. Cd to the directory and run `composer install`
3. Copy the .env.example file and rename it as `.env`
4. Modify the `.env` file with the correct credentials.
5. Run `php artisan key:generate`
6. Run `php artisan serve --port 8000`
7. Fire up localhost:8000 to preview the site.


This site was built with [Milligram CSS](https://milligram.github.io/) framework 
