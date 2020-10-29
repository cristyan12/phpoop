<?php declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

$time = new class {
    protected ?int $time = null;

    public function __construct(?int $time = null)
    {
        $this->time = $time ?: time();
    }

    public function __toString(): string
    {
        return date('d/M/Y H:i:s', $this->time);
    }

    public function tomorrow(): self
    {
        return new self($this->time + 24 * 60 * 60);
    }

    public function yesterday(): self
    {
        return new self($this->time - 24 * 60 * 60);
    }
};

$today = $time;

Str::info("Hoy es {$today}");

Str::info("Mañana será {$today->tomorrow()}");

$tomorrow = $today->tomorrow();

Str::info("Pasado mañana será {$tomorrow->tomorrow()}");

Str::info("Ayer fue {$today->yesterday()}");
