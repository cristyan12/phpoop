<?php

namespace Beleriand\Weapons;

use Beleriand\Attack;

abstract class Weapon
{
    protected float $damage = 0;
    protected bool $magical = false;

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey(): string
    {
        return str_replace('Beleriand\Weapons\\', '', get_class($this)).'Attack';
    }
}
