<?php
declare(strict_types=1);

namespace Beleriand;

class User extends Model
{
    protected LunchBox $lunch;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->lunch = new LunchBox();  // Null Objects
    }

    public function setLunch(LunchBox $lunch): void
    {
        $this->lunch = $lunch;
    }

    public function eat(): void
    {
        // Happy path
        if ($this->lunch->isEmpty()) {
            throw new \Exception(
                "{$this->name} no tiene nada para comer :(");
        }

        echo "<p>{$this->name} alumerza {$this->lunch->shift()}</p>";
    }
}
