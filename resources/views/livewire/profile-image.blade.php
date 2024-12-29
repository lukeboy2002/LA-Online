<x-form-section submit="storeImage">
    <x-slot name="title">
        {{ __('Change profile image') }}
    </x-slot>

    <x-slot name="description">
        {{ __('This is the profile image above your profile page') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-4 sm:col-span-6">
            @if ($image && method_exists($image, 'temporaryUrl'))
                <img src="{{ $image->temporaryUrl() }}" class="w-full h-auto" alt=""/>
            @elseif($image)
                <img src="{{ $image }}" class="object-center mb-4 w-full h-auto" alt=""/>
            @endif

            <div wire:ignore
                 x-data
                 x-init="() => {
                FilePond.setOptions({
                    server: {
                        process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            @this.upload('image', file, load, error, progress)
                        },
                        revert: (filename, load) => {
                            @this.removeUpload('image', filename, load)
                        }
                    },
                    allowImagePreview: true,
                    imagePreviewMaxHeight: 256,
                    allowFileTypeValidation: true
                });
                FilePond.registerPlugin(FilePondPluginFileValidateType);
                FilePond.create($refs.input, {
                    acceptedFileTypes: ['image/jpeg', 'image/jpg', 'image/gif', 'image/png', 'image/webp']
                });
            }">
                <input type="file" x-ref="input" class="w-full">
            </div>
        </div>
        @error('image')
        <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="image">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
