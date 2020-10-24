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

    /**
     * @return string|array
     */
    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace(
            [':unit', ':opponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
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
