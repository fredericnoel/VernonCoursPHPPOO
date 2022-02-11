<?php
class Administrateur extends Utilisateur implements NouvelUtilisateur
{
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
