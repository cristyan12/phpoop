<?php

namespace Beleriand;

class User extends Model
{
    private string $dbPass = 'SECRET';

    public function __toString(): string
    {
        return "nombre: {$this->name}\remail: {$this->email}";
    }

    public function __sleep(): array
    {
        return ['attributes'];
    }

    public function __wakeup(): void
    {
        //
    }

    public function getFirstNameAttribute(string $value): string
    {
        return Str::studly($value);
    }

    public function getLastNameAttribute(string $value): string
    {
        return Str::studly($value);
    }
}
