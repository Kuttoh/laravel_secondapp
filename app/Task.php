<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table="tasks";

    protected $guarded=['id'];

    public function project()
    {
        $this->belongsTo(Projects::class,'projects_id');
    }
}
