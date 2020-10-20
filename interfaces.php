<?php

abstract class Unit
{
    protected bool $isAlive = true;
    protected string $name;

    public function __construct(string $name)
    {
        if ($name == '') {
            throw new Exception("The name is required.");
        }
        $this->name = $name;
    }

    public function move(string $direction): string
    {
        return "{$this->name} camina hacia $direction";
    }

    abstract public function attack(string $opponent): string;
}

class Soldier extends Unit
{
    public function attack(string $opponent): string
    {
        return "{$this->name} corta a $opponent en dos";
    }
}

class Archer extends Unit
{
    public function attack(string $opponent): string
    {
        return "{$this->name} dispara una flecha a $opponent";
    }
}

$cris12 = new Archer('cristyan12');
var_dump($cris12->attack('Ramm'));