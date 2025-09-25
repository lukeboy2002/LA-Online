<div class="mt-4">
    <x-heading.sub>{{ __('Comments') }} ({{ $commentsCount }})</x-heading.sub>

    <livewire:comments.comment-create :post="$post"/>

    <x-card.default>
        @if (!$comments->isEmpty())
            @foreach($comments as $comment)
                <livewire:comments.comment-item :comment="$comment"
                                                wire:key="comment-{{$comment->id}}"/>
            @endforeach
            <div class="pt-4">
                {{ $comments->links() }}
            </div>
        @else
            <p class="text-primary text-sm p-4">{{ __('No comments yet') }}</p>
        @endif
    </x-card.default>
</div>
