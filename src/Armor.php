<?php

namespace Beleriand;

interface Armor
{
    public function absorbDamage(float $damage): float;
}