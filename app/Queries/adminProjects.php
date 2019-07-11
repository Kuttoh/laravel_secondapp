<?php

namespace App\Queries;

use App\Projects;

class adminProjects
{
    public function get()
    {
        return Projects::where('user_id', '=', '1')
            ->orderBy('title', 'asc')
            ->get();
    }
}
