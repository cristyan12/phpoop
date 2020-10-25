<?php

namespace Beleriand;

use Beleriand\Armors\Armor;
use Beleriand\Weapons\Weapon;

class Unit
{
    protected float $hp = 40;
    protected string $name;
    protected Armor $armor;
    protected Weapon $weapon;

    public function __construct(string $name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new Armors\MissingArmor();
    }

    public static function createArcher(string $name): Unit
    {
        $arquer = new Unit($name, new Weapons\BasicBow);

        return $arquer;
    }

    public static function createSoldier(string $name): Unit
    {
        $soldier = new Unit($name, new Weapons\BasicSword);

        $soldier->setArmor(new Armors\BronzeArmor);

        return $soldier;
    }

    public function setArmor(Armor $armor): self
    {
        $this->armor = $armor;

        return $this;
    }

    public function setWeapon(Weapon $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): float
    {
        return $this->hp;
    }

    public function attack(Unit $opponent): void
    {
        $attack = $this->weapon->createAttack();

        FileLogger::info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack): void
    {
        $this->hp -= $this->armor->absorbDamage($attack);

        FileLogger::info("{$this->name} ahora le quedan {$this->hp} puntos de vida.");

        if ($this->getHp() <= 0) {
            $this->die();
        }
    }

    private function die(): void
    {
        FileLogger::info("{$this->name} muere");

        exit();
    }
}
