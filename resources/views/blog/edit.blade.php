<!DOCTYPE html>
<html>

<head>
    <title>Update Post</title>
</head>

<body>
    @include('component.navbar')
    <h1>Update Post</h1>
    <!-- Display validation errors -->
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form action="{{route('blog.update', $blog->id)}}" method="POST">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $blog->title }}" required>
        </div>

        <!-- Subtitle -->
        <div>
            <label for="subtitle">Subtitle:</label>
            <input type="text" id="subtitle" name="subtitle" value="{{ $blog->subtitle }}">
        </div>

        <!-- Description -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ $blog->description }}</textarea>
        </div>

        <button type="submit">Update Post</button>
    </form>
</body>

</html>