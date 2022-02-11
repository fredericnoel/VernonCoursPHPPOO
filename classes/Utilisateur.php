<?php
abstract class Utilisateur
{
    public const TVA = 1.2;
    public const ROLE = 2;
    public const CDI = true;
    protected string $userName;
    protected string $userPassword;

    public function __construct(string $name, string $password)
    {
        $this->userName = $name;
        $this->userPassword = $password;
    }

    abstract public function getAnciennete(); 

    public function getName()
    {
        return $this->userName;
    }

    public function getROLE()
    {
        return self::ROLE;
    }
}
