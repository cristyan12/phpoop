<?php

namespace Beleriand;

class HtmlLogger
{
    public static function info(string $message): void
    {
        echo "<p>$message</p>";
    }
}