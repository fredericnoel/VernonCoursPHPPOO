<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '1');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

$utilisateur1 = new Administrateur('Michel', '1234', 12);
echo $utilisateur1->getName();

var_dump($utilisateur1);
