<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class LoginForm extends Component
{

    public $username;
    public $password;
    protected $rules = [
        'username' => 'required|min:6',
        'password' => 'required',
    ];
    public function render()
    {
        return view('livewire.login-form');
    }
    public function login(){
        $this->validate();
        //now login
        if (Auth::attempt(['email'=>$this->username,'password'=>$this->password])) {
            return redirect('dashboard');
        }
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
