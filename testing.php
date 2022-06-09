<?php
require('.'.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR.'ehs.php');
use \edmunds22\ehs\ehs as ehs;
$ehs = new ehs();
echo 'helloWorld() => ' . ehs::helloWorld();
echo PHP_EOL;
echo "generateSlug('my testing slug!8&^--') => " . ehs::generateSlug('my testing slug!8&^--');