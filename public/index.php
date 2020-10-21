<?php

namespace Beleriand;

use Beleriand\Armors\CursedArmor;

require '../vendor/autoload.php';

$soldier = new Soldier('Soldado Umbopa');
$archer = new Archer('Arquero Sir Henry');

$soldier->setArmor(new CursedArmor);

$archer->attack($soldier);
$soldier->attack($archer);

$archer->attack($soldier);
$soldier->attack($archer);
