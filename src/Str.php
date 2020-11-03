<?php

namespace Beleriand;

class Str
{
    public static function studly(string $value): string
    {
        $result = ucwords(str_replace(['_', '-'], ' ', $value));

        return str_replace(' ', '', $result);
    }

    public static function info(string $message): void
    {
        echo "<p>{$message}</p>";
    }

    public static function printError($e): void
    {
        echo "<pre>";
        Str::info("Error: {$e->getMessage()}. \r\nFile: {$e->getFile()}({$e->getLine()}).");
        Str::info("Trace: \r\n{$e->getTraceAsString()}");
    }
}