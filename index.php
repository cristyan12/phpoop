<?php

require_once 'src/helpers.php';

spl_autoload_register(fn (string $className) => require "src/$className.php");

$soldier = new Soldier('Soldado Umbopa');
$archer = new Archer('Arquero Sir Henry');

$soldier->setArmor(new CursedArmor);

$archer->attack($soldier);
$soldier->attack($archer);

$archer->attack($soldier);
$soldier->attack($archer);
