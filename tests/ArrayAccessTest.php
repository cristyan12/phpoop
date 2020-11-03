<?php

namespace Tests;

use Beleriand\Model;
use PHPUnit\Framework\TestCase;

class ArrayAccessTest extends TestCase
{
    /** @test */
    function a_model_has_array_access()
    {
        $user = new UserModel([
            'name' => 'Cristyan Valera',
            'email' => 'cristyan12@mail.com',
            'website' => 'cristyan12.github.io',
        ]);

        $this->assertSame('Cristyan Valera', $user['name']);
        $this->assertSame('cristyan12@mail.com', $user['email']);
        $this->assertSame('cristyan12.github.io', $user['website']);
    }
}

class UserModel extends Model implements \ArrayAccess
{
    public function offsetExists($offset): bool
    {

    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value): void
    {

    }

    public function offsetUnset($offset): void
    {

    }
}
