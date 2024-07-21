<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <article class="py-8 max-w-3xl">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="mt-4 font-light mb-3">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-yellow-600 hover:underline">&laquo; Back to blog</a>
  </article>
</x-layout>
