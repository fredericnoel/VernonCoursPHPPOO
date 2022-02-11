<?php
class Produit
{
    protected $designation;
    protected $quantite;

    public function __construct($a, $b)
    {
        $this->designation = $a;
        $this->quantite = $b;
    }

    public function incrementer()
    {
        $this->quantite++; 
        echo $this->quantite . "<br />";
        return $this->quantite;
    }
}
