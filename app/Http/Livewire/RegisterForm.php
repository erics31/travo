<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Log;
use Auth;
class RegisterForm extends Component
{
    public $firstname;
    public $lastname;
    public $phonenumber;
    public $password;
    protected $rules = [
        'firstname' => 'required|min:4',
        'lastname' => 'required|min:4',
        'phonenumber' => 'required|min:10',
        'password' => 'required',
    ];
    public function render()
    {
        return view('livewire.register-form');
    }
    public function register(){
        $this->validate();
        app(\App\Actions\Fortify\CreateNewUser::class)->create([
            'name' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => 'app@gmail.com',
            'phone_number' => $this->phonenumber,
            'password' => $this->password,
        ]);
        if (Auth::attempt(['name'=>$this->firstname,'password'=>$this->password])) {
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
