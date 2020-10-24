<?php

namespace Beleriand;

use Beleriand\Armors\Armor;
use Beleriand\Weapons\Weapon;

class Unit
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

    public function setArmor(Armor $armor): void
    {
        $this->armor = $armor;
    }

    public function setWeapon(Weapon $weapon): void
    {
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

    public function absorbDamage(Attack $attack): float
    {
        if ($this->armor) {
            return $this->armor->absorbDamage($attack);
        }

        return $attack->getDamage();
    }

    public function attack(Unit $opponent): void
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack): void
    {
        $this->hp -= $this->absorbDamage($attack);

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
