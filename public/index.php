<?php

namespace Beleriand;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Beleriand')
    ->name('content')
    ->id('contenido');

// echo "<pre>";

var_dump($node('name'), $node('width', 100));