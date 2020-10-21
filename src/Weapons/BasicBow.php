<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;
use Beleriand\Weapons\Bow;

class BasicBow extends Bow
{
    protected float $damage = 20;

    public function getDescription(Unit $attacker, Unit $opponent): void
    {
        echo "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}