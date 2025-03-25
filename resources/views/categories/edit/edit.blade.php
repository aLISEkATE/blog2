<x-layout>
  <x-slot:title>
    {{ $category->category_name }}
  </x-slot:title>
  <form action="/categories/{{ $category->id }}" method="POST">
    @csrf
    <label> 
        <input value="{{ old('category_name', $category->category_name) }}" name="category_name">  
    </label> 

    @error("category_name")
        <p>{{ $message }}</p>
    @enderror

    <button>Rediģēt</button>
</form>

</x-layout>
               