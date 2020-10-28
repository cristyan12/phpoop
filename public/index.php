<?php

namespace Beleriand;

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

// Daugthers
$joanie = new User(['name' => 'Joanie']);

// House
$lunchBox = new LunchBox(['Sandwich', 'Jugo de naranja', 'Papas', 'Manzana']);

// School
$joanie->setLunch($lunchBox);

// Lunch
try {
    $joanie->eatMeal();
} catch (\Exception $e) {
    echo "Error: {$e->getMessage()}";
} catch (\TypeError $e) {
    echo "Error: {$e->getMessage()}";
}
