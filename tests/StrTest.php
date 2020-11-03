<?php

use Beleriand\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    /** @test */
    function studly_method_convert_string()
    {
        $this->assertSame('Name', Str::studly('name'));
        $this->assertSame('FullName', Str::studly('full_name'));
        $this->assertSame('BirthDate', Str::studly('birth_date'));
    }
}