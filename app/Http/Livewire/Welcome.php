<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Log;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome');
    }
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }
    public function login()
    {
        Log::debug($this->username);
        Log::debug('before validation');
        // $this->validate();

        Log::debug('after validation');
        // $this->post->addLikeBy(auth()->user());
    }
}
