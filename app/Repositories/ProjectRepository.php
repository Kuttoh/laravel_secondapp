<?php

namespace App\Repositories;

use App\Projects;

class ProjectRepository
{
    public function orderedProjects()
    {
        return Projects::orderBy('title', 'asc')
            ->get();
    }

    public function save($input)
    {
        return Projects::create($input);
    }

    public function getProjectById($id)
    {
        return Projects::findOrFail($id);
    }

    public function update($input, $id)
    {
        $project = $this->getProjectById($id);

        $project->update($input);
    }

    public function delete($id)
    {
        $project = $this->getProjectById($id);

        $project->delete();
    }
}
