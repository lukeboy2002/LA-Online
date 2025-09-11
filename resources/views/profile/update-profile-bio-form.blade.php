<x-form-section submit="updateBiography">
    <x-slot name="title">

    </x-slot>

    <x-slot name="description">
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="city" value="{{ __('City') }}"/>
            <x-input id="city" type="text" class="mt-1 block w-full" wire:model="city"/>
            <x-input-error for="city" class="mt-2"/>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="biography" value="{{ __('Biography') }}"/>
            <textarea id="biography" wire:model="biography"
                      class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-xs"></textarea>
            <x-input-error for="biography" class="mt-2"/>
        </div>
        
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
