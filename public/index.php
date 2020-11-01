<?php
declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User([
    'name' => 'Walter White',
    'birthDate' => '07/09/1959',
]);

echo "{$user->name} tiene {$user->age} años";