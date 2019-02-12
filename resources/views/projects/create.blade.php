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
        <input type="text" name="title" placeholder="Project title">
    </div>

    <div>
        <textarea name="description" placeholder="Project description" id="" cols="30" rows="10"></textarea>
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>

  </form>

</body>
</html>