<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

abstract class Armor
{
    public function absorbDamage(Attack $attack): float
    {
        if ($attack->isMagical()) {
            return $this->absorbMagicDamage($attack);
        }

        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }

    public function absorbMagicDamage(Attack $attack): float
    {
        return $attack->getDamage();
    }
}