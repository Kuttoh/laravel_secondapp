<?php

namespace Tests\Unit;


use App\Projects;
use App\Repositories\ProjectRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\Base\UserBase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use DatabaseTransactions;
    use UserBase;

    protected $user;
    protected $repo;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = $this->getUser();

        $this->repo = new ProjectRepository();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testItCanGetAdminProjects()
    {
        $addedProjects = factory(Projects::class, 10)->create(['user_id' => $this->user->id]);

        $projects = $this->repo->orderedProjects();

        $this->assertCount($addedProjects->count(), $projects);

        foreach ($projects as $project) {
            $this->assertEquals($this->user->id, $project->user_id);
        }
    }

    public function testItCanSaveAProject()
    {
        $input = [
            'user_id' => $this->user->id,
            'title' => 'Test',
            'description' => 'Kitu unique enye haiwezi kuwa kwa db',
        ];

        $this->repo->save($input);

        $this->assertDatabaseHas('projects', $input);
    }

    public function testItCanGetProjectById()
    {
        $newProject = factory(Projects::class, 1)->create(['user_id' => $this->user->id]);

        $newProject = $newProject[0];

        $project = $this->repo->getProjectById($newProject->id);

        $this->assertEquals($newProject->id, $project->id);
    }

    public function testItCanUpdateProject()
    {
        $someProject = factory(Projects::class, 1)->create(['user_id' => $this->user->id]);

        $someProject = $someProject[0];

        $input = [
            'user_id' => $this->user->id,
            'title' => 'Other Project',
            'Lorem ipsum dolor sit amet, nonumes voluptatum mel ea, cu case ceteros cum.',
        ];

        $this->repo->update($input, $someProject->id);

        $this->assertDatabaseHas('projects', ['title' => $input['title'], 'id' => $someProject->id]);
    }
}
