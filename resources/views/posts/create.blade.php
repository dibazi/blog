<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Create Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" class="form-control" id="body" placeholder="Enter body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
