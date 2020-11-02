<?php
declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Walter',
    'last_name' => 'White',
    'birthDate' => '07/09/1959',
]);

try {
    echo "{$user->full_name} tiene {$user->age} años";
} catch (\TypeError $e) {
    Str::printError($e);
}
