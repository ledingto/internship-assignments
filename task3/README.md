Here on GitHub, this task3 directory contains the Laravel application 'official_app'. It is important to set up the database connection. Do so by ensuring that config/database.php is set to default sqlite and config/app.php is set to development (not production). Then run 'touch database/database.sqlite'. Then run 'cp .env.example .env' and ensure that in .env DB_CONN = sqlite, PORT=3306, HOST=127.0.0.1, and DATABASE=/your/path/to/database/database.sqlite. Then run 'php artisan key:generate'. Then run 'php artisan migrate'. This application should be run be using 'php artisan serve' in the command line. This will start up the localhost, and one can then visit the appropriate URL in a browser, fill out the form, and register successfully. There are input error checkers, so only enter letters and whitespaces for name and a valid email format for email.

To run the Behat tests, run 'vendor/bin/behat' in the command line.

To run the PHPUnit tests, run 'phpunit' in the command line.

A docker image that sets up the environment in which to run this application is on Docker Hub as 'ledingto/official_app'. Assuming you have Docker installed, please navigate to an empty directory locally on your computer. From this directory in the command line, type 'docker run ledingto/official_app' + return.
