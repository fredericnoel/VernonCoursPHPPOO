<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '1');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

$message = new Machin();

@$message->bonjour("Michel");
echo "<hr />";

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);