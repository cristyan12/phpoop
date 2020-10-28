<?php

namespace Beleriand;

require '../vendor/autoload.php';

$data = file_get_contents('../storage/user.log');

$user = unserialize($data);

echo '<pre>';

print_r($user);
