<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class LandingPageComponent extends Component
{
    public function render()
    {
        return view('livewire.guest.landing-page-component')
        ->layout('layouts.layout-guest',  ['menu' => 'landing-page']);
    }
}
