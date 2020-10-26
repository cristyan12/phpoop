<?php

namespace Beleriand;

class User
{
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes = []): void
    {
        $this->attributes = $attributes;
    }

    public function setAttribute(string $name, string $value): void
    {
        $this->attributes[$name] = $value;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getAttribute(string $name): string
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return 'N/D';
    }

    public function hasAttribute(string $name): bool
    {
        return isset($this->attributes[$name]);
    }

    public function __set(string $name, string $value): void
    {
        $this->setAttribute($name, $value);
    }

    public function __get(string $name): string
    {
        return $this->getAttribute($name);
    }

    public function __isset(string $name): bool
    {
        return $this->hasAttribute($name);
    }

    public function __unset(string $name): void
    {
        unset($this->attributes[$name]);
    }
}
