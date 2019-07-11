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

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::addGlobalScope('user_id', function ($builder) {
//            $builder->where('user_id', '=', 1)
//                    ->orderBy('title', 'asc');
////                    ->where('id', '<', 10)
//        });
//    }
}
