<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  @foreach ($blogs as $blog)
      
  <article class="py-5 max-w-screen-md border-b border-gray-300">
    <a class="hover:underline text-base text-gray-500" href="/blogs/{{ $blog['slug'] }}">
      <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">{{ $blog ['title'] }}</h3>
    </a>
    <div>
      By
      <a class="hover:underline text-base text-gray-500" href="/authors/{{ $blog->author->username }}">{{ $blog->author->name }}</a> 
      in
      <a href="/categories/{{ $blog->category->slug }}" class="hover:underline text-base text-gray-500">{{ $blog->category->name }}</a>
      | {{ $blog->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($blog ['body'], 200) }}</p>
    <a href="/blogs/{{ $blog['slug'] }}" class="font-medium text-gray-500 hover:underline">Read more &raquo;</a>
  </article>

  @endforeach
</x-layout>
        