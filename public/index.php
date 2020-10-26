<?php

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User;

$user->fill([
    'first_name' => 'Cristyan',
    'last_name' => 'Valera',
]);

echo "<p>Bienvenido, {$user->first_name} {$user->last_name}</p>";
