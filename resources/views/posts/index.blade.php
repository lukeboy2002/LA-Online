<x-app-layout title="Blog">
    <x-heading.main>{{__('Our Blog')}}</x-heading.main>
    @can('create:posts')
        <div class="flex justify-end space-x-2 mb-4">
            <x-link.button href="{{ route('post.create') }}">{{__('New Post')}}</x-link.button>
        </div>
    @endcan
    <div class="mb-6">
        <livewire:posts.posts-index/>
    </div>

    <x-slot name="side">
        <livewire:categories.category-list/>
    </x-slot>
</x-app-layout>