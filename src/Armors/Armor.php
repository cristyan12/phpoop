<?php

namespace Beleriand\Armors;

use Beleriand\Attack;

interface Armor
{
    public function absorbDamage(Attack $attack): float;
}