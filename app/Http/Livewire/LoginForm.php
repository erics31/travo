<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{

    public $username;
    public $password;
    protected $rules = [
        'username' => 'required|min:6',
        'password' => 'required|email',
    ];
    public function render()
    {
        return view('livewire.login-form');
    }
    public function login(){
        $this->validate();
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeModal');
        $this->cleanVars();
    }
    public function forcedCloseModal()
    {
        // This is to reset our public variables
        $this->cleanVars();

        // These will reset our error bags
        $this->resetErrorBag();
        $this->resetValidation();
    }


    private function cleanVars()
    {
        $this->modelId = null;
        $this->title = null;
        $this->content = null;
        $this->featuredImage = null;
        $this->additionalPhotos = null;
    }
}
