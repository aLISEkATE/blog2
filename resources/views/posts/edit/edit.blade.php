<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>
  <form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    <label> 
        <input value="{{ old('content', $todo->content) }}" name="content">  
    </label> 


    @error("completed")
        <p>{{ $message }}</p>
    @enderror
    @error("content")
        <p>{{ $message }}</p>
    @enderror

    <button>Rediģēt</button>
</form>

</x-layout>
               