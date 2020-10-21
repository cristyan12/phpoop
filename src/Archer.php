<?php

namespace Beleriand;

use Beleriand\Weapons\Bow;

class Archer extends Unit
{
    public function __construct(string $name, Bow $bow)
    {
        parent::__construct($name, $bow);
    }
}
