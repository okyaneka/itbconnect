<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileInformation extends Component
{
    public 
        $user, 
        $experiences = [], 
        $educations = [],
        $interests = [];

    public function __construct()
    {
        $this->addEdu();
        $this->addExp();
        $this->addInt();
        $this->user = Auth::user();
    }

    public function addExp()
    {
        array_push($this->experiences, [
            'profession' => null,
            'instantion' => null,
            'start' => null,
            'end' => null,
            'location' => null,
        ]);
    }

    public function addEdu()
    {
        array_push($this->educations, [
            'school' => null,
            'grade' => null,
            'major' => null,
            'start' => null,
            'end' => null,
        ]);
    }

    public function addInt()
    {
        array_push($this->interests, [
            'interest' => null
        ]);
    }

    public function deleteExp($key)
    {
        array_splice($this->experiences, $key, 1);
    }

    public function deleteEdu($key)
    {
        array_splice($this->educations, $key, 1);
    }

    public function deleteInt($key)
    {
        array_splice($this->interests, $key, 1);
    }

    public function save()
    {
        request()->session()->flash('flash.banner', 'Yay it works!');
        request()->session()->flash('flash.bannerStyle', 'success');
    }

    public function render()
    {
        return view('livewire.profile-information');
    }
}
