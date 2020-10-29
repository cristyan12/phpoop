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
        if ($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer :(");
        }

        Str::info("{$this->name} alumerza {$this->lunch->shift()}");
    }

    public function eatMeal(): void
    {
        $total = $this->lunch->count();

        $food = $this->lunch->filter(fn($food) => ! $food->beverage);

        $beverage = $this->lunch->filter(fn($food) => $food->beverage);

        echo "<pre>";
        print_r($food);
        print_r($beverage);

        Str::info("{$this->name} tiene {$total} alimentos");

        foreach ($food as $item) {
            Str::info("{$this->name} come {$item->name}");
        }

        foreach ($beverage as $item) {
            Str::info("{$this->name} toma {$item->name}");
        }
    }
}
