<?php
declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User([
    'name' => 'Walter White',
    'birthDate' => '07/09/1959',
]);

try {
    echo "{$user->name} tiene {$user->age} años";
} catch (\TypeError $e) {
    echo "<pre>";
    Str::info("TypeError: {$e->getMessage()}. \r\nFile: {$e->getFile()}({$e->getLine()}).");
    Str::info("Trace: \r\n{$e->getTraceAsString()}");
}
