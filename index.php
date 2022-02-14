<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '1');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

/*$message = new Machin();

@$message->bonjour("Michel");
echo "<hr />";

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);*/

include './classes/NamespaceFormel.php';

use function Exemple\bonjour as machin;
machin();

use function \bonjour as salut;
salut();

/*$utilisateur = new \Exemple\User();*/

use \Exemple\User;
$utilisateur = new User();

var_dump($utilisateur);
