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

Log::setLogger(new HtmlLogger);

$soldado = Unit::createSoldier('cristyan')
    ->setArmor(new Armors\SilverArmor);

$arquero = Unit::createArcher('crismely')
    ->setWeapon(new Weapons\FireBow);

$soldado->attack($arquero);

$arquero->attack($soldado);

$soldado->attack($arquero);

$arquero->attack($soldado);
