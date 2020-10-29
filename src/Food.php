<?php declare(strict_types=1);

namespace Beleriand;

class Food extends Model
{
    public function getBeverageAttribute(): bool
    {
        return $this->attributes['beverage'] ?? false;
    }
}

