<?php

namespace Beleriand;

require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

// Daugthers
$joanie = new User(['name' => 'Joanie']);

$hailey = new User(['name' => 'Hailey']);

// House
$lunchBox = new LunchBox(['Sandwich']);

$lunchBox2 = clone $lunchBox;

// School
$joanie->setLunch($lunchBox);

$hailey->setLunch($lunchBox2);

// Lunch
try {
    $joanie->eat();

    $hailey->eat();

    echo "<pre>";

    var_dump($lunchBox, $lunchBox2);
} catch (\Exception $e) {
    echo "Error: {$e->getMessage()}";
}
