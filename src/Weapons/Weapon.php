<?php

namespace Beleriand\Weapons;

use Beleriand\Attack;

abstract class Weapon
{
    protected float $damage = 0;
    protected bool $magical = false;
    protected string $description = ':unit ataca a :opponent';

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }
}
