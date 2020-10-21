<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;
use Beleriand\Weapons\Bow;

class CrossBow extends Bow
{
    protected float $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent): void
    {
        echo "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}