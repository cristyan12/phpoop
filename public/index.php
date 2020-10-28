<?php

namespace Beleriand;

require '../vendor/autoload.php';

$user = new User([
    'name' => 'Cristyan',
    'email' => 'admin@beleriand.com',
]);

$result = serialize($user);

print_r($result);

file_put_contents('../storage/user.log', $result);
