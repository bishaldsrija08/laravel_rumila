<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <!-- Navbar -->
    @include('component.navbar')
    <h1>Blog Posts</h1>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Read More</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->subtitle }}</td>
            <td>{{ $blog->description }}</td>
            <td>
                <a href="{{ route('blog.edit', $blog->id) }}">Edit</a>
            </td>
            <td>
                <form action="{{route('blog.destroy', $blog->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
            <td>
                <a href="{{ route('blog.show', $blog->id) }}">Read More</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>