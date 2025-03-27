<x-layout>
  <x-slot:title>
    {{ $post->content }}
  </x-slot:title>
  
  <h1>{{ $post->content }}</h1>
  <h2>{{ $post->category->category_name }}</h2>

  <a href="/posts/{{ $post->id }}/edit">Rediģēt</a>

  <form name="destroy" action="{{ $post->id }}" method="POST">
    @csrf 
    @method('DELETE')
    <button>Delete</button>
  </form>

  <form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <textarea name="content" required></textarea>
    <button type="submit">Add Comment</button>
  </form>

  <h3>Comments:</h3>
  @foreach ($post->comments as $comment)
    <div class="comment"> 
     
      <p>{{ $comment->content }} <small class="date">{{ $comment->created_at->format('Y-m-d H:i') }}</small></p>
    
    </div>
  @endforeach

</x-layout>
