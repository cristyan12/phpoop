<?php declare(strict_types=1);

namespace Beleriand;

require '../vendor/autoload.php';

class Person
{
    public int $id = 0;
    public string $name;
    public bool $online = false;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function is(object $otherObject): bool
    {
        return $this->id === $otherObject->id;
    }
}

$cristyan = new Person('Cristyan');
$cristyan->id = 1;
$cristyan->online = true;

$cristyan2 = new Person('Cristyan');
$cristyan2->id = 1;

echo "<pre>";

echo ($cristyan->is($cristyan2)) ? 'VERDADERO' : 'FALSO';

echo "<br>";

echo get_class($cristyan). "<br>";
echo get_class($cristyan2). "\n";
