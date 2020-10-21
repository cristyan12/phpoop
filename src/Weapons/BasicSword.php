<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;

class BasicSword extends Weapon
{
    protected float $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent): void
    {
        echo "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }
}