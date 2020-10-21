<?php

class BronzeArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage / 2;
    }
}
