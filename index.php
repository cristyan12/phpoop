<?php

use Warcraft\BronzeArmor;
use Beleriand\{Archer, CursedArmor, Soldier};

require 'src/autoload.php';
require 'src/helpers.php';
require 'vendor/BronzeArmor.php';

$soldier = new Soldier('Soldado Umbopa');
$archer = new Archer('Arquero Sir Henry');

$soldier->setArmor(new CursedArmor);

$archer->attack($soldier);
$soldier->attack($archer);

$archer->attack($soldier);
$soldier->attack($archer);
