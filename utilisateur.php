<?php
date_default_timezone_set('Europe/Paris');
ini_set('display_errors', '1');

spl_autoload_register(function ($className) {
    include './classes/' . $className . '.php';
});

$utilisateur1 = new Administrateur('Michel', '1234', 12);
//echo $utilisateur1->getName();
//$utilisateur1->choucroute("saucisse");
// __get() | $utilisateur1->truc;

// __set() | $utilisateur1->machine = 22;

echo $utilisateur1;

$bidule = new Administrateur('MICHEL', '1234');
// $bidule('coucou');
$cloneObjet = clone $bidule;


$addition = function($a, $b) {
    return $a + $b;
};

echo $addition(10, 20.2);

$anonyme = new class {
    public $nom;

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }
};

$anonyme->setNom('Michel');
echo $anonyme->getNom;

// Closure
(function() {
    echo "Il faut beau et chaud";
})();


