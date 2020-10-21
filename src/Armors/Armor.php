<?php

namespace Beleriand\Armors;

interface Armor
{
    public function absorbDamage(float $damage): float;
}