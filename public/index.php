<?php
declare(strict_types=1);

namespace Beleriand;

use Beleriand\Html\HtmlBuilder;

require '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Walter',
    'last_name' => 'White',
    'birthDate' => '07/09/1959',
]);


try {
    HtmlBuilder::macro('hola', fn() => Str::info('Hola'));

    echo "{$user->full_name} tiene {$user->age} años";

    echo HtmlBuilder::hola();
} catch (\TypeError $e) {
    Str::printError($e);
} catch (\BadMethodCallException $e) {
    Str::printError($e);
}
