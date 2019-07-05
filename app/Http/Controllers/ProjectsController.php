<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Mail\ProjectCreated;
use App\Mail\ProjectDeleted;
use App\Mail\ProjectEdited;
use Illuminate\Http\Request;
use App\Projects;
use Illuminate\Support\Facades\Mail;

class ProjectsController extends Controller
{

    public function index()
    {
        $projects = Projects::all();

        return view('Projects.index', compact('projects'));
    }


    public function create()
    {
        return view('Projects.create');
    }


    public function store(StoreProject $request)
    {

        $project = Projects::create($request->all());


        Mail::to('kuttohisaac@gmail.com')->queue(
            new ProjectCreated($project)
        );

        return redirect('/projects');
    }


    public function details(Projects $project)
    {
        return view('Projects.details', compact('project'));
    }


    public function edit(Projects $project)
    {
        return view('Projects.edit', compact('project'));

    }


    public function update(StoreProject $request, $id)
    {

        $project = Projects::findOrFail($id);

        $project->update($request->all());

        Mail::to('kuttohisaac@gmail.com')->queue(
            new ProjectEdited($project)
        );

        return redirect('projects');

    }


    public function destroy($id)
    {

        $project = Projects::findOrFail($id);

        Mail::to('kuttohisaac@gmail.com')->queue(
            new ProjectDeleted($project)
        );

        $project->delete();

        return redirect('/projects');
    }
}
