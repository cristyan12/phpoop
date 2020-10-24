<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class CursedArmor implements Armor
{
    public function absorbDamage(Attack $attack): float;
    {
        return $attack->getDamage() * 2;
    }
}
