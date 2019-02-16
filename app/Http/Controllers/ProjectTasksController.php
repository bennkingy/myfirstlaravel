<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        // Task::create([

        //     'project_id' => $project->id,
        //     'description' => request('description')

        // ]);

        $attributes = request()->validate(['description' => 'required']);

        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task)
    {
        $method = request()->has('completed') ? $task-complete() : $task->incomplete();

        $task->method();

        return back();
    }
}
