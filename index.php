<?php
declare(strict_types=1);

class Person
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function __toString(): string
    {
        return $this->fullName();
    }
}

$cristyan = new Person('Cristyan', 'Valera');

$yusmely = new Person('Yusmely', 'Garcia');

var_dump("{$cristyan} es amigo de {$yusmely}");