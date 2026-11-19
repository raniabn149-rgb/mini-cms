<x-layout>
    <x-slot:title>{{ $heading }} - Mini-CMS</x-slot:title>

    <x-page-header title="{{ $heading }}" />

    <div class="space-y-6">
        @forelse ($posts as $post)
            <article class="rounded-lg border border-gray-200 p-6">
                <h2 class="text-xl font-bold">
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <p class="mt-2 text-sm text-gray-600">
                    Auteur : {{ $post->user?->name }}
                </p>

                @if ($post->category)
                    <p class="mt-2 text-sm text-gray-600">
                        Catégorie : {{ $post->category->name }}
                    </p>
                @endif

                @if ($post->excerpt)
                    <p class="mt-3 text-gray-700">{{ $post->excerpt }}</p>
                @endif

                @if ($post->tags->isNotEmpty())
                    <p class="mt-2 text-sm text-gray-600">
                        Tags :
                        @foreach ($post->tags as $tag)
                            {{ $tag->name }}@if (! $loop->last), @endif
                        @endforeach
                    </p>
                @endif
            </article>
        @empty
            <p class="text-gray-500">Aucun article pour l'instant.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $posts->links() }}
    </div>
</x-layout>