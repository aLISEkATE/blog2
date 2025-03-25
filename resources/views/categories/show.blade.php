
<x-layout>
  <x-slot:title>
    {{ $category->category_name }}
  </x-slot:title>
  <h1>{{  $category->category_name }}</h1>
</ul>   
<a href="/categories/{{ $category->id }}/edit" >Rediģēt</a>

<form name="destroy" action="{{ $category->id }}" method="POST">
  @csrf 
  @method('DELETE')
<button>Delete</button>
  </form>
  
</x-layout>
               