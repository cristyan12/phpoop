<?php

namespace Beleriand;

use Beleriand\Food;
use Beleriand\LunchBox;
use Beleriand\User;

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

// Daugthers
$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Emparedado de atún']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Jugo de manzana', 'beverage' => true]),
]);

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
