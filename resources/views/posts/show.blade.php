<x-app-layout title="Post">
    <x-heading.main>Our Blog</x-heading.main>

    <x-card.default>
        <div class="prose">
            {!! $post->content !!}
        </div>
    </x-card.default>
</x-app-layout>
