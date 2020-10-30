<?php declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

// Traits
trait CanPerformBasicActions
{
    public function move(): void
    {
        echo "<p>Caminó</p>";
    }
}

trait CanRide
{
    public function move(): void
    {
        echo "<p>Cabalgó</p>";
    }
}

trait CanShootArrows
{
    public function shoot()
    {
        echo "<p>Disparó</p>";
    }

    abstract public function getArrows(): int;
}

// Classes

class Knight
{
    use CanRide;
}


class MountedArcher
{
    use CanRide;
    use CanShootArrows;

    public int $arrows = 20;

    public function getArrows(): int
    {
        return 100;
    }

    public function move(): void
    {
        echo "<p>El método de la clase sobreescribe al mismo método del trait. Como el método de la clase puede sobreescribir al método heredado.</p>";
    }
}

$mountedArcher = new MountedArcher();
$mountedArcher->shoot();

echo "<p>{$mountedArcher->getArrows()}</p>";
