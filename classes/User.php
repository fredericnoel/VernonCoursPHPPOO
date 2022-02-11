<?php
class User
{
    protected $nom;
    protected $prenom;
    protected $quantite;

    public function __construct($a, $b, $c)
    {
        $this->nom = $a;
        $this->prenom = $b;
        $this->quantite = $c;
    }

    public function incrementer()
    {
        $this->quantite++; 
        echo $this->quantite . "<br />";
        return $this->quantite;
    }
}
