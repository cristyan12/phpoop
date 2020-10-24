<?php

namespace Beleriand;

class Translator
{
    protected static array $messages = [];

    public static function set(array $messages): void
    {
        static::$messages = $messages;
    }

    public static function get(string $key, array $params = []): string
    {
        if (! static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(static::$messages[$key], $params);
    }

    public static function has(string $key): bool
    {
        return isset(static::$messages[$key]);
    }

    public static function replaceParams($message, array $params): string
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}