<?php

namespace Beleriand;

use Beleriand\Armors\Armor;
use Beleriand\Weapons\Weapon;

abstract class Unit
{
    protected float $hp = 40;
    protected string $name;
    protected ?Armor $armor = null;
    protected Weapon $weapon;

    public function __construct(string $name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): float
    {
        return $this->hp;
    }

    public function setArmor(?Armor $armor = null): void
    {
        if ($this->armor) {
            $this->armor = $armor;
        }
    }

    public function absorbDamage(float $damage): float
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }

    public function move(string $direction): void
    {
        show("{$this->name} camina hacia $direction");
    }

    public function attack(Unit $opponent): void
    {
        $this->weapon->getDescription($this, $opponent);

        $opponent->takeDamage($this->weapon->getDamage());
    }

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
}
