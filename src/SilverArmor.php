<?php

class SilverArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage / 3;
    }
}
