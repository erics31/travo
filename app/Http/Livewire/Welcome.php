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
    public function login()
    {
        Log::debug('we got the login');
        // $this->post->addLikeBy(auth()->user());
    }
}
