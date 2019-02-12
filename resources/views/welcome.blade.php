@extends('layout')

@section('content')

    <h1>My first section - {{ $title }}</h1>

    {{-- @empty(!$tasks)
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
            @endforeach
        </ul>
    @endempty --}}

@endsection