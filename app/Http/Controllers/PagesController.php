<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{
    public function home ()
    {
        return view('welcome', [
                'foo' => 'Page',
                'tasks'=> [
                    'Go to the market',
                    'Cook good food',
                    'Watch a movie',
                    'Sleeeeep!'
                ]
            ]);
    }

    public function contact()
    {
        return view('contact', [
            'offices' => [
                'CBD Office',
                'Liaison Office',
                'Chancery Office',
                'Westlands Office'
            ]]);
    }

    public function about()
    {
        return view('about');
    }

    public function media()
    {
        return view('media');
    }

    public function foundation()
    {
        return view('foundation', [
            'some' => 'Page'
        ]);
    }

    public function projects()
    {
        $projects = Project::all();

        return view('projects', compact('projects'));
    }
}
