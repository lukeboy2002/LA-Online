<x-card.blog>
    <x-slot name="header">
        <a href="{{ route('posts.show', $post->slug) }}" class="block overflow-hidden">
            <img class="rounded-lg w-full max-h-48 object-cover transition-transform duration-300 hover:scale-110"
                 src="{{ asset('storage/'. $post->image) }}"
                 alt="{{ $post->title }}"/>
            <livewire:posts.post-stats :post="$post"/>

        </a>
        <div class="absolute top-4 left-0">
            <x-badge.category :color="$post->category->color">
                {{ $post->category->name }}
            </x-badge.category>
        </div>
    </x-slot>
    <a href="{{ route('posts.show', $post->slug) }}"
       class="block truncate text-secondary font-secondary font-bold text-xl"
       title="{{ $post->title }}">
        {{ $post->title }}
    </a>

    <div class="flex flex-col gap-4 pt-4">
        <div class="flex items-center text-primary text-xs gap-x-1">
            <img class="size-8 rounded-full object-cover mr-2"
                 src="{{ $post->author->profile_photo_url }}"
                 alt="{{ $post->author->username }}"/>
            <div> {{__('by')}} <a href="#" class="text-secondary">
                    {{ ucfirst($post->author->username) }}</a> {{__('published on')}}
            </div>
            <div> {{ $post->getFormattedDate() }}</div>
        </div>
        <div class="text-primary text-sm">
            {!! $post->short_body !!}
        </div>
    </div>
    <x-slot name="footer">
        <a class="px-3 py-2 text-xs font-medium text-center text-primary bg-secondary rounded-lg hover:bg-secondary/60 focus:ring-4 focus:outline-none focus:ring-ring"
           href="{{ route('posts.show', $post->slug)  }}">
            {{ __('More') }}
        </a>
    </x-slot>
</x-card.blog>
