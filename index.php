<?php
date_default_timezone_set('Europe/Paris');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

$message = new Machin();

@$message->bonjour("Michel");
echo "<hr />";

$homme = new Test();

//$homme->setAge(42);

var_dump($homme);