<?php
declare(strict_types=1);

namespace Beleriand;

class LunchBox
{
    protected array $food = [];
    protected bool $original = false;

    public function __construct(array $food = [])
    {
        $this->food = $food;
    }

    public function __clone()
    {
        $this->original = true;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty(): bool
    {
        return empty($this->food);
    }
}