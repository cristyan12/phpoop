<?php
declare(strict_types=1);

function show(string $message): void {
    echo "<p>$message</p>";
}

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

interface Armor
{
    public function absorbDamage(float $damage): float;
}

class BronzeArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage / 3;
    }
}

class CursedArmor implements Armor
{
    public function absorbDamage(float $damage): float
    {
        return $damage * 2;
    }
}

class Soldier extends Unit
{
    protected float $damage = 40;
    protected ?Armor $armor = null;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    public function setArmor(?Armor $armor = null): void
    {
        $this->armor = $armor;
    }

    public function attack(Unit $opponent): void
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }

    public function absorbDamage(float $damage): float
    {
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}

class Archer extends Unit
{
    protected float $damage = 30;

    public function attack(Unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}

$soldier = new Soldier('Soldado Umbopa');
$archer = new Archer('Arquero Sir Henry');

$soldier->setArmor(new CursedArmor);

$archer->attack($soldier);
$soldier->attack($archer);

$archer->attack($soldier);
$soldier->attack($archer);
