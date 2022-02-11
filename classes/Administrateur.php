<?php
class Administrateur extends Utilisateur implements NouvelUtilisateur
{
    // __call() et __callStatic()
    public function __call($methode, $argument)
    {
        echo "Methode : $methode<br />";
        var_dump($argument);   
    }

    private function display()
    {
        echo "Rien";
    }

    public function getName()
    {
        parent::getName(); 
        echo "Ca marche";
        //return strtoupper($this->userName);
    }

    public function effectuerPeriodeEssai()
    {
        echo "Je suis en période d'essai";
    }

    public function getROLE()
    {
        return parent::ROLE;
    }

    public function getAnciennete()
    {
        echo "truc";
    }
}
