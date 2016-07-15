Here on GitHub, this task3 directory contains the Laravel application 'official_app'. This application should be run be using 'php artisan serve' in the command line. This will start up the localhost, and one can then visit the appropriate URL in a browser, fill out the form, and register successfully. There are input error checkers, so only enter letters and whitespaces for name and a valid email format for email.

To run the Behat tests, run 'vendor/bin/behat' in the command line.

To run the PHPUnit tests, run 'phpunit' in the command line.

A docker image that sets up the environment in which to run this application is on Docker Hub as 'ledingto/official_app'. Assuming you have Docker installed, please navigate to an empty directory locally on your computer. From this directory in the command line, type 'docker run ledingto/official_app' + return.
