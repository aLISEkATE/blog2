
<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>
  <h1>{{ $post->content }}</h1>
</ul>   
<a href="/posts/{{ $post->id }}/edit" >Rediģēt</a>

<form name="destroy" action="{{ $post->id }}" method="POST">
  @csrf 
  @method('DELETE')
<button>Delete</button>
  </form>
  
</x-layout>
               