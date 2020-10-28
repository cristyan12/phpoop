<?php

namespace Beleriand;

class Str
{
    public static function studly(string $value): string
    {
        $result = ucwords(str_replace(['-', '_'], ' ', $value));

        return str_replace(' ', '', $result);
    }

    public static function info(string $message): void
    {
        echo "<p>{$message}</p>";
    }
}