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
            
            <form method="POST" action="/completed-tasks/{{ $task->id }}">

                @csrf

                @if ($task->completed) 

                    @method('DELETE')

                @endif

                <label for="completed" class="{{ $task->completed ? 'is-completed' : '' }}">

                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                    {{ $task->description }}
                    
                </label>

            </form>

        </div>
                        
        @endforeach

@endif

<h3>Add Task</h3>
<div>
            
    <form method="POST" action="/projects/{{ $project->id }}/tasks">

        @method('POST')

        @csrf

        <label for="description">New Task</label>

        <input type="text" name="description" placeholder="New Task">

        <button type="submit">Add Task</button>

        @include('errors')
       
    </form>

</div>

@endsection