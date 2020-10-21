<?php

namespace Beleriand;

class Soldier extends Unit
{
    protected float $damage = 40;
    protected ?Armor $armor = null;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function setArmor(?Armor $armor = null): void
    {
        $this->armor = $armor;
    }

    public function attack(Unit $opponent): void
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }

    public function absorbDamage(float $damage): float
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
