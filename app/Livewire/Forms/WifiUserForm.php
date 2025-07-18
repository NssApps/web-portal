<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class WifiUserForm extends Form
{
    //
    #[Validate('required|email', as: 'email')] 
    public $email;

    #[Validate('required|max:255', as: 'name')] 
    public $name;

    #[Validate('required|accepted', as: 'terms')]
    public $terms = false; 
}
