<?php

namespace Tests\Unit;


use App\Mail\ProjectCreated;
use App\Projects;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testItCanCreateAProject()
    {
        $testProject = factory(Projects::class, 1)->create(['user_id' => 1]);

        foreach ($testProject as $element)
        {
            $testCreated = $element->id;
        }

        $latestProject = Projects::all()->last()->id;

        $this->assertEquals($testCreated, $latestProject);
    }
}
