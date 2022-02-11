<?php
class Administrateur extends Utilisateur
{
    public function getName()
    {
        parent::getName(); 
        echo "Ca marche";
        //return strtoupper($this->userName);
    }
}
