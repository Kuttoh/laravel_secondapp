<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDatabaseHasUserKuttoh()
    {
        $this->assertDatabaseHas('users', ['email'=>'kuttohisaac@gmail.com']);
    }
}
