<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $attack->getDamage() / 3;
    }
}
