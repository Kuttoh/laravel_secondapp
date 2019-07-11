<?php

namespace App\Repositories;

use App\Projects;

class ProjectRepository
{
    public function adminProjects()
    {
        return Projects::where('id', '>=', '10')->get();
    }

}
