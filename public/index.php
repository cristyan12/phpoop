<?php

namespace Beleriand;

require '../vendor/autoload.php';

$node = new HtmlNode('input', null, ['name' => 'content']);

echo $node->render();
