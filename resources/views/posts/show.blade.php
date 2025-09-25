<x-app-layout title="Post">
    <x-heading.main>{{ $post->title }}</x-heading.main>

    <x-card.blog>
        <x-slot name="header">
            <img class="rounded-lg h-[30rem] min-h-full w-full object-cover"
                 src="{{ asset('storage/'. $post->image) }}"
                 alt="{{ $post->title }}"/>
            <livewire:posts.post-stats :post="$post"/>
        </x-slot>
        <div class="flex justify-between p-4">
            <div class="flex items-center text-primary text-xs gap-x-1">
                <img class="size-8 rounded-full object-cover mr-2"
                     src="{{ $post->author->profile_photo_url }}"
                     alt="{{ $post->author->username }}"/>
                <div> {{ __('by') }} <a href="#" class="text-secondary">
                        {{ ucfirst($post->author->username) }}</a> {{ __('published on') }}
                </div>
                <div> {{ $post->getFormattedDate() }}</div>
            </div>
            <div class="flex items-center text-primary text-xs gap-x-1">

                <livewire:actions.post-actions :post="$post"/>

                <x-badge.category :color="$post->category->color" class="rounded-l-lg">
                    {{ $post->category->name }}
                </x-badge.category>
            </div>
        </div>
        <div class="prose prose-orange dark:prose-invert prose-sm max-w-none">
            {!! $post->content !!}
        </div>
        <x-slot name="footer">
            <div class="flex items-center justify-between px-6">
                <div class="flex items-center gap-x-2 text-primary">
                    <div class="font-bold uppercase mr-2">{{ __('Share article') }}</div>
                    <x-link.icon
                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url(route('posts.show', $post->slug, false))) }}"
                            icon="facebook"
                            target="_blank"
                            rel="noopener noreferrer"
                    />
                    <x-link.icon
                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url(route('posts.show', $post->slug, false))) }}"
                            icon="linkedin"
                            target="_blank"
                            rel="noopener noreferrer"
                    />
                    <x-link.icon
                            href="https://twitter.com/intent/tweet?url={{ urlencode(url(route('posts.show', $post->slug, false))) }}&text={{ urlencode($post->title) }}"
                            icon="x"
                            target="_blank"
                            rel="noopener noreferrer"
                    />
                    <x-link.icon
                            href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' - ' . url(route('posts.show', $post->slug, false))) }}"
                            icon="message-circle"
                            target="_blank"
                            rel="noopener noreferrer"
                    />
                    <x-link.icon
                            href="mailto:?subject={{ rawurlencode($post->title) }}&body={{ rawurlencode('Check out this article: ' . url(route('posts.show', $post->slug, false))) }}"
                            icon="mail"
                    />
                </div>

                <div>
                    {{--                    <livewire:likes type="post" id="{{ $post->id }}"/>--}}
                </div>
            </div>
        </x-slot>
    </x-card.blog>
    <livewire:comments.comments-index :post="$post"/>
    <x-card.default>
        <div class="flex justify-between items-center">
            {{--            TODO: NEXT AND PREVIOUS POSTS--}}
            <div>previous</div>
            <div>next</div>
        </div>
    </x-card.default>
    <x-slot name="side">
        <livewire:categories.category-list/>
        {{--        TODO: post in same category--}}
    </x-slot>
</x-app-layout>
