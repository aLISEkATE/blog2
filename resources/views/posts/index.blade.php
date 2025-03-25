<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Blogi</title>
</head>

<body>
<x-navigation></x-navigation>
<h1>Blogi</h1>  
<ul>

  @foreach ($posts as $post)
    <li><a href="posts/{{ $post->id }}">{{ $post->content }}<a></li>
  @endforeach


</body>
</html>