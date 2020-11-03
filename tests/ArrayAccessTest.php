<?php

namespace Tests;

use Beleriand\Model;
use PHPUnit\Framework\TestCase;

class ArrayAccessTest extends TestCase
{
    public function new(array $attributes = [])
    {
        return new class($attributes) extends Model {};
    }
    /** @test */
    function it_can_get_offset_with_array_access()
    {
        $user = $this->new([
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
        $user = $this->new([
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
        $user = $this->new();
        $user['name'] = 'Cristyan Valera';

        $this->assertSame('Cristyan Valera', $user['name']);
    }
    /** @test */
    function it_can_set_and_unset_with_array_access()
    {
        $user = $this->new();
        $user['name'] = 'Cristyan Valera';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }
}
