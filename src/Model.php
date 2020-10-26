<?php

namespace Beleriand;

abstract class Model
{
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $params = []): void
    {
        $this->attributes = $params;
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
        $value = $this->getAttributeValue($name);

        if ($this->hasGetMutator($name)) {
            return $this->mutateAttribute($name, $value);
        }

        return $value;
    }

    protected function hasGetMutator(string $name): bool
    {
        return method_exists($this, 'get'.str::studly($name).'Attribute');
    }

    protected function mutateAttribute(string $name, string $value): string
    {
        return $this->{'get'.str::studly($name).'Attribute'}($value);
    }

    public function getAttributeValue(string $name): string
    {
        return $this->attributes[$name] ?? $name;
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
