ssp-main
=============

This repo contains the public 2014 SunshinePHP conference site created with Zend Framework 2.
Please check out the info below to ensure all dependencies are met.

Requirements
------------

See [composer.json](composer.json)

Installation
------------

### Main Setup

#### Clone project

Clone this project into your working directory.

#### Use Composer to get dependencies

Tell Composer to download dependencies by running the command:

    ```bash
    $ php composer.phar install
    ```

NOTE: May need to download composer.phar first from http://getcomposer.org

#### Use Phing to create/populate configuration files

    ```bash
    $ php /path/to/phing-latest.phar -f /path/to/build.xml -Ddefault_db_host=localhost -Ddefault_db_username=bdusername -Ddefault_db_password=dbpassword -Ddefault_db_name=dbname -Dsendgrid_username=username -Dsendgrid_password=654321 -Dsendgrid_to=email@domain.com
    ```
    
Alternatively you can simply rename /config/autoload/db.local.php.dist to db.local.php, and /config/autoload/sendgrid.local.php.dist to sendgrid.local.php and update the credentials manually.

#### Configure desired webserver with document room of 'public' directory.

#### Enjoy!!!
