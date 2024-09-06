<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <article class="py-5 max-w-screen-md border-b border-gray-300">
      <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">{{ $blog ['title'] }}</h3>
    <div>
      By
      <a class="hover:underline text-base text-gray-500" href="/authors/{{ $blog->author->username }}">{{ $blog->author->name }}</a> 
      in
      <a href="/categories/{{ $blog->category->slug }}" class="hover:underline text-base text-gray-500">{{ $blog->category->name }}</a>
      | {{ $blog->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">
      {{ $blog ['body'] }}
    </p>
    <a href="/blogs" class="font-medium text-gray-500 hover:underline">Back &laquo;</a>
  </article>
</x-layout>