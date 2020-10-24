<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;

class CrossBow extends Weapon
{
    protected float $damage = 25;
    protected string $description = ':unit dispara una flecha a :opponent';
}