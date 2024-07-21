<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)
    <article class="py-8 max-w-3xl border-b border-gray-300">
      <a href="/posts/{{ $post['slug'] }}" class="text-gray-900 hover:text-yellow-500">
        <h2 class="mb-1 text-3xl tracking-tight font-bold">{{ $post['title'] }}</h2>
      </a>
      <div class="text-base">
        <a href="/authors/{{ $post->author->username }}"
          class="hover:underline text-gray-500">{{ $post->author->name }}</a> in <a
          href="/categories/{{ $post->category->slug }}"
          class="hover:underline text-gray-500">{{ $post->category->name }}</a> |
        {{ $post->created_at->diffForHumans() }}
      </div>
      <p class="mt-4 font-light mb-2">{{ Str::limit($post['body'], 140) }}</p>
      <a href="/posts/{{ $post['slug'] }}" class="font-medium text-yellow-600 hover:underline">Read more &raquo;</a>
    </article>
  @endforeach
</x-layout>
