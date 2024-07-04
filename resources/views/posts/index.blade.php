<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Posts</h1>
    <a class="btn btn-primary mb-2" href="{{ route('posts.create') }}">Create New Post</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->body, 10, '...') }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
