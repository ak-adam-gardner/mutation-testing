# Mutation testing
Testing legacy code, using code coverage and mutation testing

> ======================================
> Gilded Rose Requirements Specification
> ======================================
> 
> Hi and welcome to team Gilded Rose. As you know, we are a small inn with a prime location in a
> prominent city ran by a friendly innkeeper named Allison. We also buy and sell only the finest goods.
> Unfortunately, our goods are constantly degrading in quality as they approach their sell by date. We
> have a system in place that updates our inventory for us. It was developed by a no-nonsense type named
> Leeroy, who has moved on to new adventures.

This introduction, and this Kata is taken from [emilybache](https://github.com/emilybache/GildedRose-Refactoring-Kata) and this Kata was originally created by [Terry Hughes](https://github.com/NotMyself/GildedRose)

i've merely taken the above repository and incorporated coverage reporting and mutation testing. Feel free to check out the originals and undertake your own approach. 


Getting Started
---------------

To begin the kata, install the requirements below then run:

```
composer install
```

to run unit tests:
```
composer test
```
to generate test coverage report:
```
composer test-coverage
``` 

Requirements
------------

**PHP 7:**

This is usually bundled with your operating system, or fetchable using a package manager like `apt` or `homebrew`.

Windows users can find the latest version here: https://windows.php.net/download#php-7.3

If you want to compile from source code, that can be found here: https://www.php.net/downloads.php

**Composer:**

Composer is PHP's main package and dependency management tool.

It can be downloaded here: https://getcomposer.org/download/

**Xdebug:**
Xdebug was required to successfully run code coverage commands

```
pecl install xdebug
```

article about this here: https://medium.com/yish/xdebug-on-php7-3-laravel-valet-with-homebrew-6ad1a7c3c1ad