<?php
declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

// $data = file_get_contents('../storage/user.log');

// $user = unserialize($data);

// echo '<pre>';

// print_r($user);

$url = file_get_contents('https://www.google.com');

$guardado = file_put_contents('../storage/url.data', $url);

echo "Guardado";

// function sum(int $a, int $b): float {
//     return $a + $b;
// }

// try {
//     var_dump(sum(1, 2));

//     echo "<br>";

//     var_dump(sum(1, 3.2));
// } catch (\TypeError $e) {
//     echo 'Error: ' . $e->getMessage();
// }