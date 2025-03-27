<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>
  <form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    <label> 
        <input value="{{ old('content', $post->content) }}" name="content">  
    </label> 
    <label>Select Category:</label>
<select name="category_id">
    <option value="">Select a Category</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->category_name }}
        </option>
    @endforeach
</select>


    @error("category_id")
        <p>{{ $message }}</p>
    @enderror
    @error("content")
        <p>{{ $message }}</p>
    @enderror

    <button>Rediģēt</button>
</form>

</x-layout>
               