<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Kategorijas</title>
</head>

<body>
<x-navigation></x-navigation>
<h1>Kategorijas</h1>  
<ul>

  @foreach ($categories as $category)
    <li><a href="categories/{{ $category->id }}">{{ $category->category_name }}<a></li>
  @endforeach


</body>
</html>