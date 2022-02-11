<?php
class Administrateur extends Utilisateur implements NouvelUtilisateur
{
    // __call() et __callStatic()
    public function __call($methode, $argument)
    {
        echo "Methode : $methode<br />";
        var_dump($argument);   
    }

    // __get() et __set()
    public function __get($nomPropriete)
    {
        echo "Propriété : $nomPropriete";
    }

    public function __set($nomPropriete, $value)
    {
        echo "Propriete : $nomPropriete avec valeur : $value";
    }

    // __toString()
    public function __toString()
    {
        return "Bien tenté";
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
