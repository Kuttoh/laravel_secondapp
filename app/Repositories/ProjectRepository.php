<?php

namespace App\Repositories;

use App\Projects;

class ProjectRepository
{
    public function adminProjects()
    {
        return Projects::where('user_id', '=', '1')
            ->orderBy('title', 'asc')
            ->get();
    }

}
