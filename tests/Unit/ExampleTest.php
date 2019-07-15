<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testHomePageHasWelcome()
    {
        $this->get('/')
            ->assertSee('Welcome');
    }

    public function testProjectsPageHasCreateNew()
    {
        $this->get('/projects')
            ->assertSee('Create New');
    }
}
