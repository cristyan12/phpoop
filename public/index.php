<?php

namespace Beleriand;

require '../vendor/autoload.php';

// $node = HtmlNode::input()
//     ->class('container row col-md-6')
//     ->type('date')
//     ->name('content')
//     ->id('content')
//     ->value('1981-12-21');

$node = (new HtmlNode('input'))
    ->name('hola')
    ->type('number');

echo $node->render();