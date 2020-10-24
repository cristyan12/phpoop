<?php

namespace Beleriand\Weapons;

class FireBow extends Weapon
{
    protected float $damage = 30;
    protected bool $magical = true;
    protected string $description =
        ':unit dispara una flecha de fuego a :opponent';
}