<?php

namespace Beleriand;

class User
{
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttribute(string $name): string
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return 'N/D';
    }

    public function __get(string $name): string
    {
        return $this->getAttribute($name);
    }
}
