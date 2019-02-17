<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectsController extends Controller
{

    // auth()->ud() // 4
    // auth()->user() /// user session
    // auth()->check() // boolean

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $attributes =  request()->validate([

                'title' => ['required', 'min:3', 'max:255'],
                'description' => 'required'

            ]);

        $attributes['owner_id'] = auth()->id();
        
        Project::create($attributes);

        Mail::to($project->owner->email)->send(
            
            new ProjectCreated($project)

        );
    
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        abort_if($project->owner_id !== auth()->id(), 403);

        return view('projects.show', compact('project'));
    }
}
