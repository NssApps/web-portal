<?php

namespace App\Livewire\WifiUsers;

use App\Livewire\Forms\WifiUserForm;
use App\Models\WifiUser;
use Livewire\Component;

class CreateWifiUser extends Component
{
     public WifiUserForm $form;

    public function mount(){
    
    }

    public function render()
    {
        return view('livewire.wifi-users.create-wifi-user');
    }

    public function save()
    {
        
        $this->form->validate();

        WifiUser::create([
            'email' => $this->form->email, 
            'name' => $this->form->name, 
        ]);
        $this->form->reset();

        return redirect()->route('wifi-welcome')->with('success', "Access to WiFi granted.");
        
        
    }
}
