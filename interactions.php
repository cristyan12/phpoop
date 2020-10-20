<?php
declare(strict_types=1);

function show(string $message): void {
    echo "<p>$message</p>";
}

abstract class Unit
{
    protected int $hp = 40;
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHp(): int
    {
        return $this->hp;
    }

    public function move(string $direction): string
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent): void;

    public function takeDamage(int $damage): void
    {
        $this->setHp($this->hp - $damage);

        if ($this->getHp() <= 0) {
            $this->die();
        }
    }

    private function die(): void
    {
        show("{$this->name} muere");
    }

    private function setHp(int $points): void
    {
        $this->hp = $points;

        show("{$this->name} => {$this->hp} puntos de vida.");
    }
}

class Soldier extends Unit
{
    protected int $damage = 40;

    public function attack(Unit $opponent): void
    {
        show("{$this->name} golpea a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage(int $damage): void
    {
        parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    protected int $damage = 30;

    public function attack(Unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage(int $damage): void
    {
        if (rand(0, 1)) {
            parent::takeDamage($damage);
        }
    }
}

$soldier = new Soldier('umbopa');
$archer = new Archer('henry');

$archer->attack($soldier);

$soldier->attack($archer);

$archer->attack($soldier);
