<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Mail\ProjectCreated;
use App\Mail\ProjectDeleted;
use App\Mail\ProjectEdited;
use Illuminate\Http\Request;
use App\Projects;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Repositories\ProjectRepository;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store', 'update','destroy');
    }

    public function index(ProjectRepository $projectRepository)
    {


//        $projects = Projects::where('user_id', auth()->id())->get();
//        $projects = Projects::all();
//
//        Cache::add('projects' , $projects);

        if(Cache::has('projects'))
        {
//            Log::info('from Cache');
               $projects =  Cache::get('projects');
        }
        else
        {
//            Log::info('from DB');
//            $projects = Projects::all(); //Global scope has been applied here
            $projects = $projectRepository->adminProjects(); //Using repository to implement query scopes
            Cache::add('projects' , $projects, 60);
        }


        return view('Projects.index', compact('projects'));
    }


    public function create()
    {
        return view('Projects.create');
    }


    public function store(StoreProject $request)
    {

        $input = $request->all();
        $input['user_id'] = auth()->id();

        $project = Projects::create($input);

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

//        Mail::to('kuttohisaac@gmail.com')->queue(
//            new ProjectEdited($project)
//        );

        return redirect('projects');

    }


    public function destroy($id)
    {

        $project = Projects::findOrFail($id);

//        Mail::to('kuttohisaac@gmail.com')->queue(
//            new ProjectDeleted($project)
//        );

        $project->delete();

        return redirect('/projects');
    }
}
