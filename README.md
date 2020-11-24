![syntafindev-logo](https://share.syntafin.de/github/dev_slogan.png)

## About Project

This project is just to show how an simple reddit image collection can work.

## Requirements

To run the app, the following requirements are needed:

* PHP >= 7.3
  * Extensions
    * bcmath
    * ctype
    * Fileinfo
    * JSON
    * mbstring
    * OpenSSL
    * PDO
    * Tokenizer
    * XML
* Apache 2.4/NGINX (only tested with NGINX)
* MySQL 5.7/MariaDB 10.2
* Composer
* NodeJS >= 12
* Yarn (NPM is possible too, but not preffered)

Optional:

* Redis

## Install

To install the app on your system, just follow these short instructions:  

1. Clone Repository ``git clone git@github.com:syntafin/redditmemes.git``
2. cd into Directory ``cd redditmemes``
3. Install Composer Depedencies ``composer install``
4. Install JavaScript Depedencies ``yarn install``
5. Copy Enivorment Example File ``cp .env.example .env``
6. Set Application Key ``php artisan key:generate``
7. Setup Database Connection in ``.env`` File!
8. Run Migrations ``php artisan migrate``
9. Compile Style and Scripts ``yarn prod``
10. Run App ``php artisan serve``
11. Enjoy!

Problems? Questions? Don't feel hesistate to ask!
