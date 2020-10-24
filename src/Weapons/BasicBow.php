<?php

namespace Beleriand\Weapons;

class BasicBow extends Weapon
{
    protected float $damage = 20;
    protected string $description = ':unit dispara una flecha a :opponent';
}