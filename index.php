<?php
declare(strict_types=1);

class Person
{
    protected string $firstName;
    protected string $lastName;
    protected string $nickname;
    protected string $birthDate;
    protected int $changedNickname = 0;

    // TODO: Add Birth date and valid that a nickname >= 3 chars

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getFullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function getNickname(): string
    {
        return strtolower($this->nickname);
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function setNickname(string $nickname): void
    {
        if ($this->changedNickname >= 2) {
            throw new Exception(
                "You can't change a nickname more than 2 times."
            );
        }

        $this->nickname = $nickname;

        $this->changedNickname++;
    }
}

$person = new Person('Cristyan', 'Valera');

$person->setBirthDate('21/12/1981');
$person->setNickname('CRISTYAN12');

var_dump("Nombre: {$person->getFullName()}");
var_dump("Nickname: {$person->getNickname()}");
var_dump("Fecha de nacimiento: {$person->getBirthDate()}");
