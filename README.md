ssp-main
=============

This repo contains the public SunshinePHP conference website created using Zend Framework 2.
Please check out the info below to ensure all dependencies are met.

Requirements
------------

* See [composer.json](composer.json)
* The ssp-contact module includes SendGrid as the preferred email method.

Installation
------------

#### Clone project

Clone this repo to your working directory.

#### Use Composer to get dependencies

Tell Composer to download dependencies by running the command:

```bash
$ php composer.phar install
```

NOTE: May need to download composer.phar first from http://getcomposer.org

#### Use Phing to create/populate configuration files

```bash
$ php /path/to/phing-latest.phar -f /path/to/build.xml -D default_db_host=localhost -D default_db_username=bdusername -D default_db_password=dbpassword -D default_db_name=dbname -D sendgrid_username=username -D sendgrid_password=654321 -D sendgrid_to=email@domain.com
```
    
Alternatively you can simply rename /config/autoload/db.local.php.dist to db.local.php, and /config/autoload/sendgrid.local.php.dist to sendgrid.local.php and update the credentials manually.

#### Configure webserver

Set up desired webserver with document room of 'public' directory.

#### Enjoy!!!
