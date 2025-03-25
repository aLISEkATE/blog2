<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot bloga ierakstu</h1>

<form action="/posts" method="POST">
@csrf
  <input name="content" />  
  <input name="category_id" value="1"/>  
  <label for="category">Select Category:</label>

  @error("content")
  <p>{{ $message }}</p>
@enderror
@error("category_id")
  <p>{{ $message }}</p>
@enderror
  <button>Saglabāt</button>
</form>
</x-layout>
               