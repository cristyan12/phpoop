<?php

namespace Beleriand;

require '../vendor/autoload.php';

$node = new HtmlNode('textarea', 'Contenido', [
    'name' => 'content',
    'id' => 'content',
]);

$br = HtmlNode::br();

$node2 = HtmlNode::input()
    ->type('date')
    ->name('content')
    ->id('content');

echo $node->render();
echo $br->render();
echo $br->render();
echo $node2->render();
