<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot bloga ierakstu</h1>

<form action="/posts" method="POST">
@csrf
  <input name="content" />  

  <label>Select Category:</label>
  <select name="category_id">
    <option value="">Select a Category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">   {{ $category->category_name }}  </option>
    @endforeach
</select>

  @error("content")
  <p>{{ $message }}</p>
@enderror
@error("category_id")
  <p>{{ $message }}</p>
@enderror
  <button>Saglabāt</button>
</form>
</x-layout>
               