<x-layout>
<x-slot:title>Izveidot ierakstu</x-slot:title>
<h1>Izveidot bloga ierakstu</h1>

<form action="/categories" method="POST">
@csrf
  
  <input name="category_name"> 

@error("category_name")
  <p>{{ $message }}</p>
@enderror
  <button>Saglabāt</button>
</form>
</x-layout>
               