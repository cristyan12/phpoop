<?php

namespace Beleriand;

abstract class Unit
{
    protected float $hp = 40;
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): float
    {
        return $this->hp;
    }

    public function move(string $direction): void
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent): void;

    public function takeDamage(float $damage): void
    {
        $this->hp -= $this->absorbDamage($damage);

        show("{$this->name} => {$this->hp} puntos de vida.");

        if ($this->getHp() <= 0) {
            $this->die();
        }
    }

    private function die(): void
    {
        show("{$this->name} muere");

        exit();
    }

    protected function absorbDamage(float $damage): float
    {
        return $damage;
    }
}
