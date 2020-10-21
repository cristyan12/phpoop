<?php

namespace Beleriand;

require '../vendor/autoload.php';

$soldado = new Soldier('Soldado', new Weapons\BasicSword);

$arquero = new Archer('Arquero', new Weapons\BasicBow);

$arquero->attack($soldado);

$soldado->attack($arquero);
