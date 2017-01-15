<?php
require_once(__DIR__."/vendor/autoload.php");

use Drumser\Stack\SimpleStack;

$simpleStack = new SimpleStack();
$simpleStack->push(10);
$simpleStack->push(20);
$simpleStack->push(30);

echo "{$simpleStack->pop()}" . "\n";
echo "{$simpleStack->pop()}" . "\n";
echo "{$simpleStack->pop()}" . "\n";