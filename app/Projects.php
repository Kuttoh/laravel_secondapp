<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table="projects";

    protected $guarded=['id'];

    public function tasks()
    {
       return $this->hasMany(Task::class);
    }
}
