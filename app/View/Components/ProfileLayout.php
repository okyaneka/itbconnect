<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ProfileLayout extends Component
{
    public $menus = [];
    public $profile_photo_url = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->profile_photo_url = Auth::user()->profile_photo_url;
        $this->menus = [
            [
                'text' => 'Profil Saya',
                'route' => 'profile.show',
                'icon' => 'ri-user-fill'
            ],
            [
                'text' => 'Bisnis saya',
                'route' => 'business.show',
                'icon' => 'ri-building-4-fill'
            ],
            [
                'text' => 'Pesan',
                'route' => 'message.show',
                'icon' => 'ri-question-answer-line'
            ],
            [
                'text' => 'Ayo Beresin Bareng',
                'route' => 'feature1.show',
                'icon' => 'ri-open-arm-line'
            ],
            [
                'text' => 'Loker, Project & Beasiswa',
                'route' => 'feature2.show',
                'icon' => 'ri-briefcase-fill'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profile-layout');
    }
}
