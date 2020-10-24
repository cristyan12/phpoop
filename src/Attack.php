<?php

namespace Beleriand;

class Attack
{
    protected float $damage;
    protected bool $magical;
    protected string $description;

    public function __construct(float $damage, bool $magical, string $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return Translator::get($this->description, [
            'unit' => $attacker->getName(),
            'opponent' => $opponent->getName(),
        ]);
    }

    public function getDamage(): float
    {
        return $this->damage;
    }

    public function isMagical(): bool
    {
        return $this->magical;
    }

    public function isPhysical(): bool
    {
        return ! $this->isMagical();
    }
}
