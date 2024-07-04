<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="my-4">Post Details</h1>
    <a class="btn btn-primary mb-2" href="{{ route('posts.index') }}">Back</a>
    <div class="card">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>
</div>
</body>
</html>
