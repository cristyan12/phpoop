<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }
}