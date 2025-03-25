<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>
  <form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    <label> 
        <input value="{{ old('content', $post->content) }}" name="content">  
    </label> 

    <label>
        Category unavailable
        <input name="category_id" type="hidden" value="1"> 
    <!--    <input name="category_id" value="{{ old('category_id', $post->category_id) }}">  --> 
    </label>

    @error("category_id")
        <p>{{ $message }}</p>
    @enderror
    @error("content")
        <p>{{ $message }}</p>
    @enderror

    <button>Rediģēt</button>
</form>

</x-layout>
               