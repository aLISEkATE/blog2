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

  <form action="{{ route('comments.store', $post) }}" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="content">Comment</label>
        <textarea id="content" name="content" required>{{ old('content') }}</textarea>
    </div>
    <button type="submit">Post Comment</button>
</form>


  <h3>Comments:</h3>
  @foreach ($post->comments as $comment)
    <div class="comment"> 
     
      <p>{{ $comment->content }} <small class="date">{{ $comment->created_at->format('Y-m-d H:i') }}</small></p>
    
    </div>
  @endforeach

</x-layout>
