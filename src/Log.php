<?php

namespace Beleriand;

class Log
{
    protected static Logger $logger;

    public static function setLogger(Logger $logger): void
    {
        static::$logger = $logger;
    }

    public static function info(string $message): void
    {
        static::$logger->info($message);
    }
}