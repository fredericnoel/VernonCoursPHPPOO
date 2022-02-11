<?php

class Test
{
    protected int $age;

    public function __construct()
    {
        $this->age = 0;
    }

    public function bonjour($truc) : void
    {   
        echo "Bonjour $truc";
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function setAge(int $configAge) : void
    {
        $this->age = $configAge;
    }
}
