<?php
final class Machin extends Test
{
    public float $taille;

    public function getTaille() : float
    {
        return $this->taille;
    }

    public function setTaille(float $combien) : void
    {
        $this->taille = $combien;
    }

    public function afficherAge()
    {
        echo $this->age;
    }
}
