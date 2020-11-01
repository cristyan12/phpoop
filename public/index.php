<?php
declare(strict_types=1);

namespace Beleriand;

// require '../vendor/Laravel/Macroable.php';
// require '../vendor/Laravel/HtmlBuilder.php';
require '../vendor/autoload.php';

use Laravel\HtmlBuilder;

try {
    HtmlBuilder::macro('success', function(string $message): string {
        return "<p style=\"background-color: #dff0d8;
            border-color: #d0e9c6; color: #3c763d;
            padding: 10px\">{$message}</p>" . $this->hr();
    });

    HtmlBuilder::macro('p', fn(string $text): string => "<p>{$text}</p>");

    $html = new HtmlBuilder();

    echo $html->success("Todo salió bien!");

    echo $html->p('Esta es una prueba de un párrafo.');

} catch (\BadMethodCallException $e) {
    echo "BadMethodCallException: {$e->getMessage()}";
}
