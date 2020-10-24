<?php

namespace Beleriand\Weapons;

use Beleriand\Unit;

class BasicSword extends Weapon
{
    protected float $damage = 20;
    protected string $description = ':unit ataca con la espada a :opponent';
}