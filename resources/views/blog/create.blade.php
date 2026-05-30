<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Add New Post</h1>

    <form action="{{route('blog.store')}}" method="POST">
        @csrf
        @method('POST')

        <!-- Title -->
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>

        <!-- Subtitle -->
        <div>
            <label for="subtitle">Subtitle:</label>
            <input type="text" id="subtitle" name="subtitle">
        </div>

        <!-- Description -->
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <button type="submit">Save Post</button>
    </form>
</body>
</html>
