<!DOCTYPE html>
<html>
    
<head>
    <title>Projects</title>
</head>

<body>
    <h1>Create a new project</h1>

    <form method="POST" action="/projects">

        {{ csrf_field() }}

    <div>
    <input type="text" name="title" class="{{ $errors->has('title') ? 'is-danger' : '' }}" placeholder="Project title">
    </div>

    <div>
        <textarea name="description" placeholder="Project description" id="" cols="30" rows="10" required></textarea>
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

</body>
</html>