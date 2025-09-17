<x-app-layout title="Categories">
    <x-heading.main>{{ __('Create Category') }}</x-heading.main>
    <div class="mb-6">
        <livewire:categories.category-create/>
    </div>
    <x-slot name="side">
        <div class="w-full flex flex-col gap-6 md:gap-12">
            <livewire:categories.category-list/>
        </div>
    </x-slot>
</x-app-layout>
