<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        return $attack->getDamage() / 2;
    }
}
