@extends('layout')

@section('content')

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">

        {{ csrf_field() }}

    <div>
    <input type="text" name="title" class="{{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project title" value="{{ old('title') }}" required>
    </div>

    <div>
        <textarea name="description" placeholder="Project description" id="" cols="30" rows="10" required>{{ old('description') }}</textarea>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

  </form>

  @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
  @endif

  @endsection