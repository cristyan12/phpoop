<?php
declare(strict_types=1);

namespace Beleriand;

use IteratorAggregate;
use Traversable;
use ArrayIterator;
use Countable;

class LunchBox implements IteratorAggregate, Countable
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

    public function all(): array
    {
        return $this->food;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty(): bool
    {
        return empty($this->food);
    }

    public function count(): int
    {
        return count($this->food);
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->food);
    }
}
