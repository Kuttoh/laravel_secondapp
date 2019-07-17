<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Mail\ProjectCreated;
use App\Projects;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Repositories\ProjectRepository;

class ProjectsController extends Controller
{

    protected $projectRepository;

    public function __construct(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;

        $this->middleware('auth')->only('store', 'update', 'destroy');
    }

    public function index()
    {
        if (Cache::has('projects')) {
            $projects = Cache::get('projects');

        } else {
            $projects = $this->projectRepository->orderedProjects();

            Cache::add('projects', $projects, 0);
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

        $project = $this->projectRepository->save($input);

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
        $this->projectRepository->update($request->all(), $id);

        return redirect('projects');
    }

    public function destroy($id)
    {
        $this->projectRepository->delete($id);

        return redirect('/projects');
    }
}
