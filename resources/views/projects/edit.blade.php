@extends('layout')

@section('content')

<h1>Edit Project</h1>

<form method="POST" action="/projects/{{ $project->id }}">

    {{ method_field('PATCH') }}

    @csrf

<div>
<input type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
</div>

<div>
    <textarea name="description" placeholder="Project description" id="" cols="30" rows="10"></textarea>
</div>

<div>
    <button type="submit">Update Project</button>
</div>

</form>

<form method="POST" action="/projects/{{ $project->id }}">

@csrf

@method('DELETE')

<div>
    <button type="submit">Delete Project</button>
</div>

</form>


@endsection