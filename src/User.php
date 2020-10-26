<?php

namespace Beleriand;

class User extends Model
{
    public function getFirstNameAttribute(string $value): string
    {
        return Str::studly($value);
    }

    public function getLastNameAttribute(string $value): string
    {
        return Str::studly($value);
    }
}
