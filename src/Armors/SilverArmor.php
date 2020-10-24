<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 3;
        }

        return $attack->getDamage();
    }
}
