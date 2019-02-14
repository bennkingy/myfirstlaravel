@extends('layout')

@section('content')

<h1>{{ $project->title }} : Project</h1>

<p>
<a href="/projects/{{ $project->id }}/edit">Edit</a>
</p>

@endsection