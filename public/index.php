<?php

namespace Beleriand;

require '../vendor/autoload.php';

Translator::set([
    'Weapon' => ':unit ataca a :opponent',
    'BasicBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
    'CrossBowAttack' => ':unit dispara con la ballesta a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
]);

$soldado = new Unit('Soldado', new Weapons\BasicSword);

$arquero = new Unit('Arquero', new Weapons\BasicBow);

$soldado->attack($arquero);

$arquero->attack($soldado);

$soldado->attack($arquero);

$arquero->attack($soldado);
