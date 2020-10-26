<?php

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Cristyan',
    'last_name' => 'Valera',
]);

$user->nickname = 'cristyan12';

echo "<pre>";

var_dump($user);

exit();

echo "<p>Nickname: {$user->nickname}</p>";

echo "<p>Bienvenido, {$user->first_name} {$user->last_name}</p>";