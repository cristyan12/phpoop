<?php

namespace Beleriand\Armors;

class CursedArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage * 2;
    }
}
