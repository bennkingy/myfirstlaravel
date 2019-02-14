@extends('layout')

@section('content')

<h1>{{ $project->title }} : Project</h1>

<p>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>

@if ($project->tasks->count())

    <h2>Project Tasks</h2>

        @foreach ($project->tasks as $task)
 
        <div>
            
            <form method="POST" action="/tasks/{{ $task->id }}">

                @method('PATCH')

                @csrf

                <label for="completed" class="{{ $task->completed ? 'is-completed' : '' }}">

                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                    {{ $task->description }}
                    
                </label>

            </form>

        </div>
                        
        @endforeach

@endif

@endsection