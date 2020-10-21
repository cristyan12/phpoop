<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;

abstract class Weapon
{
    protected float $damage = 0;

    public function getDamage(): float
    {
        return $this->damage;
    }

    abstract public function getDescription(Unit $attacker, Unit $opponent): void;
}