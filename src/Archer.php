<?php

namespace Beleriand;

class Archer extends Unit
{
    protected float $damage = 30;

    public function attack(Unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}

