<?php

namespace App\Livewire\Components;

use Exception;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class TiptapEditor extends Component
{
    use WithFileUploads;

    public $content = '';

    public $placeholder = 'Start typing...';

    public $enableImageUpload = true;

    public $mediaModel = null;

    public $mediaCollection = 'tiptap';

    public $editorId;

    protected $listeners = [
        'tiptap-content-updated' => 'updateContent',
        'tiptap-upload-image' => 'uploadImage',
    ];

    public function mount($content = '', $placeholder = null, $enableImageUpload = true, $mediaModel = null, $mediaCollection = 'tiptap')
    {
        $this->content = $content ?? '';
        $this->placeholder = $placeholder ?? $this->placeholder;
        $this->enableImageUpload = $enableImageUpload;
        $this->mediaModel = $mediaModel;
        $this->mediaCollection = $mediaCollection;
        $this->editorId = 'tiptap_'.str_replace('-', '_', Str::random(8));
    }

    public function updateContent($content)
    {
        $this->content = $content;
        $this->dispatch('tiptap-updated', ['content' => $this->content]);
    }

    public function uploadImage($file)
    {
        if (! $this->enableImageUpload || ! $this->mediaModel) {
            return;
        }

        try {
            $this->validate([
                'file' => 'image|max:2048',
            ]);

            $media = $this->mediaModel
                ->addMediaFromRequest($file)
                ->toMediaCollection($this->mediaCollection);

            $this->dispatch('image-uploaded', [
                'url' => $media->getUrl(),
                'alt' => $media->name,
            ]);

        } catch (Exception $e) {
            $this->dispatch('image-upload-error', ['message' => $e->getMessage()]);
        }
    }

    public function render()
    {
        return view('livewire.components.tiptap-editor');
    }
}
