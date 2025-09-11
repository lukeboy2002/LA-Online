<?php

namespace App\Livewire\Profile;

use App\Models\Profile;
use Auth;
use Livewire\Component;

class UpdateProfileBioForm extends Component
{
    public $city;

    public $biography;

    public function mount()
    {
        $profile = Auth::user()->profile;

        if ($profile) {
            $this->city = $profile->city;
            $this->biography = $profile->biography;
        } else {
            $this->biography = $this->biography ?? '';
        }
    }

    public function updateBiography()
    {
        $this->validate([
            'city' => 'nullable|string|max:255',
            'biography' => 'nullable|min:10',
        ]);

        Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'city' => $this->city,
                'biography' => $this->biography,
            ]
        );

        // Jetstream-style action message
        $this->dispatch('saved');
    }

    public function render()
    {
        return view('profile.update-profile-bio-form');
    }
}
