<?php

namespace App\Livewire\WifiUsers;

use App\Models\User;
use App\Models\WifiUser;
use Livewire\Component;
use Livewire\WithPagination;

class ShowWifiUsers extends Component
{
     use WithPagination;

    public $search;

    public function render()
    {
         $users = WifiUser::where('name', 'like', '%'.$this->search.'%')->orderBy('id', 'asc')->paginate();

        return view('livewire.wifi-users.show-wifi-users', compact('users'));
    }
}
