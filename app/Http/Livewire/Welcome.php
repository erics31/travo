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

    public function goToDetail($key)
    {
       return redirect()->to('detail?page='.$key);
    }
}
