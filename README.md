# ehs - Edmunds' helpers
Useful PHP helper functions


## Setup

`Composer.json:
    "require": {
        .....
        "edmunds22/ehs": "dev-master"
    },`

`composer update`

`use \edmunds22\ehs\ehs as ehs;`

`$testing = ehs::helloWorld();`

**done!**

Testing: `./vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./tests/`

# Todos
- tests
