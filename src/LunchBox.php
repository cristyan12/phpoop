<?php
declare(strict_types=1);

namespace Beleriand;

class LunchBox implements \Iterator
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

    public function current()
    {
        $var = current($this->food);

        echo "<p>Actual: $var</p>";
    }

    public function key()
    {
        $var = key($this->food);

        echo "<p>Clave: $var</p>";

        return $var;
    }

    public function next()
    {
        $var = next($this->food);

        echo "<p>Siguiente: $var</p>";

        return $var;
    }

    public function rewind(): void
    {
        echo "<p>Rebobinando</p>";

        reset($this->food);
    }

    public function valid(): bool
    {
        $clave = key($this->food);

        $var = ($clave !== NULL && $clave !== FALSE);

        echo "<p>Válido: $var</p>";

        return $var;
    }
}
