<?php
require "vendor/autoload.php";
$type = \Sainan\Jokes\Data::getRandomType();
echo "--- ".call_user_func($type."::getName")." joke ---\n";
echo call_user_func($type."::getRandom")."\n";
