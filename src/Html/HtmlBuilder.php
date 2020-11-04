<?php
declare(strict_types=1);

namespace Beleriand\Html;

class HtmlBuilder
{
    use Macroable;

    public function hr(): string
    {
        return "<hr>";
    }
}