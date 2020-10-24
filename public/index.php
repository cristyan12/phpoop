<?php

namespace Beleriand;

require '../vendor/autoload.php';

$soldado = new Unit('Soldado', new Weapons\BasicSword);

// $soldado->setArmor(new Armors\SilverArmor);

$arquero = new Unit('Arquero', new Weapons\CrossBow);

$arquero->attack($soldado);

$soldado->attack($arquero);

$arquero->attack($soldado);

$soldado->attack($arquero);
