<?php

namespace Tests;

use Beleriand\Model;
use PHPUnit\Framework\TestCase;

class ArrayAccessTest extends TestCase
{
    /** @test */
    function it_can_get_offset_with_array_access()
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
    /** @test */
    function it_can_check_if_offset_exists()
    {
        $user = new UserModel([
            'name' => 'Cristyan Valera',
        ]);

        $this->assertTrue(isset($user['name']));
        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));
        $this->assertTrue(empty($user['email']));
    }
    /** @test */
    function it_set_and_get_values_with_array_access()
    {
        $user = new UserModel;
        $user['name'] = 'Cristyan Valera';

        $this->assertSame('Cristyan Valera', $user['name']);
    }
    /** @test */
    function it_can_set_and_unset_with_array_access()
    {
        $user = new UserModel;
        $user['name'] = 'Cristyan Valera';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}

class UserModel extends Model implements \ArrayAccess
{
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset): void
    {
        unset($this->$offset);
    }
}
