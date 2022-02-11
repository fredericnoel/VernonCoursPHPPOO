<?php
class Administrateur extends Utilisateur
{
    public function getName()
    {
        parent::getName(); 
        echo "Ca marche";
        //return strtoupper($this->userName);
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
