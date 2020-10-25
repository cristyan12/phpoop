<?php

namespace Beleriand;

class HtmlLogger implements Logger
{
    public function info(string $message): void
    {
        echo "<p>$message</p>";
    }
}