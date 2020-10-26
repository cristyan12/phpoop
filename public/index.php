<?php

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User;

$user->fill([
    'first_name' => 'Cristyan',
    'last_name' => 'Valera',
]);

$user->nickname = 'cristyan12';

echo "<p>Bienvenido, {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}
