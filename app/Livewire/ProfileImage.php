<?php

namespace App\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProfileImage extends Component
{
    use WithFileUploads;

    public User $user;

    public ?Profile $profile = null;

    public $image;

    public function Mount(User $user)
    {
        $this->user = $user;
        $this->profile = $user->profile;

        if ($this->profile) {
            $this->image = $this->profile->getFirstMediaUrl('profile_image');
        }
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:1024',
        ]);
    }

    public function render()
    {
        return view('livewire.profile-image');
    }

    /**
     * @throws FileDoesNotExist
     * @throws FileIsTooBig
     */
    public function storeImage(): RedirectResponse|Redirector
    {
        if (! $this->profile) {
            $this->profile = $this->user->profile()->create();
        }

        $this->profile->clearMediaCollection('profile_image');
        $this->profile->addMedia($this->image->getRealPath())->toMediaCollection('profile_image');

        return redirect()->route('profile.show', $this->user);
    }
}
