<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $attack): float;
    {
        return $attack->getDamage() * 2;
    }
}
