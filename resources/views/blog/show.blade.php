<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single blog post</title>
</head>

<body>
    @include('component.navbar')
    
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->subtitle }}</p>
    <p>{{ $blog->description }}</p>
</body>

</html>