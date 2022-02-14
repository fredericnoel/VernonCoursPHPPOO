<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '1');

include './vendor/autoload.php';


spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});


use SebastianBergmann\Timer\Timer;
$timerFor = new Timer();
$timerWhile = new Timer();

$timerFor->start();

for ($i = 0 ; $i < 10000 ; $i++) {}

$resultatFor = $timerFor->stop();
var_dump($resultatFor->asMicroseconds());

$timerWhile->start();
echo "<br />";

$i = 0;
while ($i < 10000) {
    $i++;
}

$resultatWhile = $timerWhile->stop();
var_dump($resultatWhile->asMicroseconds());

//var_dump($timer);
//$value = $timer->stop();
//$time = $timer->stop();
/*$message = new Machin();*/
//var_dump($value->asMilliseconds());
//$message->bonjour("Michel");
/*echo "<hr />";

$homme = new Test();

$homme->setAge(42);

echo $homme->age;

var_dump($homme);

include './classes/NamespaceFormel.php';

use function Exemple\bonjour as machin;
machin();

use function \bonjour as salut;
salut();

$utilisateur = new \Exemple\User();

use \Exemple\User;
$utilisateur = new User();

var_dump($utilisateur);
*/

